<?php

/* CaravaneOrganicBundle:Invoice:index.html.twig */
class __TwigTemplate_247bda5b908ca330d0acb4f5588adbc59c33f80c9693837c1e61c2f8c42116f8 extends Twig_Template
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
        // line 9
        if (((isset($context["type"]) ? $context["type"] : null) == "")) {
            echo "class=\"active\" ";
        }
        echo " >
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("ob" => (isset($context["ob"]) ? $context["ob"] : null))), "html", null, true);
        echo "\">All</a>
          </li>
          <li ";
        // line 12
        if (((isset($context["type"]) ? $context["type"] : null) == "open")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("type" => "open", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
        echo "\">Open</a></li>
          <li ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : null) == "paid")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("type" => "paid", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
        echo "\">Paid</a></li>
          <li ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : null) == "todo")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("type" => "todo", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
        echo "\">To do</a></li>
          <li ";
        // line 15
        if (((isset($context["type"]) ? $context["type"] : null) == "draft")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice", array("type" => "draft", "ob" => (isset($context["ob"]) ? $context["ob"] : null), "page" => 1)), "html", null, true);
        echo "\">Draft</a></li>

        </ul>
</div>

<div class=\"span2\">
     <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_new"), "html", null, true);
        echo "\" class=\"btn btn-inverse \">
            New invoice
        </a>
    </div>
    </div>
</div>
<div class=\"row-fluid\">




<table class=\"table table-bordered table-condensed table-striped\">
    <thead>
        <tr>
            <th><a data-orderby=\"reference\">Reference</a></th>
            <th><a data-orderby=\"clientid\" >Client</a></th>
            <th><a data-orderby=\"offretype\" >Type</a></th>
            <th><a data-orderby=\"insertdate\" >Date</a></th>
            <th><a data-orderby=\"priceht\" >Am. VAT Excl.</a></th>
            <th>Am. VAT Incl.</th>
            <th><a data-orderby=\"cSlice\" >Slice</a></th>




             <th><a data-orderby=\"jobid\" >Job</a></th>
             <th><a data-orderby=\"status\" >Status</a></th>
             <th><a data-orderby=\"country\" >Country</a></th>
             <th>Account</th>
             <th>PDF</th>
             <th>R1</th>
             <th>R2</th>
             <th>MD</th>

             <th>Ed</th>
            <th>Del</th>

        </tr>
    </thead>
    <tbody>
    ";
        // line 61
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
            // line 62
            echo "    ";
            $context["row"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
            // line 63
            echo "        <tr>
            <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 65
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "name"), "html", null, true);
                echo "</a> ";
            }
            echo "</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offretype"), "html", null, true);
            echo "</td>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "insertDate"), "d/m/Y"), "html", null, true);
            echo "</td>

            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT"), 2, ",", " "), "html", null, true);
            echo "</td>
            <td>";
            // line 70
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceType") == "intra")) {
                echo "<i>intra</i>";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceTTC"), 2, ",", " "), "html", null, true);
            }
            echo "</td>

            <td> ";
            // line 72
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cSlice"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "slices")), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 73
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid")) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "id"))), "html", null, true);
                echo "\" class='red' >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "html", null, true);
                echo "</a>";
            }
            echo "</td>
            <td> ";
            // line 74
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status") == "ok")) {
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r1")) {
                    echo "R1";
                } elseif ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r2")) {
                    echo "R2";
                } elseif ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "med")) {
                    echo "Ult ";
                } else {
                    echo " sent  ";
                }
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country"), "html", null, true);
            echo "</td>


             <td>";
            // line 78
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid")) {
                echo "<a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "userid"), "email"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "userid"), "name"), "html", null, true);
                echo "</a>";
            }
            echo "</td>










             <td>

                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
            echo "_1\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
            echo "_1\">
                        ";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
            foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                // line 95
                echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "type" => "inv", "_locale" => (isset($context["lg"]) ? $context["lg"] : null))), "html", null, true);
                echo "\" target=\"_blank\" ><img src=\"/images/icons/pdf.png\"> Invoice ";
                echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                    </ul>
                </li>
            </td>
             <td>
                ";
            // line 103
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r1") == 1)) {
                // line 104
                echo "                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
                // line 105
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
                echo "_2\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
                // line 106
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
                echo "_2\">
                        ";
                // line 107
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
                foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                    // line 108
                    echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "type" => "r1", "_locale" => (isset($context["lg"]) ? $context["lg"] : null))), "html", null, true);
                    echo "\" target=\"_blank\" > Reminder 1 ";
                    echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                    </ul>
                </li>
                ";
            }
            // line 115
            echo "            </td>
            <td>
                ";
            // line 117
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r2") == 1)) {
                // line 118
                echo "                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
                // line 119
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
                echo "_3\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
                // line 120
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
                echo "_3\">
                        ";
                // line 121
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
                foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                    // line 122
                    echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "type" => "r2", "_locale" => (isset($context["lg"]) ? $context["lg"] : null))), "html", null, true);
                    echo "\" target=\"_blank\" > Reminder 2  ";
                    echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                    </ul>
                </li>
                ";
            }
            // line 129
            echo "            </td>
            <td>
                ";
            // line 131
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "med") == 1)) {
                // line 132
                echo "                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" id=\"drop";
                // line 133
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
                echo "_4\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><img src=\"/images/icons/pdf.png\"> <b class=\"caret\"></b></a>
                    <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop";
                // line 134
                echo twig_escape_filter($this->env, (isset($context["row"]) ? $context["row"] : null), "html", null, true);
                echo "_4\">
                        ";
                // line 135
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
                foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                    // line 136
                    echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" href=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "type" => "med", "_locale" => (isset($context["lg"]) ? $context["lg"] : null))), "html", null, true);
                    echo "\" target=\"_blank\" > Ultimatum ";
                    echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "                    </ul>
                </li>
                ";
            }
            // line 143
            echo "            </td>

              <td>
                <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-edit\"></i></a>

            </td>
             <td>

                        <a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a>


            </td>

        </tr>
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
        // line 158
        echo "    </tbody>
</table>

</div>
<div class=\"row-fluid\">
    ";
        // line 163
        $this->env->loadTemplate("CaravaneOrganicBundle:Default:pagination.html.twig")->display($context);
        // line 164
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Invoice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 164,  445 => 163,  438 => 158,  404 => 143,  399 => 140,  388 => 137,  370 => 132,  359 => 126,  348 => 123,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 361,  723 => 355,  715 => 349,  709 => 348,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 316,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 303,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 279,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 260,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 232,  477 => 227,  466 => 223,  460 => 220,  452 => 219,  429 => 199,  425 => 198,  421 => 197,  417 => 151,  403 => 191,  397 => 188,  385 => 136,  373 => 133,  367 => 173,  338 => 156,  313 => 145,  302 => 136,  282 => 99,  205 => 93,  192 => 85,  185 => 81,  482 => 229,  478 => 172,  475 => 171,  470 => 225,  468 => 171,  465 => 170,  462 => 221,  454 => 163,  448 => 161,  446 => 160,  428 => 156,  424 => 155,  420 => 154,  401 => 147,  391 => 145,  389 => 186,  386 => 143,  383 => 142,  380 => 141,  377 => 134,  375 => 139,  353 => 125,  350 => 124,  347 => 123,  345 => 122,  340 => 120,  330 => 118,  326 => 114,  306 => 102,  300 => 100,  201 => 92,  194 => 65,  114 => 33,  299 => 155,  289 => 158,  266 => 119,  249 => 83,  242 => 110,  228 => 76,  411 => 219,  408 => 218,  351 => 178,  343 => 173,  331 => 167,  292 => 97,  280 => 94,  274 => 146,  263 => 127,  236 => 114,  215 => 104,  211 => 103,  207 => 102,  178 => 67,  152 => 64,  333 => 119,  318 => 112,  308 => 109,  296 => 112,  290 => 104,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 111,  222 => 74,  212 => 95,  206 => 100,  172 => 67,  157 => 50,  369 => 134,  366 => 133,  364 => 129,  361 => 170,  358 => 130,  352 => 164,  342 => 120,  336 => 9,  328 => 117,  324 => 115,  321 => 114,  317 => 159,  307 => 110,  297 => 106,  288 => 103,  275 => 126,  271 => 96,  261 => 117,  233 => 78,  225 => 76,  210 => 69,  198 => 98,  191 => 72,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 46,  137 => 58,  301 => 107,  291 => 126,  277 => 121,  262 => 133,  256 => 92,  250 => 93,  231 => 77,  226 => 109,  180 => 65,  175 => 67,  165 => 63,  145 => 63,  100 => 32,  74 => 29,  323 => 161,  319 => 112,  311 => 157,  303 => 166,  293 => 105,  286 => 138,  279 => 127,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 70,  167 => 76,  160 => 83,  146 => 62,  97 => 38,  90 => 43,  83 => 23,  76 => 35,  155 => 61,  153 => 79,  129 => 61,  37 => 7,  70 => 20,  53 => 23,  65 => 14,  139 => 71,  113 => 42,  110 => 32,  104 => 51,  58 => 10,  34 => 11,  190 => 84,  174 => 78,  150 => 65,  134 => 57,  126 => 32,  120 => 73,  84 => 33,  81 => 35,  23 => 2,  118 => 50,  96 => 36,  77 => 19,  52 => 8,  480 => 162,  474 => 226,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 158,  435 => 146,  430 => 157,  427 => 143,  423 => 142,  413 => 195,  409 => 146,  407 => 192,  402 => 130,  398 => 129,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 151,  314 => 99,  312 => 111,  309 => 169,  305 => 108,  298 => 134,  294 => 98,  285 => 105,  283 => 104,  278 => 86,  268 => 95,  264 => 94,  258 => 139,  252 => 121,  247 => 82,  241 => 96,  229 => 102,  220 => 74,  214 => 97,  177 => 69,  169 => 64,  140 => 45,  132 => 67,  128 => 54,  111 => 55,  107 => 24,  61 => 16,  38 => 9,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 76,  230 => 123,  227 => 75,  224 => 100,  221 => 96,  219 => 97,  217 => 72,  208 => 94,  204 => 68,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 30,  71 => 49,  67 => 21,  63 => 14,  59 => 18,  47 => 12,  28 => 3,  29 => 3,  35 => 11,  26 => 12,  43 => 22,  196 => 66,  183 => 81,  171 => 77,  166 => 132,  163 => 69,  158 => 65,  156 => 68,  151 => 60,  142 => 45,  138 => 60,  136 => 56,  123 => 52,  121 => 47,  117 => 28,  115 => 45,  105 => 47,  91 => 25,  69 => 31,  62 => 20,  49 => 12,  101 => 23,  94 => 43,  89 => 36,  85 => 30,  79 => 22,  75 => 21,  68 => 19,  56 => 14,  50 => 13,  87 => 24,  72 => 15,  66 => 15,  55 => 23,  41 => 15,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 25,  46 => 23,  44 => 10,  40 => 5,  32 => 4,  27 => 7,  22 => 2,  209 => 74,  203 => 69,  199 => 73,  193 => 68,  189 => 63,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 66,  164 => 51,  162 => 54,  154 => 58,  149 => 63,  147 => 47,  144 => 46,  141 => 41,  133 => 35,  130 => 49,  125 => 53,  122 => 35,  116 => 34,  112 => 47,  109 => 37,  106 => 31,  103 => 40,  99 => 38,  95 => 37,  92 => 36,  86 => 21,  82 => 27,  80 => 20,  73 => 15,  64 => 25,  60 => 19,  57 => 13,  54 => 16,  51 => 15,  48 => 8,  45 => 11,  42 => 23,  39 => 11,  36 => 4,  33 => 4,  30 => 3,);
    }
}
