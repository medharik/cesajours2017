lien : http://localhost/cesajours/php1/donneeslien.php?age=20&=nom=ali
<?php 
extract($_GET);//pour extraire les infos ds le lien


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h1>
  Bienvenue <?php echo $nom; ?>, vous avez : <?php echo $age; ?>
  </h1>
 </body>
 </html>