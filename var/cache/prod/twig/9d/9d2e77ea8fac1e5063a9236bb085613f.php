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

/* default/habitat.html.twig */
class __TwigTemplate_d1a2ead188c1d3fa8b1717c7a0c6dc0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/habitat.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["habitats"] ?? null));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
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
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((($__internal_compile_0 = ($context["formViews"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 34)] ?? null) : null), 'form_start');
                yield "
                        ";
                // line 35
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["formViews"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 35)] ?? null) : null), "comment", [], "any", false, false, false, 35), 'row');
                yield "
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                        ";
                // line 37
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((($__internal_compile_2 = ($context["formViews"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 37)] ?? null) : null), 'form_end');
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/habitat.html.twig";
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
        return array (  151 => 46,  146 => 45,  142 => 44,  132 => 41,  125 => 37,  120 => 35,  116 => 34,  111 => 31,  109 => 30,  102 => 26,  98 => 24,  87 => 22,  83 => 21,  74 => 17,  69 => 14,  65 => 13,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/habitat.html.twig", "/var/www/html/templates/default/habitat.html.twig");
    }
}
