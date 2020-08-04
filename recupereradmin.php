<?php
session_start();
if (empty($_SESSION[ 'id_user' ])) echo "<script> location.href='./connexion.php'; </script>";
else $iduser= $_SESSION[ 'id_user' ];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables1/datatables.min.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.7.2-web/css/all.min.css">
      <link rel="shortcut icon" href="logo.PNG">
    <style>
    .container{
      width: 60%;
      margin-right: auto; margin-left:30% ;
      position: relative;
      min-height: 100vh;
      padding-top: 5%;
      padding-left: 4%;
    }
    body {
       font-family:  "Helvetica Neue", Helvetica, Arial, sans-serif;

    }

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
      color: #303952;
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
    h2{
      color: #303952;
      text-align: center;
    }
    .btn{
      background-color:#ffffff ; /* Blue background */
      border: none; /* Remove borders */

    }
    table.dataTable tbody td{
      text-align: center;
    }
    table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
      border-top: 1px dashed #303952; }
    table.dataTable.row-border tbody tr:first-child th,
    table.dataTable.row-border tbody tr:first-child td, table.dataTable.display tbody tr:first-child th,
    table.dataTable.display tbody tr:first-child td {
      border-top: none; }
    table.dataTable.cell-border tbody th, table.dataTable.cell-border tbody td {
      border-top: 1px dashed #303952;
      border-right: 1px dashed #303952; }
    table.dataTable.cell-border tbody tr th:first-child,
    table.dataTable.cell-border tbody tr td:first-child {
      border-left: 1px dashed #303952; }
    table.dataTable.cell-border tbody tr:first-child th,
    table.dataTable.cell-border tbody tr:first-child td {
      border-top: none; }
      .dataTables_wrapper .dataTables_paginate {
       float: right;
       text-align: right;
       padding-top: 0.25em; }
       .dataTables_wrapper .dataTables_paginate .paginate_button {
         box-sizing: border-box;
         display: inline-block;
         min-width: 1.5em;
         padding: 0.5em 1em;
         margin-left: 2px;
         text-align: center;
         text-decoration: none !important;
         cursor: pointer;
         *cursor: hand;
         color: #333333 !important;
         border: 1px solid transparent;
         border-radius: 2px; }
         .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
           color: #333333 !important;
           border: 1px solid #379886;
           background-color: #eef9f7;
           background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #eef9f7), color-stop(100%, #85d3c5));
           /* Chrome,Safari4+ */
           background: -webkit-linear-gradient(top, #eef9f7 0%, #85d3c5 100%);
           /* Chrome10+,Safari5.1+ */
           background: -moz-linear-gradient(top, #eef9f7 0%, #85d3c5 100%);
           /* FF3.6+ */
           background: -ms-linear-gradient(top, #eef9f7 0%, #85d3c5 100%);
           /* IE10+ */
           background: -o-linear-gradient(top, #eef9f7 0%, #85d3c5 100%);
           /* Opera 11.10+ */
           background: linear-gradient(to bottom, #eef9f7 0%, #85d3c5 100%);
           /* W3C */ }
         .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
           cursor: default;
           color: #666 !important;
           border: 1px solid transparent;
           background: transparent;
           box-shadow: none; }
         .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
           color: white !important;
           border: 1px solid #07756a;
           background-color: #1af1dc;
           background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1af1dc), color-stop(100%, #07756a));
           /* Chrome,Safari4+ */
           background: -webkit-linear-gradient(top, #1af1dc 0%, #07756a 100%);
           /* Chrome10+,Safari5.1+ */
           background: -moz-linear-gradient(top, #1af1dc 0%, #07756a 100%);
           /* FF3.6+ */
           background: -ms-linear-gradient(top, #1af1dc 0%, #07756a 100%);
           /* IE10+ */
           background: -o-linear-gradient(top, #1af1dc 0%, #07756a 100%);
           /* Opera 11.10+ */
           background: linear-gradient(to bottom, #1af1dc 0%, #07756a 100%);
           /* W3C */ }
         .dataTables_wrapper .dataTables_paginate .paginate_button:active {
           outline: none;
           background-color: #0aa596;
           background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #0aa596), color-stop(100%, #066b61));
           /* Chrome,Safari4+ */
           background: -webkit-linear-gradient(top, #0aa596 0%, #066b61 100%);
           /* Chrome10+,Safari5.1+ */
           background: -moz-linear-gradient(top, #0aa596 0%, #066b61 100%);
           /* FF3.6+ */
           background: -ms-linear-gradient(top, #0aa596 0%, #066b61 100%);
           /* IE10+ */
           background: -o-linear-gradient(top, #0aa596 0%, #066b61 100%);
           /* Opera 11.10+ */
           background: linear-gradient(to bottom, #0aa596 0%, #066b61 100%);
           /* W3C */
           box-shadow: inset 0 0 3px #111; }
       .dataTables_wrapper .dataTables_paginate .ellipsis {
         padding: 0 1em; }


    </style>

      <!-- jQuery library -->
    <script src="jq/jquery-3.3.1.min.js"></script>
    <script src="DataTables1/DataTables-1.10.18/js/jquery.dataTables.js"> </script>
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="DataTables1/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="DataTables1/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="DataTables1/scroller-2.0.0/js/dataTables.scroller.js"> </script>
    <script src="DataTables1/JSZip-2.5.0/jszip.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#table').DataTable( {
        responsive:true,
        dom: 'Bfrtip',
        buttons: [ 'excel','pdf'],
         scrollY:        '50vh',
        scrollCollapse: true,
        paging:         false
    } );
} );
$(document).ready(function() {
    $('#table1').DataTable( {

        responsive:true,
        dom: 'Bfrtip',
        buttons: [ 'excel','pdf'],
         pagingType: 'full_numbers',
    } );
} );
    </script>

  </head>
  <body style="background-color:#f5f6f6;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;" >
    <div class="sidebar" >

    <div class="logo">
      <a href="" class="simple-text">
        <img src="logo.PNG" alt="logo_équipe_21" height="100" width="100">
      </a>
    </div>

      <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="recupereradmin.php">
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
                    <a href=" import.php">
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
                        <p>Modifier mon nom d\'utilisateur</p>
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
                    <a href="aide_admin.php">
                        <i class="fas fa-question-circle"></i>
                        <p>Aide</p>
                    </a>
                </li>
            </ul>
      </div>
    </div>
    <!-- end of sidebar -->

    <div class="container">

   <div class="">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" >
          <li class="active"><a data-toggle="tab" href="#nonaccord">En attente</a></li>
          <li><a data-toggle="tab" href="#accord">Accordés</a></li>
        </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div  class="tab-pane fade in active" id="nonaccord">
      <br>
      <h2>Événements à accorder</h2>
      <hr width="15%" style="border-top-color: #a5b1c2;">
      <br>

      <table id="table" class=" display compact row-border" style="width:100%">
        <thead>
          <th style="text-align:center">Id</th>
          <th style="text-align:center">Utilisateur</th>
          <th style="text-align:center">Salle</th>
          <th style="text-align:center">Date </th>
          <th style="text-align:center">Heure</th>
          <th style="text-align:center">Accorder</th>
          <th style="text-align:center">Refuser</th>
          <th style="text-align:center">Description</th>
        </thead>

    <tbody >


    <?php

       

    function recuperer_admin()
      {
        // connexion à la base de donées
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

        {
          // connexion avec succés
          $curr_date=date("Y-m-d");
          $cmd1=" SELECT `id_res`, `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`, `an_resp`,`matricule_resp`, `description` FROM `reservation` WHERE (`accord` is null) and (date>='$curr_date')";
          $result = mysqli_query($conn, $cmd1);

// evenement en attente  - bouton accorder -
          while($row = mysqli_fetch_assoc($result))
           {

          $id_res=$row["id_res"];
          $salle=salle($row["id_salle"]);
          $user=username($row["id_user"]);
          $date=$row["date"];
          $hd=$row["h_deb"];
          $hf=$row["h_fin"];
          $descrp=$row["description"];

          // réservation déja accordées
          echo "<tr><td>".$id_res."</td><td>".$user."</td><td>".$salle."</td><td>".$date."</td><td>".$hd."-".$hf."</td><td>".
          '<form  id="y" method="post" action="accorder.php">
      <input type="hidden" name="id_res" value="'.$id_res.'" />
      <input type="hidden" name="d" value="1" />

      <button type="submit" class="btn " >
      <i class="fas fa-check-circle" style="font-size:24px;color:#07756a"></i>
      </button> </form>'  ."</td><td>".
      '<form method=POST action=accorder.php>
    <input type="hidden" name="id_res" value="'.$id_res.'" />
    <input type="hidden" name="d" value="0" />

      <button type="submit" class="btn" >
      <i class="fas fa-times-circle"  style="font-size:24px ;color:	#B22222"></i>
        </button> </form> ' ."</td><td>"  .$descrp."</td></tr>";
  echo'   ';
          }
            echo    "</tbody>";
            echo "  </table>  ";
            echo "</div>";
// evenement accordés - bouton annuler -
       echo '<div class="tab-pane fade" id="accord">';
       echo "<br>";
        echo '<h2> Événements accordés </h2>
        <hr width="15%" style="border-top-color: #a5b1c2;">
        <br>
        <table id="table1" class="display compact row-border" style="width:100%">
        <thead>
         <tr>
           <th style="text-align:center">Id</th>
           <th style="text-align:center">Utilisateur</th>
           <th style="text-align:center">Salle</th>
           <th style="text-align:center">Date </th>
           <th style="text-align:center">Heure</th>
           <th style="text-align:center">Annuler</th>
           <th style="text-align:center">Description</th>
        </tr>
      </thead>
      <tbody>';

          $cmd2=" SELECT `id_res`, `id_salle`, `id_user`, `date`, `h_deb`, `h_fin`, `an_resp`,`matricule_resp`, `description` FROM `reservation` WHERE `accord`=1 AND `annul`=0 and (date>='$curr_date'); ";
          $result = mysqli_query($conn, $cmd2);
          while($row = mysqli_fetch_assoc($result))
           {
          $id_res=$row["id_res"];
          $salle=salle($row["id_salle"]);
          $user=username($row["id_user"]);
          $date=$row["date"];
          $hd=$row["h_deb"];
          $hf=$row["h_fin"];
          $descrp=$row["description"];

          echo "<tr><td>".$id_res."</td><td>".$user."</td><td>".$salle."</td><td>".$date."</td><td>".$hd."-".$hf."</td><td>".
          '<form method="post" action="interm_annul.php">
          <input type="hidden"  id="id_res" name="id_res" value="'.$id_res.'" />
          <input type="hidden"  id="salle" name="salle" value="'.$salle.'" />
          <input type="hidden"  id="user" name="user" value="'.$user.'" />
          <input type="hidden"  id="date" name="date" value="'.$date.'" />
          <input type="hidden"  id="hd" name="hd" value="'.$hd.'" />
          <input type="hidden"  id="hf" name="hf" value="'.$hf.'" />

  <input type="hidden"  id="descrp" name="descrp" value="'.$descrp.'" />

          <button type="submit"  class="btn" onclick="myFunction()">
          <i class="fas fa-trash"  style="font-size:24px;color:#303952"></i>
        </button> </form>'."</td><td>".$descrp."</td></tr>";


        }
          echo    "</tbody>";
          echo "
          </table>";
          echo "</div>";
              }
    }
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

    recuperer_admin();
     ?>

     </div>
   </div>
     </div>
  </body>
</html>
