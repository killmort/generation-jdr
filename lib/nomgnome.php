<?php 
function getnomgnome() {
	$table1=rand(1,4);
	$table2= array("add","arum","baer","bar","callad","chik","dal","din","eaus","enn","erf","faer","fen","flan","gaer","gar","hed","herl","ien","jan","kaer","len","lun","mikk","neb","oaen","ow","pall","pin","raer","ras","seg","skor","tikk","uran","urd","van","var","wann","wed");
	$table3=array ("Acier","Appeleur","Argen","Bière","Blaireau","Boucle","Brille","Buveur","Cape","Cendre","Coeur","Colline","Eclair","Enjambeur","Errant","Fantôme","Faux-pas","Fer","Gemme","Honneur","Leste","Lune","Main","Oeil","Ombre","Or","Os","Paresse","Peau","Péllant","Petit","Pied","Pierre","Rapide","Renard","Rieur","Ruse","Sauvage","Soleil","Soupir","Terre");
	$nom='';
	switch ($table1) {
		case 1:
		$nom=$table2[rand(0,count($table2)-1)].$table2[rand(0,count($table2)-1)];
		break;
		case 2:
		$nom=$table2[rand(0,count($table2)-1)].$table2[rand(0,count($table2)-1)].$table2[rand(0,count($table2)-1)];
		break;
		case 3:
		$nom=$table2[rand(0,count($table2)-1)].$table2[rand(0,count($table2)-1)].$table2[rand(0,count($table2)-1)]." ".$table3[rand(0,count($table3)-1)];
		break;
		case 4:
		$nom=$table2[rand(0,count($table2)-1)].$table2[rand(0,count($table2)-1)].$table2[rand(0,count($table2)-1)].$table2[rand(0,count($table2)-1)]." ".$table3[rand(0,count($table3)-1)];
		break;
	}
	
	return ucfirst($nom);
}
?>