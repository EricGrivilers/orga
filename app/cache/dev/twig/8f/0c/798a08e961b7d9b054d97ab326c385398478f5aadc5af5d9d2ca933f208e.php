<?php

/* ::javascripts.body.html.twig */
class __TwigTemplate_8f0c798a08e961b7d9b054d97ab326c385398478f5aadc5af5d9d2ca933f208e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bodyscripts' => array($this, 'block_bodyscripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('bodyscripts', $context, $blocks);
    }

    public function block_bodyscripts($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c647b61_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-affix_1.js");
            // line 18
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-transition_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-modal_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-dropdown_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-scrollspy_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-tab_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-tooltip_7.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-popover_8.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-alert_9.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-button_10.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-collapse_11.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-carousel_12.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c647b61_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body_bootstrap-typeahead_13.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "c647b61"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c647b61") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-body.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "
     ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "69371bd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_69371bd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-calendar_jquery.fullcalendar.min_1.js");
            // line 25
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "69371bd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_69371bd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-calendar_calendar-settings_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "69371bd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_69371bd") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-calendar.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "

    ";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cab8f91_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cab8f91_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-ui_jquery-ui-1.10.3.custom.min_1.js");
            // line 38
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "cab8f91_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cab8f91_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-ui_date_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "cab8f91_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cab8f91_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-ui_daterangepicker_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "cab8f91_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cab8f91_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-ui_bootstrap-datepicker_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "cab8f91_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cab8f91_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-ui_bootstrap-datetimepicker_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "cab8f91_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cab8f91_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-ui_main_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "cab8f91"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cab8f91") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-ui.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "
    ";
        // line 41
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bee6325_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee6325_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-bijui_jquery.ui.widget_1.js");
            // line 48
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "bee6325_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee6325_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-bijui_jquery.iframe-transport_2.js");
            // line 48
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "bee6325_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee6325_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-bijui_jquery.fileupload_3.js");
            // line 48
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "bee6325_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee6325_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-bijui_main_4.js");
            // line 48
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "bee6325"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee6325") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/organic-bijui.js");
            // line 48
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 52
        echo "


";
    }

    public function getTemplateName()
    {
        return "::javascripts.body.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 52,  247 => 49,  244 => 48,  236 => 49,  233 => 48,  226 => 49,  223 => 48,  216 => 49,  213 => 48,  206 => 49,  203 => 48,  199 => 41,  196 => 40,  152 => 38,  148 => 29,  144 => 27,  124 => 25,  117 => 20,  53 => 11,  48 => 10,  34 => 8,  26 => 2,  20 => 1,  209 => 59,  190 => 41,  182 => 40,  174 => 39,  166 => 38,  158 => 37,  150 => 36,  142 => 35,  134 => 34,  126 => 33,  120 => 21,  105 => 19,  99 => 16,  89 => 15,  84 => 13,  81 => 12,  78 => 11,  72 => 5,  66 => 62,  64 => 61,  61 => 60,  50 => 52,  47 => 19,  45 => 11,  38 => 8,  35 => 7,  29 => 3,  23 => 2,  118 => 30,  115 => 29,  108 => 20,  106 => 29,  102 => 27,  96 => 26,  87 => 23,  82 => 22,  77 => 21,  69 => 18,  63 => 15,  59 => 59,  54 => 13,  52 => 12,  44 => 6,  41 => 5,  36 => 4,  73 => 20,  67 => 20,  60 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  33 => 17,  31 => 18,  28 => 5,);
    }
}
