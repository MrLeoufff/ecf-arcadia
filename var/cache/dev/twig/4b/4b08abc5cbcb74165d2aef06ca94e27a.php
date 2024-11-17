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
use Twig\TemplateWrapper;

/* veterinary_report/show.html.twig */
class __TwigTemplate_7437f48be9c1fc8583302ea541baee34 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary_report/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary_report/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "veterinary_report/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Détails du Rapport Vétérinaire";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1 class=\"text-center\">Détails du Rapport Vétérinaire</h1>
    <div class=\"container mt-5 p-5 rounded-4 cadre\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card avis\">
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tr>
                                <th>Animal</th>
                                <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["veterinary_report"]) || array_key_exists("veterinary_report", $context) ? $context["veterinary_report"] : (function () { throw new RuntimeError('Variable "veterinary_report" does not exist.', 15, $this->source); })()), "animalId", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["veterinary_report"]) || array_key_exists("veterinary_report", $context) ? $context["veterinary_report"] : (function () { throw new RuntimeError('Variable "veterinary_report" does not exist.', 19, $this->source); })()), "reportDate", [], "any", false, false, false, 19), "Y-m-d H:i"), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>État de santé</th>
                                <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["veterinary_report"]) || array_key_exists("veterinary_report", $context) ? $context["veterinary_report"] : (function () { throw new RuntimeError('Variable "veterinary_report" does not exist.', 23, $this->source); })()), "healthStatus", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Notes</th>
                                <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["veterinary_report"]) || array_key_exists("veterinary_report", $context) ? $context["veterinary_report"] : (function () { throw new RuntimeError('Variable "veterinary_report" does not exist.', 27, $this->source); })()), "detail", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Utilisateur</th>
                                <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["veterinary_report"]) || array_key_exists("veterinary_report", $context) ? $context["veterinary_report"] : (function () { throw new RuntimeError('Variable "veterinary_report" does not exist.', 31, $this->source); })()), "userId", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                            </tr>
                        </table>
                        <div class=\"text-center\">
                            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary_report_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                            <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary_report_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["veterinary_report"]) || array_key_exists("veterinary_report", $context) ? $context["veterinary_report"] : (function () { throw new RuntimeError('Variable "veterinary_report" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>
                            <form method=\"post\" action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary_report_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["veterinary_report"]) || array_key_exists("veterinary_report", $context) ? $context["veterinary_report"] : (function () { throw new RuntimeError('Variable "veterinary_report" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce rapport ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["veterinary_report"]) || array_key_exists("veterinary_report", $context) ? $context["veterinary_report"] : (function () { throw new RuntimeError('Variable "veterinary_report" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "veterinary_report/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  158 => 38,  154 => 37,  150 => 36,  146 => 35,  139 => 31,  132 => 27,  125 => 23,  118 => 19,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Rapport Vétérinaire{% endblock %}

{% block body %}
    <h1 class=\"text-center\">Détails du Rapport Vétérinaire</h1>
    <div class=\"container mt-5 p-5 rounded-4 cadre\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card avis\">
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tr>
                                <th>Animal</th>
                                <td>{{ veterinary_report.animalId.name }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{ veterinary_report.reportDate|date('Y-m-d H:i') }}</td>
                            </tr>
                            <tr>
                                <th>État de santé</th>
                                <td>{{ veterinary_report.healthStatus }}</td>
                            </tr>
                            <tr>
                                <th>Notes</th>
                                <td>{{ veterinary_report.detail }}</td>
                            </tr>
                            <tr>
                                <th>Utilisateur</th>
                                <td>{{ veterinary_report.userId.email }}</td>
                            </tr>
                        </table>
                        <div class=\"text-center\">
                            <a href=\"{{ path('app_veterinary_report_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                            <a href=\"{{ path('app_veterinary_report_edit', {'id': veterinary_report.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('app_veterinary_report_delete', {'id': veterinary_report.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce rapport ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ veterinary_report.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "veterinary_report/show.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\veterinary_report\\show.html.twig");
    }
}
