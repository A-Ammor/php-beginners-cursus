<?php 

	$apen = array("chimp", "makaak", "");

	$aap["naam"] = "Harry";
	$aap["leeftijd"] = 12;

	$nogeenaap["naam"] = "Joost";
	$nogeenaap["leeftijd"] = 13;

	$apen = array($aap, $nogeenaap);

	foreach ($apen as $aap) {
		foreach ($aap as $gegevens) {
			echo $gegevens . "<br>";
		}
	}	
 ?>