<?php

/* CaravaneOrganicBundle:Tent:show.html.twig */
class __TwigTemplate_24ce602c0e1fc85dc6df5b3c78bafe210fc247c4d8d42b827640bf9a2d8b71e1 extends Twig_Template
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
        echo "<h1>Tent</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Reference</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Kit</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "kit"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Owner</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "owner"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Color</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "color"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Length</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "length"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Width</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "width"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>M2</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "m2"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Weight</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "weight"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Piquets</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "piquets"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Etat</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "etat"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Comments</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "comments"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Winter</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "winter"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Issue</th>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Insertdate</th>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "insertdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updatedate</th>
            <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Public</th>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "public"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Tent:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 111,  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 189,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  428 => 168,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 75,  218 => 70,  186 => 60,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  478 => 221,  456 => 211,  450 => 174,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  383 => 173,  363 => 165,  320 => 138,  310 => 130,  257 => 105,  213 => 83,  200 => 65,  194 => 65,  316 => 305,  304 => 128,  148 => 52,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  388 => 175,  377 => 170,  370 => 132,  359 => 164,  348 => 8,  330 => 118,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 224,  482 => 223,  477 => 187,  470 => 225,  466 => 184,  462 => 212,  460 => 220,  452 => 219,  429 => 199,  421 => 166,  403 => 191,  397 => 188,  389 => 186,  385 => 136,  373 => 169,  367 => 173,  345 => 122,  338 => 156,  313 => 304,  302 => 136,  282 => 87,  205 => 93,  201 => 92,  192 => 85,  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 167,  419 => 152,  417 => 151,  401 => 148,  399 => 140,  395 => 146,  391 => 148,  375 => 139,  372 => 138,  350 => 162,  339 => 120,  334 => 118,  329 => 116,  315 => 110,  295 => 98,  185 => 82,  114 => 42,  299 => 155,  289 => 158,  266 => 119,  249 => 85,  242 => 79,  228 => 124,  411 => 219,  408 => 149,  351 => 9,  343 => 173,  331 => 146,  292 => 90,  280 => 136,  274 => 146,  263 => 127,  236 => 78,  215 => 69,  211 => 69,  207 => 98,  178 => 84,  152 => 64,  333 => 135,  318 => 129,  308 => 109,  296 => 125,  290 => 104,  287 => 148,  281 => 146,  276 => 140,  270 => 138,  267 => 137,  259 => 83,  255 => 82,  248 => 103,  245 => 77,  222 => 88,  212 => 68,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 166,  364 => 127,  361 => 170,  358 => 130,  352 => 118,  342 => 121,  336 => 105,  328 => 117,  324 => 97,  321 => 114,  317 => 159,  307 => 114,  297 => 106,  288 => 122,  275 => 107,  271 => 96,  261 => 117,  233 => 77,  225 => 76,  210 => 115,  198 => 66,  191 => 71,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 31,  137 => 60,  301 => 95,  291 => 126,  277 => 91,  262 => 84,  256 => 92,  250 => 84,  231 => 76,  226 => 72,  180 => 59,  175 => 67,  165 => 63,  145 => 55,  100 => 38,  74 => 31,  323 => 128,  319 => 112,  311 => 109,  303 => 112,  293 => 105,  286 => 89,  279 => 151,  272 => 106,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 68,  167 => 75,  160 => 50,  146 => 75,  97 => 47,  90 => 43,  83 => 39,  76 => 35,  155 => 56,  153 => 79,  129 => 57,  37 => 8,  70 => 24,  53 => 16,  65 => 38,  139 => 71,  113 => 48,  110 => 38,  104 => 51,  58 => 18,  34 => 11,  190 => 104,  174 => 58,  150 => 7,  134 => 57,  126 => 56,  120 => 73,  84 => 20,  81 => 37,  23 => 2,  118 => 59,  96 => 37,  77 => 29,  52 => 8,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 173,  440 => 206,  437 => 147,  435 => 170,  430 => 144,  427 => 195,  423 => 142,  413 => 195,  409 => 146,  407 => 192,  402 => 130,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 151,  314 => 99,  312 => 172,  309 => 169,  305 => 97,  298 => 94,  294 => 108,  285 => 105,  283 => 147,  278 => 86,  268 => 95,  264 => 85,  258 => 138,  252 => 104,  247 => 101,  241 => 96,  229 => 102,  220 => 119,  214 => 97,  177 => 69,  169 => 56,  140 => 45,  132 => 67,  128 => 54,  111 => 55,  107 => 36,  61 => 10,  38 => 10,  273 => 140,  269 => 113,  254 => 105,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 99,  230 => 71,  227 => 75,  224 => 99,  221 => 123,  219 => 122,  217 => 85,  208 => 67,  204 => 66,  179 => 96,  159 => 57,  143 => 64,  135 => 58,  131 => 58,  119 => 45,  108 => 55,  102 => 36,  71 => 30,  67 => 25,  63 => 13,  59 => 23,  47 => 11,  28 => 3,  29 => 4,  35 => 14,  26 => 3,  43 => 18,  196 => 90,  183 => 97,  171 => 91,  166 => 62,  163 => 86,  158 => 72,  156 => 55,  151 => 64,  142 => 75,  138 => 48,  136 => 36,  123 => 69,  121 => 47,  117 => 28,  115 => 51,  105 => 47,  91 => 44,  69 => 31,  62 => 27,  49 => 19,  101 => 46,  94 => 33,  89 => 22,  85 => 35,  79 => 21,  75 => 24,  68 => 18,  56 => 22,  50 => 15,  87 => 21,  72 => 27,  66 => 25,  55 => 23,  41 => 15,  31 => 4,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 37,  88 => 31,  78 => 32,  46 => 23,  44 => 14,  40 => 8,  32 => 5,  27 => 7,  22 => 2,  209 => 68,  203 => 69,  199 => 73,  193 => 61,  189 => 60,  187 => 103,  182 => 77,  176 => 76,  173 => 65,  168 => 66,  164 => 77,  162 => 54,  154 => 46,  149 => 63,  147 => 65,  144 => 46,  141 => 58,  133 => 56,  130 => 37,  125 => 63,  122 => 55,  116 => 50,  112 => 51,  109 => 48,  106 => 37,  103 => 39,  99 => 39,  95 => 24,  92 => 38,  86 => 30,  82 => 27,  80 => 27,  73 => 29,  64 => 20,  60 => 19,  57 => 36,  54 => 9,  51 => 15,  48 => 19,  45 => 22,  42 => 15,  39 => 10,  36 => 7,  33 => 13,  30 => 4,);
    }
}
