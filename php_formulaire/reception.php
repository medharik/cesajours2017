<?php 
//var_dump($_GET);
extract($_GET);//creer des variables qui portent le meme non que name ($libelle =$_GET['libelle'])
if(empty($libelle) or empty($prix) or empty($qte) ){
	//redirection vers form.php
	header('location:form.php?x=y');
}
if (!is_numeric($prix) &&  !is_numeric($qte) ) {
header("location:form.php?prix=no&qte=no");
 } ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php if (!empty($libelle)): ?>
 	<h2>le libellé est : 
 	<?php echo $libelle; ?></h2>
 
 <?php endif ?>
 <?php if (!empty($prix)): ?>
 	<h2>Le prix est <?php echo $prix; ?></h2>

 <?php else: ?>
 	le prix est obligatoire
 <?php endif ?>
 
 <?php 
if (!empty($qte) && is_numeric($qte)) {
	echo "<h2> la quantité est $qte</h2>";
}else {
	echo "<br>quantité non valide";
}

  ?>

 </body>
 </html>