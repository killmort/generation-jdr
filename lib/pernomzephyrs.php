<?php
function getprenomzephyrsmas() {
	$partie1 = array("Eliom","Meliell","Maelian","Limzil","Zoelian","Laminel","Nilm","Zeilio","Iliam","Layala","Omelian","Alianim","Minoliem","Melmio","Nieloneïl","Zolian","Ilmi");
	$partie2 = array("A faire");
return $partie1[rand(0,count($partie1)-1)].' '.$partie2[rand(0,count($partie2)-1)].' (Arak, masculin)';
}

function getprenomzephyrsfem() {
	$partie1 = array("Loyanella", "Ilmilia", "Molonael", "Zimlin", "Zaelia", "Sheïss", "Neliaan");
	$partie2 = array("A faire");
return $partie1[rand(0,count($partie1)-1)].' '.$partie2[rand(0,count($partie2)-1)].' (Arak, masculin)';
}

?>
