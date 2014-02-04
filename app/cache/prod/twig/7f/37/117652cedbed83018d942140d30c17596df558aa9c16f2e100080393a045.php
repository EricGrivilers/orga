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
        return array (  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 154,  419 => 152,  417 => 151,  401 => 148,  399 => 147,  395 => 146,  391 => 145,  375 => 139,  372 => 138,  350 => 123,  339 => 120,  334 => 118,  329 => 116,  315 => 110,  295 => 98,  185 => 62,  114 => 34,  299 => 155,  289 => 158,  266 => 92,  249 => 85,  242 => 80,  228 => 76,  411 => 219,  408 => 149,  351 => 178,  343 => 173,  331 => 167,  292 => 142,  280 => 136,  274 => 146,  263 => 127,  236 => 78,  215 => 104,  211 => 70,  207 => 102,  178 => 59,  152 => 51,  333 => 8,  318 => 129,  308 => 122,  296 => 112,  290 => 149,  287 => 148,  281 => 93,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 119,  222 => 108,  212 => 95,  206 => 68,  172 => 59,  157 => 50,  369 => 137,  366 => 136,  364 => 135,  361 => 131,  358 => 130,  352 => 128,  342 => 121,  336 => 119,  328 => 116,  324 => 115,  321 => 114,  317 => 159,  307 => 108,  297 => 163,  288 => 106,  275 => 102,  271 => 108,  261 => 98,  233 => 82,  225 => 76,  210 => 70,  198 => 98,  191 => 68,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 46,  137 => 58,  301 => 134,  291 => 126,  277 => 91,  262 => 133,  256 => 112,  250 => 85,  231 => 76,  226 => 109,  180 => 65,  175 => 67,  165 => 63,  145 => 53,  100 => 32,  74 => 16,  323 => 161,  319 => 111,  311 => 109,  303 => 166,  293 => 159,  286 => 138,  279 => 151,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 47,  90 => 43,  83 => 39,  76 => 35,  155 => 61,  153 => 79,  129 => 38,  37 => 4,  70 => 20,  53 => 23,  65 => 13,  139 => 71,  113 => 42,  110 => 33,  104 => 51,  58 => 17,  34 => 11,  190 => 67,  174 => 91,  150 => 52,  134 => 50,  126 => 47,  120 => 73,  84 => 18,  81 => 35,  23 => 2,  118 => 59,  96 => 20,  77 => 19,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 164,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 200,  384 => 121,  381 => 197,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 105,  337 => 170,  322 => 101,  314 => 99,  312 => 111,  309 => 169,  305 => 168,  298 => 91,  294 => 108,  285 => 105,  283 => 94,  278 => 86,  268 => 107,  264 => 84,  258 => 139,  252 => 121,  247 => 84,  241 => 96,  229 => 98,  220 => 74,  214 => 97,  177 => 80,  169 => 52,  140 => 44,  132 => 67,  128 => 57,  111 => 55,  107 => 36,  61 => 16,  38 => 16,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 79,  235 => 74,  230 => 123,  227 => 105,  224 => 72,  221 => 96,  219 => 74,  217 => 75,  208 => 69,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 55,  119 => 51,  108 => 55,  102 => 31,  71 => 49,  67 => 17,  63 => 15,  59 => 18,  47 => 12,  28 => 3,  29 => 4,  35 => 11,  26 => 12,  43 => 22,  196 => 97,  183 => 61,  171 => 62,  166 => 132,  163 => 69,  158 => 74,  156 => 48,  151 => 60,  142 => 45,  138 => 44,  136 => 56,  123 => 74,  121 => 47,  117 => 50,  115 => 28,  105 => 47,  91 => 26,  69 => 31,  62 => 27,  49 => 13,  101 => 22,  94 => 43,  89 => 36,  85 => 23,  79 => 23,  75 => 22,  68 => 14,  56 => 14,  50 => 13,  87 => 25,  72 => 15,  66 => 16,  55 => 23,  41 => 15,  31 => 4,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 22,  46 => 23,  44 => 5,  40 => 5,  32 => 5,  27 => 7,  22 => 2,  209 => 111,  203 => 69,  199 => 65,  193 => 64,  189 => 67,  187 => 84,  182 => 40,  176 => 60,  173 => 65,  168 => 58,  164 => 77,  162 => 53,  154 => 58,  149 => 46,  147 => 47,  144 => 46,  141 => 59,  133 => 38,  130 => 37,  125 => 63,  122 => 36,  116 => 35,  112 => 42,  109 => 37,  106 => 32,  103 => 23,  99 => 38,  95 => 27,  92 => 26,  86 => 33,  82 => 27,  80 => 20,  73 => 31,  64 => 25,  60 => 14,  57 => 16,  54 => 21,  51 => 9,  48 => 19,  45 => 11,  42 => 23,  39 => 10,  36 => 4,  33 => 4,  30 => 3,);
    }
}
