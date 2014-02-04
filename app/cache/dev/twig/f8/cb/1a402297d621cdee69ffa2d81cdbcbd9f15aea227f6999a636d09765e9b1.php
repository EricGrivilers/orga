<?php

/* CaravaneOrganicBundle:Offre:index.html.twig */
class __TwigTemplate_f8cb1a402297d621cdee69ffa2d81cdbcbd9f15aea227f6999a636d09765e9b1 extends Twig_Template
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
        echo "
<div class=\"row-fluid\">
    <div class=\"tools\">
        <div class=\"span10\">
        <ul class=\"nav nav-pills\">

          <li ";
        // line 10
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "running")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("type" => "running", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Running</a></li>
          <li ";
        // line 11
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "confirmed")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("type" => "confirmed", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Confirmed</a></li>
          <li ";
        // line 12
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "canceled")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("type" => "canceled", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Canceled</a></li>
          <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("type" => "all", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">All</a>
          </li>

        </ul>
</div>

<div class=\"span2\">
     <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_new"), "html", null, true);
        echo "\" class=\"btn btn-inverse \">
            New offer
        </a>
    </div>
    </div>
</div>
<div class=\"row-fluid\">




<table class=\"table table-bordered table-condensed table-striped\">
    <thead>
        <tr>
            <th><a data-orderby=\"reference\" >Reference</a></th>
            <th><a data-orderby=\"clientid\" >Client</a></th>
            <th><a data-orderby=\"offretype\" >Type</a></th>
             <th><a data-orderby=\"price\" >Price VAT excl</a></th>
             <th><a data-orderby=\"status\" >Status</a></th>
             <th >Invoice</th>
             <th><a data-orderby=\"country\" >Delivery</a></th>
             <th><a data-orderby=\"insertdate\" >Date</a></th>
             <th>PDF</th>
             <th><a data-orderby=\"issue\" >Issues</a></th>
             <th>Ed</th>
            <th>Del</th>

        </tr>
    </thead>
    <tbody>
    ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 52
            echo "    ";
            $context["row"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index");
            // line 53
            echo "        <tr ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "issue") > 0)) {
                echo " class=\"error\" ";
            }
            echo ">
            <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 55
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid"), "name"), "html", null, true);
                echo "</a> ";
            }
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "offretype"), "html", null, true);
            echo "</td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price"), 2, ",", " "), "html", null, true);
            echo "</td>
             <td>";
            // line 58
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status") == "ok")) {
                echo "Sent to client";
            } elseif ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status") == "ANNULÉ") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status") == "cancel"))) {
                echo " Canceled ";
            } elseif ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status") == "draft") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status") == ""))) {
                echo "Draft ";
            } elseif ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid")) {
                echo "Job: <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid"), "id"))), "html", null, true);
                echo "\" class=\"red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid"), "reference"), "html", null, true);
                echo "</a>";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status") == "CONFIRMÉ")) {
                echo "Confirmed";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "html", null, true);
            }
            echo "</td>
             <td>";
            // line 59
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid"), "country"), "html", null, true);
            }
            echo "</td>
             <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
            echo "</td>
             <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "insertDate"), "d/m/Y"), "html", null, true);
            echo "</td>

             <td>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
            echo "_1\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul id=\"menu1\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
            echo "_1\">
                        ";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
            foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                // line 68
                echo "                            <li role=\"presentation\">
                               <a role=\"menuitem\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")))), "html", null, true);
                echo "\" target=\"_blank\" > Offre ";
                echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    </ul>
                </li>
            </td>


             <td>";
            // line 77
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "issue")) {
                echo "<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "issue"), "html", null, true);
                echo "</span>";
            }
            echo "</td>
              <td>
                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-edit\"></i></a>

            </td>
             <td>

                        <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a>


            </td>

";
            // line 138
            echo "        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "    </tbody>
</table>

</div>
<div class=\"row-fluid\">
    <div class=\"row-fluid\">
    ";
        // line 146
        $this->env->loadTemplate("CaravaneOrganicBundle:Default:pagination.html.twig")->display($context);
        // line 147
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Offre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 147,  281 => 146,  273 => 140,  258 => 138,  250 => 84,  242 => 79,  233 => 77,  226 => 72,  215 => 69,  212 => 68,  208 => 67,  204 => 66,  200 => 65,  193 => 61,  189 => 60,  183 => 59,  163 => 58,  159 => 57,  155 => 56,  145 => 55,  139 => 54,  132 => 53,  129 => 52,  112 => 51,  79 => 21,  69 => 14,  63 => 13,  55 => 12,  47 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
