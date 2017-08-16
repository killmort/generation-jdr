<script type="text/javascript" src="javascript/valider.js"></script>
<?php
if(isset($_POST['update']) && !empty($_POST['update'])) {
	
	$requete = "SELECT id,type,mail,validation FROM membre WHERE pseudo='".$_POST['pseudo']."'";
	$result = $connexion->prepare($requete);
	$result->execute();
	$ligne = $result->fetch(PDO::FETCH_OBJ);
	if($result->rowCount() == 0){
		$val =NULL;
	}
	else {
		$val = $ligne->validation;
	}
	
	if(!is_null($val)){
		?><script> alert('Vous n\'avez pas valider votre inscription ');</script> <?php
	}
	else {	
		if(empty($_POST['pseudo']) && empty($_POST['pass'])) {
			?><script> alert('Introduire les valeurs dans les champs');</script> <?php
		}
		
		else {
		
			$requete = "SELECT id,type,mail FROM membre WHERE pseudo LIKE('".$_POST['pseudo']."') AND password LIKE('".sha1($_POST['pass'])."')";
			
			$resultat = $connexion->prepare($requete);
			$resultat->execute();
			
				if($resultat->rowCount() == 1) {
					$ligne = $resultat->fetch(PDO::FETCH_OBJ);
					$_SESSION['id'] = $ligne->id;
					$_SESSION['type'] = $ligne->type;
			
					$_SESSION['pseudo'] = $_POST['pseudo'];
					$_SESSION['mail'] = $ligne->mail;
					//$variable = NULL;
					$requete = "UPDATE membre SET npassword=NULL WHERE pseudo='".$_POST['pseudo']."'";
					$insert = $connexion->prepare($requete);
					$insert->execute();
			
					?>
					<script language="javascript" type="text/javascript">
					<!--
					window.location.replace("index.php?page=accueilmembre");
					-->
					</script><?php
				}
			
				else {
					?><script> alert('Pseudo inexistant ou mauvais mot de passe');</script> <?php
				}
		}
	}

}


?>

<?php	
	$output.='<h2>Connexion</h2>';
	$output.='<form name="connexion" method="POST" action="index.php?page=connexion">
		<table>
			<tr><td>Pseudo : </td><td><input type="text" id="pseudo" name="pseudo" value=""></td><td>&nbsp;<font id="msgpseudo" color="red"></font></td></tr>
			<tr><td>Password :</td><td><input type="password" name="pass" value=""></td><td>&nbsp;<font id="msgpswd" color="red"></font></td></tr>
			<input type="hidden" name="update" value="1">
			<tr><td><input type="submit" name="submit" value="Connexion" > </td></tr>
			
			
		</table>
	</form>';	
	
	echo $output;
?>
	
	
