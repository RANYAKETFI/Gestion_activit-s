<?php session_start();
if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id_user= $_SESSION[ 'id_user' ];} 
   
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css">
     <!-- jQuery first, then Bootstrap JS. -->
    <script src="jq/jquery-3.3.1.min.js"></script>
    <script src="DataTables1/DataTables-1.10.18/js/jquery.dataTables.js"> </script>
    <script src="DataTables1/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="DataTables1/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="DataTables1/JSZip-2.5.0/jszip.js"></script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.ks">  </script>
    <script type="text/javascript" src="DataTables1/datatables.min.js"></script>
    <link rel="shortcut icon" href="logo.PNG">




        <script>
function redirection()
{ var r=document.getElementById("retour");
  r.addEventListener("submit",function()
{
  document.location.href="recupereradmin.php";

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

    <title>comfirmation</title>
  </head>
  <body  style="background-color : #d1d8e0">

<?php
$id_res=$_POST["id_res"];
$salle=$_POST["salle"];
$user=$_POST['user'];
$date=$_POST['date'];
$hf=$_POST['hf'];
$hd=$_POST['hd'];
$descrp=$_POST['descrp'];
echo'
<div class="container" >
  <div class=" col-md-8 offset-md-2" ><br> <br> <div class="jumbotron text-center" style="background-color : #303952">
<img src="https://img.icons8.com/dusk/128/000000/delete-property.png">
      <h1 class="display-4" style="color : #f5f6f6">  Êtes-vous sur de vouloir <ins style="color:	#ff8080;"> annuler</ins>  cette réservation? </h1>
      <table id="table1" class="display" style="color:white;width:100%">
      <thead>
       <tr>
         <th>Id</th>
         <th>Nom d\'utilisateur</th>
         <th>Salle</th>
         <th>Date </th>
         <th>Heure</th>
         <th>Description</th>
      </tr>
      </thead>
      <tbody>
      <br>';
      echo

"<tr><td>".$id_res."</td><td>".$user.
"</td><td>".$salle."</td><td>".$date.
"</td><td>".$hd."-".$hf."</td><td>".$descrp."</td><td>";
echo    "</tbody>"."</table>";

echo'
<br>
<br>
<form class="btn btn-default" method="post" action="annuler.php">
<input type="hidden"  id="id_res" name="id_res" value="'.$id_res.'" />

 <button type="submit" name="button" class="btn btn-danger btn-lg " >

<b > OUI </b>

 </button>

</form>
<form id="retour" class="btn btn-default" method="post" action="annuler.php">
<button type="submit" id="ret" name="button"  class="btn btn-light btn-lg" onclick="redirection()">
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
