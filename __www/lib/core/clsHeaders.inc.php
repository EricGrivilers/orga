<?php
class headers {
	var $pageId;
	var $templateId;
	var $templateFolder;
	
	
	function init() {
		$db=new DB;
		$db->query="SELECT #__elements.name FROM #__content2page LEFT JOIN #__contents ON #__contents.contentId=#__content2page.contentId LEFT JOIN #__elements ON #__elements.elementId=#__contents.elementId WHERE pageId='".$this->pageId."' OR global='1'  GROUP BY #__contents.elementId";
		$this->contents=$db->setQuery();
	}
	
	
	function getStyles() {
		
		$files=array();
		if(is_dir(__root__."css")) {
			$css1=utils::file_list(__root__."css/", ".css");	
			foreach($css1 as $c) {
				$files[]="css/".$c;
			}
		}
		if(is_dir(__root__."css/blueprint")) {
			$css1=utils::file_list(__root__."css/blueprint/", ".css");	
			foreach($css1 as $c) {
				$files[]="css/blueprint/".$c;
			}
		}
		if(is_dir(__root__."themes/".$this->templateFolder."/css")) {
			$css2=utils::file_list(__root__."themes/".$this->templateFolder."/css/", ".css");
			foreach($css2 as $c) {
				$files[]="themes/".$this->templateFolder."/css/".$c;
			}
		}
		foreach($this->contents as $elem) {
			if(is_dir(__elem__.$elem['name']."/css")) {
				
				$css3=utils::file_list(__elem__.$elem['name']."/css/", ".css");
				foreach($css3 as $c) {
						$files[]="lib/elements/".$elem['name']."/css/".$c;
						if($_SESSION['admin']) {
						//	$files[]="/proxy.php?file=lib/elements/".$elem['name']."/css/".$elemn['name'].".css&filetype=text/css";
						}
				}
			}
		}
			//return $out;
		
			
		
		
		if(__debug__) {
			$out="<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\" />";
			foreach($files as $f) {
					$out.=$this->addCss(__web__.$f);
			}
			return $out;
		}
		else {
			require_once(__root__."lib/core/clsCssMin.inc.php");
			foreach($files as $f) {
				$out.=file_get_contents(__root__.$f);
			}
			$css = CssMin::minify($out);
			file_put_contents(__root__."css/min/main.css", $css);
			return "<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\" />
		<link href=\"".__web__."css/min/main.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />";
		}
		
	}
	
	function addCss($href,$media='screen,projection') {
		return "<link href=\"".$href."\" rel=\"stylesheet\" type=\"text/css\" media=\"".$media."\" />";
	}


	function getScripts() {
		$files=array();
	//	if(!file_exists(__root__."js/min/main.js")) {
			require_once(__root__."lib/core/clsJsMin.inc.php");
			$js=array();
		//$files = scandir(__root__."js/");
			$js1=utils::file_list(__root__."js/", ".js");
			foreach($js1 as $c) {
				if($c!="jsmin.js") {
					if(__debug__) {
						$out.=$this->addJs(__web__."js/".$c);
					}
					else {
						$out.=file_get_contents(__root__."js/".$c);
					}
				}
			}
			foreach($this->contents as $elem) {
				if(is_dir(__elem__.$elem['name']."/js")) {
					$js2=utils::file_list(__elem__.$elem['name']."/js/", ".js");
					foreach($js2 as $c) {
						if(__debug__) {
							$out.=$this->addJs(__web__."lib/elements/".$elem['name']."/js/".$c);
							if($_SESSION['admin']) {
							//	$out.=$this->addJs("/proxy.php?file=lib/elements/".$elem['name']."/js/".$elemn['name'].".js&filetype=text/javascript");
							}
						}
						else {
							$out.=file_get_contents(__root__."lib/elements/".$elem['name']."/js/".$c);
						}
					}
				}
			}
		
		//return $out;
		/*return "<script type=\"text/javascript\" src=\"/min/?f=".implode(',',$js)."\"></script>";*/
		if(__debug__) {
			return $out;
		}
		else {
		
			$js = JsMin::minify($out);
			file_put_contents(__root__."js/min/main.js", $js);
	//	}
		return "<script type=\"text/javascript\" src=\"".__web__."js/min/main.js\"></script>";
		}
	}

	
	function addJs($src) {
		return "<script type=\"text/javascript\" src=\"".$src."\"></script>";
		
	}
	
	
	
	
	


}
?>