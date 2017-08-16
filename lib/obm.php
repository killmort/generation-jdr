<?php

function getItems($fp, $nbr, &$objnm, &$objmaj)
{
	for ($i=0; $i<$nbr; $i++)
	{
		$percent = rand(1, 100);
		switch ($fp)
		{
			case 1 : switch ($percent)
			{
				case ($percent<72) : break;
				case ($percent<96) : $objnm[] = getNonMagical(); break;
				default : $objmaj[] = getMagical(2);
			} break;
			case 2 : switch ($percent)
			{
				case ($percent<50) : break;
				case ($percent<86) : $objnm[] = getNonMagical(); break;
				default : $objmaj[] = getMagical(2);
			} break;
			case 3 : switch ($percent)
			{
				case ($percent<50) : break;
				case ($percent<80) : $nbr = rand(1,3);
									 for ($i=0; $i<$nbr; $i++)
										$objnm[] = getNonMagical();
									 break;
				default : $objmaj[] = getMagical(2);
			} break;
			case 4 : switch ($percent)
			{
				case ($percent<43) : break;
				case ($percent<63) : $nbr = rand(1,4);
									 for ($i=0; $i<$nbr; $i++)
										$objnm[] = getNonMagical();
									 break;
				default : $objmaj[] = getMagical(2);
			} break;
			case 5 : switch ($percent)
			{
				case ($percent<58) : break;
				case ($percent<68) : $nbr = rand(1,4);
									 for ($i=0; $i<$nbr; $i++)
										$objnm[] = getNonMagical();
									 break;
				default : $nbr = rand(1,3);
						  for ($i=0; $i<$nbr; $i++)
							 $objmaj[] = getMagical(2);
			} break;
			case 6 : switch ($percent)
			{
				case ($percent<55) : break;
				case ($percent<60) : $nbr = rand(1,4);
									 for ($i=0; $i<$nbr; $i++)
										$objnm[] = getNonMagical();
									 break;
				case ($percent<100) : $nbr = rand(1,3);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				default : $objmaj[] = getMagical(3);
			} break;
			case 7 : switch ($percent)
			{
				case ($percent<52) : break;
				case ($percent<98) : $nbr = rand(1,3);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				default : $objmaj[] = getMagical(3);
			} break;
			case 8 : switch ($percent)
			{
				case ($percent<49) : break;
				case ($percent<97) : $nbr = rand(1,4);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				default : $objmaj[] = getMagical(3);
			} break;
			case 9 : switch ($percent)
			{
				case ($percent<44) : break;
				case ($percent<92) : $nbr = rand(1,4);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				default : $objmaj[] = getMagical(3);
			} break;
			case 10: switch ($percent)
			{
				case ($percent<41) : break;
				case ($percent<89) : $nbr = rand(1,4);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				case ($percent<100) : $objmaj[] = getMagical(3); break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 11: switch ($percent)
			{
				case ($percent<32) : break;
				case ($percent<85) : $nbr = rand(1,4);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				case ($percent<99) : $objmaj[] = getMagical(3); break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 12: switch ($percent)
			{
				case ($percent<28) : break;
				case ($percent<83) : $nbr = rand(1,6);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				case ($percent<98) : $objmaj[] = getMagical(3); break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 13: switch ($percent)
			{
				case ($percent<20) : break;
				case ($percent<74) : $nbr = rand(1,6);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				case ($percent<96) : $objmaj[] = getMagical(3); break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 14: switch ($percent)
			{
				case ($percent<20) : break;
				case ($percent<59) : $nbr = rand(1,6);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				case ($percent<93) : $objmaj[] = getMagical(3); break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 15: switch ($percent)
			{
				case ($percent<12) : break;
				case ($percent<47) : $nbr = rand(1,10);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				case ($percent<91) : $objmaj[] = getMagical(3); break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 16: switch ($percent)
			{
				case ($percent<41) : break;
				case ($percent<47) : $nbr = rand(1,10);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(2);
									  break;
				case ($percent<91) : $nbr = rand(1,3);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(3);
									  break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 17: switch ($percent)
			{
				case ($percent<34) : break;
				case ($percent<84) : $nbr = rand(1,3);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(3);
									  break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 18: switch ($percent)
			{
				case ($percent<25) : break;
				case ($percent<81) : $nbr = rand(1,4);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(3);
									  break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 19: switch ($percent)
			{
				case ($percent<5) : break;
				case ($percent<71) : $nbr = rand(1,4);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(3);
									  break;
				default : $objmaj[] = getMagical(4);
			} break;
			case 20: switch ($percent)
			{
				case ($percent<26) : break;
				case ($percent<66) : $nbr = rand(1,4);
									  for ($i=0; $i<$nbr; $i++)
										 $objmaj[] = getMagical(3);
									  break;
				default : $nbr = rand(1,3);
						  for ($i=0; $i<$nbr; $i++)
							 $objmaj[] = getMagical(4);
			} break;
		}
	}
}

function getMagical($type, $nbr=1)
{
	$types = array(2 => "faible", "intermediaire", "puissant");
	$type = $types[$type];	

	$query = "/objets/";
	$percent = rand(1,100);
	$xml = simplexml_load_file('xml/obm.xml');	

	$cats = $xml->xpath("/objets/*/".$type."[@min<='".$percent."' and @max>='".$percent."']/parent::*");
	//$cats = $xml->xpath("/objets/anneaux");
	$percent = rand (1, 100);
	$cat = "";
	switch ($cats[0]->getName())
	{
		case "armes" : $item = getWeapon($type, $xml); break;
		case "armures" : $item = getArmor($type, $xml); break;
		case "parchemins" : $item = getScroll($type, $xml); break;
		case "objets_merveilleux" : $query .= $cats[0]->getName()."/*/" . $type . "/parent::*";
									$item = ($xml->xpath($query));									
									$item = array($item[rand(0, count($item)-1)]);
									//$item[0]->nom = "<b>".$item[0]->nom."</b>";
									$item = array(@sprintf (' %s%s', utf8_decode($cat), utf8_decode($item[0]->nom)), @sprintf('%s', $item[0]->valeur));
									break;
		default: $query .= $cats[0]->getName()."/*/" . $type . "/parent::*";
				 $item = ($xml->xpath($query));				 
				 $item = array($item[rand(0, count($item)-1)]);				 
				 $cat = $item[0]->getName()." ";
				 $pos = strpos($item[0]->nom, "%opt");
				 if ($pos !== false)
				 {
					$opts = $item[0]->options->option;
					//echo $opts[rand(1, count($opts))-1]."<br />";
					$item[0]->nom = str_replace("%opt", $opts[rand(1, count($opts))-1], $item[0]->nom);
				 }
				 $item = array(@sprintf (' %s%s', utf8_decode($cat), utf8_decode($item[0]->nom)), @sprintf('%s', $item[0]->valeur));/**/
	}
	return $item;
}

function getScroll($type, $xml)
{
	$type_sort = (rand(1,100) > 70 ? "divin" : "profane");
	$nbr = ($type == "faible" ? rand(1, 3) : ($type == "puissant" ? rand(1,6) : rand(1,4)));
	$valeur = 0;
	$nom = " Parchemin ".$type_sort." (";
	
	for ($i=0; $i<$nbr; $i++)
	{
		$percent = rand(1,100);
		$lvl = 0;
		switch ($type)
		{
			case "faible" : switch ($percent)
							 {
								case ($percent < 6)  : $lvl = 0; break;
								case ($percent < 51) : $lvl = 1; break;
								case ($percent < 96) : $lvl = 2; break;
								default: 			   $lvl = 3;
							 }break;
			case "intermediaire" : switch ($percent)
									 {
										case ($percent < 6)  : $lvl = 2; break;
										case ($percent < 66) : $lvl = 3; break;
										case ($percent < 96) : $lvl = 4; break;
										default: 			   $lvl = 5;
									 }break;
			default: switch ($percent)
					 {
						case ($percent < 6)  : $lvl = 4; break;
						case ($percent < 51) : $lvl = 5; break;
						case ($percent < 71) : $lvl = 6; break;
						case ($percent < 86) : $lvl = 7; break;
						case ($percent < 96) : $lvl = 8; break;
						default: 			   $lvl = 9;
					 }
		}
		$item = $xml->xpath("/objets/Sorts/".$type_sort."/lvl".$lvl."/*");
		if (count($item) > 0)
		{
			$id = rand(1, count($item))-1;
			$nom .= ($i==0 ? "" : ", ").$item[$id]->nom." (".$lvl.")";
			$valeur +=  $item[$id]->valeur;
		}
		else $nom .= ($i==0 ? "" : ", ")."Un sort (".$lvl.")";
	}
	return array (utf8_decode($nom).")", $valeur);
}

function getWeapon($type, $xml)
{
	$base_type = rand (1,100);
	$percent = rand (1,100);
	$base_type = $xml->xpath("/objets/armes/base/*[@min<='".$base_type."' and @max>='".$base_type."']/*[@min<='".$percent."' and @max>='".$percent."']");
	$base = $base_type[0];
	$base_type = ($base[0]->dist ? "ranged" : "melee");
	$properties = array();
	do
	{
		$percent = rand (1,100);
		switch ($type)
		{
			case "faible" : switch ($percent)
							 {
								case ($percent < 71) : $property = array("nom"=>"+1", "mod"=>1); break;
								case ($percent < 86) : $property = array("nom"=>"+2", "mod"=>2); break;
								case ($percent < 91) : $property = array("nom"=>"*", "mod"=>-1); break;
								default: 			   $property = array("nom"=>"*", "mod"=>0);
							 }break;
			case "intermediaire" : switch ($percent)
									 {
										case ($percent < 11) : $property = array("nom"=>"+1", "mod"=>1); break;
										case ($percent < 30) : $property = array("nom"=>"+2", "mod"=>2); break;
										case ($percent < 59) : $property = array("nom"=>"+3", "mod"=>3); break;
										case ($percent < 63) : $property = array("nom"=>"+4", "mod"=>4); break;
										case ($percent < 69) : $property = array("nom"=>"*", "mod"=>-1); break;
										default: 			   $property = array("nom"=>"*", "mod"=>0);
									 }break;
			default: switch ($percent)
					 {
						case ($percent < 21) : $property = array("nom"=>"+3", "mod"=>3); break;
						case ($percent < 39) : $property = array("nom"=>"+4", "mod"=>4); break;
						case ($percent < 50) : $property = array("nom"=>"+5", "mod"=>5); break;
						case ($percent < 64) : $property = array("nom"=>"*", "mod"=>-1); break;
						default: 			   $property = array("nom"=>"*", "mod"=>0);
					 }
		}
		if ($property["mod"]==0) $properties = getWeaponProperties($type, $base, $base_type, $xml, $properties);
	}
	while($property["mod"]==0);
	if ($property["mod"]<0)
	{
		//Arme spécifique
		$percent = rand (1, 100);
		$spec = $base->xpath("/objets/armes/spec/arme/".$type."[@min<='".$percent."' and @max>='".$percent."']/parent::*");
		$nom = $spec[0]->nom;
		$valeur = $spec[0]->valeur;
	}
	else
	{
		/*print_r($base);
		print_r($property);*/
		/*print_r($properties);
		echo "<hr />";/**/
		if ($base->nom == "Munitions")
		{
			$percent = rand (1, 100);
			$base->nom = ($percent < 21 ? "Billes" : ($percent < 51 ? "Carreaux" : "Flèches")." (50)");
		}
		$nom = $base->nom." ".$property["nom"];
		foreach ($properties as $value)
		{
			/*print_r($value);
			echo "<br />";/**/
			$nom .= " ".$value[0];
			//echo $nom." : ".$value[1]."<br>";
			$property["mod"]+=$value[1];
		}
		//echo "<hr>";
		$valeur = $base->valeur + ($property["mod"] * $property["mod"] * 2000);
	}
	return array(" ".utf8_decode($nom), $valeur);
}

function getArmor($type, $xml)
{
	$percent = rand (1,100);
	$base_type = $xml->xpath("/objets/armures/base/*/*[@min<='".$percent."' and @max>='".$percent."']");
	//print_r($base_type); echo "<hr />";
	$base = $base_type[rand(0,1)];
	$base_type = $base->xpath("parent::*");
	$base_type = $base_type[0]->getName();
	//echo $base_type."<hr />";
	
	$properties = array();
	do
	{
		$percent = rand (1,100);
		switch ($type)
		{
			case "faible" : switch ($percent)
							 {
								case ($percent < 71) : $property = array("nom"=>"+1", "mod"=>1); break;
								case ($percent < 86) : $property = array("nom"=>"+2", "mod"=>2); break;
								case ($percent < 91) : $property = array("nom"=>"*", "mod"=>-1); break;
								default: 			   $property = array("nom"=>"*", "mod"=>0);
							 }break;
			case "intermediaire" : switch ($percent)
									 {
										case ($percent < 11) : $property = array("nom"=>"+1", "mod"=>1); break;
										case ($percent < 30) : $property = array("nom"=>"+2", "mod"=>2); break;
										case ($percent < 59) : $property = array("nom"=>"+3", "mod"=>3); break;
										case ($percent < 63) : $property = array("nom"=>"+4", "mod"=>4); break;
										case ($percent < 69) : $property = array("nom"=>"*", "mod"=>-1); break;
										default: 			   $property = array("nom"=>"*", "mod"=>0);
									 }break;
			default: switch ($percent)
					 {
						case ($percent < 21) : $property = array("nom"=>"+3", "mod"=>3); break;
						case ($percent < 39) : $property = array("nom"=>"+4", "mod"=>4); break;
						case ($percent < 50) : $property = array("nom"=>"+5", "mod"=>5); break;
						case ($percent < 64) : $property = array("nom"=>"*", "mod"=>-1); break;
						default: 			   $property = array("nom"=>"*", "mod"=>0);
					 }
		}
		if ($property["mod"]==0) $properties = getArmorProperties($type, $base, $base_type, $xml, $properties);
	}
	while($property["mod"]==0);
	if ($property["mod"]<0)
	{
		//Armure spécifique
		$percent = rand (1, 100);
		$spec = $base->xpath("/objets/armures/spec/".$base_type."/*/".$type."[@min<='".$percent."' and @max>='".$percent."']/parent::*");
		$nom = $spec[0]->nom;
		$valeur = $spec[0]->valeur;
	}
	else
	{
		/*print_r($base);
		print_r($property);*/
		/*print_r($properties);
		echo "<hr />";/**/
		$nom = $base->nom." ".$property["nom"];
		foreach ($properties as $value) { $nom .= " ".$value[0]; $base->valeur+=$value[1]; $property["mod"]+=$value[2]; }
		$valeur = $base->valeur + ($property["mod"] * $property["mod"] * 1000);		
	}
	return array(" ".utf8_decode($nom), $valeur);
}

function getWeaponProperties($type, $base, $base_type, $xml, $properties = array())
{
	$percent = rand(1, 100);
	//echo $type." ".$base_type." ".$percent."<hr />";
	$prop = $xml->xpath("/objets/armes/prop/".$base_type."/property/".$type."[@min<='".$percent."' and @max>='".$percent."']/parent::*");
	//print_r($prop[0]); echo "<hr />";
	if ($prop[0]->mod == 0)
	{
		$properties = getWeaponProperties($type, $base, $base_type, $xml, $properties);
		$properties = getWeaponProperties($type, $base, $base_type, $xml, $properties);
	}
	else 
	{
		$pos = strpos($prop[0]->nom, "%kill");
		if ($pos !== false)
		{
			$percent = rand(1, 100);
			$kills = $xml->xpath("/objets/armes/kill/enemy[@min<='".$percent."' and @max>='".$percent."']");
			//print_r($kills); echo "<hr />";
			$prop[0]->nom = str_replace("%kill", $kills[0], $prop[0]->nom);
		}
		$nom = $prop[0]->nom;
		$replay = false;
		foreach ($properties as $vector) if ($vector[0]==$nom) $replay=true;
		if ($replay) $properties[] = getWeaponProperties($type, $base, $base_type, $xml, $properties);
		else $properties[] = array($prop[0]->nom, $prop[0]->mod);
	}
	//print_r ($prop); echo "<hr />";
	//print_r ($base); echo "<br />";
	return $properties;
}

function getArmorProperties($type, $base, $base_type, $xml, $properties = array())
{
	$percent = rand(1, 100);
	//echo $type." ".$base_type." ".$percent."<hr />";
	$prop = $xml->xpath("/objets/armures/prop/".$base_type."/property/".$type."[@min<='".$percent."' and @max>='".$percent."']/parent::*");
	//print_r($prop[0]); echo "<hr />";
	if ($prop[0]->mod == 0 && $prop[0]->valeur == 0)
	{
		$properties = getArmorProperties($type, $base, $base_type, $xml, $properties);
		$properties = getArmorProperties($type, $base, $base_type, $xml, $properties);
	}
	else 
	{
		$nom = $prop[0]->nom;
		$replay = false;
		foreach ($properties as $vector) if ($vector[0]==$nom) $replay=true;
		if ($replay) $properties[] = getArmorProperties($type, $base, $base_type, $xml, $properties);
		else $properties[] = array($nom, $prop[0]->valeur, $prop[0]->mod);
	}
	//print_r ($prop); echo "<hr />";
	//print_r ($base); echo "<br />";
	return $properties;
}

function checkProperties()
{
	$output = "";
	$xml = simplexml_load_file('xml/obm.xml');
	$obm = array("melee", "ranged");
	$types = array("faible", "intermediaire", "puissant");
	
	foreach ($obm as $o)
	{
		foreach ($types as $t)
		{
			for ($i=1; $i<=100; $i++)
			{
				$c = $xml->xpath("/objets/armes/prop/".$o."/property/".$t."[@min<='".$i."' and @max>='".$i."']/parent::*");
				if (count($c)!=1) $output .= $o." ".$t." N°".$i." contient ".count($c)." entrée(s)<br/>";
				echo ($o." ".$t." N°".$i." : ".$c[0]->nom."<br />");
			}
		}
	}
	return $output;
}

function checkMagical()
{
	$output = "";
	$xml = simplexml_load_file('xml/obm.xml');
	$obm = array("anneaux", "baguettes", "potions");
	$obm2 = array("bâtons", "sceptres");
	$types = array("faible", "intermediaire", "puissant");
	$types2 = array("intermediaire", "puissant");
	
	foreach ($obm as $o)
	{
		foreach ($types as $t)
		{
			for ($i=1; $i<=100; $i++)
			{
				$c = $xml->xpath("/objets/".$o."/*/".$t."[@min<='".$i."' and @max>='".$i."']/parent::*");
				if (count($c)!=1) $output .= $o." ".$t." N°".$i." contient ".count($c)." entrée(s)<br/>";
				echo ($o." ".$t." N°".$i." : ".$c[0]->nom."<br />");
			}
		}
	}
	foreach ($obm2 as $o)
	{
		foreach ($types2 as $t)
		{
			for ($i=1; $i<=100; $i++)
			{
				$c = $xml->xpath("/objets/".$o."/*/".$t."[@min<='".$i."' and @max>='".$i."']/parent::*");
				if (count($c)!=1) $output .= $o." ".$t." N°".$i." contient ".count($c)." entrée(s)<br/>";
				echo ($o." ".$t." N°".$i." : ".$c[0]->nom."<br />");
			}
		}
	}
	return $output;
}