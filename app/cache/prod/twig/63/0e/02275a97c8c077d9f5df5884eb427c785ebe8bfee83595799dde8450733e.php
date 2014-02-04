<?php

/* CaravaneOrganicBundle:Invoice:pdf.med.html.twig */
class __TwigTemplate_630e02275a97c8c077d9f5df5884eb427c785ebe8bfee83595799dde8450733e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mise en demeure"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("Facture de " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreType"))), "html", null, true);
        echo "
";
    }

    // line 14
    public function block_page1_body($context, array $blocks = array())
    {
        // line 15
        echo "
";
        // line 16
        echo $this->env->getExtension('translator')->trans("_R3", array("%reference%" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "%date%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "invoiceDate"), "d/m/Y")));
        echo "

<br/>
<br/>
<table class=\"main\" style=\"border:1px solid\">
\t<tr >
 \t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("FACTURE"), "html", null, true);
        echo "</td>
 \t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("DATE"), "html", null, true);
        echo "</td>
\t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("MONTANT"), "html", null, true);
        echo "</td>
 \t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("MONTANT TVAC"), "html", null, true);
        echo "</td>
 \t\t<td style='padding:2mm;border-bottom:1px solid #000000;border-right:1px solid #000000'>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ECHEANCE"), "html", null, true);
        echo "</td>
\t\t<td style='padding:2mm;border-bottom:1px solid #000000'>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("CONDITIONS PAIEMENT"), "html", null, true);
        echo "</td>
 \t\t
 \t</tr>
 \t<tr>
 \t\t<td style='padding:2mm;border-right:1px solid #000000'>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "</td>
 \t\t<td style='padding:2mm;border-right:1px solid #000000'>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "invoiceDate"), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t<td style='padding:2mm;border-right:1px solid #000000;text-align:right'>";
        // line 33
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceht"), 2, ".", " "), "html", null, true);
        echo " €</td>
 \t\t<td style='padding:2mm;border-right:1px solid #000000;text-align:right'>";
        // line 34
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            // line 35
            echo "\t            ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") + ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") * 0.21)), 2, ".", " "), "html", null, true);
            echo " €
\t        ";
        }
        // line 36
        echo "</td>
 \t\t<td style='padding:2mm;border-right:1px solid #000000'>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "invoiceDate"), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t<td style='padding:2mm;'>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("COMPTANT"), "html", null, true);
        echo "</td>
 \t\t
 \t</tr>
 \t<tr>
 \t\t<td style='padding:2mm;border-right:1px solid #000000'>+ 15%</td>
 \t\t<td style='padding:2mm;border-right:1px solid #000000'></td>
\t\t<td style='padding:2mm;border-right:1px solid #000000;text-align:right'>";
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceht") * 0.15) + $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceht")), 2, ".", " "), "html", null, true);
        echo " €</td>
 \t\t<td style='padding:2mm;border-right:1px solid #000000;text-align:right'>";
        // line 45
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            // line 46
            echo " \t\t\t";
            $context["t"] = (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceht") * 0.15) + $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceht"));
            // line 47
            echo "\t            ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["t"]) ? $context["t"] : null) + ((isset($context["t"]) ? $context["t"] : null) * 0.21)), 2, ".", " "), "html", null, true);
            echo " €
\t        ";
        }
        // line 48
        echo "</td>
 \t\t<td style='padding:2mm;border-right:1px solid #000000'></td>
\t\t<td style='padding:2mm;'>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("TOTAL"), "html", null, true);
        echo "</td>
 \t\t
 \t</tr>
</table>
<br/>


<p></p>
  <p>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cordialement"), "html", null, true);
        echo ",</p>
  <p>";
        // line 59
        echo "</p>
<br/<br/>
<br/>
<br/>
<br/>
<br/>
<b><u>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions"), "html", null, true);
        echo "</u></b><br/>
<br/>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions de paiement"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comptant."), "html", null, true);
        echo "
<br/>";
        // line 67
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
        return "CaravaneOrganicBundle:Invoice:pdf.med.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 173,  478 => 172,  475 => 171,  470 => 174,  468 => 171,  465 => 170,  462 => 169,  454 => 163,  448 => 161,  446 => 160,  428 => 156,  424 => 155,  420 => 154,  401 => 147,  391 => 145,  389 => 144,  386 => 143,  383 => 142,  380 => 141,  377 => 140,  375 => 139,  353 => 125,  350 => 124,  347 => 123,  345 => 122,  340 => 120,  330 => 115,  326 => 114,  306 => 102,  300 => 100,  201 => 67,  194 => 65,  114 => 34,  299 => 155,  289 => 148,  266 => 92,  249 => 83,  242 => 80,  228 => 76,  411 => 219,  408 => 218,  351 => 178,  343 => 173,  331 => 167,  292 => 97,  280 => 94,  274 => 146,  263 => 127,  236 => 114,  215 => 104,  211 => 103,  207 => 102,  178 => 67,  152 => 51,  333 => 8,  318 => 112,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 119,  222 => 74,  212 => 95,  206 => 100,  172 => 59,  157 => 50,  369 => 134,  366 => 133,  364 => 132,  361 => 127,  358 => 130,  352 => 128,  342 => 120,  336 => 9,  328 => 116,  324 => 115,  321 => 114,  317 => 159,  307 => 110,  297 => 154,  288 => 95,  275 => 102,  271 => 108,  261 => 89,  233 => 82,  225 => 76,  210 => 69,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 133,  256 => 112,  250 => 93,  231 => 77,  226 => 109,  180 => 65,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 29,  323 => 161,  319 => 176,  311 => 157,  303 => 166,  293 => 159,  286 => 138,  279 => 109,  272 => 133,  265 => 99,  251 => 106,  244 => 131,  237 => 127,  223 => 101,  216 => 73,  202 => 87,  195 => 92,  188 => 88,  181 => 95,  167 => 52,  160 => 50,  146 => 75,  97 => 36,  90 => 43,  83 => 24,  76 => 17,  155 => 61,  153 => 48,  129 => 38,  37 => 4,  70 => 20,  53 => 23,  65 => 12,  139 => 63,  113 => 42,  110 => 33,  104 => 39,  58 => 10,  34 => 3,  190 => 67,  174 => 144,  150 => 52,  134 => 50,  126 => 32,  120 => 73,  84 => 33,  81 => 35,  23 => 2,  118 => 43,  96 => 36,  77 => 19,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 158,  435 => 146,  430 => 157,  427 => 143,  423 => 142,  413 => 149,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 113,  314 => 99,  312 => 111,  309 => 156,  305 => 95,  298 => 91,  294 => 98,  285 => 105,  283 => 104,  278 => 86,  268 => 107,  264 => 84,  258 => 88,  252 => 121,  247 => 82,  241 => 96,  229 => 98,  220 => 74,  214 => 97,  177 => 80,  169 => 64,  140 => 44,  132 => 49,  128 => 57,  111 => 50,  107 => 24,  61 => 16,  38 => 16,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 95,  235 => 76,  230 => 111,  227 => 105,  224 => 75,  221 => 96,  219 => 73,  217 => 72,  208 => 68,  204 => 68,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 31,  71 => 49,  67 => 17,  63 => 15,  59 => 18,  47 => 12,  28 => 3,  29 => 4,  35 => 11,  26 => 12,  43 => 22,  196 => 66,  183 => 81,  171 => 53,  166 => 132,  163 => 69,  158 => 74,  156 => 52,  151 => 60,  142 => 45,  138 => 44,  136 => 56,  123 => 74,  121 => 47,  117 => 28,  115 => 45,  105 => 47,  91 => 26,  69 => 30,  62 => 28,  49 => 13,  101 => 23,  94 => 43,  89 => 36,  85 => 20,  79 => 23,  75 => 22,  68 => 19,  56 => 14,  50 => 13,  87 => 25,  72 => 15,  66 => 16,  55 => 9,  41 => 13,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 22,  46 => 23,  44 => 5,  40 => 5,  32 => 5,  27 => 7,  22 => 2,  209 => 94,  203 => 69,  199 => 67,  193 => 68,  189 => 63,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 58,  164 => 51,  162 => 53,  154 => 58,  149 => 45,  147 => 47,  144 => 46,  141 => 41,  133 => 35,  130 => 49,  125 => 37,  122 => 36,  116 => 35,  112 => 26,  109 => 37,  106 => 32,  103 => 33,  99 => 38,  95 => 27,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 16,  64 => 25,  60 => 14,  57 => 16,  54 => 21,  51 => 9,  48 => 8,  45 => 11,  42 => 23,  39 => 10,  36 => 4,  33 => 4,  30 => 3,);
    }
}
