<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_aab4a37d63c635c221833f1b9c5e7eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        } else {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "value"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue")), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
