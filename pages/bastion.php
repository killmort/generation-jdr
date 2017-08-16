<?php
print_r($_POST);
$race = array('Ormazuriens','Chitiksss','Falaés','Marflings','Etinéens','Synovingiens');
$sexe = array('Masculin','Feminin');
$force='';
$physique='';
$agilite='';
$vitesse='';
$intel='';
$consci='';
$charisme='';
$apparence='';
$sante='';
$ether='';
$change='';
$equilibre='';
$puissance='';
$pouvoir='';
$output='';

$output.='<h2>Création de personnage pour le Dernier Bastion</h2>';
if(!empty($_POST)){
	switch($_POST['race']){
		case 0;
			if ($_POST['sexe']==0){  
				$force=rand(3,30)+30;
				$physique=rand(3,30)+35;
				$agilite=rand(2,20)+15;
				$intel=rand(2,20)+15;
				$consci=rand(2,20)+20;
			}	
			else {
				$force=rand(3,30)+25;
				$physique=rand(2,20)+30;
				$agilite=rand(2,20)+20;
				$intel=rand(3,30)+15;
				$consci=rand(2,20)+25;
			} 
			$vitesse=rand(1,10)+20;
			$charisme=rand(2, 20)+25;
			$apparence=rand(2,20)+20;
		break;
		case 1;
			if ($_POST['sexe']==0){
				$physique=rand(2,20)+15;
				$agilite=rand(3,30)+30;
				$vitesse=rand(3,30)+30;
				$charisme=rand(2,20)+15;
			}
			else {
				$physique=rand(3,30)+20;
				$agilite=rand(2,20)+30;
				$vitesse=rand(2,20)+25;
				$charisme=rand(2,20)+25;
			}
			$force=rand(2,20)+20;
			$intel=rand(2,20)+20;
			$consci=rand(2,20)+25;
			$apparence=rand(1,10)+20;
		break;
		case 2;
			if ($_POST['sexe']==0){
				$force=rand(3,30)+25;
				$physique=rand(2,20)+30;
				$agilite=rand(2,20)+20;
				$vitesse=rand(2,20)+25;
				$intel=rand(2,20)+15;
				$charisme=rand(2,20)+25;
				$apparence=rand(2,20)+20;
			}
			else {
				$force=rand(2,20)+20;
				$physique=rand(2,20)+20;
				$agilite=rand(3,30)+25;
				$vitesse=rand(2,20)+30;
				$intel=rand(2,20)+20;
				$charisme=rand(2,20)+20;
				$apparence=rand(2,20)+25;
			}
			$consci=rand(2,20)+15;
		break;
		case 3;
			$force=rand(3,30)+20;
			$physique=rand(3,30)+15;
			$agilite=rand(2,20)+20;
			$vitesse=rand(2,20)+20;
			$intel=rand(3,30)+25;
			$consci=rand(3,30)+25;
			$charisme=rand(3,30)+20;
			$apparence=rand(2,20)+15;
		break;
		case 4;
			if ($_POST['sexe']==0){
				$charisme=rand(3,30)+30;
				$apparence=rand(2,20)+20;
			}
			else {
				$charisme=rand(3,30)+25;
				$apparence=rand(2,20)+25;
			}
			$force=rand(2,20)+20;
			$physique=rand(2,20)+20;
			$agilite=rand(2,20)+20;
			$vitesse=rand(2,20)+20;
			$intel=rand(3,30)+25;
			$consci=rand(2,20)+25;
		break;
		case 5;
			$force=rand(1,10)+20;
			$physique=rand(1,10)+15;
			$agilite=rand(2,20)+25;
			$vitesse=rand(3,30)+20;
			$intel=rand(2,20)+30;
			$consci=rand(3,30)+35;
			$charisme=rand(2,20)+25;
			$apparence=rand(1,10)+20;
		break;
		
	}

	if ($_POST['sexe']==1 && $_POST['race']==3) $output.='Pas de femelle chez les Marfling un male à donc été créé. Les attributs sont les suivants :';
	else $output.='Vous avez choisi un '.$race[$_POST['race']].' de sexe '.$sexe[$_POST['sexe']].' les attributs sont les suivants :';
	
	$output.='<h4>Attributs principales</h4>';
	$output.='<table>
				<tr>
					<td>Force : </td>
					<td>'.$force.'</td>
				</tr>
				<tr>
					<td>Physique : </td>
					<td>'.$physique.'</td>
				</tr>
				<tr>
					<td>Agilité : </td>
					<td>'.$agilite.'</td>
				</tr>
				<tr>
					<td>Vitesse : </td>
					<td>'.$vitesse.'</td>
				</tr>
				<tr>
					<td>Intelligence : </td>
					<td>'.$intel.'</td>
				</tr>
				<tr>
					<td>Conscience : </td>
					<td>'.$consci.'</td>
				</tr>
				<tr>
					<td>Charisme : </td>
					<td>'.$charisme.'</td>
				</tr>
				<tr>
					<td>Apparence : </td>
					<td>'.$apparence.'</td>
				</tr>
			</table>';
	$sante=$physique+$consci;
	$ether=$apparence+$consci;
	$chance=$charisme+rand(2,20);
	$savoir=$intel+$consci;
	$magnetisme=$charisme+$apparence;
	$equilibre=$force+$agilite;
	$puissance=($force+$physique)/2;
	$pouvoir=($intel+$charisme)/2;
	$output.='<h4>Attributs secondaires</h4>';
	$output.='<table>
			<tr>
				<td>Santé : </td>
				<td>'.$sante.'</td>
			</tr>
			<tr>
				<td>Ether : </td>
				<td>'.$ether.'</td>
			</tr>
			<tr>
				<td>Chance : </td>
				<td>'.$chance.'</td>
			</tr>
			<tr>
				<td>Savoir : </td>
				<td>'.$savoir.'</td>
			</tr>
			<tr>
				<td>Magnétisme : </td>
				<td>'.$magnetisme.'</td>
			</tr>
			<tr>
				<td>Equilibre : </td>
				<td>'.$equilibre.'</td>
			</tr>
			<tr>
				<td>Puissance : </td>
				<td>'.$puissance.'</td>
			</tr>
			<tr>
				<td>Pouvoir : </td>
				<td>'.$pouvoir.'</td>
			</tr></table>';

	$output.='<h4>Choix de la profession</h4>';
}
else {
	$output.='<h4>Choix de la race et du sexe</h4>';
	$output.='<form method="post" action="index.php?page=bastion">';
	$output.='	<select name="race">
					<option value="0">Ormazuriens</option>
					<option value="1">Chitiksss</option>
					<option value="2">Falaés</option>
					<option value="3">Marflings</option>
					<option value="4">Etinéens</option>
					<option value="5">Synovingiens</option>
				</select><br />
				<select name="sexe">
					<option value="0">Homme</option>
					<option value="1">Femme</option>
				</select><br />';
		
$output.= '<input type="submit" value="Suivant"  ></form>';

}











echo $output;




?>