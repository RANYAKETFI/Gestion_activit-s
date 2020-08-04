<?php session_start();
if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id_user= $_SESSION[ 'id_user' ];}
?>
<!DOCTYPE html>
<html>
<head>
<title>Inscription confirmée </title>
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

$id_user = $_GET['id_user'];
$_SESSION[ 'id_user' ]=$id_user;
if ($id_user == 2)
{ // dans le cas ou c'est l'admin
$lien = "./aide_admin.php";
$accueil="./recuperer_admin.php";
}else
{
$lien = "./aide_user.php";
$accueil="./accueil_user.php";
}
$servername = "localhost";
$username = "root";
$password = "";
$nomBDD = "projet";

// Créer connexion
$conn = mysqli_connect($servername, $username, $password,$nomBDD);

$rqt="UPDATE `user` SET `confirm` = '1' WHERE `user`.`id_user` = '$id_user';"; //Confirmation de l'inscriptio nde l'utilisateur dans la BDD
$res = mysqli_query($conn,$rqt);
// If ! res il y a un problème


 echo '<br> <br> <br> <div class="jumbotron text-center col-md-8 offset-md-2"  style=" background: -webkit-linear-gradient(top,#303952,#a5b1c2);  -webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
-moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);  border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem; border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;">
  <h1 class="display-3" style=" color : #f5f6f6;">Inscription réussie !</h1> <br>
<br>
  <p class="lead" style=" color : #f5f6f6;"> Votre inscription a bien été confirmée. Bienvenue sur Book At ESI ! Pour consulter votre page, cliquez sur ce bouton.</p>
  <p class="lead" style=" color : #f5f6f6;">
    <a class="btn btn-primary btn-sm verif" href="'.$accueil.'?id_user='.$id_user.'" role="button">Accueil</a>
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
