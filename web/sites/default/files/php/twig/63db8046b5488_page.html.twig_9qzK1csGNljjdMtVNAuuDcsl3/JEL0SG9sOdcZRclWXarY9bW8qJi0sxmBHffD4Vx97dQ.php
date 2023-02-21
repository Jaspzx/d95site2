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

/* themes/custom/eyecream/templates/page.html.twig */
class __TwigTemplate_f024f887518d190bd0ff68ef5c81103b extends \Twig\Template
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
        // line 45
        echo "<!-- ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\devel\Twig\Extension\Debug']->kint($this->env, $context, [0 => $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 45), 45, $this->source)]));
        echo " -->
<div class=\"layout-container\">

  <header role=\"banner\"
    style=\"display: flex;
    align-items: center;
    flex-direction: row;
  \">
    ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "
  </header>

  ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 56)) {
            // line 57
            echo "    <div class=\"layout-banner-top\" role=\"banner\">
      ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
  ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 67
        echo "
    <div class=\"layout-content\">
      ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
      ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
    </div>
    <!-- ";
        // line 72
        echo " -->

  </main>

  ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_bottom", [], "any", false, false, true, 76)) {
            // line 77
            echo "    <div class=\"layout-banner-bottom\" role=\"banner\">
      ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_bottom", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 81
        echo "
  ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 82)) {
            // line 83
            echo "    <footer role=\"contentinfo\">
      ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 87
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/eyecream/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 87,  119 => 84,  116 => 83,  114 => 82,  111 => 81,  105 => 78,  102 => 77,  100 => 76,  94 => 72,  89 => 70,  85 => 69,  81 => 67,  75 => 63,  71 => 62,  68 => 61,  62 => 58,  59 => 57,  57 => 56,  51 => 53,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/eyecream/templates/page.html.twig", "/Users/jaspzx/Sites/d95site2/web/themes/custom/eyecream/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 56);
        static $filters = array("escape" => 53);
        static $functions = array("kint" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['kint']
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
