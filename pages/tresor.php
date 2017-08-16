<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/CLASS_Pieceor.php');
include ('lib/gemme.php');
include ('lib/objart.php');
include ('lib/compteur.php');
require_once ('lib/objnm.php');
require_once ('lib/obm.php');


$potgene = new CLASS_Pieceor();
$gemmes = array();
$objart = array();
$objnm = array();
$objmaj = array();
$tabgemme=0;
$tabobjart=0;
$total=0;
if(!empty($_POST)){
	
	if(!empty($_POST['FP1'])&&$_POST['FP1']!=0){
		compteur('tresor');
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
				for ($k=0;$k<1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
				
			}
		}
		getItems(1, intval($_POST['FP1']), $objnm, $objmaj);
	}
	if(!empty($_POST['FP2'])&&$_POST['FP2']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,3)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;	
			}
			getItems(2, intval($_POST['FP2']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP3'])&&$_POST['FP3']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,3)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(3, intval($_POST['FP3']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP4'])&&$_POST['FP4']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,3)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(4, intval($_POST['FP4']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP5'])&& $_POST['FP5']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=96&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(5, intval($_POST['FP5']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP6'])&& $_POST['FP6']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=93&&$valeurDeprecieu<=100;
					for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){	
						$objart[$tabobjart]=creerobjart(0);
					}	
				break;
			}
			getItems(6, intval($_POST['FP6']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP7']) && $_POST['FP7']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=89&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(7, intval($_POST['FP7']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP8'])&&$_POST['FP8']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=86&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(8, intval($_POST['FP8']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP9'])&&$_POST['FP9']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=81&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,4)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(9, intval($_POST['FP9']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP10'])&&$_POST['FP10']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=80&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,6)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(10, intval($_POST['FP10']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP11'])&& $_POST['FP11']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=75&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,6)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(11, intval($_POST['FP11']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP12'])&&$_POST['FP12']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=71&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,8)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(12, intval($_POST['FP12']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP13'])&&$_POST['FP13']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=71&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(1,10)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(13, intval($_POST['FP13']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP14'])&&$_POST['FP14']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=67&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(2,12)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(14, intval($_POST['FP14']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP15'])&&$_POST['FP15']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=66&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(2,16)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;				
			}
			getItems(15, intval($_POST['FP15']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP16'])&&$_POST['FP16']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=65&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(2,20)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(16, intval($_POST['FP16']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP17'])&&$_POST['FP17']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=64&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(3,24)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(17, intval($_POST['FP17']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP18'])&&$_POST['FP18']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=55&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(3,30)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(18, intval($_POST['FP18']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP19'])&&$_POST['FP19']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=51&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(6,36)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(19, intval($_POST['FP19']), $objnm, $objmaj);
		}
	}
	if(!empty($_POST['FP20'])&&$_POST['FP20']!=0){
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
						$gemmes[$tabgemme]=creergemme(0);
					}
				break;
				case $valeurDeprecieu>=39&&$valeurDeprecieu<=100;
				for ($k=0;$k<rand(7,42)+1;$k++,$tabobjart++){	
					$objart[$tabobjart]=creerobjart(0);
				}
				break;
			}
			getItems(20, intval($_POST['FP20']), $objnm, $objmaj);
		}
}
$output='';
$output.='<h2>Trésor</h2>';
if ($potgene->getPc()>0||$potgene->getPa()>0||$potgene->getPo()>0||$potgene->getPp()>0){
	$output.= '<h2>Pièces</h2>';
	$output.= $potgene->afficher();
}
$total+=$potgene->getPo();
$total+=($potgene->getPp())*10;
$total+=($potgene->getPa())/10;
$total+=($potgene->getPc())/100;

if(count($gemmes)!=0){
	
	if (count($gemmes)>1) $output.= '<h2>'.count($gemmes).' pierres précieuses</h2>';
	else $output.= '<h2>'.count($gemmes).' pierre précieuse</h2>';
	
	foreach ($gemmes as &$value) {
		$output.= '-'.$value[0].' d\'une valeur de '.$value[1].' pièces d\'or <br />';
		$total+=$value[1];
	}
}
if(count($objart)!=0){
	
	if (count($objart)>1) $output.= '<h2>'.count($objart).' objets arts</h2>';
	else $output.= '<h2>'.count($objart).' objet art</h2>';
	
	foreach ($objart as &$value) {
		$output.= '-'.$value[0].' d\'une valeur de '.$value[1].' pièces d\'or <br />';
		$total+=$value[1];
	}
}

if(count($objnm)!=0){
	
	if (count($objnm)>1) $output.= '<h2>'.count($objnm).' objets non magiques</h2>';
	else $output.= '<h2>'.count($objnm).' objet non magique</h2>';
	foreach ($objnm as &$value) {
		$output.= '-'.$value[0].' d\'une valeur de '.$value[1].' pièces d\'or <br />';
		$total+=$value[1];
	}
}

if(count($objmaj)!=0){
	
	if (count($objmaj)>1) $output.= '<h2>'.count($objmaj).' objets magiques</h2>';
	else $output.= '<h2>'.count($objmaj).' objet magique</h2>';
		
	foreach ($objmaj as &$value) {
		$output.= '-'.$value[0].' d\'une valeur de '.$value[1].' pièces d\'or <br />';
		$total+=$value[1];
	}
}

if($total!=0){
	$output.= '<h2>Valeur total du trésor</h2>';
	$output.= $total.' pieces d\'or';
}
else $output.= 'Malheuresement cette rencontre n\'a généré aucun trésor';

$output.= '	<form method="post" onsubmit="return valid2();" action="index.php?page=tresor">';
	foreach ($_POST as $key=>$val){
	$output.= "<input type='hidden' name='".$key."' value='".$val."'>";
	}
$output.= '<input type="submit" name="genere" value="Générer le même trésor" />';
$output.= '<input type="button" value="Générer un autre trésor"  OnClick="window.location.href='."'index.php?page=tresor'".'"></form>';

echo $output;

}
else {

	$output ='';
	$output.='<h2>Valeur en FP de la rencontre</h2>';
	$output.='<form method="post" onsubmit="return valid2();" action="index.php?page=tresor">
		<table>
			<tr><td><label>FP1:</label></td><td><input type="text" id="FP1" name="FP1" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP11:</label></td><td><input type="text" id="FP11" name="FP11" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td>&nbsp;<font id="msgErreur" color="red"></tr>
			<tr><td><label>FP2:</label></td><td><input type="text" id="FP2" name="FP2" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP12:</label></td><td><input type="text" id="FP12" name="FP12" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td></tr>
			<tr><td><label>FP3:</label></td><td><input type="text" id="FP3" name="FP3" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP13:</label></td><td><input type="text" id="FP13" name="FP13" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td></tr>
			<tr><td><label>FP4:</label></td><td><input type="text" id="FP4" name="FP4" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP14:</label></td><td><input type="text" id="FP14" name="FP14" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td></tr>
			<tr><td><label>FP5:</label></td><td><input type="text" id="FP5" name="FP5" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP15:</label></td><td><input type="text" id="FP15" name="FP15" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td></tr>
			<tr><td><label>FP6:</label></td><td><input type="text" id="FP6" name="FP6" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP16:</label></td><td><input type="text" id="FP16" name="FP16" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td></tr>
			<tr><td><label>FP7:</label></td><td><input type="text" id="FP7" name="FP7" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP17:</label></td><td><input type="text" id="FP17" name="FP17" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td></tr>
			<tr><td><label>FP8:</label></td><td><input type="text" id="FP8" name="FP8" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP18:</label></td><td><input type="text" id="FP18" name="FP18" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td></tr>
			<tr><td><label>FP9:</label></td><td><input type="text" id="FP9" name="FP9" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP19:</label></td><td><input type="text" id="FP19" name="FP10" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td></tr>
			<tr><td><label>FP10:</label></td><td><input type="text" id="FP10" name="FP10" value="" OnPaste="return false" onKeyUp="javascript:filter_numeric(this);"/></td><td><label>FP20:</label></td><td><input type="text" id="FP20" name="FP20" value="" OnPaste="return false;" onKeyUp="javascript:filter_numeric(this);"/></td></tr>
			
			<tr><td align="center" colspan="4"><input type="submit" name="generer" value="Générer" /></td></tr>		
		</table></form>';
	echo $output;
}
?>
