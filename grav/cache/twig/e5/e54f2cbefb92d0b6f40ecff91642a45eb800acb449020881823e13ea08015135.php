<?php

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_c51ed89668b94c97fbaf420d607ae0ca764c1550428b0916c39c0a6c8fa275d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/toggle/toggle.html.twig", 1);
        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 8
        $context["macro"] = $this;
        // line 10
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 11
        $context["value"] = (((($context["value"] ?? null) === false)) ? (0) : (($context["value"] ?? null)));
        // line 13
        $context["has_hidden"] = false;
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 15
            if (twig_test_empty($context["key"])) {
                // line 16
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-field-name=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
";
    }

    // line 25
    public function block_input($context, array $blocks = [])
    {
        // line 26
        echo "
    <div class=\"switch-toggle switch-grav ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " switch-";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "options", [])), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\">
        ";
        // line 28
        $context["maxLen"] = 0;
        // line 29
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 30
            echo "            ";
            $context["translation"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"])));
            // line 31
            echo "            ";
            $context["maxLen"] = max(twig_length_filter($this->env, ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 35
            echo "            ";
            $context["id"] = (("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . $context["key"]);
            // line 36
            echo "            ";
            $context["translation"] = twig_trim_filter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"]))));
            // line 37
            echo "
            <input type=\"radio\"
                value=\"";
            // line 39
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                id=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"
                name=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                ";
            // line 42
            if ($this->getAttribute(($context["field"] ?? null), "highlight", [], "any", true, true)) {
                // line 43
                echo "                class=\"";
                echo ((($this->getAttribute(($context["field"] ?? null), "highlight", []) == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
                ";
            }
            // line 45
            echo "                ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 46
            echo "                ";
            if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
                // line 47
                echo "                    ";
                if ((("" . $context["key"]) == ("" . ($context["value"] ?? null)))) {
                    // line 48
                    echo "                        checked=\"checked\"
                    ";
                } elseif ((                // line 49
(isset($context["value"]) || array_key_exists("value", $context)) && (($context["key"] == 1) || ($context["key"] == "1")))) {
                    // line 50
                    echo "                        checked=\"checked\"
                    ";
                }
                // line 52
                echo "                ";
            } else {
                // line 53
                echo "                    ";
                if ((("" . $context["key"]) == ("" . ($context["value"] ?? null)))) {
                    // line 54
                    echo "                        checked=\"checked\"
                    ";
                }
                // line 56
                echo "                ";
            }
            // line 57
            echo "                ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
                echo "required=\"required\"";
            }
            // line 58
            echo "            />
            <label for=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo twig_trim_filter($context["macro"]->getspanToggle(($context["translation"] ?? null), ($context["maxLen"] ?? null)));
            echo "</label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 5
            echo "    ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
            echo "
";
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
        return "forms/fields/toggle/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 5,  204 => 4,  191 => 3,  186 => 61,  176 => 59,  173 => 58,  168 => 57,  165 => 56,  161 => 54,  158 => 53,  155 => 52,  151 => 50,  149 => 49,  146 => 48,  143 => 47,  140 => 46,  135 => 45,  129 => 43,  127 => 42,  123 => 41,  119 => 40,  115 => 39,  111 => 37,  108 => 36,  105 => 35,  101 => 34,  98 => 33,  92 => 32,  89 => 31,  86 => 30,  81 => 29,  79 => 28,  71 => 27,  68 => 26,  65 => 25,  59 => 22,  54 => 21,  51 => 20,  47 => 1,  40 => 16,  38 => 15,  34 => 14,  32 => 13,  30 => 11,  28 => 10,  26 => 8,  11 => 1,);
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

{% macro spanToggle(input, length) %}
    {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
    {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% import _self as macro %}

{% set value = (value is null ? field.default : value) %}
{% set value = (value is same as(false) ? 0 : value) %}

{% set has_hidden = false %}
{% for key, text in field.options %}
    {% if key is empty %}
      {% set has_hidden = true %}
    {% endif %}
{% endfor %}

{% block global_attributes %}
    {{ parent() }}
    data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\"
{% endblock %}

{% block input %}

    <div class=\"switch-toggle switch-grav {{ field.size }} switch-{{ field.options|length }} {{ field.classes }}\">
        {% set maxLen = 0 %}
        {% for text in field.options %}
            {% set translation = grav.twig.twig.filters['tu'] is defined ? text|tu : text|t %}
            {% set maxLen = max(translation|length, maxLen) %}
        {% endfor %}

        {% for key, text in field.options %}
            {% set id = \"toggle_\" ~ field.name ~ key %}
            {% set translation = (grav.twig.twig.filters['tu'] is defined ? text|tu : text|t)|trim %}

            <input type=\"radio\"
                value=\"{{ key }}\"
                id=\"{{ id }}\"
                name=\"{{ (scope ~ field.name)|fieldName }}\"
                {% if field.highlight is defined %}
                class=\"{{ field.highlight == '' ~ key ? 'highlight' : '' }}\"
                {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.toggleable %}
                    {% if '' ~ key == '' ~ value %}
                        checked=\"checked\"
                    {% elseif value is defined and (key == 1 or key == '1') %}
                        checked=\"checked\"
                    {% endif %}
                {% else %}
                    {% if '' ~ key == '' ~ value %}
                        checked=\"checked\"
                    {% endif %}
                {% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
            />
            <label for=\"{{ id }}\">{{ (macro.spanToggle(translation, maxLen)|trim)|raw }}</label>
        {% endfor %}
    </div>
{% endblock %}
", "forms/fields/toggle/toggle.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/forms/fields/toggle/toggle.html.twig");
    }
}
