<?php 
$ti=array("hp","dell");
$ti[]="sony";
$ti[]="acer";
var_dump($ti);
echo "le nombre de cases est ".count($ti)."<br>";
//parcourir le tableau
foreach ($ti as $key => $value) {
 	echo " $key est $value <br>";
 } 

 $ta=array("libelle"=>"hp","prix"=>5000);
 foreach ($ta as $key => $value) {
 	echo "<h3>$key est $value</h3>";
 }

 ?>