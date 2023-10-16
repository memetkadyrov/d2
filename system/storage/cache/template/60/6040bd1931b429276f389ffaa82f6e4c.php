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

/* mk/template/common/header.twig */
class __TwigTemplate_a9590d0b7e74a6d72ca56f589c84ad1c extends Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-3.7.0.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/slick.min.js\"></script>
<script src=\"catalog/view/javascript/slider.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<!--<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" /><link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">-->
<link href=\"catalog/view/theme/mk/public/test.css\" rel=\"stylesheet\">

";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 30
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 30);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 30);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 30);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 33
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 37
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 37);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 37);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 40
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</head>
<body>
<header>
  <div class=\"container\">
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
        // line 57
        echo ($context["wishlist"] ?? null);
        echo "\"></a></li>
        </ul>
      </div>
      <div id=\"search\" class=\"input-group\" style=\"display: none;\">";
        // line 60
        echo ($context["search"] ?? null);
        echo "</div>
      <ul class=\"header_adress\">
            <li class=\"address\">";
        // line 62
        echo ($context["address"] ?? null);
        echo "</li>
            <li class=\"open\">";
        // line 63
        echo ($context["open"] ?? null);
        echo "</li>
            <li class=\"instagram\"><a href=\"\">Instagram</a></li>
            <li class=\"contact\"><a href=\"";
        // line 65
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"\"></i></a> <span class=\"\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
      </ul>
    </div>
    <div class=\"header\">
      <div class=\"logo\"></div>
      <div class=\"header_info\">
          <ul class=\"header_adress\">
            <li class=\"address\">";
        // line 72
        echo ($context["address"] ?? null);
        echo "</li>
            <li class=\"open\">";
        // line 73
        echo ($context["open"] ?? null);
        echo "</li>
            <li class=\"instagram\"><a href=\"\">Instagram</a></li>
            <li class=\"contact\"><a href=\"";
        // line 75
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"\"></i></a> <span class=\"\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
          </ul>
          <div class=\"header_bottom\">
            <ul class=\"header_menu\">
              <li class=\"header_item\"><a href=\"\">Hauptseite</a></li>
              <li class=\"header_item\"><a href=\"\">Über uns</a></li>
              <li class=\"header_item\"><a href=\"\">Rezensionen</a></li>
              <li class=\"swc\">
                <ul class=\"icons\">
                  <li class=\"icons__search\"  id=\"searchButton\"></li>
                  <li class=\"icons__wishlist\"><a href=\"";
        // line 85
        echo ($context["wishlist"] ?? null);
        echo "\"></a></li>
                  <li class=\"icons__cart\">";
        // line 86
        echo ($context["cart"] ?? null);
        echo "</li>
                </ul>
                <div id=\"search\" class=\"input-group\" style=\"display: none;\">";
        // line 88
        echo ($context["search"] ?? null);
        echo "</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
";
        // line 97
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mk/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 97,  242 => 88,  237 => 86,  233 => 85,  218 => 75,  213 => 73,  209 => 72,  197 => 65,  192 => 63,  188 => 62,  183 => 60,  177 => 57,  160 => 42,  152 => 40,  148 => 39,  137 => 37,  133 => 36,  130 => 35,  121 => 33,  117 => 32,  104 => 30,  100 => 29,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mk/template/common/header.twig", "");
    }
}
