<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/auberge.php');


$auberge = array();
$tabauberge=0;
$total=0;

if(!empty($_POST)){
	$output='';
	if(!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000){
		
		for($i=0;$i<$_POST['qtt'];$i++,$tabauberge++){
			$auberge[$tabauberge]=creerauberge();
			compteur('auberge');
		}
		
		if ($_POST['qtt']>1) $output.= '<h2>'.count($auberge).' auberges</h2>';
		else $output.= '<h2>'.count($auberge).' auberge</h2>';
		
		foreach ($auberge as &$value) {
			$output.= '- '.$value.'.<a href="index.php?page=aubergedetail&nom='.urlencode($value).'" ><i>Détail</i></a><br />';
		}
						}
	if ($_POST['qtt']==0) {
		$output='Aucune auberge';	
	}
	if ($_POST['qtt']>=1000) {
		$output='Trop de génération demandée';
	}
	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=auberge">';
		foreach ($_POST as $key=>$val){
			$output.= "<input type='hidden' name='".$key."' value='".$val."'>";
		}
	$output.= '<input type="submit" name="genere" value="Générer les mêmes auberges" />';
	$output.= '<input type="button" value="Générer d\'autres auberges"  OnClick="window.location.href='."'index.php?page=auberge'".'"></form>';
	
	echo $output;
}
else {
	$output ='';
	$output.='<h2>Nombre d\'auberge à générer</h2>';
	$output.='<form method="post" onsubmit="return valid();" action="index.php?page=auberge">
		<table>
			<tr>
				<td><label for="qtt">Quantité :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>		
		</table>';	
	echo $output;
}
?>

