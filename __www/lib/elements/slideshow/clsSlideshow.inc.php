<?php


class slideshow extends element {

	
	
	function display() {
		
		$this->content=$this->getSlider();
		return $this->content;
	}
	
	
	function getSlider() {
		$out="<div class='slider'>sli";
		$out.=$this->getSlides();
		$out.="</div>";
		return $out;
	}
	
	
	function getSlides() {
		$colors=array('red','blue','green','orange','purple');
		//for($i=0;$i<5;$i++) {
		for($i=0;$i<1;$i++) {
			$out.= "<div><div style='background-color:".$colors[$i].";width:100%;height:100%;color:#fff;font-weight:bold;'>hdeh jzehkjazhe ------".$i."------- dj kljlkjlsdqs qsdjlsjdlk</div></div>";	
		}
		return $out;
	}
	
}




?>