<?php

class client {
	var $clientId;
	var $cieTypes=array();
	var $clientTitles=array('M.','Mme');
	
	var $langs=array('fr','nl','en');
	
	function __construct() {
		$this->getCieTypes();
	}

	function display() {
		
		$this->s=new shared;
		$this->u=new user;
		$this->o=new offre;
		
		
		
		$this->submenu();
		switch($this->params->function) {
			default:
			case 'listClients':
				//
				if(isset($_GET['clientId'])) {
					$this->clientId=$_GET['clientId'];
					$this->content.=$this->editClient();
				}
				else {
					$this->content.=$this->listClients();
				}
			break;
			
		}
		return $this->content;
	}
	
	
	function subMenu() {
		$out="<div class=\"submenu\" style='height:22px'>";
		$out.="<div class='right' style='width:200px'>";
		$out.="<input type=\"button\" value=\"Créer un nouveau client\" onclick=\"document.location='/clients?clientId='\" class=\"button\"/>";
		$out.="</div>";
		$out.="</div>";
		$out.="<br class='clearfloat' />";
		$this->content.=$out;
	}
	
	
	function listClients() {
		
		
		$db=new DB;
		$db->query="SELECT C.*,GROUP_CONCAT(DISTINCT CONCAT('<a href=\"/tents?tentId=',T.tentId,'\"/>',  T.reference,'</a>') SEPARATOR \"<br/>\") AS tents FROM #__clients C LEFT JOIN #__tents T ON T.ownerId=C.clientId GROUP BY C.clientId ORDER BY C.name,C.lastname,C.firstname";
		$tClients=$db->setQuery();
		
		//echo $db->query;
		
		$isOwner=array();
		$isRenter=array();
		$isCie=array();
		$isPart=array();
		$allClients=array();
		foreach($tClients as $o) {
			
			$allClients[$i]['reference']="<b><a href='/clients?clientId=".$o['clientId']."'>".$o['reference']."</a></b>";
			$allClients[$i]['type']=$o['clientType'];
			$allClients[$i]['name']="<b><a href='/clients?clientId=".$o['clientId']."'>".$o['name']."</a></b>";
			$allClients[$i]['lastname']="<b><a href='/clients?clientId=".$o['clientId']."'>".$o['lastname']."</a></b>";
			$allClients[$i]['firstname']=$o['firstname'];
			$allClients[$i]['vat']=$o['vat'];
			$allClients[$i]['isOwner']=$o['tents'];
			$allClients[$i]['email']="<a href='mailto:".$o['email']."'>".$o['email']."</a>";
			$allClients[$i]['phone']=$o['phone'];
			$allClients[$i]['mobile']=$o['mobile'];
			$allClients[$i]['edit']=$o['etat']="<a href='/clients?clientId=".$o['clientId']."'><img src='/themes/default/images/buttons/edit.png' alt='Editer' title='Editer' /></a>";
			$allClients[$i]['delete']="<a onclick=\"deleteClient('".$o['clientId']."')\"><img src='/themes/default/images/buttons/del.png' alt='Supprimer' title='Supprimer' /></a>";
			
			if($o['tents']!='') {
				$isOwner[]=$allClients[$i];
			}
			else {
				$isRenter[]=$allClients[$i];
			}
			
			if($o['clientType']=='cie') {
				$isCie[]=$allClients[$i];
			}
			else {
				$isPart[]=$allClients[$i];
			}
			
			
			$i++;
		}
		
		
		
	
		$tabs=array(
			array('id'=>'allClients',label=>'Tous les clients','rows'=>$allClients),
			array('id'=>'ownerClients',label=>'Propriétaires','rows'=>$isOwner),
			array('id'=>'renterClients',label=>'Locataires','rows'=>$isRenter),
			array('id'=>'cieClients',label=>'Sociétés','rows'=>$isCie),
			array('id'=>'partClients',label=>'Particuliers','rows'=>$isPart)
		);
		
		
		
		$cols=array(
			array('field'=>"reference",label=>'Reference'),
			array('field'=>"",label=>'Type'),
			array('field'=>"",label=>'Société'),
			array('field'=>"",label=>'Nom'),
			array('field'=>"",label=>'Prénom'),
			array('field'=>"",label=>'TVA'),
			array('field'=>"",label=>'Propriétaire'),
			array('field'=>"",label=>'Email'),
			array('field'=>"",label=>'Téléphone'),
			array('field'=>"",label=>'Mobile'),
			array('field'=>"",label=>'Ed'),
			array('field'=>"",label=>'Sup')
		);
		$this->templateVars=array('tabs'=>$tabs,'cols'=>$cols);
			
		return template::parse("clients.list.tpl",$this->templateVars);
		
	}


	
	function editClient() {
		if($_POST) {
			$this->saveClient();
		}
		$this->fromEdit=true;
		$this->getClient();	
		return template::parse("client.edit.tpl",$this->templateVars);
	}
	

	function getClient() {
		
		
		if($this->clientId<=0) {
			$this->newClient();
		}
		
		$db=new DB;
		$db->query="SELECT * FROM #__clients WHERE clientId='".$this->clientId."'";
		$this->client=$db->setQuery('first');
		$this->templateVars=array();
		
		
		$this->templateVars['client']=$this->client;
		
		
		$this->templateVars['clientId']=$this->clientId;
		$this->templateVars['langs']=$this->langs;
		$this->templateVars['cieTypes']=$this->cieTypes;
		$this->templateVars['clientTitles']=$this->clientTitles;
		$this->templateVars['countries']=$this->s->countries;
		$this->templateVars['users']=$this->u->users;
		
		//print_r($this->u->users);
		$this->templateVars['errorVat']=$this->errorVat;
		$this->templateVars['existingVat']=$this->existingVat;
		
		
		if($this->fromEdit==true && $this->clientId>0) {
			$db=new DB;
			$db->query="SELECT reference,name,tentId,length,width,m2 FROM #__tents WHERE ownerId='".$this->clientId."'";
			$this->tents=$db->setQuery();
			$this->templateVars['tents']=$this->tents;
			
			$db=new DB;
			$db->query="SELECT I.reference,I.insertDate,I.invoiceId,I.priceHT,I.status,I.cSlice,J.reference AS jobReference, J.jobId,COUNT(S2.sliceId) AS nbSlices FROM #__invoices I LEFT JOIN #__jobs J ON J.jobId=I.jobId LEFT JOIN #__slice2job S2 ON S2.jobId=I.jobId WHERE I.clientId='".$this->clientId."' GROUP BY I.invoiceId ";
			$this->invoices=$db->setQuery();
			//echo $db->query;
			$this->templateVars['invoices']=$this->invoices;
			
			$db=new DB;
			$db->query="SELECT J.reference,J.insertDate,J.jobId, J.price AS priceHT,J.startBuild,J.endBuild,O.reference AS offreReference, O.offreId,I.invoiceId,I.reference AS invoiceReference FROM #__jobs J LEFT JOIN #__offres O ON O.offreId=J.offreId LEFT JOIN #__invoices I ON I.jobId=J.jobId WHERE J.clientId='".$this->clientId."'";
			$this->jobs=$db->setQuery();
			$this->templateVars['jobs']=$this->jobs;
			
			$db=new DB;
			$db->query="SELECT O.reference,O.insertDate,O.offreId, O.price AS priceHT,O.status,O.startBuild,O.endBuild,J.jobId,J.reference AS jobReference FROM #__offres O LEFT JOIN #__jobs J ON J.offreId=O.offreId WHERE O.clientId='".$this->clientId."'";
			$this->offres=$db->setQuery();
			foreach($this->offres as $k=>$v) {
				if($this->offres[$k]['jobId']<=0) {
					$this->offres[$k]['status']=$this->o->offreStatus[$v['status']];
				}
				
			}
			$this->templateVars['offres']=$this->offres;
			
		}

		foreach($this->templateVars['client'] as $k=>$v) {
			$this->templateVars['client'][$k]=stripslashes($v);
		}
		return $this->client;
	}
	
	
	
	
	
	function saveClient() {
		//print_r($_POST);
		
		//$_POST['client']['reference']=$ref;
		if($_POST['client']['otherCieType']!='') {
			$_POST['client']['cieType']=$_POST['client']['otherCieType'];
		}
		unset($_POST['client']['otherCieType']);
		
		if($_POST['client']['vat']=='') {
			$_POST['client']['vat']='null';
			//unset($_POST['client']['vat']);
		}
		else {
			
			$db=new DB;
			$db->query="SELECT clientId,name FROM #__clients WHERE vat='".$_POST['client']['vat']."' AND clientId!='".$this->clientId."' ";
			if($db->setQuery('first')) {
				$this->errors++;
				$this->errorVat=1;
				$this->existingVat=$db->output['name'];
				unset($_POST['client']['vat']);
			}
		}
		
		$db=new DB;
		$db->query="UPDATE #__clients SET ".$db->setUpdate($_POST['client'])." WHERE clientId='".$this->clientId."'";
		$db->setQuery();
		//echo $db->query;
		$db=new DB;
		$db->query="SELECT clientId,clientType,name,lastname,firstname FROM #__clients WHERE clientId='".$this->clientId."'";
		$tClient=$db->setQuery('first');
		
		$ref=substr(strtoupper($tClient['clientType']),0,1)."-".substr(strtoupper(trim($tClient['name'].$tClient['lastname'].$tClient['firstname'])),0,5)."-".$tClient['clientId'];
		
		$db=new DB;
		$db->query="UPDATE #__clients SET reference='".$ref."' WHERE clientId='".$this->clientId."'";
		$db->setQuery();
	
	}
	
	
	
	function newClient() {
		$db=new DB;
		$db->query="INSERT INTO #__clients (insertDate,userId,public) VALUES (NOW(),'".$_SESSION['user']['userId']."','1')";
		$db->setQUery();
		//echo $db->query;
		$this->clientId=mysql_insert_id();
		echo "<script>document.location='/clients?clientId=".$this->clientId."'</script>";	
	}
	
	
	function getCieTypes() {
		$db=new DB;
		$db->query="SELECT cieType FROM #__clients GROUP BY cieType ORDER BY cieType";
		$db->setQuery();
		foreach($db->output as $c) {
			$this->cieTypes[]=$c['cieType'];
		}
	}
	
	
	function getACCompanies() {
		$db=new DB;
		$db->query="SELECT name,firstname,lastname,vat,cieType,clientTitle,name AS value, clientId AS id, name AS label,
		address AS client_address, number AS client_number, zip AS client_zip, city AS client_city, country AS client_country, phone AS client_phone, mobile AS client_mobile, phone2 AS client_phone2,
		url AS client_url,email AS client_email,fax AS client_fax 
		  FROM #__clients WHERE  LOWER(name) REGEXP  \"".strtolower($_POST['term'])."\" AND clientType='cie'";
		//$db->resultType='json';
		$db->setQuery();
		
		/*$rows=array();
		foreach($db->output as $row) {
			$out[]='{ "id": "'.$row['clientId'].'", "label": "'.$row['name'].'", "value": "'.$row['name'].'" }';
		}
		 * echo '['.implode(',',$out).']';
		 * 
		 */
		echo json_encode($db->output);
		//echo '[ { "id": "Sylvia curruca", "label": "'.$_POST['term'].'", "value": "Lesser Whitethroat" }]';
		//echo '[ { "id": "Laaauscinia svecica", "label": "Bluethroat", "value": "Bluethroat" }, { "id": "Sylvia curruca", "label": "Lesser Whitethroat", "value": "Lesser Whitethroat" }, { "id": "Sylvia communis", "label": "Common Whitethroat", "value": "Common Whitethroat" }, { "id": "Periparus ater", "label": "Coal Tit", "value": "Coal Tit" }, { "id": "Gavia arctica", "label": "Black-throated Loon", "value": "Black-throated Loon" }, { "id": "Gavia stellata", "label": "Red-throated Loon", "value": "Red-throated Loon" }, { "id": "Anthus cervinus", "label": "Red-throated Pipit", "value": "Red-throated Pipit" }, { "id": "Limicola falcinellus", "label": "Broad-billed Sandpiper", "value": "Broad-billed Sandpiper" }, { "id": "Cinclus cinclus", "label": "White-throated Dipper", "value": "White-throated Dipper" }, { "id": "Irania gutturalis", "label": "White-throated Robin", "value": "White-throated Robin" }, { "id": "Turdus ruficollis", "label": "Red-throated Thrush/Black-throated", "value": "Red-throated Thrush/Black-throated" }, { "id": "Hirundapus caudacutus", "label": "White-Throated Needletail", "value": "White-Throated Needletail" } ]';
		
	}
	
	function getACParticuliers() {
		$db=new DB;
		$db->query="SELECT firstname,lastname,clientTitle,lastname AS value, clientId AS id, CONCAT(firstname,' ',lastname) AS label,
		address AS client_address, number AS client_number, zip AS client_zip, city AS client_city, country AS client_country, phone AS client_phone, mobile AS client_mobile, phone2 AS client_phone2,
		url AS client_url,email AS client_email,fax AS client_fax  FROM #__clients WHERE ( LOWER(lastname) REGEXP  \"".strtolower($_POST['term'])."\" OR LOWER(name) REGEXP  \"".strtolower($_POST['term'])."\") AND clientType='part'";
		$db->setQuery();
		echo json_encode($db->output);	
	}
}

?>