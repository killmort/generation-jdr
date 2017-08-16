<?php
include ('lib/compteur.php');
include ('lib/auberge.php');
include ('lib/nomevolue.php');

//création de l'auberge.
$fm =rand(0,1);
$qualite=rand(0,2);
$etage=rand(0,2);
$etagetexte='';
$place=rand(1,2)+$qualite;

if (isset($_GET['nom'])) 	$nom=stripslashes($_GET['nom']); // On a le nom et le prénom
	
else {
	$nom=creerauberge(); 					// génération du nom de l'auberge
	
}
$_GET['nom']=$nom;
$racetaball =array("Demi-elfe","Demi-orque","Elfe","Gnome","Halfelins","Humain","Nain");

$racetab1 =array(0,2,3,4,5,6);
$aidefemmn=array(" sa cousine"," sa soeur", " sa fille", " sa mère"," sa nièce", " sa belle soeurs", " son aïeul", " sa femme");
$aidefemnd=array(" son amie"," une ancienne compagne d'aventure", " son amie d'enfance");
$aidemasmn =array(" son cousin"," son frère", " son fils", " son père", "son neveu", "son beau frère", " son aïeul", " son époux");
$aidemasnd=array(" son ami"," un ancien compagnon d'aventure"," son ami d'enfance");


if (strstr($nom,'Chez ')) $tenancier = substr($nom,'5');
if ($qualite==0){
	$raceproprio=rand(1,count($racetaball));
	$sexeproprio=rand(1,2);
}
else {
	$raceproprio=$racetab1[rand(1,count($racetab1)-1)];
	$sexeproprio=rand(1,2);
}

$proprio=creernomevo($raceproprio,$sexeproprio);

switch (rand(0,3)) {
	case 0: //meme nom mas
	$aideprorio=$aidemasmn[rand(0,count($aidemasmn)-1)].' '.creernomsim($raceproprio,1);
	break;
	case 1: //meme nom fem
	$aideprorio=$aidefemmn[rand(0,count($aidefemmn)-1)].' '.creernomsim($raceproprio,2);
	break;
	case 2: //nom différent mas
	$aideprorio=$aidemasnd[rand(0,count($aidemasnd)-1)].' '.creernomevo(rand(1,count($raceproprio)),1);
	break;
	case 3: //m$eme nom fem
	$aideprorio=$aidefemnd[rand(0,count($aidefemnd)-1)].' '.creernomevo(rand(1,count($raceproprio)),2);
	break;

}
	
$divers1 = array("qui est plutôt", "","","");

$bonplat = array(
	"\"Ours au miel\"",
	"\"Cygne aux trois poivres\"", 
	"\"Ragoût de lapin sauce verte\"",
	"\"Poulet aux pruneaux, raisins, amandes et abricots secs\"",
	"\"Potage Jaunet\"",
	"\"Civet de lapin aux épices\"",
	"\"Agneau rôti au sel\"",
	"\"Lapin au sirop\""
	);
	
$servicequalite = array ();
	$servicequalite[0] = array ("Un barbier, ",
	"qui risque plus d'entailler un peu la gorge que les poils",
	"qui exécute son travail convenablement",
	"qui peut faire n'importe quelle fantaisie dans les barbes les plus fournies"
	);
$servicequalite[1] = array (
	"Un barde, ",
	"qu'il faut payer pour qu'il se taise.",
	"qui, pour quelques piécettes, chante.",
	"qui entonne l'un des plus beaux chants lyriques.");
	
$servicequalite[2] = array (
	"Un magicien, ",
	"qui fait de pitoyables tours de passe-passe.",
	"qui, pour quelques piécettes, lance des sorts et des effets visuels.",
	"qui exécute de belles illusions."
	);
$servicequalite[3] = array (
	"Un palefrenier, ",
	"qui mènera vos chevaux à l'étable.",
	"qui prendra soin des chevaux.",
	"qui soignera et nourrira les chevaux convenablement."
	);
$servicequalite[4] = array (
	"Un bain, ",
	"dans une arrière-salle avec de l'eau froide et croupie.",
	"dans une salle commune ou dans la chambre, si possible.",
	"dans la chambre avec de l'eau à bonne température."
	);
$servicequalite[5] = array (
	"Un petit commerce,",
	"avec différents objets de mauvaise qualité mais bon marché (cordes, grappins,...).",
	"avec différents objets utiles (cordes, sacs-à-dos, grappins,...).",
	"avec différents objets de bonne qualité plus chers qu'ailleurs (cordes de soies, grappins alléger...)"
	);
$servicequalite[6] = array (
	"Des rations sèches, ",
	"permettant de ne pas mourir de faim mais au goût infâme.",
	"permettant de se sustenter durant les longs voyages.",
	"permettant de bien manger même lors de voyages."
	);
$servicequalite[7] = array (
	"Une dame de compagnie, ",
	"peu charmante mais efficace, parfois l'envie dépasse la raison.",
	"qui sera d'autant plus conciliante si le prix est élevé.",
	"qui est aussi agréable à regarder qu'intéressante pour discuter."
	);
$servicequalite[8] = array (
	"Un soigneur, ",
	"pouvant panser les blessures.",
	"pouvant lancer des sorts de soins faibles.",
	"pouvant lancer des sorts de soins, des sorts de guérison des maladies,..."
	);
$servicequalite[9] = array (
	"Un scribe, ",
	"qui, malgré de nombreuses fautes, peut écrire contrats et actes de vente.",
	"capable d'écrire tout acte de vente ou contrat.",
	"qui, avec une belle calligraphie, peut écrire contrats et actes de vente."
	);
$servicequalite[10] = array (
	"Un écuyer, ",
	"qui, logiquement, rendra les armes plus propres qu'il ne les a reçues,... logiquement",
	"qui prendra soin des pièces d'armures et des armes.",
	"qui donnera une deuxième vie à votre équipement."
	);
$servicequalite[11] = array (
	"Un écriteau à annonces, ",
	"où plusieurs offres, pas toujours des plus honnêtes, y sont inscrites.",
	"où l'on retrouve autant de demandes de services que d'offres.",
	"où l'on retrouve les missions les plus prestigieuses et les escortes de personnes importantes"
	);
$servicequalite[12] = array (
	"Un coffre-fort, ",
	"qui cache du regard vos biens, pour leur sécurité, il faudra trouver autre chose.",
	"qui permet de mettre à l'abri les biens précieux.",
	"qui protège autant mécaniquement que magiquement vos biens."
	);
$servicequalite[13] = array (
	"Une salle de réception, ",
	"plutôt miteuse mais pour le prix...",
	"assez grande pour organiser mariages et autres festivités.",
	"grande, confortable et bien agencée."
	);

$nbrservice=rand(2,3)+$etage-1+$qualite;

$mauvaisplat = array (
	"une tourte au mouton",
	"une omelette à la sauce grise et ses croûtons",
	"un cake aux carottes",
	"un ragoudabats"
	);

if ($fm==0) $type = $nommascu=array ("e auberge","e résidence","e taverne","e habitation");
else $type=array (" établissement");

if ($fm==0) $qualif = array ("de qualité médiocre","de qualité moyenne","réputée");
else $qualif = array ("médiocre","moyen","réputé");




$forme=array("en forme de H","en forme de U","en forme de L","de forme rectangulaire");

if($qualite==2 && $etage<2) $etage=$etage+1;

if ($etage==0) $etagetexte='unique rez-de-chaussée';
else if ($etage==1) $etagetexte='rez-de-chaussée et d\'un étage';
else $etagetexte='rez-de-chaussée et de deux étages';

$dispo=array("Sur le côté, ","Derrière, ","A l'arrière, ","Dans le fond, ");

$perso0 = array (
	"individus peu fréquentables" , 
	"brigands de bas-étage",
	"malandrins prêts à en découdre",
	"des engeances de la ville",
	"gens de mauvaise vie",
	"personnages à la réputation plus que douteuse",
	"mercenaires qui, pour quelques pièces d'or, acceptent tout contrat",
	"ivrognes qui oublient leurs soucis dans la bouteille",
	"exclus de la société",
	"receleurs fourguant leur camelotte",
	"femmes au physique disgracieux cherchant de la compagnie"
	);
	
$perso1 = array (
	"gardes de la ville après leur service",
	"marchands à la recherche de fortune", 
	"aventuriers qui cherchent du travail",
	"voyageurs cherchant une escorte",
	"héros en quête d'aventures",
	"jeunes femmes cherchant bonne compagnie",
	);
	
$perso2 = array (
	"nobles et des nantis n'ayant d'autre occupation que de se détendre",
	"riches marchands se reposant avant de repartir",
	"héros ayant fait fortune et coulant des jours heureux",
	"nobles",
	"veuves fortunées cherchant de la compagnie"
	);

$debut = array (
	"Les rencontres les plus fréquentes dans cette auberge sont des ",
	"Dans cette auberge, on peut rencontrer des ",
	"Dans cet établissement viennent souvent des ",
	"L'on y rencontre souvent des ",
	"Il est fréquent de croiser le chemin de ",
	"La clientèle présente est principalement composée de ",
	"Cette auberge est principalement fréquentée par des "
	);	
	
$objet0sin = array (
	"Un bar en chêne rongé par les champignons ",
	"Le trou béant par lequel le vent s'engouffre ",
	"La cheminée complètement bouchée par la suie "
	);

$objet0plr = array (
	"Des rats sortant de la cuisine ",
	"Des odeurs d'urines mélangées à de vagues relants de cuisine ",
	"Des débris de mobiliers témoignant des nombreuses bagarres "
	);

$objet1plr = array (
	"Les murs propres et lisses, ",
	"Les murs en bon état et blanchis à la chaux ",
	
);

$objet1sin = array (
	"Le mur de gauche, noirci, tend à faire penser qu'un incendie s'est déclaré il y a peu et ",
	"La belle cheminée en pierre"
);

$objet2plr = array (
	"De belles poutres apparentes ",
	"Des boiseries finement ciselées ",
	"Les tables et les chaises en bois exotique ",
);

$objet2sin = array (
	"Un sol aux pierres parfaitement taillées ",
	"L'imposante cheminée de granit poli ",
	"Le comptoir sculpté dans de la pierre bleue "
	);

$lieu0 = array (
	"des docks, permet aux marins inactifs d'être des clients assidus.",
	"du port, laisse une odeur permanente de poisson.",
	"des bas-quartiers, rend cet établissement peu fréquentable.",
	"d'un temple d'une divinité mauvaise, amène parfois à côtoyer de drôles de religieux.",
	"des quartiers de la populace, ne permet pas d'élever le niveau de l'établissement."
);
$lieu1 = array (
	"des quartiers du peuple donne une ambiance correct sans fioriture.",
	"des docks, permet aux capitaines de vaisseaux de s'y restaurer.",
	"d'un temple d'une divinité bonne, amène souvent de braves gens.",
	"de la place du marché, donne à cet établissement une ambiance festive."
);
$lieu2 = array (
	"des riches quartiers marchands, rend souvent aisé la négociation de contrats.",
	"de l'hôtel de ville, permet d'y rencontrer souvent les notables.", 
	"de la tour d'un magicien renommé, semble attirer bon nombre de voyageurs.", 
	"de la maison d'un héros d'antan, amène celui-ci à y passer parfois pour raconter ses aventures.",
	"d'une route fortement fréquentée, permet à l'établissement d'être toujours bondé."
);

$construction0 = array (
	", celui-ci ne tient que par habitude. ",
	", celui-ci a sans doute été construit par un manchot. ",
	", celui-ci semble avoir subi les ravages de la guerre. ",
	", celui-ci laisse entrevoir le ciel en de nombreux endroits. ",
	", la toiture semble ne plus beaucoup tenir. "

);

$construction1 = array (
	", la construction est correcte. ",
	", le bâtiment est de bonne facture. ",
	", la pièce principale a été récemment rénovée. ",
	", la toiture est en parfait état. "
);

$construction2 = array (
	", la bâtisse témoigne d'un excellent savoir-faire. ",
	", celui-ci est idéalement situé au coeur de la ville. ",
	", l'architecture de la maison est très recherchée. ",
	", à la vue de sa robustesse, on se dit qu'il doit être de construction nanique. ",
	
);

//création du texte l'auberge.
compteur('aubergedetail');
$output='';
$output.='<h2>'.$nom.'</h2>';
$output.=$nom.' est un'.$type[rand(0,count($nom)-1)]." ".$divers1[rand(0,count($divers1)-1)]." ".$qualif[$qualite];

if($fm==0) $output.=" tenue par ";
else $output.=" tenu par ";

if (empty($tenancier)) $output.=$proprio;
else $output.=$tenancier;

if (rand(1,100)<60){
	$output.=" et ";
	$output.=$aideprorio;
}

$output.=".<br/><br/> Le bâtiment ".$forme[rand(0,count($forme)-1)]." est composé d'un ".$etagetexte;

if ($qualite==0) $output.= $construction0[rand(0,count($construction0)-1)];
else if ($qualite==1) $output.=$construction1[rand(0,count($construction1)-1)];
else $output.=$construction2[rand(0,count($construction2)-1)];

if ($etage==0) $output.="A l'intérieur, ";
else $output.="Au rez-de-chaussée, "; 
$output.="se trouve une salle pouvant contenir ";
if (rand(0,5)==1) $output.=' au maximum ';
$output.=$place."0 personnes. ";


if (rand(1,100)<50){
	
	$plu=rand(0,1);
	if ($qualite==0) {
		if (rand(0,1)==0) $output.=$objet0sin[rand(0,count($objet0sin)-1)];
		else $output.=$objet0plr[rand(0,count($objet0plr)-1)];
	}
	else if ($qualite==1) {
		if ($plu==0) $output.=$objet1sin[rand(0,count($objet1sin)-1)];
		else $output.=$objet1plr[rand(0,count($objet1plr)-1)];
	}
	else {
		if ($plu==0) $output.=$objet2sin[rand(0,count($objet2sin)-1)];
		else $output.=$objet2plr[rand(0,count($objet2plr)-1)];
	}
$verbe = array (
	"donne une idée de ",
	"démontre ",
	"illustre ",
	"atteste de ",
	"révèle ",
	"témoigne de "
	);
$verbes =array (
	"donnent une idée de ",
	"démontrent ",
	"illustrent ",
	"attestent de ",
	"révèlent ",
	"témoignent de "
);
if ($plu==0) $output.=$verbe[rand(0,count($verbe)-1)]. "la qualité de l'auberge. ";
else $output.=$verbes[rand(0,count($verbes)-1)]. " la qualité de l'auberge. ";

}
$sexe=rand(1,2);
$output.=$dispo[rand(0,count($dispo)-1)].'se situe la cuisine où '.creernomevo(0,$sexe). " est au fourneau. ";
if ($sexe==1) $output.="Le "; else $output.='La ';
if ($qualite==0) $output.='cuistot prépare '.$mauvaisplat[rand(0,count($mauvaisplat)-1)].' qu\'il est fort déconseillé de manger.<br/>';
else if ($qualite==1) $output.='cuistot n\'a pas de recette favorite la cuisine y est correct.<br/>';
else $output.='cuistot se targue de faire le meilleur '.$bonplat[rand(0,count($bonplat)-1)].' de toute la région.<br/>';

if (rand(1,100)<50){
	if ($qualite==0) $output.="Devant l'établissement, deux malheureux tabourets font office de terrasse. ";
	else if ($qualite==1) $output.="Au devant de l'auberge, quelques tables et chaises permettent de prendre un verre à l'extérieur. ";
	else $output.="Devant l'établissement, installées sur du parquet, de belles tables et chaises permettent de se restaurer en contemplant le paysage. ";
}

if ($etage>=1) {
	$output.="<br>A l'étage se trouvent les chambres, ";
	$etage1chambre=rand(2,4);
	if ($qualite==0)$output.=$etage1chambre." chambres où l'on partage sa paillasse avec les puces, sans verrou aux portes.";
	else if ($qualite==1)$output.=$etage1chambre." chambres avec un minimum de commodité, avec un verrou qui permet de fermer la porte.";
	else $output.=$etage1chambre." chambres joliment décorées avec la possibilité d'y prendre un bain.";
	$totalchambre=$etage1chambre;
}

if ($etage==2) {
	$output.="<br/>Au deuxiéme étage se trouve ";
	
	if ($qualite==0){
		$etage2chambre=0;
		$output.=" un dortoir commun où tout un chacun peut entrer et sortir et où un coffre au pied du lit fait office d'armoire.";
	}
	else if ($qualite==1){
		$etage2chambre=rand(2,3);
		$output.=$etage2chambre." autres chambres plus spacieuses pouvant accueillir un couple, la porte se ferme avec un verrou solide.";
	}
	else {
		$etage2chambre=rand(2,3);
		$output.=$etage2chambre." autres chambres richement décorées, avec bureau, armoire solide et diverses décorations murales.";
	}
	$totalchambre=$etage1chambre+$etage2chambre;
}
if ($nbrservice==1) $output.="<br/>Il est seulement possible d'avoir le service suivant dans cet établissement : <br/>";
else $output.="<br/>Il est possible de bénéficier des ".$nbrservice." services suivants dans cet établissement : <br/>";

if ($etage>0) {
	$output.="-Chambre, <i>";
	if ($qualite==0){
		if ($etage==1) $output.=$totalchambre ." misérables pièces";
		else if ($etage==2) $output.=$totalchambre ." misérables pièces et un dortoir tout aussi triste"; 	
	}
	else if ($qualite==1)$output.=$totalchambre." pièces avec des commodités agréables";
	else $output.=$totalchambre." salles spacieuses et soignées";
	$output.='.</i><br/>';	
	$nbrservice=$nbrservice-1;
}
for ($i = 0; $i < $nbrservice; $i++) {
	$element=rand(0,count($servicequalite)-1);
	$output.="-".$servicequalite[$element][0].'<i>'.$servicequalite[$element][$qualite+1]."</i><br/>";
	unset($servicequalite[$element]);
	$servicequalite = array_values($servicequalite);
	
}
$output.='<br/>'.$debut[rand(0,count($debut)-1)];

	if ($qualite==0) $output.=$perso0[rand(0,count($perso0)-1)];
	else if ($qualite==1) $output.=$perso1[rand(0,count($perso1)-1)];
	else $output.=$perso2[rand(0,count($perso2)-1)];

$output.=', de plus la proximité ';
	if ($qualite==0) $output.=$lieu0[rand(0,count($lieu0)-1)];
	else if ($qualite==1) $output.=$lieu1[rand(0,count($lieu1)-1)];
	else $output.=$lieu2[rand(0,count($lieu2)-1)];

//affichage de l'auberge
	$output.= '	<form method="get" onsubmit="return valid();" action="index.php?page=aubergedetail">';		
	foreach ($_GET as $key=>$val){			
	$output.= "<input type='hidden' name='".$key."' value=\"".$val."\"'>";		}	
	
	$output.= '<input type="submit" name="genere" value="Générer la même auberge" />';	$output.= '<input type="button" value="Générer une autre auberge"  OnClick="window.location.href='."'index.php?page=aubergedetail'".'"></form>';		
	echo $output;

?>