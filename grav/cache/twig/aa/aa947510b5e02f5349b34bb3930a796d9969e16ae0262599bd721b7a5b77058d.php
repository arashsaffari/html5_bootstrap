<?php

/* partials/form-messages.html.twig */
class __TwigTemplate_e1a218aee0df885921b8f48468c99195f00b764704e8339abe72e2dafe9b5b70 extends Twig_Template
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
        if ($this->getAttribute(($context["form"] ?? null), "message", [])) {
            // line 2
            echo "  <div class=\"container mt-80\">\t
    <div class=\"row\">
      <div class=\"col-lg-12\">
        ";
            // line 5
            $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
            // line 6
            echo "        ";
            $context["status_mapping"] = ["success" => "alert alert-success", "error" => "alert alert-danger", "warning" => "alert alert-warning"];
            // line 7
            echo "        ";
            $context["message"] = (((($context["inline_errors"] ?? null) && $this->getAttribute(($context["form"] ?? null), "messages", []))) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL")) : ($this->getAttribute(($context["form"] ?? null), "message", [])));
            // line 8
            echo "        <div class=\"";
            echo $this->getAttribute(($context["form"] ?? null), "status", []);
            echo " ";
            echo (($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array")) ? ($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array")) : ("green"));
            echo " mt-2 mb-2\">";
            echo ($context["message"] ?? null);
            echo "</div>
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.message %}
  <div class=\"container mt-80\">\t
    <div class=\"row\">
      <div class=\"col-lg-12\">
        {% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}
        {% set status_mapping = {'success':'alert alert-success', 'error': 'alert alert-danger', 'warning': 'alert alert-warning'} %}
        {% set message = inline_errors and form.messages ? \"FORM.VALIDATION_FAIL\"|t : form.message %}
        <div class=\"{{ form.status }} {{ status_mapping[form.status] ?: 'green' }} mt-2 mb-2\">{{ message|raw }}</div>
      </div>
    </div>
  </div>
{% endif %}", "partials/form-messages.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/templates/partials/form-messages.html.twig");
    }
}
