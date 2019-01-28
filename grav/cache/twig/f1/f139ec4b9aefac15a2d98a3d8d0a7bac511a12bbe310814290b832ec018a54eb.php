<?php

/* partials/messages.html.twig */
class __TwigTemplate_f50b035acd9978ad3fe1fad506651168fa1ea775395affe9764fc0edf83df14a extends Twig_Template
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
        $context["status_mapping"] = ["info" => "green", "error" => "red", "warning" => "yellow"];
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
            // line 4
            echo "    <div id=\"messages\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "fetch", []));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "
            ";
                // line 7
                $context["scope"] = twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", []));
                // line 8
                echo "            ";
                $context["color"] = $this->getAttribute(($context["status_mapping"] ?? null), ($context["scope"] ?? null), [], "array");
                // line 9
                echo "
            <div class=\"notices ";
                // line 10
                echo ($context["scope"] ?? null);
                echo " ";
                echo ($context["color"] ?? null);
                echo "\"><p>";
                echo $this->getAttribute($context["message"], "message", []);
                echo "</p></div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
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
        return array (  57 => 13,  44 => 10,  41 => 9,  38 => 8,  36 => 7,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set status_mapping = {'info':'green', 'error': 'red', 'warning': 'yellow'} %}

{% if grav.messages.all %}
    <div id=\"messages\">
        {% for message in grav.messages.fetch %}

            {% set scope = message.scope|e %}
            {% set color = status_mapping[scope] %}

            <div class=\"notices {{ scope }} {{ color }}\"><p>{{ message.message|raw }}</p></div>

        {% endfor %}
    </div>
{% endif %}
", "partials/messages.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/system/templates/partials/messages.html.twig");
    }
}
