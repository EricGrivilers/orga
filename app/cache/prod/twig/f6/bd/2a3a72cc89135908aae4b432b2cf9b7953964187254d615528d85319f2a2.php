<?php

/* FOSElasticaBundle:Collector:elastica.html.twig */
class __TwigTemplate_f6bd2a3a72cc89135908aae4b432b2cf9b7953964187254d615528d85319f2a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img alt=\"elastica\" src=\"data:image/png;base64,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\" />
        <span class=\"sf-toolbar-status\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount"), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Queries</b>
            <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query Time</b>
            <span>";
        // line 15
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        // line 22
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/foselastica/images/elastica.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Elastica</strong>
    <span class=\"count\">
        <span>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount"), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 31
    public function block_panel($context, array $blocks = array())
    {
        // line 32
        echo "    <h2>Queries</h2>

    ";
        // line 34
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "queries"))) {
            // line 35
            echo "        <p>
            <em>Query logging is disabled.</em>
        <p>
    ";
        } elseif ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount"))) {
            // line 39
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 43
            echo "        <ul class=\"alt\">
            ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "queries"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 45
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index")), "html", null, true);
                echo "\">
                    <strong>Path</strong>: ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : null), "path"), "html", null, true);
                echo "<br />
                    <strong>Method</strong>: ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : null), "method"), "html", null, true);
                echo "
                    <div>
                        <code>";
                // line 49
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["query"]) ? $context["query"] : null), "data")), "html", null, true);
                echo "</code>
                    </div>
                    <small>
                        <strong>Time</strong>: ";
                // line 52
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), "executionMS") * 1000)), "html", null, true);
                echo " ms
                    </small>
                </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSElasticaBundle:Collector:elastica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 47,  113 => 44,  110 => 43,  104 => 39,  58 => 15,  34 => 7,  190 => 41,  174 => 39,  150 => 52,  134 => 34,  126 => 33,  120 => 30,  84 => 13,  81 => 26,  23 => 4,  118 => 30,  96 => 34,  77 => 21,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 60,  38 => 8,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 46,  131 => 52,  119 => 42,  108 => 20,  102 => 27,  71 => 19,  67 => 15,  63 => 15,  59 => 18,  47 => 9,  28 => 3,  29 => 6,  35 => 8,  26 => 12,  43 => 12,  196 => 90,  183 => 82,  171 => 61,  166 => 38,  163 => 62,  158 => 37,  156 => 66,  151 => 63,  142 => 35,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 29,  105 => 19,  91 => 27,  69 => 21,  62 => 23,  49 => 19,  101 => 32,  94 => 28,  89 => 31,  85 => 25,  79 => 18,  75 => 23,  68 => 14,  56 => 9,  50 => 10,  87 => 23,  72 => 22,  66 => 22,  55 => 15,  41 => 9,  31 => 4,  24 => 7,  25 => 3,  21 => 2,  19 => 2,  98 => 35,  93 => 28,  88 => 6,  78 => 11,  46 => 7,  44 => 8,  40 => 7,  32 => 4,  27 => 5,  22 => 2,  209 => 59,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 40,  176 => 64,  173 => 65,  168 => 56,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 45,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 16,  95 => 28,  92 => 32,  86 => 28,  82 => 22,  80 => 19,  73 => 20,  64 => 18,  60 => 13,  57 => 11,  54 => 16,  51 => 11,  48 => 12,  45 => 11,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
