<?php


/*
 * 
 * - vérifier liste tentes en hivernage 
 * - vérifier l'ajout de client
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */

 
class tent {
	var $templateVars=array();
	var $availableTents=array();
	var $optionalTents=array();
	var $type;
	
	
	
	
	function __construct() {
		
	}
	
	
	
	function display() {
		//print_r($_POST);
		$this->c=new client;
		$this->s=new shared;
		$this->u=new user;
		$this->p=new planning;
		
		
		
		$this->submenu();
		switch($this->params->function) {
			default:
			case 'listTents':
				//
				if(isset($_GET['tentId'])) {
					$this->tentId=$_GET['tentId'];
					$this->content.=$this->editTent();
				}
				else {
					$this->content.=$this->listTents();
				}
			break;
			
		}
		return $this->content;
	}
	
	
	function subMenu() {
		$out="<div class=\"submenu\" style='height:22px'>";
		if(empty($_GET['tentId'])) {
			if(empty($_GET['fromDate'])) {
				$_GET['fromDate']=date('Y-m-d H:i:s');
				$_GET['toDate']=date('Y-m-d H:i:s');
			}
			$out.='<div class="left" style="width:500px">Filtrer du 
			<input type="text" name="fromDate" id="fromDate" class="datepicker2" value="'.$_GET['fromDate'].'">
			au <input type="text" name="toDate" id="toDate" class="datepicker2" value="'.$_GET['toDate'].'">
			 <input type="button" name="dateFilter" id="dateFilter" value="Filtrer" onclick="filterTents()"></div>';
		}	
			
				
			$out.="<div class='right' style='width:200px'>";
			$out.="<input type=\"button\" value=\"Créer une nouvelle tente\" onclick=\"document.location='/tents?tentId='\" class=\"button\"/>";
			$out.="</div>";
			
		
		$out.="</div>";
		$out.="<br class='clearfloat' />";
		$this->content.=$out;
	}
	
	
	function listTents() {
		
		
		$db=new DB;
		$db->query="SELECT tentId,#__jobs.jobId,#__jobs.offreType FROM #__jobs LEFT JOIN #__tent2job ON #__tent2job.jobId=#__jobs.jobId WHERE public=1 
		AND ((endBuild BETWEEN '".$_GET['fromDate']."' AND '".$_GET['toDate']."') 
		OR (startBuild BETWEEN '".$_GET['fromDate']."' AND '".$_GET['toDate']."') 
		OR (startBuild < '".$_GET['fromDate']."' AND endBuild > '".$_GET['toDate']."') OR startBuild='".$_GET['fromDate']."') GROUP BY #__tent2job.tentId";
		$tTents=$db->setQuery();
		
		//echo $db->query;
		
		
		$noTents=array();
		$inWinter=array();
		foreach($tTents as  $t ) {
			$noTents[]=$t['tentId'];
			if($t['offreType']=='winter') {
				$inWinter[]=$t['tentId'];
			}
		}

		//print_r($noTents);
		$db=new DB;
		$db->query="SELECT T.*, CONCAT(C.name,' ',C.firstname,' ',C.lastname) AS client, C.clientId
		FROM #__tents T 
		LEFT JOIN #__clients C ON C.clientId=T.ownerId 
		LEFT JOIN #__tent2job TJ ON TJ.tentId=T.tentId 
		LEFT JOIN #__jobs J ON J.jobId=TJ.jobId 
		GROUP BY T.tentId 
		ORDER BY T.tentId ASC";
		$tTents=$db->setQuery();
		
		
		//echo $db->query;
		
		$i=0;
		$allTents=array();
		$availableTents=array();
		$nonAvailableTent=array();
		$inWinterTents=array();
		foreach($tTents as $o) {
			
			$allTents[$i]['reference']="<b><a href='/tents?tentId=".$o['tentId']."'>".$o['reference']."</a></b>";
			$allTents[$i]['name']=$o['name'];
			$allTents[$i]['kit']=shared::bool($o['kit']);
			if($o['clientId']>0) {
				$allTents[$i]['client']="<a href='/clients?clientId=".$o['clientId']."'>".trim($o['client'])."</a>";
			}
			else {
				$allTents[$i]['client']="ORGANIC";
			}
			$allTents[$i]['color']=$o['color'];
			$allTents[$i]['length']=sprintf('%.2f',$o['length']);
			$allTents[$i]['width']=sprintf('%.2f',$o['width']);
			$allTents[$i]['m2']=sprintf('%.2f',$o['m2']);
			
			$allTents[$i]['etat']=$o['etat'];
			$allTents[$i]['issue']=$o['issue'];
			$allTents[$i]['edit']=$o['etat']="<a href='/tents?tentId=".$o['tentId']."'><img src='/themes/default/images/buttons/edit.png' alt='Editer' title='Editer' /></a>";
			$allTents[$i]['delete']="<a onclick=\"deleteTent('".$o['tentId']."')\"><img src='/themes/default/images/buttons/del.png' alt='Supprimer' title='Supprimer' /></a>";
			if(in_array($o['tentId'],$noTents)) {
				$nonAvailableTents[]=$allTents[$i];
			}
			else {
				$availableTents[]=$allTents[$i];
			}
			if(in_array($o['tentId'],$inWinter)) {
				$inWinterTents[]=$allTents[$i];
			}
			
			$i++;
		}
		
		
		
	
		$tabs=array(
			array('id'=>'allTents',label=>'Toutes les tentes','rows'=>$allTents),
			array('id'=>'runningOffres',label=>'Tentes reservées','rows'=>$nonAvailableTents),
			array('id'=>'confirmedOffres',label=>'Tentes disponibles','rows'=>$availableTents),
			array('id'=>'canceledOffres',label=>'tentes en hivernage','rows'=>$inWinterTents)
		);
		
		
		
		$cols=array(
			array('field'=>"reference",label=>'Reference'),
			array('field'=>"",label=>'Nom'),
			array('field'=>"",label=>'Kit'),
			array('field'=>"",label=>'Propriétaire'),
			array('field'=>"",label=>'Couleur'),
			array('field'=>"",label=>'Long.'),
			array('field'=>"",label=>'Larg.'),
			array('field'=>"",label=>'Surface'),
			array('field'=>"",label=>'Etat'),
			array('field'=>"",label=>'Err.'),
			array('field'=>"",label=>'Ed'),
			array('field'=>"",label=>'Sup')
		);
		$this->templateVars=array('tabs'=>$tabs,'cols'=>$cols);
			
		return template::parse("tents.list.tpl",$this->templateVars);
		
	}
	
	
	
	function editTent() {
		
		if($_POST) {
			$this->saveTent();
		}
		$this->getTent();	
		return template::parse("tent.edit.tpl",$this->templateVars);
	}
	
	
	function getPdf() {
		
		$this->getTent();	
		return template::parse("tent.pdf.tpl",$this->templateVars);
	}


	function getTent() {
		if($this->tentId<=0) {
			$this->newTent();
		}
		//echo $this->tentId;
		
		$this->templateVars=array();
		
		$db=new DB;
		$db->query="SELECT T.*,CONCAT(C.name,' ',C.lastname,' ',C.firstname) AS client,C.clientType AS clientType  FROM #__tents T LEFT JOIN #__clients C ON C.clientId=T.ownerId WHERE T.tentId='".$this->tentId."' ";
		$this->tent=$db->setQuery('first');
		
		foreach($this->tent as $k=>$t) {
			$this->tent[$k]=stripslashes($t);
		}
		$t=explode('-',$this->tent['insertDate']);
		$this->tent['year']=$t[0];
		$this->templateVars['tent']=$this->tent;
		
		
		//colors
		$db=new DB;
		$db->query="SELECT color FROM #__tents GROUP BY color ORDER BY color";
		$db->setQuery();
		$this->colors=array();
		foreach($db->output as $c) {
			$this->colors[]=$c['color'];
			
		}
		$this->templateVars['colors']=$this->colors;
		
		
		//etats 
		
		$db=new DB;
		$db->query="SELECT etat FROM #__tents GROUP BY etat ORDER BY etat";
		$db->setQuery();
		$this->etats=array();
		foreach($db->output as $c) {
			$this->etats[]=$c['etat'];
			
		}
		$this->templateVars['etats']=$this->etats;
		
		
		$db=new DB;
		$db->query="SELECT J.reference,J.startBuild,J.endBuild FROM #__tent2job TJ LEFT JOIN #__jobs J ON J.jobId=TJ.jobId WHERE TJ.tentId='".$this->tent['tentId']."' ORDER BY J.startBuild DESC ,J.endBuild DESC";
		$db->setQuery();
		$this->jobs=$db->output;
		$this->templateVars['jobs']=$this->jobs;
		
		$db=new DB;
		$db->query="SELECT O.reference,O.startBuild,O.endBuild FROM #__tent2offre TJ LEFT JOIN #__offres O ON O.offreId=TJ.offreId WHERE TJ.tentId='".$this->tent['tentId']."' ORDER BY O.startBuild DESC ,O.endBuild DESC";
		$db->setQuery();
		$this->offres=$db->output;
		//echo $db->query;
		$this->templateVars['offres']=$this->offres;
		
		
		$this->documents=array();
		if($docs=utils::file_list(__root__."docs/tents/".$this->tentId)) {
			foreach($docs as $d) {
				$this->documents[]=array('url'=>$d);
			}
		}
		$this->templateVars['documents']=$this->documents;
		
		//return template::parse("tent.edit.tpl",$this->templateVars);
	}
	
	function saveTent() {
		
		//print_r($_POST);
		$this->tent=$_POST['tent'];
		$this->tentId=$_POST['tent']['tentId'];
		
		
		
		if(!empty($_POST['new_color'])) {
			$_POST['tent']['color']=$_POST['new_color'];
			
		}
		unset($_POST['new_color']);
		if(empty($_POST['tent']['m2'])) {
			$_POST['tent']['m2']=$_POST['tent']['width']*$_POST['tent']['height'];
		}
		
		
		
		
		if($_POST['tent']['ownerType']=='organic') {
			$_POST['tent']['ownerId']=0;
		}
		unset($_POST['tent']['ownerType']);
		
		if($_POST['tent']['piquetsBool']==0) {
			$_POST['tent']['piquets']=0;
		}
		unset($_POST['tent']['piquetsBool']);
		if($_POST['tent']['etatBool']=='OK') {
			$_POST['tent']['etat']='OK';
		}
		else {
			if(!empty($_POST['newEtat'])) {
				$_POST['tent']['etat']=$_POST['newEtat'];
			}
		}
		unset($_POST['tent']['etatBool']);
		unset($_POST['newEtat']);
		$_POST['tent']['reference']=$_POST['tent']['year']."-".$_POST['tent']['tentId']."-".$_POST['tent']['color'];
		unset($_POST['tent']['year']);
		//print_r($_POST);
		
		$db=new DB;
		$db->query="UPDATE #__tents SET ".$db->setUpdate($_POST['tent'])." WHERE tentId='".$this->tentId."'";
		$db->setQuery();
		//echo $db->query;
	}
	
	function newTent() {
		$db=new DB;
		$db->query="INSERT INTO #__tents (insertDate,name,reference,etat) VALUES (NOW(),'new tent','temp-".rand(0,100)."','OK')";
		$db->setQuery();
		
		$this->tentId=mysql_insert_id();
		$db=new DB;
		$db->query="UPDATE #__tents SET reference='".date('Y')."-".$this->tentId."' WHERE tentId='".$this->tentId."'";
		$db->setQuery();
		//echo $db->query;
		echo "<script>document.location='/tents?tentId=".$this->tentId."'</script>";
		//$this->tentId=mysql_insert_id();
		//echo $this->tentId;
	}
	
	function deleteTent() {
		$db=new DB;
		$db->query="UPDATE #__tents SET public=0 WHERE tentId='".$this->tentId."'";
		$db->setQuery();
		
	}
	
	
	function getAvailableTents($from,$to,$type) {
		($type=='rent')?$owner="=0":$owner=">0";
		$db=new DB;
		//$db->query="SELECT T.* FROM #__tents T LEFT JOIN #__tent2job TJ ON TJ.tentId=T.tentId LEFT JOIN #__jobs J ON J.jobId=TJ.jobId  WHERE (J.endBuild<'".$from."' OR J.startBuild>'".$to."') AND T.ownerId".$owner." AND T.public=1 GROUP BY T.tentId ORDER BY T.tentId";
		$db->query="SELECT T.* FROM #__tents T 
		WHERE T.tentId NOT IN (
		SELECT TJ.tentId FROM #__tent2job TJ LEFT JOIN #__jobs J ON J.jobId=TJ.jobId 
		WHERE (J.endBuild>='".$from."' AND J.endBuild<='".$to."') 
		OR (J.startBuild>='".$from."' AND J.startBuild<='".$to."') 
		OR (J.startBuild<='".$from."' AND J.endBuild>='".$to."')
		) 
		AND T.ownerId".$owner." AND T.public=1 GROUP BY T.tentId ORDER BY T.tentId";
		$db->setQuery();
		//echo $db->query;
		$this->availableTents=$db->output;
		
		return $this->availableTents;
		
	}
	
	function getInJobTents($from,$to,$type,$jobId) {
		($type=='rent')?$owner="=0":$owner=">0";
		$db=new DB;
		$db->query="SELECT T.*,J.* FROM #__tents T LEFT JOIN #__tent2job TJ ON TJ.tentId=T.tentId LEFT JOIN #__jobs J ON J.jobId=TJ.jobId  
		WHERE ((J.startBuild >= '".$from."' AND J.startBuild <= '".$to."') 
		OR (J.endBuild>='".$from."' AND J.endBuild<='".$to."')
		OR (J.startBuild<='".$from."' AND J.endBuild>='".$to."')
		) 
		AND T.ownerId".$owner." AND T.public=1  AND J.jobId!='".$jobId."' ORDER BY T.tentId";
		$db->setQuery();
		//echo $db->query;
		$this->inJobTents=$db->output;
		return $this->inJobTents;
		
	}
	
	
	function getOptionalTents($from,$to,$type) {
		($type=='rent')?$owner="=0":$owner=">0";
		$db=new DB;
		$db->query="SELECT T.*,COUNT(J.offreId) AS inOption FROM #__tents T LEFT JOIN #__tent2offre TJ ON TJ.tentId=T.tentId LEFT JOIN #__offres J ON J.offreId=TJ.offreId  WHERE (J.endBuild<='".$to."' AND J.startBuild>='".$from."') AND T.ownerId".$owner." AND T.public=1 GROUP BY T.tentId ORDER BY T.tentId";
		$db->setQuery();
		//echo $db->query;
		$this->optionalTents=$db->output;
		return $this->optionalTents;
	}
	
	function getTent2Offre($offreId) {
		$db=new DB;
		$db->query="SELECT * FROm #__tents T LEFT JOIN #__tent2offre OT ON OT.tentId=T.tentId WHERE OT.offreId='".$offreId."'";
		$db->setQuery();
		return $db->output;
	}
	
	function getTent2Job($jobId) {
		$db=new DB;
		$db->query="SELECT * FROm #__tents T LEFT JOIN #__tent2job OT ON OT.tentId=T.tentId WHERE OT.jobId='".$jobId."'";
		$db->setQuery();
		return $db->output;
	}
}








?>