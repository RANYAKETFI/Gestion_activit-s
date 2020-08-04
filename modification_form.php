
<!DOCTYPE html>
<?php
session_start(); //toutes vos pages doivent commencer par session_start
if (empty($_SESSION[ 'id_user' ])) echo "<script> location.href='./connexion.php'; </script>";
else {$iduser= $_SESSION[ 'id_user' ];}

$id_user= $_SESSION[ 'id_user'];



$id=$_POST['id_modif'];
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Modification</title>
  <!-- Specific Page Vendor CSS -->
  <link rel="stylesheet" href="assets/vendor/select2/select2.css" />
  <link rel="stylesheet" href="assets/stylesheets/theme.css" />
    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="shortcut icon" href="logo.PNG">
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
    width: 24%;


	}
	.btn .btn-primary .btn-sm :hover{
	 color: #303952;
    background-color:#d1d8e0;
    border-radius: 1.5rem;
	}

      </style>

</head>

<body>
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

     //$id_user=1;
     if ($id_user == 2 ) // si c l'admin
     {
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
       {
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
                   <a href=./aide_user.php">
                       <i class="fas fa-question-circle"></i>
                       <p>Aide</p>
                   </a>
               </li>
           </ul>
               </div>
             </div>';
       }
    ?>


  <!-- -end of sidebar------------------------->
<div class="container">
  <div class="row">
  <div class="col-md-11">
      <div class="jumbotron"  style=" background: -webkit-linear-gradient(top,#303952,#a5b1c2);  -webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
    -moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
    box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);  border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem; border-top-left-radius: 1rem;
        border-bottom-left-radius: 1rem;" id="contact">

      <h2 style=" color : #f5f6f6;text-align:center;">Modifier votre réservation </h2><br>
      <?php
      echo '
      <form name="modification" method="post" id="modification" action="modification.php"  class="justify-content-center">

         <input type="hidden" name="id_modif" value="'.$id.'" />

            <div class="jumbotron" style="background-color:#f5f6f6">
                  <div class="form-group">
                     <label for="pet-select">Salle:</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-list" ></i></span>
                       <select id="salle " class="form-control" name="nvlsalle" data-plugin-selectTwo class="form-control populate">
                           <option value="">--Salles : --</option>
                           <optgroup label="LES CPs">
                           <option >DE-0-CP1 (25)</option>
                           <option >DE-0-CP2 (25)</option>
                           <option >DE-0-CP3 (25)</option>
                           <option >DE-0-CP4 (25)</option>
                           <option >DE-0-CP5 (25)</option>
                           <option >DE-0-CP6 (25)</option>
                           <option >DE-0-CP7 (25)</option>
                           <option >DE-0-CP8 (25)</option>
                           <option >DE-0-CP9 (25)</option>
                         </optgroup>
                         <optgroup label="Salles DE">
                           <option >DE-0-S4B (30)</option>
                           <option >DE-0-S4 (25)</option>
                           <option >DE-0-S5 (25)</option>
                           <option >DE-0-S6 (25)</option>
                           <option >DE-0-S7 (25)</option>
                           <option >DE-0-S8 (25)</option>
                           <option >DE-0-S9 (25)</option>
                           <option >DE-0-s10 (25)</option>
                           <option >DE-0-S11(25)</option>
                           <option >DE-0-S12(25)</option>
                           <option >DE-0-S13(25)</option>
                           <option >DE-0-S14(25)</option>
                           <option >DE-0-S15(25)</option>
                           <option >DE-0-S16(25)</option>
                           <option >DE-0-S17(25)</option>
                           <option >DE-0-S18(25)</option>
                           <option >DE-0-S19(25)</option>
                           <option >DE-0-S20(25)</option>
                           <option >DE-0-S21(25)</option>
                           <option >DE-0-CYB (75)</option>
                         </optgroup>
                         <optgroup label="Amphis">
                           <option >DE-0-AP1 (125)</option>
                           <option >DE-0-AP2 (125)</option>
                           <option >DE-0-A1 (100)</option>
                           <option >DE-0-A2 (100)</option>
                           <option >DE-0-A3 (100)</option>
                           <option >DE-0-A4 (75)</option>
                         </optgroup>
                         <optgroup label="Salles BP">
                           <option >BP-0-M1 (25)</option>
                           <option >BP-0-M2 (25)</option>
                           <option >BP-0-MH (25)</option>
                           <option >BP-0-M3 (25)</option>
                           <option >BP-0-M4 (25)</option>
                           <option >BP-0-M5 (25)</option>
                           <option >BP-0-ME (25)</option>
                           <option >BP-0-MC (25)</option>
                           <option >BP-0-SCBP (100)</option>
                           <option >salle_conference(100)</option>
                            
                         </optgroup>
                         <optgroup label="Salles DPGR">
                           <option >DPGR-0-DPGR1 (30)</option>
                           <option >DPGR-0-DPGR2 (30)</option>
                           <option >DPGR-1-RES (40)</option>
                         </optgroup>
                         <optgroup label="Bibliotheque">
                           <option >BIB-1-Salle 2eme etage (150) </option>
                         </optgroup>
                         <optgroup label="Salle DG">
                            <option >DG-0-Visio (30)</option>
                         </optgroup>
                       </select>
                     </div>
                    </div>
                    <div class="form-group">
                        <label for="nvldate">Date:</label>
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fas fa-calendar"></i></span>
                           <input type="date" class="form-control" id="nvldate" placeholder="Enter date" name="nvldate">
                      </div>
                    </div>
                     <p id="demo" class="text-danger"> </p>
                    <div class="form-group">
                        <label for="nvlhd">Heure début:</label>
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fas fa-clock"></i></span>
                           <input type="time" class="form-control" id="nvlhd" placeholder="Enter heure debut" name="nvlhd">
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="nvlhd">Heure fin:</label>
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fas fa-clock"></i></span>
                            <input type="time" class="form-control" id="nvlhf" placeholder="Enter heure fin" name="nvlhf">
                      </div>
                    </div>
                     <p id="demo1" class="text-danger"></p>

                      <div class="form-group">
                      <label for="nvldescrp">Description :</label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fas fa-pen"></i> </span>
                        <textarea name="nvldescrp" id="nvldescrp" class="form-control" rows="2" placeholder="Entrez votre nouvelle description" cols="80"></textarea>
                      </div>
                      </div>
                      <br>
                      <div class="form-group ">
                        <input type="submit"  class="btn btn-primary verif center-block"  value="Modifier" >
                      </div>

            </div>

      </form>

';
?>

    </div>



</div>

</div>
<script src="modification.js">  </script>
<!-- Head Libs -->
<script src="assets/vendor/modernizr/modernizr.js"></script>
<script src="assets/vendor/jquery/jquery.js"></script>
<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="assets/vendor/select2/select2.js"></script>
<!-- Theme Base, Components and Settings -->
 <script src="assets/javascripts/theme.js"></script>
<script src="assets/javascripts/theme.init.js"></script>
<script src="jq/jquery-3.3.1.min.js"></script>
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>






</body>

</html>
