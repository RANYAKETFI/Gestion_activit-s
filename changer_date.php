<?php session_start();
$iduser= $_SESSION['id_user'];

 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="logo.png">
<style>
.error {color: #FF0000;}
</style>
<title>Reservation</title>

<!-- Required meta tags always come first -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="bootstrap.min.css">
 <!-- jQuery first, then Bootstrap JS. -->

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
       margin-top: 6%;
       padding: 25px;
       margin-right: auto; margin-left:30% ;
       position: relative;}
       </style>

</head>
<body >

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
function modification($id,$nvldate,$nvlsalle,$nvlhd,$nvlhf,$nvldescrp)
{ global $conn;




if (empty($nvlsalle))  // si le champ salle est vide
{
// sauvegarder l'ancien id de la sa salle
$cmd1=" SELECT  `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`,`description` FROM `reservation` WHERE id_res='$id'";
$result = mysqli_query($conn, $cmd1);
while($row = mysqli_fetch_assoc($result))
{
$nvlsalle=$row["id_salle"];
}
}
else
{ // sinn récuperer l'id de la salle
//  echo "l id de la salle hadi est ",idsal($_POST['nvlsalle']);
$nvlsalle=idsal($_POST['nvlsalle']);
}
if (empty($nvldate)) {
$cmd1=" SELECT  `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`,`description` FROM `reservation` WHERE id_res='$id'";
$result = mysqli_query($conn, $cmd1);
while($row = mysqli_fetch_assoc($result))
{
$nvldate=$row["date"];

}

}
if (empty($nvlhd)) {
$cmd1=" SELECT  `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`,`description` FROM `reservation` WHERE id_res='$id'";
$result = mysqli_query($conn, $cmd1);
while($row = mysqli_fetch_assoc($result))
{
 $nvlhd=$row["h_deb"];

}

}
if (empty($nvlhf)) {
$cmd1=" SELECT  `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`,`description` FROM `reservation` WHERE id_res='$id'";
$result = mysqli_query($conn, $cmd1);
while($row = mysqli_fetch_assoc($result))
{
 $nvlhf=$row["h_fin"];
}
}
if (empty($nvldescrp)) {
$cmd1=" SELECT  `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`,`description` FROM `reservation` WHERE id_res='$id'";
$result = mysqli_query($conn, $cmd1);
while($row = mysqli_fetch_assoc($result))
{
 $nvldescrp=$row["description"];

}
}
// modier la réservation
    $cmd="UPDATE reservation SET `date`='$nvldate',`id_salle`='$nvlsalle',`h_deb`='$nvlhd',`h_fin`='$nvlhf',`modifie`=1,`accept`=0,`description`='$nvldescrp' WHERE id_res='$id'";
    if (mysqli_query($conn, $cmd))  {
  // modification réussie
         }
        else {
          echo "erreur";
    echo "Error updating record: " . $conn->error;
  }
   }

   function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

/******************************************************************************************** */
$id_r=$_SESSION['id_r'];

if ($iduser == 2 ) // admin
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
      <li >
          <a href=" recupereradmin.php">
            <i class="fas fa-home"></i>
              <p>Accueil</p>
          </a>
      </li>
      <li class="active">
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
              <a href="./aide_user.php">
                  <i class="fas fa-question-circle"></i>
                  <p>Aide</p>
              </a>
          </li>
      </ul>
          </div>
        </div>';
  }

echo '<div class="container" > <div class="jumbotron text-center" style="background-color : #303952">
<div class="text-center align-items-center border border-light p-5">
<form id="chg_date"  method="post" action="changer_date.php" >
<h1 class="display-3" style="color : #f5f6f6">Aucune salle libre </h1> <br> <br>
<p class="lead" style="color : #f5f6f6"> Veuillez choisir une autre date ...</p>
<hr>
<div class="md-form">
<input  type="date" name="date" id="date"  required class="form-control datepicker" >
   <p class="text-danger" id="demo" > </p>

</div> <br>
<br>
<span style="color : #f5f6f6">Heure du début:</span><br>
<input type="time" id="nvlhd" name="deb" required> <br>
<span style="color : #f5f6f6">Heure de fin:</span><br>
<input type="time" id="nvlhf" name="fin" required><br>
  <p id="demo1" class="text-danger"></p>
</select> <br>
<button type="submit" class="btn btn-success" style="background-color: #85d3c5; border : none;  padding: 8px 24px; font-size: 16px; border-radius : 12px; color : #303952">
<i class="fa fa-arrow-circle-right fa-lg" ></i> Suivant
</button> </form> <br>
<form method="post" action="annul_intrem.php" >
<input type="hidden"  id="id_res" name="id_res" value="'.$id_r.'" />
<input type="hidden"  id="acc" name="acc" value="0" />
  <input type="hidden"  id="chg_d" name="chg_d" value="1" />
  <input type="hidden"  id="chg_s" name="chg_s" value="0" />
<button type="submit"  class="btn btn-dark" onclick="myFunction()"  style="background-color: #85d3c5; border : none;  padding: 8px 24px; font-size: 16px; border-radius : 12px; color : #303952">Annuler
</button> </form>
</div>
</div>
</div>
<script src="js/chg_date.js">
 </script>
';


$nvl_date="";
$nvl_hdeb="";
$nvl_hfin="";
$nvl_salle="";
$desc="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nvl_hdeb=test_input($_POST["deb"]);
$nvl_hfin=test_input($_POST["fin"]);
if (!empty($_POST["date"])) {

$nvl_date = test_input($_POST["date"]);

if ( ($nvl_hdeb>$nvl_hfin ) && $nvl_hdeb!="" && $nvl_hfin!="" ){

    }

    $date2_str = date('Y-m-d'); // on recupere la date d'aujourd'hui

    //-------------------------
    $date_1 = strtotime($nvl_date);
    $date_2 = strtotime($date2_str);
    $days_number= $date_1 - $date_2 ;
    $days_number = $days_number/(60* 60 *24);

    if($date_1<$date_2)
    {


    }
    else
    {
      if ($days_number >= 15)
    {
    modification($id_r,$nvl_date,$nvl_salle,$nvl_hdeb,$nvl_hfin,$desc);
    $done=true;
    if ($done){
        echo "<script> location.href='traitement.php'; </script>";
    exit;
    }
}

}


}
}




?>
</body>
</html>
