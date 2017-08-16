<?php

function array_delete_value($array,$search) {
	$temp = array();
	foreach($array as $key => $value) {
	if($value!=$search) $temp[$key] = $value;
}
return $temp;
}

function array_delete_key($array,$search) {
	$temp = array();
	foreach($array as $key => $value) {
	if($key!=$search) $temp[$key] = $value;
	}
return $temp;
}

?>