<?php

function appeldirigeant($dirigeant,$nbrdirigeant,$typevillenum){
	include_once ('nomevolue.php');

	$typedirigeanttradisolo=array('un maire','un noble','un aventurier à la retraite','un riche marchand','un prêtre de faible puissance','un mage de faible puissance','un troubadour','un membre des ménestrels','un officier','un commandant','un sénéchal','un baron','un compte','un grand-duc','un marquis','un duc');
	$typedirigeanttradimulti=array("un conseil municipal","un ensemble de marchands","un ensemble de prêtres de différents cultes de la nature"," un groupe d\'aventuriers à la retraite","un ensemble de prêtres de confession bienveillante");
	$typedirigeantinhabsolo=array('une guilde de voleurs','une guilde de marchands','une guilde d\'artisans','une guilde d\'assassins','une guilde de mercenaires');
	$typedirigeantinhabmulti=array('une guilde de voleurs','une guilde de marchands','une guilde d\'artisans','une guilde d\'assassins','une guilde de mercenaires');
	$typedirigeantinmagsolo=array('un mage isolé puissant','un mage isolé très puissant et versatile','un ensorceleur versatile','un chaman au charisme extraordinaire','un prête ayant une foi inébranlable');
	$typedirigeantinmagmulti=array('un conseil de mages','un temple de confession bonne','un ordre religieux extrémiste','un ordre religieux totalitaire');
	$monstrueux=array("un magicien ayant pactisé avec un démon afin de ne plus veillir","un doppelgänger usurpant l'identité du vrai dirigeant","un pion au services d'une organisation","un pion devant rendre des comptes à une créature puissantes (dragon, démon,...)","dirigé par un flageleur mental qui s'amuse");
	$pasorkpasgob = array (1,3,4,6,7,8);
	
	$sortie='';
	$sortie.='<br><h4>Dirigeant(s)</h4>';
	$sortie.='La ville est dirigée  par ';
	if ($dirigeant<=13) { 
		if ($nbrdirigeant==1) {
			if (rand(1,100)>5) {
				$sortie.=$typedirigeanttradisolo[rand(0,count($typedirigeanttradisolo)-1)];
				if ($typevillenum==0) $sortie.=' portant le nom de '.creernomevo(7,rand(0,1));
				else if ($typevillenum==1) $sortie.=' portant le nom de '.creernomevo($pasorkpasgob[rand(0,6)],rand(0,1)).'.';
				else $sortie.=' portant le nom de '.creernomevo(rand(1,8),rand(0,1));
			}
			else {
				$sortie.=$typedirigeanttradisolo[rand(0,count($typedirigeanttradisolo)-1)]. ' mais qui est en réalité ';
				if (rand(1,100)>5) $sortie.=$typedirigeanttradimulti[rand(0,count($typedirigeanttradimulti)-1)];
				else $sortie.=$typedirigeanttradimulti[rand(0,count($typedirigeanttradimulti)-1)]. ' rajouter monstrueux';
			}		
		}
	}
	else if ($dirigeant<=18)  {
		if ($nbrdirigeant==1) {
			$sortie.=$typedirigeanttradisolo[rand(0,count($typedirigeanttradisolo)-1)].' mais lui-même à la solde d\'';
			if(rand(0,1)==0) {
				$sortie.=$typedirigeantinhabsolo[rand(0,count($typedirigeantinhabsolo)-1)];
				if(rand(0,1)==0) $sortie.=" et ce, contre son gré.";
				else $sortie.=" en retour d'un confort financier.";
			}
			else 
				$sortie.=$typedirigeantinhabmulti[rand(0,count($typedirigeantinhabmulti)-1)];
		}
		else { 
			$sortie.=$typedirigeanttradimulti[rand(0,count($typedirigeanttradimulti)-1)].' mais lui-même à la solde d\'';
			if(rand(0,1)==0) 
				$sortie.=$typedirigeantinhabsolo[rand(0,count($typedirigeantinhabsolo)-1)];
			else 
				$sortie.=$typedirigeantinhabmulti[rand(0,count($typedirigeantinhabmulti)-1)];
		}
	}
	else if(rand(0,1)==0)  	{
		$sortie.=$typedirigeantinmagsolo[rand(0,count($typedirigeantinmagsolo)-1)];
		if ($typevillenum==0) $sortie.=' portant le nom de '.creernomevo(7,rand(0,1));
		else if ($typevillenum==1) $sortie.=' portant le nom de '.creernomevo($pasorkpasgob[rand(0,6)],rand(0,1)).'.';
		else $sortie.=' portant le nom de '.creernomevo(rand(1,8),rand(0,1));
		}
		else $sortie.=$typedirigeantinmagmulti[rand(0,count($typedirigeantinmagmulti)-1)];
	
	
	

return $sortie;

}

?>