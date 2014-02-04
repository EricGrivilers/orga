<?php

/* CaravaneOrganicBundle:Tent:index.html.twig */
class __TwigTemplate_30f1d91e24c789cd46ffd43e8acbaffb3bcc8c0895d9fbf28f2178162c78defb extends Twig_Template
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
        <ul class=\"nav nav-pills pull-left\">
          <li ";
        // line 10
        if (((isset($context["type"]) ? $context["type"] : null) == "")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("ob" => (isset($context["ob"]) ? $context["ob"] : null))), "html", null, true);
        echo "\">All</a>
          </li>
          <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : null) == "reserved")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => "reserved", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1, "startDate" => twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : null), "Y-m-d H:i:s"), "endDate" => twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : null), "Y-m-d H:i:s"))), "html", null, true);
        echo "\">Booked</a></li>
          <li ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : null) == "option")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => "option", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1, "startDate" => twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : null), "Y-m-d H:i:s"), "endDate" => twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : null), "Y-m-d H:i:s"))), "html", null, true);
        echo "\">Option</a></li>
          <li ";
        // line 15
        if (((isset($context["type"]) ? $context["type"] : null) == "free")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => "free", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1, "startDate" => twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : null), "Y-m-d H:i:s"), "endDate" => twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : null), "Y-m-d H:i:s"))), "html", null, true);
        echo "\">Free</a></li>
          <li ";
        // line 16
        if (((isset($context["type"]) ? $context["type"] : null) == "winter")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => "winter", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
        echo "\">Winter stock</a></li>

        </ul>
        ";
        // line 19
        if (((((isset($context["type"]) ? $context["type"] : null) == "reserved") || ((isset($context["type"]) ? $context["type"] : null) == "free")) || ((isset($context["type"]) ? $context["type"] : null) == "option"))) {
            // line 20
            echo "         ";
            // line 37
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent", array("type" => (isset($context["type"]) ? $context["type"] : null), "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
            echo "\" method=\"get\" id=\"rangeDateForm\"  class='form-inline'>
            <input type='hidden' name='type' value='";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "' />
            <input type='hidden' name='ob' value='";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["ob"]) ? $context["ob"] : null), "html", null, true);
            echo "' />

         <input id=\"startDate\" name=\"startDate\" data-format=\"dd/MM/yyyy hh:mm:ss\" type=\"hidden\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : null), "Y-m-d H:i:s"), "html", null, true);
            echo "\" />
        <input id=\"endDate\" name=\"endDate\" data-format=\"dd/MM/yyyy hh:mm:ss\" type=\"hidden\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : null), "Y-m-d H:i:s"), "html", null, true);
            echo "\" />
        <div id=\"reportrange\" >
            <i class=\"icon-calendar icon-large\"></i>
            <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : null), "d/m/Y H:i:s"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : null), "d/m/Y H:i:s"), "html", null, true);
            echo "</span> <b class=\"caret\"></b>
        </div>
    </form>
        
        ";
        }
        // line 50
        echo "</div>
<div class=\"span2\">
     <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_new"), "html", null, true);
        echo "\" class=\"btn btn-inverse \">
            New product
        </a>
    </div>
    </div>
</div>

<div class=\"row-fluid\">



<table class=\"table table-bordered table-condensed table-striped\">
    <thead>
        <tr>
            <th><a data-orderby=\"reference\" >Reference</a></th>
            <th><a data-orderby=\"productCategory\" >Category</a></th>
            <th><a data-orderby=\"name\" >Name</a></th>
            
            <th>Kit</th>
            <th><a data-orderby=\"ownerid\" >Owner</a></th>
            <th>Color</th>
            <th><a data-orderby=\"length\" >Length</a></th>
            <th><a data-orderby=\"width\" >Width</a></th>
            <th><a data-orderby=\"m2\" >Area</a></th>


            <th><a data-orderby=\"status\" >Etat</th>
            ";
        // line 79
        if (((isset($context["type"]) ? $context["type"] : null) == "reserved")) {
            // line 80
            echo "                <th>Jobs</th>
            ";
        }
        // line 82
        echo "             ";
        if (((isset($context["type"]) ? $context["type"] : null) == "option")) {
            // line 83
            echo "                <th>Offres</th>
            ";
        }
        // line 85
        echo "            <th>PDF</th>
             <th><a data-orderby=\"issue\" >Issues</a></th>

            <th>Ed</th>
            <th>Del</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 94
            echo "        <tr>
            <td><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "productCategory"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
            echo "</a></td>
            
            <td>";
            // line 99
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "kit")) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            echo "</td>
            <td>";
            // line 100
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ownerid")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ownerid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ownerid"), "name"), "html", null, true);
                echo "</a>";
            }
            echo "</td>
            <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "color"), "html", null, true);
            echo "</td>
            <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "length"), "html", null, true);
            echo "</td>
            <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "width"), "html", null, true);
            echo "</td>
            <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "m2"), "html", null, true);
            echo "</td>


            <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "etat"), "html", null, true);
            echo "</td>
            ";
            // line 108
            if (((isset($context["type"]) ? $context["type"] : null) == "reserved")) {
                // line 109
                echo "                <td>";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobs"));
                foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                    // line 110
                    echo "                    
                    ";
                    // line 111
                    if (twig_in_filter($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), (isset($context["jobs"]) ? $context["jobs"] : null))) {
                        // line 112
                        echo "                        <li><a href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), "id"))), "html", null, true);
                        echo "'>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 114
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
            ";
            }
            // line 116
            echo "            ";
            if (((isset($context["type"]) ? $context["type"] : null) == "option")) {
                // line 117
                echo "                <td>";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offres"));
                foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                    // line 118
                    echo "                   
                    ";
                    // line 119
                    if (twig_in_filter($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), (isset($context["offres"]) ? $context["offres"] : null))) {
                        // line 120
                        echo "                        <li><a href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "id"))), "html", null, true);
                        echo "'>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 122
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
            ";
            }
            // line 124
            echo "             <td>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop4\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul id=\"menu1\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop4\">
                        ";
            // line 128
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
            foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                // line 129
                echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"\"><img src=\"/images/icons/pdf.png\"> Offre ";
                // line 130
                echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                    </ul>
                </li>
            </td>

           <td>";
            // line 137
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue")) {
                echo "<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue"), "html", null, true);
                echo "</span>";
            }
            echo "</td>

            <td>
                <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-edit\"></i></a>
                
            </td>
             <td>
                <a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a>
            </td>
        </tr>
    ";
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
        // line 155
        $this->env->loadTemplate("CaravaneOrganicBundle:Default:pagination.html.twig")->display($context);
        // line 156
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Tent:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 148,  347 => 144,  340 => 140,  524 => 5,  516 => 231,  510 => 230,  494 => 226,  490 => 225,  476 => 222,  473 => 221,  415 => 198,  405 => 196,  371 => 172,  354 => 163,  306 => 144,  253 => 111,  300 => 111,  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 224,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  428 => 168,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 107,  218 => 98,  186 => 95,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  478 => 221,  456 => 211,  450 => 205,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  383 => 173,  363 => 165,  320 => 138,  310 => 145,  257 => 105,  213 => 83,  200 => 65,  194 => 65,  316 => 305,  304 => 128,  148 => 61,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  388 => 175,  377 => 170,  370 => 132,  359 => 164,  348 => 8,  330 => 137,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 6,  504 => 237,  493 => 234,  488 => 224,  482 => 223,  477 => 187,  470 => 220,  466 => 219,  462 => 212,  460 => 220,  452 => 219,  429 => 199,  421 => 166,  403 => 191,  397 => 188,  389 => 186,  385 => 136,  373 => 169,  367 => 173,  345 => 122,  338 => 156,  313 => 304,  302 => 124,  282 => 87,  205 => 93,  201 => 92,  192 => 96,  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 167,  419 => 199,  417 => 151,  401 => 148,  399 => 194,  395 => 193,  391 => 148,  375 => 139,  372 => 138,  350 => 162,  339 => 120,  334 => 118,  329 => 116,  315 => 130,  295 => 98,  185 => 82,  114 => 42,  299 => 155,  289 => 158,  266 => 119,  249 => 114,  242 => 79,  228 => 124,  411 => 197,  408 => 149,  351 => 9,  343 => 173,  331 => 146,  292 => 90,  280 => 118,  274 => 146,  263 => 114,  236 => 78,  215 => 69,  211 => 100,  207 => 98,  178 => 79,  152 => 62,  333 => 135,  318 => 129,  308 => 128,  296 => 125,  290 => 104,  287 => 148,  281 => 125,  276 => 140,  270 => 138,  267 => 137,  259 => 118,  255 => 112,  248 => 103,  245 => 109,  222 => 88,  212 => 68,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 155,  364 => 168,  361 => 170,  358 => 165,  352 => 118,  342 => 159,  336 => 156,  328 => 117,  324 => 133,  321 => 114,  317 => 159,  307 => 114,  297 => 106,  288 => 122,  275 => 117,  271 => 96,  261 => 117,  233 => 104,  225 => 102,  210 => 115,  198 => 66,  191 => 71,  170 => 59,  197 => 84,  184 => 82,  161 => 62,  124 => 52,  137 => 60,  301 => 95,  291 => 126,  277 => 124,  262 => 84,  256 => 92,  250 => 110,  231 => 76,  226 => 72,  180 => 59,  175 => 67,  165 => 83,  145 => 55,  100 => 37,  74 => 16,  323 => 128,  319 => 112,  311 => 109,  303 => 112,  293 => 122,  286 => 89,  279 => 151,  272 => 116,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 88,  195 => 84,  188 => 99,  181 => 68,  167 => 75,  160 => 50,  146 => 75,  97 => 39,  90 => 43,  83 => 39,  76 => 28,  155 => 56,  153 => 79,  129 => 57,  37 => 8,  70 => 25,  53 => 16,  65 => 38,  139 => 71,  113 => 48,  110 => 38,  104 => 51,  58 => 14,  34 => 11,  190 => 104,  174 => 58,  150 => 7,  134 => 57,  126 => 52,  120 => 73,  84 => 19,  81 => 30,  23 => 2,  118 => 59,  96 => 37,  77 => 29,  52 => 8,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 204,  440 => 206,  437 => 147,  435 => 170,  430 => 144,  427 => 201,  423 => 200,  413 => 195,  409 => 146,  407 => 192,  402 => 195,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 156,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 150,  314 => 147,  312 => 129,  309 => 169,  305 => 97,  298 => 94,  294 => 108,  285 => 120,  283 => 119,  278 => 86,  268 => 95,  264 => 85,  258 => 138,  252 => 104,  247 => 101,  241 => 112,  229 => 103,  220 => 119,  214 => 97,  177 => 69,  169 => 85,  140 => 56,  132 => 54,  128 => 53,  111 => 45,  107 => 36,  61 => 10,  38 => 10,  273 => 123,  269 => 122,  254 => 105,  246 => 103,  243 => 108,  240 => 86,  238 => 109,  235 => 99,  230 => 104,  227 => 75,  224 => 101,  221 => 101,  219 => 122,  217 => 85,  208 => 67,  204 => 66,  179 => 93,  159 => 57,  143 => 64,  135 => 58,  131 => 58,  119 => 45,  108 => 55,  102 => 41,  71 => 30,  67 => 25,  63 => 13,  59 => 23,  47 => 11,  28 => 3,  29 => 3,  35 => 5,  26 => 3,  43 => 18,  196 => 97,  183 => 94,  171 => 91,  166 => 62,  163 => 86,  158 => 80,  156 => 79,  151 => 64,  142 => 75,  138 => 48,  136 => 55,  123 => 69,  121 => 47,  117 => 28,  115 => 51,  105 => 47,  91 => 44,  69 => 31,  62 => 27,  49 => 13,  101 => 46,  94 => 33,  89 => 22,  85 => 31,  79 => 21,  75 => 24,  68 => 18,  56 => 22,  50 => 13,  87 => 21,  72 => 27,  66 => 15,  55 => 23,  41 => 15,  31 => 4,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 38,  88 => 37,  78 => 32,  46 => 23,  44 => 14,  40 => 9,  32 => 4,  27 => 7,  22 => 2,  209 => 92,  203 => 99,  199 => 73,  193 => 61,  189 => 60,  187 => 103,  182 => 77,  176 => 76,  173 => 65,  168 => 66,  164 => 77,  162 => 82,  154 => 46,  149 => 63,  147 => 65,  144 => 46,  141 => 58,  133 => 56,  130 => 37,  125 => 63,  122 => 50,  116 => 47,  112 => 45,  109 => 48,  106 => 42,  103 => 39,  99 => 39,  95 => 24,  92 => 38,  86 => 20,  82 => 27,  80 => 27,  73 => 29,  64 => 22,  60 => 21,  57 => 36,  54 => 9,  51 => 15,  48 => 19,  45 => 11,  42 => 15,  39 => 10,  36 => 7,  33 => 13,  30 => 4,);
    }
}
