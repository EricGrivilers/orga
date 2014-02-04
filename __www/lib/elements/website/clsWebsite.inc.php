<?php
require_once(__lib__."elements/colorpicker/clsColorpicker.inc.php");

class website extends element {
	
	
	var $url;//website client url
	var $email;//string
	var $phone;//string
	var $description;//text
	var $hours;//array
	var $services;//text
	var $picts;//array
	var $news;//array
	var $blog;//string
	var $social;//array
	var $videos;//array
	
	
	var $step;
	function __construct() {
		$this->userId=$_SESSION['user']['userId'];	
		
	}
	function display() {
		//print_r($_GET);
		if(!empty($_SESSION['user'])) {
			header('location:/my-account');
			die();
		}
		
		if($_GET['wid']>0 || $_GET['wid']=='new') {
			$this->websiteId=$_GET['wid'];
			$this->content=$this->edit();
		}
		else {
			$this->content=$this->getList();
		}
		return $this->content;
	}
	
	function _get() {
		switch($this->step) {
			default:
			case 'dashboard':
				return $this->dashboard();
			break;
		}
	}
	
	
	function _set() {
		
	}
	
	
	
	
	function getList() {
		
		//echo 'r';
		$db=new DB;
		$db->query="SELECT * FROM #__websites WHERE userId='".$this->userId."'";
		$db->setQuery();
		$this->websites=$db->output;
		//$out.="<div class='buttons'><button><a href='/my-account?wid=new'>New website</a></button></div>";
		$out.="<table  class='list'>";
		$out.="<thead>";
		$out.="<tr><td>Website</td><td></td><td></td></tr>";
		$out.="</thead>";
		$out.="<tbody>";
		foreach($this->websites as $w) {
			$out.="<tr>";
			$out.="<td class='first'>".$w['url']."</td>";
			$out.="<td class='edit'><a href='/my-account/websites?wid=".$w['websiteId']."'><img src='/css/img/edit.png' alt='edit website'/></a></td>";
			$out.="<td class='edit'><a ><img src='/css/img/download.png' alt='download script' /></a></td>";
			$out.="</tr>";
		}
		$out.="</tbody>";
		$out.="</table>";
		return $out;
	}
	
	
	function edit() {
		
		if($_POST['saveBut']) {
			if($_POST['websiteId']<=0) {
				$db=new DB;
				$db->query="INSERT INTO #__websites (userId,url) VALUES ('".$_SESSION['user']['userId']."',\"".$_POST['editurl']."\")";	
				$db->resultType='none';
				$db->setQuery();
				
				$_POST['websiteId']=mysql_insert_id();			
			}
			$datas=json_encode($_POST);
			$db=new DB;
			
			//echo "--".$datas."--";
			$db->query="UPDATE #__websites SET url='".$_POST['editurl']."',params='".$datas."' WHERE websiteId='".$_POST['websiteId']."'";
			$db->resultType='none';
			$db->setQuery();
			$this->websiteId=$_POST['websiteId'];
		//	echo $db->query;
			//die();
			$out="<script>document.location='/my-account/websites?wid=".$this->websiteId."';</script>";
		}
		$db=new DB;
		$db->query="SELECT * FROM #__websites WHERE websiteId='".$this->websiteId."' AND userId='".$this->userId."'";
		$db->setQuery();
		//echo $db->query;
		$this->website=$db->output[0];
		
		if(count($this->website)>0 || $this->websiteId=='new') {
			
			
			
			
			$templateVars=array();
			//print_r($this->website['params']);
			//print_r(json_decode($this->website['params']));
			
			$text=$this->website['params'];
			$text = str_replace("\r\n", "\n", $text);
		    $text = str_replace("\r", "\n", $text);
			$text = str_replace("\n", "\\n", $text);
			
			
			if($datas=json_decode($text)) {
				
				
				foreach($datas as $k=>$v) {
					$templateVars[$k]=$v;	
					$this->website[$k]=$v;
				}
			}
			//echo $datas->uploadfolder;
			//print_r(utils::file_list(__root__.$datas->uploadfolder));
			if(file_exists(__root__."datas/users/".$_SESSION['user']['userId']."/".$this->websiteId)) {
				if($picts=utils::file_list(__root__."datas/users/".$_SESSION['user']['userId']."/".$this->websiteId,'jpg')) {
					$i=0;	
					foreach($picts as $p) {
						$l.="<li><img src='".__web__."datas/users/".$_SESSION['user']['userId']."/".$this->websiteId."/".$p."' /><input type='hidden' name='pict".$i."' value='".__web__."datas/users/".$_SESSION['user']['userId']."/".$this->websiteId."/".$p."' /></li>";	
						$i++;
					}	
				}
			}
			//print_r($this->website);
			$templateVars['editurl']=$this->website['url'];
			$templateVars['pictures']=$l;	
			$templateVars['uploadfolder']="/datas/users/".$_SESSION['user']['userId']."/".$this->websiteId;
			
			$out.="<div class='span-10'>";
			
			$out.="<ul id='steps'>";
			$out.="<li rel='step1' class='current'>1 datas</li>";
			$out.="<li rel='step2'>2 layout</li>";
			$out.="<li rel='step3'>3 config</li>";
			$out.="</ul>";
			$out.="<br style='clear:both' />";
			$out.="<form id='websiteForm' method='post' action='/my-account/websites?wid=".$this->websiteId."'>";
			
			//$out.="<div class='span-6'>";
			
			$out.="<input type='hidden' name='websiteId' value='".$this->websiteId."' />";
			
			$out.=template::parse("website.edit.tpl",$templateVars);
			
			
			
			
			
			$templateVars['defaultPict']=$this->website['pict0'];
			//echo "http://".$this->website['url'];
			$cp=new colorpicker;
			$cp->url="http://".$this->website['url'];
			$templateVars['cp']=$cp->display();
			$templateVars['favColor']=$cp->favoriteColors[2];
			$templateVars[$this->website['framework']]='checked';
			//$tt=$cp->display();
			
			$out.=template::parse("website.preview.tpl",$templateVars);
			$out.=template::parse("website.config.tpl",$templateVars);
			//$out.="</div>";
			
			$out.="<br style='clear:both' />";
			$out.="<input type='submit' value='save' name='saveBut' />";
			
			$out.="</form>";
			$out.="</div>";
			$out.="<div style='clear:both'></div>";
			//$out.=$this->getList();	;
		}
		//else {
	//		return $this->getList();	
		//}
		return $out;
	}
	
	
	function save() {
		
		
	}
	
	
	function delete() {//resister
		$user=new $user;
		$user->getUser();
		
	}
	
	function dashboard() {
		$out="Welconne <b>".$this->user['email']."</b>";
		return $out;	
	}
	
	function step1() {
		
	}
	
	
	function step2() {
		
	}
	
	
	function newWebsite() {
		
		return $this->getWebsites();
		/*$menu=new menu;
		$menu->mainParentId=8;
		$this->menu=$menu->display();
		
		
		$website=new website;
		$templateVars=array('menu'=>$this->menu,'content'=>$this->content=$this->edit());			
		
		return template::parse("user.account.tpl",$templateVars);	
		 * */
	}
	
	
	function editWebsite() {
		
		
		$menu=new menu;
		$menu->mainParentId=8;
		$this->menu=$menu->display();
		
		
		//$website=new website;
		$templateVars=array('menu'=>$this->menu,'content'=>$this->edit());			
		
		return template::parse("user.account.tpl",$templateVars);	
	}
	
	/*
	 * 
	 *function newWebsite() {
		echo "eeee";
		$this->websiteId='new';
		return $this->content=$this->edit();
	}
	 * *
	 */
	
	function getWebsites() {
		//echo 'a';
		$menu=new menu;
		$menu->mainParentId=8;
		$this->menu=$menu->display();
		
		
		//$website=new website;
		if($_GET['wid']>0 || $_GET['wid']=='new') {
			$this->websiteId=$_GET['wid'];
			$content=$this->edit();
		}
		else {
			$content.=$this->getList();
		}
		$templateVars=array('menu'=>$this->menu,'content'=>$content);			
		$templateVars['link']=__web__."register?k=".$key;
		return template::parse("user.account.tpl",$templateVars);	
	}
	
}





?>