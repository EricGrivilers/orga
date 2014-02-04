<?php

/* CaravaneOrganicBundle:Offre:edit.html.twig */
class __TwigTemplate_8d5b686ef444c7bb4a005ec57553941a0291b49c98ab28fed765e1c12626da04 extends Twig_Template
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
        echo "


<input type='hidden' name='clientid' id=\"clientid\"  value=\"";
        // line 14
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "id"), "html", null, true);
            echo " ";
        }
        echo "\"/>
";
        // line 15
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors')) {
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
            echo "
";
        }
        // line 18
        if ((isset($context["customErrors"]) ? $context["customErrors"] : null)) {
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customErrors"]) ? $context["customErrors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "<div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 24
        echo " <div class=\"row-fluid\">
        <div class=\"actions\">
            <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre"), "html", null, true);
        echo "\" class=\"btn\">
                    Back to the list
            </a>
            ";
        // line 30
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id")) {
            // line 31
            echo "                <div class=\"btn-group pull-right\">
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
                echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : null))), "html", null, true);
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
            echo "                    </ul>
                </div>
            ";
        }
        // line 45
        echo "        </div>
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
        // line 63
        $this->env->loadTemplate("CaravaneOrganicBundle:Offre:tabs/summary.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_client\"> ";
        // line 64
        $this->env->loadTemplate("CaravaneOrganicBundle:Offre:tabs/client.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_job\">   ";
        // line 65
        $this->env->loadTemplate("CaravaneOrganicBundle:Offre:tabs/job.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_planning\"> ";
        // line 66
        $this->env->loadTemplate("CaravaneOrganicBundle:Offre:tabs/planning.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_products\">";
        // line 67
        $this->env->loadTemplate("CaravaneOrganicBundle:Offre:tabs/products.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_conditions\">";
        // line 68
        $this->env->loadTemplate("CaravaneOrganicBundle:Offre:tabs/conditions.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_documents\">";
        // line 69
        $this->env->loadTemplate("CaravaneOrganicBundle:Offre:tabs/documents.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_comments\">";
        // line 70
        $this->env->loadTemplate("CaravaneOrganicBundle:Offre:tabs/comments.html.twig")->display($context);
        echo "</div>
</div>



    <div style=\"display:none\">
        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
    </div>

     <div class=\"row-fluid\">
        <div class=\"actions\">
            <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
            <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre"), "html", null, true);
        echo "\" class=\"btn\">
                    Back to the list
            </a>
        </div>
    </div>
</form>

</div>
<div id=\"stockModal\" data-target=\"";
        // line 90
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
        // line 98
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
            // line 99
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
        // line 101
        echo "                    </ul>

                    <div class=\"tab-content\">
                        ";
        // line 104
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "plannings")) == 4)) {
            // line 105
            echo "                        ";
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
                // line 106
                echo "
                             <div class=\"tab-pane ";
                // line 107
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                    echo " active ";
                }
                echo "\" id=\"cat";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
                echo "\" >
                                ";
                // line 108
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
            // line 111
            echo "                        ";
        } else {
            // line 112
            echo "                            <div class='alert alert-error'>No planning defined</div>
                        ";
        }
        // line 114
        echo "                    </div>
                </div>
          </div>
          <div class=\"modal-footer\">


          </div>
    </div>






    <div id=\"transportModal\" data-target=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "\" class=\"modal hide fade largeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"transportModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3>Transport</h3>
          </div>
          <div class=\"modal-body\">
                <div class='row-fluid' id=\"transports\">
                     ";
        // line 135
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo " data-entity=\"offre\"  novalidate >
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Offre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 111,  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 189,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  428 => 168,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 75,  218 => 70,  186 => 60,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  478 => 221,  456 => 211,  450 => 174,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  383 => 173,  363 => 165,  320 => 138,  310 => 130,  257 => 105,  213 => 83,  200 => 73,  194 => 65,  316 => 305,  304 => 128,  148 => 52,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  388 => 175,  377 => 170,  370 => 132,  359 => 164,  348 => 8,  330 => 118,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 224,  482 => 223,  477 => 187,  470 => 225,  466 => 184,  462 => 212,  460 => 220,  452 => 219,  429 => 199,  421 => 166,  403 => 191,  397 => 188,  389 => 186,  385 => 136,  373 => 169,  367 => 173,  345 => 122,  338 => 156,  313 => 304,  302 => 136,  282 => 87,  205 => 93,  201 => 92,  192 => 85,  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 167,  419 => 152,  417 => 151,  401 => 148,  399 => 140,  395 => 146,  391 => 148,  375 => 139,  372 => 138,  350 => 162,  339 => 120,  334 => 118,  329 => 116,  315 => 110,  295 => 98,  185 => 82,  114 => 42,  299 => 155,  289 => 158,  266 => 119,  249 => 85,  242 => 101,  228 => 124,  411 => 219,  408 => 149,  351 => 9,  343 => 173,  331 => 146,  292 => 90,  280 => 136,  274 => 146,  263 => 127,  236 => 78,  215 => 104,  211 => 69,  207 => 98,  178 => 84,  152 => 64,  333 => 135,  318 => 129,  308 => 109,  296 => 125,  290 => 104,  287 => 148,  281 => 117,  276 => 140,  270 => 138,  267 => 137,  259 => 83,  255 => 82,  248 => 103,  245 => 77,  222 => 88,  212 => 114,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 166,  364 => 127,  361 => 170,  358 => 130,  352 => 118,  342 => 121,  336 => 105,  328 => 117,  324 => 97,  321 => 114,  317 => 159,  307 => 114,  297 => 106,  288 => 122,  275 => 107,  271 => 96,  261 => 117,  233 => 78,  225 => 76,  210 => 115,  198 => 66,  191 => 71,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 31,  137 => 57,  301 => 95,  291 => 126,  277 => 91,  262 => 84,  256 => 92,  250 => 80,  231 => 76,  226 => 109,  180 => 59,  175 => 67,  165 => 63,  145 => 63,  100 => 38,  74 => 31,  323 => 128,  319 => 112,  311 => 109,  303 => 112,  293 => 105,  286 => 89,  279 => 151,  272 => 106,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 68,  167 => 70,  160 => 50,  146 => 75,  97 => 44,  90 => 36,  83 => 30,  76 => 16,  155 => 67,  153 => 79,  129 => 55,  37 => 8,  70 => 24,  53 => 16,  65 => 11,  139 => 63,  113 => 48,  110 => 38,  104 => 51,  58 => 18,  34 => 3,  190 => 104,  174 => 58,  150 => 7,  134 => 57,  126 => 61,  120 => 73,  84 => 20,  81 => 37,  23 => 2,  118 => 41,  96 => 37,  77 => 29,  52 => 8,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 173,  440 => 206,  437 => 147,  435 => 170,  430 => 144,  427 => 195,  423 => 142,  413 => 195,  409 => 146,  407 => 192,  402 => 130,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 151,  314 => 99,  312 => 172,  309 => 169,  305 => 97,  298 => 94,  294 => 108,  285 => 105,  283 => 108,  278 => 86,  268 => 95,  264 => 85,  258 => 139,  252 => 104,  247 => 101,  241 => 96,  229 => 102,  220 => 119,  214 => 97,  177 => 69,  169 => 56,  140 => 45,  132 => 47,  128 => 54,  111 => 27,  107 => 36,  61 => 10,  38 => 10,  273 => 119,  269 => 113,  254 => 105,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 99,  230 => 71,  227 => 75,  224 => 99,  221 => 123,  219 => 122,  217 => 85,  208 => 94,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 72,  119 => 45,  108 => 55,  102 => 36,  71 => 30,  67 => 25,  63 => 14,  59 => 23,  47 => 20,  28 => 5,  29 => 4,  35 => 14,  26 => 3,  43 => 18,  196 => 90,  183 => 61,  171 => 77,  166 => 62,  163 => 69,  158 => 72,  156 => 55,  151 => 66,  142 => 75,  138 => 48,  136 => 36,  123 => 69,  121 => 47,  117 => 28,  115 => 50,  105 => 26,  91 => 32,  69 => 12,  62 => 23,  49 => 19,  101 => 45,  94 => 33,  89 => 22,  85 => 35,  79 => 17,  75 => 24,  68 => 18,  56 => 22,  50 => 15,  87 => 21,  72 => 27,  66 => 25,  55 => 20,  41 => 21,  31 => 8,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 37,  88 => 31,  78 => 32,  46 => 23,  44 => 14,  40 => 8,  32 => 5,  27 => 7,  22 => 2,  209 => 68,  203 => 69,  199 => 73,  193 => 64,  189 => 67,  187 => 103,  182 => 85,  176 => 76,  173 => 65,  168 => 66,  164 => 77,  162 => 54,  154 => 46,  149 => 63,  147 => 65,  144 => 46,  141 => 58,  133 => 56,  130 => 37,  125 => 54,  122 => 30,  116 => 50,  112 => 39,  109 => 47,  106 => 37,  103 => 39,  99 => 39,  95 => 24,  92 => 38,  86 => 30,  82 => 27,  80 => 27,  73 => 29,  64 => 20,  60 => 19,  57 => 19,  54 => 9,  51 => 15,  48 => 23,  45 => 22,  42 => 15,  39 => 11,  36 => 7,  33 => 13,  30 => 4,);
    }
}
