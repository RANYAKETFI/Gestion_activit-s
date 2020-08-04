<?php session_start(); 
if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id=$_SESSION['id_user'];} 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mettre à jour mon calendrier</title>
  <link rel="shortcut icon" href="logo.PNG">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="./nav/fontawsome/css/all.css" rel="stylesheet">
    <!-- Bootstrap core CSS     -->


    <link rel="stylesheet" href="./nav/bootstrap.min.css">
  <script type="text/javascript" src="./jq/jquery-3.3.1.js"></script>
  <script type="text/javascript">
  	$('#file-select-button').click(function(){
    $('.upload input').click();
});
  </script>


  <!-- *****************************************************************************  -->

      <style type="text/css">
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
 /* °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°Page°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°  */
  .btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background:#303952;
    color: #f5f6f6;
    font-weight: 600;
    width: 28%;
    cursor: pointer;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #303952;
}

 .register-form{
    padding: 5%;
    margin-top: 10%;
    padding-bottom: -10%;

}
#envoyer{
   border: none;
    border-radius: 2.5rem;
    padding: 2%;
    width: 25%;
    background: #303952;
    font-weight: bold;
    color: #f5f6f6;
    margin-bottom: 3%;
    cursor: pointer;
}
.form-control input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f5f6f6;
    color: #383d41;
    cursor: pointer;

}
/*--------------------------------------------------------------------------------*/
/*
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: #f5f6f6;
    cursor: inherit;
    display: block;
}
*/
/***********************************************************************************/
.upload .browse input[type='file']{
    position: absolute;
    margin-top: 3px;
    margin-left: 3px;
    height: 1px;
    width: 1px;
    z-index: -5;
}
      </style>


</head>
<body style="background-image: url('./images/bac.JPG');background-repeat: no-repeat;background-size:100% ;">
  <?php

                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $nomBDD = "projet";

                                        // Créer connexion
                                        $conn = mysqli_connect($servername, $username, $password,$nomBDD);
                                        // IMPORTANT !! => $conn est une variable globale

                                        // Check connection
                                        if (!$conn) {
                                            $connErr="Connection failed: " . mysqli_connect_error();
                                            echo $connErr;
                                        }
                                        /*-------------------------IMPORTER -------------------------------*/

                                        function importer($chemin) //Met à jour le calendrier, retourne 1 si importé avec succès, 0 sinon
                                        {
                                          global $conn;
                                          $importErr=""; //Un message qui indique le type d'erreur en cas d'échec, et qui informe du succès de l'importation dans le cas contraire
                                          $ret=1;
                                          $rqt ="TRUNCATE TABLE calendrier"; //Vider le contenu de l'ancien calendrier de la table calendrier
                                          $res = mysqli_query($conn,$rqt);
                                          if (!($res)) {
                                            $importErr="Erreur";
                                            $ret = 0;
                                          }
                                          else {
                                            if (!(file_exists($chemin))) //Vérifie si le fichier existe
                                            {
                                              $importErr = "Fichier inexistant.<br>"; //le fichier n'existe pas
                                              $ret = 0;
                                            }
                                            else
                                            {
                                              $f=fopen($chemin,"r"); //Ouvrir le fichier à importer
                                              if (!($f)) {
                                                $importErr = "Erreur dans l'ouverture du fichier.<br>";
                                                $ret = 0;
                                              }
                                              else {
                                                while ($row=fgetcsv($f)) {// Insérer ligne par ligne dans la table calendrier
                                                  $rqt="INSERT INTO calendrier (`project`, `text`, `weekday`, `Date`, `Start_time`, `end_time`, `duration`, `hours`, `day_accumulated`,
                                                        `location`) VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]')";
                                                  $res = mysqli_query($conn,$rqt);
                                                  if (!($res)) {
                                                    $importErr ="Erreur dans la mise à jour du nouveau calendrier.<br>";
                                                    $ret = 0;
                                                  }
                                                }
                                              }
                                              $rqt="UPDATE `calendrier` SET `project` = '1CPI A' WHERE `calendrier`.`id_activity` = 1;";
                                              $res = mysqli_query($conn,$rqt);
                                              fclose($f); //Fermer le fichier
                                              return array("retour" => $ret , "erreur" => $importErr);
                                              //Retourne 0 et le message d'erreur en cas d'échec, 1 en cas de succès.
                                            }
                                           }
                                         }

                                        /*---------------------------CODE TO UPLOAD ----------------------------*/
                                        $msgErr="";

                                        $submit=0; //Compteur de combien de fois on a a envoyé le formulaire
                                        $fileErr =  $uploadErr =  $submitErr=""; //Les messages d'erreur
                                        if(isset($_POST['importer'])) {
                                          $submit++;
                                          $rep = "./calendrier/"; //Chemin du répertoire où le fichier sera chargé
                                          $file = $_FILES['file']; //Le fichier chargé
                                          $nom = $file['name']; //Le nom du Fichier
                                          $chemin = $rep . $nom; //le chemin du fichier chargé
                                          $FileType = strtolower(pathinfo($chemin,PATHINFO_EXTENSION)); //Rend en minuscules l'extension du fichier à charger.
                                          $uploadOk = 1; //Booléen qui est à 0 en cas d'erreur dans le chargement du fichier.
                                          //Vérifier si c'est effectivement un fichier.
                                          if (!(is_file($file['tmp_name']))) {
                                            $fileErr = "Veuillez charger un fichier.<br>";
                                            $uploadOk=0;
                                          }
                                          else { //Si c'est un fichier, on vérifie si le fichier est de type .csv
                                            if ($FileType!=="csv") {
                                              $fileErr = "Le format du fichier doit être de type '.csv'. <br>";
                                              $uploadOk=0;
                                            }
                                            else {
                                              // Vérifier si la taille du fichier est supérieure à 2048Ko
                                              if ($file ['size'] > 2097152) {
                                                  $fileErr = "Votre fichier est trop volumineux. <br>";
                                                  $uploadOk = 0;
                                              }
                                              else {
                                                // Vérifie si le fichier existe déjà
                                                if (file_exists($chemin)) {
                                                    $fileErr = "Le fichier que vous avez chargé existe déjà. Veuillez renommer votre fichier et réessayer à nouveau.<br>";
                                                    $uploadOk = 0;
                                                }
                                              }
                                            }
                                          }
                                          //S'il y a eu une erreur
                                          if ($uploadOk===0) {
                                            $uploadErr = "Le fichier n'a pas pu être chargé, veuillez réessayer.<br>";
                                          }
                                          //Sinon
                                          else {
                                              if (move_uploaded_file($file['tmp_name'], $chemin)) {
                                                  $msg = "Chargement du fichier ". $nom. " réussi.<br>"; //Chargement effectué
                                              }
                                              else {
                                                  $uploadOk=0;
                                                  $fileErr = "Le fichier n'a pas pu être chargé, veuillez réessayer.<br>"; //Erreur dans le chargement du fichier
                                              }
                                          }
                                          $msgErr=$fileErr.$uploadErr.$submitErr;
                                          if ($uploadOk==1) {
                                            $import = importer($chemin);
                                            if ($import['retour']==0) $msgErr=$msgErr.$import['erreur'];
                                          }
                                          else if ($submit!==0) $submitErr = "Erreur dans le chargement du fichier.<br>"; // If not submitted
                                        }
                                        ?>
  <!--,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->
 <div class="wrapper" >

      <div class="sidebar" >

      <div class="logo">
        <a href="" class="simple-text">
          <img src="logo.PNG" alt="logo_équipe_21" height="100" width="100">
        </a>
      </div>

        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li>
                      <a href="./recupereradmin.php">
                        <i class="fas fa-home"></i>
                          <p>Accueil</p>
                      </a>
                  </li>
                  <li>
                      <a href="./reservation.php">
                        <i class="fas fa-hourglass"></i>
                          <p>Réserver</p>
                      </a>
                  </li>
                  <li  class="active">
                      <a href="./import.php">
                            <i class="fas fa-calendar"></i>
                          <p>Mettre à jour le calendrier</p>
                      </a>
                  </li>
                  <li>
                      <a href="./VisuPeriode.php">
                            <i class="fas fa-calendar-check"></i>
                          <p>Visualisation par période</p>
                      </a>
                  </li>
                  <li>
                      <a href="./VisuSalle.php">
                        <i class="fas fa-calendar-week"></i>
                          <p>Visualisation par salle </p>
                      </a>
                  </li>

                  <li>
                     <a href="./statUser.php">
                       <i class="fas fa-chart-bar"></i>
                         <p>Statistiques par utilisateur</p>
                     </a>
                 </li>
                 <li>
                     <a href="./statPeriode.php">
                       <i class="fas fa-chart-line"></i>
                         <p>Statistiques par période</p>
                     </a>
                 </li>

                  <li>
                      <a href="./modif_nom.php">
                        <i class="fas fa-cogs"></i>
                          <p>Modifier mon nom d'utilisateur</p>
                      </a>
                  </li>
                  <li>
                     <a href="./modif_mdp.php">
                       <i class="fas fa-tools"> </i>
                         <p>Modifier mon mot de passe</p>
                     </a>
                 </li>
                  <li>
                      <a href="./deconnexion.php">
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
      </div>

  </div>
    <!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000 -->
<?php
$fich = $fichErr = "";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {

//-------------------------------------

}

function test_input($data) {
  $data = trim($data); // to avoid unnecessary info from our inputs
  $data = stripslashes($data);// to avoid unnecessary back slashes (\) from our inputs
  $data = htmlspecialchars($data);
  return $data;
}



 echo "<br> <h1>YOUR INPUT</h1><br>";
 echo "Le chemain vers votre fichier est: ".$fich;
 echo "<br>Le chemain erreur vers votre fichier est: ".$fichErr;

    ?>
<div class="jumbotron col-md-8 offset-md-2" style=" background: -webkit-linear-gradient(top,#303952,#303952,#a5b1c2);  -webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
-moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);  border-top-right-radius: 2rem;
    border-bottom-right-radius: 2rem; border-top-left-radius: 2rem;
    border-bottom-left-radius: 2rem; width: 800px; margin-right: auto;margin-left:500px;margin-top: -700px;margin-bottom: 15%; height:50%;padding: 2.5%;" >

       <h2 class="display-3" style=" text-align: center;color: #f5f6f6; font-weight: lighter; margin-top: -2%;line-height:1.5;"><br>  <i class="fas fa-file-upload"></i> Importation du Calendrier</h2>

 <div style="background-color: #f5f6f6;width: 99%;margin-left: auto;margin-right: auto;margin-top: -5%; ">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  enctype="multipart/form-data">

                                          <div class="row register-form">
           <p class="display-3" style="line-height:1.5;color: #303952;font-size: 16px;"> <strong> Le format du fichier doit être de type ".csv".
          <br> (Taille maximale : 2 048 Ko)
            <br>Il n'est pas possible de glisser-déposer un fichier sur n'importe quelle page.
             </strong></p>

                                                  <div class="form-group">


<div class="upload">
    <input type="file" name="file" id="file" class="browse" multiple><br>
    <strong><span id="file-select-button" class="browse button black display-3" style="line-height:1.5;color: #303952;font-size: 16px;">Sélectionnez des fichiers</span></strong>
</div>
                                                  </div> <strong><span style="color: #B9121B;font-size: 17px;"><?php
                                                  if ($msgErr != "")
                                                          { echo ' <i class="fas fa-exclamation"></i>  '.$msgErr; }  ?></span></strong>


                                        <input type="submit" class="btnRegister"  value="Importer" id="envoyer" name="importer"  style="font-size: 15px;margin-top: 4%;"/>


                                </div>
                            </div>

                               </form>


</div>

</div>







</body>
</html>
