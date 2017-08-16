<?php 

function getPotion($type, $xml){

	$types = array("faible", "intermediaire", "puissant");
	$type = $types[$type];
	$percent = Rand(1, 100);
	$item = ($xml->xpath("/objets/potions/*/" . $type . "[@min<='".$percent."' and @max>='".$percent."']/parent::*"));

	$cat = $item[0]->getName()." ";
	$pos = strpos($item[0]->nom, "%opt");
	if ($pos !== false)
	{
		$opts = $item[0]->options->option;
		$item[0]->nom = str_replace("%opt", $opts[rand(1, count($opts))-1], $item[0]->nom);
	}
	return array(@sprintf (' %s%s', $cat, utf8_decode($item[0]->nom)), @sprintf('%s', $item[0]->valeur));
}

?>