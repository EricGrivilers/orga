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
        if (((isset($context["type"]) ? $context["type"] : null) == "")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job", array("ob" => (isset($context["ob"]) ? $context["ob"] : null))), "html", null, true);
        echo "\">All</a>
          </li>
           <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : null) == "running")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job", array("ob" => (isset($context["ob"]) ? $context["ob"] : null))), "html", null, true);
        echo "\">Running</a>
          </li>
           <li ";
        // line 16
        if (((isset($context["type"]) ? $context["type"] : null) == "closed")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job", array("ob" => (isset($context["ob"]) ? $context["ob"] : null))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
            $context["row"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
            // line 57
            echo "        <tr ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue") > 0)) {
                echo " class=\"error\" ";
            }
            echo ">
            <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 59
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "name"), "html", null, true);
                echo "</a> ";
            }
            echo "</td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offretype"), "html", null, true);
            echo "</td>
             <td>";
            // line 61
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "country"), "html", null, true);
            }
            echo "</td>
             <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country"), "html", null, true);
            echo "</td>
             <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "startBuild"), "d/m/Y H:i"), "html", null, true);
            echo "</td>
             <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "endBuild"), "d/m/Y H:i"), "html", null, true);
            echo "</td>
             <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status"), "html", null, true);
            echo "</td>

             <td>";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "invoiceid"));
            foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
                echo " <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"))), "html", null, true);
                echo "\" class='red' >";
                echo twig_escape_filter($this->env, (isset($context["invoice"]) ? $context["invoice"] : null), "html", null, true);
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
             <td>";
            // line 68
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid")) {
                echo "<a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "email"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userid"), "name"), "html", null, true);
                echo "</a>";
            }
            echo "</td>
             <td>";
            // line 69
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreid")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreid"), "id"))), "html", null, true);
                echo "\" class=\"red\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreid"), "html", null, true);
                echo "</a>";
            }
            echo "</td>

             <td>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
            echo "_1\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul id=\"menu1\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : null))), "html", null, true);
                echo "\" target=\"_blank\" > Job ";
                echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
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
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue")) {
                echo "<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue"), "html", null, true);
                echo "</span>";
            }
            echo "</td>
              <td>
                <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-edit\"></i></a>

            </td>
             <td>

                        <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
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
        return array (  299 => 155,  289 => 148,  266 => 92,  249 => 85,  242 => 80,  228 => 76,  411 => 219,  408 => 218,  351 => 178,  343 => 173,  331 => 167,  292 => 142,  280 => 136,  274 => 146,  263 => 127,  236 => 114,  215 => 104,  211 => 103,  207 => 102,  178 => 67,  152 => 71,  333 => 8,  318 => 129,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 119,  222 => 108,  212 => 95,  206 => 100,  172 => 82,  157 => 125,  369 => 134,  366 => 133,  364 => 132,  361 => 131,  358 => 130,  352 => 128,  342 => 120,  336 => 9,  328 => 116,  324 => 115,  321 => 114,  317 => 159,  307 => 110,  297 => 154,  288 => 106,  275 => 102,  271 => 108,  261 => 98,  233 => 82,  225 => 76,  210 => 70,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 88,  161 => 62,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 133,  256 => 112,  250 => 93,  231 => 77,  226 => 109,  180 => 80,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 29,  323 => 161,  319 => 176,  311 => 157,  303 => 166,  293 => 159,  286 => 138,  279 => 109,  272 => 133,  265 => 99,  251 => 106,  244 => 131,  237 => 127,  223 => 101,  216 => 73,  202 => 87,  195 => 92,  188 => 88,  181 => 95,  167 => 61,  160 => 83,  146 => 75,  97 => 36,  90 => 43,  83 => 35,  76 => 23,  155 => 61,  153 => 56,  129 => 56,  37 => 8,  70 => 20,  53 => 23,  65 => 19,  139 => 63,  113 => 42,  110 => 43,  104 => 39,  58 => 17,  34 => 14,  190 => 73,  174 => 144,  150 => 52,  134 => 50,  126 => 47,  120 => 73,  84 => 33,  81 => 35,  23 => 3,  118 => 43,  96 => 36,  77 => 19,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 101,  314 => 99,  312 => 111,  309 => 156,  305 => 95,  298 => 91,  294 => 108,  285 => 105,  283 => 104,  278 => 86,  268 => 107,  264 => 84,  258 => 87,  252 => 121,  247 => 78,  241 => 96,  229 => 98,  220 => 74,  214 => 97,  177 => 80,  169 => 64,  140 => 112,  132 => 49,  128 => 57,  111 => 50,  107 => 36,  61 => 16,  38 => 16,  273 => 119,  269 => 118,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 95,  235 => 74,  230 => 111,  227 => 105,  224 => 75,  221 => 96,  219 => 74,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 38,  71 => 49,  67 => 17,  63 => 17,  59 => 18,  47 => 12,  28 => 3,  29 => 4,  35 => 11,  26 => 12,  43 => 22,  196 => 97,  183 => 81,  171 => 62,  166 => 132,  163 => 69,  158 => 74,  156 => 58,  151 => 60,  142 => 64,  138 => 93,  136 => 56,  123 => 74,  121 => 47,  117 => 50,  115 => 45,  105 => 47,  91 => 42,  69 => 30,  62 => 28,  49 => 13,  101 => 46,  94 => 43,  89 => 36,  85 => 23,  79 => 31,  75 => 32,  68 => 19,  56 => 14,  50 => 13,  87 => 29,  72 => 15,  66 => 14,  55 => 22,  41 => 13,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 22,  46 => 23,  44 => 1,  40 => 148,  32 => 5,  27 => 7,  22 => 2,  209 => 94,  203 => 69,  199 => 67,  193 => 68,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 135,  164 => 77,  162 => 59,  154 => 58,  149 => 119,  147 => 65,  144 => 118,  141 => 59,  133 => 90,  130 => 49,  125 => 56,  122 => 47,  116 => 41,  112 => 42,  109 => 37,  106 => 42,  103 => 33,  99 => 38,  95 => 37,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 31,  64 => 25,  60 => 18,  57 => 16,  54 => 21,  51 => 15,  48 => 7,  45 => 11,  42 => 23,  39 => 10,  36 => 4,  33 => 10,  30 => 1,);
    }
}
