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

/* addarticle.html.twig */
class __TwigTemplate_bc404b77e4a6fa80c066d0a9fda3e1d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'h1' => [$this, 'block_h1'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addarticle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addarticle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "addarticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        echo "Déposer une Annonce";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Déposer une Annonce";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<div aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb mt-0\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
        ";
        // line 7
        echo "        ";
        // line 8
        echo "    </ol>
</div>

<!-- slogan -->
";
        // line 22
        echo "

";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form');
        echo "
";
        // line 27
        echo " ";
        // line 28
        echo " ";
        echo " ";
        // line 30
        echo "
    ";
        // line 59
        echo "


    ";
        // line 63
        echo "    ";
        echo " 
    ";
        // line 65
        echo "
    ";
        // line 69
        echo "
    ";
        // line 70
        echo " 
    ";
        // line 72
        echo "
    ";
        // line 76
        echo "
    ";
        // line 78
        echo "    ";
        // line 79
        echo "     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "addarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 79,  163 => 78,  160 => 76,  157 => 72,  154 => 70,  151 => 69,  148 => 65,  144 => 63,  139 => 59,  136 => 30,  133 => 28,  131 => 27,  127 => 25,  123 => 22,  117 => 8,  115 => 7,  111 => 5,  106 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}{% block h1 %}Déposer une Annonce{% endblock %} {% block title %}Déposer une Annonce{% endblock %} {% block body %}

<div aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb mt-0\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('home') }}\">Accueil</a></li>
        {# <li class=\"breadcrumb-item\"><a href=\"{{ path('adverts') }}\">Annonces</a></li> #}
        {# <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">Deposer une annonce</a></li> #}
    </ol>
</div>

<!-- slogan -->
{# <div class=\"jumbotron\">
    {% if success is not defined %}
    <h2>Veuillez remplir votre annonce</h2>
    <p class=\"soustext\">N'hésiter pas à être précis !</p>

    {% else %}

    <h2>L'article à bien été ajouté</h2>

    {% endif %} #}


{# </div> #}
{{ form(form) }}
{# si success n'est pas deffinit #}
 {# {% if success is not defined %}  #}
 {# formulaire #} {#
<div class=\"row formulaire-row\"> #}

    {# <div class=\"col-10 offset-1\">
        <form action=\"{{ path('addarticle') }}\" method=\"POST\">

            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Titre :</label>
                <input type=\"text\" class=\"form-control\" id=\"exampleFormControlInput1\" name=\"title\" placeholder=\"Titre de l'annonce\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlTextarea1\">Description :</label>
                <textarea name=\"content\" placeholder=\"Décrivez brièvement votre projet\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
            </div>
            <div class=\"modal-body\">
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <label class=\"input-group-text\" for=\"status1\">Type de Poste</label>
                    </div>
                    <select name=\"contractType\" class=\"custom-select\" id=\"status1\">
                                <option selected value=\"cdi\">CDI</option>
                                <option value=\"cdd\">CDD</option>
                                <option value=\"intérim\">Intérim</option>
                                <option value=\"freelance\">Freelance</option>
                        </select>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary \">Valider</button>

        </form>
    </div> #}



    {# {% endif %} #}
    {# message d'erreur #} 
    {# {% if errors is defined %} {% for error in errors %} #}

    {# <div class=\"alert alert-danger\" role=\"alert\">
        {{ error }}
    </div> #}

    {# {% endfor %} {% endif %} {# message de succes #} 
    {# {% if success is defined %} #}

    {# <div class=\"alert alert-success\" role=\"alert\">
        {{ success }}
    </div> #}

    {# <a href=\"{{ path('adverts') }}\" class=\"btn btn-primary\">Retour aux annonces</a>  #}
    {# {% endif %} #}
     {% endblock %} {% block javascript %}{% endblock %}
", "addarticle.html.twig", "C:\\Users\\MAI\\Desktop\\Workspace\\projetWebGroup\\testProject\\templates\\addarticle.html.twig");
    }
}
