<?php

/* EnsJobeetBundle:Job:admin.html.twig */
class __TwigTemplate_c306cdb4a117c6a6290a5bf6d76f920a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"job_actions\">
  <h3>Admin</h3>
  <ul>
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "job"), "isActivated"))) {
            // line 5
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
            echo "\">Edit</a></li>
        <li>
          <form action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_publish", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 8
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "publish_form"));
            echo "
            <button type=\"submit\">Publish</button>
          </form>
        </li>
    ";
        }
        // line 13
        echo "    <li>
      <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
        <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Delete</button>
      </form>
    </li>
    ";
        // line 19
        if ($this->getAttribute($this->getContext($context, "job"), "isActivated")) {
            // line 20
            echo "      <li ";
            if ($this->getAttribute($this->getContext($context, "job"), "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
        ";
            // line 21
            if ($this->getAttribute($this->getContext($context, "job"), "isExpired")) {
                // line 22
                echo "          Expired
        ";
            } else {
                // line 24
                echo "          Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "job"), "getDaysBeforeExpires"), "html", null, true);
                echo "</strong> days
        ";
            }
            // line 26
            echo "        ";
            if ($this->getAttribute($this->getContext($context, "job"), "expiresSoon")) {
                // line 27
                echo "          <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_extend", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
                echo "\" method=\"post\">
            ";
                // line 28
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "extend_form"));
                echo "
            <button type=\"submit\">Extend</button> for another 30 days
          </form>
        ";
            }
            // line 32
            echo "      </li>
    ";
        } else {
            // line 34
            echo "      <li>
        [Bookmark this <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_preview", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"), "company" => $this->getAttribute($this->getContext($context, "job"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "job"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "job"), "positionslug"))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
      </li>
    ";
        }
        // line 38
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
