<?php


include('config.inc.php');
include(__lib__."init.inc.php");

$marges=array(15,20,15,0);
$mWidth=210-$marges[0]-$marges[2];
if(empty($_GET['language']) || $_GET['language']=='undefined') {
	$_GET['language']='fr';
}

switch($_GET['type']) {
	case 'offre':
		$offre=new offre;
		$offre->offreId=$_GET['offreId'];
		$offre->mWidth=$mWidth;
		$content= $offre->getPdf();
		$filename=$offre->offre['reference'].'-'.$_GET['language'];
		/*echo "<pre>";
		print_r($offre);	
		echo "</pre>";
		 */
	break;
	
	
	case 'invoice':
		$invoice=new invoice;
		$invoice->invoiceId=$_GET['invoiceId'];
		$invoice->mWidth=$mWidth;
		if($_GET['rn']!='') {
			$invoice->rn=$_GET['rn'];
		}
		$content= $invoice->getPdf();
		
		$filename=$invoice->invoice['reference'].'-'.$_GET['language'];
		if($_GET['rn']!='') {
			$filename=$invoice->invoice['reference'].'-'.$_GET['rn'].'-'.$_GET['language'];
		}
		
		
	break;
	
	
	case 'job':
		$job=new job;
		$job->jobId=$_GET['jobId'];
		$job->mWidth=$mWidth;
		$content= $job->getPdf();
		
		$filename=$job->job['reference'].'-'.$_GET['language'];
		if($_GET['rn']!='') {
			$filename=$job->job['reference'].'-'.$_GET['rn'].'-'.$_GET['language'];
		}
		
		
	break;
}
$filepath="docs/".$filename.".pdf";

if($content) {
	
	
	require_once(__lib__.'html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr',true, 'UTF-8',$marges);
	//$pdf = new HTML2PDF('P','A4','fr', array(20, 20, 20, 20)); 
   $html2pdf->WriteHTML($content);
   if(file_exists(__root__.$filepath)) {
		rename(__root__.$filepath,__root__."docs/".$filename."_".date ("Ymd-His.", filemtime(__root__.$filepath)).".pdf");

	}
  
   $html2pdf->Output(__root__.$filepath,'F');
	$html2pdf->Output($filepath);
    
}
?>