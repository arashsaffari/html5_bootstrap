<?php

/* forms/fields/conditional/conditional.html.twig */
class __TwigTemplate_1edfafbc0d838b938d2ab0652b14490367cac1eea051dd3387647d5a08f49cbf extends Twig_Template
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
        $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($context, $this->getAttribute(($context["field"] ?? null), "condition", []));
        // line 2
        $context["value"] = (((($context["value"] ?? null) == "true")) ? (1) : (($context["value"] ?? null)));
        // line 3
        $context["value"] = (((($context["value"] ?? null) == "false")) ? (0) : (($context["value"] ?? null)));
        // line 4
        echo "
";
        // line 5
        if (($context["value"] ?? null)) {
            // line 6
            echo "    ";
            if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
                // line 7
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
                echo "\">
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
                // line 11
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 12
                    echo "            ";
                    if ($this->getAttribute($context["field"], "type", [])) {
                        // line 13
                        echo "                ";
                        $context["value"] = $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                        // line 14
                        echo "                ";
                        $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/conditional/conditional.html.twig", 14)->display($context);
                        // line 15
                        echo "            ";
                    }
                    // line 16
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
                // line 20
                echo "    </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/conditional/conditional.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  94 => 19,  91 => 18,  88 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  44 => 11,  42 => 10,  39 => 9,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = evaluate(field.condition) %}
{% set value = value == 'true' ? 1 : value %}
{% set value = value == 'false' ? 0 : value %}

{% if value %}
    {% if field.classes %}
    <div class=\"{{ field.classes }}\">
    {% endif %}

    {% if field.fields %}
        {% for field in field.fields %}
            {% if field.type %}
                {% set value = data.value(field.name) %}
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            {% endif %}
        {% endfor %}
    {% endif %}

    {% if field.classes %}
    </div>
    {% endif %}
{% endif %}
", "forms/fields/conditional/conditional.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/form/templates/forms/fields/conditional/conditional.html.twig");
    }
}
