<?php

/* CaravaneOrganicBundle:Offre:pdf.html.twig */
class __TwigTemplate_fa75d82033df1015921bb09e44b0e73baddc50ba9e8941239f0115de706427d8 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Offre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "<br/>
  Zaventem, ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updateDate"), "d/m/Y"), "html", null, true);
        echo "
  <br/>
  <br/>
  ";
        // line 8
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid")) {
            // line 9
            echo "\t  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "firstname"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "lastname"), "html", null, true);
            echo "<br/>
\t  ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "email"), "html", null, true);
            echo "<br/>
\t  ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "phone"), "html", null, true);
            echo "<br/>
\t  ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "mobile"), "html", null, true);
            echo "
\t";
        }
    }

    // line 16
    public function block_documentType($context, array $blocks = array())
    {
        // line 17
        echo "\t
";
    }

    // line 20
    public function block_address($context, array $blocks = array())
    {
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "clientType") == "cie")) {
            // line 22
            echo "\t<b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "name"), "html", null, true);
            echo "</b>
";
        }
        // line 24
        echo "\t<br/>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "clientTitle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "lastname"), "html", null, true);
        echo "
\t<br/>
\t<br/>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "address"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "number"), "html", null, true);
        echo "
\t<br/>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "zip"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "city"), "html", null, true);
        echo "
\t<br/>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "country"), "html", null, true);
        echo "
\t<br/>
\t";
        // line 30
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "vat")) {
            // line 31
            echo "\t<br/>
\t\t<br/>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "vat"), "html", null, true);
            echo "
\t";
        }
    }

    // line 36
    public function block_conditions($context, array $blocks = array())
    {
        // line 37
        echo "\t<tr>
\t\t<td class=\"center 1col\" >
\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_More conditions"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
";
    }

    // line 45
    public function block_page1_body($context, array $blocks = array())
    {
        // line 46
        echo "
<table class=\"grey main\">
\t<tr>
\t\t<td class=\"grey 1col\" style=\"width:185mm;text-align:center\">
\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("Offre de " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreType"))), "html", null, true);
        echo "
\t\t</td>
\t</tr>
</table>
<br/>
<br/>
<b><u>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lieu"), "html", null, true);
        echo "</u></b>
<p>
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


<b><u>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Dates"), "html", null, true);
        echo "</u></b>
";
        // line 66
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eventDate")) {
            echo "<br/> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Event date"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eventDate"), "d/m/Y h:i:s"), "html", null, true);
            echo " ";
        }
        // line 67
        echo "<ul>
";
        // line 68
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plannings")) > 0)) {
            // line 69
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montage"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plannings"), 1, array(), "array"), "startDate"), "d/m/Y H:i:s"), "html", null, true);
            echo "</li>
\t<li>";
            // line 70
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
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Démontage"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plannings"), 3, array(), "array"), "startDate"), "d/m/Y H:i:s"), "html", null, true);
            echo "</li>


";
        } else {
            // line 75
            echo "\t<li>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eventDate"), "d/m/Y H:i:s"), "html", null, true);
            echo "</li>
";
        }
        // line 77
        echo "</ul>
<br/>
<br/>
<b><u>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tente(s)"), "html", null, true);
        echo "</u></b>
<ul>
\t";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 83
            echo "
\t\t";
            // line 84
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid")) {
                // line 85
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "reference"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "name"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "color"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "length"), "html", null, true);
                echo "m x ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "width"), "html", null, true);
                echo "m ";
                if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "m2") > 0)) {
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tentid"), "m2"), "html", null, true);
                    echo "m2
\t\t\t\t";
                }
                // line 87
                echo "\t\t\t</li>
\t\t";
            }
            // line 89
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "</ul>

";
    }

    // line 94
    public function block_page2($context, array $blocks = array())
    {
        // line 95
        echo "
<page backtop=\"30mm\" backbottom=\"30mm\" backleft=\"0mm\" backright=\"0mm\" >
\t";
        // line 97
        $this->displayBlock('page2_body', $context, $blocks);
        // line 300
        echo "</page>

<page backtop=\"0mm\" backbottom=\"0mm\" backleft=\"0mm\" backright=\"0mm\">
\t\t
\t        ";
        // line 304
        $template = $this->env->resolveTemplate((("CaravaneOrganicBundle:Default:cgv." . (isset($context["_locale"]) ? $context["_locale"] : null)) . ".html.twig"));
        $template->display($context);
        // line 305
        echo "\t    
\t</page>


";
    }

    // line 97
    public function block_page2_body($context, array $blocks = array())
    {
        // line 98
        echo "

\t<page_header>
\t\t\t
\t\t\t<table class=\"main\" >
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"2col\">
\t\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["dir"]) ? $context["dir"] : null), "html", null, true);
        echo "/web/bundles/caravaneorganic/images/logo.png\" />
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"2col\" ></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t
\t\t</page_header>
\t\t<page_footer>

\t\t\t
\t\t\t<table class=\"main\">
\t\t\t\t<tr>
\t\t<td class=\"center 1col\" >
\t\t\t";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_More conditions"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"center 1col grey\">
\t\t\t\t\t\tOrganic sa-nv - 71, Ikaroslaan - 1930 Zaventem - Belgium
\t\t\t\t\t\t<br/>
\t\t\t\t\t\twww.organic-concept.com - TVA/BTW: 0807.879.247
\t\t\t\t\t\t<br/>
\t\t\t\t\t\tING - ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compte n°"), "html", null, true);
        echo " : 363-1068056-29 - IBAN : BE26 3631 0680 5629 - SWIFT : BBRUBEBB
\t\t\t<br/>
\t\t\tFortis Bank - ";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compte n°"), "html", null, true);
        echo " : 001-5712962-29 - IBAN : BE26 0015 7129 6229 - SWIFT : GEBABEBB
\t\t\t\t\t\t<br/>
\t\t\t\t\t\tTel 00 32 2 709 09 50 - Fax 00 32 2 709 09 51 - info@organic-concept.com
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t
\t\t</page_footer>








\t<table class=\"grey main\">
\t\t<tr>
\t\t\t<td class=\"grey 1col\" style=\"width:185mm;text-align:center\">
\t\t\t\t";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("Offre de " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreType"))), "html", null, true);
        echo "
\t\t\t</td>
\t\t</tr>
\t</table>
\t<br/>
\t<br/>
\t<b><u>";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Budget(s)"), "html", null, true);
        echo "</u></b>
<br/>
<br/>

\t<table class=\"main\">
\t<thead>
\t\t<tr>
\t\t\t<th class=\"left description\" >";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description"), "html", null, true);
        echo "</th>
\t\t\t<th class='right price' >";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montant HTVA"), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 166
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 167
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "isOption") != 1)) {
                // line 168
                echo "\t\t\t<tr>
\t\t\t\t<td class=\"left description\">";
                // line 169
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true));
                echo "</td>
\t\t\t\t<td class='right' >";
                // line 170
                if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price") > 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), 2, ".", " "), "html", null, true);
                    echo " &euro;";
                }
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            // line 173
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t<tr>
\t\t\t<th>&nbsp;</th>
\t\t\t<th>&nbsp;</th>
\t\t</tr>
\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class='right'>";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total VAT excl."), "html", null, true);
        echo "</td>
\t\t\t<td class='right' ><b>
\t\t\t\t";
        // line 183
        $context["total"] = 0;
        // line 184
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 185
            echo "                \t";
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "isOption") != 1)) {
                // line 186
                echo "                    \t";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "price"));
                // line 187
                echo "                    ";
            }
            // line 188
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ",", " "), "html", null, true);
        echo "  &euro;
            </b>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class='right' >";
        // line 194
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
            echo " (21%)";
        }
        echo "</td>
\t\t\t<td class='right' > ";
        // line 195
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
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total"), "html", null, true);
        echo " ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT incl."), "html", null, true);
            echo " ";
        }
        // line 200
        echo "\t\t\t</td>
\t\t\t<td class='grey right' ><b>
\t\t\t\t";
        // line 202
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") == "intra")) {
            // line 203
            echo "                    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ".", " "), "html", null, true);
            echo "
                ";
        } else {
            // line 205
            echo "                    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) ? $context["total"] : null) + (0.21 * (isset($context["total"]) ? $context["total"] : null))), 2, ".", " "), "html", null, true);
            echo "
                ";
        }
        // line 207
        echo "                  &euro;</b>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<br/>
<br/>
<b><u>";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Options"), "html", null, true);
        echo "</u></b>
<br/>
<br/>
\t

\t<table class=\"main\">
\t<thead>
\t\t<tr>
\t\t\t<th class=\"left description\" >";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description"), "html", null, true);
        echo "</th>
\t\t\t<th class='right price' >";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montant HTVA"), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t";
        // line 226
        $context["hasOption"] = false;
        // line 227
        echo "\t<tbody>
\t\t";
        // line 228
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 229
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "isOption") == 1)) {
                // line 230
                echo "\t\t\t";
                $context["hasOption"] = true;
                // line 231
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"left description\">";
                // line 232
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true));
                echo "</td>
\t\t\t\t\t<td class='right' >";
                // line 233
                if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price") > 0)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), 2, ".", " "), "html", null, true);
                    echo " &euro;";
                }
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 236
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "\t\t
\t</tbody>
</table>

<br/><br/>
<br/>
<b><u>";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conditions"), "html", null, true);
        echo "</u></b>
<br/>
<ul>
\t";
        // line 246
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slices"));
        foreach ($context['_seq'] as $context["_key"] => $context["slice"]) {
            // line 247
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "comments"), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "</ul>

<br/>
<p>




";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Une assurance est à votre charge durant votre location"), "html", null, true);
        echo ".<br/><br/>
<b>";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nos prix s'entendent hors TVA"), "html", null, true);
        echo "</b><br/>
";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Validité de cette offre"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "validity")) ? ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "validity")) : ("14")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("jours date de l'offre"), "html", null, true);
        echo "
</p>


<br/>

\t\t\t<table class=\" main \">
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"width:60mm\"  >
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:120mm;text-align:right\" class=\" borderedBottom\" >
\t\t\t\t\t\t";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("BON POUR ACCORD"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"height:30mm;\"  >
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sincères salutations"), "html", null, true);
        echo ",<br/><br/>
\t\t\t\t\t\t\t";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "lastname"), "html", null, true);
        echo "<br/>
\t\t\t\t\t\t\t ";
        // line 280
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "email"), "html", null, true);
        echo "<br/>
\t\t\t\t\t\t\t";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "phone"), "html", null, true);
        echo "<br/>
\t\t\t\t\t\t\t";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "mobile"), "html", null, true);
        echo "

\t\t\t\t\t\t\t</p>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"height:30mm;border:1px solid #333\" >
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Offre"), "html", null, true);
        echo ": <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "</b><br/>
\t\t\t\t\t\t";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total"), "html", null, true);
        echo ": <b>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ".", " "), "html", null, true);
        echo " &euro; ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("HTVA"), "html", null, true);
        echo "</b>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
        // line 291
        if ((isset($context["hasOption"]) ? $context["hasOption"] : null)) {
            // line 292
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total options"), "html", null, true);
            echo ":
\t\t\t\t\t\t";
        }
        // line 294
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>


\t";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Offre:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 189,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 75,  218 => 70,  186 => 60,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  456 => 211,  450 => 174,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  363 => 165,  320 => 138,  310 => 130,  257 => 105,  213 => 83,  200 => 73,  316 => 305,  304 => 128,  148 => 52,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  399 => 140,  388 => 175,  370 => 132,  359 => 164,  348 => 123,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 224,  477 => 187,  466 => 184,  460 => 220,  452 => 219,  429 => 199,  425 => 167,  421 => 166,  417 => 151,  403 => 191,  397 => 188,  385 => 136,  373 => 169,  367 => 173,  338 => 156,  313 => 304,  302 => 136,  282 => 87,  205 => 93,  192 => 85,  185 => 81,  482 => 223,  478 => 221,  475 => 171,  470 => 225,  468 => 171,  465 => 170,  462 => 212,  454 => 163,  448 => 161,  446 => 160,  428 => 168,  424 => 155,  420 => 154,  401 => 147,  391 => 148,  389 => 186,  386 => 143,  383 => 173,  380 => 141,  377 => 170,  375 => 139,  353 => 125,  350 => 162,  347 => 123,  345 => 122,  340 => 120,  330 => 118,  326 => 114,  306 => 102,  300 => 100,  201 => 92,  194 => 65,  114 => 58,  299 => 155,  289 => 158,  266 => 119,  249 => 83,  242 => 101,  228 => 124,  411 => 219,  408 => 218,  351 => 178,  343 => 173,  331 => 146,  292 => 90,  280 => 94,  274 => 146,  263 => 127,  236 => 114,  215 => 104,  211 => 69,  207 => 102,  178 => 84,  152 => 64,  333 => 119,  318 => 112,  308 => 109,  296 => 125,  290 => 104,  287 => 148,  281 => 117,  276 => 140,  270 => 138,  267 => 137,  259 => 83,  255 => 82,  248 => 103,  245 => 77,  222 => 88,  212 => 114,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 166,  364 => 127,  361 => 170,  358 => 130,  352 => 118,  342 => 120,  336 => 105,  328 => 117,  324 => 97,  321 => 114,  317 => 159,  307 => 300,  297 => 106,  288 => 122,  275 => 116,  271 => 96,  261 => 117,  233 => 78,  225 => 76,  210 => 115,  198 => 66,  191 => 71,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 31,  137 => 57,  301 => 95,  291 => 126,  277 => 121,  262 => 84,  256 => 92,  250 => 80,  231 => 77,  226 => 109,  180 => 59,  175 => 67,  165 => 63,  145 => 63,  100 => 32,  74 => 31,  323 => 161,  319 => 112,  311 => 157,  303 => 166,  293 => 105,  286 => 89,  279 => 151,  272 => 147,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 68,  167 => 87,  160 => 50,  146 => 75,  97 => 44,  90 => 36,  83 => 30,  76 => 16,  155 => 61,  153 => 79,  129 => 55,  37 => 4,  70 => 24,  53 => 21,  65 => 11,  139 => 37,  113 => 48,  110 => 38,  104 => 51,  58 => 25,  34 => 3,  190 => 104,  174 => 58,  150 => 7,  134 => 57,  126 => 61,  120 => 73,  84 => 20,  81 => 37,  23 => 2,  118 => 41,  96 => 38,  77 => 29,  52 => 8,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 173,  440 => 206,  437 => 158,  435 => 170,  430 => 157,  427 => 195,  423 => 142,  413 => 195,  409 => 146,  407 => 192,  402 => 130,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 151,  314 => 99,  312 => 172,  309 => 169,  305 => 97,  298 => 94,  294 => 98,  285 => 105,  283 => 104,  278 => 86,  268 => 95,  264 => 85,  258 => 139,  252 => 121,  247 => 82,  241 => 96,  229 => 102,  220 => 119,  214 => 97,  177 => 69,  169 => 56,  140 => 45,  132 => 47,  128 => 54,  111 => 27,  107 => 24,  61 => 10,  38 => 10,  273 => 119,  269 => 113,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 99,  230 => 71,  227 => 75,  224 => 100,  221 => 123,  219 => 122,  217 => 85,  208 => 94,  204 => 68,  179 => 69,  159 => 68,  143 => 39,  135 => 58,  131 => 72,  119 => 51,  108 => 55,  102 => 36,  71 => 30,  67 => 25,  63 => 14,  59 => 23,  47 => 20,  28 => 5,  29 => 4,  35 => 14,  26 => 3,  43 => 18,  196 => 66,  183 => 81,  171 => 77,  166 => 62,  163 => 69,  158 => 72,  156 => 55,  151 => 45,  142 => 75,  138 => 48,  136 => 36,  123 => 69,  121 => 47,  117 => 28,  115 => 50,  105 => 26,  91 => 32,  69 => 12,  62 => 23,  49 => 19,  101 => 45,  94 => 33,  89 => 22,  85 => 35,  79 => 17,  75 => 21,  68 => 18,  56 => 22,  50 => 15,  87 => 21,  72 => 27,  66 => 25,  55 => 20,  41 => 21,  31 => 8,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 37,  88 => 33,  78 => 32,  46 => 23,  44 => 5,  40 => 8,  32 => 6,  27 => 7,  22 => 2,  209 => 68,  203 => 69,  199 => 73,  193 => 68,  189 => 63,  187 => 103,  182 => 85,  176 => 66,  173 => 65,  168 => 66,  164 => 51,  162 => 54,  154 => 46,  149 => 63,  147 => 47,  144 => 46,  141 => 58,  133 => 56,  130 => 49,  125 => 54,  122 => 30,  116 => 50,  112 => 39,  109 => 47,  106 => 37,  103 => 37,  99 => 39,  95 => 24,  92 => 38,  86 => 21,  82 => 27,  80 => 31,  73 => 29,  64 => 28,  60 => 16,  57 => 19,  54 => 9,  51 => 21,  48 => 23,  45 => 22,  42 => 15,  39 => 16,  36 => 7,  33 => 13,  30 => 4,);
    }
}
