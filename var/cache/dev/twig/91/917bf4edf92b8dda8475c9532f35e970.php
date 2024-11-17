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

/* review/index.html.twig */
class __TwigTemplate_f55b5902f988af3bfb3091d8c8a41f66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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

        yield "Gestion des avis";
        
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
        yield "    <h1 class=\"text-center\">Gestion des avis</h1>
    <div class=\"container mt-5 p-5 rounded-4 cadre\">
        <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 10
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center avis\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Avis #";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 13), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\"><strong>Pseudo:</strong> ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "pseudo", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Commentaire:</strong> ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Soumis le:</strong> ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "submittedAt", [], "any", false, false, false, 16), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Approuvé:</strong> ";
            // line 17
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["review"], "valid", [], "any", false, false, false, 17)) ? ("Oui") : ("Non"));
            yield "</p>
                            <div>
                                ";
            // line 19
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["review"], "valid", [], "any", false, false, false, 19)) {
                // line 20
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir approuver cet avis ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("approve" . CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 21))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-success mb-2\">Approuver</button>
                                    </form>
                                ";
            }
            // line 25
            yield "                                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet avis ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 26))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger mb-2\">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun avis trouvé
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        </div>
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
        return "review/index.html.twig";
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
        return array (  179 => 40,  168 => 34,  155 => 26,  150 => 25,  143 => 21,  138 => 20,  136 => 19,  131 => 17,  127 => 16,  123 => 15,  119 => 14,  115 => 13,  110 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des avis{% endblock %}

{% block body %}
    <h1 class=\"text-center\">Gestion des avis</h1>
    <div class=\"container mt-5 p-5 rounded-4 cadre\">
        <div class=\"row\">
            {% for review in reviews %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 text-center avis\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Avis #{{ review.id }}</h5>
                            <p class=\"card-text\"><strong>Pseudo:</strong> {{ review.pseudo }}</p>
                            <p class=\"card-text\"><strong>Commentaire:</strong> {{ review.comment }}</p>
                            <p class=\"card-text\"><strong>Soumis le:</strong> {{ review.submittedAt|date('Y-m-d H:i') }}</p>
                            <p class=\"card-text\"><strong>Approuvé:</strong> {{ review.valid ? 'Oui' : 'Non' }}</p>
                            <div>
                                {% if not review.valid %}
                                    <form method=\"post\" action=\"{{ path('app_review_approve', {'id': review.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir approuver cet avis ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('approve' ~ review.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-success mb-2\">Approuver</button>
                                    </form>
                                {% endif %}
                                <form method=\"post\" action=\"{{ path('app_review_delete', {'id': review.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet avis ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ review.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger mb-2\">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-md-12\">
                    <div class=\"alert alert-info text-center\" role=\"alert\">
                        Aucun avis trouvé
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "review/index.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\review\\index.html.twig");
    }
}
