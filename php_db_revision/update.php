<?php 
include 'utils.php';
extract($_POST);//$libelle,$prix
modifier_produit($id, $libelle, $prix);
header("location:index.php?upd=yes");
 ?>