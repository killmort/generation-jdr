<?php

function appelprotection($protection,$nomduvillage,$particu,$taille){
	include ('porte.php');
	include ('chateau.php');
	
	$sortie='';
	$geo=array('la rivière', 'le gouffre', 'la colline','le flanc de montage', 'le fossé','la forêt','le fleuve','le lac','le pic rocheux');
	$porte=rand(2,3)+ceil($protection/2);
	
	
	$sortie.='.<br><br><h4>Protection</h4>';
	$sortie.=$nomduvillage;
	if ($protection<=13) {
		$sortie.=', ne posséde aucune protection particulière sauf ses habitants et sa milice.';
		$detailporte=detailport(1);
		
	}
	else if ($protection<=18) {
		$sortie.=', posséde un mur d\'enceinte fortifié';
		$detailporte=detailport(2);
		
		if (rand(1,100)>5) $sortie.=', de plus, '.$geo[rand(0,count($geo)-1)]. ' se trouvant à proximité donne une protection naturelle fort appréciable.';
	}
	else {
		$sortie.=', en plus d\'un mur fortifié, posséde de puissants héros fréquement en ville et prêts à prendre les armes pour défendre des attaques extérieures';
		$detailporte=detailport(3);
		
	}
	$sortie.= '<br>Les '.$porte. ' portes de la ville '.$detailporte.'<br>';
	
	$j=0;
	$k=100;
	while(rand(1,100)<$k && $particu==2) {
			if ($j==0) {
				$sortie.='Etant une ville à prédisposition militaire, '.$nomduvillage.' dispose également ';
				$sortie.=creerchateau($taille);
				$sortie.='<br>Et on y retrouve également : <br>';
			}
				$sortie.='-'.creeraddonmili().'.<br>';
				$j++;
				$k=$k-20;
	}
	
return $sortie;

}

?>