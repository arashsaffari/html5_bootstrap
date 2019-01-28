<?php

/* forms/fields/captcha/captcha.html.twig */
class __TwigTemplate_9f81e8fb65f5b757de907a6b5f74dfa31624a9f43a61fe97e70ed8406023f85c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/captcha/captcha.html.twig", 1);
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
        echo "    <script>
        var captchaOnloadCallback = function captchaOnloadCallback() {
            grecaptcha.render('g-recaptcha', {
                'sitekey': \"";
        // line 7
        echo (($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) ? ($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) : ((($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) ? ($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "recaptcha", []), "site_key", [])))));
        echo "\",
                'callback': captchaValidatedCallback,
                'expired-callback': captchaExpiredCallback
            });
        };

        var captchaValidatedCallback = function captchaValidatedCallback() {

        };

        var captchaExpiredCallback = function captchaExpiredCallback() {
            grecaptcha.reset();
        };

        \$('form').submit(function(event) {
            if (\$(this).has(\"#g-recaptcha-response\").length && \$(\"#g-recaptcha-response\").val() === '') {
                event.preventDefault();
                alert(\"";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "translate", [0 => "PLUGIN_FORM.ERROR_VALIDATING_CAPTCHA"], "method");
        echo "\");
            }
        });
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl=";
        // line 28
        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "language", []);
        echo "\"
        async defer>
    </script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha\"></div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/captcha/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 28,  56 => 24,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
    <script>
        var captchaOnloadCallback = function captchaOnloadCallback() {
            grecaptcha.render('g-recaptcha', {
                'sitekey': \"{{field.recaptcha_site_key ?: field.recaptcha_site_key ?: config.plugins.form.recaptcha.site_key }}\",
                'callback': captchaValidatedCallback,
                'expired-callback': captchaExpiredCallback
            });
        };

        var captchaValidatedCallback = function captchaValidatedCallback() {

        };

        var captchaExpiredCallback = function captchaExpiredCallback() {
            grecaptcha.reset();
        };

        \$('form').submit(function(event) {
            if (\$(this).has(\"#g-recaptcha-response\").length && \$(\"#g-recaptcha-response\").val() === '') {
                event.preventDefault();
                alert(\"{{grav.language.translate('PLUGIN_FORM.ERROR_VALIDATING_CAPTCHA')}}\");
            }
        });
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl={{ grav.language.language }}\"
        async defer>
    </script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha\"></div>
{% endblock %}
", "forms/fields/captcha/captcha.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/form/templates/forms/fields/captcha/captcha.html.twig");
    }
}
