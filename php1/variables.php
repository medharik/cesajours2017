<?php 
define('TVA', 20);
echo TVA;
$nom="Fati";
$prenom="Rim";
//$nomcomplet=$nom." ".$prenom;// "$nom $prenom"// 
$nomcomplet="$nom $prenom";
$age=24;
$natioannalite="Congo ";
$sexe="femme";
$politesse ="";
$couleur="";
$situation = "célibataire";
if($sexe == "homme"){
	$politesse="Mr.";
$couleur="blue";
}
else {

	if($situation == "mariée"){
		$politesse="Mme.";
	}else{
			$politesse="Mlle.";
	}
	
	$couleur="pink";
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>les variables en php</title>
</head>
<body>
<h2 style="color:<?php echo $couleur; ?>">Bienvenue <?php echo $politesse; ?> <?php echo $nomcomplet; ?> </h2>
<h3> age est : <?php echo $age; ?> ans</h3>
<p>la natioannalité est : <?php echo $natioannalite; ?></p>


</body>
</html>