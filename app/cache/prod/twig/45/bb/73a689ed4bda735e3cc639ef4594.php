<?php

/* EnsJobeetBundle:Job:edit.html.twig */
class __TwigTemplate_45bb73a689ed4bda735e3cc639ef4594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "edit_form"), array($this, ));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "  ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 8
            echo "    <ul>
      ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 12
            echo "    </ul>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "  <h1>Job edit</h1>
  <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    <table id=\"job_form\">
      <tfoot>
        <tr>
          <td colspan=\"2\">
            <input type=\"submit\" value=\"Preview your job\" />
          </td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th>";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "category"));
        echo "</th>
          <td>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "category"));
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "category"));
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 42
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "type"));
        echo "</th>
          <td>
            ";
        // line 44
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "type"));
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "type"));
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 49
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "company"));
        echo "</th>
          <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "company"));
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "company"));
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 56
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "file"));
        echo "</th>
          <td>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "file"));
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "file"));
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 63
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "url"));
        echo "</th>
          <td>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "url"));
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "url"));
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 70
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "position"));
        echo "</th>
          <td>
            ";
        // line 72
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "position"));
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "position"));
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 77
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "location"));
        echo "</th>
          <td>
            ";
        // line 79
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "location"));
        echo "
            ";
        // line 80
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "location"));
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 84
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "description"));
        echo "</th>
          <td>
            ";
        // line 86
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "description"));
        echo "
            ";
        // line 87
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "description"));
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 91
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "how_to_apply"));
        echo "</th>
          <td>
            ";
        // line 93
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "how_to_apply"));
        echo "
            ";
        // line 94
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "how_to_apply"));
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 98
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "is_public"));
        echo "</th>
          <td>
            ";
        // line 100
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "is_public"));
        echo "
            ";
        // line 101
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "is_public"));
        echo "
            <br /> Whether the job can also be published on affiliate websites or not.
          </td>
        </tr>
        <tr>
          <th>";
        // line 106
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "email"));
        echo "</th>
          <td>
            ";
        // line 108
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "email"));
        echo "
            ";
        // line 109
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "email"));
        echo "
          </td>
        </tr>
      </tbody>
    </table>
 
    ";
        // line 115
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "edit_form"));
        echo "
  </form>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
