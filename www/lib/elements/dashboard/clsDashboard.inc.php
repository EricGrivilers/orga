<?php

class Dashboard extends element {
	
	
	
	function display() {
		switch($this->params->function) {
			default:
			case 'getDashboard':
				$out.="<table width='100%'>";
				$out.="<tr><td width='49%'>".$this->getJobs()."</td><td >&nbsp;</td><td width='49%' id='cM' >".$this->getChat()."</td></tr>";
				$out.="<tr><td>".$this->getLastActions()."</td><td>&nbsp;</td><td>".$this->getInvoices()."</td></tr>";
				$out.="</table>";
				$out.=$this->tents();
				$this->content=$out;
				
			break;
			
		}
		
		return $this->content;
	}
	
	
	function getLastLogins() {
		$db=new DB;
		$db->query="SELECT firstname,lastname,lastLog FROM #__users WHERE email NOT LIKE '%caravane%' ORDER BY lastLog DESC";
		$db->resultType='array';
		$db->setQuery();
		
		$out="<h1 class='header'>Dernières connexions</h1><div><table class='scrollable' ><thead style='background:#ccc'><tr><th>Utilisateur</th><th style='width:115px'>Date</th></tr></thead>";
		foreach($db->output as $k=>$v) {
			$out.="<tr><td>".$v['firstname']." ".$v['lastname']."</td><td>".$v['lastLog']."</td></tr>";
		}
		$out.="</table></div>";
		
		$this->content.=$out;
	}
	
	
	
	function getChat() {
		
		$file = 'chat.html'; // fichier de stockage
		$max_lines = 20;    // nombre de lignes maximum stockées
		
		if (isset($this->message)) {    
			$db=new DB;
			$db->query="INSERT INTO #__chat (message, messageType,messageDate,userId) VALUES (\"".$this->message."\",\"chat\",NOW(),'".$_SESSION['user']['userId']."')";
			$db->resultType='none';
			$db->setQuery();
		}
		$db=new DB;
		$db->query="SELECT * FROM #__chat LEFT JOIN #__users ON #__users.userId=#__chat.userId WHERE messageType='chat' ORDER BY messageDate ASC";
		$db->resultType='array';
		$db->setQuery();
		
		$out="<h1 class='header'>Communications</h1><div style='margin-bottom:10px'><div id='chatW' style='height:220px;border:1px solid #cccccc;padding:5px;overflow:scroll'><div id='chatC'>";
		foreach($db->output as $k=>$v) {
			$out.="<h5>".$v['firstname']." (".$v['messageDate'].")</h5>".$v['message'];
		}
		$out.="</div></div><div><textarea id='chat_message' name='chat_message' style='width:100%' ></textarea><br/><input type='button' value='Envoyer' onclick='chatMessage()' /></div></div>";
		
		return $out;
	}
	
	function getLastActions() {
		$db=new DB;
		$db->query="SELECT * FROM #__chat LEFT JOIN #__users ON #__users.userId=#__chat.userId WHERE messageType='logs' GROUP BY message ORDER BY messageDate DESC LIMIT 0,50";
		$db->resultType='array';
		$db->setQuery();
		
		$out="<h1 class='header'>Dernières actions</h1><div style='height:300px;overflow:scroll'><table class='scrollable'><thead style='background:#ccc'><th style='background:#ccc'>Action</th><th style='background:#ccc'>Utilisateur</th><th style='width:115px;background:#ccc'>Date</th></thead><tbody>";
		foreach($db->output as $k=>$v) {
			$tdate=explode(" ",$v['messageDate']);
			$out.="<tr><td >".$v['message']."</td><td>".$v['iso']."</td><td>".$tdate[0]."</td></tr>";
		}
		$out.="</tbody></table></div>";
		
		return $out;
	}
	
	
	
	
	function getJobs() {
		$db=new DB;
		$db->query="SELECT J.reference,J.jobId,CONCAT(C.name,' ',C.lastname,' ',C.firstname) AS client,J.startBuild FROM #__jobs J LEFT JOIN #__clients C ON C.clientId=J.clientId WHERE startBuild>=NOW() ORDER BY J.jobId DESC";
		$db->setQuery();
		//echo $db->query;
		$jobs=$db->output;
		$out="<h1 class='header'>Jobs en cours</h1><div style='height:300px;overflow:scroll'><table class='scrollable'><thead style='background:#ccc'><th style='width:105px'>Job</th><th>Client</th><th style='width:115px'>Date</th></thead><tbody>";
		foreach($jobs as $job) {
			$tdate=explode(" ",$job['startBuild']);
			$out.="<tr><td style='width:120px'><a href='/jobs?jobId=".$job['jobId']."'>".$job['reference']."</a></td><td>".stripslashes($job['client'])."</td><td>".$tdate[0]."</td></tr>";
		}
		$out.="</tbody></table></div>";
		return $out;
	}


	function getInvoices() {
		$db=new DB;
		$db->query="SELECT I.reference,I.insertDate,I.invoiceId, J.reference AS jobRef,I.jobId, CONCAT(C.name,' ',C.lastname,' ',C.firstname) AS client FROM #__invoices I LEFT JOIN #__clients C ON C.clientId=I.clientId LEFT JOIN #__jobs J ON J.jobId=I.jobId WHERE 2011-01-31>=NOW() OR I.status='ok' ORDER BY I.invoiceId DESC ";
		$db->setQuery();
		//echo $db->query;
		$jobs=$db->output;
		$out="<h1 class='header'>Factures en cours</h1><div style='height:300px;overflow:scroll'><table class='scrollable'><thead style='background:#ccc'><th style='width:105px'>Facture</th><th>Client</th><th>Job</th><th style='width:115px'>Date</th></thead><tbody>";
		foreach($jobs as $job) {
			$out.="<tr><td><a href='/invoices?invoiceId=".$job['invoiceId']."'>".$job['reference']."</a></td><td>".$job['client']."</td><td><a href='/jobs?jobId=".$job['jobId']."'>".$job['jobRef']."</a></td><td>".$job['insertDate']."</td></tr>";
		}
		$out.="</tbody></table></div>";
		return $out;
	}
	
	
	function tents() {
		$db=new DB;
		$db->query="SELECT * FROM #__tents T LEFT JOIN #__tent2offre OT ON OT.tentId=T.tentId LEFT JOIN #__offres O ON O.offreId=OT.offreId LEFT JOIN #__tent2job TJ ON TJ.tentId=T.tentId LEFT JOIN #__jobs J ON J.jobId=TJ.jobId WHERE O.startBuild>=DATE_FORMAT(CURRENT_DATE - INTERVAL 1 MONTH, '%Y-%m-%d %H:%i:%s') OR J.startBuild>=DATE_FORMAT(CURRENT_DATE - INTERVAL 1 MONTH, '%Y-%m-%d %H:%i:%s') ";
		$db->query="SELECT T.tentId,O.offreId,J.jobId, OT.tentId,TJ.tentId  FROM #__tents T LEFT JOIN #__tent2offre OT ON OT.tentId=T.tentId LEFT JOIN #__offres O ON O.offreId=OT.offreId LEFT JOIN #__tent2job TJ ON TJ.tentId=T.tentId LEFT JOIN #__jobs J ON J.jobId=TJ.jobId WHERE O.startBuild>=NOW() OR J.startBuild>=NOW() ";
		$db->query="SELECT DATE_FORMAT(J.startBuild, '%Y-%m-%d') as startBuild,DATE_FORMAT(J.endBuild, '%Y-%m-%d') as endBuild, DATEDIFF(J.endBuild, J.startBuild) AS days, DATEDIFF(J.startBuild,DATE_ADD(CURDATE(),INTERVAL -1 DAY)) AS startDays, J.reference AS jobReference,J.jobId, T.tentId,T.reference AS tentReference FROM #__jobs J LEFT JOIN #__tent2job TJ ON TJ.jobId=J.jobId LEFT JOIN #__tents T ON T.tentId=TJ.tentId WHERE startBuild>=DATE_ADD(CURDATE(),INTERVAL -1 DAY) OR endBuild>=DATE_ADD(CURDATE(),INTERVAL -1 DAY)  ORDER BY T.tentId";
		$jobs=$db->setQuery();
		//echo $db->query;
		$db=new DB;
		$db->query="SELECT DATE_FORMAT(J.startBuild, '%Y-%m-%d') as startBuild,DATE_FORMAT(J.endBuild, '%Y-%m-%d') as endBuild, DATEDIFF(J.endBuild, J.startBuild) AS days, DATEDIFF(J.startBuild,DATE_ADD(CURDATE(),INTERVAL -1 DAY)) AS startDays,J.reference AS offreReference,J.offreId,T.tentId,T.reference AS tentReference FROM #__offres J LEFT JOIN #__tent2offre TJ ON TJ.offreId=J.offreId LEFT JOIN #__tents T ON T.tentId=TJ.tentId WHERE startBuild>=DATE_ADD(CURDATE(),INTERVAL -1 DAY) OR endBuild>=DATE_ADD(CURDATE(),INTERVAL -1 DAY)  ORDER BY T.tentId";
		
		$offres=$db->setQuery();
		//echo $db->query;
		$tents=array();
		foreach($jobs as $j) {
			if($j['tentId']>0) {
				$tents[$j['tentId']]['reference']=$j['tentReference'];
				$tents[$j['tentId']]['jobs'][$j['jobId']]=array($j['jobId'],$j['jobReference'],$j['startBuild'],$j['endBuild'],$j['startDays'],$j['days']);
			}
			
		}
		foreach($offres as $j) {
			if($j['tentId']>0) {
				$tents[$j['tentId']]['reference']=$j['tentReference'];
				$tents[$j['tentId']]['offres'][$j['offreId']]=array($j['offreId'],$j['offreReference'],$j['startBuild'],$j['endBuild'],$j['startDays'],$j['days']);
			}
			
		}
		
		//asort($tents,SORT_NUMERIC);
		$out.="<div style='overflow:scroll;width:100%;height:500px;'>";
		//$out.="<div style='background: #FFCC66; height: 300px; width: 200px; position: fixed; top: 30px; margin-left:697px;'>les informations qui doivent toujours etre présentes</div>";
		$out.="<table style='margin-top:20px'>";
		$processed=array();
		$bgcol=array('0'=>'#ededed','1'=>'#ffffff');
		$o=0;
		foreach($tents as $k=>$t) {
			$error=0;
			$out.="<tr style='background-color:".$bgcol[$o].";border-top:1px solid #ccc'><td style='width:200px'>".$t['reference']."</td><td style='border-left:1px solid #222'>";
			
			if($t['jobs']) {
				foreach($t['jobs'] as $j) {
					$col='orange';
					foreach($t['jobs'] as $tj) {
						
						//if(($j[4]>=$tj[4] && $j[4]<=($tj[4]+$tj[5])) || ($tj[4]>=$j[4] && $tj[4]<=($j[4]+$j[5]))) {
						if($j[0]!=$tj[0] && (($j[4]>=$tj[4] && $j[4]<($tj[4]+$tj[5])) || ($tj[4]>=$j[4] && $tj[4]<($j[4]+$j[5])))) {
							//echo $k."=>".$j[4]."//".$tj[4]." ---".$j[0]."//".$tj[0]."<br/>";
							$col='red';
							$error=2;
							//echo $k."<br/>";
							
						}
					}
					$out.="<div style='background-image:url(/images/tentPlanBkg.gif);padding-left:".($j[4]*20)."px'><div style='width:".($j[5]*20)."px;overflow:hidden;background-color:".$col.";font-size:9px;height:10px;'><a href='/jobs?jobId=".$j[0]."' title=\"job ".$j[1]." du ".$j[2]." au ".$j[3]."\">".$j[1]."</a></div></div>";
				}
			}
			if($t['offres']) {
				foreach($t['offres'] as $j) {
					$col="#ccc";
					if($t['jobs']) {
						foreach($t['jobs'] as $tj) {
							if(($j[4]>=$tj[4] && $j[4]<=($tj[4]+$tj[5])) || ($tj[4]>=$j[4] && $tj[4]<=($j[4]+$j[5]))) {
								$col='#aaa';
								if($error==0) {
									$error=1;
								}
								
							}
						}
					}
					$out.="<div style='background-image:url(/images/tentPlanBkg.gif);padding-left:".($j[4]*20)."px'><div style='width:".($j[5]*20)."px;overflow:hidden;background-color:".$col.";font-size:9px;height:10px;'><a href='/quotes?offreId=".$j[0]."' title=\"offre ".$j[1]." du ".$j[2]." au ".$j[3]."\">".$j[1]."</a></div></div>";
				}
			}
			$out.="</td></tr>";
			
			$db=new DB;
							$db->query="UPDATE #__tents SET issue='".$error."' WHERE tentId='".$k."' ";
							$db->setQuery();
							
			$o=!$o;
		}
		$out.="</table>";
		$out.="</div>";
		
		/*
		echo "<pre style='text-align:left'>";
		print_r($tents);
		echo "</pre>";
		*/
		
		return $out;
	}
	
}




?>