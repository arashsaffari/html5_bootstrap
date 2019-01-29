<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/07.breadcrumbs */
class __TwigTemplate_3b828c9eaf87f948608dd51afc3753000245651509b5e82e733b5b369e5db47b extends Twig_Template
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
        echo "<div class=\"title_bg position-relative\">
    <div class=\"bgcolor_7 border-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    ";
        // line 7
        echo "                    <!--%breadcrumbs%-->
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/07.breadcrumbs";
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"title_bg position-relative\">
    <div class=\"bgcolor_7 border-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    {#nicht löschen#}
                    <!--%breadcrumbs%-->
                </div>
            </div>
        </div>
    </div>
</div>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/07.breadcrumbs", "");
    }
}
