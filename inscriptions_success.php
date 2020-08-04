<?php session_start();
if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id_user= $_SESSION[ 'id_user' ];}

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmez votre inscription</title>
<link rel="shortcut icon" href="logo.PNG">
<!-- Required meta tags always come first -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="x-ua-compatible" content="ie=edge">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css">
 <!-- jQuery first, then Bootstrap JS. -->
 <script src="./js_fonctions/one.js"></script>
 <script src="./js_fonctions/two.js"></script>
<style type="text/css">
	.verif{
       border: none;
    border-radius: 1.5rem;
    width: 22%;
    background: #f5f6f6;
    font-weight: bold;
    color: #303952;
    cursor: pointer;
	}
	.btn .btn-primary .btn-sm :hover{
	 color: #303952;
    background-color:#d1d8e0;
    border-radius: 1.5rem;
	}
</style>
</head>
<body style="background-image: url('./images/bac.JPG');background-repeat: no-repeat;background-size:100%;height: 600px; ">
<div class="container">
<?php
$id_user = $_SESSION['id_user'];
if ($id_user == 2)
{// dans le cas ou c'est l'admin
$lien = "./aide_admin.html";
}else
{
$lien = "./aide_user.html";
}

 echo '<br> <br> <br> <div class="jumbotron text-center col-md-8 offset-md-2"  style=" background: -webkit-linear-gradient(top,#303952,#a5b1c2);  -webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
-moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);  border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem; border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;">
  <h1 class="display-3" style=" color : #f5f6f6;">Inscription effectuée !</h1> <br> <br>
  <p class="lead" style=" color : #f5f6f6;"> Votre inscription a bien été prise en compte. Nous vous enverrons un e-mail pour confirmer votre inscription .<br><strong>Veuillez vérifier votre boîte e-mail.</strong></p>
  <p class="lead" style=" color : #f5f6f6;">
    <a class="btn btn-primary btn-sm verif" href="./renvoyer.php?id_user='.$id_user.'" role="button">Renvoyer</a>
  </p>
  <hr>
  <p style=" color : #f5f6f6;">
    Pour plus d\'informations, veuillez consulter <a href='.$lien.' style=" color : #d1d8e0;"> l\'aide en ligne </a>. <a href=""></a>
  </p>
</div>';
 ?>
 </div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$nomBDD = "projet";

// Créer connexion
$conn = mysqli_connect($servername, $username, $password,$nomBDD);

//Envoi d'un mail
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
$redirect="localhost/projet/inscriptions_confirm.php";
//les infos du jour de l'inscription IMPORTANT
        $Err="";
        $jour = jour(gmdate("l"));
        $numj=gmdate("d");
        $mois=mois(gmdate("F"));
        $an=gmdate("Y");
        $time =gmdate("h:i A");
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
?>
