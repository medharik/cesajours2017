<?php 

function connecter_db()
{
	$cnx= new PDO("mysql:host=localhost;dbname=db2018","root","");
	return $cnx;
}
//ajout de produit
function ajouter_produit($libelle,$prix)
{ 
	$cnx=connecter_db();
	$rp=$cnx->prepare("insert into produit (libelle,prix) values(?,?)");
	$rp->execute(array($libelle,$prix));
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
	$rp=$cnx->prepare("update produit set libelle = ? , prix= ? where id=?");
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
 ?>