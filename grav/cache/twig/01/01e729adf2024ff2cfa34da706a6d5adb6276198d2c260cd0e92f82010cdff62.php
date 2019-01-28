<?php

/* @Var:[Kontakt] {{ form.value.betreff|e }} */
class __TwigTemplate_ec0c651a58f8bd88b1b206ac5d5aba4fa90fb7982bafff422b48f079fa65a0bc extends Twig_Template
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
        echo "[Kontakt] ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "betreff", []));
    }

    public function getTemplateName()
    {
        return "@Var:[Kontakt] {{ form.value.betreff|e }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[Kontakt] {{ form.value.betreff|e }}", "@Var:[Kontakt] {{ form.value.betreff|e }}", "");
    }
}
