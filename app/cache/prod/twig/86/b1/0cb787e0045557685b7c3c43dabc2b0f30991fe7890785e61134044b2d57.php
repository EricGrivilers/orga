<?php

/* CaravaneUserBundle:User:show.html.twig */
class __TwigTemplate_86b10cb787e0045557685b7c3c43dabc2b0f30991fe7890785e61134044b2d57 extends Twig_Template
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
        echo "<h1>User</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Username</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Usernamecanonical</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "usernameCanonical"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Emailcanonical</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "emailCanonical"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Enabled</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Salt</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salt"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Password</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "password"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lastlogin</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastLogin"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Locked</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "locked"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Expired</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "expired"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Expiresat</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "expiresAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Confirmationtoken</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "confirmationToken"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Passwordrequestedat</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "passwordRequestedAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "roles"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Credentialsexpired</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "credentialsExpired"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Credentialsexpireat</th>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "credentialsExpireAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Id</th>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lastname</th>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Iso</th>
            <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iso"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "phone"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phone2</th>
            <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "phone2"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "mobile"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fax</th>
            <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fax"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lastlog</th>
            <td>";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastlog"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Browser</th>
            <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "browser"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 133
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
        return "CaravaneUserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 127,  20 => 1,  357 => 148,  315 => 130,  524 => 5,  516 => 231,  510 => 230,  494 => 226,  490 => 225,  476 => 222,  473 => 221,  419 => 199,  415 => 198,  405 => 196,  395 => 193,  371 => 172,  354 => 163,  253 => 111,  726 => 292,  724 => 291,  700 => 282,  696 => 281,  692 => 280,  686 => 279,  682 => 278,  672 => 271,  653 => 259,  649 => 258,  635 => 249,  626 => 247,  622 => 246,  608 => 237,  602 => 236,  592 => 233,  588 => 232,  585 => 231,  582 => 230,  579 => 229,  575 => 228,  570 => 226,  564 => 223,  560 => 222,  549 => 214,  540 => 207,  528 => 203,  526 => 202,  522 => 200,  514 => 199,  486 => 224,  471 => 185,  464 => 183,  459 => 181,  431 => 169,  414 => 162,  410 => 161,  400 => 154,  327 => 98,  239 => 107,  218 => 98,  186 => 95,  517 => 237,  511 => 235,  505 => 233,  503 => 195,  499 => 230,  495 => 194,  456 => 211,  450 => 205,  442 => 207,  422 => 192,  418 => 190,  416 => 189,  363 => 165,  320 => 138,  310 => 145,  257 => 105,  213 => 83,  200 => 65,  316 => 305,  304 => 128,  148 => 61,  127 => 32,  232 => 125,  447 => 208,  445 => 163,  438 => 158,  404 => 179,  399 => 194,  388 => 175,  370 => 132,  359 => 164,  348 => 8,  260 => 93,  914 => 8,  911 => 7,  896 => 447,  886 => 440,  873 => 430,  866 => 426,  858 => 420,  849 => 418,  845 => 417,  838 => 413,  825 => 408,  821 => 406,  818 => 405,  815 => 404,  813 => 403,  801 => 393,  793 => 391,  788 => 390,  774 => 383,  768 => 382,  763 => 380,  759 => 379,  746 => 368,  732 => 294,  723 => 355,  715 => 289,  709 => 288,  707 => 347,  702 => 345,  694 => 344,  684 => 343,  680 => 341,  676 => 340,  662 => 328,  659 => 327,  657 => 326,  645 => 257,  639 => 314,  633 => 312,  631 => 311,  627 => 309,  623 => 308,  616 => 243,  610 => 302,  604 => 299,  598 => 295,  595 => 293,  587 => 288,  583 => 286,  581 => 285,  574 => 280,  572 => 227,  565 => 275,  559 => 272,  554 => 269,  546 => 263,  543 => 262,  537 => 261,  534 => 205,  529 => 259,  527 => 6,  504 => 237,  493 => 234,  488 => 224,  477 => 187,  466 => 219,  460 => 220,  452 => 219,  429 => 199,  425 => 167,  421 => 166,  417 => 151,  403 => 191,  397 => 188,  385 => 136,  373 => 169,  367 => 173,  338 => 156,  313 => 304,  302 => 124,  282 => 87,  205 => 93,  192 => 96,  185 => 82,  482 => 223,  478 => 221,  475 => 171,  470 => 220,  468 => 171,  465 => 170,  462 => 212,  454 => 163,  448 => 161,  446 => 160,  428 => 168,  424 => 155,  420 => 154,  401 => 147,  391 => 148,  389 => 186,  386 => 143,  383 => 173,  380 => 141,  377 => 170,  375 => 139,  353 => 125,  350 => 162,  347 => 144,  345 => 122,  340 => 140,  330 => 137,  326 => 114,  306 => 144,  300 => 111,  201 => 92,  194 => 47,  114 => 42,  299 => 155,  289 => 158,  266 => 119,  249 => 114,  242 => 132,  228 => 124,  411 => 197,  408 => 218,  351 => 9,  343 => 173,  331 => 146,  292 => 90,  280 => 118,  274 => 146,  263 => 114,  236 => 114,  215 => 54,  211 => 100,  207 => 98,  178 => 79,  152 => 62,  333 => 135,  318 => 112,  308 => 128,  296 => 125,  290 => 104,  287 => 148,  281 => 125,  276 => 140,  270 => 138,  267 => 137,  259 => 118,  255 => 112,  248 => 103,  245 => 109,  222 => 88,  212 => 68,  206 => 67,  172 => 83,  157 => 50,  369 => 129,  366 => 155,  364 => 168,  361 => 170,  358 => 165,  352 => 118,  342 => 159,  336 => 156,  328 => 117,  324 => 133,  321 => 114,  317 => 159,  307 => 114,  297 => 106,  288 => 122,  275 => 117,  271 => 96,  261 => 117,  233 => 104,  225 => 102,  210 => 115,  198 => 66,  191 => 46,  170 => 59,  197 => 48,  184 => 82,  161 => 62,  124 => 33,  137 => 60,  301 => 95,  291 => 126,  277 => 124,  262 => 84,  256 => 92,  250 => 110,  231 => 77,  226 => 122,  180 => 59,  175 => 67,  165 => 83,  145 => 37,  100 => 37,  74 => 26,  323 => 128,  319 => 112,  311 => 157,  303 => 112,  293 => 122,  286 => 89,  279 => 151,  272 => 116,  265 => 143,  251 => 104,  244 => 131,  237 => 100,  223 => 119,  216 => 115,  202 => 107,  195 => 103,  188 => 99,  181 => 95,  167 => 87,  160 => 83,  146 => 75,  97 => 47,  90 => 43,  83 => 39,  76 => 35,  155 => 56,  153 => 79,  129 => 57,  37 => 6,  70 => 29,  53 => 19,  65 => 17,  139 => 71,  113 => 29,  110 => 38,  104 => 51,  58 => 14,  34 => 11,  190 => 104,  174 => 91,  150 => 7,  134 => 57,  126 => 52,  120 => 32,  84 => 19,  81 => 26,  23 => 2,  118 => 59,  96 => 37,  77 => 29,  52 => 10,  480 => 188,  474 => 186,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 204,  440 => 206,  437 => 158,  435 => 170,  430 => 157,  427 => 201,  423 => 200,  413 => 195,  409 => 146,  407 => 192,  402 => 195,  398 => 178,  393 => 187,  387 => 200,  384 => 121,  381 => 135,  379 => 119,  374 => 116,  368 => 156,  365 => 111,  362 => 110,  360 => 109,  355 => 129,  341 => 121,  337 => 120,  322 => 150,  314 => 147,  312 => 129,  309 => 169,  305 => 97,  298 => 94,  294 => 98,  285 => 120,  283 => 119,  278 => 86,  268 => 95,  264 => 85,  258 => 138,  252 => 104,  247 => 101,  241 => 112,  229 => 103,  220 => 119,  214 => 97,  177 => 69,  169 => 85,  140 => 56,  132 => 67,  128 => 53,  111 => 55,  107 => 24,  61 => 21,  38 => 10,  273 => 123,  269 => 122,  254 => 105,  246 => 133,  243 => 108,  240 => 86,  238 => 109,  235 => 99,  230 => 104,  227 => 75,  224 => 101,  221 => 101,  219 => 122,  217 => 85,  208 => 52,  204 => 66,  179 => 93,  159 => 57,  143 => 64,  135 => 58,  131 => 58,  119 => 45,  108 => 55,  102 => 41,  71 => 30,  67 => 22,  63 => 21,  59 => 20,  47 => 11,  28 => 1,  29 => 3,  35 => 5,  26 => 3,  43 => 18,  196 => 97,  183 => 94,  171 => 43,  166 => 62,  163 => 86,  158 => 80,  156 => 79,  151 => 64,  142 => 36,  138 => 48,  136 => 55,  123 => 69,  121 => 47,  117 => 31,  115 => 51,  105 => 47,  91 => 41,  69 => 31,  62 => 27,  49 => 13,  101 => 46,  94 => 33,  89 => 22,  85 => 31,  79 => 22,  75 => 24,  68 => 18,  56 => 22,  50 => 18,  87 => 21,  72 => 25,  66 => 23,  55 => 23,  41 => 15,  31 => 2,  24 => 4,  25 => 5,  21 => 2,  19 => 1,  98 => 27,  93 => 26,  88 => 24,  78 => 34,  46 => 17,  44 => 14,  40 => 9,  32 => 4,  27 => 7,  22 => 23,  209 => 111,  203 => 99,  199 => 73,  193 => 61,  189 => 60,  187 => 103,  182 => 77,  176 => 44,  173 => 65,  168 => 42,  164 => 40,  162 => 82,  154 => 46,  149 => 38,  147 => 65,  144 => 46,  141 => 58,  133 => 56,  130 => 49,  125 => 63,  122 => 50,  116 => 47,  112 => 45,  109 => 48,  106 => 42,  103 => 39,  99 => 40,  95 => 24,  92 => 35,  86 => 39,  82 => 27,  80 => 29,  73 => 29,  64 => 22,  60 => 22,  57 => 15,  54 => 9,  51 => 15,  48 => 19,  45 => 11,  42 => 8,  39 => 7,  36 => 7,  33 => 13,  30 => 4,);
    }
}
