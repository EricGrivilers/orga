<?php

class page {

	public $pageId;
	
	public $templateId;
	public $templateFile;
	public $templateName;
	public $templateFolder;
	public $rank;
	

	
	

	public $areas=array();
	public $contents=array();
	public $styles=array();
	public $jss=array();
	
	private $parentId;
	private $title;
	private $keywords;
	private $description;
	
	
	
	function init() {
		$this->parseUrl();
		if(empty($_GET['pageId'])) {
			$db=new DB;
			$db->query="SELECT pageId FROM #__pages WHERE isHomepage='1'";
			$_GET['pageId']=$db->setQuery('first','pageId');
		}
		
		$this->pageId=$_GET['pageId'];
		$this->addOns[]="<input type='hidden' id='pageId' value='".$_GET['pageId']."' />";
		
		$this->getContents();
		
		echo $this->getTemplate();
		
	}
	
	function isFolder($pageId) {
		$isFolder=0;
		$pid=0;
		$db=new DB;
		$db->query="SELECT a.pageId,a.isFolder,count(b.parentId) as pid FROM #__pages a LEFT JOIN #__pages b ON b.parentId=a.pageId WHERE a.pageId='".$pageId."' GROUP BY b.parentId ";
		$row=$db->setQuery('first');
		//echo $db->query;
		$isFolder=$row['isFolder'];
		$pid=$row['pid'];
		if($isFolder>0 && $pid>0) {
			while($isFolder==1 && $pid>0) {
				$db=new DB;
				$db->query="SELECT a.pageId,a.isFolder,count(b.parentId) as pid,dst FROM #__pages a LEFT JOIN #__pages b ON b.parentId=a.pageId LEFT JOIN #__aliases ON #__aliases.src=CONCAT('pageId=',a.pageId) WHERE a.parentId='".$pageId."' GROUP BY b.pageId ORDER BY a.rank ";
				$row=$db->setQuery('first');
				$isFolder=$row['isFolder'];
				$pid=$row['pid'];
				$dst=$row['dst'];
				$pageId=$row['pageId'];
			}
			header("location:/".$dst);
		}
	}
	
	function parseUrl() {
		$db=new DB;
		$db->query="SELECT src,title,keywords,description from #__aliases WHERE dst='".$_GET['q']."' LIMIT 0,1";
		$row=$db->setQuery('first');
		if(is_array($row)) {
			$va=explode("&",$row['src']);
			foreach($va as $q)  {
				$t=explode("=",$q);
				$_GET[$t[0]]=$t[1];
			}
			$this->isFolder($_GET['pageId']);
		
			//title,keywords,description
			foreach($row as $t=>$q) {
				$this->$t=$q;
			}
		}
	}
	
	
	function getTemplate() {
		$db=new DB;
		$db->query="SELECT #__templates.templateId,#__templates.filename AS templateFile,#__templates.folder AS templateFolder,#__templates.areas AS templateAreas,#__templates.name as templateName from #__pages LEFT JOIN #__templates ON #__templates.templateId=#__pages.templateId where #__pages.pageId='".$this->pageId."'";
		$row=$db->setQuery('first');
		$this->templateFolder=$row['folder'];
		foreach($row as $t=>$q) {
				$this->$t=$q;
		}
	
		Twig_Autoloader::register();
		//$loader = new Twig_Loader_Filesystem(__lib__."templates/".$this->templateFolder);
		$loader = new Twig_Loader_Filesystem(__root__."themes/".$this->templateFolder);
		if(__debug__) {
			$cache=false;
		}
		else {
			$cache=	__root__.'cache';
		}
		$twig = new Twig_Environment($loader, array(
		  'cache' => $cache,
		  'debug'=>__debug__
		));
		
		$template = $twig->loadTemplate($this->templateFile);
		$this->areas=explode(',',$this->templateAreas);
		
		
		
		foreach($this->areas as $area) {
			$this->templateVars[$area]=$this->getElements($area);
			//$template->set_var($area, $page->getElements($area));
		}
		
		$headers=new headers;
		$headers->pageId=$_GET['pageId'];
		$headers->templateFolder=$this->templateFolder;
		$headers->init();
		
		
		$this->styles=$headers->getStyles();
		$this->scripts=$headers->getScripts();
		//$scripts.=$headers->addJs("http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit");
		
		
		/*
		if($_SESSION['admin']) {
			$this->styles.=$headers->addCss("/proxy.php?file=css/main.css&filetype=text/css","screen");
			$this->styles.=$headers->addCss("/proxy.php?file=css/jquery-ui-1.8.5.custom.css&filetype=text/css","screen");
			$this->styles.=$headers->addCss("/proxy.php?file=css/jquery.treeview.css&filetype=text/css","screen");
			$this->styles.=$headers->addCss("/proxy.php?file=css/jquery.wysiwyg.css&filetype=text/css","screen");
			$this->styles.=$headers->addCss("/proxy.php?file=css/uploadify.css&filetype=text/css","screen");


			$this->scripts.=$headers->addJs("/proxy.php?file=js/jquery-ui-1.8.5.custom.min.js&filetype=text/javascript");
			$this->scripts.=$headers->addJs("/proxy.php?file=js/jquery.treeview.min.js&filetype=text/javascript");
			$this->scripts.=$headers->addJs("/proxy.php?file=js/swfobject.js&filetype=text/javascript");
			$this->scripts.=$headers->addJs("/proxy.php?file=js/jquery.uploadify.v2.1.0.min.js&filetype=text/javascript");
			$this->scripts.=$headers->addJs("/proxy.php?file=js/main.js&filetype=text/javascript");
			$this->scripts.=$headers->addJs("/proxy.php?file=js/jquery.wysiwyg.js&filetype=text/javascript");
			$this->scripts.=$headers->addJs("/proxy.php?file=js/jquery.tipsy.js&filetype=text/javascript");
			
			$this->scripts.=$headers->addJs("/proxy.php?file=lib/core/page/js/page.js&filetype=text/javascript");
			$this->scripts.=$headers->addJs("/proxy.php?file=lib/core/browser/js/browser.js&filetype=text/javascript");
			$this->scripts.=$headers->addJs("/proxy.php?file=lib/core/element/js/element.js&filetype=text/javascript");
		
		}
		*/
		
		
		foreach($this as $k=>$v) {
			if(!in_array($k,$this->areas) && $k!='templateVars') {
				$this->templateVars[$k]=$v;
			}
		}		
		$this->templateVars['webRoot']=__web__;
		$this->templateVars['__web__']=__web__;
		$this->templateVars['addOns']=implode("",$this->addOns);
		
		/*
		$this->templateVars['styles']=$this->styles;
		$this->templateVars['scripts']=$this->scripts;
		
		$this->templateVars['title']=$this->title;
		$this->templateVars['keywords']=$this->keywords;
		$this->templateVars['description']=$this->description;
		$this->templateVars['language']=$_SESSION['language'];
		*/
		
		$out=$template->render($this->templateVars);
		if(!__debug__) {
			$out= preg_replace("/\\n/","",$out);
		}
		return $out;
	}
	
	
	
	
	
	
	function getContents() {
			$db=new DB;
			$db->query="SELECT #__contents.*,#__content2page.rank,#__content2page.area,#__content2page.public as isVisible, #__elements.name as elementName,#__elements.label as elementLabel,#__elements.type FROM #__contents LEFT JOIN #__content2page ON #__content2page.contentId=#__contents.contentId LEFT JOIN #__elements ON #__elements.elementId=#__contents.elementId WHERE (pageId='".$this->pageId."' OR #__contents.global='1') ";
			if(!$_SESSION['admin']) {
				$q.=" AND  #__content2page.public='1' ";
			}
			$db->query.="ORDER BY #__content2page.rank";
			
			$rows=$db->setQuery();
		//	echo $db->query;
	
			
			$rank=1;
			foreach($rows as $row) {
				$row['params']=json_decode($row['params']);
				$row['styles']=json_decode($row['styles']);
				//$area=$row['area'];

				if($this->toDisplay($row['params'])) {
					//$this->contents[$area][$row['rank']]=$row;
					//$this->contents[$area][$row['rank']]['styles']=$styles;
					//$this->contents[$area][$row['rank']]['params']=$params;
					
					//$row['styles']=$styles;
					//$row['params']=$params;
					$this->contents[$row['area']][]=$row;
					//$this->contents[$area][$rank]['styles']=$styles;
				//	$this->contents[$area][$rank]['params']=$params;
				}
				$rank++;
				
			}
	
	}
	
	
	function getElements($area,$out='') {

		//$counter=1;
		//$out='';
		if(!isset($_SESSION['user'])) {
			if($area=='content') {
			$element=new user;
			$out=$element->login();
			}
			return $out;
		}
		if($this->contents[$area]) {
		
			foreach($this->contents[$area] as $content) {
				$element=new element;
				foreach($content as $k=>$v) {
					$element->$k=$v;
				}
				$element->area=$area;
				$element->templateFolder=$this->templateFolder;
			//	$element->elementTitle=$content['title'];
			//	$element->elementContent=$content['content'];
				$out.=$element->getContent();
				//$this->styles[]=$element->getStyles();
			//	$counter++;
			}
		}
		
		return $out;
			
	}
	
	
	function toDisplay($params) {
		$excludedPages=array();
		if($params->ePP>0) {
			$db=new DB;
			$db->query="SELECT pageId FROM #__pages WHERE parentId='".$params->ePP."'";
			$pages=$db->setQuery();
			
			foreach($pages as $k=>$page) {
				$excludedPages[]=$page['pageId'];
			}
		}
		//if(in_array($_GET['pageId'],$excludedPages)) {
		if(in_array($this->pageId,$excludedPages)) {
			return false;
		}
		return true;
	}

}
?>