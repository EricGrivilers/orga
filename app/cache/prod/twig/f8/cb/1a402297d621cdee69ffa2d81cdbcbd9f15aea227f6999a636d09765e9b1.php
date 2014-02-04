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
        if (((isset($context["type"]) ? $context["type"] : null) == "running")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("type" => "running", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
        echo "\">Running</a></li>
          <li ";
        // line 11
        if (((isset($context["type"]) ? $context["type"] : null) == "confirmed")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("type" => "confirmed", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
        echo "\">Confirmed</a></li>
          <li ";
        // line 12
        if (((isset($context["type"]) ? $context["type"] : null) == "canceled")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("type" => "canceled", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
        echo "\">Canceled</a></li>
          <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre", array("type" => "all", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
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
            // line 52
            echo "    ";
            $context["row"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
            // line 53
            echo "        <tr ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue") > 0)) {
                echo " class=\"error\" ";
            }
            echo ">
            <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 55
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "name"), "html", null, true);
                echo "</a> ";
            }
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offretype"), "html", null, true);
            echo "</td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price"), 2, ",", " "), "html", null, true);
            echo "</td>
             <td>";
            // line 58
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status") == "ok")) {
                echo "Sent to client";
            } elseif ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status") == "ANNULÉ") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status") == "cancel"))) {
                echo " Canceled ";
            } elseif ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status") == "draft") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status") == ""))) {
                echo "Draft ";
            } elseif ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid")) {
                echo "Job: <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "id"))), "html", null, true);
                echo "\" class=\"red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "reference"), "html", null, true);
                echo "</a>";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status") == "CONFIRMÉ")) {
                echo "Confirmed";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status"), "html", null, true);
            }
            echo "</td>
             <td>";
            // line 59
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "country"), "html", null, true);
            }
            echo "</td>
             <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country"), "html", null, true);
            echo "</td>
             <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "insertDate"), "d/m/Y"), "html", null, true);
            echo "</td>

             <td>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
            echo "_1\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul id=\"menu1\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : null))), "html", null, true);
                echo "\" target=\"_blank\" > Offre ";
                echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
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
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue")) {
                echo "<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue"), "html", null, true);
                echo "</span>";
            }
            echo "</td>
              <td>
                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-edit\"></i></a>

            </td>
             <td>

                        <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
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
        return array (  300 => 111,  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 189,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  428 => 168,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 75,  218 => 70,  186 => 60,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  478 => 221,  456 => 211,  450 => 174,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  383 => 173,  363 => 165,  320 => 138,  310 => 130,  257 => 105,  213 => 83,  200 => 65,  194 => 65,  316 => 305,  304 => 128,  148 => 52,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  388 => 175,  377 => 170,  370 => 132,  359 => 164,  348 => 8,  330 => 118,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 224,  482 => 223,  477 => 187,  470 => 225,  466 => 184,  462 => 212,  460 => 220,  452 => 219,  429 => 199,  421 => 166,  403 => 191,  397 => 188,  389 => 186,  385 => 136,  373 => 169,  367 => 173,  345 => 122,  338 => 156,  313 => 304,  302 => 136,  282 => 87,  205 => 93,  201 => 92,  192 => 85,  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 167,  419 => 152,  417 => 151,  401 => 148,  399 => 140,  395 => 146,  391 => 148,  375 => 139,  372 => 138,  350 => 162,  339 => 120,  334 => 118,  329 => 116,  315 => 110,  295 => 98,  185 => 82,  114 => 42,  299 => 155,  289 => 158,  266 => 119,  249 => 85,  242 => 79,  228 => 124,  411 => 219,  408 => 149,  351 => 9,  343 => 173,  331 => 146,  292 => 90,  280 => 136,  274 => 146,  263 => 127,  236 => 78,  215 => 69,  211 => 69,  207 => 98,  178 => 84,  152 => 64,  333 => 135,  318 => 129,  308 => 109,  296 => 125,  290 => 104,  287 => 148,  281 => 146,  276 => 140,  270 => 138,  267 => 137,  259 => 83,  255 => 82,  248 => 103,  245 => 77,  222 => 88,  212 => 68,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 166,  364 => 127,  361 => 170,  358 => 130,  352 => 118,  342 => 121,  336 => 105,  328 => 117,  324 => 97,  321 => 114,  317 => 159,  307 => 114,  297 => 106,  288 => 122,  275 => 107,  271 => 96,  261 => 117,  233 => 77,  225 => 76,  210 => 115,  198 => 66,  191 => 71,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 31,  137 => 57,  301 => 95,  291 => 126,  277 => 91,  262 => 84,  256 => 92,  250 => 84,  231 => 76,  226 => 72,  180 => 59,  175 => 67,  165 => 63,  145 => 55,  100 => 38,  74 => 31,  323 => 128,  319 => 112,  311 => 109,  303 => 112,  293 => 105,  286 => 89,  279 => 151,  272 => 106,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 68,  167 => 70,  160 => 50,  146 => 75,  97 => 44,  90 => 36,  83 => 30,  76 => 16,  155 => 56,  153 => 79,  129 => 52,  37 => 8,  70 => 24,  53 => 16,  65 => 11,  139 => 54,  113 => 48,  110 => 38,  104 => 51,  58 => 18,  34 => 3,  190 => 104,  174 => 58,  150 => 7,  134 => 57,  126 => 61,  120 => 73,  84 => 20,  81 => 37,  23 => 2,  118 => 41,  96 => 37,  77 => 29,  52 => 8,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 173,  440 => 206,  437 => 147,  435 => 170,  430 => 144,  427 => 195,  423 => 142,  413 => 195,  409 => 146,  407 => 192,  402 => 130,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 151,  314 => 99,  312 => 172,  309 => 169,  305 => 97,  298 => 94,  294 => 108,  285 => 105,  283 => 147,  278 => 86,  268 => 95,  264 => 85,  258 => 138,  252 => 104,  247 => 101,  241 => 96,  229 => 102,  220 => 119,  214 => 97,  177 => 69,  169 => 56,  140 => 45,  132 => 53,  128 => 54,  111 => 27,  107 => 36,  61 => 10,  38 => 10,  273 => 140,  269 => 113,  254 => 105,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 99,  230 => 71,  227 => 75,  224 => 99,  221 => 123,  219 => 122,  217 => 85,  208 => 67,  204 => 66,  179 => 69,  159 => 57,  143 => 64,  135 => 58,  131 => 72,  119 => 45,  108 => 55,  102 => 36,  71 => 30,  67 => 25,  63 => 13,  59 => 23,  47 => 11,  28 => 3,  29 => 4,  35 => 14,  26 => 3,  43 => 18,  196 => 90,  183 => 59,  171 => 77,  166 => 62,  163 => 58,  158 => 72,  156 => 55,  151 => 66,  142 => 75,  138 => 48,  136 => 36,  123 => 69,  121 => 47,  117 => 28,  115 => 50,  105 => 26,  91 => 32,  69 => 14,  62 => 23,  49 => 19,  101 => 45,  94 => 33,  89 => 22,  85 => 35,  79 => 21,  75 => 24,  68 => 18,  56 => 22,  50 => 15,  87 => 21,  72 => 27,  66 => 25,  55 => 12,  41 => 21,  31 => 4,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 37,  88 => 31,  78 => 32,  46 => 23,  44 => 14,  40 => 8,  32 => 5,  27 => 7,  22 => 2,  209 => 68,  203 => 69,  199 => 73,  193 => 61,  189 => 60,  187 => 103,  182 => 85,  176 => 76,  173 => 65,  168 => 66,  164 => 77,  162 => 54,  154 => 46,  149 => 63,  147 => 65,  144 => 46,  141 => 58,  133 => 56,  130 => 37,  125 => 54,  122 => 30,  116 => 50,  112 => 51,  109 => 47,  106 => 37,  103 => 39,  99 => 39,  95 => 24,  92 => 38,  86 => 30,  82 => 27,  80 => 27,  73 => 29,  64 => 20,  60 => 19,  57 => 19,  54 => 9,  51 => 15,  48 => 23,  45 => 22,  42 => 15,  39 => 10,  36 => 7,  33 => 13,  30 => 4,);
    }
}
