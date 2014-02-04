<?php

/* CaravaneOrganicBundle:Invoice:pdf.html.twig */
class __TwigTemplate_8e01d5eb967cb38e58701f7a8d6f267ab10aed96ae979b01091fb197e55d41e6 extends Twig_Template
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
            'page2_body' => array($this, 'block_page2_body'),
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
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reference"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "<br/>
  Zaventem, ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "invoiceDate"), "d/m/Y"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_documentType($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("Facture de " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreType"))), "html", null, true);
        echo "
";
    }

    // line 12
    public function block_address($context, array $blocks = array())
    {
        // line 13
        echo "\t";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientType") == "cie")) {
            // line 14
            echo "\t\t<b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
            echo "</b>
\t";
        }
        // line 16
        echo "\t<br/>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientTitle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastname"), "html", null, true);
        echo "
\t<br/>
\t<br/>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "number"), "html", null, true);
        echo "
\t<br/>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "zip"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "city"), "html", null, true);
        echo "
\t<br/>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country"), "html", null, true);
        echo "
\t<br/>
\t";
        // line 22
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vat")) {
            // line 23
            echo "\t<br/>
\t\t<br/>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vat"), "html", null, true);
            echo "
\t";
        }
    }

    // line 28
    public function block_conditions($context, array $blocks = array())
    {
        // line 29
        echo "\t<tr>
\t\t<td class=\"center 1col\" >
\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_More conditions"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
";
    }

    // line 37
    public function block_page1_body($context, array $blocks = array())
    {
        // line 38
        echo "<table class=\"main\">
\t<thead>
\t\t<tr>
\t\t\t<th class=\"left description\" >";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description"), "html", null, true);
        echo "</th>
\t\t\t<th class='right price' >";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montant HTVA"), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 47
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"left description\">";
            // line 48
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true));
            echo "</td>
\t\t\t\t<td class='right' >";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), 2, ".", " "), "html", null, true);
            echo " &euro;</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t<tr>
\t\t\t<th>&nbsp;</th>
\t\t\t<th>&nbsp;</th>
\t\t</tr>
\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class='right'>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total VAT excl."), "html", null, true);
        echo "</td>
\t\t\t<td class='right' >
\t\t\t\t";
        // line 61
        $context["total"] = 0;
        // line 62
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 63
            echo "                    ";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "price"));
            // line 64
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ",", " "), "html", null, true);
        echo "  &euro;
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 68
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discount")) {
            // line 69
            echo "\t\t<tr>
\t\t\t<td class='right'>";
            // line 70
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discountDescription")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discountDescription"), "html", null, true);
                echo " ";
            } else {
                echo " <b>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Discount"), "html", null, true);
                echo "</b>";
            }
            echo "</td>
\t\t\t<td class='right' ><b>-
\t\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discount"), "html", null, true);
            echo "%</b>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class='right'>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total VAT excl."), "html", null, true);
            echo "</td>
\t\t\t<td class='right' >
\t\t\t\t";
            // line 78
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) - ((isset($context["total"]) ? $context["total"] : null) * ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discount") / 100)));
            // line 79
            echo "\t\t\t\t ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ",", " "), "html", null, true);
            echo "  &euro;
\t\t\t</td>
\t\t</tr>

\t\t";
        }
        // line 84
        echo "\t\t<tr>
\t\t\t<td class='right' >";
        // line 85
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
            echo " (21%)";
        }
        echo "</td>
\t\t\t<td class='right' > ";
        // line 86
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (0.21 * (isset($context["total"]) ? $context["total"] : null)), 2, ".", " "), "html", null, true);
            echo "  &euro; ";
        }
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class='grey right'>
\t\t\t\t";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total"), "html", null, true);
        echo " ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT incl."), "html", null, true);
            echo " ";
        }
        // line 91
        echo "\t\t\t</td>
\t\t\t<td class='grey right' >
\t\t\t\t";
        // line 93
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") == "intra")) {
            // line 94
            echo "                    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ".", " "), "html", null, true);
            echo "
                ";
        } else {
            // line 96
            echo "                    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) ? $context["total"] : null) + (0.21 * (isset($context["total"]) ? $context["total"] : null))), 2, ".", " "), "html", null, true);
            echo "
                ";
        }
        // line 98
        echo "                  &euro;
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<br/>
<br/>
<table class=\"main\">
    <tbody>
        <tr>
            <td style=\"width:85mm\" >";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sliceDescription"), "html", null, true);
        echo "</td>
            <td style=\"width:20mm\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slice"), "html", null, true);
        echo "%</td>
            <td class='right price' style=\"width:30mm\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total VAT excl."), "html", null, true);
        echo "</td>
            <td class='right price' >";
        // line 111
        $context["TotalHT"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHt");
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceht"), 2, ".", " "), "html", null, true);
        echo " &euro;</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td class='right'>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
        echo "</td>
            <td class='right price'>
                ";
        // line 118
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") == "intra")) {
            // line 119
            echo "                \t<i>intra</i> ";
            $context["VAT"] = 0;
            // line 120
            echo "                ";
        } else {
            // line 121
            echo "                \t";
            $context["VAT"] = ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHt") * 0.21);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["VAT"]) ? $context["VAT"] : null), 2, ".", " "), "html", null, true);
            echo " &euro;
                ";
        }
        // line 123
        echo "
             </td>
        </tr>
    </tbody>
 </table>
<br/>
<br/>

<table class=\"main\">

\t<tr>
\t\t<td class=\"center 1col\" style=\"width:178mm;border: 0.5mm solid #333;padding:2mm\">
\t\t\t";
        // line 135
        $context["ToPay"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT");
        // line 136
        echo "\t        ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            // line 137
            echo "\t            ";
            $context["ToPay"] = ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") + ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") * 0.21));
            // line 138
            echo "\t        ";
        }
        // line 139
        echo "\t       <b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montant total à payer"), "html", null, true);
        echo "  ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT incl."), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ToPay"]) ? $context["ToPay"] : null), 2, ".", " "), "html", null, true);
        echo " &euro;</b>
\t\t</td>
\t</tr>
</table>
<br/>
<br/>
<b><u>";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions"), "html", null, true);
        echo "</u></b><br/>
";
        // line 146
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions");
        echo "
";
        // line 147
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions1")) {
            // line 148
            echo "\t<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions de paiement"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comptant."), "html", null, true);
            echo "
\t<br/>";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Communication à mentionner"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Facture"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
            echo "</b>
";
        }
        // line 151
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions2")) {
            // line 152
            echo "\t<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Le paiement de votre acompte confirme votre commande"), "html", null, true);
            echo ".
";
        }
        // line 154
        echo "<br/><br/>



";
    }

    // line 160
    public function block_page2($context, array $blocks = array())
    {
        // line 161
        echo "\t<page backtop=\"0mm\" backbottom=\"0mm\" backleft=\"0mm\" backright=\"0mm\">
\t\t";
        // line 162
        $this->displayBlock('page2_body', $context, $blocks);
        // line 165
        echo "\t</page>
";
    }

    // line 162
    public function block_page2_body($context, array $blocks = array())
    {
        // line 163
        echo "\t        ";
        $template = $this->env->resolveTemplate((("CaravaneOrganicBundle:Default:cgv." . (isset($context["_locale"]) ? $context["_locale"] : null)) . ".html.twig"));
        $template->display($context);
        // line 164
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Invoice:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 154,  419 => 152,  417 => 151,  401 => 148,  399 => 147,  395 => 146,  391 => 145,  375 => 139,  372 => 138,  350 => 123,  339 => 120,  334 => 118,  329 => 116,  315 => 110,  295 => 98,  185 => 62,  114 => 32,  299 => 155,  289 => 96,  266 => 92,  249 => 85,  242 => 80,  228 => 76,  411 => 219,  408 => 149,  351 => 178,  343 => 173,  331 => 167,  292 => 142,  280 => 136,  274 => 146,  263 => 127,  236 => 78,  215 => 104,  211 => 70,  207 => 102,  178 => 59,  152 => 51,  333 => 8,  318 => 129,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 93,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 119,  222 => 108,  212 => 95,  206 => 68,  172 => 82,  157 => 125,  369 => 137,  366 => 136,  364 => 135,  361 => 131,  358 => 130,  352 => 128,  342 => 121,  336 => 119,  328 => 116,  324 => 115,  321 => 114,  317 => 159,  307 => 108,  297 => 154,  288 => 106,  275 => 102,  271 => 108,  261 => 98,  233 => 82,  225 => 76,  210 => 70,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 88,  161 => 62,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 91,  262 => 133,  256 => 112,  250 => 85,  231 => 76,  226 => 109,  180 => 80,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 16,  323 => 161,  319 => 111,  311 => 109,  303 => 166,  293 => 159,  286 => 138,  279 => 109,  272 => 133,  265 => 99,  251 => 106,  244 => 131,  237 => 127,  223 => 101,  216 => 73,  202 => 87,  195 => 92,  188 => 88,  181 => 95,  167 => 61,  160 => 49,  146 => 75,  97 => 36,  90 => 19,  83 => 22,  76 => 23,  155 => 61,  153 => 47,  129 => 36,  37 => 4,  70 => 20,  53 => 23,  65 => 13,  139 => 63,  113 => 42,  110 => 31,  104 => 39,  58 => 17,  34 => 3,  190 => 63,  174 => 144,  150 => 52,  134 => 50,  126 => 47,  120 => 73,  84 => 18,  81 => 35,  23 => 2,  118 => 29,  96 => 20,  77 => 19,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 164,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 101,  314 => 99,  312 => 111,  309 => 156,  305 => 95,  298 => 91,  294 => 108,  285 => 105,  283 => 94,  278 => 86,  268 => 107,  264 => 84,  258 => 86,  252 => 121,  247 => 84,  241 => 96,  229 => 98,  220 => 74,  214 => 97,  177 => 80,  169 => 52,  140 => 44,  132 => 49,  128 => 57,  111 => 50,  107 => 36,  61 => 16,  38 => 16,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 79,  235 => 74,  230 => 111,  227 => 105,  224 => 72,  221 => 96,  219 => 74,  217 => 75,  208 => 69,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 29,  71 => 49,  67 => 17,  63 => 13,  59 => 18,  47 => 12,  28 => 3,  29 => 4,  35 => 11,  26 => 12,  43 => 22,  196 => 97,  183 => 61,  171 => 62,  166 => 132,  163 => 69,  158 => 74,  156 => 48,  151 => 60,  142 => 42,  138 => 41,  136 => 56,  123 => 74,  121 => 47,  117 => 50,  115 => 28,  105 => 47,  91 => 24,  69 => 30,  62 => 12,  49 => 13,  101 => 22,  94 => 43,  89 => 36,  85 => 23,  79 => 21,  75 => 20,  68 => 14,  56 => 14,  50 => 13,  87 => 23,  72 => 15,  66 => 14,  55 => 9,  41 => 13,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 22,  46 => 23,  44 => 5,  40 => 5,  32 => 5,  27 => 7,  22 => 2,  209 => 94,  203 => 69,  199 => 65,  193 => 64,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 135,  164 => 77,  162 => 53,  154 => 58,  149 => 46,  147 => 65,  144 => 45,  141 => 59,  133 => 38,  130 => 37,  125 => 35,  122 => 31,  116 => 33,  112 => 42,  109 => 37,  106 => 24,  103 => 23,  99 => 38,  95 => 25,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 31,  64 => 25,  60 => 12,  57 => 16,  54 => 21,  51 => 9,  48 => 8,  45 => 11,  42 => 23,  39 => 10,  36 => 4,  33 => 4,  30 => 3,);
    }
}
