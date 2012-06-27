<?php



/* TODO
 * 
 * - textes par defaut en 2 langues -> OK
 * - switch client type -> OK
 * - clients autocomplete + new => foire pour part
 * 
 * - extraire gestion des slices
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */

 



class offre {
	
	var $templateVars=array();
	var $offreTypes=array('rent'=>"Location",'sell'=>"Vente",'winter'=>"Hivernage");
	var $offreIsoTypes=array('rent'=>"OL",'sell'=>"OV",'winter'=>"OH");
	var $offreStatus=array('draft'=>"En cours de rédaction",'ok'=>"Envoyée au client","CONFIRMÉ"=>"Approuvée",'cancel'=>"Annulée");
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
			case 'listOffres':
				//
				if(isset($_GET['offreId'])) {
					$this->offreId=$_GET['offreId'];
					//echo $this->offreId;
					
					$this->content.=$this->editOffre();
				}
				else {
					$this->content.=$this->listOffres();
				}
			break;
			
		}
		return $this->content;
	}
	
	
	function subMenu() {
		$out="<div class=\"submenu\" style='height:22px'>";
		$out.="<div class='right' style='width:200px'>";
		$out.="<input type=\"button\" value=\"Créer une nouvelle offre\" onclick=\"document.location='/quotes?offreId='\" class=\"button\"/>";
		$out.="</div>";
		$out.="</div>";
		$out.="<br class='clearfloat' />";
		$this->content.=$out;
	}
	
	
	function listOffres() {
		
		
		
		$db=new DB;
		$db->query="SELECT O.offreId,O.clientId,O.reference,CONCAT(C.name,' ',C.firstname,' ',C.lastname) AS client, CONCAT(U.firstname,' ',U.lastname) AS userName,O.offreType,O.price,O.status,C.country as facturation,O.country AS livraison, DATE_FORMAT( O.insertDate, '%d/%m/%Y')  AS insertDate,J.jobId,J.reference AS jobReference,O.language,O.issue    
		FROM #__offres O 
		LEFT JOIN #__clients C ON C.clientId=O.clientId 
		LEFT JOIN #__jobs J ON J.offreId=O.offreId 
		LEFT JOIN #__users U ON U.userId=O.userId 
		WHERE O.public='1' 
		GROUP BY O.offreId 
		ORDER BY O.insertDate DESC";
		$tOffres=$db->setQuery();
		//echo $db->query;
		$i=0;
		$allOffres=array();
		$runningOffres=array();
		$confirmedOffres=array();
		$canceledOffres=array();
		foreach($tOffres as $o) {
			$allOffres[$i]['id']=$o['offreId'];
			if($o['status']=="draft" || $o['status']=="ok") {
				$allOffres[$i]['reference']="<b><a href='/quotes?offreId=".$o['offreId']."'>".$o['reference']."</a></b>";
			}
			else {
				$allOffres[$i]['reference']="<b>".$o['reference']."</b>";
			}
			$allOffres[$i]['client']="<a href='/clients?clientId=".$o['clientId']."'>".$o['client']."</a>";
			$allOffres[$i]['type']=$this->offreTypes[$o['offreType']];
			$allOffres[$i]['price']=number_format($o['price'], 2, ',', '.');
			if($o['jobId']>0) {
				$allOffres[$i]['status']="Job <b><a href='/jobs?jobId=".$o['jobId']."'>".$o['jobReference']."</a></b>";
			}
			else {
				$allOffres[$i]['status']=$this->offreStatus[$o['status']];
			}
			$allOffres[$i]['facturation']=$o['facturation'];
			$allOffres[$i]['livraison']=$o['livraison'];
			$allOffres[$i]['date']=$o['insertDate'];
			$allOffres[$i]['language']="<a onclick=\"getOffrePdf('".$o['offreId']."','fr')\"><img src='/themes/default/images/buttons/pdf.png' />fr</a>
			<a onclick=\"getOffrePdf('".$o['offreId']."','nl')\"><img src='/themes/default/images/buttons/pdf.png' />nl</a>";
			
			
			$allOffres[$i]['issue']='0';
			
			if($o['status']=="draft" || $o['status']=="ok") {
				$allOffres[$i]['edit']="<a href='/quotes?offreId=".$o['offreId']."'><img src='/themes/default/images/buttons/edit.png' alt='Editer' title='Editer' /></a>";
				$allOffres[$i]['issue']=$o['issue'];
				$allOffres[$i]['reference']="<b><a href='/quotes?offreId=".$o['offreId']."'>".$o['reference']."</a></b>";
			}
			else {
				$allOffres[$i]['edit']="";
				
			}
			
			if($o['status']=="draft") {
				$allOffres[$i]['delete']="<a onclick=\"deleteOffre('".$o['offreId']."')\"><img src='/themes/default/images/buttons/del.png' alt='Supprimer' title='Supprimer' /></a>";
			}
			else {
				$allOffres[$i]['delete']="";
			}
			
			
			
			if($o['jobId']>0) {
				$confirmedOffres[]=$allOffres[$i];
			}
			else if($o['status']=='ANNULÉ' || $o['status']=='cancel') {
				$canceledOffres[]=$allOffres[$i];
			}
			else {
				$runningOffres[]=$allOffres[$i];
			}
			
			$i++;
		}
		
	
		$tabs=array(
			
			array('id'=>'runningOffres',label=>'Offres en cours','rows'=>$runningOffres),
			
			array('id'=>'confirmedOffres',label=>'Offres confirmées','rows'=>$confirmedOffres),
			array('id'=>'canceledOffres',label=>'Offres annulées','rows'=>$canceledOffres),
			array('id'=>'allOffres',label=>'Toutes les offres','rows'=>$allOffres)
		);
		
		
		
		$cols=array(
			array('field'=>"reference",label=>'Reference'),
			array('field'=>"",label=>'Client'),
			array('field'=>"",label=>'Type'),
			array('field'=>"",label=>'Montant HTVA'),
			array('field'=>"",label=>'Statut'),
			array('field'=>"",label=>'Facturation'),
			array('field'=>"",label=>'Livraison'),
			array('field'=>"",label=>'Date'),
			array('field'=>"",label=>'Lg'),
			array('field'=>"",label=>'Err'),
			array('field'=>"",label=>'Ed'),
			array('field'=>"",label=>'Sup')
		);
		$this->templateVars=array('tabs'=>$tabs,'cols'=>$cols);
			
		return template::parse("offres.list.tpl",$this->templateVars);
		
	}

	function editOffre() {
		
		if($_POST) {
			$this->saveOffre();
		}
		$this->getOffre();	
		return template::parse("offre.edit.tpl",$this->templateVars);
	}
	
	
	function getPdf() {
		
		$this->getOffre();	
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
		
		
		
		
		
		return template::parse("offre.pdf.".$_GET['language'].".tpl",$this->templateVars);
	}


	function getOffre() {
		
		
		if($this->offreId<=0) {
			
			$this->newOffre();
		}
		
		
		
		$this->templateVars['offreId']=$this->offreId;
		$this->templateVars['langs']=$this->langs;
		$this->templateVars['status']=$this->offreStatus;
		$this->templateVars['offreTypes']=$this->offreTypes;
		$this->templateVars['cieTypes']=$this->c->cieTypes;
		$this->templateVars['clientTitles']=$this->c->clientTitles;
		$this->templateVars['countries']=$this->s->countries;
		$this->templateVars['users']=$this->u->users;
		
		
	
		//$this->templateVars['planningPhases']=$this->p->phases;
		
		
		$db=new DB;
		$db->query="SELECT O.*,DATE_FORMAT(O.insertDate, '%d/%m/%Y')  AS offreDate,DATE_FORMAT(O.startBuild, '%d/%m/%Y')  AS fStartBuild, DATE_FORMAT(O.endBuild, '%d/%m/%Y')  AS fEndBuild ,(TO_DAYS(O.endBuild) - TO_DAYS(O.startBuild)) AS inPlace FROM #__offres O  WHERE O.offreId='".$this->offreId."'";
		$this->offre=$db->setQuery('first');
		
		$t=explode('-',$this->offre['insertDate']);
		if(empty($this->offre['reference']) || $this->offre['reference']=='') {
			$this->offre['reference']=$t[0].$t[1]."-".$this->offre['offreId']."-".$this->offreIsoTypes[$this->offre['offreType']]."-".$_SESSION['user']['iso'];
		}
		
		
		$db=new DB;
		$db->query="SELECT * FROM #__users WHERE userId='".$this->offre['userId']."'";
		$this->templateVars['user']=$db->setQuery('first');
		
		$db=new DB;
		$db->query="SELECT * FROM #__jobs WHERE offreId='".$this->offreId."'";
		$this->job=$db->setQuery('first');
		if($this->offre['clientId']>0) {
			$this->c->clientId=$this->offre['clientId'];
			$this->client=$this->c->getClient();
		}
		else {
			$this->error++;
		}	
		
		
		/*
		$db=new DB;
		$db->query="SELECT * FROM #__clients WHERE clientId='".$this->offre['clientId']."'";
		$this->client=$db->setQuery('first');
		*/
		$this->sl->offreId=$this->offreId;
		$this->slices=$this->sl->getSliceFromOffre();
		/*
		$db=new DB;
		$db->query="SELECT * FROM #__slices WHERE offreId='".$this->offreId."'";
		$this->slices=$db->setQuery();
		*/
		$db=new DB;
		$db->query="SELECT *,DATE_FORMAT( startDate, '%d/%m/%Y %H:%i:%s') AS formatedStartDate ,DATE_FORMAT( endDate, '%d/%m/%Y %H:%i:%s') AS formatedEndDate FROM #__planning2offre WHERE offreId='".$this->offreId."'";
		$tplanning=$db->setQuery();
		//echo $db->query;
		
		foreach($tplanning as $p) {
			$this->planning[$p['planningType']]=$p;
			$this->planning[$p['planningType']]['label']=$this->p->phases[$p['planningType']];
		}
		$sArray=array(2,3,1,4);
		if(is_array($this->planning)) {
		array_multisort($sArray, $this->planning);
		}
		//print_r($this->client);
		
		//texts
		$this->lt=utils::file2array(__root__."themes/default/".$this->offre['language'].".txt");
		
		/*
		if(empty($this->offre['conditions'])) {
			$this->offre['conditions']=$this->lt["La réservation sera prise en compte à la reception de votre accompte"];
		}
		 */
		$this->templateVars['offre']=$this->offre;
		$this->templateVars['job']=$this->job;
		$this->templateVars['client']=$this->client;
		$this->templateVars['planning']=$this->planning;
		$this->templateVars['slices']=$this->slices;
		$this->products=$this->pr->getProduct2Offre($this->offreId);
		foreach($this->products as $k=>$s) {
			$this->products[$k]['description']=stripslashes($s['description']);
		}
		$this->templateVars['products']=$this->products;
		$this->templateVars['productOptions']=$this->pr->getProductOption2Offre($this->offreId);
		
		
		$this->templateVars['tents']['available']=$this->t->getAvailableTents($this->planning['build']['startDate'],$this->planning['unbuild']['endDate'],$this->offre['offreType']);
		
		$this->templateVars['tents']['optional']=$this->t->getOptionalTents($this->planning['build']['startDate'],$this->planning['unbuild']['endDate'],$this->offre['offreType']);
		$this->templateVars['tents']['currentOffre']=$this->t->getTent2Offre($this->offreId);
		
		
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
		
		//print_r($opt);
		foreach($this->templateVars['tents']['available'] as $k=>$tent) {
			if(array_key_exists($tent['tentId'],$opt)) {
				$this->templateVars['tents']['available'][$k]['inOption']="(opt: ".$opt[$tent['tentId']].")";
			}
			if(array_key_exists($tent['tentId'],$cur)) {
				unset($this->templateVars['tents']['available'][$k]);
			}
		}
		$tTents=array();
		foreach($this->templateVars['tents']['currentOffre'] as $k=>$tent) {
			if(!array_key_exists($tent['tentId'],$ava)) {
				$this->templateVars['tents']['currentOffre'][$k]['class']="alert";
				$this->error++;
			}
			$tTents[]=$tent['tentId'];
			$calculatedSurface+=$tent['m2'];
		}
		$this->templateVars['offre']['tents']=implode(',',$tTents);
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
		if($this->offre['priceType']!='intra') {
			$this->tva=21/100;
			$this->templateVars['productsTotalTVA']=sprintf('%.2f',$this->productsTotal*$this->tva);
			//$this->templateVars['productsTotalTTC']=$this->productsTotal+$this->templateVars['productsTotalTVA'];
		}
		$this->templateVars['productsTotalTTC']=sprintf('%.2f',$this->productsTotal+$this->productsTotal*$this->tva);
		foreach($this->templateVars['productOptions'] as $p) {
			$this->productOptionsTotal+=$p['price'];
		}
		$this->templateVars['productOptionsTotal']=$this->productOptionsTotal;
		$this->templateVars['productOptionsTotalTVA']=$this->productOptionsTotal*$this->tva;
		$this->templateVars['productOptionsTotalTTC']=$this->productOptionsTotal+$this->templateVars['productOptionsTotalTVA'];
		
		
		
		
		
		//slices
		
		$sId=0;
		foreach($this->slices as $slice) {
			$totalPriceHT+=$slice['priceHT'];
			$totalPriceTTC+=$slice['priceHT'];
			$totalSlice+=$slice['slice'];
			$this->templateVars['slices'][$sId]['comments']=stripslashes($this->templateVars['slices'][$sId]['comments']);
			/*if($this->offre['priceType']=='intra') {
				$this->templateVars['slices'][$sId]['priceTTC']=$this->templateVars['slices'][$sId]['priceHT'];
			}
			else {
				$this->templateVars['slices'][$sId]['priceTTC']=$this->templateVars['slices'][$sId]['priceHT']*21/100 + $this->templateVars['slices'][$sId]['priceHT'];
			}*/
			$this->templateVars['slices'][$sId]['priceTTC']=sprintf('%.2f',$this->templateVars['slices'][$sId]['priceHT']*$this->tva + $this->templateVars['slices'][$sId]['priceHT']);
			$sId++;
		}
		$this->templateVars['slicesTotalPriceHT']=sprintf('%.2f',$totalPriceHT);
		/*if($this->offre['priceType']=='intra') {
			$this->templateVars['slices']['totalPriceTTC']=$this->templateVars['slices']['totalPriceHT'];
		}
		else {
			$this->templateVars['slices']['totalPriceTTC']=$this->templateVars['slices']['totalPriceHT']*21/100 + $this->templateVars['slices']['totalPriceHT'];
		}*/
		$this->templateVars['slicesTotalPriceTTC']=sprintf('%.2f',$totalPriceHT*$this->tva + $totalPriceHT);
		$this->templateVars['slicesTotalSlice']=$totalSlice;
		
		if($totalSlice<100 || $totalSlice>100) {
			$this->error++;
		}
		
	//	print_r($this->templateVars['slices']);
		//print_r($this->templateVars['tents']['optional']);
		
		//print_r($this->planning);
		$this->templateVars['offre']['error']=$this->error;
		
		$db=new DB;
		if($this->error>0) {
			$db->query="UPDATE #__offres SET issue='".$this->error."' WHERE offreId='".$this->offreId."'";
		}
		else {
			$db->query="UPDATE #__offres SET issue='0' WHERE offreId='".$this->offreId."'";
		}
		
		$db->resultType='none';
		$db->setQuery();
		
		foreach($this->templateVars['offre'] as $k=>$v) {
			$this->templateVars['offre'][$k]=stripslashes($v);
		}
			
		foreach($this->templateVars['tents']['currentOffre'] as $k=>$v) {
			$this->templateVars['tents']['currentOffre'][$k]['other']=stripslashes($v['other']);
		}
		
		$this->documents=array();
		if($docs=utils::file_list(__root__."docs/offres/".$this->offreId)) {
			foreach($docs as $d) {
				$this->documents[]=array('url'=>$d);
			}
		}
		$this->templateVars['documents']=$this->documents;
		//return template::parse("offre.edit.tpl",$this->templateVars);
	}



	function saveOffre() {
		/*
		echo "<pre style='text-align:left'>";
		print_r($_POST);
		echo "</pre>";
		*/
		
		//offre
		$this->offre=$_POST['offre'];
		$this->offreId=$_POST['offre']['offreId'];
		
		$tE=explode('-',$_POST['offre']['reference']);
		switch($_POST['offre']['offreType']) {
			default:
				$ol="OL";
			break;
			
			case 'sell':
				$ol='OV';
			break;
			case 'winter':
				$ol="OH";
			break;
		}
		$tE[2]=$ol;
		$_POST['offre']['reference']=implode('-',$tE);
		
		$db=new DB;
		$db->query="UPDATE #__offres SET ".$db->setUpdate($_POST['offre'])." WHERE offreId='".$this->offreId."'";
		$db->setQuery();
		
		//echo $db->query;
		//client
		/*
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		 * 
		 */
		if($_POST['client']['otherCieType']) {$_POST['client']['cieType']=$_POST['client']['otherCieType'];}
		unset($_POST['client']['otherCieType']);
		if($_POST['offre']['clientId']>0) {
			$db=new DB;
			$db->query="UPDATE #__clients SET ".$db->setUpdate($_POST['client'])." WHERE clientId='".$this->offre['clientId']."'";
			$db->setQuery();
			//echo $db->query;
		}
		else {
			$db=new DB;
			$db->query="INSERT INTO #__clients  ".$db->setInsert($_POST['client'])." ";
			$db->setQuery();
			$_POST['offre']['clientId']=mysql_insert_id();
		}
		//planning
		foreach($_POST['planning'] as $type=>$planning) {
			$planning['startDate']=utils::dateFormatToDB($planning['startDate']);
			$planning['endDate']=utils::dateFormatToDB($planning['endDate']);

			$db=new DB;
			$db->query="UPDATE #__planning2offre SET ".$db->setUpdate($planning)." WHERE planningType='".$type."' AND offreId='".$this->offreId."'";
			$db->setQuery();
			//echo $db->query;
		}
		
		$db=new DB;
		$db->query="UPDATE #__offres SET startBuild='".utils::dateFormatToDB($_POST['planning']['build']['startDate'])."',endBuild='".utils::dateFormatToDB($_POST['planning']['unbuild']['endDate'])."' WHERE offreId='".$this->offreId."'";
		$db->setQuery();
		
		//tents
		$tTents=explode(",",$_POST['offre']['tents']);
		
		$db=new DB;
		$db->query="DELETE FROM #__tent2offre WHERE  offreId='".$this->offreId."'";
		$db->setQuery();
		
		foreach($tTents as $k=>$tentId) {
			
			if(count($_POST['tents'][$tentId])==0) {$_POST['tents'][$tentId]=array();}
			$_POST['tents'][$tentId]['tentId']=$tentId;
			$_POST['tents'][$tentId]['offreId']=$this->offreId;
			//$tTents[]=$tentId;
			$db=new DB;
			//$db->query="INSERT INTO #__tent2offre ".$db->setInsert($_POST['tents'][$tentId])." ON DUPLICATE KEY UPDATE ".$db->setUpdate($_POST['tents'][$tentId]);
			$db->query="INSERT INTO #__tent2offre ".$db->setInsert($_POST['tents'][$tentId])." ";
			$db->setQuery();
			//echo $db->query."<br/>";
			
		}
		
	
		//products
		
		if(count($_POST['products'])>0) {
			$db=new DB;
			$db->query="DELETE FROM #__product2offre WHERE isOption=0 AND offreId='".$this->offreId."'";
			$db->setQuery();
			
			$pId=1;
			$total=0;
			foreach($_POST['products'] as $product) {
				$product['productId']=$pId;
				$product['rank']=$pId;
				$product['offreId']=$this->offreId;
				$product['isFromOffre']=1;
				$db=new DB;
				$db->query="INSERT INTO #__product2offre ".$db->setInsert($product)." ";
				$db->setQuery();
				$total+=$product['price'];
				$pId++;
				//echo $db->query;
			}
			
			$this->offre['price']=$total;
			$db=new DB;
			$db->query="UPDATE #__offres SET price='".$total."' WHERE offreId='".$this->offreId."'";
			$db->setQuery();
		}
		
		//options
		if($this->offre['status']!='CONFIRMÉ') {
			$db=new DB;
			$db->query="DELETE FROM #__product2offre WHERE isOption=1 AND offreId='".$this->offreId."'";
			$db->setQuery();
				
			if(count($_POST['options'])>0) {
				foreach($_POST['options'] as $product) {
					$product['productId']=$pId;
					$product['rank']=$pId;
					$product['offreId']=$this->offreId;
					$product['isFromOffre']=1;
					$product['isOption']=1;
					$db=new DB;
					$db->query="INSERT INTO #__product2offre ".$db->setInsert($product)." ";
					$db->setQuery();
					$pId++;
					//echo $db->query;
				}
			}
		}
		//slices
		
		$db=new DB;
		$db->query="DELETE FROM #__slice2offre WHERE  offreId='".$this->offreId."'";
		$db->setQuery();
		
	
		$sId=1;
		foreach($_POST['slices'] as $slice) {
			$db=new DB;
			$slice['offreId']=$this->offreId;
			$slice['sliceId']=$sId;
			if($slice['slice']>0 ) {
				$slice['priceHT']=$this->offre['price']*$slice['slice']/100;
			}
			else if($slice['priceHT']>0) {
				$slice['slice']=$slice['priceHT']*100/$this->offre['price'];
			}
			$db->query="INSERT INTO #__slice2offre ".$db->setInsert($slice)." ";
			$db->setQuery();
			$sId++;
			//echo $db->query;
		}
		
		if($this->offre['status']=='CONFIRMÉ' && $this->offre['jobId']<=0) {
			$job=new job;
			$job->newJob($this->offreId);
		}
	}



	function newOffre() {
		
	
		//add offre, planning,slices
		$db=new DB;
		$db->query="INSERT INTO #__offres (`insertDate`,`userId`,`offreType`,`status`) VALUES (NOW(),'".$_SESSION['user']['userId']."','rent','draft')";
		if($this->clientId>0) {
			$db->query="INSERT INTO #__offres (`insertDate`,`userId`,`offreType`,`status`,clientId) VALUES (NOW(),'".$_SESSION['user']['userId']."','rent','draft','".$this->clientId."')";
		}
		$db->setQuery();
		
		//echo $db->query;
		
		
		$this->offreId=mysql_insert_id();
		$db=new DB;
		$db->query="UPDATE #__offres SET reference='".date('Ym')."-".$this->offreId."-OL-".$_SESSION['user']['iso']."' WHERE offreId='".$this->offreId."'";
		$db->setQuery();
		//echo $db->query;
		
		foreach($this->p->phases as $type=>$label) {
			$db=new DB;
			$db->query="INSERT INTO #__planning2offre (offreId,planningType) VALUES ('".$this->offreId."','".$type."')";
			$db->setQuery();
			//echo $db->query;
		}
		
		$db=new DB;
		$db->query="INSERT INTO #__slice2offre (comments,slice,offreId,sliceId) VALUES ('100%','100','".$this->offreId."','1')";
		$db->setQuery();
		//echo $db->query;
		
		if($this->clientId>0) {
			return $this->offreId;
		}
		
		echo "<script>document.location='/quotes?offreId=".$this->offreId."'</script>";
		
	}
	
	
	
	function deleteOffre() {
		$db=new DB;
		$db->query="DELETE FROM `#__offres` WHERE offreId='".$this->offreId."' ";
		$db->setQuery();
		//echo $db->query;
		$db=new DB;
		$db->query="DELETE FROM `#__planning2offre` WHERE offreId='".$this->offreId."' ";
		$db->setQuery();
		$db=new DB;
		$db->query="DELETE FROM `#__slice2offre` WHERE offreId='".$this->offreId."' ";
		$db->setQuery();
		$db=new DB;
		$db->query="DELETE FROM `#__tent2offre` WHERE offreId='".$this->offreId."' ";
		$db->setQuery();
	}
	
	
	
}


?>