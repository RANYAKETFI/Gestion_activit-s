<?php
   session_start();
   $_SESSION['vis_sal'] = $_POST["salle"];
   if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$iduser= $_SESSION['id_user'];} 
   
   
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title> Visualisation par salle </title>
    <link rel="shortcut icon" href="images/logo.PNG">
          <meta charset="utf-8">
      <link rel="stylesheet" href="fullcalendar-3.4.0/fullcalendar.css" />
      <script src="fullcalendar-3.4.0/lib/jquery.min.js"> </script>
      <script src="fullcalendar-3.4.0/lib/jquery-ui.min.js"> </script>
      <script src="fullcalendar-3.4.0/lib/moment.min.js"> </script>
      <script src="fullcalendar-3.4.0/fullcalendar.min.js"> </script>
    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
      <link href="fontawsome/css/all.css" rel="stylesheet">

  <style>
  body {
    line-height: 20px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 100;
    font-size: 20px;
    color: white;
    background-image: url('images/background.JPG');
         background-repeat: repeat-y	;
         background-size:100% ;
         height: 100%;
         }

  #calendar-container {
    width: 60%;
    padding:25px;
    background: -webkit-linear-gradient(top,#303952,#303952,#a5b1c2);
    border-radius: 2rem;
    margin-top: 10%;
    margin-right: auto; margin-left:30% ;
    position: relative;
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
  </style>
  <script>
  $(document).ready(function() {

 var calendar = $('#calendar').fullCalendar({

   editable:true,
       header:{
        left:'prev,next today',
        center:'title',
        right:'month,agendaWeek,agendaDay'
      },
      height: 700,
      eventLimit: 3,
       eventClick: function (event, jsEvent) {
         alert('Événement : '+ event.title );},
     events: 'visualisationsalle.php',
     eventColor:'#07756a',
 });
});


  </script>
  </head>
  <body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="projet";
$conn = mysqli_connect($servername, $username, $password,$db);
//creer connexion
    if ($iduser == 2 )
 // L'Admin
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
                  <li   class="active">
                      <a href="./VisuSalle.php">
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
                  <li >
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
   $rqt3 = "SELECT  `profession` FROM `user` WHERE id_user='$iduser'";
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
                  <li   class="active">
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
                  <li>
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
      ?>
    <div id='calendar-container'>
  <div id='calendar'>
    Salle : <?php
      function crop($nom){
        //croping the name
        $ind=substr($nom,0,2);
        switch ($ind) {
         case "BI":
             $nomf="Biblio";
             break;
         case "BP":
             $nomf=substr($nom,5,3);
             break;
         case "DE":
             $nomf=substr($nom,5,3);
             break;
         case "DG":
         $nomf=substr($nom,5,5);
                 break;
         case "DP":
         $nomf=substr($nom,7,5);
                     break;
         default:
             $nomf=$nom;
      }
      return $nomf;

      }
      echo crop ($_SESSION['vis_sal']); ?>
  </div>
</div>

    </div>
  </body>
</html>
