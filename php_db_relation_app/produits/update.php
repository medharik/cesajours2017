<?php 
include '../utils.php';
extract($_POST);//$libelle,$prix
$chemin=charger($_FILES['photo']);
modifier_produit($id, $libelle, $prix,$chemin);
header("location:index.php?upd=yes");
 ?>