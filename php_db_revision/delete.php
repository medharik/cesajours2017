<?php 
include_once 'utils.php';
extract($_GET);//$id
supprimer_produit($id);
header("location:index.php?del=ok")
 ?>