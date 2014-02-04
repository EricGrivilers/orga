<?php
    class gallery extends element {
    	
		function display() {
			$templateVars=array();
			$this->content=$out.=template::parse("gallery.tpl",$templateVars);
			return $this->content;
			
		}	
		
		
	}
?>