<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/01.typography */
class __TwigTemplate_f79739c0155ea07337aea804ea068e24a1976249e5eecbcb05363f0bb2a15704 extends Twig_Template
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
        echo "<div class=\"container my-100\">\t
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1>Typography</h1>
\t\t\t<hr class=\"mb-0\" />
\t\t\t";
        // line 6
        $context["page1"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/components/breadcrumbs"], "method");
        echo " ";
        echo $this->getAttribute(($context["page1"] ?? null), "content", []);
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-4\">
\t\t\t<h1 class=\"fontstyle-1 font-w1\">Heading 1</h1>
\t\t\t<h2 class=\"fontstyle-1 font-w3\">Heading 2</h2>
\t\t\t<h3 class=\"fontstyle-1 font-w4\">Heading 3</h3>
\t\t\t<h4 class=\"fontstyle-1 font-w5\">Heading 4</h4>
\t\t\t<h5 class=\"fontstyle-1 font-w6\">Heading 5</h5>
\t\t\t<h6 class=\"fontstyle-1 font-w7\">Heading 6</h6>
\t\t\t<p class=\"fontstyle-1 lead\">Sint anim eu culpa <a href=\"#\">consequat</a> proident minim fugiat sunt. <small>Dolore veniam adipisicing ut</small> <strong>incididunt. Id non pariatur mollit irure</strong> <br /><br /> <span class=\"text-uppercase\">aliqua proident in et. Est sunt aute labore nulla fugiat</span> <br /><br /> <em>voluptate commodo ipsum nulla elit est <abbr title=\"attribute\">reprehenderit</abbr> labore non.</em> Mollit eiusmod esse non irure culpa sunt proident.</p>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<h1 class=\"fontstyle-2\">Heading 1</h1>
\t\t\t<h2 class=\"fontstyle-2\">Heading 2</h2>
\t\t\t<h3 class=\"fontstyle-2\">Heading 3</h3>
\t\t\t<h4 class=\"fontstyle-2\">Heading 4</h4>
\t\t\t<h5 class=\"fontstyle-2\">Heading 5</h5>
\t\t\t<h6 class=\"fontstyle-2\">Heading 6</h6>
\t\t\t<p class=\"fontstyle-2 lead\">Sint anim eu culpa <a href=\"#\">consequat</a> proident minim fugiat sunt. <small>Dolore veniam adipisicing ut</small> <strong>incididunt. Id non pariatur mollit irure</strong> <br /><br /> <span class=\"text-uppercase\">aliqua proident in et. Est sunt aute labore nulla fugiat</span> <br /><br /> <em>voluptate commodo ipsum nulla elit est <abbr title=\"attribute\">reprehenderit</abbr> labore non.</em> Mollit eiusmod esse non irure culpa sunt proident.</p>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<h1 class=\"fontstyle-3\">Heading 1</h1>
\t\t\t<h2 class=\"fontstyle-3\">Heading 2</h2>
\t\t\t<h3 class=\"fontstyle-3\">Heading 3</h3>
\t\t\t<h4 class=\"fontstyle-3\">Heading 4</h4>
\t\t\t<h5 class=\"fontstyle-3\">Heading 5</h5>
\t\t\t<h6 class=\"fontstyle-3\">Heading 6</h6>
\t\t\t<p class=\"fontstyle-3 lead\">Sint anim eu culpa <a href=\"#\">consequat</a> proident minim fugiat sunt. <small>Dolore veniam adipisicing ut</small> <strong>incididunt. Id non pariatur mollit irure</strong> <br /><br /> <span class=\"text-uppercase\">aliqua proident in et. Est sunt aute labore nulla fugiat</span> <br /><br /> <em>voluptate commodo ipsum nulla elit est <abbr title=\"attribute\">reprehenderit</abbr> labore non.</em> Mollit eiusmod esse non irure culpa sunt proident.</p>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/01.typography";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container my-100\">\t
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1>Typography</h1>
\t\t\t<hr class=\"mb-0\" />
\t\t\t{% set page1 = page.find('/components/breadcrumbs') %} {{ page1.content }}
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-4\">
\t\t\t<h1 class=\"fontstyle-1 font-w1\">Heading 1</h1>
\t\t\t<h2 class=\"fontstyle-1 font-w3\">Heading 2</h2>
\t\t\t<h3 class=\"fontstyle-1 font-w4\">Heading 3</h3>
\t\t\t<h4 class=\"fontstyle-1 font-w5\">Heading 4</h4>
\t\t\t<h5 class=\"fontstyle-1 font-w6\">Heading 5</h5>
\t\t\t<h6 class=\"fontstyle-1 font-w7\">Heading 6</h6>
\t\t\t<p class=\"fontstyle-1 lead\">Sint anim eu culpa <a href=\"#\">consequat</a> proident minim fugiat sunt. <small>Dolore veniam adipisicing ut</small> <strong>incididunt. Id non pariatur mollit irure</strong> <br /><br /> <span class=\"text-uppercase\">aliqua proident in et. Est sunt aute labore nulla fugiat</span> <br /><br /> <em>voluptate commodo ipsum nulla elit est <abbr title=\"attribute\">reprehenderit</abbr> labore non.</em> Mollit eiusmod esse non irure culpa sunt proident.</p>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<h1 class=\"fontstyle-2\">Heading 1</h1>
\t\t\t<h2 class=\"fontstyle-2\">Heading 2</h2>
\t\t\t<h3 class=\"fontstyle-2\">Heading 3</h3>
\t\t\t<h4 class=\"fontstyle-2\">Heading 4</h4>
\t\t\t<h5 class=\"fontstyle-2\">Heading 5</h5>
\t\t\t<h6 class=\"fontstyle-2\">Heading 6</h6>
\t\t\t<p class=\"fontstyle-2 lead\">Sint anim eu culpa <a href=\"#\">consequat</a> proident minim fugiat sunt. <small>Dolore veniam adipisicing ut</small> <strong>incididunt. Id non pariatur mollit irure</strong> <br /><br /> <span class=\"text-uppercase\">aliqua proident in et. Est sunt aute labore nulla fugiat</span> <br /><br /> <em>voluptate commodo ipsum nulla elit est <abbr title=\"attribute\">reprehenderit</abbr> labore non.</em> Mollit eiusmod esse non irure culpa sunt proident.</p>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<h1 class=\"fontstyle-3\">Heading 1</h1>
\t\t\t<h2 class=\"fontstyle-3\">Heading 2</h2>
\t\t\t<h3 class=\"fontstyle-3\">Heading 3</h3>
\t\t\t<h4 class=\"fontstyle-3\">Heading 4</h4>
\t\t\t<h5 class=\"fontstyle-3\">Heading 5</h5>
\t\t\t<h6 class=\"fontstyle-3\">Heading 6</h6>
\t\t\t<p class=\"fontstyle-3 lead\">Sint anim eu culpa <a href=\"#\">consequat</a> proident minim fugiat sunt. <small>Dolore veniam adipisicing ut</small> <strong>incididunt. Id non pariatur mollit irure</strong> <br /><br /> <span class=\"text-uppercase\">aliqua proident in et. Est sunt aute labore nulla fugiat</span> <br /><br /> <em>voluptate commodo ipsum nulla elit est <abbr title=\"attribute\">reprehenderit</abbr> labore non.</em> Mollit eiusmod esse non irure culpa sunt proident.</p>
\t\t</div>
\t</div>
</div>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/01.typography", "");
    }
}
