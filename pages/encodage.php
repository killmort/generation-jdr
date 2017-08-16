<?php>
session_start();
if($_SESSION){
	print_r($POST);
	
	if(!empty($_POST)&&$_POST['lvl']<21 ){
		
		if ($_POST['lvl']==1) {
		//encodage du nom dans la DB du nom de classe et récupération de l'id//	
		}
		//encodage dans la DB PENSER A FAIRE LE -1//		
		$output ='';
		$output.='<h2>Encodage du niveau '.$_POST['lvl'].' de la classe de ';
		$output.=$_POST['nomdeclasse'];	
echo $_POST['lvl'];
		print_r($_POST);
		$_POST['lvl']++;
		$output.='</h2>';
		$output.='<form method="post" onsubmit="return valid();" action="index.php?page=encodage">
			<table>
				<tr>
					<td><label>BBA : </label></td><td><input type="text" name="BBA" value=""></td>
				</tr>
				<tr>
					<td><label>Réflexes : </label></td><td><input type="text" name="ref" value=""></td>
				</tr>
				<tr>
					<td><label>Vigueur : </label></td><td><input type="text" name="vig" value=""></td>
				</tr>
				<tr>
					<td><label>Volonté : </label></td><td><input type="text" name="vol" value=""></td>
				</tr>
				<tr>
					<td><label>Spécial </label></td><td><input type="text" name="spe" value=""></td>
				</tr>
				<tr><td align="center" colspan="3"><input type="submit" id="'.$niveau.'"name="Suivant" value="Suivant" /></td></tr>		
				<tr><td><input type="hidden" name="nomdeclasse" value="'.$_POST['nomdeclasse'].'"></td></tr>	
				<tr><td><input type="hidden" name="lvl" value="'.$_POST['lvl'].'"></td></tr>
			</table>';	
		
		
	echo $output;

	}
	else {
	$niveau=1;
	$output ='';
	$output.='<h2>Encodage d\'une classe</h2>';
	$output.='<form method="post" onsubmit="return valid();" action="index.php?page=encodage">
		<table>
			<tr>
				<td><label>Nom de la classe :</label></td>
				<td><input type="text" name="nomdeclasse" value=""></td>
				<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>		
				<tr><td><input type="hidden" name="lvl" value="'.$niveau.'"></td></tr>
		</table>';	
	
	echo $output;
		
	}
	
}
else {

$output.='Rien à faire ici';
$output.='</h2>';
		$output.='<form method="post" onsubmit="return valid();" action="index.php?page=connexion">
			<table>
				<tr><td align="center" colspan="3"><input type="submit" "name="Connexion" value="Connexion" /></td></tr>		

			</table>';	
echo $output;
}
	
?>