<?php

/* users.login.tpl */
class __TwigTemplate_ab5b071aa6b18690b6339dc04d1dd281 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div style=\"margin:30px auto;background:#ededed;width:300px\">
<form name=\"loginForm\" id=\"loginForm\" method=\"POST\" action=\"/\">
<table><tbody><tr><td rowspan=\"3\"><img src=\"/themes/default/images/logo.png\"></td><td>Nom d'utilisateur<br><input type=\"text\" name=\"email\" ></td></tr>
<tr><td>Mot de passe<br><input type=\"password\" name=\"password\" ></td></tr>
<tr><td><input type=\"submit\" value=\"Login\"></td></tr></tbody></table>
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "users.login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }
}
