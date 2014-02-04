<?php

/* CaravaneOrganicBundle:Client:edit.html.twig */
class __TwigTemplate_b6a03f3e3ac60498d553b420aedc30a6070fac74d2f1c1388919576f7fb1e99b extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"row-fluid\">
";
        // line 7
        $this->displayBlock('form_header', $context, $blocks);
        // line 10
        echo "


";
        // line 13
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors')) {
            // line 14
            echo "    <div class=\"alert alert-error\">
        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
            echo "
    </div>
";
        }
        // line 18
        if ((isset($context["customErrors"]) ? $context["customErrors"] : $this->getContext($context, "customErrors"))) {
            // line 19
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customErrors"]) ? $context["customErrors"] : $this->getContext($context, "customErrors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "        <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 24
        echo "    <div class=\"row-fluid\">
        <div class=\"actions\">
            <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client"), "html", null, true);
        echo "\" class=\"btn\">
                    Back to the list
            </a>
        </div>
    </div>


<div>
    <ul class=\"nav nav-tabs\">
         <li class=\"active\"><a href=\"#tab_client\" data-toggle=\"tab\">Client</a></li>
        <li><a href=\"#tab_tents\" data-toggle=\"tab\">Tents</a></li>
        <li><a href=\"#tab_offres\" data-toggle=\"tab\">Offres</a></li>
        <li><a href=\"#tab_jobs\" data-toggle=\"tab\">Jobs</a></li>
        <li><a href=\"#tab_invoices\" data-toggle=\"tab\">Invoices</a></li>
    </ul>
</div>
<div class=\"tab-content\">
      <div class=\"tab-pane active\" id=\"tab_client\"> ";
        // line 44
        $this->env->loadTemplate("CaravaneOrganicBundle:Client:tabs/client.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_tents\"> ";
        // line 45
        $this->env->loadTemplate("CaravaneOrganicBundle:Client:tabs/tents.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_offres\">   ";
        // line 46
        $this->env->loadTemplate("CaravaneOrganicBundle:Client:tabs/offres.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_jobs\"> ";
        // line 47
        $this->env->loadTemplate("CaravaneOrganicBundle:Client:tabs/jobs.html.twig")->display($context);
        echo "</div>
      <div class=\"tab-pane\" id=\"tab_invoices\">";
        // line 48
        $this->env->loadTemplate("CaravaneOrganicBundle:Client:tabs/invoices.html.twig")->display($context);
        echo "</div>
</div>






    <div class=\"row-fluid\">
        <div class=\"actions\">
            <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
            <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client"), "html", null, true);
        echo "\" class=\"btn\">
                    Back to the list
            </a>
        </div>
    </div>




    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "

</form>


</div>
";
    }

    // line 7
    public function block_form_header($context, array $blocks = array())
    {
        // line 8
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo " data-entity='client'  novalidate >
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 8,  150 => 7,  139 => 68,  127 => 59,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  77 => 27,  72 => 24,  61 => 20,  56 => 19,  54 => 18,  48 => 15,  45 => 14,  43 => 13,  38 => 10,  36 => 7,  32 => 5,  29 => 4,);
    }
}
