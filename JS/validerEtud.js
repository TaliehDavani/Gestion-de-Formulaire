function validerEtud(){
	var numEtud=document.getElementById('numEtud').value;
	var session=document.getElementById('session').value;
	var numcou=document.getElementById('numcou').value;
	var type=document.getElementById('type').value;
	if(numEtud!="" && numcou!="" && session!="" && type!=""){
		return true;
	}else{
		alert("Verifiez vos donnees");
		return false;
	}

}