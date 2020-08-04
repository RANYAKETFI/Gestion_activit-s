<?php session_start();
if (empty($_SESSION[ 'id_user' ])) echo "<script> location.href='./connexion.php'; </script>";
else $id_user= $_SESSION[ 'id_user' ];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier mon mot de passe</title>
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
       //------------------------Ancien Mot de passe ------------------------------------
           if( $("#pwda").val() == "")
            {
              $("#pwda").next().next(".error").show().text("");
              $("#pwda").next(".error-message").fadeIn().text("Veuillez entrer l'ancien mot de passe");
               $("#pwda").css("box-shadow","0 0 5px 1px red");
                valid = false;
            }
            else if(! $("#pwda").val().match(/^.*(?=.{6,}).*$/i)){
          $("#pwda").next(".error-message").fadeIn().text("Veuillez entrer un mot de passe de 6 caractères au moins");
           $("#pwda").next().next(".error").show().text("");
           $("#pwda").css("box-shadow","0 0 5px 1px red");
          ///^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/i   ----> en cas ou je veux changer mon avis ^^
          /*
             To validate a strong password you can use following regular expression that allows:

               Must be at least 8 characters
               At least 1 number, 1 lowercase, 1 uppercase letter
          */
              valid = false;

            }
            else
            {
              $("#pwda").next(".error-message").fadeOut();
               $("#pwda").css("box-shadow","");

            }

            //------------------------Nouveau Mot de passe ------------------------------------
           if( $("#pwd").val() == "")
            {
              $("#pwd").next(".error-message").fadeIn().text("Veuillez entrer le nouveau mot de passe");
               $("#pwd").css("box-shadow","0 0 5px 1px red");
                valid = false;
            }
            else if(! $("#pwd").val().match(/^.*(?=.{6,}).*$/i)){
          $("#pwd").next(".error-message").fadeIn().text("Veuillez entrer un mot de passe de 6 caractères au moins");
           $("#pwd").css("box-shadow","0 0 5px 1px red");
          ///^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/i   ----> en cas ou je veux changer mon avis ^^
          /*
             To validate a strong password you can use following regular expression that allows:

               Must be at least 8 characters
               At least 1 number, 1 lowercase, 1 uppercase letter
          */
              valid = false;

            }
            else
            {
              $("#pwd").next(".error-message").fadeOut();
               $("#pwd").css("box-shadow","");

            }
         //------------------------Nouveau Mot de passe 2 ------------------------------------

               if( $("#pwd2").val() == "")
            {
              if( $("#pwd").val() != "")
              {
                $("#pwd2").next(".error-message").fadeIn().text("Veuillez confirmer votre nouveau mot de passe");
               $("#pwd2").css("box-shadow","0 0 5px 1px red");
                valid = false;
              }
            }
            else{
              if( $("#pwd").val() != "")
              {

                 if ($("#pwd").val() ==  $("#pwd2").val())
                       {
                       $("#pwd").next(".error-message").fadeOut();
                      $("#pwd").css("box-shadow","");
                       $("#pwd2").next(".error-message").fadeOut();
                      $("#pwd2").css("box-shadow","");

                       }else{
                        $("#pwd2").next(".error-message").fadeIn().text("Veuillez confirmer votre nouveau mot de passe");
                       $("#pwd2").css("box-shadow","0 0 5px 1px red");
                       valid = false;
                       }
              }
            }

            //-------------------------------------------------------
            return valid;
          });
                 /*   ******************************************************Ancien Mot de Passe****************************************************  */
        $("#pwda").keyup(function(){


                        if(! $("#pwda").val().match(/^.*(?=.{6,}).*$/i)){
                        $("#pwda").next(".error-message").show().text("6 caractères au moins");
                         $("#pwda").next().next(".error").show().text("");
                        $("#pwda").css("box-shadow","0 0 5px 1px red");

                        }
                      else
                      {

                       $("#pwda").next(".error-message").fadeOut();
                      $("#pwda").css("box-shadow","");
                        }




                   })

        /*   ******************************************************Nouveau Mot de Passe****************************************************  */
        $("#pwd").keyup(function(){


                        if(! $("#pwd").val().match(/^.*(?=.{6,}).*$/i)){
                        $("#pwd").next(".error-message").show().text("6 caractères au moins");
                        $("#pwd").css("box-shadow","0 0 5px 1px red");

                        }
                      else
                      {
                        if($("#pwd2").val() == "")
                        {
                           $("#pwd").next(".error-message").hide().text("");
                         $("#pwd").css("box-shadow","");
                        }
                        else{
                          if ($("#pwd").val() ==  $("#pwd2").val())
                       {
                       $("#pwd").next(".error-message").fadeOut();
                      $("#pwd").css("box-shadow","");
                       $("#pwd2").next(".error-message").fadeOut();
                      $("#pwd2").css("box-shadow","");

                       }else{
                        $("#pwd2").next(".error-message").fadeIn().text("Veuillez confirmer votre nouveau mot de passe");
                       $("#pwd2").css("box-shadow","0 0 5px 1px red");
                        $("#pwd").next(".error-message").fadeOut();
                      $("#pwd").css("box-shadow","");

                       }
                        }

                      }


                   })
                /*   ******************************************************Nouveau Mot de Passe2 ****************************************************  */
                  $("#pwd2").keyup(function(){

                    if( $("#pwd").val() != "")
              {

                 if ($("#pwd").val() ==  $("#pwd2").val())
                       {
                       $("#pwd").next(".error-message").fadeOut();
                      $("#pwd").css("box-shadow","");
                       $("#pwd2").next(".error-message").fadeOut();
                      $("#pwd2").css("box-shadow","");

                       }else{
                        $("#pwd2").next(".error-message").fadeIn().text("Veuillez confirmer votre nouveau mot de passe");
                       $("#pwd2").css("box-shadow","0 0 5px 1px red");

                       }
              }else{
                        $("#pwd2").next(".error-message").hide().text("");
                         $("#pwd2").css("box-shadow","");

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
<body style="background-image: url('./images/bac.JPG');background-repeat: no-repeat;background-size:100%;">
	<?php
	 $pwda = $pwd = $pwd2 ="";
	 $pwdaErr =$pwdErr =$pwd2Err ="";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {



//-------------------------------------
  if (empty($_POST["pwda"])) {
    $pwdaErr = "Ancien mot de passe est requis";
  } else {
      $pwda = test_input($_POST["pwda"]);
    }
//-------------------------------------
  if (empty($_POST["pwd"])) {
    $pwdErr = "Nouveau mot de passe est requis";
  } else {
      $pwd = test_input($_POST["pwd"]);
    }
//-------------------------------------
  if (empty($_POST["pwd2"])) {
    $pwd2Err = "Confirmation du nouveau mot de passe est requise";
  } else {
      $pwd2 = test_input($_POST["pwd2"]);
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
/******************************************************************************************************************************/



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
                      <a href="VisuSalle.php">
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
                          <p>Modifier mon nom d\'utilisateur</p>
                      </a>
                  </li>
                  <li  class="active">
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


                  <li>
                      <a href="'.$lien.'">
                        <i class="fas fa-cogs"></i>
                          <p>Modifier mon nom d\'utilisateur</p>
                      </a>
                  </li>
                  <li  class="active">
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


//************************************************ Modification ***************************************************************

function jour($day)
//Traduit le jour de l'Anglais au Français
{
  switch ($day){
    case "Sunday":
    return "dimanche" ;
    break;

    case "Monday":
    return "lundi" ;
    break;

    case "Tuesday":
    return "mardi";
    break;

    case "Wednesday":
    return "mercredi";
    break;

    case "Thursday":
    return "jeudi";
    break;

    case "Friday":
    return "vendredi";
    break;

    case "Saturday":
    return "samedi";
    break;
  }
}

function mois($month)
//Traduit le mois de l'Anglais au Français
{
  switch ($month)
  {
    case "January":
    return "Janvier";
    break;

    case "February":
    return "Février";
    break;

    case "March":
    return "Mars";
    break;

    case "April":
    return "Avril";
    break;

    case "May":
    return "Mai";
    break;

    case "June":
    return "Juin";
    break;

    case "July":
    return "Juillet";
    break;

    case "August":
    return "Août";
    break;

    case "September":
    return "Septembre";
    break;

    case "October":
    return "Octobre";
    break;

    case "November":
    return "Novembre";
    break;

    case "December":
    return "Décembre";
    break;
  }
}

function modif_confirm($id_user,$to) //Confirmation de la modification du mot de passe
{
  $msgErr="";
  global $conn;
  $rqt ="SELECT nom_user,mdp,new_mdp FROM user WHERE id_user = '$id_user'";
  $res = mysqli_query($conn,$rqt);
  if (mysqli_num_rows($res)=="0") {  //L'utilisateur n'existe pas
    $msgErr="Erreur";
  }
  else { // L'email introduit existe et est correct, donc on vérifie le mot de passe introduit
    $row = mysqli_fetch_assoc($res);
    $message='
    <meta charset="utf-8">
    <table>
     <tr>
      <th><img src="http://i63.tinypic.com/33468m0.png" style="width:120px;height:100px;" > </th>
      <th style="color :#07756a;font-family:calibri;font-size:150%"> &nbsp; Book At ESI </th>
     </tr>
    </table>
    <div style= "color:	#d1d8e0; font-size:200%;">_______________________________</div> <br>
    <div style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    Bonjour '. $row["nom_user"].',</div>
    <p style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    <br><br>
    Votre mot de passe a été changé, '.jour(gmdate("l")).' '.gmdate("d").' '.mois(gmdate("F")). ' '.gmdate("Y"). ', '.gmdate("h:i A").' (GMT)  <br><br> </p>
    <p style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    &nbsp; <strong> Si vous l’avez fait,</strong> ne tenez pas compte de cet e-mail. <br>
    &nbsp; <strong> Si vous ne l’avez pas fait,</strong> veuillez <a href="localhost/Projet/protect.php?email='.$to.'"style= "color:#003333;"> <strong> protéger votre compte.</strong></a>
    <br> <br> <br>
    Merci, <br> <br>
    L’équipe Sécurité Book At ESI <br>  <br> <br>
    </p> ';
    $headers = 'From: dirteam21@gmail.com' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8';
if(mail($to, 'Modification de votre mot de passse', $message, $headers))
    $msgErr="Email sent";
else
    $msgErr="Email sending failed";
}
return $msgErr;
}


    $r1 ="SELECT * FROM user WHERE id_user = '$id_user'";
  $r2 = mysqli_query($conn,$r1);
$row3 = mysqli_fetch_assoc($r2);

$email =$row3["email"];
//-------Recuperer l email
  $rqt ="SELECT * FROM user WHERE email = '$email'";
  $res = mysqli_query($conn,$rqt);

  if (mysqli_num_rows($res)=="0") {
        echo "l'email n'existe pas !";
    }
  else { // L'email introduit existe et est correct, donc on vérifie le mot de passe introduit
    $row = mysqli_fetch_assoc($res);

      $id_user=$row["id_user"];

      if( $row["confirm"] == '0')
      {

        $_SESSION['id_user'] = $id_user;
        echo '<script language="javascript">
        alert("Veuillez confirmer votre inscription !");
         </script>';
      }
      else
      {
        if ( ($row["mdp"] != $pwda)  and ($pwda !=""))
        {
           $pwdaErr = "Mot de passe incorrect !";
        }
        else
        {

          if (($pwd == $pwd2) and ($pwd !=""))
          {
             $rqt2 ="UPDATE `user` SET `mdp`='$pwd' WHERE id_user='$id_user'";
            $res2 = mysqli_query($conn,$rqt2);
            modif_confirm($id_user,$email);

          echo "<script>
    window.location.assign('./modifi_success.php');
 </script>";


          }
        }

      }
}






	?>



	  <!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000 -->



<div class="jumbotron col-md-8 offset-md-2" style=" background: -webkit-linear-gradient(top,#303952,#303952,#a5b1c2);  -webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
-moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);  border-top-right-radius: 2rem;
    border-bottom-right-radius: 2rem; border-top-left-radius: 2rem;
    border-bottom-left-radius: 2rem; width: 800px; margin-right: auto;margin-left:500px;margin-top: -600px;margin-bottom: 15%; height:50%;padding: 2.5%;" >

       <h2 class="display-3" style=" text-align: center;color: #f5f6f6;  font-weight: lighter; margin-top: -2%;line-height:1.5;"><br>  <i class="fas fa-lock" style="color: #f5f6f6;"></i> Modification du mot de passe  </h2>

 <div style="background-color: #f5f6f6;width: 99%;margin-left: auto;margin-right: auto;margin-top: -5%; ">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="Formaulaire">

                                          <div class="row register-form">

                                                  <div class="form-group">
                                                 <i class="fas fa-lock" style="color: #303952;font-size: 15px;"></i>
                                            <label for="pwda" style="line-height:1.5;color: #303952;font-size: 15px;"> Ancien mot de passe :</label>
                                            <input type="password" class="form-control" placeholder="Ancien mot de passe  *"   name="pwda" id="pwda"  style="font-size: 15px;" /><span class="error-message text-danger" style="line-height:1.5;font-size: 16px;"></span><span class="error text-danger"  style="line-height:1.5;font-size: 16px;">
                                                <?php echo $pwdaErr;?></span>
                                                  </div>


                                                        <div class="form-group">
                                                           <i class="fas fa-lock" style="color: #303952;font-size: 15px;"></i>
                                            <label for="pwd" style="line-height:1.5;color: #303952;font-size: 15px;"> Nouveau mot de passe :</label>
                                             <input type="password" class="form-control" placeholder="Nouveau mot de passe  *"   name="pwd" id="pwd" style="font-size: 15px;"/><span class="error-message text-danger"  style="line-height:1.5;font-size: 16px;"></span><span class="error text-danger" style="line-height:1.5;font-size: 16px;">
                                                <?php echo $pwdErr;?></span>
                                                   </div>


                                                  <div class="form-group">
                                                     <i class="fas fa-lock" style="color: #303952;font-size: 15px;"></i>
                                                  <label for="pwd2" style="line-height:1.5;color: #303952;font-size: 15px;"> Confirmation du nouveau mot de passe :</label>
                                                  <input type="password" class="form-control" placeholder="Confirmer Nouveau mot de passe  *"   name="pwd2" id="pwd2" style="font-size: 15px;"/><span class="error-message text-danger"  style="line-height:1.5;font-size: 16px;"></span><span class="error text-danger"  style="line-height:1.5;font-size: 16px;">
                                                <?php echo $pwd2Err;?></span>
                                                </div>

                                                 <strong> <h3><span class="text-success" name="hide" id="hide" style="display:block; width: 80%;margin-left: auto;margin-right: auto; background-color: rgba(7,117,106,0.5);"></span></h3></strong>

                                        <input type="submit" class="btnRegister"  value="Modifier" id="envoyer"   style="font-size: 15px;margin-top: 4%;"/>


                                </div>
                            </div>

                               </form>

</div>

</div>






</body>
</html>
