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

/* dashboard/dashboard_subscription.html.twig */
class __TwigTemplate_cc680a533a3fca7297fe771c20edfe2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard_subscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard_subscription.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/dashboard.html.twig", "dashboard/dashboard_subscription.html.twig", 1);
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
        echo "    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Подписка</h1>
        <div class=\"row\">
            <div class=\"col-xl-8\">
                ";
        // line 8
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 8, $this->source); })()) != "FREE")) {
            // line 9
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    Подписка <b>";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</b> оформлена до ";
            echo twig_escape_filter($this->env, (isset($context["expiresAt"]) || array_key_exists("expiresAt", $context) ? $context["expiresAt"] : (function () { throw new RuntimeError('Variable "expiresAt" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 13
        echo "                <section class=\"pricing py-2 row\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <div class=\"card mb-5 mb-lg-0\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title ";
        // line 19
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 19, $this->source); })()) != "FREE")) {
            echo "text-muted";
        }
        echo " text-uppercase text-center";
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 19, $this->source); })()) == "FREE")) {
            echo " current text-warning";
        }
        echo "\">";
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 19, $this->source); })()) == "FREE")) {
            echo "<i class=\"fas fa-check\"></i>";
        }
        echo "FREE</h5>
                                        <h6 class=\"card-price text-center\">\$0<span class=\"period\">/неделя</span></h6>
                                        <hr>
                                        <ul class=\"fa-ul\">
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Создание двух статей за 2 часа</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Базовые возможности генератора</li>
                                            <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fas fa-times\"></i></span>Продвинутые возможности генератора</li>
                                            <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fas fa-times\"></i></span>Свои шаблоны</li>
                                        </ul>
                                        ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FREE")) {
            // line 29
            echo "                                            <a href=\"#\" class=\"btn btn-block btn-secondary text-uppercase\" disabled>Текущая подписка</a>
                                        ";
        }
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"card mb-5 mb-lg-0\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title ";
        // line 37
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 37, $this->source); })()) != "PLUS")) {
            echo "text-muted";
        }
        echo " text-uppercase text-center";
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 37, $this->source); })()) == "PLUS")) {
            echo " current text-warning";
        }
        echo "\">";
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 37, $this->source); })()) == "PLUS")) {
            echo "<i class=\"fas fa-check\"></i>";
        }
        echo "PLUS</h5>
                                        <h6 class=\"card-price text-center\">\$9<span class=\"period\">/неделя</span></h6>
                                        <hr>
                                        <ul class=\"fa-ul\">
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Создание двух статей за 2 часа</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Базовые возможности генератора</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Продвинутые возможности генератора</li>
                                            <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fas fa-times\"></i></span>Свои шаблоны</li>
                                        </ul>
                                        ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLUS")) {
            // line 47
            echo "                                            <a href=\"#\" class=\"btn btn-block btn-secondary text-uppercase\" disabled>Текущая подписка</a>
                                        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FREE")) {
            // line 49
            echo "                                            <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_subscription_order");
            echo "\" method=\"post\">
                                                <input type=\"hidden\" value=\"PLUS\" name=\"order_subscription\">
                                                <button class=\"btn btn-block btn-primary text-uppercase\">Оформить</button>
                                            </form>
                                        ";
        }
        // line 54
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title ";
        // line 60
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 60, $this->source); })()) != "PRO")) {
            echo "text-muted";
        }
        echo " text-uppercase text-center";
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 60, $this->source); })()) == "PRO")) {
            echo " current text-warning";
        }
        echo "\">";
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 60, $this->source); })()) == "PRO")) {
            echo "<i class=\"fas fa-check\"></i>";
        }
        echo "PRO</h5>
                                        <h6 class=\"card-price text-center\">\$49<span class=\"period\">/неделя</span></h6>
                                        <hr>
                                        <ul class=\"fa-ul\">
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span><strong>Безлимитная генерация статей для вашего аккаунта</strong></li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Базовые возможности генератора</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Продвинутые возможности генератора</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Свои шаблоны</li>
                                        </ul>
                                        ";
        // line 69
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            // line 70
            echo "                                            <a href=\"#\" class=\"btn btn-block btn-secondary text-uppercase\" disabled>Текущая подписка</a>
                                        ";
        } elseif (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLUS") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FREE"))) {
            // line 72
            echo "                                            <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_subscription_order");
            echo "\" method=\"post\">
                                                <input type=\"hidden\" value=\"PRO\" name=\"order_subscription\">
                                                <button class=\"btn btn-block btn-primary text-uppercase\">Оформить</button>
                                            </form>
                                        ";
        }
        // line 77
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/dashboard_subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 77,  204 => 72,  200 => 70,  198 => 69,  176 => 60,  168 => 54,  159 => 49,  155 => 47,  153 => 46,  131 => 37,  123 => 31,  119 => 29,  117 => 28,  95 => 19,  87 => 13,  79 => 10,  76 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/dashboard.html.twig' %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Подписка</h1>
        <div class=\"row\">
            <div class=\"col-xl-8\">
                {% if subscription != 'FREE' %}
                <div class=\"alert alert-success\" role=\"alert\">
                    Подписка <b>{{ subscription }}</b> оформлена до {{ expiresAt }}
                </div>
                {% endif %}
                <section class=\"pricing py-2 row\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <div class=\"card mb-5 mb-lg-0\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title {% if subscription != 'FREE' %}text-muted{% endif %} text-uppercase text-center{% if subscription == 'FREE' %} current text-warning{% endif %}\">{% if subscription == 'FREE' %}<i class=\"fas fa-check\"></i>{% endif %}FREE</h5>
                                        <h6 class=\"card-price text-center\">\$0<span class=\"period\">/неделя</span></h6>
                                        <hr>
                                        <ul class=\"fa-ul\">
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Создание двух статей за 2 часа</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Базовые возможности генератора</li>
                                            <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fas fa-times\"></i></span>Продвинутые возможности генератора</li>
                                            <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fas fa-times\"></i></span>Свои шаблоны</li>
                                        </ul>
                                        {% if is_granted('ROLE_FREE') %}
                                            <a href=\"#\" class=\"btn btn-block btn-secondary text-uppercase\" disabled>Текущая подписка</a>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"card mb-5 mb-lg-0\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title {% if subscription != 'PLUS' %}text-muted{% endif %} text-uppercase text-center{% if subscription == 'PLUS' %} current text-warning{% endif %}\">{% if subscription == 'PLUS' %}<i class=\"fas fa-check\"></i>{% endif %}PLUS</h5>
                                        <h6 class=\"card-price text-center\">\$9<span class=\"period\">/неделя</span></h6>
                                        <hr>
                                        <ul class=\"fa-ul\">
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Создание двух статей за 2 часа</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Базовые возможности генератора</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Продвинутые возможности генератора</li>
                                            <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fas fa-times\"></i></span>Свои шаблоны</li>
                                        </ul>
                                        {% if is_granted('ROLE_PLUS') %}
                                            <a href=\"#\" class=\"btn btn-block btn-secondary text-uppercase\" disabled>Текущая подписка</a>
                                        {% elseif is_granted('ROLE_FREE') %}
                                            <form action=\"{{ path('app_dashboard_subscription_order') }}\" method=\"post\">
                                                <input type=\"hidden\" value=\"PLUS\" name=\"order_subscription\">
                                                <button class=\"btn btn-block btn-primary text-uppercase\">Оформить</button>
                                            </form>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title {% if subscription != 'PRO' %}text-muted{% endif %} text-uppercase text-center{% if subscription == 'PRO' %} current text-warning{% endif %}\">{% if subscription == 'PRO' %}<i class=\"fas fa-check\"></i>{% endif %}PRO</h5>
                                        <h6 class=\"card-price text-center\">\$49<span class=\"period\">/неделя</span></h6>
                                        <hr>
                                        <ul class=\"fa-ul\">
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span><strong>Безлимитная генерация статей для вашего аккаунта</strong></li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Базовые возможности генератора</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Продвинутые возможности генератора</li>
                                            <li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>Свои шаблоны</li>
                                        </ul>
                                        {% if is_granted('ROLE_PRO') %}
                                            <a href=\"#\" class=\"btn btn-block btn-secondary text-uppercase\" disabled>Текущая подписка</a>
                                        {% elseif is_granted(\"ROLE_PLUS\") or is_granted(\"ROLE_FREE\") %}
                                            <form action=\"{{ path('app_dashboard_subscription_order') }}\" method=\"post\">
                                                <input type=\"hidden\" value=\"PRO\" name=\"order_subscription\">
                                                <button class=\"btn btn-block btn-primary text-uppercase\">Оформить</button>
                                            </form>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "dashboard/dashboard_subscription.html.twig", "/home/life/www/skillbox/diplom/templates/dashboard/dashboard_subscription.html.twig");
    }
}
