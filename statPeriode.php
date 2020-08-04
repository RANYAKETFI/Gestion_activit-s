<?php
session_start();
if (empty($_SESSION[ 'id_user' ])) echo "<script> location.href='./connexion.php'; </script>";
else $iduser= $_SESSION[ 'id_user' ];
 ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Statistiques par periode</title>
  <meta charset="utf-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width"/>
  <!-- Specific Page Vendor CSS -->

    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="fontawesome-free-5.7.2-web/css/all.min.css">
    <link rel="shortcut icon" href="logo.PNG">
      <style>

      .wrapper {
        position: relative;
        top: 0;
        height: 100vh;
      }

      .sidebar,
      .off-canvas-sidebar {
        position:fixed;
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
      .verif{
       border: none;
    border-radius: 1.5rem;
    width: 18%;


	}
	.btn .btn-primary .btn-sm :hover{
	 color: #303952;
    background-color:#d1d8e0;
    border-radius: 1.5rem;
	}
      </style>

</head>

<body style="background-color: #d1d8e0;">
<div class="sidebar" >

    <div class="logo">
      <a href="" class="simple-text">
        <img src="logo.PNG" alt="logo_équipe_21" height="100" width="100">
      </a>
    </div>

      <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="recupereradmin.php">
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
                    <a href=" import.php">
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
               <li class="active">
                   <a href="statPeriode.php">
                     <i class="fas fa-chart-line"></i>
                       <p>Statistiques par période</p>
                   </a>
               </li>

                <li>
                    <a href="modif_nom.php">
                      <i class="fas fa-cogs"></i>
                        <p>Modifier mon nom d\'utilisateur</p>
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
    </div>
  <!-- -end of sidebar------------------------->
  <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="jumbotron text-center "  style=" background: -webkit-linear-gradient(top,#303952,#a5b1c2);  -webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
   -moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
   box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);  border-top-right-radius: 1.5rem;
       border-bottom-right-radius: 1.5rem; border-top-left-radius: 1.5rem;
       border-bottom-left-radius: 1.5rem;margin-top: 100px;">
     <h1  style=" color : #f5f6f6;">Entrez la plage de date :</h1> <br>
     <form id="statistique" action="statisticsbyperiod.php" method="post">
       <div class="form-group">
         <!-- <label for="daterange">Date range: </label> -->
           <div class="input-daterange input-group" id="daterange">
             <span class="input-group-addon">
               <i class="fa fa-calendar"></i>
             </span>
             <input type="date" class="form-control" name="date1" id="date1" required>
             <span class="input-group-addon">to</span>
             <input type="date" class="form-control" name="date2" id="date2" required>
           </div>
       </div>
       <p id="demo" class="text-danger"></p>
       <br>
       <div class="form-group ">
         <input type="submit"  class="btn btn-primary verif center-block"  value="Visualiser" >
       </div>
     </form>
 <script>
 var f= document.getElementById("statistique");
 f.addEventListener("submit",function()
 {
   document.location.href="statisticsbyperiod.php";
 });
 </script>

     <hr  width="40%" style="border-top-color:#f5f6f6 ;">
     <p style=" color : #f5f6f6;">
       Pour plus d'informations veuillez consulter <a href="./aide_admin.php" style=" color : #d1d8e0;"> l'aide en ligne </a> de notre application.
     </p>

   </div>


 </div>
 </div>
 </div>

<!-- Theme Base, Components and Settings -->
<script src="valid.js"></script>

<script src="jq/jquery-3.3.1.min.js"></script>
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>






</body>

</html>
