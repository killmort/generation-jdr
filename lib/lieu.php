<?php
function creerlieu(){ 
	
$lieu = array("Une fontaine","Un parc","Un lac","Une statue","Un édifice commémoratif","Un pont","Une tour abandonée","Un jardin","Un bosquet","Une place","Une maison biscornue","Une maison étrange");
	
	$sortie='';
	$sortie.=$lieu[rand(0,count($lieu)-1)];
	
	
	
	
return $sortie;
}



?>



