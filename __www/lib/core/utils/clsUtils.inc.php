<?php

class utils {



	function closetags($html) {
		
		$html=preg_replace("/<br>/","<br/>",$html);
		$html=preg_replace("/<BR>/","<br/>",$html);
		return trim($html);
		
	}

	function rewriteUrl($url) {
		$url=strtr($url,"_\²éè()!$'?: ,&+-/ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ","--2ee-------------SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy");
		return $url;
	}
	
	
	
	function getURL($string='',$page='') {
	//return "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]."?";
		if($page=='') {
			$page=$_SERVER['PHP_SELF'];
		}
		
		$vars=array();
		
		foreach($_GET as $key=>$value) {
			if($value!='') {
				$vars[$key]=$value;
			}
		}
		foreach($_POST as $key=>$value) {
			//$vars[$key]=$value;
		}
		/*
		$s=explode("&",$_SERVER['QUERY_STRING']);
		for($i=0;$i<count($s);$i++) {
			$t=explode("=",$s[$i]);
			$vars[$t[0]]=$t[1];
		}*/
		$s=explode("&",$string);
		for($i=0;$i<count($s);$i++) {
			$t=explode("=",$s[$i]);
			//if($t[1]!='') {
			$vars[$t[0]]=$t[1];
			//}
		}
		
		$string=array();
		foreach($vars as $key=>$value) {
			//if($value!='') {
				$string[]=$key."=".$value;
			//}
		}
		//$string=preg_replace("/&=/","",$string);
		//echo $string;
		return $page."?".implode("&",$string);
	}
	
	
	function setDate($date) {
		/*$t=explode(" ",$date);
		$tDate=explode("-",$t[0]);
		$date=$tDate[2]."/".$tDate[1]."/".$tDate[0];
		*/
		$date=date("d/m/Y H:i:s",strtotime($date));
		return $date;
	}
	
	
	
	function remove_accent($str){
	  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
	  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
	  return str_replace($a, $b, $str);
	}

	function post_slug($str) {
	  return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),array('', '-', ''), utils::remove_accent($str)));
	}
	
	function parseFilename($file) {
		$f=explode("/",$file);
		$fi=explode(".",$f[count($f)-1]);
		
		$folders=array_pop($f);
		
		
		$path=implode("/",$f);
		$filename=$fi[0];
		$ext=$fi[1];
		return array($filename,$ext,$path);
		
	}
	
	function formatBytes($b,$p = null) {
		$units = array("B","kB","MB","GB","TB","PB","EB","ZB","YB");
		$c=0;
		if(!$p && $p !== 0) {
			foreach($units as $k => $u) {
				if(($b / pow(1024,$k)) >= 1) {
					$r["bytes"] = $b / pow(1024,$k);
					$r["units"] = $u;
					$c++;
				}
			}
			return number_format($r["bytes"],2) . " " . $r["units"];
		} else {
			return number_format($b / pow(1024,$p)) . " " . $units[$p];
		}
	}
	
	
	function file_list($d,$x=''){
		if(file_exists($d) && is_dir($d)) {
			$l=array();
	       foreach(array_diff(scandir($d),array('.','..')) as $f)if(is_file($d.'/'.$f)&&(($x)?ereg($x.'$',$f):1))$l[]=$f; 
	       return $l; 
		}
		else {
			return array();
		}
	} 

	
	function dir_list($d){ 
		$l=array();
	       foreach(array_diff(scandir($d),array('.','..')) as $f)if(is_dir($d.'/'.$f))$l[]=$f; 
	       return $l; 
	}
	
	
	
	function str_makerand ($minlength, $maxlength, $useupper, $usespecial, $usenumbers) {
	/* 
	Author: Peter Mugane Kionga-Kamau
	http://www.pmkmedia.com
	
	Description: string str_makerand(int $minlength, int $maxlength, bool $useupper, bool $usespecial, bool $usenumbers) 
	returns a randomly generated string of length between $minlength and $maxlength inclusively.
	
	Notes: 
	- If $useupper is true uppercase characters will be used; if false they will be excluded.
	- If $usespecial is true special characters will be used; if false they will be excluded.
	- If $usenumbers is true numerical characters will be used; if false they will be excluded.
	- If $minlength is equal to $maxlength a string of length $maxlength will be returned.
	- Not all special characters are included since they could cause parse errors with queries. 
	
	Modify at will.
	*/
	$charset = "abcdefghijklmnopqrstuvwxyz";
	if ($useupper) $charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	if ($usenumbers) $charset .= "0123456789";
	if ($usespecial) $charset .= "~@#$%^*()_+-={}|]["; // Note: using all special characters this reads: "~!@#$%^&*()_+`-={}|\\]?[\":;'><,./";
	if ($minlength > $maxlength) $length = mt_rand ($maxlength, $minlength);
	else $length = mt_rand ($minlength, $maxlength);
	for ($i=0; $i<$length; $i++) $key .= $charset[(mt_rand(0,(strlen($charset)-1)))];
	return $key;
	}
	
	function dateFormatFromDB($date) {
		$t=explode(' ',$date);
		$tt=explode("-",$t[0]);
		return $tt[2]."/".$tt[1]."/".$tt[0]." ".$t[1];
	}
	
	function dateFormatToDB($date) {
		$t=explode(' ',$date);
		$tt=explode("/",$t[0]);
		return $tt[2]."-".$tt[1]."-".$tt[0]." ".$t[1];
	}
	
	
	function file2array($f) {
		
		$a=array();
		$handle = @fopen($f, "r");
		if ($handle) {
		    while (($buffer = fgets($handle, 4096)) !== false) {
		        
				$t=explode("\t",$buffer);
				$a[$t[0]]=$t[1];
		    }
		    if (!feof($handle)) {
		        echo "Erreur: fgets() a échoué\n";
		    }
		    fclose($handle);
		}
		
		return $a;
	}
	
	
	function filleTableFromTable($fromtable,$toTable,$fromKey,$fromKeyValue) {
		
		$fields=array();
		$db=new DB;
		$db->query="SHOW COLUMNS FROM ".$toTable;
		$db->setQuery();
		foreach($db->output as $row) {
			$fields[]=$row['Field'];
		}
		
		$db=new DB;
		$db->query="SELECT * FROM ".$fromTable." WHERE ".$fromKey."='".$fromValue."'";
		$db->setQuery();
		//echo $db->query;
		$this->offre=$db->output[0];
		
		$field=array();
		$value=array();
		foreach($fields as $f) {
			if($this->offre[$f]!='') {
				$field[]=$f;
				$value[]="\"".$this->offre[$f]."\"";
			}
		}
		
		$db=new DB;
		$db->query="INSERT INTO ".$toTable."' (".implode(',',$field).") VALUES (".implode(',',$value).")";
		$db->SetQuery();
		
		return mysql_insert_id;
	}
	
	
	function array_map_recursive($callback, $array,$options='') {
		  $b = Array();
		  foreach ($array as $key => $value) {
		  	if($options!='') {
		  		switch($options) {
					default:
						 $b[$key] = is_array($value) ? self::array_map_recursive($callback, $value,$options) : call_user_func($callback, $value);
					break;	
						
					case 'ENT_QUOTES':
						 $b[$key] = is_array($value) ? self::array_map_recursive($callback, $value,'ENT_QUOTES') : call_user_func($callback, $value,ENT_QUOTES);
					break;
		  		}
		  		
		  	}
			else {
				$b[$key] = is_array($value) ? self::array_map_recursive($callback, $value) : call_user_func($callback, $value);
			}
		  }
		  return $b;
		} 
	
	
	
	function generatePassword ($length = 8)
  {

    // start with a blank password
    $password = "";

    // define possible characters - any character in this string can be
    // picked for use in the password, so if you want to put vowels back in
    // or add special characters such as exclamation marks, this is where
    // you should do it
    $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";

    // we refer to the length of $possible a few times, so let's grab it now
    $maxlength = strlen($possible);
  
    // check for length overflow and truncate if necessary
    if ($length > $maxlength) {
      $length = $maxlength;
    }
	
    // set up a counter for how many characters are in the password so far
    $i = 0; 
    
    // add random characters to $password until $length is reached
    while ($i < $length) { 

      // pick a random character from the possible ones
      $char = substr($possible, mt_rand(0, $maxlength-1), 1);
        
      // have we already used this character in $password?
      if (!strstr($password, $char)) { 
        // no, so it's OK to add it onto the end of whatever we've already got...
        $password .= $char;
        // ... and increase the counter by one
        $i++;
      }

    }

    // done!
    return $password;

  }

	function deleteDocument($type,$id,$path) {
		if(unlink(__root__."docs/".$type."s/".$id."/".$path)) {
			return 'ok';
		}
		else {
			return "error";
		}
		
	}
}

?>