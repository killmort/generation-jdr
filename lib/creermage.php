<?php

function creermage(){
	$pnj = new CLASS_Pnj();
	$pnj->setClassedeperso('mage');
	
	echo $pnj->afficherPNJ();
	
}

?>