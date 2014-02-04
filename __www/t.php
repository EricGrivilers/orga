<?php

include('config.inc.php');
include(__lib__."init.inc.php");



$db=new DB;
		$db->query="SELECT I.invoiceId,C.* FROM #__invoices I LEFT JOIN #__clients C ON C.clientId=I.clientId";
		$db->setQuery();
		echo $db->query."<br/>";
		$invoices=$db->output;
		foreach($invoices as $i) {
			$db=new DB;
			$db->query="UPDATE #__invoices SET 
			name=\"".$i['name']."\",
			lastname=\"".$i['lastname']."\",
			firstname=\"".$i['firstname']."\",
			number=\"".$i['number']."\",
			address=\"".$i['address']."\",
			city=\"".$i['city']."\",
			zip=\"".$i['zip']."\",
			country=\"".$i['country']."\", 
			vat=\"".$i['vat']."\",
			clientType=\"".$i['clientType']."\",
			clientTitle=\"".$i['clientTitle']."\"  
			WHERE invoiceId='".$i['invoiceId']."'";
			$db->setQuery();
			echo $db->query."<br/>";
		}

/*
$db=new DB;
$db->query="SELECT offreId FROM #__offres";
$offres=$db->setQuery();

foreach($offres as $o) {
	$to=new offre;
	$to->offreId=$o['offreId'];
	$to->getOffre();
}

*/

/*
$db=new DB;
$db->query="SELECT jobId FROM #__jobs";
$jobs=$db->setQuery();

foreach($jobs as $o) {
	$to=new job;
	$to->jobId=$o['jobId'];
	$to->getJob();
}
*/


/*
 $db=new DB;
 $db->query="SELECT J.offreId, J.jobId, J.clientId, J.reference, J.status, J.issue, CONCAT(C.name,' ',C.firstname,' ',C.lastname) AS client, J.offreType,C.country as facturation, CONCAT(U.firstname,' ',U.lastname) AS userName, J.country AS livraison,DATE_FORMAT( J.startBuild, '%d/%m/%Y') AS startBuild, DATE_FORMAT( J.endBuild, '%d/%m/%Y') AS endBuild, GROUP_CONCAT(DISTINCT CONCAT('', T.reference,'') SEPARATOR '<br/>') AS tents , O.reference AS offreRef, J.language, GROUP_CONCAT(DISTINCT CONCAT('', I.reference,'') SEPARATOR '<br/>') AS invoices FROM extra_jobs J LEFT JOIN extra_offres O ON O.offreId=J.offreId LEFT JOIN extra_clients C ON C.clientId=J.clientId LEFT JOIN extra_users U ON U.userId=J.userId LEFT JOIN extra_tent2job TJ ON TJ.jobId=J.jobId LEFT JOIN extra_tents T ON T.tentId=TJ.tentId LEFT JOIN extra_invoices I ON I.jobId=J.jobId WHERE J.public='1' AND J.endBuild>=NOW() AND J.issue>0 GROUP BY J.jobId ORDER BY J.jobId DESC";
$jobs=$db->setQuery();

echo "<table border='1'>";
foreach($jobs as $j) {
	if($i==0) {
		echo "<tr>";
	foreach($j as $k=>$v) {
		echo "<td>".$k."</td>";
	}
	echo "</tr>";
	}
	echo "<tr>";
	foreach($j as $k=>$v) {
		echo "<td>".$v."</td>";
	}
	echo "</tr>";
	$i++;
}
echo "</table>";
*/
 
?>
