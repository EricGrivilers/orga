<?php

/* client.edit.tpl */
class __TwigTemplate_6f7fc6a2f5d7529ddc1ea6d4a2c83ae8 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<form id=\"form\" name=\"form\" method=\"POST\" class=\"offreForm\" action='#'>
\t<h1>Editer un client</h1>
\t<input type=\"hidden\" name=\"client[clientId]\" id=\"clientId\" value=\"";
        // line 3
        echo (isset($context['clientId']) ? $context['clientId'] : null);
        echo "\">
\t
\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t
\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/clients'\" class=\"button cancel\">
\t<table cellpadding=\"10\" style=\"border:0;background:none\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t
\t\t\t\t<table style=\"background:#ffffff\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tReference:
\t\t\t\t\t\t\t<b>";
        // line 18
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "reference", array(), "any", false);
        echo "</b>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"client[reference]\"  value=\"";
        // line 19
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "reference", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"client[clientId]\" id=\"clientId\" value=\"";
        // line 20
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientId", array(), "any", false);
        echo "\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tLangue
\t\t\t\t\t\t\t<select name=\"client[language]\">
\t\t\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['langs']) ? $context['langs'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['lang']) {
            // line 27
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['lang']) ? $context['lang'] : null);
            echo "\" ";
            if (((isset($context['lang']) ? $context['lang'] : null) == $this->getAttribute((isset($context['client']) ? $context['client'] : null), "language", array(), "any", false))) {
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
        // line 29
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><input class=\"button save\" type=\"button\" value=\"Nouvelle offre\" onclick=\"createOffreFromClient(";
        // line 31
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientId", array(), "any", false);
        echo ")\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div id=\"clientDiv\" ";
        // line 37
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientId", array(), "any", false) <= 0)) {
            echo " class='alert' ";
        }
        echo " >

\t\t\t\t\t
\t\t\t\t\t<!--<input type=\"hidden\" name=\"clientType\" id=\"clientType\" value=\"";
        // line 40
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false);
        echo "\" />-->

\t\t\t\t\t<div id='clientType'>
\t\t\t\t\t\t<input type='radio' name='client[clientType]' id=\"clientType1\" value=\"cie\"  ";
        // line 43
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false) == "cie")) {
            echo " checked='checked' ";
        }
        echo " />
\t\t\t\t\t\t<label for=\"clientType1\">
\t\t\t\t\t\t\tSociété
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type='radio' name='client[clientType]' id=\"clientType2\" value=\"part\" ";
        // line 47
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false) == "part")) {
            echo " checked='checked' ";
        }
        echo " />
\t\t\t\t\t\t<label for=\"clientType2\">
\t\t\t\t\t\t\tParticulier
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div  >

\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tbody id=\"ciePanel\" ";
        // line 55
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false) == "part")) {
            echo " style=\"display:none\" ";
        }
        echo " >

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t\t\t<span class=\"required\" rel=\"t_client_name\">*</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[name]\" id=\"name\" value=\"";
        // line 63
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "name", array(), "any", false);
        echo "\" style=\"width:90%\" >
\t\t\t\t\t\t\t\t\t<div id='logs'></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>TVA</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[vat]\" id=\"vat\" value=\"";
        // line 68
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "vat", array(), "any", false);
        echo "\" ";
        if (((isset($context['errorVat']) ? $context['errorVat'] : null) > 0)) {
            echo " style='border:2px dashed red' ";
        }
        echo " /> Format: BE0123.456.789
\t\t\t\t\t\t\t\t\t";
        // line 69
        if (((isset($context['errorVat']) ? $context['errorVat'] : null) > 0)) {
            echo "<div class='alert'>Ce numéro de TVA existe déja: ";
            echo (isset($context['existingVat']) ? $context['existingVat'] : null);
            echo "</div> ";
        }
        // line 70
        echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>Forme juridique</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"cieType\" name=\"client[cieType]\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['cieTypes']) ? $context['cieTypes'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['ct']) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['ct']) ? $context['ct'] : null);
            echo "\" ";
            if (((isset($context['ct']) ? $context['ct'] : null) == $this->getAttribute((isset($context['client']) ? $context['client'] : null), "cieType", array(), "any", false))) {
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
        // line 78
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tautre
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"otherCieType\" name=\"client[otherCieType]\" value=\"\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Contact</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"client[clientTitle]\"  id=\"clientTitle\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['clientTitles']) ? $context['clientTitles'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['ct']) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['ct']) ? $context['ct'] : null);
            echo "\" ";
            if (((isset($context['ct']) ? $context['ct'] : null) == $this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientTitle", array(), "any", false))) {
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
        // line 93
        echo "}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[lastname]\" id=\"lastname\" value=\"";
        // line 98
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "lastname", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>Prénom</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[firstname]\" id=\"firstname\" value=\"";
        // line 102
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "firstname", array(), "any", false);
        echo "\" style=\"width:100%\">
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
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[address]\" id=\"client_address\" value=\"";
        // line 116
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "address", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tNuméro
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[number]\" id=\"client_number\" value=\"";
        // line 121
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "number", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tCode postal
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[zip]\" id=\"client_zip\" value=\"";
        // line 128
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "zip", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tVille
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[city]\" id=\"client_city\" value=\"";
        // line 133
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "city", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tPays
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<select name=\"client[country]\" id=\"client_country\">

\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['countries']) ? $context['countries'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['country']) {
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['country']) ? $context['country'] : null);
            echo "\"";
            if (((isset($context['country']) ? $context['country'] : null) == $this->getAttribute((isset($context['client']) ? $context['client'] : null), "country", array(), "any", false))) {
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
        // line 144
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tTéléphone
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[phone]\" id=\"client_phone\" value=\"";
        // line 151
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "phone", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tMobile
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[mobile]\" id=\"client_mobile\" value=\"";
        // line 156
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "mobile", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tAutre
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[phone2]\" id=\"client_phone2\" value=\"";
        // line 161
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "phone2", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tFax
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[fax]\" id=\"client_fax\" value=\"";
        // line 168
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "fax", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[email]\" id=\"client_email\" value=\"";
        // line 173
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "email", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tSite web
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[url]\" id=\"client_url\" value=\"";
        // line 178
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "url", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3>Tentes</h3>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead><tr><td>Reference</td><td>Nom</td><td>long.</td><td>larg.</td><td>surf.</td></tr></thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 191
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['tents']) ? $context['tents'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['t']) {
            // line 192
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><a href='/tents?tentId=";
            // line 193
            echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "tentId", array(), "any", false);
            echo "'>";
            echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "reference", array(), "any", false);
            echo "</a></td>
\t\t\t\t\t\t\t\t<td>";
            // line 194
            echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "name", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 195
            echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "length", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 196
            echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "width", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 197
            echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "m2", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 200
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<h3>Factures</h3>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead><tr><td>Reference</td><td>Montant HT</td><td>Date</td><td>Job</td><td>Tranche</td><td>Statut</td><td></td></tr></thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 206
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['invoices']) ? $context['invoices'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['i']) {
            // line 207
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><a href='/invoices?invoiceId=";
            // line 208
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "invoiceId", array(), "any", false);
            echo "'>";
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "reference", array(), "any", false);
            echo "</a></td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>";
            // line 210
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "priceHT", array(), "any", false);
            echo " &euro;</td>
\t\t\t\t\t\t\t\t<td>";
            // line 211
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "insertDate", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td><a href='/jobs?jobId=";
            // line 212
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "jobId", array(), "any", false);
            echo "'>";
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "jobReference", array(), "any", false);
            echo "</a></td>
\t\t\t\t\t\t\t\t<td>";
            // line 213
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "cSlice", array(), "any", false);
            echo "/";
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "nbSlices", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 214
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "status", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td><a onclick=\"getInvoicePdf('";
            // line 215
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "invoiceId", array(), "any", false);
            echo "','nl','')\" target=\"_blank\"><img src=\"/themes/default/images/buttons/pdf.png\"> nl</a>
\t\t\t\t\t\t\t\t\t<a onclick=\"getInvoicePdf('";
            // line 216
            echo $this->getAttribute((isset($context['i']) ? $context['i'] : null), "invoiceId", array(), "any", false);
            echo "','fr','')\" target=\"_blank\"><img src=\"/themes/default/images/buttons/pdf.png\"> fr</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 219
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<h3>Jobs</h3>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead><tr><td>Reference</td><td>Montant HT</td><td>Montage</td><td>Démontage</td><td>Offre</td><td>Facture</td><td></td></tr></thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 225
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['jobs']) ? $context['jobs'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['j']) {
            // line 226
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><a href='/jobs?jobId=";
            // line 227
            echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "jobId", array(), "any", false);
            echo "'>";
            echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "reference", array(), "any", false);
            echo "</a></td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>";
            // line 229
            echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "priceHT", array(), "any", false);
            echo " &euro;</td>
\t\t\t\t\t\t\t\t<td>";
            // line 230
            echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "startBuild", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 231
            echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "endBuild", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td><a href='/quotes?offreId=";
            // line 232
            echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "offreId", array(), "any", false);
            echo "'>";
            echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "offreReference", array(), "any", false);
            echo "</a></td>
\t\t\t\t\t\t\t\t<td>";
            // line 233
            if (($this->getAttribute((isset($context['j']) ? $context['j'] : null), "invoiceId", array(), "any", false) > 0)) {
                echo "<a href='/invoices?invoiceId=";
                echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "invoiceId", array(), "any", false);
                echo "'>";
                echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "invoiceReference", array(), "any", false);
                echo "</a>";
            }
            echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td><a onclick=\"getJobPdf(";
            // line 235
            echo $this->getAttribute((isset($context['j']) ? $context['j'] : null), "jobId", array(), "any", false);
            echo ")\" target=\"_blank\"><img src=\"/themes/default/images/buttons/pdf.png\"></a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 238
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<h3>Offres</h3>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead><tr><td>Reference</td><td>Montant HT</td><td>Montage</td><td>Démontage</td><td>Statut</td><td></td></tr></thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 244
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['offres']) ? $context['offres'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['o']) {
            // line 245
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><a href='/quotes?offreId=";
            // line 246
            echo $this->getAttribute((isset($context['o']) ? $context['o'] : null), "offreId", array(), "any", false);
            echo "'>";
            echo $this->getAttribute((isset($context['o']) ? $context['o'] : null), "reference", array(), "any", false);
            echo "</a></td>
\t\t\t\t\t\t\t\t<td>";
            // line 247
            echo $this->getAttribute((isset($context['o']) ? $context['o'] : null), "priceHT", array(), "any", false);
            echo " &euro;</td>
\t\t\t\t\t\t\t\t<td>";
            // line 248
            echo $this->getAttribute((isset($context['o']) ? $context['o'] : null), "startBuild", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 249
            echo $this->getAttribute((isset($context['o']) ? $context['o'] : null), "endBuild", array(), "any", false);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 250
            if (($this->getAttribute((isset($context['o']) ? $context['o'] : null), "jobId", array(), "any", false) > 0)) {
                // line 251
                echo "\t\t\t\t\t\t\t\t\tJOB: <a href='/jobs?jobId=";
                echo $this->getAttribute((isset($context['o']) ? $context['o'] : null), "jobId", array(), "any", false);
                echo "'>";
                echo $this->getAttribute((isset($context['o']) ? $context['o'] : null), "jobReference", array(), "any", false);
                echo "</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 253
                echo "\t\t\t\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context['o']) ? $context['o'] : null), "status", array(), "any", false);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 254
            echo "</td>
\t\t\t\t\t\t\t\t<td><a onclick=\"getOffrePdf(";
            // line 255
            echo $this->getAttribute((isset($context['o']) ? $context['o'] : null), "offreId", array(), "any", false);
            echo ")\" target=\"_blank\"><img src=\"/themes/default/images/buttons/pdf.png\"></a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 258
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t
\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">

\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/clients'\" class=\"button cancel\">
</form>";
    }

    public function getTemplateName()
    {
        return "client.edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
