<?php

/* config.html.twig */
class __TwigTemplate_4ab1c98b6f0469ea0c32f645f762206f476b0d558399fdca98ffd18cd37dbdde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "config.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_top' => [$this, 'block_content_top'],
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
        $context["config_slug"] = twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "basename", []));
        // line 4
        $context["isInfo"] = (($context["config_slug"] ?? null) == "info");
        // line 6
        $context["tab_title_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["config_slug"] ?? null)));
        // line 7
        $context["tab_title"] = ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null)) == ($context["tab_title_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, ($context["config_slug"] ?? null))) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null))));
        // line 8
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . ($context["tab_title"] ?? null));
        // line 10
        if ( !($context["isInfo"] ?? null)) {
            // line 11
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("config/" . ($context["config_slug"] ?? null))], "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method");
        // line 16
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_titlebar($context, array $blocks = [])
    {
        // line 24
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", [])) {
            // line 27
            echo "        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 29
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["tab_title"] ?? null), "html", null, true);
        echo "</h1>
";
    }

    // line 33
    public function block_content_top($context, array $blocks = [])
    {
        // line 34
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", [])) {
            // line 35
            echo "    <div class=\"alert notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", []), [($context["base_path"] ?? null) => ""]), "html", null, true);
            echo "</b></div>
    ";
        }
        // line 37
        echo "
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            ";
        // line 41
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_system", 1 => "admin.super"])) {
            // line 42
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "system")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/system\">
                <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 46
        echo "
            ";
        // line 47
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_site", 1 => "admin.super"])) {
            // line 48
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "site")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/site\">
                <span>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 52
        echo "
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "configurations", []));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 54
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => ("admin.configuration_" . $context["configuration"]), 1 => "admin.super"])) {
                // line 55
                echo "                    ";
                $context["current_blueprints"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "data", [0 => ("config/" . $context["configuration"])], "method"), "blueprints", []), "toArray", [], "method");
                // line 56
                echo "                    ";
                if ((((($context["configuration"] != "system") && ($context["configuration"] != "site")) &&  !$this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "hidden", [])) && ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "fields", [])) ||  !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "field", []))))) {
                    // line 57
                    echo "                        <a ";
                    if ((($context["config_slug"] ?? null) == $context["configuration"])) {
                        echo "class=\"active\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                    echo "/config/";
                    echo twig_escape_filter($this->env, $context["configuration"], "html", null, true);
                    echo "\">
                            ";
                    // line 58
                    $context["configuration_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, $context["configuration"]));
                    // line 59
                    echo "                            <span>";
                    echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)) == ($context["configuration_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, $context["configuration"])) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)))), "html", null, true);
                    echo "</span>
                        </a>
                    ";
                }
                // line 62
                echo "                ";
            }
            // line 63
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
            ";
        // line 65
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_info", 1 => "admin.super"])) {
            // line 66
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "info")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/info\">
                <span>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 70
        echo "
        </div>
    </div>
";
    }

    // line 75
    public function block_content($context, array $blocks = [])
    {
        // line 76
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => ("admin.configuration_" . ($context["config_slug"] ?? null)), 1 => "admin.super"])) {
            // line 77
            echo "        ";
            if (($context["isInfo"] ?? null)) {
                // line 78
                echo "            <div id=\"phpinfo\">
                ";
                // line 79
                echo $this->getAttribute(($context["admin"] ?? null), "phpinfo", []);
                echo "
            </div>
        ";
            } else {
                // line 82
                echo "            ";
                $this->loadTemplate("partials/blueprints.html.twig", "config.html.twig", 82)->display(array_merge($context, ["blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", []), "data" => ($context["data"] ?? null)]));
                // line 83
                echo "        ";
            }
            // line 84
            echo "    ";
        }
        // line 85
        echo "    ";
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "config.html.twig", 85)->display($context);
    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 85,  255 => 84,  252 => 83,  249 => 82,  243 => 79,  240 => 78,  237 => 77,  234 => 76,  231 => 75,  224 => 70,  218 => 67,  209 => 66,  207 => 65,  204 => 64,  198 => 63,  195 => 62,  188 => 59,  186 => 58,  175 => 57,  172 => 56,  169 => 55,  166 => 54,  162 => 53,  159 => 52,  153 => 49,  144 => 48,  142 => 47,  139 => 46,  133 => 43,  124 => 42,  122 => 41,  116 => 37,  108 => 35,  105 => 34,  102 => 33,  94 => 30,  91 => 29,  85 => 27,  83 => 26,  77 => 25,  74 => 24,  71 => 23,  64 => 20,  61 => 19,  54 => 16,  51 => 15,  48 => 14,  44 => 1,  41 => 11,  39 => 10,  37 => 8,  35 => 7,  33 => 6,  31 => 4,  29 => 3,  11 => 1,);
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

{% set config_slug = uri.basename|e %}
{% set isInfo = (config_slug == 'info') %}

{% set tab_title_string = \"PLUGIN_ADMIN.\" ~ config_slug|upper %}
{% set tab_title = (tab_title_string|tu == tab_title_string ? config_slug|capitalize : tab_title_string|tu)  %}
{% set title = \"PLUGIN_ADMIN.CONFIGURATION\"|tu ~ \": \" ~ tab_title %}

{% if not isInfo %}
    {% set data = admin.data('config/' ~ config_slug) %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss(theme_url ~ '/css/codemirror/codemirror.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block titlebar %}
    <div class=\"button-bar\">
        <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        {% if data.file.filename %}
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
        {% endif %}
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> {{ \"PLUGIN_ADMIN.CONFIGURATION\"|tu }} - {{ tab_title }}</h1>
{% endblock %}

{% block content_top %}
    {% if data.file.filename %}
    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>
    {% endif %}

    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            {% if authorize(['admin.configuration_system', 'admin.super']) %}
            <a {% if config_slug == 'system' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/system\">
                <span>{{ \"PLUGIN_ADMIN.SYSTEM\"|tu }}</span>
            </a>
            {% endif %}

            {% if authorize(['admin.configuration_site', 'admin.super']) %}
            <a {% if config_slug == 'site' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/site\">
                <span>{{ \"PLUGIN_ADMIN.SITE\"|tu }}</span>
            </a>
            {% endif %}

            {% for configuration in admin.configurations %}
                {% if authorize(['admin.configuration_' ~ configuration, 'admin.super']) %}
                    {% set current_blueprints = admin.data('config/' ~ configuration).blueprints.toArray() %}
                    {% if configuration != 'system' and configuration != 'site' and not current_blueprints.form.hidden and (current_blueprints.form.fields is not empty or current_blueprints.form.field is not empty) %}
                        <a {% if config_slug == configuration %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/{{configuration}}\">
                            {% set configuration_string = \"PLUGIN_ADMIN.\" ~ configuration|upper %}
                            <span>{{ (configuration_string|tu == configuration_string ? configuration|capitalize : configuration_string|tu) }}</span>
                        </a>
                    {% endif %}
                {% endif %}
            {% endfor %}

            {% if authorize(['admin.configuration_info', 'admin.super']) %}
            <a {% if config_slug == 'info' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/info\">
                <span>{{ \"PLUGIN_ADMIN.INFO\"|tu }}</span>
            </a>
            {% endif %}

        </div>
    </div>
{% endblock %}

{% block content %}
    {% if authorize(['admin.configuration_' ~ config_slug, 'admin.super']) %}
        {% if isInfo %}
            <div id=\"phpinfo\">
                {{ admin.phpinfo|raw }}
            </div>
        {% else %}
            {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}
        {% endif %}
    {% endif %}
    {% include 'partials/modal-changes-detected.html.twig' %}
{% endblock %}
", "config.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/config.html.twig");
    }
}
