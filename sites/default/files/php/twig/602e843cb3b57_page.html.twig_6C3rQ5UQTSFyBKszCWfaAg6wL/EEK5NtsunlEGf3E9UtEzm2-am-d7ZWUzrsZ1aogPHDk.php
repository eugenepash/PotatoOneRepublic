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

/* themes/bootstrap_barrio/subtheme/templates/layout/page.html.twig */
class __TwigTemplate_9b62c239404eae6eeb02881efad2b642c946b4fb2f58681f86fc3fe806d3df77 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">


    <header class=\"head header\" id=\"header\" role=\"banner\" aria-label=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      <div class=\"d-flex justify-content-center align-items-center row row-md p-3 px-md-5 mb-2 bg-white\">
        ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
      </div>
    </header>





    ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 84)) {
            // line 85
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 86, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 91
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 91)) {
            // line 92
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 99
            echo "    ";
        }
        // line 100
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 101
        $this->displayBlock('content', $context, $blocks);
        // line 128
        echo "    </div>
    ";
        // line 129
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 129) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 129)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 129))) {
            // line 130
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 131, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
          ";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "
          ";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 138
        echo "    <footer class=\"site-footer\">
      ";
        // line 139
        $this->displayBlock('footer', $context, $blocks);
        // line 156
        echo "    </footer>
  </div>
</div>
";
    }

    // line 92
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 94, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 101
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 102, $this->source), "html", null, true);
        echo "\">
          ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 105, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 111)) {
            // line 112
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 112, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 118
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 118)) {
            // line 119
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 119, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 125
        echo "          </div>
        </div>
      ";
    }

    // line 139
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 140, $this->source), "html", null, true);
        echo "\">
          ";
        // line 141
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 141) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 141)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 141)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 141))) {
            // line 142
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 143
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo "
              ";
            // line 144
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
              ";
            // line 145
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
            echo "
              ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 149
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 149)) {
            // line 150
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 154
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/subtheme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 154,  253 => 151,  250 => 150,  247 => 149,  241 => 146,  237 => 145,  233 => 144,  229 => 143,  226 => 142,  224 => 141,  219 => 140,  215 => 139,  209 => 125,  202 => 121,  196 => 119,  193 => 118,  186 => 114,  180 => 112,  178 => 111,  172 => 108,  166 => 105,  161 => 103,  156 => 102,  152 => 101,  144 => 95,  140 => 94,  137 => 93,  133 => 92,  126 => 156,  124 => 139,  121 => 138,  114 => 134,  110 => 133,  106 => 132,  102 => 131,  99 => 130,  97 => 129,  94 => 128,  92 => 101,  89 => 100,  86 => 99,  83 => 92,  80 => 91,  73 => 87,  69 => 86,  66 => 85,  64 => 84,  53 => 76,  48 => 74,  42 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_barrio/subtheme/templates/layout/page.html.twig", "C:\\Users\\jekpa\\Desktop\\OpenServer\\domains\\localhost\\themes\\bootstrap_barrio\\subtheme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 84, "block" => 92);
        static $filters = array("t" => 74, "escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['t', 'escape'],
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
