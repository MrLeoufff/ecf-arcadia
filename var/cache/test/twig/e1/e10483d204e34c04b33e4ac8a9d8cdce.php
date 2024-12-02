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

/* user/list.html.twig */
class __TwigTemplate_6dbe4c7d6bffc363447752682c7de147 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/list.html.twig", 1);
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
        yield "    <h1 class=\"text-center\">Liste des Utilisateurs</h1>
    <div class=\"container mt-5 p-4 rounded-4 cadre\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a onclick=\"window.location.replace('/admin/user/new')\" class=\"btn btn-primary\">Créer un nouvel Utilisateur</a>
            </div>
        </div>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 12
            yield "            <div class=\"card mb-3 m-4 rounded-4 avis\">
                <div class=\"row g-0\">
                    <div class=\"col-md-12 d-flex justify-content-center align-items-center\">
                        <div class=\"card-body text-center\">
                            <p>Email: ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                            <p>Rôles: ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 17), ", "), "html", null, true);
            yield "</p>
                            ";
            // line 18
            if (!CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 18))) {
                // line 19
                yield "                                <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\" style=\"display:inline-block;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 20))), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-danger m-2\">Supprimer</button>
                                </form>
                            ";
            }
            // line 24
            yield "                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "    </div>
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
        return "user/list.html.twig";
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
        return array (  120 => 29,  110 => 24,  103 => 20,  98 => 19,  96 => 18,  92 => 17,  88 => 16,  82 => 12,  78 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"text-center\">Liste des Utilisateurs</h1>
    <div class=\"container mt-5 p-4 rounded-4 cadre\">
        <div class=\"row mb-3\">
            <div class=\"col-md-12 text-center\">
                <a onclick=\"window.location.replace('/admin/user/new')\" class=\"btn btn-primary\">Créer un nouvel Utilisateur</a>
            </div>
        </div>
        {% for user in users %}
            <div class=\"card mb-3 m-4 rounded-4 avis\">
                <div class=\"row g-0\">
                    <div class=\"col-md-12 d-flex justify-content-center align-items-center\">
                        <div class=\"card-body text-center\">
                            <p>Email: {{ user.email }}</p>
                            <p>Rôles: {{ user.roles|join(', ') }}</p>
                            {% if \"ROLE_ADMIN\" not in user.roles %}
                                <form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\" style=\"display:inline-block;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                    <button class=\"btn btn-danger m-2\">Supprimer</button>
                                </form>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "user/list.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\user\\list.html.twig");
    }
}