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

/* form_div_layout.html.twig */
class __TwigTemplate_49102bb5ff795185ca6b3e9c61c97534 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'color_widget' => [$this, 'block_color_widget'],
            'week_widget' => [$this, 'block_week_widget'],
            'form_label' => [$this, 'block_form_label'],
            'form_label_content' => [$this, 'block_form_label_content'],
            'button_label' => [$this, 'block_button_label'],
            'form_help' => [$this, 'block_form_help'],
            'form_help_content' => [$this, 'block_form_help_content'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 11
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 20
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 30
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 37
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 41
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 49
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 84
        yield from $this->unwrap()->yieldBlock('choice_widget_options', $context, $blocks);
        // line 97
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 101
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 105
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 118
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 132
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 143
        yield from $this->unwrap()->yieldBlock('dateinterval_widget', $context, $blocks);
        // line 178
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 184
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 189
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 193
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 198
        yield from $this->unwrap()->yieldBlock('search_widget', $context, $blocks);
        // line 203
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 208
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 213
        yield from $this->unwrap()->yieldBlock('hidden_widget', $context, $blocks);
        // line 218
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 223
        yield from $this->unwrap()->yieldBlock('range_widget', $context, $blocks);
        // line 228
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 256
        yield from $this->unwrap()->yieldBlock('submit_widget', $context, $blocks);
        // line 261
        yield from $this->unwrap()->yieldBlock('reset_widget', $context, $blocks);
        // line 266
        yield from $this->unwrap()->yieldBlock('tel_widget', $context, $blocks);
        // line 271
        yield from $this->unwrap()->yieldBlock('color_widget', $context, $blocks);
        // line 276
        yield from $this->unwrap()->yieldBlock('week_widget', $context, $blocks);
        // line 289
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 303
        yield from $this->unwrap()->yieldBlock('form_label_content', $context, $blocks);
        // line 329
        yield from $this->unwrap()->yieldBlock('button_label', $context, $blocks);
        // line 332
        yield "
";
        // line 333
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 341
        yield "
";
        // line 342
        yield from $this->unwrap()->yieldBlock('form_help_content', $context, $blocks);
        // line 357
        yield "
";
        // line 360
        yield from $this->unwrap()->yieldBlock('repeated_row', $context, $blocks);
        // line 368
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 381
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 387
        yield from $this->unwrap()->yieldBlock('hidden_row', $context, $blocks);
        // line 393
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 399
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 413
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 420
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 430
        yield from $this->unwrap()->yieldBlock('form_rest', $context, $blocks);
        // line 451
        yield "
";
        // line 454
        yield from $this->unwrap()->yieldBlock('form_rows', $context, $blocks);
        // line 460
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 467
        yield from $this->unwrap()->yieldBlock('widget_container_attributes', $context, $blocks);
        // line 472
        yield from $this->unwrap()->yieldBlock('button_attributes', $context, $blocks);
        // line 477
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        return; yield '';
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield '';
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        if (((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color"))) {
            // line 15
            $context["required"] = false;
        }
        // line 17
        yield "<input type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
        }
        yield "/>";
        return; yield '';
    }

    // line 20
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 22
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 25
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 27
        yield "</div>";
        return; yield '';
    }

    // line 30
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        if ((array_key_exists("prototype", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 31))) {
            // line 32
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 34
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        return; yield '';
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "<textarea ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
        yield "</textarea>";
        return; yield '';
    }

    // line 41
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        if (($context["expanded"] ?? null)) {
            // line 43
            yield from             $this->unwrap()->yieldBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 45
            yield from             $this->unwrap()->yieldBlock("choice_widget_collapsed", $context, $blocks);
        }
        return; yield '';
    }

    // line 49
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "</div>";
        return; yield '';
    }

    // line 58
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 59) || (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", false, false, false, 59) <= 1)))) {
            // line 60
            $context["required"] = false;
        }
        // line 62
        yield "<select ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            yield " multiple=\"multiple\"";
        }
        yield ">";
        // line 63
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 64
            yield "<option value=\"\"";
            if (((array_key_exists("placeholder_attr", $context)) ? (Twig\Extension\CoreExtension::default(($context["placeholder_attr"] ?? null), [])) : ([]))) {
                $__internal_compile_0 = $context;
                $__internal_compile_1 = ["attr" => ($context["placeholder_attr"] ?? null)];
                if (!is_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 64, $this->getSourceContext());
                }
                $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $__internal_compile_0;
            }
            if ((($context["required"] ?? null) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null)))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            (((($context["placeholder"] ?? null) != "")) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true)) : (yield ""));
            yield "</option>";
        }
        // line 66
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["preferred_choices"] ?? null)) > 0)) {
            // line 67
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 68
            yield "            ";
            $context["render_preferred_choices"] = true;
            // line 69
            yield from             $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
            // line 70
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 71
                if (( !array_key_exists("separator_html", $context) || (($context["separator_html"] ?? null) === false))) {
                    // line 72
                    yield "<option disabled=\"disabled\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["separator"] ?? null), "html", null, true);
                    yield "</option>
                ";
                } else {
                    // line 74
                    yield "                    ";
                    yield ($context["separator"] ?? null);
                    yield "
                ";
                }
            }
        }
        // line 78
        $context["options"] = ($context["choices"] ?? null);
        // line 79
        $context["render_preferred_choices"] = false;
        // line 80
        yield from         $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
        // line 81
        yield "</select>";
        return; yield '';
    }

    // line 84
    public function block_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 86
            if (is_iterable($context["choice"])) {
                // line 87
                yield "<optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                yield "\">
                ";
                // line 88
                $context["options"] = $context["choice"];
                // line 89
                yield from                 $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
                // line 90
                yield "</optgroup>";
            } else {
                // line 92
                yield "<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 92), "html", null, true);
                yield "\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 92)) {
                    $__internal_compile_2 = $context;
                    $__internal_compile_3 = ["attr" => CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 92)];
                    if (!is_iterable($__internal_compile_3)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 92, $this->getSourceContext());
                    }
                    $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
                    yield from                     $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                    $context = $__internal_compile_2;
                }
                if (( !((array_key_exists("render_preferred_choices", $context)) ? (Twig\Extension\CoreExtension::default(($context["render_preferred_choices"] ?? null), false)) : (false)) && Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null)))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["choice_translation_domain"] ?? null) === false)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 92)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 92), CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "labelTranslationParameters", [], "any", false, false, false, 92), ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                yield "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 97
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        yield "<input type=\"checkbox\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if (($context["checked"] ?? null)) {
            yield " checked=\"checked\"";
        }
        yield " />";
        return; yield '';
    }

    // line 101
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        yield "<input type=\"radio\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if (($context["checked"] ?? null)) {
            yield " checked=\"checked\"";
        }
        yield " />";
        return; yield '';
    }

    // line 105
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 107
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 109
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 110
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 110), 'errors');
            // line 111
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 111), 'errors');
            // line 112
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 112), 'widget');
            // line 113
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 113), 'widget');
            // line 114
            yield "</div>";
        }
        return; yield '';
    }

    // line 118
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 120
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 122
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 123
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 124
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 124), 'widget'), "{{ month }}" =>             // line 125
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 125), 'widget'), "{{ day }}" =>             // line 126
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 126), 'widget')]);
            // line 128
            yield "</div>";
        }
        return; yield '';
    }

    // line 132
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 134
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 136
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 137
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 138
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 138), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 138), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 138), 'widget', ($context["vars"] ?? null));
            }
            // line 139
            yield "        </div>";
        }
        return; yield '';
    }

    // line 143
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 145
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 147
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 148
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 149
            yield "<table class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["table_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\" role=\"presentation\">
                <thead>
                    <tr>";
            // line 152
            if (($context["with_years"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 152), 'label');
                yield "</th>";
            }
            // line 153
            if (($context["with_months"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 153), 'label');
                yield "</th>";
            }
            // line 154
            if (($context["with_weeks"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 154), 'label');
                yield "</th>";
            }
            // line 155
            if (($context["with_days"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 155), 'label');
                yield "</th>";
            }
            // line 156
            if (($context["with_hours"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 156), 'label');
                yield "</th>";
            }
            // line 157
            if (($context["with_minutes"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 157), 'label');
                yield "</th>";
            }
            // line 158
            if (($context["with_seconds"] ?? null)) {
                yield "<th>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 158), 'label');
                yield "</th>";
            }
            // line 159
            yield "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 163
            if (($context["with_years"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 163), 'widget');
                yield "</td>";
            }
            // line 164
            if (($context["with_months"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 164), 'widget');
                yield "</td>";
            }
            // line 165
            if (($context["with_weeks"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 165), 'widget');
                yield "</td>";
            }
            // line 166
            if (($context["with_days"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 166), 'widget');
                yield "</td>";
            }
            // line 167
            if (($context["with_hours"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 167), 'widget');
                yield "</td>";
            }
            // line 168
            if (($context["with_minutes"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 168), 'widget');
                yield "</td>";
            }
            // line 169
            if (($context["with_seconds"] ?? null)) {
                yield "<td>";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 169), 'widget');
                yield "</td>";
            }
            // line 170
            yield "</tr>
                </tbody>
            </table>";
            // line 173
            if (($context["with_invert"] ?? null)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 173), 'widget');
            }
            // line 174
            yield "</div>";
        }
        return; yield '';
    }

    // line 178
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 181
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 184
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "number")) : ("number"));
        // line 186
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 189
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null),         $this->unwrap()->renderBlock("form_widget_simple", $context, $blocks));
        return; yield '';
    }

    // line 193
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "url")) : ("url"));
        // line 195
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 198
    public function block_search_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "search")) : ("search"));
        // line 200
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 203
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 205
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        if (($context["symbol"] ?? null)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::default(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
        }
        return; yield '';
    }

    // line 208
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "password")) : ("password"));
        // line 210
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 213
    public function block_hidden_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 215
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 218
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "email")) : ("email"));
        // line 220
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 223
    public function block_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 224
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "range")) : ("range"));
        // line 225
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 228
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 229
        if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
            // line 230
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                // line 231
                $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                 // line 232
($context["name"] ?? null), "%id%" =>                 // line 233
($context["id"] ?? null)]);
            } elseif ( !(            // line 235
($context["label"] ?? null) === false)) {
                // line 236
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 239
        yield "<button type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">";
        // line 240
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 241
            if ((($context["label_html"] ?? null) === false)) {
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            } else {
                // line 244
                yield ($context["label"] ?? null);
            }
        } else {
            // line 247
            if ((($context["label_html"] ?? null) === false)) {
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 250
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
        // line 253
        yield "</button>";
        return; yield '';
    }

    // line 256
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 257
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "submit")) : ("submit"));
        // line 258
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        return; yield '';
    }

    // line 261
    public function block_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 262
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "reset")) : ("reset"));
        // line 263
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        return; yield '';
    }

    // line 266
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 267
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "tel")) : ("tel"));
        // line 268
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 271
    public function block_color_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 272
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "color")) : ("color"));
        // line 273
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield '';
    }

    // line 276
    public function block_week_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 277
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 278
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 280
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 281
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 282
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 282), 'widget', ($context["vars"] ?? null));
            yield "-";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "week", [], "any", false, false, false, 282), 'widget', ($context["vars"] ?? null));
            yield "
        </div>";
        }
        return; yield '';
    }

    // line 289
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 290
        if ( !(($context["label"] ?? null) === false)) {
            // line 291
            if ( !($context["compound"] ?? null)) {
                // line 292
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 294
            if (($context["required"] ?? null)) {
                // line 295
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 295)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 295), "")) : ("")) . " required"))]);
            }
            // line 297
            yield "<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_4 = $context;
                $__internal_compile_5 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($__internal_compile_5)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 297, $this->getSourceContext());
                }
                $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $__internal_compile_4;
            }
            yield ">";
            // line 298
            yield from             $this->unwrap()->yieldBlock("form_label_content", $context, $blocks);
            // line 299
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        return; yield '';
    }

    // line 303
    public function block_form_label_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 304
        if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
            // line 305
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                // line 306
                $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                 // line 307
($context["name"] ?? null), "%id%" =>                 // line 308
($context["id"] ?? null)]);
            } else {
                // line 311
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 314
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 315
            if ((($context["label_html"] ?? null) === false)) {
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            } else {
                // line 318
                yield ($context["label"] ?? null);
            }
        } else {
            // line 321
            if ((($context["label_html"] ?? null) === false)) {
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 324
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
        return; yield '';
    }

    // line 329
    public function block_button_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 333
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 334
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 335
            $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 335)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 335), "")) : ("")) . " help-text"))]);
            // line 336
            yield "<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
            yield " id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $__internal_compile_6 = $context;
            $__internal_compile_7 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($__internal_compile_7)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 336, $this->getSourceContext());
            }
            $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_6;
            yield ">";
            // line 337
            yield from             $this->unwrap()->yieldBlock("form_help_content", $context, $blocks);
            // line 338
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
            yield ">";
        }
        return; yield '';
    }

    // line 342
    public function block_form_help_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 343
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 344
            if ((($context["help_html"] ?? null) === false)) {
                // line 345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help"] ?? null), "html", null, true);
            } else {
                // line 347
                yield ($context["help"] ?? null);
            }
        } else {
            // line 350
            if ((($context["help_html"] ?? null) === false)) {
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 353
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
        return; yield '';
    }

    // line 360
    public function block_repeated_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 365
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        return; yield '';
    }

    // line 368
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 369
        $context["widget_attr"] = [];
        // line 370
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 371
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 373
        yield "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 373, $this->getSourceContext());
        }
        $__internal_compile_9 = CoreExtension::toArray($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        yield ">";
        // line 374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 375
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 377
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 378
        yield "</div>";
        return; yield '';
    }

    // line 381
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 382
        yield "<div";
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 382, $this->getSourceContext());
        }
        $__internal_compile_11 = CoreExtension::toArray($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        yield ">";
        // line 383
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 384
        yield "</div>";
        return; yield '';
    }

    // line 387
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 388
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        return; yield '';
    }

    // line 393
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 394
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 395
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 396
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        return; yield '';
    }

    // line 399
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 400
        CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 400);
        // line 401
        $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["method"] ?? null));
        // line 402
        if (CoreExtension::inFilter(($context["method"] ?? null), ["GET", "POST"])) {
            // line 403
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 405
            $context["form_method"] = "POST";
        }
        // line 407
        yield "<form";
        if ((($context["name"] ?? null) != "")) {
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " method=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["form_method"] ?? null)), "html", null, true);
        yield "\"";
        if ((($context["action"] ?? null) != "")) {
            yield " action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
            yield "\"";
        }
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        if (($context["multipart"] ?? null)) {
            yield " enctype=\"multipart/form-data\"";
        }
        yield ">";
        // line 408
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 409
            yield "<input type=\"hidden\" name=\"_method\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
            yield "\" />";
        }
        return; yield '';
    }

    // line 413
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 414
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 415
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 417
        yield "</form>";
        return; yield '';
    }

    // line 420
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 421
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 422
            yield "<ul>";
            // line 423
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 424
                yield "<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 424), "html", null, true);
                yield "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 426
            yield "</ul>";
        }
        return; yield '';
    }

    // line 430
    public function block_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 432
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 432)) {
                // line 433
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "methodRendered", [], "any", false, false, false, 437) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)))) {
            // line 438
            CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 438);
            // line 439
            $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["method"] ?? null));
            // line 440
            if (CoreExtension::inFilter(($context["method"] ?? null), ["GET", "POST"])) {
                // line 441
                $context["form_method"] = ($context["method"] ?? null);
            } else {
                // line 443
                $context["form_method"] = "POST";
            }
            // line 446
            if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
                // line 447
                yield "<input type=\"hidden\" name=\"_method\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
                yield "\" />";
            }
        }
        return; yield '';
    }

    // line 454
    public function block_form_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 455
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["form"] ?? null), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return  !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 455); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 456
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 460
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 461
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        // line 462
        if (($context["disabled"] ?? null)) {
            yield " disabled=\"disabled\"";
        }
        // line 463
        if (($context["required"] ?? null)) {
            yield " required=\"required\"";
        }
        // line 464
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        return; yield '';
    }

    // line 467
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 468
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["id"] ?? null))) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 469
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        return; yield '';
    }

    // line 472
    public function block_button_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 473
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        if (($context["disabled"] ?? null)) {
            yield " disabled=\"disabled\"";
        }
        // line 474
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        return; yield '';
    }

    // line 477
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 478
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 479
            yield " ";
            // line 480
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 481
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($context["translation_domain"] ?? null) === false) || (null === $context["attrvalue"]))) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], ($context["attr_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
                yield "\"";
            } elseif ((            // line 482
$context["attrvalue"] === true)) {
                // line 483
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 484
$context["attrvalue"] === false)) {
                // line 485
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1423 => 485,  1421 => 484,  1416 => 483,  1414 => 482,  1409 => 481,  1407 => 480,  1405 => 479,  1401 => 478,  1397 => 477,  1392 => 474,  1383 => 473,  1379 => 472,  1374 => 469,  1368 => 468,  1364 => 467,  1359 => 464,  1355 => 463,  1351 => 462,  1345 => 461,  1341 => 460,  1332 => 456,  1328 => 455,  1324 => 454,  1315 => 447,  1313 => 446,  1310 => 443,  1307 => 441,  1305 => 440,  1303 => 439,  1301 => 438,  1299 => 437,  1292 => 433,  1290 => 432,  1286 => 431,  1282 => 430,  1276 => 426,  1268 => 424,  1264 => 423,  1262 => 422,  1260 => 421,  1256 => 420,  1251 => 417,  1248 => 415,  1246 => 414,  1242 => 413,  1234 => 409,  1232 => 408,  1212 => 407,  1209 => 405,  1206 => 403,  1204 => 402,  1202 => 401,  1200 => 400,  1196 => 399,  1191 => 396,  1189 => 395,  1187 => 394,  1183 => 393,  1178 => 388,  1174 => 387,  1169 => 384,  1167 => 383,  1155 => 382,  1151 => 381,  1146 => 378,  1144 => 377,  1142 => 376,  1140 => 375,  1138 => 374,  1126 => 373,  1123 => 371,  1121 => 370,  1119 => 369,  1115 => 368,  1110 => 365,  1106 => 360,  1099 => 353,  1096 => 351,  1094 => 350,  1090 => 347,  1087 => 345,  1085 => 344,  1083 => 343,  1079 => 342,  1071 => 338,  1069 => 337,  1053 => 336,  1051 => 335,  1049 => 334,  1045 => 333,  1038 => 329,  1031 => 324,  1028 => 322,  1026 => 321,  1022 => 318,  1019 => 316,  1017 => 315,  1015 => 314,  1011 => 311,  1008 => 308,  1007 => 307,  1006 => 306,  1004 => 305,  1002 => 304,  998 => 303,  990 => 299,  988 => 298,  973 => 297,  970 => 295,  968 => 294,  965 => 292,  963 => 291,  961 => 290,  957 => 289,  947 => 282,  942 => 281,  940 => 280,  937 => 278,  935 => 277,  931 => 276,  926 => 273,  924 => 272,  920 => 271,  915 => 268,  913 => 267,  909 => 266,  904 => 263,  902 => 262,  898 => 261,  893 => 258,  891 => 257,  887 => 256,  882 => 253,  878 => 250,  875 => 248,  873 => 247,  869 => 244,  866 => 242,  864 => 241,  862 => 240,  856 => 239,  852 => 236,  850 => 235,  848 => 233,  847 => 232,  846 => 231,  844 => 230,  842 => 229,  838 => 228,  833 => 225,  831 => 224,  827 => 223,  822 => 220,  820 => 219,  816 => 218,  811 => 215,  809 => 214,  805 => 213,  800 => 210,  798 => 209,  794 => 208,  785 => 205,  783 => 204,  779 => 203,  774 => 200,  772 => 199,  768 => 198,  763 => 195,  761 => 194,  757 => 193,  752 => 190,  748 => 189,  743 => 186,  741 => 185,  737 => 184,  732 => 181,  730 => 180,  726 => 178,  720 => 174,  716 => 173,  712 => 170,  706 => 169,  700 => 168,  694 => 167,  688 => 166,  682 => 165,  676 => 164,  670 => 163,  665 => 159,  659 => 158,  653 => 157,  647 => 156,  641 => 155,  635 => 154,  629 => 153,  623 => 152,  617 => 149,  615 => 148,  611 => 147,  608 => 145,  606 => 144,  602 => 143,  596 => 139,  586 => 138,  581 => 137,  579 => 136,  576 => 134,  574 => 133,  570 => 132,  564 => 128,  562 => 126,  561 => 125,  560 => 124,  559 => 123,  555 => 122,  552 => 120,  550 => 119,  546 => 118,  540 => 114,  538 => 113,  536 => 112,  534 => 111,  532 => 110,  528 => 109,  525 => 107,  523 => 106,  519 => 105,  504 => 102,  500 => 101,  485 => 98,  481 => 97,  444 => 92,  441 => 90,  439 => 89,  437 => 88,  432 => 87,  430 => 86,  413 => 85,  409 => 84,  404 => 81,  402 => 80,  400 => 79,  398 => 78,  390 => 74,  384 => 72,  382 => 71,  380 => 70,  378 => 69,  375 => 68,  373 => 67,  371 => 66,  351 => 64,  349 => 63,  342 => 62,  339 => 60,  337 => 59,  333 => 58,  328 => 55,  322 => 53,  320 => 52,  316 => 51,  312 => 50,  308 => 49,  302 => 45,  299 => 43,  297 => 42,  293 => 41,  284 => 38,  280 => 37,  275 => 34,  272 => 32,  270 => 31,  266 => 30,  261 => 27,  259 => 26,  257 => 25,  254 => 23,  252 => 22,  248 => 21,  244 => 20,  229 => 17,  226 => 15,  224 => 13,  222 => 12,  218 => 11,  212 => 7,  209 => 5,  207 => 4,  203 => 3,  198 => 477,  196 => 472,  194 => 467,  192 => 460,  190 => 454,  187 => 451,  185 => 430,  183 => 420,  181 => 413,  179 => 399,  177 => 393,  175 => 387,  173 => 381,  171 => 368,  169 => 360,  166 => 357,  164 => 342,  161 => 341,  159 => 333,  156 => 332,  154 => 329,  152 => 303,  150 => 289,  148 => 276,  146 => 271,  144 => 266,  142 => 261,  140 => 256,  138 => 228,  136 => 223,  134 => 218,  132 => 213,  130 => 208,  128 => 203,  126 => 198,  124 => 193,  122 => 189,  120 => 184,  118 => 178,  116 => 143,  114 => 132,  112 => 118,  110 => 105,  108 => 101,  106 => 97,  104 => 84,  102 => 58,  100 => 49,  98 => 41,  96 => 37,  94 => 30,  92 => 20,  90 => 11,  88 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_div_layout.html.twig", "/var/www/html/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
