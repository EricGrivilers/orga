<?php

include('../../../config.inc.php');
include(__lib__."init.inc.php");

$marges=array(15,20,15,15);
$mWidth=210-$marges[0]-$marges[2];


$db=new DB;
$db->query="SELECT #__clients.name,#__clients.lastname,#__clients.firstname,#__jobs.*,#__jobs.reference as jobRef,#__jobs.userId as OUserId,#__jobs.copyId FROM #__jobs LEFT JOIN #__clients ON #__clients.clientId=#__jobs.clientId WHERE #__jobs.jobId='".$_GET['jobId']."'";
$db->setQuery();
//echo $db->query;
$job=$db->output[0];
//$content.=print_r($job,true);
if($job['status']!='draft' && file_exists(__root__."docs/".$job['jobRef'].'.pdf') && $job['status']=='CONFIRMÉ') {
	//header("location:".__web__."docs/".$job['jobRef'].'.pdf');
}




//print_r($job);

$template=new template('.');
$template->set_file("template",__lib__."templates/job_".$job['offreType']."_fr.tpl");
$template->set_var('mWidth', $mWidth);
$template->set_var('client', trim($job['name']."<br/>".$job['lastname']." ".$job['firstname']));

$db=new DB;
$db->query="SELECT * FROM #__jobs WHERE jobId='".$job['jobId']."' ";
$db->setQuery();
$addressA=$db->output[0];


$deliveryA=$job;

$db=new DB;
$db->query="SELECT * FROM #__jobs WHERE jobId='".$_GET['jobId']."'  ";
$db->setQuery();
$deliveryA=$db->output[0];

if($job['copyId']>0) {
	$db=new DB;
	$db->query="SELECT address,number,zip,city,country,phone,mobile FROM #__clients WHERE clientId='".$job['clientId']."'";
	$db->setQuery();
	foreach($db->output[0] as $k=>$v) {
		
		$deliveryA[$k]=$v;	
	}
	//print_r($job);
}

$db=new DB;
$db->query="SELECT * FROM #__planning WHERE jobId='".$_GET['jobId']."'  ";
$db->setQuery();
$planningA=$db->output;



$db=new DB;
$db->query="SELECT * FROM #__tent2job LEFT JOIN #__tents ON #__tents.tentId=#__tent2job.tentId WHERE jobId='".$_GET['jobId']."'  ";
$db->setQuery();
$tentsA=$db->output;

$contact="<br/><b>".$job['name']."</b><br/>".$job['firstname']." ".$job['lastname'];

$invoiceAddress=stripslashes($addressA['address']." ".$addressA['number'].
"<br/>".$addressA['zip']." ".$addressA['city']."
<br/>".$addressA['country']."
<br/><br/><br/>".$addressA['email']);
if($addressA['mobile']) {
$invoiceAddress.="<br/>GSM: ".$addressA['mobile'];
}
if($addressA['phone']) {
$invoiceAddress.="<br/>Phone: ".$addressA['phone'];
}
if($deliveryA['mobile']) {
$invoiceAddress.="<br/>GSM: ".$deliveryA['mobile'];
}
if($deliveryA['phone']) {
$invoiceAddress.="<br/>Phone: ".$deliveryA['phone'];
}
if($job['vat']) {
$invoiceAddress.="<br/>TVA: ".$job['vat'];
}

$deliveryAddress=stripslashes($deliveryA['number']." ".$deliveryA['address'].
" -  ".$deliveryA['zip']." ".$deliveryA['city']."
- ".$deliveryA['country']."
<br/>".$deliveryA['comments']);

if($addressA['mobile']) {
$deliveryAddress.="<br/>GSM client: ".$addressA['mobile'];
}
if($addressA['phone']) {
$deliveryAddress.="<br/>Tel. client: ".$addressA['phone'];
}
if($deliveryA['mobile']) {
$deliveryAddress.="<br/>GSM montage: ".$deliveryA['mobile'];
}
if($deliveryA['phone']) {
$deliveryAddress.="<br/>Tel. montage: ".$deliveryA['phone'];
}



$template->set_var('action', "Créer");

foreach($job as $k=>$v) {
$template->set_var($k, $v);
}

$template->set_var('invoiceAddress', $invoiceAddress);
$template->set_var('deliveryAddress', $deliveryAddress);
$template->set_var('reference', $job['jobRef']);
$template->set_var('contact', $contact);
$template->set_var('date', "Le ".date('d/m/Y'));
$template->set_var('introText', $job['introText']);

foreach($planningA as $p) {
	if($p['planningType']=='build') {
		$template->set_var('timingBuild', $l['Du']." ".utils::pt($p['startDate'])." ".$l['au']." ".utils::pt($p['endDate']));
	}
	if($p['planningType']=='unbuild') {
		$template->set_var('timingUnbuild', $l['Du']." ".utils::pt($p['startDate'])." ".$l['au']." ".utils::pt($p['endDate']));
	}
	if($p['planningType']=='inplace') {
		$template->set_var('timingInPlace', $l['Du']." ".utils::pt($p['startDate'])." ".$l['au']." ".utils::pt($p['endDate']));
	}
}

$buildComments='';
if(!empty($job['buildNotes'])) {
	$buildComments.="<p>Montage: ".stripslashes($job['buildNotes'])."</p>";
}
if(!empty($job['unbuildNotes'])) {
	$buildComments.="<p>Demontage: ".stripslashes($job['unbuildNotes'])."</p>";
}
if(!empty($job['planningComments'])) {
	$buildComments.="<p>Commentaires: ".stripslashes($job['planningComments'])."</p>";
}
$template->set_var('buildComments', $buildComments);

foreach($tentsA as $t) {
	$tents.="<li>".$t['reference']." - ".$t['width']."x".$t['length']." - ".$t['m2']."m2 </li>";
}
$template->set_var('tents', "<ul>".$tents."</ul><p>".stripslashes(nl2br($job['tentsComments']))."</p>");

$canal=0;
$planc=0;
foreach($tentsA as $t) {
	if($t['canalisation']==1) {
		$canal++;
	}
	if($t['plancher']==1) {
		$planc++;
	}
	if($t['surfacePlancher']!='') {
		$planc.= " - ".$t['surfacePlancher'];
	}
	if($t['other']!='') {
		$notes.= "<p> ".$t['other']."</p>";
	}
}
$matos="<li>Canalisation: ".$canal."</li><li>Plancher: ".$planc."</li>";

$template->set_var('matos', "<ul>".$matos."</ul>");
$template->set_var('notes', $notes);






$db=new DB;
$db->query="SELECT * FROM #__product2offre WHERE jobId='".$_GET['jobId']."' AND isOption!=1";
$db->setQuery();
	if($products=$db->output) {
		$out="<table style='width:".$mWidth."mm'>";
		$out.="<thead style='border-bottom:1px solid #000000;background-color:#ededed;'><tr><th style='width:80%;background-color:#ededed;'>Description</th><th style='width:20%;text-align:right;background-color:#ededed;'>Montant htva</th></tr></thead><tbody>";
		$c=0;
		$tot='0.00';
		foreach($products as $p) {
			$price=$p['price']." €";
			if($p['price']=='0.00') {$price= 'gratis';}
			$out.="<tr rel='".$p['productId']."'><td style='width:80%'>".$p['description']."</td><td style='width:20%;text-align:right'>".$price."</td></tr>";
			$tot+=$p['price'];
			$c++;	
		}
		
		$out.="</tbody>";
		$out.="<tfoot >";
		$out.="<tr><td style='text-align:right;background-color:#ededed;'>&nbsp;</td><td style='background-color:#ededed;' >&nbsp;</td></tr>";
		$out.="<tr><td style='text-align:right;;width:80%'>Total HTVA</td><td style='width:20%;text-align:right'><b>".sprintf('%.2f',$tot)." €</b></td></tr>";
		$out.="<tr><td style='text-align:right;width:80%'>TVA (21%)</td><td style='width:20%;text-align:right'>";
		if($job['priceType']=='htva') {
			
			
			$tva=($tot*0.21);
			$out.=sprintf('%.2f',$tva)." €";
		}
		else {
			$out.='intra communautaire';
		}
		$out.="</td></tr>";
		$out.="<tr><td style='text-align:right;width:80%;background-color:#ededed;'><b>TOTAL TTC à payer</b></td><td style='width:20%;text-align:right;background-color:#ededed;'><b>".sprintf('%.2f',$tot+$tva)." €</b></td></tr>";
		$out.="</tfoot></table>";
		}
		
$template->set_var('budget', $out);	








$db=new DB;
$db->query="SELECT * FROM #__product2offre WHERE jobId='".$_GET['jobId']."' AND isOption=1";
$db->setQuery();
$out='/';
if($products=$db->output) {
		$out="<table style='width:".$mWidth."mm'>";
		$out.="<thead style='border-bottom:1px solid #000000;background-color:#ededed;'><tr><th style='width:80%;background-color:#ededed;'>Description</th><th style='width:20%;text-align:right;background-color:#ededed;'>Montant htva</th></tr></thead><tbody>";
		$c=0;
		$tot='0.00';
		foreach($products as $p) {
			$price==$p['price']." €";
			if($p['price']=='0.00') {$price= 'sur devis';}
			$out.="<tr rel='".$p['productId']."'><td style='width:80%'>".$p['description']."</td><td style='width:20%;text-align:right'>".$price."</td></tr>";
			$tot+=$p['price'];
			$c++;	
		}
		
		$out.="</tbody>";
		$out.="</table>";
}
$template->set_var('options', $out);



$db=new DB;
$db->query="SELECT * FROM #__slices WHERE jobId='".$_GET['jobId']."' ORDER BY sliceId ";
$db->setQuery();
$conditions="<table style='width:".$mWidth."mm'>";
if($slices=$db->output) {
	
	foreach($slices as $s) {
		$conditions.="<tr><td>".stripslashes($s['comments'])."</td></tr>";
	}
	
}
$conditions.="<tr><td>".nl2br(stripslashes( $job['conditions']))."</td></tr>";
$conditions.="</table>";

$template->set_var('conditions',$conditions);

$template->set_var('tentsComments',nl2br( stripcslashes($job['tentsComments'])));	


$db=new DB;
$db->query="SELECT * FROM #__users WHERE userId='".$job['OUserId']."'";

$db->setQuery();
$userA=$db->output[0];
$template->set_var('user',$userA['firstname']." ".$userA['lastname']."<br/>".$userA['email']."<br/>".$userA['phone']);


$template->parse("parse", "template");
		//return '<form id="t_form" name="t_form">'.$template->p("parse",false).'</form>';
$content.=$template->p("parse",false);
		
		
/*
$content = "
<page>
    <h1>Exemple d'utilisation</h1>
    <br>
    Ceci est un <b>exemple d'utilisation ".$_GET['jobId']."</b>
    de <a href='http://html2pdf.fr/'>HTML2PDF</a>.<br>
</page>";

*/






	
	

    require_once(__lib__.'html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr',true, 'UTF-8',$marges);
	//$pdf = new HTML2PDF('P','A4','fr', array(20, 20, 20, 20)); 
    $html2pdf->WriteHTML($content);
	$html2pdf->Output(__root__."docs/".$job['jobRef'].'.pdf','F');
    $html2pdf->Output($job['jobRef'].'.pdf');

?>