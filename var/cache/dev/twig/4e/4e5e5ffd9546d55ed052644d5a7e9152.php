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

/* email/welcome.html.twig */
class __TwigTemplate_4dfb947af12baf146fa9fb48a4835304 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "email/email_template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/welcome.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/welcome.html.twig"));

        $this->parent = $this->loadTemplate("email/email_template.html.twig", "email/welcome.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<p>Наконец-таки ты с нами, дорогой <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 3, $this->source); })()), "toName", [], "any", false, false, false, 3), "html", null, true);
        echo "</b>.</p>
<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-primary\">
    <tbody>
    <tr>
        <td align=\"right\" class=\"image-column\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 8, $this->source); })()), "image", [0 => "@images/dinosaur-profile.jpg"], "method", false, false, false, 8), "html", null, true);
        echo "\" width=\"80\" height=\"80\">
        </td>
        <td align=\"left\">
            <p>
                Теперь ты можешь вместе с нами участвовать в обсуждении жизни динозавров.
                Научные исслодования про мезозойскую эру, сожительство с человеками и
                многое-многое другое ждет тебя в Динозаврлэнде!
            </p>
        </td>
    </tr>
    </tbody>
</table>
<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-primary\">
    <tbody>
    <tr>
        <td align=\"left\">
            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <tbody>
                <tr>
                    <td> <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_homepage");
        echo "\" target=\"_blank\">Перейти на сайт</a> </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "email/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  77 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'email/email_template.html.twig' %}
{% block content %}
<p>Наконец-таки ты с нами, дорогой <b>{{ email.toName }}</b>.</p>
<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-primary\">
    <tbody>
    <tr>
        <td align=\"right\" class=\"image-column\">
            <img src=\"{{ email.image('@images/dinosaur-profile.jpg') }}\" width=\"80\" height=\"80\">
        </td>
        <td align=\"left\">
            <p>
                Теперь ты можешь вместе с нами участвовать в обсуждении жизни динозавров.
                Научные исслодования про мезозойскую эру, сожительство с человеками и
                многое-многое другое ждет тебя в Динозаврлэнде!
            </p>
        </td>
    </tr>
    </tbody>
</table>
<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-primary\">
    <tbody>
    <tr>
        <td align=\"left\">
            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <tbody>
                <tr>
                    <td> <a href=\"{{ url('app_homepage') }}\" target=\"_blank\">Перейти на сайт</a> </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
{% endblock %}", "email/welcome.html.twig", "/home/life/www/skillbox/diplom/templates/email/welcome.html.twig");
    }
}
