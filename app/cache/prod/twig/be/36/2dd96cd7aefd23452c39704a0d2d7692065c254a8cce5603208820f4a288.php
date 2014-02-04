<?php

/* CaravaneOrganicBundle:Job/tabs:summary.html.twig */
class __TwigTemplate_be362dd96cd7aefd23452c39704a0d2d7692065c254a8cce5603208820f4a288 extends Twig_Template
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

        <div class=\"well\">
        <div class=\"row-fluid\">
            <div class=\"span4\">
                <div>
                    <label>Reference</label> <label><b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "</b></label>
                </div>
                <div>
                    <label>Date</label> <label><b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "insertDate"), "d/m/Y"), "html", null, true);
        echo "</b></label>
                </div>

            </div>
            <div class=\"span4\">
                <label>Type</label><label><b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offretype"), "html", null, true);
        echo "</b></label>
                ";
        // line 16
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreid")) {
            echo "<label>Related quote</label><label><b><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreid"), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offreid"), "html", null, true);
            echo "</a> </b></label>";
        }
        // line 17
        echo "
            </div>
            <div class=\"span4\">
                <div class=\"symfony-form-row \" style='text-align:right'>
                    <a class='btn btn-inverse '>Cancel this job</a>
                </div>



                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "userid"), 'row');
        echo "

            </div>
        </div>
    </div>
    <div class=\"well\">
        <div class=\"row-fluid\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "eventdate"), 'row');
        echo "
        </div>
    </div>

    <div class=\"well\">
        <div class=\"row-fluid\">
            ";
        // line 39
        $context["ToPay"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price");
        // line 40
        echo "            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            // line 41
            echo "                ";
            $context["ToPay"] = ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price") + ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price") * 0.21));
            // line 42
            echo "            ";
        }
        // line 43
        echo "            <div class=\"span6\">
                <h4 style=\"text-align:center\">Total amount ";
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ToPay"]) ? $context["ToPay"] : null), 2, ",", " "), "html", null, true);
        echo " ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo "VAT incl.";
        }
        echo "</h4>
                ";
        // line 45
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo "<div style=\"text-align:center\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price"), 2, ",", " "), "html", null, true);
            echo " VAT excl.</div>";
        }
        // line 46
        echo "            </div>
             <div class=\"span6\">
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "pricecomments"), 'row');
        echo "
            </div>
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job/tabs:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  323 => 177,  319 => 176,  311 => 171,  303 => 166,  293 => 159,  286 => 155,  279 => 151,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 44,  90 => 43,  83 => 39,  76 => 35,  155 => 126,  153 => 79,  129 => 116,  37 => 7,  70 => 29,  53 => 17,  65 => 13,  139 => 71,  113 => 57,  110 => 43,  104 => 51,  58 => 25,  34 => 11,  190 => 41,  174 => 91,  150 => 52,  134 => 34,  126 => 33,  120 => 30,  84 => 34,  81 => 40,  23 => 3,  118 => 59,  96 => 34,  77 => 48,  52 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 139,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 49,  111 => 46,  107 => 36,  61 => 11,  38 => 8,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 123,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 46,  131 => 52,  119 => 42,  108 => 55,  102 => 27,  71 => 49,  67 => 15,  63 => 15,  59 => 18,  47 => 22,  28 => 3,  29 => 3,  35 => 5,  26 => 12,  43 => 12,  196 => 90,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 63,  142 => 35,  138 => 54,  136 => 56,  123 => 47,  121 => 62,  117 => 44,  115 => 48,  105 => 45,  91 => 42,  69 => 31,  62 => 27,  49 => 19,  101 => 32,  94 => 43,  89 => 31,  85 => 40,  79 => 18,  75 => 23,  68 => 14,  56 => 24,  50 => 10,  87 => 23,  72 => 15,  66 => 5,  55 => 23,  41 => 15,  31 => 4,  24 => 2,  25 => 3,  21 => 2,  19 => 1,  98 => 53,  93 => 40,  88 => 41,  78 => 34,  46 => 14,  44 => 13,  40 => 20,  32 => 4,  27 => 7,  22 => 2,  209 => 111,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 56,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 118,  141 => 48,  133 => 55,  130 => 45,  125 => 63,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 16,  95 => 28,  92 => 32,  86 => 39,  82 => 22,  80 => 17,  73 => 35,  64 => 26,  60 => 22,  57 => 11,  54 => 21,  51 => 23,  48 => 19,  45 => 16,  42 => 23,  39 => 10,  36 => 16,  33 => 10,  30 => 5,);
    }
}
