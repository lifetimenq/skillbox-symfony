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

/* dashboard/dashboard_profile.html.twig */
class __TwigTemplate_8713968a096e8e7421fa14705edc1cc4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard_profile.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/dashboard.html.twig", "dashboard/dashboard_profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\" xmlns=\"http://www.w3.org/1999/html\">
        <h1 class=\"mt-4\">Профиль</h1>
        <div class=\"row\">

            <div class=\"col-xl-6\">
                <div class=\"card my-4\">
                    <div class=\"card-body\">
                        <p><b>Ваш API токен:</b> <span id=\"apiToken\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["apiToken"]) || array_key_exists("apiToken", $context) ? $context["apiToken"] : (function () { throw new RuntimeError('Variable "apiToken" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</span>
                            <button class=\"btn btn-primary btn-sm ml-2\" onclick=\"copyContent()\"><i class=\"fa fa-clipboard\" aria-hidden=\"true\"></i></button>
                        </p>
                        <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_profile_update");
        echo "\">
                            <button class=\"btn btn-outline-primary\" name=\"newToken\" value=\"newToken\">Создать новый</button>
                        </form>
                    </div>
                </div>

                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "profile_changed"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 21
            echo "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [0 => "profile_update_error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 29
            echo "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 30
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", [0 => "email_confirm"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 37
            echo "                    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 38
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                <form action=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_profile_update");
        echo "\" id=\"update_profile\" method=\"post\">
                    <div class=\"form-label-group\">
                        <input type=\"text\" id=\"inputName\" name=\"input[Name]\" class=\"form-control\" placeholder=\"Ваше имя\"
                               required value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" autofocus>
                        <label for=\"inputName\">Ваше имя</label>
                    </div>
                    <div class=\"form-label-group\">
                        <input type=\"email\" id=\"inputEmail\" name=\"input[Email]\" class=\"form-control\"
                               placeholder=\"Ваш Email\" required value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\">
                        <label for=\"inputEmail\">Ваш Email</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"password\" id=\"inputPassword\" name=\"input[Password]\" class=\"form-control\"
                               placeholder=\"Пароль\">
                        <label for=\"inputPassword\">Пароль</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"password\" id=\"inputConfirmPassword\" name=\"input[ConfirmPassword]\"
                               class=\"form-control\" placeholder=\"Подтверждение пароля\">
                        <label for=\"inputConfirmPassword\">Подтверждение пароля</label>
                    </div>

                    <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Изменить</button>
                </form>
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/copy-to-clipboard.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/dashboard_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 79,  212 => 78,  202 => 77,  169 => 53,  161 => 48,  155 => 45,  152 => 44,  140 => 38,  137 => 37,  132 => 36,  120 => 30,  117 => 29,  112 => 28,  100 => 22,  97 => 21,  93 => 20,  84 => 14,  78 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/dashboard.html.twig' %}

{% block body %}
    <div class=\"container-fluid\" xmlns=\"http://www.w3.org/1999/html\">
        <h1 class=\"mt-4\">Профиль</h1>
        <div class=\"row\">

            <div class=\"col-xl-6\">
                <div class=\"card my-4\">
                    <div class=\"card-body\">
                        <p><b>Ваш API токен:</b> <span id=\"apiToken\">{{ apiToken }}</span>
                            <button class=\"btn btn-primary btn-sm ml-2\" onclick=\"copyContent()\"><i class=\"fa fa-clipboard\" aria-hidden=\"true\"></i></button>
                        </p>
                        <form action=\"{{ path('app_dashboard_profile_update') }}\">
                            <button class=\"btn btn-outline-primary\" name=\"newToken\" value=\"newToken\">Создать новый</button>
                        </form>
                    </div>
                </div>

                {% for flash_error in app.flashes('profile_changed') %}
                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        {{ flash_error }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}
                {% for flash_error in app.flashes('profile_update_error') %}
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        {{ flash_error }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}
                {% for flash_error in app.flashes('email_confirm') %}
                    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        {{ flash_error }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}

                <form action=\"{{ path('app_dashboard_profile_update') }}\" id=\"update_profile\" method=\"post\">
                    <div class=\"form-label-group\">
                        <input type=\"text\" id=\"inputName\" name=\"input[Name]\" class=\"form-control\" placeholder=\"Ваше имя\"
                               required value=\"{{ firstName }}\" autofocus>
                        <label for=\"inputName\">Ваше имя</label>
                    </div>
                    <div class=\"form-label-group\">
                        <input type=\"email\" id=\"inputEmail\" name=\"input[Email]\" class=\"form-control\"
                               placeholder=\"Ваш Email\" required value=\"{{ email }}\">
                        <label for=\"inputEmail\">Ваш Email</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"password\" id=\"inputPassword\" name=\"input[Password]\" class=\"form-control\"
                               placeholder=\"Пароль\">
                        <label for=\"inputPassword\">Пароль</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"password\" id=\"inputConfirmPassword\" name=\"input[ConfirmPassword]\"
                               class=\"form-control\" placeholder=\"Подтверждение пароля\">
                        <label for=\"inputConfirmPassword\">Подтверждение пароля</label>
                    </div>

                    <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Изменить</button>
                </form>
            </div>
        </div>
    </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/copy-to-clipboard.js') }}\"></script>
{% endblock %}", "dashboard/dashboard_profile.html.twig", "/home/life/www/skillbox/diplom/templates/dashboard/dashboard_profile.html.twig");
    }
}
