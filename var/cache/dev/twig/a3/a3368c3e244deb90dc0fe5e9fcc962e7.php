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

/* @email/zurb_2/notification/body.html.twig */
class __TwigTemplate_cbf9ab190b29b14a117a6fcc75f04cde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'lead' => [$this, 'block_lead'],
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
            'exception' => [$this, 'block_exception'],
            'footer' => [$this, 'block_footer'],
            'footer_content' => [$this, 'block_footer_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@email/zurb_2/notification/body.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@email/zurb_2/notification/body.html.twig"));

        // line 1
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "<html>
<head>
<style>
    ";
            // line 5
            yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
            // line 9
            yield "</style>
</head>
<body>
<spacer size=\"32\"></spacer>
<wrapper class=\"body\">
    <container class=\"body_";
            // line 14
            yield ((("urgent" == (isset($context["importance"]) || array_key_exists("importance", $context) ? $context["importance"] : (function () { throw new RuntimeError('Variable "importance" does not exist.', 14, $this->source); })()))) ? ("alert") : (((("high" == (isset($context["importance"]) || array_key_exists("importance", $context) ? $context["importance"] : (function () { throw new RuntimeError('Variable "importance" does not exist.', 14, $this->source); })()))) ? ("warning") : ("default"))));
            yield "\">
        <spacer size=\"16\"></spacer>
        <row>
            <columns large=\"12\" small=\"12\">
                ";
            // line 18
            yield from $this->unwrap()->yieldBlock('lead', $context, $blocks);
            // line 24
            yield "
                ";
            // line 25
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 32
            yield "
                ";
            // line 33
            yield from $this->unwrap()->yieldBlock('action', $context, $blocks);
            // line 39
            yield "
                ";
            // line 40
            yield from $this->unwrap()->yieldBlock('exception', $context, $blocks);
            // line 46
            yield "            </columns>
        </row>

        <wrapper class=\"secondary\">
            <spacer size=\"16\"></spacer>
            ";
            // line 51
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
            // line 62
            yield "        </wrapper>
    </container>
</wrapper>
</body>
</html>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extra\CssInliner\CssInlinerExtension::inlineCss(Twig\Extra\Inky\InkyExtension::inky($___internal_parse_0_));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 6
        yield "        ";
        yield Twig\Extension\CoreExtension::source($this->env, "@email/zurb_2/main.css");
        yield "
        ";
        // line 7
        yield Twig\Extension\CoreExtension::source($this->env, "@email/zurb_2/notification/local.css");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 18
    public function block_lead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lead"));

        // line 19
        yield "                    ";
        if ( !(null === (isset($context["importance"]) || array_key_exists("importance", $context) ? $context["importance"] : (function () { throw new RuntimeError('Variable "importance" does not exist.', 19, $this->source); })()))) {
            yield "<small><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["importance"]) || array_key_exists("importance", $context) ? $context["importance"] : (function () { throw new RuntimeError('Variable "importance" does not exist.', 19, $this->source); })())), "html", null, true);
            yield "</strong></small>";
        }
        // line 20
        yield "                    <p class=\"lead\">
                        ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 21, $this->source); })()), "subject", [], "any", false, false, false, 21), "html", null, true);
        yield "
                    </p>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        yield "                    ";
        if ((isset($context["markdown"]) || array_key_exists("markdown", $context) ? $context["markdown"] : (function () { throw new RuntimeError('Variable "markdown" does not exist.', 26, $this->source); })())) {
            // line 27
            yield "                        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@email/zurb_2/notification/content_markdown.html.twig");
            yield "
                    ";
        } else {
            // line 29
            yield "                        ";
            yield (((isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new RuntimeError('Variable "raw" does not exist.', 29, $this->source); })())) ? ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 29, $this->source); })())) : (Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 29, $this->source); })()), "html", null, true))));
            yield "
                    ";
        }
        // line 31
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 33
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        // line 34
        yield "                    ";
        if ((isset($context["action_url"]) || array_key_exists("action_url", $context) ? $context["action_url"] : (function () { throw new RuntimeError('Variable "action_url" does not exist.', 34, $this->source); })())) {
            // line 35
            yield "                        <spacer size=\"16\"></spacer>
                        <button href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action_url"]) || array_key_exists("action_url", $context) ? $context["action_url"] : (function () { throw new RuntimeError('Variable "action_url" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action_text"]) || array_key_exists("action_text", $context) ? $context["action_text"] : (function () { throw new RuntimeError('Variable "action_text" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "</button>
                    ";
        }
        // line 38
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 40
    public function block_exception($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "exception"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "exception"));

        // line 41
        yield "                    ";
        if ((isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 41, $this->source); })())) {
            // line 42
            yield "                        <spacer size=\"16\"></spacer>
                        <p><em>Exception stack trace attached.</em></p>
                    ";
        }
        // line 45
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 51
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        yield "                ";
        if ((array_key_exists("footer_text", $context) &&  !(null === (isset($context["footer_text"]) || array_key_exists("footer_text", $context) ? $context["footer_text"] : (function () { throw new RuntimeError('Variable "footer_text" does not exist.', 52, $this->source); })())))) {
            // line 53
            yield "                <row>
                    <columns small=\"12\" large=\"6\">
                        ";
            // line 55
            yield from $this->unwrap()->yieldBlock('footer_content', $context, $blocks);
            // line 58
            yield "                    </columns>
                </row>
                ";
        }
        // line 61
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 55
    public function block_footer_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_content"));

        // line 56
        yield "                            <p><small>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["footer_text"]) || array_key_exists("footer_text", $context) ? $context["footer_text"] : (function () { throw new RuntimeError('Variable "footer_text" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "</small></p>
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
        return "@email/zurb_2/notification/body.html.twig";
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
        return array (  326 => 56,  316 => 55,  305 => 61,  300 => 58,  298 => 55,  294 => 53,  291 => 52,  281 => 51,  270 => 45,  265 => 42,  262 => 41,  252 => 40,  241 => 38,  234 => 36,  231 => 35,  228 => 34,  218 => 33,  207 => 31,  201 => 29,  195 => 27,  192 => 26,  182 => 25,  168 => 21,  165 => 20,  158 => 19,  148 => 18,  135 => 7,  130 => 6,  120 => 5,  109 => 1,  100 => 62,  98 => 51,  91 => 46,  89 => 40,  86 => 39,  84 => 33,  81 => 32,  79 => 25,  76 => 24,  74 => 18,  67 => 14,  60 => 9,  58 => 5,  53 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply inky_to_html|inline_css %}
<html>
<head>
<style>
    {% block style %}
        {{ source(\"@email/zurb_2/main.css\") }}
        {{ source(\"@email/zurb_2/notification/local.css\") }}
    {% endblock %}
</style>
</head>
<body>
<spacer size=\"32\"></spacer>
<wrapper class=\"body\">
    <container class=\"body_{{ (\"urgent\" == importance ? \"alert\" : (\"high\" == importance ? \"warning\" : \"default\")) }}\">
        <spacer size=\"16\"></spacer>
        <row>
            <columns large=\"12\" small=\"12\">
                {% block lead %}
                    {% if importance is not null %}<small><strong>{{ importance|upper }}</strong></small>{% endif %}
                    <p class=\"lead\">
                        {{ email.subject }}
                    </p>
                {% endblock %}

                {% block content %}
                    {% if markdown %}
                        {{ include('@email/zurb_2/notification/content_markdown.html.twig') }}
                    {% else %}
                        {{ raw ? content|raw : content|nl2br }}
                    {% endif %}
                {% endblock %}

                {% block action %}
                    {% if action_url %}
                        <spacer size=\"16\"></spacer>
                        <button href=\"{{ action_url }}\">{{ action_text }}</button>
                    {% endif %}
                {% endblock %}

                {% block exception %}
                    {% if exception %}
                        <spacer size=\"16\"></spacer>
                        <p><em>Exception stack trace attached.</em></p>
                    {% endif %}
                {% endblock %}
            </columns>
        </row>

        <wrapper class=\"secondary\">
            <spacer size=\"16\"></spacer>
            {% block footer %}
                {% if footer_text is defined and footer_text is not null %}
                <row>
                    <columns small=\"12\" large=\"6\">
                        {% block footer_content %}
                            <p><small>{{ footer_text }}</small></p>
                        {% endblock %}
                    </columns>
                </row>
                {% endif %}
            {% endblock %}
        </wrapper>
    </container>
</wrapper>
</body>
</html>
{% endapply %}
", "@email/zurb_2/notification/body.html.twig", "C:\\wamp64\\www\\studi-ecf-arcadia\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\zurb_2\\notification\\body.html.twig");
    }
}
