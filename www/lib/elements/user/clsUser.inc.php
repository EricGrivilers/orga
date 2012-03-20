<?php


class user extends element {
	
	
	var $users=array();
	
	
	function __construct() {
		$this->c=new client;
		$this->getUsers();
	}
	
	
	
	
	function display() {
		
		$this->s=new shared;
		
		
		
		$this->submenu();
		switch($this->params->function) {
			default:
			case 'listUsers':
				//
				if(isset($_GET['userId'])) {
					$this->userId=$_GET['userId'];
					$this->content.=$this->editUser();
				}
				else {
					$this->content.=$this->listUsers();
				}
			break;
			
		}
		return $this->content;
	}
	
	function subMenu() {
		$out="<div class=\"submenu\" style='height:22px'>";
		$out.="<div class='right' style='width:200px'>";
		$out.="<input type=\"button\" value=\"Créer un nouvel utilisateur\" onclick=\"document.location='/users?userId='\" class=\"button\"/>";
		$out.="</div>";
		$out.="</div>";
		$out.="<br class='clearfloat' />";
		$this->content.=$out;
	}
	
	function listUsers() {
		
		
		$db=new DB;
		$db->query="SELECT * FROM #__users U WHERE U.public=1 AND userId>2 ORDER BY U.lastname ASC,U.firstname";
		$tUsers=$db->setQuery();
		
		//echo $db->query;
		
		
		$allUsers=array();
		foreach($tUsers as $o) {
			
			$allUsers[$i]['nom']="<b><a href='/users?userId=".$o['userId']."'>".$o['lastname']."</a></b>";
			$allUsers[$i]['prenom']=$o['firstname'];
			$allUsers[$i]['status']=$o['status'];
			$allUsers[$i]['email']="<b><a href='mailto:".$o['email']."'>".$o['email']."</a></b>";
			$allUsers[$i]['phone']=$o['phone'];
			
			$allUsers[$i]['edit']=$o['etat']="<a href='/users?userId=".$o['userId']."'><img src='/themes/default/images/buttons/edit.png' alt='Editer' title='Editer' /></a>";
			$allUsers[$i]['delete']="<a onclick=\"deleteUser('".$o['userId']."')\"><img src='/themes/default/images/buttons/del.png' alt='Supprimer' title='Supprimer' /></a>";
			
			$allUsers[$i]['password']="<a onclick=\"\"></a>";
			$i++;
		}
		
		$rows=$allUsers;
		
	
		
		
		
		
		$cols=array(
			array('field'=>"reference",label=>'Nom'),
			array('field'=>"",label=>'Prénom'),
			array('field'=>"",label=>'Statut'),
			array('field'=>"",label=>'Email'),
			array('field'=>"",label=>'Téléphone'),
			array('field'=>"",label=>'Ed'),
			array('field'=>"",label=>'Sup'),
			array('field'=>"",label=>'Psswd')
		);
		$this->templateVars=array('rows'=>$rows,'cols'=>$cols);
			
		return template::parse("users.list.tpl",$this->templateVars);
		
	}


	function editUser() {
		if($_POST) {
			$this->saveUser();
		}
		
		$this->getUser();	
		return template::parse("user.edit.tpl",$this->templateVars);
	}
	
	function getUser() {
		$db=new DB;
		$db->query="SELECT * FROM #__users WHERE userId='".$this->userId."'";
		$this->user=$db->setQuery('first');
		$this->templateVars=array();
		
		
		$this->templateVars['user']=$this->user;
		$this->templateVars['clientTitles']=$this->c->clientTitles;
	}
	
	
	
	function saveUser() {
		//print_r($_POST);
		if($_POST['user']['address_other']!='') {
			$_POST['user']['address']=$_POST['user']['address_other'];
		}
		unset($_POST['user']['address_other']);
		$db=new DB;
		$db->query="UPDATE #__users SET ".$db->setUpdate($_POST['user'])." WHERE userId='".$this->userId."'";
		
		$db->setQuery();
		echo $db->query;
	}
	
	
	function newUser() {
		$db=new DB;
		$db->query="INSERT INTO #__users (insertDate,public,status) VALUES (NOW(),'1','consultant')";
		$db->setQUery();
		$this->userId=mysql_insert_id();
		echo "<script>document.location='/users?userId=".$this->userId."'</script>";	
	}
	
	function getUsers() {
		$db=new DB;
		$db->query="SELECT * FROM #__users ORDER BY firstname,lastname";
		$tu=$db->setQuery();
		
		foreach($tu as $u) {
			$this->users[$u['userId']]=$u['firstname']." ".$u['lastname'];
		}
	}
	
	
	function login() {
		if(!empty($_POST['email']) && !empty($_POST['password'])) {
			$db=new DB;
			$db->query="SELECT * FROM #__users WHERE email='".$_POST['email']."' AND password='".MD5($_POST['password'])."'";
			$db->setQuery('first');
			if($this->user=$db->output) {
				$_SESSION['user']=$this->user;
				echo "<script>document.location='/';</script>";
				
			}
		}
		
		return template::parse("users.login.tpl",array());
	}
	
	
}


?>