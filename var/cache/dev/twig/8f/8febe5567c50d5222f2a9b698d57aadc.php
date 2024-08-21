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

/* habitat/index.html.twig */
class __TwigTemplate_0be7e137b86a94674be12e7d40c66445 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitat/index.html.twig", 1);
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
        yield "    <h1 class=\"text-center\">Liste des Habitats</h1>
    <div class=\"container mt-5 p-5 rounded-4 cadre\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_new");
        yield "\" class=\"btn btn-primary\">Créer un nouvel habitat</a>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 13
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center avis\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "description", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                            <div class=\"mb-3\">
                                ";
            // line 19
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "image", [], "any", false, false, false, 19))) {
                // line 20
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "image", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 21
                    yield "                                        <img class=\"img-fluid rounded-3 mb-3\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 21), "html", null, true);
                    yield "\">
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "                                ";
            } else {
                // line 24
                yield "                                    <p>Pas d'image</p>
                                ";
            }
            // line 26
            yield "                            </div>
                            <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-primary mb-2\">Afficher</a>
                            <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-warning mb-2\">Éditer</a>
                            <form method=\"post\" action=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet habitat ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 30))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-danger\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            yield "                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun enregistrement trouvé
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        return "habitat/index.html.twig";
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
        return array (  164 => 43,  153 => 37,  141 => 30,  137 => 29,  133 => 28,  129 => 27,  126 => 26,  122 => 24,  119 => 23,  108 => 21,  103 => 20,  101 => 19,  96 => 17,  92 => 16,  87 => 13,  82 => 12,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"text-center\">Liste des Habitats</h1>
    <div class=\"container mt-5 p-5 rounded-4 cadre\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a href=\"{{ path('app_habitat_new') }}\" class=\"btn btn-primary\">Créer un nouvel habitat</a>
            </div>
        </div>
        <div class=\"row\">
            {% for habitat in habitats %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center avis\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ habitat.name }}</h5>
                            <p class=\"card-text\">{{ habitat.description }}</p>
                            <div class=\"mb-3\">
                                {% if habitat.image is not empty %}
                                    {% for image in habitat.image %}
                                        <img class=\"img-fluid rounded-3 mb-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ habitat.name }}\">
                                    {% endfor %}
                                {% else %}
                                    <p>Pas d'image</p>
                                {% endif %}
                            </div>
                            <a href=\"{{ path('app_habitat_show', {'id': habitat.id}) }}\" class=\"btn btn-primary mb-2\">Afficher</a>
                            <a href=\"{{ path('app_habitat_edit', {'id': habitat.id}) }}\" class=\"btn btn-warning mb-2\">Éditer</a>
                            <form method=\"post\" action=\"{{ path('app_habitat_delete', {'id': habitat.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet habitat ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ habitat.id) }}\">
                                <button class=\"btn btn-danger\">Supprimer</button>
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
", "habitat/index.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\habitat\\index.html.twig");
    }
}
