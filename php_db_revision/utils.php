<?php 

function connecter_db()
{
	$cnx= new PDO("mysql:host=localhost;dbname=db2018","root","");
	return $cnx;
}
//ajout de produit
function ajouter_produit($libelle,$prix,$photo)
{ 
	$cnx=connecter_db();
	$rp=$cnx->prepare("insert into produit (libelle,prix,photo) values(?,?,?)");
	$rp->execute(array($libelle,$prix,$photo));
}
//suppression de produit
function supprimer_produit($id)
{
	$cnx=connecter_db();
	$rp=$cnx->prepare("delete from produit where id=?");
	$rp->execute(array($id));
}
//modification de produit
function modifier_produit($id,$new_libelle,$new_prix )
{
	$cnx=connecter_db();
	$rp=$cnx->prepare("update produit set libelle = ? , prix= ?  where id=?");
	$rp->execute(array($new_libelle,$new_prix,$id));
}
//recuperation de tous les produits
function recuperer_tous( )
{
	$cnx=connecter_db();
	$rp=$cnx->prepare("select * from produit order by id desc");
	$rp->execute(array());
	$data=$rp->fetchAll();
	return $data;
}
//recuperation d'un produit par son id
function recuprer_par_id($id )
{
	$cnx=connecter_db();
	$rp=$cnx->prepare("select * from produit where id = ?");
	$rp->execute(array($id));
	$data=$rp->fetch();
	return $data;
}
function charger($infos)
{
	extract($infos);//$name,$tmp_name,...(5 infos)
	//generer un nom aléatoire et unique
	$new_name=md5("test".date('Y_m_d_h_i_s')."_".rand(0,99))."_".$name;
	//deplacer le fichier temp vers sa destination  définitive
	$new_destination="uploads/".$new_name;
	$extension=pathinfo($name,PATHINFO_EXTENSION);
//taille en octect
$taille=filesize($tmp_name);

if($taille > 8000000){
die("fichier trop volumineux ,  la taille max est 8Mo");
}
$extension_autorise=array('jpg','png','jpeg','gif');
if (! in_array(strtolower($extension), $extension_autorise)) {
	die("type de fichier non autorisé (ce n'est une image)");
}
	move_uploaded_file($tmp_name, $new_destination);
return  $new_destination;
}
 ?>