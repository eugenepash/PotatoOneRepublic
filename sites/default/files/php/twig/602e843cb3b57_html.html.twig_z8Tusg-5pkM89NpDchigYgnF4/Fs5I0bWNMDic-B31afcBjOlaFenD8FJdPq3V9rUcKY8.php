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

/* themes/bootstrap_barrio/subtheme/templates/layout/html.html.twig */
class __TwigTemplate_44b44649bdd3abeaea01751e3102bde1de2c4693f69897d5bdfadfccd1e3af47 extends \Twig\Template
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
        // line 28
        $context["body_classes"] = [0 => ((        // line 29
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 30
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 30, $this->source))))), 2 => ((        // line 31
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 31, $this->source)))) : ("")), 3 => ((        // line 32
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 35
        echo "<!DOCTYPE html>
<html";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 36, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 38, $this->source));
        echo "\">
    <title>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 39, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 40, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source));
        echo "\">
  </head>

  <body";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo " style=\"background-color: white;\">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>



    <!-- HEAD---------------------------- -->
    <div class=\"head\">
      <div class=\"d-flex justify-content-center align-items-center row p-3 px-md-5 mb-2 bg-white\">
        <nav class=\"my-md-0 mr-md-3 col-sm text-left\">
";
        // line 58
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
        </nav>
        <h4 class=\"my-2  font-weight-normal col-fluid text-center\"> ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "</h4>

        <nav class=\"my-2 my-md-0 m-md-3 col-sm text-right\">

";
        // line 65
        echo "          <a type=\"button\" class=\"btn btn-bw m-1\" href='https://vk.com/eugenepash'>VK</a>
          <a type=\"button\" class=\"btn btn-bw m-1\" href=\"https://t.me/eugenepash\">Telegram</a>
          <a type=\"button\" class=\"btn btn-bw m-1\" href=\"mailto:jekpash@gmail.com\">Email</a>
        </nav>
      </div>
    </div>


    <!-- CLOSE HEAD--------------------- -->

    <!-- head mobile ----------------------------->

    <div class=\"headMobile\">



      <nav class=\"navbar navbar-light bg-black\">
        <div class=\"container-fluid\">
          <button class=\"navBurger navbar-toggler d-flex justify-content-center align-items-center\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            <p class='m-0 p-0 ml-2'>Меню</p>
          </button>
          <h5 class=\"my-3 font-weight-normal col-fluid text-center\">eugenepash/blog</h5>
        </div>
      </nav>

      <div class=\"collapse\" id=\"navbarToggleExternalContent\">
        <div class=\"subnav  p-4\">
          <a type=\"button\" class=\"btn text-white m-1\" href='#'>Обо мне</a>
          <a type=\"button\" class=\"btn text-white m-1\" href='#'>Контакты</a>
          <a type=\"button\" class=\"btn text-white m-1\" href='#'>Проекты</a>
          <a type=\"button\" class=\"btn text-white m-1\" href='https://vk.com/eugenepash'>VK</a>
          <a type=\"button\" class=\"btn text-white m-1\" href=\"https://t.me/eugenepash\">Telegram</a>
          <a type=\"button\" class=\"btn text-white m-1\" href=\"mailto:jekpash@gmail.com\">Email</a>
        </div>
      </div>
    </div>
    <!-- cancel head mobile ----------------------------->


";
        // line 106
        echo "
";
        // line 109
        echo "
";
        // line 111
        echo "
";
        // line 119
        echo "
";
        // line 132
        echo "
";
        // line 145
        echo "
";
        // line 158
        echo "
";
        // line 168
        echo "

";
        // line 173
        echo "
";
        // line 177
        echo "
";
        // line 181
        echo "


";
        // line 189
        echo "
";
        // line 191
        echo "




    ";
        // line 196
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 196, $this->source), "html", null, true);
        echo "
    ";
        // line 197
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 197, $this->source), "html", null, true);
        echo "
    ";
        // line 198
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 198, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 199
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 199, $this->source));
        echo "\">
  </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/subtheme/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 199,  197 => 198,  193 => 197,  189 => 196,  182 => 191,  179 => 189,  174 => 181,  171 => 177,  168 => 173,  164 => 168,  161 => 158,  158 => 145,  155 => 132,  152 => 119,  149 => 111,  146 => 109,  143 => 106,  101 => 65,  94 => 60,  88 => 58,  76 => 46,  71 => 44,  65 => 41,  61 => 40,  57 => 39,  53 => 38,  48 => 36,  45 => 35,  43 => 32,  42 => 31,  41 => 30,  40 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_barrio/subtheme/templates/layout/html.html.twig", "C:\\Users\\jekpa\\Desktop\\OpenServer\\domains\\localhost\\themes\\bootstrap_barrio\\subtheme\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28);
        static $filters = array("clean_class" => 30, "escape" => 36, "raw" => 38, "safe_join" => 39, "t" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
