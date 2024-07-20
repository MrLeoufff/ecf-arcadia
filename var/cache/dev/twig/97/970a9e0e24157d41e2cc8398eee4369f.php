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

/* animal/_animal_list.html.twig */
class __TwigTemplate_5a696ef1f4adbc679adf5d7298585f2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animal/_animal_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animal/_animal_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 2
            yield "    <div class=\"col-md-4 mb-4\">
        <div class=\"card text-center cadre\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 5), "html", null, true);
            yield "</h5>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 7
                yield "                    <img class=\"img-fluid rounded-3 mb-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 7), "html", null, true);
                yield "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            yield "                <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "race", [], "any", false, false, false, 9), "html", null, true);
            yield "</p>
                <div>
                    ";
            // line 11
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "veterinaryReports", [], "any", false, false, false, 11))) {
                // line 12
                yield "                        <h6>Rapports Vétérinaires :</h6>
                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "veterinaryReports", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 14
                    yield "                            <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "reportDate", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
                    yield " : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "healthStatus", [], "any", false, false, false, 14), "html", null, true);
                    yield "</p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                yield "                    ";
            } else {
                // line 17
                yield "                        <p>Aucun rapport vétérinaire disponible.</p>
                    ";
            }
            // line 19
            yield "                </div>
                <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Voir détails</a>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "animal/_animal_list.html.twig";
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
        return array (  108 => 20,  105 => 19,  101 => 17,  98 => 16,  87 => 14,  83 => 13,  80 => 12,  78 => 11,  72 => 9,  61 => 7,  57 => 6,  53 => 5,  48 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for animal in animals %}
    <div class=\"col-md-4 mb-4\">
        <div class=\"card text-center cadre\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ animal.name }}</h5>
                {% for image in animal.image %}
                    <img class=\"img-fluid rounded-3 mb-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ animal.name }}\">
                {% endfor %}
                <p>{{ animal.race }}</p>
                <div>
                    {% if animal.veterinaryReports is not empty %}
                        <h6>Rapports Vétérinaires :</h6>
                        {% for report in animal.veterinaryReports %}
                            <p>{{ report.reportDate|date('d/m/Y') }} : {{ report.healthStatus }}</p>
                        {% endfor %}
                    {% else %}
                        <p>Aucun rapport vétérinaire disponible.</p>
                    {% endif %}
                </div>
                <a href=\"{{ path('app_animal_show', {'id': animal.id}) }}\" class=\"btn btn-primary\">Voir détails</a>
            </div>
        </div>
    </div>
{% endfor %}", "animal/_animal_list.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\animal\\_animal_list.html.twig");
    }
}
