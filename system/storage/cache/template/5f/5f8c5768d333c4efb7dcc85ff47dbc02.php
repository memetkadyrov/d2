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

/* mk/template/extension/module/featured.twig */
class __TwigTemplate_d61d01caa2a30419f88372c1178854a9 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
  <h3>Beliebte Blumensträuße</h3>
  <div class=\"slider\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "    <div class=\"slider__item\">
      <div class=\"image\"><a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\" /></a>
      </div>
      <h4><a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
            echo "</a></h4>
      <p class=\"price\">
          ";
            // line 10
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 10)) {
                // line 11
                echo "          ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 11);
                echo "
          ";
            } else {
                // line 13
                echo "          <span class=\"price-new\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 13);
                echo "</span> <span class=\"price-old\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 13);
                echo "</span>
          ";
            }
            // line 15
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 15)) {
                // line 16
                echo "          <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 16);
                echo "</span>
          ";
            }
            // line 18
            echo "      </p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mk/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  94 => 18,  86 => 16,  83 => 15,  75 => 13,  69 => 11,  67 => 10,  60 => 8,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mk/template/extension/module/featured.twig", "");
    }
}
