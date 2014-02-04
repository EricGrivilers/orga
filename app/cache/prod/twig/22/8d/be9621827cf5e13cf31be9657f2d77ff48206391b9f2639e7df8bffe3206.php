<?php

/* CaravaneOrganicBundle:Job/tabs:products.html.twig */
class __TwigTemplate_228dbe9621827cf5e13cf31be9657f2d77ff48206391b9f2639e7df8bffe3206 extends Twig_Template
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
        echo " <div class=\"row-fluid\">
     ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "surface"), 'row');
        echo "
</div>
    <div class=\"row-fluid\">

        <table class=\"table table-bordered table-condensed table-striped table-sortable\">
            <thead>
                <tr>
                    <th>
                        Product
                    </th>
                    <th>
                        Price in &euro; VAT excl.
                    </th>
                    <th class=\"tiny\"></th>
                </tr>
            </thead>
            <tbody class=\"products\"  ";
        // line 18
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id")) {
            echo " data-update=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_sort_products", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" ";
        }
        echo " id=\"products\"  data-prototype=\"";
        echo twig_escape_filter($this->env, (((((("
                        <td class=\"span9\">" .         // line 19
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "products"), "vars"), "prototype"), "description"), 'widget')) . " ") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "products"), "vars"), "prototype"), "datas"), 'widget')) . "</td>
                        <td class=\"span3\">") .         // line 20
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "products"), "vars"), "prototype"), "price"), 'widget')) . "</td>
                        <td><a class=\"delete_new_row\" ><i class=\"icon icon-trash\"></i></a></td>
                    "));
        // line 22
        echo "\">
                    ";
        // line 23
        $context["c"] = 0;
        // line 24
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 25
            echo "


                    <tr data-productid=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
            echo "\" data-entity=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "id"), "html", null, true);
            echo "\" >
                        <td class=\"span9\">
                            ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), 'widget');
            echo "
                            ";
            // line 31
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid")) {
                // line 32
                echo "
                               ";
                // line 33
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid"), "productCategory") == "Tent")) {
                    // line 34
                    echo "                                <div class='row-fluid' class=\"additionalDatasRow\" style=\"background:#ccc\">
                                    <div class=\"span4\">
                                         Reference:  <b>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid"), "reference"), "html", null, true);
                    echo "</b>
                                         <br/>Name:  <b>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid"), "name"), "html", null, true);
                    echo "</b>
                                         <br/>Color:  <b>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid"), "color"), "html", null, true);
                    echo "</b>
                                         ";
                    // line 39
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid"), "ownerid")) {
                        // line 40
                        echo "                                            <br/>Owner <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid"), "ownerid"), "name"), "html", null, true);
                        echo "</b>
                                        ";
                    }
                    // line 42
                    echo "                                        <br/>Width: <b>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid"), "width"), "html", null, true);
                    echo "</b> m x length: <b>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid"), "length"), "html", null, true);
                    echo "</b> m ( <b>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "tentid"), "m2"), "html", null, true);
                    echo "</b> m2)

                                    </div>
                                    ";
                    // line 45
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "datasAsObject")) {
                        // line 46
                        echo "                                        <div class=\"span4\">

                                            Floor <input class=\"additionalData\" type='checkbox' data-attribute=\"plancher\" value='1' ";
                        // line 48
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "datasAsObject"), "plancher")) {
                            echo " checked=\"checked\"  ";
                        }
                        echo " />
                                              area <input data-attribute=\"surfaceplancher\"  type='text' value=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "datasAsObject"), "surfaceplancher"), "html", null, true);
                        echo "\" class=\"span10 additionalData\"  />
                                       <br/>
                                            Ground<br/> <input class=\"additionalData\" data-attribute=\"sol\" type='text' value=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "datasAsObject"), "sol"), "html", null, true);
                        echo "\" class=\"span10\"  />
                                        <br/>
                                            Pipeline  <input class=\"additionalData\" data-attribute=\"canalisation\" type='checkbox'  value='1' ";
                        // line 53
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "datasAsObject"), "canalisation")) {
                            echo " checked=\"checked\"  ";
                        }
                        echo " />
                                        </div>
                                        <div class=\"span4\">
                                            Other<br/> <textarea data-attribute=\"other\" class=\"span12 additionalData\">";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "datasAsObject"), "other"), "html", null, true);
                        echo "</textarea>
                                        </div>
                                    ";
                    }
                    // line 59
                    echo "                                </div>


                               ";
                }
                // line 63
                echo "                            ";
            }
            // line 64
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "datas"), 'widget');
            echo "
                        </td>
                        <td class=\"span3\">
                            ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), 'widget');
            echo "
                        </td>
                        <td><a class=\"delete_row\" data-rel=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" data-type=\"job\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "id"), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a></td>
                    </tr>

                    ";
            // line 72
            $context["c"] = ((isset($context["c"]) ? $context["c"] : null) + 1);
            // line 73
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "

            </tbody>
             <tfoot>
                <tr>
                        <th class=\"right\">

                            <a id=\"add_product_link\" class=\"add_product_link btn\" data-isoption='0'>Add free row</a>
                            <a href=\"#transportModal\" class=\"btn openTransportModal\" data-isoption='0'>Add transport row</a>
                            <a   class=\"btn openStockModal\"  data-isoption='0'>Add from stock</a>
                        </th>
                        <th>

                        </th>
                        <th class=\"tiny\"></th>
                </tr>
                    <tr>
                        <th class=\"right\">
                            Total VAT excl.
                        </th>
                        <th>
                            ";
        // line 95
        $context["total"] = 0;
        // line 96
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 97
            echo "
                                    ";
            // line 98
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "price"));
            // line 99
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                            ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ",", " "), "html", null, true);
        echo "
                        </th>
                        <th class=\"tiny\"></th>
                </tr>


                    <tr>
                        <th class=\"right\">
                             ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "pricetype"), 'widget');
        echo "
                        </th>
                        <th>
                            ";
        // line 112
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (0.21 * (isset($context["total"]) ? $context["total"] : null)), 2, ",", " "), "html", null, true);
            echo " ";
        }
        // line 113
        echo "                        </th>
                        <th class=\"tiny\"></th>
                    </tr>
                    <tr>
                        <th class=\"right\">
                            Total ";
        // line 118
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " VAT incl. ";
        }
        // line 119
        echo "                        </th>
                        <th>
                            ";
        // line 121
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") == "intra")) {
            // line 122
            echo "                                ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ".", " "), "html", null, true);
            echo "
                            ";
        } else {
            // line 124
            echo "                                ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) ? $context["total"] : null) + (0.21 * (isset($context["total"]) ? $context["total"] : null))), 2, ".", " "), "html", null, true);
            echo "
                            ";
        }
        // line 126
        echo "                        </th>
                        <th></th>
                    </tr>

            </tfoot>
        </table>
    </div>
     <div class=\"row-fluid\">
          ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tentscomments"), 'row');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job/tabs:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 134,  291 => 126,  277 => 121,  262 => 113,  256 => 112,  250 => 109,  231 => 99,  226 => 97,  180 => 69,  175 => 67,  165 => 63,  145 => 53,  100 => 38,  74 => 33,  323 => 177,  319 => 176,  311 => 171,  303 => 166,  293 => 159,  286 => 155,  279 => 122,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 72,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 44,  90 => 43,  83 => 32,  76 => 23,  155 => 126,  153 => 56,  129 => 48,  37 => 7,  70 => 28,  53 => 17,  65 => 25,  139 => 71,  113 => 57,  110 => 43,  104 => 39,  58 => 23,  34 => 11,  190 => 73,  174 => 91,  150 => 52,  134 => 34,  126 => 33,  120 => 30,  84 => 33,  81 => 31,  23 => 3,  118 => 59,  96 => 37,  77 => 30,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 124,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 139,  252 => 80,  247 => 78,  241 => 77,  229 => 98,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 67,  128 => 49,  111 => 46,  107 => 36,  61 => 11,  38 => 8,  273 => 119,  269 => 118,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 101,  235 => 74,  230 => 123,  227 => 81,  224 => 71,  221 => 96,  219 => 95,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 59,  143 => 56,  135 => 49,  131 => 52,  119 => 42,  108 => 55,  102 => 27,  71 => 49,  67 => 15,  63 => 15,  59 => 18,  47 => 22,  28 => 5,  29 => 3,  35 => 5,  26 => 12,  43 => 12,  196 => 74,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 63,  142 => 35,  138 => 54,  136 => 56,  123 => 45,  121 => 62,  117 => 44,  115 => 48,  105 => 45,  91 => 42,  69 => 31,  62 => 24,  49 => 19,  101 => 32,  94 => 43,  89 => 31,  85 => 40,  79 => 18,  75 => 23,  68 => 18,  56 => 15,  50 => 10,  87 => 23,  72 => 15,  66 => 5,  55 => 22,  41 => 18,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 40,  88 => 34,  78 => 34,  46 => 14,  44 => 9,  40 => 8,  32 => 6,  27 => 5,  22 => 2,  209 => 111,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 64,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 118,  141 => 48,  133 => 55,  130 => 45,  125 => 46,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 40,  103 => 32,  99 => 16,  95 => 28,  92 => 36,  86 => 33,  82 => 22,  80 => 31,  73 => 35,  64 => 17,  60 => 24,  57 => 11,  54 => 21,  51 => 20,  48 => 18,  45 => 16,  42 => 23,  39 => 10,  36 => 7,  33 => 10,  30 => 5,);
    }
}
