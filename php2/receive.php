<?php 
//var_dump($_GET);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
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