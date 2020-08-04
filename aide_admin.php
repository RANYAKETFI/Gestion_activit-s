<?php session_start();
if (empty($_SESSION[ 'id_user' ])) {echo "<script> location.href='./connexion.php'; </script>";}
else{$id=$_SESSION['id_user'];} 
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Aide</title>
   <link rel="shortcut icon" href="logo.PNG">
   
             <link href="./nav/fontawsome/css/all.css" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
  .titre1 {
   text-align: center;
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
color: #303952;

  }
    .titre2{
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
color: #303952;
  text-align: left;
font-weight: bold;
   

    }
    .texte{
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
color: #303952;
 font-size: 16px;
  text-align: left;
    }
    /*************************Bouttons style**********************************/
    #myBtn1,#myBtn2,#myBtn3,#myBtn4,#myBtn5,#myBtn6,#myBtn7,#myBtn8,#myBtn9,#myBtn10,#myBtn11,#myBtn12,#myBtn13,#myBtn14,#myBtn15,#myBtn16,#myBtn17,#myBtn18,#myBtn19,#myBtn20,#myBtn21,#myBtn22,#myBtn23,#myBtn24,#myBtn25,#myBtn26,#myBtn27,#myBtn28,#myBtn29,#myBtn30,#myBtn31,#myBtn32,#myBtn33,#myBtn34,#myBtn35{
      color: #303952;
 font-size: 15px; 
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;  
    }


    /*--------------------------------------------------------*/
    .modal-header, h6, .close {
    background-color: #07756a;
    color:#f5f6f6 !important;
    text-align: center;
    font-size: 20px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: bold;

  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  /*-------------------------------------------------------------------------*/
  img{
    margin-top: 15%;
    margin-bottom: 5%;
    margin-left: -140px;
    width: 65%;
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
/*----------------------------------------------------------------------------*/

/*******************************************************************************************************************/
</style>

</head>
<body style="background-image: url('./images/bac2.png');background-repeat: no-repeat;background-size:1550px 750px;background-attachment:fixed;/*background-color:rgba(7,117,106,0.9); background: -webkit-linear-gradient(top,#f5f6f6,#07756a,#a5b1c2);*/">
  
<div style="background-color:rgba(245,246,246,0.6);height:2060px;align-content: center;  margin-left: auto;
  margin-right: auto; width:1250px;margin-top: 50px; -webkit-box-shadow: 0px 0px 15px 2px rgba(48,57,82,1);
-moz-box-shadow: 0px 0px 15px 2px rgba(48,57,82,1);
box-shadow: 0px 0px 15px 2px rgba(48,57,82,1);
" >


 
  <div class="container list-group" style="width: 900px;opacity: 0.90;">
    <div class="row">
      <div class="col-lg-3" style="background-color: #f5f6f6;margin-left: -160px;width: 220px;height: 750px;">
       
        <img src="./images/logo4.png" style="border-bottom-left-radius: 3rem;border-top-right-radius: 3rem;border-top-left-radius: 3rem;border-bottom-right-radius: 3rem;margin-left: 30px;margin-top: 30px;">
        <hr style="background-color: #d1d8e0;">
        <div>
          <blockquote>
           <p class="texte"> L'équipe de Book-at-esi a répondu à plusieurs questions dont vous pourriez poser. Si vous trouvez une ambiguïté , veuillez consulter notre aide et chercher les questions que vous avez en tête.</p> 
            <footer>BOOK AT ESI </footer>
          </blockquote>
        </div>
         
      </div>
         
      <div class="col-lg-9" style="margin-top: -715px;margin-left:70px;width: 1000px;">
                      <h1 class="titre1">Bienvenue sur notre page d'aide ! </h1><br><hr>
   <blockquote>

              <table class="table">
    <thead>
      <tr>
        <th>Questions que vous pourriez avoir <i class="fas fa-question"></i>  </th>
      </tr>
    </thead>
    <tbody>
      <tr  class="info">
        <td><a id="myBtn1" role="button">Comment créer un compte sur BOOK-AT-ESI ?</a></td>
      </tr> 

      <tr class="active">

        <td><a id="myBtn5" role="button">Comment consulter les statistiques par période ?</a></td>
      </tr>
      <tr class="info">

        <td><a id="myBtn6" role="button">Comment consulter les statistiques par utilisateur ?</a></td>
      </tr>


      <tr class="active">

        <td><a id="myBtn7" role="button">Comment modifier mon mot de passe ?</a></td>
      </tr>
      <tr class="info">

        <td><a id="myBtn8" role="button">Comment modifier mon nom d'utilisateur ?</a></td>
      </tr>
    </tbody>
  </table>
<!--   ***************************************************       -->
<table class="table">
    <thead>
      <tr>
        <th> Accueil Admin : </th>
      </tr>
    </thead>
    <tbody>
  

      <tr class="info">
        <td><a id="myBtn20"  role="button">Comment consulter toutes les réservations en cours ?</a></td>
      </tr>
      <tr  class="active">
        <td><a id="myBtn21" role="button">Comment accorder une réservation ?</a></td>
      </tr> 

      <tr class="info">
        <td><a id="myBtn22"  role="button">Comment annuler une réservation ?</a></td>
      </tr>

      
    </tbody>
  </table>
   <!--   **************************************************************     -->
              <table class="table">
    <thead>
      <tr>
        <th> Me connecter à mon compte : </th>
      </tr>
    </thead>
    <tbody>
      <tr  class="active">
        <td><a id="myBtn13" role="button">Comment restaurer mon mot de passe en cas de perte ?</a></td>
      </tr> 

      <tr class="info">
        <td><a id="myBtn14"  role="button">Je me suis inscrit, mais lorsque j’introduis mes coordonnées correctement je n’arrive pas à me connecter, pourquoi ?</a></td>
      </tr>
            
    </tbody>
  </table>
 
<!--   ***************************************************       -->

              <table class="table">
    <thead>
      <tr>
        <th> Mettre à jour mon calendrier : </th>
      </tr>
    </thead>
    <tbody>
      <tr  class="active">
        <td><a id="myBtn9" role="button">Comment pourrais-je importer le nouveau calendrier ?</a></td>
      </tr> 

      <tr class="info">
        <td><a id="myBtn10"  role="button">Est-ce que je peux importer un fichier de format autre que .csv?</a></td>
      </tr>
      <tr  class="active">
        <td><a id="myBtn11" role="button">Pourquoi est-ce que je n’arrive pas à charger mon fichier ?</a></td>
      </tr> 

      <tr class="info">
        <td><a id="myBtn12"  role="button">Quand est-ce que je pourrais mettre à jour mon calendrier ?</a></td>
      </tr>

      
    </tbody>
  </table>
  <!--   *************************************************   -->


              <table class="table">
    <thead>
      <tr>
        <th> Effectuer une réservation : </th>
      </tr>
    </thead>
    <tbody>
      <tr  class="active">
        <td><a id="myBtn23" role="button">Comment effectuer une réservation ?</a></td>
      </tr> 

      <tr class="info">
        <td><a id="myBtn24"  role="button">Ma demande de réservation sera-t-elle toujours prise en compte ?</a></td>
      </tr>
      <tr  class="active">
        <td><a id="myBtn25" role="button">Est-ce que je peux réserver une salle déja réservée ?</a></td>
      </tr> 

      <tr class="info">
        <td><a id="myBtn26"  role="button">Qui peut effectuer une réservation ?</a></td>
      </tr>
            
    </tbody>
  </table>
   <!--   *************************************************   -->


              <table class="table">
    <thead>
      <tr>
        <th> Modification d’une réservation : </th>
      </tr>
    </thead>
    <tbody>
      <tr  class="active">
        <td><a id="myBtn15" role="button">Est-ce que je peux modifier un seul paramètre (Exemple: Date, heure de début ou heure de fin seulement...etc) dans toute ma réservation ?</a></td>
      </tr> 

      <tr class="info">
        <td><a id="myBtn16"  role="button">Est-ce que je peux modifier toutes les informations dans ma réservation ?</a></td>
      </tr>
      <tr  class="active">
        <td><a id="myBtn17" role="button">Une fois ma réservation accordée et acceptée, risque-t-elle d’être refusée si je la modifie ?</a></td>
      </tr> 

      <tr class="info">
        <td><a id="myBtn18"  role="button">Est-ce possible d’annuler la modification d’une réservation après l’avoir effectué?</a></td>
      </tr>
         <tr  class="active">
        <td><a id="myBtn19" role="button">Si je modifie une réservation, est-ce que la personne concernée sera notifiée ?</a></td>
      </tr>     
    </tbody>
  </table>
  <!--   *************************************************   -->


              <table class="table">
    <thead>
      <tr>
        <th> Visualisation des événements : </th>
      </tr>
    </thead>
    <tbody>
      <tr  class="info">
        <td><a id="myBtn27" role="button">Quels sont les événements que je peux consulter sur le calendrier par periode ?</a></td>
      </tr> 

      <tr class="active">
        <td><a id="myBtn28"  role="button">Quels sont les événements que je peux consulter sur le calendrier par salles ?</a></td>
      </tr>
      <tr  class="info">
        <td><a id="myBtn29" role="button">Est ce que les événements affichées sont propre au utilisateur ?</a></td>
      </tr> 

      <tr class="active">
        <td><a id="myBtn30"  role="button">Est ce que je pourrais ajouter un nouveau événement directement au calendrier ?</a></td>
      </tr>
            
      <tr class="info">
        <td><a id="myBtn31"  role="button">Est ce que je pourrais modifier l'affichage du calendrier ?</a></td>
      </tr>
            
    </tbody>
  </table>
  <!--   *************************************************   -->


              <table class="table">
    <thead>
      <tr>
        <th> Réoriontation : </th>
      </tr>
    </thead>
    <tbody>
     
      <tr class="active">
        <td><a id="myBtn32"  role="button">Dans quel cas ma demande de reservation sera telle prise en compte par le service culturel ?</a></td>
      </tr>
      <tr  class="info">
        <td><a id="myBtn33" role="button">Que se passera il si la salle que j'ai selectionné n'est pas disponible ?</a></td>
      </tr> 

      <tr class="active">
        <td><a id="myBtn34"  role="button">Que se passera il si aucune salle n'est disponible à la date que j'ai choisi ?</a></td>
      </tr>
            
      <tr class="info">
        <td><a id="myBtn35"  role="button">Est ce que je peux annuler une demande de reservation si je ne désire pas changer mes choix initiaux ?</a></td>
      </tr>
            
    </tbody>
  </table>
   </blockquote>
      </div>

   
    <br>
  
 </div>
</div>

  <!-- ***************************************************************** -->
 
  
  <!-- **************************Modal 1*************************************** -->

  
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment créer un compte sur BOOK-AT-ESI ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour créer un compte sur Book-at-esi veuillez suivre les étapes suivantes : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span>  Allez vers le lien :<strong><a href="./inscr.php" style="color: #07756a;" target="blank">localhost/inscr.php</a></strong> .</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span>  Choisir le formulaire à remplir à partir de votre profession : Club , Etudiant , Ens ( enseignant ) , Pers ( personnel ).</p>

       <p class="texte"><span class="badge" style="background-color: #07756a;">3</span> Cliquer sur le boutton <strong>S'inscrire</strong> aprés le remplissage des champs du formaulaire .</p>
    

 <p class="texte"><span class="badge" style="background-color: #07756a;">4</span>  Confirmer votre inscrption aprés avoir reçu un email de confirmation de l'inscrption , dans le cas ou vous ne recevez aucun email cliquez sur le boutton <strong> Renvoyer</strong>.</p>  

<p class="texte"><span class="badge" style="background-color: #07756a;">5</span>  Consulter votre accueil aprés avoir confirmé votre inscription , l'équipe <strong> Book-at-esi</strong> vous souhaite la bienvenue !</p>  
      
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    
    <!-- ***********************************************Modal 5************************************************************ -->
    <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment consulter les statistiques par période ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour consulter les statistiques par période : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Cliquez sur le boutton <strong>statistiques par période</strong> dans le menu et entrez la plage de date voulue.</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span> Visualiser tous les événements passés ou annulés dans cette période de tous les utilisateurs.</p> <hr>
       <div class="alert alert-info">
         
         <span>Remarques :
  <ul>
    <li>La date de fin ne doit pas dépasser la date d'aujourd'hui.</li>
    <li>La date de fin ne doit pas dépasser la date de début.</li>
  </ul>
     </span>   
       </div>
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 


    <!-- **********************************************Modal 6************************************************************* -->
    <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment consulter les statistiques par utilisateur ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">Pour consulter les statistiques par utilisateur :</p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Cliquez sur le boutton <strong>statistiques par user</strong> dans le menu et entrez le nom de l'utilisateur voulu.</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span> Visualiser tous les événements passés ou annulés de cet utilisateur.</p>
      
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 


    <!-- ***********************************************Modal 7************************************************************ -->
    <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment modifier mon mot de passe ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour modifier votre mot de passe : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Aller vers la page de modification du mot de passe en cliquant sur le boutton <strong> modifier mon mot de passe </strong> qui se trouve dans le menu.</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span>  Remplir les champs du formulaire de modification du mot de passe .</p>

       <p class="texte"><span class="badge" style="background-color: #07756a;">3</span> Cliquer sur le boutton <strong> modifier </strong> , vous serez redirigé vers la page de confirmation de la modification du mot de passe.</p><hr>
       <div class="alert alert-info">
         
         <span>Remarque :
  <ul>
    <li>Votre mot de passe doit contenir au moins 6 caractères.</li>
  </ul>
     </span>   
       </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- **************************************************Modal 8********************************************************* -->
     <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment modifier mon nom d'utilisateur ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour modifier votre nom d'utilisateur : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Aller vers la page de modification du nom d'utilisateur en cliquant sur le boutton <strong> modifier mon nom d'utilisateur</strong> qui se trouve dans le menu.</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span>  Remplir les champs du formulaire de modification du nom d'utilisateur en entrant votre mot de passe courant .</p>

       <p class="texte"><span class="badge" style="background-color: #07756a;">3</span> Cliquer sur le boutton <strong> modifier </strong> , vous serez redirigé vers la page de confirmation de la modification du nom d'utilisateur.</p>
       

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- ************************************************Modal 9*********************************************************** -->
     <div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment pourrais-je importer le nouveau calendrier ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour importer un nouveau calendrier : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Aller vers la page de l'importation d'un fichier  en cliquant sur le boutton <strong> Mettre à jour mon calendrier</strong> qui se trouve dans le menu.</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span> Sélectionnez le fichier .csv qui contient le calendrier.</p>

       <p class="texte"><span class="badge" style="background-color: #07756a;">3</span> Cliquer sur le boutton <strong> importer </strong>.</p>
       

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- *********************************************** Modal 10 ************************************************************ -->
     <div class="modal fade" id="myModal10" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Est-ce que je peux importer un fichier de format autre que .csv?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Non, seuls les fichiers de formats .csv sont supportés. </p>  </strong> 

      
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 

    <!-- ****************************************************Modal 11******************************************************* -->
    <div class="modal fade" id="myModal11" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Pourquoi est-ce que je n’arrive pas à charger mon fichier ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Votre fichier ne peut être chargé pour plusieurs raisons : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Il ne peut pas être un dossier ou dossier compressé. </p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span> Votre fichier ne peut pas être de format autre que le format .csv, comme : pdf,jpg,xlsx.</p>

       <p class="texte"><span class="badge" style="background-color: #07756a;">3</span> Il ne peut pas dépasser la taille maximale que le serveur peut supporter (2048Ko).</p>
       

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- *********************************************** Modal 12************************************************************ -->
        <div class="modal fade" id="myModal12" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Quand est-ce que je pourrais mettre à jour mon calendrier ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">  - L’ESI renouvelle son calendrier chaque semestre, donc il faut le mettre à jour à chaque fois qu’il y ait un nouveau calendrier pour le bon traitement des demandes de salles. </p>  </strong> 

      
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 

    <!-- *************************************************Modal 13********************************************************** -->
<div class="modal fade" id="myModal13" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment restaurer mon mot de passe en cas de perte ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour restaurer mon mot de passe en cas de perte : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Dans la page de connexion, cliquez sur le lien <strong>Mot de passe oublié ?</strong> . </p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span> Introduisez  l'adresse e-mail avec laquelle vous vous êtes inscrit.</p>

       <p class="texte"><span class="badge" style="background-color: #07756a;">3</span> Vous recevrez sur le champ un e-mail contenant votre mot de passe.</p>
       

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
      <!-- ***********************************************Modal 14************************************************************ -->
        <div class="modal fade" id="myModal14" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1"> Je me suis inscrit, mais lorsque j’introduis mes coordonnées correctement je n’arrive pas à me connecter, pourquoi ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">  - Il se peut que vous n’ayez pas confirmé votre inscription, vérifiez votre adresse e-mail, un e-mail de confirmation vous a été envoyé dès votre inscription. </p>  </strong> 

      
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- *************************************************Modal 15********************************************************** -->
       <div class="modal fade" id="myModal15" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1"> Est-ce que je peux modifier un seul paramètre (Exemple: Date, heure de début ou heure de fin seulement...etc) dans toute ma réservation ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">  - Oui, il suffit de laisser les autres champs vides. </p>  </strong> 
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- **************************************************Modal 16****************************************************** -->
 <div class="modal fade" id="myModal16" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1"> Est-ce que je peux modifier toutes les informations dans ma réservation ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">  - Oui, c'est possible. </p>  </strong> 
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>    
     <!-- **************************************************Modal 17***************************************************** -->
   <div class="modal fade" id="myModal17" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1"> Une fois ma réservation accordée et acceptée, risque-t-elle d’être refusée si je la modifie ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">  - Oui, chaque modification entraîne un traitement pour voir si la salle demandée est disponible avec les nouvelles informations de la réservation. Ainsi si la salle est indisponible après la modification, votre demande sera refusée. </p>  </strong> 
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>    
    <!-- *****************************************************Modal 18****************************************************** -->
     <div class="modal fade" id="myModal18" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Est-ce possible d’annuler la modification d’une réservation après l’avoir effectué?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">  - Non, mais c’est possible de modifier la réservation modifiée, ou d’annuler cette réservation. </p>  </strong> 
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>    
     <!-- ************************************************Modal 19*********************************************************** -->
      <div class="modal fade" id="myModal19" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Si je modifie une réservation, est-ce que la personne concernée sera notifiée ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">  - Oui, un e-mail de notification sera envoyé à l’utilisateur concerné après que vous ayez validé la modification de sa réservation. </p>  </strong> 
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>    
    <!-- ************************************************Modal 20*********************************************************** -->
   <div class="modal fade" id="myModal20" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment consulter toutes les réservations en cours ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour consulter les réservations en cours : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Cliquez sur le boutton <strong>Accueil</strong> que vous trouvez dans le menu.</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span> Vous pouvez ensuite visualiser les réservations
    qui attend votre accord ou refus et les résrvations accordées.</p>
      
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
  
    <!-- ***************************************************Modal 21******************************************************** -->
      <div class="modal fade" id="myModal21" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment accorder ou refuser une réservation ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour accorder ou refuser une réservation : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Cliquez sur le boutton <strong>Accueil</strong> que vous trouvez dans le menu.</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span> Aller au tableau qui contient les réservations en attente.</p>
       <p class="texte"><span class="badge" style="background-color: #07756a;">3</span> Si vous allez accorder la réservation  : <ul class="texte">
         <li>Cliquer sur le boutton <strong>accorder</strong> qui ce trouve dans la meme ligne de la réservation.</li>
       </ul>
       <p class="texte">   Sinon : </p><ul class="texte">
         <li>Cliquer sur le boutton<strong> refuser </strong>.</li>
       </ul></p>
      
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>
    <!-- **************************************************Modal 22********************************************************* -->
    <div class="modal fade" id="myModal22" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment annuler une réservation ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour annuler une réservation : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Cliquez sur le boutton <strong>Accueil</strong> que vous trouvez dans le menu.</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span> Aller au tableau qui contient les réservations accordées.</p>
       <p class="texte"><span class="badge" style="background-color: #07756a;">3</span> Cliquez sur le boutton <strong>annuler</strong> qui se trouve  dans la meme ligne de la réservation.</p>
        <p class="texte"><span class="badge" style="background-color: #07756a;">4</span> Vous serez redirigé vers une page de confirmation et votre réservation sera annulée.
</p>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>
    <!-- ***********************************************Modal 23************************************************************ -->

    <div class="modal fade" id="myModal23" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Comment effectuer une réservation ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte"> Pour effectuer une réservation , veuillez suivre les étapes suivantes : </p>  </strong> 

      <p class="texte"><span class="badge" style="background-color: #07756a;">1</span> Aller vers la page de réservation en cliquant sur le lien <strong>Réserver</strong> qui se trouve dans le menu.</p>
               
       <p class="texte"><span class="badge" style="background-color: #07756a;">2</span> Remplir les champs du formulaire de chaque étape des étapes qui existent : Demandeur , date de réservation , salles , description . Pour basculer d'une étape vers une autre cliquez sur les boutons <strong>Suivant</strong> ou <strong>Previous</strong> selon votre choix.</p>
 <p class="texte"><span class="badge" style="background-color: #07756a;">3</span> Cliquer sur le bouton <strong>Finish</strong> pour permettre au système de valider cette réservation.</p>


        <hr>
       <div class="alert alert-info">
         
         <span>Remarques :
  <ul>
    <li>Seules les demandes de réservation parvenues au minimum quinze jours avant la date de la manifestation sont prises en considération.</li>
    <li>La date de fin ne doit pas dépasser la date de début.</li>
    <li>Il est obligatoire de remplir tout les champs du formulaire.</li>
  </ul>
     </span>   
       </div>
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 


    <!-- **********************************************Modal 24************************************************************* -->
        <div class="modal fade" id="myModal24" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Ma demande de réservation sera-t-elle toujours prise en compte ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Non , notre système effectuera une vérification pour assurer la disponibilité de la salle choisie à l’heure indiquée dans votre demande de réservation , au cas de disponibilité vous serez redirigés vers une page de success , dans le cas contraire vous serez orientés soit : <br> - vers une page contenant une liste des salles avec une capacite correspondante à votre manifestation où vous devez choisir une de ces salles pour remplacer votre choix initial. <br> - vers une page où vous devez changer la date et l’heure de votre manifestation dans le cas où aucune salle convenable n’est disponible dans le slot de temps précisé initialement.</p>  </strong> 
<hr>
       <div class="alert alert-info">
         
         <span>Remarques :
          <br>  Seules les demandes de réservation parvenues au minimum quinze jours avant la date de la manifestation sont prises en considération, sauf exception.
     </span>   
       </div>
    
       
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 

    <!-- **********************************************Modal 25************************************************************* -->
          <div class="modal fade" id="myModal25" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Est-ce que je peux réserver une salle déja réservée ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Non , une salle ne peut être réservée que si elle est inoccupée durant le slot demandé .</p>  </strong> 

       
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- **********************************************Modal 26************************************************************* -->
    <div class="modal fade" id="myModal26" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Qui peut effectuer une réservation ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Tout utilisateur ayant un compte sur notre application de n'importe quelle profession peut effectuer des demandes de réservation destinées à être traitées selon la disponibilité des salles dans le slot de temps introduit .</p>  </strong> 

       
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- **********************************************Modal 27************************************************************* -->
   <div class="modal fade" id="myModal27" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Quels sont les événements que je peux consulter sur le calendrier par periode ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Les événements affichés dans le calendrier sont tous les événements organisés qui se deroulent pendant la période que vous avez précisé.</p>  </strong> 

       
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- **********************************************Modal 28************************************************************* -->
     <div class="modal fade" id="myModal28" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Quels sont les événements que je peux consulter sur le calendrier par salles ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Les événements affichés dans le calendrier sont tous les événements organisés qui se deroule au sein de la salle que vous avez précisé. </p>  </strong> 

       
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- **********************************************Modal 29************************************************************* -->
     <div class="modal fade" id="myModal29" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1"> Est ce que les événements affichés sont propre au utilisateur ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Non, les événements affichés sont tous les événements organisés par tout le monde et non pas seulement vos propre événements. </p>  </strong> 

       
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div> 
    <!-- **********************************************Modal 30************************************************************* -->
     <div class="modal fade" id="myModal30" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1"> Est ce que je pourrais ajouter un nouveau événement directement au calendrier ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Non, pour ajouter un évènement au calendrier il vous faut tout d'abord effectuer une réservation,
   si cette dernière est accordée par le service culturel elle sera ajouté automatiquement au calendrier. </p>  </strong> 

       
    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>
    <!-- **********************************************Modal 31************************************************************* -->
     <div class="modal fade" id="myModal31" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Est ce que je pourrais modifier l'affichage du calendrier ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Oui, notre application vous offre trois affichges,
     en haute à droite on retrouve un bouton pour naviguer entre l'affichage au jour, à la semaine ou au mois. </p>  </strong> 
  
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>
   <!-- **********************************************Modal 32************************************************************* -->
     <div class="modal fade" id="myModal32" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Dans quel cas ma demande de reservation sera telle prise en compte par le service culturel ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Si la salle que vous avez selectionné est disponible durant le créneau de temps que vous avez précisé. </p>  </strong> 
  
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>
   <!-- **********************************************Modal 33************************************************************* -->
     <div class="modal fade" id="myModal33" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Que se passera il si la salle que j'ai selectionné n'est pas disponible ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Vous serez orientées vers une page contenant une liste des salles avec une capacite correspondante
    à votre manifestation où vous devez choisir une de ces salles pour remplacer votre choix initial . </p>  </strong> 
  
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>
     <!-- **********************************************Modal 34************************************************************* -->
     <div class="modal fade" id="myModal34" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Que se passera il si aucune salle n'est disponible à la date que j'ai choisi ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Vous serez orientées vers une page où vous devez changer la date et l’heure de votre manifestation pour remplacer votre choix initial. </p>  </strong> 
  
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>
       <!-- **********************************************Modal 35************************************************************* -->
     <div class="modal fade" id="myModal35" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="titre1">Est ce que je peux annuler une demande de reservation si je ne désire pas changer mes choix initiaux ?</h6>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <!-- Copier my steps -->
          <strong><p class="texte">- Oui, vous pouvez annuler la demande de reservation à tout moment en cliquant sur le bouton annuler. </p>  </strong> 
  
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
        </div>
      </div>
    </div>
  </div>
    <!-- *********************************************************************************************************** -->
<script>
$(document).ready(function(){
  $("#myBtn1").click(function(){
    $("#myModal1").modal();
  });
  /*---------------------*/
  
  $("#myBtn5").click(function(){
    $("#myModal5").modal();
  }); 
  /*----------------------*/
  $("#myBtn6").click(function(){
    $("#myModal6").modal();
  });
  /*---------------------*/
  $("#myBtn7").click(function(){
    $("#myModal7").modal();
  });
  /*---------------------*/
  $("#myBtn8").click(function(){
    $("#myModal8").modal();
  });
  /*---------------------*/
  $("#myBtn9").click(function(){
    $("#myModal9").modal();
  });
  /*---------------------*/
  $("#myBtn10").click(function(){
    $("#myModal10").modal();
  });
  /*---------------------*/
  $("#myBtn11").click(function(){
    $("#myModal11").modal();
  });
  /*---------------------*/
  $("#myBtn12").click(function(){
    $("#myModal12").modal();
  });
  /*---------------------*/
 $("#myBtn13").click(function(){
    $("#myModal13").modal();
  });
  /*---------------------*/
  $("#myBtn14").click(function(){
    $("#myModal14").modal();
  });
  /*---------------------*/
    $("#myBtn15").click(function(){
    $("#myModal15").modal();
  });
  /*---------------------*/
  $("#myBtn16").click(function(){
    $("#myModal16").modal();
  });
  /*---------------------*/
 $("#myBtn17").click(function(){
    $("#myModal17").modal();
  });
  /*---------------------*/
  $("#myBtn18").click(function(){
    $("#myModal18").modal();
  });
  /*---------------------*/
  $("#myBtn19").click(function(){
    $("#myModal19").modal();
  });
  /*---------------------*/
  $("#myBtn20").click(function(){
    $("#myModal20").modal();
  });
  /*---------------------*/
  $("#myBtn21").click(function(){
    $("#myModal21").modal();
  });
  /*---------------------*/
  $("#myBtn22").click(function(){
    $("#myModal22").modal();
  });
  /*---------------------*/
 $("#myBtn23").click(function(){
    $("#myModal23").modal();
  });
  /*---------------------*/
  $("#myBtn24").click(function(){
    $("#myModal24").modal();
  });
  /*---------------------*/
  $("#myBtn25").click(function(){
    $("#myModal25").modal();
  });
  /*---------------------*/
  $("#myBtn26").click(function(){
    $("#myModal26").modal();
  });
  /*---------------------*/
   $("#myBtn27").click(function(){
    $("#myModal27").modal();
  });
  /*---------------------*/
 $("#myBtn28").click(function(){
    $("#myModal28").modal();
  });
  /*---------------------*/
  $("#myBtn29").click(function(){
    $("#myModal29").modal();
  });
  /*---------------------*/
  $("#myBtn30").click(function(){
    $("#myModal30").modal();
  });
  /*---------------------*/
  $("#myBtn31").click(function(){
    $("#myModal31").modal();
  });
  /*---------------------*/
   $("#myBtn32").click(function(){
    $("#myModal32").modal();
  });
  /*---------------------*/
  $("#myBtn33").click(function(){
    $("#myModal33").modal();
  });
  /*---------------------*/
  $("#myBtn34").click(function(){
    $("#myModal34").modal();
  });
  /*---------------------*/
  $("#myBtn35").click(function(){
    $("#myModal35").modal();
  });
  /*---------------------*/
});
</script> 
</div>

</body>
</html>