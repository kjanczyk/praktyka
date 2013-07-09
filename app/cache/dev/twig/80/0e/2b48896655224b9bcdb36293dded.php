<?php

/* EnsJobeetBundle:JobAdmin:list_image.html.twig */
class __TwigTemplate_800e2b48896655224b9bcdb36293dded extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<tr>
    <th>Logo</th>
    <td><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "object"), "webPath")), "html", null, true);
        echo "\" /></td>
</tr>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:JobAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
