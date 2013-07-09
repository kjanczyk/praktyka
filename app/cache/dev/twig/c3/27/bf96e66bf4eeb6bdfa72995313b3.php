<?php

/* EnsJobeetBundle:Job:index.atom.twig */
class __TwigTemplate_c327bf96e66bf4eeb6bdfa72995313b3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
 <title>Jobeet</title>
  <subtitle>Latest Jobs</subtitle>
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job", array("_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\"/>
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("EnsJobeetBundle_homepage"), "html", null, true);
        echo "\"/>
  <updated>";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "lastUpdated"), "html", null, true);
        echo "</updated>
  <author><name>Jobeet</name></author>
  <id>";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "feedId"), "html", null, true);
        echo "</id>
 
  ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "category"), "activejobs"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 13
                echo "    <entry>
      <title>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "location"), "html", null, true);
                echo ")</title>
      <link href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "company" => $this->getAttribute($this->getContext($context, "entity"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "entity"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "entity"), "positionslug"))), "html", null, true);
                echo "\" />
      <id>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo "</id>
      <updated>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "createdAt"), "format", array(0 => constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
      <summary type=\"xhtml\">
        <div xmlns=\"http://www.w3.org/1999/xhtml\">
          ";
                // line 20
                if ($this->getAttribute($this->getContext($context, "entity"), "logo")) {
                    // line 21
                    echo "            <div>
              <a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
                    echo "\">
                <img src=\"http://";
                    // line 23
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
                // line 27
                echo "          <div>
            ";
                // line 28
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true));
                echo "
          </div>
          <h4>How to apply?</h4>
          <p>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "howtoapply"), "html", null, true);
                echo "</p>
        </div>
              <div class=\"feed\">
  <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "_format" => "atom")), "html", null, true);
                echo "\">Feed</a>
            </div>
      </summary>
      <author><name>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
                echo "</name></author>
    </entry>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo " 
</feed>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:index.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
