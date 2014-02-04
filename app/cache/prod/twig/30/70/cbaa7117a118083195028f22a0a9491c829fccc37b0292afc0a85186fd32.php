<?php

/* CaravaneOrganicBundle:Invoice:edit.html.twig */
class __TwigTemplate_3070cbaa7117a118083195028f22a0a9491c829fccc37b0292afc0a85186fd32 extends Twig_Template
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
        echo "
<div class=\"row-fluid\">

";
        // line 7
        $this->displayBlock('form_header', $context, $blocks);
        // line 11
        echo "<input type='hidden' name='clientid' id=\"clientid\"  value=\"";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "id"), "html", null, true);
            echo " ";
        }
        echo "\"/>


";
        // line 14
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors')) {
            // line 15
            echo "    <div class=\"alert alert-error\">
        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
            echo "
    </div>
";
        }
        // line 19
        if ((isset($context["customErrors"]) ? $context["customErrors"] : null)) {
            // line 20
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customErrors"]) ? $context["customErrors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 21
                echo "        <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        echo "

    <div class=\"row-fluid\">
        <div class=\"actions\">
            <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice"), "html", null, true);
        echo "\" class=\"btn\">
                    Back to the list
            </a>

             ";
        // line 36
        echo "
                ";
        // line 37
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id")) {
            // line 38
            echo "            <a class=\"pull-right btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "force" => true, "_locale" => "all", "type" => "inv")), "html", null, true);
            echo "\"><img src=\"/images/icons/pdf.png\"> Rebuild pdf</a>
            ";
        }
        // line 40
        echo "
        </div>
    </div>
    <div class=\"well\">
        <div class=\"row-fluid\">
            <div class=\"span3\">
                <div>
                    <label>Reference</label> <label><b>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "</b></label>
                </div>
                <div>
                    <label>Date</label> <label><b>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "insertDate"), "d/m/Y"), "html", null, true);
        echo "</b></label>
                </div>
                ";
        // line 52
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid")) {
            // line 53
            echo "                <div>
                    <label>Job</label> <label><b>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "reference"), "html", null, true);
            echo "</b></label>
                </div>
               ";
        }
        // line 57
        echo "            </div>
            <div class=\"span3\">
               ";
        // line 60
        echo "               ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "offretype"), 'row');
        echo "
            </div>
            <div class=\"span3\">
               ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "status"), 'row');
        echo "

                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "paymentdate"), 'row');
        echo "
            </div>
            <div class=\"span3\">
                ";
        // line 68
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id")) {
            // line 69
            echo "
                    <div class=\"btn-group\">
                      <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"drop_1\">Invoice
                        <img src=\"/images/icons/pdf.png\">
                        <span class=\"caret\"></span>
                      </a>
                        <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop_1\">
                            ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
            foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                // line 77
                echo "                                <li role=\"presentation\">
                                    <a role=\"menuitem\" href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : null), "type" => "inv")), "html", null, true);
                echo "\" target=\"_blank\" ><img src=\"/images/icons/pdf.png\"> Invoice ";
                echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        </ul>
                    </div>

                    ";
            // line 84
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r1")) {
                // line 85
                echo "                        <br/>
                        <div class=\"btn-group\">
                          <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"drop_1\">Reminder 1
                            <img src=\"/images/icons/pdf.png\">
                            <span class=\"caret\"></span>
                          </a>
                            <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop_1\">
                                ";
                // line 92
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
                foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                    // line 93
                    echo "                                    <li role=\"presentation\">
                                        <a role=\"menuitem\" href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : null), "type" => "r1")), "html", null, true);
                    echo "\" target=\"_blank\" ><img src=\"/images/icons/pdf.png\"> Reminder 1 ";
                    echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
                    echo "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                            </ul>
                        </div>
                    ";
            }
            // line 100
            echo "
                    ";
            // line 101
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r2")) {
                // line 102
                echo "                        <br/>
                        <div class=\"btn-group\">
                          <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"drop_1\">Reminder 2
                            <img src=\"/images/icons/pdf.png\">
                            <span class=\"caret\"></span>
                          </a>
                            <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop_1\">
                                ";
                // line 109
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
                foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                    // line 110
                    echo "                                    <li role=\"presentation\">
                                        <a role=\"menuitem\" href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : null), "type" => "r2")), "html", null, true);
                    echo "\" target=\"_blank\" ><img src=\"/images/icons/pdf.png\"> Reminder 2 ";
                    echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
                    echo "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                            </ul>
                        </div>
                    ";
            }
            // line 117
            echo "
                    ";
            // line 118
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "med")) {
                // line 119
                echo "                        <br/>
                        <div class=\"btn-group\">
                          <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"drop_1\">Ultimatum
                            <img src=\"/images/icons/pdf.png\">
                            <span class=\"caret\"></span>
                          </a>
                            <ul  class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop_1\">
                                ";
                // line 126
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr", 2 => "nl"));
                foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                    // line 127
                    echo "                                    <li role=\"presentation\">
                                        <a role=\"menuitem\" href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "_locale" => (isset($context["lg"]) ? $context["lg"] : null), "type" => "med")), "html", null, true);
                    echo "\" target=\"_blank\" ><img src=\"/images/icons/pdf.png\"> Ultimatum ";
                    echo twig_escape_filter($this->env, (isset($context["lg"]) ? $context["lg"] : null), "html", null, true);
                    echo "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                            </ul>
                        </div>
                    ";
            }
            // line 134
            echo "
                ";
        }
        // line 136
        echo "
            </div>
        </div>
    </div>

     <h4>Client</h4>
    <div class=\"well\">
        <div class=\"row-fluid\" >
            <div class=\"span4\">
                ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "clienttype"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                &nbsp;
            </div>
             <div class=\"span4\">
                ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "language"), 'row');
        echo "
            </div>
         </div>
        <div class=\"row-fluid\" id=\"cieonly\" ";
        // line 154
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid")) {
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clientid"), "clienttype") != "cie")) {
                echo " style='display:none' ";
            }
            echo " ";
        }
        echo ">
            <div class=\"span4\">
                ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "name"), 'row');
        echo "

            </div>
             <div class=\"span4\">
                ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "vat"), 'row');
        echo "

            </div>
             <div class=\"span4\">
                ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "cietype"), 'row');
        echo "

            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span4\">
                ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "clienttitle"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "lastname"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "firstname"), 'row');
        echo "

            </div>
        </div>
    </div>

     <div class=\"well\">
        <div class=\"row-fluid\">
            <div class=\"span4\">
                ";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "address"), 'row');
        echo "
                ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "city"), 'row');
        echo "
                ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "country"), 'row');
        echo "
                ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "url"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "number"), 'row');
        echo "
                ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "zip"), 'row');
        echo "
            </div>
             <div class=\"span4\">
                ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "email"), 'row');
        echo "
                ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "mobile"), 'row');
        echo "
                ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "phone"), 'row');
        echo "
                ";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "phone2"), 'row');
        echo "
                ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "clientid"), "fax"), 'row');
        echo "

            </div>
        </div>
    </div>

    <div class=\"row-fluid\">

        <table class=\"table table-bordered table-condensed table-striped table-sortable\">
            <thead>
                <tr>
                    <th>
                        Product
                    </th>
                    <th>
                        Price in &euro; VAT excl.
                    </th>
                    <th class=\"tiny\"></th>
                </tr>
            </thead>
            <tbody id=\"products\" class=\"products\"  ";
        // line 219
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id")) {
            echo " data-update=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_sort_products", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" ";
        }
        echo " data-prototype=\"";
        echo twig_escape_filter($this->env, (((("
                        <td class=\"span9\">" .         // line 220
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "products"), "vars"), "prototype"), "description"), 'widget')) . "</td>
                        <td class=\"span3\">") .         // line 221
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "products"), "vars"), "prototype"), "price"), 'widget')) . "</td>
                        <td><a class=\"delete_new_row\" ><i class=\"icon icon-trash\"></i></a></td>
                    "));
        // line 223
        echo "\">

                ";
        // line 225
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 226
            echo "
                    <tr  data-entity=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "id"), "html", null, true);
            echo "\"  >
                        <td class=\"span9\">
                            ";
            // line 229
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), 'widget');
            echo "
                        </td>
                        <td class=\"span3\">
                            ";
            // line 232
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), 'widget');
            echo "
                        </td>
                        <td><a class=\"delete_row\" data-rel=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" data-type=\"invoice\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "vars"), "value"), "id"), "html", null, true);
            echo "\"><i class=\"icon icon-trash\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "

            </tbody>
             <tfoot>
                <tr>
                        <th class=\"right\">

                            <a id=\"add_product_link\" class=\"add_product_link btn\">Add row</a>
                            <a href=\"#transportModal\" class=\"btn openTransportModal\" data-isoption='0'>Add transport row</a>

                        </th>
                        <th>

                        </th>
                        <th class=\"tiny\"></th>
                </tr>
                    <tr>
                        <th class=\"right\">
                            Total VAT excl.
                        </th>
                        <th>
                            ";
        // line 258
        $context["total"] = 0;
        // line 259
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 260
            echo "                                ";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "price"));
            // line 261
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "
                            ";
        // line 263
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ",", " "), "html", null, true);
        echo "
                        </th>
                        <th class=\"tiny\"></th>
                </tr>

                ";
        // line 269
        echo "                    <tr class=\"grey\">
                        <th class=\"right\">

                            ";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "discountDescription"), 'widget');
        echo "
                        </th>
                        <th>
                            - ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "discount"), 'widget');
        echo "%
                        </th>
                        <th class=\"tiny\"></th>
                    </tr>
                    ";
        // line 279
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discount") > 0)) {
            // line 280
            echo "                         <tr>
                            <th class=\"right\">
                                Total VAT excl.
                            </th>
                            <th>
                                ";
            // line 285
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) - ((isset($context["total"]) ? $context["total"] : null) * ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "discount") / 100)));
            // line 286
            echo "

                                ";
            // line 288
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th class=\"tiny\"></th>
                    </tr>
                    ";
        }
        // line 293
        echo "
                ";
        // line 295
        echo "

                    <tr>
                        <th class=\"right\">
                             ";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "pricetype"), 'widget');
        echo "
                        </th>
                        <th>
                            ";
        // line 302
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (0.21 * (isset($context["total"]) ? $context["total"] : null)), 2, ",", " "), "html", null, true);
            echo " ";
        }
        // line 303
        echo "                        </th>
                        <th class=\"tiny\"></th>
                    </tr>
                    <tr>
                        <th class=\"right\">
                            Total ";
        // line 308
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo " VAT incl. ";
        }
        // line 309
        echo "                        </th>
                        <th>
                            ";
        // line 311
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") == "intra")) {
            // line 312
            echo "                                ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ".", " "), "html", null, true);
            echo "
                            ";
        } else {
            // line 314
            echo "                                ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) ? $context["total"] : null) + (0.21 * (isset($context["total"]) ? $context["total"] : null))), 2, ".", " "), "html", null, true);
            echo "
                            ";
        }
        // line 316
        echo "                        </th>
                        <th></th>
                    </tr>

            </tfoot>
        </table>
    </div>


            <div class=\"row-fluid\">
                ";
        // line 326
        $context["alreadyInvoicedPriceHt"] = 0;
        // line 327
        echo "                ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid")) {
            // line 328
            echo "                    <div class=\"alert alert-info\">
                        <i class=\"icon  icon-info-sign\"></i> Already invoiced:
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Reference</th>
                                        <th>Paid</th>
                                        <th>Amount VAT excl.</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    ";
            // line 340
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "invoiceid"));
            foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
                // line 341
                echo "
                                    <tr>
                                        <td><a href=\"";
                // line 343
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "reference"), "html", null, true);
                echo "</a> ";
                if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id") == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))) {
                    echo " (this) ";
                }
                echo "</td>
                                        <td>";
                // line 344
                if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "paid")) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paymentdate"), "Y-m-d"), "html", null, true);
                    echo " ";
                }
                echo "</td>
                                        <td>";
                // line 345
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "priceht"), "html", null, true);
                echo "</td>
                                    </tr>
                                    ";
                // line 347
                $context["alreadyInvoicedPriceHt"] = ((isset($context["alreadyInvoicedPriceHt"]) ? $context["alreadyInvoicedPriceHt"] : null) + $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "priceht"));
                // line 348
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 349
            echo "                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td class='right'>Total</td>

                                        <td>";
            // line 355
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["alreadyInvoicedPriceHt"]) ? $context["alreadyInvoicedPriceHt"] : null), 2, ",", " "), "html", null, true);
            echo "</td>
                                    </tr>

                                   <tr>
                                        <td></td>
                                        <td class='right'>Balance from job</td>
                                        <td>";
            // line 361
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "price") - (isset($context["alreadyInvoicedPriceHt"]) ? $context["alreadyInvoicedPriceHt"] : null)), 2, ",", " "), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid"), "price"), 2, ",", " "), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["alreadyInvoicedPriceHt"]) ? $context["alreadyInvoicedPriceHt"] : null), 2, ",", " "), "html", null, true);
            echo ")</td>
                                    </tr>

                                </tfoot>
                            </table>
                    </div>
                ";
        }
        // line 368
        echo "                 <table class=\"table table-bordered table-condensed table-striped\">
                    <thead>
                        <tr>
                            <th class=\"span9\">Description</th>
                            <th class=\"span1\">Slice</th>
                            <th class='span1'></th>
                            <th class='span1'>Amount in &euro;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>";
        // line 379
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "sliceDescription"), 'widget');
        echo "</td>
                            <td>";
        // line 380
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "slice"), 'widget');
        echo "%</td>
                            <td class='right'>Total VAT excl.</td>
                            <td>";
        // line 382
        $context["TotalHT"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHt");
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "priceht"), 'widget');
        echo "<br/>
                             ";
        // line 383
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobid")) {
            echo "<a class=\"btn balance\" rel='";
            echo twig_escape_filter($this->env, ((isset($context["total"]) ? $context["total"] : null) - (isset($context["alreadyInvoicedPriceHt"]) ? $context["alreadyInvoicedPriceHt"] : null)), "html", null, true);
            echo "'>Balance</a>";
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class='right'>VAT</td>
                            <td>
                                ";
        // line 390
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") == "intra")) {
            echo "<i>intra</i> ";
            $context["VAT"] = 0;
        } else {
            // line 391
            echo "                                 ";
            $context["VAT"] = ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHt") * 0.21);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["VAT"]) ? $context["VAT"] : null), 2, ",", " "), "html", null, true);
            echo "
                                ";
        }
        // line 393
        echo "
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>



    <div class=\"well\">
        ";
        // line 403
        $context["ToPay"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT");
        // line 404
        echo "        ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            // line 405
            echo "            ";
            $context["ToPay"] = ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") + ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceHT") * 0.21));
            // line 406
            echo "
        ";
        }
        // line 408
        echo "       <h4 style=\"text-align:center\">Total amount to pay ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ToPay"]) ? $context["ToPay"] : null), 2, ",", " "), "html", null, true);
        echo " &euro; ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype") != "intra")) {
            echo "VAT incl.";
        }
        echo "</h4>
    </div>
    <div class=\"well\">
        <div class=\"row-fluid\">
            <div class=\"span6\">
                ";
        // line 413
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "conditions"), 'row');
        echo "
            </div>
            <div class=\"span6 dash\">
                <table id=\"conditionChoices\" class=\"table-striped table table-condensed table-bordered\">
                    ";
        // line 417
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conditions"]) ? $context["conditions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 418
            echo "                        <tr ><td>";
            echo $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "conditions");
            echo "</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        echo "                </table>
            </div>
        </div>

    </div>

    ";
        // line 426
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
    <div class=\"row-fluid\">
        <div class=\"actions\">
            <button type=\"submit\" class=\"btn btn-inverse\">Save</button>
            <a href=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice"), "html", null, true);
        echo "\" class=\"btn\">
                    Back to the list
            </a>
        </div>
    </div>
</form>

</div>


    <div id=\"transportModal\" data-target=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "\" class=\"modal hide fade largeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"transportModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3>Transport</h3>
          </div>
          <div class=\"modal-body\">
                <div class='row-fluid' id=\"transports\">
                     ";
        // line 447
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CaravaneOrganicBundle:Transport:getAvailable"));
        echo "
                </div>
          </div>
          <div class=\"modal-footer\">


          </div>
    </div>


";
    }

    // line 7
    public function block_form_header($context, array $blocks = array())
    {
        // line 8
        echo "<form id='mainForm' action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo " data-entity=\"invoice\"  class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status"), "html", null, true);
        echo "\" novalidate >

";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Invoice:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 361,  723 => 355,  715 => 349,  709 => 348,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 316,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 303,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 279,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 260,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 232,  482 => 229,  477 => 227,  470 => 225,  466 => 223,  462 => 221,  460 => 220,  452 => 219,  429 => 199,  421 => 197,  403 => 191,  397 => 188,  389 => 186,  385 => 185,  373 => 176,  367 => 173,  345 => 160,  338 => 156,  313 => 145,  302 => 136,  282 => 128,  205 => 93,  201 => 92,  192 => 85,  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 198,  419 => 152,  417 => 196,  401 => 148,  399 => 147,  395 => 146,  391 => 145,  375 => 139,  372 => 138,  350 => 123,  339 => 120,  334 => 118,  329 => 116,  315 => 110,  295 => 98,  185 => 81,  114 => 33,  299 => 155,  289 => 158,  266 => 119,  249 => 85,  242 => 110,  228 => 76,  411 => 219,  408 => 149,  351 => 178,  343 => 173,  331 => 167,  292 => 142,  280 => 136,  274 => 146,  263 => 127,  236 => 78,  215 => 104,  211 => 70,  207 => 102,  178 => 59,  152 => 52,  333 => 8,  318 => 129,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 93,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 111,  222 => 108,  212 => 95,  206 => 68,  172 => 59,  157 => 50,  369 => 137,  366 => 136,  364 => 135,  361 => 170,  358 => 130,  352 => 164,  342 => 121,  336 => 119,  328 => 154,  324 => 115,  321 => 114,  317 => 159,  307 => 108,  297 => 163,  288 => 106,  275 => 126,  271 => 108,  261 => 117,  233 => 82,  225 => 76,  210 => 70,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 91,  262 => 133,  256 => 114,  250 => 85,  231 => 76,  226 => 109,  180 => 65,  175 => 67,  165 => 63,  145 => 63,  100 => 32,  74 => 16,  323 => 161,  319 => 111,  311 => 109,  303 => 166,  293 => 131,  286 => 138,  279 => 127,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 95,  167 => 76,  160 => 83,  146 => 75,  97 => 38,  90 => 43,  83 => 23,  76 => 35,  155 => 61,  153 => 79,  129 => 37,  37 => 7,  70 => 20,  53 => 23,  65 => 13,  139 => 71,  113 => 42,  110 => 32,  104 => 51,  58 => 17,  34 => 11,  190 => 84,  174 => 78,  150 => 65,  134 => 57,  126 => 47,  120 => 73,  84 => 18,  81 => 35,  23 => 2,  118 => 50,  96 => 20,  77 => 19,  52 => 8,  480 => 162,  474 => 226,  469 => 158,  461 => 155,  457 => 153,  453 => 164,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 195,  409 => 132,  407 => 192,  402 => 130,  398 => 129,  393 => 187,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 151,  314 => 99,  312 => 111,  309 => 169,  305 => 168,  298 => 134,  294 => 108,  285 => 105,  283 => 94,  278 => 86,  268 => 107,  264 => 118,  258 => 139,  252 => 121,  247 => 84,  241 => 96,  229 => 102,  220 => 74,  214 => 97,  177 => 80,  169 => 52,  140 => 45,  132 => 67,  128 => 54,  111 => 55,  107 => 36,  61 => 16,  38 => 16,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 74,  230 => 123,  227 => 101,  224 => 100,  221 => 96,  219 => 97,  217 => 75,  208 => 94,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 30,  71 => 49,  67 => 21,  63 => 14,  59 => 18,  47 => 12,  28 => 3,  29 => 3,  35 => 11,  26 => 12,  43 => 22,  196 => 97,  183 => 61,  171 => 77,  166 => 132,  163 => 69,  158 => 69,  156 => 68,  151 => 60,  142 => 45,  138 => 60,  136 => 56,  123 => 52,  121 => 47,  117 => 50,  115 => 28,  105 => 47,  91 => 25,  69 => 31,  62 => 20,  49 => 14,  101 => 22,  94 => 43,  89 => 36,  85 => 30,  79 => 22,  75 => 21,  68 => 14,  56 => 14,  50 => 13,  87 => 24,  72 => 15,  66 => 15,  55 => 23,  41 => 15,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 25,  46 => 23,  44 => 5,  40 => 5,  32 => 4,  27 => 7,  22 => 2,  209 => 111,  203 => 69,  199 => 65,  193 => 64,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 58,  164 => 77,  162 => 54,  154 => 58,  149 => 46,  147 => 47,  144 => 46,  141 => 59,  133 => 38,  130 => 37,  125 => 53,  122 => 35,  116 => 34,  112 => 47,  109 => 37,  106 => 31,  103 => 40,  99 => 38,  95 => 37,  92 => 36,  86 => 33,  82 => 27,  80 => 20,  73 => 31,  64 => 25,  60 => 19,  57 => 16,  54 => 16,  51 => 15,  48 => 8,  45 => 11,  42 => 23,  39 => 11,  36 => 4,  33 => 4,  30 => 3,);
    }
}
