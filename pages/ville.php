<script type="text/javascript" src="javascript/affichercacher.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/ville.php');
include ('lib/lieudit.php');
include ('lib/autrenoble.php');
include ('lib/taille.php');
include ('lib/dirigeant.php');
include ('lib/economie.php');
include ('lib/protection.php');
include ('lib/protectionhomme.php');
include ('lib/tab.php');
include ('lib/commerce.php');

if (isset($_GET['nom'])) 	{
	$nomduvillage=stripslashes($_GET['nom']);
	$_POST['type']=0;
	$_POST['taille']=0;
	$_POST['particu']=0;
	$_POST['eco']=0;
	
}
else {
	$nomduvillage=creerlieudit(1);				// génération du nom de l'auberge
}

if(!empty($_POST) || isset($_GET['nom'])){
	
$output='';

$taillenom=array('',' lieu-dit composé',' hameau composé',' village composé',' bourg (petite ville) composé',' e ville importante composée','e grande ville composée','e cité composée','e métropole composée','e ville spéciale');
$typeville=array('isolée et repliée sur elle-même','ouverte vers l\'extérieur','cosmopolite où tout un chacun a le droit d\'y loger');
$race=array('humain','halfelin','elfe','nain','gnome','demi-elfe','demi-orque','');
$nbrhabitantparrace=array(0,0,0,0,0,0,0,0);
$nbrhabitantparraceHUM=array(0,0,0,0,0,0,0,0);
if ($_POST['type']==0) $typevillenum=rand(0,2);
else $typevillenum=$_POST['type']-1;
if($_POST['taille']==0) $taille=habitant(rand(1,100));
else $taille=$_POST['taille'];
$nbrhabitant=habitants($taille);
$dirigeant=$protection=$economie=eco($taille);
$dirigeant+=rand(1,20);
$protection+=rand(1,20);
if (rand(0,10)<8) $nbrdirigeant=1; else $nbrdirigeant=2;
if($_POST['particu']==0) $particu=rand(0,3);
else $particu=$_POST['particu'];
if($particu==2) $militaire=40; else $militaire=0;
$heros=($economie*4)+($taille*4)+($typevillenum*15)+($nbrhabitant/1000)+$militaire;
$nbrhabitantparrace=nbrhab($typevillenum,$nbrhabitant);
if (array_sum($nbrhabitantparrace)<$nbrhabitant) $nbrhabitantparrace[7]+=1;
if (array_sum($nbrhabitantparrace)>$nbrhabitant) $nbrhabitantparrace[7]-=1;
// repartition des pnjs
$div=(rand(20,40))/10;
$nbrmaison=round($nbrhabitant/$div);
$nbrhommearme = ceil($nbrhabitant/100*5);
$nbrexpert = ceil($nbrhabitant/100*3);
$nbradepte = ceil($nbrhabitant/100*0.5);
$nbrnobles = ceil($nbrhabitant/100*0.5);
$nbrbat = round($nbrmaison/100*4);


if($particu==2) $nbrhommearme+=$nbrhommearme; //militaire
$nbrguilde=$nbraventuriers=$nivheroisme=$nbrheros=$aventurier=0;
	//cacule de guilde
	if ($nbrhabitant>500) { //des guildes existent
		for($i=0;$i<$nbrhabitant/1000;$i++)	if(rand(0,1)==1) $nbrguilde++;
	}
	// calcule de heros, niveau d'heroisme
	if ($nbrhabitant>200) { 
		for($i=0;$i<$nbrhabitant/200;$i++){
			if(rand(0,1)==1) $nivheroisme+=rand(0,3);
		}
		$aventurier = array();
		$nbraventuriers=rand(1,$nivheroisme);
		for($i=0;$i<$nbraventuriers;$i++){
			$aventurier[$i]=1;
		}
		for($i=0;$i<$nivheroisme;$i++){
			$aventurier[rand(0,$nbraventuriers-1)]++;
		}
	}
	switch ($_POST['eco']) { //calcule de l'économie
		case 1: $economie+=rand(1,5); break;
		case 2: $economie+=rand(5,15); 	break;
		case 3:	$economie+=rand(15,20); break;
		default:$economie+=rand(1,20);	break;
	}
	
	if ($economie<5) $multi=1;
	if ($economie>=5 && $economie< 15) $multi=2;
	if ($economie>=15) $multi=5;
		
	
	if ($nbrhabitant<100 && $economie>3) $economie=3;
	//calcule de heros
	while (rand(1,50)<$heros) {
		$heros-=10;
		$nbrheros++;
	} 
	//début de la ville
	$output.='<h2>'.$nomduvillage.'</h2>';
	$output.=$nomduvillage. ' est un';
	$output.=$taillenom[$taille];
	$output.=' de plus ou moins '.$nbrmaison; 
	$output.=' maisons et autres bâtiments. Au dernier recensement, la population comptait '.$nbrhabitant.' individus. <br />';
	$output.=$nomduvillage.' est une société '.$typeville[$typevillenum].' de ce fait les races s\'y retrouvent ';
	if($typevillenum==0) $output.='sensiblement concentrées';
		else if ($typevillenum==1) $output.='concentrées mais avec quelques communautés ou familles différentes';
			else $output.='fort différentes avec beaucoup de muticulturalité';
	$output.=' et réparties plus exactement en ';
	if($typevillenum==0) {
		if($nbrhabitantparrace[0]>0) {
		$output.=$nbrhabitantparrace[0].' humain';
			if( $nbrhabitantparrace[0]>1) $output.='s, ';
			else $output.=' ,';
		}
		if($nbrhabitantparrace[1]>0) {
			$output.=$nbrhabitantparrace[1].' halfelin';
			if( $nbrhabitantparrace[1]>1) $output.='s, ';
			else $output.=' ,';
		}
		if($nbrhabitantparrace[2]>0) {
			$output.=$nbrhabitantparrace[2].' elfe';
			if( $nbrhabitantparrace[2]>1) $output.='s, ';
			else $output.=' ,';
		}
		if ($nbrhabitantparrace[7]>0) {
			$output.=$nbrhabitantparrace[7];
			if( $nbrhabitantparrace[7]>1) $output.=' citoyens d\'autres races.';
			else $output.=' citoyen d\'autre race.'; 
		}
		else $output.='.';
	}
	else {
		for($i=0;$i<8;$i++){
			if($i!=7) {
				if($nbrhabitantparrace[$i]>=1) $output.=$nbrhabitantparrace[$i].' '.$race[$i];{
					if($nbrhabitantparrace[$i]>1) $output.='s, '; 
					else $output.=', ';
				}
			}
			else {
				if( $nbrhabitantparrace[$i]>0) {
					$output.=$nbrhabitantparrace[$i]; 
					if( $nbrhabitantparrace[$i]>1) $output.=' citoyens d\'autres races.';
					else $output.=' citoyen d\'autre race.';
				}
			}
		}
		
	}
	if ($particu==3) {
		$multi2=1.5;
	}
	else $multi2=1;
$Capfi=0;	
$Capfi=(($nbrhabitant*50+$nbrexpert*800+$nbrnobles*7500+$nbrbat*2500+$nbradepte*5000)*$multi)*$multi2;


	$nbrlieu=rand(0,5);
	$output.='<br><br><h4>Commerces, guildes et aventuriers, héros</h4>';
	if ($nbrbat==0) $output.='<Il n\'y a aucun commerce qui vaille qu\'on s\'y attarde. <br>';
	else if ($nbrbat==1) $output.='Il existe un seul commerce remarquable (<a href="#bouton_texte3">voir le commerce</a>). <br>';
		else $output.='Il existe dans '.$nomduvillage.', '.$nbrbat.' commerces remarquables (<a href="#bouton_texte3">voir la liste des commerces</a>). <br>';	
		//guildes
	if ($nbrguilde>0) {
		if ($nbrguilde==1) $output.='Il existe également une guilde (<a href="#bouton_texte2">voir la guilde</a>). <br>';
		else $output.=$nomduvillage.', possède également '.$nbrguilde.' guildes (<a href="#bouton_texte2">voir la liste des guildes</a>). <br>';
	}
	if ($nbraventuriers>0) {
		if ($nbraventuriers==1) $output.=$nomduvillage.' comporte en son sein un aventurier (<a href="#bouton_texte5">voir l\'aventurier</a>). <br>';
		else $output.=$nomduvillage.' comporte également dans ses habitants '.$nbraventuriers.' aventuriers (<a href="#bouton_texte5">voir la liste des aventuriers</a>). <br>';
	}
	if($nbrheros>0) {
		if ($nbrheros==1) $output.='La ville a, de plus, la chance de compter parmi ses habitants un héros ayant accompli quelques chose d\'exeptionnel pour la ville ou ayant décidé de prendre sa retraite à '.$nomduvillage.'. (<a href="#bouton_texte6">voir le héro</a>). <br>';
		else $output.=$nomduvillage.' a le privilège d\'avoir parmi ses habitants '.$nbrheros.' héros ayant accompli quelques chose d\'exeptionnel pour la ville ou ayant décidé de prendre leur retraite ici.(<a href="#bouton_texte6">voir liste des héros</a>). <br>';
	}
	if($nbrlieu>0) {
		if ($nbrlieu==1) $output.='Un seul lieu mérite de s\'y attarder. (<a href="#bouton_texte7">voir le lieu</a>). <br>';
		else $output.="Il existe plusieurs lieux remarquables de par leur architecture ou la conception dans la ville.(<a href=\"#bouton_texte7\">voir liste les lieux</a>). <br>";
	}
	$output.=appeldirigeant($dirigeant,$nbrdirigeant,$typevillenum);
	$output.=appeleconomie($economie,$nomduvillage,$particu,$Capfi);
	$output.=appelprotection($protection,$nomduvillage,$particu,$taille);
	$output.=appelprotectionhomme($nbrhommearme,$nbrheros,$nbraventuriers);
	$output.=appelnoble($nbrnobles,$nbrexpert,$nbradepte,$nbrbat,$nbrguilde,$nbraventuriers,$nbrheros,$particu,$typevillenum,$taille,$aventurier,$nbrlieu);
	
	
	echo $output;
	compteur('village');
}
else {	
	echo appeltableau();
}
?>