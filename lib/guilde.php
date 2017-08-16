<?php
function creerguilde(){ 
	include_once ('nomevolue.php');
		$guilde='';
		$typedeguilde=array ("marchands","magiciens","sorciers","assassins","voleurs","roublards","commercants","troubadours");
		
		$guilde.='Guilde de '.$typedeguilde[rand(0,count($typedeguilde)-1)].' ayant pour chef '.creernomevo(rand(0,8),rand(1,2));
	return $guilde;
}



?>



