<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/04.buttons_icons */
class __TwigTemplate_5b2d46a956bf7d8d2675d6cd5088629aed7f2e73fd3f1087d7a92a2f64594725 extends Twig_Template
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
\t\t\t<h1>Buttons & Icons</h1>
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
\t\t<div class=\"col-lg-12 mb-60\">
\t\t\t<h3>Font Awesome</h3>
\t\t\t<button class=\"btn\"><i class=\"fab fa-500px\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-accessible-icon\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-angrycreative\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-archive\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-arrow-alt-circle-left\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-angle-double-left\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-angle-double-down\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-amilia\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-asymmetrik\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-audio-description\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-avianex\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-balance-scale\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-barcode\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-band-aid\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-basketball-ball\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-accusoft\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-address-book\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"far fa-address-book\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-address-card\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-adn\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-algolia\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-align-center\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-align-justify\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-american-sign-language-interpreting\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-ambulance\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-amilia\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-battery-three-quarters\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-beer\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-behance-square\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-bell\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-bell-slash\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-bitcoin\"></i></button>
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t<h1 id=\"buttons\">Buttons</h1>
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t<p>
\t\t\t\t<a href=\"#\" class=\"btn bgcolor-3 color-2 btn-circle\"><i class=\"fas fa-basketball-ball\"></i></a>
\t\t\t\t<a href=\"#\" class=\"btn bgcolor-3 color-2 btn-circle btn-lg\"><i class=\"fas fa-basketball-ball\"></i></a>
\t\t\t\t<a href=\"#\" class=\"btn bgcolor-3 color-2 btn-circle btn-sm\"><i class=\"fas fa-basketball-ball\"></i></a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Primary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Secondary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success\">Success</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Danger</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Warning</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-info\">Info</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Light</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-dark\">Dark</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-link\">Link</button>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary disabled\">Primary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary disabled\">Secondary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success disabled\">Success</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger disabled\">Danger</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-warning disabled\">Warning</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-info disabled\">Info</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-light disabled\">Light</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-dark disabled\">Dark</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-link disabled\">Link</button>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">Primary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary\">Secondary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-success\">Success</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-danger\">Danger</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">Warning</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-info\">Info</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-light\">Light</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\">Dark</button>
\t\t\t</p>
\t\t\t<hr />
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Left</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Middle</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Right</button>
\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">1</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">2</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">3</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">4</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">5</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">6</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">7</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Third group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">8</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">1</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">2</button>
\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tDropdown
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t<label class=\"btn btn-secondary active\">
\t\t\t\t\t<input type=\"checkbox\" checked autocomplete=\"off\"> Checkbox 1 (pre-checked)
\t\t\t\t</label>
\t\t\t\t<label class=\"btn btn-secondary\">
\t\t\t\t\t<input type=\"checkbox\" autocomplete=\"off\"> Checkbox 2
\t\t\t\t</label>
\t\t\t\t<label class=\"btn btn-secondary\">
\t\t\t\t\t<input type=\"checkbox\" autocomplete=\"off\"> Checkbox 3
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/04.buttons_icons";
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
\t\t\t<h1>Buttons & Icons</h1>
\t\t\t<hr class=\"mb-0\" />
\t\t\t{% set page1 = page.find('/components/breadcrumbs') %} {{ page1.content }}
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-12 mb-60\">
\t\t\t<h3>Font Awesome</h3>
\t\t\t<button class=\"btn\"><i class=\"fab fa-500px\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-accessible-icon\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-angrycreative\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-archive\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-arrow-alt-circle-left\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-angle-double-left\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-angle-double-down\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-amilia\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-asymmetrik\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-audio-description\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-avianex\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-balance-scale\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-barcode\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-band-aid\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-basketball-ball\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-accusoft\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-address-book\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"far fa-address-book\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-address-card\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-adn\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-algolia\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-align-center\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-align-justify\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-american-sign-language-interpreting\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-ambulance\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-amilia\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-battery-three-quarters\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-beer\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-behance-square\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-bell\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fas fa-bell-slash\"></i></button>
\t\t\t<button class=\"btn\"><i class=\"fab fa-bitcoin\"></i></button>
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t<h1 id=\"buttons\">Buttons</h1>
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t<p>
\t\t\t\t<a href=\"#\" class=\"btn bgcolor-3 color-2 btn-circle\"><i class=\"fas fa-basketball-ball\"></i></a>
\t\t\t\t<a href=\"#\" class=\"btn bgcolor-3 color-2 btn-circle btn-lg\"><i class=\"fas fa-basketball-ball\"></i></a>
\t\t\t\t<a href=\"#\" class=\"btn bgcolor-3 color-2 btn-circle btn-sm\"><i class=\"fas fa-basketball-ball\"></i></a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Primary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Secondary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success\">Success</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Danger</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Warning</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-info\">Info</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Light</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-dark\">Dark</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-link\">Link</button>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary disabled\">Primary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary disabled\">Secondary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success disabled\">Success</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger disabled\">Danger</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-warning disabled\">Warning</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-info disabled\">Info</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-light disabled\">Light</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-dark disabled\">Dark</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-link disabled\">Link</button>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">Primary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary\">Secondary</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-success\">Success</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-danger\">Danger</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">Warning</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-info\">Info</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-light\">Light</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\">Dark</button>
\t\t\t</p>
\t\t\t<hr />
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Left</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Middle</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Right</button>
\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">1</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">2</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">3</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">4</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">5</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">6</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">7</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Third group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">8</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">1</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\">2</button>
\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tDropdown
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t<label class=\"btn btn-secondary active\">
\t\t\t\t\t<input type=\"checkbox\" checked autocomplete=\"off\"> Checkbox 1 (pre-checked)
\t\t\t\t</label>
\t\t\t\t<label class=\"btn btn-secondary\">
\t\t\t\t\t<input type=\"checkbox\" autocomplete=\"off\"> Checkbox 2
\t\t\t\t</label>
\t\t\t\t<label class=\"btn btn-secondary\">
\t\t\t\t\t<input type=\"checkbox\" autocomplete=\"off\"> Checkbox 3
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/02.elements/04.buttons_icons", "");
    }
}
