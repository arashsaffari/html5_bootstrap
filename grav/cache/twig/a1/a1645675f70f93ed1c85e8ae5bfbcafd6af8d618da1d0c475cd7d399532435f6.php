<?php

/* forms/fields/checkboxes/checkboxes.html.twig */
class __TwigTemplate_0851734ac49b0f69db16d72fa0ad2c90fc9df472d33da7417ed9da62eaf10b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/checkboxes/checkboxes.html.twig", 1);
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
        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 5
        if ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys") && $this->getAttribute(($context["field"] ?? null), "default", []))) {
            // line 6
            $context["value"] = twig_array_merge($this->getAttribute(($context["field"] ?? null), "default", []), ($context["value"] ?? null));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-keys=\"";
        // line 11
        echo ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys")) ? ("true") : ("false"));
        echo "\"
    data-grav-field-name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
";
    }

    // line 15
    public function block_input($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 17
            echo "
        ";
            // line 18
            $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", []), $this->getAttribute(($context["field"] ?? null), "name", []))) : ($this->getAttribute(($context["field"] ?? null), "name", []))) . "-") . $context["key"]);
            // line 19
            echo "        ";
            $context["name"] = ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys")) ? ($context["key"]) : (($context["id"] ?? null)));
            // line 20
            echo "        ";
            $context["val"] = ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys")) ? ("1") : ($context["key"]));
            // line 21
            echo "        ";
            $context["checked"] = ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys")) ? ($this->getAttribute(($context["value"] ?? null), $context["key"], [], "array")) : (twig_in_filter($context["key"], ($context["value"] ?? null))));
            // line 22
            echo "        ";
            $context["help"] = ((twig_in_filter($context["key"], twig_get_array_keys_filter($this->getAttribute(($context["field"] ?? null), "help_options", [])))) ? ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "help_options", []), $context["key"], [], "array")) : (false));
            // line 23
            echo "
        <div class=\"checkboxes ";
            // line 24
            echo twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
            <input type=\"checkbox\"
                   id=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\"
                   value=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["val"] ?? null));
            echo "\"
                   name=\"";
            // line 28
            echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . "[") . ($context["name"] ?? null)) . "]"), "html", null, true);
            echo "\"
                   ";
            // line 29
            if (($context["checked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 30
            echo "                   ";
            if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
                echo "\" ";
            }
            // line 31
            echo "                   ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 32
            echo "
            >
            <label style=\"display: inline\" for=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\">
                ";
            // line 35
            if (($context["help"] ?? null)) {
                // line 36
                echo "                    <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(($context["help"] ?? null)), "html_attr");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"]));
                echo "</span>
                ";
            } else {
                // line 38
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"]));
                echo "
                ";
            }
            // line 40
            echo "            </label>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/checkboxes/checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 40,  138 => 38,  130 => 36,  128 => 35,  124 => 34,  120 => 32,  115 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  68 => 18,  65 => 17,  60 => 16,  57 => 15,  51 => 12,  47 => 11,  42 => 10,  39 => 9,  35 => 1,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
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

{% set originalValue = value %}
{% set value = (value is null ? field.default : value) %}
{% if field.use == 'keys' and field.default %}
    {% set value = field.default|merge(value) %}
{% endif %}

{% block global_attributes %}
    {{ parent() }}
    data-grav-keys=\"{{ field.use == 'keys' ? 'true' : 'false' }}\"
    data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\"
{% endblock %}

{% block input %}
    {% for key, text in field.options %}

        {% set id = field.id|default(field.name) ~ '-' ~ key %}
        {% set name = field.use == 'keys' ? key : id %}
        {% set val = field.use == 'keys' ? '1' : key %}
        {% set checked = (field.use == 'keys' ? value[key] : key in value) %}
        {% set help = (key in field.help_options|keys ? field.help_options[key] : false) %}

        <div class=\"checkboxes {{ form_field_wrapper_classes }} {{ field.wrapper_classes }}\">
            <input type=\"checkbox\"
                   id=\"{{ id|e }}\"
                   value=\"{{ val|e }}\"
                   name=\"{{ (scope ~ field.name)|fieldName ~ '[' ~ name ~ ']' }}\"
                   {% if checked %}checked=\"checked\"{% endif %}
                   {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                   {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}

            >
            <label style=\"display: inline\" for=\"{{ id|e }}\">
                {% if help %}
                    <span class=\"hint--bottom\" data-hint=\"{{ help|t|e('html_attr') }}\">{{ text|t|e }}</span>
                {% else %}
                    {{ text|t|e }}
                {% endif %}
            </label>
        </div>
    {% endfor %}
{% endblock %}
", "forms/fields/checkboxes/checkboxes.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/form/templates/forms/fields/checkboxes/checkboxes.html.twig");
    }
}
