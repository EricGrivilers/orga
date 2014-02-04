<?php

/* CaravaneOrganicBundle:Offre:show.html.twig */
class __TwigTemplate_67f1741f9c3d69ea4ed15da1f51a990fb77ab95f1dd149b5e8d686895ce2ae85 extends Twig_Template
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
        echo "<h1>Offre</h1>

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
            <th>Insertdate</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "insertdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updatedate</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Reference</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reference"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Offretype</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offretype"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Planningcomments</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "planningcomments"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Offrecomments</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "offrecomments"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Surface</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "surface"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Startbuild</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "startbuild"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Endbuild</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "endbuild"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Requestdate</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "requestdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Pricetype</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricetype"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Pricecomments</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pricecomments"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Conditions</th>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditions"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Conditionsslices</th>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conditionsslices"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tents</th>
            <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tents"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tentscomments</th>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tentscomments"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Number</th>
            <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "number"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Zip</th>
            <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "zip"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>City</th>
            <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "city"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Country</th>
            <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "country"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Contact</th>
            <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contact"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "phone"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phone2</th>
            <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "phone2"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "mobile"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fax</th>
            <td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fax"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Url</th>
            <td>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Comments</th>
            <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "comments"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Introtext</th>
            <td>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "introtext"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Issue</th>
            <td>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "issue"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Deleted</th>
            <td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "deleted"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Public</th>
            <td>";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "public"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Language</th>
            <td>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "language"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Copyid</th>
            <td>";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "copyid"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 173
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
        return "CaravaneOrganicBundle:Offre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 173,  304 => 167,  148 => 78,  127 => 70,  232 => 125,  447 => 164,  445 => 163,  438 => 158,  404 => 143,  388 => 137,  377 => 134,  370 => 132,  359 => 126,  348 => 123,  330 => 118,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 361,  723 => 355,  715 => 349,  709 => 348,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 316,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 303,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 279,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 260,  529 => 259,  527 => 258,  504 => 237,  493 => 234,  488 => 232,  482 => 229,  477 => 227,  470 => 225,  466 => 223,  462 => 221,  460 => 220,  452 => 219,  429 => 199,  421 => 197,  403 => 191,  397 => 188,  389 => 186,  385 => 136,  373 => 133,  367 => 173,  345 => 122,  338 => 156,  313 => 145,  302 => 136,  282 => 99,  205 => 93,  201 => 92,  192 => 85,  449 => 163,  446 => 162,  441 => 165,  439 => 162,  436 => 161,  433 => 160,  425 => 198,  419 => 152,  417 => 151,  401 => 148,  399 => 140,  395 => 146,  391 => 145,  375 => 139,  372 => 138,  350 => 123,  339 => 120,  334 => 118,  329 => 116,  315 => 110,  295 => 98,  185 => 81,  114 => 58,  299 => 155,  289 => 158,  266 => 119,  249 => 85,  242 => 110,  228 => 124,  411 => 219,  408 => 149,  351 => 178,  343 => 173,  331 => 167,  292 => 142,  280 => 136,  274 => 146,  263 => 127,  236 => 78,  215 => 104,  211 => 70,  207 => 102,  178 => 84,  152 => 64,  333 => 119,  318 => 129,  308 => 109,  296 => 162,  290 => 104,  287 => 148,  281 => 93,  276 => 140,  270 => 138,  267 => 137,  259 => 126,  255 => 126,  248 => 118,  245 => 111,  222 => 108,  212 => 114,  206 => 68,  172 => 83,  157 => 50,  369 => 137,  366 => 136,  364 => 129,  361 => 170,  358 => 130,  352 => 164,  342 => 121,  336 => 119,  328 => 117,  324 => 115,  321 => 114,  317 => 159,  307 => 108,  297 => 106,  288 => 103,  275 => 126,  271 => 96,  261 => 117,  233 => 78,  225 => 76,  210 => 115,  198 => 109,  191 => 72,  170 => 59,  197 => 84,  184 => 66,  161 => 62,  124 => 46,  137 => 73,  301 => 107,  291 => 126,  277 => 91,  262 => 133,  256 => 92,  250 => 85,  231 => 76,  226 => 109,  180 => 65,  175 => 67,  165 => 63,  145 => 63,  100 => 32,  74 => 33,  323 => 161,  319 => 112,  311 => 109,  303 => 166,  293 => 105,  286 => 155,  279 => 151,  272 => 147,  265 => 143,  251 => 135,  244 => 131,  237 => 127,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 47,  90 => 43,  83 => 39,  76 => 35,  155 => 61,  153 => 79,  129 => 61,  37 => 8,  70 => 14,  53 => 17,  65 => 14,  139 => 71,  113 => 48,  110 => 38,  104 => 51,  58 => 17,  34 => 11,  190 => 104,  174 => 91,  150 => 7,  134 => 57,  126 => 61,  120 => 73,  84 => 18,  81 => 37,  23 => 2,  118 => 59,  96 => 46,  77 => 27,  52 => 17,  480 => 162,  474 => 226,  469 => 158,  461 => 155,  457 => 153,  453 => 164,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 195,  409 => 146,  407 => 192,  402 => 130,  398 => 129,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 151,  314 => 99,  312 => 172,  309 => 169,  305 => 108,  298 => 134,  294 => 108,  285 => 105,  283 => 94,  278 => 86,  268 => 95,  264 => 94,  258 => 139,  252 => 121,  247 => 84,  241 => 96,  229 => 102,  220 => 119,  214 => 97,  177 => 69,  169 => 52,  140 => 45,  132 => 67,  128 => 54,  111 => 55,  107 => 36,  61 => 10,  38 => 10,  273 => 119,  269 => 90,  254 => 94,  246 => 103,  243 => 118,  240 => 86,  238 => 109,  235 => 74,  230 => 123,  227 => 75,  224 => 100,  221 => 123,  219 => 122,  217 => 75,  208 => 94,  204 => 72,  179 => 69,  159 => 68,  143 => 64,  135 => 58,  131 => 72,  119 => 51,  108 => 55,  102 => 49,  71 => 49,  67 => 29,  63 => 14,  59 => 18,  47 => 12,  28 => 2,  29 => 4,  35 => 13,  26 => 3,  43 => 9,  196 => 97,  183 => 61,  171 => 77,  166 => 132,  163 => 69,  158 => 72,  156 => 81,  151 => 79,  142 => 75,  138 => 60,  136 => 65,  123 => 69,  121 => 47,  117 => 50,  115 => 28,  105 => 46,  91 => 34,  69 => 31,  62 => 27,  49 => 16,  101 => 45,  94 => 43,  89 => 36,  85 => 30,  79 => 22,  75 => 21,  68 => 14,  56 => 12,  50 => 7,  87 => 24,  72 => 14,  66 => 23,  55 => 23,  41 => 15,  31 => 3,  24 => 2,  25 => 5,  21 => 2,  19 => 1,  98 => 53,  93 => 37,  88 => 24,  78 => 25,  46 => 23,  44 => 14,  40 => 11,  32 => 5,  27 => 7,  22 => 2,  209 => 111,  203 => 69,  199 => 73,  193 => 64,  189 => 67,  187 => 103,  182 => 85,  176 => 60,  173 => 65,  168 => 66,  164 => 77,  162 => 54,  154 => 71,  149 => 63,  147 => 47,  144 => 46,  141 => 59,  133 => 38,  130 => 37,  125 => 63,  122 => 60,  116 => 64,  112 => 47,  109 => 47,  106 => 31,  103 => 37,  99 => 38,  95 => 35,  92 => 36,  86 => 21,  82 => 27,  80 => 20,  73 => 15,  64 => 13,  60 => 25,  57 => 18,  54 => 18,  51 => 15,  48 => 19,  45 => 14,  42 => 15,  39 => 14,  36 => 7,  33 => 6,  30 => 4,);
    }
}
