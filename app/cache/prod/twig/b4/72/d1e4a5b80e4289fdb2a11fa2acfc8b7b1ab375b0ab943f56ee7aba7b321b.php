<?php

/* CaravaneOrganicBundle:Offre/tabs:conditions.html.twig */
class __TwigTemplate_b472d1e4a5b80e4289fdb2a11fa2acfc8b7b1ab375b0ab943f56ee7aba7b321b extends Twig_Template
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

         <table class=\"table table-bordered table-condensed table-striped\">
                    <thead>
                        <tr>
                            <th class=\"span9\">Description</th>
                            <th class=\"span1\">Slice</th>

                            <th class='span1'>Amount in &euro;</th>
                            <th class='iiny'></th>
                        </tr>
                    </thead>
                    <tbody class=\"slices\" data-prototype=\"";
        // line 13
        echo twig_escape_filter($this->env, (((((("
                        <td class=\"span9\">" .         // line 14
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "slices"), "vars"), "prototype"), "comments"), 'widget')) . "</td>
                        <td class=\"span1\">") .         // line 15
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "slices"), "vars"), "prototype"), "slice"), 'widget')) . "</td>
                        <td class=\"span1\">") .         // line 16
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "slices"), "vars"), "prototype"), "priceht"), 'widget')) . "</td>
                        <td><a class=\"delete_new_row\" ><i class=\"icon icon-trash\"></i></a></td>
                    "));
        // line 18
        echo "\">

                        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "slices"));
        foreach ($context['_seq'] as $context["_key"] => $context["slice"]) {
            // line 21
            echo "                        <tr ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "slice") > 100) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "slice") <= 0))) {
                echo " class=\"error\" ";
            }
            echo " >
                            <td>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "comments"), 'widget');
            echo "</td>
                            <td>";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "slice"), 'widget');
            echo "%</td>

                            <td>";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "priceht"), 'widget');
            echo "<br/>
                             </td>
                             <td><a class=\"delete_row\" data-rel=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" data-type=\"offre_slice\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "id"), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
                    </tbody>
                     <tfoot>
                <tr ";
        // line 33
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalSlice") != 100) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalSlicePriceht") != $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price")))) {
            echo " class=\"error\" ";
        }
        echo ">
                        <th class=\"right\">

                            <a id=\"add_slice_link\" class=\"add_slice_link btn\">Add row</a>
                        </th>
                        <th>
                            ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalSlice"), "html", null, true);
        echo "%
                        </th>
                        <th>
                            ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalSlicePriceht"), "html", null, true);
        echo "&euro;
                        </th>
                        <th class=\"tiny\"></th>
                </tr>
            </tfoot>
                </table>
    </div>
     <div class=\"row-fluid\">
          ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "conditions"), 'row');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Offre/tabs:conditions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 237,  511 => 235,  505 => 233,  503 => 232,  499 => 230,  495 => 229,  478 => 221,  456 => 211,  450 => 209,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  383 => 173,  363 => 165,  320 => 138,  310 => 130,  257 => 105,  213 => 83,  200 => 73,  194 => 72,  316 => 173,  304 => 128,  148 => 52,  127 => 70,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  388 => 175,  377 => 170,  370 => 132,  359 => 164,  348 => 123,  330 => 118,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 361,  723 => 355,  715 => 349,  709 => 348,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 316,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 303,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 279,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 260,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 224,  482 => 223,  477 => 227,  470 => 225,  466 => 223,  462 => 212,  460 => 220,  452 => 219,  429 => 199,  421 => 197,  403 => 191,  397 => 188,  389 => 186,  385 => 136,  373 => 169,  367 => 173,  345 => 122,  338 => 156,  313 => 145,  302 => 136,  282 => 99,  205 => 93,  201 => 92,  192 => 85,  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 198,  419 => 152,  417 => 151,  401 => 148,  399 => 140,  395 => 146,  391 => 145,  375 => 139,  372 => 138,  350 => 162,  339 => 120,  334 => 118,  329 => 116,  315 => 110,  295 => 98,  185 => 81,  114 => 58,  299 => 155,  289 => 158,  266 => 119,  249 => 85,  242 => 101,  228 => 124,  411 => 219,  408 => 149,  351 => 178,  343 => 173,  331 => 146,  292 => 123,  280 => 136,  274 => 146,  263 => 127,  236 => 78,  215 => 104,  211 => 82,  207 => 102,  178 => 84,  152 => 64,  333 => 119,  318 => 129,  308 => 109,  296 => 125,  290 => 104,  287 => 148,  281 => 117,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 103,  245 => 102,  222 => 88,  212 => 114,  206 => 68,  172 => 83,  157 => 50,  369 => 137,  366 => 166,  364 => 129,  361 => 170,  358 => 130,  352 => 164,  342 => 121,  336 => 119,  328 => 117,  324 => 115,  321 => 114,  317 => 159,  307 => 108,  297 => 106,  288 => 122,  275 => 116,  271 => 96,  261 => 117,  233 => 78,  225 => 76,  210 => 115,  198 => 109,  191 => 71,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 46,  137 => 57,  301 => 107,  291 => 126,  277 => 91,  262 => 133,  256 => 92,  250 => 85,  231 => 76,  226 => 109,  180 => 65,  175 => 67,  165 => 63,  145 => 63,  100 => 32,  74 => 28,  323 => 161,  319 => 112,  311 => 109,  303 => 166,  293 => 105,  286 => 155,  279 => 151,  272 => 147,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 68,  167 => 87,  160 => 83,  146 => 75,  97 => 44,  90 => 36,  83 => 30,  76 => 23,  155 => 61,  153 => 79,  129 => 55,  37 => 15,  70 => 24,  53 => 21,  65 => 14,  139 => 71,  113 => 48,  110 => 38,  104 => 51,  58 => 22,  34 => 11,  190 => 104,  174 => 91,  150 => 7,  134 => 57,  126 => 61,  120 => 73,  84 => 33,  81 => 37,  23 => 2,  118 => 41,  96 => 38,  77 => 29,  52 => 14,  480 => 162,  474 => 220,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 206,  437 => 147,  435 => 146,  430 => 144,  427 => 195,  423 => 142,  413 => 195,  409 => 146,  407 => 192,  402 => 130,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 151,  314 => 99,  312 => 172,  309 => 169,  305 => 108,  298 => 126,  294 => 108,  285 => 105,  283 => 94,  278 => 86,  268 => 95,  264 => 94,  258 => 139,  252 => 121,  247 => 84,  241 => 96,  229 => 102,  220 => 119,  214 => 97,  177 => 69,  169 => 63,  140 => 45,  132 => 47,  128 => 54,  111 => 55,  107 => 36,  61 => 24,  38 => 10,  273 => 119,  269 => 113,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 99,  230 => 123,  227 => 75,  224 => 100,  221 => 123,  219 => 122,  217 => 85,  208 => 94,  204 => 72,  179 => 69,  159 => 68,  143 => 50,  135 => 58,  131 => 72,  119 => 51,  108 => 55,  102 => 36,  71 => 27,  67 => 25,  63 => 14,  59 => 23,  47 => 20,  28 => 5,  29 => 4,  35 => 14,  26 => 3,  43 => 18,  196 => 97,  183 => 61,  171 => 77,  166 => 62,  163 => 69,  158 => 72,  156 => 55,  151 => 79,  142 => 75,  138 => 48,  136 => 65,  123 => 69,  121 => 47,  117 => 50,  115 => 50,  105 => 42,  91 => 32,  69 => 26,  62 => 23,  49 => 19,  101 => 45,  94 => 33,  89 => 31,  85 => 35,  79 => 32,  75 => 21,  68 => 18,  56 => 22,  50 => 15,  87 => 35,  72 => 27,  66 => 25,  55 => 20,  41 => 18,  31 => 8,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 37,  88 => 33,  78 => 25,  46 => 23,  44 => 9,  40 => 8,  32 => 6,  27 => 7,  22 => 2,  209 => 111,  203 => 69,  199 => 73,  193 => 64,  189 => 67,  187 => 103,  182 => 85,  176 => 66,  173 => 65,  168 => 66,  164 => 77,  162 => 54,  154 => 71,  149 => 63,  147 => 47,  144 => 46,  141 => 58,  133 => 56,  130 => 37,  125 => 54,  122 => 60,  116 => 50,  112 => 39,  109 => 47,  106 => 37,  103 => 37,  99 => 39,  95 => 35,  92 => 36,  86 => 21,  82 => 27,  80 => 31,  73 => 29,  64 => 23,  60 => 16,  57 => 19,  54 => 18,  51 => 21,  48 => 18,  45 => 14,  42 => 15,  39 => 16,  36 => 7,  33 => 13,  30 => 4,);
    }
}
