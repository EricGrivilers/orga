<?php
class slice {
	var $offreId;
	
	
	
	function getSliceFromOffre() {
		$db=new DB;
		$db->query="SELECT * FROM #__slice2offre WHERE offreId='".$this->offreId."' ORDER by sliceId ";
		$this->slices=$db->setQuery();
		return $this->slices;
	}
	
	
	function getSliceFromJob() {
		$db=new DB;
		$db->query="SELECT S.*,I.reference AS invoiceReference FROM #__slice2job S LEFT JOIN #__invoices I ON I.invoiceId=S.invoiceId WHERE S.jobId='".$this->jobId."' ORDER by sliceId ";
		$this->slices=$db->setQuery();
		return $this->slices;
	}
	
	
}


?>