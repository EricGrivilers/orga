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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "email"), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "CaravaneOrganicBundle_homepage")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard"), "html", null, true);
        echo "\">Dashboard</a></li>
                      <li ";
        // line 34
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "client")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client"), "html", null, true);
        echo "\">Clients</a></li>
                      <li ";
        // line 35
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "offre")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre"), "html", null, true);
        echo "\">Offers</a></li>
                      <li ";
        // line 36
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "job")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job"), "html", null, true);
        echo "\">Jobs</a></li>
                      <li ";
        // line 37
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "invoice")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice"), "html", null, true);
        echo "\">Invoices</a></li>
                      <li ";
        // line 38
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "planning")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planning"), "html", null, true);
        echo "\">Planning</a></li>
                      <li ";
        // line 39
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "tent")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent"), "html", null, true);
        echo "\">Stock</a></li>
                      <li ";
        // line 40
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "transport")) {
            echo "  class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transport"), "html", null, true);
        echo "\">Transport</a></li>
                      <li ";
        // line 41
        if ($this->env->getExtension('caravane_extension')->menuFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "user")) {
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
        return array (  209 => 59,  190 => 41,  182 => 40,  174 => 39,  166 => 38,  158 => 37,  150 => 36,  142 => 35,  134 => 34,  126 => 33,  120 => 30,  105 => 19,  99 => 16,  89 => 15,  84 => 13,  81 => 12,  78 => 11,  72 => 5,  66 => 62,  64 => 61,  61 => 60,  50 => 52,  47 => 19,  45 => 11,  38 => 8,  35 => 7,  29 => 5,  23 => 1,  118 => 30,  115 => 29,  108 => 20,  106 => 29,  102 => 27,  96 => 26,  87 => 23,  82 => 22,  77 => 21,  69 => 18,  63 => 15,  59 => 59,  54 => 13,  52 => 12,  44 => 6,  41 => 5,  36 => 4,  73 => 20,  67 => 20,  60 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  33 => 6,  31 => 3,  28 => 5,);
    }
}
