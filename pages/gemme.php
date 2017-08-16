<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/gemme.php');

$gemmes = array();
$tabgemme=0;
$total=0;

if(!empty($_POST)){
	$output='';
	if(!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000){
		
		for($i=0;$i<$_POST['qtt'];$i++,$tabgemme++){
			$gemmes[$tabgemme]=creergemme($_POST['Qualite']);
			compteur('gemme');
		}
		
		
		
		if ($_POST['qtt']>1) $output.= '<h2>'.count($gemmes).' pierres précieuses</h2>';
		else $output.= '<h2>'.count($gemmes).' pierre précieuse</h2>';
		
		foreach ($gemmes as &$value) {
			$output.= '- '.$value[0].' d\'une valeur de '.$value[1].' piéces d\'or <br />';
			$total+=$value[1];
		}
		$output.='<br />Valeur totale :'.$total.' piéces d\'or ';
	}
	if ($_POST['qtt']==0) {
		$output='Aucun trésor';	
	}
	if ($_POST['qtt']>=1000) {
		$output='Trop de génération demandée';
	}
	
	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=gemme">';
		foreach ($_POST as $key=>$val){
			$output.= "<input type='hidden' name='".$key."' value='".$val."'>";
		}
	$output.= '<input type="submit" name="genere" value="Générer les mêmes gemmes" />';
	$output.= '<input type="button" value="Générer d\'autres gemmes"  OnClick="window.location.href='."'index.php?page=gemme'".'"></form>';
	
	echo $output;
}
else {
	$output ='';
	$output.='<h2>Nombre de gemme à générer</h2>';
	$output.='<form method="post" onsubmit="return valid();" action="index.php?page=gemme">
		<table>
			<tr>
				<td><label>Quantité :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
			<tr>
				<td><label>Qualité :</label></td>
				<td><select name="Qualite">
					<option value="0">Toute (4 à 8000 po)</option>
					<option value="1">Décorative (4 à 16 po)</option>
					<option value="2">Fine (20 à 160 po)</option>
					<option value="3">Précieuse (200 à 1600 po)</option>
					<option value="4">Exeptionnelle (2000 à 8000 po)</option>
					</select></td>
			</tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>		
		</table>';	
	echo $output;
}
?>

