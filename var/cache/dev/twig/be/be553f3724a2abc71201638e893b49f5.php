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

/* animal_feeding/show.html.twig */
class __TwigTemplate_2e5b14adb729a9bb7eb646b607a811e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animal_feeding/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animal_feeding/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "animal_feeding/show.html.twig", 1);
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

        yield "Détails du Nourrissage d'Animal";
        
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
        yield "    <h1 class=\"text-center\">Détails du Nourrissage d'Animal</h1>
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tr>
                                <th>ID</th>
                                <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal_feeding"]) || array_key_exists("animal_feeding", $context) ? $context["animal_feeding"] : (function () { throw new RuntimeError('Variable "animal_feeding" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Heure</th>
                                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal_feeding"]) || array_key_exists("animal_feeding", $context) ? $context["animal_feeding"] : (function () { throw new RuntimeError('Variable "animal_feeding" does not exist.', 19, $this->source); })()), "feedingDate", [], "any", false, false, false, 19), "Y-m-d H:i"), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Nourriture</th>
                                <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal_feeding"]) || array_key_exists("animal_feeding", $context) ? $context["animal_feeding"] : (function () { throw new RuntimeError('Variable "animal_feeding" does not exist.', 23, $this->source); })()), "food", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Quantité</th>
                                <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal_feeding"]) || array_key_exists("animal_feeding", $context) ? $context["animal_feeding"] : (function () { throw new RuntimeError('Variable "animal_feeding" does not exist.', 27, $this->source); })()), "quantity", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Animal</th>
                                <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal_feeding"]) || array_key_exists("animal_feeding", $context) ? $context["animal_feeding"] : (function () { throw new RuntimeError('Variable "animal_feeding" does not exist.', 31, $this->source); })()), "animalId", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Utilisateur</th>
                                <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal_feeding"]) || array_key_exists("animal_feeding", $context) ? $context["animal_feeding"] : (function () { throw new RuntimeError('Variable "animal_feeding" does not exist.', 35, $this->source); })()), "userId", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                            </tr>
                        </table>
                        <div class=\"text-center\">
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_feeding_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                            <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_feeding_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal_feeding"]) || array_key_exists("animal_feeding", $context) ? $context["animal_feeding"] : (function () { throw new RuntimeError('Variable "animal_feeding" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>
                            <form method=\"post\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_feeding_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal_feeding"]) || array_key_exists("animal_feeding", $context) ? $context["animal_feeding"] : (function () { throw new RuntimeError('Variable "animal_feeding" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal_feeding"]) || array_key_exists("animal_feeding", $context) ? $context["animal_feeding"] : (function () { throw new RuntimeError('Variable "animal_feeding" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42))), "html", null, true);
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "animal_feeding/show.html.twig";
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
        return array (  155 => 42,  151 => 41,  147 => 40,  143 => 39,  136 => 35,  129 => 31,  122 => 27,  115 => 23,  108 => 19,  101 => 15,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Nourrissage d'Animal{% endblock %}

{% block body %}
    <h1 class=\"text-center\">Détails du Nourrissage d'Animal</h1>
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tr>
                                <th>ID</th>
                                <td>{{ animal_feeding.id }}</td>
                            </tr>
                            <tr>
                                <th>Heure</th>
                                <td>{{ animal_feeding.feedingDate|date('Y-m-d H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Nourriture</th>
                                <td>{{ animal_feeding.food }}</td>
                            </tr>
                            <tr>
                                <th>Quantité</th>
                                <td>{{ animal_feeding.quantity }}</td>
                            </tr>
                            <tr>
                                <th>Animal</th>
                                <td>{{ animal_feeding.animalId.name }}</td>
                            </tr>
                            <tr>
                                <th>Utilisateur</th>
                                <td>{{ animal_feeding.userId.email }}</td>
                            </tr>
                        </table>
                        <div class=\"text-center\">
                            <a href=\"{{ path('app_animal_feeding_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                            <a href=\"{{ path('app_animal_feeding_edit', {'id': animal_feeding.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('app_animal_feeding_delete', {'id': animal_feeding.id}) }}\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ animal_feeding.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "animal_feeding/show.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\animal_feeding\\show.html.twig");
    }
}
