<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt */
class __TwigTemplate_ffc7fbbaf291f5f45d6a786eb8c81670b48dee558794169b36840cb52f7b5d3a extends Twig_Template
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
        echo "<div class=\"container my-100\">  
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Kontakt</h1>
            <hr></div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <!--%form_massage%-->
            ";
        // line 10
        echo call_user_func_array($this->env->getFunction('my_test')->getCallable(), ["Test"]);
        echo "
            ";
        // line 11
        echo $this->getAttribute(($context["macros"] ?? null), "input", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 => ($context["text"] ?? null), 3 => ($context["size"] ?? null)], "method");
        echo "
            ";
        // line 12
        echo $this->getAttribute($this, "input", [0 => "name", 1 => "value", 2 => "type", 3 => "size"], "method");
        echo "
            <form name=\"kontakt\" action=\"\" method=\"POST\" id=\"kontakt\">
                <fieldset><div class=\"form-group\">
                        <label for=\"firmenname\">Firmenname:</label>
                        <input name=\"data[firmenname]\" type=\"text\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "value", [0 => "firmenname"], "method"), "html_attr");
        echo "\" class=\"form-control\" id=\"firmenname\"></div>
                    <div class=\"form-group\">
                        <label for=\"anrede\">Anrede: <span class=\"required\">*</span></label>
                        <select name=\"data[anrede]\" class=\"form-control\" id=\"anrede\" autocomplete=\"on\"><option value=\"\"></option><option value=\"f\" if uri.query endif>Frau</option><option value=\"m\" if uri.query endif>Herr</option></select></div>
                    <div class=\"form-group\">
                        <label for=\"name\">Vor- und Nachname: <span class=\"required\">*</span></label>
                        <input name=\"data[name]\" type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "name"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"name\"></div>
                    <div class=\"form-group\">
                        <label for=\"email\">E-Mail: <span class=\"required\">*</span></label>
                        <input name=\"data[email]\" type=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "email"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"telefon\">Telefon:</label>
                        <input name=\"data[telefon]\" type=\"tel\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "telefon"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"telefon\"></div>
                    <div class=\"form-group\">
                        <label for=\"betreff\">Betreff: <span class=\"required\">*</span></label>
                        <input name=\"data[betreff]\" type=\"text\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "betreff"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"betreff\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"nachricht\">Nachricht:</label>
                        <textarea name=\"data[nachricht]\" class=\"form-control\" id=\"nachricht\" rows=\"8\">";
        // line 34
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "nachricht"], "method")), "html");
        echo "</textarea></div>
                    <div class=\"col-lg-12\">
                        <div class=\"checkbox\" style=\"margin-top:20px;\">
                            <table><tr><td valign=\"top\"><input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"></td>
                                    <td><label for=\"ja_ich_stimme_zu\" class=\"ml-5\">Mit dieser Anmeldung akzeptieren Sie die <a href=\"%7B%7Burl('agbs')%7D%7D\" target=\"_blank\" class=\"\">AGB</a> der {FIRMENNAME} und bestätigen die Kenntnisnahme der Widerrufsbelehrung und unsere <a href=\"%7B%7Burl('datenschutz')%7D%7D\" target=\"_blank\" class=\"\">Datenschutzbestimmungen</a>.</label></td>
                                </tr></table></div>
                    </div>
                    <div class=\"form-group mt-30\">
                        <div style=\"width: 304px;\" class=\"mx-auto\">
                            <label for=\"captcha\">Captcha: <span class=\"required\">*</span></label>
                            <div class=\"form-data\" data-grav-field=\"captcha\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                                <script>
                                    var captchaOnloadCallback = function captchaOnloadCallback() {
                                        grecaptcha.render('g-recaptcha', {
                                            'sitekey': \"6Le5vnUUAAAAAHzAy9rfm_wy63bXttVCLFOtD0Lu\",
                                            'callback': captchaValidatedCallback,
                                            'expired-callback': captchaExpiredCallback
                                        });
                                    };
                                    var captchaValidatedCallback = function captchaValidatedCallback() {};
                                    var captchaExpiredCallback = function captchaExpiredCallback() { grecaptcha.reset(); };
                                </script><script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&amp;render=explicit&amp;hl=de\" async defer></script><div class=\"g-recaptcha mx-auto\" id=\"g-recaptcha\"></div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"__form-name__\" value=\"kontakt\">
                    ";
        // line 60
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary\" type=\"submit\">Senden</button>
                    </div>
                </fieldset></form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 60,  78 => 34,  72 => 31,  66 => 28,  60 => 25,  54 => 22,  45 => 16,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container my-100\">  
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Kontakt</h1>
            <hr></div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <!--%form_massage%-->
            {{ my_test(\"Test\") }}
            {{ macros.input(name, value, text, size) }}
            {{ _self.input('name', 'value', 'type', 'size') }}
            <form name=\"kontakt\" action=\"\" method=\"POST\" id=\"kontakt\">
                <fieldset><div class=\"form-group\">
                        <label for=\"firmenname\">Firmenname:</label>
                        <input name=\"data[firmenname]\" type=\"text\" value=\"{{ form.value('firmenname')|e('html_attr') }}\" class=\"form-control\" id=\"firmenname\"></div>
                    <div class=\"form-group\">
                        <label for=\"anrede\">Anrede: <span class=\"required\">*</span></label>
                        <select name=\"data[anrede]\" class=\"form-control\" id=\"anrede\" autocomplete=\"on\"><option value=\"\"></option><option value=\"f\" if uri.query endif>Frau</option><option value=\"m\" if uri.query endif>Herr</option></select></div>
                    <div class=\"form-group\">
                        <label for=\"name\">Vor- und Nachname: <span class=\"required\">*</span></label>
                        <input name=\"data[name]\" type=\"text\" value=\"{{ form.value('name')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"name\"></div>
                    <div class=\"form-group\">
                        <label for=\"email\">E-Mail: <span class=\"required\">*</span></label>
                        <input name=\"data[email]\" type=\"email\" value=\"{{ form.value('email')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"telefon\">Telefon:</label>
                        <input name=\"data[telefon]\" type=\"tel\" value=\"{{ form.value('telefon')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"telefon\"></div>
                    <div class=\"form-group\">
                        <label for=\"betreff\">Betreff: <span class=\"required\">*</span></label>
                        <input name=\"data[betreff]\" type=\"text\" value=\"{{ form.value('betreff')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"betreff\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"nachricht\">Nachricht:</label>
                        <textarea name=\"data[nachricht]\" class=\"form-control\" id=\"nachricht\" rows=\"8\">{{ form.value('nachricht')|trim|e('html') }}</textarea></div>
                    <div class=\"col-lg-12\">
                        <div class=\"checkbox\" style=\"margin-top:20px;\">
                            <table><tr><td valign=\"top\"><input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"></td>
                                    <td><label for=\"ja_ich_stimme_zu\" class=\"ml-5\">Mit dieser Anmeldung akzeptieren Sie die <a href=\"%7B%7Burl('agbs')%7D%7D\" target=\"_blank\" class=\"\">AGB</a> der {FIRMENNAME} und bestätigen die Kenntnisnahme der Widerrufsbelehrung und unsere <a href=\"%7B%7Burl('datenschutz')%7D%7D\" target=\"_blank\" class=\"\">Datenschutzbestimmungen</a>.</label></td>
                                </tr></table></div>
                    </div>
                    <div class=\"form-group mt-30\">
                        <div style=\"width: 304px;\" class=\"mx-auto\">
                            <label for=\"captcha\">Captcha: <span class=\"required\">*</span></label>
                            <div class=\"form-data\" data-grav-field=\"captcha\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                                <script>
                                    var captchaOnloadCallback = function captchaOnloadCallback() {
                                        grecaptcha.render('g-recaptcha', {
                                            'sitekey': \"6Le5vnUUAAAAAHzAy9rfm_wy63bXttVCLFOtD0Lu\",
                                            'callback': captchaValidatedCallback,
                                            'expired-callback': captchaExpiredCallback
                                        });
                                    };
                                    var captchaValidatedCallback = function captchaValidatedCallback() {};
                                    var captchaExpiredCallback = function captchaExpiredCallback() { grecaptcha.reset(); };
                                </script><script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&amp;render=explicit&amp;hl=de\" async defer></script><div class=\"g-recaptcha mx-auto\" id=\"g-recaptcha\"></div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"__form-name__\" value=\"kontakt\">
                    {{ nonce_field('form', 'form-nonce') }}
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary\" type=\"submit\">Senden</button>
                    </div>
                </fieldset></form>
        </div>
    </div>
</div>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt", "");
    }
}
