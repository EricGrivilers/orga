<?php

/* CaravaneOrganicBundle:Client:tabs/offres.html.twig */
class __TwigTemplate_82b961dccadade95e4e5949423c187f6c539223bbfc97ee42709955a7bea36aa extends Twig_Template
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
                    <th>Build</th>
                    <th>Take off</th>
                    <th>Status</th>
                </tr>
            </thead>
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "offres"));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 12
            echo "            <tr>
                <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "reference"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "price"), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "startBuild")), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "endBuild")), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "jobid")) {
                echo "Job: <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "jobid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "jobid"), "html", null, true);
                echo "</a> ";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "status"), "html", null, true);
                echo " ";
            }
            echo "</td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </table>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Client:tabs/offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  44 => 14,  69 => 22,  52 => 16,  42 => 15,  39 => 14,  35 => 12,  22 => 2,  158 => 72,  154 => 71,  146 => 69,  142 => 68,  136 => 65,  132 => 64,  126 => 61,  122 => 60,  118 => 59,  114 => 58,  102 => 49,  96 => 46,  90 => 43,  81 => 37,  74 => 33,  67 => 29,  60 => 19,  50 => 18,  31 => 11,  25 => 5,  19 => 1,  153 => 8,  150 => 70,  139 => 68,  127 => 59,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  77 => 27,  72 => 24,  61 => 20,  56 => 17,  54 => 18,  48 => 15,  45 => 14,  43 => 14,  38 => 13,  36 => 7,  32 => 5,  29 => 4,);
    }
}
