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

/* @specbee/templates/conference-tabs.html.twig */
class __TwigTemplate_66ce92dea163724ccee688c9501c1adeae578a7814af8dc73a9c34a21223f6ca extends \Twig\Template
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
        echo "<div class=\"conference__header text-center\">
    <h2>Lorem ipsum dolor. Ismet</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
</div>

<ul class=\"nav nav-tabs conference__tab\" id=\"conferencesTab\" role=\"tablist\">
    <li class=\"nav-item\" role=\"presentation\">
        <button class=\"nav-link active\" id=\"featured-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#featured\" type=\"button\"
            role=\"tab\" aria-controls=\"featured\" aria-selected=\"true\">Featured Conferences</button>
    </li>
    <li class=\"nav-item\" role=\"presentation\">
        <button class=\"nav-link\" id=\"recommended-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#recommended\" type=\"button\"
            role=\"tab\" aria-controls=\"recommended\" aria-selected=\"false\">Recommended Conferences</button>
    </li>
    <li class=\"nav-item\" role=\"presentation\">
        <button class=\"nav-link\" id=\"past-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#past\" type=\"button\" role=\"tab\"
            aria-controls=\"past\" aria-selected=\"false\">Past Conferences</button>
    </li>
</ul>

<div class=\"tab-content conference__tab-content\" id=\"conferencesTabContent\">
    <div class=\"tab-pane fade show active\" id=\"featured\" role=\"tabpanel\" aria-labelledby=\"featured-tab\">
        ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("conference", "block_1", "Featured"), "html", null, true);
        echo "
    </div>
    <div class=\"tab-pane fade\" id=\"recommended\" role=\"tabpanel\" aria-labelledby=\"recommended-tab\">
        ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("conference", "block_1", "Recommended"), "html", null, true);
        echo "
    </div>
    <div class=\"tab-pane fade\" id=\"past\" role=\"tabpanel\" aria-labelledby=\"past-tab\">
        ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("conference", "block_1", "Past"), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@specbee/templates/conference-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  69 => 26,  63 => 23,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@specbee/templates/conference-tabs.html.twig", "C:\\xampp74\\htdocs\\drupalassignment1\\themes\\custom\\specbee\\templates\\conference-tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 23);
        static $functions = array("drupal_view" => 23);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['drupal_view']
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
