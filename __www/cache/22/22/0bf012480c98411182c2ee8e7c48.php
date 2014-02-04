<?php

/* invoices.list.tpl */
class __TwigTemplate_22220bf012480c98411182c2ee8e7c48 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div id=\"invoices\">
\t<ul>

\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['tabs']) ? $context['tabs'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['tab']) {
            // line 5
            echo "\t\t<li>
\t\t\t<a href=\"#";
            // line 6
            echo $this->getAttribute((isset($context['tab']) ? $context['tab'] : null), "id", array(), "any", false);
            echo "\">";
            echo $this->getAttribute((isset($context['tab']) ? $context['tab'] : null), "label", array(), "any", false);
            echo "</a>
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "\t</ul>
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['tabs']) ? $context['tabs'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['tab']) {
            // line 11
            echo "\t<div id=\"";
            echo $this->getAttribute((isset($context['tab']) ? $context['tab'] : null), "id", array(), "any", false);
            echo "\">
\t\t<table id='table_";
            // line 12
            echo $this->getAttribute((isset($context['tab']) ? $context['tab'] : null), "id", array(), "any", false);
            echo "' class='tablesorter'>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['cols']) ? $context['cols'] : null));
            foreach ($context['_seq'] as $context['_key'] => $context['col']) {
                // line 16
                echo "\t\t\t\t<th >";
                echo $this->getAttribute((isset($context['col']) ? $context['col'] : null), "label", array(), "any", false);
                echo "</th>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 18
            echo "\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['tab']) ? $context['tab'] : null), "rows", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['row']) {
                // line 22
                echo "\t\t\t\t<tr ";
                if (($this->getAttribute((isset($context['row']) ? $context['row'] : null), "issue", array(), "any", false) > 0)) {
                    echo " class='alert' ";
                }
                echo ">
\t\t\t\t\t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context['row']) ? $context['row'] : null));
                foreach ($context['_seq'] as $context['_key'] => $context['cell']) {
                    echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class='";
                    // line 25
                    echo $this->getAttribute((isset($context['col']) ? $context['col'] : null), "id", array(), "any", false);
                    echo "'>";
                    echo (isset($context['cell']) ? $context['cell'] : null);
                    echo "</td>
\t\t\t\t\t\t
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 28
                echo "\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "invoices.list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
