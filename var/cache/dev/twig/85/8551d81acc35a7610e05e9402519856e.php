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

/* default/habitat.html.twig */
class __TwigTemplate_4f6a71ea510857e8f5ea644c221a5d9e extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/habitat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/habitat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/habitat.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <a class=\"text-center\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_list");
        yield "\">
        <h1>Venez visiter tout nos animaux</h1>
    </a>
    <div id=\"habitat-detail\" class=\"row\">
        <!-- Les détails de l'habitat seront affichés ici -->
    </div>
    <div id=\"animals-list\" class=\"row\">
        <!-- Les animaux seront affichés ici -->
    </div>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 14
            yield "        <div class=\"card mb-3 m-4\">
            <div class=\"row g-0 rounded-4 cadre\">
                <div class=\"col-md-4 d-flex justify-content-center align-items-center\">
                    <a href=\"#\" class=\"habitat-link\" data-habitat-id=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "\"> <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "</h3></a>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card-body\">
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "image", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 22
                yield "                            <img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 22), "html", null, true);
                yield "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "                    </div>
                    <div class=\"card-footer rounded-2 avis\">
                        <p>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "comment", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
            ";
            // line 30
            if ((array_key_exists("formViews", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["formViews"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 30), [], "array", true, true, false, 30))) {
                // line 31
                yield "                <div class=\"card mt-4\">
                    <div class=\"card-body\">
                        <h3>Ajouter un commentaire</h3>
                        ";
                // line 34
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formViews"]) || array_key_exists("formViews", $context) ? $context["formViews"] : (function () { throw new RuntimeError('Variable "formViews" does not exist.', 34, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 34), [], "array", false, false, false, 34), 'form_start');
                yield "
                        ";
                // line 35
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formViews"]) || array_key_exists("formViews", $context) ? $context["formViews"] : (function () { throw new RuntimeError('Variable "formViews" does not exist.', 35, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 35), [], "array", false, false, false, 35), "comment", [], "any", false, false, false, 35), 'row');
                yield "
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                        ";
                // line 37
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formViews"]) || array_key_exists("formViews", $context) ? $context["formViews"] : (function () { throw new RuntimeError('Variable "formViews" does not exist.', 37, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 37), [], "array", false, false, false, 37), 'form_end');
                yield "
                    </div>
                </div>
            ";
            }
            // line 41
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['habitat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/filtre_animaux.js"), "html", null, true);
        yield "?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U"), "html", null, true);
        yield "\"></script>
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
        return "default/habitat.html.twig";
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
        return array (  191 => 46,  186 => 45,  173 => 44,  157 => 41,  150 => 37,  145 => 35,  141 => 34,  136 => 31,  134 => 30,  127 => 26,  123 => 24,  112 => 22,  108 => 21,  99 => 17,  94 => 14,  90 => 13,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <a class=\"text-center\" href=\"{{ path('app_animal_list') }}\">
        <h1>Venez visiter tout nos animaux</h1>
    </a>
    <div id=\"habitat-detail\" class=\"row\">
        <!-- Les détails de l'habitat seront affichés ici -->
    </div>
    <div id=\"animals-list\" class=\"row\">
        <!-- Les animaux seront affichés ici -->
    </div>
    {% for habitat in habitats %}
        <div class=\"card mb-3 m-4\">
            <div class=\"row g-0 rounded-4 cadre\">
                <div class=\"col-md-4 d-flex justify-content-center align-items-center\">
                    <a href=\"#\" class=\"habitat-link\" data-habitat-id=\"{{ habitat.id }}\"> <h3>{{ habitat.name }}</h3></a>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card-body\">
                        {% for image in habitat.image %}
                            <img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ habitat.name }}\">
                        {% endfor %}
                    </div>
                    <div class=\"card-footer rounded-2 avis\">
                        <p>{{ habitat.comment }}</p>
                    </div>
                </div>
            </div>
            {% if formViews is defined and formViews[habitat.id] is defined %}
                <div class=\"card mt-4\">
                    <div class=\"card-body\">
                        <h3>Ajouter un commentaire</h3>
                        {{ form_start(formViews[habitat.id]) }}
                        {{ form_row(formViews[habitat.id].comment) }}
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                        {{ form_end(formViews[habitat.id]) }}
                    </div>
                </div>
            {% endif %}
        </div>
    {% endfor %}
{% endblock body %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/filtre_animaux.js') }}?v={{ \"now\"|date(\"U\") }}\"></script>
{% endblock %}





", "default/habitat.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\default\\habitat.html.twig");
    }
}
