<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>new product</title>
</head>
<body>
<?php
extract($_GET);
 if (isset($c) && $c=='o'): ?>
<h2 align="center" style="color: red">	tous les champs sont requis </h2>
<?php endif ?>
	<form action="add.php" method="post">
		<table align="center">
			<tr>
				<td>Libellé</td>
				<td><input type="text" name="libelle"></td>

			</tr>
<tr>
				<td>Prix</td>
				<td><input type="text" name="prix"></td>
	
			</tr>
<tr>
				<td>quantité en stock</td>
				<td><input type="text" name="qtestock"></td>

			</tr>
<tr>
				<td></td>
				<td><input type="submit" value="Ajouter le produit" ></td>

			</tr>

		</table>

	</form>

</body>
</html>