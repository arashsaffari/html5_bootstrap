<?php

/* forms/fields/file/file.html.twig */
class __TwigTemplate_de98d2aeea7f5d78fe458df8fad46ec8e43b2723cda318949231eef553320f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/file/file.html.twig", 1);
        $this->blocks = [
            'input' => [$this, 'block_input'],
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 55
        $context["macro"] = $this;
        // line 57
        $context["defaults"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []);
        // line 58
        $context["files"] = twig_array_merge($this->getAttribute(($context["defaults"] ?? null), "files", []), (((isset($context["field"]) || array_key_exists("field", $context))) ? (_twig_default_filter(($context["field"] ?? null), [])) : ([])));
        // line 59
        $context["limit"] = (( !$this->getAttribute(($context["field"] ?? null), "multiple", [])) ? (1) : ($this->getAttribute(($context["files"] ?? null), "limit", [])));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 61
    public function block_input($context, array $blocks = [])
    {
        // line 62
        echo "    ";
        $context["upload_limit"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "media", []), "upload_limit", []) / 1024) / 1024);
        // line 63
        echo "    ";
        $context["page_can_upload"] = (($context["exists"] ?? null) || (((($context["type"] ?? null) == "page") &&  !($context["exists"] ?? null)) &&  !((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute(($context["field"] ?? null), "destination", [])) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "@self") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a))) || (is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $this->getAttribute(($context["field"] ?? null), "destination", [])) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "self@") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || 0 === strpos($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))))));
        // line 64
        echo "    ";
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ($context["page_can_upload"] ?? null))) {
            // line 65
            echo "
    ";
            // line 66
            $context["settings"] = ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "paramName" => ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . (($this->getAttribute(($context["files"] ?? null), "multiple", [])) ? ("[]") : (""))), "limit" => ($context["limit"] ?? null), "filesize" => ($context["upload_limit"] ?? null), "accept" => $this->getAttribute(($context["files"] ?? null), "accept", []), "resolution" => $this->getAttribute(($context["files"] ?? null), "resolution", []), "resizeWidth" => $this->getAttribute(($context["files"] ?? null), "resizeWidth", []), "resizeHeight" => $this->getAttribute(($context["files"] ?? null), "resizeHeight", []), "resizeQuality" => $this->getAttribute(($context["files"] ?? null), "resizeQuality", [])];
            // line 67
            echo "
    <div class=\"form-input-wrapper dropzone files-upload ";
            // line 68
            if ( !($this->getAttribute(($context["field"] ?? null), "fancy", []) === false)) {
                echo "form-input-file";
            }
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "size", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "size", []), "xlarge")) : ("xlarge")), "html", null, true);
            echo "\" data-grav-file-settings=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["settings"] ?? null)), "html_attr");
            echo "\" ";
            if (($context["file_url_add"] ?? null)) {
                echo "data-file-url-add=\"";
                echo twig_escape_filter($this->env, ($context["file_url_add"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " ";
            if (($context["file_url_remove"] ?? null)) {
                echo "data-file-url-remove=\"";
                echo twig_escape_filter($this->env, ($context["file_url_remove"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
        <input
            ";
            // line 71
            echo "            ";
            $this->displayBlock('input_attributes', $context, $blocks);
            // line 79
            echo "        />

        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["path"] => $context["file"]) {
                // line 82
                echo "            ";
                echo $context["macro"]->getpreview($context["path"], $context["file"], $context);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "        ";
            $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "forms/fields/file/file.html.twig", 84)->display(array_merge($context, ["field" => ["name" => ("_json." . $this->getAttribute(($context["field"] ?? null), "name", []))], "value" => twig_jsonencode_filter(($context["value"] ?? null))]));
            // line 85
            echo "    </div>

    ";
        } else {
            // line 88
            echo "        <span class=\"note\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED");
            echo "</span>
    ";
        }
    }

    // line 71
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 72
        echo "                type=\"file\"
                ";
        // line 73
        if ($this->getAttribute(($context["files"] ?? null), "multiple", [])) {
            echo "multiple=\"multiple\"";
        }
        // line 74
        echo "                ";
        if ($this->getAttribute(($context["files"] ?? null), "accept", [])) {
            echo "accept=\"";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["files"] ?? null), "accept", []), ","), "html", null, true);
            echo "\"";
        }
        // line 75
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 76
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "random_name", [])) {
            echo "random=\"true\"";
        }
        // line 77
        echo "                ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
            ";
    }

    // line 3
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            ob_start();
            // line 5
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 6
            echo "        ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 7
            echo "        ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 8
            echo "        ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 9
            echo "
        ";
            // line 10
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 12
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 14
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 16
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getpreview($__path__ = null, $__value__ = null, $__global__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "path" => $__path__,
            "value" => $__value__,
            "global" => $__global__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 25
            echo "    ";
            if (($context["value"] ?? null)) {
                // line 26
                echo "        ";
                $context["uri"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", []), "uri", []);
                // line 27
                echo "        ";
                $context["files"] = $this->getAttribute(($context["global"] ?? null), "files", []);
                // line 28
                echo "        ";
                $context["config"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", []), "config", []);
                // line 29
                echo "        ";
                $context["route"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", []), "route", [], "method");
                // line 30
                echo "
        ";
                // line 31
                $context["type"] = (($this->getAttribute(($context["global"] ?? null), "blueprint_type", [])) ? ($this->getAttribute(($context["global"] ?? null), "blueprint_type", [])) : ((($this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", []), "location", [])) ? ($this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", []), "location", [])) : ("config"))));
                // line 32
                echo "
        ";
                // line 33
                $context["blueprint_name"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "blueprints", []), "getFilename", []);
                // line 34
                echo "        ";
                if ((($context["type"] ?? null) == "pages")) {
                    // line 35
                    echo "            ";
                    $context["blueprint_name"] = ((($context["type"] ?? null) . "/") . ($context["blueprint_name"] ?? null));
                    // line 36
                    echo "        ";
                }
                // line 37
                echo "        ";
                $context["blueprint"] = base64_encode(($context["blueprint_name"] ?? null));
                // line 38
                echo "        ";
                $context["real_path"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", []), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method");
                // line 39
                echo "        ";
                $context["remove"] = (($this->getAttribute(($context["global"] ?? null), "file_url_remove", [])) ? ($this->getAttribute(($context["global"] ?? null), "file_url_remove", [])) : (($this->getAttribute(($context["global"] ?? null), "base_url_relative", []) . "/media.json")));
                // line 40
                echo "        ";
                $context["remove"] = $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((((((((((((((((((((                // line 41
($context["remove"] ?? null) . "/route") . $this->getAttribute($this->getAttribute(                // line 42
($context["config"] ?? null), "system", []), "param_sep", [])) . base64_encode((($this->getAttribute(($context["global"] ?? null), "base_path", []) . "/") . ($context["real_path"] ?? null)))) . "/task") . $this->getAttribute($this->getAttribute(                // line 43
($context["config"] ?? null), "system", []), "param_sep", [])) . "removeFileFromBlueprint") . "/proute") . $this->getAttribute($this->getAttribute(                // line 44
($context["config"] ?? null), "system", []), "param_sep", [])) . base64_encode(($context["route"] ?? null))) . "/blueprint") . $this->getAttribute($this->getAttribute(                // line 45
($context["config"] ?? null), "system", []), "param_sep", [])) . ($context["blueprint"] ?? null)) . "/type") . $this->getAttribute($this->getAttribute(                // line 46
($context["config"] ?? null), "system", []), "param_sep", [])) . ($context["type"] ?? null)) . "/field") . $this->getAttribute($this->getAttribute(                // line 47
($context["config"] ?? null), "system", []), "param_sep", [])) . $this->getAttribute(($context["files"] ?? null), "name", [])) . "/path") . $this->getAttribute($this->getAttribute(                // line 48
($context["config"] ?? null), "system", []), "param_sep", [])) . base64_encode($this->getAttribute(($context["value"] ?? null), "path", []))), 1 => "admin-form", 2 => "admin-nonce"], "method");
                // line 49
                echo "
        ";
                // line 50
                $context["file"] = twig_array_merge(($context["value"] ?? null), ["remove" => ($context["remove"] ?? null), "path" => ((($this->getAttribute(($context["uri"] ?? null), "rootUrl", []) == "/")) ? ("/") : ((($this->getAttribute(($context["uri"] ?? null), "rootUrl", []) . "/") . ($context["real_path"] ?? null))))]);
                // line 51
                echo "        <div class=\"hidden\" data-file=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["file"] ?? null)), "html_attr");
                echo "\"></div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/file/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 51,  302 => 50,  299 => 49,  297 => 48,  296 => 47,  295 => 46,  294 => 45,  293 => 44,  292 => 43,  291 => 42,  290 => 41,  288 => 40,  285 => 39,  282 => 38,  279 => 37,  276 => 36,  273 => 35,  270 => 34,  268 => 33,  265 => 32,  263 => 31,  260 => 30,  257 => 29,  254 => 28,  251 => 27,  248 => 26,  245 => 25,  231 => 24,  215 => 21,  209 => 19,  203 => 17,  201 => 16,  196 => 15,  194 => 14,  189 => 13,  187 => 12,  182 => 11,  180 => 10,  177 => 9,  174 => 8,  171 => 7,  168 => 6,  165 => 5,  163 => 4,  151 => 3,  144 => 77,  139 => 76,  134 => 75,  127 => 74,  123 => 73,  120 => 72,  117 => 71,  109 => 88,  104 => 85,  101 => 84,  92 => 82,  88 => 81,  84 => 79,  81 => 71,  58 => 68,  55 => 67,  53 => 66,  50 => 65,  47 => 64,  44 => 63,  41 => 62,  38 => 61,  34 => 1,  32 => 59,  30 => 58,  28 => 57,  26 => 55,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% macro bytesToSize(bytes) -%}
    {% spaceless %}
        {% set kilobyte = 1024 %}
        {% set megabyte = kilobyte * 1024 %}
        {% set gigabyte = megabyte * 1024 %}
        {% set terabyte = gigabyte * 1024 %}

        {% if bytes < kilobyte %}
            {{ bytes ~ ' B' }}
        {% elseif bytes < megabyte %}
            {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
        {% elseif bytes < gigabyte %}
            {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
        {% elseif bytes < terabyte %}
            {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
        {% else %}
            {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
        {% endif %}
    {% endspaceless %}
{%- endmacro %}

{% macro preview(path, value, global) %}
    {% if value %}
        {% set uri = global.grav.uri %}
        {% set files = global.files %}
        {% set config = global.grav.config %}
        {% set route = global.context.route() %}

        {% set type = global.blueprint_type ? global.blueprint_type : global.admin.location ? global.admin.location : 'config' %}

        {% set blueprint_name = global.blueprints.getFilename %}
        {% if type == 'pages' %}
            {% set blueprint_name = type ~ '/' ~ blueprint_name %}
        {% endif %}
        {% set blueprint = base64_encode(blueprint_name) %}
        {% set real_path = global.admin.getPagePathFromToken(path) %}
        {% set remove = global.file_url_remove ? global.file_url_remove : (global.base_url_relative ~ '/media.json') %}
        {% set remove = uri.addNonce(
            remove ~
            '/route' ~ config.system.param_sep ~ base64_encode(global.base_path ~ '/' ~ real_path) ~
            '/task' ~ config.system.param_sep ~ 'removeFileFromBlueprint' ~
            '/proute' ~ config.system.param_sep ~ base64_encode(route) ~
            '/blueprint' ~ config.system.param_sep ~ blueprint ~
            '/type' ~ config.system.param_sep ~ type ~
            '/field' ~ config.system.param_sep ~ files.name ~
            '/path' ~ config.system.param_sep ~ base64_encode(value.path), 'admin-form', 'admin-nonce') %}

        {% set file = value|merge({remove: remove, path: (uri.rootUrl == '/' ? '/' : uri.rootUrl ~ '/' ~ real_path) }) %}
        <div class=\"hidden\" data-file=\"{{ file|json_encode|e('html_attr') }}\"></div>
    {% endif %}
{% endmacro %}

{% import _self as macro %}

{% set defaults = config.plugins.form %}
{% set files = defaults.files|merge(field|default([])) %}
{% set limit = not field.multiple ? 1 : files.limit %}

{% block input %}
    {% set upload_limit = config.system.media.upload_limit  / 1024 / 1024 %}
    {% set page_can_upload = exists or (type == 'page' and not exists and not (field.destination starts with '@self' or field.destination starts with 'self@')) %}
    {% if type is not defined or page_can_upload %}

    {% set settings = {name: field.name, paramName: (scope ~ field.name)|fieldName ~ (files.multiple ? '[]' : ''), limit: limit, filesize: upload_limit, accept: files.accept, resolution: files.resolution, resizeWidth: files.resizeWidth, resizeHeight: files.resizeHeight, resizeQuality: files.resizeQuality } %}

    <div class=\"form-input-wrapper dropzone files-upload {% if field.fancy is not same as(false) %}form-input-file{% endif %} {{ field.size|default('xlarge') }}\" data-grav-file-settings=\"{{ settings|json_encode|e('html_attr') }}\" {% if file_url_add %}data-file-url-add=\"{{ file_url_add }}\"{% endif %} {% if file_url_remove %}data-file-url-remove=\"{{ file_url_remove }}\"{% endif %}>
        <input
            {# required attribute structures #}
            {% block input_attributes %}
                type=\"file\"
                {% if files.multiple %}multiple=\"multiple\"{% endif %}
                {% if files.accept %}accept=\"{{ files.accept|join(',') }}\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.random_name %}random=\"true\"{% endif %}
                {{ parent() }}
            {% endblock %}
        />

        {% for path, file in value %}
            {{ macro.preview(path, file, _context) }}
        {% endfor %}
        {% include 'forms/fields/hidden/hidden.html.twig' with {field: {name: '_json.' ~ field.name}, value:value|raw|json_encode} %}
    </div>

    {% else %}
        <span class=\"note\">{{ \"PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED\"|tu|raw }}</span>
    {% endif %}
{% endblock %}
", "forms/fields/file/file.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/forms/fields/file/file.html.twig");
    }
}
