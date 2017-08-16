<?php>
	if(!empty($_POST['id']);$niveau=0;
	print_r($POST);
	$output ='';
	$output.='<h2>Encodage du niveau 1 de la classe de ';
	$output.=$_POST['nomdeclasse'];	
	$output.='</h2>';
	$output.='<form method="post" onsubmit="return valid();" action="index.php?page=encodageclasse">
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
			<tr><td><input type="hidden" name="nomdeclasse"></td></tr>	
		</table>';	
		$niveau++;
	echo $output;

	
?>