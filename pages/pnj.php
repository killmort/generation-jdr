<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/creerguerrier.php');
include ('lib/creervoleur.php');
include ('lib/creerpretre.php');
include ('lib/creermage.php');


if(!empty($_POST)){
	$output='';
	//$output=print_r($_POST);
	if ($_POST['classe']==0) $classe=rand(1,4);
	else $classe=$_POST['classe'];
	
	
	switch ($classe){
		case 1 : 
			creerguerrier($_POST['tirage'],$_POST['race']);		
		break;
		case 2 : creermage();
		break;
		case 3 : creervoleur();
		break;
		case 4 : creerpretre();
		break;
	}
	$output.= '<input type="submit" name="genere" value="Générer le mêmes PNJ" /></form>';
	$output.= '<input type="button" value="Générer un autre PNJ"  OnClick="window.location.href='."'index.php?page=pnj'".'">';
	
	echo $output;
}
else {	
	$output ='';
	$output.='<h2>Génération d\'un PNJ</h2>';
	$output.='<form method="post" onsubmit="return valid();"action="index.php?page=pnj">
		<table>
			<tr>
				<td><label>Tirage :</label></td>
				<td COLSPAN="3"><select name="tirage">
					<OPTION VALUE="0">3D6, 6 fois</OPTION>
					<OPTION VALUE="1">4D6 - dé le plus bas, 6 fois</OPTION>
					<OPTION VALUE="2">3D6, 7 fois - valeur la plus basse</OPTION>
					<OPTION VALUE="3">4D6 - dé le plus bas, 7 fois - valeur la plus basse</OPTION>
					<OPTION VALUE="4">2D6+6, 6 fois</OPTION>
					<OPTION VALUE="5">3D6 on relance les 1, 6 fois</OPTION>
					<OPTION VALUE="6">Distribution des points (automatique)</OPTION>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Classe :</label></td>
				<td><select name="classe">
					<OPTION VALUE="0">Aléatoire</OPTION>
					<OPTION VALUE="1">Guerrier</OPTION>
					<OPTION VALUE="2">Mage</OPTION>
					<OPTION VALUE="3">Voleur</OPTION>
					<OPTION VALUE="4">Prêtre</OPTION>
					</select>
				</td>
				<td><label>Race :</label></td>
				<td><select name="race">
					<OPTION VALUE="0">Aléatoire</OPTION>
					<OPTION VALUE="1">Humain</OPTION>
					<OPTION VALUE="2">Halfelin</OPTION>
					<OPTION VALUE="3">Gnome</OPTION>
					<OPTION VALUE="4">Demi-Orque</OPTION>
					<OPTION VALUE="5">Nain</OPTION>
					<OPTION VALUE="6">Demi-Elfe</OPTION>
					<OPTION VALUE="7">Elfe</OPTION>
					
					humain halfelins gnome demi-orque nain demi-elfe elfe
					
					</select>
				</td>
			</tr>
			<tr>
				<td><label>FP :</label></td>
				<td><select name="fp">
					<OPTION VALUE="0">Aléatoire</OPTION>
					<OPTION VALUE="1">FP 1</OPTION>
					<OPTION VALUE="2">FP 2</OPTION>
					<OPTION VALUE="3">FP 3</OPTION>
					<OPTION VALUE="4">FP 4</OPTION>
					</select>
				</td>
				<td><label>Alignement :</label></td>
				<td><select name="fp">
					<OPTION VALUE="0">Aléatoire</OPTION>
					<OPTION VALUE="1">LB</OPTION>
					<OPTION VALUE="2">NB</OPTION>
					<OPTION VALUE="3">CB</OPTION>
					<OPTION VALUE="4">NB</OPTION>
					<OPTION VALUE="5">NV</OPTION>
					<OPTION VALUE="6">NM</OPTION>
					<OPTION VALUE="7">CB</OPTION>
					<OPTION VALUE="8">CN</OPTION>
					<OPTION VALUE="9">CM</OPTION>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Equipement :</label></td>
				<td><input type="checkbox" name="objectif"></td>
				<td><label>Objectif(s) :</label></td>
				<td><input type="checkbox" name="Equipement"></td>
			</tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>		
		</table>';	
	echo $output;
}
?>