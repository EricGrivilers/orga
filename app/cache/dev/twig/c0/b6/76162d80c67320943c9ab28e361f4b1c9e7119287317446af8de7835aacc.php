<?php

/* CaravaneOrganicBundle:Client:tabs/client.html.twig */
class __TwigTemplate_c0b676162d80c67320943c9ab28e361f4b1c9e7119287317446af8de7835aacc extends Twig_Template
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
            <div class=\"span4\">
                <div>
                    <label>Reference</label> <label><b>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
        echo "</b></label>
                </div>

                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "origin"), 'row');
        echo "
            </div>

             <div class=\"span4\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "language"), 'row');
        echo "
                <br/>
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userid"), 'row');
        echo "
            </div>

             <div class=\"span4\">
                <a class=\"btn btn-inverse\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_new", array("clientId" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">New offre</a>
            </div>
        </div>
    </div>

     <div class=\"well\">

          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clienttype"), 'row');
        echo "

        <div class=\"row-fluid\" id=\"cieonly\">
            <div class=\"span4\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name"), 'row');
        echo "

            </div>
             <div class=\"span4\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vat"), 'row');
        echo "

            </div>
             <div class=\"span4\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cietype"), 'row');
        echo "

            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span4\">
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clienttitle"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastname"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstname"), 'row');
        echo "

            </div>
        </div>
    </div>

     <div class=\"well\">
        <div class=\"row-fluid\">
            <div class=\"span4\">
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "address"), 'row');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'row');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'row');
        echo "
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "number"), 'row');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "zip"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'row');
        echo "
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mobile"), 'row');
        echo "
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'row');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone2"), 'row');
        echo "
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'row');
        echo "

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Client:tabs/client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 72,  154 => 71,  146 => 69,  142 => 68,  136 => 65,  132 => 64,  126 => 61,  122 => 60,  118 => 59,  114 => 58,  102 => 49,  96 => 46,  90 => 43,  81 => 37,  74 => 33,  67 => 29,  60 => 25,  50 => 18,  31 => 8,  25 => 5,  19 => 1,  153 => 8,  150 => 70,  139 => 68,  127 => 59,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  77 => 27,  72 => 24,  61 => 20,  56 => 19,  54 => 18,  48 => 15,  45 => 14,  43 => 14,  38 => 12,  36 => 7,  32 => 5,  29 => 4,);
    }
}
