<?php session_start();
if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id=$_SESSION['id_user'];} 

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="shortcut icon" href="logo.png">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<style media="screen">
.dataTables_filter {
display: none;
}
img{
  border-radius: 8px;
}
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap-4.2.1-dist/css/bootstrap.css"> <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>

        <script type="text/javascript" src="DataTables/datatables.min.js"></script>


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.js"></script>

        <script>
function redirection()
{ var r=document.getElementById("retour");
  r.addEventListener("submit",function()
{
  document.location.href="accueil_user.php";

}
)

}

            $("table").dataTable();

          $(document).ready( function () {
            $('#table').DataTable( {
              responsive:true,
              paging: false,
                 dom: 'Bfrtip',

        } );
        } );
        $(document).ready( function () {
          $('#table1').DataTable( {
            responsive:true,
            paging: false,
                dom: 'Bfrtip',

      } );
      } );
        </script>

    <title>Annuler</title>
  </head>
  <body  style="background-color : #d1d8e0">

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

$id_res=$_POST["id_res"];
$acc=$_POST["acc"];
$chg_d=$_POST["chg_d"];
$chg_s=$_POST["chg_s"];
if (($chg_d==1 ) && ($acc==0) && ($chg_s==0)){
    $location="changer_date.php";
}
else {
   if (($chg_d==0 ) && ($acc==1) && ($chg_s==0))
   {
    $location="accueil_user.php";
  }
    else {
      $location="traitement.php";
    }
}
$sql="SELECT * FROM reservation where id_res='$id_res' limit 1 ";
$result1 = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result1)>0){
    $row1 = mysqli_fetch_assoc($result1);
      
        $id_s=$row1["id_salle"];
        $date=$row1["date"];
        $hd=$row1["h_deb"];
        $hf=$row1["h_fin"];
        $nom_e=$row1["nom_event"];
        $descrp=$row1["description"];
        $salle=mysqli_fetch_assoc(mysqli_query($conn,"SELECT nom_salle from salle where id_salle='$id_s'"))["nom_salle"];
 }
echo'
<div class="container" >
  <div class=" col-md-8 offset-md-2" ><br> <br> <div class="jumbotron text-center" style="background-color : #303952">
<img src="https://img.icons8.com/dusk/128/000000/delete-property.png">
      <h1 class="display-4" style="color : #f5f6f6">  Êtes-vous sur de vouloir <ins style="color:	#ff8080;"> annuler</ins>  cette réservation? </h1>
      <table id="table1" class="display" style="color:white;width:100%">
      <thead>
       <tr>
         <th>Id</th>
         <th>Nom de l'."'".'événement</th>
         <th>Salle</th>
         <th>Date </th>
         <th>Heure</th>
         <th>Description</th>
      </tr>
      </thead>
      <tbody>
      <br>';
      echo

"<tr><td>".$id_res."</td><td>".$nom_e.
"</td><td>".$salle."</td><td>".$date.
"</td><td>".$hd."-".$hf."</td><td>".$descrp."</td><td>";
echo    "</tbody>"."</table>";

echo'
<br>
<br>
<form class="btn btn-default" method="post" action="annuler_user.php">
<input type="hidden"  id="id_res" name="id_res" value="'.$id_res.'" />

 <button type="submit" name="button" class="btn btn-danger btn-lg " >

<b > OUI </b>

 </button>

</form>
<form id="retour" class="btn btn-default" method="post" action="'.$location.'">
<input type="hidden"  id="id_res" name="id_res" value="'.$id_res.'" />
<button type="submit" id="ret" name="button"  class="btn btn-light btn-lg" >
<b >Retour</b>

</button>
</form>

';

  echo'  </div>
</div>
';
 ?>
</tbody>
  </body>
</html>
