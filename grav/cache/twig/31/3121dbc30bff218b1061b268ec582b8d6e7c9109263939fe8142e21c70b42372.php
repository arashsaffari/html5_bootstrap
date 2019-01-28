<?php

/* partials/footer.html.twig */
class __TwigTemplate_d0b9204dff490895d566ac6190e1eb3023a75ff9477d6e2f21fd1cee61ff3b29 extends Twig_Template
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
        echo "
<div class=\"bgcolor_3 bgcolor-3\">
    <div class=\"container pt-50 pb-40\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <a style=\"white-space: normal;\" href=\"";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("kontakt");
        echo "\" class=\"btn btn-lg bordercolor-2 color-2 hoverbgcolor-4 hoverbordercolor-4\">kostenlose Beratung</a>
                <div class=\"mt-20\">
                    <h6 class=\"font_w6 h8 color-2 text-muted small\">Wir sorgen dafür, dass Sie, Ihre Mitarbeiter und Kunden problemlos und vollkommen sicher Ihren Tätigkeiten nachgehen können.</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"bgcolor-6\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-between\">
            <div class=\"col-md-12 col-lg-12 py-40\">
                <ul class=\"list-inline nav-footer1 flex-column flex-sm-row row\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "                        ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("color_3 font_w6") : (""));
            // line 22
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["page"], "header", []), "body_classes", []) != "footer_menu_hide")) {
                // line 23
                echo "                        <li class=\"list-inline-item col-md-6 col-lg-4 mx-0\">
                            <a class=\"d-block color_1 hovercolor_4 text-center text-md-left\" href=\"";
                // line 24
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                                <small class=\"";
                // line 25
                echo ($context["current_page"] ?? null);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</small>
                            </a>
                        </li>
                        ";
            }
            // line 29
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </ul>
            </div>

            
        </div>
    </div>
</div>

<div class=\"bgcolor_2 footerBG\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"small p-0 my-20 text-center\">© 2019. Alle Rechte vorbehalten</p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  69 => 29,  60 => 25,  56 => 24,  53 => 23,  50 => 22,  47 => 21,  43 => 20,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"bgcolor_3 bgcolor-3\">
    <div class=\"container pt-50 pb-40\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <a style=\"white-space: normal;\" href=\"{{ url('kontakt') }}\" class=\"btn btn-lg bordercolor-2 color-2 hoverbgcolor-4 hoverbordercolor-4\">kostenlose Beratung</a>
                <div class=\"mt-20\">
                    <h6 class=\"font_w6 h8 color-2 text-muted small\">Wir sorgen dafür, dass Sie, Ihre Mitarbeiter und Kunden problemlos und vollkommen sicher Ihren Tätigkeiten nachgehen können.</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"bgcolor-6\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-between\">
            <div class=\"col-md-12 col-lg-12 py-40\">
                <ul class=\"list-inline nav-footer1 flex-column flex-sm-row row\">
                    {% for page in pages.children %}
                        {% set current_page = (page.active or page.activeChild) ? 'color_3 font_w6' : '' %}
                        {% if page.header.body_classes != \"footer_menu_hide\" %}
                        <li class=\"list-inline-item col-md-6 col-lg-4 mx-0\">
                            <a class=\"d-block color_1 hovercolor_4 text-center text-md-left\" href=\"{{ page.url }}\">
                                <small class=\"{{ current_page }}\">{{ page.menu }}</small>
                            </a>
                        </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>

            
        </div>
    </div>
</div>

<div class=\"bgcolor_2 footerBG\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"small p-0 my-20 text-center\">© 2019. Alle Rechte vorbehalten</p>
            </div>
        </div>
    </div>
</div>", "partials/footer.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/templates/partials/footer.html.twig");
    }
}
