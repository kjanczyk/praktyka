<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_e798bfe4d0b2e6ec2dea6049e6e4d43a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
