<?php

/* partials/nav-quick-tray.html.twig */
class __TwigTemplate_de95d5bc43c85c033790291f7658dd431a62c95e884c8fda0ed4edd9a5dd9c4d extends Twig_Template
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
        $context["clear_cache_url"] = (((($context["base_url_relative"] ?? null) . "/cache.json/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . twig_escape_filter($this->env, "clearCache", "html_attr"));
        // line 2
        echo "<ul id=\"admin-nav-quick-tray\">
    ";
        // line 3
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super", 2 => "admin.cache"])) {
            // line 4
            echo "    <li class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE"), "html", null, true);
            echo "\">
        <a data-clear-cache-type=\"\" data-clear-cache=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ($context["clear_cache_url"] ?? null), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-trash\"></i>
        </a>
    </li>
    ";
        }
        // line 10
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_quick_tray", [])) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_quick_tray", []));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 12
                echo "        ";
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(((($this->getAttribute($context["item"], "authorize", [], "any", true, true) && twig_test_iterable($this->getAttribute($context["item"], "authorize", [])))) ? ($this->getAttribute($context["item"], "authorize", [])) : ([0 => (($this->getAttribute($context["item"], "authorize", [])) ? ($this->getAttribute($context["item"], "authorize", [])) : (("admin." . (($this->getAttribute($context["item"], "location", [])) ? ($this->getAttribute($context["item"], "location", [])) : ($this->getAttribute($context["item"], "route", [])))))), 1 => "admin.super"])))) {
                    // line 13
                    echo "            ";
                    $context["data_tags"] = "";
                    // line 14
                    echo "            ";
                    if ($this->getAttribute($context["item"], "data", [])) {
                        // line 15
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "data", []));
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 16
                            echo "                    ";
                            $context["data_tags"] = (((((($context["data_tags"] ?? null) . " data-") . $context["key"]) . "=\"") . $context["value"]) . "\"");
                            // line 17
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 18
                        echo "            ";
                    }
                    // line 19
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []), "html", null, true);
                    echo " hint--bottom\" data-hint=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hint", []), "html", null, true);
                    echo "\" ";
                    echo ($context["data_tags"] ?? null);
                    echo ">
            ";
                    // line 20
                    if ($this->getAttribute($context["item"], "route", [])) {
                        // line 21
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "route", [])), "html", null, true);
                        echo "\">
                    <i class=\"fa fa-fw ";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                        echo "\"></i>
                </a>
            ";
                    } else {
                        // line 25
                        echo "                <i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                        echo "\"></i>
            ";
                    }
                    // line 27
                    echo "            </li>
        ";
                }
                // line 29
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "        ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
                // line 32
                echo "        <li class=\"hint--bottom\" data-hint=\"Add the 'quick-tray-links' plugin for more...\">
            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, (($context["base_url_relative"] ?? null) . "/plugins/install"), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus\"></i>
            </a>
        </li>
        ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "partials/nav-quick-tray.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  128 => 38,  120 => 33,  117 => 32,  114 => 31,  111 => 30,  105 => 29,  101 => 27,  95 => 25,  89 => 22,  84 => 21,  82 => 20,  73 => 19,  70 => 18,  64 => 17,  61 => 16,  56 => 15,  53 => 14,  50 => 13,  47 => 12,  42 => 11,  39 => 10,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set clear_cache_url = base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache'|e('html_attr') %}
<ul id=\"admin-nav-quick-tray\">
    {% if authorize(['admin.maintenance', 'admin.super', 'admin.cache']) %}
    <li class=\"hint--bottom\" data-hint=\"{{ \"PLUGIN_ADMIN.CLEAR_CACHE\"|tu }}\">
        <a data-clear-cache-type=\"\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url, 'admin-form', 'admin-nonce') }}\">
            <i class=\"fa fa-trash\"></i>
        </a>
    </li>
    {% endif %}
    {% if grav.twig.plugins_quick_tray %}
    {% for label, item in grav.twig.plugins_quick_tray %}
        {% if authorize((item.authorize is defined and item.authorize is iterable) ? item.authorize : [item.authorize ?: ('admin.' ~ (item.location ?: item.route)), 'admin.super']) %}
            {% set data_tags = '' %}
            {% if (item.data) %}
                {% for key, value in item.data %}
                    {% set data_tags = data_tags ~ ' data-' ~ key ~ '=\"' ~ value ~ '\"' %}
                {% endfor %}
            {% endif %}
            <li class=\"{{ item.class }} hint--bottom\" data-hint=\"{{ item.hint }}\" {{ data_tags|raw }}>
            {% if item.route %}
                <a href=\"{{ url(item.route) }}\">
                    <i class=\"fa fa-fw {{ item.icon }}\"></i>
                </a>
            {% else %}
                <i class=\"fa fa-fw {{ item.icon }}\"></i>
            {% endif %}
            </li>
        {% endif %}
    {% endfor %}
    {% else %}
        {% if authorize(['admin.maintenance', 'admin.super']) %}
        <li class=\"hint--bottom\" data-hint=\"Add the 'quick-tray-links' plugin for more...\">
            <a href=\"{{ base_url_relative ~ '/plugins/install' }}\">
                <i class=\"fa fa-plus\"></i>
            </a>
        </li>
        {% endif %}
    {% endif %}
</ul>

", "partials/nav-quick-tray.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/partials/nav-quick-tray.html.twig");
    }
}
