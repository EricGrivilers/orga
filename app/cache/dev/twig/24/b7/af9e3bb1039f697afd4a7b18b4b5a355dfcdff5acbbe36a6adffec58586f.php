<?php

/* CaravaneOrganicBundle:Job:index.html.twig */
class __TwigTemplate_24b7af9e3bb1039f697afd4a7b18b4b5a355dfcdff5acbbe36a6adffec58586f extends Twig_Template
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
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job", array("ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")))), "html", null, true);
        echo "\">All</a>
          </li>
           <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "running")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job", array("ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")))), "html", null, true);
        echo "\">Running</a>
          </li>
           <li ";
        // line 16
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "closed")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job", array("ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")))), "html", null, true);
        echo "\">Closed</a>
          </li>

        </ul>
</div>

<div class=\"span2\">
     
    </div>
    </div>
</div>
<div class=\"row-fluid\">




<table class=\"table table-bordered table-condensed table-striped\">
    <thead>
        <tr>
            <th><a data-orderby=\"reference\">Reference</a></th>
            <th><a  data-orderby=\"clientid\">Client</a></th>
            <th><a  data-orderby=\"offretype\">Type</a></th>
             <th>Invoice</th>
             <th><a  data-orderby=\"country\" >Delivery</a></th>
             <th><a  data-orderby=\"startbuild\" >From</a></th>
             <th><a  data-orderby=\"endbuild\">To</a></th>
             <th><a  data-orderby=\"status\" >Status</a></th>
             <th><a  data-orderby=\"invoiceid\" >Invoice</a></th>
             <th><a  data-orderby=\"userid\" >Account</a></th>
             <th><a  data-orderby=\"offreid\" >Offre</a></th>
             <th>PDF</th>
              <th><a data-orderby=\"issue\" >Issues</a></th>
             <th>Ed</th>
            <th>Del</th>

        </tr>
    </thead>
    <tbody>
    ";
        // line 55
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
            // line 56
            echo "    ";
            $context["row"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index");
            // line 57
            echo "        <tr ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "issue") > 0)) {
                echo " class=\"error\" ";
            }
            echo ">
            <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 59
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid"), "name"), "html", null, true);
                echo "</a> ";
            }
            echo "</td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "offretype"), "html", null, true);
            echo "</td>
             <td>";
            // line 61
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid"), "country"), "html", null, true);
            }
            echo "</td>
             <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
            echo "</td>
             <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startBuild"), "d/m/Y H:i"), "html", null, true);
            echo "</td>
             <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endBuild"), "d/m/Y H:i"), "html", null, true);
            echo "</td>
             <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "html", null, true);
            echo "</td>

             <td>";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "invoiceid"));
            foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
                echo " <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "id"))), "html", null, true);
                echo "\" class='red' >";
                echo twig_escape_filter($this->env, (isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "html", null, true);
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
             <td>";
            // line 68
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userid")) {
                echo "<a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userid"), "email"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userid"), "name"), "html", null, true);
                echo "</a>";
            }
            echo "</td>
             <td>";
            // line 69
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "offreid")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "offreid"), "id"))), "html", null, true);
                echo "\" class=\"red\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "offreid"), "html", null, true);
                echo "</a>";
            }
            echo "</td>

             <td>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
            echo "_1\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul id=\"menu1\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
            echo "_1\">
                        ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
            foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                // line 76
                echo "                            <li role=\"presentation\">
                                 <a role=\"menuitem\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")))), "html", null, true);
                echo "\" target=\"_blank\" > Job ";
                echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                    </ul>
                </li>
            </td>


             <td>";
            // line 85
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "issue")) {
                echo "<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "issue"), "html", null, true);
                echo "</span>";
            }
            echo "</td>
              <td>
                <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-edit\"></i></a>

            </td>
             <td>

                        <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a>


            </td>

";
            // line 146
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
        // line 148
        echo "    </tbody>
</table>

</div>
<div class=\"row-fluid\">
    <div class=\"row-fluid\">
    ";
        // line 154
        $this->env->loadTemplate("CaravaneOrganicBundle:Default:pagination.html.twig")->display($context);
        // line 155
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 155,  297 => 154,  289 => 148,  274 => 146,  266 => 92,  258 => 87,  249 => 85,  242 => 80,  231 => 77,  228 => 76,  224 => 75,  220 => 74,  216 => 73,  203 => 69,  193 => 68,  178 => 67,  173 => 65,  169 => 64,  165 => 63,  161 => 62,  155 => 61,  151 => 60,  141 => 59,  135 => 58,  128 => 57,  125 => 56,  108 => 55,  67 => 17,  61 => 16,  56 => 14,  50 => 13,  45 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
