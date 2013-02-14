<?php

/* tent.edit.tpl */
class __TwigTemplate_1af0a3cd15ec88331f35135e300ebbd7 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<form id=\"t_form\" name=\"t_form\" method=\"POST\">
\t<h1>Editer une tente</h1>
\t<input type=\"hidden\" name=\"tent[tentId]\" id=\"tentId\" value=\"";
        // line 3
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
        echo "\">
\t<input type=\"hidden\" name=\"tent[year]\"  value=\"";
        // line 4
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "year", array(), "any", false);
        echo "\">
\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submitForm()\">
\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/tents'\" class=\"button cancel\">
\t<table cellpadding=\"10\" style=\"border:0;background:none\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Reference</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<b>";
        // line 16
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "reference", array(), "any", false);
        echo "</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nom de la tente</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"tent[name]\"  value=\"";
        // line 22
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "name", array(), "any", false);
        echo "\" style=\"width:100%\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Propriétaire</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td width=\"120px\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tent[ownerType]\" id=\"t_owner_type\" checked=\"\" value=\"organic\">
\t\t\t\t\t\t\t\t\t\tOrganic
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tent[ownerType]\" id=\"t_owner_type\" value=\"other\">
\t\t\t\t\t\t\t\t\t\tAutre
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td> Cie</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"clientId\" name=\"tent[ownerId]\" value=\"";
        // line 48
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "ownerId", array(), "any", false);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[name]\"  value=\"";
        // line 49
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "client", array(), "any", false);
        echo "\" style=\"width:300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\tParticulier</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"client[lastname]\"  value=\"";
        // line 55
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "client", array(), "any", false);
        echo "\" style=\"width:300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Kit</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tent[kit]\" value=\"1\" ";
        // line 69
        if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "kit", array(), "any", false) == 1)) {
            echo " checked ";
        }
        echo " />
\t\t\t\t\t\t\tOui
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tent[kit]\" value=\"0\" ";
        // line 71
        if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "kit", array(), "any", false) == 0)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tHivernage
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t_winter\" id=\"t_winter\" value=\"1\">
\t\t\t\t\t\t\t-  Offre:
\t\t\t\t\t\t\t<a href=\"/quotes?offreId=0\"></a> - Job:
\t\t\t\t\t\t\t<a href=\"/jobs?jobId=\"></a>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"t_winterOffreId\" value=\"\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"t_winterJobId\" value=\"\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tLongueur
\t\t\t\t\t\t\t<input type=\"text\" name=\"tent[length]\" id=\"t_length\" value=\"";
        // line 97
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "length", array(), "any", false);
        echo "\" onchange=\"document.getElementById('t_m2').value=document.getElementById('t_length').value*document.getElementById('t_width').value\" class=\"numField\">
\t\t\t\t\t\t\tm
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tLargeur
\t\t\t\t\t\t\t<input type=\"text\" name=\"tent[width]\" id=\"t_width\" value=\"";
        // line 102
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "width", array(), "any", false);
        echo "\" onchange=\"document.getElementById('t_m2').value=document.getElementById('t_length').value*document.getElementById('t_width').value\" class=\"numField\">
\t\t\t\t\t\t\tm
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\tSurface
\t\t\t\t\t\t\t<input type=\"text\" name=\"tent[m2]\" id=\"t_m2\" value=\"";
        // line 107
        echo ($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "length", array(), "any", false) * $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "width", array(), "any", false));
        echo "\" class=\"disable numField\">
\t\t\t\t\t\t\tm²
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Couleur</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"tent[color]\" id=\"color\">
\t\t\t\t\t\t\t\t<option value=\"\">Choisir...</option>
\t\t\t\t\t\t\t";
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['colors']) ? $context['colors'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['color']) {
            // line 121
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['color']) ? $context['color'] : null);
            echo "\" ";
            if (((isset($context['color']) ? $context['color'] : null) == $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "color", array(), "any", false))) {
                echo " selected ";
            }
            echo " >";
            echo (isset($context['color']) ? $context['color'] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 123
        echo "\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\tou autre
\t\t\t\t\t\t\t<input type=\"text\" name=\"new_color\" id=\"new_color\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Poids</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"tent[weight]\" id=\"t_weight\" value=\"";
        // line 133
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "weight", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\tkg
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Piquets</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tent[piquetsBool]\" value=\"1\" ";
        // line 140
        if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "piquets", array(), "any", false) > 0)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\tOui, nombre :
\t\t\t\t\t\t\t<input type=\"text\" name=\"tent[piquets]\"  value=\"";
        // line 142
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "piquets", array(), "any", false);
        echo "\" class=\"numField\">
\t\t\t\t\t\t\tpiquets

\t\t\t\t\t\t\t<input type=\"radio\" name=\"tent[piquetsBool]\" value=\"0\"  ";
        // line 145
        if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "piquets", array(), "any", false) == 0)) {
            echo " checked ";
        }
        echo " />
\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Etat de la tente</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tent[etatBool]\" value=\"OK\"  ";
        // line 159
        if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "etat", array(), "any", false) == "OK")) {
            echo " checked ";
        }
        echo " />
\t\t\t\t\t\t\tOK, en bon état
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"tent[etatBool]\"   ";
        // line 162
        if (($this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "etat", array(), "any", false) != "OK")) {
            echo " checked ";
        }
        echo " />

\t\t\t\t\t\t\t<select id=\"t_etat\" name=\"tent[etat]\">
\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 166
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['etats']) ? $context['etats'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['etat']) {
            // line 167
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context['etat']) ? $context['etat'] : null);
            echo "\" ";
            if (((isset($context['etat']) ? $context['etat'] : null) == $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "etat", array(), "any", false))) {
                echo " selected ";
            }
            echo " >";
            echo (isset($context['etat']) ? $context['etat'] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 169
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select> ou
\t\t\t\t\t\t\t<input type=\"text\" name=\"newEtat\" id=\"newEtat\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Commentaires</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<textarea id=\"t_comments\" name=\"tent[comments]\" style=\"width:100%\" rows=\"10\">";
        // line 177
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "comments", array(), "any", false);
        echo "</textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t<h3>Documents</h3>
\t\t\t\t<table id='attachedFiles'>
\t\t\t\t\t";
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['documents']) ? $context['documents'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['d']) {
            // line 189
            echo "\t\t\t\t\t\t<tr><td><a href='";
            echo (isset($context['webRoot']) ? $context['webRoot'] : null);
            echo "docs/tents/";
            echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
            echo "/";
            echo $this->getAttribute((isset($context['d']) ? $context['d'] : null), "url", array(), "any", false);
            echo "' target='_blank'>";
            echo $this->getAttribute((isset($context['d']) ? $context['d'] : null), "url", array(), "any", false);
            echo "</a></td><td>";
            if (($this->getAttribute((isset($context['d']) ? $context['d'] : null), "type", array(), "any", false) == "image")) {
                echo "<img src=\"";
                echo (isset($context['webRoot']) ? $context['webRoot'] : null);
                echo "docs/tents/";
                echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
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
        // line 191
        echo "\t\t\t\t\t<tr><td colspan='2'><input id=\"file_upload\" name=\"file_upload\" type=\"file\"  /><input type='hidden' id='attachedFilesFolder' value='docs/tents/";
        echo $this->getAttribute((isset($context['tent']) ? $context['tent'] : null), "tentId", array(), "any", false);
        echo "' /></td></tr>
\t\t\t\t</table>
\t<table>
\t\t<thead style='border-bottom:1px solid #ccc'><td>Job</td><td width='30%'>Du</td><td width='30%'>Au</td></thead>
\t\t<tbody>
\t\t\t";
        // line 196
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['jobs']) ? $context['jobs'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['job']) {
            // line 197
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 198
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "reference", array(), "any", false);
            echo "</td>
\t\t\t\t<td >";
            // line 199
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "startBuild", array(), "any", false);
            echo "</td>
\t\t\t\t<td>";
            // line 200
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "endBuild", array(), "any", false);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 203
        echo "\t\t</tbody>
\t</table>
\t<table>
\t\t<thead style='border-bottom:1px solid #ccc'><td>Offre</td><td width='30%'>Du</td><td width='30%'>Au</td></thead>
\t\t<tbody>
\t\t\t";
        // line 208
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['offres']) ? $context['offres'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['offre']) {
            // line 209
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 210
            echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "reference", array(), "any", false);
            echo "</td>
\t\t\t\t<td>";
            // line 211
            echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "startBuild", array(), "any", false);
            echo "</td>
\t\t\t\t<td>";
            // line 212
            echo $this->getAttribute((isset($context['offre']) ? $context['offre'] : null), "endBuild", array(), "any", false);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 215
        echo "\t\t</tbody>
\t</table>
\t<input class=\"button save\" type=\"button\" value=\"sauver\" onclick=\"submitForm()\">
\t<input type=\"button\" value=\"annuler / retour à la liste\" onclick=\"document.location='/tents'\" class=\"button cancel\">
</form>";
    }

    public function getTemplateName()
    {
        return "tent.edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
