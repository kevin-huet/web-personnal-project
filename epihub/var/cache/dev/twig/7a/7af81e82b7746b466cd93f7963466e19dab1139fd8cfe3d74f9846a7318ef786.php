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

/* base.html.twig */
class __TwigTemplate_5a2a2597af83ddfb9ea5548b22b7f9ffaed16735290b0aac121fd4b4f5a38814 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">

        <a class=\"navbar-brand\" href=\"/\">";
        // line 14
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 14, $this->source); })()), "html", null, true);
        }
        echo "</a>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
          <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item ";
        // line 17
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 17, $this->source); })()) == "home"))) {
            echo "active";
        }
        echo "\">
              <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\">Articles</a>
            </li>
            ";
        // line 23
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "            <li class=\"nav-item ";
            if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 24, $this->source); })()) == "register"))) {
                echo "active";
            }
            echo "\">
              <a class=\"nav-link\" href=\"/register\">Inscription</a>
            </li>
            <li class=\"nav-item ";
            // line 27
            if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 27, $this->source); })()) == "connexion"))) {
                echo "active";
            }
            echo "\">
              <a class=\"nav-link\" href=\"/login\">Connexion</a>
            </li>
            ";
        }
        // line 31
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 32
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\">            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", []), "username", []), "html", null, true);
            echo " </a>
              </li>
              ";
            // line 35
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 36
                echo "              <li>
                <a class=\"nav-link\" href=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\"> Admin</a>
              </li>
              ";
            }
            // line 40
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion</a>
              </li>
            ";
        }
        // line 44
        echo "          </ul>






          <form class=\"form-inline my-2 my-lg-0\" action=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"post\">
            <input class=\"form-control mr-sm-2\" id=\"searchbar\" name=\"query\" type=\"search\" placeholder=\"Rechercher\" aria-label=\"Search\">
            <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Rechercher</button>
          </form>







        </div>
        </div>
      </nav>
      ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "      <footer class=\"section footer-classic context-dark bg-image\" style=\"background: #343a40!important;\">
        <div class=\"container\">
          <div class=\"row row-30\">
            <div class=\"col-md-4 col-xl-5\">
              <div class=\"pr-xl-4\">
                <br/><br/>
                <p>Réalisé par HUET Kévin, AUGER Clément, JUREDIEU Edgar<br/>Tous étudiants d'une même école, Epitech</p>
                <!-- Rights-->
                <p class=\"rights\"><span>©  </span><span class=\"copyright-year\">2019</span><span> </span><span>Tous droits réservés</span></p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <br/>
              <h5>Contacts</h5>
              <dl class=\"contact-list\">
                <dt>Addresse :</dt>
                <dd> blablable</dd>
              </dl>
              <dl class=\"contact-list\">
                <dt>Email:</dt>
                <dd><a href=\"mailto:#\">kevin.huet@epitech.eu</a></dd>
              </dl>
            </div>
            <div class=\"col-md-4 col-xl-3\">
              <br/>
              <h5>Links</h5>
              <ul class=\"nav-list\">
                <li><a href=\"#\">à propos</a></li>
                <li><a href=\"#\">Projet</a></li>
                <li><a href=\"#\">Github</a></li>
                <li><a href=\"#\">Contacts</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"row no-gutters social-container\">
          <div class=\"col\"><a class=\"social-inner\" href=\"#\"><span class=\"icon mdi mdi-facebook\"></span><span>Facebook</span></a></div>
          <div class=\"col\"><a class=\"social-inner\" href=\"#\"><span class=\"icon mdi mdi-instagram\"></span><span>instagram</span></a></div>
          <div class=\"col\"><a class=\"social-inner\" href=\"#\"><span class=\"icon mdi mdi-twitter\"></span><span>twitter</span></a></div>
          <div class=\"col\"><a class=\"social-inner\" href=\"#\"><span class=\"icon mdi mdi-youtube-play\"></span><span>google</span></a></div>
        </div>
      </footer>
      <script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
      <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/pugxautocompleter/js/autocompleter-jqueryui.js"), "html", null, true);
        echo "\"></script>      <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 66,  274 => 65,  257 => 8,  239 => 7,  223 => 110,  178 => 67,  175 => 66,  173 => 65,  156 => 51,  147 => 44,  141 => 41,  138 => 40,  132 => 37,  129 => 36,  127 => 35,  120 => 33,  117 => 32,  114 => 31,  105 => 27,  96 => 24,  94 => 23,  89 => 21,  83 => 18,  77 => 17,  69 => 14,  62 => 9,  60 => 8,  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/footer.css') }}\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">

        <a class=\"navbar-brand\" href=\"/\">{% if name is defined %}{{ name }}{% endif %}</a>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
          <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item {% if current_menu is defined and current_menu == 'home' %}active{% endif %}\">
              <a class=\"nav-link\" href=\"{{ path('home') }}\">Accueil</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('article') }}\">Articles</a>
            </li>
            {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
            <li class=\"nav-item {% if current_menu is defined and current_menu == 'register' %}active{% endif %}\">
              <a class=\"nav-link\" href=\"/register\">Inscription</a>
            </li>
            <li class=\"nav-item {% if current_menu is defined and current_menu == 'connexion' %}active{% endif %}\">
              <a class=\"nav-link\" href=\"/login\">Connexion</a>
            </li>
            {% endif %}
            {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('profile') }}\">            {{ app.user.username }} </a>
              </li>
              {% if is_granted('ROLE_ADMIN') %}
              <li>
                <a class=\"nav-link\" href=\"{{ path('admin') }}\"> Admin</a>
              </li>
              {% endif %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('logout') }}\">Deconnexion</a>
              </li>
            {% endif %}
          </ul>






          <form class=\"form-inline my-2 my-lg-0\" action=\"{{ path('search') }}\" method=\"post\">
            <input class=\"form-control mr-sm-2\" id=\"searchbar\" name=\"query\" type=\"search\" placeholder=\"Rechercher\" aria-label=\"Search\">
            <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Rechercher</button>
          </form>







        </div>
        </div>
      </nav>
      {% block body %}{% endblock %}
      {% block javascripts %}{% endblock %}
      <footer class=\"section footer-classic context-dark bg-image\" style=\"background: #343a40!important;\">
        <div class=\"container\">
          <div class=\"row row-30\">
            <div class=\"col-md-4 col-xl-5\">
              <div class=\"pr-xl-4\">
                <br/><br/>
                <p>Réalisé par HUET Kévin, AUGER Clément, JUREDIEU Edgar<br/>Tous étudiants d'une même école, Epitech</p>
                <!-- Rights-->
                <p class=\"rights\"><span>©  </span><span class=\"copyright-year\">2019</span><span> </span><span>Tous droits réservés</span></p>
              </div>
            </div>
            <div class=\"col-md-4\">
              <br/>
              <h5>Contacts</h5>
              <dl class=\"contact-list\">
                <dt>Addresse :</dt>
                <dd> blablable</dd>
              </dl>
              <dl class=\"contact-list\">
                <dt>Email:</dt>
                <dd><a href=\"mailto:#\">kevin.huet@epitech.eu</a></dd>
              </dl>
            </div>
            <div class=\"col-md-4 col-xl-3\">
              <br/>
              <h5>Links</h5>
              <ul class=\"nav-list\">
                <li><a href=\"#\">à propos</a></li>
                <li><a href=\"#\">Projet</a></li>
                <li><a href=\"#\">Github</a></li>
                <li><a href=\"#\">Contacts</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"row no-gutters social-container\">
          <div class=\"col\"><a class=\"social-inner\" href=\"#\"><span class=\"icon mdi mdi-facebook\"></span><span>Facebook</span></a></div>
          <div class=\"col\"><a class=\"social-inner\" href=\"#\"><span class=\"icon mdi mdi-instagram\"></span><span>instagram</span></a></div>
          <div class=\"col\"><a class=\"social-inner\" href=\"#\"><span class=\"icon mdi mdi-twitter\"></span><span>twitter</span></a></div>
          <div class=\"col\"><a class=\"social-inner\" href=\"#\"><span class=\"icon mdi mdi-youtube-play\"></span><span>google</span></a></div>
        </div>
      </footer>
      <script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
      <script src=\"{{ asset('bundles/pugxautocompleter/js/autocompleter-jqueryui.js') }}\"></script>      <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "/home/kevin-huet/projet/perso/web-personnal-project/epihub/templates/base.html.twig");
    }
}
