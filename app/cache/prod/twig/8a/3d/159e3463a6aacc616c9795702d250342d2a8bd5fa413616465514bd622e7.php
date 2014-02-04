<?php

/* CaravaneOrganicBundle:Job:popover.html.twig */
class __TwigTemplate_8a3d159e3463a6aacc616c9795702d250342d2a8bd5fa413616465514bd622e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Account: <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "userid"), "name"), "html", null, true);
        echo "</b><br/>
Reference: <b>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "reference"), "html", null, true);
        echo "</b>
<hr/>
Dates:
\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "plannings"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "\t\t";
            if ((($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "planningtype") == "build") || ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "planningtype") == "unbuild"))) {
                // line 7
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "planningtype"), "html", null, true);
                echo " ";
                if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "userid")) {
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "userid"), "iso"), "html", null, true);
                    echo ")";
                }
                echo ":
\t\t\t<br><b>";
                // line 8
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "startdate"), "d/m/Y H:i"), "html", null, true);
                echo "</b> - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "enddate"), "d/m/Y H:i"), "html", null, true);
                echo "  </li>
\t\t";
            }
            // line 10
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<hr/>
Stock:
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "\t\t";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid")) {
                // line 15
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "reference"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "productCategory"), "name"), "html", null, true);
                echo ")</li>
\t\t";
            }
            // line 17
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job:popover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 126,  153 => 125,  129 => 116,  37 => 7,  70 => 29,  53 => 18,  65 => 13,  139 => 47,  113 => 57,  110 => 43,  104 => 54,  58 => 25,  34 => 6,  190 => 41,  174 => 39,  150 => 52,  134 => 34,  126 => 33,  120 => 30,  84 => 34,  81 => 40,  23 => 3,  118 => 30,  96 => 34,  77 => 48,  52 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 11,  38 => 8,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 46,  131 => 52,  119 => 42,  108 => 55,  102 => 27,  71 => 49,  67 => 15,  63 => 15,  59 => 18,  47 => 22,  28 => 3,  29 => 3,  35 => 5,  26 => 12,  43 => 12,  196 => 90,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 63,  142 => 35,  138 => 54,  136 => 56,  123 => 47,  121 => 62,  117 => 44,  115 => 29,  105 => 19,  91 => 51,  69 => 14,  62 => 23,  49 => 19,  101 => 32,  94 => 52,  89 => 31,  85 => 41,  79 => 18,  75 => 23,  68 => 14,  56 => 24,  50 => 10,  87 => 23,  72 => 15,  66 => 5,  55 => 10,  41 => 15,  31 => 4,  24 => 2,  25 => 3,  21 => 2,  19 => 1,  98 => 53,  93 => 40,  88 => 50,  78 => 34,  46 => 14,  44 => 13,  40 => 20,  32 => 4,  27 => 7,  22 => 2,  209 => 59,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 56,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 118,  141 => 48,  133 => 55,  130 => 45,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 16,  95 => 28,  92 => 32,  86 => 39,  82 => 22,  80 => 17,  73 => 35,  64 => 18,  60 => 22,  57 => 11,  54 => 21,  51 => 23,  48 => 8,  45 => 11,  42 => 23,  39 => 10,  36 => 16,  33 => 4,  30 => 5,);
    }
}
