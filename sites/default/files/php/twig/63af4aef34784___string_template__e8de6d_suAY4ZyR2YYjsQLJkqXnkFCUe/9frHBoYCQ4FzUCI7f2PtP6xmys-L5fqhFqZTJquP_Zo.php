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

/* __string_template__e8de6ddd705bc9858a28c1170d8be9692aa91052c7ce01e3c439308fd37a13e6 */
class __TwigTemplate_f1b05587e2ee831c7eba91409312ba3df29667bac230cec279cbe015fb8a9847 extends \Twig\Template
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
        echo "<div class=\"card conference__card\">
    <div class=\"conference__card-image\">
        <img src=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null), 3, $this->source), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 3, $this->source), "html", null, true);
        echo "\">
        <span class=\"conference__card-featured ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_type"] ?? null), 4, $this->source), "html", null, true);
        echo "\"></span>
        <span class=\"conference__card-subcription\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_subscription"] ?? null), 5, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"card-body conference__card-body\">
        <h5 class=\"card-title conference__card-title\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 8, $this->source), "html", null, true);
        echo "</h5>
        <ul class=\"list-unstyled conference__card-list\">
            <li><span class=\"conference__card-icon conference__card-icon--tag\"></span> ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_tags"] ?? null), 10, $this->source), "html", null, true);
        echo "</li>
            <li><span class=\"conference__card-icon conference__card-icon--date\"></span> ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_date"] ?? null), 11, $this->source), "html", null, true);
        echo "</li>
            <li><span class=\"conference__card-icon conference__card-icon--location\"></span> ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_location"] ?? null), 12, $this->source), "html", null, true);
        echo "</li>
        </ul>
        <div class=\"conference__card-footer\">
            <ul>
                <li><span class=\"conference__card-footer-icon conference__card-footer-icon--like\"></span></li>
                <li><span class=\"conference__card-footer-icon conference__card-footer-icon--download\"></span></li>
                <li><span class=\"conference__card-footer-icon conference__card-footer-icon--share\"></span></li>
                <li><a href=\"#\">View Details</a> </li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e8de6ddd705bc9858a28c1170d8be9692aa91052c7ce01e3c439308fd37a13e6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  68 => 11,  64 => 10,  59 => 8,  53 => 5,  49 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e8de6ddd705bc9858a28c1170d8be9692aa91052c7ce01e3c439308fd37a13e6", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
