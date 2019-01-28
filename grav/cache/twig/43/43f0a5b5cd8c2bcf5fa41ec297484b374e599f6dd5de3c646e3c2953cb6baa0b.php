<?php

/* partials/media-list-wrapper.html.twig */
class __TwigTemplate_2f67de3685002bfe1cd4d4f0493ac5aa7c0183bc15e65522cb76d79ef74e27f4 extends Twig_Template
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
        echo "<div class=\"grid media-container ";
        if (($context["is_modal"] ?? null)) {
            echo "in-modal";
        }
        echo "\">
    ";
        // line 2
        $context["default_site_lang"] = twig_first($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "system", []), "languages", [])));
        // line 3
        echo "
    ";
        // line 4
        if ( !($context["route"] ?? null)) {
            // line 5
            echo "        ";
            $this->loadTemplate("partials/media-list-wrapper__sidebar.html.twig", "partials/media-list-wrapper.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if (($context["is_modal"] ?? null)) {
            // line 9
            echo "        <div class=\"thumbs-list-container block size-3-4\">
            ";
            // line 10
            $this->loadTemplate("partials/media-list-wrapper__list__filters.html.twig", "partials/media-list-wrapper.html.twig", 10)->display($context);
            // line 11
            echo "            <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

            <div class=\"mediapicker-scroll\">
                ";
            // line 14
            $this->loadTemplate("partials/media-list-wrapper__list.html.twig", "partials/media-list-wrapper.html.twig", 14)->display(array_merge($context, ["is_modal" => ($context["is_modal"] ?? null)]));
            // line 15
            echo "            </div>

            <input name=\"thumb-size\" class=\"media-range\" type=\"range\" min=\"50\" max=\"250\" value=\"100\" />
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"thumbs-list-container block ";
            if ( !($context["route"] ?? null)) {
                echo "size-2-3";
            }
            echo " \">
            ";
            // line 21
            if ( !($context["route"] ?? null)) {
                // line 22
                echo "                ";
                $this->loadTemplate("partials/media-list-wrapper__list__filters.html.twig", "partials/media-list-wrapper.html.twig", 22)->display($context);
                // line 23
                echo "                <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

                ";
                // line 25
                $this->loadTemplate("partials/media-list-wrapper__list.html.twig", "partials/media-list-wrapper.html.twig", 25)->display(array_merge($context, ["is_modal" => ($context["is_modal"] ?? null)]));
                // line 26
                echo "
            ";
            } else {
                // line 28
                echo "                ";
                $this->loadTemplate("partials/media-list-wrapper__details.html.twig", "partials/media-list-wrapper.html.twig", 28)->display($context);
                // line 29
                echo "            ";
            }
            // line 30
            echo "        </div>
    ";
        }
        // line 32
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/media-list-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  91 => 30,  88 => 29,  85 => 28,  81 => 26,  79 => 25,  75 => 23,  72 => 22,  70 => 21,  63 => 20,  56 => 15,  54 => 14,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"grid media-container {% if is_modal %}in-modal{% endif %}\">
    {% set default_site_lang = grav.config.system.languages|first|first %}

    {% if not route %}
        {% include 'partials/media-list-wrapper__sidebar.html.twig' %}
    {% endif %}

    {% if is_modal %}
        <div class=\"thumbs-list-container block size-3-4\">
            {% include 'partials/media-list-wrapper__list__filters.html.twig' %}
            <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

            <div class=\"mediapicker-scroll\">
                {% include 'partials/media-list-wrapper__list.html.twig' with { is_modal: is_modal } %}
            </div>

            <input name=\"thumb-size\" class=\"media-range\" type=\"range\" min=\"50\" max=\"250\" value=\"100\" />
        </div>
    {% else %}
        <div class=\"thumbs-list-container block {% if not route %}size-2-3{% endif %} \">
            {% if not route %}
                {% include 'partials/media-list-wrapper__list__filters.html.twig' %}
                <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

                {% include 'partials/media-list-wrapper__list.html.twig' with { is_modal: is_modal } %}

            {% else %}
                {% include 'partials/media-list-wrapper__details.html.twig' %}
            {% endif %}
        </div>
    {% endif %}
</div>", "partials/media-list-wrapper.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/partials/media-list-wrapper.html.twig");
    }
}
