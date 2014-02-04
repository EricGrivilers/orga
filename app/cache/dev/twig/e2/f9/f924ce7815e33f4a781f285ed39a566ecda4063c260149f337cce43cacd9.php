<?php

/* CaravaneUIBundle:Form:fields.html.twig */
class __TwigTemplate_e2f9f924ce7815e33f4a781f285ed39a566ecda4063c260149f337cce43cacd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('form_errors', $context, $blocks);
        // line 18
        echo "

";
        // line 20
        $this->displayBlock('form_row', $context, $blocks);
        // line 33
        echo "

";
        // line 35
        $this->displayBlock('form_label', $context, $blocks);
    }

    // line 3
    public function block_form_errors($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 6
            echo "        <div class=\"error_list alert alert-error \">
            ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                <li>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
                // line 12
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
        ";
        }
        // line 16
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_form_row($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field ";
        // line 23
        if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
            echo " error ";
        }
        echo "\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            
        </div>
        <div class=\"symfony-form-errors\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
    </div>
";
    }

    // line 35
    public function block_form_label($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 37
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 38
            echo "    ";
        }
        // line 39
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 41
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 42
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 44
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "CaravaneUIBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  132 => 42,  130 => 41,  126 => 40,  121 => 39,  118 => 38,  115 => 37,  109 => 35,  93 => 24,  87 => 23,  83 => 22,  77 => 20,  68 => 14,  61 => 12,  58 => 8,  51 => 6,  45 => 4,  34 => 33,  32 => 20,  141 => 50,  129 => 46,  112 => 36,  108 => 43,  104 => 42,  101 => 29,  98 => 40,  88 => 32,  80 => 21,  78 => 29,  59 => 13,  38 => 35,  57 => 11,  44 => 8,  86 => 24,  73 => 18,  69 => 17,  66 => 16,  63 => 15,  36 => 3,  30 => 1,  26 => 3,  23 => 39,  21 => 1,  81 => 26,  72 => 16,  52 => 9,  41 => 8,  39 => 7,  37 => 6,  35 => 3,  62 => 17,  54 => 7,  48 => 5,  42 => 3,  25 => 3,  20 => 1,  33 => 2,  22 => 1,  19 => 2,  31 => 2,  28 => 18,);
    }
}
