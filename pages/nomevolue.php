<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/nomevolue.php');

$racetab =array("Demi-elfe","Demi-orque","Elfe","Gnome","Gobelin","Halfelins","Humain","Nain","Drow");
$sexetab =array("","masculin","feminin");

if(!empty($_POST)){
	$output='';
		
	if(!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000){
	
		for($i=0;$i<$_POST['qtt'];$i++){
				echo creernomevo($_POST['race'],$_POST['sexe']).'<br/>';
				compteur('nomevolue');
			
		}
	}
	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=nomevolue">';
		foreach ($_POST as $key=>$val){
			$output.= "<input type='hidden' name='".$key."' value='".$val."'>";
		}
	$output.= '<input type="submit" name="genere" value="Générer les mêmes noms" />';
	$output.= '<input type="button" value="Générer d\'autres noms"  OnClick="window.location.href='."'index.php?page=nomevolue'".'"></form>';
	
	echo $output;
}
else { 
$output ='';
$output.='<h2>Nombre de noms à générer</h2>';
$output.='<form method="post" onsubmit="return valid();" action="index.php?page=nomevolue">
		<table>
			<tr>
				<td><label>Quantité :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
		 	</tr>
		 	<tr>
				<td><label>Race :</label></td>
				<td><select name="race">
					<option value="0">Aléatoire</option>
					<option value="1">Demi-elfe</option>
					<option value="2">Demi-orque</option>
					<option value="9">Drow</option>
					<option value="3">Elfe</option>
					<option value="4">Gnome</option>
					<option value="5">Gobelin</option>
					<option value="6">Halfelins</option>
					<option value="7">Humain</option>
					<option value="8">Nain</option>
					
					
					
					</select></td>
			</tr>
		 	<tr>
				<td><label>Sexe :</label></td>
				<td><select name="sexe">
					<option value="0">Aléatoire</option>
					<option value="1">Masculin</option>
					<option value="2">Féminin</option>
					
					</select></td>
			</tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>
			</table>';
echo $output;
}
?>