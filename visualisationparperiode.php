<?php


session_start();
if (empty($_SESSION[ 'id_user' ])) echo "<script> location.href='./connexion.php'; </script>";
else $id_user= $_SESSION[ 'id_user' ];

function nomsal($idsal) // récupere l'id de la salle a partir de son nom
{
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
    $cmd="SELECT `nom_salle` FROM `salle` WHERE id_salle='$idsal' ";
      $result = mysqli_query($conn, $cmd);
      while($row = mysqli_fetch_assoc($result))
       {
         $nom=$row["nom_salle"];
      }

         }
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

$date1=$_SESSION['vis_ddeb'];
$date2= $_SESSION['vis_dfin'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";
$tablename="reservation";
$data=array();
$d=null;
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if ($conn->connect_error)
 {

    die(" Connection failed: " . $conn->connect_error);
}
else

{// pour tester
  /*$date1="2019-1-1";
  $date2="2020-05-03";*/

   $cmd="SELECT `id_res`, `id_user`,`id_salle`, `date`, `h_deb`, `h_fin`, `an_resp`,`matricule_resp`, `description`,`nom_event` FROM `reservation` WHERE   accord=1 AND date between '$date1' AND '$date2' AND accept=1 AND annul=0";
  $result = mysqli_query($conn, $cmd);

  while($row = mysqli_fetch_assoc($result))
   {
        $d=utf8_encode($row['nom_event']).' | '.nomsal($row["id_salle"]); // nom de l'even + nom de sa salle
        $s=$row["date"].' '.$row["h_deb"];
        $e=$row["date"].' '.$row["h_fin"];

     $data[] = array(
       'title' => $d,

       'start' => $s,
       'end' => $e
    );
  }

   echo json_encode($data);

}

 ?>
