<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_edfdaa9a0e66027b6c32339a6eab4449 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
