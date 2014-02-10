<?php

/* CaravaneOrganicBundle:Dashboard:index.html.twig */
class __TwigTemplate_4c40ec5a83afde3b6838e8ec6fa09f8d604b558938ccf59ce08c75155cc2f25c extends Twig_Template
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

\t<div class=\"span4\">
    <h4>My offers</h4>
            <div class=\"well dash\">

                <ul>
                  ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 12
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "reference"), "html", null, true);
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </ul>
              </div>

      </div>
      <div class=\"span4\">
        <h4>My jobs</h4>
            <div class=\"well dash\">

                <ul>
                  ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 24
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "reference"), "html", null, true);
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </ul>
              </div>
      </div>
      <div class=\"span4\">
        <h4>My messages</h4>
        <div class=\"well dash\">

        <ul>
          ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "            <li>On ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "messagedate"), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "userid"), "name"), "html", null, true);
            echo " wrote:<br/>
              ";
            // line 36
            echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "message");
            echo "</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </ul>
      </div>
      </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  102 => 36,  95 => 35,  91 => 34,  81 => 26,  70 => 24,  66 => 23,  55 => 14,  44 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
