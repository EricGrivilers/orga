<?php

/* users.list.tpl */
class __TwigTemplate_46b5e615acdd521924f9770835e83195 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div id=\"users\">
\t
\t<div id=\"";
        // line 3
        echo $this->getAttribute((isset($context['tab']) ? $context['tab'] : null), "id", array(), "any", false);
        echo "\">
\t\t<table id='table_";
        // line 4
        echo $this->getAttribute((isset($context['tab']) ? $context['tab'] : null), "id", array(), "any", false);
        echo "' class='tablesorter'>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['cols']) ? $context['cols'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['col']) {
            // line 8
            echo "\t\t\t\t<th >";
            echo $this->getAttribute((isset($context['col']) ? $context['col'] : null), "label", array(), "any", false);
            echo "</th>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['rows']) ? $context['rows'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['row']) {
            // line 14
            echo "\t\t\t\t<tr ";
            if (($this->getAttribute((isset($context['row']) ? $context['row'] : null), "issue", array(), "any", false) > 0)) {
                echo " class='alert' ";
            }
            echo ">
\t\t\t\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['row']) ? $context['row'] : null));
            foreach ($context['_seq'] as $context['_key'] => $context['cell']) {
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class='";
                // line 17
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
            // line 20
            echo "\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t
</div>";
    }

    public function getTemplateName()
    {
        return "users.list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
