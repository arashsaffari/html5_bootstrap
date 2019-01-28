<?php

/* forms/fields/display/display.html.twig */
class __TwigTemplate_89f8b446004c161a7a46bf78da387bbffb294f8039cbac49325d3dcd85698c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/display/display.html.twig", 1);
        $this->blocks = [
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
        if ($this->getAttribute(($context["field"] ?? null), "file", [])) {
            // line 4
            $context["content"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->readFileFunc($this->getAttribute(($context["field"] ?? null), "file", []));
        } else {
            // line 6
            $context["content"] = $this->getAttribute(($context["field"] ?? null), "content", []);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_input($context, array $blocks = [])
    {
        // line 10
        echo "    <div class=\"form-display-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\" ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        echo ">
        ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
            // line 12
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                // line 13
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["content"] ?? null)));
                echo "
            ";
            } else {
                // line 15
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(($context["content"] ?? null)));
                echo "
            ";
            }
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                // line 19
                echo "                ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["content"] ?? null));
                echo "
            ";
            } else {
                // line 21
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(($context["content"] ?? null));
                echo "
            ";
            }
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/display/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  88 => 23,  82 => 21,  76 => 19,  73 => 18,  70 => 17,  64 => 15,  58 => 13,  55 => 12,  53 => 11,  40 => 10,  37 => 9,  33 => 1,  30 => 6,  27 => 4,  25 => 3,  11 => 1,);
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

{% if field.file %}
    {% set content = read_file(field.file) %}
{% else %}
    {% set content = field.content %}
{% endif %}

{% block input %}
    <div class=\"form-display-wrapper {{ field.size }} {{ field.classes }}\" {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}>
        {% if field.markdown %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ content|tu|markdown|raw }}
            {% else %}
                {{ content|t|markdown|raw }}
            {% endif %}
        {% else %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ content|tu|raw }}
            {% else %}
                {{ content|t|raw }}
            {% endif %}
        {% endif %}
    </div>
{% endblock %}
", "forms/fields/display/display.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/form/templates/forms/fields/display/display.html.twig");
    }
}
