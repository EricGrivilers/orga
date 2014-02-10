<?php

/* CaravaneOrganicBundle:Job:pdf.html.twig */
class __TwigTemplate_142a5ca29a29a9aacc7f340467e30aeb15023b40c45f844f8404f40197c6bd6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CaravaneOrganicBundle:Default:pdf.html.twig");

        $this->blocks = array(
            'reference' => array($this, 'block_reference'),
            'documentType' => array($this, 'block_documentType'),
            'address' => array($this, 'block_address'),
            'conditions' => array($this, 'block_conditions'),
            'page1_body' => array($this, 'block_page1_body'),
            'page2' => array($this, 'block_page2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaravaneOrganicBundle:Default:pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_reference($context, array $blocks = array())
    {
        // line 4
        echo " 
  ";
        // line 5
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid")) {
            // line 6
            echo "\t  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "firstname"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "lastname"), "html", null, true);
            echo "<br/>
\t  ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "email"), "html", null, true);
            echo "<br/>
\t  ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "phone"), "html", null, true);
            echo "<br/>
\t  ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "mobile"), "html", null, true);
            echo "
\t";
        }
    }

    // line 13
    public function block_documentType($context, array $blocks = array())
    {
        // line 14
        echo "\t ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Job"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "<br/>
  <br/>
  <br/>
";
    }

    // line 19
    public function block_address($context, array $blocks = array())
    {
        // line 20
        echo "
";
    }

    // line 23
    public function block_conditions($context, array $blocks = array())
    {
        // line 24
        echo "\t<tr>
\t\t<td class=\"center 1col\" >
\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_More conditions"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
";
    }

    // line 32
    public function block_page1_body($context, array $blocks = array())
    {
        // line 33
        echo "
<table class=\"grey main\">
\t<tr>
\t\t<td class=\"grey 1col\" style=\"width:185mm;text-align:center\">
\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LIEU ET DATES"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
</table>
<br/>

<p><b><u>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Client"), "html", null, true);
        echo "</u></b>
<br/>
<br/>
";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "clientType") == "cie")) {
            // line 47
            echo "\t<b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "name"), "html", null, true);
            echo "</b><br/>
";
        }
        // line 49
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "clientTitle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "lastname"), "html", null, true);
        echo "
\t<br/>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "address"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "number"), "html", null, true);
        echo "
\t<br/>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "email"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "phone"), "html", null, true);
        echo "  - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "mobile"), "html", null, true);
        echo " 
</p>


<p><b><u>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lieu"), "html", null, true);
        echo "</u></b>
\t<br/>
\t<br/>
\t";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "number"), "html", null, true);
        echo "
\t<br/>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "zip"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "city"), "html", null, true);
        echo "
\t<br/>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country"), "html", null, true);
        echo "

</p>

<p>
<b><u>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Dates"), "html", null, true);
        echo "</u></b>
<ul>
";
        // line 67
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plannings")) > 0)) {
            // line 68
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montage"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plannings"), 1, array(), "array"), "startDate"), "d/m/Y H:i:s"), "html", null, true);
            echo "</li>
\t<li>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Jour(s) de votre événement"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("du"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plannings"), 2, array(), "array"), "startDate"), "d/m/Y H:i:s"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("au"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plannings"), 2, array(), "array"), "endDate"), "d/m/Y H:i:s"), "html", null, true);
            echo "</li>
\t<li>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Démontage"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plannings"), 3, array(), "array"), "startDate"), "d/m/Y H:i:s"), "html", null, true);
            echo "</li>


";
        } else {
            // line 74
            echo "\t<li>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eventDate"), "d/m/Y H:i:s"), "html", null, true);
            echo "</li>
";
        }
        // line 76
        echo "</ul>
</p>
<br/>
<table class=\"grey main\">
\t<tr>
\t\t<td class=\"grey 1col\" style=\"width:185mm;text-align:center\">
\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("MATERIEL"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
</table>
<br/>
<table class=\"main\">
\t<thead>
\t\t<tr>
\t\t\t<th style=\"width:15mm\"></th>
\t\t\t<th style=\"width:25mm\">Ref.</th>
\t\t\t<th style=\"width:80mm\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nom"), "html", null, true);
        echo "</th>
\t\t\t<th style=\"width:25mm\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Couleur"), "html", null, true);
        echo "</th>
\t\t\t<th style=\"width:20mm\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("m2"), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 99
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid")) {
                // line 100
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td style=\"border-bottom:1px solid #ededed\">";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "productCategory"), "name"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td style=\"border-bottom:1px solid #ededed\" >";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "reference"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td style=\"border-bottom:1px solid #ededed\" >";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "name"), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 104
                if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "datasAsObject")) {
                    // line 105
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "datasAsObject"), "other")) {
                        // line 106
                        echo "\t\t\t\t\t\t\t<br/>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "datasAsObject"), "other"), "html", null, true);
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "
\t\t\t\t\t\t";
                    // line 109
                    if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "datasAsObject"), "plancher")) {
                        echo "<br/><u>Plancher:</u> ";
                        if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "datasAsObject"), "surfaceplancher")) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "datasAsObject"), "surfaceplancher"), "html", null, true);
                        } else {
                            echo " Yes ";
                        }
                        echo " ";
                    }
                    // line 110
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "datasAsObject"), "sol")) {
                        echo "<br/><u>Sol:</u>  Yes";
                    }
                    // line 111
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "datasAsObject"), "canalisation")) {
                        echo "<br/><u>Canalisation:</u>  Yes ";
                    }
                    // line 112
                    echo "
\t\t\t\t\t";
                }
                // line 114
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"border-bottom:1px solid #ededed\" >";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "color"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td style=\"border-bottom:1px solid #ededed\" >";
                // line 116
                if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "m2") > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "m2"), "html", null, true);
                }
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 119
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t</tbody>
</table>




";
    }

    // line 128
    public function block_page2($context, array $blocks = array())
    {
        // line 129
        echo "\t";
        $context["type"] = "in";
        // line 130
        echo "\t";
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:bon.html.twig")->display($context);
        // line 131
        echo "
\t";
        // line 132
        $context["type"] = "out";
        // line 133
        echo "\t";
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:bon.html.twig")->display($context);
        // line 134
        echo "

";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 134,  366 => 133,  364 => 132,  361 => 131,  358 => 130,  352 => 128,  342 => 120,  336 => 119,  328 => 116,  324 => 115,  321 => 114,  317 => 112,  307 => 110,  297 => 109,  288 => 106,  275 => 102,  271 => 101,  261 => 98,  233 => 82,  225 => 76,  210 => 70,  198 => 69,  191 => 68,  170 => 59,  197 => 84,  184 => 65,  161 => 60,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 113,  256 => 112,  250 => 93,  231 => 99,  226 => 97,  180 => 69,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 29,  323 => 177,  319 => 176,  311 => 171,  303 => 166,  293 => 159,  286 => 155,  279 => 103,  272 => 147,  265 => 99,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 87,  195 => 103,  188 => 68,  181 => 95,  167 => 61,  160 => 83,  146 => 75,  97 => 45,  90 => 43,  83 => 35,  76 => 30,  155 => 126,  153 => 56,  129 => 56,  37 => 7,  70 => 28,  53 => 23,  65 => 25,  139 => 56,  113 => 57,  110 => 43,  104 => 39,  58 => 23,  34 => 14,  190 => 73,  174 => 91,  150 => 52,  134 => 50,  126 => 47,  120 => 30,  84 => 33,  81 => 35,  23 => 3,  118 => 43,  96 => 36,  77 => 19,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 111,  309 => 97,  305 => 95,  298 => 91,  294 => 108,  285 => 105,  283 => 104,  278 => 86,  268 => 100,  264 => 84,  258 => 139,  252 => 80,  247 => 78,  241 => 77,  229 => 98,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 53,  132 => 49,  128 => 49,  111 => 50,  107 => 36,  61 => 11,  38 => 16,  273 => 119,  269 => 118,  254 => 94,  246 => 92,  243 => 88,  240 => 86,  238 => 101,  235 => 74,  230 => 123,  227 => 81,  224 => 71,  221 => 96,  219 => 74,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 59,  143 => 56,  135 => 49,  131 => 52,  119 => 46,  108 => 55,  102 => 39,  71 => 49,  67 => 15,  63 => 13,  59 => 18,  47 => 22,  28 => 5,  29 => 3,  35 => 5,  26 => 12,  43 => 22,  196 => 74,  183 => 82,  171 => 62,  166 => 38,  163 => 62,  158 => 55,  156 => 58,  151 => 56,  142 => 35,  138 => 54,  136 => 56,  123 => 45,  121 => 47,  117 => 44,  115 => 45,  105 => 47,  91 => 42,  69 => 30,  62 => 28,  49 => 22,  101 => 46,  94 => 43,  89 => 36,  85 => 23,  79 => 31,  75 => 32,  68 => 18,  56 => 9,  50 => 10,  87 => 23,  72 => 15,  66 => 14,  55 => 22,  41 => 6,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 33,  46 => 23,  44 => 9,  40 => 17,  32 => 6,  27 => 5,  22 => 2,  209 => 111,  203 => 78,  199 => 67,  193 => 70,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 64,  164 => 58,  162 => 59,  154 => 58,  149 => 51,  147 => 51,  144 => 118,  141 => 50,  133 => 53,  130 => 49,  125 => 55,  122 => 47,  116 => 41,  112 => 42,  109 => 37,  106 => 42,  103 => 33,  99 => 40,  95 => 28,  92 => 26,  86 => 33,  82 => 22,  80 => 20,  73 => 31,  64 => 25,  60 => 24,  57 => 11,  54 => 21,  51 => 20,  48 => 7,  45 => 20,  42 => 23,  39 => 5,  36 => 4,  33 => 3,  30 => 5,);
    }
}
