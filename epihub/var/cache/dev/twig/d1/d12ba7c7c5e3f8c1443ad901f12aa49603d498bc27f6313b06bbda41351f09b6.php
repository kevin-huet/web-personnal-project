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

/* pages/index.html.twig */
class __TwigTemplate_6808218615993cddba13e3e215c63ba0bdeab297607e2204d4daa80db7492519 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EpiHub - Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if (((isset($context["registerValue"]) || array_key_exists("registerValue", $context)) && ((isset($context["registerValue"]) || array_key_exists("registerValue", $context) ? $context["registerValue"] : (function () { throw new RuntimeError('Variable "registerValue" does not exist.', 4, $this->source); })()) == "success"))) {
            // line 5
            echo "<div class=\"alert alert-success\">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
";
        }
        // line 9
        echo "
<div class=\"jumbotron\" style=\"margin-bottom: 0;\">
  <div class=\"container\">
  <h1 class=\"display-4\">Bienvenue sur EpiHub</h1>
  <p class=\"lead\">La plarteforme Epitech qui répertorie les informations liées au Hub</p>
  <hr class=\"my-4\">
  <p>Besoin d'aide pour la réalisation du projet ou à l'inverse besoin d'un projet sur lequel travailler ?<br />
  Vous êtes donc au bon endroit !</p>
<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
    En savoir plus
</button>
</div>
</div>

<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">EpiHub</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
          Bla bla bla
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div class=\"container\" style=\"margin-bottom: 3%\">
    <div class=\"row mt-5 justify-content-center\">
        <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"https://movilab.org/images/movilab/thumb/0/0d/Codecademy-2.jpg/300px-Codecademy-2.jpg\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
                <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"https://www.1pacte-formation.fr/wp-content/uploads/formation-en-informatique-technique_F-71506459_S.jpg\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
                <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"http://beetechnology.fr/wordpress/wp-content/uploads/2016/06/computer-coding-1-300x300.jpg\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
</div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 9,  86 => 5,  84 => 4,  75 => 3,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title 'EpiHub - Accueil' %}
{% block body %}
{% if registerValue is defined and registerValue == 'success' %}
<div class=\"alert alert-success\">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
{% endif %}

<div class=\"jumbotron\" style=\"margin-bottom: 0;\">
  <div class=\"container\">
  <h1 class=\"display-4\">Bienvenue sur EpiHub</h1>
  <p class=\"lead\">La plarteforme Epitech qui répertorie les informations liées au Hub</p>
  <hr class=\"my-4\">
  <p>Besoin d'aide pour la réalisation du projet ou à l'inverse besoin d'un projet sur lequel travailler ?<br />
  Vous êtes donc au bon endroit !</p>
<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
    En savoir plus
</button>
</div>
</div>

<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">EpiHub</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
          Bla bla bla
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div class=\"container\" style=\"margin-bottom: 3%\">
    <div class=\"row mt-5 justify-content-center\">
        <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"https://movilab.org/images/movilab/thumb/0/0d/Codecademy-2.jpg/300px-Codecademy-2.jpg\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
                <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"https://www.1pacte-formation.fr/wp-content/uploads/formation-en-informatique-technique_F-71506459_S.jpg\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
                <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"http://beetechnology.fr/wordpress/wp-content/uploads/2016/06/computer-coding-1-300x300.jpg\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
</div>
</div>
</div>

{% endblock %}", "pages/index.html.twig", "/Library/WebServer/Documents/epihub/templates/pages/index.html.twig");
    }
}
