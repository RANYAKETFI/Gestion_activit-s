<?php
session_start();
//Effacer les données de l'utilisateur et interdire l'accès aux pages sans connexion
session_unset();

// Détruire la variable session
session_destroy();

/*************Redirection vers accueil************ */

echo "<script> location.href='./connexion.php'; </script>";
?>
