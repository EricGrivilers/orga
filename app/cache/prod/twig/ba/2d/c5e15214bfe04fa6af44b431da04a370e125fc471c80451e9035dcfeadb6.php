<?php

/* CaravaneUIBundle:Form:bootstrap.html.twig */
class __TwigTemplate_ba2dc5e15214bfe04fa6af44b431da04a370e125fc471c80451e9035dcfeadb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'CaravaneUIBootstrapTypeahead_widget' => array($this, 'block_CaravaneUIBootstrapTypeahead_widget'),
            'CaravaneUIBootstrapRadioButton_widget' => array($this, 'block_CaravaneUIBootstrapRadioButton_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('CaravaneUIBootstrapTypeahead_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('CaravaneUIBootstrapRadioButton_widget', $context, $blocks);
    }

    // line 1
    public function block_CaravaneUIBootstrapTypeahead_widget($context, array $blocks = array())
    {
        // line 2
        $context["label_field_value"] = $this->env->getExtension('access_twig_extension')->accessFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent"), "vars"), "value"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "attr"), "label_field"));
        // line 3
        echo "
\t<input class=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "attr"), "class"), "html", null, true);
        echo " typeahead\" type=\"text\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "id"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["label_field_value"]) ? $context["label_field_value"] : null), "html", null, true);
        echo "\" data-provide=\"typeahead\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "full_name"), "html", null, true);
        echo "\" >


\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('#";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "id"), "html", null, true);
        echo "').typeahead({
\t\t\t\tminLength:3,
\t\t\t\tsource: function (query, process) {
\t\t\t\t\t\$.getJSON(
\t\t\t\t\t    Routing.generate('";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "attr"), "source_route"), "html", null, true);
        echo "'),
\t\t\t\t\t    { query: query },
\t\t\t\t\t    function (data) {
\t\t\t\t\t\t    labels=[]
\t\t\t\t\t\t    ids={}
\t\t\t\t\t\t    mapped={}
\t\t\t\t\t\t    \$.each(data, function (i, item) {
\t\t\t\t\t\t\t\tmapped[item.label] = item.label;
\t\t\t\t\t\t\t\tlabels.push(item.label);
\t\t\t\t\t\t\t\tids[item.label]=item.value;
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\tprocess(labels);
\t\t\t\t\t    }
\t\t\t\t\t);
\t\t\t\t},
\t\t\t\tupdater:function (item) {
\t\t\t\t\t";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "attr"), "updater")) {
            // line 30
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "attr"), "updater"), "html", null, true);
            echo "(ids[item],'";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "attr"), "target_field"), "html", null, true);
            echo "')
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\treturn mapped[item]
\t\t\t\t}

\t\t    });
\t\t});
\t</script>
";
    }

    // line 40
    public function block_CaravaneUIBootstrapRadioButton_widget($context, array $blocks = array())
    {
        // line 41
        echo "
\t<div class=\"btn-group\" data-toggle=\"buttons-radio\" id=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "id"), "html", null, true);
        echo "_widget\">
\t\t";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "choices"));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 44
            echo "\t\t\t<button type=\"button\" class=\"btn ";
            if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "data") == $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "value"))) {
                echo " active ";
            }
            echo "\" data-toggle=\"button\" data-target=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "id"), "html", null, true);
            echo "\" data-value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "value"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label"), "html", null, true);
            echo "</button>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t<input name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "full_name"), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "id"), "html", null, true);
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "data"), "html", null, true);
        echo "\" >
    </div>
    <script type='text/javascript'>
    \t\$(function() {
\t\t\t\$('#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "id"), "html", null, true);
        echo "_widget button').click(function(){
\t\t\t\ttarget=\$(this).attr('data-target');
\t\t\t\t\$(target).attr('value', \$(this).attr('data-value'));
\t\t\t})
\t\t});
    </script>
";
    }

    public function getTemplateName()
    {
        return "CaravaneUIBundle:Form:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 127,  20 => 1,  357 => 148,  347 => 144,  340 => 140,  524 => 5,  516 => 231,  510 => 230,  494 => 226,  490 => 225,  476 => 222,  473 => 221,  415 => 198,  405 => 196,  371 => 172,  354 => 163,  306 => 144,  253 => 111,  300 => 111,  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 224,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  428 => 168,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 107,  218 => 98,  186 => 95,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  478 => 221,  456 => 211,  450 => 205,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  383 => 173,  363 => 165,  320 => 138,  310 => 145,  257 => 105,  213 => 83,  200 => 65,  194 => 47,  316 => 305,  304 => 128,  148 => 61,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  388 => 175,  377 => 170,  370 => 132,  359 => 164,  348 => 8,  330 => 137,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 6,  504 => 237,  493 => 234,  488 => 224,  482 => 223,  477 => 187,  470 => 220,  466 => 219,  462 => 212,  460 => 220,  452 => 219,  429 => 199,  421 => 166,  403 => 191,  397 => 188,  389 => 186,  385 => 136,  373 => 169,  367 => 173,  345 => 122,  338 => 156,  313 => 304,  302 => 124,  282 => 87,  205 => 93,  201 => 92,  192 => 96,  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 167,  419 => 199,  417 => 151,  401 => 148,  399 => 194,  395 => 193,  391 => 148,  375 => 139,  372 => 138,  350 => 162,  339 => 120,  334 => 118,  329 => 116,  315 => 130,  295 => 98,  185 => 82,  114 => 42,  299 => 155,  289 => 158,  266 => 119,  249 => 114,  242 => 132,  228 => 124,  411 => 197,  408 => 149,  351 => 9,  343 => 173,  331 => 146,  292 => 90,  280 => 118,  274 => 146,  263 => 114,  236 => 78,  215 => 54,  211 => 100,  207 => 98,  178 => 79,  152 => 62,  333 => 135,  318 => 129,  308 => 128,  296 => 125,  290 => 104,  287 => 148,  281 => 125,  276 => 140,  270 => 138,  267 => 137,  259 => 118,  255 => 112,  248 => 103,  245 => 109,  222 => 88,  212 => 68,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 155,  364 => 168,  361 => 170,  358 => 165,  352 => 118,  342 => 159,  336 => 156,  328 => 117,  324 => 133,  321 => 114,  317 => 159,  307 => 114,  297 => 106,  288 => 122,  275 => 117,  271 => 96,  261 => 117,  233 => 104,  225 => 102,  210 => 115,  198 => 66,  191 => 46,  170 => 59,  197 => 48,  184 => 82,  161 => 62,  124 => 33,  137 => 60,  301 => 95,  291 => 126,  277 => 124,  262 => 84,  256 => 92,  250 => 110,  231 => 76,  226 => 122,  180 => 59,  175 => 67,  165 => 83,  145 => 37,  100 => 37,  74 => 26,  323 => 128,  319 => 112,  311 => 109,  303 => 112,  293 => 122,  286 => 89,  279 => 151,  272 => 116,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 42,  90 => 43,  83 => 22,  76 => 36,  155 => 56,  153 => 79,  129 => 46,  37 => 6,  70 => 29,  53 => 19,  65 => 33,  139 => 71,  113 => 47,  110 => 38,  104 => 42,  58 => 8,  34 => 33,  190 => 104,  174 => 91,  150 => 7,  134 => 57,  126 => 40,  120 => 32,  84 => 19,  81 => 26,  23 => 39,  118 => 38,  96 => 37,  77 => 20,  52 => 9,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 204,  440 => 206,  437 => 147,  435 => 170,  430 => 144,  427 => 201,  423 => 200,  413 => 195,  409 => 146,  407 => 192,  402 => 195,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 156,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 150,  314 => 147,  312 => 129,  309 => 169,  305 => 97,  298 => 94,  294 => 108,  285 => 120,  283 => 119,  278 => 86,  268 => 95,  264 => 85,  258 => 138,  252 => 104,  247 => 101,  241 => 112,  229 => 103,  220 => 119,  214 => 97,  177 => 69,  169 => 85,  140 => 56,  132 => 42,  128 => 53,  111 => 55,  107 => 36,  61 => 12,  38 => 4,  273 => 123,  269 => 122,  254 => 105,  246 => 133,  243 => 108,  240 => 86,  238 => 109,  235 => 99,  230 => 104,  227 => 75,  224 => 101,  221 => 101,  219 => 122,  217 => 85,  208 => 52,  204 => 66,  179 => 93,  159 => 57,  143 => 64,  135 => 58,  131 => 58,  119 => 45,  108 => 43,  102 => 41,  71 => 30,  67 => 22,  63 => 15,  59 => 13,  47 => 11,  28 => 18,  29 => 4,  35 => 3,  26 => 40,  43 => 18,  196 => 97,  183 => 94,  171 => 43,  166 => 62,  163 => 86,  158 => 80,  156 => 79,  151 => 64,  142 => 36,  138 => 48,  136 => 44,  123 => 54,  121 => 39,  117 => 31,  115 => 37,  105 => 47,  91 => 41,  69 => 17,  62 => 27,  49 => 13,  101 => 41,  94 => 33,  89 => 40,  85 => 39,  79 => 22,  75 => 24,  68 => 14,  56 => 22,  50 => 18,  87 => 23,  72 => 16,  66 => 16,  55 => 23,  41 => 8,  31 => 4,  24 => 4,  25 => 5,  21 => 1,  19 => 1,  98 => 40,  93 => 24,  88 => 32,  78 => 29,  46 => 17,  44 => 8,  40 => 12,  32 => 20,  27 => 7,  22 => 1,  209 => 111,  203 => 99,  199 => 73,  193 => 61,  189 => 60,  187 => 103,  182 => 77,  176 => 44,  173 => 65,  168 => 42,  164 => 40,  162 => 82,  154 => 46,  149 => 38,  147 => 65,  144 => 46,  141 => 50,  133 => 56,  130 => 41,  125 => 63,  122 => 50,  116 => 47,  112 => 44,  109 => 35,  106 => 42,  103 => 43,  99 => 40,  95 => 24,  92 => 35,  86 => 24,  82 => 27,  80 => 30,  73 => 18,  64 => 22,  60 => 22,  57 => 11,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 10,  36 => 3,  33 => 2,  30 => 1,);
    }
}
