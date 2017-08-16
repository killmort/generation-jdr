<?php
include ('lib/tiragedes.php');
include ('lib/choixrace.php');
include ('lib/CLASS_Pnj.php');

function creerguerrier($tirage,$race){
	$pnj = new CLASS_Pnj();
	$output='';
	$type = array(
				"Critique",
				"CA",
				"archers",
				"desctructeur",
				"désarmeur",
				"2armescourte",
				"2armeslongues",
				"2mains",
				"Monte"					
			);
	$pnj->setClassedeperso('guerrier');
	$pnj->setSousclasse($type[rand(0,count($type)-1)]);
	$pnj->setCarac(tiragedes($tirage));
	$pnj->setRace(choixrace($race));
	
	
	
	echo test($pnj);
	foreach ($pnj->getRace() as $value) {
		echo $value	;
	}
	
	
	echo $pnj->afficherPNJ();
	
	
	 
}

?>