<?php

/* themes.html.twig */
class __TwigTemplate_26f66afdd90c3ee068162e0d1ab6507af37d1ecaafc353a2431ec6b3d4f7d799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "themes.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'messages' => [$this, 'block_messages'],
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
            $context["installing"] = (is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute(($context["admin"] ?? null), "route", [])) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "install") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)));
            // line 6
            if (($context["installing"] ?? null)) {
                // line 7
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
            } else {
                // line 9
                $context["installed"] = true;
                // line 12
                $context["package"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "themes", [0 => true], "method"), $this->getAttribute(($context["admin"] ?? null), "route", []), [], "array");
                // line 13
                if ( !($context["package"] ?? null)) {
                    // line 14
                    $context["package"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "themes", [0 => false], "method"), $this->getAttribute(($context["admin"] ?? null), "route", []), [], "array");
                    // line 15
                    $context["installed"] = false;
                }
                // line 18
                $context["theme"] = $this->getAttribute(($context["package"] ?? null), "toArray", [], "method");
                // line 19
                $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME") . ": ") . twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", [])));
            }
        } else {
            // line 22
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
        }
        // line 25
        if (($this->getAttribute(($context["admin"] ?? null), "route", []) || ($context["installing"] ?? null))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method");
        // line 28
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        // line 32
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 36
    public function block_titlebar($context, array $blocks = [])
    {
        // line 37
        echo "    ";
        if (( !$this->getAttribute(($context["admin"] ?? null), "route", []) || ($context["installing"] ?? null))) {
            // line 38
            echo "        <div class=\"button-bar\">
        ";
            // line 39
            if (($context["installing"] ?? null)) {
                // line 40
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/themes\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 42
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/themes/install\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 44
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
                    // line 45
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 51
            echo "        ";
            if (($context["installed"] ?? null)) {
                // line 52
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/themes\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES"), "html", null, true);
                echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
                echo "</button>
        </div>
        ";
            } else {
                // line 57
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/themes/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES"), "html", null, true);
                echo "</a>
        </div>
        ";
            }
            // line 61
            echo "        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", []));
            echo "</h1>
    ";
        }
    }

    // line 65
    public function block_messages($context, array $blocks = [])
    {
        // line 66
        echo "    ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
    ";
        // line 67
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "themes", [])) {
            // line 68
            echo "        <div class=\"themes-notifications-container hidden\"></div>
    ";
        }
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        // line 73
        echo "    <div class=\"gpm gpm-themes\">
        ";
        // line 74
        if (( !$this->getAttribute(($context["admin"] ?? null), "route", []) || ($context["installing"] ?? null))) {
            // line 75
            echo "            ";
            $this->loadTemplate("partials/themes-list.html.twig", "themes.html.twig", 75)->display($context);
            // line 76
            echo "        ";
        } else {
            // line 77
            echo "            ";
            if ((null === ($context["theme"] ?? null))) {
                // line 78
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->redirectFunc((($context["base_url_relative"] ?? null) . "/404")), "html", null, true);
                echo "
            ";
            }
            // line 80
            echo "            ";
            $this->loadTemplate("partials/themes-details.html.twig", "themes.html.twig", 80)->display($context);
            // line 81
            echo "        ";
        }
        // line 82
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "themes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 82,  220 => 81,  217 => 80,  211 => 78,  208 => 77,  205 => 76,  202 => 75,  200 => 74,  197 => 73,  194 => 72,  188 => 68,  186 => 67,  181 => 66,  178 => 65,  168 => 61,  160 => 58,  157 => 57,  151 => 54,  145 => 53,  142 => 52,  139 => 51,  134 => 49,  131 => 48,  128 => 47,  122 => 45,  120 => 44,  114 => 43,  107 => 42,  99 => 40,  97 => 39,  94 => 38,  91 => 37,  88 => 36,  81 => 32,  78 => 31,  71 => 28,  68 => 27,  65 => 26,  61 => 1,  58 => 25,  55 => 22,  51 => 19,  49 => 18,  46 => 15,  44 => 14,  42 => 13,  40 => 12,  38 => 9,  35 => 7,  33 => 6,  31 => 4,  29 => 3,  11 => 1,);
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
    {% set installing = admin.route starts with 'install' %}

    {% if installing %}
        {% set title = \"PLUGIN_ADMIN.THEMES\"|tu %}
    {% else %}
        {% set installed = true %}

        {# Try installed packages first, then remote #}
        {% set package = admin.themes(true)[admin.route] %}
        {% if (not package) %}
            {% set package = admin.themes(false)[admin.route] %}
            {% set installed = false %}
        {% endif %}

        {% set theme = package.toArray() %}
        {% set title = \"PLUGIN_ADMIN.THEME\"|tu ~ \": \" ~ theme.name|e %}
    {% endif %}
{% else %}
    {% set title = \"PLUGIN_ADMIN.THEMES\"|tu %}
{% endif %}

{% if admin.route or installing %}
    {% block stylesheets %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
        {{ parent() }}
    {% endblock %}

    {% block javascripts %}
        {{ parent() }}
    {% endblock %}
{% endif %}

{% block titlebar %}
    {% if not admin.route or installing %}
        <div class=\"button-bar\">
        {% if (installing) %}
            <a class=\"button\" href=\"{{ base_url_relative }}/themes\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        {% else %}
            <a class=\"button\" href=\"{{ base_url }}/\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
            <a class=\"button\" href=\"{{ base_url_relative }}/themes/install\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}</a>
            {% if authorize(['admin.maintenance', 'admin.super']) %}
                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> {{ \"PLUGIN_ADMIN.CHECK_FOR_UPDATES\"|tu }}</button>
            {% endif %}
        {% endif %}
        </div>
        <h1><i class=\"fa fa-fw fa-tint\"></i> {{ \"PLUGIN_ADMIN.THEMES\"|tu }}</h1>
    {% else %}
        {% if (installed) %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ base_url_relative }}/themes\"><i class=\"fa fa-arrow-left\"></i> {{ \"PLUGIN_ADMIN.BACK_TO_THEMES\"|tu }}</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
        </div>
        {% else %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ base_url_relative }}/themes/install\"><i class=\"fa fa-arrow-left\"></i> {{ \"PLUGIN_ADMIN.BACK_TO_THEMES\"|tu }}</a>
        </div>
        {% endif %}
        <h1><i class=\"fa fa-fw fa-tint\"></i> {{ \"PLUGIN_ADMIN.THEME\"|tu }}: {{ theme.name|e }}</h1>
    {% endif %}
{% endblock %}

{% block messages %}
    {{ parent() }}
    {% if config.plugins.admin.notifications.themes %}
        <div class=\"themes-notifications-container hidden\"></div>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"gpm gpm-themes\">
        {% if not admin.route or installing %}
            {%  include 'partials/themes-list.html.twig' %}
        {% else %}
            {% if theme is null %}
                {{redirect_me(base_url_relative ~ '/404')}}
            {% endif %}
            {% include 'partials/themes-details.html.twig' %}
        {% endif %}
    </div>
{% endblock %}
", "themes.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/themes.html.twig");
    }
}
