<?php 
//var_dump($_GET);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<?php 

foreach ($_GET as $c => $v) {
	echo "<p>$c est $v</p>";
}
 	 ?>
 
 </body>
 </html>