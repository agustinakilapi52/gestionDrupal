<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/contrib/webform/templates/webform-help-support.html.twig */
class __TwigTemplate_08e6040872da7a84865980712f3bd42d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.help.support"), "html", null, true);
        yield "

<div class=\"webform-help-support\">
  <h2 class=\"webform-help-support__header\">";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Getting involved and support options"));
        yield " <span class=\"webform-help-support__header-more\">(<a href=\"https://www.drupal.org/project/webform\">more information</a>)</span></h2>
  <div class=\"webform-help-support__items\">
    <div class=\"webform-help-support__item\">
      <span class=\"webform-help-support__item-icon webform-help-support__item-icon--contribute\" id=\"contribute-info-account\"></span>
      <div class=\"webform-help-support__item-details\">
        <h3 class=\"webform-help-support__item-title\">";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Get involved"));
        yield "</h3>
        ";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Get involved in the Drupal community and the Webform module. Review a patch, write documentation, contribute code, volunteer at an event, and more..."));
        yield "<br/>
        <a href=\"https://drupal.org/contribute\" class=\"button button--small button--primary webform-help-support__button\">";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contribute"));
        yield "</a><br/>
        <em>";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open to all"));
        yield "</em>
      </div>
    </div>
    <div class=\"webform-help-support__item\">
      <span class=\"webform-help-support__item-icon webform-help-support__item-icon--join\" id=\"contribute-info-association\"></span>
      <div class=\"webform-help-support__item-details\">
        <h3 class=\"webform-help-support__item-title\">";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Drupal Association"));
        yield "</h3>
        ";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("The Drupal Association is an educational non-profit organization that tasks itself with fostering and supporting the Drupal software project, the community and its growth."));
        yield "<br/>
        <a href=\"https://www.drupal.org/association\" class=\"button button--small button--primary webform-help-support__button\">";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Join"));
        yield "</a><br/>
        <em>";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Starting at \$5 a month"));
        yield "</em>
      </div>
    </div>
    <div class=\"webform-help-support__item\">
      <span class=\"webform-help-support__item-icon webform-help-support__item-icon--fund\" id=\"contribute-info-membership\"></span>
      <div class=\"webform-help-support__item-details\">
        <h3 class=\"webform-help-support__item-title\">";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Fund development"));
        yield "</h3>
        ";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Help fund the day-to-day tasks required to maintain the Webform module. Funds are used to triage issues, resolve security issues, and tag new releases."));
        yield "<br/>
        <a href=\"https://opencollective.com/webform\" class=\"button button--small button--primary webform-help-support__button\">";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Fund"));
        yield "</a><br/>
        <em>";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Starting at \$5 a month"));
        yield "</em>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/webform/templates/webform-help-support.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  112 => 36,  108 => 35,  104 => 34,  100 => 33,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  50 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/webform/templates/webform-help-support.html.twig", "C:\\xampp\\htdocs\\gestionDrupal\\modules\\contrib\\webform\\templates\\webform-help-support.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7, "t" => 10);
        static $functions = array("attach_library" => 7);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                ['attach_library'],
                $this->source
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
