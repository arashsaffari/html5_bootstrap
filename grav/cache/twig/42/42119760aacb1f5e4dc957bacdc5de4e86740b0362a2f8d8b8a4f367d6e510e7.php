<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt */
class __TwigTemplate_572f1b0c1a3723bd3df79c8d58d5c7fafefc8ad2982f99f1f60196406f5bc153 extends Twig_Template
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
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <form>
                <fieldset>
                    <div class=\"form-group\">
                        <label for=\"firmenname\">Firmenname:</label>
                        <input name=\"data[firmenname]\" type=\"text\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "value", [0 => "firmenname"], "method"), "html_attr");
        echo "\" class=\"form-control\" id=\"firmenname\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"anrede\">Anrede: <span class=\"required\">*</span></label>
                        <select name=\"data[anrede]\" class=\"form-control\" id=\"anrede\" autocomplete=\"on\">
                            <option value=\"\"></option>
                            <option value=\"f\" ";
        // line 20
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "anrede"], "method") == "f")) {
            echo "selected";
        }
        echo ">Frau</option>
                            <option value=\"m\" ";
        // line 21
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "anrede"], "method") == "m")) {
            echo "selected";
        }
        echo ">Herr</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"name\">Vor- und Nachname: <span class=\"required\">*</span></label>
                        <input name=\"data[name]\" type=\"text\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "name"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"name\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">E-Mail: <span class=\"required\">*</span></label>
                        <input name=\"data[email]\" type=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "email"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"telefon\">Telefon:</label>
                        <input name=\"data[telefon]\" type=\"tel\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "telefon"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"telefon\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"betreff\">Betreff: <span class=\"required\">*</span></label>
                        <input name=\"data[betreff]\" type=\"text\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "betreff"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"betreff\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nachricht\">Nachricht:</label>
                        <textarea  name=\"data[nachricht]\" class=\"form-control\" id=\"nachricht\" rows=\"8\">";
        // line 42
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "nachricht"], "method")), "html");
        echo "</textarea>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"checkbox\" style=\"margin-top:20px;\">
                            <table>
                                <tr>
                                    <td valign=\"top\"><input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"></td>
                                    <td><label for=\"ja_ich_stimme_zu\" class=\"ml-5\">Mit dieser Anmeldung akzeptieren Sie die <a href=\"";
        // line 49
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
                    <input type=\"hidden\" name=\"__form-name__\" value=\"contact\" />
                    ";
        // line 75
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary\" type=\"submit\">Senden</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class=\"col-lg-4 col-lg-offset-1\">
            <form class=\"bs-component\">
                <div class=\"form-group\">
                    <fieldset disabled>
                        <label class=\"control-label\" for=\"disabledInput\">Disabled input</label>
                        <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled=\"\">
                    </fieldset>
                </div>
                <div class=\"form-group\">
                    <fieldset>
                        <label class=\"control-label\" for=\"readOnlyInput\">Readonly input</label>
                        <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"Readonly input here…\" readonly>
                    </fieldset>
                </div>
                <div class=\"form-group has-success\">
                    <label class=\"form-control-label\" for=\"inputSuccess1\">Input with success</label>
                    <input type=\"text\" class=\"form-control form-control-success\" id=\"inputSuccess1\">
                    <div class=\"form-control-feedback\">Success! You've done it.</div>
                </div>
                <div class=\"form-group has-warning\">
                    <label class=\"form-control-label\" for=\"inputWarning1\">Input with warning</label>
                    <input type=\"text\" class=\"form-control form-control-warning\" id=\"inputWarning1\">
                    <div class=\"form-control-feedback\">Shucks, try again.</div>
                </div>
                <div class=\"form-group has-danger\">
                    <label class=\"form-control-label\" for=\"inputDanger1\">Input with danger</label>
                    <input type=\"text\" class=\"form-control form-control-danger\" id=\"inputDanger1\">
                    <div class=\"form-control-feedback\">Sorry, that username's taken. Try another?</div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Large input</label>
                    <input class=\"form-control form-control-lg\" type=\"text\" id=\"inputLarge\">
                </div>
                <div class=\"form-group\">
                    <label class=\"col-form-label\" for=\"inputDefault\">Default input</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputDefault\">
                </div>
                <div class=\"form-group\">
                    <label class=\"col-form-label col-form-label-sm\" for=\"inputSmall\">Small input</label>
                    <input class=\"form-control form-control-sm\" type=\"text\" id=\"inputSmall\">
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Input addons</label>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">\$</span>
                        </div>
                        <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\">.00</span>
                        </div>
                    </div>
                </div>
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
        return array (  128 => 75,  97 => 49,  87 => 42,  80 => 38,  73 => 34,  66 => 30,  59 => 26,  49 => 21,  43 => 20,  34 => 14,  19 => 1,);
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
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <form>
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
                        <input name=\"data[name]\" type=\"text\" value=\"{{ form.value('name')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"name\" required=\"required\">
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
                    <input type=\"hidden\" name=\"__form-name__\" value=\"contact\" />
                    {{ nonce_field('form', 'form-nonce') }}
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary\" type=\"submit\">Senden</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class=\"col-lg-4 col-lg-offset-1\">
            <form class=\"bs-component\">
                <div class=\"form-group\">
                    <fieldset disabled>
                        <label class=\"control-label\" for=\"disabledInput\">Disabled input</label>
                        <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled=\"\">
                    </fieldset>
                </div>
                <div class=\"form-group\">
                    <fieldset>
                        <label class=\"control-label\" for=\"readOnlyInput\">Readonly input</label>
                        <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"Readonly input here…\" readonly>
                    </fieldset>
                </div>
                <div class=\"form-group has-success\">
                    <label class=\"form-control-label\" for=\"inputSuccess1\">Input with success</label>
                    <input type=\"text\" class=\"form-control form-control-success\" id=\"inputSuccess1\">
                    <div class=\"form-control-feedback\">Success! You've done it.</div>
                </div>
                <div class=\"form-group has-warning\">
                    <label class=\"form-control-label\" for=\"inputWarning1\">Input with warning</label>
                    <input type=\"text\" class=\"form-control form-control-warning\" id=\"inputWarning1\">
                    <div class=\"form-control-feedback\">Shucks, try again.</div>
                </div>
                <div class=\"form-group has-danger\">
                    <label class=\"form-control-label\" for=\"inputDanger1\">Input with danger</label>
                    <input type=\"text\" class=\"form-control form-control-danger\" id=\"inputDanger1\">
                    <div class=\"form-control-feedback\">Sorry, that username's taken. Try another?</div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Large input</label>
                    <input class=\"form-control form-control-lg\" type=\"text\" id=\"inputLarge\">
                </div>
                <div class=\"form-group\">
                    <label class=\"col-form-label\" for=\"inputDefault\">Default input</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputDefault\">
                </div>
                <div class=\"form-group\">
                    <label class=\"col-form-label col-form-label-sm\" for=\"inputSmall\">Small input</label>
                    <input class=\"form-control form-control-sm\" type=\"text\" id=\"inputSmall\">
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Input addons</label>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">\$</span>
                        </div>
                        <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\">.00</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt", "");
    }
}
