<?php

/* template2.tpl */
class __TwigTemplate_ad9b6cfd327436a7d0e71608a37f8976 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<title>";
        // line 5
        echo (isset($context['title']) ? $context['title'] : null);
        echo "</title>
<meta name=\"keywords\" content=\"";
        // line 6
        echo (isset($context['keywords']) ? $context['keywords'] : null);
        echo "\" />
<meta name=\"description\" content=\"";
        // line 7
        echo (isset($context['description']) ? $context['description'] : null);
        echo "\" />
<script type='text/javascript'>var web=\"";
        // line 8
        echo (isset($context['webRoot']) ? $context['webRoot'] : null);
        echo "\";</script>
";
        // line 9
        echo (isset($context['styles']) ? $context['styles'] : null);
        echo "
";
        // line 10
        echo (isset($context['scripts']) ? $context['scripts'] : null);
        echo "
</head>
<body ";
        // line 12
        echo (isset($context['onLoadScripts']) ? $context['onLoadScripts'] : null);
        echo ">
";
        // line 13
        echo (isset($context['addOns']) ? $context['addOns'] : null);
        echo "
<div id=\"container\" class=\"container\">
  <div class='span-6'><a href=\"index.php\"><img src=\"";
        // line 15
        echo (isset($context['web']) ? $context['web'] : null);
        echo "themes/default/images/logo.png\" /></a></div>
  <div class='span-17 last'>";
        // line 16
        echo (isset($context['header']) ? $context['header'] : null);
        echo "
    ";
        // line 17
        echo (isset($context['user']) ? $context['user'] : null);
        echo "  <a href='/index.php?logout=true'>logout</a></div>
  <div class=\"span-24 last\" style='text-align:right'>
 
  ";
        // line 20
        echo (isset($context['menu']) ? $context['menu'] : null);
        echo "
  </div>
   <div class=\"span-24\" id=\"contentWrapper\">
   
   
   ";
        // line 25
        echo (isset($context['content']) ? $context['content'] : null);
        echo "
   
    
    <!-- end #mainContent --> 
  </div>
  <div id=\"footer\" class=\"span-24\"> ";
        // line 30
        echo (isset($context['footer']) ? $context['footer'] : null);
        echo "
    &copy; ORGANIC CONCEPT - <a href='mailto:didier@organic-concept.com'>Contacter l'administrateur</a> - <a href='mailto:info@caravanemedia.com'>Signaler un problème technique</a> - V.2.0.1
    <!-- end #footer --> 
  </div>
  <!-- end #container --> 
</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "template2.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
