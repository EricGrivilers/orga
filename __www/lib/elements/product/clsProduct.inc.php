<?php

class product {
	
	
	function getProduct2Offre($offreId) {
		$db=new DB;
		$db->query="SELECT * FROM #__product2offre WHERE offreId='".$offreId."' AND isOption=0 AND isFromOffre=1 ORDER BY rank";
		$db->setQuery();
		
		//echo $db->query;
		$this->product2offre=$db->output;
		
	//	print_r($this->product2offre);
		return $this->product2offre;
	}
	
	function getProductOption2Offre($offreId) {
		$db=new DB;
		$db->query="SELECT * FROM #__product2offre WHERE offreId='".$offreId."' AND isOption=1 AND isFromOffre=1 ORDER BY rank";
		$db->setQuery();
		
		//echo $db->query;
		$this->productOption2offre=$db->output;
		
		return $this->productOption2offre;
	}
	
	
	function getProduct2Job($jobId) {
		$db=new DB;
		$db->query="SELECT * FROM #__product2job WHERE jobId='".$jobId."'   ORDER BY rank";
		$db->setQuery();
		
		//echo $db->query;
		$this->product2job=$db->output;
		
	//	print_r($this->product2offre);
		return $this->product2job;
	}
	
	
	
	
	
}


?>