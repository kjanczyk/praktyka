<?php

/* EnsJobeetBundle:Category:show.atom.twig */
class __TwigTemplate_bd3deb0f4ff2f47327fc8715b093158d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
  <title>Jobeet (";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
        echo ")</title>
  <subtitle>Latest Jobs</subtitle>
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"))), "html", null, true);
        echo "\" />
  <updated>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "category"), "activejobs"), 0, array(), "array"), "createdAt"), "format", array(0 => constant("DATE_ATOM")), "method"), "html", null, true);
        echo "</updated>
  <author><name>Jobeet</name></author>
  <id>";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "feedId"), "html", null, true);
        echo "</id>
 
  ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "category"), "activejobs"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "    <entry>
      <title>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "location"), "html", null, true);
            echo ")</title>
      <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "company" => $this->getAttribute($this->getContext($context, "entity"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "entity"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "entity"), "positionslug"))), "html", null, true);
            echo "\" />
      <id>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</id>
      <updated>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "createdAt"), "format", array(0 => constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
      <summary type=\"xhtml\">
        <div xmlns=\"http://www.w3.org/1999/xhtml\">
          ";
            // line 19
            if ($this->getAttribute($this->getContext($context, "entity"), "logo")) {
                // line 20
                echo "            <div>
              <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
                echo "\">
                <img src=\"http://";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host"), "html", null, true);
                echo "/uploads/jobs/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "logo"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
                echo " logo\" />
              </a>
            </div>
          ";
            }
            // line 26
            echo "          <div>
            ";
            // line 27
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true));
            echo "
          </div>
          <h4>How to apply?</h4>
          <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "howtoapply"), "html", null, true);
            echo "</p>
        </div>
      </summary>
      <author><name>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
            echo "</name></author>
    </entry>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "</feed>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:show.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
