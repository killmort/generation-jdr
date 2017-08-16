<?php
function choixrace($race){
 if ($race==0) $race=rand(1,7);
	$ajustement = array(0,0,0,0,0,0);	
 
 	switch ($race) {
		
		case 1: // humain
			return $ajustement;
		break;
		case 2:  //halfelin
			$ajustement = array(-2,2,0,0,0,0);
			return $ajustement;
		break;
		
		case 3:		//gnome
			$ajustement = array(-2,0,2,0,0,0);
			return $ajustement;
		break;
		
		case 4:		//Demi-orque   
			$ajustement = array(2,0,0,-2,0,-2);
			return $ajustement;
		break;
		
		case 5:		//Nain
			$ajustement = array(O,0,2,0,0,-2);
			return $ajustement;
		break;
		
		case 6:		//demi-elfe
			$ajustement = array(0,0,0,0,0,0);
			return $ajustement;
		break;
		
		case 7:		//Elfe
			$ajustement = array(0,2,-2,0,0,0);
			return $ajustement;
		break;

	}

	
}


