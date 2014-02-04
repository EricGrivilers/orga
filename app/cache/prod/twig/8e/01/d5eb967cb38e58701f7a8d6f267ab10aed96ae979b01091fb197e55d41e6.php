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
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") < 0)) {
            // line 10
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Note de crédit"), "html", null, true);
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "creditNote")) ? ((" / " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "creditNote"))) : ("")), "html", null, true);
            echo "
\t";
        } else {
            // line 12
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("Facture de " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreType"))), "html", null, true);
            echo "
\t";
        }
    }

    // line 16
    public function block_address($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientType") == "cie")) {
            // line 18
            echo "\t\t<b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
            echo "</b>
\t";
        }
        // line 20
        echo "\t<br/>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientTitle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastname"), "html", null, true);
        echo "
\t<br/>
\t<br/>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "number"), "html", null, true);
        echo "
\t<br/>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "zip"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "city"), "html", null, true);
        echo "
\t<br/>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country"), "html", null, true);
        echo "
\t<br/>
\t";
        // line 26
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vat")) {
            // line 27
            echo "\t<br/>
\t\t<br/>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vat"), "html", null, true);
            echo "
\t";
        }
    }

    // line 32
    public function block_conditions($context, array $blocks = array())
    {
        // line 33
        echo "\t<tr>
\t\t<td class=\"center 1col\" >
\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_More conditions"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
";
    }

    // line 41
    public function block_page1_body($context, array $blocks = array())
    {
        // line 42
        echo "<table class=\"main\">
\t<thead>
\t\t<tr>
\t\t\t<th class=\"left description\" >";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description"), "html", null, true);
        echo "</th>
\t\t\t<th class='right price' >";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montant HTVA"), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"left description\">";
            // line 52
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true));
            echo "</td>
\t\t\t\t<td class='right' >";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), 2, ".", " "), "html", null, true);
            echo " &euro;</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t<tr>
\t\t\t<th>&nbsp;</th>
\t\t\t<th>&nbsp;</th>
\t\t</tr>
\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class='right'>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total VAT excl."), "html", null, true);
        echo "</td>
\t\t\t<td class='right' >
\t\t\t\t";
        // line 65
        $context["total"] = 0;
        // line 66
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 67
            echo "                    ";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "price"));
            // line 68
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ",", " "), "html", null, true);
        echo "  &euro;
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 72
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discount")) {
            // line 73
            echo "\t\t<tr>
\t\t\t<td class='right'>";
            // line 74
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
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discount"), "html", null, true);
            echo "%</b>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class='right'>";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total VAT excl."), "html", null, true);
            echo "</td>
\t\t\t<td class='right' >
\t\t\t\t";
            // line 82
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) - ((isset($context["total"]) ? $context["total"] : null) * ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discount") / 100)));
            // line 83
            echo "\t\t\t\t ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ",", " "), "html", null, true);
            echo "  &euro;
\t\t\t</td>
\t\t</tr>

\t\t";
        }
        // line 88
        echo "\t\t<tr>
\t\t\t<td class='right' >";
        // line 89
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
            echo " (21%)";
        }
        echo "</td>
\t\t\t<td class='right' > ";
        // line 90
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
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total"), "html", null, true);
        echo " ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT incl."), "html", null, true);
            echo " ";
        }
        // line 95
        echo "\t\t\t</td>
\t\t\t<td class='grey right' >
\t\t\t\t";
        // line 97
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") == "intra")) {
            // line 98
            echo "                    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ".", " "), "html", null, true);
            echo "
                ";
        } else {
            // line 100
            echo "                    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) ? $context["total"] : null) + (0.21 * (isset($context["total"]) ? $context["total"] : null))), 2, ".", " "), "html", null, true);
            echo "
                ";
        }
        // line 102
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
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sliceDescription"), "html", null, true);
        echo "</td>
            <td style=\"width:20mm\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slice"), "html", null, true);
        echo "%</td>
            <td class='right price' style=\"width:30mm\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total VAT excl."), "html", null, true);
        echo "</td>
            <td class='right price' >";
        // line 115
        $context["TotalHT"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHt");
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceht"), 2, ".", " "), "html", null, true);
        echo " &euro;</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td class='right'>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
        echo "</td>
            <td class='right price'>
                ";
        // line 122
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") == "intra")) {
            // line 123
            echo "                \t<i>intra</i> ";
            $context["VAT"] = 0;
            // line 124
            echo "                ";
        } else {
            // line 125
            echo "                \t";
            $context["VAT"] = ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHt") * 0.21);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["VAT"]) ? $context["VAT"] : null), 2, ".", " "), "html", null, true);
            echo " &euro;
                ";
        }
        // line 127
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
        // line 139
        $context["ToPay"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT");
        // line 140
        echo "\t        ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            // line 141
            echo "\t            ";
            $context["ToPay"] = ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") + ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") * 0.21));
            // line 142
            echo "\t        ";
        }
        // line 143
        echo "
\t        ";
        // line 144
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") < 0)) {
            // line 145
            echo "\t        <b>Total";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT incl."), "html", null, true);
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ToPay"]) ? $context["ToPay"] : null), 2, ".", " "), "html", null, true);
            echo " &euro;</b>
\t        ";
        } else {
            // line 147
            echo "\t       <b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montant total à payer"), "html", null, true);
            echo "  ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT incl."), "html", null, true);
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ToPay"]) ? $context["ToPay"] : null), 2, ".", " "), "html", null, true);
            echo " &euro;</b>
\t       ";
        }
        // line 149
        echo "\t\t</td>
\t</tr>
</table>
<br/>
<br/>
<b><u>";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions"), "html", null, true);
        echo "</u></b><br/>
";
        // line 155
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions");
        echo "
";
        // line 156
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions1")) {
            // line 157
            echo "\t<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions de paiement"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comptant."), "html", null, true);
            echo "
\t<br/>";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Communication à mentionner"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Facture"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
            echo "</b>
";
        }
        // line 160
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions2")) {
            // line 161
            echo "\t<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Le paiement de votre acompte confirme votre commande"), "html", null, true);
            echo ".
";
        }
        // line 163
        echo "<br/><br/>



";
    }

    // line 169
    public function block_page2($context, array $blocks = array())
    {
        // line 170
        echo "\t<page backtop=\"0mm\" backbottom=\"0mm\" backleft=\"0mm\" backright=\"0mm\">
\t\t";
        // line 171
        $this->displayBlock('page2_body', $context, $blocks);
        // line 174
        echo "\t</page>
";
    }

    // line 171
    public function block_page2_body($context, array $blocks = array())
    {
        // line 172
        echo "\t        ";
        $template = $this->env->resolveTemplate((("CaravaneOrganicBundle:Default:cgv." . (isset($context["_locale"]) ? $context["_locale"] : null)) . ".html.twig"));
        $template->display($context);
        // line 173
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
        return array (  482 => 173,  478 => 172,  475 => 171,  470 => 174,  468 => 171,  465 => 170,  462 => 169,  454 => 163,  448 => 161,  446 => 160,  428 => 156,  424 => 155,  420 => 154,  401 => 147,  391 => 145,  389 => 144,  386 => 143,  383 => 142,  380 => 141,  377 => 140,  375 => 139,  353 => 125,  350 => 124,  347 => 123,  345 => 122,  340 => 120,  330 => 115,  326 => 114,  306 => 102,  300 => 100,  201 => 67,  194 => 65,  114 => 27,  299 => 155,  289 => 148,  266 => 92,  249 => 83,  242 => 80,  228 => 76,  411 => 219,  408 => 218,  351 => 178,  343 => 173,  331 => 167,  292 => 97,  280 => 94,  274 => 146,  263 => 127,  236 => 114,  215 => 104,  211 => 103,  207 => 102,  178 => 67,  152 => 51,  333 => 8,  318 => 112,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 119,  222 => 74,  212 => 95,  206 => 100,  172 => 82,  157 => 125,  369 => 134,  366 => 133,  364 => 132,  361 => 127,  358 => 130,  352 => 128,  342 => 120,  336 => 9,  328 => 116,  324 => 115,  321 => 114,  317 => 159,  307 => 110,  297 => 154,  288 => 95,  275 => 102,  271 => 108,  261 => 89,  233 => 82,  225 => 76,  210 => 69,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 88,  161 => 62,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 133,  256 => 112,  250 => 93,  231 => 77,  226 => 109,  180 => 56,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 29,  323 => 161,  319 => 176,  311 => 157,  303 => 166,  293 => 159,  286 => 138,  279 => 109,  272 => 133,  265 => 99,  251 => 106,  244 => 131,  237 => 127,  223 => 101,  216 => 73,  202 => 87,  195 => 92,  188 => 88,  181 => 95,  167 => 52,  160 => 50,  146 => 75,  97 => 36,  90 => 43,  83 => 22,  76 => 17,  155 => 61,  153 => 46,  129 => 33,  37 => 4,  70 => 20,  53 => 23,  65 => 12,  139 => 63,  113 => 42,  110 => 31,  104 => 39,  58 => 10,  34 => 3,  190 => 73,  174 => 144,  150 => 52,  134 => 50,  126 => 32,  120 => 73,  84 => 33,  81 => 35,  23 => 2,  118 => 43,  96 => 36,  77 => 19,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 158,  435 => 146,  430 => 157,  427 => 143,  423 => 142,  413 => 149,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 113,  314 => 99,  312 => 111,  309 => 156,  305 => 95,  298 => 91,  294 => 98,  285 => 105,  283 => 104,  278 => 86,  268 => 107,  264 => 84,  258 => 88,  252 => 121,  247 => 82,  241 => 96,  229 => 98,  220 => 74,  214 => 97,  177 => 80,  169 => 64,  140 => 44,  132 => 49,  128 => 57,  111 => 50,  107 => 24,  61 => 16,  38 => 16,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 95,  235 => 76,  230 => 111,  227 => 105,  224 => 75,  221 => 96,  219 => 73,  217 => 72,  208 => 68,  204 => 68,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 29,  71 => 49,  67 => 17,  63 => 13,  59 => 18,  47 => 12,  28 => 3,  29 => 4,  35 => 11,  26 => 12,  43 => 22,  196 => 66,  183 => 81,  171 => 53,  166 => 132,  163 => 69,  158 => 74,  156 => 52,  151 => 60,  142 => 64,  138 => 93,  136 => 56,  123 => 74,  121 => 47,  117 => 28,  115 => 45,  105 => 47,  91 => 24,  69 => 30,  62 => 28,  49 => 13,  101 => 23,  94 => 43,  89 => 36,  85 => 20,  79 => 18,  75 => 20,  68 => 19,  56 => 14,  50 => 13,  87 => 23,  72 => 15,  66 => 14,  55 => 9,  41 => 13,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 22,  46 => 23,  44 => 5,  40 => 5,  32 => 5,  27 => 7,  22 => 2,  209 => 94,  203 => 69,  199 => 67,  193 => 68,  189 => 63,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 135,  164 => 51,  162 => 53,  154 => 58,  149 => 45,  147 => 65,  144 => 42,  141 => 41,  133 => 35,  130 => 49,  125 => 35,  122 => 34,  116 => 33,  112 => 26,  109 => 37,  106 => 30,  103 => 33,  99 => 38,  95 => 22,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 16,  64 => 25,  60 => 12,  57 => 16,  54 => 21,  51 => 9,  48 => 8,  45 => 11,  42 => 23,  39 => 10,  36 => 4,  33 => 4,  30 => 3,);
    }
}
