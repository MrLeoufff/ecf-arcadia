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

/* admin/dashboard.html.twig */
class __TwigTemplate_b6d9c63597f75e41c8ec26f5a21375ce extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dashboard Administrateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Dashboard Administrateur</h1>
        <div class=\"row cadre p-5\">
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Utilisateurs</h5>
                        <p class=\"card-text\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users"]) || array_key_exists("total_users", $context) ? $context["total_users"] : (function () { throw new RuntimeError('Variable "total_users" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Animaux</h5>
                        <p class=\"card-text\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_animals"]) || array_key_exists("total_animals", $context) ? $context["total_animals"] : (function () { throw new RuntimeError('Variable "total_animals" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Services</h5>
                        <p class=\"card-text\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_services"]) || array_key_exists("total_services", $context) ? $context["total_services"] : (function () { throw new RuntimeError('Variable "total_services" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Animaux les plus consultés</h5>
                        <ul class=\"list-group\">
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animalViews"]) || array_key_exists("animalViews", $context) ? $context["animalViews"] : (function () { throw new RuntimeError('Variable "animalViews" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 40
            yield "                                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "animalName", [], "any", false, false, false, 41), "html", null, true);
            yield "
                                    <span class=\"badge bg-primary rounded-pill\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "views", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "admin/dashboard.html.twig";
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
        return array (  154 => 45,  145 => 42,  141 => 41,  138 => 40,  134 => 39,  122 => 30,  111 => 22,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard Administrateur{% endblock %}

{% block body %}

    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Dashboard Administrateur</h1>
        <div class=\"row cadre p-5\">
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Utilisateurs</h5>
                        <p class=\"card-text\">{{ total_users }}</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Animaux</h5>
                        <p class=\"card-text\">{{ total_animals }}</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Services</h5>
                        <p class=\"card-text\">{{ total_services }}</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Animaux les plus consultés</h5>
                        <ul class=\"list-group\">
                            {% for view in animalViews %}
                                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    {{ view.animalName }}
                                    <span class=\"badge bg-primary rounded-pill\">{{ view.views }}</span>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\admin\\dashboard.html.twig");
    }
}
