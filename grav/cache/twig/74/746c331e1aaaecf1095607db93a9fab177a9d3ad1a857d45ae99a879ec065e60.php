<?php

/* partials/media-list-wrapper__list.html.twig */
class __TwigTemplate_60530cb7d0ab7d3e4be6497f971d49c58424bf7bbb9767c61d22d3a4ce77a3af extends Twig_Template
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
        echo "<div id=\"admin-media\" class=\"files js__files card-row grid fixed-blocks pure-g\">
    ";
        // line 2
        if ( !($context["is_modal"] ?? null)) {
            // line 3
            echo "        ";
            try {
                $this->loadTemplate("partials/media-list-wrapper__list__dropzone.html.twig", "partials/media-list-wrapper__list.html.twig", 3)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if (twig_test_empty($this->getAttribute(($context["admin"] ?? null), "files", []))) {
            // line 7
            echo "        <div class=\"empty-state\">
            ";
            // line 8
            if (($this->getAttribute(($context["uri"] ?? null), "param", [0 => "type"], "method") || $this->getAttribute(($context["uri"] ?? null), "param", [0 => "date"], "method"))) {
                // line 9
                echo "                <h2>Filtering by ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "param", [0 => "type"], "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "param", [0 => "date"], "method"), "html", null, true);
                echo "</h2>
            ";
            }
            // line 11
            echo "
            <h2>No media files found</h2>

            <p>You need to add media to a page in order to display it here.</p>
        </div>
    ";
        } else {
            // line 17
            echo "        ";
            $this->loadTemplate("media-list-content.html.twig", "partials/media-list-wrapper__list.html.twig", 17)->display(array_merge($context, ["is_modal" => ($context["is_modal"] ?? null)]));
            echo " ";
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
</div>

";
        // line 23
        $this->loadTemplate("partials/spinning-wheel.html.twig", "partials/media-list-wrapper__list.html.twig", 23)->display($context);
    }

    public function getTemplateName()
    {
        return "partials/media-list-wrapper__list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  71 => 20,  68 => 19,  65 => 18,  61 => 17,  53 => 11,  45 => 9,  43 => 8,  40 => 7,  38 => 6,  35 => 5,  32 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"admin-media\" class=\"files js__files card-row grid fixed-blocks pure-g\">
    {% if not is_modal %}
        {% include 'partials/media-list-wrapper__list__dropzone.html.twig' ignore missing %}
    {% endif %}

    {% if admin.files is empty %}
        <div class=\"empty-state\">
            {% if (uri.param('type') or uri.param('date')) %}
                <h2>Filtering by {{ uri.param('type') }} {{ uri.param('date') }}</h2>
            {% endif %}

            <h2>No media files found</h2>

            <p>You need to add media to a page in order to display it here.</p>
        </div>
    {% else %}
        {% include 'media-list-content.html.twig' with { is_modal: is_modal } %} {# not a partial as used by AJAX #}
    {% endif %}

    {{ nonce_field('admin-form', 'admin-nonce')|raw }}
</div>

{% include 'partials/spinning-wheel.html.twig' %}
", "partials/media-list-wrapper__list.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/partials/media-list-wrapper__list.html.twig");
    }
}
