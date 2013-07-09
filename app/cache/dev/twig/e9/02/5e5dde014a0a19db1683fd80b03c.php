<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_e9025e5dde014a0a19db1683fd80b03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\">Logout</a>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

}
