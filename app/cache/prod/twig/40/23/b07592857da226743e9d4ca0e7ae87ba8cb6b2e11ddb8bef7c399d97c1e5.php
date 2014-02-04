<?php

/* CaravaneOrganicBundle:Job/tabs:client.html.twig */
class __TwigTemplate_4023b07592857da226743e9d4ca0e7ae87ba8cb6b2e11ddb8bef7c399d97c1e5 extends Twig_Template
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
        echo "<div class=\"well\">
        <div class=\"row-fluid\" >
            <div class=\"span4\">
                ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "clienttype"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                &nbsp;
            </div>
             <div class=\"span4\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "language"), 'row');
        echo "
            </div>
         </div>
        <div class=\"row-fluid\" id=\"cieonly\" ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "clienttype") != "cie")) {
            echo " style='display:none' ";
        }
        echo ">
            <div class=\"span4\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "name"), 'row');
        echo "

            </div>
             <div class=\"span4\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "vat"), 'row');
        echo "

            </div>
             <div class=\"span4\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "cietype"), 'row');
        echo "

            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span4\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "clienttitle"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "lastname"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "firstname"), 'row');
        echo "

            </div>
        </div>
    </div>

     <div class=\"well\">
        <div class=\"row-fluid\">
            <div class=\"span4\">
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "address"), 'row');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "city"), 'row');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "country"), 'row');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "url"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "number"), 'row');
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "zip"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "email"), 'row');
        echo "
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "mobile"), 'row');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "phone"), 'row');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "phone2"), 'row');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "fax"), 'row');
        echo "

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job/tabs:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 113,  256 => 112,  250 => 109,  231 => 99,  226 => 97,  180 => 69,  175 => 67,  165 => 63,  145 => 53,  100 => 38,  74 => 33,  323 => 177,  319 => 176,  311 => 171,  303 => 166,  293 => 159,  286 => 155,  279 => 122,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 72,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 45,  90 => 43,  83 => 32,  76 => 23,  155 => 126,  153 => 56,  129 => 56,  37 => 7,  70 => 28,  53 => 19,  65 => 25,  139 => 71,  113 => 57,  110 => 43,  104 => 39,  58 => 23,  34 => 11,  190 => 73,  174 => 91,  150 => 52,  134 => 34,  126 => 33,  120 => 30,  84 => 33,  81 => 35,  23 => 3,  118 => 59,  96 => 37,  77 => 30,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 124,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 139,  252 => 80,  247 => 78,  241 => 77,  229 => 98,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 67,  128 => 49,  111 => 50,  107 => 36,  61 => 11,  38 => 8,  273 => 119,  269 => 118,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 101,  235 => 74,  230 => 123,  227 => 81,  224 => 71,  221 => 96,  219 => 95,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 59,  143 => 56,  135 => 49,  131 => 52,  119 => 42,  108 => 55,  102 => 27,  71 => 49,  67 => 15,  63 => 15,  59 => 18,  47 => 22,  28 => 5,  29 => 3,  35 => 5,  26 => 12,  43 => 12,  196 => 74,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 63,  142 => 35,  138 => 54,  136 => 56,  123 => 45,  121 => 54,  117 => 44,  115 => 51,  105 => 47,  91 => 42,  69 => 29,  62 => 24,  49 => 19,  101 => 46,  94 => 43,  89 => 31,  85 => 40,  79 => 18,  75 => 32,  68 => 18,  56 => 15,  50 => 10,  87 => 23,  72 => 15,  66 => 5,  55 => 22,  41 => 18,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 44,  88 => 34,  78 => 34,  46 => 15,  44 => 9,  40 => 8,  32 => 6,  27 => 5,  22 => 2,  209 => 111,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 64,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 118,  141 => 48,  133 => 57,  130 => 45,  125 => 55,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 40,  103 => 32,  99 => 16,  95 => 28,  92 => 36,  86 => 33,  82 => 22,  80 => 31,  73 => 35,  64 => 17,  60 => 23,  57 => 11,  54 => 21,  51 => 20,  48 => 18,  45 => 16,  42 => 23,  39 => 13,  36 => 7,  33 => 10,  30 => 5,);
    }
}
