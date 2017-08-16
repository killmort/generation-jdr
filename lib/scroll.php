<?php
function test(){
echo 'test';
}

function getScroll($type_sort, $type, $xml)
{
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
?>