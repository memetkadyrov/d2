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
class __TwigTemplate_bedb2129ab053797e1a71253f2ac41a7 extends Template
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
            echo "    <div>
      <div class=\"slider__item\">
        <div class=\"image\"><a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive\" /></a>
        </div>
        <h4><a href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "</a></h4>
        <p class=\"price\">
            ";
            // line 11
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 11)) {
                // line 12
                echo "            ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 12);
                echo "
            ";
            } else {
                // line 14
                echo "            <span class=\"price-new\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 14);
                echo "</span> <span class=\"price-old\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 14);
                echo "</span>
            ";
            }
            // line 16
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 16)) {
                // line 17
                echo "            <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 17);
                echo "</span>
            ";
            }
            // line 19
            echo "        </p>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
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
        return array (  104 => 23,  95 => 19,  87 => 17,  84 => 16,  76 => 14,  70 => 12,  68 => 11,  61 => 9,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mk/template/extension/module/featured.twig", "");
    }
}
