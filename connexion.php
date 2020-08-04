<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>

   <title>Page de connexion</title>
   <link rel="shortcut icon" href="logo.PNG">
         <meta charset="utf-8">
         <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
       <link href="./inscr_conn/boot.css" rel="stylesheet" id="bootstrap-css">
<script src="./inscr_conn/bootscr.css"></script>


    <!-- Bootstrap CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./jq/jquery-3.3.1.js"></script>
<script type="text/javascript">
  $( function(){
          $("#envoyer").click(function(){
            valid = true;

           //-------------------------Email-----------------------
                   if( $("#email").val() == "")
            {
              $("#email").next(".error-message").fadeIn().text("Veuillez entrer votre email");
             $("#email").next().next(".error").show().text("");
              $("#email").css("box-shadow","0 0 5px 1px red");
                valid = false;
            }
            else if(! $("#email").val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)){
          $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email valide");
             $("#email").next().next(".error").show().text("");
              $("#email").css("box-shadow","0 0 5px 1px red");

              valid = false;

            }
            else
            {
             var res =  $("#email").val().match(/@esi.dz/g);

               if (res == null)
               {
              $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email de l'esi");
              $("#email").next().next(".error").show().text("");
              $("#email").css("box-shadow","0 0 5px 1px red");
              valid = false;
               }
               else
               {
                $("#email").next(".error-message").fadeOut();
                $("#email").css("box-shadow","");
               }

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

            //-------------------------------------------------------
            return valid;
          });

               /*   *********************************************** Email ***********************************************************  */
                   $("#email").keyup(function(){
                   if(! $("#email").val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)){
          $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email valide");
            $("#email").next().next(".error").show().text("");
          $("#email").css("box-shadow","0 0 5px 1px red");
              valid = false;

            }
            else
            {
             var res =  $("#email").val().match(/@esi.dz/g);

               if (res == null)
               {
              $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email de l'esi");
                $("#email").next().next(".error").show().text("");
               $("#email").css("box-shadow","0 0 5px 1px red");
              valid = false;
               }
               else
               {
                $("#email").next(".error-message").fadeOut();
              $("#email").css("box-shadow","");
             $("#email").next().next(".error").show().text("");

               }

            }

                   })



        /*   ****************************************************** Mot de Passe****************************************************  */
        $("#pwd").keyup(function(){


                        if(! $("#pwd").val().match(/^.*(?=.{6,}).*$/i)){
                       //$("#pwd").next(".error-message").show().text("Veuillez entrer un mot de passe de 6 caractères au moins");
                        $("#pwd").css("box-shadow","0 0 5px 1px red");
                        $("#pwd").next(".error-message").show().text("");
                       $("#pwd").next(".error-message").show().text("6 caractères au moins ");
                        $("#pwd").next().next(".error").show().text("");


                        }
                      else
                      {
                       $("#pwd").next(".error-message").hide().text("");
                         $("#pwd").css("box-shadow","");
                      }


                   })
          /* ************************************************************************************************************************* */
              });

</script>


  <style>
  .register{
    background: -webkit-linear-gradient(left,#303952,#303952,#a5b1c2);
    margin-top: 3%;
    padding: 5%;
   /* -webkit-box-shadow: 0px 0px 93px 29px rgba(245,246,246,1);
-moz-box-shadow: 0px 0px 93px 29px rgba(245,246,246,1);
box-shadow: 0px 0px 93px 29px rgba(245,246,246,1);*/
-webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
-moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
}
.register-left{
    text-align: center;
    color: #f5f6f6;
    margin-top: 4%;
}
.register-left input .btn .btn-info{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f5f6f6;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
     border-top-right-radius: 10% 50%;
    border-bottom-right-radius: 10% 50%;

}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 45%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 5%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background:#303952;
    color: #f5f6f6;
    font-weight: 600;
    width: 28%;
    cursor: pointer;
}
#lien{
   border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f5f6f6;
    font-weight: bold;
    color: #303952;
    margin-top: 28%;
    margin-bottom: 3%;
    cursor: pointer;
}

.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #303952;
}

</style>
</head>
<body style="background-image: url('./images/bac.JPG');background-repeat: no-repeat;background-size: 100%;/*background-size:1400px 900px ;*/">
  <div>
        <?php


// define variables and set to empty values

 $pwd =$email ="";

 $emailErr= $pwdErr = "";
 // to have a secured code
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if (empty($_POST["email"])) {
    $emailErr = "Email est requis";
  } else {
     $email1 = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "format invalide d'email";
    }
    else
    {
       // --- je vérifie si c'est un email de l'esi ! ! !
      if (strpos($email1,"@esi.dz") != FALSE) {
     $email = $email1 ;
        }
        else
        {
          $emailErr = "format invalide de l'ESI";
        }

    }
  }

//-------------------------------------
  if (empty($_POST["pwd"])) {
    $pwdErr = "Password is required";
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


 ?>
 <?php



  $servername = "localhost";
$username = "root";
$password = "";
$nomBDD = "projet";

// Créer connexion
$conn = mysqli_connect($servername, $username, $password,$nomBDD);
  $id_user="NULL";
  $rqt ="SELECT id_user,mdp,confirm FROM user WHERE email = '$email'";
  $res = mysqli_query($conn,$rqt);
  //Chercher si l'email introduit est correct ou existe dans la BDD
  if (mysqli_num_rows($res)=="0") {  //L'email introduit est incorrect ou n'existe pas dans la BDD
    //die("L'adresse e-mail que vous avez introduit est incorrecte ou n'existe pas, veuillez introduire une adresse e-mail correcte. <br>");
  if($email != ""){/*
    echo '<script language="javascript">
        alert("l Email introduit est incorrecte ou n existe pas  !");
       </script>';*/
       $email ="";
       $emailErr = "l'Email introduit n existe pas";
  }

  }
  else { // L'email introduit existe et est correct, donc on vérifie le mot de passe introduit
    $row = mysqli_fetch_assoc($res);
    if ($row["confirm"]=="1") { //Si l'inscription est confirmée
      if ($row["mdp"]==$pwd){ $id_user=$row["id_user"];
        $_SESSION['id_user']= $id_user;
		if ($id_user == 2)
		{
		//	$acc = "./recupereradmin.php";
    echo '<script language="javascript">
         window.location.assign("recupereradmin.php");
    </script>';
		}else{
				//		$acc = "./accueil_user.php";
        echo '<script language="javascript">
             window.location.assign("accueil_user.php");
        </script>';
		}

     /* echo '<script language="javascript">
        alert("Vous êtes connecté ");
       </script>';*/} //L'email et le mot de passe introduits sont corrects, connexion possible!
      else{

    //    echo "Mot de passe incorrect. Veuillez retaper votre mot de passe. <br>";
      //le mot de passe est incorrect, connexion impossible, il faut le retaper.
        if($pwd == "")
        {
           $pwdErr = "Mot de passe requis";
        }
        else
        {
          $pwdErr = "Mot de passe incorrect";
        }

      }
    }
    else{
      echo '<script language="javascript">
        alert("Vous n avez pas encore confirmé votre inscription, veuillez la confirmer");
       </script>';
        exit;
       } //L'inscription n'est pas confirmée
  }

 $id =$id_user;



?>

 <!--
  <div class="jumbotron">
  <h1 style="text-align: center; color: #303952;font-weight: bolder;text-shadow: 1px 1px 2px red, 0 0 1em blue, 0 0 0.2em blue;">Book at ESI</h1>
  <h2  style="text-align: center; color: #303952;font-weight: bolder;">Où toutes vos demandes de reservations sont traitées de la bonne manière </h2>
 </div>
 -->

  <!-- *************************************************-->
    <div class="container register">
                <div class="row">

                    <div class="col-lg-3 register-left">
                        <img src="./images/logo1.PNG" alt="" />
                        <h3>Bienvenue</h3>
                        <p> Connectez-vous en un clic !</p>
                        <a href="./inscr.php" id="lien" class="btn btn-info" role="button">S'inscrire</a><br>

                    </div>

                    <div class="col-lg-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="club" role="tabpanel" >
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="Formaulaire">
                                  <h3 class="register-heading">Connexion</h3>
                                          <div class="row register-form">
                                    <div class="col-lg-12">

                                            <input type="email" class="form-control" placeholder="Votre Email *"   name="email" id="email" value="<?php echo $email ?>" />
                                            <span class="error-message text-danger"></span><span class="error text-danger">
                                               <?php echo $emailErr;?></span>
                                      <br>


                                            <input type="password" class="form-control" placeholder="Mot de passe *"   name="pwd" id="pwd"/><span class="error-message text-danger"></span><span class="error text-danger">
                                                <?php echo $pwdErr;?></span>


                                        <input type="submit" class="btnRegister"  value="Se connecter" id="envoyer" />
                                     <br> <strong><a href="./mdp_oubli.php" style="color: #303952">Mot de passe oublié ?</a></strong><br><br>   <br>

                                     <p style=" color : #303952;" style="margin-left: 50px;">
    Pour plus d'informations veuillez consulter <strong><a href="./aide_user.html" style=" color : #07756a;"> l'aide en ligne </a></strong> de notre application.</p>
                                    </div>



                                </div>

                            </div>

                               </form>

                                </div>
                            </div>



                        </div>
                    </div>

                </div>

            </div>





</body>
</html>
