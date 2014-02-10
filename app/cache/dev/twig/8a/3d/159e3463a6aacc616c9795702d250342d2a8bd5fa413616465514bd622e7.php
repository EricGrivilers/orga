<?php

/* CaravaneOrganicBundle:Job:popover.html.twig */
class __TwigTemplate_8a3d159e3463a6aacc616c9795702d250342d2a8bd5fa413616465514bd622e7 extends Twig_Template
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
        echo "Account: <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "userid"), "name"), "html", null, true);
        echo "</b><br/>
Reference: <b>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "reference"), "html", null, true);
        echo "</b>
<hr/>
Dates:
\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "plannings"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "\t\t";
            if ((($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "planningtype") == "build") || ($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "planningtype") == "unbuild"))) {
                // line 7
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "planningtype"), "html", null, true);
                echo " ";
                if ($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "userid")) {
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "userid"), "iso"), "html", null, true);
                    echo ")";
                }
                echo ":
\t\t\t<br><b>";
                // line 8
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "startdate"), "d/m/Y H:i"), "html", null, true);
                echo "</b> - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "enddate"), "d/m/Y H:i"), "html", null, true);
                echo "  </li>
\t\t";
            }
            // line 10
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<hr/>
Stock:
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "\t\t";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "tentid")) {
                // line 15
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "tentid"), "reference"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "tentid"), "productCategory"), "name"), "html", null, true);
                echo ")</li>
\t\t";
            }
            // line 17
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job:popover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  72 => 15,  69 => 14,  65 => 13,  61 => 11,  55 => 10,  48 => 8,  37 => 7,  34 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }
}
