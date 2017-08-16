<?php

function appelnoble($nbrnobles,$nbrexpert,$nbradepte,$nbrbat,$nbrguilde,$nbraventuriers,$nbrheros,$particu,$typevillenum,$taille,$aventurier,$nbrlieu){
	include_once ('commerce.php');
	include_once ('aventurier.php');
	include_once ('hero.php');
	include_once ('guilde.php');
	include_once ('lieu.php');
	
	$sortie='';
	$sortie.='<br><br><h4>Détails des nobles, professionnels, religieux ou assimilés, aventuriers et héros</h4>';
	if ($nbrnobles>0) {
		$sortie.='<span class="bouton" id="bouton_texte0" onclick="javascript:afficher_cacher(\'texte0\',\'le(s) noble(s)\');"></span>
	<div id="texte0" class="texte">';
	for($i=0;$i<$nbrnobles;$i++){
		$sortie.='- '.creercommerce(4,$particu,$typevillenum,$taille).'<br>';
	}
	$sortie.=' </div>';	
	}
	if ($nbrexpert>0) {
		$sortie.='<br> <span class="bouton" id="bouton_texte1" onclick="javascript:afficher_cacher(\'texte1\',\'le(s) expert(s)\');"></span>
	<div id="texte1" class="texte">';
	for($i=0;$i<$nbrexpert;$i++){
		$sortie.='- '.creercommerce(2,$particu,$typevillenum,$taille).'<br>';
	}
	$sortie.=' </div>';	
	}
	if ($nbradepte>0) {
		$sortie.='<br> <span class="bouton" id="bouton_texte2" onclick="javascript:afficher_cacher(\'texte2\',\'le(s) adepte(s)\');"></span>
	<div id="texte2" class="texte">';
	for($i=0;$i<$nbradepte;$i++){
		$sortie.='- '.creercommerce(3,$particu,$typevillenum,$taille).'<br>';
	}
	$sortie.=' </div>';	
	}
	if ($nbrbat>0) {
		$sortie.='<br> <span class="bouton" id="bouton_texte3" onclick="javascript:afficher_cacher(\'texte3\',\'le(s) commerce(s)\');"></span>
	<div id="texte3" class="texte">';
	for($i=0;$i<$nbrbat;$i++){
		$sortie.='- '.creercommerce(1,$particu,$typevillenum,$taille).'<br>';
	}
	$sortie.=' </div>';	
	}
	if ($nbrguilde>0) {
		$sortie.='<br> <span class="bouton" id="bouton_texte4" onclick="javascript:afficher_cacher(\'texte4\',\'le(s) guilde(s)\');"></span>
	<div id="texte4" class="texte">';
	for($i=0;$i<$nbrguilde;$i++){
		$sortie.='- '.creerguilde().'<br>';
	}
	$sortie.=' </div>';	
	}
	if ($nbraventuriers>0) {
		$sortie.='<br> <span class="bouton" id="bouton_texte5" onclick="javascript:afficher_cacher(\'texte5\',\'le(s) aventurier(s)\');"></span>
	<div id="texte5" class="texte">';
	for($i=0;$i<$nbraventuriers;$i++){
		$sortie.='- '.creeraventurier($aventurier[$i],$typevillenum).'<br>';
	}
	$sortie.=' </div>';	
	}
	if ($nbrheros>0) {
		$sortie.='<br> <span class="bouton" id="bouton_texte6" onclick="javascript:afficher_cacher(\'texte6\',\'le(s) héro(s)\');"></span>
	<div id="texte6" class="texte">';
	for($i=0;$i<$nbrheros;$i++){
		$sortie.='- '.creerhero($typevillenum).'<br>';
	}
	$sortie.=' </div>';	
	}
	
	if ($nbrlieu>0) {
		$sortie.='<br> <span class="bouton" id="bouton_texte7" onclick="javascript:afficher_cacher(\'texte7\',\'le(s) lieu(x)\');"></span>
	<div id="texte7" class="texte">';
	for($i=0;$i<$nbrlieu;$i++){
		$sortie.='- '.creerlieu().'<br>';
	}
	$sortie.=' </div>';	
	}
	
	$sortie.='<script type="text/javascript">
            afficher_cacher(\'texte0\',\'le(s) noble(s)\');
			afficher_cacher(\'texte1\',\'le(s) expert(s)\');
			afficher_cacher(\'texte2\',\'le(s) adepte(s)\');
			afficher_cacher(\'texte3\',\'le(s) commerce(s)\');
			afficher_cacher(\'texte4\',\'le(s) guilde(s)\');
			afficher_cacher(\'texte5\',\'le(s) aventurier(s)\');
			afficher_cacher(\'texte6\',\'le(s) héro(s)\');
			afficher_cacher(\'texte7\',\'le(s) lieu(x)\');
    </script>';
return $sortie;

}

?>