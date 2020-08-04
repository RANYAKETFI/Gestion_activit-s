<?php session_start();
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

function mdp_oub($to) // MOT DE PASSE oublié
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$nomBDD = "projet";

	// Créer connexion
	$conn = mysqli_connect($servername, $username, $password,$nomBDD);

  $msgErr="";
  $rqt ="SELECT nom_user,mdp FROM user WHERE email = '$to'";
  $res = mysqli_query($conn,$rqt);
  if (mysqli_num_rows($res)=="0") {  //L'utilisateur n'existe pas
    $msgErr="Erreur. Il n'existe pas de compte avec l'adresse e-mail que vous avez introduit. Veuillez introduire une adresse e-mail correcte.";
  }
  else { // L'email introduit existe et est correct
    $row = mysqli_fetch_assoc($res);
    $message='
    <meta charset="utf-8">
    <table>
     <tr>
      <th><img src="http://i63.tinypic.com/33468m0.png" style="width:120px;height:100px;" > </th>
      <th style="color :#07756a;font-family:calibri;font-size:200%"> &nbsp; &nbsp; &nbsp;Book At ESI </th>
     </tr>
    </table>
    <div style= "color:	#d1d8e0; font-size:200%;">_______________________________</div> <br>
    <div style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    Bonjour '. $row["nom_user"].',</div>
    <p style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    <br><br>
    Nous avons reçu une notification que vous avez oublié votre mot de passe, '.jour(gmdate("l")).' '.gmdate("d").' '.mois(gmdate("F")). ' '.gmdate("Y"). ', '.gmdate("h:i A").' (GMT)  <br><br> </p>
    <p style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    &nbsp; &nbsp; Voici votre mot de passe: <strong>'.$row["mdp"].'</strong>. <br> <br>
    Merci, <br> <br>
    L’équipe Sécurité Book At ESI <br>  <br> <br>
    </p> ';
    $headers = 'From: dirteam21@gmail.com' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8';
if(mail($to, $row["nom_user"].', vous avez oublié votre mot de passe.', $message, $headers))
    $msgErr="Email sent";
else
    $msgErr="Email sending failed";
}
return $msgErr;
}
$email=$_GET['email'];
mdp_oub($email);
//--------- PAGE DE CONNEXION
echo "<script> location.href='deconnexion.php'; </script>";
// on le redirige vers la déconnexion pour protéger son compte en déconnectant
//------------- PAGE D'ACCUEIL
if ($id_user==2) echo "<script> location.href='recupereradmin.php'; </script>";
else echo "<script> location.href='recup_user.php'; </script>";
?>
