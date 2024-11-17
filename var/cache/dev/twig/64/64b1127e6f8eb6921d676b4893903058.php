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
        yield "    <div class=\"row mb-4 m-4\">
        <div class=\"col-lg-8\">
            <div class=\"card mb-3 rounded-4 cadre\">
                <div class=\"row g-0\">
                    ";
        // line 9
        yield "                    <div class=\"col-lg-6 rounded-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Présentation</h5>
                            <p class=\"card-text\">Arcadia est un zoo situé en France près de la forêt de Brocéliande, en Bretagne depuis 1990. Ils possèdent tout un panel d'animaux.</p>
                        </div>
                    </div>
                    ";
        // line 16
        yield "                    ";
        // line 17
        yield "                    <div class=\"col-lg-6\">
                        <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                            <div class=\"carousel-inner rounded-4\">
                                <div class=\"carousel-item active\">
                                    <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dino/IMG-20240714-WA0010.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dino/IMG_20240713_112328.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dino/IMG_20240713_113033.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row row-cols-1 row-cols-lg-4 gap-lg-3 gap-xxl-4\">
                ";
        // line 36
        yield "                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Services</h2>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 38, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 39
            yield "                    <div class=\"card-header text-center form-control mb-3 avis\">
                        <h3>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "</h3>
                        <div class=\"card-body\">
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 43
                yield "                                <img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 43), "html", null, true);
                yield "\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                </div>
                ";
        // line 50
        yield "                ";
        // line 51
        yield "                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Habitats</h2>
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 53, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 54
            yield "                        <div class=\"card-header text-center form-control mb-3 avis\">
                            <h3>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 55), "html", null, true);
            yield "</h3>
                            <div class=\"card-body\">
                                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "image", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 58
                yield "                                    <img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "name", [], "any", false, false, false, 58), "html", null, true);
                yield "\">
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['habitat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                </div>
                ";
        // line 65
        yield "                ";
        // line 66
        yield "                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Animaux</h2>
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 68, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 69
            yield "                        <div class=\"card-header text-center form-control mb-3 avis\">
                            <h3>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 70), "html", null, true);
            yield "</h3>
                            <div class=\"card-body\">
                                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 73
                yield "                                    <img class=\"img-fluid rounded-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . $context["image"])), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 73), "html", null, true);
                yield "\">
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                </div>
            </div>
        </div>
        ";
        // line 82
        yield "        ";
        // line 83
        yield "        <div class=\"col-lg-4 p-4 rounded-4 border cadre\">
            <h2 class=\"text-center\">Avis</h2>
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 85, $this->source); })())), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["singleReview"]) {
            // line 86
            yield "                <div class=\"card m-2 avis mt-xxl-5\">
                    <div class=\"card-header\">
                        ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "pseudo", [], "any", false, false, false, 88), "html", null, true);
            yield "
                        <div class=\"rating\">
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 91
                yield "                                ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "rating", [], "any", false, false, false, 91))) {
                    // line 92
                    yield "                                    <i class=\"fas fa-star\"></i>
                                ";
                } else {
                    // line 94
                    yield "                                    <i class=\"far fa-star\"></i>
                                ";
                }
                // line 96
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                        </div>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"text-muted\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "submittedAt", [], "any", false, false, false, 100), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["singleReview"], "comment", [], "any", false, false, false, 101), "html", null, true);
            yield "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['singleReview'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "            <div class=\"card container text-center form-control avis mt-xxl-5\">
                ";
        // line 106
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_start');
        yield "
                <div class=\"card-header\">
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "pseudo", [], "any", false, false, false, 108), 'label');
        yield "
                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "pseudo", [], "any", false, false, false, 109), 'widget');
        yield "
                </div>
                <div class=\"card-body\">
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "comment", [], "any", false, false, false, 112), 'label');
        yield "
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "comment", [], "any", false, false, false, 113), 'widget');
        yield "
                    <div class=\"form-group\">
                        <label>Note</label>
                        <div class=\"rating\" id=\"review-rating-container\">
                            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "rating", [], "any", false, false, false, 117), 'widget', ["attr" => ["type" => "hidden", "id" => "review_rating"]]);
        yield "
                            <i class=\"far fa-star\" data-value=\"1\"></i>
                            <i class=\"far fa-star\" data-value=\"2\"></i>
                            <i class=\"far fa-star\" data-value=\"3\"></i>
                            <i class=\"far fa-star\" data-value=\"4\"></i>
                            <i class=\"far fa-star\" data-value=\"5\"></i>
                        </div>
                    </div>
                </div>
                <input type=\"hidden\" name=\"accept_pseudo\" id=\"accept_pseudo\" value=\"0\">
                <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal\">
                    Soumettre
                </button>
                ";
        // line 130
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
        <div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"confirmModalLabel\">Confirmer l'affichage du pseudo</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        En soumettant votre avis, vous acceptez que votre pseudo soit affiché publiquement. Voulez-vous continuer ?
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"button\" class=\"btn btn-primary\" id=\"confirmButton\">J'accepte</button>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 151
        yield "        ";
        // line 152
        yield "            <div class=\"card container-fluid mt-3  mt-xxl-5\">
                <table class=\"table avis\">
                    <thead>
                    <tr>
                        <th>Jours </th>
                        <th>Heure d'ouverture</th>
                        <th>Heure de fermeture</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 163
            yield "                        <tr>
                            <td>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "day", [], "any", false, false, false, 164), "html", null, true);
            yield "</td>
                            ";
            // line 165
            if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "isclosed", [], "any", false, false, false, 165)) {
                // line 166
                yield "                                <td>Fermé</td>
                                <td>Fermé</td>
                            ";
            } else {
                // line 169
                yield "                                <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "openingTime", [], "any", false, false, false, 169), "H:i"), "html", null, true);
                yield "</td>
                                <td>";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "closingTime", [], "any", false, false, false, 170), "H:i"), "html", null, true);
                yield "</td>
                            ";
            }
            // line 172
            yield "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['schedule'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        yield "                    </tbody>
                </table>
            </div>
        ";
        // line 178
        yield "        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 180
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

        // line 181
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/stars_reviews.js"), "html", null, true);
        yield "?\$";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U"), "html", null, true);
        yield "\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
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
        return array (  465 => 182,  460 => 181,  447 => 180,  435 => 178,  430 => 174,  423 => 172,  418 => 170,  413 => 169,  408 => 166,  406 => 165,  402 => 164,  399 => 163,  395 => 162,  383 => 152,  381 => 151,  358 => 130,  342 => 117,  335 => 113,  331 => 112,  325 => 109,  321 => 108,  316 => 106,  313 => 105,  303 => 101,  299 => 100,  294 => 97,  288 => 96,  284 => 94,  280 => 92,  277 => 91,  273 => 90,  268 => 88,  264 => 86,  260 => 85,  256 => 83,  254 => 82,  249 => 78,  241 => 75,  230 => 73,  226 => 72,  221 => 70,  218 => 69,  214 => 68,  210 => 66,  208 => 65,  205 => 63,  197 => 60,  186 => 58,  182 => 57,  177 => 55,  174 => 54,  170 => 53,  166 => 51,  164 => 50,  161 => 48,  153 => 45,  142 => 43,  138 => 42,  133 => 40,  130 => 39,  126 => 38,  122 => 36,  111 => 27,  105 => 24,  99 => 21,  93 => 17,  91 => 16,  83 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row mb-4 m-4\">
        <div class=\"col-lg-8\">
            <div class=\"card mb-3 rounded-4 cadre\">
                <div class=\"row g-0\">
                    {# Section présentation #}
                    <div class=\"col-lg-6 rounded-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Présentation</h5>
                            <p class=\"card-text\">Arcadia est un zoo situé en France près de la forêt de Brocéliande, en Bretagne depuis 1990. Ils possèdent tout un panel d'animaux.</p>
                        </div>
                    </div>
                    {# Fin présentation #}
                    {# Section caroussel #}
                    <div class=\"col-lg-6\">
                        <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                            <div class=\"carousel-inner rounded-4\">
                                <div class=\"carousel-item active\">
                                    <img src=\"{{ asset('dino/IMG-20240714-WA0010.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"{{ asset('dino/IMG_20240713_112328.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"{{ asset('dino/IMG_20240713_113033.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row row-cols-1 row-cols-lg-4 gap-lg-3 gap-xxl-4\">
                {# Section services #}
                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Services</h2>
                    {% for service in services | slice(0, 3) %}
                    <div class=\"card-header text-center form-control mb-3 avis\">
                        <h3>{{ service.name }}</h3>
                        <div class=\"card-body\">
                            {% for image in service.image %}
                                <img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ service.name }}\">
                            {% endfor %}
                        </div>
                    </div>
                    {% endfor %}
                </div>
                {# Fin section services #}
                {# Section habitat #}
                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Habitats</h2>
                    {% for habitat in habitats | slice(0, 3) %}
                        <div class=\"card-header text-center form-control mb-3 avis\">
                            <h3>{{ habitat.name }}</h3>
                            <div class=\"card-body\">
                                {% for image in habitat.image %}
                                    <img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ habitat.name }}\">
                                {% endfor %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
                {# Fin section habitat #}
                {# Section Dino #}
                <div class=\"col rounded-4 border cadre mb-4 m-lg-3 m-xl-4\">
                    <h2 class=\"text-center\">Animaux</h2>
                    {% for animal in animals | slice(0, 3) %}
                        <div class=\"card-header text-center form-control mb-3 avis\">
                            <h3>{{ animal.name }}</h3>
                            <div class=\"card-body\">
                                {% for image in animal.image %}
                                    <img class=\"img-fluid rounded-3\" src=\"{{ asset('uploads/images/' ~ image) }}\" alt=\"{{ animal.name }}\">
                                {% endfor %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        {# Fin section Dino #}
        {# Section Avis #}
        <div class=\"col-lg-4 p-4 rounded-4 border cadre\">
            <h2 class=\"text-center\">Avis</h2>
            {% for singleReview in reviews | reverse | slice(0, 3) %}
                <div class=\"card m-2 avis mt-xxl-5\">
                    <div class=\"card-header\">
                        {{ singleReview.pseudo }}
                        <div class=\"rating\">
                            {% for i in 1..5 %}
                                {% if i <= singleReview.rating %}
                                    <i class=\"fas fa-star\"></i>
                                {% else %}
                                    <i class=\"far fa-star\"></i>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"text-muted\">{{ singleReview.submittedAt|date('d/m/Y') }}</p>
                        <p>{{ singleReview.comment }}</p>
                    </div>
                </div>
            {% endfor %}
            <div class=\"card container text-center form-control avis mt-xxl-5\">
                {{ form_start(form) }}
                <div class=\"card-header\">
                    {{ form_label(form.pseudo) }}
                    {{ form_widget(form.pseudo) }}
                </div>
                <div class=\"card-body\">
                    {{ form_label(form.comment) }}
                    {{ form_widget(form.comment) }}
                    <div class=\"form-group\">
                        <label>Note</label>
                        <div class=\"rating\" id=\"review-rating-container\">
                            {{ form_widget(form.rating, { 'attr': {'type': 'hidden', 'id': 'review_rating'} }) }}
                            <i class=\"far fa-star\" data-value=\"1\"></i>
                            <i class=\"far fa-star\" data-value=\"2\"></i>
                            <i class=\"far fa-star\" data-value=\"3\"></i>
                            <i class=\"far fa-star\" data-value=\"4\"></i>
                            <i class=\"far fa-star\" data-value=\"5\"></i>
                        </div>
                    </div>
                </div>
                <input type=\"hidden\" name=\"accept_pseudo\" id=\"accept_pseudo\" value=\"0\">
                <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal\">
                    Soumettre
                </button>
                {{ form_end(form) }}
            </div>
        </div>
        <div class=\"modal fade\" id=\"confirmModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"confirmModalLabel\">Confirmer l'affichage du pseudo</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        En soumettant votre avis, vous acceptez que votre pseudo soit affiché publiquement. Voulez-vous continuer ?
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"button\" class=\"btn btn-primary\" id=\"confirmButton\">J'accepte</button>
                    </div>
                </div>
            </div>
        </div>
        {# Fin section avis #}
        {# Section Horaires #}
            <div class=\"card container-fluid mt-3  mt-xxl-5\">
                <table class=\"table avis\">
                    <thead>
                    <tr>
                        <th>Jours </th>
                        <th>Heure d'ouverture</th>
                        <th>Heure de fermeture</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for schedule in schedules %}
                        <tr>
                            <td>{{ schedule.day }}</td>
                            {% if schedule.isclosed %}
                                <td>Fermé</td>
                                <td>Fermé</td>
                            {% else %}
                                <td>{{ schedule.openingTime|date('H:i') }}</td>
                                <td>{{ schedule.closingTime|date('H:i') }}</td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {# Fin section Horaires #}
        </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/stars_reviews.js') }}?\${{ \"now\"|date(\"U\") }}\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
{% endblock %}", "default/index.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\default\\index.html.twig");
    }
}
