<?php

session_start();
if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$iduser=$_SESSION["id_user"];} 



$servername = "localhost";
$username = "root";
$password = "";
$db ="projet";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/**************************************************************************** */
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

function mail_annuler_admin($id_res)
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
       Une réservation a été annulée  !
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

           Nous tenons à vous informer qu\'une réservation sur -BOOK AT ESI - ayant les information ci-dessous a été  <b> <ins> annulée </ins> </b>!
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
  mail($email,"RÉSERVATION ANNULÉE -BOOK AT ESI -!",$message,$header);

}
}}  
/******************************************************************************** */
function Annuler($id_res)
{ global $conn;
 

  $sql ="UPDATE `reservation` SET `annul`=1 WHERE id_res='$id_res' ";
 $result = mysqli_query($conn, $sql);

}

$iduser=$_SESSION["id_user"];
$id_res=$_POST["id_res"];
Annuler($id_res);
mail_annuler_admin($id_res);
if($iduser==2){  // si c'est l'admin
echo "<script> location.href='recupereradmin.php'; </script>";
exit; 
 }
else{ 
    echo "<script> location.href='accueil_user.php'; </script>";
    exit; 
    
}
          
?>
