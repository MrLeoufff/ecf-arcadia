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

/* legal/index.html.twig */
class __TwigTemplate_3345d95977311d49dc2eb04494f6cad8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "legal/index.html.twig", 1);
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
        <div class=\"col-lg-12\">
            <div class=\"card mb-3 rounded-4 cadre\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-12 rounded-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Mentions Légales</h5>
                            <p>
                                <strong>Nom de l'entreprise :</strong> Développeur Web du Gard<br>
                                <strong>Adresse :</strong> 2 rue de la bronque, Saint Victor La Coste, 30290 <br>
                                <strong>Téléphone :</strong> 07 82 33 63 65<br>
                                <strong>Email :</strong> developpeur.web.gard@gmail.com
                            </p>
                            <h6>Hébergement</h6>
                            <p>
                                Hébergeur : Hostinger<br>
                                Adresse de l'hébergeur : 61 Lordou Vironos Street, 6023 Larnaca, Chypre
                            </p>
                            <h6>Propriété intellectuelle</h6>
                            <p>
                                Le contenu du site, incluant, de façon non limitative, les textes, images, etc., est la propriété de Développeur Web du Gard ou de ses partenaires.
                            </p>
                            <h6>Responsabilité</h6>
                            <p>
                                Développeur Web du Gard ne peut être tenue responsable des erreurs, d'une absence de disponibilité des informations.
                            </p>
                            <h6>Données personnelles</h6>
                            <p>
                                Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d'accès aux données vous concernant.
                            </p>
                            <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-primary mt-4\">Retour à la page d'accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "legal/index.html.twig";
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
        return array (  108 => 34,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row mb-4 m-4\">
        <div class=\"col-lg-12\">
            <div class=\"card mb-3 rounded-4 cadre\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-12 rounded-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Mentions Légales</h5>
                            <p>
                                <strong>Nom de l'entreprise :</strong> Développeur Web du Gard<br>
                                <strong>Adresse :</strong> 2 rue de la bronque, Saint Victor La Coste, 30290 <br>
                                <strong>Téléphone :</strong> 07 82 33 63 65<br>
                                <strong>Email :</strong> developpeur.web.gard@gmail.com
                            </p>
                            <h6>Hébergement</h6>
                            <p>
                                Hébergeur : Hostinger<br>
                                Adresse de l'hébergeur : 61 Lordou Vironos Street, 6023 Larnaca, Chypre
                            </p>
                            <h6>Propriété intellectuelle</h6>
                            <p>
                                Le contenu du site, incluant, de façon non limitative, les textes, images, etc., est la propriété de Développeur Web du Gard ou de ses partenaires.
                            </p>
                            <h6>Responsabilité</h6>
                            <p>
                                Développeur Web du Gard ne peut être tenue responsable des erreurs, d'une absence de disponibilité des informations.
                            </p>
                            <h6>Données personnelles</h6>
                            <p>
                                Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d'accès aux données vous concernant.
                            </p>
                            <a href=\"{{ path('app_home') }}\" class=\"btn btn-primary mt-4\">Retour à la page d'accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "legal/index.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\templates\\legal\\index.html.twig");
    }
}
