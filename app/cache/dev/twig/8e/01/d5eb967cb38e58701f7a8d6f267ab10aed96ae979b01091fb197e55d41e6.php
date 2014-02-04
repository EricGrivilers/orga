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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
        echo "<br/>
  Zaventem, ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "invoiceDate"), "d/m/Y"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_documentType($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceHT") < 0)) {
            // line 10
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Note de crédit"), "html", null, true);
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creditNote")) ? ((" / " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creditNote"))) : ("")), "html", null, true);
            echo "
\t";
        } else {
            // line 12
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("Facture de " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "offreType"))), "html", null, true);
            echo "
\t";
        }
    }

    // line 16
    public function block_address($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientType") == "cie")) {
            // line 18
            echo "\t\t<b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</b>
\t";
        }
        // line 20
        echo "\t<br/>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientTitle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname"), "html", null, true);
        echo "
\t<br/>
\t<br/>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "number"), "html", null, true);
        echo "
\t<br/>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zip"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"), "html", null, true);
        echo "
\t<br/>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
        echo "
\t<br/>
\t";
        // line 26
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vat")) {
            // line 27
            echo "\t<br/>
\t\t<br/>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vat"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"left description\">";
            // line 52
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), "html", null, true));
            echo "</td>
\t\t\t\t<td class='right' >";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), 2, ".", " "), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 67
            echo "                    ";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "price"));
            // line 68
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 2, ",", " "), "html", null, true);
        echo "  &euro;
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 72
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discount")) {
            // line 73
            echo "\t\t<tr>
\t\t\t<td class='right'>";
            // line 74
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discountDescription")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discountDescription"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discount"), "html", null, true);
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
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) - ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) * ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discount") / 100)));
            // line 83
            echo "\t\t\t\t ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 2, ",", " "), "html", null, true);
            echo "  &euro;
\t\t\t</td>
\t\t</tr>

\t\t";
        }
        // line 88
        echo "\t\t<tr>
\t\t\t<td class='right' >";
        // line 89
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
            echo " (21%)";
        }
        echo "</td>
\t\t\t<td class='right' > ";
        // line 90
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (0.21 * (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))), 2, ".", " "), "html", null, true);
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
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT incl."), "html", null, true);
            echo " ";
        }
        // line 95
        echo "\t\t\t</td>
\t\t\t<td class='grey right' >
\t\t\t\t";
        // line 97
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricetype") == "intra")) {
            // line 98
            echo "                    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 2, ".", " "), "html", null, true);
            echo "
                ";
        } else {
            // line 100
            echo "                    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + (0.21 * (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")))), 2, ".", " "), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sliceDescription"), "html", null, true);
        echo "</td>
            <td style=\"width:20mm\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slice"), "html", null, true);
        echo "%</td>
            <td class='right price' style=\"width:30mm\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total VAT excl."), "html", null, true);
        echo "</td>
            <td class='right price' >";
        // line 115
        $context["TotalHT"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceHt");
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceht"), 2, ".", " "), "html", null, true);
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
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricetype") == "intra")) {
            // line 123
            echo "                \t<i>intra</i> ";
            $context["VAT"] = 0;
            // line 124
            echo "                ";
        } else {
            // line 125
            echo "                \t";
            $context["VAT"] = ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceHt") * 0.21);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["VAT"]) ? $context["VAT"] : $this->getContext($context, "VAT")), 2, ".", " "), "html", null, true);
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
        $context["ToPay"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceHT");
        // line 140
        echo "\t        ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricetype") != "intra")) {
            // line 141
            echo "\t            ";
            $context["ToPay"] = ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceHT") + ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceHT") * 0.21));
            // line 142
            echo "\t        ";
        }
        // line 143
        echo "
\t        ";
        // line 144
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceHT") < 0)) {
            // line 145
            echo "\t        <b>Total";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricetype") != "intra")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT incl."), "html", null, true);
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ToPay"]) ? $context["ToPay"] : $this->getContext($context, "ToPay")), 2, ".", " "), "html", null, true);
            echo " &euro;</b>
\t        ";
        } else {
            // line 147
            echo "\t       <b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montant total à payer"), "html", null, true);
            echo "  ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricetype") != "intra")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT incl."), "html", null, true);
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ToPay"]) ? $context["ToPay"] : $this->getContext($context, "ToPay")), 2, ".", " "), "html", null, true);
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
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conditions");
        echo "
";
        // line 156
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conditions1")) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
            echo "</b>
";
        }
        // line 160
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conditions2")) {
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
        $template = $this->env->resolveTemplate((("CaravaneOrganicBundle:Default:cgv." . (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale"))) . ".html.twig"));
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
        return array (  482 => 173,  478 => 172,  475 => 171,  470 => 174,  468 => 171,  465 => 170,  462 => 169,  454 => 163,  448 => 161,  446 => 160,  437 => 158,  430 => 157,  428 => 156,  424 => 155,  420 => 154,  413 => 149,  401 => 147,  391 => 145,  389 => 144,  386 => 143,  383 => 142,  380 => 141,  377 => 140,  375 => 139,  361 => 127,  353 => 125,  350 => 124,  347 => 123,  345 => 122,  340 => 120,  330 => 115,  326 => 114,  322 => 113,  318 => 112,  306 => 102,  300 => 100,  294 => 98,  292 => 97,  288 => 95,  280 => 94,  269 => 90,  261 => 89,  258 => 88,  249 => 83,  247 => 82,  242 => 80,  235 => 76,  222 => 74,  219 => 73,  217 => 72,  210 => 69,  204 => 68,  201 => 67,  196 => 66,  194 => 65,  189 => 63,  180 => 56,  171 => 53,  167 => 52,  164 => 51,  160 => 50,  153 => 46,  149 => 45,  144 => 42,  141 => 41,  133 => 35,  129 => 33,  126 => 32,  117 => 28,  114 => 27,  112 => 26,  107 => 24,  101 => 23,  95 => 22,  85 => 20,  79 => 18,  76 => 17,  73 => 16,  65 => 12,  58 => 10,  55 => 9,  52 => 8,  44 => 5,  37 => 4,  34 => 3,);
    }
}
