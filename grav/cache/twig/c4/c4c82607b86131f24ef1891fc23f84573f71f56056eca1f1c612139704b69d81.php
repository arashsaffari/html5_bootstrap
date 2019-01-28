<?php

/* partials/navigation.html.twig */
class __TwigTemplate_9b5f7a5a39fc6957030064318e674e4b069abe22e6ce9e116bc0dc56339e6647 extends Twig_Template
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
        // line 25
        echo "

";
        // line 48
        echo "
   

<ul class=\"navbar-nav ml-auto\">";
        // line 52
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 53
            echo "            ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
    ";
        } else {
            // line 55
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 56
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 57
                echo "            <li class=\"nav-item ";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a class=\"nav-link\" href=\"";
                // line 58
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                    ";
                // line 59
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 60
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "    ";
        }
        // line 65
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 66
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 67
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
                ";
            // line 68
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>";
            }
            // line 69
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</ul>";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 4
                echo "
        ";
                // line 5
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 6
                    echo "            <li class=\"nav-item dropdown has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a class=\"nav-link dropdown-toggle\" href=\"";
                    // line 7
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" id=\"dropdown_";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($context["p"], "url", []));
                    echo "\" 
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
                    // line 9
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 10
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "</a>
                <ul class=\"dropdown-menu ";
                    // line 11
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_dropdown_align", [])) {
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_dropdown_align", []);
                    }
                    echo "\" aria-labelledby=\"dropdown_";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($context["p"], "url", []));
                    echo "\"> ";
                    // line 12
                    echo "                    ";
                    echo $this->getAttribute($this, "loop_dropdown", [0 => $context["p"]], "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 16
                    echo "           <li class=\"nav-item ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a class=\"nav-link\" href=\"";
                    // line 17
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                    ";
                    // line 18
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 19
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li> 
        ";
                }
                // line 23
                echo "    ";
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

    // line 27
    public function getloop_dropdown($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 28
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 29
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 30
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 31
                    echo "            <li class=\"sub-menu ";
                    echo ($context["current_page"] ?? null);
                    echo " ";
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_subdropdown_align", [])) {
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_subdropdown_align", []);
                    }
                    echo "\">";
                    // line 32
                    echo "                <a class=\"dropdown-item dropdown-toggle\" href=\"";
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" id=\"dropdown_";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($context["p"], "url", []));
                    echo "\" 
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
                    // line 34
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 35
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "</a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown_";
                    // line 36
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($context["p"], "url", []));
                    echo "\">
                    ";
                    // line 37
                    echo $this->getAttribute($this, "loop_dropdown", [0 => $context["p"]], "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 41
                    echo "            <li><a class=\"dropdown-item ";
                    echo ($context["current_page"] ?? null);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                ";
                    // line 42
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 43
                    echo "                ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
            </a></li>
        ";
                }
                // line 46
                echo "    ";
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
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 46,  286 => 43,  280 => 42,  273 => 41,  266 => 37,  262 => 36,  257 => 35,  251 => 34,  243 => 32,  235 => 31,  232 => 30,  229 => 29,  224 => 28,  212 => 27,  193 => 23,  185 => 19,  179 => 18,  175 => 17,  170 => 16,  162 => 12,  155 => 11,  150 => 10,  144 => 9,  137 => 7,  132 => 6,  130 => 5,  127 => 4,  124 => 3,  119 => 2,  107 => 1,  103 => 73,  92 => 69,  86 => 68,  82 => 67,  79 => 66,  74 => 65,  71 => 64,  60 => 60,  54 => 59,  50 => 58,  45 => 57,  42 => 56,  37 => 55,  31 => 53,  28 => 52,  23 => 48,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}

        {% if p.children.visible.count > 0 %}
            <li class=\"nav-item dropdown has-children {{ current_page }}\">
                <a class=\"nav-link dropdown-toggle\" href=\"{{ p.url }}\" id=\"dropdown_{{ p.url|md5 }}\" 
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}</a>
                <ul class=\"dropdown-menu {% if p.header.menu_dropdown_align %}{{ p.header.menu_dropdown_align }}{% endif %}\" aria-labelledby=\"dropdown_{{ p.url|md5 }}\"> {# dropdown-menu-right #}
                    {{ _self.loop_dropdown(p) }}
                </ul>
            </li>
        {% else %}
           <li class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            </li> 
        {% endif %}
    {% endfor %}
{% endmacro %}


{% macro loop_dropdown(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"sub-menu {{ current_page }} {% if p.header.menu_subdropdown_align %}{{ p.header.menu_subdropdown_align }}{% endif %}\">{# dropleft #}
                <a class=\"dropdown-item dropdown-toggle\" href=\"{{ p.url }}\" id=\"dropdown_{{ p.url|md5 }}\" 
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}</a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown_{{ p.url|md5 }}\">
                    {{ _self.loop_dropdown(p) }}
                </ul>
            </li>
        {% else %}
            <li><a class=\"dropdown-item {{ current_page }}\" href=\"{{ p.url }}\">
                {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                {{ p.menu }}
            </a></li>
        {% endif %}
    {% endfor %}
{% endmacro %}

   

<ul class=\"navbar-nav ml-auto\">{# ml-auto #}
    {% if theme_config.dropdown.enabled %}
            {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <li class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
</ul>", "partials/navigation.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/templates/partials/navigation.html.twig");
    }
}
