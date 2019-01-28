<?php

/* partials/messages.html.twig */
class __TwigTemplate_dbf6a8f8bc57c3ea095c6572764f1a9ad54b2c8dcf94659a5137735c109d4f47 extends Twig_Template
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
        $context["type_mapping"] = ["info" => "success", "error" => "error", "warning" => "warning"];
        // line 2
        $context["icon_mapping"] = ["info" => "checkmark", "error" => "wrong", "warning" => "information"];
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
            // line 5
            echo "    <div class=\"container mt-80\">\t
\t    <div class=\"row\">
\t\t    <div class=\"col-lg-12 bgcolor-4\">
                <div id=\"messages\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "fetch", []));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "
                    ";
                // line 11
                $context["scope"] = twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", []));
                // line 12
                echo "                    ";
                $context["type"] = $this->getAttribute(($context["type_mapping"] ?? null), ($context["scope"] ?? null), [], "array");
                // line 13
                echo "                    ";
                $context["icon"] = $this->getAttribute(($context["icon_mapping"] ?? null), ($context["scope"] ?? null), [], "array");
                // line 14
                echo "
                    <div class=\"toast toast-";
                // line 15
                echo ($context["type"] ?? null);
                echo " ";
                echo ($context["scope"] ?? null);
                echo "\">
                        <i class=\"icon dripicons-";
                // line 16
                echo ($context["icon"] ?? null);
                echo "\"></i> ";
                echo $this->getAttribute($context["message"], "message", []);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </div>
            </div>
         </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  58 => 16,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  41 => 11,  38 => 10,  34 => 9,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set type_mapping = {'info':'success', 'error': 'error', 'warning': 'warning'} %}
{% set icon_mapping = {'info':'checkmark', 'error':'wrong', 'warning':'information'} %}

{% if grav.messages.all %}
    <div class=\"container mt-80\">\t
\t    <div class=\"row\">
\t\t    <div class=\"col-lg-12 bgcolor-4\">
                <div id=\"messages\">
                {% for message in grav.messages.fetch %}

                    {% set scope = message.scope|e %}
                    {% set type = type_mapping[scope] %}
                    {% set icon = icon_mapping[scope] %}

                    <div class=\"toast toast-{{ type }} {{ scope }}\">
                        <i class=\"icon dripicons-{{ icon }}\"></i> {{ message.message|raw }}
                    </div>
                {% endfor %}
                </div>
            </div>
         </div>
    </div>
{% endif %}", "partials/messages.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/templates/partials/messages.html.twig");
    }
}
