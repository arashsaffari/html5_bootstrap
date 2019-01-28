<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt */
class __TwigTemplate_390b5e5ce5b79a3f6f1d708d5d811777f554645f7ae14c10a15d16b82e12145c extends Twig_Template
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
            ";
        // line 9
        $this->loadTemplate("forms/form.html.twig", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt", 9)->display(array_merge($context, ["form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), ["kontakt"])]));
        // line 10
        echo "        </div>
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
        return array (  31 => 10,  29 => 9,  19 => 1,);
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
            {% include \"forms/form.html.twig\" with { form: forms('kontakt') } %}
        </div>
    </div>
</div>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt", "");
    }
}
