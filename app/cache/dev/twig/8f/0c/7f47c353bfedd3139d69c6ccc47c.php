<?php

/* EnsJobeetBundle:Default:login.html.twig */
class __TwigTemplate_8f0c7f47c353bfedd3139d69c6ccc47c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getContext($context, "error")) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo " 
<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
 
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
 
    <button type=\"submit\">login</button>
</form>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
