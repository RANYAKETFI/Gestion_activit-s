    <?php

session_start();
if (empty($_SESSION[ 'id_user' ])) echo "<script> location.href='./connexion.php'; </script>";
else $id_user= $_SESSION[ 'id_user' ];

    function idsal($salle) // récupere l'id de la salle a partir de son nom
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
        $cmd="SELECT `id_salle` FROM `salle` WHERE nom_salle='$salle'";
          $result = mysqli_query($conn, $cmd);
          while($row = mysqli_fetch_assoc($result))
           {
             $id=$row["id_salle"];
          }

             }
     return $id;
    }
  
   $idsal=$_SESSION['vis_sal'];
  $idsal=idsal($idsal);
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
    {

      $cmd="SELECT `id_res`, `id_user`, `date`, `h_deb`, `h_fin`, `an_resp`,`matricule_resp`, `description`,`nom_event` FROM `reservation` WHERE  id_salle='$idsal' AND accord=1 AND accept=1 AND annul=0";

      $result = mysqli_query($conn, $cmd);

      while($row = mysqli_fetch_assoc($result))
       {
            $d=utf8_encode($row['nom_event']);
            $s=$row["date"].' '.$row["h_deb"];
            $e=$row["date"].' '.$row["h_fin"];
         $data[] = array(
           'title' => $d,
      /* 'id_salle' => $row["id_salle"],
         'id_user' => $row["id_user"],*/
           'start' => $s,
           'end' => $e
        );
      }
       echo json_encode($data);
    }
    //  $data=array();

     ?>
