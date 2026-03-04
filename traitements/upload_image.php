<?php
session_start();

// Désactivation  de l'upload d'images
$_SESSION['information'] = "L'upload d'images a été désactivé pour des raisons de sécurité.";

// Redirection vers la galerie
header('Location: ../galerie.php');
exit();
?>