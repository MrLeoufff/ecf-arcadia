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

/* schedule/index.html.twig */
class __TwigTemplate_939527b93f858d4bb50ab7771de48a9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "schedule/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <h1 class=\"text-center\">Horaires</h1>
    <div class=\"container mt-5\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_schedule_new");
        yield "\" class=\"btn btn-primary\">Créer de nouveaux horaires</a>
            </div>
        </div>
        <div class=\"row p-4 rounded-4 cadre\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 13
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center\">
                        <div class=\"card-body avis\">
                            <h5 class=\"card-title\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "day", [], "any", false, false, false, 16), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\"><strong>Heure d'ouverture:</strong> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "openingTime", [], "any", false, false, false, 17), "H:i"), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Heure de fermeture:</strong> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "closingTime", [], "any", false, false, false, 18), "H:i"), "html", null, true);
            yield "</p>
                            <a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_schedule_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\" class=\"btn btn-warning mb-2\">Modifier</a>
                            <form method=\"post\" action=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_schedule_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet horaire ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "id", [], "any", false, false, false, 21))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-danger mb-2\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            yield "                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun enregistrement trouvé
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return "schedule/index.html.twig";
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
        return array (  135 => 34,  124 => 28,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  87 => 13,  82 => 12,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"text-center\">Horaires</h1>
    <div class=\"container mt-5\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a href=\"{{ path('app_schedule_new') }}\" class=\"btn btn-primary\">Créer de nouveaux horaires</a>
            </div>
        </div>
        <div class=\"row p-4 rounded-4 cadre\">
            {% for schedule in schedules %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center\">
                        <div class=\"card-body avis\">
                            <h5 class=\"card-title\">{{ schedule.day }}</h5>
                            <p class=\"card-text\"><strong>Heure d'ouverture:</strong> {{ schedule.openingTime|date('H:i') }}</p>
                            <p class=\"card-text\"><strong>Heure de fermeture:</strong> {{ schedule.closingTime|date('H:i') }}</p>
                            <a href=\"{{ path('app_schedule_edit', {'id': schedule.id}) }}\" class=\"btn btn-warning mb-2\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('app_schedule_delete', {'id': schedule.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet horaire ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ schedule.id) }}\">
                                <button class=\"btn btn-danger mb-2\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun enregistrement trouvé
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "schedule/index.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\schedule\\index.html.twig");
    }
}