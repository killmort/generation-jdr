<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/objnm.php');

$objnm = array();
$total=0;

if(!empty($_POST)){
	$output='';
	if(!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000){
		
		for($i=0;$i<$_POST['qtt'];$i++){
			$objnm[]=getNonMagical();			compteur('objnmag');
		}
		
		if ($_POST['qtt']>1) $output.= '<h2>'.count($objnm).' objets non magiques</h2>';		else $output.= '<h2>'.count($objnm).' objet non magique</h2>';				
		foreach ($objnm as &$value) {
			$output.= '-'.$value[0].' d\'une valeur de '.$value[1].' pi�ces d\'or <br />';
			$total+=$value[1];
		}
		$output.='<br />Valeur totale :'.$total.' pi�ces d\'or ';
	}
	if ($_POST['qtt']==0) {
		$output='Aucun objet';	
	}
	if ($_POST['qtt']>=1000) {
		$output='Trop de g�n�ration demand�e';
	}
	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=objnm">';		
	foreach ($_POST as $key=>$val){			
		$output.= "<input type='hidden' name='".$key."' value='".$val."'>";		}	
		$output.= '<input type="submit" name="genere" value="G�n�rer les m�mes objets non-magique" />';	$output.= '<input type="button" value="G�n�rer d\'autres objets non-magique"  OnClick="window.location.href='."'index.php?page=objnm'".'"></form>';		
	echo $output;
}
else {
	$output ='';
	$output.='<h2>Nombre d\'objet non magique � g�n�rer</h2>';
	$output.='<form name="generer" method="post" onsubmit="return valid();" action="index.php?page=objnm">
		<table>
			<tr>
				<td><label for="qtt">Quantit� :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="G�n�rer" /></td></tr>		
		</table>';	
	echo $output;
}
?>