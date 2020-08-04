<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Page d'inscriptions </title>
	<link rel="shortcut icon" href="logo.PNG">
	<link href="./inscr_conn/boot.css" rel="stylesheet" id="bootstrap-css">
<script src="./inscr_conn/bootscr.css"></script>
 <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
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
           
           
           //-------------------------Email-----------------------
                   if( $("#email").val() == "")
            {  
              $("#email").next(".error-message").fadeIn().text("Veuillez entrer votre email");
              $("#email").css("box-shadow","0 0 5px 1px red");
                valid = false;
            }
            else if(! $("#email").val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)){
          $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email valide");
              $("#email").css("box-shadow","0 0 5px 1px red");

              valid = false;
               
            }
            else
            { 
             var res =  $("#email").val().match(/@esi.dz/g);
            
               if (res == null)
               {
              $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email de l'esi");
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
              $("#pwd").next(".error-message").fadeIn().text("Veuillez entrer votre mot de passe");
               $("#pwd").css("box-shadow","0 0 5px 1px red");
                valid = false;
            }
            else if(! $("#pwd").val().match(/^.*(?=.{6,}).*$/i)){
          $("#pwd").next(".error-message").fadeIn().text("Veuillez entrer un Mot de passe de 6 caractères au moins");
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
         //------------------------Mot de passe 2 ------------------------------------
         


               if( $("#pwd2").val() == "")
            {  
              if( $("#pwd").val() != "")
              {
                $("#pwd2").next(".error-message").fadeIn().text("Veuillez confirmer votre mot de passe");
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
                        $("#pwd2").next(".error-message").fadeIn().text("Veuillez confirmer votre mot de passe");
                       $("#pwd2").css("box-shadow","0 0 5px 1px red");
                       valid = false;
                       }
              }
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
               /*   *********************************************** Email ***********************************************************  */
                   $("#email").keyup(function(){
                   if(! $("#email").val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)){
          $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email valide");
          $("#email").css("box-shadow","0 0 5px 1px red");
              valid = false;
               
            }
            else
            { 
             var res =  $("#email").val().match(/@esi.dz/g);
            
               if (res == null)
               {
              $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email de l'esi");
               $("#email").css("box-shadow","0 0 5px 1px red");
              valid = false;
               }
               else
               {
                $("#email").next(".error-message").fadeOut();
              $("#email").css("box-shadow","");

               }
              
            }
                    
                   })



        /*   ****************************************************** Mot de Passe****************************************************  */
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
                        $("#pwd2").next(".error-message").fadeIn().text("Veuillez confirmer votre mot de passe");
                       $("#pwd2").css("box-shadow","0 0 5px 1px red");
                        $("#pwd").next(".error-message").fadeOut();
                      $("#pwd").css("box-shadow","");
                     
                       }
                        }
                      
                      }
                  

                   })
                /*   ****************************************************** Mot de Passe2 ****************************************************  */
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
                        $("#pwd2").next(".error-message").fadeIn().text("Veuillez confirmer votre mot de passe");
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
	
		.register{
    background: -webkit-linear-gradient(left,#303952,#303952,#a5b1c2);
    margin-top: 3%;
    padding: 5%;
    -webkit-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
-moz-box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
box-shadow: 0px 0px 93px 49px rgba(245,246,246,1);
}
.register-left{
      text-align: center;
    color: #f5f6f6;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f5f6f6;
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
    margin-top: 12%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background:#303952;
    color: #f5f6f6;
    font-weight: 600;
    width: 48%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
     background: -webkit-linear-gradient(left,#303952,#303952,#a5b1c2);
    border-radius: 1.5rem;
    width: 90%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 0%;
    height: 35px;
    font-weight: 500;
    color: #f5f6f6;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
   
   color: #303952;
    background-color:#d1d8e0;
    border-radius: 1.5rem;

}
.register .nav-tabs .nav-link.active{
    width: 300px;
    color: black;
    border: 2px solid #303952;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #303952;
}

</style>
</head>
<body style="background-image: url('./images/bac.JPG');background-repeat: no-repeat;background-size:100%;">
<div>
	<?php 
   $pro ="Ens";

  $nom = $prenom = $pwd =$email  = $user =$pwd2 ="";

$nomErr = $prenomErr = $emailErr= $pwdErr = $userErr=$pwd2Err= "";
 // to have a secured code
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
    $prenomErr = "prénom est requis";
  } else {
       $prenom = test_input($_POST["prenom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) {
      $prenomErr = "Seules les lettres et les espaces blancs sont autorisés";
      $prenom =""; 
    } 
  }


//--------------
  if (empty($_POST["email"])) {
    $emailErr = "Email est requis";
  } else {
     $email1 = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "invalide format d'email"; 
    }
    else
    {  
       // --- je vérifie si c'est un email de l'esi ! ! !
      if (strpos($email1,"@esi.dz") != FALSE) {
     $email = $email1 ;
        }
        else
        { 
          $emailErr = "Invalide format d'email de l'ESI"; 
        }

    }
  }
  
//-------------------------------------
  if (empty($_POST["pwd"])) {
    $pwdErr = "Mot de passe est requis";
  } else {
      $pwd = test_input($_POST["pwd"]);
    }
     //-------------------------------------
  if (empty($_POST["pwd2"])) {
    $pwd2Err = "Mot de passe est requis";
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

   ?>


   <?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="projet";
$conn = mysqli_connect($servername, $username, $password,$db);
///---------------------
$user = $nom." ".$prenom;
if(($user != "") and ($email != "") and ($pwd != "") and ($nom != "") and ($prenom != "") )
{  
	if ($pwd2 == $pwd)
	{$trouve = Rechercher_user($user,$email);
  if( $trouve == 0)
  {
  $sql ="INSERT INTO `user`(`nom_user`, `mdp`, `email`, `profession`) VALUES ('$user','$pwd','$email','$pro')";
 $result = mysqli_query($conn, $sql);
//------------On récupère l'id_user -----------------
      $rqt3 = "SELECT `id_user` FROM `user` WHERE email='$email'";
  $res3 = mysqli_query($conn,$rqt3);

  if (mysqli_num_rows($res3)=="0") {  
       // echo "aucun id";
        $id_user ="";
    }
  else
  {
      $ligne = mysqli_fetch_assoc($res3); 
      $id_user = $ligne["id_user"];
  } 
 //---------------------------------------------------
$_SESSION['mail'] = $email;
$_SESSION['id_user'] = $id_user;
echo "<script>
    window.location.assign('./inscriptions_success.php');
 </script>";

  }else{
     echo '<script language="javascript">';
        echo 'alert("Le compte existe déja ! ! !")';
        echo '</script>';
        exit;
  }
 }
 else{
 	 $pwd2Err =" Mot de passe n'est pas confirmé ";
 }
   
}

function Rechercher_user($user,$mail)
  { 
     $trouv = 0;
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db ="projet";
     $conn = mysqli_connect($servername, $username, $password,$db);
      $sql = "SELECT nom_user,email FROM `user` WHERE nom_user='$user' or email='$mail' "; //---- requete qui me recherche le nom de l'utilisateur ! ! ! 
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {

   while($row = mysqli_fetch_assoc($result)) {
         
         $utilisateur = $row["nom_user"];
         $mail1 = $row["email"];
         if (($utilisateur == $user)or($mail1 == $mail))
         {
         	$trouv = 1;
         }
    }
    }else { $trouv = 0;}
    
  
     return $trouv;
  }


?>

   <div class="container register">
                <div class="row">
                    <div class="col-lg-3 register-left">
                        <img src="./images/logo1.PNG" alt=""/>
                        <h3>Bienvenue</h3>
                        <p>Rejoignez-nous et faites votre première réservation !</p>
                        <a href="./connexion.php" id="lien" class="btn btn-info" role="button">Se connecter</a><br>
                    </div>

                    <div class="col-lg-9 register-right">
                    
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="tab" href="./inscr.php" role="tab" aria-controls="club" aria-selected="true">Club</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="tab" href="./etud.php" role="tab" aria-controls="etudi" aria-selected="true">Etudiant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="tab" href="#" role="tab" aria-controls="prof" aria-selected="true">Ens</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="tab" href="./admi.php" role="tab" aria-controls="etudi" aria-selected="true">Pers</a>
                            </li>
                            
                        </ul>
                     <br>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="club" role="tabpanel" >
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="Formaulaire">
                                    
                                             <h3 class="register-heading">S'inscrire en tant que Enseignant</h3>
                                <div class="row register-form">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Votre Nom *" value="" name="nom" id="nom" /><span class="error-message text-danger"></span> 
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Votre Prenom *" value="" name="prenom" id="prenom" /><span class="error-message text-danger"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Votre Email *" value="" name="email" id="email" /><span class="error-message text-danger"></span>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Mot de Passe *" value="" name="pwd" id="pwd" /><span class="error-message text-danger"></span>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirmer Mot de Passe*" value=""  name="pwd2" id="pwd2" /><span class="error-message text-danger"></span>
                                        </div>
                                         <br>
                                        <input type="submit" class="btnRegister"  value="S'inscrire" id="envoyer" />
                                    </div>
                                    <br><br>   <br>
                                  
                                     <p style=" color : #303952;" style="margin-left: 50px;">
    Pour plus d'informations veuillez consulter<strong><a href="./aide_user.html" style=" color : #07756a;"> l'aide en ligne </a></strong>  de notre application.</p>
                                   </form>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>

            </div>




        </div>
       


    </div>

  </div>
 </div>
</body>
</html>