<?php
include ('lib/CLASS_Pieceor.php');
include ('lib/gemme.php');
include ('lib/objart.php');


$potgene = new CLASS_Pieceor();
$gemmes = array();
$objart = array();
$tabgemme=0;
$tabobjart=0;
$total=0;

if(!empty($_POST['FP1'])){
	for($i=0;$i<intval($_POST['FP1']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=14;
		 	break;
		 	case $valeurDemonnaie>=15&&$valeurDemonnaie<=29;
				$potgene->ajouterpc(rand(1,6)*1000);	
			break;
			
			case $valeurDemonnaie>=30&&$valeurDemonnaie<=52;
				$potgene->ajouterpa(rand(1,8)*100);	
			break;
			
			case $valeurDemonnaie>=53&&$valeurDemonnaie<=95;
				$potgene->ajouterpo(rand(2,16)*10);	
			break;
			
			case $valeurDemonnaie>=96&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(1,3)*10);
			break;	
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=90;
			break;
			case $valeurDeprecieu>=91&&$valeurDeprecieu<=95;
				for ($j=0;$j<1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
			for ($k=0;$k<1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
		$valeurDeobm=rand(1, 100);
		switch($valeurDeobm){
			case $valeurDeobm>=1&&$valeurDeobm<=71;
			break;
			case $valeurDeobm>=72&&$valeurDeobm<=95;
				for ($j=0;$j<1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeobm>=96&&$valeurDeobm<=100;
			for ($k=0;$k<1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}
if(!empty($_POST['FP2'])){
	for($i=0;$i<intval($_POST['FP2']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=13;
		 	break;
		 	case $valeurDemonnaie>=14&&$valeurDemonnaie<=23;
				$potgene->ajouterpc(rand(1,10)*1000);	
			break;
			
			case $valeurDemonnaie>=24&&$valeurDemonnaie<=43;
				$potgene->ajouterpa(rand(2,20)*100);	
			break;
			
			case $valeurDemonnaie>=44&&$valeurDemonnaie<=95;
				$potgene->ajouterpo(rand(4,40)*10);	
			break;
			
			case $valeurDemonnaie>=96&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(1,4)*10);
			break;	
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=81;
			break;
			case $valeurDeprecieu>=82&&$valeurDeprecieu<=95;
				for ($j=0;$j<rand(1,3)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,3)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}
if(!empty($_POST['FP3'])){
	for($i=0;$i<intval($_POST['FP3']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=11;
		 	break;
		 	case $valeurDemonnaie>=12&&$valeurDemonnaie<=21;
				$potgene->ajouterpc(rand(2,20)*1000);	
			break;
			
			case $valeurDemonnaie>=22&&$valeurDemonnaie<=41;
				$potgene->ajouterpa(rand(4,32)*100);	
			break;
			
			case $valeurDemonnaie>=42&&$valeurDemonnaie<=95;
				$potgene->ajouterpo(rand(1,4)*100);	
			break;
			
			case $valeurDemonnaie>=96&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(1,6)*10);
			break;	
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=77;
			break;
			case $valeurDeprecieu>=78&&$valeurDeprecieu<=95;
				for ($j=0;$j<rand(1,3)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,3)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}
if(!empty($_POST['FP4'])){
	for($i=0;$i<intval($_POST['FP4']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=11;
		 	break;
		 	case $valeurDemonnaie>=12&&$valeurDemonnaie<=21;
				$potgene->ajouterpc(rand(3,30)*1000);	
			break;
			
			case $valeurDemonnaie>=22&&$valeurDemonnaie<=41;
				$potgene->ajouterpa(rand(4,48)*100);	
			break;
			
			case $valeurDemonnaie>=42&&$valeurDemonnaie<=95;
				$potgene->ajouterpo(rand(1,6)*100);	
			break;
			
			case $valeurDemonnaie>=96&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(1,8)*10);
			break;	
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=70;
			break;
			case $valeurDeprecieu>=71&&$valeurDeprecieu<=95;
				for ($j=0;$j<rand(1, 4)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,3)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}
if(!empty($_POST['FP5'])){
	for($i=0;$i<intval($_POST['FP5']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=10;
		 	break;
		 	case $valeurDemonnaie>=11&&$valeurDemonnaie<=19;
				$potgene->ajouterpc(rand(1,4)*10000);	
			break;
			
			case $valeurDemonnaie>=20&&$valeurDemonnaie<=38;
				$potgene->ajouterpa(rand(1,6)*1000);	
			break;
			
			case $valeurDemonnaie>=39&&$valeurDemonnaie<=95;
				$potgene->ajouterpo(rand(1,8)*100);	
			break;
			
			case $valeurDemonnaie>=96&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(1,10)*10);
			break;	
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=90;
			break;
			case $valeurDeprecieu>=91&&$valeurDeprecieu<=95;
			for ($j=0;$j<rand(1, 4)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}
if(!empty($_POST['FP6'])){
	for($i=0;$i<intval($_POST['FP6']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=10;
		 	break;
		 	case $valeurDemonnaie>=11&&$valeurDemonnaie<=18;
				$potgene->ajouterpc(rand(1,6)*10000);	
			break;
			
			case $valeurDemonnaie>=19&&$valeurDemonnaie<=37;
				$potgene->ajouterpa(rand(1,8)*1000);	
			break;
			
			case $valeurDemonnaie>=38&&$valeurDemonnaie<=95;
				$potgene->ajouterpo(rand(1,10)*100);	
			break;
			
			case $valeurDemonnaie>=96&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(1,12)*10);
			break;	
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=56;
			break;
			case $valeurDeprecieu>=57&&$valeurDeprecieu<=92;
				for ($j=0;$j<rand(1, 4)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=93&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart();
				}	
			break;
			
		}
	}
}
if(!empty($_POST['FP7'])){
	for($i=0;$i<intval($_POST['FP7']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=11;
		 	break;
		 	case $valeurDemonnaie>=12&&$valeurDemonnaie<=18;
				$potgene->ajouterpc(rand(1,10)*10000);	
			break;
			
			case $valeurDemonnaie>=19&&$valeurDemonnaie<=35;
				$potgene->ajouterpa(rand(1,12)*1000);	
			break;
			
			case $valeurDemonnaie>=36&&$valeurDemonnaie<=93;
				$potgene->ajouterpo(rand(2,12)*100);	
			break;
			
			case $valeurDemonnaie>=94&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(3,12)*10);
			break;	
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=48;
			break;
			case $valeurDeprecieu>=49&&$valeurDeprecieu<=88;
				for ($j=0;$j<rand(1,4)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=89&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}
if(!empty($_POST['FP8'])){
	for($i=0;$i<intval($_POST['FP8']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=10;
		 	break;
		 	case $valeurDemonnaie>=11&&$valeurDemonnaie<=15;
				$potgene->ajouterpc(rand(1,12)*10000);	
			break;
			
			case $valeurDemonnaie>=16&&$valeurDemonnaie<=29;
				$potgene->ajouterpa(rand(2,12)*1000);	
			break;
			
			case $valeurDemonnaie>=30&&$valeurDemonnaie<=87;
				$potgene->ajouterpo(rand(2,16)*100);	
			break;
			
			case $valeurDemonnaie>=88&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(3,18)*10);
			break;	
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=45;
			break;
			case $valeurDeprecieu>=46&&$valeurDeprecieu<=85;
				for ($j=0;$j<rand(1,6)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=86&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP9'])){
	for($i=0;$i<intval($_POST['FP9']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=10;
		 	break;
		 	case $valeurDemonnaie>=11&&$valeurDemonnaie<=15;
				$potgene->ajouterpc(rand(2,12)*10000);	
			break;
			
			case $valeurDemonnaie>=16&&$valeurDemonnaie<=29;
				$potgene->ajouterpa(rand(2,16)*1000);	
			break;
			
			case $valeurDemonnaie>=30&&$valeurDemonnaie<=85;
				$potgene->ajouterpo(rand(5,20)*100);	
			break;
			
			case $valeurDemonnaie>=86&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(2,24)*10);
			break;	
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=40;
			break;
			case $valeurDeprecieu>=41&&$valeurDeprecieu<=80;
				for ($j=0;$j<rand(1,8)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=81&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP10'])){
	for($i=0;$i<intval($_POST['FP10']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=10;
		 	break;
		 	case $valeurDemonnaie>=11&&$valeurDemonnaie<=24;
				$potgene->ajouterpa(rand(2,20)*1000);	
			break;
			
			case $valeurDemonnaie>=25&&$valeurDemonnaie<=79;
				$potgene->ajouterpo(rand(6,24)*100);	
			break;
			
			case $valeurDemonnaie>=80&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(5,30)*10);	
			break;
			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=35;
			break;
			case $valeurDeprecieu>=36&&$valeurDeprecieu<=79;
				for ($j=0;$j<rand(1,8)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=80&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,6)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP11'])){
	for($i=0;$i<intval($_POST['FP11']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=8;
		 	break;
		 	case $valeurDemonnaie>=9&&$valeurDemonnaie<=14;
				$potgene->ajouterpa(rand(3,30)*1000);	
			break;
			
			case $valeurDemonnaie>=15&&$valeurDemonnaie<=75;
				$potgene->ajouterpo(rand(4,32)*100);	
			break;
			
			case $valeurDemonnaie>=76&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(4,40)*10);	
			break;
			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=24;
			break;
			case $valeurDeprecieu>=25&&$valeurDeprecieu<=74;
				for ($j=0;$j<rand(1,10)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=75&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,6)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP12'])){
	for($i=0;$i<intval($_POST['FP12']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=8;
		 	break;
		 	case $valeurDemonnaie>=9&&$valeurDemonnaie<=14;
				$potgene->ajouterpa(rand(3,36)*1000);	
			break;
			
			case $valeurDemonnaie>=15&&$valeurDemonnaie<=75;
				$potgene->ajouterpo(rand(1,4)*1000);	
			break;
			
			case $valeurDemonnaie>=76&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(1,4)*100);	
			break;
			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=17;
			break;
			case $valeurDeprecieu>=18&&$valeurDeprecieu<=70;
				for ($j=0;$j<rand(1,10)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=71&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,8)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}


if(!empty($_POST['FP13'])){
	for($i=0;$i<intval($_POST['FP13']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=8;
		 	break;
		 	case $valeurDemonnaie>=9&&$valeurDemonnaie<=75;
				$potgene->ajouterpo(rand(1,4)*1000);	
			break;
			
			case $valeurDemonnaie>=76&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(1,10)*100);	
			break;			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=17;
			break;
			case $valeurDeprecieu>=18&&$valeurDeprecieu<=70;
				for ($j=0;$j<rand(1,12)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=71&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(1,10)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP14'])){
	for($i=0;$i<intval($_POST['FP14']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=8;
		 	break;
		 	case $valeurDemonnaie>=9&&$valeurDemonnaie<=75;
				$potgene->ajouterpo(rand(1,6)*1000);	
			break;
			
			case $valeurDemonnaie>=76&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(1,12)*100);	
			break;			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=11;
			break;
			case $valeurDeprecieu>=12&&$valeurDeprecieu<=66;
				for ($j=0;$j<rand(2,16)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=67&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(2,12)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP15'])){
	for($i=0;$i<intval($_POST['FP15']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=3;
		 	break;
		 	case $valeurDemonnaie>=4&&$valeurDemonnaie<=74;
				$potgene->ajouterpo(rand(1,8)*1000);	
			break;
			
			case $valeurDemonnaie>=75&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(3,12)*100);	
			break;			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=9;
			break;
			case $valeurDeprecieu>=10&&$valeurDeprecieu<=65;
				for ($j=0;$j<rand(2,20)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=66&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(2,16)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP16'])){
	for($i=0;$i<intval($_POST['FP16']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=3;
		 	break;
		 	case $valeurDemonnaie>=4&&$valeurDemonnaie<=74;
				$potgene->ajouterpo(rand(1,12)*1000);	
			break;
			
			case $valeurDemonnaie>=75&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(3,12)*100);	
			break;			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=7;
			break;
			case $valeurDeprecieu>=8&&$valeurDeprecieu<=64;
				for ($j=0;$j<rand(4,24)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=65&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(2,20)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP17'])){
	for($i=0;$i<intval($_POST['FP17']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=3;
		 	break;
		 	case $valeurDemonnaie>=4&&$valeurDemonnaie<=68;
				$potgene->ajouterpo(rand(3,12)*1000);	
			break;
			
			case $valeurDemonnaie>=69&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(2,20)*100);	
			break;			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=4;
			break;
			case $valeurDeprecieu>=5&&$valeurDeprecieu<=63;
				for ($j=0;$j<rand(4,32)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=64&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(3,24)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP18'])){
	for($i=0;$i<intval($_POST['FP18']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=2;
		 	break;
		 	case $valeurDemonnaie>=3&&$valeurDemonnaie<=65;
				$potgene->ajouterpo(rand(3,18)*1000);	
			break;
			
			case $valeurDemonnaie>=66&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(5,20)*100);	
			break;			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=4;
			break;
			case $valeurDeprecieu>=5&&$valeurDeprecieu<=54;
				for ($j=0;$j<rand(3,36)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=55&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(3,30)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}


if(!empty($_POST['FP19'])){
	for($i=0;$i<intval($_POST['FP19']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=2;
		 	break;
		 	case $valeurDemonnaie>=3&&$valeurDemonnaie<=65;
				$potgene->ajouterpo(rand(3,24)*1000);	
			break;
			
			case $valeurDemonnaie>=66&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(3,30)*100);	
			break;			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=3;
			break;
			case $valeurDeprecieu>=4&&$valeurDeprecieu<=50;
				for ($j=0;$j<rand(6,36)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=51&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(6,36)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}

if(!empty($_POST['FP20'])){
	for($i=0;$i<intval($_POST['FP20']);$i++){
		 $valeurDemonnaie=rand(1,100);
		 switch ($valeurDemonnaie){
		 	case $valeurDemonnaie>=1&&$valeurDemonnaie<=2;
		 	break;
		 	case $valeurDemonnaie>=3&&$valeurDemonnaie<=65;
				$potgene->ajouterpo(rand(4,32)*1000);	
			break;
			
			case $valeurDemonnaie>=66&&$valeurDemonnaie<=100;
				$potgene->ajouterpp(rand(4,40)*100);	
			break;			
		}
		$valeurDeprecieu=rand(1,100);
		switch($valeurDeprecieu){
			case $valeurDeprecieu>=1&&$valeurDeprecieu<=2;
			break;
			case $valeurDeprecieu>=3&&$valeurDeprecieu<=38;
				for ($j=0;$j<rand(4,40)+1;$j++,$tabgemme++){
					$gemmes[$tabgemme]=creergemme();
				}
			break;
			case $valeurDeprecieu>=39&&$valeurDeprecieu<=100;
			for ($k=0;$k<rand(7,42)+1;$k++,$tabobjart++){	
				$objart[$tabobjart]=creerobjart();
			}
			break;
			
		}
	}
}
echo '<h1>Trésor</h1>';
if ($potgene->getPc()>0||$potgene->getPa()>0||$potgene->getPo()>0||$potgene->getPp()>0){
	echo '<h2>Piéces</h2>';
	echo $potgene->afficher();
}
$total+=$potgene->getPo();
$total+=($potgene->getPp())*10;
$total+=($potgene->getPa())/10;
$total+=($potgene->getPc())/100;

if(count($gemmes)!=0){
	echo '<h2>'.count($gemmes).' pierres précieuse</h2>';
	foreach ($gemmes as &$value) {
		echo 'Une pierre de type '.$value[0].' d\'une valeur de '.$value[1].' piéce d\'or <br />';
		$total+=$value[1];
	}
}
if(count($objart)!=0){
	echo '<h2>'.count($objart).' objets arts</h2>';
	foreach ($objart as &$value) {
		echo 'Un objet d\'art : '.$value[0].' d\'une valeur de '.$value[1].' piéce d\'or <br />';
		$total+=$value[1];
	}
}

if($total!=0){
	echo '<h2>Valeur total du trésor</h2>';
	echo $total.' pieces d\'or';
}
else echo 'Malheuresement cette rencontre n\'a généré aucun trésor';


?>