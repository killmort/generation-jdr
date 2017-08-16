<?php 
include_once('include/header.php');	  
	   
	   if(isset($_GET['page']) && !empty($_GET['page'])) {
		if(file_exists('pages/'.$_GET['page'].'.php')) {
			include_once('pages/'.$_GET['page'].'.php');
		}
		else {
			include_once('pages/accueil.php');
		}
	}
	else {
		include_once('pages/accueil.php');
	}
	   
include_once('include/left.php');
include_once('include/footer.php');
?>