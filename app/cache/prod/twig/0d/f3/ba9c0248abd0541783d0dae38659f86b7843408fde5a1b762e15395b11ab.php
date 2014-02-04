<?php

/* CaravaneOrganicBundle:Transport:edit.html.twig */
class __TwigTemplate_0df3ba9c0248abd0541783d0dae38659f86b7843408fde5a1b762e15395b11ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'form_header' => array($this, 'block_form_header'),
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
        echo "<div class=\"row-fluid\">
";
        // line 5
        $this->displayBlock('form_header', $context, $blocks);
        // line 8
        echo "

         <div class=\"row-fluid\">
            <div class=\"actions\">
                <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transport"), "html", null, true);
        echo "\" class=\"btn\">
                        Back to the list
                </a>
            </div>
        </div>


        ";
        // line 21
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "

    </form>
";
        // line 40
        echo "    </div>
";
    }

    // line 5
    public function block_form_header($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transport_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
         ";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Transport:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  70 => 29,  53 => 18,  65 => 30,  139 => 47,  113 => 44,  110 => 43,  104 => 39,  58 => 25,  34 => 11,  190 => 41,  174 => 39,  150 => 52,  134 => 34,  126 => 33,  120 => 30,  84 => 34,  81 => 40,  23 => 3,  118 => 30,  96 => 34,  77 => 48,  52 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 40,  38 => 8,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 46,  131 => 52,  119 => 42,  108 => 20,  102 => 27,  71 => 30,  67 => 15,  63 => 15,  59 => 18,  47 => 22,  28 => 3,  29 => 3,  35 => 5,  26 => 12,  43 => 12,  196 => 90,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 63,  142 => 35,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 29,  105 => 19,  91 => 41,  69 => 6,  62 => 23,  49 => 19,  101 => 32,  94 => 28,  89 => 31,  85 => 41,  79 => 18,  75 => 23,  68 => 14,  56 => 24,  50 => 10,  87 => 23,  72 => 22,  66 => 5,  55 => 23,  41 => 15,  31 => 4,  24 => 7,  25 => 3,  21 => 2,  19 => 1,  98 => 35,  93 => 40,  88 => 6,  78 => 34,  46 => 14,  44 => 13,  40 => 20,  32 => 4,  27 => 7,  22 => 2,  209 => 59,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 56,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 45,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 16,  95 => 28,  92 => 32,  86 => 39,  82 => 22,  80 => 19,  73 => 35,  64 => 18,  60 => 22,  57 => 11,  54 => 21,  51 => 23,  48 => 17,  45 => 11,  42 => 18,  39 => 10,  36 => 16,  33 => 4,  30 => 3,);
    }
}
