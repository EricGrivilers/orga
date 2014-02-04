<?php

include('../../../config.inc.php');
include(__lib__."init.inc.php");

$marges=array(15,20,15,0);
$mWidth=210-$marges[0]-$marges[2];


$db=new DB;
$db->query="SELECT #__invoices.*,#__invoices.conditions AS iConditions, #__invoices.reference AS invoiceRef,#__invoices.language AS lg,#__jobs.offreType,#__jobs.language,#__clients.*,#__jobs.jobId AS jId,#__invoices.insertDate AS invoiceDate FROM #__invoices LEFT JOIN #__jobs ON #__jobs.jobId=#__invoices.jobId LEFT JOIN #__clients ON #__clients.clientId=#__jobs.clientId WHERE invoiceId='".$_GET['invoiceId']."'";
$db->setQuery();
//echo $db->query;
$invoice=$db->output[0];
//$content.=print_r($invoice,true);

if($_GET['lang']!='') {
	$invoice['language']=$_GET['lang'];	
	$invoice['lg']=$_GET['lang'];	
}

$filename="docs/".$invoice['invoiceRef'].'-'.$_GET['rn'].'-'.$_GET['lang'].'.pdf';


//if($invoice['status']!='draft' && file_exists(__root__."docs/".$invoice['invoiceRef'].'-'.$_GET['lang'].'.pdf') && $invoice['invoiceRef']!='' ) {
if(file_exists(__root__.$filename)) {
	header("location:".__web__.$filename);
	die();
}



$invoice['jobId']=$invoice['jId'];
//print_r($invoice);


$l=array();
$handle=fopen(__lib__."templates/default/".$invoice['lg'].".txt",'r');
while (($buffer = fgets($handle, 4096)) !== false) {
	$buffer=utf8_decode($buffer);
      $t=explode("\t",$buffer);
	  $l[$t[0]]=$t[1];
}



//print_r($l);
/*if(file_exists("docs/".$invoice['offreRef'].'.pdf') && $invoice['status']=='CONFIRMÉ') {
	header("location:docs/".$invoice['invoiceRef'].'.pdf');
}
*/


$template=new template('.');
$template->set_file("template",__lib__."templates/reminder_".$_GET['rn']."_".$invoice['offreType']."_".$invoice['lg'].".tpl");
$template->set_var('mWidth', $mWidth);

if($_GET['rn']!='') {

	$template->set_var('reminder', 'RAPPEL - ');
}


$db=new DB;
$db->query="SELECT * FROM #__clients WHERE clientId='".$invoice['clientId']."' ";
$db->setQuery();
$addressA=$db->output[0];


$db=new DB;
$db->query="SELECT * FROM #__jobs WHERE jobId='".$invoice['jobId']."'  ";
$db->setQuery();

$deliveryA=$db->output[0];










$invoiceAddress=stripslashes($addressA['address']." ".$addressA['number'].
"<br/>".$addressA['zip']." ".$addressA['city']."
<br/>".$addressA['country'])."<br/>";
/*
 * if($addressA['email']) {
	$invoiceAddress.="<br/>".$addressA['email'];
}
if($addressA['mobile']) {
	$invoiceAddress.="<br/>".$l['Tel'].": ".$addressA['mobile'];
}
*/

if($invoice['clientType']=='cie') {
	$contact="<br/><b>".$invoice['name']."</b>
	<br/>".$l['TVA'].": ".$invoice['vat']."
	<br/>".trim($invoice['clientTitle']." ".$invoice['firstname']." ".$invoice['lastname']);
}
else {
	$contact="<br/><b>".trim($invoice['clientTitle']." ".$invoice['firstname']." ".$invoice['lastname'])."</b>";
}




if($invoice['clientType']=='cie') {
	$tva=$l['TVA']." ".$invoice['vat']."<br/><br/>";
	$contact="<br/><b>".$invoice['name']."</b>
	<br/>".trim($invoice['clientTitle']." ".$invoice['firstname']." ".$invoice['lastname']);
}
else {
	$contact="<br/><b>".trim($invoice['clientTitle']." ".$invoice['firstname']." ".$invoice['lastname'])."</b>";
}

$contact.="<br/>".$invoiceAddress;


$deliveryAddress=stripslashes($deliveryA['number']." ".$deliveryA['address'].
" -  ".$deliveryA['zip']." ".$deliveryA['city']."
- ".$deliveryA['country']);








switch($invoice['language']) {
	//default:
	case 'nl':
		$contact=preg_replace('/Belgique/','België',$contact);
		$deliveryAddress=preg_replace('/Belgique/','België',$deliveryAddress);
	break;
	
	case 'en':
		$contact=preg_replace('/Belgique/','Belgium',$contact);
		$deliveryAddress=preg_replace('/Belgique/','Belgium',$deliveryAddress);
	break;	
}

		
		
		
		
$template->set_var('action', "Créer");

$ttime=explode("-",$invoice['invoiceDate']);
$invoice['invoiceDate']=$ttime[2]."/".$ttime[1]."/".$ttime[0];

foreach($invoice as $k=>$v) {
	$template->set_var($k, $v);
}


$template->set_var('invoiceRef', $invoice['invoiceRef']);



$condLabels=array('fr'=>'Conditions','nl'=>'Verkoopsvoorwaarden','en'=>'Conditions');
$template->set_var('tva', $tva);
$template->set_var('deliveryAddress', $deliveryAddress);

$template->set_var('contact', $contact);

$template->set_var('date', date('d/m/Y'));

$template->set_var('priceHT',sprintf('%.2f',$invoice['priceHT']));

if($invoice['priceType']!='htva') {
	$priceTTC='intracom.';
}
else {
	$priceTTC=sprintf('%.2f',$invoice['priceHT']+$invoice['priceHT']*21/100)." €";
}
$template->set_var('priceTTC',$priceTTC);
$template->parse("parse", "template");
		//return '<form id="t_form" name="t_form">'.$template->p("parse",false).'</form>';
$content.=$template->p("parse",false);



//echo "<textarea>".$content."</textarea>";
		
/*
$content = "
<page>
    <h1>Exemple d'utilisation</h1>
    <br>
    Ceci est un <b>exemple d'utilisation ".$invoice['offreId']."</b>
    de <a href='http://html2pdf.fr/'>HTML2PDF</a>.<br>
</page>";

*/
    require_once(__lib__.'html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr',true, 'UTF-8',$marges);
	//$pdf = new HTML2PDF('P','A4','fr', array(20, 20, 20, 20)); 
    $html2pdf->WriteHTML($content);
	$html2pdf->Output(__root__.$filename,'F');
    $html2pdf->Output($filename);
    
	
	
	
	

?>