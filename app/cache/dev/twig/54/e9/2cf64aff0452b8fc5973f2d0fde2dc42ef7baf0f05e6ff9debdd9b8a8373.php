<?php

/* ::javascripts.head.html.twig */
class __TwigTemplate_54e92cf64aff0452b8fc5973f2d0fde2dc42ef7baf0f05e6ff9debdd9b8a8373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headscripts' => array($this, 'block_headscripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('headscripts', $context, $blocks);
    }

    public function block_headscripts($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d1eb5a8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d1eb5a8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-head_jquery-1.9.1_1.js");
            // line 8
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "d1eb5a8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d1eb5a8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-head.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::javascripts.head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  48 => 10,  34 => 8,  26 => 2,  20 => 1,  209 => 59,  190 => 41,  182 => 40,  174 => 39,  166 => 38,  158 => 37,  150 => 36,  142 => 35,  134 => 34,  126 => 33,  120 => 30,  105 => 19,  99 => 16,  89 => 15,  84 => 13,  81 => 12,  78 => 11,  72 => 5,  66 => 62,  64 => 61,  61 => 60,  50 => 52,  47 => 19,  45 => 11,  38 => 8,  35 => 7,  29 => 3,  23 => 2,  118 => 30,  115 => 29,  108 => 20,  106 => 29,  102 => 27,  96 => 26,  87 => 23,  82 => 22,  77 => 21,  69 => 18,  63 => 15,  59 => 59,  54 => 13,  52 => 12,  44 => 6,  41 => 5,  36 => 4,  73 => 20,  67 => 20,  60 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  33 => 17,  31 => 3,  28 => 5,);
    }
}
