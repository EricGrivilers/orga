<?php

/* CaravaneOrganicBundle:Offre:resolve.html.twig */
class __TwigTemplate_6c1c31d8a1d83ddaaac634f43b8c1903628c21a84bf128d2287780dfa6dd5d78 extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"row-fluid\">
        <form id='mainForm' action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_resolve_confirm"), "html", null, true);
        echo "\" method=\"post\"  novalidate >
            <div class=\"well\">
                <p>
                        Product <b><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["tent"]) ? $context["tent"] : null), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tent"]) ? $context["tent"] : null), "reference"), "html", null, true);
        echo "</a></b> (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tent"]) ? $context["tent"] : null), "id"), "html", null, true);
        echo ")
                        <br/>

                        From bid <b><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "reference"), "html", null, true);
        echo "</a></b> by <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "userid"), "name"), "html", null, true);
        echo "</b>
                        <br/>

                        Has been attached to job <b><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "reference"), "html", null, true);
        echo "</a></b> by <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "userid"), "name"), "html", null, true);
        echo "</b>. <br/>
                        Please take an action:
                        <p>
                        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-inverse\">I am aware and I want to modify this bid</a> (1)
                    </p>
                </p>
            </div>
            (1) If no action has been taken, this product will be removed from this bid in x days.
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Offre:resolve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 173,  304 => 167,  148 => 78,  127 => 70,  232 => 125,  447 => 164,  445 => 163,  438 => 158,  404 => 143,  399 => 140,  388 => 137,  370 => 132,  359 => 126,  348 => 123,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 361,  723 => 355,  715 => 349,  709 => 348,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 316,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 303,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 279,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 260,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 232,  477 => 227,  466 => 223,  460 => 220,  452 => 219,  429 => 199,  425 => 198,  421 => 197,  417 => 151,  403 => 191,  397 => 188,  385 => 136,  373 => 133,  367 => 173,  338 => 156,  313 => 145,  302 => 136,  282 => 99,  205 => 93,  192 => 85,  185 => 81,  482 => 229,  478 => 172,  475 => 171,  470 => 225,  468 => 171,  465 => 170,  462 => 221,  454 => 163,  448 => 161,  446 => 160,  428 => 156,  424 => 155,  420 => 154,  401 => 147,  391 => 145,  389 => 186,  386 => 143,  383 => 142,  380 => 141,  377 => 134,  375 => 139,  353 => 125,  350 => 124,  347 => 123,  345 => 122,  340 => 120,  330 => 118,  326 => 114,  306 => 102,  300 => 100,  201 => 92,  194 => 65,  114 => 58,  299 => 155,  289 => 158,  266 => 119,  249 => 83,  242 => 110,  228 => 124,  411 => 219,  408 => 218,  351 => 178,  343 => 173,  331 => 167,  292 => 97,  280 => 94,  274 => 146,  263 => 127,  236 => 114,  215 => 104,  211 => 103,  207 => 102,  178 => 84,  152 => 64,  333 => 119,  318 => 112,  308 => 109,  296 => 162,  290 => 104,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 111,  222 => 74,  212 => 114,  206 => 100,  172 => 83,  157 => 50,  369 => 134,  366 => 133,  364 => 129,  361 => 170,  358 => 130,  352 => 164,  342 => 120,  336 => 9,  328 => 117,  324 => 115,  321 => 114,  317 => 159,  307 => 110,  297 => 106,  288 => 103,  275 => 126,  271 => 96,  261 => 117,  233 => 78,  225 => 76,  210 => 115,  198 => 109,  191 => 72,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 46,  137 => 73,  301 => 107,  291 => 126,  277 => 121,  262 => 133,  256 => 92,  250 => 93,  231 => 77,  226 => 109,  180 => 65,  175 => 67,  165 => 63,  145 => 63,  100 => 32,  74 => 33,  323 => 161,  319 => 112,  311 => 157,  303 => 166,  293 => 105,  286 => 155,  279 => 151,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 47,  90 => 43,  83 => 39,  76 => 35,  155 => 61,  153 => 79,  129 => 61,  37 => 8,  70 => 14,  53 => 17,  65 => 14,  139 => 71,  113 => 48,  110 => 38,  104 => 51,  58 => 10,  34 => 11,  190 => 104,  174 => 91,  150 => 7,  134 => 57,  126 => 61,  120 => 73,  84 => 33,  81 => 37,  23 => 2,  118 => 59,  96 => 46,  77 => 27,  52 => 17,  480 => 162,  474 => 226,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 158,  435 => 146,  430 => 157,  427 => 143,  423 => 142,  413 => 195,  409 => 146,  407 => 192,  402 => 130,  398 => 129,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 151,  314 => 99,  312 => 172,  309 => 169,  305 => 108,  298 => 134,  294 => 98,  285 => 105,  283 => 104,  278 => 86,  268 => 95,  264 => 94,  258 => 139,  252 => 121,  247 => 82,  241 => 96,  229 => 102,  220 => 119,  214 => 97,  177 => 69,  169 => 64,  140 => 45,  132 => 67,  128 => 54,  111 => 55,  107 => 24,  61 => 16,  38 => 10,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 76,  230 => 123,  227 => 75,  224 => 100,  221 => 123,  219 => 122,  217 => 72,  208 => 94,  204 => 68,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 72,  119 => 51,  108 => 55,  102 => 49,  71 => 19,  67 => 29,  63 => 14,  59 => 18,  47 => 12,  28 => 4,  29 => 4,  35 => 7,  26 => 3,  43 => 9,  196 => 66,  183 => 81,  171 => 77,  166 => 132,  163 => 69,  158 => 72,  156 => 81,  151 => 79,  142 => 75,  138 => 60,  136 => 65,  123 => 69,  121 => 47,  117 => 28,  115 => 45,  105 => 46,  91 => 34,  69 => 31,  62 => 27,  49 => 16,  101 => 45,  94 => 43,  89 => 36,  85 => 30,  79 => 22,  75 => 21,  68 => 19,  56 => 12,  50 => 7,  87 => 24,  72 => 14,  66 => 23,  55 => 23,  41 => 10,  31 => 5,  24 => 2,  25 => 5,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 25,  46 => 23,  44 => 14,  40 => 11,  32 => 5,  27 => 7,  22 => 2,  209 => 111,  203 => 69,  199 => 73,  193 => 68,  189 => 63,  187 => 103,  182 => 85,  176 => 60,  173 => 65,  168 => 66,  164 => 51,  162 => 54,  154 => 71,  149 => 63,  147 => 47,  144 => 46,  141 => 41,  133 => 35,  130 => 49,  125 => 63,  122 => 60,  116 => 64,  112 => 47,  109 => 47,  106 => 31,  103 => 37,  99 => 38,  95 => 35,  92 => 36,  86 => 21,  82 => 27,  80 => 20,  73 => 15,  64 => 13,  60 => 25,  57 => 18,  54 => 18,  51 => 13,  48 => 19,  45 => 14,  42 => 15,  39 => 14,  36 => 7,  33 => 6,  30 => 4,);
    }
}
