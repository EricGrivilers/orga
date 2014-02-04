<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_b784acc0ebd944d1adaf9b099ab992cbdf4113a18c434f9767c7876ee9c27fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email")), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 41,  174 => 39,  150 => 36,  134 => 34,  126 => 33,  120 => 30,  84 => 13,  81 => 12,  23 => 4,  118 => 30,  96 => 26,  77 => 21,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 60,  38 => 8,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 20,  102 => 27,  71 => 19,  67 => 15,  63 => 15,  59 => 18,  47 => 19,  28 => 5,  29 => 5,  35 => 7,  26 => 6,  43 => 6,  196 => 90,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 63,  142 => 35,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 29,  105 => 19,  91 => 27,  69 => 18,  62 => 23,  49 => 19,  101 => 32,  94 => 28,  89 => 15,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  87 => 23,  72 => 25,  66 => 22,  55 => 15,  41 => 9,  31 => 6,  24 => 2,  25 => 3,  21 => 2,  19 => 2,  98 => 31,  93 => 28,  88 => 6,  78 => 11,  46 => 7,  44 => 6,  40 => 7,  32 => 4,  27 => 4,  22 => 3,  209 => 59,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 16,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 20,  64 => 61,  60 => 13,  57 => 11,  54 => 16,  51 => 14,  48 => 13,  45 => 11,  42 => 10,  39 => 9,  36 => 7,  33 => 6,  30 => 7,);
    }
}
