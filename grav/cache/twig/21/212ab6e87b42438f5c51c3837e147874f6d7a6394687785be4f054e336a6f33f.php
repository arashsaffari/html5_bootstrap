<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt */
class __TwigTemplate_e39c435ad596b1053d2a75a8d81cc5447b32d764c3aaf610b7970a0355a8ad82 extends Twig_Template
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
        $context["page1"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/components/breadcrumbs"], "method");
        echo " ";
        echo $this->getAttribute(($context["page1"] ?? null), "content", []);
        echo "

";
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAvu2gZ87OKu7wM9vW9_DP3b0usUKB7zTs", 1 => ["priority" => 120, "pipeline" => false, "loading" => ""]], "method");
        // line 4
        echo "

<div class=\"boxshadow-3\" style='overflow:hidden;'>
\t<div id='gmap_canvas'></div>
</div>

<div class=\"container my-100\">\t
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1>Kontakt</h1>
\t\t\t<hr />
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
            <!--%form_massage%-->
\t\t\t<form name=\"kontakt\" action=\"\" method=\"POST\" id=\"kontakt\">
\t\t\t\t<fieldset>
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <legend class=\"col-form-label col-sm-3 pt-0\">Anrede: <span class=\"required\">*</span></legend>
                            <div class=\"col-sm-9\">
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"data[anrede]\" id=\"anrede_female\" value=\"Frau\" ";
        // line 27
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "anrede"], "method") == "Frau")) {
            echo "checked";
        }
        echo " required=\"required\">
                                    <label class=\"form-check-label\" for=\"anrede_female\">Frau</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"data[anrede]\" id=\"anrede_male\" value=\"Herr\" ";
        // line 31
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "anrede"], "method") == "Herr")) {
            echo "checked";
        }
        echo ">
                                    <label class=\"form-check-label\" for=\"anrede_male\">Herr</label>
                                </div>
                            </div>
                        </div>
                    </div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"firmenname\">Firmenname:</label>
                        <input name=\"data[firmenname]\" type=\"text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "value", [0 => "firmenname"], "method"), "html_attr");
        echo "\" class=\"form-control\" id=\"firmenname\">
\t\t\t\t\t</div>
                    <div class=\"form-group\">
                        <label for=\"companytype\">Company Type: <span class=\"required\">*</span></label>
                        <select name=\"data[companytype]\" class=\"form-control\" id=\"companytype\" required=\"required\">
                            <option value=\"\"></option>
                            <option value=\"typea\" ";
        // line 45
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "companytype"], "method") == "f")) {
            echo "selected";
        }
        echo ">Type A</option>
                            <option value=\"typeb\" ";
        // line 46
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "companytype"], "method") == "m")) {
            echo "selected";
        }
        echo ">Type B</option>
                        </select>
                    </div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"name\">Vor- und Nachname: <span class=\"required\">*</span></label>
                        <input name=\"data[name]\" type=\"text\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "name"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"name\" required=\"required\">
\t\t\t\t\t</div>
                    <div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">E-Mail: <span class=\"required\">*</span></label>
                        <input name=\"data[email]\" type=\"email\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "email"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required=\"required\">
\t\t\t\t\t</div>
                    <div class=\"form-group\">
                        <label for=\"telefon\">Telefon:</label>
                        <input name=\"data[telefon]\" type=\"tel\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "telefon"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"telefon\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"betreff\">Betreff: <span class=\"required\">*</span></label>
                        <input name=\"data[betreff]\" type=\"text\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "betreff"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"betreff\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nachricht\">Nachricht: <span class=\"required\">*</span></label>
                        <textarea  name=\"data[nachricht]\" class=\"form-control\" id=\"nachricht\" rows=\"8\" required=\"required\">";
        // line 67
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "nachricht"], "method")), "html");
        echo "</textarea>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"checkbox\" style=\"margin-top:20px;\">
                            <table>
                                <tr>
                                    <td valign=\"top\"><input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"></td>
                                    <td><label for=\"ja_ich_stimme_zu\" class=\"ml-5\">Mit dieser Anmeldung akzeptieren Sie die <a href=\"";
        // line 74
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
        // line 100
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary\" type=\"submit\">Senden</button>
                    </div>
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
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
        return array (  169 => 100,  138 => 74,  128 => 67,  121 => 63,  114 => 59,  107 => 55,  100 => 51,  90 => 46,  84 => 45,  75 => 39,  62 => 31,  53 => 27,  28 => 4,  26 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page1 = page.find('/components/breadcrumbs') %} {{ page1.content }}

{% do assets.addJs('https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAvu2gZ87OKu7wM9vW9_DP3b0usUKB7zTs', {'priority':120, 'pipeline':false, 'loading':''}) %}


<div class=\"boxshadow-3\" style='overflow:hidden;'>
\t<div id='gmap_canvas'></div>
</div>

<div class=\"container my-100\">\t
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1>Kontakt</h1>
\t\t\t<hr />
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
            <!--%form_massage%-->
\t\t\t<form name=\"kontakt\" action=\"\" method=\"POST\" id=\"kontakt\">
\t\t\t\t<fieldset>
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <legend class=\"col-form-label col-sm-3 pt-0\">Anrede: <span class=\"required\">*</span></legend>
                            <div class=\"col-sm-9\">
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"data[anrede]\" id=\"anrede_female\" value=\"Frau\" {% if uri.query('anrede') == 'Frau' %}checked{% endif %} required=\"required\">
                                    <label class=\"form-check-label\" for=\"anrede_female\">Frau</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"data[anrede]\" id=\"anrede_male\" value=\"Herr\" {% if uri.query('anrede') == 'Herr' %}checked{% endif %}>
                                    <label class=\"form-check-label\" for=\"anrede_male\">Herr</label>
                                </div>
                            </div>
                        </div>
                    </div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"firmenname\">Firmenname:</label>
                        <input name=\"data[firmenname]\" type=\"text\" value=\"{{ form.value('firmenname')|e('html_attr') }}\" class=\"form-control\" id=\"firmenname\">
\t\t\t\t\t</div>
                    <div class=\"form-group\">
                        <label for=\"companytype\">Company Type: <span class=\"required\">*</span></label>
                        <select name=\"data[companytype]\" class=\"form-control\" id=\"companytype\" required=\"required\">
                            <option value=\"\"></option>
                            <option value=\"typea\" {% if uri.query('companytype') == 'f' %}selected{% endif %}>Type A</option>
                            <option value=\"typeb\" {% if uri.query('companytype') == 'm' %}selected{% endif %}>Type B</option>
                        </select>
                    </div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"name\">Vor- und Nachname: <span class=\"required\">*</span></label>
                        <input name=\"data[name]\" type=\"text\" value=\"{{ form.value('name')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"name\" required=\"required\">
\t\t\t\t\t</div>
                    <div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">E-Mail: <span class=\"required\">*</span></label>
                        <input name=\"data[email]\" type=\"email\" value=\"{{ form.value('email')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required=\"required\">
\t\t\t\t\t</div>
                    <div class=\"form-group\">
                        <label for=\"telefon\">Telefon:</label>
                        <input name=\"data[telefon]\" type=\"tel\" value=\"{{ form.value('telefon')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"telefon\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"betreff\">Betreff: <span class=\"required\">*</span></label>
                        <input name=\"data[betreff]\" type=\"text\" value=\"{{ form.value('betreff')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"betreff\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nachricht\">Nachricht: <span class=\"required\">*</span></label>
                        <textarea  name=\"data[nachricht]\" class=\"form-control\" id=\"nachricht\" rows=\"8\" required=\"required\">{{ form.value('nachricht')|trim|e('html') }}</textarea>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"checkbox\" style=\"margin-top:20px;\">
                            <table>
                                <tr>
                                    <td valign=\"top\"><input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"></td>
                                    <td><label for=\"ja_ich_stimme_zu\" class=\"ml-5\">Mit dieser Anmeldung akzeptieren Sie die <a href=\"{{ url('agbs') }}\" target=\"_blank\" class=\"\">AGB</a> der {FIRMENNAME} und bestätigen die Kenntnisnahme der Widerrufsbelehrung und unsere <a href=\"{{ url('datenschutz') }}\" target=\"_blank\" class=\"\">Datenschutzbestimmungen</a>.</label></td>
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
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt", "");
    }
}
