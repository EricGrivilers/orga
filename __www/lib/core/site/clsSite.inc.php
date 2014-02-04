<?php

class site {

	function setLanguage() {
		if(isset($_GET['language'])) {
			$_SESSION['language']=$_GET['language'];
		}
		if(empty($_SESSION['language'])) {
			$_SESSION['language']=$this->language;
		}
	}
	
	
}
?>