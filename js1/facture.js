somme =0;
function ajouter () {

 libelle=document.getElementById('libelle');
 prix=document.getElementById('prix');
 qte=document.getElementById('qte');
 facture=document.getElementById('facture');
  tht=document.getElementById('tht');
    tva=document.getElementById('tva');
       ttc=document.getElementById('ttc');
facture.innerHTML += "<tr><td>"+libelle.value+"</td>	<td>"+prix.value+"</td><td>"+qte.value+"</td></tr>";
somme += prix.value*qte.value;
tht.innerHTML="THT : "+somme + " DHS";
ttc.innerHTML= somme*(1+ tva.value/100);
}