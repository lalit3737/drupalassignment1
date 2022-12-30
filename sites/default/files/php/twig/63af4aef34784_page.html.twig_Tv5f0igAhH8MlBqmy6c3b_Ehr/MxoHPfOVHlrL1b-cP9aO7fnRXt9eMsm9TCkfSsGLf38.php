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

/* themes/custom/specbee/templates/page.html.twig */
class __TwigTemplate_d7fb9af835ea50a81e89714ba632e45d59d5ce2acb6456bf433b9087241da533 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('head', $context, $blocks);
        // line 116
        echo "
    ";
        // line 117
        $this->displayBlock('content', $context, $blocks);
        // line 147
        echo "
    ";
        // line 148
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 70
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 71) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 71)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 71))) {
            // line 72
            echo "<nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 72, $this->source), "html", null, true);
            echo " style=\"display: none;\">
  ";
            // line 73
            if (($context["container_navbar"] ?? null)) {
                // line 74
                echo "  <div class=\"container\">
    ";
            }
            // line 76
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
    ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
    ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 78)) {
                // line 79
                echo "    <div class=\"form-inline navbar-form float-right\">
      ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "
    </div>
    ";
            }
            // line 83
            echo "    ";
            if (($context["container_navbar"] ?? null)) {
                // line 84
                echo "  </div>
  ";
            }
            // line 86
            echo "  </nav>
  ";
        }
        // line 88
        echo "  <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 88, $this->source), "html", null, true);
        echo " style=\"display: none;\">
    ";
        // line 89
        if (($context["container_navbar"] ?? null)) {
            // line 90
            echo "    <div class=\"container\">
      ";
        }
        // line 92
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
      ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 93) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 93))) {
            // line 94
            echo "      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
        data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\"
        aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
      <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
        ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
        ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 99)) {
                // line 100
                echo "        <div class=\"form-inline navbar-form float-right\">
          ";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 104
            echo "      </div>
      ";
        }
        // line 106
        echo "      ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 107
            echo "      <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\"
        data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\"
        aria-label=\"Toggle navigation\"></button>
      ";
        }
        // line 111
        echo "      ";
        if (($context["container_navbar"] ?? null)) {
            // line 112
            echo "    </div>
    ";
        }
        // line 114
        echo "    </nav>
    ";
    }

    // line 117
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "    <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 118, $this->source), "html", null, true);
        echo "\">
      ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
      <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
        <main";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 121, $this->source), "html", null, true);
        echo ">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 125
        echo "          </section>
          <section class=\"conference__section\">
            ";
        // line 127
        $this->loadTemplate("@specbee/templates/conference-tabs.html.twig", "themes/custom/specbee/templates/page.html.twig", 127)->display($context);
        // line 128
        echo "          </section>
          </main>
          ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130)) {
            // line 131
            echo "          <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 131, $this->source), "html", null, true);
            echo ">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "
            </aside>
      </div>
      ";
        }
        // line 137
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 137)) {
            // line 138
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 138, $this->source), "html", null, true);
            echo ">
        <aside class=\"section\" role=\"complementary\">
          ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "
        </aside>
    </div>
    ";
        }
        // line 144
        echo "    </div>
    </div>
    ";
    }

    // line 148
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "    <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 149, $this->source), "html", null, true);
        echo "\">
      ";
        // line 150
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 150) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 150)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 150)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 150))) {
            // line 151
            echo "      <div class=\"site-footer__top clearfix\">
        ";
            // line 152
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
            echo "
        ";
            // line 153
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "
        ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
        ";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 158
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 158)) {
            // line 159
            echo "      <div class=\"site-footer__bottom\">
        ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 163
        echo "    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/specbee/templates/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  282 => 163,  276 => 160,  273 => 159,  270 => 158,  264 => 155,  260 => 154,  256 => 153,  252 => 152,  249 => 151,  247 => 150,  242 => 149,  238 => 148,  232 => 144,  225 => 140,  219 => 138,  216 => 137,  209 => 133,  203 => 131,  201 => 130,  197 => 128,  195 => 127,  191 => 125,  185 => 121,  180 => 119,  175 => 118,  171 => 117,  166 => 114,  162 => 112,  159 => 111,  153 => 107,  150 => 106,  146 => 104,  140 => 101,  137 => 100,  135 => 99,  131 => 98,  125 => 94,  123 => 93,  118 => 92,  114 => 90,  112 => 89,  107 => 88,  103 => 86,  99 => 84,  96 => 83,  90 => 80,  87 => 79,  85 => 78,  81 => 77,  76 => 76,  72 => 74,  70 => 73,  65 => 72,  63 => 71,  59 => 70,  55 => 148,  52 => 147,  50 => 117,  47 => 116,  45 => 70,  42 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/specbee/templates/page.html.twig", "C:\\xampp74\\htdocs\\drupalassignment1\\themes\\custom\\specbee\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 70, "if" => 71, "include" => 127);
        static $filters = array("escape" => 72);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'include'],
                ['escape'],
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
