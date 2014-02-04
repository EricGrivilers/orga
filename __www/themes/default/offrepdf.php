<?php

include('../../../config.inc.php');
include(__lib__."init.inc.php");

$marges=array(15,20,15,15);
$mWidth=210-$marges[0]-$marges[2];


$db=new DB;
$db->query="SELECT *,#__offres.reference as offreRef,#__offres.userId as OUserId,#__offres.language as offreLang FROM #__offres LEFT JOIN #__clients ON #__clients.clientId=#__offres.clientId WHERE offreId='".$_GET['offreId']."'";
$db->setQuery();
$offre=$db->output[0];
//$content.=print_r($offre,true);
if($offre['status']!='draft' && file_exists(__root__."docs/".$offre['offreRef'].'.pdf') && $offre['status']=='CONFIRMÉ') {
	header("location:".__web__."docs/".$offre['offreRef'].'.pdf');
	die();
}

//print_r($offre);


if($offre['offreLang']!='') {
	$offre['language']=$offre['offreLang'];
}




$l=array();
$handle=fopen(__lib__."templates/default/".$offre['language'].".txt",'r');
while (($buffer = fgets($handle, 4096)) !== false) {
	$buffer=utf8_decode($buffer);
      $t=explode("\t",$buffer);
	  $l[$t[0]]=$t[1];
}


//print_r($l);
$template=new template('.');
$template->set_file("template",__lib__."templates/offre_".$offre['offreType']."_".$offre['language'].".tpl");
$template->set_var('mWidth', $mWidth);

$db=new DB;
$db->query="SELECT * FROM #__clients WHERE clientId='".$offre['clientId']."' ";
$db->setQuery();
$addressA=$db->output[0];


$deliveryA=$offre;

$db=new DB;
$db->query="SELECT * FROM #__offres WHERE offreId='".$_GET['offreId']."'  ";
$db->setQuery();
$deliveryA=$db->output[0];




$db=new DB;
$db->query="SELECT * FROM #__planning WHERE offreId='".$_GET['offreId']."'  ";
$db->setQuery();
$planningA=$db->output;

$db=new DB;
$db->query="SELECT * FROM #__tent2offre LEFT JOIN #__tents ON #__tents.tentId=#__tent2offre.tentId WHERE offreId='".$_GET['offreId']."'  ";
$db->setQuery();
$tentsA=$db->output;

if($offre['clientType']=='cie') {
	$contact="<br/><b>".$offre['name']." </b> ".$offre['cieType']."
	<br/>".$l['TVA'].": ".$offre['vat']."
	<br/>".trim(getClientTitle($offre['clientTitle'])." ".$offre['firstname']." ".$offre['lastname']);
}
else {
	$contact="<br/><b>".trim(getClientTitle($offre['clientTitle'])." ".$offre['firstname']." ".$offre['lastname'])."</b>";
}






function getClientTitle($title) {
	switch($offre['language']) {
		case 'fr':
		default:
			$titles=array('Mme'=>'Mme','M.'=>'M.');
			
		break;
		
		case 'nl':
			$titles=array('Mme'=>'Mevr','M.'=>'M.');
		break;
		
		case 'en':
			$titles=array('Mme'=>'Mrs','M'=>'Mr');
		break;
	}	
	return $titles[$title];
	
}


$invoiceAddress=stripslashes($addressA['address']." ".$addressA['number'].
"<br/>".$addressA['zip']." ".$addressA['city']."
<br/>".$addressA['country'])."<br/>";
if($addressA['email']) {
	$invoiceAddress.="<br/>".$addressA['email'];
}
if($addressA['mobile']) {
	$invoiceAddress.="<br/>".$l['Tel'].": ".$addressA['mobile'];
}


$deliveryAddress=stripslashes($deliveryA['number']." ".$deliveryA['address'].
" -  ".$deliveryA['zip']." ".$deliveryA['city']."
- ".$deliveryA['country']."
<br/>".$deliveryA['comments']);


$template->set_var('action', "Créer");

foreach($offre as $k=>$v) {
$template->set_var($k, $v);
}



switch($offre['language']) {
	//default:
	case 'nl':
		$invoiceAddress=preg_replace('/Belgique/','België',$invoiceAddress);
		$deliveryAddress=preg_replace('/Belgique/','België',$deliveryAddress);
	break;
	
	case 'en':
		$invoiceAddress=preg_replace('/Belgique/','Belgium',$invoiceAddress);
		$deliveryAddress=preg_replace('/Belgique/','Belgium',$deliveryAddress);
	break;	
}



$template->set_var('invoiceAddress', $invoiceAddress);
$template->set_var('deliveryAddress', $deliveryAddress);
$template->set_var('reference', $offre['offreRef']);
$template->set_var('contact', $contact);
$template->set_var('date', date('d/m/Y'));
$template->set_var('introText', stripslashes($offre['introText']));


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

switch($offre['language']) {
	default:
		$matos="<li>Canalisation: ".$canal."</li><li>Plancher: ".$planc."</li>";
	break;
	case 'nl':
		$matos="<li>Ondergrondleidingen: ".$canal."</li><li>Vloer: ".$planc."</li>";
	break;
}
$template->set_var('matos', "<ul>".$matos."</ul>");





$db=new DB;
$db->query="SELECT * FROM #__product2offre WHERE offreId='".$_GET['offreId']."' AND isOption!=1 AND  isFromOffre=1 ORDER BY rank";
$db->setQuery();
	if($products=$db->output) {
		$out="<table style='width:".$mWidth."mm'>";
		$out.="<thead style='border-bottom:1px solid #000000;background-color:#ededed;'><tr><th style='width:80%;background-color:#ededed;'>".$l['Description']."</th><th style='width:20%;text-align:right;background-color:#ededed;'>".$l['Montant htva']."</th></tr></thead>";
		$out.="<tbody><tr><td></td><td></td></tr>";
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
		$out.="<tr><td style='text-align:right;width:80%'>".$l['Total HTVA']."</td><td style='width:20%;text-align:right'><b>".sprintf('%.2f',$tot)." €</b></td></tr>";
		$out.="<tr><td style='text-align:right;width:80%'>".$l['TVA']." (21%)</td><td style='width:20%;text-align:right'>";
		if($offre['priceType']=='htva') {
			
			
			$tva=($tot*0.21);
			$out.=sprintf('%.2f',$tva)." €";
		}
		else {
			$out.='intra communautaire';
		}
		$out.="</td></tr>";
		$out.="<tr><td style='text-align:right;width:80%;background-color:#ededed;'><b>".$l['TOTAL TTC a payer']."</b></td><td style='width:20%;text-align:right;background-color:#ededed;'><b>".sprintf('%.2f',$tot+$tva)." €</b></td></tr>";
		$out.="</tfoot></table>";
		}
		
$template->set_var('budget', $out);	








$db=new DB;
$db->query="SELECT * FROM #__product2offre WHERE offreId='".$_GET['offreId']."' AND isOption=1 AND  isFromOffre=1 ORDER BY rank";
$db->setQuery();
$out='/';
if($products=$db->output) {
		$out="<table style='width:".$mWidth."mm'>";
		$out.="<thead style='border-bottom:1px solid #000000;background-color:#ededed;'><tr><th style='width:80%;background-color:#ededed;'>".$l['Description']."</th><th style='width:20%;text-align:right;background-color:#ededed;'>".$l['Montant htva']."</th></tr></thead><tbody>";
		$c=0;
		$tot='0.00';
		foreach($products as $p) {
			$price=$p['price']." €";
			if($p['price']=='0.00') {$price= $l['sur devis'];}
			$out.="<tr rel='".$p['productId']."'><td style='width:80%'>".$p['description']."</td><td style='width:20%;text-align:right'>".$price."</td></tr>";
			$tot+=$p['price'];
			$c++;	
		}
		
		$out.="</tbody>";
		$out.="</table>";
}
$template->set_var('options', $out);



$db=new DB;
$db->query="SELECT * FROM #__slices WHERE offreId='".$_GET['offreId']."' ORDER BY sliceId ";
$db->setQuery();
$conditions="<table style='width:".$mWidth."mm'>";
if($slices=$db->output) {
	
	foreach($slices as $s) {
		$conditions.="<tr><td>".stripslashes($s['comments'])."</td></tr>";
	}
	
}
$conditions.="<tr><td>".nl2br(stripslashes( $offre['conditions']))."</td></tr>";
$conditions.="</table>";

$template->set_var('conditions',$conditions);

$template->set_var('tentsComments',nl2br( $offre['tentsComments']));	


$db=new DB;
$db->query="SELECT * FROM #__users WHERE userId='".$offre['OUserId']."'";

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
    Ceci est un <b>exemple d'utilisation ".$_GET['offreId']."</b>
    de <a href='http://html2pdf.fr/'>HTML2PDF</a>.<br>
</page>";

*/





//echo $content;
//die();
	
	

    require_once(__lib__.'html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr',true, 'UTF-8',$marges);
	//$pdf = new HTML2PDF('P','A4','fr', array(20, 20, 20, 20)); 
    $html2pdf->WriteHTML($content);
	$html2pdf->Output(__root__."docs/".$offre['offreRef'].'.pdf','F');
    $html2pdf->Output($offre['offreRef'].'.pdf');

?>