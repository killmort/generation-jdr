<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/objart.php');

$objet = array();
$tabobjet=0;
$total=0;

if(!empty($_POST)){
	$output='';
	if(!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000){
		for($i=0;$i<$_POST['qtt'];$i++,$tabobjet++){
			$objet[$tabobjet]=creerobjart($_POST['Qualite']);
			compteur('objart');
		}
		
	if ($_POST['qtt']>1) $output.= '<h2>'.count($objet).' objets d\'arts</h2>';
	else $output.= '<h2>'.count($objet).' objet d\'art</h2>';
	
		foreach ($objet as &$value) {
			$output.= '- '.$value[0].' d\'une valeur de '.$value[1].' pi�ces d\'or <br />';
			$total+=$value[1];
		}
		$output.='Valeur totale :'.$total.' pi�ces d\'or ';
	
	}
	if ($_POST['qtt']==0) {
		$output='Aucun tr�sor';	
	}
	if ($_POST['qtt']>=1000) {
		$output='Trop de g�n�ration demand�e';
	}
	
	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=objart">';
		foreach ($_POST as $key=>$val){
			$output.= "<input type='hidden' name='".$key."' value='".$val."'>";
		}
	$output.= '<input type="submit" name="genere" value="G�n�rer les m�mes objets d\'arts" />';
	$output.= '<input type="button" value="G�n�rer d\'autres objets d\'arts"  OnClick="window.location.href='."'index.php?page=objart'".'"></form>';
	
	echo $output;
}
else {	
	$output ='';
	$output.='<h2>Nombre d\'objet d\'art � g�n�rer</h2>';
	$output.='<form method="post" onsubmit="return valid();"action="index.php?page=objart">
		<table>
			<tr>
				<td><label for="fp1">Quantit� :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
				<tr>
				<td><label for="qlt">Qualit� :</label></td>
				<td><select name="Qualite">
					<OPTION VALUE="0">Toute (10 � 12000 po)</OPTION>
					<OPTION VALUE="1">D�corative (10 � 600 po)</OPTION>
					<OPTION VALUE="2">Fine (100 � 1800 po)</OPTION>
					<OPTION VALUE="3">Pr�cieuse (400 � 4000 po)</OPTION>
					<OPTION VALUE="4">Chef d\'oeuvre (1000 � 12000 po)</OPTION>
					</SELECT></td>
			</tr>
			
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="G�n�rer" /></td></tr>		
		</table>';	
	echo $output;
}
?>

