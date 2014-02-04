<?php

/* CaravaneOrganicBundle:Invoice:index.html.twig */
class __TwigTemplate_247bda5b908ca330d0acb4f5588adbc59c33f80c9693837c1e61c2f8c42116f8 extends Twig_Template
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
        // line 9
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")))), "html", null, true);
        echo "\">All</a>
          </li>
          <li ";
        // line 12
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "open")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("type" => "open", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Open</a></li>
          <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "paid")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("type" => "paid", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Paid</a></li>
          <li ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "todo")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("type" => "todo", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">To do</a></li>
          <li ";
        // line 15
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "draft")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("type" => "draft", "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1)), "html", null, true);
        echo "\">Draft</a></li>

        </ul>
</div>

<div class=\"span2\">
     <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_new"), "html", null, true);
        echo "\" class=\"btn btn-inverse \">
            New invoice
        </a>
    </div>
    </div>
</div>
<div class=\"row-fluid\">




<table class=\"table table-bordered table-condensed table-striped\">
    <thead>
        <tr>
            <th><a data-orderby=\"reference\">Reference</a></th>
            <th><a data-orderby=\"clientid\" >Client</a></th>
            <th><a data-orderby=\"offretype\" >Type</a></th>
            <th><a data-orderby=\"insertdate\" >Date</a></th>
            <th><a data-orderby=\"priceht\" >Am. VAT Excl.</a></th>
            <th>Am. VAT Incl.</th>
            <th><a data-orderby=\"cSlice\" >Slice</a></th>




             <th><a data-orderby=\"jobid\" >Job</a></th>
             <th><a data-orderby=\"status\" >Status</a></th>
             <th><a data-orderby=\"country\" >Country</a></th>
             <th>Account</th>
             <th>PDF</th>
             <th>R1</th>
             <th>R2</th>
             <th>MD</th>

             <th>Ed</th>
            <th>Del</th>

        </tr>
    </thead>
    <tbody>
    ";
        // line 61
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
            // line 62
            echo "    ";
            $context["row"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index");
            // line 63
            echo "        <tr>
            <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 65
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientid"), "name"), "html", null, true);
                echo "</a> ";
            }
            echo "</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "offretype"), "html", null, true);
            echo "</td>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "insertDate"), "d/m/Y"), "html", null, true);
            echo "</td>

            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceHT"), 2, ",", " "), "html", null, true);
            echo "</td>
            <td>";
            // line 70
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceType") == "intra")) {
                echo "<i>intra</i>";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priceTTC"), 2, ",", " "), "html", null, true);
            }
            echo "</td>

            <td> ";
            // line 72
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cSlice"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid"), "slices")), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 73
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid"), "id"))), "html", null, true);
                echo "\" class='red' >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid"), "html", null, true);
                echo "</a>";
            }
            echo "</td>
            <td> ";
            // line 74
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status") == "ok")) {
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "r1")) {
                    echo "R1";
                } elseif ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "r2")) {
                    echo "R2";
                } elseif ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "med")) {
                    echo "Ult ";
                } else {
                    echo " sent  ";
                }
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
            echo "</td>


             <td>";
            // line 78
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid")) {
                echo "<a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid"), "userid"), "email"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobid"), "userid"), "name"), "html", null, true);
                echo "</a>";
            }
            echo "</td>










             <td>

                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
            echo "_1\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
            echo "_1\">
                        ";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
            foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                // line 95
                echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "type" => "inv", "_locale" => (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")))), "html", null, true);
                echo "\" target=\"_blank\" ><img src=\"/images/icons/pdf.png\"> Invoice ";
                echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                    </ul>
                </li>
            </td>
             <td>
                ";
            // line 103
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "r1") == 1)) {
                // line 104
                echo "                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
                // line 105
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
                echo "_2\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
                // line 106
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
                echo "_2\">
                        ";
                // line 107
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
                foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                    // line 108
                    echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "type" => "r1", "_locale" => (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")))), "html", null, true);
                    echo "\" target=\"_blank\" > Reminder 1 ";
                    echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")), "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                    </ul>
                </li>
                ";
            }
            // line 115
            echo "            </td>
            <td>
                ";
            // line 117
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "r2") == 1)) {
                // line 118
                echo "                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
                // line 119
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
                echo "_3\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
                // line 120
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
                echo "_3\">
                        ";
                // line 121
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
                foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                    // line 122
                    echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "type" => "r2", "_locale" => (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")))), "html", null, true);
                    echo "\" target=\"_blank\" > Reminder 2  ";
                    echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")), "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                    </ul>
                </li>
                ";
            }
            // line 129
            echo "            </td>
            <td>
                ";
            // line 131
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "med") == 1)) {
                // line 132
                echo "                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
                // line 133
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
                echo "_4\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
                // line 134
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "html", null, true);
                echo "_4\">
                        ";
                // line 135
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
                foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                    // line 136
                    echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "type" => "med", "_locale" => (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")))), "html", null, true);
                    echo "\" target=\"_blank\" > Ultimatum ";
                    echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : $this->getContext($context, "lg")), "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "                    </ul>
                </li>
                ";
            }
            // line 143
            echo "            </td>

              <td>
                <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-edit\"></i></a>

            </td>
             <td>

                        <a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a>


            </td>

        </tr>
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
        // line 158
        echo "    </tbody>
</table>

</div>
<div class=\"row-fluid\">
    ";
        // line 163
        $this->env->loadTemplate("CaravaneOrganicBundle:Default:pagination.html.twig")->display($context);
        // line 164
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Invoice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 164,  445 => 163,  438 => 158,  417 => 151,  409 => 146,  404 => 143,  399 => 140,  388 => 137,  385 => 136,  381 => 135,  377 => 134,  373 => 133,  370 => 132,  368 => 131,  364 => 129,  359 => 126,  348 => 123,  345 => 122,  341 => 121,  337 => 120,  333 => 119,  330 => 118,  328 => 117,  324 => 115,  319 => 112,  308 => 109,  305 => 108,  301 => 107,  297 => 106,  293 => 105,  290 => 104,  288 => 103,  282 => 99,  271 => 96,  268 => 95,  264 => 94,  260 => 93,  256 => 92,  233 => 78,  227 => 75,  209 => 74,  199 => 73,  191 => 72,  181 => 70,  177 => 69,  172 => 67,  168 => 66,  158 => 65,  152 => 64,  149 => 63,  146 => 62,  129 => 61,  86 => 21,  73 => 15,  65 => 14,  57 => 13,  49 => 12,  44 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
