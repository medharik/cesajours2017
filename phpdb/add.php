<?php 
extract($_POST);
if (empty($libelle) ||empty($prix) ||empty($qtestock) ) {
	header("location:nouveauproduit.php?c=o");
}
//connection 
 $cnx=new PDO("mysql:host=localhost;dbname=dbcesa2018","root","");
//prepare la requete
  $rp= $cnx->prepare("insert into produit(libelle,prix,qtestock) values (?,?,?)");
//execute
$rp->execute(array($libelle,$prix,$qtestock));
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 <h3>le produit : <?php echo $libelle ?>  a été ajouté avec succès</h3>
 <a href="nouveauproduit.php">Retour</a>

 </body>
 </html>