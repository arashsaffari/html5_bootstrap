<?php

/* forms/fields/twitter/twitter.html.twig */
class __TwigTemplate_a352076634f5f933c88729c84b1c13bf477c3c145ee140f52fa63596523c1aec extends Twig_Template
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
        echo "
";
        // line 2
        if ($this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 3
            echo "    ";
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", [0 => true], "method");
        }
        // line 5
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "title", []) || $this->getAttribute(($context["field"] ?? null), "underline", []))) {
            // line 6
            echo "    <h1 ";
            if ( !$this->getAttribute(($context["field"] ?? null), "underline", [])) {
                echo "class=\"no_underline\"";
            }
            echo ">";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
            }
            echo "</h1>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", [0 => true], "method");
        // line 10
        echo "    <div class=\"tweetcontainer\"><div class=\"tweet-card\"> <div class=\"tweethead\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["media"] ?? null), "user://plugins/seo/assets/twitter.png", [], "array"), "resize", [0 => 50, 1 => 50], "method"), "url", [], "method"), "html", null, true);
        echo "\" width=\"50\" height=\"50\" class=\"twitterimg\"> <span class=\"twitterusername\">Twitter team <br><span class=\"twitternick\">@twitter</span></span> </div><blockquote class=\"twitter-tweet\"> 
    <p class=\"twittcontent\"> Here is how this page will looks once shared on twitter. </p>
    <div class=\"SummaryCardContainer\"> <div class=\"SummaryCard\">
         <img id=\"twittliveimg\" src=\"";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "twittershareimg", [])) {
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "twittershareimg", []), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "media", []), "images", [])), "url", []), "html", null, true);
        }
        echo "\" width=\"100%\">
    <div class=\"cardtext\">
         <h2 class=\"cardtitle\" id=\"titletwtarget\">
         ";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", [], "any", false, true), "twittertitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", [], "any", false, true), "twittertitle", []), (($this->getAttribute(($context["context"] ?? null), "title", []) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", [])))) : ((($this->getAttribute(($context["context"] ?? null), "title", []) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", [])))), "html", null, true);
        echo "
        </h2>
        <p style=\"padding:0px;\" id=\"twittdesc\">";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", [], "any", false, true), "twitterdescription", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", [], "any", false, true), "twitterdescription", []), \Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["context"] ?? null), "summary", [])), 140))) : (\Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["context"] ?? null), "summary", [])), 140))), "html", null, true);
        echo "</p>
        <span class=\"sitename\">";
        // line 19
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["uri"] ?? null), "host", []), ["http://" => "", "/" => " › "]), "html", null, true);
        echo "</span>
    </div></div></div></blockquote>
    <span class=\"iconcontainer\"> <i class=\"fa fa-reply twittericon\"></i> <i class=\"fa fa-heart twittericon\"></i><i class=\"fa fa-retweet twittericon\"></i></span></div></div> <div id=\"twittcount\"></div>
    
    <style> .tweet-card{min-height:180px;width:31%;min-width:500px}.SummaryCardContainer{border:1px solid #e1e8ed;border-radius:8px;width:95%}blockquote{font-size:17.5px; border-left:0px!important;}.tweet-card{padding:0 0 6px;margin: auto;background:#fff;border:1px solid #e1e8ed;border-radius:5px}.cardtext{padding:1em;font-family:arial}.cardtitle{margin:0 0 .15em;font-size:1em;font-weight:700}.sitename{color:#8899A6}.usertwitt{color:#2b7bb9}.twittcontent{font-family:arial; padding: 0 1rem!important; background-color:#fff;white-space:normal;color:#1c2022;clear:left;padding-top:17px}.twittericon{color:grey;margin-left:15px}.iconcontainer{padding-left:25px}.twitterimg{border-radius:6px;margin-top:19px;margin-left:39px;float:left}.twitterusername{font-weight:700;font-family:arial;padding-top:15px;padding-left:15px;float:left}.twitternick{font-weight:500;color:grey;padding-top:3px}</style>
    
    <script type=\"text/javascript\">\$('#twittertitle').keyup(function(){var keyed = \$(this).val();\$(\"#titletwtarget\").html(keyed); });\$('#twitterdescription').keyup(function(){var keyed = \$(this).val();\$(\"#twittdesc\").html(keyed);
         \$(\"#twittcount\").text(\"Characters left: \" + (140 - \$(this).val().length));
    
        
    });
    \$('#twittimgselect').on('click', function() {
        console.log(\"inputclick\");
        \$('.js__media-element').on('click', function() {
        
          var valueselect = \$(this).attr(\"data-file-url\") ;
          var newimg = \"";
        // line 35
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\" + valueselect ;
          \$('#twittliveimg').attr(\"src\", newimg);
          console.log(newimg);
        });
    }
    )


    </script>
    ";
        // line 44
        if ($this->getAttribute(($context["field"] ?? null), "text", [])) {
            // line 45
            echo "    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 48
            echo "        <div class=\"form-section ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", []), "html", null, true);
            echo "\">
        ";
            // line 49
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
                // line 50
                echo "            ";
                if ($this->getAttribute($context["field"], "type", [])) {
                    // line 51
                    echo "                ";
                    $context["value"] = $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                    // line 52
                    echo "                ";
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/twitter/twitter.html.twig", 52)->display($context);
                    // line 53
                    echo "            ";
                }
                // line 54
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
            // line 55
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/twitter/twitter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  154 => 54,  151 => 53,  148 => 52,  145 => 51,  142 => 50,  125 => 49,  120 => 48,  118 => 47,  115 => 46,  112 => 45,  110 => 44,  98 => 35,  79 => 19,  75 => 18,  70 => 16,  57 => 13,  50 => 10,  48 => 9,  45 => 8,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}
    {% if field.title or field.underline %}
    <h1 {% if not field.underline %}class=\"no_underline\"{% endif %}>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.title|tu }}{% else %}{{ field.title|t }}{% endif %}</h1>
    {% endif %}

    {% set context = admin.page(true) %}
    <div class=\"tweetcontainer\"><div class=\"tweet-card\"> <div class=\"tweethead\"> <img src=\"{{ media['user://plugins/seo/assets/twitter.png'].resize(50, 50).url() }}\" width=\"50\" height=\"50\" class=\"twitterimg\"> <span class=\"twitterusername\">Twitter team <br><span class=\"twitternick\">@twitter</span></span> </div><blockquote class=\"twitter-tweet\"> 
    <p class=\"twittcontent\"> Here is how this page will looks once shared on twitter. </p>
    <div class=\"SummaryCardContainer\"> <div class=\"SummaryCard\">
         <img id=\"twittliveimg\" src=\"{% if context.header.twittershareimg %}{{base_url_absolute}}{{context.header.twittershareimg }} {% else %} {{context.media.images|first.url }}{% endif %}\" width=\"100%\">
    <div class=\"cardtext\">
         <h2 class=\"cardtitle\" id=\"titletwtarget\">
         {{ context.header.twittertitle|default(context.title ~ \" | \" ~ site.title )}}
        </h2>
        <p style=\"padding:0px;\" id=\"twittdesc\">{{ context.header.twitterdescription|default(context.summary|striptags|truncate(140))}}</p>
        <span class=\"sitename\">{{uri.host|replace({\"http://\": \"\",\"/\":\" › \" }) }}</span>
    </div></div></div></blockquote>
    <span class=\"iconcontainer\"> <i class=\"fa fa-reply twittericon\"></i> <i class=\"fa fa-heart twittericon\"></i><i class=\"fa fa-retweet twittericon\"></i></span></div></div> <div id=\"twittcount\"></div>
    
    <style> .tweet-card{min-height:180px;width:31%;min-width:500px}.SummaryCardContainer{border:1px solid #e1e8ed;border-radius:8px;width:95%}blockquote{font-size:17.5px; border-left:0px!important;}.tweet-card{padding:0 0 6px;margin: auto;background:#fff;border:1px solid #e1e8ed;border-radius:5px}.cardtext{padding:1em;font-family:arial}.cardtitle{margin:0 0 .15em;font-size:1em;font-weight:700}.sitename{color:#8899A6}.usertwitt{color:#2b7bb9}.twittcontent{font-family:arial; padding: 0 1rem!important; background-color:#fff;white-space:normal;color:#1c2022;clear:left;padding-top:17px}.twittericon{color:grey;margin-left:15px}.iconcontainer{padding-left:25px}.twitterimg{border-radius:6px;margin-top:19px;margin-left:39px;float:left}.twitterusername{font-weight:700;font-family:arial;padding-top:15px;padding-left:15px;float:left}.twitternick{font-weight:500;color:grey;padding-top:3px}</style>
    
    <script type=\"text/javascript\">\$('#twittertitle').keyup(function(){var keyed = \$(this).val();\$(\"#titletwtarget\").html(keyed); });\$('#twitterdescription').keyup(function(){var keyed = \$(this).val();\$(\"#twittdesc\").html(keyed);
         \$(\"#twittcount\").text(\"Characters left: \" + (140 - \$(this).val().length));
    
        
    });
    \$('#twittimgselect').on('click', function() {
        console.log(\"inputclick\");
        \$('.js__media-element').on('click', function() {
        
          var valueselect = \$(this).attr(\"data-file-url\") ;
          var newimg = \"{{ base_url_absolute }}\" + valueselect ;
          \$('#twittliveimg').attr(\"src\", newimg);
          console.log(newimg);
        });
    }
    )


    </script>
    {% if field.text %}
    {% endif %}

    {% if field.fields %}
        <div class=\"form-section {{ field.field_classes }}\">
        {% for field in field.fields %}
            {% if field.type %}
                {% set value = data.value(field.name) %}
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}
", "forms/fields/twitter/twitter.html.twig", "/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/seo/templates/forms/fields/twitter/twitter.html.twig");
    }
}
