<?php

/* CaravaneUIBundle:Form:fuelux.html.twig */
class __TwigTemplate_7bab29a3c1dfcacf9e7772bb57e139537c0820d45fda373e6fd799b1d7faea6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'CaravaneUIFueluxComboBox_widget' => array($this, 'block_CaravaneUIFueluxComboBox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('CaravaneUIFueluxComboBox_widget', $context, $blocks);
    }

    public function block_CaravaneUIFueluxComboBox_widget($context, array $blocks = array())
    {
        // line 2
        echo "

";
        // line 5
        echo "\t<div class=\"input-append dropdown combobox\">
\t\t<input class=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "class"), "html", null, true);
        echo "\" type=\"text\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "full_name"), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"), "html", null, true);
        echo "\" ><button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"caret\"></i></button>
\t\t<ul class=\"dropdown-menu\">
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "choices"));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 9
            echo "\t\t\t<li><a href=\"#\">";
            echo twig_escape_filter($this->env, (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneUIBundle:Form:fuelux.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  44 => 8,  86 => 24,  73 => 18,  69 => 17,  66 => 16,  63 => 15,  36 => 3,  30 => 5,  26 => 2,  23 => 14,  21 => 1,  81 => 26,  72 => 25,  52 => 10,  41 => 8,  39 => 7,  37 => 6,  35 => 5,  62 => 17,  54 => 9,  48 => 9,  42 => 4,  25 => 3,  20 => 1,  33 => 6,  22 => 23,  19 => 2,  31 => 2,  28 => 1,);
    }
}
