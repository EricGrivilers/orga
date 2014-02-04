<?php

/* CaravaneOrganicBundle:Default:pagination.html.twig */
class __TwigTemplate_7898ba0ab8ba2c54f99cd4f1831d1537fd87b245279f3ae47d2de55ef4ff7a92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row-fluid\">
        <div class=\"center\">
              <ul class=\"nav nav-pills offset\">
                  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "10", 1 => "25", 2 => "50", 3 => "100", 4 => "200"));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 5
            echo "                                        <li ";
            if (((isset($context["offset"]) ? $context["offset"] : null) == (isset($context["o"]) ? $context["o"] : null))) {
                echo "class=\"active\" ";
            }
            echo " >
                                              <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : null), "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1, "offset" => (isset($context["o"]) ? $context["o"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["o"]) ? $context["o"] : null), "html", null, true);
            echo "</a>
                                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                </ul>
            </div>
</div>

<div class=\"pagination\">
\t<input type='hidden' id='CaravaneUiPaginationType' value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" />
\t<input type='hidden' id='CaravaneUiPaginationOb' value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["ob"]) ? $context["ob"] : null), "html", null, true);
        echo "\" />
\t<input type='hidden' id='CaravaneUiPaginationPage' value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "\" />
  <input type='hidden' id='CaravaneUiPaginationOffset' value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["offset"]) ? $context["offset"] : null), "html", null, true);
        echo "\" />
\t<input type='hidden' id='CaravaneUiPaginationRoute' value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" />

";
        // line 20
        if (((isset($context["nbpages"]) ? $context["nbpages"] : null) > 1)) {
            // line 21
            echo "  <ul>
    <li ";
            // line 22
            if (((isset($context["page"]) ? $context["page"] : null) <= 1)) {
                echo " class=\"disabled\" ";
            }
            echo " ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : null), "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) - 1), "offset" => (isset($context["offset"]) ? $context["offset"] : null))), "html", null, true);
            echo "\" >Prev</a></li>

    ";
            // line 24
            if (((isset($context["nbpages"]) ? $context["nbpages"] : null) > 10)) {
                // line 25
                echo "      ";
                if (((isset($context["page"]) ? $context["page"] : null) < 6)) {
                    // line 26
                    echo "        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 7));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 27
                        echo "          <li ";
                        if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["p"]) ? $context["p"] : null))) {
                            echo " class=\"active\" ";
                        }
                        echo " ><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : null), "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => (isset($context["p"]) ? $context["p"] : null), "offset" => (isset($context["offset"]) ? $context["offset"] : null))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
                        echo "</a></li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "         <li class=\"disabled\"><a >...</a></li>
      ";
                } elseif (((isset($context["page"]) ? $context["page"] : null) > ((isset($context["nbpages"]) ? $context["nbpages"] : null) - 7))) {
                    // line 31
                    echo "         <li class=\"disabled\"><a >...</a></li>
         ";
                    // line 32
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["nbpages"]) ? $context["nbpages"] : null) - 7), (isset($context["nbpages"]) ? $context["nbpages"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 33
                        echo "            <li ";
                        if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["p"]) ? $context["p"] : null))) {
                            echo " class=\"active\" ";
                        }
                        echo " ><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : null), "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => (isset($context["p"]) ? $context["p"] : null), "offset" => (isset($context["offset"]) ? $context["offset"] : null))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
                        echo "</a></li>
         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "      ";
                } else {
                    // line 36
                    echo "        <li class=\"disabled\"><a >...</a></li>
        ";
                    // line 37
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : null) - 3), ((isset($context["page"]) ? $context["page"] : null) + 3)));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 38
                        echo "             <li ";
                        if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["p"]) ? $context["p"] : null))) {
                            echo " class=\"active\" ";
                        }
                        echo " ><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : null), "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => (isset($context["p"]) ? $context["p"] : null), "offset" => (isset($context["offset"]) ? $context["offset"] : null))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
                        echo "</a></li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "        <li class=\"disabled\"><a >...</a></li>
      ";
                }
                // line 42
                echo "    ";
            } else {
                // line 43
                echo "      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbpages"]) ? $context["nbpages"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 44
                    echo "        <li ";
                    if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["p"]) ? $context["p"] : null))) {
                        echo " class=\"active\" ";
                    }
                    echo " ><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : null), "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => (isset($context["p"]) ? $context["p"] : null), "offset" => (isset($context["offset"]) ? $context["offset"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
                    echo "</a></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "    ";
            }
            // line 47
            echo "
    <li ";
            // line 48
            if (((isset($context["page"]) ? $context["page"] : null) >= (isset($context["nbpages"]) ? $context["nbpages"] : null))) {
                echo " class=\"disabled\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : null), "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) + 1), "offset" => (isset($context["offset"]) ? $context["offset"] : null))), "html", null, true);
            echo "\">Next</a></li>
  </ul>
   <br/>

            ";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["nbpages"]) ? $context["nbpages"] : null), "html", null, true);
            echo "
";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Default:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 148,  315 => 130,  524 => 5,  516 => 231,  510 => 230,  494 => 226,  490 => 225,  476 => 222,  473 => 221,  419 => 199,  415 => 198,  405 => 196,  395 => 193,  371 => 172,  354 => 163,  253 => 111,  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 224,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 107,  218 => 98,  186 => 95,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  456 => 211,  450 => 205,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  363 => 165,  320 => 138,  310 => 145,  257 => 105,  213 => 83,  200 => 65,  316 => 305,  304 => 128,  148 => 61,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  399 => 194,  388 => 175,  370 => 132,  359 => 164,  348 => 8,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 6,  504 => 237,  493 => 234,  488 => 224,  477 => 187,  466 => 219,  460 => 220,  452 => 219,  429 => 199,  425 => 167,  421 => 166,  417 => 151,  403 => 191,  397 => 188,  385 => 136,  373 => 169,  367 => 173,  338 => 156,  313 => 304,  302 => 124,  282 => 87,  205 => 93,  192 => 96,  185 => 82,  482 => 223,  478 => 221,  475 => 171,  470 => 220,  468 => 171,  465 => 170,  462 => 212,  454 => 163,  448 => 161,  446 => 160,  428 => 168,  424 => 155,  420 => 154,  401 => 147,  391 => 148,  389 => 186,  386 => 143,  383 => 173,  380 => 141,  377 => 170,  375 => 139,  353 => 125,  350 => 162,  347 => 144,  345 => 122,  340 => 140,  330 => 137,  326 => 114,  306 => 144,  300 => 111,  201 => 92,  194 => 47,  114 => 42,  299 => 155,  289 => 158,  266 => 119,  249 => 114,  242 => 79,  228 => 124,  411 => 197,  408 => 218,  351 => 9,  343 => 173,  331 => 146,  292 => 90,  280 => 118,  274 => 146,  263 => 114,  236 => 114,  215 => 54,  211 => 100,  207 => 98,  178 => 79,  152 => 62,  333 => 135,  318 => 112,  308 => 128,  296 => 125,  290 => 104,  287 => 148,  281 => 125,  276 => 140,  270 => 138,  267 => 137,  259 => 118,  255 => 112,  248 => 103,  245 => 109,  222 => 88,  212 => 68,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 155,  364 => 168,  361 => 170,  358 => 165,  352 => 118,  342 => 159,  336 => 156,  328 => 117,  324 => 133,  321 => 114,  317 => 159,  307 => 114,  297 => 106,  288 => 122,  275 => 117,  271 => 96,  261 => 117,  233 => 104,  225 => 102,  210 => 115,  198 => 66,  191 => 46,  170 => 59,  197 => 48,  184 => 82,  161 => 62,  124 => 33,  137 => 60,  301 => 95,  291 => 126,  277 => 124,  262 => 84,  256 => 92,  250 => 110,  231 => 77,  226 => 72,  180 => 59,  175 => 67,  165 => 83,  145 => 37,  100 => 37,  74 => 20,  323 => 128,  319 => 112,  311 => 157,  303 => 112,  293 => 122,  286 => 89,  279 => 151,  272 => 116,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 88,  195 => 84,  188 => 99,  181 => 68,  167 => 75,  160 => 50,  146 => 75,  97 => 39,  90 => 25,  83 => 39,  76 => 21,  155 => 56,  153 => 79,  129 => 57,  37 => 8,  70 => 25,  53 => 14,  65 => 17,  139 => 35,  113 => 29,  110 => 38,  104 => 51,  58 => 14,  34 => 11,  190 => 104,  174 => 58,  150 => 7,  134 => 57,  126 => 52,  120 => 32,  84 => 19,  81 => 30,  23 => 2,  118 => 59,  96 => 37,  77 => 29,  52 => 8,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 204,  440 => 206,  437 => 158,  435 => 170,  430 => 157,  427 => 201,  423 => 200,  413 => 195,  409 => 146,  407 => 192,  402 => 195,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 156,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 150,  314 => 147,  312 => 129,  309 => 169,  305 => 97,  298 => 94,  294 => 98,  285 => 120,  283 => 119,  278 => 86,  268 => 95,  264 => 85,  258 => 138,  252 => 104,  247 => 101,  241 => 112,  229 => 103,  220 => 119,  214 => 97,  177 => 69,  169 => 85,  140 => 56,  132 => 54,  128 => 53,  111 => 45,  107 => 24,  61 => 16,  38 => 10,  273 => 123,  269 => 122,  254 => 105,  246 => 103,  243 => 108,  240 => 86,  238 => 109,  235 => 99,  230 => 104,  227 => 75,  224 => 101,  221 => 101,  219 => 122,  217 => 85,  208 => 52,  204 => 66,  179 => 93,  159 => 57,  143 => 64,  135 => 58,  131 => 58,  119 => 45,  108 => 55,  102 => 41,  71 => 30,  67 => 25,  63 => 13,  59 => 23,  47 => 11,  28 => 5,  29 => 3,  35 => 6,  26 => 3,  43 => 18,  196 => 97,  183 => 94,  171 => 43,  166 => 62,  163 => 86,  158 => 80,  156 => 79,  151 => 64,  142 => 36,  138 => 48,  136 => 55,  123 => 69,  121 => 47,  117 => 31,  115 => 51,  105 => 47,  91 => 44,  69 => 18,  62 => 27,  49 => 13,  101 => 46,  94 => 33,  89 => 22,  85 => 31,  79 => 22,  75 => 24,  68 => 18,  56 => 22,  50 => 13,  87 => 21,  72 => 27,  66 => 15,  55 => 23,  41 => 15,  31 => 3,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 27,  93 => 26,  88 => 24,  78 => 32,  46 => 9,  44 => 14,  40 => 9,  32 => 4,  27 => 7,  22 => 2,  209 => 92,  203 => 99,  199 => 73,  193 => 61,  189 => 60,  187 => 103,  182 => 77,  176 => 44,  173 => 65,  168 => 42,  164 => 40,  162 => 82,  154 => 46,  149 => 38,  147 => 65,  144 => 46,  141 => 58,  133 => 56,  130 => 49,  125 => 63,  122 => 50,  116 => 47,  112 => 45,  109 => 48,  106 => 42,  103 => 39,  99 => 39,  95 => 24,  92 => 38,  86 => 20,  82 => 27,  80 => 27,  73 => 29,  64 => 22,  60 => 21,  57 => 15,  54 => 9,  51 => 15,  48 => 19,  45 => 11,  42 => 15,  39 => 10,  36 => 7,  33 => 13,  30 => 4,);
    }
}
