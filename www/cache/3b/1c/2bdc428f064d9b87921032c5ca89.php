<?php

/* offre.pdf.fr.tpl */
class __TwigTemplate_3b1c2bdc428f064d9b87921032c5ca89 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<page>
\t<page_footer>
\t\t<table style=\"width:{180}mm\" >
\t\t\t<tr>
\t\t\t\t<td style='width:{180}mm;text-align:center'>Conditions générales applicables pour la vente et la location de nos produits en annexe de cette facture.</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style='width:{180}mm;background-color:#ededed;text-align:center'>Organic sa - Mechelsesteenweg, 366 - 1950 Kraainem - Belgium
\t\t\t\t<br/>
\t\t\t\twww.organic-concept.com - TVA/BTW: 0807.879.247
\t\t\t\t<br/>
\t\t\t\tBank account: 001-5712962-29 - IBAN BE26001571296229 - Adresse SWIFT : GEBABEBB
\t\t\t\t<br/>
\t\t\t\tTel 00 32 2 720 77 45 - Fax 00 32 2 720 12 66 - info@organic-concept.com </td>
\t\t\t</tr>
\t\t</table>
\t</page_footer>
\t<table style=\"width:180mm;\" >
\t\t<tr>
\t\t\t<td style='width:100mm;vertical-align:top'><img src=\"themes/default/images/logo.png\">
\t\t\t<br/>
\t\t\t<br/>
\t\t\tOffre ";
        // line 23
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "reference", array(), "any", false);
        echo "
\t\t\t<br/>
\t\t\tKraainem, le ";
        // line 25
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreDate", array(), "any", false);
        echo "
\t\t\t<br/>
\t\t\t<br/>
\t\t\t";
        // line 28
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "firstname", array(), "any", false);
        echo "  ";
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "lastname", array(), "any", false);
        echo "
\t\t\t<br/>
\t\t\t";
        // line 30
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "email", array(), "any", false);
        echo "
\t\t\t<br/>
\t\t\t";
        // line 32
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "phone", array(), "any", false);
        echo "</td>
\t\t\t<td style='padding-top:45mm;vertical-align:top'>
\t\t\t<p style='padding-top:0mm'>
\t\t\t\t";
        // line 35
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false) == "cie")) {
            echo " <b>";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "name", array(), "any", false);
            echo "</b> ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "cieType", array(), "any", false);
            echo "
\t\t\t\t<br/>
\t\t\t\t";
            // line 37
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientTitle", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "firstname", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "lastname", array(), "any", false);
            echo "
\t\t\t\t<br/>
\t\t\t\t";
        } else {
            // line 39
            echo " <b>";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientTitle", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "firstname", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "lastname", array(), "any", false);
            echo " </b>
\t\t\t\t<br/>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<br/>
\t\t\t\t";
        // line 43
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "address", array(), "any", false);
        echo " ";
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "number", array(), "any", false);
        echo "
\t\t\t\t<br/>
\t\t\t\t";
        // line 45
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "zip", array(), "any", false);
        echo " ";
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "city", array(), "any", false);
        echo "
\t\t\t\t<br/>
\t\t\t\t";
        // line 47
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "country", array(), "any", false);
        echo "
\t\t\t\t
\t\t\t</p>
\t\t\t<br/><br/>Tel: ";
        // line 50
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "phone", array(), "any", false);
        echo "<br/> ";
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false) == "cie")) {
            // line 51
            echo "\t\t\t
\t\t\tTVA: ";
            // line 52
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "vat", array(), "any", false);
            echo "
\t\t\t";
        }
        // line 54
        echo "\t\t\t</td>
\t\t</tr>
\t</table>
\t<br/>
\t<table style=\"width:180mm\" >
\t\t<tr>
\t\t\t<td style='width:180mm;background-color:#ededed;text-align:center'><b>Offre ";
        // line 60
        if (($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreType", array(), "any", false) == "rent")) {
            echo " de location ";
        } elseif (($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreType", array(), "any", false) == "winter")) {
            echo " d'hivernage ";
        } else {
            echo " de vente ";
        }
        echo "</b></td>
\t\t</tr>
\t</table>
\t<p>
\t\t";
        // line 64
        echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "introText", array(), "any", false), "html"));
        echo "
\t</p>
\t<br/>
\t<b><u>Lieu :</u></b>
\t<p>
\t\t";
        // line 69
        echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "address", array(), "any", false), "html"));
        echo " ";
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "number", array(), "any", false);
        echo "
\t\t<br/>
\t\t";
        // line 71
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "zip", array(), "any", false);
        echo " ";
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "city", array(), "any", false);
        echo "
\t\t<br/>
\t\t";
        // line 73
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "country", array(), "any", false);
        echo "
\t</p>
\t<br/>
\t<b><u>Timing :</u></b>
\t<ul>
\t\t<li>
\t\t\tMontage : ";
        // line 79
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "fStartBuild", array(), "any", false);
        echo "
\t\t</li>
\t\t";
        // line 81
        if (($this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "inplace", array(), "any", false), "formatedStartDate", array(), "any", false) != "0000-00-00 00:00:00")) {
            // line 82
            echo "\t\t<li>
\t\t\tJour(s) de votre evénement : du ";
            // line 83
            echo $this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "inplace", array(), "any", false), "formatedStartDate", array(), "any", false);
            echo " au ";
            echo $this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "inplace", array(), "any", false), "formatedEndDate", array(), "any", false);
            echo "
\t\t</li>
\t\t";
        }
        // line 86
        echo "\t\t<li>
\t\t\tDémontage : ";
        // line 87
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "fEndBuild", array(), "any", false);
        echo "
\t\t</li>
\t</ul>
\t<br/>
\t";
        // line 91
        if ($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "currentOffre", array(), "any", false)) {
            // line 92
            echo "\t<b><u>Tente(s):</u></b>
\t<ul>
\t\t";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "currentOffre", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['t']) {
                // line 95
                echo "\t\t";
                if ((($this->getAttribute((isset($context['t']) ? $context['t'] : null), "width", array(), "any", false) > 0) || ($this->getAttribute((isset($context['t']) ? $context['t'] : null), "length", array(), "any", false) > 0))) {
                    // line 96
                    echo "\t\t<li>
\t\t\t";
                    // line 97
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "reference", array(), "any", false);
                    echo " - ";
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "name", array(), "any", false);
                    echo " - ";
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "color", array(), "any", false);
                    echo " - ";
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "length", array(), "any", false);
                    echo "m x";
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "width", array(), "any", false);
                    echo "m  ";
                    if (($this->getAttribute((isset($context['t']) ? $context['t'] : null), "m2", array(), "any", false) > 0)) {
                        echo "- ";
                        echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "m2", array(), "any", false);
                        echo "m2 ";
                    }
                    // line 98
                    echo "\t\t</li>
\t\t";
                } else {
                    // line 100
                    echo "\t\t<li>
\t\t\t";
                    // line 101
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "reference", array(), "any", false);
                    echo " - ";
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "name", array(), "any", false);
                    echo "
\t\t</li>
\t\t";
                }
                // line 104
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 105
            echo "\t</ul>
\t";
        }
        // line 107
        echo "\t";
        if ($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "tentComments", array(), "any", false)) {
            // line 108
            echo "\t
\t";
            // line 109
            echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "tentsComments", array(), "any", false), "html"));
            echo "
\t";
        }
        // line 111
        echo "\t<br/>
</page>
<page>
\t<page_footer>
\t\t<table style=\"width:180mm\" >
\t\t\t<tr>
\t\t\t\t<td style='width:180mm;text-align:center'>Conditions générales applicables pour la vente et la location de nos produits en annexe de cette offre.</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style='width:180mm;background-color:#ededed;text-align:center'>Organic sa - Mechelsesteenweg, 366 - 1950 Kraainem - Belgium
\t\t\t\t<br/>
\t\t\t\twww.organic-concept.com - TVA/BTW: 0807.879.247
\t\t\t\t<br/>
\t\t\t\tBank account: 001-5712962-29 - IBAN BE26001571296229 - Adresse SWIFT : GEBABEBB
\t\t\t\t<br/>
\t\t\t\tTel 00 32 2 720 77 45 - Fax 00 32 2 720 12 66 - info@organic-concept.com </td>
\t\t\t</tr>
\t\t</table>
\t</page_footer>
\t<table style=\"width:180mm\" >
\t\t<tr>
\t\t\t<td style=\"width:90mm;vertical-align:top\"><img src=\"themes/default/images/logo.png\"></td>
\t\t\t<td style=\"width:90mm;vertical-align:bottom;text-align:right\">Offre ";
        // line 133
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "reference", array(), "any", false);
        echo " (p2)</td>
\t\t</tr>
\t</table>
\t<br/>
\t<table style=\"width:180mm\" >
\t\t<tr>
\t\t\t<td style='width:180mm;background-color:#ededed;text-align:center'><b>Offre ";
        // line 139
        if (($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreType", array(), "any", false) == "rent")) {
            echo " de location ";
        } elseif (($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreType", array(), "any", false) == "winter")) {
            echo " d'hivernage ";
        } else {
            echo " de vente ";
        }
        echo "</b></td>
\t\t</tr>
\t</table>
\t<br/>
\t<br/>
\t<b><u>Budget(s):</u></b>
\t<br/>
\t<br/>
\t";
        // line 147
        if ((isset($context['products']) ? $context['products'] : null)) {
            // line 148
            echo "\t<table style='width:180mm'>
\t\t<thead style='border-bottom:1px solid #000000;background-color:#ededed;'>
\t\t\t<tr>
\t\t\t\t<th style='width:80%;background-color:#ededed;text-align:left'>Description</th>
\t\t\t\t<th style='width:20%;text-align:right;background-color:#ededed;'>Montant HTVA</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td></td><td></td>
\t\t\t</tr>
\t\t\t";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['products']) ? $context['products'] : null));
            foreach ($context['_seq'] as $context['_key'] => $context['p']) {
                // line 160
                echo "\t\t\t<tr>
\t\t\t\t<td style='width:80%'>";
                // line 161
                echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['p']) ? $context['p'] : null), "description", array(), "any", false), "html"));
                echo "</td><td style='width:20%;text-align:right'>";
                if (($this->getAttribute((isset($context['p']) ? $context['p'] : null), "price", array(), "any", false) == "0.00")) {
                    echo " Gratis ";
                } else {
                    echo " ";
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "price", array(), "any", false);
                    echo " €";
                }
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 164
            echo "\t\t</tbody>
\t\t<tfoot >
\t\t\t<tr>
\t\t\t\t<td style='text-align:right;background-color:#ededed;'>&nbsp;</td><td style='background-color:#ededed;' >&nbsp;</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style='text-align:right;width:80%'>Total HTVA</td><td style='width:20%;text-align:right'><b>";
            // line 170
            echo (isset($context['productsTotal']) ? $context['productsTotal'] : null);
            echo " €</b></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style='text-align:right;width:80%'>TVA (21%)</td><td style='width:20%;text-align:right'>";
            // line 173
            if (($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "priceType", array(), "any", false) == "intra")) {
                echo "intra communautaire";
            } else {
                echo (isset($context['productsTotalTVA']) ? $context['productsTotalTVA'] : null);
                echo " €";
            }
            echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style='text-align:right;width:80%;background-color:#ededed;'><b>TOTAL TTC à payer</b></td><td style='width:20%;text-align:right;background-color:#ededed;'><b>";
            // line 176
            echo (isset($context['productsTotalTTC']) ? $context['productsTotalTTC'] : null);
            echo " €</b></td>
\t\t\t</tr>
\t\t\t</tfoot >
\t</table>
\t";
        }
        // line 181
        echo "\t<br/>
\t<br/>
\t";
        // line 183
        if ((isset($context['productOptions']) ? $context['productOptions'] : null)) {
            echo " <b><u>Options :</u></b>
\t<br/>
\t<table style='width:180mm'>
\t\t<thead style='border-bottom:1px solid #000000;background-color:#ededed;'>
\t\t\t<tr>
\t\t\t\t<th style='width:80%;background-color:#ededed;text-align:left'>Description</th>
\t\t\t\t<th style='width:20%;text-align:right;background-color:#ededed;'>Montant HTVA</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td></td><td></td>
\t\t\t</tr>
\t\t\t";
            // line 196
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['productOptions']) ? $context['productOptions'] : null));
            foreach ($context['_seq'] as $context['_key'] => $context['p']) {
                // line 197
                echo "\t\t\t<tr>
\t\t\t\t<td style='width:80%;'>";
                // line 198
                echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['p']) ? $context['p'] : null), "description", array(), "any", false), "html"));
                echo "</td><td style='width:20%;text-align:right'>";
                if (($this->getAttribute((isset($context['p']) ? $context['p'] : null), "price", array(), "any", false) == "0.00")) {
                    echo " Sur devis ";
                } else {
                    echo " ";
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "price", array(), "any", false);
                    echo " €";
                }
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 201
            echo "\t\t</tbody>
\t</table>
\t";
        }
        // line 204
        echo "\t<br/>
\t<br/>
\t<b><u>Conditions :</u></b>
\t<p>
\t\t";
        // line 208
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['slices']) ? $context['slices'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['s']) {
            // line 209
            echo "\t\t";
            echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['s']) ? $context['s'] : null), "comments", array(), "any", false), "html"));
            echo "<br/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 211
        echo "\t</p>
\t<br />
\t";
        // line 213
        if ($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "conditions", array(), "any", false)) {
            // line 214
            echo "\t
\t";
            // line 215
            echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "conditions", array(), "any", false);
            echo "
\t";
        } else {
            // line 217
            echo "\tLa réservation sera prise en compte à la reception de votre accompte
\t";
        }
        // line 219
        echo "\t<p>
\t\t<b>Nos prix s'entendent hors TVA</b>
\t\t<br/>
\t\tValidité de cette offre: 30 jours date de l'offre
\t</p>
\t
\t<br />
\t<p>
\t\tSincères salutations,
\t\t<br />
\t\t<br />
\t</p>
\t<table style=\"width:180mm\" >
\t\t<tr>
\t\t\t<td style='width:90mm'></td>
\t\t\t<td style='width:100mm;'>";
        // line 234
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "firstname", array(), "any", false);
        echo "  ";
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "lastname", array(), "any", false);
        echo "
\t\t\t<br/>
\t\t\t";
        // line 236
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "email", array(), "any", false);
        echo "
\t\t\t<br/>
\t\t\t";
        // line 238
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "phone", array(), "any", false);
        echo "</td>
\t\t</tr>
\t</table>
</page>
<page>
\t<table style=\"width:180mm\" >
\t\t<tr>
\t\t\t<td style='width:180mm;background-color:#ededed;text-align:center'><b>ORGANIC SA/NV.  Conditions générales</b></td>
\t\t</tr>
\t</table>
\t<table style=\"width:180mm\" >
\t\t<tr>
\t\t\t<td style=\"width:180mm;vertical-align:top;font-size:6pt;text-align:justify\"> Conditions générales applicables pour la vente et la location de nos produits
\t\t\t<p>
\t\t\t\t<b>1.\tGénéralités – Dérogations</b>
\t\t\t\t<br/>
\t\t\t\tLes présentes conditions générales de vente et de location sont d'application pour toutes les commandes qui nous sont passées. Le client est censé accepter les présentes conditions générales de vente et de location par le seul fait de sa commande. Les dérogations, même figurant sur les documents émanant du client, ne sont opposables que moyennant confirmation écrite de notre part. Même dans ce cas, les présentes conditions restent d'application pour tous les points auxquels il n'aura pas été expressément dérogé.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>2.\tRéserve de propriété</b>
\t\t\t\t<br/>
\t\t\t\tLe vendeur se réserve la propriété de la marchandise jusqu'au paiement complet des sommes convenues contractuellement. Les risques sont à charge de l'acheteur. Les acomptes versés pourront être conservés pour couvrir les pertes éventuelles à la revente. En cas de revente des marchandises, même transformées, appartenant au vendeur, l'acheteur lui cède dès à présent toutes les créances résultant de leur revente. Le client assume la pleine responsabilité des marchandises données en location: il répond de toute détérioration ou destruction, même survenue par cas fortuit ou force majeure.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>3.\tRéclamations</b>
\t\t\t\t<br/>
\t\t\t\tLes réclamations concernant les ventes ne seront recevables qu'à condition d'être adressées endéans les huit jours de la réception des marchandises et factures. Par dérogation, le délai sera porté à 15 jours pour les ventes au consommateur. Pour les ventes au consommateur, les présentes conditions renvoient aux dispositions impératives prévues aux articles 1649 bis, à 149 octies du code civil.  Les réclamations devront être adressées par lettre recommandée.

\t\t\t\tLes réclamations concernant les locations ne seront recevables :
\t\t\t\t* En cas de montage par la société Organic SA/NV ; qu'à condition d'être formulées à nos monteurs dès le montage et pour autant qu'elles soient confirmées par lettre recommandée à la poste, déposée le plus prochain jour ouvrable qui suit le montage;
\t\t\t\t*En cas d'enlèvement des marchandises par les soins du client, que si elles sont formulées par lettre recommandée à la poste, dès le lendemain de l'enlèvement des marchandises en nos ateliers.
\t\t\t\tSi la réclamation est reconnue justifiée, nos obligations se limiteront exclusivement au remplacement ou à la réparation gratuite des marchandises livrées ou de leur pièces défectueuses, sans que nous puissions être tenus à une indemnité quelconque de quelque chef que ce soit.
\t\t\t\tL'éventuelle défaillance d'une marchandise vendue ou donnée en location ne dispense pas le client de régler la facture mais l'autorise uniquement, pour autant qu'il soit établi à suffisance que la dite défaillance nous soit totalement imputable et qu'elle n'ait été corrigée, à déduire le coût de la location ou de la vente sans qu'il puisse être question de dommage et intérêt complémentaire.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>4.\tPaiement</b>
\t\t\t\t<br/>
\t\t\t\tA moins de stipulations contraires expressément acceptées par la société Organic SA/NV, le paiement de nos factures doit se faire net au grand comptant. Tout retard de paiement nous conférera le droit de résilier s'il nous plaît le marché pour la partie non exécutée sans préjudice de tous dommages-intérêts.

\t\t\t\tChaque fourniture constitue une opération distincte et nous n'admettons aucune compensation automatique du chef de retour, litige, contestation, etc., sauf accord exprès de notre part. Toutefois, en cas de faillite, déconfiture, demande de concordat de notre débiteur, la compensation jouera automatiquement sans qu'aucune formalité ne soit requise.

\t\t\t\tLe défaut de paiement à l'échéance d'une traite acceptée rend exigible de plein droit toutes nos autres créances sur l'acheteur.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>5.\tPénalités pour retard de paiement</b>
\t\t\t\t<br/>
\t\t\t\tLes factures non payées à leur échéance sont productives, automatiquement et de plein droit, sans mise en demeure préalable d'un intérêt de 1% par mois. En outre, au cas ou une facture ne serait pas réglée dans les huit jours qui suivent une mise en demeure, le montant sera majoré d'une indemnité forfaitaire de 15% avec un minimum de 125 euros, pour couvrir les frais administratifs et la privation du capital roulant.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>6.\tPluralité de contractants et solidarité</b>
\t\t\t\t<br/>
\t\t\t\tEn cas de commande par autrui, celui qui passe la commande est solidairement tenu avec le bénéficiaire de la commande de toutes les obligations en résultant. De même si la commande est facturée à la demande du client à une autre personne, tous deux sont solidairement tenus du paiement et de toutes obligations découlant de la commande.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>7.\tAnnulations</b>
\t\t\t\t<br/>
\t\t\t\tLe locataire peut annuler un contrat à conditions de :
\t\t\t\t* le faire par lettre recommandée;
\t\t\t\t* payer simultanément à titre de dommage et intérêt :
\t\t\t\t• 25% du montant de la location si l'annulation se produit plus de 4 mois avant la date du montage
\t\t\t\t• 40% du montant entre 3 et 4 mois du montage
\t\t\t\t• 50% du montant entre 1 mois et 15 jours du montage
\t\t\t\t• 75% du montant si l'annulation se produit à moins de 15 jours de la date du montage et tant que le matériel n'aura pas été chargé au dépôt du loueur.
\t\t\t\tMême si le locataire ne peut utiliser le matériel loué, quelle qu'en soit la raison, le prix de la location est entièrement dû.
\t\t\t\tDe même l'acompte reste dû.

\t\t\t\tDans les contrats conclus avec les consommateurs, le loueur pourra annuler le contrat dans les mêmes conditions.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>8.\tResponsabilité des parties</b>
\t\t\t\t<br/>
\t\t\t\tLe matériel du loueur est couvert par ce dernier uniquement pour sa propre responsabilité civile d'exploitation.
\t\t\t\tLe locataire est responsable de la surveillance et de la protection du matériel loué et ce dès l'arrivée du premier matériel jusqu'à l'enlèvement complet. Il prendra toutes les dispositions pour garder le matériel en bon état, en évitant les actes de vandalisme ou de vol. Il prendra toutes les dispositions requises pour la protection contre le feu: signalisation, matériel d'extinction, appel des secours, mesures de police à faire respecter par le public… Il veillera à maintenir la tente fermée en cas de vent. En cas de neige, le locataire devra immédiatement mettre en marche un appareil de chauffage nécessaire pour faire fondre la neige de façon permanente; passé 3 cm de neige, il y a danger d'effondrement et le locataire sera rendu responsable des dégâts occasionnés par l'inobservance de cette clause. Il prendra les dispositions requises pour signaler le matériel au cas où celui-ci devait être placé sur un terrain public ou dans des endroits de passage. La responsabilité du locataire est engagée en tout ce qui concerne l'emploi du matériel loué: restent sous sa responsabilité entière notamment les accidents de personnes ou les dégâts aux biens qui résulteraient de l'utilisation ou de la jouissance des objets loués.
\t\t\t\tLe démontage partiel ou total, le déplacement du matériel mobile est interdit sans autorisation préalable, et de toute manière sous la responsabilité exclusive du locataire.
\t\t\t\tLe locataire prendra toutes les dispositions requises pour qu'en cas de tempête ou de malveillance, il puisse retendre chaque corde des tentes, enfoncer plus profondément ou changer de place l'un après l'autre les piquets si cela s'avérait indispensable ou nécessaire. Il en avertira le plus tôt possible le loueur.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>9.\tMontage et terrains</b>
\t\t\t\t<br/>
\t\t\t\tLe locataire doit se procurer pour la date convenue du montage toutes les autorisations nécessaires.
\t\t\t\tLe locataire devra être présent sur place pour indiquer l'endroit de montage et répondre à toutes les questions concernant les autorisations et dangers que cache le terrain.
\t\t\t\tLe loueur ou ses délégués doivent pouvoir accéder en permanence, de nuit comme de jour, au matériel loué.
\t\t\t\tPendant les manifestations, des laissez-passer seront à la disposition du loueur.
\t\t\t\tEn aucun cas le personnel ou le camion du loueur ne pourront effectuer d'autre transports ou travaux pour le locataire.
\t\t\t\tSi à l'arrivée du camion, le personnel prévu par le locataire n'était pas présent, une attente de quatre heures maximum sera respectée. Les heures perdues, hommes et camions seront facturés. Passé ce délai de quatre heures, le loueur peut faire rentrer son personnel, son matériel et ses camions au dépôt et la totalité de la location est exigible immédiatement.
\t\t\t\tAu cas où le terrain ne serait pas stable, les frais de dégagement des véhicules et du matériel sont à charge du locataire. Les dégâts occasionnés au terrain sont également à charge du locataire (affaissement, ornières, plantations touchées…) Le sol doit être entièrement déblayé et propre, et ne doit pas présenter de dénivellation autre que celle(s) signalée(s) lors de la conclusion du contrat. Lorsque la stabilité de nos structures est assurée par des piquets d'ancrage enfoncés dans le sol ou par des poids morts déposés sur le sol, le locataire est tenu de se renseigner auprès des autorités compétentes afin de s'assurer qu'il n'y a aucun risque de détériorer les canalisations souterraines de gaz, eau, électricité, téléphone, … Tous les dommages occasionnés au terrain et à ses équipements sont à charge du locataire.
\t\t\t\tLes terrains de montage des chapiteaux doivent pouvoir être percés par martèlement normal par des piquets d'ancrage: la présence en sous-sol ou en surface de revêtements durs comme par exemple du béton, doit nous être signalé avant la signature du contrat. Il en sera de même quand le terrain n'offre pas la résistance nécessaire à l'attachement des piquets (marécages, sable…)
\t\t\t\tLors du démontage du matériel, tout retard dû au non dégagement complet de celui-ci est facturé (prolongation de location, déplacements supplémentaires, allongement des heures de travail…)
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>10.\tMatériel loué</b>
\t\t\t\t<br/>
\t\t\t\tLe locataire est tenu de contrôler la marchandise lors de son enlèvement, de la livraison ou du montage, celui-ci valant agréation complète de ladite marchandise et de son état impeccable.

\t\t\t\tIl appartient au locataire de veiller à l'entretien du matériel livré et notamment d'éviter toute dégradation. Le locataire est responsable de tout dommage qui affecterait le matériel loué résultat d'un entreposage, d'un montage, d'une mise en œuvre, d'une utilisation inadéquate de sa part.

\t\t\t\tLe locataire remettra au loueur le matériel dans un état de propreté impeccable. Dans le cas contraire, les frais de nettoyage ou de remise en état seront facturés.
\t\t\t\tIl est défendu de clouer, agrafer, visser ou scier dans les boiseries et bâches, de les peindre ou de les marquer de façon durable, de cacher ou d'enlever la publicité du loueur, sauf stipulation expresse au moment de la signature du contrat.

\t\t\t\tQuelle que soit la personne en charge du transport des biens loués, la période de location s'étend du jour où les biens loués quittent les entrepôts du loueur. Toute location se compte par période de trois jours ouvrables en ce compris le jour de livraison et le jour de reprise. Tout jour supplémentaire commencé est dû en entier avec le même taux de location.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>11.\tDélais - Force majeure</b>
\t\t\t\t<br/>
\t\t\t\tSauf faute lourde, le loueur est exonéré de toute responsabilité dans l'exécution du présent contrat, notamment en ce qui concerne des délais indiqués. Les délais de livraison et d'exécution sont toujours stipulés à titre indicatif. Nous ne pouvons être tenus au paiement de dommages et intérêts si ces délais ne sont pas respectés.
\t\t\t\tTout cas de force majeure dans le chef du loueur, le dégage de toute responsabilité, sans aucun droit à un dédommagement pour le locataire quant à la livraison du matériel loué et donne le droit au loueur d'annuler ce contrat. Sont conventionnellement considérés comme cas de force majeure l'état de guerre, de mobilisation, les grèves, émeutes ou rebellions, accidents, maladies ou autres calamités, crues, feu, tempêtes, avaries, destruction ou perte de matériel y compris dans les transports, des circonstances extraordinaires comme défense d'exportation ou d'importation, des mesures entravantes de n'importe quelle autorité, interruptions dans les services électriques ou dans l'approvisionnement en carburant.
\t\t\t\tD'une manière générale, tout événement imprévu empêchant de commencer (dans ce cas l'acompte est immédiatement remboursé) ou de continuer normalement l'exécution des contrats, y compris tous les dérangements par lesquels l'exécution du contrat devient plus chère ou plus difficile.

\t\t\t\tLes présentes conditions générales de location sont également disponibles sur le site www.organic.be.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<b>12.\tJuridiction</b>
\t\t\t\t<br/>
\t\t\t\tEn cas de contestation, seront seuls compétents les tribunaux de Nivelles et la loi belge.
\t\t\t</p></td>
\t\t</tr>
\t</table>
</page>
";
    }

    public function getTemplateName()
    {
        return "offre.pdf.fr.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
