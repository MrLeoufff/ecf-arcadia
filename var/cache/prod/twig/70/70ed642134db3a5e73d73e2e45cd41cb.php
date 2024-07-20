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

/* admin/dashboard.html.twig */
class __TwigTemplate_cc8c60865c6ad157a8921762f1245b00 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Dashboard Administrateur";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Dashboard Administrateur</h1>
        <div class=\"row cadre p-5\">
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Utilisateurs</h5>
                        <p class=\"card-text\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_users"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Animaux</h5>
                        <p class=\"card-text\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_animals"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Services</h5>
                        <p class=\"card-text\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_services"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card text-center avis\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Animaux les plus consultés</h5>
                        <ul class=\"list-group\">
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["animalViews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 40
            yield "                                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "animalName", [], "any", false, false, false, 41), "html", null, true);
            yield "
                                    <span class=\"badge bg-primary rounded-pill\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "views", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
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
        return array (  124 => 45,  115 => 42,  111 => 41,  108 => 40,  104 => 39,  92 => 30,  81 => 22,  70 => 14,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard.html.twig", "/var/www/html/templates/admin/dashboard.html.twig");
    }
}
