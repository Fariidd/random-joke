<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* joke/show_random.html.twig */
class __TwigTemplate_ab9b5fd25dc0baec8049d08d94df2a5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joke/show_random.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joke/show_random.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title> ";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/style.css\">
        
    </head>

<body>
    <nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: #ff5733;\">
            <a class=\"navbar-brand\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_random_joke");
        yield "\">
                <img src=\"/img/carambar-logo.png\" width=\"100\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\" loading=\"lazy\">
            </a>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link text-white\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_joke_index");
        yield "\">Toutes les Blagues</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_joke_new");
        yield "\">Ajouter une Blague</a>
                    </li>
                </ul>
            </div>
    </nav>

    <section class=\"joke-container\">
        <img src=\"/img/carambar-logo.png\" alt=\"Carambar Logo\" class=\"carambar-image\">
        <div class=\"joke-content\" id=\"joke\">Cliquez sur le bouton pour obtenir une blague</div>
        <div class=\"joke-answer\" id=\"answer\"></div>
        <button id=\"jokeButton\">Obtenir une nouvelle blague</button>
    </section>

    <footer class=\"fixed-bottom text-light text-center \">
            <span class=\"copyright\">© ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Carambar&Co. Tous droits réservés.</span>
    </footer>

    
    
    <script>
        ";
        // line 44
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 69
        yield "    </script>
</body>
    


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Carambar & Co";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        yield "            // Vise le bouton d'ID 'jokeButton' et ajoute un écouteur d'événement géré de façon asynchrone pour les clics
            document.getElementById('jokeButton').addEventListener('click', async () => {
                try {
                    // Envoie une requête pour obtenir une blague aléatoire
                    const response = await fetch('";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_random_joke");
        yield "');
            
                    // Stocke la réponse du serveur et la convertit en JSON
                    const data = await response.json();
            
                    // Vérifie si la réponse est réussie
                    if (response.ok) {
                        // Si tout est ok, change le contenu des balises d'id 'joke' et 'answer' par leur contenu respectif
                        document.getElementById('joke').innerText = data.joke;
                        document.getElementById('answer').innerText = data.answer;
                    } else {
                        // Si la réponse a échoué, affiche le message d'erreur
                        document.getElementById('joke').innerText = 'Erreur : ' + data.error;
                    }
                } catch (error) {
                    // Si une erreur de connexion se produit, affiche un message d'erreur de connexion
                    document.getElementById('joke').innerText = 'Erreur de connexion';
                }
            });
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "joke/show_random.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  160 => 49,  154 => 45,  144 => 44,  124 => 5,  108 => 69,  106 => 44,  97 => 38,  80 => 24,  74 => 21,  65 => 15,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title> {% block title %}Carambar & Co{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/style.css\">
        
    </head>

<body>
    <nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: #ff5733;\">
            <a class=\"navbar-brand\" href=\"{{path('app_random_joke')}}\">
                <img src=\"/img/carambar-logo.png\" width=\"100\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\" loading=\"lazy\">
            </a>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link text-white\" href=\"{{ path('app_joke_index') }}\">Toutes les Blagues</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"{{ path('app_joke_new') }}\">Ajouter une Blague</a>
                    </li>
                </ul>
            </div>
    </nav>

    <section class=\"joke-container\">
        <img src=\"/img/carambar-logo.png\" alt=\"Carambar Logo\" class=\"carambar-image\">
        <div class=\"joke-content\" id=\"joke\">Cliquez sur le bouton pour obtenir une blague</div>
        <div class=\"joke-answer\" id=\"answer\"></div>
        <button id=\"jokeButton\">Obtenir une nouvelle blague</button>
    </section>

    <footer class=\"fixed-bottom text-light text-center \">
            <span class=\"copyright\">© {{ 'now'|date('Y') }} Carambar&Co. Tous droits réservés.</span>
    </footer>

    
    
    <script>
        {% block javascripts %}
            // Vise le bouton d'ID 'jokeButton' et ajoute un écouteur d'événement géré de façon asynchrone pour les clics
            document.getElementById('jokeButton').addEventListener('click', async () => {
                try {
                    // Envoie une requête pour obtenir une blague aléatoire
                    const response = await fetch('{{ path('api_random_joke') }}');
            
                    // Stocke la réponse du serveur et la convertit en JSON
                    const data = await response.json();
            
                    // Vérifie si la réponse est réussie
                    if (response.ok) {
                        // Si tout est ok, change le contenu des balises d'id 'joke' et 'answer' par leur contenu respectif
                        document.getElementById('joke').innerText = data.joke;
                        document.getElementById('answer').innerText = data.answer;
                    } else {
                        // Si la réponse a échoué, affiche le message d'erreur
                        document.getElementById('joke').innerText = 'Erreur : ' + data.error;
                    }
                } catch (error) {
                    // Si une erreur de connexion se produit, affiche un message d'erreur de connexion
                    document.getElementById('joke').innerText = 'Erreur de connexion';
                }
            });
        {% endblock %}
    </script>
</body>
    


", "joke/show_random.html.twig", "C:\\carambar-joke\\templates\\joke\\show_random.html.twig");
    }
}
