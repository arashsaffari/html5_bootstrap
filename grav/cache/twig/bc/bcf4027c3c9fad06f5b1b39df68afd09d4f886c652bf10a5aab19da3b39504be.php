<?php

/* default.html.twig */
class __TwigTemplate_ebaf17a8f45fbf2c38bd15ecaf007702ba87ca143bcfce34d323ae47cb105b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = [
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
        ob_start();
        // line 4
        echo "\t";
        $this->loadTemplate("partials/breadcrumbs.html.twig", "default.html.twig", 4)->display($context);
        $context["breadcrumbs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        ob_start();
        // line 8
        echo "\t";
        if ($this->getAttribute(($context["form"] ?? null), "message", [])) {
            // line 9
            echo "\t\t";
            $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
            // line 10
            echo "\t\t";
            $context["status_mapping"] = ["success" => "bg-success color_2", "error" => "bg-danger color_2", "warning" => "bg-warning"];
            // line 11
            echo "\t\t";
            $context["message"] = (((($context["inline_errors"] ?? null) && $this->getAttribute(($context["form"] ?? null), "messages", []))) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL")) : ($this->getAttribute(($context["form"] ?? null), "message", [])));
            // line 12
            echo "\t\t<div class=\"";
            echo $this->getAttribute(($context["form"] ?? null), "status", []);
            echo " ";
            echo (($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array")) ? ($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array")) : ("green"));
            echo " rounded p-20 my-30\">";
            echo ($context["message"] ?? null);
            echo "</div>
\t";
        }
        $context["form_massage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "\t";
        // line 18
        echo "\t
\t";
        // line 19
        echo twig_replace_filter($this->getAttribute(        // line 20
($context["page"] ?? null), "content", []), ["<!--%breadcrumbs%-->" =>         // line 21
($context["breadcrumbs"] ?? null), "<!--%form_massage%-->" =>         // line 22
($context["form_massage"] ?? null)]);
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  71 => 22,  70 => 21,  69 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  56 => 1,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  33 => 8,  31 => 7,  27 => 4,  25 => 3,  11 => 1,);
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

{% set breadcrumbs %}
\t{% include 'partials/breadcrumbs.html.twig' %}
{% endset %}

{% set form_massage %}
\t{% if form.message %}
\t\t{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}
\t\t{% set status_mapping = {'success':'bg-success color_2', 'error': 'bg-danger color_2', 'warning': 'bg-warning'} %}
\t\t{% set message = inline_errors and form.messages ? \"FORM.VALIDATION_FAIL\"|t : form.message %}
\t\t<div class=\"{{ form.status }} {{ status_mapping[form.status] ?: 'green' }} rounded p-20 my-30\">{{ message|raw }}</div>
\t{% endif %}
{% endset %}

{% block content %}
\t{# {{ page.content }} #}
\t
\t{{ 
\t\tpage.content|replace({
\t\t\t'<!--%breadcrumbs%-->': breadcrumbs,
\t\t\t'<!--%form_massage%-->': form_massage
\t\t})
\t}}
{% endblock %}
", "default.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/templates/default.html.twig");
    }
}
