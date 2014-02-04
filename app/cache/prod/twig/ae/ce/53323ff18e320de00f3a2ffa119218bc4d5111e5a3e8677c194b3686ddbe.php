<?php

/* CaravaneOrganicBundle:Job:edit.html.twig */
class __TwigTemplate_aece53323ff18e320de00f3a2ffa119218bc4d5111e5a3e8677c194b3686ddbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'form_header' => array($this, 'block_form_header'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"row-fluid\">

";
        // line 8
        $this->displayBlock('form_header', $context, $blocks);
        // line 11
        echo "<input type='hidden' name='clientid' id=\"clientid\"  value=\"";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "id"), "html", null, true);
            echo " ";
        }
        echo "\"/>
";
        // line 12
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors')) {
            // line 13
            echo "    <div class=\"alert alert-error\">
        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
            echo "
    </div>
";
        }
        // line 17
        if ((isset($context["customErrors"]) ? $context["customErrors"] : null)) {
            // line 18
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customErrors"]) ? $context["customErrors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "        <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 23
        echo "
<div class=\"row-fluid\">
    <div class=\"actions\">
            <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job"), "html", null, true);
        echo "\" class=\"btn\">
                    Back to the list
            </a>

                    <div class=\"btn-group pull-right\">
                              <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"drop_1\">
                                <img src=\"/images/icons/pdf.png\">
                                <span class=\"caret\"></span>
                              </a>
                            <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop_1\">
                                ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
        foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
            // line 38
            echo "                                    <li role=\"presentation\">
                                        <a role=\"menuitem\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : null))), "html", null, true);
            echo "\" target=\"_blank\" ><img src=\"/images/icons/pdf.png\"> Offre ";
            echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
            echo "</a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </ul>
                    </div>
        </div>
    </div>



<div>
    <ul class=\"nav nav-tabs\">
         <li class=\"active\"><a href=\"#tab_summary\" data-toggle=\"tab\">Summary</a></li>
        <li><a href=\"#tab_client\" data-toggle=\"tab\">Client</a></li>
        <li><a href=\"#tab_job\" data-toggle=\"tab\">Job</a></li>
        <li><a href=\"#tab_planning\" data-toggle=\"tab\">Planning</a></li>
        <li><a href=\"#tab_products\" data-toggle=\"tab\">Products</a></li>
        <li><a href=\"#tab_conditions\" data-toggle=\"tab\">Conditions</a></li>
        <li><a href=\"#tab_documents\" data-toggle=\"tab\">Documents</a></li>
        <li><a href=\"#tab_comments\" data-toggle=\"tab\">Comments</a></li>
    </ul>
</div>
<div class=\"tab-content\">
      <div class=\"tab-pane active\" id=\"tab_summary\"> ";
        // line 62
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:tabs/summary.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_client\"> ";
        // line 63
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:tabs/client.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_job\">   ";
        // line 64
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:tabs/job.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_planning\"> ";
        // line 65
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:tabs/planning.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_products\">";
        // line 66
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:tabs/products.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_conditions\">";
        // line 67
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:tabs/conditions.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_documents\">";
        // line 68
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:tabs/documents.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_comments\">";
        // line 69
        $this->env->loadTemplate("CaravaneOrganicBundle:Job:tabs/comments.html.twig")->display($context);
        echo "</div>
</div>





    </div>
    <div class=\"row-fluid\">
        <div class=\"actions\">
            <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
            <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job"), "html", null, true);
        echo "\" class=\"btn\">
                    Back to the list
            </a>
        </div>
    </div>


         <div style=\"display:none\">
            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
        </div>
</form>
</div>
<div id=\"stockModal\" data-target=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "\" class=\"modal hide fade largeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"stockModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3>Stock</h3>
          </div>
          <div class=\"modal-body\">
                <div class='row-fluid' id=\"products\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\">
                        ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productCategories"]) ? $context["productCategories"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 101
            echo "                             <li ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                echo " class='active' ";
            }
            echo "><a href=\"#cat";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\" data-toggle=\"tab\" >";
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
            echo "</a></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                    </ul>

                    <div class=\"tab-content\">
                        ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productCategories"]) ? $context["productCategories"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 107
            echo "
                             <div class=\"tab-pane ";
            // line 108
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                echo " active ";
            }
            echo "\" id=\"cat";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\" >
                                ";
            // line 109
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CaravaneOrganicBundle:Tent:getAvailable", array("entity" => (isset($context["entity"]) ? $context["entity"] : null), "categoryId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "startDate" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "plannings"), 1, array(), "array"), "vars"), "value"), "startDate"), "endDate" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "plannings"), 3, array(), "array"), "vars"), "value"), "endDate"))));
            echo "
                             </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                    </div>
                </div>
          </div>
          <div class=\"modal-footer\">


          </div>
    </div>


        <div id=\"transportModal\" data-target=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "\" class=\"modal hide fade largeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"transportModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3>Transport</h3>
          </div>
          <div class=\"modal-body\">
                <div class='row-fluid' id=\"transports\">
                     ";
        // line 129
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CaravaneOrganicBundle:Transport:getAvailable"));
        echo "
                </div>
          </div>
          <div class=\"modal-footer\">


          </div>
    </div>


";
    }

    // line 8
    public function block_form_header($context, array $blocks = array())
    {
        // line 9
        echo "<form id='mainForm' action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo " data-entity=\"job\" novalidate >
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 8,  318 => 129,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 132,  255 => 126,  248 => 118,  245 => 117,  222 => 103,  212 => 95,  206 => 100,  172 => 137,  157 => 125,  369 => 134,  366 => 133,  364 => 132,  361 => 131,  358 => 130,  352 => 128,  342 => 120,  336 => 9,  328 => 116,  324 => 115,  321 => 114,  317 => 112,  307 => 110,  297 => 109,  288 => 106,  275 => 102,  271 => 108,  261 => 98,  233 => 82,  225 => 76,  210 => 70,  198 => 69,  191 => 68,  170 => 59,  197 => 84,  184 => 65,  161 => 60,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 133,  256 => 112,  250 => 93,  231 => 99,  226 => 97,  180 => 80,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 29,  323 => 177,  319 => 176,  311 => 171,  303 => 166,  293 => 159,  286 => 155,  279 => 109,  272 => 147,  265 => 99,  251 => 106,  244 => 131,  237 => 127,  223 => 101,  216 => 115,  202 => 87,  195 => 92,  188 => 88,  181 => 95,  167 => 61,  160 => 83,  146 => 75,  97 => 45,  90 => 43,  83 => 35,  76 => 23,  155 => 67,  153 => 56,  129 => 56,  37 => 8,  70 => 28,  53 => 23,  65 => 19,  139 => 63,  113 => 42,  110 => 43,  104 => 39,  58 => 17,  34 => 14,  190 => 73,  174 => 144,  150 => 52,  134 => 50,  126 => 47,  120 => 73,  84 => 33,  81 => 35,  23 => 3,  118 => 43,  96 => 36,  77 => 19,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 111,  309 => 97,  305 => 95,  298 => 91,  294 => 108,  285 => 105,  283 => 104,  278 => 86,  268 => 107,  264 => 84,  258 => 139,  252 => 125,  247 => 78,  241 => 96,  229 => 98,  220 => 70,  214 => 97,  177 => 80,  169 => 60,  140 => 112,  132 => 49,  128 => 49,  111 => 50,  107 => 36,  61 => 11,  38 => 16,  273 => 119,  269 => 118,  254 => 94,  246 => 103,  243 => 88,  240 => 86,  238 => 95,  235 => 74,  230 => 123,  227 => 105,  224 => 71,  221 => 96,  219 => 74,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 62,  131 => 80,  119 => 46,  108 => 55,  102 => 39,  71 => 49,  67 => 15,  63 => 13,  59 => 18,  47 => 12,  28 => 5,  29 => 4,  35 => 73,  26 => 12,  43 => 22,  196 => 74,  183 => 81,  171 => 62,  166 => 132,  163 => 69,  158 => 55,  156 => 58,  151 => 66,  142 => 35,  138 => 93,  136 => 56,  123 => 74,  121 => 47,  117 => 44,  115 => 45,  105 => 47,  91 => 42,  69 => 30,  62 => 28,  49 => 13,  101 => 46,  94 => 43,  89 => 36,  85 => 23,  79 => 31,  75 => 32,  68 => 18,  56 => 9,  50 => 10,  87 => 23,  72 => 15,  66 => 14,  55 => 22,  41 => 6,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 33,  46 => 23,  44 => 1,  40 => 148,  32 => 5,  27 => 5,  22 => 2,  209 => 94,  203 => 78,  199 => 67,  193 => 86,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 135,  164 => 58,  162 => 59,  154 => 58,  149 => 119,  147 => 65,  144 => 118,  141 => 50,  133 => 90,  130 => 49,  125 => 55,  122 => 47,  116 => 41,  112 => 42,  109 => 37,  106 => 42,  103 => 33,  99 => 38,  95 => 37,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 31,  64 => 25,  60 => 18,  57 => 11,  54 => 21,  51 => 20,  48 => 7,  45 => 20,  42 => 23,  39 => 11,  36 => 4,  33 => 3,  30 => 1,);
    }
}
