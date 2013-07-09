<?php

/* EnsJobeetBundle:Job:list.html.twig */
class __TwigTemplate_9636c30b654fbd1af7b16d2712139fab extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table class=\"jobs\">
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "jobs"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "    <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
            echo "\">
      <td class=\"location\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "location"), "html", null, true);
            echo "</td>
      <td class=\"position\">
        <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "company" => $this->getAttribute($this->getContext($context, "entity"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "entity"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "entity"), "positionslug"))), "html", null, true);
            echo "\">
          ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
            echo "
        </a>
      </td>
      <td class=\"company\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
            echo "</td>
    </tr>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
