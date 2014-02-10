<?php

/* CaravaneOrganicBundle:Client:index.html.twig */
class __TwigTemplate_c9b4d0bab80f96be5703a1f8505285162dbac8f57d86cbbe38990e572d3e0133 extends Twig_Template
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
        <ul class=\"nav nav-pills\">
          <li ";
        // line 8
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client", array("ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")))), "html", null, true);
        echo "\">All</a>
          </li>
          <li ";
        // line 11
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "owner")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client", array("type" => "owner", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Owners</a></li>
          <li ";
        // line 12
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "renter")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client", array("type" => "renter", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Renters</a></li>
          <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "cie")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client", array("type" => "cie", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Companies</a></li>
          <li ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "part")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client", array("type" => "part", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Private</a></li>
        </ul>
</div>
<div class=\"span2\">
     <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_new"), "html", null, true);
        echo "\" class=\"btn btn-inverse \">New client</a>
    </div>
    </div>
</div>
<div class=\"row-fluid\">




<table class=\"table table-bordered table-condensed table-striped\">
    <thead>
        <tr>

            <th><a data-orderby=\"reference\" >Reference</a></th>
            <th><a data-orderby=\"clienttype\">Type</a></th>

             <th><a data-orderby=\"name\">Name</a></th>
            ";
        // line 37
        echo "
            <th><a data-orderby=\"vat\">VAT</a></th>

            <th>Tents</th>



            <th><a data-orderby=\"email\">Email</a></th>
            <th><a data-orderby=\"phone\">Phone</a></th>
            <th><a data-orderby=\"mobile\">Mobile</a></th>

            ";
        // line 64
        echo "            <th>Ed</th>
            <th>Del</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 70
            echo "        <tr>

            <td><b><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
            echo "</a></b></td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clienttype"), "html", null, true);
            echo "</td>

            <td><b><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</a></b></td>
           ";
            // line 78
            echo "
            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vat"), "html", null, true);
            echo "</td>

            <td>";
            // line 81
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tents"));
            foreach ($context['_seq'] as $context["_key"] => $context["tent"]) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["tent"]) ? $context["tent"] : $this->getContext($context, "tent")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["tent"]) ? $context["tent"] : $this->getContext($context, "tent")), "html", null, true);
                echo "</a>, ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>

            <td><a href=\"mailto:";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</a></td>
             <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
            echo "</td>
             <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mobile"), "html", null, true);
            echo "</td>

          ";
            // line 103
            echo "            <td>
                <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-edit\"></i></a>

            </td>
             <td>

                        <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a>


            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "    </tbody>
</table>


</div>
<div class=\"row-fluid\">
    <div class=\"row-fluid\">
    ";
        // line 122
        $this->env->loadTemplate("CaravaneOrganicBundle:Default:pagination.html.twig")->display($context);
        // line 123
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 123,  219 => 122,  210 => 115,  198 => 109,  190 => 104,  187 => 103,  182 => 85,  178 => 84,  172 => 83,  156 => 81,  151 => 79,  148 => 78,  142 => 75,  137 => 73,  131 => 72,  127 => 70,  123 => 69,  116 => 64,  103 => 37,  83 => 18,  72 => 14,  64 => 13,  56 => 12,  48 => 11,  43 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
