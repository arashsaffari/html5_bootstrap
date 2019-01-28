<?php

/* partials/media-list-wrapper__sidebar.html.twig */
class __TwigTemplate_0862e40e8d395c3284fbbd80c57303d53e23781df952c4a03c8bcc5cd79d7f0a extends Twig_Template
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
        // line 40
        echo "
";
        // line 41
        $context["macro"] = $this;
        // line 42
        echo "
<div class=\"pages-list-container clear block size-1-4\">
    <h5>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES"));
        echo "</h5>
    <div class=\"mediapicker-scroll\">
        <ul class=\"pages-list depth-0\">
            ";
        // line 47
        echo $context["macro"]->getloop(($context["pages"] ?? null), 0, $context);
        echo "
        </ul>
    </div>
</div>
";
    }

    // line 1
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 4
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["twig_vars"] ?? null), "config", [], "array"), "system", []), "param_sep", []);
            // line 5
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", [], "array");
            // line 6
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", [], "array");
            // line 7
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", [], "array");
            // line 8
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", [], "array");
            // line 9
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", [], "array");
            // line 10
            echo "
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 12
                echo "        ";
                $context["page_route"] = twig_trim_filter($this->getAttribute($context["p"], "rawRoute", []), "/");
                // line 13
                echo "        ";
                if (($this->getAttribute($context["p"], "language", []) && ($this->getAttribute($context["p"], "language", []) != ($context["admin_lang"] ?? null)))) {
                    // line 14
                    echo "            ";
                    $context["page_url"] = ((((((($context["base_url_simple"] ?? null) . "/") . $this->getAttribute($context["p"], "language", [])) . "/") . ($context["admin_route"] ?? null)) . "/pages/") . ($context["page_route"] ?? null));
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            ";
                    $context["page_url"] = ((($context["base_url"] ?? null) . "/pages/") . ($context["page_route"] ?? null));
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", []), "html", null, true);
                echo "\">
            <div class=\"row\">
                <span ";
                // line 21
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo " class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 22
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", [])) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", [])) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", [])) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", [])) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>

                <span data-hint=\"";
                // line 25
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) : ($this->getAttribute($context["p"], "route", []))), "html", null, true);
                echo "\" class=\"hint--bottom\">
                    <a data-page=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", []), "html", null, true);
                echo "\" class=\"js__page-link page-link\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
                echo "</a>
                </span>

                <span class=\"page-home\">";
                // line 29
                echo (($this->getAttribute($context["p"], "home", [])) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
            </div>
            ";
                // line 31
                if (($this->getAttribute($this->getAttribute($context["p"], "children", [], "method"), "count", []) > 0)) {
                    // line 32
                    echo "
                <ul class=\"depth-";
                    // line 33
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 34
                    echo $context["self"]->getloop($context["p"], (($context["depth"] ?? null) + 1), ($context["twig_vars"] ?? null));
                    echo "
                </ul>
            ";
                }
                // line 37
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/media-list-wrapper__sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 37,  151 => 34,  147 => 33,  144 => 32,  142 => 31,  137 => 29,  129 => 26,  125 => 25,  117 => 22,  113 => 21,  108 => 19,  105 => 18,  102 => 17,  99 => 16,  96 => 15,  93 => 14,  90 => 13,  87 => 12,  83 => 11,  80 => 10,  77 => 9,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  63 => 4,  60 => 3,  57 => 2,  43 => 1,  34 => 47,  28 => 44,  24 => 42,  22 => 41,  19 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page, depth, twig_vars) %}
    {% import _self as self %}

    {% set separator = twig_vars['config'].system.param_sep %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}

    {% for p in page.children() %}
        {% set page_route =  p.rawRoute|trim('/') %}
        {% if p.language and p.language != admin_lang %}
            {% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}
        {% else %}
            {% set page_url = base_url ~ '/pages/' ~ page_route  %}
        {% endif %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row\">
                <span {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}} class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>

                <span data-hint=\"{{ p.header.routes.default ?: p.route }}\" class=\"hint--bottom\">
                    <a data-page=\"{{ p.route }}\" class=\"js__page-link page-link\" href=\"#\">{{ p.title }}</a>
                </span>

                <span class=\"page-home\">{{ p.home ? '<i class=\"fa fa-home\"></i>' }}</span>
            </div>
            {% if p.children().count > 0 %}

                <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                    {{ self.loop(p, depth + 1, twig_vars) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as macro %}

<div class=\"pages-list-container clear block size-1-4\">
    <h5>{{ \"PLUGIN_ADMIN.PAGES\"|tu|e }}</h5>
    <div class=\"mediapicker-scroll\">
        <ul class=\"pages-list depth-0\">
            {{ macro.loop(pages, 0, _context) }}
        </ul>
    </div>
</div>
", "partials/media-list-wrapper__sidebar.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/partials/media-list-wrapper__sidebar.html.twig");
    }
}
