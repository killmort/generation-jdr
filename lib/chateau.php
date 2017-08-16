<?php
function creerchateau($taille){ 
		$taille1 = array ("d'un abri fortifié","d'un refuge fortifié","d'une habitation fortifiée","d'une maison fortifiée","d'une demeure fortifiée","d'une résidence fortifiée","d'un manoir fortifié", );
		$taille2 = array ("d'un abri fortifié","d'un refuge fortifié","d'une habitation fortifiée","d'une maison fortifiée","d'une demeure fortifiée","d'une résidence fortifiée","d'un manoir fortifié","d'un palais fortifié","d'un donjon");
		$taille3 = array ("d'un abri fortifié","d'un refuge fortifié","d'une habitation fortifiée","d'une maison fortifiée","d'une demeure fortifiée","d'une résidence fortifiée","d'un manoir fortifié","d'un palais fortifié","d'un donjon","d'une tour","d'une bastille","d'une place-forte");
		$taille4 = array ("d'une habitation fortifiée","d'une maison fortifiée","d'une emeure fortifiée","d'une résidence fortifiée","d'un manoir fortifié","d'un palais fortifié","d'un donjon","d'un châtelet","d'une tour","d'une bastille");
		$taille5 = array ("d'un manoir fortifié","d'un palais fortifié","d'un châtelet","d'un donjon","d'une tour","d'une bastille","d'une place-forte","d'un fortin","d'un fort");
		$taille6 = array ("d'un donjon","d'une tour","d'une bastille","d'une place-forte","d'un châtelet","d'un fortin","d'un fort","d'une forteresse");
		$taille7 = array ("d'une tour","d'une bastille","d'une place-forte","d'un fortin","d'un châtelet","d'un fort","d'une forteresse","d'un château","d'une citadelle");
		$taille8 = array ("d'une bastille","d'une place-forte","d'un fortin","d'un fort","d'une forteresse","d'un château","d'une citadelle");
		$deterioration = array("");
		$amelioration = array (
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouverture longue et étroite dans un mur pour tirer à l'arc ou à l'arbalète\">Archère</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouverture défendant généralement une porte permettant de jeter des projectiles verticalement.\">Assommoir</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouvrage fortifié avancé, servant à défendre la porte d'une ville ou d'un château.\">Barbacane</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Cour extérieure protégée par les murailles d'un château.\">Basse-Cour</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouvrage avancé à deux flancs et deux faces faisant saillie, placé généralement sur l'enceinte d'un château. Apparu au milieu du XVI ème siècle en Italie.\">Bastion</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Parement de pierre formant une bosse plus ou moins saillante par rapport à ses arêtes.\">Bossage</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Logette à mâchicoulis faisant saillie, utilisée comme ouvrage de défense qui surplombe, dans la plupart des cas, une ouverture.\">Bretèche</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Emplacement situé dans le flanc d'une place-forte pour défendre le fossé. La casemate n'est généralement pas reliée au reste du château.\">Casemate</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Chemin au sommet des murs, souvent protégé par un parapet.\">Chemin de ronde</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Muraille enveloppant une tour ou quelque édifice fortifié.\">Chemise</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Elément encastré en saillie sur un mur pour supporter un encorbellement. Les corbeaux étaient soit en bois, soit en pierre (appelés alors consoles)\">Corbeau</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Elément de muraille reliant deux bastions ou deux tours flanquantes.\">Courtine</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouverture pratiquée dans le parapet défensif.\">Créneau</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Tour maîtresse d'un château fort médiéval, parfois demeure du seigneur du château.\">Donjon</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Fossé parfois rempli d'eau entourant le château.\">Douves</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Guérite placée en surplomb sur une muraille fortifiée ou une tour.\">Echauguette</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Tourelle surmontant l'escalier d'accès au sommet d'une tour.\">Guette</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Grille de fer ou de bois coulissant de haut en bas.\">Herse</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Galerie de bois établie en surplomb autour du sommet des murs d'un château.\">Hourd</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Palissade de bois entourant les châteaux ou les sites fortifiés.\">Lice</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Construction en surplomb des remparts permettant de jeter des projectiles verticalement.\">Mâchicoulis</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Partie pleine d'un rempart entre deux créneaux.\">Merlon</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouverture étroite pratiquée dans le mur d'un ouvrage fortifié pour permettre l'observation et l'envoi de projectiles.\">Meurtrière</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Sortes de petites casemates extérieures situées dans le fossé et accolées à l'escarpe\">Moineau</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Fosses, ou cachots souterrains dans lesquels les prisonniers sont \"oubliés\" jusqu'à leur mort.\">Oubliettes</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Face visible du mur fait de pierres de taille\">Parement</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Guérite en maçonnerie ainsi nommée à cause de sa forme ronde au toit conique.\">Poivrière</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Pont mobile au dessus d'un fossé, dont le tablier se relève pour fermer l'accès au château.\">Pont-levis</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Petite porte dérobée qui servait à fuir ou à faire entrer des renforts à l'insu des assiégeants.\">Poterne</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Petit ouvrage de fortification isolé et fermé.\">Redoute</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Tour permettant d'effectuer des tirs parallèles au mur à défendre.\">Tour flanquante</span>"
		);
		$listechateau = array ();
		switch ($taille){
		case 1:
			$listechateau=$taille1;
		break;
		case 2:
			$listechateau=$taille2;
		break;
		case 3:
			$listechateau=$taille3;
		break;
		case 4:
			$listechateau=$taille4;
		break;
		case 5:
			$listechateau=$taille5;
		break;
		case 6:
			$listechateau=$taille6;
		break;
		case 7:
			$listechateau=$taille7;
		break;
		case 8:
			$listechateau=$taille8;
		break;
		}
		
		$chateau=$listechateau[rand(0,count($listechateau)-1)];
		if ($taille>6) {
		$l=100;
		$ameliorations = array();
			while (rand(1,100)<$l) {
				$choix = rand(0,count($amelioration)-1);
				$ameliorations[strtolower($amelioration[$choix])] = $amelioration[$choix];
				unset($amelioration[$choix]);
				$amelioration = array_values($amelioration);
				$l=$l-5;
			}
			if (count($ameliorations) > 0){
				$chateau.=' avec '.implode(", ", $ameliorations);
			}
		}	



	
	return  $chateau;
}
function creeraddonmili(){ 
	$addon = array (
		"Un maître d'armes",
		"Un bretteur hors pair",
		"Une guilde de guerriers",
		"Un centre d'entraînement militaire",
		"Un armurier de renom",
		"Une forge fabricant des armes proches de la perfection", 
		"Une ancien chef militaire ayant gagné de grandes guerres",
		"Un combattant utilisant des armes particulières que peu connaissent",
		"Une academie militaire formant de bons combattants",
		"Une fabrique de balistes",
		"Une forge de renom",
		"Un tournois d'épéistes connu de part le monde", 
		"Un tournois d'archerie connu de part le monde",
		"Un tournois de cavalerie connu de part le monde", 
		"Un festival de joutes diverses où chacun peut prouver sa bravoure",
		"Une joute équestre",
		"Un facteur d'arcs reconnu pour ses créations",
		"Un forgeron reconnu pour ses créations",
		);
	return $addon[rand(0,count($addon)-1)];
	}
?>