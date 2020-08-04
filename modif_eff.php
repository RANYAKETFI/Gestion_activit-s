<!DOCTYPE html>
<?php
session_start(); //toutes vos pages doivent commencer par session_start
if (empty($_SESSION['id_user'])) echo "<script> location.href='./connexion.php'; </script>";
else $id_user= $_SESSION['id_user'];

$id_modif=$_SESSION["modif_id"];


?>


<html>
<head>
<title>Modification réussie</title>

<!-- Required meta tags always come first -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
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
         height: 80 % ;
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
<body >
<?php
function salle($idsal)
{
    $ns=null;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";
    $tablename="salle";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    if (!$conn) // connexion échouée
     {
        die(" Connection failed: " . mysqli_connect_error());
     }

    else //  connexion établie
      { // récuperer l'is de cette salle
      $cmd="SELECT `nom_salle` FROM `salle` WHERE id_salle='$idsal'";
        $result = mysqli_query($conn, $cmd);
        while($row = mysqli_fetch_assoc($result))
         {
           $ns=$row["nom_salle"];
          }

           }
   return $ns;
}

function mail_modifier_admin($id_res)
{


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projet";
  $tablename="reservation";
  $email="eqprojet21@gmail.com";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);
  if ($conn->connect_error)
   {

      die(" Connection failed: " . $conn->connect_error);
  }
  else

  {
   $cmd="SELECT `id_res`, `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`, `description` FROM `reservation` WHERE  id_res='$id_res'";
   $result = mysqli_query($conn, $cmd);

   while($row = mysqli_fetch_assoc($result))
    {

      $header="MIME-Version: 1.0\r\n";
      $header.='From:"dirteam21.com"<dirteam21@gmail.com>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
$salle=salle($row["id_salle"]);
$date=$row["date"];
$hd=$row["h_deb"];
$hf=$row["h_fin"];
$descrp=$row["description"];

      $message='<html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <style type="text/css" media="screen">

         </style>
          </style>
          <title> </title>
        </head>
        <body style="background-color:#d1d8e0;">
          <br>
          <br>
          <br>
          <br>
      <h1 align="center" style="background-color:#303952; color:white; border-style: dotted;">
      <br>
       Une réservation a été modifiée  !
       <br>
       <br>
      </h1>
      <hr color="#07756a">
      <div >
      <h2 align="center" style="color:#303952;">  Bonjour, </h2>
      <br>
      <p  style="color:#303952; ">
        <div align="center">
      <font  color="#303952" size="4" >

           Nous tenons à vous informer qu\'une réservation sur -BOOK AT ESI - ayant les information ci-dessous a été  <b> <ins> modifiée </ins> </b>!
            </font >
          </div>
           <br>
           <br>

           <div align="center" >
             <img src="https://img.icons8.com/dusk/64/000000/tasklist.png">

           </div>
           <br>
           <br>
           <br>

           <table   width="80%" align="center" style="background-color:#a5b1c2;border-collapse: collapse;">
             <th height="50px"  style=" padding:15px; border: 1px solid black;" > id de la réservation </th>
             <th height="50px" style=" padding:15px; border: 1px solid black;"> salle </th>
             <th height="50px" style=" padding:15px; border: 1px solid black;"> date </th>
             <th height="50px" style=" padding:15px; border: 1px solid black;"> heures </th>
             <th  height="50px" style=" padding:15px; border: 1px solid black;"> Description </th>
             </tr>
             <tr align="center" >
               <td height="50px"  style=" padding:15px; border: 1px solid black;" ><font  size="4"> <b > '.$id_res.' </b> </font> </td>
               <td height="50px"  style=" padding:15px; border: 1px solid black;" > <font  size="4"> <b >'.$salle.' </b> </font> </td>
               <td height="50px"  style=" padding:15px; border: 1px solid black;"  > <font  size="4"> <b > '.$date.'</b> </font> </td>
               <td height="50px"  style=" padding:15px; border: 1px solid black;"  > <font  size="4"> <b >  '.$hd.'--'.$hf.'</b> </font></td>
               <td height="50px"  style=" padding:15px; border: 1px solid black;" ><font  size="4"> <b > '.$descrp.'</b> </font>  </td>
               </tr>
           </table>
           <br>
           <br>
           <br>
           <div align="center">
           <font color="#303952" align="center"  size="4" >
            Vous pouvez aussi consulter cette réservation par ici :
                <a href="./connexion.php"> <ins> <b> ici </b> </ins> </a>
                      </font >
                    </div>
           
      </p>
        <br>
        <br>

      </div>
        </body>

      </html>

      ';
  mail($email,"RESERVATION MODIFÉE -BOOK AT ESI -!",$message,$header);

}
}}
 ?>
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
          <a href=" aide_admin.php">
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
              <a href=" aide_user.php">
                  <i class="fas fa-question-circle"></i>
                  <p>Aide</p>
              </a>
          </li>
      </ul>
          </div>
        </div>';
  }
  if ($id_user == 2)
  {// dans le cas ou c'est l'admin
  $lien = "./aide_admin.php";
  }else
  {
  $lien = "./aide_user.php";
  }
  mail_modifier_admin($id_modif);

  echo '<div class=" container"  > <div class="jumbotron text-center" style="background-color : #303952">
  <h1 class="display-3" style="color : #f5f6f6"> Modification effectuée !</h1> <br>
  <p class="lead" style=" color : #f5f6f6;"> Votre réservation a bien été modifiée ! </p>
  <br> <br>

  <hr>
  <p style="color : #f5f6f6" >
    Pour plus d'."'".'informations veuillez consulter <a href=" '.$lien.'" style="color : #85d3c5"> l'."'".'aide en ligne </a> de notre application.
  </p>
  <p class="lead" style="color : #f5f6f6">
    <a class="btn btn-primary btn-sm" href="./accueil_user.php?id_user='.$id_user.'" role="button" style="background-color : #85d3c5; border : none;  padding: 10px 28px; font-size: 18px; border-radius : 12px; color : #303952 " >Mes réservations </a>
  </p>
</div> </div>';

 ?>

 <script src="jq/jquery-3.3.1.min.js"></script>
 <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>
