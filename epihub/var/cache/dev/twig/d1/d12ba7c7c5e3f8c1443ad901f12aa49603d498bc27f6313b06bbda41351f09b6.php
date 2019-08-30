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

        // line 4
        $this->parent = $this->loadTemplate("base.html.twig", "pages/index.html.twig", 4);
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

        // line 1
        ob_start();
        // line 2
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["cms"]) || array_key_exists("cms", $context) ? $context["cms"] : (function () { throw new RuntimeError('Variable "cms" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "
";
        $context["name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"jumbotron\" style=\"margin-bottom: 0;\">
  <div class=\"container\">
  <h1 class=\"display-4\">Bienvenue sur EpiHub</h1>
  <p class=\"lead\">La plateforme Epitech qui répertorie les informations liées au Hub</p>
  <hr class=\"my-4\">
  <p></p>
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
               <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home_square1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
                <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home_square2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
                <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home_square3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
</div>
</div>
</div>
    <script>
        var i = 0;
        function change() {
            var doc = document.getElementById(\"rainbow\");
            var color = [\"black\", \"blue\", \"brown\", \"green\"];
            doc.style.backgroundColor = color[i];
            i = (i + 1) % color.length;
        }
        setInterval(change, 1000);
    </script>
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
        return array (  145 => 51,  137 => 46,  129 => 41,  93 => 7,  84 => 6,  66 => 5,  56 => 4,  50 => 2,  48 => 1,  27 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% set name  %}
    {{ cms }}
{% endset %}
{% extends \"base.html.twig\" %}
{% block title 'EpiHub - Accueil' %}
{% block body %}
<div class=\"jumbotron\" style=\"margin-bottom: 0;\">
  <div class=\"container\">
  <h1 class=\"display-4\">Bienvenue sur EpiHub</h1>
  <p class=\"lead\">La plateforme Epitech qui répertorie les informations liées au Hub</p>
  <hr class=\"my-4\">
  <p></p>
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
               <img src=\"{{ asset('images/home_square1.jpg') }}\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
                <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"{{ asset('images/home_square2.jpg') }}\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
                <div class=\"card card-custom mx-2 mb-3\">
            <a href=\"#\">
               <img src=\"{{ asset('images/home_square3.jpg') }}\" alt=\"\" class=\"card-img\" style=\"max-height: 300px; max-width: 300px\">
           </a>
        </div>
</div>
</div>
</div>
    <script>
        var i = 0;
        function change() {
            var doc = document.getElementById(\"rainbow\");
            var color = [\"black\", \"blue\", \"brown\", \"green\"];
            doc.style.backgroundColor = color[i];
            i = (i + 1) % color.length;
        }
        setInterval(change, 1000);
    </script>
{% endblock %}", "pages/index.html.twig", "/home/kevin-huet/projet/perso/web-personnal-project/epihub/templates/pages/index.html.twig");
    }
}
