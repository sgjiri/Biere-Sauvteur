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

/* ./part/header.html.twig */
class __TwigTemplate_9293bb1c59fdc903f0322578c6840a50dc174acedaa008f199e596467cbaf2cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./part/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./part/header.html.twig"));

        // line 1
        echo "<header>

\t<div class=\"header-container  header-container-top\">
\t\t<div class=\"header-container-top-shadow\"></div>
\t</div>
\t<div class=\"header-container header-container-bottom\">
\t\t<div class='block-header'>
\t\t\t<nav class='navDashboard'>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        echo "\">accuel</a></li>
\t\t\t\t\t<li><a href=\"\">boutique</a></li>
\t\t\t\t\t<li><a href=\"\">a propos</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

\t\t<nav class='navBurger'></nav>
\t\t<span class='burger item-menu-mobil'>
\t\t\t<div class='container-figure-burger'>
\t\t\t\t<figure class=\"ligneBurger firstLine\">
\t\t\t\t\t<img class='first-img-burger' src=\"../img/bottle.svg\" alt=\"ligne de burger\">
\t\t\t\t</figure>
\t\t\t\t<figure class=\"ligneBurger secondLine\">
\t\t\t\t\t<img class='second-img-burger' src=\"../img/bottle.svg\" alt=\"ligne de burger\">
\t\t\t\t</figure>
\t\t\t\t<figure class=\"ligneBurger thirtLine\">
\t\t\t\t\t<img class='third-img-burger' src=\"../img/bottle.svg\" alt=\"ligne de burger\">
\t\t\t\t</figure>
\t\t\t</div>
\t\t</span>
\t\t<span class='content-user item-menu-mobil'>
\t\t\t<figure>
\t\t\t\t<img src=\"../img/utilisateur(1).png\" alt=\"logo utilisatur\">
\t\t\t</figure>
\t\t</span>
\t\t<div class='container-logo'>
\t\t\t<figure class='logo'>
\t\t\t\t<img src=\"../img/Logo.svg\" alt=\"logo\">
\t\t\t</figure>
\t\t</div>
\t\t<div class='block-header'>
\t\t\t<div class='item-header-right'>
\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class='content-user'>
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/utilisateur(1).png\" alt=\"logo utilisatur\">
\t\t\t\t\t</figure>
\t\t\t\t</a>
\t\t\t\t<span class='content-search span-nav'>
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/Search.svg\" alt=\"logo loup\">
\t\t\t\t\t</figure>
\t\t\t\t</span>
\t\t\t\t<span class='content-panier '>
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/panier.svg\" alt=\"panier\">
\t\t\t\t\t</figure>
\t\t\t\t</span>

\t\t\t</div>
\t\t</div>

\t\t<span class='content-search span-nav item-menu-mobil'>
\t\t\t<figure>
\t\t\t\t<img src=\"../img/Search.svg\" alt=\"logo loup\">
\t\t\t</figure>
\t\t</span>
\t\t<span class='content-panier item-menu-mobil'>
\t\t\t<figure>
\t\t\t\t<img src=\"../img/panier.svg\" alt=\"panier\">
\t\t\t</figure>
\t\t</span>


\t</div>


</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./part/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 43,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>

\t<div class=\"header-container  header-container-top\">
\t\t<div class=\"header-container-top-shadow\"></div>
\t</div>
\t<div class=\"header-container header-container-bottom\">
\t\t<div class='block-header'>
\t\t\t<nav class='navDashboard'>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{ path('app_page') }}\">accuel</a></li>
\t\t\t\t\t<li><a href=\"\">boutique</a></li>
\t\t\t\t\t<li><a href=\"\">a propos</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

\t\t<nav class='navBurger'></nav>
\t\t<span class='burger item-menu-mobil'>
\t\t\t<div class='container-figure-burger'>
\t\t\t\t<figure class=\"ligneBurger firstLine\">
\t\t\t\t\t<img class='first-img-burger' src=\"../img/bottle.svg\" alt=\"ligne de burger\">
\t\t\t\t</figure>
\t\t\t\t<figure class=\"ligneBurger secondLine\">
\t\t\t\t\t<img class='second-img-burger' src=\"../img/bottle.svg\" alt=\"ligne de burger\">
\t\t\t\t</figure>
\t\t\t\t<figure class=\"ligneBurger thirtLine\">
\t\t\t\t\t<img class='third-img-burger' src=\"../img/bottle.svg\" alt=\"ligne de burger\">
\t\t\t\t</figure>
\t\t\t</div>
\t\t</span>
\t\t<span class='content-user item-menu-mobil'>
\t\t\t<figure>
\t\t\t\t<img src=\"../img/utilisateur(1).png\" alt=\"logo utilisatur\">
\t\t\t</figure>
\t\t</span>
\t\t<div class='container-logo'>
\t\t\t<figure class='logo'>
\t\t\t\t<img src=\"../img/Logo.svg\" alt=\"logo\">
\t\t\t</figure>
\t\t</div>
\t\t<div class='block-header'>
\t\t\t<div class='item-header-right'>
\t\t\t\t<a href=\"{{ path('app_register') }}\" class='content-user'>
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/utilisateur(1).png\" alt=\"logo utilisatur\">
\t\t\t\t\t</figure>
\t\t\t\t</a>
\t\t\t\t<span class='content-search span-nav'>
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/Search.svg\" alt=\"logo loup\">
\t\t\t\t\t</figure>
\t\t\t\t</span>
\t\t\t\t<span class='content-panier '>
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"../img/panier.svg\" alt=\"panier\">
\t\t\t\t\t</figure>
\t\t\t\t</span>

\t\t\t</div>
\t\t</div>

\t\t<span class='content-search span-nav item-menu-mobil'>
\t\t\t<figure>
\t\t\t\t<img src=\"../img/Search.svg\" alt=\"logo loup\">
\t\t\t</figure>
\t\t</span>
\t\t<span class='content-panier item-menu-mobil'>
\t\t\t<figure>
\t\t\t\t<img src=\"../img/panier.svg\" alt=\"panier\">
\t\t\t</figure>
\t\t</span>


\t</div>


</header>
", "./part/header.html.twig", "C:\\wamp64\\www\\Projet\\Biere-Sauvteur\\templates\\part\\header.html.twig");
    }
}
