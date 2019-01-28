<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt */
class __TwigTemplate_d5757e163f2f7015c31a73b48727f8ece9242faed80d91542a868ed027644028 extends Twig_Template
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
            <hr />
            ----<br />
            ";
        // line 7
        $context["type_mapping"] = ["info" => "success", "error" => "error", "warning" => "warning"];
        // line 8
        echo "            ";
        $context["icon_mapping"] = ["info" => "checkmark", "error" => "wrong", "warning" => "information"];
        // line 9
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
            // line 10
            echo "                <div id=\"messages\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "fetch", []));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                    ";
                $context["scope"] = twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", []));
                // line 13
                echo "                    ";
                $context["type"] = $this->getAttribute(($context["type_mapping"] ?? null), ($context["scope"] ?? null), [], "array");
                // line 14
                echo "                    ";
                $context["icon"] = $this->getAttribute(($context["icon_mapping"] ?? null), ($context["scope"] ?? null), [], "array");
                // line 15
                echo "                    <div class=\"toast toast-";
                echo ($context["type"] ?? null);
                echo " ";
                echo ($context["scope"] ?? null);
                echo "\">
                        <i class=\"icon dripicons-";
                // line 16
                echo ($context["icon"] ?? null);
                echo "\"></i> ";
                echo $this->getAttribute($context["message"], "message", []);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </div>
            ";
        }
        // line 21
        echo "            ";
        if ($this->getAttribute(($context["form"] ?? null), "message", [])) {
            // line 22
            echo "                ";
            $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
            // line 23
            echo "                ";
            $context["status_mapping"] = ["success" => "green", "error" => "red", "warning" => "yellow"];
            // line 24
            echo "                ";
            $context["message"] = (((($context["inline_errors"] ?? null) && $this->getAttribute(($context["form"] ?? null), "messages", []))) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL")) : ($this->getAttribute(($context["form"] ?? null), "message", [])));
            // line 25
            echo "                <div class=\"toast toast-";
            echo $this->getAttribute(($context["form"] ?? null), "status", []);
            echo " ";
            echo (($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array")) ? ($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array")) : ("green"));
            echo " mt-2 mb-2\">";
            echo ($context["message"] ?? null);
            echo "</div>
            ";
        }
        // line 27
        echo "            ----<br />
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <form name=\"kontakt\" action=\"\" method=\"POST\" id=\"kontakt\">
                <fieldset>
                    <div class=\"form-group\">
                        <label for=\"firmenname\">Firmenname:</label>
                        <input name=\"data[firmenname]\" type=\"text\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "value", [0 => "firmenname"], "method"), "html_attr");
        echo "\" class=\"form-control\" id=\"firmenname\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"anrede\">Anrede: <span class=\"required\">*</span></label>
                        <select name=\"data[anrede]\" class=\"form-control\" id=\"anrede\" autocomplete=\"on\">
                            <option value=\"\"></option>
                            <option value=\"f\" ";
        // line 42
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "anrede"], "method") == "f")) {
            echo "selected";
        }
        echo ">Frau</option>
                            <option value=\"m\" ";
        // line 43
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "anrede"], "method") == "m")) {
            echo "selected";
        }
        echo ">Herr</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"name\">Vor- und Nachname: <span class=\"required\">*</span></label>
                        <input name=\"data[name]\" type=\"text\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "name"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"name\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">E-Mail: <span class=\"required\">*</span></label>
                        <input name=\"data[email]\" type=\"email\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "email"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"telefon\">Telefon:</label>
                        <input name=\"data[telefon]\" type=\"tel\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "telefon"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"telefon\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"betreff\">Betreff: <span class=\"required\">*</span></label>
                        <input name=\"data[betreff]\" type=\"text\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "betreff"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"betreff\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nachricht\">Nachricht:</label>
                        <textarea  name=\"data[nachricht]\" class=\"form-control\" id=\"nachricht\" rows=\"8\">";
        // line 64
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "nachricht"], "method")), "html");
        echo "</textarea>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"checkbox\" style=\"margin-top:20px;\">
                            <table>
                                <tr>
                                    <td valign=\"top\"><input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"></td>
                                    <td><label for=\"ja_ich_stimme_zu\" class=\"ml-5\">Mit dieser Anmeldung akzeptieren Sie die <a href=\"";
        // line 71
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("agbs");
        echo "\" target=\"_blank\" class=\"\">AGB</a> der {FIRMENNAME} und bestätigen die Kenntnisnahme der Widerrufsbelehrung und unsere <a href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("datenschutz");
        echo "\" target=\"_blank\" class=\"\">Datenschutzbestimmungen</a>.</label></td>
                                </tr>
                            </table>
                        </div>
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
                                </script>
                                <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl=de\" async defer></script>
                                <div class=\"g-recaptcha mx-auto\" id=\"g-recaptcha\"></div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"__form-name__\" value=\"kontakt\" />
                    ";
        // line 97
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary\" type=\"submit\">Senden</button>
                    </div>
                </fieldset>
            </form>
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
        return array (  200 => 97,  169 => 71,  159 => 64,  152 => 60,  145 => 56,  138 => 52,  131 => 48,  121 => 43,  115 => 42,  106 => 36,  95 => 27,  85 => 25,  82 => 24,  79 => 23,  76 => 22,  73 => 21,  69 => 19,  58 => 16,  51 => 15,  48 => 14,  45 => 13,  42 => 12,  38 => 11,  35 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
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
            <hr />
            ----<br />
            {% set type_mapping = {'info':'success', 'error': 'error', 'warning': 'warning'} %}
            {% set icon_mapping = {'info':'checkmark', 'error':'wrong', 'warning':'information'} %}
            {% if grav.messages.all %}
                <div id=\"messages\">
                {% for message in grav.messages.fetch %}
                    {% set scope = message.scope|e %}
                    {% set type = type_mapping[scope] %}
                    {% set icon = icon_mapping[scope] %}
                    <div class=\"toast toast-{{ type }} {{ scope }}\">
                        <i class=\"icon dripicons-{{ icon }}\"></i> {{ message.message|raw }}
                    </div>
                {% endfor %}
                </div>
            {% endif %}
            {% if form.message %}
                {% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}
                {% set status_mapping = {'success':'green', 'error': 'red', 'warning': 'yellow'} %}
                {% set message = inline_errors and form.messages ? \"FORM.VALIDATION_FAIL\"|t : form.message %}
                <div class=\"toast toast-{{ form.status }} {{ status_mapping[form.status] ?: 'green' }} mt-2 mb-2\">{{ message|raw }}</div>
            {% endif %}
            ----<br />
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <form name=\"kontakt\" action=\"\" method=\"POST\" id=\"kontakt\">
                <fieldset>
                    <div class=\"form-group\">
                        <label for=\"firmenname\">Firmenname:</label>
                        <input name=\"data[firmenname]\" type=\"text\" value=\"{{ form.value('firmenname')|e('html_attr') }}\" class=\"form-control\" id=\"firmenname\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"anrede\">Anrede: <span class=\"required\">*</span></label>
                        <select name=\"data[anrede]\" class=\"form-control\" id=\"anrede\" autocomplete=\"on\">
                            <option value=\"\"></option>
                            <option value=\"f\" {% if uri.query('anrede') == 'f' %}selected{% endif %}>Frau</option>
                            <option value=\"m\" {% if uri.query('anrede') == 'm' %}selected{% endif %}>Herr</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"name\">Vor- und Nachname: <span class=\"required\">*</span></label>
                        <input name=\"data[name]\" type=\"text\" value=\"{{ form.value('name')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"name\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">E-Mail: <span class=\"required\">*</span></label>
                        <input name=\"data[email]\" type=\"email\" value=\"{{ form.value('email')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"telefon\">Telefon:</label>
                        <input name=\"data[telefon]\" type=\"tel\" value=\"{{ form.value('telefon')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"telefon\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"betreff\">Betreff: <span class=\"required\">*</span></label>
                        <input name=\"data[betreff]\" type=\"text\" value=\"{{ form.value('betreff')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"betreff\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nachricht\">Nachricht:</label>
                        <textarea  name=\"data[nachricht]\" class=\"form-control\" id=\"nachricht\" rows=\"8\">{{ form.value('nachricht')|trim|e('html') }}</textarea>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"checkbox\" style=\"margin-top:20px;\">
                            <table>
                                <tr>
                                    <td valign=\"top\"><input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"></td>
                                    <td><label for=\"ja_ich_stimme_zu\" class=\"ml-5\">Mit dieser Anmeldung akzeptieren Sie die <a href=\"{{url('agbs')}}\" target=\"_blank\" class=\"\">AGB</a> der {FIRMENNAME} und bestätigen die Kenntnisnahme der Widerrufsbelehrung und unsere <a href=\"{{url('datenschutz')}}\" target=\"_blank\" class=\"\">Datenschutzbestimmungen</a>.</label></td>
                                </tr>
                            </table>
                        </div>
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
                                </script>
                                <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl=de\" async defer></script>
                                <div class=\"g-recaptcha mx-auto\" id=\"g-recaptcha\"></div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"__form-name__\" value=\"kontakt\" />
                    {{ nonce_field('form', 'form-nonce') }}
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary\" type=\"submit\">Senden</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt", "");
    }
}
