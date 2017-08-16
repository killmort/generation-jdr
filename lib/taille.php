<?php
function habitants($taille){ 
	switch ($taille) { //calcul du nombre d'habitants
		case 1:
			$nbrhabitant=rand(20,80);
		break;
		case 2:
			$nbrhabitant=rand(81,400);
		break;
		case 3:
			$nbrhabitant=rand(401,900);
		break;
		case 4:
			$nbrhabitant=rand(901,2000);
		break;
		case 5:
			$nbrhabitant=rand(2001,5000);
		break;
		case 6:
			$nbrhabitant=rand(5001,12000);
		break;
		case 7:
			$nbrhabitant=rand(12001,25000);
		break;
		case 8:
			$nbrhabitant=rand(25001,100000);
		break;
		default:
			$nbrhabitant=rand(25001,100000);
		break;
	}

	return $nbrhabitant;
}
function eco($taille){
switch ($taille) { //calcul du nombre d'habitants
		case 1:
			$economie=-1.00;
		break;
		case 2:
			$economie=0;
		break;
		case 3:
			$economie=1;
		break;
		case 4:
			$economie=2;
		break;
		case 5:
			$economie=3;
		break;
		case 6:
			$economie=4;
		break;
		case 7:
			$economie=5;
		break;
		case 8:
			$economie=6;
		break;
		default:
			
		break;
	}

	return $economie;
}
?>