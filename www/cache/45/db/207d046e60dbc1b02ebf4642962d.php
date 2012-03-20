<?php

/* job.pdf.fr.tpl */
class __TwigTemplate_45db207d046e60dbc1b02ebf4642962d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<page>
\t<table style=\"width:{180}mm\" >
    <tr>
      <td style=\"width:90mm;vertical-align:top\"><img src=\"themes/default/images/logo.png\"></td>
      <td style=\"width:90mm;vertical-align:bottom;text-align:right\">Job ";
        // line 5
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "reference", array(), "any", false);
        echo "</td>
    </tr>
  </table>
  <br/><br/>
   <table style=\"width:180mm\" >
    <tr>
      <td style='width:90mm'></td>
      <td style='width:90mm;'>";
        // line 12
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "firstname", array(), "any", false);
        echo " ";
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "lastname", array(), "any", false);
        echo "<br/>";
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "email", array(), "any", false);
        echo " <br/>";
        echo $this->getAttribute((isset($context['user']) ? $context['user'] : null), "phone", array(), "any", false);
        echo "</td>
    </tr>
  </table>
   <br/>";
        // line 15
        echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "priceComments", array(), "any", false), "html"));
        echo "<br/>
  <table style=\"width:180mm\" >
    <tr>
      <td style='width:180mm;background-color:#ededed;text-align:center'><b>LIEU ET DATES</b></td>
    </tr>
  </table>
 <b><u>Client :</u></b>
 <p style='padding-top:0mm'>
\t\t\t\t";
        // line 23
        if (($this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientType", array(), "any", false) == "cie")) {
            echo " <b>";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "name", array(), "any", false);
            echo "</b> ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "cieType", array(), "any", false);
            echo "
\t\t\t\t<br/>
\t\t\t\t";
            // line 25
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "clientTitle", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "firstname", array(), "any", false);
            echo " ";
            echo $this->getAttribute((isset($context['client']) ? $context['client'] : null), "lastname", array(), "any", false);
            echo "
\t\t\t\t<br/>
\t\t\t\t";
        } else {
            // line 27
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
        // line 30
        echo "\t\t\t\t
\t\t\t\t
\t\t\t</p>
  <b><u>Lieu :</u></b>
  
  \t<table style='width:180mm'><tr><td style='width:100mm'><p>
  \t";
        // line 36
        echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "address", array(), "any", false), "html"));
        echo " ";
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "number", array(), "any", false);
        echo "
\t\t<br/>
\t\t";
        // line 38
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "zip", array(), "any", false);
        echo " ";
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "city", array(), "any", false);
        echo "
\t\t<br/>
\t\t";
        // line 40
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "country", array(), "any", false);
        echo "
\t\t
\t\t";
        // line 42
        if ($this->getAttribute((isset($context['job']) ? $context['job'] : null), "phone", array(), "any", false)) {
            // line 43
            echo "\t\t<br/>Tel.: ";
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "phone", array(), "any", false);
            echo " ";
        }
        echo " 
\t\t";
        // line 44
        if ($this->getAttribute((isset($context['job']) ? $context['job'] : null), "fax", array(), "any", false)) {
            // line 45
            echo "\t\t<br/>Fax.: ";
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "fax", array(), "any", false);
            echo " ";
        }
        // line 46
        echo "\t\t";
        if ($this->getAttribute((isset($context['job']) ? $context['job'] : null), "email", array(), "any", false)) {
            // line 47
            echo "\t\t<br/>Email: ";
            echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "email", array(), "any", false);
            echo " ";
        }
        echo " </p></td></tr><tr><td>";
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "offreComments", array(), "any", false);
        echo "</td></tr></table>
  <br/>
  <b><u>Timing :</u></b>
  <table style='width:180mm'>
  \t<tr>
  \t\t<td style='width:40mm'>Montage :</td>
  \t\t<td style='width:80mm'>";
        // line 53
        echo $this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "build", array(), "any", false), "startDate", array(), "any", false);
        echo "</td>
  \t</tr>
  \t<tr>
  \t\t<td></td>
  \t\t<td style='width:70mm'>";
        // line 57
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "buildNotes", array(), "any", false);
        echo "</td>
  \t</tr>
  \t<tr>
  \t\t<td style='width:40mm'>En place :</td>
  \t\t<td style='width:80mm'>du ";
        // line 61
        echo $this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "inplace", array(), "any", false), "startDate", array(), "any", false);
        echo " au ";
        echo $this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "inplace", array(), "any", false), "endDate", array(), "any", false);
        echo "</td>
  \t</tr>
\t<tr>
\t\t<td>Démontage :</td>
\t\t<td >";
        // line 65
        echo $this->getAttribute($this->getAttribute((isset($context['planning']) ? $context['planning'] : null), "unbuild", array(), "any", false), "endDate", array(), "any", false);
        echo "</td>
\t</tr>
  \t<tr>
  \t\t<td></td>
  \t\t<td >";
        // line 69
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "unbuildNotes", array(), "any", false);
        echo "</td>
  \t</tr>
  </table>
  ";
        // line 72
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "planningComments", array(), "any", false);
        echo "<br/>
  ";
        // line 73
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "buildComments", array(), "any", false);
        echo "
  <table style=\"width:180mm\" >
    <tr>
      <td style='width:180mm;background-color:#ededed;text-align:center'><b>MATERIEL</b></td>
    </tr>
  </table>
  <b><u>Tente(s) :</u></b>
  <table style='width:180mm;border:1px solid #cccccc'>
  \t<tr style='border-bottom:1px solid #cccccc'><td style='width:25mm;border-bottom:1px solid #cccccc'>Ref.</td><td style='width:50mm;border-bottom:1px solid #cccccc'>Nom</td><td style='width:20mm;border-bottom:1px solid #cccccc'>Couleur</td><td style='width:20mm;border-bottom:1px solid #cccccc'>Surface</td><td style='width:15mm;border-bottom:1px solid #cccccc'>Plancher</td><td style='width:20mm;border-bottom:1px solid #cccccc'>Sol</td><td style='width:10mm;border-bottom:1px solid #cccccc''>Canal.</td></tr>
\t\t
  ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "currentOffre", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['t']) {
            // line 84
            echo "
\t\t";
            // line 85
            if ((($this->getAttribute((isset($context['t']) ? $context['t'] : null), "width", array(), "any", false) > 0) || ($this->getAttribute((isset($context['t']) ? $context['t'] : null), "length", array(), "any", false) > 0))) {
                // line 86
                echo "\t\t<tr>
\t\t\t<td style='border-right:1px solid #cccccc'>";
                // line 87
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "reference", array(), "any", false);
                echo "</td>
\t\t\t<td style='border-right:1px solid #cccccc'>";
                // line 88
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "name", array(), "any", false);
                echo "</td>
\t\t\t<td style='border-right:1px solid #cccccc'>";
                // line 89
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "color", array(), "any", false);
                echo "</td>
\t\t\t<td style='border-right:1px solid #cccccc'>";
                // line 90
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "length", array(), "any", false);
                echo "m x";
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "width", array(), "any", false);
                echo "m ";
                if (($this->getAttribute((isset($context['t']) ? $context['t'] : null), "m2", array(), "any", false) > 0)) {
                    echo "(";
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "m2", array(), "any", false);
                    echo "m2) ";
                }
                echo "</td>
\t\t\t<td style='border-right:1px solid #cccccc'>";
                // line 91
                if (($this->getAttribute((isset($context['t']) ? $context['t'] : null), "surfacePlancher", array(), "any", false) > 0)) {
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "surfacePlancher", array(), "any", false);
                    echo "m2 ";
                } elseif ($this->getAttribute((isset($context['t']) ? $context['t'] : null), "plancher", array(), "any", false)) {
                    echo "oui";
                }
                echo "</td>
\t\t\t<td style='border-right:1px solid #cccccc'>";
                // line 92
                if ($this->getAttribute((isset($context['t']) ? $context['t'] : null), "sol", array(), "any", false)) {
                    echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "sol", array(), "any", false);
                }
                echo "</td>
\t\t\t<td>";
                // line 93
                if ($this->getAttribute((isset($context['t']) ? $context['t'] : null), "canalisation", array(), "any", false)) {
                    echo "oui";
                }
                echo "</td>
\t\t</tr>
\t\t";
            } else {
                // line 96
                echo "\t\t<tr>
\t\t\t<td style='border-right:1px solid #cccccc'>";
                // line 97
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "reference", array(), "any", false);
                echo "</td>
\t\t\t<td style='border-right:1px solid #cccccc'>";
                // line 98
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "name", array(), "any", false);
                echo "</td>
\t\t\t<td style='border-right:1px solid #cccccc'></td>
\t\t\t<td style='border-right:1px solid #cccccc'></td>
\t\t\t<td style='border-right:1px solid #cccccc'></td>
\t\t\t<td style='border-right:1px solid #cccccc'></td>
\t\t\t<td ></td>
\t\t</tr>
\t\t";
            }
            // line 106
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 107
        echo "  </table>
  <br/>
  ";
        // line 109
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "tentsComments", array(), "any", false);
        echo "
  <br/>
   <br/>
 
  <b><u>Notes :</u></b>
  ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tents']) ? $context['tents'] : null), "currentOffre", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['t']) {
            // line 115
            echo "  \t";
            if ($this->getAttribute((isset($context['t']) ? $context['t'] : null), "other", array(), "any", false)) {
                // line 116
                echo "  \t<p><u>";
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "reference", array(), "any", false);
                echo " (";
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "name", array(), "any", false);
                echo ") </u>: ";
                echo $this->getAttribute((isset($context['t']) ? $context['t'] : null), "other", array(), "any", false);
                echo "</p>
  \t";
            }
            // line 118
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 119
        echo "  <p> ";
        echo $this->getAttribute((isset($context['job']) ? $context['job'] : null), "comments", array(), "any", false);
        echo "</p><br/>
  
</page>";
    }

    public function getTemplateName()
    {
        return "job.pdf.fr.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
