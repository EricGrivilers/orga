<?php
	/*
	 * 
	 * 
	 * - attention produits ajouté aprés job-> qd passage en facture->isFromOffre=1
	 * 
	 * 
	 * 
	 * 
	 * 
	 * 
	 * 
	 */
	
	
	
	class invoice {
		
		var $templateVars=array();
		var $offreTypes=array('rent'=>"Location",'sell'=>"Vente",'winter'=>"Hivernage");
		var $invoicesStatus=array('draft'=>"En cours de rédaction",'ok'=>"Envoyée au client",'paid'=>"Payée");
		var $langs=array('fr','nl','en');
		
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
			case 'listInvoices':
				//
				if(isset($_GET['invoiceId'])) {
					$this->invoiceId=$_GET['invoiceId'];
					$this->content.=$this->editInvoice();
				}
				else {
					$this->content.=$this->listInvoices();
				}
			break;
			
		}
		return $this->content;
	}
	
	
	function subMenu() {
		$out="<div class=\"submenu\" style='height:22px'>";
		$out.="<div class='right' style='width:200px'>";
		$out.="<input type=\"button\" value=\"Créer une nouvelle facture\" onclick=\"document.location='/invoices?invoiceId='\" class=\"button\"/>";
		$out.="</div>";
		$out.="</div>";
		$out.="<br class='clearfloat' />";
		$this->content.=$out;
	}
	
	
	
	
	function listInvoices() {
		
	
		
		
		
		
		$db=new DB;
		$db->query="SELECT I.*, CONCAT(I.name,' ',I.lastname,' ',I.firstname) AS client , 
		DATE_FORMAT( I.insertDate, '%d/%m/%Y')  AS invoiceDate,
		DATE_FORMAT( I.paymentDate, '%d/%m/%Y')  AS invoicePaymentDate,
		S.sliceId, COUNT(S2.sliceId) AS nbSlices, J.reference AS jobReference,
		
		
		U.iso
		FROM #__invoices I 
		LEFT JOIN #__slice2job S ON S.invoiceId=I.invoiceId 
		LEFT JOIN #__slice2job S2 ON S2.jobId=I.jobId 
		LEFT JOIN #__jobs J ON J.jobId=I.jobId 
		LEFT JOIN #__users U ON U.userId=J.userId 
		GROUP BY I.invoiceId  
		ORDER BY I.reference DESC";
		
		$tInvoices=$db->setQuery();
		
		$i=0;
		$allInvoices=array();
		$runningInvoices=array();
		$paidInvoices=array();
		$todoInvoices=array();
		foreach($tInvoices as $o) {
			$allInvoices[$i]['id']=$o['invoiceId'];
			if($o['status']!="paid") {
				$allInvoices[$i]['reference']="<b><a href='/invoices?invoiceId=".$o['invoiceId']."'>".$o['reference']."</a></b>";
			}
			else {
				$allInvoices[$i]['reference']="<b>".$o['reference']."</b>";
			}
			
			
			$allInvoices[$i]['client']="<a href='/clients?clientId=".$o['clientId']."'>".trim($o['client'])."</a>";
			$allInvoices[$i]['type']=$this->offreTypes[$o['offreType']];
			$allInvoices[$i]['date']=$o['invoiceDate'];
			$allInvoices[$i]['priceHT']=sprintf('%.2f',$o['priceHT']);
			$tva=0.21;
			$allInvoices[$i]['priceTTC']=sprintf('%.2f',$o['priceHT']+ $o['priceHT']*$tva);
			if($o['priceType']=='intra') {
				$allInvoices[$i]['priceTTC']="<i>intra</i>";
			}
		
			$allInvoices[$i]['sliceId']=$o['sliceId']."/".$o['nbSlices'];
			$allInvoices[$i]['jobReference']=$o['jobReference'];
			$allInvoices[$i]['status']=$this->invoicesStatus[$o['status']];
			if($o['status']=='paid' || $o['invoicePaymentDate']!='00/00/0000') {
				$allInvoices[$i]['status'].=" le ".$o['invoicePaymentDate'];
			}
			$allInvoices[$i]['country']=$o['country'];
			$allInvoices[$i]['account']=$o['iso'];
		
			$allInvoices[$i]['invoicePdf']='<a onclick="getInvoicePdf(\''.$o['invoiceId'].'\',\'nl\',\'\')"><img src="/themes/default/images/buttons/pdf.png" alt="Editer" title="Editer">nl</a> <br/>
			<a onclick="getInvoicePdf(\''.$o['invoiceId'].'\',\'fr\',\'\')"><img src="/themes/default/images/buttons/pdf.png" alt="Editer" title="Editer">fr</a>';
			
			$allInvoices[$i]['R1']="";
			$allInvoices[$i]['R2']="";
			$allInvoices[$i]['MD']="";
			
			if($o['r1Date']!='0000-00-00') {
				$allInvoices[$i]['R1']='<a onclick="getInvoicePdf(\''.$o['invoiceId'].'\',\'nl\',\'r1\')"><img src="/themes/default/images/buttons/pdf.png" alt="Editer" title="Editer">nl</a> <br/>
			<a onclick="getInvoicePdf(\''.$o['invoiceId'].'\',\'fr\',\'r1\')"><img src="/themes/default/images/buttons/pdf.png" alt="Editer" title="Editer">fr</a>';
			}
			if($o['r2Date']!='0000-00-00') {
				$allInvoices[$i]['R2']='<a onclick="getInvoicePdf(\''.$o['invoiceId'].'\',\'nl\',\'r2\')"><img src="/themes/default/images/buttons/pdf.png" alt="Editer" title="Editer">nl</a> <br/>
			<a onclick="getInvoicePdf(\''.$o['invoiceId'].'\',\'fr\',\'r2\')"><img src="/themes/default/images/buttons/pdf.png" alt="Editer" title="Editer">fr</a>';
			}
			if($o['medDate']!='0000-00-00') {
				$allInvoices[$i]['MD']='<a onclick="getInvoicePdf(\''.$o['invoiceId'].'\',\'nl\',\'med\')"><img src="/themes/default/images/buttons/pdf.png" alt="Editer" title="Editer">nl</a> <br/>
			<a onclick="getInvoicePdf(\''.$o['invoiceId'].'\',\'fr\',\'med\')"><img src="/themes/default/images/buttons/pdf.png" alt="Editer" title="Editer">fr</a>';
			}
			
			
			
			if($o['status']=='paid') {
				$allInvoices[$i]['edit']="";			
			}
			else {
				$allInvoices[$i]['edit']="<a href='/invoices?invoiceId=".$o['invoiceId']."'><img src='/themes/default/images/buttons/edit.png' alt='Editer' title='Editer' /></a>";
		
			}
			
			if($o['paymentDate']!='0000-00-00' && $o['paymentDate']!="") {
				$paidInvoices[]=$allInvoices[$i];
			}
			else if($o['reference']!='') {
				$runningInvoices[]=$allInvoices[$i];
			}
			else {
				$todoInvoices[]=$allInvoices[$i];
			}
			
			
			
			$i++;
		}
		
		$rows=$allInvoices;
		
		$tabs=array(
			array('id'=>'allInvoices',label=>'Toutes les factures','rows'=>$allInvoices),
			array('id'=>'runningInvoices',label=>'Factures en cours','rows'=>$runningInvoices),
			array('id'=>'paidInvoices',label=>'Facture payées','rows'=>$paidInvoices),
			array('id'=>'todoInvoices',label=>'Factures à faire','rows'=>$todoInvoices)
			
		);
		
		
		$cols=array(
			array('field'=>"reference",label=>'Reference'),
			array('field'=>"",label=>'Client'),
			array('field'=>"",label=>'Type'),
			array('field'=>"",label=>'Date fact.'),
			array('field'=>"",label=>'Montant € HTVA'),
			array('field'=>"",label=>'Montant € TTC'),
			array('field'=>"",label=>'Tr.'),
			array('field'=>"",label=>'Job'),
			array('field'=>"",label=>'Statut'),
			array('field'=>"",label=>'Pays'),
			array('field'=>"",label=>'Acc.'),
			array('field'=>"",label=>'F'),
			array('field'=>"",label=>'R1'),
			array('field'=>"",label=>'R2'),
			array('field'=>"",label=>'MD'),
			array('field'=>"",label=>'Ed')
		);
		$this->templateVars=array('tabs'=>$tabs,'cols'=>$cols);
			
		return template::parse("invoices.list.tpl",$this->templateVars);
		
	}
	
	
	
	
	
	function editinvoice() {
		
		if($_POST) {
			$this->saveInvoice();
		}
		$this->getInvoice();	
		return template::parse("invoice.edit.tpl",$this->templateVars);
	}
	
	
	function getPdf() {
		
		$this->getInvoice();
		$this->templateVars['pdfLanguage']=$_GET['language'];
		$this->templateVars['mWidth']=$this->mWidth;
		
		
		
		
		switch($_GET['language']) {
			//default:
			case 'nl':
				$this->templateVars['invoice']['country']=preg_replace('/Belgique/','België',$this->invoice['country']);
				if($this->invoice['clientTitle']) {
					if($this->invoice['clientTitle']=='Mme') {
						$this->templateVars['invoice']['clientTitle']='Mvr';
					} else {
						$this->templateVars['invoice']['clientTitle']='Mhr';
					}
				}
				//$deliveryAddress=preg_replace('/Belgique/','België',$deliveryAddress);
			break;
			
			case 'en':
				$this->templateVars['invoice']['country']=preg_replace('/Belgique/','Belgium',$this->invoice['country']);
				if($this->invoice['clientTitle']) {
					if($this->invoice['clientTitle']=='Mme') {
						$this->templateVars['invoice']['clientTitle']='Mr';
					} else {
						$this->templateVars['invoice']['clientTitle']='Mrs';
					}
				}
				//$deliveryAddress=preg_replace('/Belgique/','Belgium',$deliveryAddress);
			break;	
		}
		if($this->rn!='') {
			return template::parse("invoice_".$this->rn.".pdf.".$_GET['language'].".tpl",$this->templateVars);
		}
		return template::parse("invoice.pdf.".$_GET['language'].".tpl",$this->templateVars);
	}
	
	


	function getInvoice() {
		
		if($this->invoiceId<=0) {
			$this->newInvoice();
		}
		
		$this->templateVars['invoiceId']=$this->invoiceId;
		$this->templateVars['langs']=$this->langs;
		$this->templateVars['status']=$this->invoiceStatus;
		$this->templateVars['offreTypes']=$this->offreTypes;
		$this->templateVars['cieTypes']=$this->c->cieTypes;
		$this->templateVars['clientTitles']=$this->c->clientTitles;
		$this->templateVars['countries']=$this->s->countries;
		$this->templateVars['users']=$this->u->users;
		
		
		
		//invoice
		$db=new DB;
		$db->query="SELECT I.*, DATE_FORMAT( I.insertDate, '%d/%m/%Y')  AS invoiceDate,
		
		DATE_FORMAT( I.r1Date, '%d/%m/%Y')  AS r1RDate,
		DATE_FORMAT( I.r2Date, '%d/%m/%Y')  AS r2RDate,
		DATE_FORMAT( I.medDate, '%d/%m/%Y')  AS medRDate,
		
		 J.reference AS jobReference,
		  DATE_FORMAT(J.startBuild, '%d/%m/%Y')  AS startBuild,
		   DATE_FORMAT(J.endBuild, '%d/%m/%Y')  AS endBuild ,
		   (TO_DAYS(J.endBuild) - TO_DAYS(J.startBuild)) AS inPlace
		FROM #__invoices I 
		LEFT JOIN #__jobs J ON J.jobId=I.jobId 
		WHERE I.invoiceId='".$this->invoiceId."'";
		$this->invoice=$db->setQuery('first');
		$this->templateVars['invoice']=$this->invoice;
		
		//echo $db->query;
		
		
		
		
		$db=new DB;
		$db->query="SELECT * FROM #__product2invoice WHERE invoiceId='".$this->invoiceId."' AND isFromOffre=1 ORDER BY rank ";
		$this->products=$db->setQuery();
		$this->templateVars['products']=$this->products;
		foreach($this->products as $k=>$p) {
			$this->templateVars['products'][$k]['description']=stripslashes($p['description']);
			$totalFromJobHT+=$p['price'];
			
			$totalHT+=$p['price'];
		}
		$this->templateVars['productsTotalHT']=sprintf('%.2f',$totalHT);
		if($this->invoice['priceType']=='htva') {
			$this->templateVars['productsTVA']=sprintf('%.2f',$totalHT*(0.21))." €";
			$this->templateVars['productsTotalTTC']=sprintf('%.2f',$totalHT+$totalHT*(0.21));
		}
		else {
			$this->templateVars['productsTVA']='intra';
			$this->templateVars['productsTotalTTC']=sprintf('%.2f',$totalHT);
		}
		
		$db=new DB;
		$db->query="SELECT MAX(sliceId) as nbSlices FROM #__slice2job WHERE invoiceId='".$this->invoiceId."'";
		$this->nbSlices=$db->setQuery('first','nbSlices');
		$db=new DB;
		$db->query="SELECT * FROM #__slice2job WHERE invoiceId='".$this->invoiceId."'";
		$this->slice=$db->setQuery('first');
		$this->templateVars['slice']=$this->slice;
		$this->templateVars['slice']['slice']=sprintf('%.2f',$this->slice['slice']);
		$this->templateVars['slice']['priceHT']=sprintf('%.2f',$totalFromJobHT*($this->slice['slice']/100));
		
		$this->templateVars['grandTotalHT']=sprintf('%.2f',$totalFromJobHT*($this->slice['slice']/100));
		if($this->invoice['priceType']=='htva') {
			$this->templateVars['sliceTVA']=sprintf('%.2f',$totalFromJobHT*($this->slice['slice']/100)*(0.21))." €";
			$this->templateVars['grandTotal']=sprintf('%.2f',$totalFromJobHT*($this->slice['slice']/100)*(1.21));
		}
		else {
			$this->templateVars['sliceTVA']='intra';
			$this->templateVars['grandTotal']=sprintf('%.2f',$totalFromJobHT*($this->slice['slice']/100));
		}
		
		//new products 
		//echo "--------------------".$this->slice['sliceId']."/".$this->nbSlices."----------------";
		if($this->slice['sliceId']==$this->nbSlices) {
			
			$this->lastSlice=true;
		}
		$db=new DB;
		$db->query="SELECT * FROM #__product2invoice WHERE invoiceId='".$this->invoiceId."' AND isFromOffre=0 ORDER BY rank ";
		$this->newProducts=$db->setQuery();
		//echo $db->query;
		$this->templateVars['newproducts']=$this->newProducts;
		foreach($this->newProducts as $k=>$p) {
			$this->templateVars['newproducts'][$k]['description']=stripslashes($p['description']);
			$totalOutJobHT+=$p['price'];
			$totalHT+=$p['price'];
		}
		
		if($totalOutJobHT!=0 && $this->lastSlice==true) {
			
			$this->templateVars['isLastSlice']=1;
			$this->templateVars['outJobHT']=sprintf('%.2f',$totalOutJobHT);
			$this->templateVars['grandTotalHT']=sprintf('%.2f',$totalFromJobHT*($this->slice['slice']/100))+sprintf('%.2f',$totalOutJobHT);
			if($this->invoice['priceType']=='htva') {
				$this->templateVars['outJobTVA']=sprintf('%.2f',$totalOutJobHT*(0.21))." €";
				$this->templateVars['outJobTTC']=sprintf('%.2f',$totalOutJobHT*(1.21));
				$this->templateVars['grandTotal']=sprintf('%.2f',$totalFromJobHT*($this->slice['slice']/100)*1.21+$totalOutJobHT*1.21);
				
			}
			else {
				$this->templateVars['outJobTVA']='intra';
				$this->templateVars['outJobTTC']=sprintf('%.2f',$totalOutJobHT);
				
				$this->templateVars['grandTotal']=sprintf('%.2f',$totalFromJobHT*($this->slice['slice']/100)+$totalOutJobHT);
			}
		}
		$this->templateVars['slice']['priceHT15']=sprintf('%.2f',$this->templateVars['slice']['priceHT']+$this->templateVars['slice']['priceHT']*0.15);
		$this->templateVars['grandTotal15']=sprintf('%.2f',$this->templateVars['grandTotal']+$this->templateVars['grandTotal']*0.15);
		/*
		print_r($this->invoice);
		print_r($this->products);
		print_r($this->slice);
		*/
		//enabling modyfication
		$this->templateVars['disabled']='disabled';
		if($this->invoice['status']=='draft' || $this->invoice['status']=='ready') {
			$this->templateVars['disabled']='';
		}
		
		foreach($this->templateVars['invoice'] as $k=>$v) {
			$this->templateVars['invoice'][$k]=stripslashes($v);
		}

	
	}


	function newInvoice() {
		//print_r($_SESSION);
		$db=new DB;
		//$db->query="INSERT INTO #__invoices (userId,insertDate,year,slice,cSlice,nbSlices) VALUES ('".$_SESSION['user']['userId']."',NOW(),'".date('Y')."','100','1','1')";
		$db->query="INSERT INTO #__invoices (insertDate,year,slice,cSlice,nbSlices,status,offreType) VALUES (NOW(),'".date('Y')."','100','1','1','draft','rent')";
		$db->setQuery();
		//echo $db->query;
		$this->invoiceId=mysql_insert_id();
		
		echo "<script>document.location='/invoices?invoiceId=".$this->invoiceId."'</script>";
	}


	function saveInvoice() {
		
		
		print_r($_POST);
		
		
		$this->invoice=$_POST['invoice'];
		$this->invoiceId=$_POST['invoice']['invoiceId'];
		
		if($_POST['invoice']['otherCieType']!='') {
			$_POST['invoice']['cieType']=$_POST['invoice']['otherCieType'];
		}
		unset($_POST['invoice']['otherCieType']);
		
		if($_POST['np_priceType']!='' && $_POST['p_priceType']=='') {
			
			$_POST['invoice']['priceType']=$_POST['np_priceType'];
		}
		else if($_POST['p_priceType']!='' && $_POST['np_priceType']=='') {
			$_POST['invoice']['priceType']=$_POST['p_priceType'];
		}
		else if($_POST['p_priceType']!='' && $_POST['np_priceType']!=''){
			$_POST['invoice']['priceType']=$_POST['np_priceType'];
		}
		
		if(empty($_POST['invoice']['conditions1'])) {
			$_POST['invoice']['conditions1']='0';
		}
		if(empty($_POST['invoice']['conditions2'])) {
			$_POST['invoice']['conditions2']='0';
		}
		
		if($_POST['invoice']['status']=='ok') {
			$db=new DB;
			$db->query="SELECT COUNT(invoiceId) AS m FROM #__invoices WHERE reference!='' AND year='".date('Y')."'";
			$a=$db->setQuery('first');
			//echo $db->query;
			if(date('Y')=='2011') {
				$m=$a['m']+1+348;
				
			}
			else {
				$m=$a['m']+1;
			}
			if(empty($_POST['invoice']['reference'])) {
				$_POST['invoice']['reference']=date('Y')."-".$m;		
			}
			$_POST['invoice']['insertDate']=date('Y-m-d');
			//echo "---------------";
			
		}
		//print_r($_POST);
		
		$db=new DB;
		$db->query="UPDATE #__invoices SET ".$db->setUpdate($_POST['invoice'])." WHERE invoiceId='".$this->invoiceId."'";
		$db->setQuery();
		echo $db->query;
		
		if($_POST['products']) {
			$db=new DB;
			$db->query="DELETE FROM #__product2invoice WHERE isFromOffre!=1";
			$db->setQuery();
			$r=1;
			foreach($_POST['products'] as $k=>$p) {
				$p['rank']=$r;
				$p['productId']=$r;
				$p['invoiceId']=$this->invoiceId;
				$db=new DB;
				$db->query="INSERT INTO #__product2invoice ".$db->setInsert($p);
				$db->setQuery();
				$r++;
			}
		}
		//die();
	}



		function createInvoice() {
			
			$db=new DB;
			$db->query="SELECT * FROM #__slice2job WHERE jobId='".$this->jobId."' AND sliceId='".$this->sliceId."'";
			$db->setQuery();
			
		//	echo $db->query;
			$this->slice=$db->output[0];
			
			$db=new DB;
			$db->query="SELECT C.*,J.offreType,J.priceType FROM #__jobs J LEFT JOIN #__clients C ON C.clientId=J.clientId WHERE J.jobId='".$this->jobId."' ";
			$db->setQuery();
			
			//echo $db->query;
			
			$this->client=$db->output[0];
			
			
			$clientFields=array('clientId','clientType','clientTitle','name','lastname','firstname','vat','address','number','zip','city','country','offreType','cieType','priceType');
			$field=array();
			$value=array();
			foreach($clientFields as $v) {
				if($v=='vat') {
					
				}
				$field[]="`".$v."`";
				$value[]='"'.addslashes($this->client[$v]).'"';
			}
			$db=new DB;
			$db->query="INSERT INTO #__invoices (jobId,cSlice,year,insertDate,slice,status,".implode(",",$field).") 
			VALUES 
			('".$this->jobId."','".$this->sliceId."','".date('Y')."',NOW(),'".$this->slice['slice']."','draft',".implode(",",$value).")";
			$db->setQuery();
			//echo $db->query;
			$this->invoiceId=mysql_insert_id();
			
			
			$db=new DB;
			$db->query="UPDATE #__slice2job SET invoiceId='".$this->invoiceId."',status='ready' WHERE jobId='".$this->jobId."' AND sliceId='".$this->sliceId."'";
			$db->setQuery();
			//echo $db->query;
			
			//products
			$db=new DB;
			$db->query="SELECT * FROM #__product2job WHERE jobId='".$this->jobId."' ORDER BY rank";
			$db->setQuery();
			//echo $db->query;
			$this->products=$db->output;
			foreach($this->products as $p) {
				$field=array();
				$value=array();
				unset($p['jobId']);
				unset($p['offreId']);
				unset($p['isOption']);
			
				$p['isFromJob']=1;
				foreach($p as $k=>$v) {
					//echo $k."=>".$v.";";
					
					$field[]="`".$k."`";
					$value[]='"'.addslashes($v).'"';
					
				}
				$field[]="`invoiceId`";
				$value[]="'".$this->invoiceId."'";
				$db=new DB;
				$db->query="INSERT INTO #__product2invoice (".implode(',',$field).") VALUES (".implode(',',$value).")";
				$db->setQuery();
				//echo $db->query;
			}
			
			
			
			
			$db=new DB;
			$db->query="SELECT * FROM #__jobs WHERE jobId='".$this->jobId."'";
			$j=$db->setQuery('first');
			mail("yvan@organic-concept.com","Invoice asked for job ".$j['reference'],"Job: ".$j['reference'],"From:organic@caravanemedia.net");
		
		}
		
		
		function createRappel() {
			$db=new DB;
			$db->query="UPDATE #__invoices SET ".$this->rn."Date=NOW() WHERE invoiceId='".$this->invoiceId."'";		
			$db->resultType='none';
			$db->setQuery();
		}
		
}



?>