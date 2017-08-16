<?php 

include ('lib/compteur.php');
include ('lib/scenar.php');

$output ='';
$output.='<h2>Scénario minute</h2>';
$output.=''.creerscenar().'<br />';
compteur('scenario');
$output.='<input type="button" value="Générer"  OnClick="window.location.href=\'index.php?page=scenar\'" >';
echo $output;
?>