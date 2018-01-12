<!DOCTYPE html>
<html>
<head>
	<title>php séance 2 : les boucles</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>la boucle for </h2>
<table border="1" align="center" width="300">
	<tr>
		<td>numéro contact</td>
		<td>contact</td>
	</tr>
<?php for ($i=0; $i <30 ; $i++) { 
	if($i%2==0){
		$color="grey";
	}else{
		$color="white";
	}
	/*echo 'itération numéro '.$i.'<br>';*/

	//$i%2==0; => $i est pair
 ?>
	<tr style="background: <?=$color ?>">
		<td><?php echo $i; ?></td>
		<td>ali <?=$i; ?></td>
	</tr>
	<?php } ?>
</table>

</body>
</html>