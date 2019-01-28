<?php

/* forms/fields/2fa_secret/2fa_secret.html.twig */
class __TwigTemplate_c0d8cd4ab479265375716f262e211eb2fdf538f073bb573a12545747e79aebc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/2fa_secret/2fa_secret.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"form-input-wrapper twofa-wrapper\">
        ";
        // line 5
        try {            // line 6
            echo "            ";
            $context["user"] = $this->getAttribute(($context["grav"] ?? null), "user", []);
            // line 7
            echo "
            ";
            // line 8
            $context["secret"] = (($this->getAttribute(($context["user"] ?? null), "twofa_secret", [])) ? ($this->getAttribute(($context["user"] ?? null), "twofa_secret", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "login", []), "twoFactorAuth", []), "createSecret", [], "method")));
            // line 9
            echo "            ";
            $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "login", []), "twoFactorAuth", []), "getQrImageData", [0 => $this->getAttribute(($context["user"] ?? null), "username", []), 1 => ($context["secret"] ?? null)], "method");
            // line 10
            echo "
            <img style=\"border: 1px solid #ddd\" data-2fa-image src=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" />
            <div>
                <span>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_LOGIN.2FA_SECRET"), "html", null, true);
            echo ": </span><span class=\"twofa-secret-code\" data-2fa-secret>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->regexReplace(($context["secret"] ?? null), "/(\\w{4})/", "\\1 "), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 15
            if (($context["admin"] ?? null)) {
                // line 16
                echo "            <div class=\"danger twofa-wrapper\">
                <button data-hint=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_LOGIN.2FA_REGEN_HINT"), "html", null, true);
                echo "\" class=\"button button-small hint--bottom\" data-2fa-regenerate><i class=\"fa fa-fw fa-refresh\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.2FA_REGENERATE"), "html", null, true);
                echo "</button>
            </div>
            ";
            }
            // line 20
            echo "            <input type=\"text\" class=\"no-form\" style=\"display:none;\" name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\" data-2fa-value value=\"";
            echo twig_escape_filter($this->env, ($context["secret"] ?? null), "html", null, true);
            echo "\" />

        ";
        } catch (\Exception $e) {
            if (isset($context['grav']['debugger'])) $context['grav']['debugger']->addException($e);
            $context['e'] = $e;
            // line 23
            echo "            <div class=\"notice error\">
                <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "message", []), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 27
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/2fa_secret/2fa_secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  88 => 24,  85 => 23,  74 => 20,  66 => 17,  63 => 16,  61 => 15,  54 => 13,  49 => 11,  46 => 10,  43 => 9,  41 => 8,  38 => 7,  35 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

{% block input %}
    <div class=\"form-input-wrapper twofa-wrapper\">
        {% try %}
            {% set user = grav.user %}

            {% set secret = user.twofa_secret ?: grav.login.twoFactorAuth.createSecret() %}
            {% set image = grav.login.twoFactorAuth.getQrImageData(user.username, secret) %}

            <img style=\"border: 1px solid #ddd\" data-2fa-image src=\"{{ image }}\" />
            <div>
                <span>{{ 'PLUGIN_LOGIN.2FA_SECRET'|tu }}: </span><span class=\"twofa-secret-code\" data-2fa-secret>{{ secret|regex_replace('/(\\\\w{4})/', '\\\\1 ') }}</span>
            </div>
            {% if admin %}
            <div class=\"danger twofa-wrapper\">
                <button data-hint=\"{{ 'PLUGIN_LOGIN.2FA_REGEN_HINT'|tu }}\" class=\"button button-small hint--bottom\" data-2fa-regenerate><i class=\"fa fa-fw fa-refresh\"></i> {{ 'PLUGIN_LOGIN.2FA_REGENERATE'|t }}</button>
            </div>
            {% endif %}
            <input type=\"text\" class=\"no-form\" style=\"display:none;\" name=\"{{ (scope ~ field.name)|fieldName }}\" data-2fa-value value=\"{{ secret }}\" />

        {% catch %}
            <div class=\"notice error\">
                <p>{{ e.message }}</p>
            </div>
        {% endcatch %}
    </div>
{% endblock %}
", "forms/fields/2fa_secret/2fa_secret.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/login/templates/forms/fields/2fa_secret/2fa_secret.html.twig");
    }
}
