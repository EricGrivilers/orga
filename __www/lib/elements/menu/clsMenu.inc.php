<?php

class menu extends element {


	
	var $level=0;
	var $levelDepth=100;
	var $mainParentId=0;
	
	var $attributes;
	var $content;
	var $menuArray=array();
	var $homepageId;
	
	var $parents=array();
	var $excludedPages=array();
	var $onlySelected=0;
	
	
	
	function display() {
		$this->pageId=$_GET['pageId'];
		$this->getPages();
		
		//print_r($this);
		return $this->content;
	}
	
	
	
	function getPages() {
		$db=new DB;
		$db->query="SELECT *,#__pages.title as pageTitle,#__aliases.dst as alias FROM #__pages LEFT JOIN #__aliases ON #__aliases.src=CONCAT('pageId=',#__pages.pageId) WHERE language='".$_SESSION['language']."' OR language='' ORDER BY parentId,rank DESC ";
		$rows=$db->setQuery();
		//echo $db->query;
		$rank=1;
		$pId=$rows[0]['parentId'];
		foreach($rows as $k=>$row) {
			if($pId!=$row['parentId']) {$rank=1;}
			$this->menuArray[$row['parentId']][$rank]=$row;
			if($row['isHomepage']==1) {
				$this->homepageId=$row['pageId'];
			}
			$rank++;
			$pId=$row['parentId'];
		}
		
		$this->getParent($this->pageId);
		
		
		if(empty($_GET['rootParent'])) {
			$_GET['rootParent']=$this->parents[count($this->parents)-1];
		}
		if(empty($this->mainParentId)) {
			$this->mainParentId=$this->params->parentId;
			if(empty($this->mainParentId)) {$this->mainParentId=0;}
		}
		//echo $this->mainParentId."/";
		
		if($this->mainParentId==='*') {
			$this->mainParentId=$_GET['rootParent'];
		}
		
		$this->content=$this->getMenu($this->mainParentId,$this->level);
		
		/*echo "<pre>";
		print_r($this->menuArray);
		echo "</pre>";
		 * 
		 */
	}
	
	
	function getMenu($parentId,$level) {
	
	//	$out="<ul class='sf-menu menu_level_".$level." ' id='menu_".$this->contentId."'>";
	$out="<ul class='menu menu_level_".$level." '>";
	
		$i=0;
		if($l=count($this->menuArray[$parentId])) {
			foreach($this->menuArray[$parentId] as $k=>$v) {
				
				
			
				if($v['inMenu']==1 || $this->admin==1) {
					
					$class=array();
					if($v['pageId']==$this->pageId || in_array($v['pageId'],$this->parents)) {
						$class[]="current";
					}
					if($i==0) {
						$class[]="first";
					}
					else if($i==$l-1) {
						$class[]="last";
					}
					$out.="<li ";
					if($class) {
						$out.=" class='".implode(" ",$class)."' ";
					}
					$out.="><a href=\"".__web__.$v['alias']."\" ";
					if($class) {
						$out.=" class='".implode(" ",$class)."' ";
					}
					$out.=">";
					$out.=l::t($v['pageTitle']);
					if($this->admin) {
						//$out.=" (".$v['pageId'].")";	
					}
					
					
					$out.="</a>";
					if(count($this->menuArray[$v['pageId']])>0 && $this->levelDepth>$level+1 ) {
						if($this->onlySelected==0 || in_array($v['pageId'],$this->parents)) {
							$out.=$this->getMenu($v['pageId'],$level+1);
						}
					}
					$out.="</li>";
					if($this->separator && $i<$l-1) {
						$out.="<li class='menu_separator'></li>";
					}
					
				}
				$i++;
			}
		}
		$out.="</ul>";
		return $out;
	}
	
	
	
	
	
	function getParent($pageId) {
		$db=new DB;
		$db->query="SELECT pageId,parentId FROM #__pages WHERE pageId='".$pageId."'";
		$page=$db->setQuery('first');
		
	 
		
		
		
		if($page['parentId']>0) {
			$this->parents[]=$page['pageId'];
			$this->getParent($page['parentId']);
		}
	}
	
	
	
	
}

?>