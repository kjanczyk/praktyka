<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_dafd64577040b87d79163f8340cdddf9 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\" target=\"new\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "description"), "html", null, true);
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
