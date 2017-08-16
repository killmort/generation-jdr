<script type="text/javascript" src="javascript/validermail.js"></script>
<?php
include ('lib/newsletters.php');

if(!empty($_POST)){
	$output=''; 
	$output.='Merci pour votre inscription, l\'adresse '.$_POST['mail'].' à bien été enregistrée<br/>';
	$output.='A bientôt';
	echo $output;
	
	newletters($_POST['mail']);
 }
 else {
	$output=''; 
	$output.='<h2>Newsletters</h2>';
	$output.='Si vous désirez être tenu informé des mises-à-jour de génération-jdr il vous suffit d\'inscrire votre adresse mail.<br />';
	$output.='Un mail ne sera envoyé qu\'à la venue d\'une nouvelle génération.<br />';
	
	$output.='<form method="post" onsubmit="return validInscription();" action="index.php?page=newsletter">
			<table>
				<tr>
					<td><label>Mail :</label><input type="text" id="mail" name="mail" size="40" value=""/></td>
					&nbsp;<font id="msgErreur" color="red"></tr>
				<tr><td align="center" colspan="2"><input type="submit" name="generer" value="Envoyer" /></td></tr>		
			</table>
			</form>';
	$output.='<p>Pour vous désinscrire merci d\'envoyer un mail via la partie contact</p>'; 

	echo $output;
 }
?>