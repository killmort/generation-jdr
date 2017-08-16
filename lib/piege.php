<?php
function creerpiege($puissance){
	$piegetype1 = array ("aiguille empoisonnée est tirée vers lui",
"bloc de pierre propulsé dans sa direction",
"un rocher chute sur lui",
"une faux tranchante s'attaque à lui",
"un fil tranchant en travers du couloir est propulsé vers lui",
"une flèche est tirée dans sa direction",
"une fléchette empoisonnée est tirée dans sa direction",
"une fosse camouflée s'ouvre sous ses pieds",
"une fosse profonde s'ouvre sous ses pieds",
"une lame dissimulée dans un mur s'attaque à lui",
"une lance est tirée dans sa direction",
"une parcelle s'éfondre ",
"une volée de fléchettes est tirée dans sa direction",
"une aiguille empoisonnée est tirée dans sa direction",
"un sort de blessure légère est libéré",
"une boîte de moisissure brune tombe sur lui",
"des briques tombant du plafond",
"une chaîne en travers un couloir est propulsé vers lui",
"une fosse s'ouvre",
"une fosse hérisée de pieux s'ouvre sous ses pieds",
"un grand filet tombe sur lui",
"une javeline est tirée sur lui",
"un sort de mains brulante est libéré sur lui",
"un sort de baiser de la goule est libéré sur lui",
"un balancier fixé au plafond bascule avec des gravats sur lui",
"une chute de pierres depuis le plafond tombe sur lui",
"une flèche acide de Melf est librée vers lui",
"le sort Imprécation en extension d'effet est envoyé sur lui");

$piegetype2 = array (
"une collone s'effondre sur lui",
"une sort Eclair est libéré vers lui",
"une faux dissimulée dans le mur est libérée en direction du joueur",
"un sort de glyphe de garde (explosif) est libéré contre lui",
"un gouffre hérissé de pieux s'ouvre sous ses pieds",
"un sort de malédiction est libéré contre lui",
"la salle se rempli d'eau",
"un sort sceau du serpent est libérée contre lui",
"un sort d'assassin imaginaire est libéré contre lui",
"une boule de feu est lancée dans sa direction",
"une chute de bloc de pierre arrive sur lui",
"une piège à feu est libéré",
"un pieux empoisonnés dans le mur est envoyé vers lui",
"une statue s'anime et un combat s'engage",
"une colonne de feu est libérée sur lui",
"un éclair est envoyé vers lui",
"une flèche empoisonnée est lancée dans sa direction",
"une fosse hérissée de pieux (Xm de profondeur) s'ouvre sous ses pieds",
"les murs se rapproche");

$piegetype3 = array (
"un sort de barriere est libéré sur lui",
"une brume acide s'échape des murs (comme sort)",
"un sort de convocation de monstre VI est libéré",
"un sort d'éclair multipe est libéré",
"un sort de tentacules noirs d'Evard est libéré",
"de la vapeur est propulsée par les murs",
"le sort destruction est lancée sur lui",
"une faux empoisonnée et dissimulée dans le mur est libérée en direction du joueur",
"un sort de flèche acide de Melf est lancé",
"la gravité s'inverse",
"un mot de pouvoir étourdissant est prononcé",
"le sort parole du chaos est lancé",
"un rayon prismatique est lancé",
"un sort de tremblement de terre est activé",
"un nuage incendiare sort des murs",
"le plafond descend",
"une sort d'absortion d'énergie est activé",
"une cage de force est activée suivit d'une convocation de monstres VII toute retraite est impossible",
"une fosse hérissée de pieux empoisonnés s'ouvre sous ses pieds",
"le sort plainte d'outre tombe est lancé");


$action = array ("ouvre la porte", "actionne le levier" ,"passe la porte","touche la poignée","marche sur la dale",
"ouvre la grille","allume une bougie","fait trop de bruit");

	
	$piege='';
	switch($puissance){
		case 0;
			$piege.='Lorsque le Pj '. $action[rand(0,count($action)-1)]. ', '.$piegetype1[rand(0,count($piegetype1)-1)].'.';
		break;
		case 1;
			$piege.='Lorsque le Pj '. $action[rand(0,count($action)-1)]. ', '.$piegetype2[rand(0,count($piegetype2)-1)].'.';
		break;
		case 2;
			$piege.='Lorsque le Pj '. $action[rand(0,count($action)-1)]. ', '.$piegetype3[rand(0,count($piegetype3)-1)].'.';
		break;
		
	}
	return $piege;
}



?>