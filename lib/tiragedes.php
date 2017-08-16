<?php
function tiragedes($methode){
	$tirage='';
	$val=0;
	
	switch ($methode) {
		case 0:
			for($i=0;$i<6;$i++)$id_caracs[$i]=rand(3,18);
			arsort($id_caracs);
		break;
		
		case 1:
			for($k=0;$k<6;$k++){ 
				$val=0;
				for ($i=0;$i<4;$i++){ //tirage des 4 des
					$tab[$i]=rand(1,6);
				}
				arsort($tab); // tri des valeur des 4 des
				array_pop($tab); //suppression du plus petit
				$carac=0; //mise à zero de la carac
				foreach($tab as $val) { //addition des 3 dés
					$carac += $val;
				}
				$id_caracs[$k]=$carac; //atrribution de l'addition dans le tableau de caract
			}
			arsort($id_caracs);
			
		break;
		
		case 2:
			for($i=0;$i<7;$i++)$id_caracs[$i]=rand(3,18);
			arsort($id_caracs);
			array_pop($id_caracs);
		break;
		case 3:
			for($k=0;$k<7;$k++){ 
				$val=0;
				for ($i=0;$i<4;$i++){ //tirage des 4 des
					$tab[$i]=rand(1,6);
				}
				arsort($tab); // tri des valeur des 4 des
				array_pop($tab); //suppression du plus petit
				$carac=0; //mise à zero de la carac
				foreach($tab as $val) { //addition des 3 dés
					$carac += $val;
				}
				$id_caracs[$k]=$carac; //atrribution de l'addition dans le tableau de caract
			}
			arsort($id_caracs);
			array_pop($id_caracs);
		break;
		case 4:
			for($i=0;$i<6;$i++)$id_caracs[$i]=rand(8,18);
			arsort($id_caracs);
		break;
		case 5:
			for($i=0;$i<6;$i++)$id_caracs[$i]=rand(6,18);
			arsort($id_caracs);
		break;
		default:
			;
		break;
	}
	
	return $id_caracs;
}

?>