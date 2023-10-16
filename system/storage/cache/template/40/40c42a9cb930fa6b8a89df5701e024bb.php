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

/* mk/template/common/menu.twig */
class __TwigTemplate_df6b3cebe9436e96c30cfa8a5e1131d8 extends Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 4
            echo ($context["text_category"] ?? null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"mobile\">
      <div class=\"mobile-left\">  
          <nav class=\"menu\">
            <button class=\"menu__btn\"></button>
          </nav>
          <div class=\"logo\"></div>
      </div>
      <div class=\"mobile-right\">
        <ul class=\"icons\">
          <li class=\"icons__search\"  id=\"searchButton\"></li>
          <li><button class=\"icons_phone\"></button></li>
          <li class=\"icons__wishlist\"><a href=\"";
            // line 18
            echo ($context["wishlist"] ?? null);
            echo "\"></a></li>
        </ul>
      </div>
      <div id=\"search\" class=\"input-group\" style=\"display: none;\">";
            // line 21
            echo ($context["search"] ?? null);
            echo "</div>
      <ul class=\"header_adress\">
            <span class=\"header_adress_title\">Kontakt</span>
            <li class=\"contact\"><a href=\"";
            // line 24
            echo ($context["contact"] ?? null);
            echo "\"><i class=\"\"></i></a> <span class=\"\">";
            echo ($context["telephone"] ?? null);
            echo "</span></li>
            <li class=\"address\">";
            // line 25
            echo ($context["address"] ?? null);
            echo "</li>
            <li class=\"open\">";
            // line 26
            echo ($context["open"] ?? null);
            echo "</li>
            <li class=\"instagram\"><a href=\"\">Instagram</a></li>
      </ul>
    </div>
    <div class=\"first-level\">
      <ul class=\"first-item\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "        <li class=\"dropdown\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 36), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 36)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 36), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 37
                        echo "              <ul class=\"second-item\">
                ";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 39
                            echo "                <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 39);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 39);
                            echo "</a></li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "</div>
            <a href=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 43);
                    echo "\" class=\"see-all\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                    echo "</a> </div>
        </li>
        ";
                } else {
                    // line 46
                    echo "        <li class=\"parent\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 46);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46);
                    echo "</a></li>
        ";
                }
                // line 48
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 53
        echo " ";
    }

    public function getTemplateName()
    {
        return "mk/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 53,  162 => 49,  156 => 48,  148 => 46,  138 => 43,  135 => 42,  128 => 41,  117 => 39,  113 => 38,  110 => 37,  106 => 36,  98 => 34,  95 => 33,  91 => 32,  82 => 26,  78 => 25,  72 => 24,  66 => 21,  60 => 18,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mk/template/common/menu.twig", "");
    }
}
