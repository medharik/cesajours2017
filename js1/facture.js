somme =0;
function ajouter () {
 libelle=document.getElementById('libelle');
 prix=document.getElementById('prix');
 qte=document.getElementById('qte');
 facture=document.getElementById('facture');
  tht=document.getElementById('tht');
    tva=document.getElementById('tva');
       ttc=document.getElementById('ttc');
facture.innerHTML += "<tr><td> <input  type='text' name='libelle' value='"+libelle.value+"'></td>	<td><input type='text' name='prix' value='"+prix.value+"'  onkeyup='calculer()'></td><td><input type=''text' onkeyup='calculer()' name='qte' value='"+qte.value+"'></td><td><a href='#1' onclick='del(this)'>supprimer</td></tr>";
calculer();
}
function calculer(){
	somme=0;
	tprix=document.getElementsByName('prix');
	tqte=document.getElementsByName('qte');
	for (var i = 0; i < tprix.length; i++) {
	//	alert(tprix[i].value);
	somme+=tprix[i].value*tqte[i].value;
	};
tht.innerHTML="THT : "+somme + " DHS";
ttc.innerHTML= somme*(1+ tva.value/100);
}

function del(e) {
	e.parentNode.parentNode.remove();
}