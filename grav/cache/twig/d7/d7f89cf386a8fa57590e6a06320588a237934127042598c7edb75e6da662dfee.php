<?php

/* forms/fields/userinfo/userinfo.html.twig */
class __TwigTemplate_64ccdeb3896f48ab445d5d7ec3313835892977e1b5770bfd3037b92501f98f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        ";
        // line 3
        $this->loadTemplate("partials/userinfo-avatar.html.twig", "forms/fields/userinfo/userinfo.html.twig", 3)->display($context);
        // line 4
        echo "    </div>
    <div class=\"form-data block size-2-3\">
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "fullname", []), "html", null, true);
        echo "</h2>
        <h5>
        <a href=\"mailto:";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", []), "html", null, true);
        echo "</a>
        ";
        // line 9
        if ($this->getAttribute(($context["data"] ?? null), "title", [])) {
            // line 10
            echo "        - ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", []), "html", null, true);
            echo "
        ";
        }
        // line 12
        echo "        </h5>
        ";
        // line 13
        $this->loadTemplate("partials/userinfo-avatar-credit.html.twig", "forms/fields/userinfo/userinfo.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/userinfo/userinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  51 => 13,  48 => 12,  42 => 10,  40 => 9,  34 => 8,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        {% include 'partials/userinfo-avatar.html.twig' %}
    </div>
    <div class=\"form-data block size-2-3\">
        <h2>{{ data.fullname }}</h2>
        <h5>
        <a href=\"mailto:{{ data.email }}\">{{ data.email }}</a>
        {% if data.title %}
        - {{ data.title }}
        {% endif %}
        </h5>
        {% include 'partials/userinfo-avatar-credit.html.twig' %}
    </div>
</div>
", "forms/fields/userinfo/userinfo.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/forms/fields/userinfo/userinfo.html.twig");
    }
}
