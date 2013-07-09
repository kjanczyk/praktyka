<?php

/* EnsJobeetBundle:Default:index.html.twig */
class __TwigTemplate_a49c0ec887dccb5f0cee8ced0a020770 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
