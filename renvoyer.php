<?php

$servername = "localhost";
$username = "root";
$password = "";
$nomBDD = "projet";

// Créer connexion
$conn = mysqli_connect($servername, $username, $password,$nomBDD);

function jour($day)
//Traduit le jour de l'Anglais au Français
{
  switch ($day){
    case "Sunday":
    return "dimanche" ;
    break;

    case "Monday":
    return "lundi" ;
    break;

    case "Tuesday":
    return "mardi";
    break;

    case "Wednesday":
    return "mercredi";
    break;

    case "Thursday":
    return "jeudi";
    break;

    case "Friday":
    return "vendredi";
    break;

    case "Saturday":
    return "samedi";
    break;
  }
}

function mois($month)
//Traduit le mois de l'Anglais au Français
{
  switch ($month)
  {
    case "January":
    return "Janvier";
    break;

    case "February":
    return "Février";
    break;

    case "March":
    return "Mars";
    break;

    case "April":
    return "Avril";
    break;

    case "May":
    return "Mai";
    break;

    case "June":
    return "Juin";
    break;

    case "July":
    return "Juillet";
    break;

    case "August":
    return "Août";
    break;

    case "September":
    return "Septembre";
    break;

    case "October":
    return "Octobre";
    break;

    case "November":
    return "Novembre";
    break;

    case "December":
    return "Décembre";
    break;
  }
}

function inscript_confirm($to,$jour,$numj,$mois,$an,$time,$redirect) //Confirmation de l'inscription
{
  global $conn;
  $msgErr="";
  $rqt ="SELECT nom_user,id_user FROM user WHERE email = '$to'";
  $res = mysqli_query($conn,$rqt);
  if (mysqli_num_rows($res)=="0") {  //L'utilisateur n'existe pas
    $msgErr="Erreur";
  }
  else { // L'email introduit existe et est correct, donc on vérifie le mot de passe introduit
    $row = mysqli_fetch_assoc($res);
	  $id=$row['id_user'];
    $message='
    <meta charset="utf-8">
    <table>
     <tr>
      <th><img src="http://i63.tinypic.com/33468m0.png" style="width:120px;height:100px;" alt="logo"> </th>
      <th style="color :#07756a;font-family:calibri;font-size:200%"> &nbsp; Book At ESI </th>
     </tr>
    </table>
    <div style= "color:	#d1d8e0; font-size:200%;">_______________________________</div> <br>
    <div style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    Bonjour '. $row["nom_user"].',</div>
    <p style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    <br><br>
    Vous vous êtes inscrit à <span style="color :#003333;font-family:tahoma;"> Book At ESI</span>, '.$jour.' '.$numj.' '.$mois. ' '.$an. ', '.$time.' (GMT)  <br><br> </p>
    <p style= "textalign:center; color:	#383838; font-family:tahoma; font-size:125%;" >
    &nbsp; <strong> Si vous l’avez pas fait,</strong> ne tenez pas compte de cet e-mail. <br>
    &nbsp; <strong> Si vous l’avez fait,</strong> veuillez <a href="'.$redirect.'?id_user='.$id.'"style= "color:#003333;"> <strong> confirmer votre inscription.</strong></a>
    <br> <br> <br>
    Merci, <br> <br>
    L’équipe Sécurité Book At ESI <br>  <br> <br>
    </p> ';
    $headers = 'From: dirteam21@gmail.com' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8';
   if(!(mail($to, 'Confirmation de votre inscription', $message, $headers)))  {$msgErr="Email sending failed";}
   return array("err" => $msgErr, "id" => $row["id_user"]);
  }
}

//les infos du jour de l'inscription IMPORTANT
$redirect="localhost/Projet/inscriptions_confirm.php";
        $Err="";
        $jour = jour(gmdate("l"));
        $numj=gmdate("d");
        $mois=mois(gmdate("F"));
        $an=gmdate("Y");
        $time =gmdate("h:i A");
        $id_user = $_GET['id_user'];
        if ($id_user == 2)
        { // dans le cas ou c'est l'admin
        $lien = "./aide_admin.html";
        }else
        {
        $lien = "./aide_user.html";
        }
        $rqt ="SELECT email FROM user WHERE id_user = '$id_user'";
        $res = mysqli_query($conn,$rqt);
        if (mysqli_num_rows($res)=="0") {  //L'utilisateur n'existe pas
          $Err="Erreur";
        }
        else { // L'email introduit existe et est correct, donc on vérifie le mot de passe introduit
          $row = mysqli_fetch_assoc($res);
      	  $to=$row['email'];
	     	  $insc=inscript_confirm($to,$jour,$numj,$mois,$an,$time,$redirect);
          $Err=$Err.$insc['err']; //Le message d'erreur final
        }
        session_start();
        $_SESSION[ 'id_user' ]=$id_user ;
        echo "<script> location.href='./inscriptions_success.php'; </script>";
?>
