<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_493c6349915a83c60e3c70bd9bf7a9c0 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
