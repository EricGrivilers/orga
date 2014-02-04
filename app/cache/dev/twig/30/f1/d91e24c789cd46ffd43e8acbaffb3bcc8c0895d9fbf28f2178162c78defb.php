<?php

/* CaravaneOrganicBundle:Tent:index.html.twig */
class __TwigTemplate_30f1d91e24c789cd46ffd43e8acbaffb3bcc8c0895d9fbf28f2178162c78defb extends Twig_Template
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
        <ul class=\"nav nav-pills pull-left\">
          <li ";
        // line 10
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")))), "html", null, true);
        echo "\">All</a>
          </li>
          <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "reserved")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => "reserved", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1, "startDate" => twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "Y-m-d H:i:s"), "endDate" => twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "Y-m-d H:i:s"))), "html", null, true);
        echo "\">Booked</a></li>
          <li ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "option")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => "option", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1, "startDate" => twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "Y-m-d H:i:s"), "endDate" => twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "Y-m-d H:i:s"))), "html", null, true);
        echo "\">Option</a></li>
          <li ";
        // line 15
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "free")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => "free", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1, "startDate" => twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "Y-m-d H:i:s"), "endDate" => twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "Y-m-d H:i:s"))), "html", null, true);
        echo "\">Free</a></li>
          <li ";
        // line 16
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "winter")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => "winter", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Winter stock</a></li>

        </ul>
        ";
        // line 19
        if (((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "reserved") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "free")) || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "option"))) {
            // line 20
            echo "         ";
            // line 37
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
            echo "\" method=\"get\" id=\"rangeDateForm\"  class='form-inline'>
            <input type='hidden' name='type' value='";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "' />
            <input type='hidden' name='ob' value='";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "html", null, true);
            echo "' />

         <input id=\"startDate\" name=\"startDate\" data-format=\"dd/MM/yyyy hh:mm:ss\" type=\"hidden\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "Y-m-d H:i:s"), "html", null, true);
            echo "\" />
        <input id=\"endDate\" name=\"endDate\" data-format=\"dd/MM/yyyy hh:mm:ss\" type=\"hidden\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "Y-m-d H:i:s"), "html", null, true);
            echo "\" />
        <div id=\"reportrange\" >
            <i class=\"icon-calendar icon-large\"></i>
            <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "d/m/Y H:i:s"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "d/m/Y H:i:s"), "html", null, true);
            echo "</span> <b class=\"caret\"></b>
        </div>
    </form>
        
        ";
        }
        // line 50
        echo "</div>
<div class=\"span2\">
     <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_new"), "html", null, true);
        echo "\" class=\"btn btn-inverse \">
            New product
        </a>
    </div>
    </div>
</div>

<div class=\"row-fluid\">



<table class=\"table table-bordered table-condensed table-striped\">
    <thead>
        <tr>
            <th><a data-orderby=\"reference\" >Reference</a></th>
            <th><a data-orderby=\"productCategory\" >Category</a></th>
            <th><a data-orderby=\"name\" >Name</a></th>
            
            <th>Kit</th>
            <th><a data-orderby=\"ownerid\" >Owner</a></th>
            <th>Color</th>
            <th><a data-orderby=\"length\" >Length</a></th>
            <th><a data-orderby=\"width\" >Width</a></th>
            <th><a data-orderby=\"m2\" >Area</a></th>


            <th><a data-orderby=\"status\" >Etat</th>
            ";
        // line 79
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "reserved")) {
            // line 80
            echo "                <th>Jobs</th>
            ";
        }
        // line 82
        echo "             ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "option")) {
            // line 83
            echo "                <th>Offres</th>
            ";
        }
        // line 85
        echo "            <th>PDF</th>
             <th><a data-orderby=\"issue\" >Issues</a></th>

            <th>Ed</th>
            <th>Del</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 94
            echo "        <tr>
            <td><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productCategory"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</a></td>
            
            <td>";
            // line 99
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "kit")) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            echo "</td>
            <td>";
            // line 100
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ownerid")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ownerid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ownerid"), "name"), "html", null, true);
                echo "</a>";
            }
            echo "</td>
            <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "color"), "html", null, true);
            echo "</td>
            <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "length"), "html", null, true);
            echo "</td>
            <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "width"), "html", null, true);
            echo "</td>
            <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "m2"), "html", null, true);
            echo "</td>


            <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat"), "html", null, true);
            echo "</td>
            ";
            // line 108
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "reserved")) {
                // line 109
                echo "                <td>";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobs"));
                foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                    // line 110
                    echo "                    
                    ";
                    // line 111
                    if (twig_in_filter($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "jobid"), (isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")))) {
                        // line 112
                        echo "                        <li><a href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "jobid"), "id"))), "html", null, true);
                        echo "'>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "jobid"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 114
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
            ";
            }
            // line 116
            echo "            ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "option")) {
                // line 117
                echo "                <td>";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "offres"));
                foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                    // line 118
                    echo "                   
                    ";
                    // line 119
                    if (twig_in_filter($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "offreid"), (isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")))) {
                        // line 120
                        echo "                        <li><a href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "offreid"), "id"))), "html", null, true);
                        echo "'>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "offreid"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 122
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
            ";
            }
            // line 124
            echo "             <td>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop4\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul id=\"menu1\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop4\">
                        ";
            // line 128
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
            foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                // line 129
                echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"\"><img src=\"/images/icons/pdf.png\"> Offre ";
                // line 130
                echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                    </ul>
                </li>
            </td>

           <td>";
            // line 137
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "issue")) {
                echo "<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "issue"), "html", null, true);
                echo "</span>";
            }
            echo "</td>

            <td>
                <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-edit\"></i></a>
                
            </td>
             <td>
                <a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "    </tbody>
</table>


</div>
<div class=\"row-fluid\">
  <div class=\"row-fluid\">
    ";
        // line 155
        $this->env->loadTemplate("CaravaneOrganicBundle:Default:pagination.html.twig")->display($context);
        // line 156
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Tent:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 156,  366 => 155,  357 => 148,  347 => 144,  340 => 140,  330 => 137,  324 => 133,  315 => 130,  312 => 129,  308 => 128,  302 => 124,  293 => 122,  285 => 120,  283 => 119,  280 => 118,  275 => 117,  272 => 116,  263 => 114,  255 => 112,  253 => 111,  250 => 110,  245 => 109,  243 => 108,  239 => 107,  233 => 104,  229 => 103,  225 => 102,  221 => 101,  211 => 100,  203 => 99,  196 => 97,  192 => 96,  186 => 95,  183 => 94,  179 => 93,  169 => 85,  165 => 83,  162 => 82,  158 => 80,  156 => 79,  126 => 52,  122 => 50,  112 => 45,  106 => 42,  102 => 41,  97 => 39,  93 => 38,  88 => 37,  86 => 20,  84 => 19,  74 => 16,  66 => 15,  58 => 14,  50 => 13,  45 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
