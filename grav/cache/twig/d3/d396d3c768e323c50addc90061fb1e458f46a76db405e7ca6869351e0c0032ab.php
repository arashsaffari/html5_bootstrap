<?php

/* forms/fields/checkbox/checkbox.html.twig */
class __TwigTemplate_8ccf17673a47a55a8712255731fc11e8405cd66a8e96f079e90fc00f5ec93a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/checkbox/checkbox.html.twig", 1);
        $this->blocks = [
            'label' => [$this, 'block_label'],
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
    }

    // line 6
    public function block_input($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", []), $this->getAttribute(($context["field"] ?? null), "name", []))) : ($this->getAttribute(($context["field"] ?? null), "name", []))) . "-") . ($context["key"] ?? null));
        // line 8
        echo "    <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
        echo "\">
        <label class=\"";
        // line 9
        echo ($context["form_field_checkbox_classes"] ?? null);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null));
        echo "\">
        <input
            ";
        // line 12
        echo "            name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
            value=\"";
        // line 13
        echo twig_join_filter(($context["value"] ?? null), ", ");
        echo "\"
            type=\"checkbox\"
            ";
        // line 15
        if ((($context["value"] ?? null) == true)) {
            echo " checked=\"checked\" ";
        }
        // line 16
        echo "
            ";
        // line 18
        echo "            ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 27
        echo "            />
            <i class=\"form-icon\"></i>
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "label", [])));
        echo " ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
";
    }

    // line 18
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 19
        echo "                id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null));
        echo "\"
                ";
        // line 20
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute(($context["field"] ?? null), "classes", []);
            echo "\" ";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 22
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 23
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 24
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 25
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 26
        echo "            ";
    }

    public function getTemplateName()
    {
        return "forms/fields/checkbox/checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 26,  127 => 25,  122 => 24,  117 => 23,  112 => 22,  105 => 21,  99 => 20,  94 => 19,  91 => 18,  81 => 29,  77 => 27,  74 => 18,  71 => 16,  67 => 15,  62 => 13,  57 => 12,  50 => 9,  41 => 8,  38 => 7,  35 => 6,  30 => 3,  11 => 1,);
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

{% block label %}
{% endblock %}

{% block input %}
    {% set id = field.id|default(field.name) ~ '-' ~ key %}
    <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
        <label class=\"{{ form_field_checkbox_classes }}\" for=\"{{ id|e }}\">
        <input
            {# required attribute structures #}
            name=\"{{ (scope ~ field.name)|fieldName }}\"
            value=\"{{ value|join(', ') }}\"
            type=\"checkbox\"
            {% if value == true %} checked=\"checked\" {% endif %}

            {# input attribute structures #}
            {% block input_attributes %}
                id=\"{{ id|e }}\"
                {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
            {% endblock %}
            />
            <i class=\"form-icon\"></i>
            {{ field.label|t|e }} {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
{% endblock %}
", "forms/fields/checkbox/checkbox.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/templates/forms/fields/checkbox/checkbox.html.twig");
    }
}
