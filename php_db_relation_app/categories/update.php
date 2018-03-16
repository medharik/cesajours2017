<?php 
include '../utils.php';
extract($_POST);//$libelle,$prix
$chemin=charger($_FILES['photo']);
modifier_categorie($id, $nom, $chemin);
header("location:index.php?upd=yes");
 ?>