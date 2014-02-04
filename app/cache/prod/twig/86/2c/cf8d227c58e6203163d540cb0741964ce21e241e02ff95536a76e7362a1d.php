<?php

/* CaravaneOrganicBundle:Job/tabs:planning.html.twig */
class __TwigTemplate_862ccf8d227c58e6203163d540cb0741964ce21e241e02ff95536a76e7362a1d extends Twig_Template
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
        <div class=\"row-fluid\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>#
                        </th>
                        <th>From
                        </th>
                        <th>To
                        </th>
                        <th>
                        </th>
                        <th>In charge
                        </th>
                        <th>Status
                        </th>
                    </tr>
                </thead>
                <tbody >
                    ";
        // line 21
        $context["planning"] = $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "plannings"), 0, array(), "array");
        // line 22
        echo "                    <tr class='widget'>
                        <td><label><b>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "planningtype"), "html", null, true);
        echo "</b></label>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "planningtype"), 'widget');
        echo "</td>
                        <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "startdate"), 'widget');
        echo "</td>
                        <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "enddate"), 'widget');
        echo "</td>
                        <td><div class=\"reportrange\" >
                            <i class=\"icon-calendar icon-large\"></i>
                            <span class='display'><span class='static'>From </span> ";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "startdate"), "d/m/Y H:i:s"), "html", null, true);
        echo " <span class='static'> to </span> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "enddate"), "d/m/Y H:i:s"), "html", null, true);
        echo "</span> <b class=\"caret\"></b>
                        </div></td>
                        <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "userid"), 'widget');
        echo "</td>
                        <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "etat"), 'widget');
        echo "</td>
                    </tr>
                    ";
        // line 33
        $context["planning"] = $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "plannings"), 1, array(), "array");
        // line 34
        echo "                    <tr class='widget'>
                        <td><label><b>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "planningtype"), "html", null, true);
        echo "</b></label>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "planningtype"), 'widget');
        echo "</td>
                        <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "startdate"), 'widget');
        echo "</td>
                        <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "enddate"), 'widget');
        echo "</td>
                        <td><div class=\"reportrange\" >
                            <i class=\"icon-calendar icon-large\"></i>
                            <span class='display'><span class='static'>From </span> ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "startdate"), "d/m/Y H:i:s"), "html", null, true);
        echo " <span class='static'> to </span> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "enddate"), "d/m/Y H:i:s"), "html", null, true);
        echo "</span> <b class=\"caret\"></b>
                        </div></td>
                        <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "userid"), 'widget');
        echo "</td>
                        <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "etat"), 'widget');
        echo "</td>
                    </tr>
                    <tr><td colspan=\"6\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "buildnotes"), 'row');
        echo "</td></tr>
                    ";
        // line 46
        $context["planning"] = $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "plannings"), 2, array(), "array");
        // line 47
        echo "                    <tr class='widget'>
                        <td><label><b>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "planningtype"), "html", null, true);
        echo "</b></label>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "planningtype"), 'widget');
        echo "</td>
                        <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "startdate"), 'widget');
        echo "</td>
                        <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "enddate"), 'widget');
        echo "</td>
                        <td><div class=\"reportrange\" >
                            <i class=\"icon-calendar icon-large\"></i>
                            <span class='display'><span class='static'>From </span> ";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "startdate"), "d/m/Y H:i:s"), "html", null, true);
        echo " <span class='static'> to </span> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "enddate"), "d/m/Y H:i:s"), "html", null, true);
        echo "</span> <b class=\"caret\"></b>
                        </div></td>
                        <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "userid"), 'widget');
        echo "</td>
                        <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "etat"), 'widget');
        echo "</td>
                    </tr>
                    ";
        // line 58
        $context["planning"] = $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "plannings"), 3, array(), "array");
        // line 59
        echo "                    <tr class='widget'>
                        <td><label><b>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "planningtype"), "html", null, true);
        echo "</b></label>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "planningtype"), 'widget');
        echo "</td>
                        <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "startdate"), 'widget');
        echo "</td>
                        <td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "enddate"), 'widget');
        echo "</td>
                        <td><div class=\"reportrange\" >
                            <i class=\"icon-calendar icon-large\"></i>
                            <span class='display'><span class='static'>From </span> ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "startdate"), "d/m/Y H:i:s"), "html", null, true);
        echo " <span class='static'> to </span> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "vars"), "value"), "enddate"), "d/m/Y H:i:s"), "html", null, true);
        echo "</span> <b class=\"caret\"></b>
                        </div></td>
                        <td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "userid"), 'widget');
        echo "</td>
                        <td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["planning"]) ? $context["planning"] : null), "etat"), 'widget');
        echo "</td>
                    </tr>
                    <tr><td colspan=\"6\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "unbuildnotes"), 'row');
        echo "</td></tr>
                ";
        // line 84
        echo "            </tbody>
            </table>
        </div>
         ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "planningcomments"), 'row');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job/tabs:planning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 84,  184 => 67,  161 => 60,  124 => 48,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 113,  256 => 112,  250 => 109,  231 => 99,  226 => 97,  180 => 69,  175 => 67,  165 => 63,  145 => 53,  100 => 38,  74 => 29,  323 => 177,  319 => 176,  311 => 171,  303 => 166,  293 => 159,  286 => 155,  279 => 122,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 87,  195 => 103,  188 => 68,  181 => 95,  167 => 61,  160 => 83,  146 => 75,  97 => 45,  90 => 43,  83 => 35,  76 => 30,  155 => 126,  153 => 56,  129 => 56,  37 => 7,  70 => 28,  53 => 23,  65 => 25,  139 => 56,  113 => 57,  110 => 43,  104 => 39,  58 => 23,  34 => 14,  190 => 73,  174 => 91,  150 => 52,  134 => 50,  126 => 33,  120 => 30,  84 => 33,  81 => 35,  23 => 3,  118 => 59,  96 => 36,  77 => 30,  52 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 124,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 139,  252 => 80,  247 => 78,  241 => 77,  229 => 98,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 53,  132 => 67,  128 => 49,  111 => 50,  107 => 36,  61 => 11,  38 => 16,  273 => 119,  269 => 118,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 101,  235 => 74,  230 => 123,  227 => 81,  224 => 71,  221 => 96,  219 => 95,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 59,  143 => 56,  135 => 49,  131 => 52,  119 => 46,  108 => 55,  102 => 39,  71 => 49,  67 => 15,  63 => 15,  59 => 18,  47 => 22,  28 => 5,  29 => 3,  35 => 5,  26 => 12,  43 => 22,  196 => 74,  183 => 82,  171 => 62,  166 => 38,  163 => 62,  158 => 59,  156 => 58,  151 => 56,  142 => 35,  138 => 54,  136 => 56,  123 => 45,  121 => 47,  117 => 44,  115 => 45,  105 => 47,  91 => 42,  69 => 30,  62 => 28,  49 => 22,  101 => 46,  94 => 43,  89 => 36,  85 => 40,  79 => 31,  75 => 32,  68 => 18,  56 => 25,  50 => 10,  87 => 23,  72 => 15,  66 => 5,  55 => 22,  41 => 21,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 34,  78 => 33,  46 => 23,  44 => 9,  40 => 17,  32 => 6,  27 => 5,  22 => 2,  209 => 111,  203 => 78,  199 => 67,  193 => 70,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 64,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 55,  144 => 118,  141 => 48,  133 => 53,  130 => 49,  125 => 55,  122 => 47,  116 => 41,  112 => 42,  109 => 34,  106 => 42,  103 => 32,  99 => 40,  95 => 28,  92 => 36,  86 => 33,  82 => 22,  80 => 34,  73 => 31,  64 => 25,  60 => 24,  57 => 11,  54 => 21,  51 => 20,  48 => 18,  45 => 20,  42 => 23,  39 => 13,  36 => 15,  33 => 10,  30 => 5,);
    }
}
