<?php

/* CaravaneOrganicBundle:Job/tabs:conditions.html.twig */
class __TwigTemplate_91ae69805e6f3d83bbd0c941e594f14a9cf083c64cd07208018fab809b602b52 extends Twig_Template
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
                            <th class='tiny'>Invoice</th>
                            <th class='tiny'></th>
                        </tr>
                    </thead>
                    <tbody class=\"slices\" data-prototype=\"";
        // line 14
        echo twig_escape_filter($this->env, (((((("
                        <td class=\"span9\">" .         // line 15
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "slices"), "vars"), "prototype"), "comments"), 'widget')) . "</td>
                        <td class=\"span1\">") .         // line 16
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "slices"), "vars"), "prototype"), "slice"), 'widget')) . "</td>
                        <td class=\"span1\">") .         // line 17
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "slices"), "vars"), "prototype"), "priceht"), 'widget')) . "</td>
                        <td class=\"span1\"></td>
                        <td><a class=\"delete_new_row\" ><i class=\"icon icon-trash\"></i></a></td>
                    "));
        // line 20
        echo "\">

                        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "slices"));
        foreach ($context['_seq'] as $context["_key"] => $context["slice"]) {
            // line 23
            echo "                        <tr ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "slice") > 100) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "slice") <= 0))) {
                echo " class=\"error\" ";
            }
            echo " >
                            <td>";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "comments"), 'widget');
            echo "</td>
                            <td>";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "slice"), 'widget');
            echo "%</td>

                            <td>";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "priceht"), 'widget');
            echo "<br/>
                             </td>
                            ";
            // line 29
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "invoiceid")) {
                // line 30
                echo "                             <td>
                                <a class=\"red\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "invoiceid"), "id"))), "html", null, true);
                echo "\">";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "invoiceid"), "reference")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "invoiceid"), "reference"), "html", null, true);
                    echo " ";
                } else {
                    echo " draft ";
                }
                echo " </a>
                            </td>
                            <td></td>
                             ";
            } else {
                // line 35
                echo "                             <td>
                                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_new_from_job", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "id"))), "html", null, true);
                echo "\" class=\"btn btn-inverse\"><i class=\"icon icon-plus\"></i> Invoice</a>
                            </td>
                            <td>
                                <a class=\"delete_row\" data-rel=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
                echo "\" data-type=\"job_slice\" data-target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slice"]) ? $context["slice"] : null), "vars"), "value"), "id"), "html", null, true);
                echo "\"><i class=\"icon icon-trash\"></i></a>
                            </td>
                            ";
            }
            // line 42
            echo "                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                    </tbody>
                     <tfoot>
                <tr ";
        // line 47
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalSlice") != 100) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalSlicePriceht") != $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price")))) {
            echo " class=\"error\" ";
        }
        echo ">
                        <th class=\"right\">

                            <a id=\"add_slice_link\" class=\"add_slice_link btn\">Add row</a>
                        </th>
                        <th>
                            ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalSlice"), "html", null, true);
        echo "%
                        </th>
                        <th>
                            ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalSlicePriceht"), "html", null, true);
        echo "&euro;
                        </th>
                        <th class=\"tiny\"></th>
                        <th class='iiny'></th>
                </tr>
            </tfoot>
                </table>
    </div>
     <div class=\"row-fluid\">
          ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "conditions"), 'row');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job/tabs:conditions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 113,  256 => 112,  250 => 109,  231 => 99,  226 => 97,  180 => 69,  175 => 67,  165 => 63,  145 => 53,  100 => 38,  74 => 29,  323 => 177,  319 => 176,  311 => 171,  303 => 166,  293 => 159,  286 => 155,  279 => 122,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 72,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 45,  90 => 43,  83 => 32,  76 => 30,  155 => 126,  153 => 56,  129 => 56,  37 => 7,  70 => 28,  53 => 23,  65 => 25,  139 => 56,  113 => 57,  110 => 42,  104 => 39,  58 => 23,  34 => 14,  190 => 73,  174 => 91,  150 => 52,  134 => 34,  126 => 33,  120 => 30,  84 => 33,  81 => 35,  23 => 3,  118 => 59,  96 => 36,  77 => 30,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 124,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 139,  252 => 80,  247 => 78,  241 => 77,  229 => 98,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 67,  128 => 49,  111 => 50,  107 => 36,  61 => 11,  38 => 16,  273 => 119,  269 => 118,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 101,  235 => 74,  230 => 123,  227 => 81,  224 => 71,  221 => 96,  219 => 95,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 59,  143 => 56,  135 => 49,  131 => 52,  119 => 42,  108 => 55,  102 => 39,  71 => 49,  67 => 15,  63 => 15,  59 => 18,  47 => 22,  28 => 5,  29 => 3,  35 => 5,  26 => 12,  43 => 12,  196 => 74,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 65,  142 => 35,  138 => 54,  136 => 56,  123 => 45,  121 => 54,  117 => 44,  115 => 51,  105 => 47,  91 => 42,  69 => 27,  62 => 24,  49 => 22,  101 => 46,  94 => 43,  89 => 31,  85 => 40,  79 => 31,  75 => 32,  68 => 18,  56 => 15,  50 => 10,  87 => 23,  72 => 15,  66 => 5,  55 => 22,  41 => 18,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 35,  88 => 34,  78 => 34,  46 => 15,  44 => 9,  40 => 17,  32 => 6,  27 => 5,  22 => 2,  209 => 111,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 64,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 118,  141 => 48,  133 => 53,  130 => 45,  125 => 55,  122 => 47,  116 => 41,  112 => 42,  109 => 34,  106 => 40,  103 => 32,  99 => 16,  95 => 28,  92 => 36,  86 => 33,  82 => 22,  80 => 31,  73 => 35,  64 => 25,  60 => 24,  57 => 11,  54 => 21,  51 => 20,  48 => 18,  45 => 20,  42 => 23,  39 => 13,  36 => 15,  33 => 10,  30 => 5,);
    }
}
