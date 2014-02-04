<?php

/* CaravaneBIJUploadBundle:Form:fields.html.twig */
class __TwigTemplate_a1f5c2557ee6fb9e4ab34456dfc0eeddc86be3575f4569609b942d63e421fec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'filesupload_widget' => array($this, 'block_filesupload_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('filesupload_widget', $context, $blocks);
        // line 23
        echo "

";
    }

    // line 1
    public function block_filesupload_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"controls\" >
        <div >
            ";
        // line 5
        echo "            ";
        // line 6
        echo "            ";
        // line 7
        echo "            ";
        // line 8
        echo "                <input type=\"file\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id"), "html", null, true);
        echo "_upload\" name=\"";
        echo "files[]\" multiple=\"multiple\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Caravane_bij_ulpload"), "html", null, true);
        echo "\"  data-folder=\"files\" style=\"position:absolute;left:-9000px\"  class=\"multipleupload\"  data-var=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "full_name"), "html", null, true);
        echo "\"/>

                <a onclick=\"\$('#";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id"), "html", null, true);
        echo "_upload').click()\"  class=\"btn btn-inverse\"><i class='icon icon-white icon-upload'></i> Add files</a>
        </div>

        <div class=\"progress progress-striped active\">
                <div class=\"bar bar-danger\" style=\"width: 0%;\"></div>
        </div>
        <div class=\"caravane_bij_upload_files_list\" >
                 ";
        // line 17
        echo $this->getAttribute($this, "uploadeFilesRow", array(), "method");
        echo "
        </div>

    </div>

";
    }

    // line 25
    public function getuploadeFilesRow()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    <div class=\"uploaded_files_row\" style=\"display:none\">
        <div class=\"row-fluid\">
            <div class=\"span3 uploaded_file_img\">
                <img />-
            </div>
            <div class=\"span6 uploaded_file_name\">
                -
            </div>
            <div class=\"span3 uploaded_file_img\">
                Complete
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "CaravaneBIJUploadBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  72 => 25,  52 => 10,  41 => 8,  39 => 7,  37 => 6,  35 => 5,  62 => 17,  54 => 14,  48 => 11,  42 => 8,  25 => 3,  20 => 1,  33 => 5,  22 => 23,  19 => 2,  31 => 2,  28 => 1,);
    }
}
