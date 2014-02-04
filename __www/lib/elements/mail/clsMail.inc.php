<?php

class mail {
	
	
	
	
	function display() {
		$this->content=$this->getMails();
		return $this->content;	
	}
	
	
	function getMails() {
		require_once(__elem__."datas/clsDatas.inc.php");
		$db=new DB;
		$db->query="SELECT * FROM #__mail_mails ORDER BY insertDate DESC";
		$this->mails=$db->setQuery();
		
		$datas=new datas;
		$datas->datas=$this->mails;
		$datas->fields=array(array("tf"=>"mailId","l"=>"ID"),'title','insertDate','updateDate');
		$out=$datas->getTable();
		/*
		foreach($this->mails as $m) {
			$out.="<tr>";
			$out.="<td>".$m['mailId']."</td>";
			$out.="<td>".$m['title']."</td>";
			$out.="<td>".$m['insertDate']."</td>";
			$out.="<td>".$m['updateDate']."</td>";
			$out.="</tr>";	
		}
		*/
		
		return $out;
		
	}
	
}


?>