<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/obm.php');

$objet = array();
$tabobjet=0;
$total=0;

if(!empty($_POST)){
	$output='';
	if(!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000){
		for($i=0;$i<$_POST['qtt'];$i++,$tabobjet++){
			if (empty($_POST['Qualite']) || $_POST['Qualite']==0) $_POST['Qualite'] = rand(1, 4);
			if ($_POST['Qualite']==1){
				require_once ('lib/objnm.php');
				$objet[$tabobjet]=getNonMagical();
				compteur('objnmag');
			}
			else $objet[$tabobjet] = getMagical($_POST['Qualite']);
			compteur('objmag');
		}
		
	if ($_POST['qtt']>1) $output.= '<h2>'.count($objet).' objets magiques</h2>';
	else $output.= '<h2>'.count($objet).' objet magique</h2>';
		foreach ($objet as &$value) {
			$output.= '-'.$value[0].' d\'une valeur de '.$value[1].' pièces d\'or <br />';
			$total+=$value[1];
		}
		$output.='Valeur totale :'.$total.' pièces d\'or ';
	}
	if ($_POST['qtt']==0) {
		$output='Aucun trésor';	
	}
	if ($_POST['qtt']>=1000) {
		$output='Trop de génération demandée';
	}
	
	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=obm">';
		foreach ($_POST as $key=>$val){
			$output.= "<input type='hidden' name='".$key."' value='".$val."'>";
		}
	$output.= '<input type="submit" name="genere" value="Générer les mêmes objets magique" />';
	$output.= '<input type="button" value="Générer d\'autres objets magique"  OnClick="window.location.href='."'index.php?page=obm'".'"></form>';

	echo $output;
}
else {	
	$output ='';
	$output.='<h2>Nombre d\'objet magique à générer</h2>';
	$output.='<form method="post" onsubmit="return valid();"action="index.php?page=obm">
		<table>
			<tr>
				<td><label for="fp1">Quantité :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
				<tr>
				<td><label for="qlt">Puissance :</label></td>
				<td><select name="Qualite">
					<OPTION VALUE="0">Toute</OPTION>
					<OPTION VALUE="1">Objet non magique</OPTION>
					<OPTION VALUE="2">Objet magique faible</OPTION>
					<OPTION VALUE="3">Objet magique intermédiaire</OPTION>
					<OPTION VALUE="4">Objet magique puissant</OPTION>
					</SELECT></td>
			</tr>
			
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>		
		</table>';
	
	echo $output;
}
?>

