<?php 
include_once 'utils.php';
extract($_POST);
$chemin=charger($_FILES['photo']);
ajouter_produit($libelle, $prix,$chemin);
header("location:index.php?add=ok");
 ?>