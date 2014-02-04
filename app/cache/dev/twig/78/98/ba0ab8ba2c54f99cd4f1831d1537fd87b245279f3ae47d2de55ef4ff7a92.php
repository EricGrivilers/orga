<?php

/* CaravaneOrganicBundle:Default:pagination.html.twig */
class __TwigTemplate_7898ba0ab8ba2c54f99cd4f1831d1537fd87b245279f3ae47d2de55ef4ff7a92 extends Twig_Template
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
        echo "<div class=\"row-fluid\">
        <div class=\"center\">
              <ul class=\"nav nav-pills offset\">
                  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "10", 1 => "25", 2 => "50", 3 => "100", 4 => "200"));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 5
            echo "                                        <li ";
            if (((isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")) == (isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")))) {
                echo "class=\"active\" ";
            }
            echo " >
                                              <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => 1, "offset" => (isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")), "html", null, true);
            echo "</a>
                                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                </ul>
            </div>
</div>

<div class=\"pagination\">
\t<input type='hidden' id='CaravaneUiPaginationType' value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" />
\t<input type='hidden' id='CaravaneUiPaginationOb' value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "html", null, true);
        echo "\" />
\t<input type='hidden' id='CaravaneUiPaginationPage' value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "\" />
  <input type='hidden' id='CaravaneUiPaginationOffset' value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")), "html", null, true);
        echo "\" />
\t<input type='hidden' id='CaravaneUiPaginationRoute' value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" />

";
        // line 20
        if (((isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages")) > 1)) {
            // line 21
            echo "  <ul>
    <li ";
            // line 22
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) <= 1)) {
                echo " class=\"disabled\" ";
            }
            echo " ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
            echo "\" >Prev</a></li>

    ";
            // line 24
            if (((isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages")) > 10)) {
                // line 25
                echo "      ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 6)) {
                    // line 26
                    echo "        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 7));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 27
                        echo "          <li ";
                        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))) {
                            echo " class=\"active\" ";
                        }
                        echo " ><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                        echo "</a></li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "         <li class=\"disabled\"><a >...</a></li>
      ";
                } elseif (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > ((isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages")) - 7))) {
                    // line 31
                    echo "         <li class=\"disabled\"><a >...</a></li>
         ";
                    // line 32
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages")) - 7), (isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 33
                        echo "            <li ";
                        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))) {
                            echo " class=\"active\" ";
                        }
                        echo " ><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                        echo "</a></li>
         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "      ";
                } else {
                    // line 36
                    echo "        <li class=\"disabled\"><a >...</a></li>
        ";
                    // line 37
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 3), ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 3)));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 38
                        echo "             <li ";
                        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))) {
                            echo " class=\"active\" ";
                        }
                        echo " ><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                        echo "</a></li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "        <li class=\"disabled\"><a >...</a></li>
      ";
                }
                // line 42
                echo "    ";
            } else {
                // line 43
                echo "      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages"))));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 44
                    echo "        <li ";
                    if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))) {
                        echo " class=\"active\" ";
                    }
                    echo " ><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                    echo "</a></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "    ";
            }
            // line 47
            echo "
    <li ";
            // line 48
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) >= (isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages")))) {
                echo " class=\"disabled\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "ob" => (isset($context["ob"]) ? $context["ob"] : $this->getContext($context, "ob")), "page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")))), "html", null, true);
            echo "\">Next</a></li>
  </ul>
   <br/>

            ";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages")), "html", null, true);
            echo "
";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Default:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 54,  208 => 52,  197 => 48,  194 => 47,  191 => 46,  176 => 44,  171 => 43,  168 => 42,  164 => 40,  149 => 38,  145 => 37,  139 => 35,  124 => 33,  120 => 32,  117 => 31,  113 => 29,  98 => 27,  93 => 26,  90 => 25,  88 => 24,  79 => 22,  76 => 21,  74 => 20,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  46 => 9,  35 => 6,  24 => 4,  19 => 1,  221 => 123,  219 => 122,  210 => 115,  198 => 109,  190 => 104,  187 => 103,  182 => 85,  178 => 84,  172 => 83,  156 => 81,  151 => 79,  148 => 78,  142 => 36,  137 => 73,  131 => 72,  127 => 70,  123 => 69,  116 => 64,  103 => 37,  83 => 18,  72 => 14,  64 => 13,  56 => 12,  48 => 11,  43 => 9,  37 => 8,  31 => 4,  28 => 5,);
    }
}
