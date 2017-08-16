<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/scroll.php');

$objet = array();
$tabobjet=0;
$total=0;
$xml = simplexml_load_file('xml/obm.xml');

if(!empty($_POST)){
	$output='';
	
	
	if(!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000){
		for($i=0;$i<$_POST['qtt'];$i++,$tabobjet++){
			$ale = mt_rand(1,100);

			switch ($_POST['type']){
				case (0)  : $type_sort = ($ale > 70 ? "divin" : "profane"); break;
				case (1)  : $type_sort = "divin"; break;
				case (2)  : $type_sort = "profane"; break;
				
			}
			
			$objet[$tabobjet]=getScroll($type_sort, $_POST['Qualite'], $xml);
			compteur('parchemin');
		}
		
	
		if ($_POST['qtt']>1) $output.= '<h2>'.count($objet).' parchemins</h2>';
		else $output.= '<h2>'.count($objet).' parchemin</h2>';
		
		foreach ($objet as &$value) {
			$output.= '- '.$value[0].' valant '.$value[1].' pièces d\'or  <br />';
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
	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=parchemin">';
		foreach ($_POST as $key=>$val){
			$output.= "<input type='hidden' name='".$key."' value='".$val."'>";
		}
	$output.= '<input type="submit" name="genere" value="Générer les mêmes parchemins" />';
	$output.= '<input type="button" value="Générer d\'autres parchemins"  OnClick="window.location.href='."'index.php?page=parchemin'".'"></form>';
	echo $output;
}
else {	
	$output ='';
	$output.='<h2>Nombre de parchemin à générer</h2>';
	$output.='<form method="post" onsubmit="return valid();"action="index.php?page=parchemin">
		<table>
			<tr>
				<td><label for="fp1">Quantité :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
			<tr>
				<td><label for="type">Type :</label></td>
				<td><select name="type">
					<OPTION VALUE="0">Aléatoire</OPTION>
					<OPTION VALUE="1">Divin</OPTION>
					<OPTION VALUE="2">Profane</OPTION>
					</SELECT></td>
			</tr>
			<tr>
				<td><label for="qlt">Qualité :</label></td>
				<td><select name="Qualite">
					<OPTION VALUE="0">Faible</OPTION>
					<OPTION VALUE="1">Intermediaire</OPTION>
					<OPTION VALUE="2">Puissant</OPTION>
					</SELECT></td>
			</tr>
			
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>		
		</table>';	
	echo $output;
}
?>

