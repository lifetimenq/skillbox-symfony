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

/* default_templates/columns_rows_title_paragraph_image.html.twig */
class __TwigTemplate_adedd8d94966238aac6d45be8b25acd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_templates/columns_rows_title_paragraph_image.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_templates/columns_rows_title_paragraph_image.html.twig"));

        // line 1
        echo "<h1 class=\"mt-4\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</h1>
<div class=\"media\">
    <img class=\"mr-3\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\" width=\"446\" height=\"250\" alt=\"\">
    <div class=\"media-body\">
        <p>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["paragraph"]) || array_key_exists("paragraph", $context) ? $context["paragraph"] : (function () { throw new RuntimeError('Variable "paragraph" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</p>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-sm-6\">
        <p>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["paragraph"]) || array_key_exists("paragraph", $context) ? $context["paragraph"] : (function () { throw new RuntimeError('Variable "paragraph" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-sm-6\">
        <p>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["paragraph"]) || array_key_exists("paragraph", $context) ? $context["paragraph"] : (function () { throw new RuntimeError('Variable "paragraph" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</p>
    </div>
</div>

<div class=\"media\">
    <div class=\"media-body\">
        <p>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["paragraph"]) || array_key_exists("paragraph", $context) ? $context["paragraph"] : (function () { throw new RuntimeError('Variable "paragraph" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</p>
    </div>
    <img class=\"ml-3\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" width=\"446\" height=\"250\" alt=\"\">
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default_templates/columns_rows_title_paragraph_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  78 => 20,  69 => 14,  63 => 11,  54 => 5,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1 class=\"mt-4\">{{ title }}</h1>
<div class=\"media\">
    <img class=\"mr-3\" src=\"{{ image }}\" width=\"446\" height=\"250\" alt=\"\">
    <div class=\"media-body\">
        <p>{{ paragraph }}</p>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-sm-6\">
        <p>{{ paragraph }}</p>
    </div>
    <div class=\"col-sm-6\">
        <p>{{ paragraph }}</p>
    </div>
</div>

<div class=\"media\">
    <div class=\"media-body\">
        <p>{{ paragraph }}</p>
    </div>
    <img class=\"ml-3\" src=\"{{ image }}\" width=\"446\" height=\"250\" alt=\"\">
</div>", "default_templates/columns_rows_title_paragraph_image.html.twig", "/home/life/www/skillbox/diplom/templates/default_templates/columns_rows_title_paragraph_image.html.twig");
    }
}
