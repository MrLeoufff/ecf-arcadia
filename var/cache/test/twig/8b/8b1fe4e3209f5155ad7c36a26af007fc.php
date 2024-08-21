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

/* veterinary_report/index.html.twig */
class __TwigTemplate_ac048eaadcc1b4c086bb69fc8f8c47fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary_report/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary_report/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "veterinary_report/index.html.twig", 1);
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

        yield "Liste des Rapports Vétérinaires";
        
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
        yield "    <h1 class=\"text-center\">Liste des Rapports Vétérinaires</h1>
    <div class=\"container mt-5 p-4 mb-4 cadre\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a onclick=\"window.location.replace('/veto/veterinary_report/new')\" class=\"btn btn-primary\">Créer un nouveau rapport</a>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["veterinary_reports"]) || array_key_exists("veterinary_reports", $context) ? $context["veterinary_reports"] : (function () { throw new RuntimeError('Variable "veterinary_reports" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 15
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center avis\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Rapport ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["report"], "animalId", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\"><strong>Date:</strong> ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "reportDate", [], "any", false, false, false, 19), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>État de santé:</strong> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "healthStatus", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Utilisateur:</strong> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["report"], "userId", [], "any", false, false, false, 21), "email", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>
                            <a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary_report_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["report"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\" class=\"btn btn-primary mb-2\">Voir</a>
                            <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary_report_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["report"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"btn btn-warning mb-2\">Modifier</a>
                            <form method=\"post\" action=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary_report_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["report"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce rapport ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["report"], "id", [], "any", false, false, false, 25))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-danger mb-2\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            yield "                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun rapport trouvé
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        </div>
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
        return "veterinary_report/index.html.twig";
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
        return array (  161 => 38,  150 => 32,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  105 => 15,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Rapports Vétérinaires{% endblock %}

{% block body %}
    <h1 class=\"text-center\">Liste des Rapports Vétérinaires</h1>
    <div class=\"container mt-5 p-4 mb-4 cadre\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a onclick=\"window.location.replace('/veto/veterinary_report/new')\" class=\"btn btn-primary\">Créer un nouveau rapport</a>
            </div>
        </div>
        <div class=\"row\">
            {% for report in veterinary_reports %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center avis\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Rapport {{ report.animalId.name }}</h5>
                            <p class=\"card-text\"><strong>Date:</strong> {{ report.reportDate|date('Y-m-d H:i') }}</p>
                            <p class=\"card-text\"><strong>État de santé:</strong> {{ report.healthStatus }}</p>
                            <p class=\"card-text\"><strong>Utilisateur:</strong> {{ report.userId.email }}</p>
                            <a href=\"{{ path('app_veterinary_report_show', {'id': report.id}) }}\" class=\"btn btn-primary mb-2\">Voir</a>
                            <a href=\"{{ path('app_veterinary_report_edit', {'id': report.id}) }}\" class=\"btn btn-warning mb-2\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('app_veterinary_report_delete', {'id': report.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce rapport ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ report.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger mb-2\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun rapport trouvé
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "veterinary_report/index.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\veterinary_report\\index.html.twig");
    }
}
