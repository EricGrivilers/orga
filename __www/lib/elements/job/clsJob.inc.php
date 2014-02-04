<?php


/*
 * 
 * 
 * - ajouter langue
 * - possibiliter d'ajout de slice si ttes factures émises
 * - bouton facturation 
 * 
 * ON PROD
 * 
 * dupliquer planning ver planning2offre te planning2job idem pour slice
 * supprimer le planningId ds les tables planning
 * 
 * */

 
 
class job {
	
	var $templateVars=array();
	var $offreTypes=array('rent'=>"Location",'sell'=>"Vente",'winter'=>"Hivernage");
	var $jobStatus=array('draft'=>"En cours de rédaction",'ok'=>"Envoyée au client","ANNULÉ"=>"Annulée",'cancel'=>"Annulée");
	var $langs=array('fr','nl','en');
	
	var $error=0;
	
	
	function __construct() {
		$this->c=new client;
		$this->s=new shared;
		$this->u=new user;
		$this->p=new planning;
		$this->t=new tent;
		$this->pr=new product;
		$this->sl=new slice;
	}
	
	
	function display() {
		//print_r($_POST);
		
		
		
		$this->submenu();
		switch($this->params->function) {
			default:
			case 'listJobs':
				//
				if(isset($_GET['jobId'])) {
					$this->jobId=$_GET['jobId'];
					$this->content.=$this->editjob();
				}
				else {
					$this->content.=$this->listJobs();
				}
			break;
			
		}
		return $this->content;
	}
	
	
	function subMenu() {
		$out="<div class=\"submenu\" style='height:22px'>";
		$out.="<div class='right' style='width:200px'>";
		$out.="</div>";
		$out.="</div>";
		$out.="<br class='clearfloat' />";
		$this->content.=$out;
	}
	
	
	
	
	function listJobs() {
		
		/*
		 * Reference
Client
Type
Facturation
Livraison
Tents
Du
Au
Statut
Facturation
Account
Offre
		 *
		 */
		
		$db=new DB;
		$db->query="SELECT J.offreId, J.jobId, J.clientId, J.reference, J.status, J.issue, CONCAT(C.name,' ',C.firstname,' ',C.lastname) AS client, J.offreType,C.country as facturation, CONCAT(U.firstname,' ',U.lastname) AS userName, J.country AS livraison,DATE_FORMAT( J.startBuild, '%d/%m/%Y')  AS startBuild, DATE_FORMAT( J.endBuild, '%d/%m/%Y')  AS endBuild, 
		 GROUP_CONCAT(DISTINCT CONCAT('<a href=\"/tents?tentId=',T.tentId,'\">',  T.reference,'</a>') SEPARATOR \"<br/>\") AS tents , O.reference AS offreRef, J.language, GROUP_CONCAT(DISTINCT CONCAT('<a href=\"/invoices?invoiceId=',I.invoiceId,'\">',  I.reference,'</a>') SEPARATOR \"<br/>\") AS invoices
		FROM #__jobs J
		LEFT JOIN #__offres O ON O.offreId=J.offreId 
		LEFT JOIN #__clients C ON C.clientId=J.clientId 
		LEFT JOIN #__users U ON U.userId=J.userId 
		LEFT JOIN #__tent2job TJ ON TJ.jobId=J.jobId 
		LEFT JOIN #__tents T ON T.tentId=TJ.tentId 
		LEFT JOIN #__invoices I ON I.jobId=J.jobId 
		WHERE J.public='1' 
		GROUP BY J.jobId 
		ORDER BY J.jobId DESC";
		
		$tOffres=$db->setQuery();
		//echo $db->query;
		$i=0;
		$allJobs=array();
		foreach($tOffres as $o) {
			$allJobs[$i]['id']=$o['jobId'];
			if($o['status']=="draft" || $o['status']=="ok") {
				$allJobs[$i]['reference']="<b><a href='/jobs?jobId=".$o['jobId']."'>".$o['reference']."</a></b>";
			}
			else {
				$allJobs[$i]['reference']="<b>".$o['reference']."</b>";
			}
			$allJobs[$i]['client']="<a href='/clients?clientId=".$o['clientId']."'>".$o['client']."</a>";
			$allJobs[$i]['type']=$this->offreTypes[$o['offreType']];
			$allJobs[$i]['facturation']=$o['facturation'];
			$allJobs[$i]['livraison']=$o['livraison'];
			$allJobs[$i]['tentes']=$o['tents'];
			$allJobs[$i]['startBuild']=$o['startBuild'];
			$allJobs[$i]['endBuild']=$o['endBuild'];
			$allJobs[$i]['status']='';
			$allJobs[$i]['invoices']=$o['invoices'];
			$allJobs[$i]['userName']=$o['userName'];
			$allJobs[$i]['offre']="<a href='/quotes?offreId=".$o['offreId']."'>".$o['offreRef']."</a>";
			
			
			$allJobs[$i]['language']="<a onclick=\"getJobPdf('".$o['jobId']."','fr')\"><img src='/themes/default/images/buttons/pdf.png' /></a>";
			
			
			$allJobs[$i]['issue']=$o['issue'];
			if($o['status']=='closed') {
				$allJobs[$i]['edit']="";			
			}
			else {
				$allJobs[$i]['edit']="<a href='/jobs?jobId=".$o['jobId']."'><img src='/themes/default/images/buttons/edit.png' alt='Editer' title='Editer' /></a>";
		
			}
			
			
			
			
			
			
			$i++;
		}
		
		$rows=$allJobs;
		
		
		
		
		$cols=array(
			array('field'=>"reference",label=>'Reference'),
			array('field'=>"",label=>'Client'),
			array('field'=>"",label=>'Type'),
			array('field'=>"",label=>'Facturation'),
			array('field'=>"",label=>'Livraison'),
			array('field'=>"",label=>'Tentes'),
			array('field'=>"",label=>'du'),
			array('field'=>"",label=>'au'),
			array('field'=>"",label=>'Statut'),
			array('field'=>"",label=>'Facture'),
			array('field'=>"",label=>'Account'),
			array('field'=>"",label=>'Offre'),
			array('field'=>"",label=>'D'),
			array('field'=>"",label=>'Err'),
			array('field'=>"",label=>'Ed')
		);
		$this->templateVars=array('rows'=>$rows,'cols'=>$cols);
			
		return template::parse("jobs.list.tpl",$this->templateVars);
		
	}

	function editJob() {
		
		if($_POST) {
			$this->saveJob();
		}
		$this->getJob();	
		return template::parse("job.edit.tpl",$this->templateVars);
	}
	
	
	function getPdf() {
		
		$this->getJob();
		$this->templateVars['pdfLanguage']=$_GET['language'];
		$this->templateVars['mWidth']='180';
		
		switch($_GET['language']) {
			//default:
			case 'nl':
				$this->templateVars['client']['country']=preg_replace('/Belgique/','België',$this->client['country']);
				if($this->client['clientTitle']) {
					if($this->client['clientTitle']=='Mme') {
						$this->templateVars['client']['clientTitle']='Mvr';
					} else {
						$this->templateVars['client']['clientTitle']='Mhr';
					}
				}
				//$deliveryAddress=preg_replace('/Belgique/','België',$deliveryAddress);
			break;
			
			case 'en':
				$this->templateVars['client']['country']=preg_replace('/Belgique/','Belgium',$this->client['country']);
				if($this->client['clientTitle']) {
					if($this->client['clientTitle']=='Mme') {
						$this->templateVars['client']['clientTitle']='Mr';
					} else {
						$this->templateVars['client']['clientTitle']='Mrs';
					}
				}
				//$deliveryAddress=preg_replace('/Belgique/','Belgium',$deliveryAddress);
			break;	
		}
		//print_r($this->templateVars['tents']['currentOffre']);
		$this->plancher=0;
		$this->canalisation=0;
		foreach($this->templateVars['tents']['currentOffre'] as $t) {
			if($t['plancher']>0) {
				$this->plancher++;
			}
			if($t['canalisation']>0) {
				$this->canalisation++;
			}
		}
		$this->templateVars['plancher']=$this->plancher;
		$this->templateVars['canalisation']=$this->canalisation;
		return template::parse("job.pdf.".$_GET['language'].".tpl",$this->templateVars);
	}
	
	
	
	


function getJob() {
		
		
		
		
		$this->templateVars['jobId']=$this->jobId;
		$this->templateVars['langs']=$this->langs;
		$this->templateVars['status']=$this->offreStatus;
		$this->templateVars['offreTypes']=$this->offreTypes;
		$this->templateVars['cieTypes']=$this->c->cieTypes;
		$this->templateVars['clientTitles']=$this->c->clientTitles;
		$this->templateVars['countries']=$this->s->countries;
		$this->templateVars['users']=$this->u->users;
		
		
		
		//$this->templateVars['planningPhases']=$this->p->phases;
		
		
		$db=new DB;
		$db->query="SELECT J.*,O.reference AS offreReference FROM #__jobs J LEFT JOIN #__offres O ON O.offreId=J.offreId  WHERE jobId='".$this->jobId."'";
		$this->job=$db->setQuery('first');
		
		$db=new DB;
		$db->query="SELECT * FROM #__users WHERE userId='".$this->job['userId']."'";
		$this->templateVars['user']=$db->setQuery('first');
		//echo $db->query;
		
		$this->job['type']=$this->offreTypes[$this->job['offreType']];
		$this->c->clientId=$this->job['clientId'];
		$this->client=$this->c->getClient();
		if($this->client['clientId']<=0) {
			$this->error++;
		}
		
		
		$this->sl->jobId=$this->jobId;
		$this->slices=$this->sl->getSliceFromjob();
		
		
		$db=new DB;
		$db->query="SELECT *,DATE_FORMAT( startDate, '%d/%m/%Y %H:%i:%s') AS formatedStartDate ,DATE_FORMAT( endDate, '%d/%m/%Y %H:%i:%s') AS formatedEndDate FROM #__planning2job WHERE jobId='".$this->jobId."'";
		$tplanning=$db->setQuery();
		foreach($tplanning as $p) {
			$this->planning[$p['planningType']]=$p;
			$this->planning[$p['planningType']]['label']=$this->p->phases[$p['planningType']];
			
			if($this->planning[$p['planningType']]['etat']=='PROBLEME') {
				$this->error++;
			}
		}
		$sArray=array(2,3,1,4);
		
		
		
		if(is_array($this->planning) && count($this->planning)==4) {
			array_multisort(array(2,3,1,4), $this->planning);
		}
		else if(is_array($this->planning) && count($this->planning)==3) {
			array_multisort(array(2,3,4), $this->planning);
		}
		//print_r($this->client);
		
		
		//texts
		$this->lt=utils::file2array(__root__."themes/default/".$this->job['language'].".txt");
		
		
		if(empty($this->job['conditions'])) {
			$this->job['conditions']=$this->lt["La réservation sera prise en compte à la reception de votre accompte"];
		}
		
		$this->templateVars['job']=$this->job;
		$this->templateVars['job']['price']=sprintf('%.2f',$this->job['price']);
		$this->templateVars['job']['offreComments']=stripslashes($this->job['offreComments']);
		$this->templateVars['job']['priceComments']=stripslashes($this->job['priceComments']);
		$this->templateVars['job']['planningComments']=stripslashes($this->job['planningComments']);
		$this->templateVars['client']=$this->client;
		$this->templateVars['planning']=$this->planning;
		$this->templateVars['planningStates']=$this->p->states;
		
		foreach($this->slices as $k=>$s) {
			$this->slices[$k]['comments']=stripslashes($s['comments']);
		}
		$this->templateVars['slices']=$this->slices;
		
		$this->products=$this->pr->getProduct2Job($this->jobId);
		foreach($this->products as $k=>$s) {
			$this->products[$k]['description']=stripslashes($s['description']);
		}
		$this->templateVars['products']=$this->products;
		
		$this->templateVars['tents']['available']=$this->t->getAvailableTents($this->planning['build']['startDate'],$this->planning['unbuild']['endDate'],$this->job['offreType']);
		$this->templateVars['tents']['optional']=$this->t->getOptionalTents($this->planning['build']['startDate'],$this->planning['unbuild']['endDate'],$this->job['offreType']);
		$this->templateVars['tents']['currentOffre']=$this->t->getTent2Job($this->jobId);
		$this->templateVars['tents']['inJob']=$this->t->getInJobTents($this->planning['build']['startDate'],$this->planning['unbuild']['endDate'],$this->job['offreType'],$this->jobId);
		//print_r($this->templateVars['tents']['currentOffre']);
		
		//print_r($this->templateVars['tents']['inJob']);
		
		//print_r($this->templateVars['products']);
		$ava=array();
		foreach($this->templateVars['tents']['available'] as $tent) {
			$ava[$tent['tentId']]=1;
		}
		
		$opt=array();
		foreach($this->templateVars['tents']['optional'] as $tent) {
			$opt[$tent['tentId']]=$tent['inOption'];
		}
		$cur=array();
		foreach($this->templateVars['tents']['currentOffre'] as $tent) {
			$cur[$tent['tentId']]=1;
		}
		$ijob=array();
		foreach($this->templateVars['tents']['inJob'] as $tent) {
			$ijob[$tent['tentId']]=1;
		}
		
		//print_r($opt);
		foreach($this->templateVars['tents']['available'] as $k=>$tent) {
			if(array_key_exists($tent['tentId'],$opt)) {
				$this->templateVars['tents']['available'][$k]['inOption']="(opt: ".$opt[$tent['tentId']].")";
			}
			if(array_key_exists($tent['tentId'],$cur)) {
				unset($this->templateVars['tents']['available'][$k]);
			}
			
		}
		foreach($this->templateVars['tents']['currentOffre'] as $k=>$tent) {
			/*if(!array_key_exists($tent['tentId'],$ava)) {
				$this->templateVars['tents']['currentOffre'][$k]['class']="alert";
				$this->error++;
			}*/
			if(array_key_exists($tent['tentId'],$ijob)) {
				$this->templateVars['tents']['currentOffre'][$k]['class']="alert";
				$this->error++;
			}
			$calculatedSurface+=$tent['m2'];
		}
		
		//print_r($this->templateVars['tents']['currentOffre']);
		$this->templateVars['tents']['calculatedSurface']=$calculatedSurface;
		//
		
		foreach($this->templateVars['products'] as $p) {
			$this->productsTotal+=$p['price'];
		}
		$this->templateVars['productsTotal']=sprintf('%.2f',$this->productsTotal);
		
		//$this->templateVars['offre']['price']=sprintf("%01.2f", $money);$this->productsTotal;
		
		$this->tva=0;
		
			
		//	$this->templateVars['productsTotalTTC']=$this->productsTotal;
		//}
		if($this->job['priceType']!='intra') {
			$this->tva=21/100;
			$this->templateVars['productsTotalTVA']=sprintf('%.2f',$this->productsTotal*$this->tva);
			//$this->templateVars['productsTotalTTC']=$this->productsTotal+$this->templateVars['productsTotalTVA'];
		}
		$this->templateVars['productsTotalTTC']=sprintf('%.2f',$this->productsTotal+$this->productsTotal*$this->tva);
		
		
		
		
		
		
		//slices
		
		$sId=0;
		foreach($this->slices as $slice) {
			$totalPriceHT+=$slice['priceHT'];
			$totalPriceTTC+=$slice['priceHT'];
			$totalSlice+=$slice['slice'];
			$this->templateVars['slices'][$sId]['priceTTC']=sprintf('%.2f',$this->templateVars['slices'][$sId]['priceHT']*$this->tva + $this->templateVars['slices'][$sId]['priceHT']);
			if($slice['invoiceId']>0) {
				$invoiced++;
			}
			$sId++;
		}
		if($invoiced==$sId) {
			$this->job['status']='closed';
		}
		else {
			$this->job['status']='ok';
		}
		$this->templateVars['slicesTotalPriceHT']=sprintf('%.2f',$totalPriceHT);
		$this->templateVars['slicesTotalPriceTTC']=sprintf('%.2f',$totalPriceHT*$this->tva + $totalPriceHT);
		$this->templateVars['slicesTotalSlice']=$totalSlice;
		
		if($totalSlice<100 || $totalSlice>100) {
			$this->error++;
		}
		
		
		$this->templateVars['job']['error']=$this->error;
		
		$db=new DB;
		if($this->error>0) {
			$db->query="UPDATE #__jobs SET issue='".$this->error."',status='".$this->job['status']."' WHERE jobId='".$this->jobId."'";
		}
		else {
			$db->query="UPDATE #__jobs SET issue='0',status='".$this->job['status']."' WHERE jobId='".$this->jobId."'";
		}
		$db->resultType='none';
		$db->setQuery();
		
		foreach($this->templateVars['job'] as $k=>$v) {
			$this->templateVars['job'][$k]=stripslashes($v);
		}
		
		foreach($this->templateVars['tents']['currentOffre'] as $k=>$v) {
			$this->templateVars['tents']['currentOffre'][$k]['other']=stripslashes($v['other']);
		}
		
		$this->documents=array();
		if($docs=utils::file_list(__root__."docs/jobs/".$this->jobId)) {
			foreach($docs as $d) {
				$this->documents[]=array('url'=>$d);
			}
		}
		$this->templateVars['documents']=$this->documents;
		
	}



	function saveJob() {
		/*
		echo "<pre style='text-align:left'>";
		print_r($_POST);
		echo "</pre>";
		*/
		
		//offre
		$this->job=$_POST['job'];
		$this->jobId=$_POST['job']['jobId'];
		
		if($this->jobId<=0) {
			$this->listJobs();
		}
		
		$db=new DB;
		$db->query="UPDATE #__jobs SET ".$db->setUpdate($_POST['job'])." WHERE jobId='".$this->jobId."'";
		$db->setQuery();
		
		
		
		//planning
		foreach($_POST['planning'] as $type=>$planning) {
			$planning['startDate']=utils::dateFormatToDB($planning['startDate']);
			$planning['endDate']=utils::dateFormatToDB($planning['endDate']);

			$db=new DB;
			$db->query="UPDATE #__planning2job SET ".$db->setUpdate($planning)." WHERE planningType='".$type."' AND jobId='".$this->jobId."'";
			$db->setQuery();
		}
		
		$db=new DB;
		$db->query="UPDATE #__jobs SET startBuild='".utils::dateFormatToDB($_POST['planning']['build']['startDate'])."',endBuild='".utils::dateFormatToDB($_POST['planning']['unbuild']['endDate'])."' WHERE jobId='".$this->jobId."'";
		$db->setQuery();
		
		//tents
		$tTents=explode(",",$_POST['job']['tents']);
		
		$db=new DB;
		$db->query="DELETE FROM #__tent2job WHERE  jobId='".$this->jobId."'";
		$db->setQuery();
		foreach($tTents as $k=>$tentId) {
			
			if(count($_POST['tents'][$tentId])==0) {$_POST['tents'][$tentId]=array();}
			$_POST['tents'][$tentId]['tentId']=$tentId;
			$_POST['tents'][$tentId]['jobId']=$this->jobId;
			$db=new DB;
			//$db->query="INSERT INTO #__tent2offre ".$db->setInsert($_POST['tents'][$tentId])." ON DUPLICATE KEY UPDATE ".$db->setUpdate($_POST['tents'][$tentId]);
			$db->query="INSERT INTO #__tent2job ".$db->setInsert($_POST['tents'][$tentId])." ";
			$db->setQuery();
				//echo $db->query."<br/>";
			
		}
		
	
		//products
		
		if(count($_POST['products'])>0) {
			$db=new DB;
			$db->query="DELETE FROM #__product2job WHERE  jobId='".$this->jobId."'";
			$db->setQuery();
			
			$pId=1;
			$total=0;
			foreach($_POST['products'] as $product) {
				
					$product['productId']=$pId;
					$product['rank']=$pId;
					$product['jobId']=$this->jobId;
				//	$product['offreId']=$this->job['offreId'];
					$db=new DB;
					$db->query="INSERT INTO #__product2job ".$db->setInsert($product)." ";
					
					$db->setQuery();
					//echo $db->query."<br/>";
				
				$total+=$product['price'];
				$pId++;
				//echo "---".$db->query;
			}
			
			
			
			$this->job['price']=$total;
			$db=new DB;
			$db->query="UPDATE #__jobs SET price='".$total."' WHERE jobId='".$this->jobId."'";
			$db->setQuery();
		}
		
		
		//slices
		
		$db=new DB;
		$db->query="DELETE FROM #__slice2job WHERE (invoiceId<=0 OR invoiceId IS NULL) AND jobId='".$this->jobId."'";
		$db->setQuery();
		//echo $db->query;
	
		$sId=1;
		foreach($_POST['slices'] as $slice) {
			//echo "--------".$slice['invoiceId']."----<br/>";
			if($slice['invoiceId']<=0) {
				$db=new DB;
				$slice['jobId']=$this->jobId;
				$slice['sliceId']=$sId;
				if($slice['slice']>0 ) {
					$slice['priceHT']=$this->job['price']*$slice['slice']/100;
				}
				else if($slice['priceHT']>0) {
					$slice['slice']=$slice['priceHT']*100/$this->job['price'];
				}
				$db->query="INSERT INTO #__slice2job ".$db->setInsert($slice)." ";
				$db->setQuery();
				//echo $db->query."<br/>";
				//echo $db->query;
			}
			$sId++;
			//echo $db->query;
		}
		
	}



	function newJob($offreId) {
		//job
		/*
		$db=new DB;
		$db->query="SELECT * FROM #__users WHERE userId=1";
		$db->setQuery();
		$_SESSION['user']=$db->output[0];
		 * 
		 */
		$this->offreId=$offreId;
		
		$fields=array();
		$db=new DB;
		$db->query="SHOW COLUMNS FROM #__jobs";
		$db->setQuery();
		foreach($db->output as $row) {
			$fields[]=$row['Field'];
		}
		
		$db=new DB;
		$db->query="SELECT * FROM #__offres WHERE offreId='".$this->offreId."'";
		$db->setQuery();
		//echo $db->query;
		$this->offre=$db->output[0];
		
		$field=array();
		$value=array();
		foreach($fields as $f) {
			if($this->offre[$f]!='') {
				$field[]="`".$f."`";
				$value[]="\"".$this->offre[$f]."\"";
			}
		}
		
		$db=new DB;
		$db->query="INSERT INTO #__jobs (".implode(',',$field).") VALUES (".implode(',',$value).")";
		$db->SetQuery();
		//echo $db->query;
		$this->jobId=mysql_insert_id();
		
		$newRef=date('Ym')."-".$_SESSION['user']['iso']."-".$this->jobId;
		$db=new DB;
		$db->query="UPDATE #__jobs SET userId='".$_SESSION['user']['userId']."',insertDate=NOW(),reference='".$newRef."' WHERE jobId='".$this->jobId."'";
		$db->setQuery();
		
		
		
		//tents
		$this->fromOffre2Job('tent');
		
		//products
		$this->fromOffre2Job('product');
		
		//planning
		$this->fromOffre2Job('planning');
		
		//slices
		$this->fromOffre2Job('slice');
		
		mail("yvan@organic-concept.com","New job ".$newRef,"Offre: ".$this->offre['reference'],"From:organic@caravanemedia.net");
		mail("benjamin@organic-concept.com","New job ".$newRef,"Offre: ".$this->offre['reference'],"From:organic@caravanemedia.net");
		
		
	}


	function fromOffre2Job($table,$escape=array()) {
		$db=new DB;
		$db->query="SELECT * FROM #__".$table."2offre WHERE offreId='".$this->offreId."'";
		$db->setQuery();
		
		//echo $db->query;
		$this->tents=$db->output;
		
		foreach($this->tents as $t) {
			$field=array();
			$value=array();
			unset($t['offreId']);
			$t['jobId']=$this->jobId;
			foreach($t as $k=>$v) {
				$field[]="`".$k."`";
				$value[]='"'.addslashes($v).'"';
			}
			$db=new DB;
			$db->query="INSERT INTO #__".$table."2job (".implode(',',$field).") VALUES (".implode(',',$value).")";
			$db->setQuery();
			//echo $db->query."<br/>";
		}
	}
	
	
	function deleteJob() {
		$db=new DB;
		$db->query="SELECT invoiceId FROM #__invoices WHERE jobId='".$this->jobId."'";
		if($db->setQuery('first','invoiceId')>0) {
			echo "Ce job a déja été facturé et ne peux être supprimé.";
		}
		$db=new DB;
		$db->query="DELETE FROM #__tent2job WHERE jobId='".$this->jobId."'";
		$db->setQuery();
		$db=new DB;
		$db->query="DELETE FROM #__planning2job WHERE jobId='".$this->jobId."'";
		$db->setQuery();
		$db=new DB;
		$db->query="DELETE FROM #__product2job WHERE jobId='".$this->jobId."'";
		$db->setQuery();
		$db=new DB;
		$db->query="DELETE FROM #__jobs WHERE jobId='".$this->jobId."'";
		$db->setQuery();
		echo "Job ".$this->jobId." supprimé";
		
	}
	
	
	function uncloseJob() {
		$db=new DB;
		$db->query="UPDATE #__jobs SET status='CONFIRMÉ' WHERE jobId='".$this->jobId."'";
		$db->setQuery();
		echo $db->query;
	}
}
?>