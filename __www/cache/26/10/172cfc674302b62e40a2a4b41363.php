<?php

/* invoice.edit.tpl */
class __TwigTemplate_2610172cfc674302b62e40a2a4b41363 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<form id=\"t_form\" name=\"t_form\" method=\"POST\" class=\"invoiceForm\">
\t<h1>Editer une facture</h1>
\t<input type=\"hidden\" name=\"invoice[invoiceId]\" id=\"invoiceId\" value=\"";
        // line 3
        echo (isset($context['invoiceId']) ? $context['invoiceId'] : null);
        echo "\">
\tLes factures PDF se génèrent par défaut dans les 2 langues, FR et NL.
\t<br>
\t";
        // line 6
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "status", array(), "any", false) == "draft")) {
            // line 7
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 9
        echo "\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/invoices'\" class=\"button cancel\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t<table cellpadding=\"10\" style=\"border:0;background:none\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<table style=\"background:#ffffff\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tReference:
\t\t\t\t\t\t\t<b>";
        // line 19
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "reference", array(), "any", false);
        echo "</b>
\t\t\t\t\t\t\t<input type='hidden' name='invoice[reference]' value='";
        // line 20
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "reference", array(), "any", false);
        echo "' />
\t\t\t\t\t\t\t";
        // line 21
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "jobId", array(), "any", false) > 0)) {
            // line 22
            echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\tJob: 
\t\t\t\t\t\t\t";
            // line 24
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "jobReference", array(), "any", false);
            echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tLangue:
\t\t\t\t\t\t\t<select name=\"invoice[language]\">
\t\t\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['langs']) ? $context['langs'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['lang']) {
            // line 32
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['lang']) ? $context['lang'] : null);
            echo "\" ";
            if (((isset($context['lang']) ? $context['lang'] : null) == $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "language", array(), "any", false))) {
                echo " selected ";
            }
            echo " >";
            echo (isset($context['lang']) ? $context['lang'] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tStatut: 
\t\t\t\t\t\t\t\t";
        // line 37
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "status", array(), "any", false) != "paid")) {
            // line 38
            echo "\t\t\t\t\t\t\t<select name=\"invoice[status]\"  onchange=\"\$('#t_form').submit()\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 40
            if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "status", array(), "any", false) == "draft")) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"draft\" selected >En cours de rédaction</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ok\" >Envoyée au client</option>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "status", array(), "any", false) == "ok")) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"ok\" selected >Envoyée au client</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"paid\" >Payée</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        } else {
            // line 49
            echo "\t\t\t\t\t\t\t<input type='hidden' name='invoice[status]' value='paid' />
\t\t\t\t\t\t\tPayée le <input type='text' name='invoice[paymentDate]' value='";
            // line 50
            echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "paymentDate", array(), "any", false);
            echo "' class=\"datepicker2\" /> <input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<h3>Type</h3>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['offreTypes']) ? $context['offreTypes'] : null));
        foreach ($context['_seq'] as $context['key'] => $context['label']) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"invoice[offreType]\" value=\"";
            echo (isset($context['key']) ? $context['key'] : null);
            echo "\" ";
            echo (isset($context['disabled']) ? $context['disabled'] : null);
            echo " ";
            if (((isset($context['key']) ? $context['key'] : null) == $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "offreType", array(), "any", false))) {
                echo " checked ";
            }
            echo "> ";
            echo (isset($context['label']) ? $context['label'] : null);
            echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 65
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<h3>Client</h3>
\t\t\t\t
\t\t\t\t<h3>Client</h3>
\t\t\t\t<div id=\"clientDiv\" ";
        // line 73
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientId", array(), "any", false) <= 0)) {
            echo " class='alert' ";
        }
        echo " >

\t\t\t\t\t<input type=\"hidden\" name=\"invoice[clientId]\" id=\"clientId\" value=\"";
        // line 75
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientId", array(), "any", false);
        echo "\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo " />
\t\t\t\t\t<!--<input type=\"hidden\" name=\"clientType\" id=\"clientType\" value=\"";
        // line 76
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientType", array(), "any", false);
        echo "\" />-->

\t\t\t\t\t<div id='clientType'>
\t\t\t\t\t\t<input type='radio' name='invoice[clientType]' id=\"clientType1\" value=\"cie\"  ";
        // line 79
        if ((($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientType", array(), "any", false) == "cie") || ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientType", array(), "any", false) == ""))) {
            echo " checked='checked' ";
        }
        echo " ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo " />
\t\t\t\t\t\t<label for=\"clientType1\">
\t\t\t\t\t\t\tSociété
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type='radio' name='invoice[clientType]' id=\"clientType2\" value=\"part\" ";
        // line 83
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientType", array(), "any", false) == "part")) {
            echo " checked='checked' ";
        }
        echo " ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo " />
\t\t\t\t\t\t<label for=\"clientType2\">
\t\t\t\t\t\t\tParticulier
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div  >

\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tbody id=\"ciePanel\" ";
        // line 91
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientType", array(), "any", false) == "part")) {
            echo " style=\"display:none\" ";
        }
        echo " >

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t\t\t<span class=\"required\" rel=\"t_client_name\">*</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invoice[name]\" id=\"name\" value=\"";
        // line 99
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "name", array(), "any", false);
        echo "\" style=\"width:90%\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo " >
\t\t\t\t\t\t\t\t\t<div id='logs'></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>TVA</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invoice[vat]\" id=\"vat\" value=\"";
        // line 104
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "vat", array(), "any", false);
        echo "\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo "> Format: BE0123.456.789
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>Forme juridique</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"cieType\" name=\"invoice[cieType]\" ";
        // line 108
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['cieTypes']) ? $context['cieTypes'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['ct']) {
            // line 111
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['ct']) ? $context['ct'] : null);
            echo "\" ";
            if (((isset($context['ct']) ? $context['ct'] : null) == $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "cieType", array(), "any", false))) {
                echo " selected ";
            }
            echo ">";
            echo (isset($context['ct']) ? $context['ct'] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 113
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tautre
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"otherCieType\" name=\"invoice[otherCieType]\" value=\"\" ";
        // line 116
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Contact</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"invoice[clientTitle]\"  id=\"clientTitle\" ";
        // line 124
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['clientTitles']) ? $context['clientTitles'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['ct']) {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['ct']) ? $context['ct'] : null);
            echo "\" ";
            if (((isset($context['ct']) ? $context['ct'] : null) == $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "clientTitle", array(), "any", false))) {
                echo "selected";
            }
            echo ">";
            echo (isset($context['ct']) ? $context['ct'] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 128
        echo "}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invoice[lastname]\" id=\"lastname\" value=\"";
        // line 133
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "lastname", array(), "any", false);
        echo "\" style=\"width:100%\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>Prénom</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invoice[firstname]\" id=\"firstname\" value=\"";
        // line 137
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "firstname", array(), "any", false);
        echo "\" style=\"width:100%\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"clientAddress\" style=\"margin-top:10px\">
\t\t\t\t\t\t<h3>Facturation</h3>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invoice[address]\" id=\"client_address\" value=\"";
        // line 151
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "address", array(), "any", false);
        echo "\" style=\"width:100%\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tNuméro
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invoice[number]\" id=\"client_number\" value=\"";
        // line 156
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "number", array(), "any", false);
        echo "\" class=\"numField\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tCode postal
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invoice[zip]\" id=\"client_zip\" value=\"";
        // line 163
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "zip", array(), "any", false);
        echo "\" class=\"numField\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tVille
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invoice[city]\" id=\"client_city\" value=\"";
        // line 168
        echo $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "city", array(), "any", false);
        echo "\" style=\"width:100%\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tPays
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<select name=\"invoice[country]\" id=\"client_country\" ";
        // line 173
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">

\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 176
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['countries']) ? $context['countries'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['country']) {
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['country']) ? $context['country'] : null);
            echo "\"";
            if (((isset($context['country']) ? $context['country'] : null) == $this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "country", array(), "any", false))) {
                echo " selected ";
            }
            echo " >";
            echo (isset($context['country']) ? $context['country'] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 179
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<h3>Données financières</h3>
\t\t\t\t";
        // line 188
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "jobId", array(), "any", false) > 0)) {
            // line 189
            echo "\t\t\t\t<table >
\t\t\t\t\t<thead style='border-bottom:1px solid #ccc'>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th width=\"80%\">Dans offre</th>
\t\t\t\t\t\t\t<th class=\"productPrice\">Montant HTVA</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 198
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['products']) ? $context['products'] : null));
            foreach ($context['_seq'] as $context['_key'] => $context['p']) {
                // line 199
                echo "\t\t\t\t\t\t<tr rel=\"";
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "productId", array(), "any", false);
                echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type='hidden' name=\"products[";
                // line 201
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "productId", array(), "any", false);
                echo "][isFromOffre]\" value='1' />
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"products[";
                // line 202
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "productId", array(), "any", false);
                echo "][description]\" value=\"";
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "description", array(), "any", false);
                echo "\" class=\"productPrice\" >
\t\t\t\t\t\t\t<textarea  class=\"productDescription\" disabled>";
                // line 203
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "description", array(), "any", false);
                echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"productPrice\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"products[";
                // line 206
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "productId", array(), "any", false);
                echo "][price]\" value=\"";
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "price", array(), "any", false);
                echo "\" class=\"productPrice\"  >
\t\t\t\t\t\t\t<input type=\"text\"  value=\"";
                // line 207
                echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "price", array(), "any", false);
                echo "\" class=\"productPrice\" disabled > 
\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 215
            echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\">Total HTVA :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t";
            // line 220
            echo (isset($context['productsTotalHT']) ? $context['productsTotalHT'] : null);
            echo "  €
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr style='border-bottom:1px solid #ccc'>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t<select name=\"p_priceType\" ";
            // line 227
            echo (isset($context['disabled']) ? $context['disabled'] : null);
            echo ">
\t\t\t\t\t\t\t\t<option value=\"htva\" ";
            // line 228
            if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "priceType", array(), "any", false) == "htva")) {
                echo " selected ";
            }
            echo " >TVA (21%)</option>
\t\t\t\t\t\t\t\t<option value=\"intra\" ";
            // line 229
            if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "priceType", array(), "any", false) == "intra")) {
                echo " selected ";
            }
            echo ">Intra communautaire</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
            // line 232
            echo (isset($context['productsTVA']) ? $context['productsTVA'] : null);
            echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">TOTAL TTC :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">";
            // line 237
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
\t\t\t\t<table>
\t\t\t\t\t<thead style='border-bottom:1px solid #ccc'>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th width=\"40%\">Condition</th>
\t\t\t\t\t\t\t<th width=\"20%\">Tranche</th>
\t\t\t\t\t\t\t<th width=\"20%\"></th>
\t\t\t\t\t\t\t<th class=\"productPrice\">Montant HTVA</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 258
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "comments", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t<td >";
            // line 259
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "slice", array(), "any", false);
            echo " %</td>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">TOTAL HTVA :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\"> ";
            // line 261
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "priceHT", array(), "any", false);
            echo " €
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">TVA :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\"> ";
            // line 271
            echo (isset($context['sliceTVA']) ? $context['sliceTVA'] : null);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
        }
        // line 278
        echo "\t\t\t\t
\t\t\t\t";
        // line 279
        if ((((isset($context['isLastSlice']) ? $context['isLastSlice'] : null) == 1) || ($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "jobId", array(), "any", false) <= 0))) {
            // line 280
            echo "\t\t\t\t<table id=\"fDatas\">
\t\t\t\t
\t\t\t\t\t<thead style='border-bottom:1px solid #ccc'>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th width=\"80%\">Hors offre</th>
\t\t\t\t\t\t\t<th class=\"productPrice\">Montant HTVA</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 291
            if ((((isset($context['outJobHT']) ? $context['outJobHT'] : null) > 0) && ((isset($context['isLastSlice']) ? $context['isLastSlice'] : null) == 1))) {
                // line 292
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context['newproducts']) ? $context['newproducts'] : null));
                foreach ($context['_seq'] as $context['_key'] => $context['p']) {
                    // line 293
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr rel=\"";
                    // line 294
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "productId", array(), "any", false);
                    echo "\">
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type='hidden' name=\"products[";
                    // line 296
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "productId", array(), "any", false);
                    echo "][isFromOffre]\" value='0' ";
                    echo (isset($context['disabled']) ? $context['disabled'] : null);
                    echo " />
\t\t\t\t\t\t\t\t<textarea name=\"products[";
                    // line 297
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "productId", array(), "any", false);
                    echo "][description]\" class=\"productDescription\"  ";
                    echo (isset($context['disabled']) ? $context['disabled'] : null);
                    echo ">";
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "description", array(), "any", false);
                    echo "</textarea>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"productPrice\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"products[";
                    // line 300
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "productId", array(), "any", false);
                    echo "][price]\" value=\"";
                    echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "price", array(), "any", false);
                    echo "\" class=\"productPrice\" ";
                    echo (isset($context['disabled']) ? $context['disabled'] : null);
                    echo ">
\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 304
                    if (((isset($context['disabled']) ? $context['disabled'] : null) == "")) {
                        // line 305
                        echo "\t\t\t\t\t\t\t\t<a onclick=\"removeProduct(\$(this))\">
\t\t\t\t\t\t\t\t<img src=\"/themes/default/images/buttons/del.png\" alt=\"Supprimer\" title=\"Supprimer\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 309
                    echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 312
                echo "\t\t\t\t\t\t";
            }
            // line 313
            echo "\t\t\t\t\t</tbody>
\t\t\t\t\t";
            // line 314
            if ((((isset($context['outJobHT']) ? $context['outJobHT'] : null) > 0) && ((isset($context['isLastSlice']) ? $context['isLastSlice'] : null) == 1))) {
                // line 315
                echo "\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\">Total HTVA :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t";
                // line 319
                echo (isset($context['outJobHT']) ? $context['outJobHT'] : null);
                echo "  €
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t<select name=\"np_priceType\" ";
                // line 326
                echo (isset($context['disabled']) ? $context['disabled'] : null);
                echo ">
\t\t\t\t\t\t\t\t<option value=\"htva\" ";
                // line 327
                if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "priceType", array(), "any", false) == "htva")) {
                    echo " selected ";
                }
                echo " >TVA (21%) :</option>
\t\t\t\t\t\t\t\t<option value=\"intra\" ";
                // line 328
                if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "priceType", array(), "any", false) == "intra")) {
                    echo " selected ";
                }
                echo ">Intra communautaire</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
                // line 331
                echo (isset($context['outJobTVA']) ? $context['outJobTVA'] : null);
                echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">TOTAL TTC :</td>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">";
                // line 336
                echo (isset($context['outJobTTC']) ? $context['outJobTTC'] : null);
                echo " €</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t\t";
            }
            // line 341
            echo "\t\t\t\t</table>
\t\t\t\t";
            // line 342
            if (((isset($context['disabled']) ? $context['disabled'] : null) == "")) {
                // line 343
                echo "\t\t\t\t<input type=\"button\" style=\"padding:2px;color:#000000\" value=\"+ Ajouter une ligne au budget\" onclick=\"addProduct2invoice()\"  />
\t\t\t\t";
            }
            // line 345
            echo "\t\t\t\t";
        }
        // line 346
        echo "\t\t\t\t<table style='border:1px solid #000;font-weight:bold'>
\t\t\t\t\t<tbody><tr>
\t\t\t\t\t\t\t<td style='width:80%;text-align:right;'>
\t\t\t\t\t\t\t<b>A payer :</td><td> ";
        // line 349
        echo (isset($context['grandTotal']) ? $context['grandTotal'] : null);
        echo " €</b>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t</tr></tbody>
\t\t\t\t</table>
\t\t\t\t
\t\t\t<input type=\"hidden\" name=\"invoice[priceHT]\" value=\"";
        // line 355
        echo (isset($context['grandTotalHT']) ? $context['grandTotalHT'] : null);
        echo "\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t
\t\t\t\t
\t\t\t\t<h3>Conditions de vente/location</h3>
\t\t\t\t<input type=\"checkbox\" id=\"conditions1\" name=\"invoice[conditions1]\" value=\"1\" ";
        // line 359
        if (($this->getAttribute((isset($context['invoices']) ? $context['invoices'] : null), "conditions1", array(), "any", false) == 1)) {
            echo " checked ";
        }
        echo " ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t";
        // line 360
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "language", array(), "any", false) == "nl")) {
            echo "\t\t
Betalingsvoorwaarden: contant
Communicatie: factuur nummer.
\t\t\t\t";
        } else {
            // line 364
            echo "Conditions de paiement: comptant
Communication à mentionner: le numéro de cette facture. 
\t\t\t\t";
        }
        // line 367
        echo "\t\t\t\t<br>
\t\t\t\t<input type=\"checkbox\" id=\"conditions2\" name=\"invoice[conditions2]\" value=\"1\" ";
        // line 368
        if (($this->getAttribute((isset($context['invoices']) ? $context['invoices'] : null), "conditions2", array(), "any", false) == 1)) {
            echo " checked ";
        }
        echo " ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t";
        // line 369
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "language", array(), "any", false) == "nl")) {
            echo "\t\t
\t\t\t\tDe betaling van uw voorschot, bevestigt uw bestelling.
\t\t\t\t";
        } else {
            // line 372
            echo "\t\t\t\tLe paiement de votre acompte confirme votre commande.
\t\t\t\t";
        }
        // line 374
        echo "\t\t\t\t<!--textarea name='t_conditions' style='width:100%;height:60px'>-->
\t\t\t\t<h3>Notes</h3>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<textarea name=\"invoice[comments]\" style=\"width:100%\" rows=\"5\" ";
        // line 380
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t";
        // line 390
        if (($this->getAttribute((isset($context['invoice']) ? $context['invoice'] : null), "status", array(), "any", false) == "draft")) {
            // line 391
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 393
        echo "\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/invoices'\" class=\"button cancel\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
</form>";
    }

    public function getTemplateName()
    {
        return "invoice.edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
