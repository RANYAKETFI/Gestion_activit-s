
<!DOCTYPE html>
<?php
session_start(); //toutes vos pages doivent commencer par session_start
if (empty($_SESSION['id_user'])) echo "<script> location.href='./connexion.php'; </script>";
else $id_user= $_SESSION['id_user'];

?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Modification</title>
  <!-- Specific Page Vendor CSS -->
    <link rel="shortcut icon" href="logo.PNG">
    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.7.2-web/css/all.min.css">
    <style>
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
      height: 80 %;
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
      color: #3C4858;
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

    body {
      background-image: url('background.JPG');
      background-repeat: repeat-y	;
      background-size:100% ;
      height: 100%;
    }
    .jumbotron{
       -webkit-box-shadow: 0px 0px 200px 50px rgba(245,246,246,1);
       padding: 25px;   border-radius: 2rem;
    }
    .container{
    width: 60%;
    margin-top: 7%;
    padding: 25px;
    margin-right: auto; margin-left:30% ;
    position: relative;}
    </style>
</head>

<body style="background-color: #d1d8e0;">
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  $dbname = "projet";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  //$id_user=2;
  if ($id_user == 2 ) // si c l'admin
  {
    $aide="./aide_admin.php";
  echo '
      <div class="sidebar" >

      <div class="logo">
        <a href="" class="simple-text">
          <img src="logo.PNG" alt="logo_équipe_21" height="100" width="100">
        </a>
      </div>

        <div class="sidebar-wrapper">
        <ul class="nav">
        <li  class="active">
            <a href=" recupereradmin.php">
              <i class="fas fa-home"></i>
                <p>Accueil</p>
            </a>
        </li>
        <li>
            <a href="reservation.php>
              <i class="fas fa-hourglass"></i>
                <p>Réserver</p>
            </a>
        </li>
        <li>
            <a href="import.php">
                  <i class="fas fa-calendar"></i>
                <p>Mettre à jour le calendrier</p>
            </a>
        </li>
        <li>
            <a href="VisuPeriode.php">
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
           <a href="statUser.php">
             <i class="fas fa-chart-bar"></i>
               <p>Statistiques par utilisateur</p>
           </a>
       </li>
       <li>
           <a href="statPeriode.php">
             <i class="fas fa-chart-line"></i>
               <p>Statistiques par période</p>
           </a>
       </li>

        <li>
            <a href="modif_nom.php">
              <i class="fas fa-cogs"></i>
                <p>Modifier mon nom d'."'".'utilisateur</p>
            </a>
        </li>
        <li>
           <a href="modif_mdp.php">
             <i class="fas fa-tools"> </i>
               <p>Modifier mon mot de passe</p>
           </a>
       </li>
        <li>
            <a href="deconnexion.php">
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
      </div>';
    }
    else
    { $aide="./aide_user.php";
      // c'est un utilisateur
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
        }}
      echo '
          <div class="sidebar" >

          <div class="logo">
            <a href="" class="simple-text">
              <img src="logo.PNG" alt="logo_équipe_21" height="100" width="100">
            </a>
          </div>

            <div class="sidebar-wrapper">
            <ul class="nav">
            <li class="active">
                <a href="accueil_user.php">
                  <i class="fas fa-home"></i>
                    <p>Accueil</p>
                </a>
            </li>
            <li>
                <a href="reservation.php">
                  <i class="fas fa-hourglass"></i>
                    <p>Réserver</p>
                </a>
            </li>
            <li>
                <a href="VisuPeriode.php">
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
                <a href="'.$lien.'">
                  <i class="fas fa-cogs"></i>
                    <p>Modifier mon nom d'."'".'utilisateur</p>
                </a>
            </li>
            <li>
               <a href="modif_mdp.php">
                 <i class="fas fa-tools"> </i>
                   <p>Modifier mon mot de passe</p>
               </a>
           </li>
            <li>
                <a href="deconnexion.php">
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
          </div>';
    }


    echo '<div class=" container"  > <div class="jumbotron text-center" style="background-color : #303952">
    <h1 class="display-3" style="color : #f5f6f6">  Modification échouée !</h1>  <br> <br>
    <p class="lead" style=" color : #f5f6f6;">La salle réservée n\'est pas disponible à la date ou/et l\'heure que vous avez choisi.</p>
    <br> <br>
    <hr>
    <p style="color : #f5f6f6" >
      Pour plus d'."'".'informations, veuillez consulter <a href='.$aide.' style="color : #85d3c5"> l'."'".'aide en ligne </a> de notre application.
    </p>
    <p class="lead" style="color : #f5f6f6">
      <a class="btn btn-primary btn-sm" href="accueil_user.php" role="button" style="background-color : #85d3c5; border : none;  padding: 10px 28px; font-size: 18px; border-radius : 12px; color : #303952 " >Retour</a>
    </p>
  </div> </div>';

   ?>




<!-- Theme Base, Components and Settings -->

<script src="jq/jquery-3.3.1.min.js"></script>
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>






</body>

</html>
