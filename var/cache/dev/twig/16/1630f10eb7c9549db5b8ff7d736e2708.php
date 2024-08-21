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

/* service/index.html.twig */
class __TwigTemplate_fdc663db931afad3a5d5dede6c262d31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/index.html.twig", 1);
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
        yield "    <h1 class=\"text-center\">Services</h1>
    <div class=\"container mt-5\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_new");
        yield "\" class=\"btn btn-primary\">Créer un nouveau Service</a>
            </div>
        </div>
        <div class=\"row p-4 rounded-4 cadre\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["services"]) {
            // line 13
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center rounded-4 avis\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["services"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["services"], "description", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                            <div class=\"mb-3\">
                                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["services"], "image", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 20
                yield "                                    <img class=\"img-fluid rounded-3 mb-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["services"], "name", [], "any", false, false, false, 20), "html", null, true);
                yield "\">
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "                            </div>
                            <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["services"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"btn btn-warning mb-2\">Éditer</a>
                            <form method=\"post\" action=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["services"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce service ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["services"], "id", [], "any", false, false, false, 25))), "html", null, true);
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
            // line 32
            yield "                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun enregistrement trouvé
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['services'], $context['_parent'], $context['loop']);
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
        return "service/index.html.twig";
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
        return array (  150 => 38,  139 => 32,  127 => 25,  123 => 24,  119 => 23,  116 => 22,  105 => 20,  101 => 19,  96 => 17,  92 => 16,  87 => 13,  82 => 12,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"text-center\">Services</h1>
    <div class=\"container mt-5\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a href=\"{{ path('app_service_new') }}\" class=\"btn btn-primary\">Créer un nouveau Service</a>
            </div>
        </div>
        <div class=\"row p-4 rounded-4 cadre\">
            {% for services in service %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center rounded-4 avis\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ services.name }}</h5>
                            <p class=\"card-text\">{{ services.description }}</p>
                            <div class=\"mb-3\">
                                {% for image in services.image %}
                                    <img class=\"img-fluid rounded-3 mb-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ services.name }}\">
                                {% endfor %}
                            </div>
                            <a href=\"{{ path('app_service_edit', {'id': services.id}) }}\" class=\"btn btn-warning mb-2\">Éditer</a>
                            <form method=\"post\" action=\"{{ path('app_service_delete', {'id': services.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce service ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ services.id) }}\">
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
", "service/index.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\service\\index.html.twig");
    }
}
