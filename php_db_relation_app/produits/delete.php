<?php 
include_once '../utils.php';
extract($_GET);//$id
supprimer($id, "produit");

header("location:index.php?del=ok")
 ?>