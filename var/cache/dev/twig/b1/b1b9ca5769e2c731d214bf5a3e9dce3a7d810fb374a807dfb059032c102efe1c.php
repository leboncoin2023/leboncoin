<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* auction/nouvelle.html.twig */
class __TwigTemplate_1877ce4711e7132fd8ce4d386ac1b10dd998f496782b4f19a5afc2a84691279d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auction/nouvelle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auction/nouvelle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new RuntimeError('Variable "auction" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new RuntimeError('Variable "auction" does not exist.', 5, $this->source); })()), "image", [], "any", false, false, false, 5), "html", null, true);
        echo "\" alt=\"Image de l'enchère\">
\t<p>Vendeur :
\t\t";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new RuntimeError('Variable "auction" does not exist.', 7, $this->source); })()), "vendeur", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
\t<p>Description :
\t\t";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new RuntimeError('Variable "auction" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "auction/nouvelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  69 => 7,  64 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<h1>{{ auction.nom }}</h1>
\t<img src=\"{{ auction.image }}\" alt=\"Image de l'enchère\">
\t<p>Vendeur :
\t\t{{ auction.vendeur }}</p>
\t<p>Description :
\t\t{{ auction.description }}</p>
{% endblock %}
", "auction/nouvelle.html.twig", "/Users/moussaillon/Desktop/leboncoin/templates/auction/nouvelle.html.twig");
    }
}
