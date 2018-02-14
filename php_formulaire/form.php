<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulaire </title>
</head>
<body>

<?php if (!empty($_GET['x'])  && $_GET['x']=='y'): ?>
	<h2>tous les champs sont obligatoires</h2>
<?php endif ?>
<?php if (!empty($_GET['prix']) && $_GET['prix']=='no'): ?>
	prix non valide
<?php endif ?>
<?php if (!empty($_GET['prix']) && !empty($_GET['qte'])): ?>
	le prix / qte doivent être numérique
<?php endif ?>
<form action="reception.php" method="get">
	<table align="center">
		<tr>
			<td>Libellé : </td>
			<td><input type="text" name="libelle" placeholder="Libellé..." ></td>
		</tr>

		<tr>
			<td>Prix : </td>
			<td><input type="text" name="prix"></td>
		</tr>

		<tr>
			<td>Quantité : </td>
			<td><input type="text" name="qte"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Valider"></td>
		</tr>
	</table>
	

</form>

</body>
</html>