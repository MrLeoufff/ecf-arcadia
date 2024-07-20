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
class __TwigTemplate_80502b410ecb86709c5a1139cc2c4d1e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "animal/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title\"><strong>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "</strong></h1>
                        <h2 class=\"card-text\">Espèce: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "race", [], "any", false, false, false, 10), "html", null, true);
        yield "</h2>
                        <p>(";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "habitat", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        yield ")</p>
                        <div>
                            <h3>Images</h3>
                            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "image", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 15
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["views"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title\">Rapports Vétérinaires</h2>
                        ";
        // line 25
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["veterinaryReports"] ?? null))) {
            // line 26
            yield "                            <ul class=\"list-group\">
                                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["veterinaryReports"] ?? null));
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["animalFeedings"] ?? null))) {
            // line 47
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["animalFeedings"] ?? null));
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
        return array (  187 => 57,  183 => 55,  180 => 54,  171 => 51,  167 => 50,  163 => 49,  160 => 48,  155 => 47,  153 => 46,  145 => 40,  141 => 38,  137 => 36,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  109 => 28,  105 => 27,  102 => 26,  100 => 25,  90 => 18,  87 => 17,  76 => 15,  72 => 14,  66 => 11,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "animal/show.html.twig", "/var/www/html/templates/animal/show.html.twig");
    }
}
