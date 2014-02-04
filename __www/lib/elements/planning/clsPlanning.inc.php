<?php


class planning {
	
	var $states=array('OK'=>"OK",'TODO'=>"TODO",'PROBLEME'=>"PROBLEME");
	var $phases=array('preview'=>"Repérage",'build'=>"Montage",'inplace'=>"En place",'unbuild'=>"Demontage");
	
	
	function display() {
	
		$this->subMenu();
		switch($this->params->function) {
			default:
			case 'getCalendar':
				$this->getCalendar();
			break;
			
			
		}
		
		
		return $this->content;
	}
	
	function subMenu() {
		$out="<div class=\"submenu\">";
		//$out.="<input type=\"checkbox\" value=\"1\" onclick=\"calendarMeOnly()\" id='meCheckbox' /> <i>mon agenda uniquement</i><input type='hidden' id='userIso' value='".$_SESSION['user']['iso']."' />";
		$out.="</div>";
		$this->content.=$out;
	}
	
	
	
	
	
	
	
	function getCalendar() {
		
		$this->content.="<select name='userId' id='userId' onchange=\"document.location='/agenda?userId='+this.value+'&longBuild='+\$('#longBuild').val()\"><option value=''>Tout utilisateur</option>";
		$db=new DB;
		$db->query="SELECT * FROM #__users WHERE public='1' AND userId>2 ORDER BY firstname,lastname";
		$db->setQuery();
		$users=$db->output;
		foreach($users as $u) {
			$this->content.="<option value='".$u['userId']."' ";
			if($_GET['userId']==$u['userId']) {
				$this->content.=" selected ";
			}
			$this->content.=">".$u['firstname']." ".$u['lastname']."</option>";	
		}
		$this->content.="</select>";
		
		$d=array(''=>'Toutes tentes','short'=>'Courte durée','long'=>'Longue durée');
		$this->content.="<select id='longBuild' name='longBuild'  onchange=\"document.location='/agenda?userId='+\$('#userId').val()+'&longBuild='+this.value\"   >";
		foreach($d as $k=>$v) {
			$this->content.="<option value='".$k."' ";
			if($_GET['longBuild']==$k) {
				$this->content.=" selected ";
			}
			$this->content.=">".$v."</option>";
		}
		$this->content.="</select>";
		
		$this->content.="<input style='float:right' type='button' value='exporter' onclick='exportPlanning()' class='button'  />";
		
		
		$this->content.="<div id='calendar' style='margin:3em 0;font-size:13px'></div>";
	}
	
	
	function getDates() {
		$db=new DB;
		//$db->query="SELECT *,#__planning.etat AS pEtat,#__jobs.status AS pStatus,#__users.iso as uIso FROM #__planning LEFT JOIN #__tent2job ON #__tent2job.jobId=#__planning.jobId LEFT JOIN #__jobs ON #__jobs.jobId=#__planning.jobId LEFT JOIN #__users ON #__users.userId=#__planning.userId  WHERE (#__jobs.status='CONFIRMÉ' OR #__jobs.status='OFFRE') ";
		$db->query="SELECT *,P.etat AS pEtat,J.status AS pStatus,U.iso as uIso FROM #__planning2job P LEFT JOIN #__jobs J ON J.jobId=P.jobId LEFT JOIN #__users U ON U.userId=P.userId  WHERE J.public=1 ";
		
		if($_GET['userId']>0) {
			$db->query.=" AND P.userId='".$_GET['userId']."' ";
		}
		
		if($_GET['longBuild']=='long') {
			$db->query.=" AND DATEDIFF(J.endBuild,J.startBuild)>10";
		}
		else if($_GET['longBuild']=='short') {
			$db->query.=" AND DATEDIFF(J.endBuild,J.startBuild)<=10";
		}
	//	$db->query.=" GROUP BY P.planningId ";
		$db->resultType="array";
		$db->setQuery();
	//	echo $db->query;
		$dates=array();
		foreach($db->output as $k=>$date) {
			$s=preg_replace("/ /","T",$date['startDate'])."Z";
			$e=preg_replace("/ /","T",$date['endDate'])."Z";
			$s=$date['startDate'];
			$e=$date['endDate'];
			/*$dates[]=array(
				"id"=>$date['planningId'],
				"title"=>$date['reference']." - ".$this->getStatus($date['planningType'])." - ".$date['pEtat']." - ".$date['uIso'],
				"start"=>$this->convert_datetime($date['startDate']),
				"end"=>$this->convert_datetime($date['endDate']),
				"className"=>strtolower($date['planningType']."-".$date['priceType']." ".$date['pStatus']." user-".$date['uIso']),
				"url"=>"javascript:getComments('".$date['jobId']."','".$date['planningType']."')"
			);
			 * */
			$dates[]=array(
				"id"=>$date['planningId'],
				"title"=>$date['reference']." - ".$this->getStatus($date['planningType'])." - ".$date['pEtat']." - ".$date['uIso'],
				"start"=>$date['startDate'],
				"end"=>$date['endDate'],
				"allDay"=>false,
			//	"className"=>strtolower($date['planningType']."-".$date['priceType']." ".$date['pStatus']." user-".$date['uIso']),
				"className"=>strtolower($date['planningType']."-".$date['priceType']." user-".$date['uIso']),
				"url"=>"/jobs?jobId=".$date['jobId'],
				"jobId"=>$date['jobId'],
				"planningType"=>$date['planningType']
			);
			
			/*
			$dates[]=array(
				"id"=>$date['planningId'],
				"title"=>$date['reference']." - ".$this->getStatus($date['planningType'])." - ".$date['pEtat']." - ".$date['uIso'],
				"start"=>$this->convert_datetime($date['startDate']),
				"end"=>$this->convert_datetime($date['endDate']),
				"className"=>strtolower($date['planningType']."-".$date['priceType']." ".$date['pStatus']." user-".$date['uIso']),
				"url"=>"javascript:editJob(".$date['jobId'].")"
			);
			*/
		}
		echo json_encode($dates);
		/*
		[{"id":111,"title":"Event1","start":"2010-04-10","url":"http:\/\/yahoo.com\/"},{"id":222,"title":"Event2","start":"2010-04-20","end":"2010-04-22","url":"http:\/\/yahoo.com\/"}]
		*/
	}
	
	
	function getStatus($str) {
		$tA=array('build'=>"MONTAGE",'unbuild'=>"DEMONTAGE",'preview'=>"REPERAGE",'inplace'=>"EN PLACE");
		return strtoupper($tA[$str]);
	}
	
	
	
	function savePlanning() {
	$db=new DB;
	if($this->type=="move") {
		$db->query="UPDATE #__planning SET startDate=".$this->estart.", endDate=".$this->eend." WHERE planningId='".$this->planningId."'";
	}
	
	else if($this->type=="resize") {
		$db->query="UPDATE #__planning SET endDate=DATE_ADD(endDate,INTERVAL ".$this->delta." DAY) WHERE planningId='".$this->planningId."'";
	}
	$db->query="UPDATE #__planning SET startDate='".$this->estart."', endDate='".$this->eend."' WHERE planningId='".$this->planningId."'";
		//echo $db->query;
		$db->resultType="none";
		$db->setQuery();
		$this->display();
		echo $this->content;
	}
	
	
	
	function convert_datetime($str) {
		
		list($date, $time) = explode(' ', $str);
		list($year, $month, $day) = explode('-', $date);
		list($hour, $minute, $second) = explode(':', $time);
		
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		
		return $timestamp;
		}
		
		
		function getPlanningComments() {
			$db=new DB;
			$db->query="SELECT planningComments FROM #__jobs WHERE jobId='".$this->jobId."'";
			$db->setQuery();
			echo stripslashes($db->output[0]['planningComments']);	
		}
		
		
		
		
		
	function savePlanningComments() {
		$db=new DB;
		$db->query="UPDATE #__jobs SET planningComments=\"".addslashes($_POST['planningComments'])."\" WHERE jobId='".$this->jobId."'";	
		$db->resultType='none';
		
		
		
		$db->setQuery();
	}
	
	
	function exportPlanning() {
		$q="SELECT *,CONCAT(#__users.firstname,' ',#__users.lastname) AS userName FROM #__planning LEFT JOIN #__jobs ON #__jobs.jobId=#__planning.jobId LEFT JOIN #__users ON #__users.userId=#__planning.userId WHERE 1 ";
		
		switch($_GET['t']) {
			default:
			
				$date=date('Y-m-d');
				$date2=strtotime(date("Y-m-d", strtotime($date)) . " +1 month");
		
				//$q.=" AND startDate>=".$date." AND startDate<=".$date2." ";
				$q.=" AND startDate>=".$date."  ";
			break;	
		}
		
		if($_GET['userId']>0) {
			$q.=" AND #__planning.userId='".$_GET['userId']."' ";
			
		}
		
		switch($_GET['longBuild']) {
			case 'long':
				$q.=" AND DATEDIFF(#__jobs.endBuild,#__jobs.startBuild)>10";
			break;
			
			case 'short':
				$q.=" AND DATEDIFF(#__jobs.endBuild,#__jobs.startBuild)<=10";
			break;
			
		}
		$q.=" ORDER BY startDate ";
		$db=new DB;
		$db->query=$q;
		$db->setQuery();
		//echo $db->query;
		
		$dates=$db->output;
		$out="<table>";
		foreach($dates as $d) {
		$out.="<tr><td>".$d['startDate']."</td><td>".$d['planningType']."</td><td>".$d['userName']."</td><td>".$d['address']."</td><td>".$d['number']."</td><td>".$d['zip']."</td><td>".$d['city']."</td><td>".$d['country']."</td><td>".$d['mobile']."</td></tr>";	
		}
		$out.="</table>";
		$fd=fopen(__root__.'export.htm','w+');
		fwrite($fd,$out);
		fclose($fd);
		
	}
}


?>