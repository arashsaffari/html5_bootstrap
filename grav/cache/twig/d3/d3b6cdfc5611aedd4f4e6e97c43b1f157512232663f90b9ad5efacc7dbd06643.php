<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt/01.danke */
class __TwigTemplate_68fc1f16369c6c85939e8a870b67e6b449b3a810d2efb066144c555f2f5cecac extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page1"] ?? null), "content", []), "html", null, true);
        echo "
<div class=\"container mb-50\">
    <div class=\"row justify-content-between\">
        <div class=\"col-md-7 mb-60\">
            <div class=\"mt-30\">
                <h1 class=\"h4 font_w6 color_4 py-20 mb-40 bordercolor_12\">vielen dank,</h1>
                <p>dass Sie Ihre Frage an uns gesendet haben. Anfragen werden so schnell wie möglich beantwortet, in der wir sie empfangen haben. Wir kontaktieren Sie innerhalb der nächsten 24 Stunden.</p>
                <p>WICHTIG: Es kann sein, dass unsere Antwort von Ihrem SPAM-Filter entfernt wird. Wenn Sie die E-Mail nicht finden, sehen Sie in Ihrem Postfach für unerwünschte Werbung nach. Falls die E-Mail dort abgelegt wurde, markieren Sie diese als \"Keine Werbung\" und geben Sie den Absender (@akademieamrhein.de) in Ihr Adressbuch ein.</p>
                <p class=\"text-center\"><a href=\"%7B%7B%20url('home')%20%7D%7D\" class=\"btn bgcolor_4 color_2\">zurück zur Home</a></p>
            </div>
        </div>
        <div class=\"col-md-4\">
            ";
        // line 13
        $context["page2"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/components/sidebar_right"], "method");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page2"] ?? null), "content", []), "html", null, true);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt/01.danke";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  19 => 1,);
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
<div class=\"container mb-50\">
    <div class=\"row justify-content-between\">
        <div class=\"col-md-7 mb-60\">
            <div class=\"mt-30\">
                <h1 class=\"h4 font_w6 color_4 py-20 mb-40 bordercolor_12\">vielen dank,</h1>
                <p>dass Sie Ihre Frage an uns gesendet haben. Anfragen werden so schnell wie möglich beantwortet, in der wir sie empfangen haben. Wir kontaktieren Sie innerhalb der nächsten 24 Stunden.</p>
                <p>WICHTIG: Es kann sein, dass unsere Antwort von Ihrem SPAM-Filter entfernt wird. Wenn Sie die E-Mail nicht finden, sehen Sie in Ihrem Postfach für unerwünschte Werbung nach. Falls die E-Mail dort abgelegt wurde, markieren Sie diese als \"Keine Werbung\" und geben Sie den Absender (@akademieamrhein.de) in Ihr Adressbuch ein.</p>
                <p class=\"text-center\"><a href=\"%7B%7B%20url('home')%20%7D%7D\" class=\"btn bgcolor_4 color_2\">zurück zur Home</a></p>
            </div>
        </div>
        <div class=\"col-md-4\">
            {% set page2 = page.find('/components/sidebar_right') %} {{ page2.content }}
        </div>
    </div>
</div>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt/01.danke", "");
    }
}
