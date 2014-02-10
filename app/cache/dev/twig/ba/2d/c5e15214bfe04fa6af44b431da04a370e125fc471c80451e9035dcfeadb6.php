<?php

/* CaravaneUIBundle:Form:bootstrap.html.twig */
class __TwigTemplate_ba2dc5e15214bfe04fa6af44b431da04a370e125fc471c80451e9035dcfeadb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'CaravaneUIBootstrapTypeahead_widget' => array($this, 'block_CaravaneUIBootstrapTypeahead_widget'),
            'CaravaneUIBootstrapRadioButton_widget' => array($this, 'block_CaravaneUIBootstrapRadioButton_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('CaravaneUIBootstrapTypeahead_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('CaravaneUIBootstrapRadioButton_widget', $context, $blocks);
    }

    // line 1
    public function block_CaravaneUIBootstrapTypeahead_widget($context, array $blocks = array())
    {
        // line 2
        $context["label_field_value"] = $this->env->getExtension('access_twig_extension')->accessFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "value"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "label_field"));
        // line 3
        echo "
\t<input class=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "class"), "html", null, true);
        echo " typeahead\" type=\"text\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["label_field_value"]) ? $context["label_field_value"] : $this->getContext($context, "label_field_value")), "html", null, true);
        echo "\" data-provide=\"typeahead\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "full_name"), "html", null, true);
        echo "\" >


\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('#";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id"), "html", null, true);
        echo "').typeahead({
\t\t\t\tminLength:3,
\t\t\t\tsource: function (query, process) {
\t\t\t\t\t\$.getJSON(
\t\t\t\t\t    Routing.generate('";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "source_route"), "html", null, true);
        echo "'),
\t\t\t\t\t    { query: query },
\t\t\t\t\t    function (data) {
\t\t\t\t\t\t    labels=[]
\t\t\t\t\t\t    ids={}
\t\t\t\t\t\t    mapped={}
\t\t\t\t\t\t    \$.each(data, function (i, item) {
\t\t\t\t\t\t\t\tmapped[item.label] = item.label;
\t\t\t\t\t\t\t\tlabels.push(item.label);
\t\t\t\t\t\t\t\tids[item.label]=item.value;
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\tprocess(labels);
\t\t\t\t\t    }
\t\t\t\t\t);
\t\t\t\t},
\t\t\t\tupdater:function (item) {
\t\t\t\t\t";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "updater")) {
            // line 30
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "updater"), "html", null, true);
            echo "(ids[item],'";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "target_field"), "html", null, true);
            echo "')
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\treturn mapped[item]
\t\t\t\t}

\t\t    });
\t\t});
\t</script>
";
    }

    // line 40
    public function block_CaravaneUIBootstrapRadioButton_widget($context, array $blocks = array())
    {
        // line 41
        echo "
\t<div class=\"btn-group\" data-toggle=\"buttons-radio\" id=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id"), "html", null, true);
        echo "_widget\">
\t\t";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "choices"));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 44
            echo "\t\t\t<button type=\"button\" class=\"btn ";
            if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "data") == $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "value"))) {
                echo " active ";
            }
            echo "\" data-toggle=\"button\" data-target=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id"), "html", null, true);
            echo "\" data-value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "value"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"), "html", null, true);
            echo "</button>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t<input name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "full_name"), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id"), "html", null, true);
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "data"), "html", null, true);
        echo "\" >
    </div>
    <script type='text/javascript'>
    \t\$(function() {
\t\t\t\$('#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id"), "html", null, true);
        echo "_widget button').click(function(){
\t\t\t\ttarget=\$(this).attr('data-target');
\t\t\t\t\$(target).attr('value', \$(this).attr('data-value'));
\t\t\t})
\t\t});
    </script>
";
    }

    public function getTemplateName()
    {
        return "CaravaneUIBundle:Form:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  129 => 46,  112 => 44,  108 => 43,  104 => 42,  101 => 41,  98 => 40,  88 => 32,  80 => 30,  78 => 29,  59 => 13,  38 => 4,  57 => 11,  44 => 8,  86 => 24,  73 => 18,  69 => 17,  66 => 16,  63 => 15,  36 => 3,  30 => 1,  26 => 40,  23 => 39,  21 => 1,  81 => 26,  72 => 25,  52 => 9,  41 => 8,  39 => 7,  37 => 6,  35 => 3,  62 => 17,  54 => 9,  48 => 9,  42 => 4,  25 => 3,  20 => 1,  33 => 2,  22 => 23,  19 => 2,  31 => 2,  28 => 1,);
    }
}
