<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/02.forms */
class __TwigTemplate_087ed87a8e3db524c4ef1d36cebec6be0e474e801d21fbeaa784ff0f67497383 extends Twig_Template
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
        echo "<div class=\"container my-100\">\t
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1>Forms</h1>
\t\t\t<hr />
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<form>
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>Legend</legend>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Email address</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleInputPassword1\">Password</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleSelect1\">Example select</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"exampleSelect1\">
\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleSelect2\">Example multiple select</label>
\t\t\t\t\t\t<select multiple class=\"form-control\" id=\"exampleSelect2\">
\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleTextarea\">Example textarea</label>
\t\t\t\t\t\t<textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleInputFile\">File input</label>
\t\t\t\t\t\t<input type=\"file\" class=\"form-control-file\" id=\"exampleInputFile\" aria-describedby=\"fileHelp\">
\t\t\t\t\t\t<small id=\"fileHelp\" class=\"form-text text-muted\">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
\t\t\t\t\t</div>
\t\t\t\t\t<fieldset class=\"form-group\">
\t\t\t\t\t\t<legend>Radio buttons</legend>
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
\t\t\t\t\t\t\tOption one is this and that&mdash;be sure to include why it's great
\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
\t\t\t\t\t\t\tOption two can be something else and selecting it will deselect option one
\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check disabled\">
\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\" disabled>
\t\t\t\t\t\t\tOption three is disabled
\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\">
\t\t\t\t\t\tCheck me out
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t<form class=\"bs-component\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<fieldset disabled>
\t\t\t\t\t\t<label class=\"control-label\" for=\"disabledInput\">Disabled input</label>
\t\t\t\t\t\t<input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled=\"\">
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<label class=\"control-label\" for=\"readOnlyInput\">Readonly input</label>
\t\t\t\t\t\t<input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"Readonly input here…\" readonly>
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group has-success\">
\t\t\t\t\t<label class=\"form-control-label\" for=\"inputSuccess1\">Input with success</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-success\" id=\"inputSuccess1\">
\t\t\t\t\t<div class=\"form-control-feedback\">Success! You've done it.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group has-warning\">
\t\t\t\t\t<label class=\"form-control-label\" for=\"inputWarning1\">Input with warning</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-warning\" id=\"inputWarning1\">
\t\t\t\t\t<div class=\"form-control-feedback\">Shucks, try again.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group has-danger\">
\t\t\t\t\t<label class=\"form-control-label\" for=\"inputDanger1\">Input with danger</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-danger\" id=\"inputDanger1\">
\t\t\t\t\t<div class=\"form-control-feedback\">Sorry, that username's taken. Try another?</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Large input</label>
\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"text\" id=\"inputLarge\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-form-label\" for=\"inputDefault\">Default input</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputDefault\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-form-label col-form-label-sm\" for=\"inputSmall\">Small input</label>
\t\t\t\t\t<input class=\"form-control form-control-sm\" type=\"text\" id=\"inputSmall\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\">Input addons</label>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\">\$</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<span class=\"input-group-text\">.00</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
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
        return new Twig_Source("<div class=\"container my-100\">\t
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1>Forms</h1>
\t\t\t<hr />
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<form>
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>Legend</legend>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Email address</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleInputPassword1\">Password</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleSelect1\">Example select</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"exampleSelect1\">
\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleSelect2\">Example multiple select</label>
\t\t\t\t\t\t<select multiple class=\"form-control\" id=\"exampleSelect2\">
\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleTextarea\">Example textarea</label>
\t\t\t\t\t\t<textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleInputFile\">File input</label>
\t\t\t\t\t\t<input type=\"file\" class=\"form-control-file\" id=\"exampleInputFile\" aria-describedby=\"fileHelp\">
\t\t\t\t\t\t<small id=\"fileHelp\" class=\"form-text text-muted\">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
\t\t\t\t\t</div>
\t\t\t\t\t<fieldset class=\"form-group\">
\t\t\t\t\t\t<legend>Radio buttons</legend>
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
\t\t\t\t\t\t\tOption one is this and that&mdash;be sure to include why it's great
\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
\t\t\t\t\t\t\tOption two can be something else and selecting it will deselect option one
\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check disabled\">
\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\" disabled>
\t\t\t\t\t\t\tOption three is disabled
\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\">
\t\t\t\t\t\tCheck me out
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t<form class=\"bs-component\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<fieldset disabled>
\t\t\t\t\t\t<label class=\"control-label\" for=\"disabledInput\">Disabled input</label>
\t\t\t\t\t\t<input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled=\"\">
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<label class=\"control-label\" for=\"readOnlyInput\">Readonly input</label>
\t\t\t\t\t\t<input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"Readonly input here…\" readonly>
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group has-success\">
\t\t\t\t\t<label class=\"form-control-label\" for=\"inputSuccess1\">Input with success</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-success\" id=\"inputSuccess1\">
\t\t\t\t\t<div class=\"form-control-feedback\">Success! You've done it.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group has-warning\">
\t\t\t\t\t<label class=\"form-control-label\" for=\"inputWarning1\">Input with warning</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-warning\" id=\"inputWarning1\">
\t\t\t\t\t<div class=\"form-control-feedback\">Shucks, try again.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group has-danger\">
\t\t\t\t\t<label class=\"form-control-label\" for=\"inputDanger1\">Input with danger</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-danger\" id=\"inputDanger1\">
\t\t\t\t\t<div class=\"form-control-feedback\">Sorry, that username's taken. Try another?</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Large input</label>
\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"text\" id=\"inputLarge\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-form-label\" for=\"inputDefault\">Default input</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputDefault\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-form-label col-form-label-sm\" for=\"inputSmall\">Small input</label>
\t\t\t\t\t<input class=\"form-control form-control-sm\" type=\"text\" id=\"inputSmall\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\">Input addons</label>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\">\$</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<span class=\"input-group-text\">.00</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/02.forms", "");
    }
}
