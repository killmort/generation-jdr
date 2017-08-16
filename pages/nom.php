<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/nom.php');

$noms = array();
$tabnom=0;
$total=0;
$output='';
if(!empty($_POST)){
	if(!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000){
		
		for($i=0;$i<$_POST['qtt'];$i++,$tabnom++){
			$noms[$tabnom]=creernom($_POST['nbrsyl'], $_POST['letdebut'], $_POST['letfin']);
			//compteur('nom');
		}
		
		foreach ($noms as &$value) {
			$output.= '- '.$value.'<br />';
			
		}
		
	}
	if ($_POST['qtt']==0) {
		$output='Aucun nom demandé';	
	}
	if ($_POST['qtt']>=1000) {
		$output='Trop de génération demandée';
	}
	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=nom">';
		
	$output.= '<input type="submit" name="genere" value="Générer les mêmes noms" /></form>';
	$output.= '<input type="button" value="Générer d\'autres noms"  OnClick="window.location.href='."'index.php?page=nom'".'">';
	
	echo $output;
}
else {
	$output ='';
	$output.='<h2>Nombre de nom à générer</h2>';
	$output.='<form method="post" onsubmit="return compte();" action="index.php?page=nom">
		<table>
			<tr>
				<td><label>Quantité de noms à générer :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
			<tr>
				<td><label><h2>Particularité</h2></label></td>
			</tr>
			<tr>
				<td><label>Nombre de syllables : </label></td>
				<td><select name="nbrsyl" id="nbrsyl">
					<option value="0" selected="selected">De 3 à 10 </option>
					<option value="1">3</option>
					<option value="2">4</option>
					<option value="3">5</option>
					<option value="4">6</option>
					<option value="5">7</option>
					<option value="6">8</option>
					<option value="7">9</option>
					<option value="8">10</option>
					</select></td>
			</tr>
			<tr>
				<td><label>Lettre(s) par le(s)quelle(s) le nom doit commencer (max 3): </label></td>
				<td><input type="text" id="letdebut" name="letdebut" value="" /></td>
			</tr>
			<tr>
				<td><label>Lettre(s) par le(s)quelle(s) le nom doit commencer (max 3): </label></td>
				<td><input type="text" id="letfin" name="letfin" value="" /></td>
			</tr>
			<tr>
				<td> Nom composé?  <input type="checkbox" name="compos" value="Airbag"></td>
			</tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>		
		</table>';	
	echo $output;
}
?>