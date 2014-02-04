<?php

/* CaravaneOrganicBundle:Job:bon.html.twig */
class __TwigTemplate_8828817f2aeb7686085d0cf2e0f36cd5ed47d35e9173872d33ae01d9f31afb05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<page backtop=\"30mm\" backbottom=\"30mm\" backleft=\"0mm\" backright=\"0mm\" >
\t\t<page_header>
\t\t\t\t
\t\t\t\t<table class=\"main\" >
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"2col\">
\t\t\t\t\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["dir"]) ? $context["dir"] : null), "html", null, true);
        echo "/web/bundles/caravaneorganic/images/logo.png\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"2col\" >
\t\t\t\t\t\t\t";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "clientType") == "cie")) {
            // line 11
            echo "\t\t\t\t\t\t\t\t<b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "name"), "html", null, true);
            echo "</b>
\t\t\t\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t\t\t\t\t<br/>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "clientTitle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "lastname"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<br/>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "address"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "number"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<br/>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "zip"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "city"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<br/>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "country"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "vat")) {
            // line 20
            echo "\t\t\t\t\t\t\t\t<br/><br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("VAT"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "vat"), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t
\t\t\t</page_header>
\t\t\t<page_footer>
\t\t\t\t<table class=\"main\">
\t\t\t\t\t<tr><td class=\"center\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_More conditions"), "html", null, true);
        echo "<br/></td></tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"center 1col grey\">
\t\t\t\t\t\t\tOrganic sa-nv - 71, Ikaroslaan - 1930 Zaventem - Belgium
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\twww.organic-concept.com - TVA/BTW: 0807.879.247
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\tING - ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compte n°"), "html", null, true);
        echo " : 363-1068056-29 - IBAN : BE26 3631 0680 5629 - SWIFT : BBRUBEBB
\t\t\t<br/>
\t\t\tFortis Bank - ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Compte n°"), "html", null, true);
        echo " : 001-5712962-29 - IBAN : BE26 0015 7129 6229 - SWIFT : GEBABEBB
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\tTel 00 32 2 709 09 50 - Fax 00 32 2 709 09 51 - info@organic-concept.com
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</page_footer>


\t\t\t<table class=\"grey main\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"grey 1col\" style=\"width:185mm;text-align:center\"><b>
\t\t\t\t\t";
        // line 50
        if (((isset($context["type"]) ? $context["type"] : null) == "in")) {
            // line 51
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("BON DE LIVRAISON"), "html", null, true);
            echo "
\t\t\t\t\t";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "out")) {
            // line 53
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("BON DE COLLECTION"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t</b></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<br/>


\t\t\t<table class=\"grey main\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"grey 1col\" style=\"width:185mm;text-align:center\">
\t\t\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("A RAPPELER LORS DE LA FACTURATION"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table class=\" main bordered\">
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"width:58mm\" class=\"borderedRight borderedBottom\" >
\t\t\t\t\t\t";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("DATE"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:58mm\" class=\"borderedRight borderedBottom\">
\t\t\t\t\t\t";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("OFFRE reference"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:59mm\" class=\"borderedBottom\">
\t\t\t\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("JOB reference"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"borderedRight\" >
\t\t\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "insertdate"), "d/m/Y H:i:s"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td  class=\"borderedRight\" >
\t\t\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreid")) ? ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreid"), "reference")) : ("")), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>


\t\t\t<br/>
\t\t\t<br/>

\t\t\t";
        // line 97
        $context["total"] = 0;
        // line 98
        echo "\t\t\t<table class=\"main\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th style=\"width:95mm\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th style=\"width:25mm\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Quantité"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th style=\"width:25mm\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Prix unitaire"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th style=\"width:25mm\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total"), "html", null, true);
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 109
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"width:95mm\" class=\"borderedBottomLight\" >";
            // line 111
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true));
            echo "</td>
\t\t\t\t\t\t\t\t<td style=\"width:25mm\" class=\"borderedBottomLight\" ></td>
\t\t\t\t\t\t\t\t<td style=\"width:25mm\" class=\"right borderedBottomLight\" ></td>
\t\t\t\t\t\t\t\t<td style=\"width:25mm\" class=\"right borderedBottomLight\" > ";
            // line 114
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), 2, ".", " "), "html", null, true);
            echo " &euro;</td>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            // line 118
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"));
            // line 119
            echo "\t\t\t\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"width:95mm\"></td>
\t\t\t\t\t\t<td style=\"width:25mm\" ></td>
\t\t\t\t\t\t<th style=\"width:25mm\" >";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total VAT incl."), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th style=\"width:25mm\" class=\"right\" >";
        // line 127
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ".", " "), "html", null, true);
        echo " &euro;</th>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>

\t\t\t<br/>
\t\t\t";
        // line 133
        if (((isset($context["type"]) ? $context["type"] : null) == "in")) {
            // line 134
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_JobConfirmIn"), "html", null, true);
            echo "
\t\t\t";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "out")) {
            // line 136
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("_JobConfirmOut"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 138
        echo "
\t\t\t
<br/>
<br/>
\t\t\t<b><u>";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("REMARQUES"), "html", null, true);
        echo "</u></b>
\t\t\t<br/>
\t\t\t<table class=\"main\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"col1\" style=\"width:185mm; height:20mm; border:1px solid #333\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t\t\t<br/>
\t\t\t<br/>
\t\t\t<table class=\"grey main\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"grey 1col\" style=\"width:185mm;text-align:center\">
\t\t\t\t\t\t";
        // line 156
        if (((isset($context["type"]) ? $context["type"] : null) == "in")) {
            // line 157
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LIVRAISON"), "html", null, true);
            echo "
\t\t\t\t\t\t";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "out")) {
            // line 159
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("COLLECTE"), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 161
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table class=\" main bordered\">
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"width:74mm\" class=\"borderedRight borderedBottom\" >
\t\t\t\t\t\t";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ADRESSE"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:50mm\" class=\"borderedRight borderedBottom\" >
\t\t\t\t\t\t";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("DATE"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:51mm\" class=\"borderedBottom\"  >
\t\t\t\t\t\t";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("HEURE"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td  style=\"width:74mm\" class=\"borderedRight\" >
\t\t\t\t\t\t";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "number"), "html", null, true);
        echo " <br/> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "zip"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "city"), "html", null, true);
        echo " <br/> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:30mm\" class=\"borderedRight\" >
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:30mm\" >
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t\t\t<br/>
\t\t\t<br/>
\t\t\t
\t\t\t<br/>

\t\t\t<table class=\" main bordered\">
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"width:90mm\" class=\"borderedRight borderedBottom\" >
\t\t\t\t\t\t";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NOM ET SIGNATURE DU VENDEUR"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:90mm\" class=\" borderedBottom\" >
\t\t\t\t\t\t";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NOM ET SIGNATURE DE L'ACHETEUR"), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"height:20mm\" class=\"borderedRight\" >
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"height:20mm\" >
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t</page>

\t<page backtop=\"0mm\" backbottom=\"0mm\" backleft=\"0mm\" backright=\"0mm\">
\t\t
\t        ";
        // line 218
        $template = $this->env->resolveTemplate((("CaravaneOrganicBundle:Default:cgv." . (isset($context["_locale"]) ? $context["_locale"] : null)) . ".html.twig"));
        $template->display($context);
        // line 219
        echo "\t    
\t</page>";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job:bon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 219,  408 => 218,  351 => 178,  343 => 173,  331 => 167,  292 => 142,  280 => 136,  274 => 134,  263 => 127,  236 => 114,  215 => 104,  211 => 103,  207 => 102,  178 => 85,  152 => 71,  333 => 8,  318 => 129,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 119,  222 => 108,  212 => 95,  206 => 100,  172 => 82,  157 => 125,  369 => 134,  366 => 133,  364 => 132,  361 => 131,  358 => 130,  352 => 128,  342 => 120,  336 => 9,  328 => 116,  324 => 115,  321 => 114,  317 => 159,  307 => 110,  297 => 109,  288 => 106,  275 => 102,  271 => 108,  261 => 98,  233 => 82,  225 => 76,  210 => 70,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 88,  161 => 60,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 133,  256 => 112,  250 => 93,  231 => 99,  226 => 109,  180 => 80,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 29,  323 => 161,  319 => 176,  311 => 157,  303 => 166,  293 => 159,  286 => 138,  279 => 109,  272 => 133,  265 => 99,  251 => 106,  244 => 131,  237 => 127,  223 => 101,  216 => 115,  202 => 87,  195 => 92,  188 => 88,  181 => 95,  167 => 61,  160 => 83,  146 => 75,  97 => 36,  90 => 43,  83 => 35,  76 => 23,  155 => 67,  153 => 56,  129 => 56,  37 => 8,  70 => 20,  53 => 23,  65 => 19,  139 => 63,  113 => 42,  110 => 43,  104 => 39,  58 => 17,  34 => 14,  190 => 73,  174 => 144,  150 => 52,  134 => 50,  126 => 47,  120 => 73,  84 => 33,  81 => 35,  23 => 3,  118 => 43,  96 => 36,  77 => 19,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 101,  314 => 99,  312 => 111,  309 => 156,  305 => 95,  298 => 91,  294 => 108,  285 => 105,  283 => 104,  278 => 86,  268 => 107,  264 => 84,  258 => 139,  252 => 121,  247 => 78,  241 => 96,  229 => 98,  220 => 70,  214 => 97,  177 => 80,  169 => 60,  140 => 112,  132 => 49,  128 => 49,  111 => 50,  107 => 36,  61 => 11,  38 => 16,  273 => 119,  269 => 118,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 95,  235 => 74,  230 => 111,  227 => 105,  224 => 71,  221 => 96,  219 => 74,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 62,  131 => 55,  119 => 51,  108 => 55,  102 => 38,  71 => 49,  67 => 15,  63 => 17,  59 => 18,  47 => 12,  28 => 5,  29 => 4,  35 => 11,  26 => 12,  43 => 22,  196 => 97,  183 => 81,  171 => 62,  166 => 132,  163 => 69,  158 => 74,  156 => 58,  151 => 66,  142 => 64,  138 => 93,  136 => 56,  123 => 74,  121 => 47,  117 => 50,  115 => 45,  105 => 47,  91 => 42,  69 => 30,  62 => 28,  49 => 13,  101 => 46,  94 => 43,  89 => 36,  85 => 23,  79 => 31,  75 => 32,  68 => 19,  56 => 9,  50 => 10,  87 => 29,  72 => 15,  66 => 14,  55 => 22,  41 => 13,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 22,  46 => 23,  44 => 1,  40 => 148,  32 => 5,  27 => 7,  22 => 2,  209 => 94,  203 => 101,  199 => 67,  193 => 86,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 135,  164 => 77,  162 => 59,  154 => 58,  149 => 119,  147 => 65,  144 => 118,  141 => 50,  133 => 90,  130 => 49,  125 => 53,  122 => 47,  116 => 41,  112 => 42,  109 => 37,  106 => 42,  103 => 33,  99 => 38,  95 => 37,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 31,  64 => 25,  60 => 18,  57 => 16,  54 => 21,  51 => 15,  48 => 7,  45 => 20,  42 => 23,  39 => 11,  36 => 4,  33 => 10,  30 => 1,);
    }
}
