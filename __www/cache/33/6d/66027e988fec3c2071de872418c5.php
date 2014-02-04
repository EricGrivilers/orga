<?php

/* offre.edit.tpl */
class __TwigTemplate_336d66027e988fec3c2071de872418c5 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "<form id=\"form\" name=\"form\" method=\"POST\" class=\"offreForm\" action='#'>
\t<h1>Editer une offre</h1>
\t<input type=\"hidden\" name=\"offre[offreId]\" id=\"offreId\" value=\"";
        // line 4
        echo (isset($context['offreId']) ? $context['offreId'] : null);
        echo "\">
\t";
        // line 5
        if ((!$this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false))) {
            // line 6
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 8
        echo "\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/quotes'\" class=\"button cancel\">
\t<table cellpadding=\"10\" style=\"border:0;background:none\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<h3>Status</h3>
\t\t\t\t<table style=\"background:#ffffff\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tLangue
\t\t\t\t\t\t\t<select name=\"offre[language]\">
\t\t\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['langs']) ? $context['langs'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['lang']) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['lang']) ? $context['lang'] : null);
            echo "\" ";
            if (((isset($context['lang']) ? $context['lang'] : null) == $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "language", array(), "any", false))) {
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
        // line 24
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tReference:
\t\t\t\t\t\t\t<b>";
        // line 31
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "reference", array(), "any", false);
        echo "</b>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"offre[reference]\" id=\"offreId\" value=\"";
        // line 32
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "reference", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tStatut
\t\t\t\t\t\t\t";
        // line 37
        if ($this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false)) {
            // line 38
            echo "\t\t\t\t\t\t\tJOB: <b><a href='/jobs?jobId=";
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false);
            echo "'>";
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "reference", array(), "any", false);
            echo "</a></b><input type='hidden' name='offre[jobId]' value='";
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false);
            echo "' />
\t\t\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\t<select name=\"offre[status]\" id=\"status\" onchange=\"\$('#form').submit()\" ";
            if (($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "error", array(), "any", false) || $this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false))) {
                echo " disabled ";
            }
            echo ">
\t\t\t\t\t\t\t\t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['status']) ? $context['status'] : null));
            foreach ($context['_seq'] as $context['key'] => $context['value']) {
                // line 42
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (isset($context['key']) ? $context['key'] : null);
                echo "\" ";
                if (((isset($context['key']) ? $context['key'] : null) == $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "status", array(), "any", false))) {
                    echo "} selected ";
                }
                echo " >";
                echo (isset($context['value']) ? $context['value'] : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 44
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 50
        if ($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "error", array(), "any", false)) {
            echo " 
\t\t\t\t\t\t\t<div class='alert'>
\t\t\t\t\t\t\t\tCette offre comporte des erreurs.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\tNotes
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<textarea name=\"offre[priceComments]\" rows=\"3\">";
        // line 59
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "priceComments", array(), "any", false);
        echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\tMontant:
\t\t\t\t\t\t\t<b> ";
        // line 66
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "price", array(), "any", false);
        echo " &euro; HTVA</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<h3>Type</h3>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['offreTypes']) ? $context['offreTypes'] : null));
        foreach ($context['_seq'] as $context['ot'] => $context['label']) {
            // line 77
            echo "\t\t\t\t\t\t\t<input type=\"radio\" name=\"offre[offreType]\" value=\"";
            echo (isset($context['ot']) ? $context['ot'] : null);
            echo "\" ";
            if (((isset($context['ot']) ? $context['ot'] : null) == $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreType", array(), "any", false))) {
                echo "checked";
            }
            echo " />
\t\t\t\t\t\t\t";
            // line 78
            echo (isset($context['label']) ? $context['label'] : null);
            echo "
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ot'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 80
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<h3>Client</h3>
\t\t\t\t<div id=\"clientDiv\" ";
        // line 85
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientId", array(), "any", false) <= 0)) {
            echo " class='alert' ";
        }
        echo " >

\t\t\t\t\t<input type=\"hidden\" name=\"offre[clientId]\" id=\"clientId\" value=\"";
        // line 87
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "clientId", array(), "any", false);
        echo "\" />
\t\t\t\t\t<!--<input type=\"hidden\" name=\"clientType\" id=\"clientType\" value=\"";
        // line 88
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false);
        echo "\" />-->

\t\t\t\t\t<div id='clientType'>
\t\t\t\t\t\t<input type='radio' name='client[clientType]' id=\"clientType1\" value=\"cie\"  ";
        // line 91
        if ((($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false) == "cie") || ($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false) == ""))) {
            echo " checked='checked' ";
        }
        echo " />
\t\t\t\t\t\t<label for=\"clientType1\">
\t\t\t\t\t\t\tSociété
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type='radio' name='client[clientType]' id=\"clientType2\" value=\"part\" ";
        // line 95
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
        // line 103
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
        // line 111
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "name", array(), "any", false);
        echo "\" style=\"width:90%\" >
\t\t\t\t\t\t\t\t\t<div id='logs'></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>TVA</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[vat]\" id=\"vat\" value=\"";
        // line 116
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "vat", array(), "any", false);
        echo "\"> Format: BE0123.456.789
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>Forme juridique</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"cieType\" name=\"client[cieType]\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['cieTypes']) ? $context['cieTypes'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['ct']) {
            // line 123
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
        // line 125
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
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['clientTitles']) ? $context['clientTitles'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['ct']) {
            // line 139
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
        // line 140
        echo "}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[lastname]\" id=\"lastname\" value=\"";
        // line 145
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "lastname", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>Prénom</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[firstname]\" id=\"firstname\" value=\"";
        // line 149
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
        // line 163
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "address", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tNuméro
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[number]\" id=\"client_number\" value=\"";
        // line 168
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "number", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tCode postal
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[zip]\" id=\"client_zip\" value=\"";
        // line 175
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "zip", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tVille
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[city]\" id=\"client_city\" value=\"";
        // line 180
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "city", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tPays
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<select name=\"client[country]\" id=\"client_country\">

\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['countries']) ? $context['countries'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['country']) {
            // line 189
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
        // line 191
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tTéléphone
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[phone]\" id=\"client_phone\" value=\"";
        // line 198
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "phone", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tMobile
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[mobile]\" id=\"client_mobile\" value=\"";
        // line 203
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "mobile", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tAutre
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[phone2]\" id=\"client_phone2\" value=\"";
        // line 208
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "phone2", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tFax
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[fax]\" id=\"client_fax\" value=\"";
        // line 215
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "fax", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[email]\" id=\"client_email\" value=\"";
        // line 220
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "email", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tSite web
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[url]\" id=\"client_url\" value=\"";
        // line 225
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "url", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"addressesDiv\">
\t\t\t\t\t<h3>Livraison</h3>
\t\t\t\t\t<input type='button' onclick=\"copyAddress('offre')\" value=\"copier l'adresse de facturation\" />
\t\t\t\t\t<table id=\"address_delivery_table\" style=\"\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"offre[address]\" id=\"offre_address\" value=\"";
        // line 241
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "address", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tNuméro
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"offre[number]\" id=\"offre_number\" value=\"";
        // line 246
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "number", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tCode postal
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"offre[zip]\" id=\"offre_zip\" value=\"";
        // line 253
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "zip", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tVille
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"offre[city]\" id=\"offre_city\" value=\"";
        // line 258
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "city", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tPays
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select name=\"offre[country]\" id=\"offre_country\" >

\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 267
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['countries']) ? $context['countries'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['country']) {
            // line 268
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['country']) ? $context['country'] : null);
            echo "\"";
            if (((isset($context['country']) ? $context['country'] : null) == $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "country", array(), "any", false))) {
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
        // line 270
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"offre[contact]\"  value=\"";
        // line 279
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "contact", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tFax
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"offre[fax]\"  value=\"";
        // line 288
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "fax", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"offre[email]\"  value=\"";
        // line 293
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "email", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tTéléphone
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"offre[phone]\" value=\"";
        // line 298
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "phone", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\tNotes
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<textarea id=\"offre_comments\" name=\"offre[offreComments]\" style=\"width:80%\">";
        // line 305
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreComments", array(), "any", false);
        echo "</textarea>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<h3>Planning</h3>
\t\t\t\t<!--<input type=\"hidden\" name=\"planningPreviewId\" value=\"";
        // line 312
        echo $this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "previewId", array(), "any", false);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"planningBuildId\" value=\"";
        // line 313
        echo $this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "buildId", array(), "any", false);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"planningInplaceId\" value=\"";
        // line 314
        echo $this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "inplaceId", array(), "any", false);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"planningUnbuildId\" value=\"";
        // line 315
        echo $this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "unbuildId", array(), "any", false);
        echo "\">-->
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 318
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['planning']) ? $context['planning'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['p']) {
            // line 319
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 320
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "label", array(), "any", false);
            echo " <!--<input type=\"hidden\" name=\"planning[";
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false);
            echo "][planningId]\" value=\"";
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningId", array(), "any", false);
            echo "\">--></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tDu
\t\t\t\t\t\t\t<input type=\"text\" name=\"planning[";
            // line 323
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false);
            echo "][startDate]\" id=\"";
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false);
            echo "_startDate\" value=\"";
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "formatedStartDate", array(), "any", false);
            echo "\" class=\"datepicker\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tAu
\t\t\t\t\t\t\t<input type=\"text\" name=\"planning[";
            // line 328
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false);
            echo "][endDate]\" id=\"";
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false);
            echo "_endDate\" value=\"";
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "formatedEndDate", array(), "any", false);
            echo "\" class=\"datepicker\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tResponsable
\t\t\t\t\t\t\t<select name=\"planning[";
            // line 333
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false);
            echo "][userId]\" id=\"userId\">
\t\t\t\t\t\t\t\t<option value=\"\">...</option>
\t\t\t\t\t\t\t\t";
            // line 335
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['users']) ? $context['users'] : null));
            foreach ($context['_seq'] as $context['userId'] => $context['username']) {
                // line 336
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (isset($context['userId']) ? $context['userId'] : null);
                echo "\" ";
                if (($this->getAttribute((isset($context['p']) ? $context['p'] : null), "userId", array(), "any", false) == (isset($context['userId']) ? $context['userId'] : null))) {
                    echo " selected ";
                }
                echo " >";
                echo (isset($context['username']) ? $context['username'] : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['userId'], $context['username'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 338
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 343
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tCommentaires
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t(interne)
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t<textarea id=\"planningComments\" name=\"offre[planningComments]\" style=\"width:80%\">";
        // line 351
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "planningComments", array(), "any", false);
        echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"saveBut\">
\t\t\t\t\t";
        // line 357
        if ((!$this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false))) {
            // line 358
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 360
        echo "\t\t\t\t</div>
\t\t\t\t<h3>Tentes</h3>
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 364
        if ((($this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "build", array(), "any", false), "startDate", array(), "any", false) != "0000-00-00 00:00:00") && ($this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "unbuild", array(), "any", false), "endDate", array(), "any", false) != "0000-00-00 00:00:00"))) {
            // line 365
            echo "\t\t\t\t
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tSurface souhaitées
\t\t\t\t\t\t\t<input type=\"text\"  name=\"offre[surface]\" value=\"";
            // line 371
            echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "surface", array(), "any", false);
            echo "\" class=\"numField\">
\t\t\t\t\t\t\tm2
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table style=\"width:auto\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<b>Disponibles</b>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<select id=\"t_available_tents\" class=\"multiselect\" multiple=\"multiple\"  style=\"width:400px; height:150px;\" rows=\"5\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 384
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "available", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['tent']) {
                // line 385
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "\">";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "reference", array(), "any", false);
                echo " - ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "name", array(), "any", false);
                echo " - ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "color", array(), "any", false);
                echo "  - ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "m2", array(), "any", false);
                echo "m2 ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "inOption", array(), "any", false);
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tent'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 387
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td vertical-align=\"middle\" style=\"vertical-align:middle\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"ajouter &gt;\" onclick=\"addTent()\">
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"&lt; enlever\" onclick=\"removeTent()\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<b>Choisies</b>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<select id=\"t_chosen_tents\" class=\"multiselect\" multiple=\"multiple\"  style=\"width:400px; height:150px;\" rows=\"5\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 399
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "currentOffre", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['tent']) {
                // line 400
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "class", array(), "any", false);
                echo "\" value=\"";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "\">";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "reference", array(), "any", false);
                echo " - ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "name", array(), "any", false);
                echo " - ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "color", array(), "any", false);
                echo "  - ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "m2", array(), "any", false);
                echo "m2 ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "options", array(), "any", false);
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tent'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 402
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"offre[tents]\" id=\"t_hidden_chosen\" value=\"";
            // line 403
            echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "tents", array(), "any", false);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tDetails
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<textarea name=\"offre[tentsComments]\" style=\"width:100%;height:100px\">";
            // line 415
            echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "tentsComments", array(), "any", false);
            echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tSurface calculée
\t\t\t\t\t\t\t<b>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"disable numField\"  name=\"calculatedSurface\" id=\"calculatedSurface\" value=\"";
            // line 423
            echo $this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "calculatedSurface", array(), "any", false);
            echo "\">
\t\t\t\t\t\t\tm2
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t
\t\t\t\t<div class=\"saveBut\">
\t\t\t\t\t";
            // line 432
            if ((!$this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false))) {
                // line 433
                echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
            }
            // line 435
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 437
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "currentOffre", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['tent']) {
                // line 438
                echo "\t\t\t\t<table style=\"background:#c0c0c0\" ";
                if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "class", array(), "any", false) == "alert")) {
                    echo " class='alert' ";
                }
                echo " >
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t<b>Tente ";
                // line 442
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "reference", array(), "any", false);
                echo " ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "name", array(), "any", false);
                echo "</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Reference : <a href=\"/tents?tentId=";
                // line 446
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "\">";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "reference", array(), "any", false);
                echo "</a></td>
\t\t\t\t\t\t\t<td>Propriétaire: ";
                // line 447
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "ownername", array(), "any", false);
                echo "</td>
\t\t\t\t\t\t\t<td>Couleur : ";
                // line 448
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "color", array(), "any", false);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Largeur : ";
                // line 451
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "width", array(), "any", false);
                echo " m</td>
\t\t\t\t\t\t\t<td>Longueur: ";
                // line 452
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "length", array(), "any", false);
                echo " m</td>
\t\t\t\t\t\t\t<td>Surface : ";
                // line 453
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "m2", array(), "any", false);
                echo " m2</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tPlancher
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tents[";
                // line 458
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][plancher]\" value=\"0\" ";
                if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "plancher", array(), "any", false) == 0)) {
                    echo " checked ";
                }
                echo " />
\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tents[";
                // line 460
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][plancher]\" value=\"1\" ";
                if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "plancher", array(), "any", false) == 1)) {
                    echo " checked ";
                }
                echo " />
\t\t\t\t\t\t\tOui, surface:
\t\t\t\t\t\t\t<input type=\"text\" name=\"tents[";
                // line 462
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][surfacePlancher]\" value=\"";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "surfacePlancher", array(), "any", false);
                echo "\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tSol
\t\t\t\t\t\t\t<input type=\"text\" name=\"tents[";
                // line 466
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][sol]\" value=\"";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "sol", array(), "any", false);
                echo "\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tCanalisations
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tents[";
                // line 470
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][canalisation]\" value=\"1\" ";
                if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "canalisation", array(), "any", false) == 1)) {
                    echo " checked ";
                }
                echo " />
\t\t\t\t\t\t\tOui
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tents[";
                // line 472
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][canalisation]\" value=\"0\" ";
                if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "canalisation", array(), "any", false) == 0)) {
                    echo " checked ";
                }
                echo " />
\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\tAutre / Detail / Niveau
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<textarea name=\"tents[";
                // line 480
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][other]\" style=\"width:90%\">";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "other", array(), "any", false);
                echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tent'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 486
            echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        } else {
            // line 489
            echo "\t\t\t\t<div class='alert'>
\t\t\t\tAttention: vous devez définir les dates de <b>montage</b> et <b>démontage</b> pour pouvoir réserver des tentes.
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 493
        echo "\t\t\t\t
\t\t\t\t<h3>Documents</h3>
\t\t\t\t<table id='attachedFiles'>
\t\t\t\t\t";
        // line 496
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['documents']) ? $context['documents'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['d']) {
            // line 497
            echo "\t\t\t\t\t\t<tr><td><a href='";
            echo (isset($context['webRoot']) ? $context['webRoot'] : null);
            echo "docs/offres/";
            echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreId", array(), "any", false);
            echo "/";
            echo $this->getAttribute((isset($context['d']) ? $context['d'] : null), "url", array(), "any", false);
            echo "' target='_blank'>";
            echo $this->getAttribute((isset($context['d']) ? $context['d'] : null), "url", array(), "any", false);
            echo "</a></td><td>";
            if (($this->getAttribute((isset($context['d']) ? $context['d'] : null), "type", array(), "any", false) == "image")) {
                echo "<img src=\"";
                echo (isset($context['webRoot']) ? $context['webRoot'] : null);
                echo "docs/offres/";
                echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreId", array(), "any", false);
                echo "/";
                echo $this->getAttribute((isset($context['d']) ? $context['d'] : null), "url", array(), "any", false);
                echo "\" style=\"height:60px\"/>";
            }
            echo "</td></tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 499
        echo "\t\t\t\t\t<tr><td colspan='2'><input id=\"file_upload\" name=\"file_upload\" type=\"file\"  /><input type='hidden' id='attachedFilesFolder' value='docs/offres/";
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "offreId", array(), "any", false);
        echo "' /></td></tr>
\t\t\t\t</table>
\t\t\t\t
\t\t\t\t<h3>Texte d'introduction à l'offre</h3>
\t\t\t\t<textarea  name=\"offre[introText]\" style=\"width:100%\" rows=\"6\">";
        // line 503
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "introText", array(), "any", false);
        echo "</textarea>
\t\t\t\t<h3>Données financières</h3>
\t\t\t\t<table id=\"fDatas\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th width=\"80%\">Description</th>
\t\t\t\t\t\t\t<th class=\"productPrice\">Montant HTVA</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 514
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['products']) ? $context['products'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['product']) {
            // line 515
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<tr rel=\"";
            // line 516
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "productId", array(), "any", false);
            echo "\">
\t\t\t\t\t\t\t<td><textarea name=\"products[";
            // line 517
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "productId", array(), "any", false);
            echo "][description]\" class=\"productDescription\">";
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "description", array(), "any", false);
            echo "</textarea></td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"productPrice\"><input type=\"text\" name=\"products[";
            // line 519
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "productId", array(), "any", false);
            echo "][price]\" value=\"";
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "price", array(), "any", false);
            echo "\" class=\"productPrice\"  /> €</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
            // line 521
            if (($this->getAttribute((isset($context['product']) ? $context['product'] : null), "jobId", array(), "any", false) == 0)) {
                echo " <a onclick=\"removeProduct(\$(this))\"><img src=\"/themes/default/images/buttons/del.png\" alt=\"Supprimer\" title=\"Supprimer\"></a>";
            }
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 525
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\">Total HTVA</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t<b>";
        // line 530
        echo (isset($context['productsTotal']) ? $context['productsTotal'] : null);
        echo "  €</b>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"offre[price]\" value=\"";
        // line 531
        echo (isset($context['productsTotal']) ? $context['productsTotal'] : null);
        echo "\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t<select name=\"offre[priceType]\">
\t\t\t\t\t\t\t\t<option value=\"htva\" ";
        // line 538
        if (($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "priceType", array(), "any", false) != "intra")) {
            echo " selected ";
        }
        echo ">TVA (21%)</option>
\t\t\t\t\t\t\t\t<option value=\"intra\" ";
        // line 539
        if (($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "priceType", array(), "any", false) == "intra")) {
            echo " selected ";
        }
        echo ">Intra communautaire</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
        // line 542
        if (($this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "priceType", array(), "any", false) != "intra")) {
            echo " ";
            echo (isset($context['productsTotalTVA']) ? $context['productsTotalTVA'] : null);
            echo " € ";
        } else {
            echo " Intracommunautaire ";
        }
        echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">
\t\t\t\t\t\t\t<b>TOTAL TTC à payer</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"text-align:right;background-color:#ededed;\">
\t\t\t\t\t\t\t<b>";
        // line 550
        echo (isset($context['productsTotalTTC']) ? $context['productsTotalTTC'] : null);
        echo " €</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<input type=\"button\" style=\"padding:2px;color:#000000\" value=\"+ Ajouter une ligne au budget\" onclick=\"addProduct2offre()\">
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<div class=\"saveBut\">
\t\t\t\t\t";
        // line 561
        if ((!$this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false))) {
            // line 562
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 564
        echo "\t\t\t\t</div>
\t\t\t\t<h3>Options</h3>
\t\t\t\t<table id=\"fOptions\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th width=\"80%\">Description</th>
\t\t\t\t\t\t\t<th class=\"productPrice\">Montant HTVA</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 575
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['productOptions']) ? $context['productOptions'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['option']) {
            // line 576
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<tr rel=\"";
            // line 577
            echo $this->getAttribute((isset($context['option']) ? $context['option'] : null), "productId", array(), "any", false);
            echo "\">
\t\t\t\t\t\t\t<td><textarea name=\"options[";
            // line 578
            echo $this->getAttribute((isset($context['option']) ? $context['option'] : null), "productId", array(), "any", false);
            echo "][description]\" class=\"productDescription\">";
            echo $this->getAttribute((isset($context['option']) ? $context['option'] : null), "description", array(), "any", false);
            echo "</textarea></td>
\t\t\t\t\t\t\t";
            // line 579
            if ((($this->getAttribute((isset($context['option']) ? $context['option'] : null), "price", array(), "any", false) == "0.00") || ($this->getAttribute((isset($context['option']) ? $context['option'] : null), "price", array(), "any", false) == ""))) {
                // line 580
                echo "\t\t\t\t\t\t\t<td class=\"productPrice\"><input type=\"text\" name=\"options[";
                echo $this->getAttribute((isset($context['option']) ? $context['option'] : null), "productId", array(), "any", false);
                echo "][price]\" value=\"Sur devis\" class=\"productPrice\" ></td>
\t\t\t\t\t\t\t";
            } else {
                // line 582
                echo "\t\t\t\t\t\t\t<td class=\"productPrice\"><input type=\"text\" name=\"options[";
                echo $this->getAttribute((isset($context['option']) ? $context['option'] : null), "productId", array(), "any", false);
                echo "][price]\" value=\"";
                echo $this->getAttribute((isset($context['option']) ? $context['option'] : null), "price", array(), "any", false);
                echo "\" class=\"productPrice\" > €</td>
\t\t\t\t\t\t\t";
            }
            // line 584
            echo "\t\t\t\t\t\t\t<td><a onclick=\"removeProduct(\$(this))\"><img src=\"/themes/default/images/buttons/del.png\" alt=\"Supprimer\" title=\"Supprimer\"></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 588
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t
\t\t\t\t</table>
\t\t\t\t<input type=\"button\" style=\"padding:2px;color:#000000\" value=\"+ Ajouter une ligne aux options\" onclick=\"addOption()\">
\t\t\t\t<div class=\"saveBut\">
\t\t\t\t\t";
        // line 593
        if ((!$this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false))) {
            // line 594
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 596
        echo "\t\t\t\t</div>
\t\t\t\t<h3>Conditions de paiements</h3>
\t\t\t\t<table id=\"fSlices\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th width=\"50%\">Description</th>
\t\t\t\t\t\t\t<th>Tranche</th>
\t\t\t\t\t\t\t<th class=\"productPrice\">Montant HT</th>
\t\t\t\t\t\t\t<th class=\"productPrice\">Montant TTC</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 610
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['slices']) ? $context['slices'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['slice']) {
            // line 611
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<textarea name=\"slices[";
            // line 613
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
            echo "][comments]\" class=\"sliceDescription\" style=\"width:95%\">";
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "comments", array(), "any", false);
            echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"s\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"slices[";
            // line 616
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
            echo "][slice]\" value=\"";
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "slice", array(), "any", false);
            echo "\" style=\"width:50px\" onfocus=\"\$(this).closest('tr').find('input').val('')\">
\t\t\t\t\t\t\t%
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"productPrice ht\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"slices[";
            // line 620
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
            echo "][priceHT]\" value=\"";
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "priceHT", array(), "any", false);
            echo "\" class=\"productPrice\" onfocus=\"\$(this).closest('tr').find('input').val('')\">
\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"productPrice ttc productPrice\">";
            // line 623
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "priceTTC", array(), "any", false);
            echo " €</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"slices[";
            // line 625
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
            echo "][status]\" class=\"stat\" value=\"";
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "status", array(), "any", false);
            echo "\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a onclick=\"\$(this).closest('tr').remove()\">
\t\t\t\t\t\t\t<img src=\"/themes/default/images/buttons/del.png\" alt=\"Supprimer\" title=\"Supprimer\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slice'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 635
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot ";
        // line 636
        if (((isset($context['slicesTotalSlice']) ? $context['slicesTotalSlice'] : null) != "100.00")) {
            echo " class='alert' ";
        }
        echo " >
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\"></td>
\t\t\t\t\t\t\t<td>";
        // line 639
        echo (isset($context['slicesTotalSlice']) ? $context['slicesTotalSlice'] : null);
        echo " %</td>
\t\t\t\t\t\t\t<td class=\"productPrice\">";
        // line 640
        echo (isset($context['slicesTotalPriceHT']) ? $context['slicesTotalPriceHT'] : null);
        echo " €</td>
\t\t\t\t\t\t\t<td class=\"productPrice\">";
        // line 641
        echo (isset($context['slicesTotalPriceTTC']) ? $context['slicesTotalPriceTTC'] : null);
        echo " €</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<input type=\"button\" style=\"padding:2px;color:#000000\" value=\"+ Ajouter une tranche\" onclick=\"addFSlice()\">
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<div class=\"saveBut\">
\t\t\t\t\t";
        // line 652
        if ((!$this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false))) {
            // line 653
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 655
        echo "\t\t\t\t</div>
\t\t\t\t<h3>Conditions de vente/location</h3>
\t\t\t\t
\t\t\t\t<textarea name=\"offre[conditions]\" style=\"width:100%;height:60px\">";
        // line 658
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "conditions", array(), "any", false);
        echo "</textarea>
\t\t\t\t<i>Vider et sauver pour remplir avec les données par défaut dans la langue de l'offre.</i>
\t\t\t\t<h3>Gestion</h3>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Date de l'offre : <b>";
        // line 664
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "insertDate", array(), "any", false);
        echo "</b></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Créateur de l'offre: <b>";
        // line 667
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "userName", array(), "any", false);
        echo "</b></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<h3>Notes</h3>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<textarea name=\"offre[comments]\" style=\"width:100%\" rows=\"5\">";
        // line 676
        echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "comments", array(), "any", false);
        echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t";
        // line 685
        if ((!$this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false))) {
            // line 686
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 688
        echo "\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/quotes'\" class=\"button cancel\">
</form>

";
    }

    public function getTemplateName()
    {
        return "offre.edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
