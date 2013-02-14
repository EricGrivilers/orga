<?php

require_once('config.inc.php');
require_once('lib/init.inc.php');



//update offres

$db=new DB;
$db->query="SELECT O.offreId FROM #__offres O LEFT JOIN #__jobs J ON J.offreId=O.offreId WHERE jobId IS NOT NULL";
$db->setQuery();
$offres=$db->output;
foreach($offres as $o) {
	$handle = fopen(__web__."quotes?offreId=".$o['offreId'], "r");
	fclose($handle);
}





?>