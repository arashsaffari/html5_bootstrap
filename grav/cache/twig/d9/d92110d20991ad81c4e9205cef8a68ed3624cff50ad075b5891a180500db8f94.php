<?php

/* user.html.twig */
class __TwigTemplate_1721d733d0bd7a1f96262d77c3c15e18a20501de922d880848e0c8a1a8e3a8e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "user.html.twig", 1);
        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        if ($this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 4
            $context["user"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("users/" . $this->getAttribute(($context["admin"] ?? null), "route", []))], "method");
            // line 5
            $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USER") . ": ") . twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", [])));
        } else {
            // line 7
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.USERS");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_titlebar($context, array $blocks = [])
    {
        // line 11
        echo "    ";
        if ( !$this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 12
            echo "        ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.users", 1 => "admin.super"])) {
                // line 13
                echo "            <div class=\"button-bar\">
                <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_ACCOUNT"), "html", null, true);
                echo "</a>
            </div>
            <h1><i class=\"fa fa-fw fa-users\"></i> ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USERS"), "html", null, true);
                echo "</h1>
        ";
            } else {
                // line 18
                echo "            <h1>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_DENIED"), "html", null, true);
                echo "</h1>
        ";
            }
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.users", 1 => "admin.super"]) || ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []) == $this->getAttribute(($context["user"] ?? null), "username", [])))) {
                // line 22
                echo "            <div class=\"button-bar\">
                ";
                // line 23
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin-pro", [], "array"), "enabled", [])) {
                    // line 24
                    echo "                <a class=\"button\" href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo "/users\"><i class=\"fa fa-reply\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 26
                echo "                <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
                echo "</button>
            </div>
            <h1><i class=\"fa fa-fw fa-user\"></i> ";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USER"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", []));
                echo "</h1>
        ";
            } else {
                // line 30
                echo "            <h1>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_DENIED"), "html", null, true);
                echo "</h1>
        ";
            }
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        // line 36
        echo "    ";
        if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.users", 1 => "admin.super"]) || ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []) == $this->getAttribute(($context["user"] ?? null), "username", [])))) {
            // line 37
            echo "    <div>
        ";
            // line 38
            if ( !$this->getAttribute(($context["admin"] ?? null), "route", [])) {
                // line 39
                echo "            ";
                $this->loadTemplate("partials/users-list.html.twig", "user.html.twig", 39)->display($context);
                // line 40
                echo "
            <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
                ";
                // line 42
                $this->loadTemplate("partials/blueprints-new.html.twig", "user.html.twig", 42)->display(array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "user/account_new"], "method")]));
                // line 43
                echo "            </div>
        ";
            } else {
                // line 45
                echo "            ";
                $this->loadTemplate("partials/blueprints.html.twig", "user.html.twig", 45)->display(array_merge($context, ["data" => ($context["user"] ?? null), "blueprints" => $this->getAttribute(($context["user"] ?? null), "blueprints", [])]));
                // line 46
                echo "        ";
            }
            // line 47
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"), "html", null, true);
            echo "</h1>
            <p class=\"bigger\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"), "html", null, true);
            echo "
            </p>
            <br>
            <div class=\"button-bar\">
                <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
            echo "</a>
                <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</a>
            </div>
        </form>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 58,  159 => 57,  152 => 53,  147 => 51,  141 => 47,  138 => 46,  135 => 45,  131 => 43,  129 => 42,  125 => 40,  122 => 39,  120 => 38,  117 => 37,  114 => 36,  111 => 35,  106 => 32,  100 => 30,  93 => 28,  87 => 26,  79 => 24,  77 => 23,  74 => 22,  71 => 21,  68 => 20,  62 => 18,  57 => 16,  52 => 14,  49 => 13,  46 => 12,  43 => 11,  40 => 10,  36 => 1,  33 => 7,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% if admin.route %}
    {% set user = admin.data('users/' ~ admin.route) %}
    {% set title = \"PLUGIN_ADMIN.USER\"|tu ~ \": \" ~ admin.route|e %}
{% else %}
    {% set title = \"PLUGIN_ADMIN_PRO.USERS\"|tu %}
{% endif %}

{% block titlebar %}
    {% if not admin.route %}
        {% if authorize(['admin.users', 'admin.super']) %}
            <div class=\"button-bar\">
                <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD_ACCOUNT\"|tu }}</a>
            </div>
            <h1><i class=\"fa fa-fw fa-users\"></i> {{ \"PLUGIN_ADMIN.USERS\"|tu }}</h1>
        {% else %}
            <h1>{{ \"PLUGIN_ADMIN.ACCESS_DENIED\"|tu }}</h1>
        {% endif %}
    {% else %}
        {% if authorize(['admin.users', 'admin.super']) or grav.user.username == user.username %}
            <div class=\"button-bar\">
                {% if config.plugins[\"admin-pro\"].enabled %}
                <a class=\"button\" href=\"{{ base_url }}/users\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
                {% endif %}
                <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
            </div>
            <h1><i class=\"fa fa-fw fa-user\"></i> {{ \"PLUGIN_ADMIN.USER\"|tu }}: {{ user.username|e }}</h1>
        {% else %}
            <h1>{{ \"PLUGIN_ADMIN.ACCESS_DENIED\"|tu }}</h1>
        {% endif %}
    {% endif %}
{% endblock %}

{% block content %}
    {% if authorize(['admin.users', 'admin.super']) or grav.user.username == user.username %}
    <div>
        {% if not admin.route %}
            {% include 'partials/users-list.html.twig' %}

            <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
                {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('user/account_new') } %}
            </div>
        {% else %}
            {% include 'partials/blueprints.html.twig' with { data: user, blueprints: user.blueprints } %}
        {% endif %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
                <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
                <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>
    {% endif %}
{% endblock %}

", "user.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/user.html.twig");
    }
}
