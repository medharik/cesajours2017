<?php 
include_once '../utils.php';
extract($_GET);//$id
supprimer($id, "categorie");
//header("location:index.php?del=ok")
 ?>