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

/* default_templates/two_columns_paragraph.html.twig */
class __TwigTemplate_5e9cd69a8071c4f0d601c618acc17c48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_templates/two_columns_paragraph.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_templates/two_columns_paragraph.html.twig"));

        // line 1
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["paragraphs"]) || array_key_exists("paragraphs", $context) ? $context["paragraphs"] : (function () { throw new RuntimeError('Variable "paragraphs" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
  </div>
  <div class=\"col-sm-6\">
    ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["paragraphs"]) || array_key_exists("paragraphs", $context) ? $context["paragraphs"] : (function () { throw new RuntimeError('Variable "paragraphs" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "
  </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default_templates/two_columns_paragraph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
  <div class=\"col-sm-6\">
    {{ paragraphs }}
  </div>
  <div class=\"col-sm-6\">
    {{ paragraphs }}
  </div>
</div>", "default_templates/two_columns_paragraph.html.twig", "/home/life/www/skillbox/diplom/templates/default_templates/two_columns_paragraph.html.twig");
    }
}
