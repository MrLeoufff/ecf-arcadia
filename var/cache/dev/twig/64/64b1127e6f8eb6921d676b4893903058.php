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

/* default/index.html.twig */
class __TwigTemplate_c7888f4eeb0df24bd3482339a32cdc8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        yield "\t<div class=\"row mb-4 m-4\">
\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"card mb-3 rounded-4 cadre\">
\t\t\t\t<div
\t\t\t\t\tclass=\"row g-0\">
\t\t\t\t\t";
        // line 10
        yield "\t\t\t\t\t<div class=\"col-lg-6 rounded-4\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Présentation</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Arcadia est un zoo situé en France près de la forêt de Brocéliande, en Bretagne depuis 1990. Ils possèdent tout un panel d'animaux.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 17
        yield "\t\t\t\t\t";
        // line 18
        yield "\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t\t\t<div class=\"carousel-inner rounded-4\">
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dino/IMG-20240714-WA0010.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dino/IMG_20240713_112328.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dino/IMG_20240713_113033.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"row row-cols-1 row-cols-lg-4 gap-lg-3 gap-xxl-4\">
\t\t\t\t";
        // line 38
        yield "\t\t\t\t<div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
\t\t\t\t\t<h2 class=\"text-center\">Services</h2>
\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 40, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 41
            yield "\t\t\t\t\t\t<div class=\"card-header text-center form-control mb-3 avis\">
\t\t\t\t\t\t\t<h3>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 42), "html", null, true);
            yield "</h3>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 45
                yield "\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 45), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "\t\t\t\t</div>
\t\t\t\t";
        // line 52
        yield "\t\t\t\t";
        // line 53
        yield "\t\t\t\t<div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
\t\t\t\t\t<h2 class=\"text-center\">Habitats</h2>
\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 55, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 56
            yield "\t\t\t\t\t\t<div class=\"card-header text-center form-control mb-3 avis\">
\t\t\t\t\t\t\t<h3>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 57), "html", null, true);
            yield "</h3>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "image", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 60
                yield "\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 60), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['habitat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "\t\t\t\t</div>
\t\t\t\t";
        // line 67
        yield "\t\t\t\t";
        // line 68
        yield "\t\t\t\t<div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
\t\t\t\t\t<h2 class=\"text-center\">Animaux</h2>
\t\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 70, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 71
            yield "\t\t\t\t\t\t<div class=\"card-header text-center form-control mb-3 avis\">
\t\t\t\t\t\t\t<h3>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 72), "html", null, true);
            yield "</h3>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 75
                yield "\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 75), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 84
        yield "\t\t";
        // line 85
        yield "\t\t<div class=\"col-lg-4 p-4 rounded-4 border cadre\">
\t\t\t<h2 class=\"text-center\">Avis</h2>
\t\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 87, $this->source); })())), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["singleReview"]) {
            // line 88
            yield "\t\t\t\t<div class=\"card m-2 avis mt-xxl-5\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "pseudo", [], "any", false, false, false, 90), "html", null, true);
            yield "
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 93
                yield "\t\t\t\t\t\t\t\t";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "rating", [], "any", false, false, false, 93))) {
                    // line 94
                    yield "\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 96
                    yield "\t\t\t\t\t\t\t\t\t<i class=\"far fa-star\"></i>
\t\t\t\t\t\t\t\t";
                }
                // line 98
                yield "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<p class=\"text-muted\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "submittedAt", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "comment", [], "any", false, false, false, 103), "html", null, true);
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['singleReview'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "\t\t\t<div class=\"card container text-center form-control avis mt-xxl-5\">
\t\t\t\t";
        // line 108
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_start');
        yield "
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "pseudo", [], "any", false, false, false, 110), 'label');
        yield "
\t\t\t\t\t";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "pseudo", [], "any", false, false, false, 111), 'widget');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "comment", [], "any", false, false, false, 114), 'label');
        yield "
\t\t\t\t\t";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "comment", [], "any", false, false, false, 115), 'widget');
        yield "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Note</label>
\t\t\t\t\t\t<div class=\"rating\" id=\"review-rating-container\">
\t\t\t\t\t\t\t";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "rating", [], "any", false, false, false, 119), 'widget', ["attr" => ["type" => "hidden", "id" => "review_rating"]]);
        yield "
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"1\"></i>
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"2\"></i>
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"3\"></i>
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"4\"></i>
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"5\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"accept_pseudo\" id=\"accept_pseudo\" value=\"0\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal\">
\t\t\t\t\tSoumettre
\t\t\t\t</button>
\t\t\t\t";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
        yield "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"confirmModalLabel\">Confirmer l'affichage du pseudo</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\tEn soumettant votre avis, vous acceptez que votre pseudo soit affiché publiquement. Voulez-vous continuer ?
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"confirmButton\">J'accepte</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 153
        yield "\t\t";
        // line 154
        yield "\t\t<div class=\"card container-fluid mt-3  mt-xxl-5\">
\t\t\t<table class=\"table avis\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Jours
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>Heure d'ouverture</th>
\t\t\t\t\t\t<th>Heure de fermeture</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 165, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 166
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "day", [], "any", false, false, false, 167), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t";
            // line 168
            if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "isclosed", [], "any", false, false, false, 168)) {
                // line 169
                yield "\t\t\t\t\t\t\t\t<td>Fermé</td>
\t\t\t\t\t\t\t\t<td>Fermé</td>
\t\t\t\t\t\t\t";
            } else {
                // line 172
                yield "\t\t\t\t\t\t\t\t<td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "openingTime", [], "any", false, false, false, 172), "H:i"), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "closingTime", [], "any", false, false, false, 173), "H:i"), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t";
            }
            // line 175
            yield "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['schedule'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t";
        // line 181
        yield "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 183
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

        // line 184
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t<script src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/stars_reviews.js"), "html", null, true);
        yield "?\$";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U"), "html", null, true);
        yield "\"></script>
\t<script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
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
        return "default/index.html.twig";
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
        return array (  468 => 185,  463 => 184,  450 => 183,  438 => 181,  433 => 177,  426 => 175,  421 => 173,  416 => 172,  411 => 169,  409 => 168,  405 => 167,  402 => 166,  398 => 165,  385 => 154,  383 => 153,  360 => 132,  344 => 119,  337 => 115,  333 => 114,  327 => 111,  323 => 110,  318 => 108,  315 => 107,  305 => 103,  301 => 102,  296 => 99,  290 => 98,  286 => 96,  282 => 94,  279 => 93,  275 => 92,  270 => 90,  266 => 88,  262 => 87,  258 => 85,  256 => 84,  251 => 80,  243 => 77,  232 => 75,  228 => 74,  223 => 72,  220 => 71,  216 => 70,  212 => 68,  210 => 67,  207 => 65,  199 => 62,  188 => 60,  184 => 59,  179 => 57,  176 => 56,  172 => 55,  168 => 53,  166 => 52,  163 => 50,  155 => 47,  144 => 45,  140 => 44,  135 => 42,  132 => 41,  128 => 40,  124 => 38,  112 => 28,  106 => 25,  100 => 22,  94 => 18,  92 => 17,  84 => 10,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"row mb-4 m-4\">
\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"card mb-3 rounded-4 cadre\">
\t\t\t\t<div
\t\t\t\t\tclass=\"row g-0\">
\t\t\t\t\t{# Section présentation #}
\t\t\t\t\t<div class=\"col-lg-6 rounded-4\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Présentation</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Arcadia est un zoo situé en France près de la forêt de Brocéliande, en Bretagne depuis 1990. Ils possèdent tout un panel d'animaux.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{# Fin présentation #}
\t\t\t\t\t{# Section caroussel #}
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t\t\t<div class=\"carousel-inner rounded-4\">
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('dino/IMG-20240714-WA0010.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('dino/IMG_20240713_112328.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('dino/IMG_20240713_113033.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"row row-cols-1 row-cols-lg-4 gap-lg-3 gap-xxl-4\">
\t\t\t\t{# Section services #}
\t\t\t\t<div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
\t\t\t\t\t<h2 class=\"text-center\">Services</h2>
\t\t\t\t\t{% for service in services | slice(0, 3) %}
\t\t\t\t\t\t<div class=\"card-header text-center form-control mb-3 avis\">
\t\t\t\t\t\t\t<h3>{{ service.name }}</h3>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{% for image in service.image %}
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ service.name }}\">
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t{# Fin section services #}
\t\t\t\t{# Section habitat #}
\t\t\t\t<div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
\t\t\t\t\t<h2 class=\"text-center\">Habitats</h2>
\t\t\t\t\t{% for habitat in habitats | slice(0, 3) %}
\t\t\t\t\t\t<div class=\"card-header text-center form-control mb-3 avis\">
\t\t\t\t\t\t\t<h3>{{ habitat.name }}</h3>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{% for image in habitat.image %}
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ habitat.name }}\">
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t{# Fin section habitat #}
\t\t\t\t{# Section Dino #}
\t\t\t\t<div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
\t\t\t\t\t<h2 class=\"text-center\">Animaux</h2>
\t\t\t\t\t{% for animal in animals | slice(0, 3) %}
\t\t\t\t\t\t<div class=\"card-header text-center form-control mb-3 avis\">
\t\t\t\t\t\t\t<h3>{{ animal.name }}</h3>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{% for image in animal.image %}
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ animal.name }}\">
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{# Fin section Dino #}
\t\t{# Section Avis #}
\t\t<div class=\"col-lg-4 p-4 rounded-4 border cadre\">
\t\t\t<h2 class=\"text-center\">Avis</h2>
\t\t\t{% for singleReview in reviews | reverse | slice(0, 3) %}
\t\t\t\t<div class=\"card m-2 avis mt-xxl-5\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t{{ singleReview.pseudo }}
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t\t{% if i <= singleReview.rating %}
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<i class=\"far fa-star\"></i>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<p class=\"text-muted\">{{ singleReview.submittedAt|date('d/m/Y') }}</p>
\t\t\t\t\t\t<p>{{ singleReview.comment }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t<div class=\"card container text-center form-control avis mt-xxl-5\">
\t\t\t\t{{ form_start(form) }}
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t{{ form_label(form.pseudo) }}
\t\t\t\t\t{{ form_widget(form.pseudo) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t{{ form_label(form.comment) }}
\t\t\t\t\t{{ form_widget(form.comment) }}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Note</label>
\t\t\t\t\t\t<div class=\"rating\" id=\"review-rating-container\">
\t\t\t\t\t\t\t{{ form_widget(form.rating, { 'attr': {'type': 'hidden', 'id': 'review_rating'} }) }}
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"1\"></i>
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"2\"></i>
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"3\"></i>
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"4\"></i>
\t\t\t\t\t\t\t<i class=\"far fa-star\" data-value=\"5\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"accept_pseudo\" id=\"accept_pseudo\" value=\"0\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal\">
\t\t\t\t\tSoumettre
\t\t\t\t</button>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"confirmModalLabel\">Confirmer l'affichage du pseudo</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\tEn soumettant votre avis, vous acceptez que votre pseudo soit affiché publiquement. Voulez-vous continuer ?
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"confirmButton\">J'accepte</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{# Fin section avis #}
\t\t{# Section Horaires #}
\t\t<div class=\"card container-fluid mt-3  mt-xxl-5\">
\t\t\t<table class=\"table avis\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Jours
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>Heure d'ouverture</th>
\t\t\t\t\t\t<th>Heure de fermeture</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for schedule in schedules %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ schedule.day }}</td>
\t\t\t\t\t\t\t{% if schedule.isclosed %}
\t\t\t\t\t\t\t\t<td>Fermé</td>
\t\t\t\t\t\t\t\t<td>Fermé</td>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<td>{{ schedule.openingTime|date('H:i') }}</td>
\t\t\t\t\t\t\t\t<td>{{ schedule.closingTime|date('H:i') }}</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t{# Fin section Horaires #}
\t</div>
{% endblock %}
{% block javascripts %}
\t{{ parent() }}
\t<script src=\"{{ asset('js/stars_reviews.js') }}?\${{ \"now\"|date(\"U\") }}\"></script>
\t<script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\default\\index.html.twig");
    }
}
