<?php session_start();

if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id_user= $_SESSION[ 'id_user' ];}
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier mon nom d'utilisateur</title>
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
         $( function(){
          $("#envoyer").click(function(){
            valid = true;
            //---------------------Nom----------------------------
            if( $("#nom").val() == "")
            {  // $("#nom").css("border-color","#ff5b5b");
              $("#nom").next(".error-message").fadeIn().text("Veuillez entrer votre nom");
                $("#nom").css("box-shadow","0 0 5px 1px red");
                valid = false;
            }
            else if(! $("#nom").val().match(/^[a-zA-Z ]*$/i)){
          $("#nom").next(".error-message").fadeIn().text("Seules les lettres et les espaces blancs sont autorisés");
              $("#nom").css("box-shadow","0 0 5px 1px red");
              valid = false;

            }
            else
            {
          //   $("#nom").css("border-color","fffff");
              $("#nom").next(".error-message").fadeOut();
              $("#nom").css("box-shadow","");

            }
            //---------------------Prenom----------------------------
            if( $("#prenom").val() == "")
            {  // $("#nom").css("border-color","#ff5b5b");
              $("#prenom").next(".error-message").fadeIn().text("Veuillez entrer votre prenom");
                $("#prenom").css("box-shadow","0 0 5px 1px red");
                valid = false;
            }
            else if(! $("#prenom").val().match(/^[a-zA-Z ]*$/i)){
          $("#prenom").next(".error-message").fadeIn().text("Seules les lettres et les espaces blancs sont autorisés");
              $("#prenom").css("box-shadow","0 0 5px 1px red");
              valid = false;

            }
            else
            {
              $("#prenom").next(".error-message").fadeOut();
              $("#prenom").css("box-shadow","");

            }


            //------------------------Mot de passe ------------------------------------
           if( $("#pwd").val() == "")
            {
              $("#pwd").next().next(".error").show().text("");
              $("#pwd").next(".error-message").fadeIn().text("Veuillez entrer votre mot de passe");
               $("#pwd").css("box-shadow","0 0 5px 1px red");
                valid = false;
            }
            else if(! $("#pwd").val().match(/^.*(?=.{6,}).*$/i)){
          $("#pwd").next().next(".error").show().text("");
          $("#pwd").next(".error-message").fadeIn().text("Veuillez entrer un mot de passe de 6 caractères au moins");
           $("#pwd").css("box-shadow","0 0 5px 1px red");

              valid = false;

            }
            else
            {
              $("#pwd").next(".error-message").fadeOut();
               $("#pwd").css("box-shadow","");

            }



            //-------------------------------------------------------
            return valid;
          });
                /* ************************************************** Nom ********************************************************** */
                 $("#nom").keyup(function(){


                        if(! $("#nom").val().match(/^[a-zA-Z ]*$/i)){
                       $("#nom").next(".error-message").show().text("Seules les lettres et les espaces blancs sont autorisés");
                       $("#nom").css("box-shadow","0 0 5px 1px red");
                        }
                      else
                      {

                          $("#nom").next(".error-message").hide().text("");
                          $("#nom").css("box-shadow","");
                      }


                   })
                  /* ************************************************** Preom ********************************************************** */
                 $("#prenom").keyup(function(){


                        if(! $("#prenom").val().match(/^[a-zA-Z ]*$/i)){
                       $("#prenom").next(".error-message").show().text("Seules les lettres et les espaces blancs sont autorisés");
                       $("#prenom").css("box-shadow","0 0 5px 1px red");
                        }
                      else
                      {

                          $("#prenom").next(".error-message").hide().text("");
                          $("#prenom").css("box-shadow","");
                      }


                   })




        /*   ****************************************************** Mot de Passe****************************************************  */
       $("#pwd").keyup(function(){


                        if(! $("#pwd").val().match(/^.*(?=.{6,}).*$/i)){
                        $("#pwd").next(".error-message").show().text("6 caractères au moins");
                         $("#pwd").next().next(".error").show().text("");
                        $("#pwd").css("box-shadow","0 0 5px 1px red");

                        }
                      else
                      {

                       $("#pwd").next(".error-message").fadeOut();
                      $("#pwd").css("box-shadow","");
                        }




                   })



          /* ************************************************************************************************************************* */
              });




       </script>

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

    	</style>
</head>
<body  style="background-image: url('./images/bac.JPG');background-repeat: no-repeat;background-size:100%;">
<?php
  $nom = $prenom = $pwd = "" ;
  $nomErr = $prenomErr = $pwdErr = "" ;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

//--------------
  if (empty($_POST["nom"])) {
    $nomErr = "Nom est requis";
  } else {
       $nom = test_input($_POST["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
      $nomErr = "Seules les lettres et les espaces blancs sont autorisés";
      $nom ="";
    }
  }


//--------------

  if (empty($_POST["prenom"])) {
    $prenomErr = "prénom requis";
  } else {
       $prenom = test_input($_POST["prenom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) {
      $prenomErr = "Seules les lettres et les espaces blancs sont autorisés";
      $prenom ="";
    }
  }


//-------------------------------------
  if (empty($_POST["pwd"])) {
    $pwdErr = "Mot de passe requis";
  } else {
      $pwd = test_input($_POST["pwd"]);
    }


}

//--------------


function test_input($data) {
  $data = trim($data); // to avoid unnecessary info from our inputs
  $data = stripslashes($data);// to avoid unnecessary back slashes (\) from our inputs
  $data = htmlspecialchars($data);
  return $data;
}
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
/*************************************************************************/
$id_user =$_SESSION['id_user'];


if ($id_user == 2 ) // L'Admin
{
   echo '<div class="wrapper" >

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
                  <li>
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

                  <li  class="active">
                      <a href="./modif_nom.php">
                        <i class="fas fa-cogs"></i>
                          <p>Modifier mon nom d\'utilisateur</p>
                      </a>
                  </li>
                  <li >
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

  </div>';
  }
  else
  {  // c'est un utilisateur
// on vérifie dans le cas ou c'est un club
   $rqt3 = "SELECT  `profession` FROM `user` WHERE id_user='$id_user'";
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
        }
         echo '<div class="wrapper" >

      <div class="sidebar" >

      <div class="logo">
        <a href="#" class="simple-text">
          <img src="logo.PNG" alt="logo_équipe_21" height="100" width="100">
        </a>
      </div>

        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li>
                      <a href="./accueil_user.php">
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


                  <li  class="active">
                      <a href="'.$lien.'">
                        <i class="fas fa-cogs"></i>
                          <p>Modifier mon nom d\'utilisateur</p>
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
                      <a href="./aide_user.php">
                          <i class="fas fa-question-circle"></i>
                          <p>Aide</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>

  </div>';

  }
}

/*************************************************************************/

/*-----------------------Modification du nom de l'utilsateur ------------------------*/
//Role: Modifie le nom d'utilisateur.

  $rqt ="SELECT mdp FROM user WHERE id_user = '$id_user'";
  $res = mysqli_query($conn,$rqt);
  //Chercher si le mot de passe introduit est correct
  if (mysqli_num_rows($res)=="0") {  //Erreur
   echo ' <script type="text/javascript">
    alert("Nous nous excusons, il y a eu une erreur. Veuillez réessayer. <br>");
   </script>
   ';

  }
  else {
    $row = mysqli_fetch_assoc($res);
    if (($pwd != $row['mdp']) and ($pwd != "")) { //le mot de passe introduit est incorrect
     $pwdErr= "Mot de passe incorrect";
    }
    else {  //Mot de passe correct => Modification possible
      if (is_null($prenom)) {//Cas d'un club
        $nom_user=$nom;
      }
      else {  //Sinon=>Création du nouveau nom_utilisateur
        $nom_user=$nom." ".$prenom;
      }
      //Modification du nom_user dans la BDD
      if ($nom != "" and $prenom!="")
      {
      $rqt ="UPDATE `user` SET `nom_user` = '$nom_user' WHERE `user`.`id_user` ='$id_user' ";
      $res = mysqli_query($conn,$rqt);
      if (!($res))  {
       echo ' <script type="text/javascript">
    alert("Nous nous excusons, il y a eu une erreur. Veuillez réessayer. <br>");
   </script>
   ';//Erreur

      }
      else {
        $nom = $prenom = $pwd = "" ;
        $nomErr = $prenomErr = $pwdErr = "" ;
       echo "<script>
    window.location.assign('./modifi_success2.php');
 </script>";

      }
      }
    }
  }
/*************************************************************************/

 ?>


	  <!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000 -->


<div class="jumbotron col-md-8 offset-md-2" style=" background: -webkit-linear-gradient(top,#303952,#303952,#a5b1c2);  -webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
-moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);  border-top-right-radius: 2rem;
    border-bottom-right-radius: 2rem; border-top-left-radius: 2rem;
    border-bottom-left-radius: 2rem; width: 800px; margin-right: auto;margin-left:500px;margin-top: -600px;margin-bottom: 15%; height:50%;padding: 2.5%;" >
       <h2 class="display-3" style=" text-align: center;color: #f5f6f6;/*text-shadow: 0 0 0.2em #f5f6f6, 0 0 0.2em #f5f6f6;*/   font-weight: lighter; margin-top: -2%;line-height:1.5;"><br> <i class='fas fa-user-alt' style="color: #f5f6f6;"></i> Modification du nom d'utilisateur</h2>

 <div style="background-color: #f5f6f6;width: 99%;margin-left: auto;margin-right: auto;margin-top: -5%; ">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="Formaulaire">

                                          <div class="row register-form">
                                                  <div class="form-group">
                                               <i class='fas fa-user-alt' style="color: #303952;font-size: 15px;"></i>
                                            <label for="nom" style="line-height:1.5;color: #303952;font-size: 15px;"> Nouveau nom :</label>
                                            <input type="text" class="form-control" placeholder="Votre nom *"   name="nom" id="nom"  style="font-size: 15px;"  value="<?php echo $nom ?>" /><span class="error-message text-danger" style="line-height:1.5;font-size: 16px;"></span><span class="error text-danger"  style="line-height:1.5;font-size: 16px;">
                                                <?php echo $nomErr;?></span>
                                                  </div>



                                                  <div class="form-group">
                                               <i class='fas fa-user-alt' style="color: #303952;font-size: 15px;"></i>
                                            <label for="prenom" style="line-height:1.5;color: #303952;font-size: 15px;"> Nouveau prénom :</label>
                                            <input type="text" class="form-control" placeholder="Votre prénom *"  value="<?php echo $prenom ?>"   name="prenom" id="prenom"  style="font-size: 15px;" /><span class="error-message text-danger" style="line-height:1.5;font-size: 16px;"></span><span class="error text-danger"  style="line-height:1.5;font-size: 16px;">
                                                <?php echo $prenomErr;?></span>
                                                  </div>

                                                  <div class="form-group">
                                                 <i class="fas fa-lock" style="color: #303952;font-size: 15px;"></i>
                                            <label for="pwd" style="line-height:1.5;color: #303952;font-size: 15px;"> Mot de passe :</label>
                                            <input type="password" class="form-control" placeholder="Votre mot de passe  *"   name="pwd" id="pwd"  style="font-size: 15px;" /><span class="error-message text-danger" style="line-height:1.5;font-size: 16px;"></span><span class="error text-danger"  style="line-height:1.5;font-size: 16px;">
                                                <?php echo $pwdErr;?></span>
                                                  </div>



                                        <input type="submit" class="btnRegister"  value="Modifier" id="envoyer"   style="font-size: 15px;margin-top: 4%;"/>


                                </div>
                          </form>

</div>

</div>




</body>
</html>
