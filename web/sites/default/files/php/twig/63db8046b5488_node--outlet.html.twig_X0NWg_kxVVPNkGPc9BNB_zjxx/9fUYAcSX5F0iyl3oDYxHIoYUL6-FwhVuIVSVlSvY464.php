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

/* themes/custom/eyecream/templates/node--outlet.html.twig */
class __TwigTemplate_51dd97f645c1f235306ae360bdb2ac2e extends \Twig\Template
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
        // line 1
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 1, $this->source)))) : (""));
        // line 2
        echo "
";
        // line 4
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "bundle", [], "any", false, false, true, 6), 6, $this->source))), 2 => ((        // line 7
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 8
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 9)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 10
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 10)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 11
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 11)) ? ("node--unpublished") : ("")), 7 => ((        // line 12
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 12, $this->source)))) : (""))];
        // line 15
        echo "<!-- ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\Core\Template\DebugExtension::dump($this->env, $context), "html", null, true);
        echo " -->
<!-- ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\devel\Twig\Extension\Debug']->kint($this->env, $context));
        echo " -->

<article";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
  <header class=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 19, $this->source), "html", null, true);
        echo "\">
    <!--
    ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 21, $this->source), "html", null, true);
        echo "
    ";
        // line 22
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 23
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
            echo "</a>
    </h2>
    ";
        }
        // line 27
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 27, $this->source), "html", null, true);
        echo " -->
    ";
        // line 28
        if (($context["display_submitted"] ?? null)) {
            // line 29
            echo "    <div class=\"node__meta\">
      ";
            // line 30
            if (($context["author_picture"] ?? null)) {
                // line 31
                echo "      <div class=\"node__author-image\">
        ";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 32, $this->source), "html", null, true);
                echo "
      </div>
      ";
            }
            // line 35
            echo "      <span";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 35, $this->source), "html", null, true);
            echo ">
        ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            echo " ";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 36, $this->source), "html", null, true);
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 36, $this->source), "html", null, true);
            echo "
      </span>
      ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 38, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 41
        echo "  </header>
  <div";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => ($context["layout"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
    ";
        // line 44
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 44, $this->source), "comment"), "html", null, true);
        echo "
  </div>
  <!-- ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 46)) {
            // line 47
            echo "  <div id=\"comments\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 47, $this->source), "html", null, true);
            echo "\">
    ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 50
        echo " -->
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/eyecream/templates/node--outlet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 50,  155 => 48,  150 => 47,  148 => 46,  142 => 44,  138 => 42,  135 => 41,  129 => 38,  117 => 36,  112 => 35,  106 => 32,  103 => 31,  101 => 30,  98 => 29,  96 => 28,  91 => 27,  83 => 24,  78 => 23,  76 => 22,  72 => 21,  67 => 19,  63 => 18,  58 => 16,  53 => 15,  51 => 12,  50 => 11,  49 => 10,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  44 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/eyecream/templates/node--outlet.html.twig", "/Users/jaspzx/Sites/d95site2/web/themes/custom/eyecream/templates/node--outlet.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 22, "apply" => 36);
        static $filters = array("clean_class" => 1, "escape" => 15, "t" => 36, "spaceless" => 36, "without" => 44);
        static $functions = array("dump" => 15, "kint" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'apply'],
                ['clean_class', 'escape', 't', 'spaceless', 'without'],
                ['dump', 'kint']
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
