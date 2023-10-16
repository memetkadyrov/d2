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

/* mk/template/common/footer.twig */
class __TwigTemplate_9587038ed05f1445138e0b1f2c5722f7 extends Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"footer_box\">
    <div class=\"footer\">
      <div class=\"footer_info\">
        <ul class=\"footer_info_menu\">
          <li class=\"footer_info_item\"><a href=\"/index.php\">Hauptseite</a></li>
          <li class=\"footer_info_item\"><a href=\"about-us\">Über uns</a></li>
          <li class=\"footer_info_item\"><a href=\"rezensionen\">Rezensionen</a></li>
        </ul>
      </div>
      <div class=\"footer_cat\">
        <span class=\"footer_cat_title\"><a href=\"#\">Dekoration der Feier</a></span>
        <ul class=\"footer_category\">
          <li class=\"category_item\"><a href=\"#\">Hochzeit</a></li>
          <li class=\"category_item\"><a href=\"#\">Jubiläum</a></li>
          <li class=\"category_item\"><a href=\"#\">Kinderarzt</a></li>
        </ul>
      </div>
      <div class=\"footer_cat\">
        <span class=\"footer_cat_title\"><a href=\"#\">Dekoration der Feier</a></span>
        <ul class=\"footer_category\">
          <li class=\"category_item\"><a href=\"#\">Hochzeit</a></li>
          <li class=\"category_item\"><a href=\"#\">Jubiläum</a></li>
          <li class=\"category_item\"><a href=\"#\">Kinderarzt</a></li>
          <li class=\"category_item\"><a href=\"#\">Kinderarzt</a></li>
          <li class=\"category_item\"><a href=\"#\">Kinderarzt</a></li>
        </ul>
      </div>
      <div class=\"footer_contact\">
        <span class=\"footer_title\">Kontakt</span>
        <ul class=\"footer_menu\">
          <li class=\"footer_item address\">";
        // line 33
        echo ($context["address"] ?? null);
        echo "</li>
          <li class=\"footer_item open\">";
        // line 34
        echo ($context["open"] ?? null);
        echo "</li>
          <li class=\"footer_item contact\"><a href=\"";
        // line 35
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"\"></i></a> <span class=\"\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
          <li class=\"footer_item inst\"><a href=\"\">Instagram</a></li>
        </ul>
      </div>
    </div>  
    <div class=\"copyright\">©2023 Flowers by Veronika & Viktoria Henze. Grimma</div>
    <div class=\"information\">
      <div class=\"list-unstyled\">
      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 44
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 44);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 44);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </div>
    </div>  
  </div>
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 50
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 50);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 50);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 50);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 53
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
</body></html>";
    }

    public function getTemplateName()
    {
        return "mk/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 55,  133 => 53,  129 => 52,  116 => 50,  112 => 49,  107 => 46,  96 => 44,  92 => 43,  79 => 35,  75 => 34,  71 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mk/template/common/footer.twig", "");
    }
}
