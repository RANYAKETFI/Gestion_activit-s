<?php session_start();
if (empty($_SESSION[ 'id_user' ])) echo "<script> location.href='./connexion.php'; </script>";
else $iduser= $_SESSION[ 'id_user' ];

$iduser= $_SESSION['id_user'];


?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Réservation</title>
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style_reserv.css">
      <link href="fontawsome/css/all.css" rel="stylesheet">

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
        position: fixed;
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
      .box{
        background: #303952;
        border-radius: 5px;
        color: #f5f6f6;
        text-align: center;
        padding: 2px;
        margin-left : 8%;
        }
        .box h1 {
          color:#07756a;
        }
        .box0{
          background: #303952;
          border-radius: 5px;
          color: #f5f6f6;
          text-align: center;
          padding: 2px;
          margin-left : 8%;
          font-size: 11px;

          }
          .box0 h1 {
            color:#07756a;
            font-size: 18px;
          }
        body {
  background-image: url('images/background.JPG');
  background-repeat: repeat-y	;
  background-size:100% ;
  height: 100%;
    font-family: helvetica;


}
      </style>

</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="projet";

$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id_salle= $id_user="";
$user  = $date  =$salle =$cap  =$h_deb = $h_fin=$event = "";
$annee = $matricule = $description ="";
$userErr  = $dateErr =$salleErr=$capErr= $h_debErr =$h_finErr = $eventErr=$descErr = "";
$anneeErr = $matriculeErr ="";
// to have a secured code
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["user"])) {
$userErr = "Name of user is required";
} else {
   $user = test_input($_POST["user"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$user)) {
  $userErr = "Only letters and white space allowed";
  $user ="";
}
}

//--------------
if (empty($_POST["dat"])) {
$dateErr = "Reservation date is required";
} else {
 $date = test_input($_POST["dat"]);
}

//-------------------------------------

if (empty($_POST["salle"])) {
$salleErr = "salle is required";
} else {


  $salle = test_input($_POST["salle"]);
}

//---------------------------------
if (empty($_POST["cap"])) {
$capErr = "Capacité is required";
$cap=0;
} else {


  $cap = test_input($_POST["cap"]);

}

//------------------------------------
if (empty($_POST["deb"])) {
$h_debErr = "Beginning time is required";
} else {
  $h_deb = test_input($_POST["deb"]);
}
//----------------------------
if (empty($_POST["fin"])) {
$h_finErr = "Ending time is required";
} else {
  $h_fin = test_input($_POST["fin"]);
}
//--------------------------------
if (empty($_POST["ann_res"])) {
$anneeErr = "Year of resposible is required";
} else {
  $annee = test_input($_POST["ann_res"]);
}
//-----------------------------
if (empty($_POST["mat"])) {
$matriculeErr = "Matricule is required";
} else {
  $matricule = test_input($_POST["mat"]);
}
//-----------------------------
if (!empty($_POST["desc"])) {
  $description = test_input($_POST["desc"]);
}
else{ $descErr = "Description is required ! ! !"; }
// echo "<br> description is : ".$description;

}
//---------------------------------
if (empty($_POST["descname"])) {
$eventErr = "nom de levent is required";
} else {
  $event = test_input($_POST["descname"]);
}

//--------------

//$comment = test_input($_POST["comment"]);



function test_input($data) {
$data = trim($data); // to avoid unnecessary info from our inputs
$data = stripslashes($data);// to avoid unnecessary back slashes (\) from our inputs
$data = htmlspecialchars($data);
return $data;
}

if ($iduser == 2 ) // ( si c'est l'admin )
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
                    <li>
                        <a href="./recupereradmin.php">
                          <i class="fas fa-home"></i>
                            <p>Accueil</p>
                        </a>
                    </li>
                    <li class="active">
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
                    <li  >
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
                       <a href="./modif_mdp.php">
                         <i class="fas fa-cogs"></i>
                           <p>Changer votre mot de passe</p>
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
        </div>';
  }
  else
  {
    // c'est un utilisateur
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
        <li >
            <a href="accueil_user.php">
              <i class="fas fa-home"></i>
                <p>Accueil</p>
            </a>
        </li>
        <li class="active">
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
            <a href="aide_user.php">
                <i class="fas fa-question-circle"></i>
                <p>Aide</p>
            </a>
        </li>
    </ul>
        </div>
      </div>';
  }
  ?>
  <div class="container">
    <div class="row">
    <div class="col-md-12">
    <form id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post"  >
      <?php

      $nomuser=mysqli_fetch_assoc(mysqli_query($conn,"SELECT nom_user from user where id_user='$iduser'"))["nom_user"];
      if (($iduser == 1 ) or  ($iduser==2 ) )// si c'est l'admin ( id = 2 )  ou si c la DE (id=1)
      { echo'
      <div>
          <h3>Le demandeur</h3>
          <section>
          <br><br>
              <label for="user">Nom </label>
              <input class="form-control" type="text" name="user" placeholder='.$nomuser.' readonly >
              <p>(*) Champ Obligatoire</p>
              <div class="box">
      <h1>  <i class="fas fa-user-friends"></i> <br> Qui peut faire une réservation?</h1>
      <p>Toute personne ayant un compte BOOK-AT-ESI peut effectuer une demande de réservation, cette demande sera examinée par le responsable du service culturel qui donnera son l\'accord pour accepter ou refuser la réservation suivant le règlement intérieure de l\'école. </p>
      </div>
          </section>
          <h3>Date de reservation</h3>
          <section>
            <label for="dat">Date *</label>
              <input  type="date" class="form-control datepicker required " name="dat" required>
              <label for="deb">Heure de début *</label>
              <input type="time" name="deb" required>
              <label for="fin">Heure de fin *</label>
              <input type="time" name="fin" required>

              <p>(*) Champ Obligatoire</p>
              <div class="box">
      <h1><i class="fas fa-clock"></i> <br> Saisir la date et l\'heure de reservation</h1>
      <p>Seules les demandes de réservation parvenues au minimum quinze jours avant la date de la manifestation sont prises en considération.
      </p>
          </section>
          <h3>Salle</h3>
          <section>
            <label for="salle">Nom de la salle* </label>

            <select id="salle " class="form-control" name="salle" required>
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


            <label for="cap">La capacité </label>
            <input type="number" name="cap" >
            <p>(*) Champ Obligatoire</p>

            <div class="box">
          <h1><i class="fas fa-location-arrow"></i><br>Saisir le nom de la salle et la capacité desirée </h1>
          <p>Dans le cas d\'indisponibilité de la salle demandée nous vous orienterons vers une salle avec une capacité égale ou plus grande que celle choisie ou celle de la salle choisie. </p>
          </div>

          </section>
          <h3>Description</h3>
          <section>
            <label for="descname">Nom de l\'évènement *</label>
            <input class="form-control" type="text" name="descname" placeholder="Nom de l\'évènement" required>
            <label for="desc">Description de l\'évènement *</label>
            <textarea class="form-control" name="desc" placeholder="Description" required></textarea>
            <p>(*) Champ Obligatoire</p>
            <div class="box">
            <h1><i class="fas fa-scroll"></i> <br>Saisir le nom et la description de l\'évènement</h1>
            <p>La description sert à faire percevoir au responsable du service culturel le cadre dans lequel se déroule votre réservation.</p>
            </div>


          </section>
      </div>';
    }
    else
    {
      echo'
      <div>
          <h3>Le demandeur</h3>
          <section>
              <label for="user">Nom </label>
              <input class="form-control" type="text" name="user" placeholder='.$nomuser.' readonly >
              <div>
              <label class="inline" style="margin-right: 20px">Année de l\'étudiant responsable *</label>
                <label class="radio-inline"><input type="radio" Name="ann_res" value="1cp"checked="checked">  1CP</label>
                <label class="radio-inline"><input type="radio" Name="ann_res" value="2cp">2CP</label>
                <label class="radio-inline"><input type="radio" Name="ann_res" value="1cs">1CS</label>
                <label class="radio-inline"><input type="radio" Name="ann_res" value="2cs"> 2CS </label>
              <label class="radio-inline"><input type="radio" Name="ann_res" value="3cs"> 3CS </label>
            </div>
              <label for="mat">Matricule *</label>
                <input class="form-control" type="number" name="mat" placeholder="Matricule de l\'étudiant responsable" required >

              <p>(*) Champ Obligatoire</p>
              <div class="box0">
      <h1>  <i class="fas fa-user-friends"></i> Qui peut faire une réservation?</h1>
      <p>Toute personne ayant un compte BOOK-AT-ESI peut effectuer une demande de réservation, cette demande sera examinée par le responsable du service culturel qui donnera son l\'accord pour accepter ou refuser la réservation suivant le règlement intérieure de l\'école.
      Un étudiant responsable est un membre actif du club qui sert en tant que représentant officiel de son propre club. </p>
      </div>
          </section>
          <h3>Date de reservation</h3>
          <section>
            <label for="dat">Date *</label>
              <input  type="date" class="form-control datepicker required " name="dat" required>
              <label for="deb">Heure de début *</label>
              <input type="time" name="deb" required>
              <label for="fin">Heure de fin *</label>
              <input type="time" name="fin" required>

              <p>(*) Champ Obligatoire</p>
              <div class="box" style="padding=0px;">
          <h1><i class="fas fa-clock"></i> <br> Saisir la date et l\'heure de reservation</h1>
          <p>Seules les demandes de réservation parvenues au minimum quinze jours avant la date de la manifestation sont prises en considération.
          </p>
          </div>
          </section>
          <h3>Salle</h3>
          <section>
            <label for="salle">Nom de la salle* </label>

            <select id="salle " class="form-control" name="salle" required>
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


            <label for="cap">La capacité </label>
            <input type="number" name="cap" >
            <p>(*) Champ Obligatoire</p>

            <div class="box">
          <h1><i class="fas fa-location-arrow"></i><br>Saisir le nom de la salle et la capacité desirée </h1>
          <p>Dans le cas d\'indisponibilité de la salle demandée nous vous orienterons vers une salle avec une capacité égale ou plus grande que celle choisie ou celle de la salle choisie. </p>
          </div>

          </section>
          <h3>Description</h3>
          <section>
            <label for="descname">Nom de l\'évènement *</label>
            <input class="form-control" type="text" name="descname" placeholder="Nom de l\'évènement" required>
            <label for="desc">Description de l\'évènement *</label>
            <textarea class="form-control" name="desc" placeholder="Description" required></textarea>
            <p>(*) Champ Obligatoire</p>

            <div class="box">
          <h1><i class="fas fa-scroll"></i> <br>Saisir le nom et la description de l\'évènement</h1>
          <p>La description sert à faire percevoir au responsable du service culturel le cadre dans lequel se déroule votre réservation.</p>
          </div>

          </section>
      </div>';
    }
    ?>
  </form>
  </div>
  <div class="col-md-2">

  </div>

  </div>

  </div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jqueryvalidate.js"></script>
    <script src="js/jquerysteps.js"></script>
    <script  src="js/jsform.js"></script>

  <?php

      //------Récuperons le ID de la salle reservée--------

      $sql = "SELECT id_salle FROM `salle` WHERE nom_salle ='$salle' ";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {

         while($row = mysqli_fetch_assoc($result)) {
               //echo "id: ". $row["id_salle"]."<br>";
               $id_salle = $row["id_salle"];
          }
      } else {
          //echo "Aucune information sur la salle!!!";
           echo "";
      }


 $id_user = $iduser;


      //----------- on vérifie les règles de gestions -------------------------
if( ($id_user != "") and ($date !="") and  ( ($salle != "" ) or ($cap !="") )and ($h_deb != "")and ($h_fin != "") and (( ($annee !="") and ($id_user !=1) and ($id_user)!=2 )or ($id_user ==1)or ($id_user==2)) and   (  ( ($matricule != "") and ($id_user !=1) and ($id_user!=2)) or ($id_user ==1)or ($id_user==2) ) and ($description != "") and ( $event != ""))
{
if ($date != "")
{

//--- strtotime : covertir la date (string) du formulaire en date
$date2_str = date('Y-m-d'); // on recupere la date d'aujourd'hui

//-------------------------
$date_1 = strtotime($date);
$date_2 = strtotime($date2_str);
$days_number= $date_1 - $date_2 ;
$days_number = $days_number/(60* 60 *24);
if($date_1<=$date_2)
{

    if ($date_1 == $date_2)
    {
  $dateErr= " Veuillez entrer une date différente de celle d'aujourd'hui ! ! !";
    }
    else
    {
   $dateErr= " Veuillez entrer une date au future ! ! ! ";
    }
}
else
{
  if ($days_number >= 15)
{
     //--- inserer directement
    $h_diff= $h_fin - $h_deb ;
if ($h_diff <= 0)
{
 echo "Veuillez entrer une heure de fin superieure à celle du debut ! ! !";
}else{
  $sql = "INSERT INTO `reservation`(`id_salle`, `cap`, `id_user`, `date`, `h_deb`, `h_fin`, `an_resp`, `matricule_resp`, `description` ,`nom_event`) VALUES ('$id_salle','$cap','$id_user','$date','$h_deb','$h_fin','$annee','$matricule','$description','$event')";
$result = mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);
$_SESSION['id_r']=$last_id;
  //qd on recupère l id on redirige vers la page de traitement

    echo "<script> location.href='traitement.php'; </script>";
    exit;
}


}
else {
  echo "<br> Aucune reservation à effectuer  , Veuillez reserver 15 jours avant la date de l'évenement <br>";
}


}
//--------------------------



}


}

      //-------- dans le cas u c'est deja vérifiée : inserons dans la file d'attente si aucun message d'erreur n'est affiché ------



?>

  </body>

  </html>
