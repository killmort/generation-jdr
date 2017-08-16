<?php
function creerlieudit($comm){ //pour éviter le lieu dit avec le nom dans la génération de village
	$LieuMas = array("Ecueil","Bourg","Castel","Champ","Château","Fond","Mont","Moulin","Pont","Port",
					"Pré","Pic","Puy","Roc","Rocher","Tertre","Val","Valon","Lac","Bois","Bord","Cerf","Croc","Comble","Mur","Parc");
	
	
	$LieFem = array("Roche","Ville","Eau","Vigne","Terre","Forge","Maison","Mer","Rive","Roche",
					"Ronce","Cime","Herbe","Citadelle","Passerelle","Butte","Colline","Brume",
					"Cour","Douve","Dune","Fosse","Grange","Muraille","Plaine","Tour","Valée");

	$AdjMas = array("vif","rude", "vert", "vieu", "bas", "beau", "blanc", "clair","fier","franc","froid", 
					"grand", "haut", "morne", "mort", "noble", "noir","fou","court","-sur-mine","-sur-lac",
					" du tonnerre","-à-brume","-à-embrum","-à-fer","-à-loup","-à-pluie","brave","calme","courbe","-de-fer",
					"-de-feu","-de-mine","-de-père","-de-pluie","-de-suif","doré","droit","dur","-en-bois","-en-croc",
					"-en-embrum","-en-fer","-en-feu","-en-ours","-en-père","-en-suif","fer","long","neuf","-sous-cerf",
					"-sous-croc","-sous-écume","-sous-lin","-sous-loup","-sous-puit","-sous-suif","-sous-bois",
					"-sous-embrum","-sous-laine","-sous-pluie","-sous-tourbe","-sur-suif","-sur-puit","-sur-loup",
					"-sur-bois","-sur-cerf","-sur-croc","-sur-écume","-sur-embrum","-sur-lin","-sur-laine","-sur-pluie",
					"-sur-tourbe","royal");
					
	$AdjFem = array("vive","rude","verte","vieille","basse","belle","blanche","claire","fière","franche","froide","grande",
					"haute","morne","mort","noble","noire","folle", "courte","-sur-mine","-sur-lac"," du tonnerre","-à-brume",
					"-à-embrum","-à-fer","-à-loup","-à-pluie","brave","calme","courbe","-de-fer","-de-feu","-de-mine","-de-père",
					"-de-pluie","-de-suif","dorée","droite","dure","-en-bois","-en-croc","-en-embrum","-en-fer","-en-feu",
					"-en-ours","-en-père","-en-suif","fer","longue","neuve","-sous-cerf","-sous-croc","-sous-écume","-sous-lin",
					"-sous-loup","-sous-puit","-sous-suif","-sous-bois","-sous-embrum","-sous-laine","-sous-pluie","-sous-tourbe",
					"-sur-suif","-sur-puit","-sur-loup","-sur-bois","-sur-cerf","-sur-croc","-sur-écume","-sur-embrum","-sur-lin",
					"-sur-laine","-sur-pluie","-sur-tourbe","royale");
		
	$QuaMas = array("Vif","Rude", "Vert", "Vieu", "Bas", "Beau", "Blanc", "Clair","Fier","Franc","Froid", 
					"Grand", "Haut", "Morne", "Mort", "Noble", "Noir","Fou","Court",
					"Brave","Calme","Courbe");
	
	$QuaFem =array("Vive","Rude","Verte","Vieille","Basse","Belle","Blanche","Claire","Fière","Franche","Froide","Grande",
					"Haute","Morne","Mort","Noble","Noire","Folle", "Courte","Calme","Courbe","Droite","Dure");

	$NomMas = array("ecueil","bourg","castel","champ","château","fond","mont","moulin","pont","port",
					"pré","pic","puy","roc","rocher","tertre","val","valon","lac","bois","bord","cerf","croc","comble","mur");
	
	$NomFem = array("roche","ville","eau","vigne","terre","forge","maison","mer","rive","roche",
					"ronce","cime","herbe","citadelle","passerelle","butte","colline","brume",
					"cour","douve","dune","fosse","grange","muraille","plaine","tour","valée");
	
	$ListeNom = array("Avygael","Taklin");
	
	
		
	$lieudit='';
	if ($comm==0 ) $trand =rand(1,100);
	else $trand =rand(1,95);
	switch($trand){
		case $trand<25;
			$lieudit.=$LieuMas[rand(0,count($LieuMas)-1)].$AdjMas[rand(0,count($AdjMas)-1)];
		break;
			
		case $trand>=25&&$trand<48;
			$lieudit.=$LieFem[rand(0,count($LieFem)-1)].$AdjFem[rand(0,count($AdjFem)-1)];
		break;
		case $trand>=48&&$trand<76;
			$lieudit.=$QuaMas[rand(0,count($QuaMas)-1)].$NomMas[rand(0,count($NomMas)-1)];
		break;
		case $trand>=76&&$trand<96;
			$lieudit.=$QuaFem[rand(0,count($QuaFem)-1)].$NomFem[rand(0,count($NomFem)-1)];
		break;
		case ($trand>=96);
			$lieudit.='Chez '.$ListeNom[rand(0,count($ListeNom)-1)];
		break;
	}
	return $lieudit;
}



?>