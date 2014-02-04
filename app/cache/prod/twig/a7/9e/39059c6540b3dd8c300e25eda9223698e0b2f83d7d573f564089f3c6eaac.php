<?php

/* ::base.html.twig */
class __TwigTemplate_a79e39059c6540b3dd8c300e25eda9223698e0b2f83d7d573f564089f3c6eaac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'mainmenu' => array($this, 'block_mainmenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"fuelux\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->env->loadTemplate("::stylesheets.html.twig")->display($context);
        // line 7
        echo "         ";
        $this->env->loadTemplate("::javascripts.head.html.twig")->display($context);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('mainmenu', $context, $blocks);
        // line 52
        echo "





          <div class=\"container-fluid\">
";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "      </div>
       ";
        // line 61
        $this->env->loadTemplate("::javascripts.body.html.twig")->display($context);
        // line 62
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Organic";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "        <div class=\"row-fluid\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/caravaneorganic/images/logo.png"), "html", null, true);
        echo "\">
            <div class=\"pull-right\" style=\"margin-right:10px\">
              ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "Logged as <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "email"), "html", null, true);
            echo "</b> | <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
            echo "'>my profile</a> | <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "'>Logout</a> ";
        }
        // line 16
        echo "            </div>
        </div>
        ";
    }

    // line 19
    public function block_mainmenu($context, array $blocks = array())
    {
        // line 20
        echo "        <div class=\"navbar navbar-inverse\" style=\"position: static;\">

              <div class=\"navbar-inner\">
                <div class=\"container\">
                  <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".navbar-inverse-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                  </a>

                  <a class=\"brand\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CaravaneOrganicBundle_homepage"), "html", null, true);
        echo "\">Organic</a>
                  <div class=\"nav-collapse collapse navbar-inverse-collapse\">
                    <ul class=\"nav\">
                      <li ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method") == "CaravaneOrganicBundle_homepage")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard"), "html", null, true);
        echo "\">Dashboard</a></li>
                      <li ";
        // line 34
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), "client")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client"), "html", null, true);
        echo "\">Clients</a></li>
                      <li ";
        // line 35
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), "offre")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre"), "html", null, true);
        echo "\">Offers</a></li>
                      <li ";
        // line 36
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), "job")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job"), "html", null, true);
        echo "\">Jobs</a></li>
                      <li ";
        // line 37
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), "invoice")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice"), "html", null, true);
        echo "\">Invoices</a></li>
                      <li ";
        // line 38
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), "planning")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planning"), "html", null, true);
        echo "\">Planning</a></li>
                      <li ";
        // line 39
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), "tent")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent"), "html", null, true);
        echo "\">Stock</a></li>
                      <li ";
        // line 40
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), "transport")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transport"), "html", null, true);
        echo "\">Transport</a></li>
                      <li ";
        // line 41
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), "user")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
        echo "\">Users</a></li>
                    </ul>
                    <form class=\"navbar-search pull-right\" action=\"\">
                      <input type=\"text\" class=\"search-query span2\" id=\"searchField\"  placeholder=\"Search\">
                    </form>

                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
            ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 41,  174 => 39,  150 => 36,  134 => 34,  126 => 33,  120 => 30,  84 => 13,  81 => 12,  23 => 1,  118 => 30,  96 => 26,  77 => 21,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 60,  38 => 8,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 20,  102 => 27,  71 => 19,  67 => 15,  63 => 15,  59 => 59,  47 => 19,  28 => 3,  29 => 5,  35 => 7,  26 => 6,  43 => 6,  196 => 90,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 63,  142 => 35,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 29,  105 => 19,  91 => 27,  69 => 18,  62 => 23,  49 => 19,  101 => 32,  94 => 28,  89 => 15,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 52,  87 => 23,  72 => 5,  66 => 62,  55 => 15,  41 => 5,  31 => 3,  24 => 2,  25 => 3,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 11,  46 => 7,  44 => 6,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 59,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 16,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 20,  64 => 61,  60 => 13,  57 => 11,  54 => 13,  51 => 14,  48 => 13,  45 => 11,  42 => 7,  39 => 9,  36 => 4,  33 => 6,  30 => 7,);
    }
}
