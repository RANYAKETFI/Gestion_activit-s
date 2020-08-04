
    <?php
    session_start(); //toutes vos pages doivent commencer par session_start
    if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id_user= $_SESSION[ 'id_user' ];} 
   



    $servername = "localhost";
    $username = "root";
    $password = "";
    $nomBDD = "projet";

    // Créer connexion
    $conn = mysqli_connect($servername, $username, $password,$nomBDD);
    // IMPORTANT !! => $conn est une variable globale
    // Donc c'est un  booleen qui vérifie la connx

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


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

     function modification($id,$nvldate,$nvlsalle,$nvlhd,$nvlhf,$nvldescrp)
    {
      $out=0;

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "projet";
      $tablename="reservation";
      // Create connection
      $conn = mysqli_connect($servername, $username, $password,$dbname);

      if (!$conn) // connexion échouée
       {
          die(" Connection failed: " . mysqli_connect_error());
      }
      else

      { // connexion avec succés

/*
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
} */
// sauvegarder la salle en cas ou elle n'est pas dispo ;

$cmd1=" SELECT  `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`,`description` FROM `reservation` WHERE id_res='$id'";
$result = mysqli_query($conn, $cmd1);
while($row = mysqli_fetch_assoc($result))
 {
$s=$row["id_salle"];
}

// rechercher si c possible de modifier
//header('Location: ./erreur_date.html');

$bool=rech_salle($id,$nvlsalle,$nvldate,$nvlhd,$nvlhf);

if ($bool==0) {
$out=1;
  header('Location: ./modif_ech.php');
  exit();
}
if ($out==0) // modifier la reservation
{
        $cmd="UPDATE reservation SET `date`='$nvldate',`id_salle`='$nvlsalle',`h_deb`='$nvlhd',`h_fin`='$nvlhf',`modifie`=1,`accept`=1,`description`='$nvldescrp' WHERE id_res='$id'";
        if (mysqli_query($conn, $cmd))  {
      // modification réussie
      header('Location: ./modif_eff.php');
      exit();
             }
            else {

        echo "Error updating record: " . $conn->error;
      }

}

       }
    }
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
    
    $id=$_POST["id_modif"];
    $_SESSION["modif_id"]=$id;

    $nvldate=$_POST['nvldate'];

    $nvlhd=$_POST['nvlhd'];

    $nvlhf=$_POST['nvlhf'];
    $nvldescrp=$_POST['nvldescrp'];
    $nvlsalle=$_POST['nvlsalle'];

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

   $today=date('Y-m-d');

    if (!empty($nvldate ))
    {

    $datetime1 =strtotime($nvldate);
    $datetime2 =strtotime($today);
    $diff=$datetime1-$datetime2;
    $diff=($diff)/(60 * 60 * 24);

     if ((!empty($nvlhd) ) AND  (!empty($nvlhf)))
     {

       if ($nvlhd<$nvlhf)
       {
         if ($diff>7 )
         {  modification($id,$nvldate,$nvlsalle,$nvlhd,$nvlhf,$nvldescrp);
         echo "<script>
         location.href='./accueil_user.php'; </script>";

         }
         else
         {
           echo "<script>
           location.href='./accueil_user.php'; </script>";

    }
       }
       else
       {
         echo "<script>
         location.href='./accueil_user.php'; </script>";
       }
     }
     else
     {
       if ($diff>7 )
       {
  modification($id,$nvldate,$nvlsalle,$nvlhd,$nvlhf,$nvldescrp);
  echo "<script>
  location.href='./accueil_user.php'; </script>";
}
       else
       {
         echo "<script>
         location.href='./accueil_user.php'; </script>";
     }
     }
    }

    else
    {
      if ((empty($nvlhf))or(empty($nvlhd)))
      {
  modification($id,$nvldate,$nvlsalle,$nvlhd,$nvlhf,$nvldescrp);
         echo "<script>
alert('modification effectuée ! ');
         location.href='./accueil_user.php'; </script>";
      }
      else
      {
    if ($nvlhd<$nvlhf)
    {
  modification($id,$nvldate,$nvlsalle,$nvlhd,$nvlhf,$nvldescrp);
  echo "<script>
alert('modification effectuée ! ');
  location.href='./accueil_user.php'; </script>";}

    else
    {   echo "<script>
       location.href='./accueil_user.php'; </script>";
    }

}
    }


    ?>
