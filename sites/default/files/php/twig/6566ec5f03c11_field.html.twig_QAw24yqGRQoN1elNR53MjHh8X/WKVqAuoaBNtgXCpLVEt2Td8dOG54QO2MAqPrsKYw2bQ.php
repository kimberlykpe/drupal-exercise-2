<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/profiles/demo_umami/themes/umami/templates/classy/field/field.html.twig */
class __TwigTemplate_ac604e460c05b7ac3f6e5542f0de1f50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 4
($context["field_name"] ?? null), 4, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["field_type"] ?? null), 5, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 6
($context["label_display"] ?? null), 6, $this->source)), 4 => (((        // line 7
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 11
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 13
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 16
        echo "
";
        // line 17
        if (($context["label_hidden"] ?? null)) {
            // line 18
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 19
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                echo ">
      ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 21
                    echo "        ";
                    $context["field_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 21), 21, $this->source));
                    // line 22
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 22), "addClass", [0 => "field__item"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo ">";
                    ((twig_trim_filter(($context["field_content"] ?? null))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["field_content"] ?? null), "html", null, true))) : (print ("welcome")));
                    echo "</div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "    </div>
  ";
            } else {
                // line 26
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 27
                    echo "      ";
                    $context["field_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 27), 27, $this->source));
                    // line 28
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 28), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item"], "method", false, false, true, 28), 28, $this->source), "html", null, true);
                    echo ">";
                    ((twig_trim_filter(($context["field_content"] ?? null))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["field_content"] ?? null), "html", null, true))) : (print ("welcome")));
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "  ";
            }
        } else {
            // line 32
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo ">
    <div";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 33, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 34
            if (($context["multiple"] ?? null)) {
                // line 35
                echo "      <div class=\"field__items\">
    ";
            }
            // line 37
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 38
                echo "      ";
                $context["field_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 38), 38, $this->source));
                // line 39
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 39), "addClass", [0 => "field__item"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                echo ">";
                ((twig_trim_filter(($context["field_content"] ?? null))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["field_content"] ?? null), "html", null, true))) : (print ("welcome")));
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 42
                echo "      </div>
    ";
            }
            // line 44
            echo "  </div>
";
        }
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/classy/field/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 46,  149 => 44,  145 => 42,  142 => 41,  131 => 39,  128 => 38,  123 => 37,  119 => 35,  117 => 34,  111 => 33,  106 => 32,  102 => 30,  91 => 28,  88 => 27,  83 => 26,  79 => 24,  68 => 22,  65 => 21,  61 => 20,  56 => 19,  53 => 18,  51 => 17,  48 => 16,  46 => 13,  45 => 11,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/classy/field/field.html.twig", "/Applications/MAMP/htdocs/drupal-example/core/profiles/demo_umami/themes/umami/templates/classy/field/field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 17, "for" => 20);
        static $filters = array("clean_class" => 4, "escape" => 19, "render" => 21, "trim" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'render', 'trim'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
