function valid(){
 var val = true;
 var msg = "";
 var qtt = document.getElementById("qtt");

 if (isNaN(qtt.value) || qtt.value == '' || qtt.value == 0) {
	 msg='Numérique obligatoire et différent de zéro';
	 val = false;
	 document.getElementById("msgErreur").innerHTML = msg;
 }
 if (qtt.value >=1000){
	 msg='Maximum 999';
	 val = false;
	 document.getElementById("msgErreur").innerHTML = msg;
 }
 
 return val;

}

function valid2(){
 var val = vol = true;
 var msg= msg2='';
 var i=0;
 var gene=0;
 var tab=new Array(document.getElementById("FP1"),document.getElementById("FP2"),
 document.getElementById("FP3"), document.getElementById("FP4"), document.getElementById("FP5"),
 document.getElementById("FP6"), document.getElementById("FP7"), document.getElementById("FP8"),
 document.getElementById("FP9"), document.getElementById("FP10"), document.getElementById("FP11"),
 document.getElementById("FP12"), document.getElementById("FP13"), 
 document.getElementById("FP14"), document.getElementById("FP15"), 
 document.getElementById("FP16"), document.getElementById("FP17"), 
 document.getElementById("FP18"), document.getElementById("FP19"),
 document.getElementById("FP20"));

 
 for (i=0; i<tab.length; i++) {
	if (isNaN(tab[i].value))  val=false;
	else { 
		if (tab[i].value=="") val1=0;
		else val1=parseInt(tab[i].value);
		gene+=val1;
	}
	if(!val)msg='Numérique obligatoire. ';
	if (gene>1000) vol=false; 
	if (!vol)msg2='Trop de génération demandées 1000 cumulé maximun';
	
	}
 
 document.getElementById("msgErreur").innerHTML = msg+msg2;
 
 
 return val&&vol;

}