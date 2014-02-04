<?php

/* CaravaneOrganicBundle:Client:tabs/invoices.html.twig */
class __TwigTemplate_b93d5d75bb68a5650c6e03887900bbb54a9726f22ae9896c2ffff835e2549ee6 extends Twig_Template
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
        echo "<table class=\"table table-condensed table-bordered table-striped\">
            <thead>
                <tr>
                    <th>Reference</th>
                    <th>Price VAT Exc.</th>
                    <th>Date</th>
                    <th>Job</th>
                    <th>Slice</th>
                    <th>Status</th>
                </tr>
            </thead>
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "invoices"));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 13
            echo "            <tr>
                <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "reference"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "priceht"), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "insertdate"), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "jobid"), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "status"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </table>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Client:tabs/invoices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  53 => 17,  49 => 16,  75 => 21,  44 => 14,  69 => 22,  52 => 16,  42 => 15,  39 => 14,  35 => 12,  22 => 2,  158 => 72,  154 => 71,  146 => 69,  142 => 68,  136 => 65,  132 => 64,  126 => 61,  122 => 60,  118 => 59,  114 => 58,  102 => 49,  96 => 46,  90 => 43,  81 => 22,  74 => 33,  67 => 29,  60 => 19,  50 => 18,  31 => 11,  25 => 5,  19 => 1,  153 => 8,  150 => 70,  139 => 68,  127 => 59,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  77 => 27,  72 => 24,  61 => 19,  56 => 17,  54 => 18,  48 => 15,  45 => 15,  43 => 14,  38 => 13,  36 => 13,  32 => 12,  29 => 4,);
    }
}
