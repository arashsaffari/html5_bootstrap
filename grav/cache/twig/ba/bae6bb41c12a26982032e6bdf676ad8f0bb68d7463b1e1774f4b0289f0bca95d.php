<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt */
class __TwigTemplate_cee9137b8f3d29bed6006bddc1c546117927bc661286c3b8ab1c6e794be78279 extends Twig_Template
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
                            <label>
                                <input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"> Ja, ich stimme den <a href=\"";
        // line 47
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("datenschutz");
        echo "\" target=\"_blank\" class=\"\">Datenschutzbedingungen</a> zu.
                            </label>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleSelect1\">Example select</label>
                        <select class=\"form-control\" id=\"exampleSelect1\">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleSelect2\">Example multiple select</label>
                        <select multiple class=\"form-control\" id=\"exampleSelect2\">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    cv x<div class=\"form-group\">
                        <label for=\"exampleTextarea\">Example textarea</label>
                        <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputFile\">File input</label>
                        <input type=\"file\" class=\"form-control-file\" id=\"exampleInputFile\" aria-describedby=\"fileHelp\">
                        <small id=\"fileHelp\" class=\"form-text text-muted\">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    <fieldset class=\"form-group\">
                        <legend>Radio buttons</legend>
                        <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        </div>
                        <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                            Option two can be something else and selecting it will deselect option one
                        </label>
                        </div>
                        <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\" disabled>
                            Option three is disabled
                        </label>
                        </div>
                    </fieldset>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                        <input type=\"checkbox\" class=\"form-check-input\">
                        Check me out
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
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
<p></div></p>";
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
        return array (  95 => 47,  87 => 42,  80 => 38,  73 => 34,  66 => 30,  59 => 26,  49 => 21,  43 => 20,  34 => 14,  19 => 1,);
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
                            <label>
                                <input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"> Ja, ich stimme den <a href=\"{{url('datenschutz')}}\" target=\"_blank\" class=\"\">Datenschutzbedingungen</a> zu.
                            </label>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleSelect1\">Example select</label>
                        <select class=\"form-control\" id=\"exampleSelect1\">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleSelect2\">Example multiple select</label>
                        <select multiple class=\"form-control\" id=\"exampleSelect2\">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    cv x<div class=\"form-group\">
                        <label for=\"exampleTextarea\">Example textarea</label>
                        <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputFile\">File input</label>
                        <input type=\"file\" class=\"form-control-file\" id=\"exampleInputFile\" aria-describedby=\"fileHelp\">
                        <small id=\"fileHelp\" class=\"form-text text-muted\">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    <fieldset class=\"form-group\">
                        <legend>Radio buttons</legend>
                        <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        </div>
                        <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                            Option two can be something else and selecting it will deselect option one
                        </label>
                        </div>
                        <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\" disabled>
                            Option three is disabled
                        </label>
                        </div>
                    </fieldset>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                        <input type=\"checkbox\" class=\"form-check-input\">
                        Check me out
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
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
<p></div></p>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt", "");
    }
}
