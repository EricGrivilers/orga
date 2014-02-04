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
        return array (  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 154,  419 => 152,  417 => 151,  401 => 148,  399 => 147,  395 => 146,  391 => 145,  375 => 139,  372 => 138,  350 => 123,  339 => 120,  334 => 118,  329 => 116,  315 => 110,  295 => 98,  185 => 62,  114 => 34,  299 => 155,  289 => 96,  266 => 92,  249 => 85,  242 => 80,  228 => 76,  411 => 219,  408 => 149,  351 => 178,  343 => 173,  331 => 167,  292 => 142,  280 => 136,  274 => 146,  263 => 127,  236 => 78,  215 => 104,  211 => 70,  207 => 102,  178 => 59,  152 => 51,  333 => 8,  318 => 129,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 93,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 119,  222 => 108,  212 => 95,  206 => 68,  172 => 59,  157 => 50,  369 => 137,  366 => 136,  364 => 135,  361 => 131,  358 => 130,  352 => 128,  342 => 121,  336 => 119,  328 => 116,  324 => 115,  321 => 114,  317 => 159,  307 => 108,  297 => 154,  288 => 106,  275 => 102,  271 => 108,  261 => 98,  233 => 82,  225 => 76,  210 => 70,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 91,  262 => 133,  256 => 112,  250 => 85,  231 => 76,  226 => 109,  180 => 65,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 16,  323 => 161,  319 => 111,  311 => 109,  303 => 166,  293 => 159,  286 => 138,  279 => 109,  272 => 133,  265 => 99,  251 => 106,  244 => 131,  237 => 127,  223 => 101,  216 => 73,  202 => 87,  195 => 92,  188 => 88,  181 => 95,  167 => 61,  160 => 49,  146 => 75,  97 => 36,  90 => 19,  83 => 24,  76 => 23,  155 => 61,  153 => 48,  129 => 38,  37 => 4,  70 => 20,  53 => 23,  65 => 13,  139 => 63,  113 => 42,  110 => 33,  104 => 39,  58 => 17,  34 => 3,  190 => 67,  174 => 144,  150 => 52,  134 => 50,  126 => 47,  120 => 73,  84 => 18,  81 => 35,  23 => 2,  118 => 29,  96 => 20,  77 => 19,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 164,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 101,  314 => 99,  312 => 111,  309 => 156,  305 => 95,  298 => 91,  294 => 108,  285 => 105,  283 => 94,  278 => 86,  268 => 107,  264 => 84,  258 => 86,  252 => 121,  247 => 84,  241 => 96,  229 => 98,  220 => 74,  214 => 97,  177 => 80,  169 => 52,  140 => 44,  132 => 49,  128 => 57,  111 => 50,  107 => 36,  61 => 16,  38 => 16,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 79,  235 => 74,  230 => 111,  227 => 105,  224 => 72,  221 => 96,  219 => 74,  217 => 75,  208 => 69,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 31,  71 => 49,  67 => 17,  63 => 15,  59 => 18,  47 => 12,  28 => 3,  29 => 4,  35 => 11,  26 => 12,  43 => 22,  196 => 97,  183 => 61,  171 => 62,  166 => 132,  163 => 69,  158 => 74,  156 => 48,  151 => 60,  142 => 45,  138 => 44,  136 => 56,  123 => 74,  121 => 47,  117 => 50,  115 => 28,  105 => 47,  91 => 26,  69 => 30,  62 => 12,  49 => 13,  101 => 22,  94 => 43,  89 => 36,  85 => 23,  79 => 23,  75 => 22,  68 => 14,  56 => 14,  50 => 13,  87 => 25,  72 => 15,  66 => 16,  55 => 9,  41 => 13,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 22,  46 => 23,  44 => 5,  40 => 5,  32 => 5,  27 => 7,  22 => 2,  209 => 94,  203 => 69,  199 => 65,  193 => 64,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 58,  164 => 77,  162 => 53,  154 => 58,  149 => 46,  147 => 47,  144 => 46,  141 => 59,  133 => 38,  130 => 37,  125 => 37,  122 => 36,  116 => 35,  112 => 42,  109 => 37,  106 => 32,  103 => 23,  99 => 38,  95 => 27,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 31,  64 => 25,  60 => 14,  57 => 16,  54 => 21,  51 => 9,  48 => 8,  45 => 11,  42 => 23,  39 => 10,  36 => 4,  33 => 4,  30 => 3,);
    }
}
