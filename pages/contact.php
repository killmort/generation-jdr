<script type="text/javascript" src="javascript/validermail.js"></script>
<?php
	if(isset($_POST['update']) && !empty($_POST['update'])) {
		
		
		// set du mail pour l'admin
		$destinataire='info@generation-jdr.fr';
		$header='From: '.$_POST['mailexp'];
		$message='Ce mail provient du site generation-jdr '. "\n" ;
		$message.=$_POST['commentaires']."\n".$_POST['mailexp'];
		$subject=$_POST['sujet'];
		
		mail($destinataire,$subject,$message,$header);
		
		// set du mail pour l'utilisateur
		$destinataire2='';
		$destinataire2=$_POST['mailexp'];
		$header2='From: '.$destinataire;
		$message2='Vous avez envoyez le message suivant à l\'administrateur de generation-jdr' ."\n";
		$message2.=$_POST['commentaires'];
		$subject='Envoi d\'un mail à l\'équipe de generation-jdr sujet :'.$_POST['sujet'];
			
		mail($destinataire2,$subject,$message2,$header2);
		
		?> <script> alert('Votre message est bien parti vous allez recevoir une confirmation par mail');</script> 		
		<script language="javascript" type="text/javascript">
					<!--
					window.location.replace("index.php?page=accueil");
					-->
					</script><?php
}



$output='';

$output.='<h2>Nous contacter</h2>';
$output.='Une remarque? Un conseil? Un avis? Un bug? N\'hésitez pas, envoyez nous un petit mail';
$output.='<form method="post" onsubmit="return validInscription();" action="index.php?page=contact">';
$output.='<table>';
$output.='<tr><td>Sujet:</td><td><input type="text" size="40" name="sujet" value=""/></td></tr>';
$output.='<tr><td>Votre mail :</td><td><input type="text" size="40" id="mailexp" name="mailexp" value=""/></td></tr>';
$output.='<tr><td colspan="2">Commentaires:<br /><textarea cols="51" rows="6" name="commentaires"></textarea></td></tr>';
$output.='<tr><td><input type="submit" name="submit" value="Envoyer"/></td><td><input type="reset" value="Annuler"/></td></tr>';
$output.='<tr><td><input type="hidden" name="update" value="1"/></td></tr></table></form>';

echo $output;
?>