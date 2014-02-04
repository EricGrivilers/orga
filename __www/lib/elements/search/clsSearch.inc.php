<?php


class search extends element {

	var $types;
	var $prices;
	var $areas;
	var $cities;
	
	function display() {
		if(empty($_GET['searchType'])) {
			$_GET['searchType']='sale';			   
		}
		$this->content=$this->getForm();
		return $this->content;
	}
	
	
	function getForm() {
		
		$db=new DB;
		$db->query="SELECT * FROM  `prices` ORDER BY price";
		$prices=$db->setQuery();
		
		$this->prices=array();
		foreach($prices as $price) {
			$this->prices[$price['type']][]=$price['price'];
			
		}
		
		$db=new DB;
		$db->query="SELECT type_".$_SESSION['language']." as label FROM  `type`";
		$this->types=$db->setQuery();
	
		
		$this->areas=array(l::t("BRUXELLES")."<br/>".l::t("SUD ET CENTRE"),l::t("BRUXELLES")."<br/>".l::t("EST"),l::t("PERIPHERIE")."<br/>".l::t("BRUXELLOISE"),l::t("PROVINCE"));
		//money_format('%.2n', $number)
		$out.="<form name='searchForm' id='searchForm' method='get'  action=\"/vente\">";
		$out.="<input type='hidden' name='searchStart' id='searchStart' value='".$_GET['searchStart']."' />";
		$out.="<input type='hidden' name='orderBy' id='orderBy' value='".$_GET['orderBy']."' />";
		//$out.="<input type='hidden' name='ref' id='ref' value='".$_GET['ref']."' />";
		$out.="<div class='searchHeader'><div class='main'>RECHERCHE : <div id='radio'><input type='radio' id='searchTypeSale' name='searchType' value='sale' onchange='changeSearchType()' ".$this->isChecked2('searchType','sale')." /><label for='searchTypeSale'>&nbsp;</label> Vente <input type='radio' name='searchType' id='searchTypeRent' value='rent' onchange='changeSearchType()' ".$this->isChecked2('searchType','rent')." /><label for='searchTypeRent'>&nbsp;</label> Location</div></div><div class='infos'>Précisez votre recherche (choix multiples):</div></div>";
		
		$out.="<table cellspacing='0' cellpadding='0' id='searchTable'>";
		$out.="<tr id='types'>
		<td><input type='checkbox' id='type_1' name='type[1]' value=\"".$this->types[0]['label']."\" ".$this->isChecked('type',1,$this->types[0]['label'])." /><label for='type_1'>".strtoupper($this->types[0]['label'])."</label></td>
		<td><input type='checkbox' id='type_2' name='type[2]' value=\"".$this->types[1]['label']."\" ".$this->isChecked('type',2,$this->types[1]['label'])." /><label for='type_2'>".strtoupper($this->types[1]['label'])."</label></td>
		<td><input type='checkbox' id='type_3' name='type[3]' value=\"".$this->types[2]['label']."\" ".$this->isChecked('type',3,$this->types[2]['label'])." /><label for='type_3'>".strtoupper($this->types[2]['label'])."</label></td>
		</tr>";
		$out.="<tr class='sale' ";
		if($_GET['searchType']=='rent') {
			$out.=" style='display:none' ";
		}
		$out.="><td>
		<input type='checkbox' id='sale_1' name='sale[1]' value=\"<".$this->prices['sale'][0]."\" ".$this->isChecked('sale',1,"<".$this->prices['sale'][0])." /><label for='sale_1'>".l::t("- de")."<br/> ".$this->fPrice($this->prices['sale'][0])."</label></td>
		<td><input type='checkbox' id='sale_2' name='sale[2]' value=\"BETWEEN ".$this->prices['sale'][0]." AND ".$this->prices['sale'][1]."\"  ".$this->isChecked('sale',2,"BETWEEN ".$this->prices['sale'][0]." AND ".$this->prices['sale'][1])." /><label for='sale_2'>".l::t("de")." ".$this->fPrice($this->prices['sale'][0])."<br/> ".l::t("à")." ".$this->fPrice($this->prices['sale'][1])."</label></td>
		<td><input type='checkbox' id='sale_3' name='sale[3]' value=\">".$this->prices['sale'][1]."\" ".$this->isChecked('sale',3,">".$this->prices['sale'][1])." /><label for='sale_3'>".l::t("+ de")."<br/> ".$this->fPrice($this->prices['sale'][1])."</label></td>
		</tr>";
		$out.="<tr class='rent' ";
		if($_GET['searchType']=='sale') {
			$out.=" style='display:none' ";
		}
		$out.=">
		<td><input type='checkbox' id='rent_1' name='rent[1]' value=\"<".$this->prices['rent'][0]."\" ".$this->isChecked('rent',1,"<".$this->prices['rent'][0])." /><label for='rent_1'>".l::t("- de")."<br/> ".$this->fPrice($this->prices['rent'][0])."</label></td>
		<td><input type='checkbox' id='rent_2' name='rent[2]' value=\"BETWEEN ".$this->prices['rent'][0]." AND ".$this->prices['rent'][1]."\"  ".$this->isChecked('rent',2,"BETWEEN ".$this->prices['rent'][0]." AND ".$this->prices['rent'][1])." /><label for='rent_2'>".l::t("de")." ".$this->fPrice($this->prices['rent'][0])."<br/> ".l::t("à")." ".$this->fPrice($this->prices['rent'][1])."</label></td>
		<td><input type='checkbox' id='rent_3' name='rent[3]' value=\">".$this->prices['rent'][1]."\" ".$this->isChecked('rent',3,">".$this->prices['rent'][1])." /><label for='rent_3'>".l::t("+ de")."<br/> ".$this->fPrice($this->prices['rent'][1])."</label></td>
		</tr>";
		$out.="<tr id='areas'>
		<td colspan='2'><input type='checkbox' id='area_1' name='area[1]' value=\"".$this->areas[0]."\" ".$this->isChecked('area',1,$this->areas[0])." /><label for='area_1'>".$this->areas[0]."</label></td>
		<td><input type='checkbox' id='area_2' name='area[2]' value=\"".$this->areas[1]."\" ".$this->isChecked('area',2,$this->areas[1])." /><label for='area_2'>".$this->areas[1]."</label></td>
		</tr>";
		$out.="<tr id='cities'>
		<td colspan='2'><input type='checkbox' id='area_3' name='area[3]' value=\"".$this->areas[2]."\" ".$this->isChecked('area',3,$this->areas[2])." /><label for='area_3'>".$this->areas[2]."</label></td>
		<td><input type='checkbox' id='area_4' name='area[4]' value=\"".$this->areas[3]."\" ".$this->isChecked('area',4,$this->areas[3])." /><label for='area_4'>".$this->areas[3]."</label></td>
		</tr>";
		$out.="<tr><td colspan='2' class='ref'><input type='text' name='ref' id='ref' ";
		/*
		if(!empty($_GET['ref'])) {
			$out.=" value='030/".$_GET['ref']."'";
		}
		else {*/
			$out.=" value='".l::t("Ou entrez ici une référence")."' ";
		//}
		$out.=" rel='".l::t("Ou entrez ici une référence")."' onclick=\"initRefSearch(this)\" /></td><td class='submit'><a href='#' onclick=\"$('#searchStart').val(0);searchItem()\">".l::t("LANCER")." <img src='/medias/search_go.gif' /></a></td></tr>";
		$out.="</table>";
		$out.="</form>";
		
		return $out;
		
		
	}
	
	
	function fPrice($p){
		$p=number_format($p, 0, '', '.');
		
		return $p." &euro;";
	}
	
	
	function isChecked($var,$id,$val) {
		
		if($_GET[$var][$id]==$val ) {
			return ' checked' ;
		}
	}
	
	function isChecked2($var,$val) {
		
		if($_GET[$var]==$val ) {
			return ' checked ' ;
		}
	}
	
}




?>