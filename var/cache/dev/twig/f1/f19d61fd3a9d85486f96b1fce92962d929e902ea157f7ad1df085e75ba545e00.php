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
\t<nav></nav>
\t<nav class='navBurger'></nav>
\t<span class='burger'>
\t\t<figure class=\"ligneBurger firstLine\">
\t\t\t<img src=\"../img/beer-bottle.png\" alt=\"ligne de burger\">
\t\t</figure>
\t\t<figure class=\"ligneBurger secondLine\">
\t\t\t<img src=\"../img/beer-bottle.svg\" alt=\"ligne de burger\">
\t\t</figure>
\t\t<figure class=\"ligneBurger thirtLine\">
\t\t\t<img src=\"../img/beer-bottle.svg\" alt=\"ligne de burger\">
\t\t</figure>
\t</span>
\t<span class='content-user'></span>
\t<figure class='logo'>
\t\t<img src=\"\" alt=\"logo\">
\t</figure>
\t<span class='content-search span-nav'></span>
\t<span class='content panier'>
\t\t<figure>
\t\t\t<img src=\"\" alt=\"\">
\t\t</figure>
\t</span>
</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./part/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
\t<nav></nav>
\t<nav class='navBurger'></nav>
\t<span class='burger'>
\t\t<figure class=\"ligneBurger firstLine\">
\t\t\t<img src=\"../img/beer-bottle.png\" alt=\"ligne de burger\">
\t\t</figure>
\t\t<figure class=\"ligneBurger secondLine\">
\t\t\t<img src=\"../img/beer-bottle.svg\" alt=\"ligne de burger\">
\t\t</figure>
\t\t<figure class=\"ligneBurger thirtLine\">
\t\t\t<img src=\"../img/beer-bottle.svg\" alt=\"ligne de burger\">
\t\t</figure>
\t</span>
\t<span class='content-user'></span>
\t<figure class='logo'>
\t\t<img src=\"\" alt=\"logo\">
\t</figure>
\t<span class='content-search span-nav'></span>
\t<span class='content panier'>
\t\t<figure>
\t\t\t<img src=\"\" alt=\"\">
\t\t</figure>
\t</span>
</header>
", "./part/header.html.twig", "C:\\wamp64\\www\\Symphony\\firstproject\\templates\\part\\header.html.twig");
    }
}
