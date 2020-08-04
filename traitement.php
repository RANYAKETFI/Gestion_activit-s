<?php session_start(); 
if (empty($_SESSION[ 'id_user' ])) echo "<script> location.href='./connexion.php'; </script>";
else $id_user= $_SESSION[ 'id_user' ];
?>
<!DOCTYPE html>
<html>
<head>
<title>Réservation</title>
<link rel="shortcut icon" href="logo.png">
<!-- Required meta tags always come first -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="bootstrap.min.css">

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
         background-color:#07756a;
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
       margin-top: 10%;
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

//*********************Recherche *********************************
function intersection ($start,$end,$deb,$fin)
//Donne 1 s'il y a une intersection entre les deux intervalles d'heures, 0 sinon.
{
  if (($start>=$deb) && ($start<$fin)) return "1";
  else if (($deb>=$start) && ($deb<$end)) return "1";
  else return "0";
}

//------------------------------------------------------------------------------//
//------------------------- rech_calendrier-------------------------------------//
function rech_calendrier ($id_salle,$date,$h_deb,$h_fin) //$date est de type string
{
  global $conn;
  $rqt ="SELECT nom_salle FROM salle WHERE id_salle = '$id_salle'";
  $res = mysqli_query($conn,$rqt);
  if (mysqli_num_rows($res)=="0") {
    die("Erreur. <br>");
    $trouv="-1";
  }
  else {
    $row = mysqli_fetch_assoc($res);
    $loc =$row["nom_salle"];
    $rqt ="SELECT id_activity, Start_time, End_time FROM calendrier WHERE Location LIKE '%$loc%' AND  Date='$date'";
    $res = mysqli_query($conn,$rqt);
    $trouv ="0";
    while ( ($trouv=="0") && ($tbl=mysqli_fetch_assoc($res)) ) {
      if (intersection ($tbl["Start_time"],$tbl["End_time"],$h_deb,$h_fin)=="1") $trouv="1";
       //Vérifier si l'événement n'intercepte pas un autre
    }
    return ($trouv);
  }
}

//---------------------------------------------------------------------------//
//------------------------- rech_res------------------------------------------//
function rech_res ($id_reservation,$id_salle,$date,$h_deb,$h_fin)
{
  global $conn;
  $trouv ="0"; //Au début, la salle n'est pas demandée.
  $rqt = "SELECT id_res, accord, annul, accept, h_deb, h_fin FROM reservation WHERE id_salle='$id_salle' AND date='$date'";
  //Vérifie si la salle demandée est déjà réservée à la date donnée
  $res = mysqli_query($conn,$rqt);
  while ( ($trouv=="0") && ($tbl=mysqli_fetch_assoc($res)) ) { //La salle demandée est déjà réservée à la date donnée
    if ((intersection ($tbl["h_deb"],$tbl["h_fin"],$h_deb,$h_fin)=="1") && ($tbl["id_res"]<>$id_reservation))
    {//Vérifier si l'événement intercepte un autre
      if (( ($tbl["accord"] == "1") || (is_null($tbl["accord"])) ) && ($tbl["annul"] == "0") && ($tbl["accept"] == "1")) $trouv="1";
    }
  }
  //Sinon, trouv est déjà initialisé à 0
   return ($trouv);
}

//------------------------------------------------------------------------------//
//------------------------- rech_salle------------------------------------------//
function rech_salle($id_res,$id_salle,$date,$h_deb,$h_fin)
{
    $dispo ="1";
    if (rech_res($id_res,$id_salle,$date,$h_deb,$h_fin)=="1") { //Si la salle est déjà réservée
      $dispo ="0";
    }
    else { //Sinon, on cherche si elle existe dans le calendrier
      if (rech_calendrier($id_salle,date("d/m/Y",strtotime($date)),$h_deb,$h_fin)=="1") { //Si elle existe dans le calendrier
        $dispo ="0";
      }
      else if ((rech_res($id_res,$id_salle,$date,$h_deb,$h_fin)=="-1") || (rech_calendrier($id_salle,date("d/m/Y",strtotime($date)),$h_deb,$h_fin)=="-1")) {
      // Si la recherche dans le calendrier ou dans la table des réservations donnent des erreurs
        $dispo="-1";
      }
    }
    return ($dispo);
}


//------------------------------------------------------------------------------//
//------------------------- rech-----------------------------------------------//
function rech($id_reservation) //id_reservation est unique
{
  global $conn;
  $rqt = "SELECT * FROM reservation WHERE id_res='$id_reservation'"; //Chercher la réservation dans la table des réservations
  $res = mysqli_query($conn,$rqt);
  if (mysqli_num_rows($res) == "0") {             //Si on la trouve pas => Erreur
  die("Erreur. <br>"); //A REVOIR MAROUA
  return "-1";
  }
  else {
    while ($champ = mysqli_fetch_assoc($res) ){ //Récupérer les données de la réservation
        $rech_salle = rech_salle($id_reservation,$champ["id_salle"],$champ["date"],$champ["h_deb"],$champ["h_fin"]);
        return $rech_salle;
     }
  }
}

//*************************Reorientation******************************** */
function reorientation($id_r){
global $conn;

$trouv="0";
$salles=NULL;
$i=0;
//recuperation des infos de la reservation a partir de son id
$sql1 = "SELECT id_user, id_salle, date,h_deb,h_fin,nom_event FROM reservation WHERE id_res='$id_r ' limit 1";
$result1 = mysqli_query($conn, $sql1);
 if (mysqli_num_rows($result1)>0){
    $row1 = mysqli_fetch_assoc($result1);
        $id_m=$row1["id_user"];
        $id_s=$row1["id_salle"];
        $date=$row1["date"];
        $hd=$row1["h_deb"];
        $hf=$row1["h_fin"];
        $nom_e=$row1["nom_event"];


$cap_salle=mysqli_fetch_assoc(mysqli_query($conn,"SELECT cap from salle where id_salle='$id_s'"))["cap"];


//Rechercher les salles avec cap>=cap_salle et tester leur disponibilité

$sql = "SELECT id_salle, nom_salle,cap FROM salle where cap>='$cap_salle' and id_salle!='$id_s' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)  ) {
      $idsalle=$row["id_salle"];
      $trouv=rech_salle($id_r,$idsalle,$date,$hd,$hf);
      if ($trouv=="1")
      {
          $salles[$i]=$idsalle;
          $i++;
      }
  }

}
if(count($salles)>0){
    $dispo="1";

}
else{
    $dispo="0";
}


  //On retourne dispo pour nous indiquer si on a trouvé au moins une salle disponible ou non
  //si dispo est a 1 alors on retourne un tableau des salles disponibles sinon on retourne null

  return array ('dispo' => $dispo ,'salles'=> $salles);
 }


else{
 echo "Erreur : l'id de la reservation que vous avez entré n'existe pas ";
}


}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


//******************************************************Traitement ******************************************************************** */
function redirect($id_r){
    global $conn;

    $trouv=rech($id_r);
    $iduser=mysqli_fetch_assoc(mysqli_query($conn,"SELECT id_user from reservation where id_res='$id_r'"))["id_user"];
    if ($trouv=="1"){
        $rqt="UPDATE reservation set accept=1 where id_res='$id_r'";

       if( mysqli_query($conn, $rqt)){
        echo "<script> location.href='success.php'; </script>";
        exit; }

    }
    else
    {   $reo=reorientation($id_r);
        if ($reo["dispo"]=="1"){

          
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

  echo '<div class="container" ><br> <br>
  <div class="jumbotron text-center" style="background-color : #303952">
  <div class="text-center align-items-center border border-light p-4">
  <h1 class="display-3" style="color : #f5f6f6">Salle indisponible !</h1> <br> <br>
  <p class="lead" style="color : #f5f6f6"> Veuillez choisir une autre parmi ces salles libres ...</p>
  <form  method="post" action="" >
   <hr>
  <select name="salle"> ';

  $tab=$reo["salles"];
  for ($i=0;$i<count($tab);$i++){
      $id=$tab[$i];
      $nom_salle=mysqli_fetch_assoc(mysqli_query($conn,"SELECT nom_salle from salle where id_salle='$id'"))["nom_salle"];
      //echo $nom_salle."<br>";
      echo '<option value="'.$nom_salle.'">'. $nom_salle.'</option>';


  }
  echo ' </select>   <br> <br> <br>
  <button type="submit" class="btn btn-success" style="background-color: #85d3c5; border : none;  padding: 8px 24px; font-size: 16px; border-radius : 12px; color : #303952">
  <i class="fa fa-arrow-circle-right fa-lg" ></i> Suivant
  </button>  </form><br>
  <form method="post" action="annul_intrem.php" >
<input type="hidden"  id="id_res" name="id_res" value="'.$id_r.'" />
<input type="hidden"  id="acc" name="acc" value="0" />
  <input type="hidden"  id="chg_d" name="chg_d" value="0" />
  <input type="hidden"  id="chg_d" name="chg_s" value="1" />
<button type="submit"  class="btn btn-dark" onclick="myFunction()"  style="background-color: #85d3c5; border : none;  padding: 8px 24px; font-size: 16px; border-radius : 12px; color : #303952">Annuler
</button> </form>
  </div> </div>';

  $nvl_salle="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["salle"])){
  $nvl_salle=test_input($_POST["salle"]);
  $ids=mysqli_fetch_assoc(mysqli_query($conn,"SELECT id_salle from salle where nom_salle='$nvl_salle'"))["id_salle"];
  if (mysqli_query($conn,"UPDATE reservation set id_salle='$ids',accept=1 where id_res='$id_r'")){
    echo "<script> location.href='success.php'; </script>";
    exit;

  } }
}


        }
        else
        {
          echo "<script> location.href='changer_date.php'; </script>";
          exit;
    }
}
}

$id_r= $_SESSION['id_r'];


redirect($id_r);
?>

</body>
</html>
