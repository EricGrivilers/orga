<?php

class shared {
	
	var $countries=array("Allemagne","Bengladesh","Belgique","Chine","Espagne","France","Italie","Luxembourg","Monaco","Nederland","Suisse");
	
	function bool($b) {
		if($b==1) {
			return 'oui';
		}
		else {
			return 'non';
		}
	}
}


?>
