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
class __TwigTemplate_dc104ebbd26fc6bbbac1f2d3e871537c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Dashboard Administrateur</h1>
        <div class=\"row cadre p-5 rounded-4\">
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Utilisateurs</h5>
                        <p class=\"card-text\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users"]) || array_key_exists("total_users", $context) ? $context["total_users"] : (function () { throw new RuntimeError('Variable "total_users" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Animaux</h5>
                        <p class=\"card-text\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_animals"]) || array_key_exists("total_animals", $context) ? $context["total_animals"] : (function () { throw new RuntimeError('Variable "total_animals" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Services</h5>
                        <p class=\"card-text\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_services"]) || array_key_exists("total_services", $context) ? $context["total_services"] : (function () { throw new RuntimeError('Variable "total_services" does not exist.', 29, $this->source); })()), "html", null, true);
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animalViews"]) || array_key_exists("animalViews", $context) ? $context["animalViews"] : (function () { throw new RuntimeError('Variable "animalViews" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 39
            yield "                                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "animalName", [], "any", false, false, false, 40), "html", null, true);
            yield "
                                    <span class=\"badge bg-primary rounded-pill\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "views", [], "any", false, false, false, 41), "html", null, true);
            yield "</span>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row mt-5 p-5 rounded-4 cadre\">
            <div class=\"col-md-12\">
                ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 52, $this->source); })()), 'form_start', ["attr" => ["id" => "filter-form", "data-turbo" => "false", "data-filter-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_filter")]]);
        yield "
                <div class=\"row\">
                    <div class=\"col-md-4 mb-3\">
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 55, $this->source); })()), "start_date", [], "any", false, false, false, 55), 'row', ["attr" => ["id" => "veterinary_report_filter_start_date"]]);
        yield "
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 58, $this->source); })()), "end_date", [], "any", false, false, false, 58), 'row', ["attr" => ["id" => "veterinary_report_filter_end_date"]]);
        yield "
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 61, $this->source); })()), "animal", [], "any", false, false, false, 61), 'row', ["attr" => ["id" => "veterinary_report_filter_animal"]]);
        yield "
                    </div>
                    <div class=\"col-md-2 d-flex align-items-end\">
                        <button type=\"button\" id=\"filter-button\" class=\"btn btn-primary\">Filtrer</button>
                    </div>
                </div>
                ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 67, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        <div class=\"row mt-5 p-5 rounded-4 cadre\">
            <div class=\"col-md-12\">
                <h2>Rapports Vétérinaires</h2>
                <ul id=\"veterinary-reports-list\" class=\"list-group\">
                    <!-- Rapport veto -->
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard.js"), "html", null, true);
        yield "\"></script>
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
        return array (  231 => 84,  226 => 83,  216 => 82,  191 => 67,  182 => 61,  176 => 58,  170 => 55,  164 => 52,  154 => 44,  145 => 41,  141 => 40,  138 => 39,  134 => 38,  122 => 29,  111 => 21,  100 => 13,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard Administrateur{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Dashboard Administrateur</h1>
        <div class=\"row cadre p-5 rounded-4\">
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

        <div class=\"row mt-5 p-5 rounded-4 cadre\">
            <div class=\"col-md-12\">
                {{ form_start(filter_form, {'attr': {'id': 'filter-form', 'data-turbo': 'false', 'data-filter-url': path('app_admin_dashboard_filter')}}) }}
                <div class=\"row\">
                    <div class=\"col-md-4 mb-3\">
                        {{ form_row(filter_form.start_date, {'attr': {'id': 'veterinary_report_filter_start_date'}}) }}
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        {{ form_row(filter_form.end_date, {'attr': {'id': 'veterinary_report_filter_end_date'}}) }}
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        {{ form_row(filter_form.animal, {'attr': {'id': 'veterinary_report_filter_animal'}}) }}
                    </div>
                    <div class=\"col-md-2 d-flex align-items-end\">
                        <button type=\"button\" id=\"filter-button\" class=\"btn btn-primary\">Filtrer</button>
                    </div>
                </div>
                {{ form_end(filter_form) }}
            </div>
        </div>

        <div class=\"row mt-5 p-5 rounded-4 cadre\">
            <div class=\"col-md-12\">
                <h2>Rapports Vétérinaires</h2>
                <ul id=\"veterinary-reports-list\" class=\"list-group\">
                    <!-- Rapport veto -->
                </ul>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/dashboard.js') }}\"></script>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\admin\\dashboard.html.twig");
    }
}
