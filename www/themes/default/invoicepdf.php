<?php

include('../../../config.inc.php');
include(__lib__."init.inc.php");

$marges=array(15,20,15,0);
$mWidth=210-$marges[0]-$marges[2];


$db=new DB;
$db->query="SELECT #__invoices.*,#__invoices.conditions AS iConditions, #__invoices.reference AS invoiceRef,#__invoices.language AS lg,#__jobs.offreType,#__invoices.offreType AS iOfTy, #__jobs.language,#__clients.*,#__jobs.jobId AS jId FROM #__invoices LEFT JOIN #__jobs ON #__jobs.jobId=#__invoices.jobId LEFT JOIN #__clients ON #__clients.clientId=#__jobs.clientId WHERE invoiceId='".$_GET['invoiceId']."'";
$db->setQuery();
//echo $db->query;
$invoice=$db->output[0];
//$content.=print_r($invoice,true);

if($_GET['lang']!='') {
	$invoice['language']=$_GET['lang'];	
	$invoice['lg']=$_GET['lang'];	
}

$filename="docs/".$invoice['invoiceRef'].'-'.$_GET['lang'].'.pdf';
if($_GET['rn']!='') {
	$filename="docs/".$invoice['invoiceRef'].'-'.$_GET['rn'].'-'.$_GET['lang'].'.pdf';
}

//if($invoice['status']!='draft' && file_exists(__root__."docs/".$invoice['invoiceRef'].'-'.$_GET['lang'].'.pdf') && $invoice['invoiceRef']!='' ) {
if(file_exists(__root__.$filename) && $invoice['status']=='ok' OR $invoice['status']=='paid') {
	header("location:".__web__.$filename);
	die();
}



$invoice['jobId']=$invoice['jId'];
//print_r($invoice);
if(empty($invoice['offreType'])) {
	$invoice['offreType']=$invoice['iOfTy'];	
}

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
$template->set_file("template",__lib__."templates/invoice_".$invoice['offreType']."_".$invoice['lg'].".tpl");
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



$db=new DB;
$db->query="SELECT * FROM #__planning WHERE jobId='".$invoice['jobId']."'  ";
$db->setQuery();
$planningA=$db->output;

$db=new DB;
$db->query="SELECT * FROM #__tent2job LEFT JOIN #__tents ON #__tents.tentId=#__tent2job.tentId WHERE jobId='".$invoice['jobId']."'  ";
$db->setQuery();
$tentsA=$db->output;






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
	$contact="<br/><b>".$invoice['name']."</b>  ".$offre['cieType']."
	
	<br/>".trim($invoice['clientTitle']." ".$invoice['firstname']." ".$invoice['lastname']);
}
else {
	$contact="<br/><b>".trim(getClientTitle($invoice['clientTitle'])." ".$invoice['firstname']." ".$invoice['lastname'])."</b>";
}




if($invoice['clientType']=='cie') {
	$tva=$l['TVA']." ".$invoice['vat']."<br/><br/>";
	$contact="<br/><b>".$invoice['name']."</b>
	<br/>".trim(getClientTitle($invoice['clientTitle'])." ".$invoice['firstname']." ".$invoice['lastname']);
}
else {
	$contact="<br/><b>".trim(getClientTitle($invoice['clientTitle'])." ".$invoice['firstname']." ".$invoice['lastname'])."</b>";
}

if($offre['clientType']=='cie') {
	
	$invoiceAddress.="<br/>".$l['TVA'].": ".$invoice['vat'];
}


$contact.="<br/>".$invoiceAddress;


$deliveryAddress=stripslashes($deliveryA['number']." ".$deliveryA['address'].
" -  ".$deliveryA['zip']." ".$deliveryA['city']."
- ".$deliveryA['country']);






function getClientTitle($title) {
	switch($_GET['lang']) {
		case 'fr':
		default:
			$titles=array('Mme'=>'Mme','M.'=>'M.');
			
		break;
		
		case 'nl':
			$titles=array('Mme'=>'Mvr','M.'=>'Mhr');
		break;
		
		case 'en':
			$titles=array('Mme'=>'Mrs','M'=>'Mr');
		break;
	}	
	return $titles[$title];
	
}


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







	$conditions='';
	switch($invoice['language']) {
		default:
		case 'fr':
			if($invoice['conditions1']==1) {
				$conditions.="Conditions de paiement: comptant<br/>
Communication à mentionner: le numéro de cette facture<br/>";
			}
			if($invoice['conditions2']==1) {
				$conditions.="Le paiement de votre acompte confirme votre commande.";
			}
			/*$this->invoice['conditions']="Conditions de paiement: comptant
Communication à mentionner: le numéro de cette facture
Le paiement de votre acompte confirme votre commande.";	
			 * */
		break;
				
		case 'nl':
			if($invoice['conditions1']==1) {
				$conditions.="Betalingsvoorwaarden: contant<br/>
Communicatie: factuur nummer<br/>";
			}
			if($invoice['conditions2']==1) {
				$conditions.="De betaling van uw voorschot, bevestigt uw bestelling.";
			}
			/*$this->invoice['conditions']="Betalingsvoorwaarden: contant
Communicatie: factuur nummer
De betaling van uw voorschot, bevestigt uw bestelling.";	
			 * */
		break;
		
		case 'en':
			if($invoice['conditions1']==1) {
				$conditions.="Conditions of payment: cash<br/>
Communication: invoice number<br/>";
			}
			if($invoice['conditions2']==1) {
				$conditions.="The payment of your deposit, confirms your order.";
			}
			/*$this->invoice['conditions']="Conditions of payment: cash
Communication: invoice number
The payment of your deposit, confirms your order.";	
			 * */
		break;
	}
		
		
		
		
$template->set_var('action', "Créer");

foreach($invoice as $k=>$v) {
	$template->set_var($k, $v);
}


$template->set_var('invoiceRef', $invoice['invoiceRef']);



$condLabels=array('fr'=>'Conditions','nl'=>'Verkoopsvoorwaarden','en'=>'Conditions');
$template->set_var('tva', $tva);
$template->set_var('deliveryAddress', $deliveryAddress);

$template->set_var('contact', $contact);
if($conditions!='') {
	//$template->set_var('conditions', $conditions);
	$template->set_var('conditions',"<b><u>".$condLabels[$invoice['language']]." :</u></b>
  <p>".$conditions."</p>");
}
$template->set_var('date', date('d/m/Y'));
$template->set_var('introText', stripslashes($invoice['introText']));

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


foreach($tentsA as $t) {
	$tents.="<li>".$t['reference']." - ".$t['width']."x".$t['length']." - ".$t['m2']."m2</li>";
}
$template->set_var('tents', "<ul>".$tents."</ul>");

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
}
$matos="<li>Canalisation: ".$canal."</li><li>Plancher: ".$planc."</li>";
$template->set_var('matos', "<ul>".$matos."</ul>");

$db=new DB;
$db->query="SELECT * FROM #__product2invoice WHERE invoiceId='".$invoice['invoiceId']."' AND isFromOffre=1 ORDER BY rank";
$db->setQuery();
	if($products=$db->output) {
		$out="<table style='width:180mm'>";
		$out.="<thead style='border-bottom:1px solid #000000;background-color:#ededed;'><tr><th style='width:80%;background-color:#ededed;'>".$l['Description']."</th><th style='width:20%;text-align:right;background-color:#ededed;'>".$l['Montant htva']."</th></tr></thead><tbody>";
		$c=0;
		$tot='0.00';
		if(count($products)>0) {
		foreach($products as $p) {
			$price=$p['price']." €";
			if($p['price']=='0.00') {$price= 'gratis';}
			$out.="<tr rel='".$p['productId']."'><td style='width:80%'>".$p['description']."</td><td style='width:20%;text-align:right'>".$price."</td></tr>";
			$tot+=$p['price'];
			$c++;	
		}
		}
		$out.="</tbody>";
		$out.="<tfoot>";
		$out.="<tr><td style='text-align:right;background-color:#ededed;'>&nbsp;</td><td style='width:20%;;background-color:#ededed;' >&nbsp;</td></tr>";
		$out.="<tr><td style='text-align:right;;width:80%'>".$l['Total HTVA']."</td><td style='width:20%;text-align:right'>".sprintf('%.2f',$tot)." €</td></tr>";
		$out.="<tr><td style='text-align:right;width:80%'>".$l['TVA']." (21%)</td><td style='width:20%;text-align:right'>";
		if($invoice['priceType']=='htva') {
			
			
			$tva=($tot*0.21);
			$out.=sprintf('%.2f',$tva)." €";
		}
		else {
			$out.='intra communautaire';
		}
		$out.="</td></tr>";
		$out.="<tr><td style='text-align:right;width:80%;background-color:#ededed;'>".$l['TOTAL TVAC']."</td><td style='width:20%;text-align:right;background-color:#ededed;'>".sprintf('%.2f',$tot+$tva)." €</td></tr>";
		$out.="</tfoot></table>";
		
		$priceHT=$tot;
		}
		

		
$template->set_var('budget', "<br/><br/><br/>".$out);	


$db=new DB;
$db->query="SELECT MAX(sliceId) as mSlice FROM #__slices WHERE jobId='".$invoice['jobId']."' GROUP BY jobId";
$db->setQuery();

$ms=$db->output[0]['mSlice'];

$db=new DB;
$db->query="SELECT * FROM #__slices WHERE invoiceId='".$_GET['invoiceId']."' GROUP BY sliceId";
$db->setQuery();


//echo $db->query;
$slice=$db->output[0];

$slice['mSlice']=$ms;
	//print_r($slice);	
		
		
		if($slice['slice']>0) {
			$sl=sprintf('%.2f',$slice['slice'])." %";	
			$priceHT=($slice['slice']/100)*$priceHT;
		}
		$out="<table style='width:180mm'>";
		$out.="<tr><td style='width:50%'>".$slice['comments']."</td><td style='width:10%;text-align:right'>".$sl."</td><td style='width:40%;text-align:right'>".$l['Total HTVA']." : ".sprintf('%.2f',$priceHT)." €</td></tr>";
		if($invoice['priceType']=='htva') {
			$out.="<tr><td></td><td></td><td style='text-align:right'>".$l['TVA']." : ".sprintf('%.2f',($priceHT*21/100))." €</td></tr>";
			$priceTTC=$priceHT+(21/100)*$priceHT;
		}
		else {
			$out.="<tr><td></td><td></td><td style='text-align:right'>".$l['TVA']." : Intracommunautaire </td></tr>";
			$priceTTC=$priceHT;
		}
		$out.="<tr><td style='text-align:right;background-color:#ededed;'>&nbsp;</td><td style='background-color:#ededed;' >&nbsp;</td><td style='background-color:#ededed;' >&nbsp;</td></tr>";
		
		if($slice['sliceId']<$slice['mSlice']) {
			$out.="</table>";
			$out.="<table style='width:180mm;padding:5px'>";
			$out.="<tr><td style='text-align:right;width:172mm;border:1px solid #000000;padding:5px;'>".$l['TOTAL TTC a payer']." : <b>".sprintf('%.2f',$priceTTC)." € </b></td></tr>";
			$out.="</table>";
		}
		else {
			
			
			$out.=horsOffre($invoice,$priceTTC,$l);
		}
		

$template->set_var('slices', $out);	


function horsOffre($invoice,$priceTTC,$l) {
	$db=new DB;
	$db->query="SELECT * FROM #__product2invoice WHERE invoiceId='".$invoice['invoiceId']."' AND isFromOffre!=1 ORDER BY rank";
	$db->setQuery();
	//echo $db->query;
	$noOffre=$db->output;
	if(count($noOffre)>0) {
		$out.="<tr><td></td><td>Sous-total :</td><td style='text-align:right'>".sprintf('%.2f',$priceTTC)." €</td></tr>";
		$out.="</table>";
		$out.="<table style='width:180mm'>";
		$out.="<thead style='border-bottom:1px solid #000000;background-color:#ededed;'><tr><th style='width:80%;background-color:#ededed;'>Hors offre</th><th style='width:20%;text-align:right;background-color:#ededed;'>Montant HTVA</th></tr></thead><tbody>";
		$c=0;
		$tot='0.00';
		foreach($noOffre as $p) {
			$price=$p['price']." €";
			if($p['price']=='0.00') {$price= 'gratis';}
			$out.="<tr rel='".$p['productId']."'><td style='width:80%'>".$p['description']."</td><td style='width:20%;text-align:right'>".$price."</td></tr>";
			$tot+=$p['price'];
			$c++;	
		}
		
		$out.="</tbody>";
		$out.="<tfoot>";
		$out.="<tr><td style='text-align:right;background-color:#ededed;'>&nbsp;</td><td style='width:20%;;background-color:#ededed;' >&nbsp;</td></tr>";
		$out.="<tr><td style='text-align:right;;width:80%'>".$l['Total HTVA']."</td><td style='width:20%;text-align:right'>".sprintf('%.2f',$tot)." €</td></tr>";
		$out.="<tr><td style='text-align:right;width:80%'>".$l['TVA']." (21%)</td><td style='width:20%;text-align:right'>";
		if($invoice['priceType']=='htva') {
			
			
			$tva=($tot*0.21);
			$out.=sprintf('%.2f',$tva)." €";
			$priceTTC+=$tot+$tva;
		}
		else {
			$out.='intra communautaire';
			$priceTTC+=$tot;
		}
		$out.="</td></tr>";
		$out.="<tr><td style='text-align:right;width:80%;background-color:#ededed;'>".$l['TOTAL TVAC']."</td><td style='width:20%;text-align:right;background-color:#ededed;'>".sprintf('%.2f',$tot+$tva)." €</td></tr>";
		$out.="</tfoot></table>";
	
		//$out.="</table>";
		$out.="<table style='width:180mm;padding:5px'>";
		$out.="<tr><td style='text-align:right;width:172mm;border:1px solid #000000;padding:5px;'>".$l['TOTAL TTC a payer']." : <b>".sprintf('%.2f',$priceTTC)." €</b></td></tr>";
		$out.="</table>";
	}
	else {
		//$out="</table>";
		//$out.="<tr><td></td><td>Sous-total :</td><td style='text-align:right'>".sprintf('%.2f',$priceTTC)." €</td></tr>";
		$out.="</table>";
		$out.="<table style='width:180mm;padding:5px'>";
		$out.="<tr><td style='text-align:right;width:172mm;border:1px solid #000000;padding:5px;'>".$l['TOTAL TTC a payer']." : <b>".sprintf('%.2f',$priceTTC)." €</b></td></tr>";
		$out.="</table>";
	}
	return $out;
}



//$template->set_var('conditions',nl2br( $invoice['iConditions']));

$template->set_var('tentsComments',nl2br( $invoice['tentsComments']));	


$db=new DB;
$db->query="SELECT * FROM #__users WHERE userId='".$invoice['OUserId']."'";

$db->setQuery();
$userA=$db->output[0];
$template->set_var('user',$userA['firstname']." ".$userA['lastname']);


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