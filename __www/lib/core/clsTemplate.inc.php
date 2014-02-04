<?php
    class template {
    
		function __construct() {
			Twig_Autoloader::register();
		}	
		
		public function parse($tpl,$templateVars=array()) {
			
			$templateVars=utils::array_map_recursive('stripslashes',$templateVars,'');
			//htmlentities($lastName, ENT_QUOTES)
			//$templateVars=utils::array_map_recursive('htmlentities',$templateVars,'ENT_QUOTES');
			
			$loader = new Twig_Loader_Filesystem(__theme__);
			/*if(__debug__) {
					$cache=false;
			}
			else {
				$cache=	__root__.'cache';
			}
			*/
			$cache=	__root__.'cache';
			$twig = new Twig_Environment($loader, array(
				'autoescape'=>false,
				// 'cache' => $cache,
				'debug'=>true
			));
			$twig->addExtension(new Twig_Extension_Text());
			$template = $twig->loadTemplate($tpl);
			$out=$template->render($templateVars);
			return $out;
		}
		
	}
?>