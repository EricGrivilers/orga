<?php

/* CaravaneOrganicBundle:Tent:edit.html.twig */
class __TwigTemplate_ac549af40a8a21e5437a037ab1d891d7a2aaa532c32e437ecdf86d43d0643f81 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row-fluid\">
";
        // line 5
        $this->displayBlock('form_header', $context, $blocks);
        // line 8
        echo "
        <input type='hidden' name='clientid' id=\"clientid\"  value=\"";
        // line 9
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ownerid")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ownerid"), "id"), "html", null, true);
        }
        echo "\"/>
         <div class=\"row-fluid\">
            <div class=\"actions\">
                <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent"), "html", null, true);
        echo "\" class=\"btn\">
                        Back to the list
                </a>
            </div>
        </div>
<div class=\"well\">
    <div class=\"row-fluid\">
        <div class=\"span4\">
             ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "reference"), 'row');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "etat"), 'row');
        echo "
        </div>
        <div class=\"span4\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "productCategory"), 'row');
        echo "

            <div class=\"input-append dropdown combobox\">
        <input class=\"span12\" type=\"text\" name=\"category\" id=\"category\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "productCategory"), "html", null, true);
        echo "\"><button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"caret\"></i></button>
        <ul class=\"dropdown-menu\">
                        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "                        <li><a href=\"#\">";
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </ul>
    </div>
        </div>
        <div class=\"span4\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "name"), 'row');
        echo "
        </div>
    </div>
</div>
<div class=\"row-fluid\">
    <div class=\"span4\">
            <div class=\"well\">

                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "name"), 'row');
        echo "

                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "comments"), 'row');
        echo "
            </div>
        </div>
        <div class=\"span4\">
            <div class=\"well\">
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "length"), 'row');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "width"), 'row');
        echo "
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "height"), 'row');
        echo "
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "weight"), 'row');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "m2"), 'row');
        echo "
            </div>
        </div>
        <div class=\"span4\">
             <div class=\"well\">
                     ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "kit"), 'row');
        echo "
                     ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "color"), 'row');
        echo "
                     ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "piquets"), 'row');
        echo "

            </div>
        </div>
    </div>
        <div class=\"row-fluid\">
    <h4>Owner</h4>
    <div class=\"well\">
        <div class=\"row-fluid\" >
            <div class=\"span4\">
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "clienttype"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                &nbsp;
            </div>
             <div class=\"span4\">
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "language"), 'row');
        echo "
            </div>
         </div>
        <div class=\"row-fluid\" id=\"cieonly\" ";
        // line 82
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ownerid")) {
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ownerid"), "clienttype") != "cie")) {
                echo " style='display:none' ";
            }
            echo " ";
        }
        echo ">
            <div class=\"span4\">
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "name"), 'row');
        echo "

            </div>
             <div class=\"span4\">
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "vat"), 'row');
        echo "

            </div>
             <div class=\"span4\">
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "cietype"), 'row');
        echo "

            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span4\">
                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "clienttitle"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "lastname"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "firstname"), 'row');
        echo "

            </div>
        </div>
    </div>
    <div class=\"well\">
        <div class=\"row-fluid\">
            <div class=\"span4\">
                ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "address"), 'row');
        echo "
                ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "city"), 'row');
        echo "
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "country"), 'row');
        echo "
                ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "url"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "number"), 'row');
        echo "
                ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "zip"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "email"), 'row');
        echo "
                ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "mobile"), 'row');
        echo "
                ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "phone"), 'row');
        echo "
                ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "phone2"), 'row');
        echo "
                ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ownerid"), "fax"), 'row');
        echo "

            </div>
        </div>
</div>
<div class=\"row-fluid\">
        <h4>Documents</h4>
        <table class=\"table table-condensed table-bordered\">
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
        // line 144
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "document"));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 145
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "path") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "filename"))), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "path") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "filename"))), "html", null, true);
            echo "\"  style=\"max-width:120px; maw-height:120px\"></a>
                            </td>
                            <td>
                                <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "path") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "filename"))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "filename"), "html", null, true);
            echo "</a>
                            </td>
                             <td>
                                ";
            // line 153
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "title"), 'widget');
            echo "
                            </td>
                            <td>
                                ";
            // line 156
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "description"), 'widget');
            echo "
                            </td>
                            <td>
                                <a class=\"delete_document\" data-rel=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" data-type=\"tent\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "vars"), "value"), "id"), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "            </tbody>
        </table>
        ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "files"), 'row');
        echo "
    </div>

 ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
        <div class=\"row-fluid\">
            <div class=\"actions\">
                <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
                <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent"), "html", null, true);
        echo "\" class=\"btn\">
                        Back to the list
                </a>
            </div>
        </div>
    </form>
</div>

<div class=\"row-fluid\">
     <h4>Jobs</h4>
     <table class=\"table table-condensed table-bordered table-striped\">
            <thead>
                <tr>
                    <th>Reference</th>
                    <th>Price VAT Exc.</th>
                    <th>Build</th>
                    <th>Take off</th>
                    <th>Offre</th>
                    <th>Invoice</th>
                </tr>
            </thead>
            ";
        // line 193
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobs"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 194
            echo "                ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "tentid")) {
                // line 195
                echo "                <tr>
                    <td><a href=\"";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), "reference"), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 197
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), "price"), 2, ",", " "), "html", null, true);
                echo "</td>
                    <td>";
                // line 198
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), "startBuild"), "d/m/Y H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 199
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), "endBuild"), "d/m/Y H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), "offreid"), "html", null, true);
                echo "</td>
                    <td>";
                // line 201
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "jobid"), "invoiceid"));
                foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
                    echo "<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "reference"), "html", null, true);
                    echo "</a></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
                </tr>
                ";
            }
            // line 204
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "        </table>
</div>
 <div class=\"row-fluid\">
        <h4>Offres</h4>
        <table class=\"table table-condensed table-bordered table-striped\">
            <thead>
                <tr>
                    <th>Reference</th>
                    <th>Price VAT Exc.</th>
                    <th>Build</th>
                    <th>Take off</th>
                    <th>Status</th>
                </tr>
            </thead>
            ";
        // line 219
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offres"));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 220
            echo "                ";
            if ($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "tentid")) {
                // line 221
                echo "                <tr>
                    <td><a href=\"";
                // line 222
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "reference"), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 223
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "price"), 2, ",", " "), "html", null, true);
                echo "</td>
                    <td>";
                // line 224
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "startBuild"), "d/m/Y H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 225
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "endBuild"), "d/m/Y H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 226
                if ($this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "jobid")) {
                    echo "Job: <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "jobid"), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "jobid"), "html", null, true);
                    echo "</a> ";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "offreid"), "status"), "html", null, true);
                    echo " ";
                }
                echo "</td>

                </tr>
                ";
            }
            // line 230
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "        </table>
    </div>


";
    }

    // line 5
    public function block_form_header($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tent_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo " novalidate >
 ";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Tent:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 5,  516 => 231,  510 => 230,  494 => 226,  490 => 225,  476 => 222,  473 => 221,  419 => 199,  415 => 198,  405 => 196,  395 => 193,  371 => 172,  354 => 163,  253 => 115,  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 224,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 75,  218 => 98,  186 => 60,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  456 => 211,  450 => 205,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  363 => 165,  320 => 138,  310 => 145,  257 => 105,  213 => 83,  200 => 65,  316 => 305,  304 => 128,  148 => 61,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  399 => 194,  388 => 175,  370 => 132,  359 => 164,  348 => 8,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 6,  504 => 237,  493 => 234,  488 => 224,  477 => 187,  466 => 219,  460 => 220,  452 => 219,  429 => 199,  425 => 167,  421 => 166,  417 => 151,  403 => 191,  397 => 188,  385 => 136,  373 => 169,  367 => 173,  338 => 156,  313 => 304,  302 => 136,  282 => 87,  205 => 93,  192 => 85,  185 => 82,  482 => 223,  478 => 221,  475 => 171,  470 => 220,  468 => 171,  465 => 170,  462 => 212,  454 => 163,  448 => 161,  446 => 160,  428 => 168,  424 => 155,  420 => 154,  401 => 147,  391 => 148,  389 => 186,  386 => 143,  383 => 173,  380 => 141,  377 => 170,  375 => 139,  353 => 125,  350 => 162,  347 => 123,  345 => 122,  340 => 120,  330 => 153,  326 => 114,  306 => 144,  300 => 111,  201 => 92,  194 => 65,  114 => 42,  299 => 155,  289 => 158,  266 => 119,  249 => 114,  242 => 79,  228 => 124,  411 => 197,  408 => 218,  351 => 9,  343 => 173,  331 => 146,  292 => 90,  280 => 94,  274 => 146,  263 => 119,  236 => 114,  215 => 69,  211 => 69,  207 => 98,  178 => 79,  152 => 62,  333 => 135,  318 => 112,  308 => 109,  296 => 125,  290 => 104,  287 => 148,  281 => 125,  276 => 140,  270 => 138,  267 => 137,  259 => 118,  255 => 82,  248 => 103,  245 => 113,  222 => 88,  212 => 68,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 166,  364 => 168,  361 => 170,  358 => 165,  352 => 118,  342 => 159,  336 => 156,  328 => 117,  324 => 97,  321 => 114,  317 => 159,  307 => 114,  297 => 106,  288 => 122,  275 => 107,  271 => 96,  261 => 117,  233 => 77,  225 => 76,  210 => 115,  198 => 66,  191 => 71,  170 => 59,  197 => 84,  184 => 82,  161 => 62,  124 => 52,  137 => 60,  301 => 95,  291 => 126,  277 => 124,  262 => 84,  256 => 92,  250 => 84,  231 => 77,  226 => 72,  180 => 59,  175 => 67,  165 => 63,  145 => 55,  100 => 37,  74 => 31,  323 => 128,  319 => 112,  311 => 157,  303 => 112,  293 => 105,  286 => 89,  279 => 151,  272 => 106,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 88,  195 => 84,  188 => 99,  181 => 68,  167 => 75,  160 => 50,  146 => 75,  97 => 47,  90 => 43,  83 => 39,  76 => 28,  155 => 56,  153 => 79,  129 => 57,  37 => 8,  70 => 25,  53 => 16,  65 => 38,  139 => 71,  113 => 48,  110 => 38,  104 => 51,  58 => 18,  34 => 11,  190 => 104,  174 => 58,  150 => 7,  134 => 57,  126 => 56,  120 => 73,  84 => 20,  81 => 30,  23 => 2,  118 => 59,  96 => 37,  77 => 29,  52 => 8,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 204,  440 => 206,  437 => 158,  435 => 170,  430 => 157,  427 => 201,  423 => 200,  413 => 195,  409 => 146,  407 => 192,  402 => 195,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 150,  314 => 147,  312 => 172,  309 => 169,  305 => 97,  298 => 94,  294 => 98,  285 => 126,  283 => 147,  278 => 86,  268 => 95,  264 => 85,  258 => 138,  252 => 104,  247 => 101,  241 => 112,  229 => 102,  220 => 119,  214 => 97,  177 => 69,  169 => 73,  140 => 56,  132 => 54,  128 => 53,  111 => 45,  107 => 24,  61 => 10,  38 => 10,  273 => 123,  269 => 122,  254 => 105,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 99,  230 => 104,  227 => 75,  224 => 101,  221 => 123,  219 => 122,  217 => 85,  208 => 67,  204 => 66,  179 => 96,  159 => 57,  143 => 64,  135 => 58,  131 => 58,  119 => 45,  108 => 55,  102 => 36,  71 => 30,  67 => 25,  63 => 13,  59 => 23,  47 => 11,  28 => 3,  29 => 3,  35 => 5,  26 => 3,  43 => 18,  196 => 90,  183 => 97,  171 => 91,  166 => 62,  163 => 86,  158 => 72,  156 => 63,  151 => 64,  142 => 75,  138 => 48,  136 => 55,  123 => 69,  121 => 47,  117 => 28,  115 => 51,  105 => 47,  91 => 44,  69 => 31,  62 => 27,  49 => 13,  101 => 46,  94 => 33,  89 => 22,  85 => 31,  79 => 21,  75 => 24,  68 => 18,  56 => 22,  50 => 15,  87 => 21,  72 => 27,  66 => 25,  55 => 23,  41 => 15,  31 => 4,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 37,  88 => 31,  78 => 32,  46 => 23,  44 => 14,  40 => 9,  32 => 4,  27 => 7,  22 => 2,  209 => 92,  203 => 69,  199 => 73,  193 => 61,  189 => 60,  187 => 103,  182 => 77,  176 => 76,  173 => 65,  168 => 66,  164 => 51,  162 => 54,  154 => 46,  149 => 63,  147 => 65,  144 => 46,  141 => 58,  133 => 56,  130 => 49,  125 => 63,  122 => 55,  116 => 47,  112 => 51,  109 => 48,  106 => 37,  103 => 39,  99 => 39,  95 => 24,  92 => 38,  86 => 30,  82 => 27,  80 => 27,  73 => 29,  64 => 22,  60 => 21,  57 => 36,  54 => 9,  51 => 15,  48 => 19,  45 => 22,  42 => 15,  39 => 10,  36 => 7,  33 => 13,  30 => 4,);
    }
}
