<?php

/* forms/fields/column/column.html.twig */
class __TwigTemplate_eebdd66780a311fe9cb5993ec9f0152e8cec3dbdb1a5cd58ed6cf13ab2b20daf extends Twig_Template
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
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 2
            echo "    <div class=\"form-column block pure-u-1-";
            echo twig_escape_filter($this->env, ($context["cols"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 3
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
                // line 4
                echo "        ";
                if ($this->getAttribute($context["field"], "type", [])) {
                    // line 5
                    echo "            ";
                    $context["value"] = (($this->getAttribute($context["field"], "name", [])) ? ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "toArray", [])));
                    // line 6
                    echo "            ";
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/column/column.html.twig", 6)->display($context);
                    // line 7
                    echo "        ";
                }
                // line 8
                echo "    ";
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
            // line 9
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/column/column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field.fields %}
    <div class=\"form-column block pure-u-1-{{ cols }}\">
    {% for field in field.fields %}
        {% if field.type %}
            {% set value = field.name ? data.value(field.name) : data.toArray %}
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
        {% endif %}
    {% endfor %}
    </div>
{% endif %}
", "forms/fields/column/column.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/forms/fields/column/column.html.twig");
    }
}
