<?php

/* CaravaneOrganicBundle:Invoice:pdf.r2.html.twig */
class __TwigTemplate_80da7f4ace6a7324b86f5e93e4baf79cecffa37cf834e0f5beb9f3ef53e89a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CaravaneOrganicBundle:Invoice:pdf.html.twig");

        $this->blocks = array(
            'reference' => array($this, 'block_reference'),
            'documentType' => array($this, 'block_documentType'),
            'page1_body' => array($this, 'block_page1_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaravaneOrganicBundle:Invoice:pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_reference($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reference"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "<br/>
  Zaventem, ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_documentType($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("2nd RAPPEL"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("Facture de " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreType"))), "html", null, true);
        echo "
";
    }

    // line 12
    public function block_page1_body($context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 14
        echo $this->env->getExtension('translator')->trans("_R2", array("%reference%" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "%date%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "invoiceDate"), "d/m/Y")));
        echo "

<br/>
<br/>
<table class=\"main\" style=\"border:1px solid\">
\t<tr >
 \t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("FACTURE"), "html", null, true);
        echo "</td>
 \t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("DATE"), "html", null, true);
        echo "</td>
\t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("MONTANT"), "html", null, true);
        echo "</td>
 \t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("MONTANT TVAC"), "html", null, true);
        echo "</td>
 \t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ECHEANCE"), "html", null, true);
        echo "</td>
\t\t<td style='padding:2mm;border-bottom:1px solid #000000'>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("CONDITIONS PAIEMENT"), "html", null, true);
        echo "</td>
 \t\t
 \t</tr>
 \t<tr>
 \t\t<td style='padding:2mm;border-right:1px solid #000000'>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "</td>
 \t\t<td style='padding:2mm;border-right:1px solid #000000'>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "invoiceDate"), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t<td style='padding:2mm;border-right:1px solid #000000;text-align:right'>";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceht"), 2, ".", " "), "html", null, true);
        echo " €</td>
 \t\t<td style='padding:2mm;border-right:1px solid #000000;text-align:right'>";
        // line 32
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            // line 33
            echo "\t            ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") + ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") * 0.21)), 2, ".", " "), "html", null, true);
            echo " €
\t        ";
        }
        // line 34
        echo "</td>
 \t\t<td style='padding:2mm;border-right:1px solid #000000'>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "invoiceDate"), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t<td style='padding:2mm;'>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("COMPTANT"), "html", null, true);
        echo "</td>
 \t\t
 \t</tr>
</table>
<br/>


<p></p>
  <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cordialement"), "html", null, true);
        echo ",</p>
  <p>";
        // line 45
        echo "</p>
<br/<br/>
<br/>
<br/>
<br/>
<br/>
<b><u>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions"), "html", null, true);
        echo "</u></b><br/>
<br/>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions de paiement"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comptant."), "html", null, true);
        echo "
<br/>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Communication à mentionner"), "html", null, true);
        echo ": <b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Facture"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "</b>
<br/><br/>

";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Invoice:pdf.r2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  299 => 155,  289 => 148,  266 => 92,  249 => 85,  242 => 80,  228 => 76,  411 => 219,  408 => 218,  351 => 178,  343 => 173,  331 => 167,  292 => 142,  280 => 136,  274 => 146,  263 => 127,  236 => 114,  215 => 104,  211 => 103,  207 => 102,  178 => 67,  152 => 51,  333 => 8,  318 => 129,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 119,  222 => 108,  212 => 95,  206 => 100,  172 => 82,  157 => 125,  369 => 134,  366 => 133,  364 => 132,  361 => 131,  358 => 130,  352 => 128,  342 => 120,  336 => 9,  328 => 116,  324 => 115,  321 => 114,  317 => 159,  307 => 110,  297 => 154,  288 => 106,  275 => 102,  271 => 108,  261 => 98,  233 => 82,  225 => 76,  210 => 70,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 88,  161 => 62,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 133,  256 => 112,  250 => 93,  231 => 77,  226 => 109,  180 => 80,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 29,  323 => 161,  319 => 176,  311 => 157,  303 => 166,  293 => 159,  286 => 138,  279 => 109,  272 => 133,  265 => 99,  251 => 106,  244 => 131,  237 => 127,  223 => 101,  216 => 73,  202 => 87,  195 => 92,  188 => 88,  181 => 95,  167 => 61,  160 => 83,  146 => 75,  97 => 36,  90 => 43,  83 => 22,  76 => 23,  155 => 61,  153 => 56,  129 => 36,  37 => 8,  70 => 20,  53 => 23,  65 => 19,  139 => 63,  113 => 42,  110 => 31,  104 => 39,  58 => 17,  34 => 14,  190 => 73,  174 => 144,  150 => 52,  134 => 50,  126 => 47,  120 => 73,  84 => 33,  81 => 35,  23 => 2,  118 => 43,  96 => 36,  77 => 19,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 101,  314 => 99,  312 => 111,  309 => 156,  305 => 95,  298 => 91,  294 => 108,  285 => 105,  283 => 104,  278 => 86,  268 => 107,  264 => 84,  258 => 87,  252 => 121,  247 => 78,  241 => 96,  229 => 98,  220 => 74,  214 => 97,  177 => 80,  169 => 64,  140 => 44,  132 => 49,  128 => 57,  111 => 50,  107 => 36,  61 => 16,  38 => 16,  273 => 119,  269 => 118,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 95,  235 => 74,  230 => 111,  227 => 105,  224 => 75,  221 => 96,  219 => 74,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 29,  71 => 49,  67 => 17,  63 => 13,  59 => 18,  47 => 12,  28 => 3,  29 => 4,  35 => 11,  26 => 12,  43 => 22,  196 => 97,  183 => 81,  171 => 62,  166 => 132,  163 => 69,  158 => 74,  156 => 52,  151 => 60,  142 => 64,  138 => 93,  136 => 56,  123 => 74,  121 => 47,  117 => 50,  115 => 45,  105 => 47,  91 => 24,  69 => 30,  62 => 28,  49 => 13,  101 => 46,  94 => 43,  89 => 36,  85 => 23,  79 => 21,  75 => 20,  68 => 19,  56 => 14,  50 => 13,  87 => 23,  72 => 15,  66 => 14,  55 => 22,  41 => 13,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 22,  46 => 23,  44 => 1,  40 => 5,  32 => 5,  27 => 7,  22 => 2,  209 => 94,  203 => 69,  199 => 67,  193 => 68,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 135,  164 => 77,  162 => 53,  154 => 58,  149 => 119,  147 => 65,  144 => 45,  141 => 59,  133 => 90,  130 => 49,  125 => 35,  122 => 34,  116 => 33,  112 => 42,  109 => 37,  106 => 30,  103 => 33,  99 => 38,  95 => 25,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 31,  64 => 25,  60 => 12,  57 => 16,  54 => 21,  51 => 9,  48 => 8,  45 => 11,  42 => 23,  39 => 10,  36 => 4,  33 => 4,  30 => 3,);
    }
}
