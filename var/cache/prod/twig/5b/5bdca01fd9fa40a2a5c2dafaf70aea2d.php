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

/* base.html.twig */
class __TwigTemplate_6ea65d5ff97a61b10674c73263598781 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr-FR\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">
        ";
        // line 16
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 19
        yield "
        ";
        // line 20
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 23
        yield "    </head>
    <body class=\"d-flex flex-column h-100\">
    <header>
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logos/ArcadiaN&B.svg"), "html", null, true);
        yield "\" alt=\"Logo Jurasikarcadia\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active clickable\" aria-current=\"page\" onclick=\"window.location.replace('/')\">Accueil</a>
                        </li>
                        <li class=\"nav-item ms-lg-5\">
                            ";
        // line 41
        yield "                            <a class=\"nav-link clickable\" onclick=\"window.location.replace('/habitat')\">Habitat</a>
                        </li>
                        <li class=\"nav-item ms-lg-5\">
                            <a class=\"nav-link\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service");
        yield "\">Service</a>
                        </li>
                        <li class=\"nav-item ms-lg-5\">
                            <a class=\"nav-link clickable\" onclick=\"window.location.replace('/contact')\">Contact</a>
                        </li>
                        <li class=\"nav-item ms-lg-5\">
                            <a class=\"nav-link\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"><i class=\"bi bi-lock\"></i></a>
                        </li>
                        <li class=\"nav-item ms-lg-5\">
                            <a class=\"nav-link\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_password_reset_request");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logos/mot-de-passe-oublie1.png"), "html", null, true);
        yield "\"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        ";
        // line 59
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VETERINARIAN"))) {
            // line 60
            yield "            <nav class=\"navbar navbar-expand-lg navbar-light bg-light mt-3\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"#\">
                        ";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 64
                yield "                            Admin
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VETERINARIAN")) {
                // line 66
                yield "                            Veto
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE")) {
                // line 68
                yield "                            Employé
                        ";
            }
            // line 70
            yield "                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#adminNavbar\" aria-controls=\"adminNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"adminNavbar\">
                        <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
                            ";
            // line 76
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 77
                yield "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 78
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "\">Dashboard</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 81
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list");
                yield "\">Gestion des Utilisateurs</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 84
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_index");
                yield "\">Gestion des Habitats</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 87
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_schedule_index");
                yield "\">Gestion des Horaires</a>
                                </li>
                            ";
            }
            // line 90
            yield "                            ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYEE"))) {
                // line 91
                yield "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 92
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
                yield "\">Gestion des Services</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 95
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_feeding_index");
                yield "\">Gestion de l'Alimentations</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 98
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_reviews");
                yield "\">Gestion des Avis</a>
                                </li>
                            ";
            }
            // line 101
            yield "                            ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VETERINARIAN"))) {
                // line 102
                yield "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 103
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_index");
                yield "\">Gestion des Animaux</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 106
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary_report_index");
                yield "\">Gestion des Raports</a>
                                </li>
                            ";
            }
            // line 109
            yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 110
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        ";
        }
        // line 117
        yield "    </header>
    <div class=\"container mt-3\">
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 120
            yield "            <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "\">
                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 122
                yield "                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "    </div>
        ";
        // line 127
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 129
        yield "        <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-auto mb-0\">
            <p class=\"col-md-4 mb-0 text-muted\">© 2024 Arcadia</p>
            <ul class=\"nav col-md-4 justify-content-center\">
                <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">Mentions légales</a></li>
            </ul>
            <div class=\"col-md-4 d-flex justify-content-end \">
                <a href=\"#\" class=\"m-lg-4 me-2 text-muted\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"m-lg-4 me-2 text-muted\"><i class=\"bi bi-twitter\"></i></a>
                <a href=\"#\" class=\"m-lg-4 me-2 text-muted\"><i class=\"bi bi-instagram\"></i></a>
            </div>
        </footer>
    </body>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
</html>
";
        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Ecf Arcadia!";
        return; yield '';
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "
        ";
        return; yield '';
    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 22
        yield "        ";
        return; yield '';
    }

    // line 21
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        return; yield '';
    }

    // line 127
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  336 => 127,  328 => 21,  323 => 22,  320 => 21,  316 => 20,  307 => 16,  299 => 6,  280 => 129,  278 => 127,  275 => 126,  268 => 124,  259 => 122,  255 => 121,  250 => 120,  246 => 119,  242 => 117,  232 => 110,  229 => 109,  223 => 106,  217 => 103,  214 => 102,  211 => 101,  205 => 98,  199 => 95,  193 => 92,  190 => 91,  187 => 90,  181 => 87,  175 => 84,  169 => 81,  163 => 78,  160 => 77,  158 => 76,  150 => 70,  146 => 68,  142 => 66,  138 => 64,  136 => 63,  131 => 60,  129 => 59,  118 => 53,  112 => 50,  103 => 44,  98 => 41,  84 => 29,  80 => 28,  73 => 23,  71 => 20,  68 => 19,  66 => 16,  62 => 15,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
