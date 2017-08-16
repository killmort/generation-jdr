<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<script type="text/javascript" src="javascript/des.js"></script>
<?php

if(!empty($_POST)){
 print_r($_POST);
 
 
 foreach ($_POST['typededes'] as &$value) {
		echo '-'.$value.'<br />';
}
}
else {
	?>
	<h2>Lanceur de dés</h2>
	<form method="post" id="dfpa">
  	<table><tr><td>Lancer : </td>
		<td><input id="typededes" type="text" name="typededes" value="" size="17" ></td>
    	<td>Option : </td><td><select name="resussite" >
				<option value="0" selected > </option>
				<option value="1"  >succès si &gt;</option>
				<option value="2"  >succès si &gt;=</option>
				<option value="3"  >succès si =</option>
				<option value="4"  >succès si &lt;=</option>
				<option value="5"  >succès si &lt;</option>
				<option value="6"  >second jet</option>
    			</select></td>
    	<td>&nbsp;<input id="rcan" type="text" name="seuil" value="" size="15" maxlength="50"></td>
    </tr>
    <tr><td colspan='2'>Lancer combien de fois : <input type="text" name="nbrlance" value="1" size="3" maxlength="3"></td>
    <td colspan='2'>Option affichage&nbsp;:
    <select name="dopt">
        <option value="0" selected >standard</option>
        <option value="1"  >petits d&eacute;s</option>
        <option value="2"  >texte seul</option>

    </select></td>
    </tr>
    <tr><td><input type="submit" size="5" onclick="droll();return false;" name="sok" style="bold" value="Lancer !"></td></tr>
    </table>
    
	<br />
	
	<h4>Utilisation rapide :</h4>
  
	<p>

	Choisir l'un des dés suivants :
    </p>

	<table>
    <tr align="center">
    <td><input type="button" onclick="ajoutdes('1d6');return false;" name="f" value="d6"></td>
	<td><input type="button" onclick="ajoutdes('2d6');return false;" name="f" value="2d6"></td>
	<td><input type="button" onclick="ajoutdes('3d6');return false;" name="f" value="3d6"></td>
	<td><input type="button" onclick="ajoutdes('3d6R');return false;" name="f" value="3d6R"></td>

	<td><input type="button" onclick="ajoutdes('4d6-L');return false;" name="f" value="4d6-L"></td>
	<td><input type="button" onclick="ajoutdes('4d6');return false;" name="f" value="4d6"></td>
	<td><input type="button" onclick="ajoutdes('5d6');return false;" name="f" value="5d6"></td>
	<td><input type="button" onclick="ajoutdes('10d6');return false;" name="f" value="10d6"></td>
	<td><input type="button" onclick="ajoutdes('1d2');return false;" name="f" value="d2"></td>
	<td><input type="button" onclick="ajoutdes('1d3');return false;" name="f" value="d3"></td>
	<td><input type="button" onclick="ajoutdes('1d4');return false;" name="f" value="d4"></td></tr>
    <tr align="center">
	<td><input type="button" onclick="ajoutdes('1d8');return false;" name="f" value="d8"></td>

	<td><input type="button" onclick="ajoutdes('1d10');return false;" name="f" value="d10"></td>
	<td><input type="button" onclick="ajoutdes('2d10');return false;" name="f" value="2d10"></td>
	<td><input type="button" onclick="ajoutdes('10d10');return false;" name="f" value="10d10"></td>
	<td><input type="button" onclick="ajoutdes('10d10E');return false;" name="f" value="10d10E"></td>
	<td><input type="button" onclick="ajoutdes('1d12');return false;" name="f" value="d12"></td>
	<td><input type="button" onclick="ajoutdes('1d20');return false;" name="f" value="d20"></td>
	<td><input type="button" onclick="ajoutdes('2d20');return false;" name="f" value="2d20"></td>
	<td><input type="button" onclick="ajoutdes('1d24');return false;" name="f" value="d24"></td>
	<td><input type="button" onclick="ajoutdes('1d30');return false;" name="f" value="d30"></td>

	<td><input type="button" onclick="ajoutdes('1d100');return false;" name="f" value="d100"></td></tr>
    </table>


</form>
<?php }
?>



