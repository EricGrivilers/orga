<?php

/* CaravaneOrganicBundle:Default:pdf.html.twig */
class __TwigTemplate_dc950d5333f6e30643a14e46fb54cc6dfd02dcc1f880d7d2b1bcc05ca4ab32cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'page1' => array($this, 'block_page1'),
            'page1_header' => array($this, 'block_page1_header'),
            'documentType' => array($this, 'block_documentType'),
            'page1_footer' => array($this, 'block_page1_footer'),
            'conditions' => array($this, 'block_conditions'),
            'reference' => array($this, 'block_reference'),
            'address' => array($this, 'block_address'),
            'page1_body' => array($this, 'block_page1_body'),
            'bank_body' => array($this, 'block_bank_body'),
            'page2' => array($this, 'block_page2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('styles', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('page1', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('page2', $context, $blocks);
    }

    // line 1
    public function block_styles($context, array $blocks = array())
    {
        // line 2
        echo "<style type=\"text/css\">
\t<!--
\ttable.main {
\t\twidth:190mm;

\t}
\ttd {
\t\tvertical-align:top;
\t}
\t.center {
\t\ttext-align:center;
\t}
\t.left {
\t\ttext-align:left;
\t}
\t.right {
\t\ttext-align:right;
\t}
\ttd.1col {
\t\twidth:180mm;
\t}
\ttd.2col {
\t\twidth:95mm;
\t}
\ttd.address {
\t\tpadding-top:45mm;
\t}
\ttd.price,th.price {
\t\twidth:35mm;
\t}
\ttd.description,th.description {
\t\twidth:145mm;
\t}
\tth {
\t\tbackground:#ededed;
\t}
\ttable.main td,table.main th {
\t\tpadding:0 1mm;
\t}

\t.grey {
\t\tbackground:#ededed;
\t}

\ttable.grey {
\t\tborder:1px solid #ededed;
\t}
\t.marker {
\t\tposition:absolute;
\t\tborder-bottom:1px solid #ededed;
\t\twidth:1mm;
\t}

\ttable.bordered {
\t\tborder:1px solid #333;
\t}

\ttable.bordered td.borderedRight {
\t\tborder-right:1px solid #333;
\t}
\ttable.bordered td.borderedBottom {
\t\tborder-bottom:1px solid #333;
\t}

\ttd.borderedBottomLight {
\t\tborder-bottom:1px solid #ccc;
\t}
\t-->
</style>
";
    }

    // line 73
    public function block_page1($context, array $blocks = array())
    {
        // line 74
        echo "\t<page backtop=\"30mm\" backbottom=\"30mm\" backleft=\"0mm\" backright=\"0mm\" >
\t\t<div class=\"marker\" style=\"height:49mm\" >
\t\t</div>
\t\t<div class=\"marker\" style=\"height:149mm\" >
\t\t</div>
\t\t<page_header>
\t\t\t";
        // line 80
        $this->displayBlock('page1_header', $context, $blocks);
        // line 90
        echo "\t\t</page_header>
\t\t<page_footer>

\t\t\t";
        // line 93
        $this->displayBlock('page1_footer', $context, $blocks);
        // line 112
        echo "\t\t</page_footer>
\t\t
\t\t\t<table class=\"main\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"2col\">
\t\t\t\t\t\t";
        // line 117
        $this->displayBlock('reference', $context, $blocks);
        // line 119
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"2col address\">
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
        // line 125
        $this->displayBlock('address', $context, $blocks);
        // line 127
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<br/>
\t\t\t
\t    ";
        // line 132
        $this->displayBlock('page1_body', $context, $blocks);
        // line 135
        echo "\t    <br/>
\t\t\t
\t    ";
        // line 137
        $this->displayBlock('bank_body', $context, $blocks);
        // line 144
        echo "\t    <br/>
\t</page>
";
    }

    // line 80
    public function block_page1_header($context, array $blocks = array())
    {
        // line 81
        echo "\t\t\t<table class=\"main\" >
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"2col\">
\t\t\t\t\t\t<img src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["dir"]) ? $context["dir"] : null), "html", null, true);
        echo "/web/bundles/caravaneorganic/images/logo.png\" />
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"2col\" ><br/><br/><br/>";
        // line 86
        $this->displayBlock('documentType', $context, $blocks);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t";
    }

    public function block_documentType($context, array $blocks = array())
    {
        echo " ";
    }

    // line 93
    public function block_page1_footer($context, array $blocks = array())
    {
        // line 94
        echo "\t\t\t<table class=\"main\">
\t\t\t\t";
        // line 95
        $this->displayBlock('conditions', $context, $blocks);
        // line 97
        echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"center 1col grey\">
\t\t\t\t\t\tOrganic sa-nv - 71, Ikaroslaan - 1930 Zaventem - Belgium
\t\t\t\t\t\t<br/>
\t\t\t\t\t\twww.organic-concept.com - TVA/BTW: 0807.879.247
\t\t\t\t\t\t<br/>
\t\t\t\t\t\tING - ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compte n°"), "html", null, true);
        echo " : 363-1068056-29 - IBAN : BE26 3631 0680 5629 - SWIFT : BBRUBEBB
\t\t\t<br/>
\t\t\tFortis Bank - ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compte n°"), "html", null, true);
        echo " : 001-5712962-29 - IBAN : BE26 0015 7129 6229 - SWIFT : GEBABEBB
\t\t\t\t\t\t<br/>
\t\t\t\t\t\tTel 00 32 2 709 09 50 - Fax 00 32 2 709 09 51 - info@organic-concept.com
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t";
    }

    // line 95
    public function block_conditions($context, array $blocks = array())
    {
        // line 96
        echo "\t\t\t\t";
    }

    // line 117
    public function block_reference($context, array $blocks = array())
    {
        // line 118
        echo "\t\t\t\t\t    ";
    }

    // line 125
    public function block_address($context, array $blocks = array())
    {
        // line 126
        echo "\t\t\t\t\t    ";
    }

    // line 132
    public function block_page1_body($context, array $blocks = array())
    {
        // line 133
        echo "
\t    ";
    }

    // line 137
    public function block_bank_body($context, array $blocks = array())
    {
        // line 138
        echo "\t    \t<b><u>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Coordonnées bancaires"), "html", null, true);
        echo "</u></b><br/><br/>

\t\t\tING - ";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compte n°"), "html", null, true);
        echo " 363-1068056-29 - IBAN : BE26 3631 0680 5629 - SWIFT : BBRUBEBB
\t\t\t<br/>
\t\t\tFortis Bank - ";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compte n°"), "html", null, true);
        echo " 001-5712962-29 - IBAN : BE26 0015 7129 6229 - SWIFT : GEBABEBB
\t    ";
    }

    // line 148
    public function block_page2($context, array $blocks = array())
    {
        // line 149
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Default:pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  290 => 149,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 132,  255 => 126,  248 => 118,  245 => 117,  222 => 103,  212 => 95,  206 => 93,  172 => 137,  157 => 125,  369 => 134,  366 => 133,  364 => 132,  361 => 131,  358 => 130,  352 => 128,  342 => 120,  336 => 119,  328 => 116,  324 => 115,  321 => 114,  317 => 112,  307 => 110,  297 => 109,  288 => 106,  275 => 102,  271 => 101,  261 => 98,  233 => 82,  225 => 76,  210 => 70,  198 => 69,  191 => 68,  170 => 59,  197 => 84,  184 => 65,  161 => 60,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 133,  256 => 112,  250 => 93,  231 => 99,  226 => 97,  180 => 80,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 29,  323 => 177,  319 => 176,  311 => 171,  303 => 166,  293 => 159,  286 => 155,  279 => 103,  272 => 147,  265 => 99,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 87,  195 => 103,  188 => 84,  181 => 95,  167 => 61,  160 => 83,  146 => 75,  97 => 45,  90 => 43,  83 => 35,  76 => 30,  155 => 126,  153 => 56,  129 => 56,  37 => 147,  70 => 28,  53 => 23,  65 => 25,  139 => 56,  113 => 57,  110 => 43,  104 => 39,  58 => 23,  34 => 14,  190 => 73,  174 => 144,  150 => 52,  134 => 50,  126 => 47,  120 => 73,  84 => 33,  81 => 35,  23 => 3,  118 => 43,  96 => 36,  77 => 19,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 111,  309 => 97,  305 => 95,  298 => 91,  294 => 108,  285 => 105,  283 => 104,  278 => 86,  268 => 100,  264 => 84,  258 => 139,  252 => 125,  247 => 78,  241 => 96,  229 => 98,  220 => 70,  214 => 97,  177 => 65,  169 => 60,  140 => 112,  132 => 49,  128 => 49,  111 => 50,  107 => 36,  61 => 11,  38 => 16,  273 => 119,  269 => 118,  254 => 94,  246 => 92,  243 => 88,  240 => 86,  238 => 95,  235 => 74,  230 => 123,  227 => 105,  224 => 71,  221 => 96,  219 => 74,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 127,  143 => 56,  135 => 49,  131 => 80,  119 => 46,  108 => 55,  102 => 39,  71 => 49,  67 => 15,  63 => 13,  59 => 18,  47 => 2,  28 => 5,  29 => 3,  35 => 73,  26 => 12,  43 => 22,  196 => 74,  183 => 81,  171 => 62,  166 => 132,  163 => 62,  158 => 55,  156 => 58,  151 => 56,  142 => 35,  138 => 93,  136 => 56,  123 => 74,  121 => 47,  117 => 44,  115 => 45,  105 => 47,  91 => 42,  69 => 30,  62 => 28,  49 => 22,  101 => 46,  94 => 43,  89 => 36,  85 => 23,  79 => 31,  75 => 32,  68 => 18,  56 => 9,  50 => 10,  87 => 23,  72 => 15,  66 => 14,  55 => 22,  41 => 6,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 33,  46 => 23,  44 => 1,  40 => 148,  32 => 72,  27 => 5,  22 => 2,  209 => 94,  203 => 78,  199 => 67,  193 => 86,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 135,  164 => 58,  162 => 59,  154 => 58,  149 => 119,  147 => 117,  144 => 118,  141 => 50,  133 => 90,  130 => 49,  125 => 55,  122 => 47,  116 => 41,  112 => 42,  109 => 37,  106 => 42,  103 => 33,  99 => 40,  95 => 28,  92 => 26,  86 => 33,  82 => 22,  80 => 20,  73 => 31,  64 => 25,  60 => 24,  57 => 11,  54 => 21,  51 => 20,  48 => 7,  45 => 20,  42 => 23,  39 => 5,  36 => 4,  33 => 3,  30 => 1,);
    }
}
