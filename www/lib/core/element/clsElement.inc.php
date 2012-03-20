<?php

//TODO tes/

/* TODO - jump height */

#TODO dddd

class element extends page {

	var $elementId;
	var $elementName;
	var $elementTitle;
	public $title;
	var $counter;
	var $area;
	var $classes;
	var $contentId;
	public $content;
	var $params;
	var $styles;
	var $db;
	var $isVisible;

	
	var $margins=array('margin-top','margin-right','margin-bottom','margin-left');
		
					
	function element() {
		//$_SESSION['elements'][]=get_class($this);
	
	}
	
	function getContent() {
			
			$out="<div ";
			$cl=array();
			if(!empty($this->classes)) {
				
				$cl[]=$this->classes;
			}
			$cl[]="element";
			$cl[]=$this->elementName;
			//$cl[]=$this->elementName;
			if($_SESSION['admin']) {
				$out.=" id='element_".$this->area."_".$this->counter."_".$this->contentId."_".$this->elementId."' ";
				$cl[]="admin_element";
				$cl[]="admin_".$this->elementName;
				$cl[]=$this->elemType;
			}
			$out.="class=\"".implode(" ", $cl)."\" ";
			if($_SESSION['admin']) {
				$out.=" title=\"".$this->elementLabel."\" ";
				$out.=" rel=\"".$this->elementName."\" ";
			}
			if($this->styles) {
				$out.=" style=\"";
				foreach($this->styles as $k=>$v) {
						if($v!=='') {
							if(in_array($k,$this->margins)) {
								$v.='px';
							}
							$out.=$k.":".$v.";";
						}
					}
					$out.="\"";
			}
			$out.=">";
			
			if($this->isVisible==1) {
				require_once(__lib__."elements/".$this->elementName."/cls".ucfirst($this->elementName).".inc.php");
				$myElement=new $this->elementName;
				$myElement->params=$this->params;
				if($this->params) {
					$myElement->paramsArray=array();
					foreach($this->params as $k=>$v) {
						if($v!=='') {
							$myElement->$k=stripslashes($v);
							$myElement->paramsArray[$k]=stripslashes($v);
						}
					}
				}
				if($this->styles) {
					$myElement->stylesArray=array();
					foreach($this->styles as $k=>$v) {
						if($v!=='') {
							$myElement->stylesArray[$k]=stripslashes($v);
						}
					}
				}
				
				
				$myElement->func=$this->elementFunc;
				$myElement->content=$this->content;
				$myElement->contentId=$this->contentId;
				$myElement->templateFolder=$this->templateFolder;
				if($this->title!='') {
					$out.="<h2>".$this->title."</h2>";
				}
			
				($myElement->func)?$out.=call_user_func(array($myElement,$myElement->func)):$out.=$myElement->display();
				
				/*
				if($myElement->func) {
					$out.=call_user_func(array($myElement,$myElement->func));
				}
				else {
					$out.=$myElement->display();
				}*/
			}
			$out.="</div>";
		
		
		
		return $out;
	}
	
	
}

?>