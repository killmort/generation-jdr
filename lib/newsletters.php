<?php
function newletters($mail){
	$monfichier = fopen('mail/mail.txt', 'a+');
	fputs($monfichier, $mail);
	fputs($monfichier, ";"); 
	fclose($monfichier);
}

?>