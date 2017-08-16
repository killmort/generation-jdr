<?php

function appelprotectionhomme($nbrhommearme,$nbrheros,$nbraventuriers){
	$colonel=0;
	$armee=$nbrhommearme;
	$sortie='';
	
	$sortie.='<br><h4>Protection en hommes</h4>';
	$sortie.='On retrouve également quelques '.$nbrhommearme.' hommes d\'arme, formés ';
		
		if($nbrhommearme<50) $sortie.='de quelques villageois maniant maladroitement épée et arc...<br>';
		else if ($nbrhommearme<100) {
					if(rand(0,1)==1) $sortie.='d\'hommes qui suivent un entraînement sporadique.<br>';
					else $sortie.='d\'une milice mal organisée.<br>';
					}
			else if ($nbrhommearme<250) {
					if(rand(0,1)==1) $sortie.='d\'hommes correctement armés avec un entraînement hebdomadaire.<br>';
					else $sortie.='d\'une milice organisée avant une hiérarchie.<br>';
					}
				else if ($nbrhommearme<999) $sortie.='d\'hommes correctement armés avec un entraînement quasi quotidien, ils possédent certaines spécialisations (arc, épées, pique,...).<br>';
				else if ($nbrhommearme>=1000) {
					$sortie.='en une armée digne de ce nom avec, à sa tête, un général d\'armée<br>';
					$nbrhommearme=$nbrhommearme-1;
				}
		$temp=501;
		while ($temp<$nbrhommearme) {
			$colonel++;
			$nbrhommearme--;
			$temp=$temp+501;
		}
		if ($colonel>=1) {
			$sortie.='Ces hommes comprenent : <br>- '.$colonel.' colonel';
			if($colonel>1) $sortie.='s';
			$sortie.=' d\'armée ayec 5 lieutenants sous leurs ordres directs<br>';
					
			$lieutenant=$colonel*5;
			$sortie.='- '.$lieutenant.' lieutenant';
			if($lieutenant>1) $sortie.='s';
			$sortie.=' dans l\'armée dirigeant 100 hommes chacun. Ils sont choisis pour leur talent avec une arme de corps-à-corps comme l\'épée ou la hache, soit pour leur talent à l\'arc ou pour leurs connaissances tactiques.<br>';
			$nbrhommearme=$nbrhommearme-$lieutenant;
			$nbrhommearme=$nbrhommearme-($lieutenant*100);
			$sortie.='Les unités de 100 hommes sont souvent spécialisées. On retrouve des piquiers, épéistes, archers';
			if (($armee+rand(0,500))>1000) $sortie.='mais également une cavalerie non négligeable';
			$sortie.='.';
		}
		//echo $armee;
		if($armee>501) $sortie.='Les '.$nbrhommearme.' hommes restants sont quelques réservistes ou retraités qui peuvent venir en aide à tout instant. ';		if ($nbrheros>0) {
			if($nbrheros=1) $sortie.='De plus le héro en ville peut très bien reprendre les armes et se joindre aux forces armées. ';
			else $sortie.='De plus les héros vivants en ville peuvent rejoindre les rangs et aider les forces armées en cas de conflit important ou demande du dirigeant. ';
		}
		if ($nbraventuriers >0) {
			if($nbraventuriers=1) $sortie.='Il est également possible de demander de l\'aide à l\'aventurier présent en ville';
			else $sortie.='Pour finir, il est tout à fait envisageable de demander de l\'aide aux aventuriers présents en ville';
		}
		
	
	
	

return $sortie;

}

?>