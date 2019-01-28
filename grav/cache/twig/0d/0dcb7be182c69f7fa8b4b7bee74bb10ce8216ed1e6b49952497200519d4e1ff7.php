<?php

/* partials/release-toggle.html.twig */
class __TwigTemplate_0a45793ea224eb1ea2359ed8c4480512bdaba80e6106e514bc1506d1b7329fd4 extends Twig_Template
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
        echo "<form id=\"gpm-release-toggle\">
    <div class=\"switch-toggle switch-grav\" data-url=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/ajax.json/task:gpmRelease\">
        <input type=\"radio\" value=\"stable\" id=\"stable\" name=\"channel-switch\" class=\"highlight\" ";
        // line 3
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "gpm", []), "releases", []) == "stable")) {
            echo " checked=\"checked\"";
        }
        echo ">
        <label for=\"stable\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.STABLE"), "html", null, true);
        echo "</label>
        <input type=\"radio\" value=\"testing\" id=\"testing\" name=\"channel-switch\" class=\"highlight\" ";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "gpm", []), "releases", []) == "testing")) {
            echo " checked=\"checked\"";
        }
        echo ">
        <label for=\"testing\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TESTING"), "html", null, true);
        echo "</label>
        <a></a>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "partials/release-toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  36 => 5,  32 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form id=\"gpm-release-toggle\">
    <div class=\"switch-toggle switch-grav\" data-url=\"{{ base_url }}/ajax.json/task:gpmRelease\">
        <input type=\"radio\" value=\"stable\" id=\"stable\" name=\"channel-switch\" class=\"highlight\" {% if config.system.gpm.releases == 'stable' %} checked=\"checked\"{% endif %}>
        <label for=\"stable\">{{ \"PLUGIN_ADMIN.STABLE\"|tu }}</label>
        <input type=\"radio\" value=\"testing\" id=\"testing\" name=\"channel-switch\" class=\"highlight\" {% if config.system.gpm.releases == 'testing' %} checked=\"checked\"{% endif %}>
        <label for=\"testing\">{{ \"PLUGIN_ADMIN.TESTING\"|tu }}</label>
        <a></a>
    </div>
</form>
", "partials/release-toggle.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/partials/release-toggle.html.twig");
    }
}
