<?php
function compter($page) {
	$monfichier = fopen('log/'.$page.'.txt', 'r+');
	$ligne = fgets($monfichier);
	fclose($monfichier);
	return $ligne;
}
function compteur($page){
	$monfichier = fopen('log/'.$page.'.txt', 'r+');
	$ligne = fgets($monfichier);
	$ligne++;
	fseek($monfichier, 0);
	fputs($monfichier, $ligne);

	
	fclose($monfichier);

}

?>