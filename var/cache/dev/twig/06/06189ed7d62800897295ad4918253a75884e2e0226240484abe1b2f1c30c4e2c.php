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

/* page/index.html.twig */
class __TwigTemplate_59bbe84df9262ff290607a753ea9592898274cd67ef9801d311cc6ce01b7e34b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<section class='hero'>
\t\t<div class='hero-degradation'>
\t\t\t<figure class='logo logo-hero'>
\t\t\t\t<img src=\"../img/Logo.svg\" alt=\"logo\">
\t\t\t</figure>
\t\t</div>
\t</section>
\t<section class='section-slogan'>
\t\t<figure class=\"figure-section-slogan figure-section-slogan-left\">
\t\t\t<img src=\"../img/wheat.svg\" alt=\"blé\">
\t\t</figure>
\t\t<figure class=\"figure-section-slogan figure-section-slogan-right\">
\t\t\t<img src=\"../img/malt.svg\" alt=\"grain de malt\">
\t\t</figure>
\t\t<h2 class=\"slogan-section-slogan\">votre bière a porte de click, la savuer a votre collect</h2>
\t</section>
\t<section class=\"section-slider\">
\t\t<div class=\"efect-lenear\">
\t\t\t<h3>Sélection des inconturnables
\t\t\t\t<br>
\t\t\t\t<span>à deguster</span>
\t\t\t</h3>
\t\t\t
\t\t\t<div class='contrent-slider'>
\t\t\t\t<div class=\"glider-contain\">
\t\t\t\t\t<div class=\"glider\">
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slider-btns\">
\t\t\t\t<button aria-label=\"Previous\" class=\"glider-prev\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/Arrow.svg\" alt=\"fleche\">
\t\t\t\t\t</figure>
\t\t\t\t</button>
\t\t\t\t<button aria-label=\"Next\" class=\"glider-next\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/Arrow.svg\" alt=\"fleche\">
\t\t\t\t\t</figure>
\t\t\t\t</button>
\t\t\t</div>

\t\t</div>
\t</section>
\t";
        // line 267
        $this->displayBlock('js', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 268
        echo "\t\t<script src=\"../js/glider.js\"></script>
\t\t<script src=\"../js/main.js\"></script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 268,  335 => 267,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<section class='hero'>
\t\t<div class='hero-degradation'>
\t\t\t<figure class='logo logo-hero'>
\t\t\t\t<img src=\"../img/Logo.svg\" alt=\"logo\">
\t\t\t</figure>
\t\t</div>
\t</section>
\t<section class='section-slogan'>
\t\t<figure class=\"figure-section-slogan figure-section-slogan-left\">
\t\t\t<img src=\"../img/wheat.svg\" alt=\"blé\">
\t\t</figure>
\t\t<figure class=\"figure-section-slogan figure-section-slogan-right\">
\t\t\t<img src=\"../img/malt.svg\" alt=\"grain de malt\">
\t\t</figure>
\t\t<h2 class=\"slogan-section-slogan\">votre bière a porte de click, la savuer a votre collect</h2>
\t</section>
\t<section class=\"section-slider\">
\t\t<div class=\"efect-lenear\">
\t\t\t<h3>Sélection des inconturnables
\t\t\t\t<br>
\t\t\t\t<span>à deguster</span>
\t\t\t</h3>
\t\t\t
\t\t\t<div class='contrent-slider'>
\t\t\t\t<div class=\"glider-contain\">
\t\t\t\t\t<div class=\"glider\">
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-box\">
\t\t\t\t\t\t\t<div class='p-img-container'>
\t\t\t\t\t\t\t\t<div class='p-img'>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class\"p-img-front\" src=\"../img/Search.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-box-text\">
\t\t\t\t\t\t\t\t<h3>Nom</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slider-btns\">
\t\t\t\t<button aria-label=\"Previous\" class=\"glider-prev\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/Arrow.svg\" alt=\"fleche\">
\t\t\t\t\t</figure>
\t\t\t\t</button>
\t\t\t\t<button aria-label=\"Next\" class=\"glider-next\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/Arrow.svg\" alt=\"fleche\">
\t\t\t\t\t</figure>
\t\t\t\t</button>
\t\t\t</div>

\t\t</div>
\t</section>
\t{% block js %}
\t\t<script src=\"../js/glider.js\"></script>
\t\t<script src=\"../js/main.js\"></script>
\t{% endblock %}
{% endblock %}
", "page/index.html.twig", "C:\\wamp64\\www\\Projet\\Biere-Sauvteur\\templates\\page\\index.html.twig");
    }
}
