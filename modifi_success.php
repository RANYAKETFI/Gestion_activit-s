<?php session_start(); 
if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id_user= $_SESSION[ 'id_user' ];} 
   
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation modification</title>
<link rel="shortcut icon" href="logo.PNG">
<!-- Required meta tags always come first -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="x-ua-compatible" content="ie=edge">

 <!-- Bootstrap CSS -->
 <link href="./nav/fontawsome/css/all.css" rel="stylesheet">
    <!-- Bootstrap core CSS     -->
 <link rel="stylesheet" href="./nav/bootstrap.min.css">

 <!-- jQuery first, then Bootstrap JS. -->
 <script src="./js_fonctions/one.js"></script>
 <script src="./js_fonctions/two.js"></script>
<style type="text/css">
	.verif{
       border: none;
    border-radius: 1.5rem;
    width: 22%;
    background: #85d3c5;
    font-weight: bold;
    color: #303952;
    cursor: pointer;
	}
	.btn .btn-primary .btn-sm :hover{
	 color: #303952;
    background-color:#d1d8e0;
    border-radius: 1.5rem;
	}
  /*********************************************************************************************/
      .wrapper {
  position: relative;
  top: 0;
  height: 100vh;
}

.sidebar,
.off-canvas-sidebar {
  position: fixed;
  background: #303952;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.sidebar .sidebar-wrapper,
.off-canvas-sidebar .sidebar-wrapper {
  position: relative;
    height: 80%;
  overflow: auto;
  width: 260px;
  z-index: 4;
}
.sidebar .logo-tim,
.off-canvas-sidebar .logo-tim {
  border-radius: 50%;
  border: 1px solid #333;
  display: block;
  height: 61px;
  width: 61px;
  float: left;
  overflow: hidden;
}
.sidebar .logo-tim img,
.off-canvas-sidebar .logo-tim img {
  width: 60px;
  height: 60px;
}
.sidebar .nav,
.off-canvas-sidebar .nav {
  margin-top: 20px;
}
.sidebar .nav li > a,
.off-canvas-sidebar .nav li > a {
  margin: 10px 15px;
  border-radius: 3px;
  color: #d1d8e0;
}
.sidebar .nav li:hover > a,
.off-canvas-sidebar .nav li:hover > a {
  background: #d1d8e0;
  color: #303952;
}
.sidebar .nav li.active > a,
.off-canvas-sidebar .nav li.active > a {
  color: #f5f6f6;
}
.sidebar .nav li.active > a i,
.off-canvas-sidebar .nav li.active > a i {
  color: #f5f6f6;
}
.sidebar .nav p,
.off-canvas-sidebar .nav p {
  margin: 0;
  line-height: 30px;
  font-size: 14px;
}
.sidebar .nav i,
.off-canvas-sidebar .nav i {
  font-size: 24px;
  float: left;
  margin-right: 15px;
  line-height: 30px;
  width: 30px;
  text-align: center;
  color: #a9afbb;
}
.sidebar .sidebar-background,
.off-canvas-sidebar .sidebar-background {
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  display: block;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center center;
}
.sidebar .sidebar-background:after,
.off-canvas-sidebar .sidebar-background:after {
  position: absolute;
  z-index: 3;
  width: 100%;
  height: 100%;
  content: "";
  display: block;
  background: #f5f6f6;
  opacity: .93;
}
.sidebar .logo,
.off-canvas-sidebar .logo {
  position: relative;
  padding: 15px 15px;
  z-index: 4;
}
.sidebar .logo:after,
.off-canvas-sidebar .logo:after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 10%;
  height: 1px;
  width: 80%;
  background-color: rgba(180, 180, 180, 0.3);
}
.sidebar .logo p,
.off-canvas-sidebar .logo p {
  float: left;
  font-size: 20px;
  margin: 10px 10px;
  color: #f5f6f6;
  line-height: 20px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.sidebar .logo .simple-text,
.off-canvas-sidebar .logo .simple-text {
  text-transform: uppercase;
  padding: 5px 0px;
  display: block;
  font-size: 18px;
  color: #3C4858;
  text-align: center;
  font-weight: 400;
  line-height: 30px;
}
.sidebar .logo-tim,
.off-canvas-sidebar .logo-tim {
  border-radius: 50%;
  border: 1px solid #333;
  display: block;
  height: 61px;
  width: 61px;
  float: left;
  overflow: hidden;
}
.sidebar .logo-tim img,
.off-canvas-sidebar .logo-tim img {
  width: 60px;
  height: 60px;
}
.sidebar:after, .sidebar:before,
.off-canvas-sidebar:after,
.off-canvas-sidebar:before {
  display: block;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 2;
}
.sidebar:before,
.off-canvas-sidebar:before {
  opacity: .33;
}
.sidebar:after,
.off-canvas-sidebar:after {
  z-index: 3;
  opacity: 1;
}
.sidebar[data-image]:after, .sidebar.has-image:after,
.off-canvas-sidebar[data-image]:after,
.off-canvas-sidebar.has-image:after {
  opacity: .77;
}
.sidebar .nav li.active a,
.off-canvas-sideba .nav li.active a {
  background-color: #07756a;
  box-shadow: 0 12px 20px -10px rgba(0, 188, 212, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(0, 188, 212, 0.2);
}

.off-canvas-sidebar .nav > li > a,
.off-canvas-sidebar .nav > li > a:hover {
  color: #f5f6f6;
}
.off-canvas-sidebar .nav > li > a:focus {
  background: rgba(200, 200, 200, 0.2);
}
</style>
</head>
<body style="background-image: url('./images/bac.JPG');background-repeat: no-repeat;background-size:100%;height: 600px; ">
<div class="container">
<?php


// on crée une connexion
$servername = "localhost";
$username = "root";
$password = "";
$nomBDD = "projet";

// Créer connexion
$conn = mysqli_connect($servername, $username, $password,$nomBDD);

if ($id_user == 2 ) // L'Admin
{
echo '<div class="wrapper" >

      <div class="sidebar" >

      <div class="logo">
        <a href="" class="simple-text">
          <img src="logo.PNG" alt="logo_équipe_21" height="100" width="100">
        </a>
      </div>

        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li>
                      <a href="./recupereradmin.php">
                        <i class="fas fa-home"></i>
                          <p>Accueil</p>
                      </a>
                  </li>
                  <li>
                      <a href="./reservation.php">
                        <i class="fas fa-hourglass"></i>
                          <p>Réserver</p>
                      </a>
                  </li>
                  <li>
                      <a href="./import.php">
                            <i class="fas fa-calendar"></i>
                          <p>Mettre à jour le calendrier</p>
                      </a>
                  </li>
                  <li>
                      <a href="./VisuPeriode.php">
                            <i class="fas fa-calendar-check"></i>
                          <p>Visualisation par période</p>
                      </a>
                  </li>
                  <li>
                      <a href="VisuSalle.php">
                        <i class="fas fa-calendar-week"></i>
                          <p>Visualisation par salle </p>
                      </a>
                  </li>

                  <li>
                     <a href="./statUser.php">
                       <i class="fas fa-chart-bar"></i>
                         <p>Statistiques par utilisateur</p>
                     </a>
                 </li>
                 <li>
                     <a href="./statPeriode.php">
                       <i class="fas fa-chart-line"></i>
                         <p>Statistiques par période</p>
                     </a>
                 </li>

                  <li>
                      <a href="./modif_nom.php">
                        <i class="fas fa-cogs"></i>
                          <p>Modifier mon nom d\'utilisateur</p>
                      </a>
                  </li>
                  <li  class="active">
                     <a href="./modif_mdp.php">
                       <i class="fas fa-tools"> </i>
                         <p>Modifier mon mot de passe</p>
                     </a>
                 </li>
                  <li>
                      <a href="./deconnexion.php">
                          <i class="fas fa-sign-out-alt"></i>
                          <p>Déconnexion</p>
                      </a>
                  </li>
                  <li >
                      <a href="./aide_admin.php">
                          <i class="fas fa-question-circle"></i>
                          <p>Aide</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>

  </div>';
  }
  else
  {  // c'est un utilisateur
// on vérifie dans le cas ou c'est un club

   $rqt3 = "SELECT  `profession` FROM `user` WHERE id_user='$id_user'";
  $res3 = mysqli_query($conn,$rqt3);

  if (mysqli_num_rows($res3)=="0") {
        echo "aucune profession";
    }
  else
  {
      $ligne = mysqli_fetch_assoc($res3);
      $pro = $ligne["profession"];
      if ( $pro == "Club")
      {
          $lien = "./modif_nomclub.php";
        }
        else
        {
          $lien ="./modif_nom.php";
        }
         echo '<div class="wrapper" >

      <div class="sidebar" >

      <div class="logo">
        <a href="#" class="simple-text">
          <img src="logo.PNG" alt="logo_équipe_21" height="100" width="100">
        </a>
      </div>

        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li>
                      <a href="./accueil_user.php">
                        <i class="fas fa-home"></i>
                          <p>Accueil</p>
                      </a>
                  </li>
                  <li>
                      <a href="./reservation.php">
                        <i class="fas fa-hourglass"></i>
                          <p>Réserver</p>
                      </a>
                  </li>
                  <li>
                      <a href="./VisuPeriode.php">
                            <i class="fas fa-calendar-check"></i>
                          <p>Visualisation par période</p>
                      </a>
                  </li>
                  <li>
                      <a href="./VisuSalle.php">
                        <i class="fas fa-calendar-week"></i>
                          <p>Visualisation par salle </p>
                      </a>
                  </li>


                  <li>
                      <a href="'.$lien.'">
                        <i class="fas fa-cogs"></i>
                          <p>Modifier mon nom d\'utilisateur</p>
                      </a>
                  </li>
                  <li  class="active">
                     <a href="./modif_mdp.php">
                       <i class="fas fa-tools"> </i>
                         <p>Modifier mon mot de passe</p>
                     </a>
                 </li>
                  <li>
                      <a href="./deconnexion.php">
                          <i class="fas fa-sign-out-alt"></i>
                          <p>Déconnexion</p>
                      </a>
                  </li>
                  <li >
                      <a href="./aide_user.php">
                          <i class="fas fa-question-circle"></i>
                          <p>Aide</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>

  </div>';
  }

  }

/***************************************************************************************************/
if ($id_user == 2 ) // L'Admin
{
  $aide = "./aide_admin.php";
  $acc = "./recupereradmin.php";
}else{
  $aide = "./aide_user.php";
  $acc = "./accueil_user.php";

}
 echo '<br> <br> <br> <br> <br> <div class="jumbotron text-center col-md-8 offset-md-2"  style=" background: -webkit-linear-gradient(top,#303952,#a5b1c2);  -webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
-moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);  border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem; border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;margin-left: 360px;width:750px;margin-top:-620px;">
  <h1 class="display-3" style=" color : #f5f6f6;">Modification effectuée</h1> <br>
<br>
  <h2 class="lead" style=" color : #f5f6f6;"> Votre mot de passe a bien été modifié ! Pour revenir vers votre profil cliquer sur ce boutton.</h2>
  <p class="lead" style=" color : #f5f6f6;">
    <a class="btn btn-primary btn-sm verif" href='.$acc.' role="button">Accueil</a>
  </p>
  <hr>
  <p style=" color : #f5f6f6;">
    Pour plus d\'informations veuillez consulter <a href='.$aide.' style=" color : #85d3c5;"> l\'aide en ligne </a> de notre application. <a href=""></a>
  </p>

</div>';

 ?>

 </div>
</body>
</html>
