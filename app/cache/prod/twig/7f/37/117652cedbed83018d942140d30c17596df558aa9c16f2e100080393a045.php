<?php

/* CaravaneOrganicBundle:Invoice:show.html.twig */
class __TwigTemplate_7f37117652cedbed83018d942140d30c17596df558aa9c16f2e100080393a045 extends Twig_Template
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
        echo "<h1>Invoice</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Reference</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Year</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "year"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Offretype</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offretype"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Slice</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slice"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cslice</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cslice"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nbslices</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nbslices"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Insertdate</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "insertdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Paymentdate</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paymentdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Priceht</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "priceht"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Pricetype</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Creditnote</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "creditnote"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Comments</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "comments"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Conditions</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Conditions1</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions1"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Conditions2</th>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions2"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cietype</th>
            <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cietype"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Clienttype</th>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clienttype"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Clienttitle</th>
            <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "clienttitle"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lastname</th>
            <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Vat</th>
            <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vat"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Number</th>
            <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "number"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Zip</th>
            <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "zip"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>City</th>
            <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "city"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Country</th>
            <td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>R1</th>
            <td>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r1"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>R1date</th>
            <td>";
        // line 131
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r1date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>R2</th>
            <td>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r2"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>R2date</th>
            <td>";
        // line 139
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "r2date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Med</th>
            <td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "med"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Meddate</th>
            <td>";
        // line 147
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "meddate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Language</th>
            <td>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "language"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("invoice_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CaravaneOrganicBundle:Invoice:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 173,  478 => 172,  475 => 171,  470 => 174,  468 => 171,  465 => 170,  462 => 169,  454 => 163,  448 => 161,  446 => 160,  428 => 156,  424 => 155,  420 => 154,  401 => 147,  391 => 145,  389 => 144,  386 => 143,  383 => 142,  380 => 141,  377 => 140,  375 => 139,  353 => 125,  350 => 124,  347 => 123,  345 => 122,  340 => 120,  330 => 115,  326 => 114,  306 => 102,  300 => 100,  201 => 67,  194 => 65,  114 => 34,  299 => 155,  289 => 158,  266 => 92,  249 => 83,  242 => 80,  228 => 76,  411 => 219,  408 => 218,  351 => 178,  343 => 173,  331 => 167,  292 => 97,  280 => 94,  274 => 146,  263 => 127,  236 => 114,  215 => 104,  211 => 103,  207 => 102,  178 => 67,  152 => 51,  333 => 8,  318 => 112,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 142,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 119,  222 => 74,  212 => 95,  206 => 100,  172 => 59,  157 => 50,  369 => 134,  366 => 133,  364 => 132,  361 => 127,  358 => 130,  352 => 128,  342 => 120,  336 => 9,  328 => 116,  324 => 115,  321 => 114,  317 => 159,  307 => 110,  297 => 163,  288 => 95,  275 => 102,  271 => 108,  261 => 89,  233 => 82,  225 => 76,  210 => 69,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 121,  262 => 133,  256 => 112,  250 => 93,  231 => 77,  226 => 109,  180 => 65,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 29,  323 => 161,  319 => 176,  311 => 157,  303 => 166,  293 => 159,  286 => 138,  279 => 151,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 47,  90 => 43,  83 => 39,  76 => 35,  155 => 61,  153 => 79,  129 => 38,  37 => 4,  70 => 20,  53 => 23,  65 => 12,  139 => 71,  113 => 42,  110 => 33,  104 => 51,  58 => 10,  34 => 11,  190 => 67,  174 => 91,  150 => 52,  134 => 50,  126 => 32,  120 => 73,  84 => 33,  81 => 35,  23 => 2,  118 => 59,  96 => 36,  77 => 19,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 158,  435 => 146,  430 => 157,  427 => 143,  423 => 142,  413 => 149,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 113,  314 => 99,  312 => 111,  309 => 169,  305 => 168,  298 => 91,  294 => 98,  285 => 105,  283 => 104,  278 => 86,  268 => 107,  264 => 84,  258 => 139,  252 => 121,  247 => 82,  241 => 96,  229 => 98,  220 => 74,  214 => 97,  177 => 80,  169 => 64,  140 => 44,  132 => 67,  128 => 57,  111 => 55,  107 => 24,  61 => 16,  38 => 16,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 95,  235 => 76,  230 => 123,  227 => 105,  224 => 75,  221 => 96,  219 => 73,  217 => 72,  208 => 68,  204 => 68,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 31,  71 => 49,  67 => 17,  63 => 15,  59 => 18,  47 => 12,  28 => 3,  29 => 4,  35 => 11,  26 => 12,  43 => 22,  196 => 66,  183 => 81,  171 => 53,  166 => 132,  163 => 69,  158 => 74,  156 => 52,  151 => 60,  142 => 45,  138 => 44,  136 => 56,  123 => 74,  121 => 47,  117 => 28,  115 => 45,  105 => 47,  91 => 26,  69 => 31,  62 => 27,  49 => 13,  101 => 23,  94 => 43,  89 => 36,  85 => 20,  79 => 23,  75 => 22,  68 => 19,  56 => 14,  50 => 13,  87 => 25,  72 => 15,  66 => 16,  55 => 23,  41 => 15,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 22,  46 => 23,  44 => 5,  40 => 5,  32 => 5,  27 => 7,  22 => 2,  209 => 111,  203 => 69,  199 => 67,  193 => 68,  189 => 63,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 58,  164 => 51,  162 => 53,  154 => 58,  149 => 45,  147 => 47,  144 => 46,  141 => 41,  133 => 35,  130 => 49,  125 => 63,  122 => 36,  116 => 35,  112 => 26,  109 => 37,  106 => 32,  103 => 33,  99 => 38,  95 => 27,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 16,  64 => 25,  60 => 14,  57 => 16,  54 => 21,  51 => 9,  48 => 19,  45 => 11,  42 => 23,  39 => 10,  36 => 4,  33 => 4,  30 => 3,);
    }
}
