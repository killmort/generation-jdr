<?php
function getprenomelfehom() {
	$prenomdrow = array("Yazston","Merinid","Solaufein","Baragh","Nhaundar","Nilomim","Antatlab","Szordrin","Dipree","Amalica","Tsabrak","Jeggred","Relonor","Tathyn","Urlryn","Pharaun","Tarlyn","Riklaunim","Ilphrin","Rizzen","Chaszmyr","Shar","Tluth","Houndaer","Dinin","Ryld","Sabrar","Mourn","Istovir","Belgos","Istolil","Orgoloth","Elkantar","Valas","Jarlaxe","Gelroos","Duagolth","Quevven","Sorn","Kalannar","Yazston","Wode","Drizzt","Ghaundan","Bhintel","Tebryn","Quild","Alak","Vuzlyn","Nalfein","Nym","Adinirach","Seldszar","Filraen","Guldor","Durdyn","Ilmryn","Alton","Nadal","Ranaghar","Welverin","Hatch'net","Masoj","Vorn","Krenaste","Ryltar","Kelnozz","Omareth","Malaggar","Zaknafein","Berg'inyon","Calimar","Lyme","Bruherd","Krondorl","Gomph");
return $prenomdrow[rand(0,count($prenomdrow)-1)];
}

