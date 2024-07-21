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

/* animal/show.html.twig */
class __TwigTemplate_0e38375726eb5ab98dab9f5a53d1a70a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animal/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animal/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "animal/show.html.twig", 1);
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
        yield "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title\"><strong>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "</strong></h1>
                        <h2 class=\"card-text\">Espèce: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 10, $this->source); })()), "race", [], "any", false, false, false, 10), "html", null, true);
        yield "</h2>
                        <p>(";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 11, $this->source); })()), "habitat", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        yield ")</p>
                        <div>
                            <h3>Images</h3>
                            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 15
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            yield "\" class=\"img-fluid rounded-3 mb-2\">
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "                        </div>
                        <p class=\"card-text\"><strong>Nombre de vues:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title\">Rapports Vétérinaires</h2>
                        ";
        // line 25
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["veterinaryReports"]) || array_key_exists("veterinaryReports", $context) ? $context["veterinaryReports"] : (function () { throw new RuntimeError('Variable "veterinaryReports" does not exist.', 25, $this->source); })()))) {
            // line 26
            yield "                            <ul class=\"list-group\">
                                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["veterinaryReports"]) || array_key_exists("veterinaryReports", $context) ? $context["veterinaryReports"] : (function () { throw new RuntimeError('Variable "veterinaryReports" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 28
                yield "                                    <li class=\"list-group-item\">
                                        <p><strong>Date:</strong> ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "reportDate", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
                yield "</p>
                                        <p><strong>État de santé:</strong> ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "healthStatus", [], "any", false, false, false, 30), "html", null, true);
                yield "</p>
                                        <p><strong>Nourriture:</strong> ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "food", [], "any", false, false, false, 31), "html", null, true);
                yield "</p>
                                        <p><strong>Poids de la nourriture:</strong> ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "foodWeight", [], "any", false, false, false, 32), "html", null, true);
                yield " kg</p>
                                        <p><strong>Détails:</strong> ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "detail", [], "any", false, false, false, 33), "html", null, true);
                yield "</p>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "                            </ul>
                        ";
        } else {
            // line 38
            yield "                            <p>Aucun rapport vétérinaire disponible pour cet animal.</p>
                        ";
        }
        // line 40
        yield "                    </div>
                </div>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title\">Alimentation</h2>
                        ";
        // line 46
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["animalFeedings"]) || array_key_exists("animalFeedings", $context) ? $context["animalFeedings"] : (function () { throw new RuntimeError('Variable "animalFeedings" does not exist.', 46, $this->source); })()))) {
            // line 47
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animalFeedings"]) || array_key_exists("animalFeedings", $context) ? $context["animalFeedings"] : (function () { throw new RuntimeError('Variable "animalFeedings" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["feeding"]) {
                // line 48
                yield "                                <div class=\"mb-3\">
                                    <p><strong>Nom de l'aliment :</strong> ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feeding"], "food", [], "any", false, false, false, 49), "html", null, true);
                yield "</p>
                                    <p><strong>Quantité :</strong> ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feeding"], "quantity", [], "any", false, false, false, 50), "html", null, true);
                yield "</p>
                                    <p><strong>Date :</strong> ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["feeding"], "feedingDate", [], "any", false, false, false, 51), "Y-m-d H:i:s"), "html", null, true);
                yield "</p>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feeding'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                        ";
        } else {
            // line 55
            yield "                            <p>Aucune information sur l'alimentation disponible pour cet animal.</p>
                        ";
        }
        // line 57
        yield "                    </div>
                </div>
                <div class=\"text-center\">
                    <button class=\"btn btn-secondary\" onclick=\"history.back()\">Revenir en arrière</button>
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
        return "animal/show.html.twig";
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
        return array (  205 => 57,  201 => 55,  198 => 54,  189 => 51,  185 => 50,  181 => 49,  178 => 48,  173 => 47,  171 => 46,  163 => 40,  159 => 38,  155 => 36,  146 => 33,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  127 => 28,  123 => 27,  120 => 26,  118 => 25,  108 => 18,  105 => 17,  94 => 15,  90 => 14,  84 => 11,  80 => 10,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title\"><strong>{{ animal.name }}</strong></h1>
                        <h2 class=\"card-text\">Espèce: {{ animal.race }}</h2>
                        <p>({{ animal.habitat.name }})</p>
                        <div>
                            <h3>Images</h3>
                            {% for image in animal.image %}
                                <img src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ animal.name }}\" class=\"img-fluid rounded-3 mb-2\">
                            {% endfor %}
                        </div>
                        <p class=\"card-text\"><strong>Nombre de vues:</strong> {{ views }}</p>
                    </div>
                </div>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title\">Rapports Vétérinaires</h2>
                        {% if veterinaryReports is not empty %}
                            <ul class=\"list-group\">
                                {% for report in veterinaryReports %}
                                    <li class=\"list-group-item\">
                                        <p><strong>Date:</strong> {{ report.reportDate|date('d/m/Y') }}</p>
                                        <p><strong>État de santé:</strong> {{ report.healthStatus }}</p>
                                        <p><strong>Nourriture:</strong> {{ report.food }}</p>
                                        <p><strong>Poids de la nourriture:</strong> {{ report.foodWeight }} kg</p>
                                        <p><strong>Détails:</strong> {{ report.detail }}</p>
                                    </li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            <p>Aucun rapport vétérinaire disponible pour cet animal.</p>
                        {% endif %}
                    </div>
                </div>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title\">Alimentation</h2>
                        {% if animalFeedings is not empty %}
                            {% for feeding in animalFeedings %}
                                <div class=\"mb-3\">
                                    <p><strong>Nom de l'aliment :</strong> {{ feeding.food }}</p>
                                    <p><strong>Quantité :</strong> {{ feeding.quantity }}</p>
                                    <p><strong>Date :</strong> {{ feeding.feedingDate|date('Y-m-d H:i:s') }}</p>
                                </div>
                            {% endfor %}
                        {% else %}
                            <p>Aucune information sur l'alimentation disponible pour cet animal.</p>
                        {% endif %}
                    </div>
                </div>
                <div class=\"text-center\">
                    <button class=\"btn btn-secondary\" onclick=\"history.back()\">Revenir en arrière</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "animal/show.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\animal\\show.html.twig");
    }
}
