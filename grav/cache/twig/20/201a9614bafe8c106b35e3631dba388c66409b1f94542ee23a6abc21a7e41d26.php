<?php

/* partials/base.html.twig */
class __TwigTemplate_0eab3694ec1860d7f9d8a74fee7e46e0d4ff79af767017ea16fe1a9c8602e2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["css_loading"] = "";
        // line 4
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 5
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "</head>
<body class=\"";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\" id=\"top\">

    <nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\" id=\"mainMenu\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 48
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("home");
        echo "\">Navbar ";
        echo "</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
            ";
        // line 54
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "            <form name=\"search\" data-simplesearch-form>
                <input
                    name=\"searchfield\"
                    type=\"text\"
                    class=\"form-control bordercolor_7\"
                    ";
        // line 63
        echo "                    value=\"";
        echo twig_escape_filter($this->env, ($context["query"] ?? null));
        echo "\"
                    data-search-invalid=\"";
        // line 64
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS", ($context["min_chars"] ?? null));
        echo "\"
                    data-search-separator=\"";
        // line 65
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "\"
                    data-search-input=\"";
        // line 66
        echo ($context["base_url"] ?? null);
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", [])))));
        echo "/query\"
                >
            </form>
\t\t</div>
\t</nav>

    ";
        // line 72
        $this->displayBlock('messages', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 85
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 87
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://files/plugins/jquery/3.3.1/jquery-3.3.1.min.js");
        echo "\"><\\/script>')</script>
    ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    
    ";
        // line 98
        echo $this->getAttribute(($context["assets"] ?? null), "outputJs", [], "method");
        echo "

    ";
        // line 100
        $this->displayBlock('bottom', $context, $blocks);
        // line 103
        echo "
<a href=\"#top\" id=\"go-to-top\" style=\"display: none;\" class=\"bgcolor-4 color-2 btn-circle btn-lg\"><i class=\"fas fa-arrow-up\"></i></a>

<script>
window.addEventListener(\"load\", function(){
window.cookieconsent.initialise({
  \"palette\": {
    \"popup\": {
      \"background\": \"#000\"
    },
    \"button\": {
      \"background\": \"#f1d600\"
    }
  },
  \"position\": \"bottom-left\",
  \"content\": {
    \"message\": \"Diese Website nutzt Cookies. Indem Sie fortfahren, stimmen Sie der Nutzung zu.\",
    \"dismiss\": \"Verstanden\",
    \"link\": \"Weitere Informationen\",
    \"href\": \"";
        // line 122
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("datenschutz");
        echo "\"
  }
})});
</script>

<script>
    var base_url_relative =  \"";
        // line 128
        echo ($context["base_url_relative"] ?? null);
        echo "\";
</script>

</body>
</html>
";
    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        // line 10
        echo "    <meta charset=\"utf-8\" />
    <meta name=\"author\" content=\"Arash Saffari\" />
    <title>";
        // line 12
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no\">
   
    <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\"/>

    <!-- touch device setting -->
    <link rel=\"icon\" href=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("favicon.ico");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("favicon.png");
        echo "\" />
    
    ";
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P7WPV72');</script>
    <!-- End Google Tag Manager -->
    <script src=\"";
        // line 41
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://files/js/modernizr-2.8.3.min.js");
        echo "\"></script>

";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900", 1 => ["priority" => 125]], "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://files/plugins/bootstrap/4.1.3/css/bootstrap.min.css", 1 => ["priority" => 120, "pipeline" => false, "loading" => ($context["css_loading"] ?? null)]], "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://files/fonts/font-awesome/pro-5.6.3/css/all.min.css", 1 => ["priority" => 118]], "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://files/css/animate.min.css", 1 => ["priority" => 116, "pipeline" => false, "loading" => ($context["css_loading"] ?? null)]], "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://files/plugins/fancybox/dist/jquery.fancybox.min.css", 1 => ["priority" => 115, "pipeline" => false, "loading" => ($context["css_loading"] ?? null)]], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://files/plugins/cookieconsent/3.1.0/build/cookieconsent.min.css", 1 => ["priority" => 114, "pipeline" => false, "loading" => ($context["css_loading"] ?? null)]], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://files/css/scss/base.css", 1 => ["priority" => 113, "pipeline" => false, "loading" => ($context["css_loading"] ?? null)]], "method");
        // line 33
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 10))) {
        }
        // line 34
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
        }
        // line 35
        echo "    ";
    }

    // line 54
    public function block_header($context, array $blocks = [])
    {
        // line 55
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 56
        echo "            ";
    }

    // line 55
    public function block_header_navigation($context, array $blocks = [])
    {
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 55)->display($context);
    }

    // line 72
    public function block_messages($context, array $blocks = [])
    {
    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        // line 75
        echo "        <div id=\"body_content\">
            ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "        </div>
    ";
    }

    // line 76
    public function block_content($context, array $blocks = [])
    {
    }

    // line 80
    public function block_footer($context, array $blocks = [])
    {
        // line 81
        echo "    <footer id=\"footer\">
        ";
        // line 82
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 82)->display($context);
        // line 83
        echo "    </footer>
    ";
    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        // line 89
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://files/plugins/popper/1.14.3/umd/popper.min.js", 1 => ["priority" => 80, "pipeline" => false, "loading" => ""]], "method");
        // line 90
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://files/plugins/bootstrap/4.1.3/js/bootstrap.min.js", 1 => ["priority" => 77, "pipeline" => false, "loading" => ""]], "method");
        // line 91
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://files/plugins/fancybox/dist/jquery.fancybox.min.js", 1 => ["priority" => 74, "pipeline" => false, "loading" => ($context["css_loading"] ?? null)]], "method");
        // line 92
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://files/js/wow.min.js", 1 => ["priority" => 70, "pipeline" => false, "loading" => ($context["css_loading"] ?? null)]], "method");
        // line 93
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://files/plugins/cookieconsent/3.1.0/build/cookieconsent.min.js", 1 => ["priority" => 65, "pipeline" => false, "loading" => ($context["css_loading"] ?? null)]], "method");
        // line 94
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://files/js/settings.js", 1 => ["priority" => 50, "pipeline" => false, "loading" => ($context["css_loading"] ?? null)]], "method");
        // line 95
        echo "    ";
    }

    // line 100
    public function block_bottom($context, array $blocks = [])
    {
        // line 101
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 101,  341 => 100,  337 => 95,  334 => 94,  331 => 93,  328 => 92,  325 => 91,  322 => 90,  319 => 89,  316 => 88,  311 => 83,  309 => 82,  306 => 81,  303 => 80,  298 => 76,  293 => 77,  291 => 76,  288 => 75,  285 => 74,  280 => 72,  274 => 55,  270 => 56,  267 => 55,  264 => 54,  260 => 35,  256 => 34,  252 => 33,  249 => 32,  246 => 31,  243 => 30,  240 => 29,  237 => 28,  234 => 27,  231 => 26,  228 => 25,  221 => 41,  212 => 36,  210 => 25,  207 => 24,  202 => 21,  198 => 20,  192 => 17,  187 => 14,  185 => 13,  177 => 12,  173 => 10,  170 => 9,  160 => 128,  151 => 122,  130 => 103,  128 => 100,  123 => 98,  117 => 96,  115 => 88,  111 => 87,  107 => 85,  105 => 80,  102 => 79,  100 => 74,  97 => 73,  95 => 72,  85 => 66,  81 => 65,  77 => 64,  72 => 63,  65 => 57,  63 => 54,  53 => 48,  47 => 45,  44 => 44,  42 => 9,  37 => 7,  33 => 5,  31 => 4,  29 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% spaceless %} #}
{# {% set css_loading = \"inline\" %} #}
{% set css_loading = \"\" %}
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <meta name=\"author\" content=\"Arash Saffari\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no\">
   
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>

    <!-- touch device setting -->
    <link rel=\"icon\" href=\"{{ url('favicon.ico') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('favicon.png') }}\" />
    
    {# {% include 'partials/langswitcher.hreflang.html.twig' %} #}

    {% block stylesheets %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900', {'priority':125}) %}
        {% do assets.addCss('theme://files/plugins/bootstrap/4.1.3/css/bootstrap.min.css', {'priority':120, 'pipeline':false, 'loading':css_loading}) %}
        {% do assets.addCss('theme://files/fonts/font-awesome/pro-5.6.3/css/all.min.css', {'priority':118}) %}
        {% do assets.addCss('theme://files/css/animate.min.css', {'priority':116, 'pipeline':false, 'loading':css_loading}) %}
        {% do assets.addCss('theme://files/plugins/fancybox/dist/jquery.fancybox.min.css', {'priority':115, 'pipeline':false, 'loading':css_loading}) %}
        {% do assets.addCss('theme://files/plugins/cookieconsent/3.1.0/build/cookieconsent.min.css', {'priority':114, 'pipeline':false, 'loading':css_loading}) %}
        {% do assets.addCss('theme://files/css/scss/base.css', {'priority':113, 'pipeline':false, 'loading':css_loading}) %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}{% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}{% endif %}
    {% endblock %}
    {{ assets.css() }}

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P7WPV72');</script>
    <!-- End Google Tag Manager -->
    <script src=\"{{ url('theme://files/js/modernizr-2.8.3.min.js') }}\"></script>

{% endblock head %}
</head>
<body class=\"{{ page.header.body_classes }}\" id=\"top\">

    <nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\" id=\"mainMenu\">
\t\t<a class=\"navbar-brand\" href=\"{{ url('home') }}\">Navbar {# <img src=\"{{ url('theme://files/img/*.svg') }}\" class=\"img-fluid\" alt=\"\" title=\"\"> #}</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
            {% block header %}
                {% block header_navigation %}{% include 'partials/navigation.html.twig' %}{% endblock %}
            {% endblock %}
            <form name=\"search\" data-simplesearch-form>
                <input
                    name=\"searchfield\"
                    type=\"text\"
                    class=\"form-control bordercolor_7\"
                    {# placeholder=\"{{\"PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER\"|t}}\" #}
                    value=\"{{ query|e }}\"
                    data-search-invalid=\"{{ \"PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS\"|t(min_chars)|raw }}\"
                    data-search-separator=\"{{ config.system.param_sep }}\"
                    data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route == '@self' ? '' : (config.plugins.simplesearch.route == '/' ? '' : config.plugins.simplesearch.route) }}/query\"
                >
            </form>
\t\t</div>
\t</nav>

    {% block messages %}{# {% include 'partials/messages.html.twig' ignore missing %} #}{% endblock %}

    {% block body %}
        <div id=\"body_content\">
            {% block content %}{% endblock %}
        </div>
    {% endblock %}

    {% block footer %}
    <footer id=\"footer\">
        {% include 'partials/footer.html.twig' %}
    </footer>
    {% endblock %}

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"{{ url(\"theme://files/plugins/jquery/3.3.1/jquery-3.3.1.min.js\") }}\"><\\/script>')</script>
    {% block javascripts %}
        {% do assets.addJs('theme://files/plugins/popper/1.14.3/umd/popper.min.js', {'priority':80, 'pipeline':false, 'loading':''}) %}
        {% do assets.addJs('theme://files/plugins/bootstrap/4.1.3/js/bootstrap.min.js', {'priority':77, 'pipeline':false, 'loading':''}) %}
        {% do assets.addJs('theme://files/plugins/fancybox/dist/jquery.fancybox.min.js', {'priority':74, 'pipeline':false, 'loading':css_loading}) %}
        {% do assets.addJs('theme://files/js/wow.min.js', {'priority':70, 'pipeline':false, 'loading':css_loading}) %}
        {% do assets.addJs('theme://files/plugins/cookieconsent/3.1.0/build/cookieconsent.min.js', {'priority':65, 'pipeline':false, 'loading':css_loading}) %}
        {% do assets.addJs('theme://files/js/settings.js', {'priority':50, 'pipeline':false, 'loading':css_loading}) %}
    {% endblock %}
    {{ assets.js() }}
    
    {{ assets.outputJs() }}

    {% block bottom %}
        {{ assets.js('bottom') }}
    {% endblock %}

<a href=\"#top\" id=\"go-to-top\" style=\"display: none;\" class=\"bgcolor-4 color-2 btn-circle btn-lg\"><i class=\"fas fa-arrow-up\"></i></a>

<script>
window.addEventListener(\"load\", function(){
window.cookieconsent.initialise({
  \"palette\": {
    \"popup\": {
      \"background\": \"#000\"
    },
    \"button\": {
      \"background\": \"#f1d600\"
    }
  },
  \"position\": \"bottom-left\",
  \"content\": {
    \"message\": \"Diese Website nutzt Cookies. Indem Sie fortfahren, stimmen Sie der Nutzung zu.\",
    \"dismiss\": \"Verstanden\",
    \"link\": \"Weitere Informationen\",
    \"href\": \"{{ url(\"datenschutz\") }}\"
  }
})});
</script>

<script>
    var base_url_relative =  \"{{ base_url_relative }}\";
</script>

</body>
</html>
{# {% endspaceless %} #}", "partials/base.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/templates/partials/base.html.twig");
    }
}
