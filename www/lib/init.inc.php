<?php

session_start();

$_SESSION['language']='en';


define(__core__,__lib__."core/");
define(__elem__,__lib__."elements/");
define(__twig__,__lib__."core/Twig/lib/Twig/");
define(__swift__,__lib__."core/Swift/lib/");




require_once __core__."clsTemplate.inc.php";
require_once __core__."clsDb.inc.php";
require_once __core__."site/clsSite.inc.php";
require_once __twig__."Autoloader.php";
require_once __core__."page/clsPage.inc.php";
require_once __core__."clsHeaders.inc.php";
require_once __core__."element/clsElement.inc.php";
require_once __core__."utils/clsUtils.inc.php";
require_once __core__."clsLang.inc.php";
require_once __core__."utils/clsImageManip.inc.php";




require_once(__root__."lib/elements/client/clsClient.inc.php");
require_once(__root__."lib/elements/shared/clsShared.inc.php");
require_once(__root__."lib/elements/user/clsUser.inc.php");
require_once(__root__."lib/elements/planning/clsPlanning.inc.php");
require_once(__root__."lib/elements/tent/clsTent.inc.php");
require_once(__root__."lib/elements/product/clsProduct.inc.php");
require_once(__root__."lib/elements/slice/clsSlice.inc.php");
require_once(__root__."lib/elements/job/clsJob.inc.php");
require_once(__root__."lib/elements/offre/clsOffre.inc.php");
require_once(__root__."lib/elements/invoice/clsInvoice.inc.php");


if($_SESSION['user']['admin']==1) {
	$_SESSION['admin']=true;	
}


if(!empty($_GET['logout'])) {
	unset($_SESSION['user']);
}



Twig_Autoloader::register();
bootstrap_Autoloader::register();


class bootstrap_Autoloader {
	static public function register() {
        ini_set('unserialize_callback_func', 'spl_autoload_call');
        spl_autoload_register(array(new self, 'autoload'));
    }
	
    static public function autoload($class) {
    	
    	$t=explode("_",$class);
		
        if (file_exists(__elements__.$t[0]."/".$t[1]."/".$t[1].".php")) {
            require __elements__.$t[0]."/".$t[1]."/".$t[1].".php";
        }
    }
}



$site=new site;
$site->language='en';
$site->setLanguage();



//ajax 
if(!empty($_GET['jfunc'])) {
	foreach($_GET as $k=>$v) {
		$_POST[$k]=$v;
	}
	
}
if(!empty($_POST['jfunc'])) {
	
	
	$c=explode(".",$_POST['jfunc']);
	if(file_exists(__elem__.$c[0]."/cls".ucfirst($c[0]).".inc.php")) {
		require_once(__elem__.$c[0]."/cls".ucfirst($c[0]).".inc.php");
		$el=new $c[0];
		foreach($_POST as $k=>$v) {
			$el->$k=$v;
		}
		echo call_user_func(array($el,$c[1]));
	}
	die();
}

?>