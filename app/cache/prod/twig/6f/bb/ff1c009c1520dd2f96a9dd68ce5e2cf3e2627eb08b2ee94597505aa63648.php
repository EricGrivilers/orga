<?php

/* CaravaneOrganicBundle:Tent:available.html.twig */
class __TwigTemplate_6fbbff1c009c1520dd2f96a9dd68ce5e2cf3e2627eb08b2ee94597505aa63648 extends Twig_Template
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
        echo "

<div class=\"row-fluid tableContainer\">

    <div class='content'>

        <table class=\"table table-bordered table-condensed table-striped stock\">
            <thead>
                <tr>
                    <th>Reference</th>

                    <th>Name</th>

                    <th>Kit</th>
                    <th>Owner</th>
                    <th>Color</th>
                    <th>Length</th>
                    <th>Width</th>
                    <th>Area</th>


                    <th>Etat</th>


                        <th>Offres</th>





                </tr>
            </thead>

            <tbody>
                ";
        // line 35
        $context["offreEntity"] = (isset($context["entity"]) ? $context["entity"] : null);
        // line 36
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "                
                <tr data-productid=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" >
                    <td><a data-productid=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
            echo "</a></td>

                    <td><a data-productid=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
            echo "</a></td>

                    <td>";
            // line 43
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "kit")) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            echo "</td>
                    <td>";
            // line 44
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ownerid")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ownerid"), "name"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "color"), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "length"), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "width"), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "m2"), "html", null, true);
            echo "</td>


                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "etat"), "html", null, true);
            echo "</td>



                        <td>";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offres"));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 56
                echo "
                            ";
                // line 57
                if (twig_in_filter($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), (isset($context["offres"]) ? $context["offres"] : null))) {
                    // line 58
                    echo "                                <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "html", null, true);
                    echo "</li>
                            ";
                }
                // line 60
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </tbody>
        </table>




        <div class=\"row-fluid\">
            <div class=\"pagination\">
                  <ul>

                    ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbpages"]) ? $context["nbpages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 75
            echo "                    <li ";
            if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["p"]) ? $context["p"] : null))) {
                echo " class=\"active\" ";
            }
            echo " ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_get_available", array("type" => (isset($context["type"]) ? $context["type"] : null), "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => (isset($context["p"]) ? $context["p"] : null), "startDate" => twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : null), "Y-m-d H:i:s"), "endDate" => twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : null), "Y-m-d H:i:s"), "entityId" => (isset($context["entityId"]) ? $context["entityId"] : null), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                  </ul>
            </div>
        </div>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Tent:available.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 189,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 75,  218 => 70,  186 => 60,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  456 => 211,  450 => 174,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  363 => 165,  320 => 138,  310 => 130,  257 => 105,  213 => 83,  200 => 65,  316 => 305,  304 => 128,  148 => 52,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  399 => 140,  388 => 175,  370 => 132,  359 => 164,  348 => 8,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 224,  477 => 187,  466 => 184,  460 => 220,  452 => 219,  429 => 199,  425 => 167,  421 => 166,  417 => 151,  403 => 191,  397 => 188,  385 => 136,  373 => 169,  367 => 173,  338 => 156,  313 => 304,  302 => 136,  282 => 87,  205 => 93,  192 => 85,  185 => 82,  482 => 223,  478 => 221,  475 => 171,  470 => 225,  468 => 171,  465 => 170,  462 => 212,  454 => 163,  448 => 161,  446 => 160,  428 => 168,  424 => 155,  420 => 154,  401 => 147,  391 => 148,  389 => 186,  386 => 143,  383 => 173,  380 => 141,  377 => 170,  375 => 139,  353 => 125,  350 => 162,  347 => 123,  345 => 122,  340 => 120,  330 => 118,  326 => 114,  306 => 102,  300 => 111,  201 => 92,  194 => 65,  114 => 42,  299 => 155,  289 => 158,  266 => 119,  249 => 83,  242 => 79,  228 => 124,  411 => 219,  408 => 218,  351 => 9,  343 => 173,  331 => 146,  292 => 90,  280 => 94,  274 => 146,  263 => 127,  236 => 114,  215 => 69,  211 => 69,  207 => 98,  178 => 84,  152 => 64,  333 => 135,  318 => 112,  308 => 109,  296 => 125,  290 => 104,  287 => 148,  281 => 146,  276 => 140,  270 => 138,  267 => 137,  259 => 83,  255 => 82,  248 => 103,  245 => 77,  222 => 88,  212 => 68,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 166,  364 => 127,  361 => 170,  358 => 130,  352 => 118,  342 => 120,  336 => 105,  328 => 117,  324 => 97,  321 => 114,  317 => 159,  307 => 114,  297 => 106,  288 => 122,  275 => 107,  271 => 96,  261 => 117,  233 => 77,  225 => 76,  210 => 115,  198 => 66,  191 => 71,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 31,  137 => 60,  301 => 95,  291 => 126,  277 => 121,  262 => 84,  256 => 92,  250 => 84,  231 => 77,  226 => 72,  180 => 59,  175 => 67,  165 => 63,  145 => 55,  100 => 38,  74 => 31,  323 => 128,  319 => 112,  311 => 157,  303 => 112,  293 => 105,  286 => 89,  279 => 151,  272 => 106,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 68,  167 => 75,  160 => 50,  146 => 75,  97 => 45,  90 => 36,  83 => 43,  76 => 41,  155 => 56,  153 => 79,  129 => 57,  37 => 8,  70 => 24,  53 => 16,  65 => 38,  139 => 54,  113 => 48,  110 => 38,  104 => 51,  58 => 18,  34 => 3,  190 => 104,  174 => 58,  150 => 7,  134 => 57,  126 => 56,  120 => 73,  84 => 20,  81 => 37,  23 => 2,  118 => 41,  96 => 37,  77 => 29,  52 => 8,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 173,  440 => 206,  437 => 158,  435 => 170,  430 => 157,  427 => 195,  423 => 142,  413 => 195,  409 => 146,  407 => 192,  402 => 130,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 151,  314 => 99,  312 => 172,  309 => 169,  305 => 97,  298 => 94,  294 => 98,  285 => 105,  283 => 147,  278 => 86,  268 => 95,  264 => 85,  258 => 138,  252 => 104,  247 => 101,  241 => 96,  229 => 102,  220 => 119,  214 => 97,  177 => 69,  169 => 56,  140 => 45,  132 => 53,  128 => 54,  111 => 27,  107 => 24,  61 => 10,  38 => 10,  273 => 140,  269 => 113,  254 => 105,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 99,  230 => 71,  227 => 75,  224 => 99,  221 => 123,  219 => 122,  217 => 85,  208 => 67,  204 => 66,  179 => 69,  159 => 57,  143 => 64,  135 => 58,  131 => 58,  119 => 45,  108 => 55,  102 => 36,  71 => 30,  67 => 25,  63 => 13,  59 => 23,  47 => 11,  28 => 3,  29 => 4,  35 => 14,  26 => 3,  43 => 18,  196 => 90,  183 => 59,  171 => 77,  166 => 62,  163 => 74,  158 => 72,  156 => 55,  151 => 64,  142 => 75,  138 => 48,  136 => 36,  123 => 69,  121 => 47,  117 => 28,  115 => 51,  105 => 47,  91 => 44,  69 => 39,  62 => 37,  49 => 19,  101 => 46,  94 => 33,  89 => 22,  85 => 35,  79 => 21,  75 => 24,  68 => 18,  56 => 22,  50 => 15,  87 => 21,  72 => 27,  66 => 25,  55 => 35,  41 => 21,  31 => 4,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 37,  88 => 31,  78 => 32,  46 => 23,  44 => 14,  40 => 8,  32 => 5,  27 => 7,  22 => 2,  209 => 68,  203 => 69,  199 => 73,  193 => 61,  189 => 60,  187 => 103,  182 => 77,  176 => 76,  173 => 65,  168 => 66,  164 => 51,  162 => 54,  154 => 46,  149 => 63,  147 => 65,  144 => 46,  141 => 58,  133 => 56,  130 => 49,  125 => 54,  122 => 55,  116 => 50,  112 => 51,  109 => 48,  106 => 37,  103 => 39,  99 => 39,  95 => 24,  92 => 38,  86 => 30,  82 => 27,  80 => 27,  73 => 29,  64 => 20,  60 => 19,  57 => 36,  54 => 9,  51 => 15,  48 => 23,  45 => 22,  42 => 15,  39 => 10,  36 => 7,  33 => 13,  30 => 4,);
    }
}
