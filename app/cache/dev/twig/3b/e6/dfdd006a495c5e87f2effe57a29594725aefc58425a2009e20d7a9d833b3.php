<?php

/* CaravaneUserBundle:User:index.html.twig */
class __TwigTemplate_3be6dfdd006a495c5e87f2effe57a29594725aefc58425a2009e20d7a9d833b3 extends Twig_Template
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

</div>
<div class=\"span2\">
     <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_new"), "html", null, true);
        echo "\" class=\"btn btn-inverse \">
            New user
        </a>
    </div>
    </div>
</div>
<div class=\"row-fluid\">

<table class=\"table table-bordered table-condensed table-striped\">
    <thead>
        <tr>
            <th><a data-orderby=\"iso\" >Reference</a></th>
            <th><a data-orderby=\"firstname\" >Firstname</a></th>
            <th><a data-orderby=\"lastname\" >Lastname</a></th>
            
            <th><a data-orderby=\"email\" >Email</a></th>
            <th><a data-orderby=\"phone\" >Phone</a></th>
            <th><a data-orderby=\"mobile\" >Mobile</a></th>
            <th><a data-orderby=\"lastlog\" >Lastlog</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "        <tr>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iso"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname"), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname"), "html", null, true);
            echo "</td>
            
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fax"), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastlog")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastlog"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </tbody>
</table>

</div>
<div class=\"row-fluid\">
    <div class=\"row-fluid\">
    ";
        // line 53
        $this->env->loadTemplate("CaravaneOrganicBundle:Default:pagination.html.twig")->display($context);
        // line 54
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  121 => 53,  113 => 47,  103 => 43,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  80 => 37,  76 => 36,  72 => 35,  69 => 34,  65 => 33,  39 => 10,  31 => 4,  28 => 3,);
    }
}
