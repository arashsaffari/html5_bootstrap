<?php

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_3b5b3c3dbe0497ffe74e6135064579d964f71bda02c782aa37944e6412728c92 extends Twig_Template
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
        $context["crumbs"] = $this->getAttribute(($context["breadcrumbs"] ?? null), "get", [], "method");
        // line 2
        $context["breadcrumbs_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []);
        // line 3
        $context["divider"] = $this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_divider_classes", []);
        // line 4
        echo "
";
        // line 5
        if (((twig_length_filter($this->env, ($context["crumbs"] ?? null)) > 1) || $this->getAttribute(($context["breadcrumbs_config"] ?? null), "show_all", []))) {
            // line 6
            echo "<nav class=\"d-inline\" style=\"margin-bottom:1px\" aria-label=\"breadcrumb\" id=\"topbreadcrumbs\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
    <ol class=\"breadcrumb m-0 p-0 justify-content-center justify-content-md-center bg-transparent px-10 py-5\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 9
                echo "        <li class=\"breadcrumb-item\"><a  class=\"small color_8 hovercolor_4\" href=\"";
                echo $this->getAttribute($context["crumb"], "url", []);
                echo "\" itemprop=\"url\"><span itemprop=\"title\">";
                echo $this->getAttribute($context["crumb"], "menu", []);
                echo "</span></a></li>
        ";
                // line 11
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo "<li><img class=\"mx-10\" width=\"6px\" src=\"";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://files/img/breadcrumbs_angle.svg");
                    echo "\" /></li>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </ol>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  65 => 12,  58 => 11,  51 => 9,  34 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set crumbs = breadcrumbs.get() %}
{% set breadcrumbs_config = config.plugins.breadcrumbs %}
{% set divider = breadcrumbs_config.icon_divider_classes %}

{% if crumbs|length > 1 or breadcrumbs_config.show_all %}
<nav class=\"d-inline\" style=\"margin-bottom:1px\" aria-label=\"breadcrumb\" id=\"topbreadcrumbs\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
    <ol class=\"breadcrumb m-0 p-0 justify-content-center justify-content-md-center bg-transparent px-10 py-5\">
    {% for crumb in crumbs %}
        <li class=\"breadcrumb-item\"><a  class=\"small color_8 hovercolor_4\" href=\"{{ crumb.url }}\" itemprop=\"url\"><span itemprop=\"title\">{{ crumb.menu }}</span></a></li>
        {# {% if not loop.last %}<li><i style=\"font-size:25px;line-height: 0;vertical-align: -5px; margin:0 5px;\" class=\"fal fa-angle-right color_12\"></i></li>{% endif %} #}
        {% if not loop.last %}<li><img class=\"mx-10\" width=\"6px\" src=\"{{ url('theme://files/img/breadcrumbs_angle.svg') }}\" /></li>{% endif %}
    {% endfor %}
    </ol>
</nav>
{% endif %}
", "partials/breadcrumbs.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/templates/partials/breadcrumbs.html.twig");
    }
}
