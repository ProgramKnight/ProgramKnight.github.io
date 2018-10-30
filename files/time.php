<?php

	date_default_timezone_set("Europe/Amsterdam");
	
	$apple = date("G");
	$weektext = date("l");
	$weeknumber = date("w");
	$todaynumber = date("z")+1;
	$month = date("F");
	$daymonth = date("t");
	$date = date("l j F Y");
	$year = date ("Y");
	$leap = date('L', mktime(0, 0, 0, 1, 1, $year));
	
	switch ($apple) {

    case 0  :
	case 1  :
	case 2  :
	case 3  :
	case 4  :
	case 5  : echo "Het is nacht";	break;
	
    case 6  :
	case 7  :
	case 8  :
	case 9  :
	case 10 :
	case 11 : echo "Het is ochtend";	break;

    case 12 : echo "Het is middag";
	case 13 :
	case 14 :
	case 15 :
	case 16 :
	case 17 : echo "Het is middag";	break;
	case 18 : echo "Het is avond" ; break;
	
	default : echo "Er is een fout, Er hoort hier een statement te staan over de tijd van de dag. Neem contact op met de administrator"; break;

}
	
	echo "<br>Het is vandaag: $date <br>"; 
	
	
	echo "Het is de $todaynumber"."de dag van het jaar<br>";
	
	echo "$weektext is de $weeknumber"."de dag van de week<br>";
	
	echo "De maand $month heeft $daymonth dagen<br>";
	
	echo $year . ' ' . ($leap ? 'is wel' : 'is niet') . ' een schrikkeljaar.';
	
?>