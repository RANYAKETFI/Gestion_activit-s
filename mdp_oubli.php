
<!DOCTYPE html>
<html>
<head>
	<title>Page mdp oublié</title>
	<link href="./inscr_conn/boot.css" rel="stylesheet" id="bootstrap-css">
<script src="./inscr_conn/bootscr.css"></script>
    <link href="./nav/fontawsome/css/all.css" rel="stylesheet">
 <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Template up -->
		<link rel="shortcut icon" href="logo.PNG">

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS -->

  <script type="text/javascript" src="./jq/jquery-3.3.1.js"></script>
  <script type="text/javascript">
  $( function(){
          $("#envoyer").click(function(){
            valid = true;


           //-------------------------Email-----------------------
                   if( $("#email").val() == "")
            {
              $("#email").next(".error-message").fadeIn().text("Veuillez entrer votre email");
              $("#email").next(".error-message").next().fadeIn().text("");
                    $("#email").next(".error-message").next().next().fadeIn().text("");
              $("#email").css("box-shadow","0 0 5px 1px red");
                valid = false;
            }
            else if(! $("#email").val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)){
            $("#email").next(".error-message").next().next().fadeIn().text("");
            $("#email").next(".error-message").next().fadeIn().text("");
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
                $("#email").next(".error-message").next().fadeIn().text("");
           $("#email").next(".error-message").next().next().fadeIn().text("");
              $("#email").css("box-shadow","0 0 5px 1px red");
              valid = false;
               }
               else
               {
                $("#email").next(".error-message").fadeOut();
                $("#email").css("box-shadow","");
               }

            }




            //-------------------------------------------------------
            return valid;
          });

               /*   *********************************************** Email ***********************************************************  */
                   $("#email").keyup(function(){
                   if(! $("#email").val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)){
          $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email valide");
             $("#email").next(".error-message").next().next().fadeIn().text("");
          $("#email").next(".error-message").next().fadeIn().text("");
          $("#email").css("box-shadow","0 0 5px 1px red");
              valid = false;

            }
            else
            {
             var res =  $("#email").val().match(/@esi.dz/g);

               if (res == null)
               {
              $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email de l'esi");
               $("#email").next(".error-message").next().next().fadeIn().text("");
               $("#email").next(".error-message").next().fadeIn().text("");
               $("#email").css("box-shadow","0 0 5px 1px red");
              valid = false;
               }
               else
               {
                $("#email").next(".error-message").fadeOut();
                          $("#email").next(".error-message").next().fadeIn().text("");
                  $("#email").next(".error-message").next().next().fadeIn().text("");
              $("#email").css("box-shadow","");

               }

            }

                   })





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
    margin-top: 12%;
}
.btnRegister{
     float: right;
    margin-top: 10px;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background:#303952;
    color: #f5f6f6;
    font-weight: 600;
    width: 48%;
    cursor: pointer;
}



.register-heading{
   text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #303952;
}

 /* °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°Page°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°  */

  </style>
</head>
<body style="background-image: url('./images/bac.JPG');background-repeat: no-repeat;background-size:100%">
  <?php
  $email = $emailErr ="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if (empty($_POST["email"])) {
    $emailErr = "Email est requis";
  } else {
     $email1 = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format invalide d'email";
    }
    else
    {
       // --- je vérifie si c'est un email de l'esi ! ! !
      if (strpos($email1,"@esi.dz") != FALSE) {
     $email = $email1 ;
        }
        else
        {
          $emailErr = "Format invalide de l'ESI";
        }

    }
  }
}
//--------------


function test_input($data) {
  $data = trim($data); // to avoid unnecessary info from our inputs
  $data = stripslashes($data);// to avoid unnecessary back slashes (\) from our inputs
  $data = htmlspecialchars($data);
  return $data;
}

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

function mdp_oub($to) // MOT DE PASSE oublié
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$nomBDD = "projet";

	// Créer connexion
	$conn = mysqli_connect($servername, $username, $password,$nomBDD);

  $msgErr="";
  $rqt ="SELECT nom_user,mdp,confirm FROM user WHERE email = '$to'";
  $res = mysqli_query($conn,$rqt);
  if (mysqli_num_rows($res)=="0") {  //L'utilisateur n'existe pas
  if($to != ""){
    $msgErr="Veuillez introduire une adresse e-mail qui existe";
  }
  }
  else { // L'email introduit existe et est correct
    $row = mysqli_fetch_assoc($res);
    if($row['confirm'] == '0')
    {
  $msgErr ="Veuillez confirmer votre inscription";
    }
    else{
    	$message='
    <meta charset="utf-8">
    <table>
     <tr>
      <th><img src="http://i63.tinypic.com/33468m0.png" style="width:120px;height:100px;" > </th>
      <th style="color :#07756a;font-family:calibri;font-size:200%"> &nbsp; &nbsp; &nbsp;Book At ESI </th>
     </tr>
    </table>
    <div style= "color:	#d1d8e0; font-size:200%;">_______________________________</div> <br>
    <div style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    Bonjour '. $row["nom_user"].',</div>
    <p style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    <br><br>
    Nous avons reçu une notification que vous avez oublié votre mot de passe, '.jour(gmdate("l")).' '.gmdate("d").' '.mois(gmdate("F")). ' '.gmdate("Y"). ', '.gmdate("h:i A").' (GMT)  <br><br> </p>
    <p style= "textalign:center; color:	#383838; font-family:tahoma; font-size:130%;" >
    &nbsp; &nbsp; Voici votre mot de passe: <strong>'.$row["mdp"].'</strong>. <br> <br>
    Merci, <br> <br>
    L’équipe Sécurité Book At ESI <br>  <br> <br>
    </p> ';
    $headers = 'From: dirteam21@gmail.com' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8';
if(mail($to, $row["nom_user"].', vous avez oublié votre mot de passe.', $message, $headers))
    $msgErr="Email sent";
else
    $msgErr="Email sending failed";
}
    }
    
return $msgErr;
}

$msgErr =mdp_oub($email);

  ?>
  	<div class="container register">
                <div class="row">
                    <div class="col-lg-3 register-left">
                        <img src="./images/logo1.PNG" alt="" />
                        <h3>Bienvenue sur</h3>
                        <h4>Book at esi</h4>
                        <a href="./connexion.php" id="lien" class="btn btn-info" role="button">Se connecter</a><br>
                    </div>

                    <div class="col-lg-9 register-right">


                            <div class="tab-pane fade show active" id="club" role="tabpanel" >
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="Formaulaire">
                                  <h3 class="register-heading">Mot de passe oublié ?</h3>

                                     <div class="row register-form">

                                    <div class="col-lg-12">
                                             <strong>
                                            <i class="fas fa-envelope" style="color: #303952;font-size: 17px;"></i>
                                                  <label for="email" style="line-height:1.5;color: #303952;font-size: 17px;"> Email :</label>
                                          </strong>
                               <input type="email" class="form-control" placeholder="Votre Email *"   name="email" id="email" value="<?php echo $email ?>" />
                                            <span class="error-message text-danger"></span><span class="error text-danger">
                                               <?php  if($msgErr != "Email sent")
                                              {echo $msgErr;}?></span><span class="text-success"> <?php 
                                               if($msgErr == "Email sent"){echo $msgErr;}?></span>


                                      <br>
                                           <strong> <p  style="color: #303952;text-align:left;font-size: 17px;">Veuillez entrer votre adresse e-mail
                                  pour récupèrer votre mot de passe. </p> </strong>
                                        <input type="submit" class="btnRegister"  value="Envoyer" id="envoyer" style="width:150px;" />
                                     <br>
                                     <br><br>

                                     <p style=" color : #303952;" style="margin-left: 50px;">
    Pour plus d'informations, veuillez consulter<strong><a href="./aide_user.html" style=" color : #07756a;"> l'aide en ligne. </a></strong></p>
                                    </div>

                                </div>

                               </form>

                            </div>
                    </div>
                            </div>

</div>



</body>
</html>
