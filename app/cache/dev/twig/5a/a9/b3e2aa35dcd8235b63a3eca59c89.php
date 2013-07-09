<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_5aa9b3e2aa35dcd8235b63a3eca59c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'notice' => array($this, 'block_notice'),
            'actions' => array($this, 'block_actions'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
        <title>
            ";
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Admin", array(), "SonataAdminBundle");
        // line 56
        echo "
            ";
        // line 57
        if ((!twig_test_empty($this->getContext($context, "_title")))) {
            // line 58
            echo "                ";
            echo $this->getContext($context, "_title");
            echo "
            ";
        } else {
            // line 60
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 61
                echo "                    -
                    ";
                // line 62
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 63
                    echo "                        ";
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                        // line 64
                        echo "                            &gt;
                        ";
                    }
                    // line 66
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 68
                echo "                ";
            }
            // line 69
            echo "            ";
        }
        // line 70
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 72
        if (twig_test_empty($this->getContext($context, "_side_menu"))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 74
        echo "
        <div class=\"topbar\" data-dropdown=\"dropdown\" >
            <div class=\"topbar\">
                <div class=\"topbar-inner\">
                    <div class=\"container-fluid\">
                        ";
        // line 79
        if (array_key_exists("admin_pool", $context)) {
            // line 80
            echo "                            ";
            $this->displayBlock('logo', $context, $blocks);
            // line 86
            echo "                            <ul class=\"nav\">

                                ";
            // line 88
            $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
            // line 116
            echo "                            </ul>

                            <p class=\"pull-right\">";
            // line 118
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin_pool"), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</p>
                        ";
        }
        // line 120
        echo "                    </div>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 126
        if (((!twig_test_empty($this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 127
            echo "                <ul class=\"breadcrumb\">
                    ";
            // line 128
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 129
                echo "                        ";
                if (array_key_exists("action", $context)) {
                    // line 130
                    echo "                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                    foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                        // line 131
                        echo "                                ";
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 132
                            echo "                                    <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "uri"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</a><span class=\"divider\">/</span></li>
                                ";
                        } else {
                            // line 134
                            echo "                                    <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</li>
                                ";
                        }
                        // line 136
                        echo "                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 137
                    echo "                        ";
                }
                // line 138
                echo "                    ";
            } else {
                // line 139
                echo "                        ";
                echo $this->getContext($context, "_breadcrumb");
                echo "
                    ";
            }
            // line 141
            echo "                </ul>
            ";
        }
        // line 143
        echo "
            ";
        // line 144
        $this->displayBlock('notice', $context, $blocks);
        // line 155
        echo "
            <div style=\"float: right\">
                ";
        // line 157
        $this->displayBlock('actions', $context, $blocks);
        // line 158
        echo "            </div>

            ";
        // line 160
        if (((!twig_test_empty($this->getContext($context, "_title"))) || array_key_exists("action", $context))) {
            // line 161
            echo "                <div class=\"page-header\">
                    <h1>
                        ";
            // line 163
            if ((!twig_test_empty($this->getContext($context, "_title")))) {
                // line 164
                echo "                            ";
                echo $this->getContext($context, "_title");
                echo "
                        ";
            } elseif (array_key_exists("action", $context)) {
                // line 166
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 167
                    echo "                                ";
                    if ($this->getAttribute($this->getContext($context, "loop"), "last")) {
                        // line 168
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                        echo "
                                ";
                    }
                    // line 170
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 171
                echo "                        ";
            }
            // line 172
            echo "                    </h1>
                </div>
            ";
        }
        // line 175
        echo "
            ";
        // line 176
        if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
            // line 177
            echo "                <div class=\"sidebar\">
                    <div class=\"well sonata-ba-side-menu\">";
            // line 178
            echo $this->getContext($context, "_side_menu");
            echo "</div>
                </div>
            ";
        }
        // line 181
        echo "
            <div class=\"content\">

                ";
        // line 184
        if ((!twig_test_empty($this->getContext($context, "_preview")))) {
            // line 185
            echo "                    <div class=\"sonata-ba-preview\">";
            echo $this->getContext($context, "_preview");
            echo "</div>
                ";
        }
        // line 187
        echo "

                ";
        // line 189
        if ((!twig_test_empty($this->getContext($context, "_content")))) {
            // line 190
            echo "                    <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, "_content");
            echo "</div>
                ";
        }
        // line 192
        echo "
                ";
        // line 193
        if ((!twig_test_empty($this->getContext($context, "_show")))) {
            // line 194
            echo "                    <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, "_show");
            echo "</div>
                ";
        }
        // line 196
        echo "
                ";
        // line 197
        if ((!twig_test_empty($this->getContext($context, "_form")))) {
            // line 198
            echo "                    <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, "_form");
            echo "</div>
                ";
        }
        // line 200
        echo "
                ";
        // line 201
        if (((!twig_test_empty($this->getContext($context, "_list_table"))) || (!twig_test_empty($this->getContext($context, "_list_filters"))))) {
            // line 202
            echo "                    <div class=\"sonata-ba-filter\">
                        ";
            // line 203
            echo $this->getContext($context, "_list_filters");
            echo "
                    </div>
                    <div class=\"sonata-ba-list\">
                        ";
            // line 206
            echo $this->getContext($context, "_list_table");
            echo "
                    </div>
                ";
        }
        // line 209
        echo "
                ";
        // line 210
        $this->displayBlock('footer', $context, $blocks);
        // line 215
        echo "            </div>
        </div>
    </body>
</html>

";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.0.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-tabs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-alerts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-modal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-twipsy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-popover.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/qtip/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 80
    public function block_logo($context, array $blocks = array())
    {
        // line 81
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard"), "html", null, true);
        echo "\" class=\"brand\">
                                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "admin_pool"), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "\" />
                                    ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "
                                </a>
                            ";
    }

    // line 88
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 89
        echo "                                    ";
        // line 90
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 91
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 92
                echo "                                            ";
                $context["group_visible"] = false;
                // line 93
                echo "
                                            ";
                // line 95
                echo "                                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    if ((!$this->getContext($context, "group_visible"))) {
                        // line 96
                        echo "                                                ";
                        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 97
                            echo "                                                    ";
                            $context["group_visible"] = true;
                            // line 98
                            echo "                                                ";
                        }
                        // line 99
                        echo "                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 100
                echo "
                                            ";
                // line 101
                if ($this->getContext($context, "group_visible")) {
                    // line 102
                    echo "                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\">";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                    echo "</a>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                    // line 105
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 106
                        echo "                                                        ";
                        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 107
                            echo "                                                            <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                        ";
                        }
                        // line 109
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 110
                    echo "                                                </ul>
                                            </li>
                                            ";
                }
                // line 113
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 114
            echo "                                    ";
        }
        // line 115
        echo "                                ";
    }

    // line 144
    public function block_notice($context, array $blocks = array())
    {
        // line 145
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 146
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . $this->getContext($context, "notice_level"));
            // line 147
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => $this->getContext($context, "session_var")), "method")) {
                // line 148
                echo "                        <div class=\"alert-message ";
                echo twig_escape_filter($this->env, $this->getContext($context, "notice_level"), "html", null, true);
                echo "\">
                            ";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => $this->getContext($context, "session_var")), "method"), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            ";
                // line 151
                echo "                        </div>
                    ";
            }
            // line 153
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 154
        echo "            ";
    }

    // line 157
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 210
    public function block_footer($context, array $blocks = array())
    {
        // line 211
        echo "                    <div class=\"pull-right clearfix\">
                        <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
