<?php

require_once('config.inc.php');
$db=new DB;
$Connect = mysql_connect(__DBhost__, __DBuser__, __DBpass__) or die("Can not connect");
@mysql_select_db(__DBName__) or die ("Can not access the database");

mysql_query("SET NAMES 'utf8'");

class DB {
	
	var $webRoot=__webRoot__;
	var $datasFolder=__datasFolder__;
	var $absoluteRoot=__absoluteRoot__;
	var $DBuser=__DBuser__;
    var $DBpass=__DBpass__;
    var $DBhost=__DBhost__;
    var $DBName=__DBName__;
    var $DBprefix=__DBprefix__;
	
	
	var $query;
	var $result;
	var $output;
    var $connexion;
	var $resulType;
	
	
	//old version
	var $q;
	
	function parseQuery() {
		if(preg_match("/#__/",$this->query)) {
			$this->query=preg_replace('/#__/',$this->DBprefix.'_',$this->query);
		}
	}
	
	function setQuery($resultType='',$field='') {
		
		if($resultType!='') {
			$this->resultType=$resultType;	
		}
		else {
			$this->resultType="array";	
		}
		if($field!='') {
			$this->resultField=$field;	
		}
		$this->parseQuery();
		//echo $this->query;
		$_SESSION['logs']['sql'][]=$this->query;
		if($this->result=mysql_query($this->query)) {
		//echo 'true';
			return $this->sendResult();
		}
	}
	
	
	function sendResult() {
		//$out=array();
	//	echo $this->resultType." FOR ".$this->query."<br/>";
		switch($this->resultType) {
			
			case 'xml':
				$out="<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
				$out.="<datas>";
				//if(mysql_num_rows($this->result)>0) {
					while($row=mysql_fetch_assoc($this->result)) {
						$out.="<data>";
							foreach($row as $field=>$value) {
								$out.="<".$field.">".$value."</".$field.">";
							}
						$out.="</data>";
					}
				//}
				//$out.="<data><debug>".$this->query."</debug></data>";
				$out.="</datas>";
				
			break;
			
			default:
			case 'array':
			//$_SESSION['isarray']='1';
				$out=array();
				
					while($row=@mysql_fetch_assoc($this->result)) {
						$out[]=$row;
					}
				
				
			break;
			
			case 'first':
				$row=@mysql_fetch_assoc($this->result);
			
				if($this->resultField!='') {
					$out=$row[$this->resultField];
				//echo "----".$out. "(".$this->query.")";
				}
				else {
					$out=$row;
				}
				
				//echo $out;
			break;
			
			case 'object':
				$out=@mysql_fetch_object($this->result);

			break;
			
			case 'objectarray':
				$out=array();
				while($row=@mysql_fetch_object($this->result)) {
					$out[]=$row;
				}
			break;
			
			case 'json':
				$json=array();
				while($row=mysql_fetch_assoc($this->result)) {
						$json[]=$row;
				}
				$out=json_encode($json);
			break;
			
			case 'none':
				$out='';
			break;
		
		}
		if($this->resultType=='first') {
				
			//echo "ttt".$out."ttt";
		}
		$this->output=$out;
		return $out;
	}
	
	
	
	function autoFill($table,$postValues,$escapeFields=array()) {
		//$db=new db;
		$this->query="SHOW COLUMNS FROM ".$table;
		//$db->resultType='array';
		$tColumns=$this->setQuery();
	
		$columns=array();
		foreach($tColumns as $k=>$fields) {
			$columns[]=$fields['Field'];
		}
		
		$inserts=array();
		$values=array();
		$updates=array();
		foreach($postValues as $k=>$field) {
			if(in_array($k,$columns)) {
				$inserts[]=$k;
				if($field=="NOW()") {
					$values[]="`".$field."`";
				}
				else {
					$values[]="\"".$field."\"";
				}
				if(!in_array($k,$escapeFields)) {
					$updates[]=$k."=\"".$field."\" ";
				}
			
			}
		}
		$this->query="insert into ".$table." (".implode(",",$inserts).") VALUES (".implode(",",$values).") ON DUPLICATE KEY UPDATE ".implode(",",$updates);
		$this->setQuery();
		return mysql_insert_id();
		
	}



	function setUpdate($array) {
		$sql=array();
		foreach($array as $field=>$value) {
			if($value=='null') {
				$sql[]=" `".$field."`=null ";
			}
			else {
			$sql[]=" `".$field."`=\"".mysql_real_escape_string($value)."\" ";
			}
		}
		return implode(",",$sql);
	}
	
	function setInsert($array) {
		$fields=array();
		$values=array();
		foreach($array as $field=>$value) {
			$fields[]="`".$field."`";
			$values[]="\"".mysql_real_escape_string($value)."\" ";
		}
		return " (".implode(',',$fields).") VALUES (".implode(',',$values).")";
	}

}



?>