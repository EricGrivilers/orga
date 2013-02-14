<?php

/* invoice.pdf.fr.tpl */
class __TwigTemplate_fba724038c96f6f01bd9b06869d18eec extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<page>
\t<page_footer>
    <table style=\"width:";
        // line 3
        echo (isset($context['mWidth']) ? $context['mWidth'] : null);
        echo "mm\" >
      <tr>
        <td style='width:";
        // line 5
        echo (isset($context['mWidth']) ? $context['mWidth'] : null);
        echo "mm;text-align:center'>Conditions générales applicables pour la vente et la location de nos produits en annexe de cette facture.</td>
      </tr>
      <tr>
        <td style='width:";
        // line 8
        echo (isset($context['mWidth']) ? $context['mWidth'] : null);
        echo "mm;background-color:#ededed;text-align:center'>Organic sa - Mechelsesteenweg, 366 - 1950 Kraainem - Belgium<br/>
          www.organic-concept.com - TVA/BTW: 0807.879.247 <br/>
          Bank account: 001-5712962-29 - IBAN BE26001571296229 - Adresse SWIFT : GEBABEBB<br/>
          Tel 00 32 2 720 77 45 - Fax 00 32 2 720 12 66 - info@organic-concept.com </td>
      </tr>
    </table>
  </page_footer>
 <table style=\"width:";
        // line 15
        echo (isset($context['mWidth']) ? $context['mWidth'] : null);
        echo "mm;\" >

    <tr>
      <td style='width:100mm;vertical-align:top'><img src=\"themes/default/images/logo.png\"><br/>
        <br/>
        Facture ";
        // line 20
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "reference", array(), "any", false);
        echo "<br/>
        Kraainem, le ";
        // line 21
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "invoiceDate", array(), "any", false);
        echo "<br/>
        <br/>
       </td>
      <td style='vertical-align:top;padding-top:4mm'><span style=\"color:#E1001A;font-weight:bold\">";
        // line 24
        echo (isset($context['reminder']) ? $context['reminder'] : null);
        echo " 
      \t";
        // line 25
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "priceHT", array(), "any", false) > 0)) {
            echo " 
      \t\tFacture 
      \t";
        } else {
            // line 27
            echo " 
      \t\tNote de crédit
      \t";
        }
        // line 29
        echo "  
      \t
      \t";
        // line 31
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "offreType", array(), "any", false) == "rent")) {
            echo " de location 
      \t";
        } elseif (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "offreType", array(), "any", false) == "winter")) {
            // line 32
            echo " d'hivernage
      \t";
        } else {
            // line 33
            echo " de vente 
      \t";
        }
        // line 34
        echo "</span>
      \t
      \t
      \t
      \t<p style='padding-top:10mm'>
      \t\t";
        // line 39
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientType", array(), "any", false) == "cie")) {
            echo " <b>";
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "name", array(), "any", false);
            echo "</b> ";
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "cieType", array(), "any", false);
            echo " <br/> ";
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientTitle", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "firstname", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "lastname", array(), "any", false);
            echo " <br/>
      \t\t";
        } else {
            // line 41
            echo "      \t\t<b>";
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientTitle", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "firstname", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "lastname", array(), "any", false);
            echo " </b><br/>
      \t\t";
        }
        // line 43
        echo "      \t\t<br/>
      \t\t";
        // line 44
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "address", array(), "any", false);
        echo " ";
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "number", array(), "any", false);
        echo "<br/>
      \t\t";
        // line 45
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "zip", array(), "any", false);
        echo " ";
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "city", array(), "any", false);
        echo "<br/>
      \t\t";
        // line 46
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "country", array(), "any", false);
        echo "
      \t</p>
       ";
        // line 48
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientType", array(), "any", false) == "cie")) {
            // line 49
            echo "       <br/>
       <br/>
        TVA ";
            // line 51
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "vat", array(), "any", false);
            echo "
        ";
        }
        // line 52
        echo "</td>
    </tr>
  </table>
  <br/>
   <br/>
    <br/>
 
   
   ";
        // line 60
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "jobId", array(), "any", false) > 0)) {
            // line 61
            echo "\t\t\t\t<table style=\"width:";
            echo (isset($context['mWidth']) ? $context['mWidth'] : null);
            echo "mm\">
\t\t\t\t\t<thead style='border-bottom:1px solid #ccc'>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:140mm;text-align:left;background-color:#ededed\">Description</th>
\t\t\t\t\t\t\t<th style=\"width:40mm;text-align:right;background-color:#ededed\">Montant HTVA</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['products']) ? $context['products'] : null));
            foreach ($context['_seq'] as $context['_key'] => $context['p']) {
                // line 70
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"width:140mm;text-align:left\">";
                // line 71
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "description", array(), "any", false);
                echo "</td>
\t\t\t\t\t\t\t<td style=\"width:30mm;text-align:right\">";
                // line 72
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "price", array(), "any", false);
                echo " €</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 75
            echo "\t\t\t\t\t\t<tr><td style='background-color:#ededed'>&nbsp;</td><td style='background-color:#ededed'></td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\">Total HTVA :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
            // line 80
            echo (isset($context['productsTotalHT']) ? $context['productsTotalHT'] : null);
            echo "  €</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr style='border-bottom:1px solid #ccc'>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t";
            // line 84
            if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "priceType", array(), "any", false) == "htva")) {
                echo " TVA (21%)
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "priceType", array(), "any", false) == "intra")) {
                // line 86
                echo "\t\t\t\t\t\t\tIntra communautaire ";
            }
            // line 87
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
            // line 89
            echo (isset($context['productsTVA']) ? $context['productsTVA'] : null);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">TOTAL TTC :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">";
            // line 95
            echo (isset($context['productsTotalTTC']) ? $context['productsTotalTTC'] : null);
            echo " €</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<table style=\"width:180mm\">
\t\t\t\t\t
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style='width:100mm'>";
            // line 108
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "comments", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t<td style='width:19mm'>";
            // line 109
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "slice", array(), "any", false);
            echo " %</td>
\t\t\t\t\t\t\t<td style=\"width:60mm;text-align:right;\">TOTAL HTVA : ";
            // line 110
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "priceHT", array(), "any", false);
            echo " €</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td style=\"text-align:right;\">TVA : ";
            // line 115
            echo (isset($context['sliceTVA']) ? $context['sliceTVA'] : null);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr><td style='background-color:#ededed'></td><td style='background-color:#ededed'></td><td style='background-color:#ededed'></td></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t
\t\t\t\t";
        // line 122
        if ((((isset($context['isLastSlice']) ? $context['isLastSlice'] : null) == 1) || ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "jobId", array(), "any", false) <= 0))) {
            // line 123
            echo "\t\t\t\t<table style=\"width:";
            echo (isset($context['mWidth']) ? $context['mWidth'] : null);
            echo "mm\">
\t\t\t\t
\t\t\t\t\t<thead style='border-bottom:1px solid #ccc'>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:140mm;text-align:left;background-color:#ededed\">Description</th>
\t\t\t\t\t\t\t<th style=\"width:40mm;text-align:right;background-color:#ededed\">Montant HTVA</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 134
            if ((((isset($context['outJobHT']) ? $context['outJobHT'] : null) > 0) && ((isset($context['isLastSlice']) ? $context['isLastSlice'] : null) == 1))) {
                // line 135
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context['newproducts']) ? $context['newproducts'] : null));
                foreach ($context['_seq'] as $context['_key'] => $context['p']) {
                    // line 136
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"width:140mm;text-align:left\">";
                    // line 138
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "description", array(), "any", false);
                    echo "</td>
\t\t\t\t\t\t\t<td style=\"width:30mm;text-align:right\">";
                    // line 139
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "price", array(), "any", false);
                    echo " €</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 143
                echo "\t\t\t\t\t\t";
            }
            // line 144
            echo "\t\t\t\t\t</tbody>
\t\t\t\t\t";
            // line 145
            if ((((isset($context['outJobHT']) ? $context['outJobHT'] : null) > 0) && ((isset($context['isLastSlice']) ? $context['isLastSlice'] : null) == 1))) {
                // line 146
                echo "\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\">Total HTVA :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
                // line 149
                echo (isset($context['outJobHT']) ? $context['outJobHT'] : null);
                echo "  €</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr style='border-bottom:1px solid #ccc'>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t";
                // line 154
                if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "priceType", array(), "any", false) == "htva")) {
                    echo " TVA (21%)
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "priceType", array(), "any", false) == "intra")) {
                    // line 156
                    echo "\t\t\t\t\t\t\tIntra communautaire ";
                }
                // line 157
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
                // line 159
                echo (isset($context['outJobTVA']) ? $context['outJobTVA'] : null);
                echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">TOTAL TTC :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">";
                // line 164
                echo (isset($context['outJobTTC']) ? $context['outJobTTC'] : null);
                echo " €</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t\t";
            }
            // line 169
            echo "\t\t\t\t</table>
\t\t\t\t
\t\t\t\t";
        }
        // line 172
        echo "\t\t\t\t<br/>
\t\t\t\t<table style='border:1px solid #000;width:180mm;font-weight:bold'>
\t\t\t\t\t<tbody><tr>
\t\t\t\t\t\t\t<td style='width:182mm;text-align:right;'>
\t\t\t\t\t\tTOTAL TVAC à payer : <b>";
        // line 176
        echo (isset($context['grandTotal']) ? $context['grandTotal'] : null);
        echo " €</b>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t</tr></tbody>
\t\t\t\t</table>
   
   
   
   
   
   
   
   
   
   
   
  <!--<b><u>Lieu :</u></b>
  <p> {deliveryAddress} </p>-->
  <!--<br/>
  ";
        // line 195
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "startBuild", array(), "any", false) != "")) {
            // line 196
            echo "  <b><u>Timing :</u></b>
  <ul>
    <li>Montage : ";
            // line 198
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "startBuild", array(), "any", false);
            echo "</li>
    <li>Jour(s) de votre evénement : ";
            // line 199
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "inPlace", array(), "any", false);
            echo "</li>
    <li>Démontage : ";
            // line 200
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "endBuild", array(), "any", false);
            echo "</li>
  </ul>
";
        }
        // line 202
        echo "-->
    <br/>
  <br/>
  <br/>
  <b><u>Conditions :</u></b>
  <p>
  ";
        // line 208
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "conditions1", array(), "any", false) != "")) {
            // line 209
            echo "  Conditions de paiement: comptant<br/>
Communication à mentionner: le numéro de cette facture.<br/>
  ";
        }
        // line 212
        echo "   ";
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "conditions2", array(), "any", false) != "")) {
            // line 213
            echo "   Le paiement de votre acompte confirme votre commande.<br/>
  ";
        }
        // line 215
        echo "   ";
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "conditions", array(), "any", false) != "")) {
            // line 216
            echo "   ";
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "conditions", array(), "any", false);
            echo "
  ";
        }
        // line 218
        echo "  </p>
  <br/>
<b><u>Coordonnées bancaires :</u></b>
  <p>Fortis Bank - Compte n° 001-5712962-29 - IBAN BE26001571296229 - Adresse SWIFT : GEBABEBB</p>
  
 
  
</page>
<page>
 <table style=\"width:";
        // line 227
        echo (isset($context['mWidth']) ? $context['mWidth'] : null);
        echo "mm\" >
    <tr>
      <td style='width:";
        // line 229
        echo (isset($context['mWidth']) ? $context['mWidth'] : null);
        echo "mm;background-color:#ededed;text-align:center'><b>ORGANIC SA/NV.  Conditions générales</b></td>
    </tr>
  </table>
<table style=\"width:";
        // line 232
        echo (isset($context['mWidth']) ? $context['mWidth'] : null);
        echo "mm\" >
    <tr>
      <td style=\"width:";
        // line 234
        echo (isset($context['mWidth']) ? $context['mWidth'] : null);
        echo "mm;vertical-align:top;font-size:6pt;text-align:justify\">


Conditions générales applicables pour la vente et la location de nos produits
<p>
<b>1.\tGénéralités – Dérogations</b><br/>

Les présentes conditions générales de vente et de location sont d'application pour toutes les commandes qui nous sont passées. Le client est censé accepter les présentes conditions générales de vente et de location par le seul fait de sa commande. Les dérogations, même figurant sur les documents émanant du client, ne sont opposables que moyennant confirmation écrite de notre part. Même dans ce cas, les présentes conditions restent d'application pour tous les points auxquels il n'aura pas été expressément dérogé.
</p>
<p>
<b>2.\tRéserve de propriété</b><br/>

Le vendeur se réserve la propriété de la marchandise jusqu'au paiement complet des sommes convenues contractuellement. Les risques sont à charge de l'acheteur. Les acomptes versés pourront être conservés pour couvrir les pertes éventuelles à la revente. En cas de revente des marchandises, même transformées, appartenant au vendeur, l'acheteur lui cède dès à présent toutes les créances résultant de leur revente. Le client assume la pleine responsabilité des marchandises données en location: il répond de toute détérioration ou destruction, même survenue par cas fortuit ou force majeure.
</p>
<p>
<b>3.\tRéclamations</b><br/>

Les réclamations concernant les ventes ne seront recevables qu'à condition d'être adressées endéans les huit jours de la réception des marchandises et factures. Par dérogation, le délai sera porté à 15 jours pour les ventes au consommateur. Pour les ventes au consommateur, les présentes conditions renvoient aux dispositions impératives prévues aux articles 1649 bis, à 149 octies du code civil.  Les réclamations devront être adressées par lettre recommandée.

Les réclamations concernant les locations ne seront recevables :
* En cas de montage par la société Organic SA/NV ; qu'à condition d'être formulées à nos monteurs dès le montage et pour autant qu'elles soient confirmées par lettre recommandée à la poste, déposée le plus prochain jour ouvrable qui suit le montage;
*En cas d'enlèvement des marchandises par les soins du client, que si elles sont formulées par lettre recommandée à la poste, dès le lendemain de l'enlèvement des marchandises en nos ateliers.
Si la réclamation est reconnue justifiée, nos obligations se limiteront exclusivement au remplacement ou à la réparation gratuite des marchandises livrées ou de leur pièces défectueuses, sans que nous puissions être tenus à une indemnité quelconque de quelque chef que ce soit.
L'éventuelle défaillance d'une marchandise vendue ou donnée en location ne dispense pas le client de régler la facture mais l'autorise uniquement, pour autant qu'il soit établi à suffisance que la dite défaillance nous soit totalement imputable et qu'elle n'ait été corrigée, à déduire le coût de la location ou de la vente sans qu'il puisse être question de dommage et intérêt complémentaire.
</p>
<p>
<b>4.\tPaiement</b><br/>

A moins de stipulations contraires expressément acceptées par la société Organic SA/NV, le paiement de nos factures doit se faire net au grand comptant. Tout retard de paiement nous conférera le droit de résilier s'il nous plaît le marché pour la partie non exécutée sans préjudice de tous dommages-intérêts.

Chaque fourniture constitue une opération distincte et nous n'admettons aucune compensation automatique du chef de retour, litige, contestation, etc., sauf accord exprès de notre part. Toutefois, en cas de faillite, déconfiture, demande de concordat de notre débiteur, la compensation jouera automatiquement sans qu'aucune formalité ne soit requise.

Le défaut de paiement à l'échéance d'une traite acceptée rend exigible de plein droit toutes nos autres créances sur l'acheteur.
</p>
<p>
<b>5.\tPénalités pour retard de paiement</b><br/>

Les factures non payées à leur échéance sont productives, automatiquement et de plein droit, sans mise en demeure préalable d'un intérêt de 1% par mois. En outre, au cas ou une facture ne serait pas réglée dans les huit jours qui suivent une mise en demeure, le montant sera majoré d'une indemnité forfaitaire de 15% avec un minimum de 125 euros, pour couvrir les frais administratifs et la privation du capital roulant.
</p>
<p>
<b>6.\tPluralité de contractants et solidarité</b><br/>

En cas de commande par autrui, celui qui passe la commande est solidairement tenu avec le bénéficiaire de la commande de toutes les obligations en résultant. De même si la commande est facturée à la demande du client à une autre personne, tous deux sont solidairement tenus du paiement et de toutes obligations découlant de la commande.
</p>
<p>
<b>7.\tAnnulations</b><br/>

Le locataire peut annuler un contrat à conditions de :
* le faire par lettre recommandée;
* payer simultanément à titre de dommage et intérêt :
• 25% du montant de la location si l'annulation se produit plus de 4 mois avant la date du montage
• 40% du montant entre 3 et 4 mois du montage
• 50% du montant entre 1 mois et 15 jours du montage
• 75% du montant si l'annulation se produit à moins de 15 jours de la date du montage et tant que le matériel n'aura pas été chargé au dépôt du loueur.
Même si le locataire ne peut utiliser le matériel loué, quelle qu'en soit la raison, le prix de la location est entièrement dû.
De même l'acompte reste dû.

Dans les contrats conclus avec les consommateurs, le loueur pourra annuler le contrat dans les mêmes conditions.
</p>
<p>
<b>8.\tResponsabilité des parties</b><br/>

Le matériel du loueur est couvert par ce dernier uniquement pour sa propre responsabilité civile d'exploitation.
Le locataire est responsable de la surveillance et de la protection du matériel loué et ce dès l'arrivée du premier matériel jusqu'à l'enlèvement complet. Il prendra toutes les dispositions pour garder le matériel en bon état, en évitant les actes de vandalisme ou de vol. Il prendra toutes les dispositions requises pour la protection contre le feu: signalisation, matériel d'extinction, appel des secours, mesures de police à faire respecter par le public… Il veillera à maintenir la tente fermée en cas de vent. En cas de neige, le locataire devra immédiatement mettre en marche un appareil de chauffage nécessaire pour faire fondre la neige de façon permanente; passé 3 cm de neige, il y a danger d'effondrement et le locataire sera rendu responsable des dégâts occasionnés par l'inobservance de cette clause. Il prendra les dispositions requises pour signaler le matériel au cas où celui-ci devait être placé sur un terrain public ou dans des endroits de passage. La responsabilité du locataire est engagée en tout ce qui concerne l'emploi du matériel loué: restent sous sa responsabilité entière notamment les accidents de personnes ou les dégâts aux biens qui résulteraient de l'utilisation ou de la jouissance des objets loués.
Le démontage partiel ou total, le déplacement du matériel mobile est interdit sans autorisation préalable, et de toute manière sous la responsabilité exclusive du locataire.
Le locataire prendra toutes les dispositions requises pour qu'en cas de tempête ou de malveillance, il puisse retendre chaque corde des tentes, enfoncer plus profondément ou changer de place l'un après l'autre les piquets si cela s'avérait indispensable ou nécessaire. Il en avertira le plus tôt possible le loueur.
</p>
<p>
<b>9.\tMontage et terrains</b><br/>

Le locataire doit se procurer pour la date convenue du montage toutes les autorisations nécessaires.
Le locataire devra être présent sur place pour indiquer l'endroit de montage et répondre à toutes les questions concernant les autorisations et dangers que cache le terrain.
Le loueur ou ses délégués doivent pouvoir accéder en permanence, de nuit comme de jour, au matériel loué.
Pendant les manifestations, des laissez-passer seront à la disposition du loueur.
En aucun cas le personnel ou le camion du loueur ne pourront effectuer d'autre transports ou travaux pour le locataire.
Si à l'arrivée du camion, le personnel prévu par le locataire n'était pas présent, une attente de quatre heures maximum sera respectée. Les heures perdues, hommes et camions seront facturés. Passé ce délai de quatre heures, le loueur peut faire rentrer son personnel, son matériel et ses camions au dépôt et la totalité de la location est exigible immédiatement.
Au cas où le terrain ne serait pas stable, les frais de dégagement des véhicules et du matériel sont à charge du locataire. Les dégâts occasionnés au terrain sont également à charge du locataire (affaissement, ornières, plantations touchées…) Le sol doit être entièrement déblayé et propre, et ne doit pas présenter de dénivellation autre que celle(s) signalée(s) lors de la conclusion du contrat. Lorsque la stabilité de nos structures est assurée par des piquets d'ancrage enfoncés dans le sol ou par des poids morts déposés sur le sol, le locataire est tenu de se renseigner auprès des autorités compétentes afin de s'assurer qu'il n'y a aucun risque de détériorer les canalisations souterraines de gaz, eau, électricité, téléphone, … Tous les dommages occasionnés au terrain et à ses équipements sont à charge du locataire.
Les terrains de montage des chapiteaux doivent pouvoir être percés par martèlement normal par des piquets d'ancrage: la présence en sous-sol ou en surface de revêtements durs comme par exemple du béton, doit nous être signalé avant la signature du contrat. Il en sera de même quand le terrain n'offre pas la résistance nécessaire à l'attachement des piquets (marécages, sable…)
Lors du démontage du matériel, tout retard dû au non dégagement complet de celui-ci est facturé (prolongation de location, déplacements supplémentaires, allongement des heures de travail…)
</p>
<p>
<b>10.\tMatériel loué</b><br/>

Le locataire est tenu de contrôler la marchandise lors de son enlèvement, de la livraison ou du montage, celui-ci valant agréation complète de ladite marchandise et de son état impeccable. 

Il appartient au locataire de veiller à l'entretien du matériel livré et notamment d'éviter toute dégradation. Le locataire est responsable de tout dommage qui affecterait le matériel loué résultat d'un entreposage, d'un montage, d'une mise en œuvre, d'une utilisation inadéquate de sa part.

Le locataire remettra au loueur le matériel dans un état de propreté impeccable. Dans le cas contraire, les frais de nettoyage ou de remise en état seront facturés.
Il est défendu de clouer, agrafer, visser ou scier dans les boiseries et bâches, de les peindre ou de les marquer de façon durable, de cacher ou d'enlever la publicité du loueur, sauf stipulation expresse au moment de la signature du contrat. 

Quelle que soit la personne en charge du transport des biens loués, la période de location s'étend du jour où les biens loués quittent les entrepôts du loueur. Toute location se compte par période de trois jours ouvrables en ce compris le jour de livraison et le jour de reprise. Tout jour supplémentaire commencé est dû en entier avec le même taux de location. 

</p>
<p>
<b>11.\tDélais - Force majeure</b><br/>

Sauf faute lourde, le loueur est exonéré de toute responsabilité dans l'exécution du présent contrat, notamment en ce qui concerne des délais indiqués. Les délais de livraison et d'exécution sont toujours stipulés à titre indicatif. Nous ne pouvons être tenus au paiement de dommages et intérêts si ces délais ne sont pas respectés.
Tout cas de force majeure dans le chef du loueur, le dégage de toute responsabilité, sans aucun droit à un dédommagement pour le locataire quant à la livraison du matériel loué et donne le droit au loueur d'annuler ce contrat. Sont conventionnellement considérés comme cas de force majeure l'état de guerre, de mobilisation, les grèves, émeutes ou rebellions, accidents, maladies ou autres calamités, crues, feu, tempêtes, avaries, destruction ou perte de matériel y compris dans les transports, des circonstances extraordinaires comme défense d'exportation ou d'importation, des mesures entravantes de n'importe quelle autorité, interruptions dans les services électriques ou dans l'approvisionnement en carburant.
D'une manière générale, tout événement imprévu empêchant de commencer (dans ce cas l'acompte est immédiatement remboursé) ou de continuer normalement l'exécution des contrats, y compris tous les dérangements par lesquels l'exécution du contrat devient plus chère ou plus difficile.

Les présentes conditions générales de location sont également disponibles sur le site www.organic.be. 
</p>
<p>
<b>12.\tJuridiction</b><br/>

En cas de contestation, seront seuls compétents les tribunaux de Nivelles et la loi belge.
</p>
</td></tr></table>

</page>
";
    }

    public function getTemplateName()
    {
        return "invoice.pdf.fr.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
