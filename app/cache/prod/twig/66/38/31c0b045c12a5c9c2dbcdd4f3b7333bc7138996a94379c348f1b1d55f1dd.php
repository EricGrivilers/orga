<?php

/* CaravaneOrganicBundle:Job/tabs:documents.html.twig */
class __TwigTemplate_663831c0b045c12a5c9c2dbcdd4f3b7333bc7138996a94379c348f1b1d55f1dd extends Twig_Template
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
        echo "<table class=\"table table-condensed table-bordered\">
                <thead>
                    <tr>
                        <th class=\"tiny\"></th>
                        <th class=\"tiny\">Filename</th>
                        <th class=\"tiny\">Title</th>
                        <th>Description</th>
                        <th class=\"tiny\" ></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "document"));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 13
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "path") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "filename"))), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "path") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "filename"))), "html", null, true);
            echo "\"  style=\"max-width:120px; maw-height:120px\"></a>
                            </td>
                            <td>
                               <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "path") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "filename"))), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "filename"), "html", null, true);
            echo "</a>
                            </td>
                             <td>
                                ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "title"), 'widget');
            echo "
                            </td>
                            <td>
                                ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "description"), 'widget');
            echo "
                            </td>
                            <td>
                                <a class=\"delete_document\" data-rel=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" data-type=\"job\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "id"), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </tbody>
        </table>
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "files"), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Job/tabs:documents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  323 => 177,  319 => 176,  311 => 171,  303 => 166,  293 => 159,  286 => 155,  279 => 151,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 44,  90 => 43,  83 => 39,  76 => 35,  155 => 126,  153 => 79,  129 => 116,  37 => 7,  70 => 29,  53 => 17,  65 => 13,  139 => 71,  113 => 57,  110 => 43,  104 => 51,  58 => 25,  34 => 11,  190 => 41,  174 => 91,  150 => 52,  134 => 34,  126 => 33,  120 => 30,  84 => 33,  81 => 40,  23 => 3,  118 => 59,  96 => 34,  77 => 48,  52 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 139,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 49,  111 => 46,  107 => 36,  61 => 11,  38 => 8,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 123,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 46,  131 => 52,  119 => 42,  108 => 55,  102 => 27,  71 => 49,  67 => 15,  63 => 15,  59 => 18,  47 => 22,  28 => 3,  29 => 3,  35 => 5,  26 => 12,  43 => 12,  196 => 90,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 63,  142 => 35,  138 => 54,  136 => 56,  123 => 47,  121 => 62,  117 => 44,  115 => 48,  105 => 45,  91 => 42,  69 => 31,  62 => 24,  49 => 19,  101 => 32,  94 => 43,  89 => 31,  85 => 40,  79 => 18,  75 => 23,  68 => 27,  56 => 21,  50 => 10,  87 => 23,  72 => 15,  66 => 5,  55 => 23,  41 => 15,  31 => 4,  24 => 2,  25 => 3,  21 => 2,  19 => 1,  98 => 53,  93 => 40,  88 => 41,  78 => 34,  46 => 14,  44 => 13,  40 => 15,  32 => 12,  27 => 7,  22 => 2,  209 => 111,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 56,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 118,  141 => 48,  133 => 55,  130 => 45,  125 => 63,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 16,  95 => 28,  92 => 32,  86 => 39,  82 => 22,  80 => 31,  73 => 35,  64 => 26,  60 => 22,  57 => 11,  54 => 21,  51 => 23,  48 => 18,  45 => 16,  42 => 23,  39 => 10,  36 => 13,  33 => 10,  30 => 5,);
    }
}
