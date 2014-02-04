<?php

/* CaravaneOrganicBundle:Client:tabs/tents.html.twig */
class __TwigTemplate_94c21c62f6f659b211a9234269c6b0bc4e4761c00e36b48c53e8a3cc335218b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tents")) {
            // line 2
            echo "
    <table class=\"table table-condensed table-bordered table-striped\">
            <thead>
                <tr>
                    <th>Reference</th>
                    <th>Name</th>
                    <th>Width</th>
                    <th>Length</th>
                    <th>Area</th>
                </tr>
            </thead>
            ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tents"));
            foreach ($context['_seq'] as $context["_key"] => $context["tent"]) {
                // line 14
                echo "            <tr>
                <td><a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["tent"]) ? $context["tent"] : $this->getContext($context, "tent")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tent"]) ? $context["tent"] : $this->getContext($context, "tent")), "reference"), "html", null, true);
                echo "</a></td>
                <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tent"]) ? $context["tent"] : $this->getContext($context, "tent")), "name"), "html", null, true);
                echo "</td>
                <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tent"]) ? $context["tent"] : $this->getContext($context, "tent")), "width"), "html", null, true);
                echo "</td>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tent"]) ? $context["tent"] : $this->getContext($context, "tent")), "length"), "html", null, true);
                echo "</td>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tent"]) ? $context["tent"] : $this->getContext($context, "tent")), "m2"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </table>
";
        }
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Client:tabs/tents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  52 => 17,  42 => 15,  39 => 14,  35 => 13,  22 => 2,  158 => 72,  154 => 71,  146 => 69,  142 => 68,  136 => 65,  132 => 64,  126 => 61,  122 => 60,  118 => 59,  114 => 58,  102 => 49,  96 => 46,  90 => 43,  81 => 37,  74 => 33,  67 => 29,  60 => 19,  50 => 18,  31 => 8,  25 => 5,  19 => 1,  153 => 8,  150 => 70,  139 => 68,  127 => 59,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  77 => 27,  72 => 24,  61 => 20,  56 => 18,  54 => 18,  48 => 16,  45 => 14,  43 => 14,  38 => 12,  36 => 7,  32 => 5,  29 => 4,);
    }
}
