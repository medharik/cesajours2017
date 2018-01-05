<!DOCTYPE html>
<html>
<head>
	<title>page dynamique</title>
</head>
<body>
<h1>
	bienvenue 
	<?php extract($_GET); echo $nom; ?>
	<?php echo "<h2>salut</h2>"; ?>
</h1>

</body>
</html>