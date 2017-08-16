<?php
function calculFP($pj, $niv){
	
	if ($niv==0) {
		$renc=rand(1,100);
		if ($renc>=1 && $renc<=10) $niv=1;
		if ($renc>10 && $renc<=30) $niv=2;
		if ($renc>30 && $renc<=80) $niv=3;
		if ($renc>80 && $renc<=95) $niv=4;
		if ($renc>95 && $renc<=100) $niv=5;	
	}
	switch ($niv) {
		case 1:
		$fp=$pj-(round($pj/2));
		break;
		
		case 2:
		$fp=$pj+1;
		break;
		case 3:
		$fp=$pj;
		break;
		case 4:
		$fp=$pj+(rand(1,4));
		break;
		case 5:
		$fp=$pj+5;
		break;
		
	}
	
	return $fp;
}

function fpdecreature($nbrcrea,$fp){
	
	$tablerencontre = array(array()) ;
	
	$tablerencontre[0][0]=rand(1,2);
	$tablerencontre[0][1]=rand(2,3);
	$tablerencontre[0][2]=rand(3,4);
	$tablerencontre[0][3]=rand(3,5);
	$tablerencontre[0][4]=rand(4,6);
	$tablerencontre[0][5]=rand(5,7);
	$tablerencontre[0][6]=rand(6,8);
	$tablerencontre[0][7]=rand(7,9);
	$tablerencontre[0][8]=rand(8,10);
	$tablerencontre[0][9]=rand(9,11);
	$tablerencontre[0][10]=rand(10,12);
	$tablerencontre[0][11]=rand(11,13);
	$tablerencontre[0][12]=rand(12,14);
	$tablerencontre[0][13]=rand(13,15);
	$tablerencontre[0][14]=rand(14,16);
	$tablerencontre[0][15]=rand(15,17);
	$tablerencontre[0][16]=rand(16,18);
	$tablerencontre[0][17]=rand(17,19);
	$tablerencontre[0][18]=rand(18,20);
	$tablerencontre[0][19]=19;
		
	$tablerencontre[1][0]=0.5;
	$tablerencontre[1][1]=1;
	$tablerencontre[1][2]=rand(1,2);
	$tablerencontre[1][3]=2;
	$tablerencontre[1][4]=3;
	$tablerencontre[1][5]=4;
	$tablerencontre[1][6]=5;
	$tablerencontre[1][7]=6;
	$tablerencontre[1][8]=7;
	$tablerencontre[1][9]=8;
	$tablerencontre[1][10]=9;
	$tablerencontre[1][11]=10;
	$tablerencontre[1][12]=11;
	$tablerencontre[1][13]=12;
	$tablerencontre[1][14]=13;
	$tablerencontre[1][15]=14;
	$tablerencontre[1][16]=15;
	$tablerencontre[1][17]=16;
	$tablerencontre[1][18]=17;
	$tablerencontre[1][19]=18;
	
	
	$tablerencontre[2][0]=0.3;
	$tablerencontre[2][1]=1;
	$tablerencontre[2][2]=1;
	$tablerencontre[2][3]=rand(1,2);
	$tablerencontre[2][4]=2;
	$tablerencontre[2][5]=3;
	$tablerencontre[2][6]=4;
	$tablerencontre[2][7]=5;
	$tablerencontre[2][8]=6;
	$tablerencontre[2][9]=7;
	$tablerencontre[2][10]=8;
	$tablerencontre[2][11]=9;
	$tablerencontre[2][12]=10;
	$tablerencontre[2][13]=11;
	$tablerencontre[2][14]=12;
	$tablerencontre[2][15]=13;
	$tablerencontre[2][16]=14;
	$tablerencontre[2][17]=15;
	$tablerencontre[2][18]=16;
	$tablerencontre[2][19]=17;
	
	
	$tablerencontre[3][0]=0.25;
	$tablerencontre[3][1]=0.5;
	$tablerencontre[3][2]=1;
	$tablerencontre[3][3]=1;
	$tablerencontre[3][4]=rand(1,2);
	$tablerencontre[3][5]=2;
	$tablerencontre[3][6]=3;
	$tablerencontre[3][7]=4;
	$tablerencontre[3][8]=5;
	$tablerencontre[3][9]=6;
	$tablerencontre[3][10]=7;
	$tablerencontre[3][11]=8;
	$tablerencontre[3][12]=9;
	$tablerencontre[3][13]=10;
	$tablerencontre[3][14]=11;
	$tablerencontre[3][15]=12;
	$tablerencontre[3][16]=13;
	$tablerencontre[3][17]=14;
	$tablerencontre[3][18]=15;
	$tablerencontre[3][19]=16;
	
	
	$tablerencontre[4][0]=
	$tablerencontre[4][0]=0.16;
	$tablerencontre[4][1]=0.33;
	$tablerencontre[4][2]=0.5;
	$tablerencontre[4][3]=1;
	$tablerencontre[4][4]=1;
	$tablerencontre[4][5]=rand(1,2);
	$tablerencontre[4][6]=2;
	$tablerencontre[4][7]=3;
	$tablerencontre[4][8]=4;
	$tablerencontre[4][9]=5;
	$tablerencontre[4][10]=6;
	$tablerencontre[4][11]=7;
	$tablerencontre[4][12]=8;
	$tablerencontre[4][13]=9;
	$tablerencontre[4][14]=10;
	$tablerencontre[4][15]=11;
	$tablerencontre[4][16]=12;
	$tablerencontre[4][17]=13;
	$tablerencontre[4][18]=14;
	$tablerencontre[4][19]=15;
	
	$tablerencontre[5][0]=0.125;
	$tablerencontre[5][1]=0.25;
	$tablerencontre[5][2]=0.33;
	$tablerencontre[5][3]=0.5;
	$tablerencontre[5][4]=0.5;
	$tablerencontre[5][5]=1;
	$tablerencontre[5][6]=1;
	$tablerencontre[5][7]=2;
	$tablerencontre[5][8]=3;
	$tablerencontre[5][9]=4;
	$tablerencontre[5][10]=5;
	$tablerencontre[5][11]=6;
	$tablerencontre[5][12]=7;
	$tablerencontre[5][13]=8;
	$tablerencontre[5][14]=9;
	$tablerencontre[5][15]=10;
	$tablerencontre[5][16]=11;
	$tablerencontre[5][17]=12;
	$tablerencontre[5][18]=13;
	$tablerencontre[5][19]=14;
	
	
	$tablerencontre[6][0]=0.125;
	$tablerencontre[6][1]=0.166;
	$tablerencontre[6][2]=0.25;
	$tablerencontre[6][3]=0.33;
	$tablerencontre[6][4]=0.5;
	$tablerencontre[6][5]=0.5;
	$tablerencontre[6][6]=0.5;
	$tablerencontre[6][7]=1;
	$tablerencontre[6][8]=2;
	$tablerencontre[6][9]=3;
	$tablerencontre[6][10]=4;
	$tablerencontre[6][11]=5;
	$tablerencontre[6][12]=6;
	$tablerencontre[6][13]=7;
	$tablerencontre[6][14]=8;
	$tablerencontre[6][15]=9;
	$tablerencontre[6][16]=10;
	$tablerencontre[6][17]=11;
	$tablerencontre[6][18]=12;
	$tablerencontre[6][19]=13;

	return $tablerencontre[$nbrcrea][$fp];
}
function choixcreat($envi, $fpcrea){
	
	$tabenvi = array("en milieu aquatique","dans les plaines","dans le désert","dans une colline","dans un marécage","dans une forêt","dans une montagne","dans un souterrain");
	$crea ='';
	switch ($envi) {
		case 0: //aquatique
			$crea=appelcreaaqua($fpcrea);
		break;
		case 1: //plaine
			$crea=appelcreaplai($fpcrea);
		break;
		case 2: //désert
			$crea=appelcreadese($fpcrea);
		break;
		case 3: // colline
			$crea=appelcreacoll($fpcrea);
		break;
		case 4: //marécage
			$crea=appelcreamare($fpcrea);
		break;
		case 5: //foret
			$crea=appelcreafore($fpcrea);
		break;
		case 6:// montagne
			$crea=appelcreamont($fpcrea);
		break;
		case 7://sousterrain
			$crea=appelcreasous($fpcrea);
		break;
		
		
	}
	return $crea;
}
function appelcreaaqua($fpcrea){
	$fpcreafp='';
switch ($fpcrea) {
	
	case 1:
	$fpcreafp='DDD1DDD';
	break;
	case 2:
	;
	break;
	case 3:
	;
	break;
	case 4:
	;
	break;
	case 5:
	;
	break;
	case 6:
	;
	break;
	case 7:
	;
	break;
	case 8:
	;
	break;
	case 9:
	;
	break;
	case 10:
	;
	break;
	case 11:
	;
	break;
	case 12:
	;
	break;
	case 13:
	;
	break;
	case 14:
	;
	break;
	case 15:
	;
	break;
	case 16:
	;
	break;
	case 17:
	;
	break;
	case 18:
	;
	break;
	case 19:
	;
	break;
	case 20:
	;
	break;	
	
}
}

function appelcreaplai($fpcrea) {
switch ($fpcrea) {
	case 1:
	;
	break;
	case 2:
	;
	break;
	case 3:
	;
	break;
	case 4:
	;
	break;
	case 5:
	;
	break;
	case 6:
	;
	break;
	case 7:
	;
	break;
	case 8:
	;
	break;
	case 9:
	;
	break;
	case 10:
	;
	break;
	case 11:
	;
	break;
	case 12:
	;
	break;
	case 13:
	;
	break;
	case 14:
	;
	break;
	case 15:
	;
	break;
	case 16:
	;
	break;
	case 17:
	;
	break;
	case 18:
	;
	break;
	case 19:
	;
	break;
	case 20:
	;
	break;	
	
}
}

function appelcreadese($fpcrea){
switch ($fpcrea) {
	case 1:
	;
	break;
	case 2:
	;
	break;
	case 3:
	;
	break;
	case 4:
	;
	break;
	case 5:
	;
	break;
	case 6:
	;
	break;
	case 7:
	;
	break;
	case 8:
	;
	break;
	case 9:
	;
	break;
	case 10:
	;
	break;
	case 11:
	;
	break;
	case 12:
	;
	break;
	case 13:
	;
	break;
	case 14:
	;
	break;
	case 15:
	;
	break;
	case 16:
	;
	break;
	case 17:
	;
	break;
	case 18:
	;
	break;
	case 19:
	;
	break;
	case 20:
	;
	break;	
	
}
}
function appelcreacoll($fpcrea){
switch ($fpcrea) {
	case 1:
	;
	break;
	case 2:
	;
	break;
	case 3:
	;
	break;
	case 4:
	;
	break;
	case 5:
	;
	break;
	case 6:
	;
	break;
	case 7:
	;
	break;
	case 8:
	;
	break;
	case 9:
	;
	break;
	case 10:
	;
	break;
	case 11:
	;
	break;
	case 12:
	;
	break;
	case 13:
	;
	break;
	case 14:
	;
	break;
	case 15:
	;
	break;
	case 16:
	;
	break;
	case 17:
	;
	break;
	case 18:
	;
	break;
	case 19:
	;
	break;
	case 20:
	;
	break;	
	
}
}
function appelcreamare($fpcrea){
switch ($fpcrea) {
	case 1:
	;
	break;
	case 2:
	;
	break;
	case 3:
	;
	break;
	case 4:
	;
	break;
	case 5:
	;
	break;
	case 6:
	;
	break;
	case 7:
	;
	break;
	case 8:
	;
	break;
	case 9:
	;
	break;
	case 10:
	;
	break;
	case 11:
	;
	break;
	case 12:
	;
	break;
	case 13:
	;
	break;
	case 14:
	;
	break;
	case 15:
	;
	break;
	case 16:
	;
	break;
	case 17:
	;
	break;
	case 18:
	;
	break;
	case 19:
	;
	break;
	case 20:
	;
	break;	
	
}
}
function appelcreafore($fpcrea){
switch ($fpcrea) {
	case 1:
	;
	break;
	case 2:
	;
	break;
	case 3:
	;
	break;
	case 4:
	;
	break;
	case 5:
	;
	break;
	case 6:
	;
	break;
	case 7:
	;
	break;
	case 8:
	;
	break;
	case 9:
	;
	break;
	case 10:
	;
	break;
	case 11:
	;
	break;
	case 12:
	;
	break;
	case 13:
	;
	break;
	case 14:
	;
	break;
	case 15:
	;
	break;
	case 16:
	;
	break;
	case 17:
	;
	break;
	case 18:
	;
	break;
	case 19:
	;
	break;
	case 20:
	;
	break;	
	
}
}
function appelcreamont($fpcrea){
switch ($fpcrea) {
	case 1:
	;
	break;
	case 2:
	;
	break;
	case 3:
	;
	break;
	case 4:
	;
	break;
	case 5:
	;
	break;
	case 6:
	;
	break;
	case 7:
	;
	break;
	case 8:
	;
	break;
	case 9:
	;
	break;
	case 10:
	;
	break;
	case 11:
	;
	break;
	case 12:
	;
	break;
	case 13:
	;
	break;
	case 14:
	;
	break;
	case 15:
	;
	break;
	case 16:
	;
	break;
	case 17:
	;
	break;
	case 18:
	;
	break;
	case 19:
	;
	break;
	case 20:
	;
	break;	
	
}
}
function appelcreasous($fpcrea){
switch ($fpcrea) {
	case 1:
	;
	break;
	case 2:
	;
	break;
	case 3:
	;
	break;
	case 4:
	;
	break;
	case 5:
	;
	break;
	case 6:
	;
	break;
	case 7:
	;
	break;
	case 8:
	;
	break;
	case 9:
	;
	break;
	case 10:
	;
	break;
	case 11:
	;
	break;
	case 12:
	;
	break;
	case 13:
	;
	break;
	case 14:
	;
	break;
	case 15:
	;
	break;
	case 16:
	;
	break;
	case 17:
	;
	break;
	case 18:
	;
	break;
	case 19:
	;
	break;
	case 20:
	;
	break;	
	
}
}