<?php session_start();
if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id=$_SESSION['id_user'];} 

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

      <title>Accueil</title>
      <link rel="shortcut icon" href="images/logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <link href="fontawsome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="DataTables/datatables.min.js"></script>


    <script type="text/javascript" src="js/pdfmake.min.js"></script>
    <script type="text/javascript" src="js/vfs_fonts.js"></script>
    <script type="text/javascript" src="js/b-html5-1.5.1_datatables.min.js"></script>

    <script>

        $("table").dataTable();

      $(document).ready( function () {
        $('#table').DataTable( {
          responsive:true,
          paging: true,
             dom: 'Bfrtip',
        buttons: [
     'excel','pdf'
     ]
    } );
    } );
    $(document).ready( function () {
      $('#table1').DataTable( {
        responsive:true,
        paging: true,
            dom: 'Bfrtip',
      buttons: [
    'excel','pdf'
    ]
  } );
  } );
    </script>
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
  background-image: url('images/background.JPG');
  background-repeat: repeat-y	;
  background-size:100% ;
  height: 100%;
    font-family: helvetica;


}
body h1 {
  color: #f5f6f6;
}
.line {
  display: inline-block;
  width: 38%;
  height: 2px;
  background-color:#07756a;
}
.dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  background-color:#07756a;
  border-radius: 50%;
  margin: 0 10px;
  align-items: center;
}
.title {
  text-align:center;
  font-weight: bold;
  font-size: 30px;
  width: 20%;
  font-family:Palatino;  text-transform: uppercase;
}
.container{
   -webkit-box-shadow: 0px 0px 200px 50px rgba(245,246,246,1);
   margin-top: 10%;

   background: -webkit-linear-gradient(bottom,#303952,#303952,#a5b1c2);
   padding: 25px;   border-radius: 2rem;
}
table.display thead th {
  font-size: 15px;
  font-weight: bold;
  color: #f5f6f6;
  text-align: center;


}
</style>


  </head>
  <body >
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="projet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// c'est un utilisateur
// on vérifie dans le cas ou c'est un club
$rqt3 = "SELECT  `profession` FROM `user` WHERE id_user='$id'";
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
 echo' <div class="wrapper" >

<div class="sidebar" >

<div class="logo">
  <a href="" class="simple-text">
    <img src="images/logo.PNG" alt="logo_équipe_21" height="100" width="100">
  </a>
</div>

  <div class="sidebar-wrapper">
  <ul class="nav">
  <li class="active" >
      <a href="accueil_user.php">
        <i class="fas fa-home"></i>
          <p>Accueil</p>
      </a>
  </li>
  <li >
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
?>
<div style="float : right; width:80%">
  <!--
      <div class="container" style="background: #f5f6f6;" >
        <div  style="background: #f5f6f6;align-items: center;   display: flex;   color:#07756a; margin: 10px;" >
          <span class="line"></span>
          <span class="dot"></span>
        <span class="title">
        Bienvenue à BOOK-AT-ESI
        </span>
        <span class="dot"></span>
       <span class="line"></span>
      </div>
          <center> <img src="images/logo_acc.png" alt="BOOK-AT-ESI" height="350" width="400"> </center>

  <?php /*    global $conn; $nomuser=mysqli_fetch_assoc(mysqli_query($conn,"SELECT nom_user from user where id_user='$id'"))["nom_user"];
  echo" <h1 style='color:#07756a; font-size:50px; font-family:Palatino;   font-weight: bold;'><center> Ravi de vous revoir ".$nomuser."</center></h1> <br> <br> "; */ ?>
</div> -->
<div class="container" >
        <h1><center> Mes événements</center></h1>
      <table id="table" class="display" style="width:100%">
    <thead>
 <tr>
  <th>Id</th>
  <th>Nom de l'événement</th>
  <th>Date </th>
  <th>Heure</th>
  <th>Accord de <br> l'administaration</th>
  <th>Salle</th>
  <th>Modifier</th>
  <th>Annuler</th>
  <th>Description</th>
 </tr>
</thead>
    <tbody>
<?php


function recup_user($id_u)
{
    global $conn;
     // on verifie si cet utilisateur existe
    $sql="SELECT nom_user from user where id_user='$id_u' limit 1";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
       $row=mysqli_fetch_assoc($result);
       $nom_u=$row["nom_user"];


       $curr_date=date("Y-m-d");
       $acc=NULL;
       $salle=NULL;
       //On récupère toutes les réservations courantes et non annulées  de cet utilisateur
       $sql2="SELECT `id_res`,`nom_event`,`id_salle`,`date`,`h_deb`,`h_fin`,`accord`,`accept`,`description` From reservation where (id_user='$id_u') and (annul=0) and (date>='$curr_date') and ((accord!=0) or (accord is NULL))";
       $result2=mysqli_query($conn,$sql2);
       if (mysqli_num_rows($result2)>0){
        while($row2 = mysqli_fetch_assoc($result2)) {
            $id_s=$row2["id_salle"];
            $nom_salle=mysqli_fetch_assoc(mysqli_query($conn,"SELECT nom_salle from salle where id_salle='$id_s'"))["nom_salle"];
            if ($row2["accord"]== NULL)
            {
              //  $acc="En attente";
                $acc='<i class="fas fa-clock" style="color:dark"></i>';

            }
            else
            {
                if ($row2["accord"]==1)
                {
                  //  $acc="<strong>Accordée</strong>";
                    $acc='<i class="fas fa-check-circle"style="color:green" ></i>';
                                  }
                else {
                    //$acc="Refusée";
                    $acc='<i class="fas fa-times-circle" style="color:red" ></i>';
                }
            }
            if ($row2["accept"]== 0)
            {
                //$salle="En attente";
                $salle='<i class="fas fa-clock" style="color:dark"></i>';
            }
            else
            {
                $salle=$nom_salle;
            }
             //Affichage des informations avec boutton de modification et d'annulation
            echo "<tr><td>" .$row2["id_res"]."</td><td>".$row2["nom_event"]."</td><td>".$row2["date"]."</td><td>".$row2["h_deb"]."-".$row2["h_fin"]."</td><td><center>".$acc."</center></td><td>".$salle."</td><td>".
            '<form method="POST" action="modification_form.php">
            <input type="hidden" name="id_modif" value="'.$row2["id_res"].'" />
            <center><button type="submit" class="btn btn-dark">
              <i class="fas fa-pen"></i>
            </button></center>
            </form>'."</td><td>".'
            <form method="post" action="annul_intrem.php" >
            <input type="hidden"  id="id_res" name="id_res" value="'.$row2["id_res"].'" />
            <input type="hidden"  id="acc" name="acc" value="1" />
            <input type="hidden"  id="chg_d" name="chg_d" value="0" />
            <input type="hidden"  id="chg_d" name="chg_s" value="0" />
            <center><button type="submit" class="btn btn-dark">
            <img src="https://img.icons8.com/office/16/000000/delete-sign.png">
            </button></center>
            </form>'."</td><td>".$row2["description"]."</td></tr>";


        }

       }
      echo    "</tbody>"."</table> </div>";

       echo '
       <div class="container" >

     <h1><center>Mes événements refusés </center></h1>
       <table id="table1" class="display" style="width:100%">
          <thead>
       <tr>
        <th>Id</th>
        <th>Nom de l événement</th>
        <th>Date </th>
        <th>Heure</th>
        <th>Accord de <br>l administaration</th>
        <th>Salle</th>
        <th>Description</th>
       </tr>
      </thead>
          <tbody>';
       $acc=NULL;
       $salle=NULL;
       $sql2="SELECT `id_res`,`nom_event`,`id_salle`,`date`,`h_deb`,`h_fin`,`accord`,`accept`,`description` From reservation where (id_user='$id_u') and (annul=0) and (date>='$curr_date') and (accord=0)";
       $result2=mysqli_query($conn,$sql2);
       if (mysqli_num_rows($result2)>0){
        while($row2 = mysqli_fetch_assoc($result2)) {
            $id_s=$row2["id_salle"];
            $nom_salle=mysqli_fetch_assoc(mysqli_query($conn,"SELECT nom_salle from salle where id_salle='$id_s'"))["nom_salle"];
            if ($row2["accord"]== NULL)
            {
              //  $acc="En attente";
                $acc='<i class="fas fa-clock" style="color:dark"></i>';

            }
            else
            {
                if ($row2["accord"]==1)
                {
                  //  $acc="<strong>Accordée</strong>";
                    $acc='<i class="fas fa-check-circle"style="color:green" ></i>';
                                  }
                else {
                    //$acc="Refusée";
                    $acc='<i class="fas fa-times-circle" style="color:red" ></i>';
                }
            }
            if ($row2["accept"]== 0)
            {
                //$salle="En attente";
                $salle='<i class="fas fa-clock" style="color:dark"></i>';
            }
            else
            {
                $salle=$nom_salle;
            }

            echo "<tr><td>" .$row2["id_res"]."</td><td>".$row2["nom_event"]."</td><td>".$row2["date"]."</td><td>".$row2["h_deb"]."-".$row2["h_fin"]."</td><td><center>".$acc."</center></td><td>".$salle."</td><td>".$row2["description"]."</td></tr>";


        }
       }

       echo    "</tbody>"."</table> </div> <br><br><br>";

    }
    else {
        echo "Cet utilisateur n'existe pas <br>";
    }
}



recup_user($id);
mysqli_close($conn);

?>
</div>
</div>
</div>
</div>
</body>
</html>
