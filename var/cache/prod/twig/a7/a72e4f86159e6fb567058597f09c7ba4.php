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

/* default/index.html.twig */
class __TwigTemplate_443c68aff807ce83dca6b2d4f3a84690 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dinos/diplodocus.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dinos/sarcosuchus.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dinos/spinosaurus.jpg"), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["services"] ?? null), 0, 3));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["habitats"] ?? null), 0, 3));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["animals"] ?? null), 0, 3));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::reverse($this->env->getCharset(), ($context["reviews"] ?? null)), 0, 3));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singleReview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "            <div class=\"card container text-center form-control avis mt-xxl-5\">
                ";
        // line 106
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                <div class=\"card-header\">
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pseudo", [], "any", false, false, false, 108), 'label');
        yield "
                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pseudo", [], "any", false, false, false, 109), 'widget');
        yield "
                </div>
                <div class=\"card-body\">
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, false, 112), 'label');
        yield "
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, false, 113), 'widget');
        yield "
                    <div class=\"form-group\">
                        <label>Note</label>
                        <div class=\"rating\" id=\"review-rating-container\">
                            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "rating", [], "any", false, false, false, 117), 'widget', ["attr" => ["type" => "hidden", "id" => "review_rating"]]);
        yield "
                            <i class=\"far fa-star\" data-value=\"1\"></i>
                            <i class=\"far fa-star\" data-value=\"2\"></i>
                            <i class=\"far fa-star\" data-value=\"3\"></i>
                            <i class=\"far fa-star\" data-value=\"4\"></i>
                            <i class=\"far fa-star\" data-value=\"5\"></i>
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Soumettre</button>
                ";
        // line 127
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </div>
        ";
        // line 131
        yield "        ";
        // line 132
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
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["schedules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 143
            yield "                        <tr>
                            <td>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "day", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                            ";
            // line 145
            if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "isclosed", [], "any", false, false, false, 145)) {
                // line 146
                yield "                                <td>Fermé</td>
                                <td>Fermé</td>
                            ";
            } else {
                // line 149
                yield "                                <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "openingTime", [], "any", false, false, false, 149), "H:i"), "html", null, true);
                yield "</td>
                                <td>";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "closingTime", [], "any", false, false, false, 150), "H:i"), "html", null, true);
                yield "</td>
                            ";
            }
            // line 152
            yield "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                    </tbody>
                </table>
            </div>
        </div>
";
        return; yield '';
    }

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/stars_reviews.js"), "html", null, true);
        yield "?\$";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U"), "html", null, true);
        yield "\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/index.html.twig";
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
        return array (  403 => 161,  398 => 160,  394 => 159,  385 => 154,  378 => 152,  373 => 150,  368 => 149,  363 => 146,  361 => 145,  357 => 144,  354 => 143,  350 => 142,  338 => 132,  336 => 131,  330 => 127,  317 => 117,  310 => 113,  306 => 112,  300 => 109,  296 => 108,  291 => 106,  288 => 105,  278 => 101,  274 => 100,  269 => 97,  263 => 96,  259 => 94,  255 => 92,  252 => 91,  248 => 90,  243 => 88,  239 => 86,  235 => 85,  231 => 83,  229 => 82,  224 => 78,  216 => 75,  205 => 73,  201 => 72,  196 => 70,  193 => 69,  189 => 68,  185 => 66,  183 => 65,  180 => 63,  172 => 60,  161 => 58,  157 => 57,  152 => 55,  149 => 54,  145 => 53,  141 => 51,  139 => 50,  136 => 48,  128 => 45,  117 => 43,  113 => 42,  108 => 40,  105 => 39,  101 => 38,  97 => 36,  86 => 27,  80 => 24,  74 => 21,  68 => 17,  66 => 16,  58 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/index.html.twig", "/var/www/html/templates/default/index.html.twig");
    }
}
