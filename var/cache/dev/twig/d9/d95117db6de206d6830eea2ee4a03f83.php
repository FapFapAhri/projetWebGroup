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

/* editarticle.html.twig */
class __TwigTemplate_9f9430deeb1d972650eab34ad7bf609d extends Template
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
            'header' => [$this, 'block_header'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editarticle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editarticle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editarticle.html.twig", 1);
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

        echo "Modification d'une annonce";
        
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

        echo "Modification d'une annonce";
        
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

        echo " ";
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "


";
        // line 13
        echo "
<!-- slogan -->
<div class=\"jumbotron\">

    <h2>Veuillez modifier l'annonce</h2>
    <p class=\"soustext\">Modifiez ce qui vous plait </p>


</div>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form');
        echo "
";
        // line 24
        echo " ";
        // line 25
        echo " ";
        // line 26
        echo "  ";
        // line 60
        echo "

";
        // line 64
        echo "    ";
        // line 65
        echo "    ";
        // line 66
        echo "    
        ";
        // line 75
        echo "    
    ";
        // line 77
        echo "    
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "editarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 77,  162 => 75,  159 => 66,  157 => 65,  155 => 64,  151 => 60,  149 => 26,  147 => 25,  145 => 24,  141 => 22,  130 => 13,  125 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block h1 %}Modification d'une annonce{% endblock %} {% block title %}Modification d'une annonce{% endblock %} {% block body %} {% block header%}



{# <div aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb mt-0\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('home') }}\">Accueil</a></li>
        <li class=\"breadcrumb-item \"><a href=\"{{ path('adverts') }}\">Annonces</a></li>
        <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"{{ path('advert', { id : advert.id}) }}\">Votre Annonce</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">Modifier votre Annonce</a></li>
    </ol>
</div> #}

<!-- slogan -->
<div class=\"jumbotron\">

    <h2>Veuillez modifier l'annonce</h2>
    <p class=\"soustext\">Modifiez ce qui vous plait </p>


</div>
{{ form(form) }}
{# {% endblock %} #}
 {# si success n'est pas défini #}
 {# {% if success is not defined %} #}
  {# formulaire #}
{# <div class=\"row\">
    <div class=\"col-10 offset-1\">
        <form action=\"{{ path('editadvert', {id: advert.id}) }}\" method=\"POST\">



            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Titre :</label>
                <input value=\"{{advert.title}}\" type=\"text\" class=\"form-control\" id=\"exampleFormControlInput1\" name=\"title\" placeholder=\"Titre de l'annonce\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlTextarea1\">Description :</label>
                <textarea name=\"content\" placeholder=\"Décrivez brièvement votre projet\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\">{{advert.content}}</textarea>
            </div>
            <div class=\"modal-body\">
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <label class=\"input-group-text\" for=\"contractType\">Type de Poste</label>
                    </div>
                    <select name=\"contractType\" class=\"custom-select\" id=\"contractType\">
                                    <option selected value=\"cdi\">CDI</option>
                                    <option value=\"cdd\">CDD</option>
                                    <option value=\"intérim\">Intérim</option>
                                    <option value=\"freelance\">Freelance</option>
                            </select>
                </div>
            </div>
            <div class=\"row d-flex justify-content-center\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block  col-6\">Valider</a>
                </div>
        </form>
    </div>
    </div> #}


{#     
    {% endif %} #}
    {# message d'erreur #}
    {# {% if errors is defined %} #}
    
        {# {% for error in errors %}
        <div class=\"alert alert-danger\" role=\"alert\">
                {{ error }}
        </div>
            
        {% endfor %}

    {% endif %} #}
    
    {# message de succes #}
    
    {# {% if success is defined %}
    
       <div class=\"alert alert-success\" role=\"alert\">
            {{ success }}
        </div>
       <a href=\"{{ path('adverts') }}\" class=\"btn btn-primary\">Retour aux annonces</a>
    {% endif %}

<script src='https://www.google.com/recaptcha/api.js'></script>




{# {% block javascript %}  #}
{% endblock %}
{% endblock %}
", "editarticle.html.twig", "C:\\Users\\MAI\\Desktop\\Workspace\\projetWebGroup\\testProject\\templates\\editarticle.html.twig");
    }
}
