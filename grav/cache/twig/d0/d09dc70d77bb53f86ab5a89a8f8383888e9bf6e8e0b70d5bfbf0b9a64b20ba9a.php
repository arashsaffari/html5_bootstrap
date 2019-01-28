<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/02.forms */
class __TwigTemplate_042322cd24c0d500c6bb424f6cf35d2c71086c7f1191d55ab83467af5510e886 extends Twig_Template
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
            <h1>Forms</h1>
            <hr></div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <form>
                <fieldset><legend>Legend</legend>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Email address</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\"><small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\"></div>
                    <div class=\"form-group\">
                        <label for=\"exampleSelect1\">Example select</label>
                        <select class=\"form-control\" id=\"exampleSelect1\"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></div>
                    <div class=\"form-group\">
                        <label for=\"exampleSelect2\">Example multiple select</label>
                        <select multiple class=\"form-control\" id=\"exampleSelect2\"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></div>
                    <div class=\"form-group\">
                        <label for=\"exampleTextarea\">Example textarea</label>
                        <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea></div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputFile\">File input</label>
                        <input type=\"file\" class=\"form-control-file\" id=\"exampleInputFile\" aria-describedby=\"fileHelp\"><small id=\"fileHelp\" class=\"form-text text-muted\">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    <fieldset class=\"form-group\"><legend>Radio buttons</legend>
                        <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                            Option one is this and that—be sure to include why it's great
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
                    </fieldset><div class=\"form-check\">
                        <label class=\"form-check-label\">
                        <input type=\"checkbox\" class=\"form-check-input\">
                        Check me out
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                </fieldset></form>
        </div>
        <div class=\"col-lg-4 col-lg-offset-1\">
            <form class=\"bs-component\">
                <div class=\"form-group\">
                    <fieldset disabled><label class=\"control-label\" for=\"disabledInput\">Disabled input</label>
                        <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled></fieldset></div>
                <div class=\"form-group\">
                    <fieldset><label class=\"control-label\" for=\"readOnlyInput\">Readonly input</label>
                        <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"Readonly input here…\" readonly></fieldset></div>
                <div class=\"form-group has-success\">
                    <label class=\"form-control-label\" for=\"inputSuccess1\">Input with success</label>
                    <input type=\"text\" class=\"form-control form-control-success\" id=\"inputSuccess1\"><div class=\"form-control-feedback\">Success! You've done it.</div>
                </div>
                <div class=\"form-group has-warning\">
                    <label class=\"form-control-label\" for=\"inputWarning1\">Input with warning</label>
                    <input type=\"text\" class=\"form-control form-control-warning\" id=\"inputWarning1\"><div class=\"form-control-feedback\">Shucks, try again.</div>
                </div>
                <div class=\"form-group has-danger\">
                    <label class=\"form-control-label\" for=\"inputDanger1\">Input with danger</label>
                    <input type=\"text\" class=\"form-control form-control-danger\" id=\"inputDanger1\"><div class=\"form-control-feedback\">Sorry, that username's taken. Try another?</div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Large input</label>
                    <input class=\"form-control form-control-lg\" type=\"text\" id=\"inputLarge\"></div>
                <div class=\"form-group\">
                    <label class=\"col-form-label\" for=\"inputDefault\">Default input</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputDefault\"></div>
                <div class=\"form-group\">
                    <label class=\"col-form-label col-form-label-sm\" for=\"inputSmall\">Small input</label>
                    <input class=\"form-control form-control-sm\" type=\"text\" id=\"inputSmall\"></div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Input addons</label>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">\$</span>
                        </div>
                        <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\"><div class=\"input-group-append\">
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
        return "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/02.forms";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
            <h1>Forms</h1>
            <hr></div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <form>
                <fieldset><legend>Legend</legend>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Email address</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\"><small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\"></div>
                    <div class=\"form-group\">
                        <label for=\"exampleSelect1\">Example select</label>
                        <select class=\"form-control\" id=\"exampleSelect1\"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></div>
                    <div class=\"form-group\">
                        <label for=\"exampleSelect2\">Example multiple select</label>
                        <select multiple class=\"form-control\" id=\"exampleSelect2\"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></div>
                    <div class=\"form-group\">
                        <label for=\"exampleTextarea\">Example textarea</label>
                        <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea></div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputFile\">File input</label>
                        <input type=\"file\" class=\"form-control-file\" id=\"exampleInputFile\" aria-describedby=\"fileHelp\"><small id=\"fileHelp\" class=\"form-text text-muted\">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    <fieldset class=\"form-group\"><legend>Radio buttons</legend>
                        <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                            Option one is this and that—be sure to include why it's great
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
                    </fieldset><div class=\"form-check\">
                        <label class=\"form-check-label\">
                        <input type=\"checkbox\" class=\"form-check-input\">
                        Check me out
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                </fieldset></form>
        </div>
        <div class=\"col-lg-4 col-lg-offset-1\">
            <form class=\"bs-component\">
                <div class=\"form-group\">
                    <fieldset disabled><label class=\"control-label\" for=\"disabledInput\">Disabled input</label>
                        <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled></fieldset></div>
                <div class=\"form-group\">
                    <fieldset><label class=\"control-label\" for=\"readOnlyInput\">Readonly input</label>
                        <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"Readonly input here…\" readonly></fieldset></div>
                <div class=\"form-group has-success\">
                    <label class=\"form-control-label\" for=\"inputSuccess1\">Input with success</label>
                    <input type=\"text\" class=\"form-control form-control-success\" id=\"inputSuccess1\"><div class=\"form-control-feedback\">Success! You've done it.</div>
                </div>
                <div class=\"form-group has-warning\">
                    <label class=\"form-control-label\" for=\"inputWarning1\">Input with warning</label>
                    <input type=\"text\" class=\"form-control form-control-warning\" id=\"inputWarning1\"><div class=\"form-control-feedback\">Shucks, try again.</div>
                </div>
                <div class=\"form-group has-danger\">
                    <label class=\"form-control-label\" for=\"inputDanger1\">Input with danger</label>
                    <input type=\"text\" class=\"form-control form-control-danger\" id=\"inputDanger1\"><div class=\"form-control-feedback\">Sorry, that username's taken. Try another?</div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Large input</label>
                    <input class=\"form-control form-control-lg\" type=\"text\" id=\"inputLarge\"></div>
                <div class=\"form-group\">
                    <label class=\"col-form-label\" for=\"inputDefault\">Default input</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputDefault\"></div>
                <div class=\"form-group\">
                    <label class=\"col-form-label col-form-label-sm\" for=\"inputSmall\">Small input</label>
                    <input class=\"form-control form-control-sm\" type=\"text\" id=\"inputSmall\"></div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Input addons</label>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">\$</span>
                        </div>
                        <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\"><div class=\"input-group-append\">
                            <span class=\"input-group-text\">.00</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/02.forms", "");
    }
}
