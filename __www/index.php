<?php


include('config.inc.php');
include(__lib__."init.inc.php");
unset($_SESSION['logs']);


//$template=new template('.');


$page=&new page;
$page->addOns=array();




//$_SESSION['user']['admin']=1;

$page->init();




//echo $_GET['logout'];
if($_GET['logout']!='') {
	unset($_SESSION['user']);
}
/*
$template->set_file("template",__lib__."templates/".$page->templateFolder."/template.tpl");

foreach($areas as $area) {
	$template->set_var($area, $page->getElements($area));
}


$template->set_var('webRoot',__web__);
$template->set_var('styles', $styles);
$template->set_var('headerScripts', $headerScripts);
$template->set_var('addOns', implode("",$addOns));
$template->set_var('title', $page->title);
$template->set_var("keywords",$page->keywords);
$template->set_var("description",$page->description);
$template->set_var("language",$_SESSION['language']);
$template->set_var("olanguage",$olanguage);

$template->parse("parse", "template");
$template->p("parse");
*/
/*
echo "<pre>";
print_r($_GET);
print_r($_POST);
print_r($_SESSION);
echo "</pre>";
 * */
/*
	echo "<pre>";
	print_r($page);
	echo "</pre>";
	*/
?>