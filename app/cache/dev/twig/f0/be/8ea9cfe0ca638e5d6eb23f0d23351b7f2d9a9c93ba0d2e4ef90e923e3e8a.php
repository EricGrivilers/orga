<?php

/* CaravaneOrganicBundle:Planning:index.html.twig */
class __TwigTemplate_f0be8ea9cfe0ca638e5d6eb23f0d23351b7f2d9a9c93ba0d2e4ef90e923e3e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row-fluid\">
    <div class=\"tools\">
        <div class=\"span10\">
        ";
        // line 16
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planning"), "html", null, true);
        echo "\" methgod=\"get\" class=\"form-inline\">
        <label class=\"checkbox\">
              <input type=\"checkbox\" name=\"show_inplace\" id=\"show_inplace\"  value=\"1\" ";
        // line 18
        if ((isset($context["show_inplace"]) ? $context["show_inplace"] : $this->getContext($context, "show_inplace"))) {
            echo "checked='checked' ";
        }
        echo " onchange=\"submit()\" /> Show in place
        </label>
        <select id=\"planning_user\" name=\"user\" onchange=\"submit()\">

            <option value=\"any\">Any user</option>
          ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 24
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "id"), "html", null, true);
            echo "\" ";
            if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) != null)) {
                // line 25
                echo "            ";
                if (($this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
                    echo " selected ";
                }
                // line 26
                echo "            ";
            }
            // line 27
            echo "            >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "name"), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </select>
       </form>
    </div>
    <div class=\"span2\">
        ";
        // line 34
        echo "    </div>
    </div>
</div>
<div class=\"row-fluid\">

    ";
        // line 39
        $this->env->loadTemplate("CaravaneCalendarBundle::calendar.html.twig")->display($context);
        // line 40
        echo "

</div>

";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Planning:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  91 => 39,  84 => 34,  78 => 29,  69 => 27,  66 => 26,  61 => 25,  56 => 24,  52 => 23,  42 => 18,  36 => 16,  31 => 4,  28 => 3,);
    }
}
