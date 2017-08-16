<?php

function habitant($ale1){
		switch ($ale1) {
		case $ale1<=10;
			$taille=1;
		break;
		case $ale1<=30;
			$taille=2;
		break;
		case $ale1<=20;
			$taille=3;
		break;
		case $ale1<=70;
			$taille=4;
		break;
		case $ale1<=85;
			$taille=5;
		break;
		case $ale1<=95;
			$taille=6;
		break;
		case $ale1<=99;
			$taille=7;
		break;
		case $ale1==100;
			$taille=8;
		break;
		}
	

return $taille;

}

function nbrhab($typevillenum,$nbrhabitant) {
	$nbrhabitantparrace=array(0,0,0,0,0,0,0,0);
	
	if($typevillenum==0) { //isolée
		$nbrhabitantparrace[0]=round($nbrhabitant/100*96);
		$nbrhabitantparrace[1]=round($nbrhabitant/100*2);
		$nbrhabitantparrace[2]=round($nbrhabitant/100*1);
		$nbrhabitantparrace[7]=round($nbrhabitant/100*1);
	}
	else if ($typevillenum==1) { //ouverte
		$nbrhabitantparrace[0]=round($nbrhabitant/100*78);
		$nbrhabitantparrace[1]=round($nbrhabitant/100*9);
		$nbrhabitantparrace[2]=round($nbrhabitant/100*5);
		$nbrhabitantparrace[3]=round($nbrhabitant/100*3);
		$nbrhabitantparrace[4]=round($nbrhabitant/100*3);
		$nbrhabitantparrace[5]=round($nbrhabitant/100*1);
		$nbrhabitantparrace[6]=round($nbrhabitant/100*1);
		$nbrhabitantparrace[7]=round($nbrhabitant/100*1);
	}
	else { //intégrée
		$nbrhabitantparrace[0]=round($nbrhabitant/100*36);
		$nbrhabitantparrace[1]=round($nbrhabitant/100*20);
		$nbrhabitantparrace[2]=round($nbrhabitant/100*18);
		$nbrhabitantparrace[3]=round($nbrhabitant/100*10);
		$nbrhabitantparrace[4]=round($nbrhabitant/100*7);
		$nbrhabitantparrace[5]=round($nbrhabitant/100*5);
		$nbrhabitantparrace[6]=round($nbrhabitant/100*3);
		$nbrhabitantparrace[7]=round($nbrhabitant/100*1);
	}
	
	return $nbrhabitantparrace;
	}
?>