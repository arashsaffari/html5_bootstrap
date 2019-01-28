<?php

/* partials/plugin-data.html.twig */
class __TwigTemplate_d61c3313f1486c608c397a46be99a545dc9c8bf7782b0c5f53841df34d6c4cc0 extends Twig_Template
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
        echo "<table>
    ";
        // line 2
        if ($this->getAttribute(($context["plugin"] ?? null), "author", [])) {
            // line 3
            echo "    <tr>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AUTHOR"), "html", null, true);
            echo ":</td>
        <td class=\"double\">
            ";
            // line 6
            if ($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "author", []), "url", [])) {
                // line 7
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "author", []), "url", []), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "author", []), "name", []), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 9
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "author", []), "name", []), "html", null, true);
                echo "
            ";
            }
            // line 11
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "author", []), "email", [])) {
                // line 12
                echo "                - <a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "author", []), "email", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "author", []), "email", []), "html", null, true);
                echo "</a>
            ";
            }
            // line 14
            echo "        </td>
    </tr>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["plugin"] ?? null), "homepage", [])) {
            // line 18
            echo "        <tr>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.HOMEPAGE"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "homepage", []), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "homepage", []), "html", null, true);
            echo "</a></td>
        </tr>
    ";
        }
        // line 23
        echo "    ";
        if ($this->getAttribute(($context["plugin"] ?? null), "demo", [])) {
            // line 24
            echo "        <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEMO"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "demo", []), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "demo", []), "html", null, true);
            echo "</a></td>
        </tr>
    ";
        }
        // line 29
        echo "    ";
        if ($this->getAttribute(($context["plugin"] ?? null), "bugs", [])) {
            // line 30
            echo "        <tr>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BUG_TRACKER"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "bugs", []), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "bugs", []), "html", null, true);
            echo "</a></td>
        </tr>
    ";
        }
        // line 35
        echo "    ";
        if ($this->getAttribute(($context["plugin"] ?? null), "keywords", [])) {
            // line 36
            echo "        <tr>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.KEYWORDS"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 38
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["plugin"] ?? null), "keywords", []), ", "), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 41
        echo "    ";
        if ($this->getAttribute(($context["plugin"] ?? null), "license", [])) {
            // line 42
            echo "        <tr>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LICENSE"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "license", []), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute(($context["plugin"] ?? null), "description", [])) {
            // line 49
            echo "        <tr>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DESCRIPTION"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 51
            echo $this->getAttribute(($context["plugin"] ?? null), "description_html", []);
            echo "</td>
        </tr>
    ";
        }
        // line 54
        echo "
    ";
        // line 55
        if (($this->getAttribute(($context["plugin"] ?? null), "readme", []) || $this->getAttribute(($context["plugin"] ?? null), "homepage", []))) {
            // line 56
            echo "        ";
            $context["readme_link"] = (($this->getAttribute(($context["plugin"] ?? null), "readme", [])) ? ($this->getAttribute(($context["plugin"] ?? null), "readme", [])) : ((($this->getAttribute(($context["plugin"] ?? null), "docs", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["plugin"] ?? null), "docs", []), ($this->getAttribute(($context["plugin"] ?? null), "homepage", []) . "/blob/master/README.md"))) : (($this->getAttribute(($context["plugin"] ?? null), "homepage", []) . "/blob/master/README.md")))));
            // line 57
            echo "        <tr>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.README"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "</a></td>
        </tr>
    ";
        }
        // line 62
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "partials/plugin-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 62,  183 => 59,  179 => 58,  176 => 57,  173 => 56,  171 => 55,  168 => 54,  162 => 51,  158 => 50,  155 => 49,  153 => 48,  150 => 47,  144 => 44,  140 => 43,  137 => 42,  134 => 41,  128 => 38,  124 => 37,  121 => 36,  118 => 35,  110 => 32,  106 => 31,  103 => 30,  100 => 29,  92 => 26,  88 => 25,  85 => 24,  82 => 23,  74 => 20,  70 => 19,  67 => 18,  64 => 17,  59 => 14,  51 => 12,  48 => 11,  42 => 9,  34 => 7,  32 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table>
    {% if plugin.author %}
    <tr>
        <td>{{ \"PLUGIN_ADMIN.AUTHOR\"|tu }}:</td>
        <td class=\"double\">
            {% if plugin.author.url %}
                <a href=\"{{ plugin.author.url }}\" target=\"_blank\">{{ plugin.author.name }}</a>
            {% else %}
                {{ plugin.author.name }}
            {% endif %}
            {% if plugin.author.email %}
                - <a href=\"mailto:{{ plugin.author.email }}\">{{ plugin.author.email }}</a>
            {% endif %}
        </td>
    </tr>
    {% endif %}
    {% if plugin.homepage %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.HOMEPAGE\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ plugin.homepage }}\" target=\"_blank\">{{ plugin.homepage }}</a></td>
        </tr>
    {% endif %}
    {% if plugin.demo %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DEMO\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ plugin.demo }}\" target=\"_blank\">{{ plugin.demo }}</a></td>
        </tr>
    {% endif %}
    {% if plugin.bugs %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.BUG_TRACKER\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ plugin.bugs }}\" target=\"_blank\">{{ plugin.bugs }}</a></td>
        </tr>
    {% endif %}
    {% if plugin.keywords %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.KEYWORDS\"|tu }}:</td>
            <td class=\"double\">{{ plugin.keywords|join(', ') }}</td>
        </tr>
    {% endif %}
    {% if plugin.license %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.LICENSE\"|tu }}:</td>
            <td class=\"double\">{{ plugin.license }}</td>
        </tr>
    {% endif %}

    {% if plugin.description %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DESCRIPTION\"|tu }}:</td>
            <td class=\"double\">{{ plugin.description_html|raw }}</td>
        </tr>
    {% endif %}

    {% if plugin.readme or plugin.homepage %}
        {% set readme_link = plugin.readme ?: plugin.docs|default(plugin.homepage ~ '/blob/master/README.md') %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.README\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ readme_link }}\" target=\"_blank\">{{ readme_link }}</a></td>
        </tr>
    {% endif %}

</table>
", "partials/plugin-data.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/admin/themes/grav/templates/partials/plugin-data.html.twig");
    }
}
