<?php

/* forms/fields/taxonomy/taxonomy.html.twig */
class __TwigTemplate_2e516e2cc2ad004e8f498affcde9d70dacb06b181196f37ea631dde3b154a0f0 extends Twig_Template
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
        $context["taxonomies"] = (((null === ($context["taxonomies"] ?? null))) ? ((($this->getAttribute(($context["field"] ?? null), "taxonomies", [])) ? ($this->getAttribute(($context["field"] ?? null), "taxonomies", [])) : ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "data", [0 => "config/site"], "method"), "taxonomies", [])))) : (($context["taxonomies"] ?? null)));
        // line 2
        $context["parentname"] = $this->getAttribute(($context["field"] ?? null), "name", []);
        // line 3
        $context["options"] = $this->getAttribute(($context["field"] ?? null), "options", []);
        // line 4
        $context["default"] = $this->getAttribute(($context["field"] ?? null), "default", []);
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["taxonomies"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 7
            echo "
    ";
            // line 8
            $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter((($this->getAttribute(($context["data"] ?? null), "value", [0 => ("header.taxonomy." . $context["name"])], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "value", [0 => ("header.taxonomy." . $context["name"])], "method"), ((($this->getAttribute(($context["default"] ?? null), $context["name"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["default"] ?? null), $context["name"], [], "array")))) ? ($this->getAttribute(($context["default"] ?? null), $context["name"], [], "array")) : ([])))) : (((($this->getAttribute(($context["default"] ?? null), $context["name"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["default"] ?? null), $context["name"], [], "array")))) ? ($this->getAttribute(($context["default"] ?? null), $context["name"], [], "array")) : ([])))));
            // line 9
            echo "    ";
            $context["sub_taxonomies"] = twig_get_array_keys_filter((($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "taxonomy", [], "any", false, true), "taxonomy", [], "any", false, true), $context["name"], [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "taxonomy", [], "any", false, true), "taxonomy", [], "any", false, true), $context["name"]), [])) : ([])));
            // line 10
            echo "    ";
            $context["list"] = array_unique(twig_array_merge(twig_array_merge(((($this->getAttribute(($context["options"] ?? null), $context["name"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["options"] ?? null), $context["name"], [], "array")))) ? ($this->getAttribute(($context["options"] ?? null), $context["name"], [], "array")) : ([])), ($context["sub_taxonomies"] ?? null)), ($context["value"] ?? null)));
            // line 11
            echo "
    ";
            // line 12
            $context["field"] = ["type" => "select", "classes" => "fancy create", "label" => twig_capitalize_string_filter($this->env,             // line 15
$context["name"]), "name" => ((            // line 16
($context["parentname"] ?? null) . ".") . $context["name"]), "multiple" => true, "options" =>             // line 18
($context["list"] ?? null), "style" => $this->getAttribute(            // line 19
($context["field"] ?? null), "style", []), "selectize" => ["create" => true]];
            // line 24
            echo "
    ";
            // line 25
            $this->loadTemplate([0 => "forms/fields/select/select.html.twig"], "forms/fields/taxonomy/taxonomy.html.twig", 25)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/taxonomy/taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  67 => 24,  65 => 19,  64 => 18,  63 => 16,  62 => 15,  61 => 12,  58 => 11,  55 => 10,  52 => 9,  50 => 8,  47 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set taxonomies = (taxonomies is null ? (field.taxonomies ? field.taxonomies : admin.data('config/site').taxonomies) : taxonomies) %}
{% set parentname = field.name %}
{% set options = field.options %}
{% set default = field.default %}

{% for name in taxonomies %}

    {% set value = array(data.value('header.taxonomy.' ~ name)|default(default[name] ?? [])) %}
    {% set sub_taxonomies = attribute(grav.taxonomy.taxonomy, name)|default([])|keys %}
    {% set list = (options[name] ?? [])|merge(sub_taxonomies)|merge(value)|array_unique %}

    {% set field = {
        type: 'select',
        classes: 'fancy create',
        label: name|capitalize,
        name: parentname ~ '.' ~ name,
        multiple: true,
        options: list,
        style: field.style,
        selectize: {
            create: true
        }
    } %}

    {% include ['forms/fields/select/select.html.twig'] %}
{% endfor %}
", "forms/fields/taxonomy/taxonomy.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/forms/fields/taxonomy/taxonomy.html.twig");
    }
}
