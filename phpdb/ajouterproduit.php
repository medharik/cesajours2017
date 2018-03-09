<?php 
//var_dump($_POST);
extract($_POST);//creer 3 variables
//echo $libelle;// <=> $_POST['libelle']
//mysql=> mysqli,
//pdo
//connexion à la bd
 $cnx= new PDO("mysql:host=localhost;dbname=db2018","root","");
//requetes SQL
 $requete_prepare=$cnx->prepare("insert into produit(libelle,prix,qtestock) values (?,?,?)");
 //lance la requete
$requete_prepare->execute(array($libelle,$prix,$qtestock));



 ?>