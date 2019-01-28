<?php

/* forms/fields/tab/tab.html.twig */
class __TwigTemplate_5c54c678e7911c708079097dc75731f12318ba5e715ee024850f1f1c8261ae42 extends Twig_Template
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
            echo "    <div class=\"form-tab\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
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
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 4
                echo "        ";
                if ($this->getAttribute(($context["field"] ?? null), "type", [])) {
                    // line 5
                    if ((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["childName"]) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ".") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) {
                        // line 6
                        $context["child"] = twig_array_merge($context["child"], ["name" => ($this->getAttribute(($context["field"] ?? null), "name", []) . $context["childName"])]);
                        // line 7
                        echo "            ";
                    }
                    // line 8
                    echo "
            ";
                    // line 9
                    $context["value"] = (($this->getAttribute($context["child"], "name", [])) ? ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "toArray", [])));
                    // line 10
                    echo "            ";
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/tab/tab.html.twig", 10)->display(array_merge($context, ["field" => $context["child"], "value" => $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")]));
                    // line 11
                    echo "        ";
                }
                // line 12
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/tab/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  62 => 12,  59 => 11,  56 => 10,  54 => 9,  51 => 8,  48 => 7,  46 => 6,  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
    <div class=\"form-tab\">
    {% for childName, child in field.fields %}
        {% if field.type %}
            {%- if childName starts with '.' -%}
                {% set child = child|merge({ name: field.name ~ childName }) %}
            {% endif %}

            {% set value = child.name ? data.value(child.name) : data.toArray %}
            {% include [\"forms/fields/#{child.type}/#{child.type}.html.twig\", 'forms/fields/text/text.html.twig'] with { field: child, value: data.value(child.name) } %}
        {% endif %}
    {% endfor %}
    </div>
{% endif %}
", "forms/fields/tab/tab.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/forms/fields/tab/tab.html.twig");
    }
}
