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

/* habitat/show.html.twig */
class __TwigTemplate_e62ba2c76feb60813cf57349669753d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitat/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitat/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitat/show.html.twig", 1);
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
        yield "    <h1 class=\"text-center\">Afficher Habitat</h1>
    <div class=\"container mt-5\">
        <div class=\"card cadre\">
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            ";
        // line 25
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25))) {
            // line 26
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                yield "                                    <img class=\"img-fluid rounded-3 mb-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
                yield "\" width=\"100\">
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "                            ";
        } else {
            // line 30
            yield "                                Pas d'image
                            ";
        }
        // line 32
        yield "                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class=\"text-center\">
                    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                    <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Éditer</a>
                    ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "habitat/_delete_form.html.twig");
        yield "
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
        return "habitat/show.html.twig";
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
        return array (  148 => 39,  144 => 38,  140 => 37,  133 => 32,  129 => 30,  126 => 29,  115 => 27,  110 => 26,  108 => 25,  100 => 20,  93 => 16,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"text-center\">Afficher Habitat</h1>
    <div class=\"container mt-5\">
        <div class=\"card cadre\">
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ habitat.id }}</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>{{ habitat.name }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ habitat.description }}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            {% if habitat.image is not empty %}
                                {% for image in habitat.image %}
                                    <img class=\"img-fluid rounded-3 mb-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ habitat.name }}\" width=\"100\">
                                {% endfor %}
                            {% else %}
                                Pas d'image
                            {% endif %}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class=\"text-center\">
                    <a href=\"{{ path('app_habitat_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                    <a href=\"{{ path('app_habitat_edit', {'id': habitat.id}) }}\" class=\"btn btn-warning\">Éditer</a>
                    {{ include('habitat/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "habitat/show.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\habitat\\show.html.twig");
    }
}
