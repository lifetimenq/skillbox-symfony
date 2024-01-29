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

/* dashboard/dashboard.html.twig */
class __TwigTemplate_42bf01af2f50a566d66711b105d46f7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Личный кабинет. ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "<div class=\"d-flex\" id=\"wrapper\">

    <div class=\"bg-light border-right\" id=\"sidebar-wrapper\">
        <div class=\"sidebar-heading\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_with_title.png"), "html", null, true);
        echo "\" width=\"200\"></a></div>
        <div class=\"list-group list-group-flush\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 12
        if (((isset($context["menuActive"]) || array_key_exists("menuActive", $context) ? $context["menuActive"] : (function () { throw new RuntimeError('Variable "menuActive" does not exist.', 12, $this->source); })()) == "dashboard")) {
            echo "active";
        } else {
            echo "bg-light";
        }
        echo "\">Рабочий стол</a>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_profile");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 14
        if (((isset($context["menuActive"]) || array_key_exists("menuActive", $context) ? $context["menuActive"] : (function () { throw new RuntimeError('Variable "menuActive" does not exist.', 14, $this->source); })()) == "profile")) {
            echo "active";
        } else {
            echo "bg-light";
        }
        echo "\">Профиль</a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_subscription");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 16
        if (((isset($context["menuActive"]) || array_key_exists("menuActive", $context) ? $context["menuActive"] : (function () { throw new RuntimeError('Variable "menuActive" does not exist.', 16, $this->source); })()) == "subscription")) {
            echo "active";
        } else {
            echo "bg-light";
        }
        echo "\">Подписка</a>
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_create_article");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 18
        if (((isset($context["menuActive"]) || array_key_exists("menuActive", $context) ? $context["menuActive"] : (function () { throw new RuntimeError('Variable "menuActive" does not exist.', 18, $this->source); })()) == "create_article")) {
            echo "active";
        } else {
            echo "bg-light";
        }
        echo "\">Создать статью</a>
            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_history");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 20
        if (((isset($context["menuActive"]) || array_key_exists("menuActive", $context) ? $context["menuActive"] : (function () { throw new RuntimeError('Variable "menuActive" does not exist.', 20, $this->source); })()) == "history")) {
            echo "active";
        } else {
            echo "bg-light";
        }
        echo "\">История статей</a>
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_templates");
        echo "\"
               class=\"list-group-item list-group-item-action ";
        // line 22
        if (((isset($context["menuActive"]) || array_key_exists("menuActive", $context) ? $context["menuActive"] : (function () { throw new RuntimeError('Variable "menuActive" does not exist.', 22, $this->source); })()) == "modules")) {
            echo "active";
        } else {
            echo "bg-light";
        }
        echo "\">Шаблоны генератора</a>
        </div>
    </div>

    <div id=\"page-content-wrapper\">

        <nav class=\"navbar navbar-expand-lg navbar-light bg-light border-bottom\">
            <button class=\"btn btn-primary\" id=\"menu-toggle\"><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i></button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Выйти</a>
                    </li>
                </ul>
            </div>
        </nav>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"container-fluid\">
            <h1 class=\"mt-4\">Рабочий стол</h1>
            <div class=\"row\">
                <div class=\"col-xl-8 border-right\">
                    ";
        // line 46
        if (((isset($context["expiresIn"]) || array_key_exists("expiresIn", $context) ? $context["expiresIn"] : (function () { throw new RuntimeError('Variable "expiresIn" does not exist.', 46, $this->source); })()) != null)) {
            // line 47
            echo "                        <div class=\"alert alert-warning\" role=\"alert\">
                            Подписка <b>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "</b> истекает через ";
            echo twig_escape_filter($this->env, (isset($context["expiresIn"]) || array_key_exists("expiresIn", $context) ? $context["expiresIn"] : (function () { throw new RuntimeError('Variable "expiresIn" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 51
        echo "                    <div class=\"card-columns dashboard\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Всего создано статей
                            </div>
                            <div class=\"card-body\">
                                <h1 class=\"card-title\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["totalArticles"]) || array_key_exists("totalArticles", $context) ? $context["totalArticles"] : (function () { throw new RuntimeError('Variable "totalArticles" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "</h1>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Статей создано в этом месяце
                            </div>
                            <div class=\"card-body\">
                                <h1 class=\"card-title\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["articlesThisMonth"]) || array_key_exists("articlesThisMonth", $context) ? $context["articlesThisMonth"] : (function () { throw new RuntimeError('Variable "articlesThisMonth" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</h1>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Ваш уровень подписки
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</h4>
                                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_subscription");
        echo "\"
                                   class=\"btn btn-primary\">";
        // line 75
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 75, $this->source); })()) != "PRO")) {
            echo "Улучшить";
        } else {
            echo "Тарифы";
        }
        echo "</a>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Последняя статья
                            </div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
        // line 83
        if ((isset($context["latestArticle"]) || array_key_exists("latestArticle", $context) ? $context["latestArticle"] : (function () { throw new RuntimeError('Variable "latestArticle" does not exist.', 83, $this->source); })())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["latestArticle"]) || array_key_exists("latestArticle", $context) ? $context["latestArticle"] : (function () { throw new RuntimeError('Variable "latestArticle" does not exist.', 83, $this->source); })()), "title", [], "any", false, false, false, 83), "html", null, true);
        }
        echo "</h5>
                                <p class=\"card-text\">";
        // line 84
        if ((isset($context["latestArticle"]) || array_key_exists("latestArticle", $context) ? $context["latestArticle"] : (function () { throw new RuntimeError('Variable "latestArticle" does not exist.', 84, $this->source); })())) {
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["latestArticle"]) || array_key_exists("latestArticle", $context) ? $context["latestArticle"] : (function () { throw new RuntimeError('Variable "latestArticle" does not exist.', 84, $this->source); })()), "article", [], "any", false, false, false, 84)), "truncate", [0 => 200, 1 => "..."], "method", false, false, false, 84)), "html", null, true);
        } else {
            echo "Нет сгенерированых статей";
        }
        echo "</p>
                                ";
        // line 85
        if ((isset($context["latestArticle"]) || array_key_exists("latestArticle", $context) ? $context["latestArticle"] : (function () { throw new RuntimeError('Variable "latestArticle" does not exist.', 85, $this->source); })())) {
            echo "<a
                                    href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_article_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["latestArticle"]) || array_key_exists("latestArticle", $context) ? $context["latestArticle"] : (function () { throw new RuntimeError('Variable "latestArticle" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\"
                                    class=\"btn btn-primary\">Перейти</a>";
        }
        // line 88
        echo "                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Новая статья
                            </div>
                            <div class=\"card-body\">
                                <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_create_article");
        echo "\" class=\"btn btn-primary\">Создать</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 112,  367 => 111,  357 => 110,  339 => 108,  317 => 95,  308 => 88,  303 => 86,  299 => 85,  291 => 84,  285 => 83,  270 => 75,  266 => 74,  262 => 73,  251 => 65,  240 => 57,  232 => 51,  224 => 48,  221 => 47,  219 => 46,  213 => 42,  203 => 41,  187 => 34,  168 => 22,  164 => 21,  156 => 20,  152 => 19,  144 => 18,  140 => 17,  132 => 16,  128 => 15,  120 => 14,  116 => 13,  108 => 12,  104 => 11,  97 => 9,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Личный кабинет. {{ parent() }}{% endblock %}

{% block navbar %}
<div class=\"d-flex\" id=\"wrapper\">

    <div class=\"bg-light border-right\" id=\"sidebar-wrapper\">
        <div class=\"sidebar-heading\"><a href=\"{{ path('app_homepage') }}\"><img src=\"{{ asset('img/logo_with_title.png') }}\" width=\"200\"></a></div>
        <div class=\"list-group list-group-flush\">
            <a href=\"{{ path('app_dashboard') }}\"
               class=\"list-group-item list-group-item-action {% if menuActive == 'dashboard' %}active{% else %}bg-light{% endif %}\">Рабочий стол</a>
            <a href=\"{{ path('app_dashboard_profile') }}\"
               class=\"list-group-item list-group-item-action {% if menuActive == 'profile' %}active{% else %}bg-light{% endif %}\">Профиль</a>
            <a href=\"{{ path('app_dashboard_subscription') }}\"
               class=\"list-group-item list-group-item-action {% if menuActive == 'subscription' %}active{% else %}bg-light{% endif %}\">Подписка</a>
            <a href=\"{{ path('app_dashboard_create_article') }}\"
               class=\"list-group-item list-group-item-action {% if menuActive == 'create_article' %}active{% else %}bg-light{% endif %}\">Создать статью</a>
            <a href=\"{{ path('app_dashboard_history') }}\"
               class=\"list-group-item list-group-item-action {% if menuActive == 'history' %}active{% else %}bg-light{% endif %}\">История статей</a>
            <a href=\"{{ path('app_dashboard_templates') }}\"
               class=\"list-group-item list-group-item-action {% if menuActive == 'modules' %}active{% else %}bg-light{% endif %}\">Шаблоны генератора</a>
        </div>
    </div>

    <div id=\"page-content-wrapper\">

        <nav class=\"navbar navbar-expand-lg navbar-light bg-light border-bottom\">
            <button class=\"btn btn-primary\" id=\"menu-toggle\"><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i></button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Выйти</a>
                    </li>
                </ul>
            </div>
        </nav>
        {% endblock %}

        {% block body %}
        <div class=\"container-fluid\">
            <h1 class=\"mt-4\">Рабочий стол</h1>
            <div class=\"row\">
                <div class=\"col-xl-8 border-right\">
                    {% if expiresIn != null %}
                        <div class=\"alert alert-warning\" role=\"alert\">
                            Подписка <b>{{ subscription }}</b> истекает через {{ expiresIn }}
                        </div>
                    {% endif %}
                    <div class=\"card-columns dashboard\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Всего создано статей
                            </div>
                            <div class=\"card-body\">
                                <h1 class=\"card-title\">{{ totalArticles }}</h1>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Статей создано в этом месяце
                            </div>
                            <div class=\"card-body\">
                                <h1 class=\"card-title\">{{ articlesThisMonth }}</h1>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Ваш уровень подписки
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">{{ subscription }}</h4>
                                <a href=\"{{ path('app_dashboard_subscription') }}\"
                                   class=\"btn btn-primary\">{% if subscription != 'PRO' %}Улучшить{% else %}Тарифы{% endif %}</a>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Последняя статья
                            </div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{% if latestArticle %}{{ latestArticle.title }}{% endif %}</h5>
                                <p class=\"card-text\">{% if latestArticle %}{{ latestArticle.article|u.truncate(200, '...')|striptags }}{% else %}Нет сгенерированых статей{% endif %}</p>
                                {% if latestArticle %}<a
                                    href=\"{{ path('app_dashboard_article_detail', { id: latestArticle.id }) }}\"
                                    class=\"btn btn-primary\">Перейти</a>{% endif %}
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                Новая статья
                            </div>
                            <div class=\"card-body\">
                                <a href=\"{{ path('app_dashboard_create_article') }}\" class=\"btn btn-primary\">Создать</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{% endblock %}

{% block footer %}{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/dashboard.js') }}\"></script>
{% endblock %}", "dashboard/dashboard.html.twig", "/home/life/www/skillbox/diplom/templates/dashboard/dashboard.html.twig");
    }
}
