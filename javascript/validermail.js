function validInscription (){
  
 
 var val = true;

 
 var mail = document.getElementById("mailexp");
 var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

	if(reg.test(mail.value)){
	
	}
	else{
		val = false;
		alert('Format du mail non valide');
	}
	
	return val;
	
	
}