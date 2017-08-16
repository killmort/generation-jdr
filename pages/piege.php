<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/piege.php');

$piege = array();
$tabaupiege=0;


if(!empty($_POST)){
	$output='';
	if(!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000){
		
		for($i=0;$i<$_POST['qtt'];$i++,$tabaupiege++){
			$piege[$tabaupiege]=creerpiege($_POST['puissance']);
			compteur('piege');
		}
		
		if ($_POST['qtt']>1) $output.= '<h2>'.count($piege).' pièges</h2>';
		else $output.= '<h2>'.count($piege).' piège</h2>';
		
		foreach ($piege as &$value) {
			$output.= '-'.$value.'<br />';
		}
						}
	if ($_POST['qtt']==0) {
		$output='Aucun piège';	
	}
	if ($_POST['qtt']>=1000) {
		$output='Trop de génération demandée';
	}
	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=piege">';
		foreach ($_POST as $key=>$val){
			$output.= "<input type='hidden' name='".$key."' value='".$val."'>";
		}
	$output.= '<input type="submit" name="genere" value="Générer les mêmes pieges" />';
	$output.= '<input type="button" value="Générer d\'autres pieges"  OnClick="window.location.href='."'index.php?page=piege'".'"></form>';
	
	echo $output;
}
else {
	$output ='';
	$output.='<h2>Nombre de piège à générer</h2>';
	$output.='<form method="post" onsubmit="return valid();" action="index.php?page=piege">
		<table>
			<tr>
				<td><label for="qtt">Quantité :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
			<tr>
				<td><label for="qlt">Facteur de puissance :</label></td>
				<td><select name="puissance">
					<OPTION VALUE="0">1 à 3</OPTION>
					<OPTION VALUE="1">4 à 6</OPTION>
					<OPTION VALUE="2">7 à 10</OPTION>
					
					</SELECT></td>
			</tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>		
		</table>';	
	echo $output;
}
?>