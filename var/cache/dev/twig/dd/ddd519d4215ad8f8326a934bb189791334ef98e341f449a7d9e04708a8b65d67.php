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

/* home/index.html.twig */
class __TwigTemplate_7f865691fa53fe3d5ade0121b9b92f5bbbad08113429c26be1c8afcf566e927b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AuctionController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "



<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Le BonCode - Site de vente aux enchères</title>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
  <style>
    body {
      background-color: #ffffff;
    }

    h1 {
      color: orange;
    }

    .card-title a {
      color: black;
    }

    .list-group-item a {
      color: orange;
    }

    .footer-icons a {
      color: white;
      background-color: orange;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      width: 30px;
      height: 30px;
      margin-right: 5px;
    }

    .main-list {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <header class=\"bg-light text-center py-3\">
    <h1 style=\"color: orange;\">Le BonCode</h1>
    <div class=\"d-flex flex-column align-items-center\">
      <div class=\"input-group mt-3\" style=\"width: 200px;\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-outline-secondary\" type=\"button\">
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
      <div class=\"mt-3\">
        <a href=\"#\"><i class=\"far fa-user\"></i></a>
        <a href=\"#\"><i class=\"far fa-heart ml-2\"></i></a>
      </div>
    </div>
  </header>

  <nav class=\"navbar navbar-expand-lg navbar-light bg-light justify-content-center\">
    <a class=\"navbar-brand\" href=\"#\">Vente aux enchères</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
      aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Catégorie 1</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Catégorie 2</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Catégorie 3</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class=\"container mt-5\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"card\">
          <img src=\"chemin/vers/image1.jpg\" class=\"card-img-top\" alt=\"Image Catégorie 1\">
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"#\">Catégorie 1</a></h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 1</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 2</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 3</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"card\">
          <img src=\"chemin/vers/image2.jpg\" class=\"card-img-top\" alt=\"Image Catégorie 2\">
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"#\">Catégorie 2</a></h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 1</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 2</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 3</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"card\">
          <img src=\"chemin/vers/image3.jpg\" class=\"card-img-top\" alt=\"Image Catégorie 3\">
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"#\">Catégorie 3</a></h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 1</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 2</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 3</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row mt-5\">
      <div class=\"col\">
        <div class=\"main-list\">
          <h3>Multimédia</h3>
          <ul>
            <li>Informatique</li>
            <li>Consoles & Jeux vidéo</li>
            <li>Image & Son</li>
            <li>Téléphonie</li>
          </ul>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"main-list\">
          <h3>Maison</h3>
          <ul>
            <li>Ameublement</li>
            <li>Électroménager</li>
            <li>Arts de la table</li>
            <li>Décoration</li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"row mt-5\">
      <div class=\"col\">
        <div class=\"main-list\">
          <h3>Immobilier</h3>
          <ul>
            <li>Ventes immobilières</li>
            <li>Immobilier Neuf</li>
            <li>Image & Son</li>
            <li>Colocations</li>
          </ul>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"main-list\">
          <h3>Loisirs</h3>
          <ul>
            <li>DVD - Films</li>
            <li>CD - Musique</li>
            <li>Livres</li>
            <li>Vélos</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer class=\"bg-light text-center py-3\">
    <div class=\"container\">
      <div class=\"footer-icons\">
        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
        <a href=\"#\"><i class=\"fab fa-pinterest\"></i></a>
      </div>
      <p>&copy; 2023 Le BonCode. Tous droits réservés.</p>
    </div>
  </footer>

  <!-- Inclure les fichiers JavaScript de Bootstrap -->
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  66 => 6,  53 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Hello AuctionController!{% endblock %}

{% block body %}




<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Le BonCode - Site de vente aux enchères</title>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
  <style>
    body {
      background-color: #ffffff;
    }

    h1 {
      color: orange;
    }

    .card-title a {
      color: black;
    }

    .list-group-item a {
      color: orange;
    }

    .footer-icons a {
      color: white;
      background-color: orange;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      width: 30px;
      height: 30px;
      margin-right: 5px;
    }

    .main-list {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <header class=\"bg-light text-center py-3\">
    <h1 style=\"color: orange;\">Le BonCode</h1>
    <div class=\"d-flex flex-column align-items-center\">
      <div class=\"input-group mt-3\" style=\"width: 200px;\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-outline-secondary\" type=\"button\">
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
      <div class=\"mt-3\">
        <a href=\"#\"><i class=\"far fa-user\"></i></a>
        <a href=\"#\"><i class=\"far fa-heart ml-2\"></i></a>
      </div>
    </div>
  </header>

  <nav class=\"navbar navbar-expand-lg navbar-light bg-light justify-content-center\">
    <a class=\"navbar-brand\" href=\"#\">Vente aux enchères</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
      aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Catégorie 1</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Catégorie 2</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Catégorie 3</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class=\"container mt-5\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"card\">
          <img src=\"chemin/vers/image1.jpg\" class=\"card-img-top\" alt=\"Image Catégorie 1\">
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"#\">Catégorie 1</a></h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 1</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 2</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 3</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"card\">
          <img src=\"chemin/vers/image2.jpg\" class=\"card-img-top\" alt=\"Image Catégorie 2\">
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"#\">Catégorie 2</a></h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 1</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 2</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 3</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"card\">
          <img src=\"chemin/vers/image3.jpg\" class=\"card-img-top\" alt=\"Image Catégorie 3\">
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"#\">Catégorie 3</a></h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 1</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 2</a></li>
              <li class=\"list-group-item\"><a href=\"#\">Sous-catégorie 3</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row mt-5\">
      <div class=\"col\">
        <div class=\"main-list\">
          <h3>Multimédia</h3>
          <ul>
            <li>Informatique</li>
            <li>Consoles & Jeux vidéo</li>
            <li>Image & Son</li>
            <li>Téléphonie</li>
          </ul>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"main-list\">
          <h3>Maison</h3>
          <ul>
            <li>Ameublement</li>
            <li>Électroménager</li>
            <li>Arts de la table</li>
            <li>Décoration</li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"row mt-5\">
      <div class=\"col\">
        <div class=\"main-list\">
          <h3>Immobilier</h3>
          <ul>
            <li>Ventes immobilières</li>
            <li>Immobilier Neuf</li>
            <li>Image & Son</li>
            <li>Colocations</li>
          </ul>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"main-list\">
          <h3>Loisirs</h3>
          <ul>
            <li>DVD - Films</li>
            <li>CD - Musique</li>
            <li>Livres</li>
            <li>Vélos</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer class=\"bg-light text-center py-3\">
    <div class=\"container\">
      <div class=\"footer-icons\">
        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
        <a href=\"#\"><i class=\"fab fa-pinterest\"></i></a>
      </div>
      <p>&copy; 2023 Le BonCode. Tous droits réservés.</p>
    </div>
  </footer>

  <!-- Inclure les fichiers JavaScript de Bootstrap -->
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery



{% endblock %}



", "home/index.html.twig", "/Users/moussaillon/Desktop/leboncoin/templates/home/index.html.twig");
    }
}
