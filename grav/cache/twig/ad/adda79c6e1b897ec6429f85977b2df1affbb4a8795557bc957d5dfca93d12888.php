<?php

/* error.html.twig */
class __TwigTemplate_791b2b56f4b42797ffc4c292255dd974674c945bc4eed4efab31ee48e8e0e313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
<div class=\"mt-150 mb-400\">
\t<div class=\"container\">
\t\t<div class=\"row  align-items-center\">
\t\t\t<div class=\"col-md-12 text-center padding_top_xxxs padding_bottom_xxxs\">
\t\t\t\t<h1 style=\"font-size: 50px;letter-spacing: -3px;\" class=\"fontstyle_3 color_8\">";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ERROR");
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h1>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row  align-items-center\">
\t\t\t<div class=\"col-md-6 offset-3 text-center padding_top_s padding_bottom_xxxs\">
\t\t\t\t<p class=\"text-center\">";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 text-center margin_top_xxxxs\">
\t\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("home");
        echo "\" class=\"btn btn-lg color-1 bgcolor-3 hovercolor-1 hoverbgcolor-2\">Home</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  50 => 16,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}

<div class=\"mt-150 mb-400\">
\t<div class=\"container\">
\t\t<div class=\"row  align-items-center\">
\t\t\t<div class=\"col-md-12 text-center padding_top_xxxs padding_bottom_xxxs\">
\t\t\t\t<h1 style=\"font-size: 50px;letter-spacing: -3px;\" class=\"fontstyle_3 color_8\">{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h1>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row  align-items-center\">
\t\t\t<div class=\"col-md-6 offset-3 text-center padding_top_s padding_bottom_xxxs\">
\t\t\t\t<p class=\"text-center\">{{ page.content }}</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 text-center margin_top_xxxxs\">
\t\t\t\t<a href=\"{{ url('home') }}\" class=\"btn btn-lg color-1 bgcolor-3 hovercolor-1 hoverbgcolor-2\">Home</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% endblock %}", "error.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/templates/error.html.twig");
    }
}
