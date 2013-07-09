<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_d3b21d0215bdfc56b6284ccd79f17016 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
