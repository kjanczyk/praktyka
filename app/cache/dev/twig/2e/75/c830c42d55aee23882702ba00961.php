<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_2e75c830c42d55aee23882702ba00961 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
  <input type=\"checkbox\" name=\"idx[]\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "html", null, true);
        echo "\" />
</td>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
