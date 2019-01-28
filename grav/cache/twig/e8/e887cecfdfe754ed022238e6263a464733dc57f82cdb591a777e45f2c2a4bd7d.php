<?php

/* forms/fields/parents/parents.html.twig */
class __TwigTemplate_1e0f0ae83d8161cf434019605c72340495ae3c6b57f02a7fb39e967cc5029b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/pages/pages.html.twig", "forms/fields/parents/parents.html.twig", 1);
        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/pages/pages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context["last_page_route"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", []), "getLastPageRoute", []);
        // line 5
        echo "    ";
        $context["show_slug_val"] = true;
        // line 6
        echo "    ";
        $context["show_fullpath_val"] = false;
        // line 7
        echo "    ";
        $context["show_all_val"] = true;
        // line 8
        echo "
    ";
        // line 9
        $context["show_parents"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pages.show_parents"], "method");
        // line 10
        echo "    ";
        if ((($context["show_parents"] ?? null) == "folder")) {
            // line 11
            echo "        ";
            $context["show_slug_val"] = false;
            // line 12
            echo "    ";
        } elseif ((($context["show_parents"] ?? null) == "fullpath")) {
            // line 13
            echo "        ";
            $context["show_fullpath_val"] = true;
            // line 14
            echo "    ";
        }
        // line 15
        echo "    
    ";
        // line 16
        $context["limit_levels_val"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pages.parents_levels"], "method");
        // line 17
        echo "
    ";
        // line 18
        $context["show_modular_val"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pages.show_modular"], "method");
        // line 19
        echo "    ";
        if ((($context["show_modular_val"] ?? null) == false)) {
            // line 20
            echo "        ";
            $context["show_all_val"] = false;
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $context["defaults"] = ["show_root" => true, "show_all" => ($context["show_all_val"] ?? null), "show_modular" => ($context["show_modular_val"] ?? null), "show_slug" => ($context["show_slug_val"] ?? null), "show_fullpath" => ($context["show_fullpath_val"] ?? null), "default" => ($context["last_page_route"] ?? null), "limit_levels" => ($context["limit_levels_val"] ?? null)];
        // line 24
        echo "    ";
        $context["field"] = twig_array_merge(($context["field"] ?? null), ($context["defaults"] ?? null));
        // line 25
        echo "    ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/parents/parents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  87 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  71 => 18,  68 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/fields/pages/pages.html.twig\" %}

{% block input %}
    {% set last_page_route = admin.page.getLastPageRoute %}
    {% set show_slug_val = true %}
    {% set show_fullpath_val = false %}
    {% set show_all_val = true %}

    {% set show_parents = config.get('plugins.admin.pages.show_parents') %}
    {% if show_parents == 'folder' %}
        {% set show_slug_val = false %}
    {% elseif show_parents == 'fullpath' %}
        {% set show_fullpath_val = true %}
    {% endif %}
    
    {% set limit_levels_val = config.get('plugins.admin.pages.parents_levels') %}

    {% set show_modular_val = config.get('plugins.admin.pages.show_modular') %}
    {% if show_modular_val == false %}
        {% set show_all_val = false %}
    {% endif %}

    {% set defaults = {show_root:true, show_all:show_all_val, show_modular:show_modular_val, show_slug:show_slug_val, show_fullpath:show_fullpath_val, default:last_page_route, limit_levels:limit_levels_val} %}
    {% set field = field|merge(defaults) %}
    {{ parent() }}
{% endblock %}
", "forms/fields/parents/parents.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/forms/fields/parents/parents.html.twig");
    }
}
