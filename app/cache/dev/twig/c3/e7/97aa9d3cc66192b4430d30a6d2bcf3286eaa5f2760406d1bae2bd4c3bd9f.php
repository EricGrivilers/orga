<?php

/* CaravaneCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_c3e797aa9d3cc66192b4430d30a6d2bcf3286eaa5f2760406d1bae2bd4c3bd9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = '";
        // line 8
        echo $this->env->getExtension('trim_asset_version')->trimAssetVersion($this->env->getExtension('assets')->getAssetUrl("bundles/caravaneckeditor/"));
        echo "';
    </script>

    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/caravaneckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        var instance = CKEDITOR.instances['";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "'];
        if (instance) {
            //instance.destroy(true);
        }

        CKEDITOR.replace(\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        if ((!twig_test_empty((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config"))))) {
            echo ", ";
            echo twig_jsonencode_filter((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")));
        }
        echo ");
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CaravaneCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  54 => 14,  48 => 11,  42 => 8,  25 => 3,  20 => 1,  33 => 5,  22 => 2,  19 => 2,  31 => 4,  28 => 4,);
    }
}
