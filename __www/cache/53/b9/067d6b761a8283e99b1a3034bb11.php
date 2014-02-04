<?php

/* job.edit.tpl */
class __TwigTemplate_53b9067d6b761a8283e99b1a3034bb11 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "<form id=\"form\" name=\"form\" method=\"POST\" class=\"offreForm\" action='#'>
\t<h1>Editer un job</h1>
\t<input type=\"hidden\" name=\"job[jobId]\" id=\"jobId\" value=\"";
        // line 4
        echo (isset($context['jobId']) ? $context['jobId'] : null);
        echo "\">
\t<input type=\"hidden\" name=\"job[offreId]\" id=\"jobId\" value=\"";
        // line 5
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "offreId", array(), "any", false);
        echo "\">
\t";
        // line 6
        if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "status", array(), "any", false) != "closed")) {
            // line 7
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 9
        echo "\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/jobs'\" class=\"button cancel\" ";
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
\t
\t<table cellpadding=\"10\" style=\"border:0;background:none\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<h3>Status</h3>
\t\t\t\t<table style=\"background:#ffffff\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\tReference:
\t\t\t\t\t<b>";
        // line 25
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "reference", array(), "any", false);
        echo "</b>
\t\t\t\t\t
\t\t\t\t\t<br/>
\t\t\t\t\tType:
\t\t\t\t\t<b>";
        // line 29
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "type", array(), "any", false);
        echo "</b>
\t\t\t\t\t<br/>
\t\t\t\t\tOffre: ";
        // line 31
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "offreReference", array(), "any", false);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td >
\t\t\t\t\t";
        // line 34
        if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "status", array(), "any", false) != "closed")) {
            echo "<input type='button' value='Annuler ce job' class='button' onclick=\"deleteJob('";
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false);
            echo "')\" />";
        }
        // line 35
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\tMontant HTVA:
\t\t\t\t\t<b>";
        // line 40
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "price", array(), "any", false);
        echo "</b>
\t\t\t\t\t&euro;
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t";
        // line 44
        if ($this->getAttribute((isset($context['job']) ? $context['job'] : null), "error", array(), "any", false)) {
            echo " 
\t\t\t\t\t\t\t<div class='alert'>
\t\t\t\t\t\t\t\tCe job comporte des erreurs.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan='2'>
\t\t\t\t\tNotes
\t\t\t\t\t<br/>
\t\t\t\t\t<textarea name=\"job[priceComments]\" rows=\"3\" style='width:90%'>";
        // line 55
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "priceComments", array(), "any", false);
        echo "</textarea>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t
\t\t\t\t<h3>Client</h3>
\t\t\t\t
\t\t\t\t<div id='clientDiv' ";
        // line 65
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientId", array(), "any", false) <= 0)) {
            echo " class='alert' ";
        }
        echo ">
\t\t\t\t<input type=\"hidden\" name=\"job[clientId]\" id=\"clientId\" value=\"";
        // line 66
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "clientId", array(), "any", false);
        echo "\" />
\t\t\t\t<table>
\t\t\t\t\t";
        // line 68
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false) == "part")) {
            // line 69
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<b>
\t\t\t\t\t\t";
            // line 72
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "title", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "firstname", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "lastname", array(), "any", false);
            echo "</b>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>Téléphone: ";
            // line 74
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "phone", array(), "any", false);
            echo "<br/>Fax: ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "fax", array(), "any", false);
            echo "<br/>Mobile: ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "mobile", array(), "any", false);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        } else {
            // line 77
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<b>
\t\t\t\t\t\t";
            // line 80
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "name", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "cieType", array(), "any", false);
            echo "
\t\t\t\t\t\t<br/>
\t\t\t\t\t\tTVA: ";
            // line 82
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "vat", array(), "any", false);
            echo "
\t\t\t\t\t\t<br/>
\t\t\t\t\t\tContact: ";
            // line 84
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "title", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "firstname", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "lastname", array(), "any", false);
            echo "
\t\t\t\t\t\t</b>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>Téléphone: ";
            // line 87
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "phone", array(), "any", false);
            echo "<br/>Fax: ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "fax", array(), "any", false);
            echo "<br/>Mobile: ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "mobile", array(), "any", false);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t\t
\t\t\t\t<div id=\"clientDiv\" ";
        // line 93
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientId", array(), "any", false) <= 0)) {
            echo " class='alert' ";
        }
        echo " >

\t\t\t\t
\t\t\t\t\t<div id=\"clientAddress\" style=\"margin-top:10px\">
\t\t\t\t\t\t<h3>Facturation</h3>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\"  name=\"client[address]\" value=\"";
        // line 104
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "address", array(), "any", false);
        echo "\" disabled  style=\"width:100%\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tNuméro
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[number]\" value=\"";
        // line 109
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "number", array(), "any", false);
        echo "\" class=\"numField\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tCode postal
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[zip]\" value=\"";
        // line 116
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "zip", array(), "any", false);
        echo "\" class=\"numField\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tVille
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[city]\" value=\"";
        // line 121
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "city", array(), "any", false);
        echo "\" style=\"width:100%\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tPays
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[country]\" value=\"";
        // line 126
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "country", array(), "any", false);
        echo "\" />
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tTéléphone
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[phone]\" value=\"";
        // line 134
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "phone", array(), "any", false);
        echo "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tMobile
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[mobile]\" value=\"";
        // line 139
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "mobile", array(), "any", false);
        echo "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tAutre
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[phone2]\" value=\"";
        // line 144
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "phone2", array(), "any", false);
        echo "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tFax
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[fax]\" value=\"";
        // line 151
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "fax", array(), "any", false);
        echo "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[email]\" value=\"";
        // line 156
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "email", array(), "any", false);
        echo "\" style=\"width:100%\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tSite web
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled name=\"client[url]\" value=\"";
        // line 161
        echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "url", array(), "any", false);
        echo "\" style=\"width:100%\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"addressesDiv\">
\t\t\t\t\t<h3>Livraison</h3>
\t\t\t\t\t<input type='button' onclick=\"copyAddress('job')\" value=\"copier l'adresse de facturation\" />
\t\t\t\t\t<table id=\"address_delivery_table\" style=\"\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"job[address]\" value=\"";
        // line 177
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "address", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tNuméro
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"job[number]\"  value=\"";
        // line 182
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "number", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tCode postal
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"job[zip]\"  value=\"";
        // line 189
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "zip", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tVille
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"job[city]\"  value=\"";
        // line 194
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "city", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tPays
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select name=\"job[country]\"  >

\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 203
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['countries']) ? $context['countries'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['country']) {
            // line 204
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['country']) ? $context['country'] : null);
            echo "\"";
            if (((isset($context['country']) ? $context['country'] : null) == $this->getAttribute((isset($context['job']) ? $context['job'] : null), "country", array(), "any", false))) {
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
        // line 206
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"job[contact]\"  value=\"";
        // line 215
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "contact", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tFax
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"job[fax]\"  value=\"";
        // line 224
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "fax", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"job[email]\"  value=\"";
        // line 229
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "email", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tTéléphone
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"job[phone]\" value=\"";
        // line 234
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "phone", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\tNotes
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<textarea  name=\"job[offreComments]\" style=\"width:80%\">";
        // line 241
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "offreComments", array(), "any", false);
        echo "</textarea>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<h3>Planning</h3>
\t\t\t\t<!--<input type=\"hidden\" name=\"planningPreviewId\" value=\"";
        // line 248
        echo $this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "previewId", array(), "any", false);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"planningBuildId\" value=\"";
        // line 249
        echo $this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "buildId", array(), "any", false);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"planningInplaceId\" value=\"";
        // line 250
        echo $this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "inplaceId", array(), "any", false);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"planningUnbuildId\" value=\"";
        // line 251
        echo $this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "unbuildId", array(), "any", false);
        echo "\">-->
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 254
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['planning']) ? $context['planning'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['p']) {
            // line 255
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 256
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "label", array(), "any", false);
            echo " <!--<input type=\"hidden\" name=\"planning[";
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false);
            echo "][planningId]\" value=\"";
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningId", array(), "any", false);
            echo "\">--> </td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tDu
\t\t\t\t\t\t\t<input type=\"text\" name=\"planning[";
            // line 259
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
            // line 264
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
            // line 269
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false);
            echo "][userId]\" id=\"userId\">
\t\t\t\t\t\t\t\t<option value=\"\">...</option>
\t\t\t\t\t\t\t\t";
            // line 271
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['users']) ? $context['users'] : null));
            foreach ($context['_seq'] as $context['userId'] => $context['username']) {
                // line 272
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
            // line 274
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 277
            if (($this->getAttribute((isset($context['p']) ? $context['p'] : null), "etat", array(), "any", false) == "PROBLEME")) {
                echo " <div class='alert'> ";
            }
            echo "Etat <select  name=\"planning[";
            echo $this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false);
            echo "][etat]\">
\t\t\t\t\t\t\t\t";
            // line 278
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['planningStates']) ? $context['planningStates'] : null));
            foreach ($context['_seq'] as $context['etat'] => $context['label']) {
                // line 279
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (isset($context['etat']) ? $context['etat'] : null);
                echo "\" ";
                if (((isset($context['etat']) ? $context['etat'] : null) == $this->getAttribute((isset($context['p']) ? $context['p'] : null), "etat", array(), "any", false))) {
                    echo " selected ";
                }
                echo " >";
                echo (isset($context['label']) ? $context['label'] : null);
                echo "</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['etat'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 282
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
            // line 283
            if (($this->getAttribute((isset($context['p']) ? $context['p'] : null), "etat", array(), "any", false) == "PROBLEME")) {
                echo " </div>";
            }
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 285
            if (($this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false) == "build")) {
                // line 286
                echo "\t\t\t\t\t\t<tr><td></td><td colspan=\"4\">Notes au montage<br><textarea  name=\"job[buildNotes]\" style=\"width:95%\">";
                echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "buildNotes", array(), "any", false);
                echo "</textarea></td></tr>
\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context['p']) ? $context['p'] : null), "planningType", array(), "any", false) == "unbuild")) {
                // line 288
                echo "\t\t\t\t\t\t<tr><td></td><td colspan=\"4\">Notes au démontage<br><textarea  name=\"job[unbuildNotes]\" style=\"width:95%\">";
                echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "unbuildNotes", array(), "any", false);
                echo "</textarea></td></tr>
\t\t\t\t\t\t";
            }
            // line 290
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 292
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tCommentaires
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t(interne)
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t<textarea id=\"planningComments\" name=\"job[planningComments]\" style=\"width:80%\">";
        // line 300
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "planningComments", array(), "any", false);
        echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"saveBut\">

";
        // line 307
        if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "status", array(), "any", false) != "closed")) {
            // line 308
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 310
        echo "\t
\t\t\t\t</div>
\t\t\t\t<h3>Tentes</h3>
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 315
        if ((($this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "build", array(), "any", false), "startDate", array(), "any", false) != "0000-00-00 00:00:00") && ($this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "unbuild", array(), "any", false), "endDate", array(), "any", false) != "0000-00-00 00:00:00"))) {
            // line 316
            echo "\t\t\t\t
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tSurface souhaitées
\t\t\t\t\t\t\t<input type=\"text\"  name=\"job[surface]\" value=\"";
            // line 322
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "surface", array(), "any", false);
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
            // line 335
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "available", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['tent']) {
                // line 336
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
            // line 338
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
            // line 350
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "currentOffre", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['tent']) {
                // line 351
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
            // line 353
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"job[tents]\" id=\"t_hidden_chosen\" value=\"";
            // line 354
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "tents", array(), "any", false);
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
\t\t\t\t\t\t\t<textarea name=\"job[tentsComments]\" style=\"width:100%;height:100px\">";
            // line 366
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "tentsComments", array(), "any", false);
            echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tSurface calculée
\t\t\t\t\t\t\t<b>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"disable numField\"  name=\"calculatedSurface\" id=\"calculatedSurface\" value=\"";
            // line 374
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
\t\t\t\t\t
";
            // line 384
            if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "status", array(), "any", false) != "closed")) {
                // line 385
                echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
            }
            // line 387
            echo "\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 390
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "currentOffre", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['tent']) {
                // line 391
                echo "\t\t\t\t<table style=\"background:#c0c0c0\" ";
                if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "class", array(), "any", false) == "alert")) {
                    echo " class='alert' ";
                }
                echo " >
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t<b>Tente ";
                // line 395
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "reference", array(), "any", false);
                echo " ";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "name", array(), "any", false);
                echo "</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Reference : <a href=\"/tents?tentId=";
                // line 399
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "\">";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "reference", array(), "any", false);
                echo "</a></td>
\t\t\t\t\t\t\t<td>Propriétaire: ";
                // line 400
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "ownername", array(), "any", false);
                echo "</td>
\t\t\t\t\t\t\t<td>Couleur : ";
                // line 401
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "color", array(), "any", false);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Largeur : ";
                // line 404
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "width", array(), "any", false);
                echo " m</td>
\t\t\t\t\t\t\t<td>Longueur: ";
                // line 405
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "length", array(), "any", false);
                echo " m</td>
\t\t\t\t\t\t\t<td>Surface : ";
                // line 406
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "m2", array(), "any", false);
                echo " m2</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tPlancher
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tents[";
                // line 411
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][plancher]\" value=\"0\" ";
                if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "plancher", array(), "any", false) == 0)) {
                    echo " checked ";
                }
                echo " />
\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tents[";
                // line 413
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][plancher]\" value=\"1\" ";
                if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "plancher", array(), "any", false) == 1)) {
                    echo " checked ";
                }
                echo " />
\t\t\t\t\t\t\tOui, surface:
\t\t\t\t\t\t\t<input type=\"text\" name=\"tents[";
                // line 415
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][surfacePlancher]\" value=\"";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "surfacePlancher", array(), "any", false);
                echo "\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tSol
\t\t\t\t\t\t\t<input type=\"text\" name=\"tents[";
                // line 419
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][sol]\" value=\"";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "sol", array(), "any", false);
                echo "\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tCanalisations
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tents[";
                // line 423
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
                echo "][canalisation]\" value=\"1\" ";
                if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "canalisation", array(), "any", false) == 1)) {
                    echo " checked ";
                }
                echo " />
\t\t\t\t\t\t\tOui
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tents[";
                // line 425
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
                // line 433
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
            // line 439
            echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        } else {
            // line 442
            echo "\t\t\t\t<div class='alert'>
\t\t\t\tAttention: vous devez définir les dates de <b>montage</b> et <b>démontage</b> pour pouvoir réserver des tentes.
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 446
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t<h3>Documents</h3>
\t\t\t\t<table id='attachedFiles'>
\t\t\t\t\t";
        // line 450
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['documents']) ? $context['documents'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['d']) {
            // line 451
            echo "\t\t\t\t\t\t<tr><td><a href='";
            echo (isset($context['webRoot']) ? $context['webRoot'] : null);
            echo "docs/jobs/";
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false);
            echo "/";
            echo $this->getAttribute((isset($context['d']) ? $context['d'] : null), "url", array(), "any", false);
            echo "' target='_blank'>";
            echo $this->getAttribute((isset($context['d']) ? $context['d'] : null), "url", array(), "any", false);
            echo "</a></td><td>";
            if (($this->getAttribute((isset($context['d']) ? $context['d'] : null), "type", array(), "any", false) == "image")) {
                echo "<img src=\"";
                echo (isset($context['webRoot']) ? $context['webRoot'] : null);
                echo "docs/jobs/";
                echo $this->getAttribute((isset($context['jobs']) ? $context['jobs'] : null), "jobId", array(), "any", false);
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
        // line 453
        echo "\t\t\t\t\t<tr><td colspan='2'><input id=\"file_upload\" name=\"file_upload\" type=\"file\"  /><input type='hidden' id='attachedFilesFolder' value='docs/jobs/";
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false);
        echo "' /></td></tr>
\t\t\t\t</table>
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
        // line 465
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['products']) ? $context['products'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['product']) {
            // line 466
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<tr rel=\"";
            // line 467
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "productId", array(), "any", false);
            echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type='hidden' name='products[";
            // line 469
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "productId", array(), "any", false);
            echo "][isFromOffre]' value='";
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "isFromOffre", array(), "any", false);
            echo "' />
\t\t\t\t\t\t\t\t<textarea  name=\"products[";
            // line 470
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "productId", array(), "any", false);
            echo "][description]\" class=\"productDescription\"  >";
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "description", array(), "any", false);
            echo "</textarea></td>
\t\t\t\t\t\t\t<td class=\"productPrice\"><input type=\"text\" name=\"products[";
            // line 471
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "productId", array(), "any", false);
            echo "][price]\"   value=\"";
            echo $this->getAttribute((isset($context['product']) ? $context['product'] : null), "price", array(), "any", false);
            echo "\" class=\"productPrice\"  /> €</td>
\t\t\t\t\t\t\t<td>";
            // line 472
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
        // line 476
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\">Total HTVA</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t<b>";
        // line 481
        echo (isset($context['productsTotal']) ? $context['productsTotal'] : null);
        echo "  €</b>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"job[price]\" value=\"";
        // line 482
        echo (isset($context['productsTotal']) ? $context['productsTotal'] : null);
        echo "\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\">
\t\t\t\t\t\t\t<select name=\"job[priceType]\">
\t\t\t\t\t\t\t\t<option value=\"htva\" ";
        // line 489
        if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "priceType", array(), "any", false) != "intra")) {
            echo " selected ";
        }
        echo ">TVA (21%)</option>
\t\t\t\t\t\t\t\t<option value=\"intra\" ";
        // line 490
        if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "priceType", array(), "any", false) == "intra")) {
            echo " selected ";
        }
        echo ">Intra communautaire</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
        // line 493
        if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "priceType", array(), "any", false) != "intra")) {
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
        // line 501
        echo (isset($context['productsTotalTTC']) ? $context['productsTotalTTC'] : null);
        echo " €</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<input type=\"button\" style=\"padding:2px;color:#000000\" value=\"+ Ajouter une ligne au budget\" onclick=\"addProduct2job()\">
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<div class=\"saveBut\">
\t\t\t\t
\t";
        // line 513
        if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "status", array(), "any", false) != "closed")) {
            // line 514
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 516
        echo "\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<h3>Facturation</h3>
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
        // line 532
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['slices']) ? $context['slices'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['slice']) {
            // line 533
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<textarea name=\"slices[";
            // line 535
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
            echo "][comments]\" class=\"sliceDescription\" style=\"width:95%\"  >";
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "comments", array(), "any", false);
            echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"s\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"slices[";
            // line 538
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
            echo "][slice]\" value=\"";
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "slice", array(), "any", false);
            echo "\" style=\"width:50px\"  />
\t\t\t\t\t\t\t%
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"productPrice ht\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"slices[";
            // line 542
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
            echo "][priceHT]\" value=\"";
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "priceHT", array(), "any", false);
            echo "\" class=\"productPrice\"  />
\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"productPrice ttc productPrice\">";
            // line 545
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "priceTTC", array(), "any", false);
            echo " €</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"slices[";
            // line 547
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
            echo "][status]\" class=\"stat\" value=\"";
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "status", array(), "any", false);
            echo "\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"slices[";
            // line 548
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
            echo "][invoiceId]\" class=\"stat\" value=\"";
            echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "invoiceId", array(), "any", false);
            echo "\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 550
            if (($this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "invoiceId", array(), "any", false) > 0)) {
                // line 551
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "invoiceReference", array(), "any", false) != "")) {
                    // line 552
                    echo "\t\t\t\t\t\t\t\t<a href='/invoices?invoiceId=";
                    echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "invoiceId", array(), "any", false);
                    echo "'>";
                    echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "invoiceReference", array(), "any", false);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 554
                    echo "\t\t\t\t\t\t\t\t<a href='/invoices?invoiceId=";
                    echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "invoiceId", array(), "any", false);
                    echo "'>Facture en cours</a>
\t\t\t\t\t\t\t\t";
                }
                // line 556
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            } else {
                // line 559
                echo "\t\t\t\t\t\t\t<a onclick=\"\$(this).closest('tr').remove()\">
\t\t\t\t\t\t\t<img src=\"/themes/default/images/buttons/del.png\" alt=\"Supprimer\" title=\"Supprimer\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type='button' class='button' value='à facturer' onclick=\"createInvoice('";
                // line 563
                echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "jobId", array(), "any", false);
                echo "','";
                echo $this->getAttribute((isset($context['slice']) ? $context['slice'] : null), "sliceId", array(), "any", false);
                echo "')\" />
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 566
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slice'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 569
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot ";
        // line 570
        if (((isset($context['slicesTotalSlice']) ? $context['slicesTotalSlice'] : null) != "100.00")) {
            echo " class='alert' ";
        }
        echo " >
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\"></td>
\t\t\t\t\t\t\t<td>";
        // line 573
        echo (isset($context['slicesTotalSlice']) ? $context['slicesTotalSlice'] : null);
        echo " %</td>
\t\t\t\t\t\t\t<td class=\"productPrice\">";
        // line 574
        echo (isset($context['slicesTotalPriceHT']) ? $context['slicesTotalPriceHT'] : null);
        echo " €</td>
\t\t\t\t\t\t\t<td class=\"productPrice\">";
        // line 575
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
\t\t\t\t\t
\t";
        // line 587
        if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "status", array(), "any", false) != "closed")) {
            // line 588
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 590
        echo "\t
\t\t\t\t</div>
\t\t\t\t<h3>Conditions de vente/location</h3>
\t\t\t\t
\t\t\t\t<textarea name=\"job[conditions]\" style=\"width:100%;height:60px\">";
        // line 594
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "conditions", array(), "any", false);
        echo "</textarea>
\t\t\t\t<i>Vider et sauver pour remplir avec les données par défaut dans la langue du job.</i>
\t\t\t\t<h3>Gestion</h3>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Date de la demande : <b>";
        // line 600
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "insertDate", array(), "any", false);
        echo "</b></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Responsable du job: <select name=\"job[userId]\" id=\"userId\">
\t\t\t\t\t\t\t\t<option value=\"\">...</option>
\t\t\t\t\t\t\t\t";
        // line 605
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['users']) ? $context['users'] : null));
        foreach ($context['_seq'] as $context['userId'] => $context['username']) {
            // line 606
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['userId']) ? $context['userId'] : null);
            echo "\" ";
            if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "userId", array(), "any", false) == (isset($context['userId']) ? $context['userId'] : null))) {
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
        // line 608
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<h3>Notes</h3>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<textarea name=\"job[comments]\" style=\"width:100%\" rows=\"5\">";
        // line 618
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "comments", array(), "any", false);
        echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t
\t";
        // line 628
        if (($this->getAttribute((isset($context['job']) ? $context['job'] : null), "status", array(), "any", false) != "closed")) {
            // line 629
            echo "\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submit()\">
\t";
        }
        // line 631
        echo "
\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/jobs'\" class=\"button cancel\" ";
        // line 632
        echo (isset($context['disabled']) ? $context['disabled'] : null);
        echo ">
</form>

";
    }

    public function getTemplateName()
    {
        return "job.edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
