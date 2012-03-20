<?php

include('config.inc.php');
include(__lib__."init.inc.php");

$marges=array(15,20,15,0);
$mWidth=210-$marges[0]-$marges[2];


	$db=new DB;
	$db->query="SELECT J.*,CONCAT(C.name,' ',C.lastname,' ',C.firstname) AS cName,J.startBuild,J.endBuild,U.iso,C.phone AS cPhone, C.mobile AS cMobile FROM #__jobs J LEFT JOIN #__clients C ON C.clientId=J.clientId LEFT JOIN #__users U ON U.userid=J.userId WHERE (startBuild>=NOW() OR endBuild>=NOW()) ORDER BY startBuild";
	if($_GET['userId']>0) {
		$db->query.=" AND userId='".$_GET['userId']."' ";
	}
	if($_GET['longBuild']=='short') {
		$db->query.=" AND endBuild-startBuild<=15 ";
	}
	else if($_GET['longBuild']=='long') {
		$db->query.=" AND endBuild-startBuild>15 ";
	}
	$db->setQuery();
	//echo $db->query;
	$jobs=$db->output;	
	
	$out="<table style='font-size:7pt'>";
	$out.="<tr style='border-bottom:1px solid #333333'><td>JOB</td><td>CLIENT</td><td>BUILD</td><td>UNBUILD</td><td>STREET</td><td>NUM</td><td>ZIP</td><td>CITY</td><td>COUNTRY</td><td>PHONE</td><td>MOBILE</td></tr>";
	$xls=array();
	foreach($jobs as $j) {
		$ta=array();
		$ta[]=$j['reference'];
		$ta[]=utf8_decode(stripcslashes(trim($j['cName'])));	
		$ta[]=$j['startBuild'];
		$ta[]=$j['endBuild'];
		$ta[]=utf8_decode(stripcslashes($j['address']));
		$ta[]=$j['number'];
		$ta[]=$j['zip'];
		$ta[]=utf8_decode(stripcslashes($j['city']));
		$ta[]=utf8_decode(stripcslashes($j['country']));
		if(empty($j['phone'])) {
			$j['phone']=$j['cPhone'];
		}
		$ta[]=$j['phone'];
		if(empty($j['mobile'])) {
			$j['mobile']=$j['cMobile'];
		}
		$ta[]=$j['mobile'];
		$out.="<tr><td style='border-right:1px solid #cccccc;border-bottom:1px solid #cccccc;width:21mm'>".implode("</td><td style='border-right:1px solid #cccccc;border-bottom:1px solid #cccccc;width:22mm'>",$ta)."</td></tr>";
		//$out .= "\n";
	}
	$out.="</table>";
	
	
	  
	 require_once(__lib__.'html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('L','A4','fr',true, 'UTF-8',$marges);
	//$pdf = new HTML2PDF('P','A4','fr', array(20, 20, 20, 20)); 
    $html2pdf->WriteHTML($out);
	//$html2pdf->Output(__root__.$filename,'F');
    $html2pdf->Output($filename);
    
	    echo $out;
	
	

?>