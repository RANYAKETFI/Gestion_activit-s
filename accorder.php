<?php
function username($iduser)
{
  $un=null;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projet";
  $tablename="user";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);

  if (!$conn) // connexion échouée
   {
      die(" Connection failed: " . mysqli_connect_error());
   }
  else //  connexion établie
    { // récuperer l'is de cette salle
    $cmd="SELECT `nom_user` FROM `user` WHERE id_user='$iduser'";
      $result = mysqli_query($conn, $cmd);
      while($row = mysqli_fetch_assoc($result))
       {
         $un=$row["nom_user"];
      }

         }
 return $un;

}
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
    function mail_desaccord($id_res)
    {
      $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "projet";
       $tablename="reservation";
       // Create connection
       $conn = mysqli_connect($servername, $username, $password,$dbname);
       //$verif=  (!empty($_POST["salle"])) && (!empty($_POST['user'])) && (!empty($_POST['date'])) && (!empty($_POST['hf'])) && (!empty($_POST['hd'])) && (!empty($_POST['descrp']));
       if ($conn->connect_error)
        {

           die(" Connection failed: " . $conn->connect_error);
       }

       else
       {
         $cmd2=" SELECT `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`, `an_resp`,`matricule_resp`, `description` FROM `reservation` WHERE `id_res`='$id_res'; ";
         $result = mysqli_query($conn, $cmd2);
         while($row = mysqli_fetch_assoc($result))
          {

         $salle=salle($row["id_salle"]);
         $user=username($row["id_user"]);
         $date=$row["date"];
         $hd=$row["h_deb"];
         $hf=$row["h_fin"];
         $descrp=$row["description"];
        $cmd="SELECT `email` FROM `user` WHERE nom_user='$user'";
        $result = mysqli_query($conn, $cmd);
        while($row = mysqli_fetch_assoc($result))
         {
           $header="";
           $header="MIME-Version: 1.0\r\n";
           $header.='From:"dirteam21.com"<dirteam21@gmail.com>'."\n";
           $header.='Content-Type:text/html; charset="uft-8"'."\n";
           $header.='Content-Transfer-Encoding: 8bit';

           $message='
           <html lang="en" dir="ltr">
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
           <h1 align="center" style="background-color:#303952; color:white; border-style:dotted;">
           <br>
            Votre réservation n\'a pas  été accordée!

            <br>
            <br>
           </h1>
           <hr >
           <div >
           <h2 align="center" style="color:#303952;">  Bonjour, </h2>
           <br>

           <p  style="color:#303952; ">
           <div align="center">

           <font size="4" >
                Nous tenons à vous informer que malheureusement votre réservation ayant les information ci-dessous <b> <ins>  n\'a pas été   accordée</ins> </b>
                par le service culturel de l\'ESI </font >
                </div>
                <br>
                <br>
                <div align="center">
                  <img src="https://img.icons8.com/ultraviolet/64/000000/cancel.png">

                 </div>
                 <br>
                 <br>

                <table   width="80%" align="center" style="background-color:#a5b1c2;border-collapse: collapse;">
                  <tr>
                  <th height="50px"  style=" padding:15px; border: 1px solid black;" > ID DE LA RESERVATION </th>
                  <th height="50px" style=" padding:15px; border: 1px solid black;"> SALLE </th>
                  <th height="50px" style=" padding:15px; border: 1px solid black;"> DATE </th>
                  <th height="50px" style=" padding:15px; border: 1px solid black;"> HEURES </th>
                  <th  height="50px" style=" padding:15px; border: 1px solid black;"> Description </th>
                  </tr>
                  <tr align="center" >
                    <td height="50px"  style=" padding:15px; border: 1px solid black;" ><font  size="4"> <b > '.$id_res.' </b> </font> </td>
                    <td height="50px"  style=" padding:15px; border: 1px solid black;" > <font  size="4"> <b >'.$salle.' </b> </font> </td>
                    <td height="50px"  style=" padding:15px; border: 1px solid black;"  > <font  size="4"> <b > '.$date.'</b> </font> </td>
                    <td height="50px"  style=" padding:15px; border: 1px solid black;"  > <font  size="4"> <b >  '.$hd.'--'.$hd.'</b> </font></td>
                    <td height="50px"  style=" padding:15px; border: 1px solid black;" ><font  size="4"> <b > '.$descrp.'</b> </font>  </td>
                    <tr>
                </table>
               <td>

               <div align="center">
                 <font color="#303952" align="center" size="4" >
                  Vous pouvez toujours réserver de nouveau par
                <a href="localhost/projet/recupereradmin.php"> <ins> <b> ici </b> </ins> </a>
                        </font >
                        </div>
                      </p>
           </p>
             <br>
             <br>

           </div>
             </body>

           </html>

           ';

           mail($row["email"],"Réservation non accordée !",$message,$header);

         }
}
      }
    }

   function mail_accord($id_res)
   {  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";
    $tablename="reservation";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    if ($conn->connect_error)
     {

        die(" Connection failed: " . $conn->connect_error);
    }
    else

    {
      $cmd2=" SELECT `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`, `an_resp`,`matricule_resp`, `description` FROM `reservation` WHERE `id_res`='$id_res'; ";
      $result = mysqli_query($conn, $cmd2);
      while($row = mysqli_fetch_assoc($result))
       {

      $salle=salle($row["id_salle"]);
      $user=username($row["id_user"]);
      $date=$row["date"];
      $hd=$row["h_deb"];
      $hf=$row["h_fin"];
      $descrp=$row["description"];
     $cmd="SELECT `email` FROM `user` WHERE nom_user='$user'";
     $result = mysqli_query($conn, $cmd);
     while($row = mysqli_fetch_assoc($result))
      {
     $cmd="SELECT `email` FROM `user` WHERE nom_user='$user'";
     $result = mysqli_query($conn, $cmd);
     while($row = mysqli_fetch_assoc($result))
      {
        $header="";
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"dirteam21.com"<dirteam21@gmail.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
        <html lang="en" dir="ltr">
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
         Votre réservation a été accordée!

         <br>
         <br>
        </h1>
        <hr color="#07756a">
        <div >
        <h2 align="center" style="color:#303952;">  Bonjour, </h2>
        <br>

        <p  style="color:#303952; ">
        <div align="center">

        <font size="4" >
             Nous tenons à vous informer que votre réservation ayant les information ci-dessous a été bien <b> <ins>  accordée</ins> </b>
             par le service culturel de l\'esi </font >
             </div>
             <br>
             <br>
             <div align="center">
               <img src="https://img.icons8.com/flat_round/64/000000/checkmark.png">

              </div>
              <br>
              <br>

             <table   width="80%" align="center" style="background-color:#a5b1c2;border-collapse: collapse;">
               <tr>
               <th height="50px"  style=" padding:15px; border: 1px solid black;" > ID DE LA RESERVATION </th>
               <th height="50px" style=" padding:15px; border: 1px solid black;"> SALLE </th>
               <th height="50px" style=" padding:15px; border: 1px solid black;"> DATE </th>
               <th height="50px" style=" padding:15px; border: 1px solid black;"> HEURES </th>
               <th  height="50px" style=" padding:15px; border: 1px solid black;"> DESCRIPTION </th>
               </tr>
               <tr align="center" >
                 <td height="50px"  style=" padding:15px; border: 1px solid black;" ><font  size="4"> <b > '.$id_res.' </b> </font> </td>
                 <td height="50px"  style=" padding:15px; border: 1px solid black;" > <font  size="4"> <b >'.$salle.' </b> </font> </td>
                 <td height="50px"  style=" padding:15px; border: 1px solid black;"  > <font  size="4"> <b > '.$date.'</b> </font> </td>
                 <td height="50px"  style=" padding:15px; border: 1px solid black;"  > <font  size="4"> <b >  '.$hd.'--'.$hd.'</b> </font></td>
                 <td height="50px"  style=" padding:15px; border: 1px solid black;" ><font  size="4"> <b > '.$descrp.'</b> </font>  </td>
                 </tr>
             </table>
            <td>
            <div align="center">
              <font color="#303952" align="center" size="4" >
               Vous pouvez aussi consulter,modifier ou annuler cette réservation par ici :
                   <a href="localhost/projet/recupereradmin.php"> <ins> <b> ici </b> </ins> </a>
                         </font >
                         </div>
                       </p>
        </p>
          <br>
          <br>

        </div>
          </body>

        </html>

        ';

        mail($row["email"],"Réservation acceptée !",$message,$header);

      }

   }
 }}}
     function accorder($id,$accord)
     {
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "projet";
       $tablename="reservation";
       // Create connection
       $conn = mysqli_connect($servername, $username, $password,$dbname);
       if ($conn->connect_error)
        {

           die(" Connection failed: " . $conn->connect_error);
       }
       else
       {
         if ($accord==1)
         {
           $cmd="UPDATE reservation SET `accord`=1 WHERE id_res='$id'";
           if (mysqli_query($conn, $cmd))  {
             mail_accord($id);
                }
               else {
           echo "Error updating record: " . $conn->error;
         }
       }
         else
         {
           $cmd="UPDATE reservation SET `accord`=0 WHERE id_res='$id'";
           if (mysqli_query($conn, $cmd))  {
             mail_desaccord($id);

                }
               else {
           echo "Error updating record: " . $conn->error;
         }
         }
         // rechercher ...
         }

       }

       $id_res=$_POST['id_res'];
       $accord=$_POST['d'];

         accorder($id_res,$accord);
           echo"<script>
          location.href='recupereradmin.php'     ;     </script>";




     ?>
