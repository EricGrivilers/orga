<?php
    
    include('config.inc.php');
include(__lib__."init.inc.php");

	$rappel=false;

	$db=new DB;
	$db->query="SELECT #__invoices.invoiceId,#__invoices.reference,CONCAT(#__clients.name,' ',#__clients.lastname,' ',#__clients.firstname) as name 
	FROM #__invoices 
	LEFT JOIN #__clients ON #__clients.clientId=#__invoices.clientId 
	WHERE #__invoices.reference!='' 
	AND #__invoices.priceHT>0 
	AND (TO_DAYS(NOW()) - TO_DAYS(#__invoices.insertDate) >15) 
	AND paymentDate='0000-00-00' 
	AND r1=0 
	AND r1Date='0000-00-00'";
	
	/*$db->query="SELECT #__invoices.invoiceId,#__invoices.reference,CONCAT(#__clients.name,' ',#__clients.lastname,' ',#__clients.firstname) as name 
	FROM #__invoices 
	LEFT JOIN #__clients ON #__clients.clientId=#__invoices.clientId 
	WHERE #__invoices.reference!='' 
	AND (TO_DAYS(NOW()) - TO_DAYS(#__invoices.insertDate) >15) 
	AND paymentDate='0000-00-00' 
	AND r1Date='0000-00-00'";
	 * 
	 */
	
	
	$db->setQuery();
	//echo $db->query;
	//echo $db->query;
	$r1=$db->output;
	$rc=0;
	if(count($r1>0)) {
		$rappel=true;
		$subject="1er rappel(s):";
		foreach($r1 as $r) {
			$db=new DB;
			$db->query="UPDATE #__invoices SET r1='1' WHERE invoiceId='".$r['invoiceId']."'";
			$db->resultType='none';
			$db->setQuery();
			$subject.="
			".$r['reference']." (".$r['name'].")";	
			$rc++;
			//echo "-".$rc."-";
			
		}
	}
	
	
	
	
	$db=new DB;
	$db->query="SELECT #__invoices.invoiceId,#__invoices.reference,CONCAT(#__clients.name,' ',#__clients.lastname,' ',#__clients.firstname) as name 
	FROM #__invoices 
	LEFT JOIN #__clients ON #__clients.clientId=#__invoices.clientId 
	WHERE #__invoices.reference!='' 
	AND #__invoices.priceHT>0 
	AND (TO_DAYS(NOW()) - TO_DAYS(#__invoices.r1Date) >8) 
	AND paymentDate='0000-00-00' 
	AND r2=0 
	AND r2Date='0000-00-00'";
	
	/*
	$db->query="SELECT #__invoices.invoiceId,#__invoices.reference,CONCAT(#__clients.name,' ',#__clients.lastname,' ',#__clients.firstname) as name 
	FROM #__invoices 
	LEFT JOIN #__clients ON #__clients.clientId=#__invoices.clientId 
	WHERE #__invoices.reference!='' 
	AND (TO_DAYS(NOW()) - TO_DAYS(#__invoices.r1Date) >8) 
	AND paymentDate='0000-00-00' 
	AND r2Date='0000-00-00'";
	
	*/
	
	$db->setQuery();
	//echo $db->query;
	$r2=$db->output;
	
	if(count($r2>0)) {
		$subject.="
		
		
";
		
		$rappel=true;
		$subject.="2eme rappel(s):";
		foreach($r2 as $r) {
			$db=new DB;
			$db->query="UPDATE #__invoices SET r2='1' WHERE invoiceId='".$r['invoiceId']."'";
			$db->resultType='none';
			$db->setQuery();
			$subject.="
			".$r['reference']." (".$r['name'].")";	
			$rc++;
			
		}
	}
	
	
	
	
	
	
	$db=new DB;
	$db->query="SELECT #__invoices.invoiceId,#__invoices.reference,CONCAT(#__clients.name,' ',#__clients.lastname,' ',#__clients.firstname) as name 
	FROM #__invoices 
	LEFT JOIN #__clients ON #__clients.clientId=#__invoices.clientId 
	WHERE #__invoices.reference!='' 
	AND #__invoices.priceHT>0 
	AND (TO_DAYS(NOW()) - TO_DAYS(#__invoices.r2Date) >15) 
	AND paymentDate='0000-00-00' 
	AND r2=1 
	AND r2Date!='0000-00-00' 
	AND med=0 
	AND medDate='0000-00-00'";
	
	/*
	$db->query="SELECT #__invoices.invoiceId,#__invoices.reference,CONCAT(#__clients.name,' ',#__clients.lastname,' ',#__clients.firstname) as name 
	FROM #__invoices 
	LEFT JOIN #__clients ON #__clients.clientId=#__invoices.clientId 
	WHERE #__invoices.reference!='' 
	AND (TO_DAYS(NOW()) - TO_DAYS(#__invoices.r1Date) >8) 
	AND paymentDate='0000-00-00' 
	AND r2Date='0000-00-00'";
	
	*/
	
	$db->setQuery();
	
	
	
	$med=$db->output;
	
	if(count($r2>0)) {
		$subject.="
		
		
";
		
		$rappel=true;
		$subject.="Mise(s) en demeure:";
		foreach($med as $r) {
			$db=new DB;
			$db->query="UPDATE #__invoices SET med='1' WHERE invoiceId='".$r['invoiceId']."'";
			$db->resultType='none';
			$db->setQuery();
			$subject.="
			".$r['reference']." (".$r['name'].")";	
			$rc++;
			
		}
	}




	
	
	//echo $rc;
	if($rappel==true && $rc>0) {
		//mail('eric@caravanemedia.com','Rappels',$subject,'From:organic@caravanemedia.com');	
		
		mail('geraldine@organic-concept.com','Rappels',$subject,'FROM: organic@caravanemedia.net');
		

		mail('benjamin@organic-concept.com','Rappels',$subject,'FROM: organic@caravanemedia.net');

		//mail('eric@caravanemedia.com','Rappels',$subject,'FROM: organic@caravanemedia.net');
		
		echo "mails sent";
		
	}
?>