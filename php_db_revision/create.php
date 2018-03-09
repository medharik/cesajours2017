<?php 
include_once 'utils.php';
extract($_POST);
ajouter_produit($libelle, $prix);
header("location:index.php?add=ok");
 ?>