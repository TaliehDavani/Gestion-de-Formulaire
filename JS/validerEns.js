function validerEns(){
	var numEns=document.getElementById('numEns').value;
	var session=document.getElementById('session').value;
	var numcou=document.getElementById('numcou').value;
	var type=document.getElementById('type').value;
	var titre=document.getElementById('titre').value;
	if(numEns!="" && numcou!="" && session!="" && type!="" && titre!=""  ){
		return true;
	}else{
		alert("Verifiez vos donnees");
		return false;
	}

}