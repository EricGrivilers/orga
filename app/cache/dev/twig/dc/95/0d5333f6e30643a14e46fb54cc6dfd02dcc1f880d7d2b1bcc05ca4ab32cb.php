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
        echo twig_escape_filter($this->env, (isset($context["dir"]) ? $context["dir"] : $this->getContext($context, "dir")), "html", null, true);
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
        return array (  290 => 149,  287 => 148,  276 => 140,  270 => 138,  267 => 137,  262 => 133,  259 => 132,  255 => 126,  252 => 125,  248 => 118,  245 => 117,  241 => 96,  227 => 105,  222 => 103,  214 => 97,  212 => 95,  209 => 94,  188 => 84,  180 => 80,  174 => 144,  172 => 137,  168 => 135,  166 => 132,  159 => 127,  157 => 125,  147 => 117,  140 => 112,  131 => 80,  123 => 74,  120 => 73,  47 => 2,  40 => 148,  35 => 73,  32 => 72,  30 => 1,  453 => 164,  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 154,  419 => 152,  417 => 151,  408 => 149,  401 => 148,  399 => 147,  395 => 146,  391 => 145,  375 => 139,  372 => 138,  369 => 137,  366 => 136,  364 => 135,  350 => 123,  342 => 121,  339 => 120,  336 => 119,  334 => 118,  329 => 116,  319 => 111,  315 => 110,  311 => 109,  307 => 108,  295 => 98,  289 => 96,  283 => 94,  281 => 142,  277 => 91,  269 => 90,  258 => 86,  250 => 85,  247 => 84,  238 => 95,  236 => 78,  231 => 76,  224 => 72,  211 => 70,  208 => 69,  206 => 93,  199 => 65,  193 => 86,  190 => 63,  185 => 62,  183 => 81,  178 => 59,  169 => 52,  160 => 49,  156 => 48,  153 => 47,  149 => 119,  142 => 42,  138 => 93,  133 => 90,  130 => 37,  122 => 31,  118 => 29,  115 => 28,  106 => 24,  103 => 23,  101 => 22,  96 => 20,  90 => 19,  84 => 18,  74 => 16,  68 => 14,  65 => 13,  62 => 12,  55 => 9,  52 => 8,  44 => 1,  37 => 147,  34 => 3,);
    }
}
