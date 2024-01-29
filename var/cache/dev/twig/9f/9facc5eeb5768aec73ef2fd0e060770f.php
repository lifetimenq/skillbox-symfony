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

/* dashboard/dashboard_create_article.html.twig */
class __TwigTemplate_3ce3feec54512a7bd722298ae2047532 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'generated_article' => [$this, 'block_generated_article'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard_create_article.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard_create_article.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/dashboard.html.twig", "dashboard/dashboard_create_article.html.twig", 1);
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
        <h1 class=\"mt-4\">Создание статьи</h1>
        <div class=\"row\">
            <div class=\"col-xl-6\">
                ";
        // line 8
        if ((((isset($context["check2hours"]) || array_key_exists("check2hours", $context) ? $context["check2hours"] : (function () { throw new RuntimeError('Variable "check2hours" does not exist.', 8, $this->source); })()) == false) && ((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 8, $this->source); })()) != "PRO"))) {
            // line 9
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        Превышен лимит создания статей, чтобы снять лимит <a
                                href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_subscription");
            echo "\">улучшите подписку</a>
                    </div>
                ";
        }
        // line 14
        echo "                ";
        if (((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 14, $this->source); })()) == "FREE")) {
            // line 15
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">
                        Для того, чтобы использовать все возможности генератора, <a
                                href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_subscription");
            echo "\">улучшите подписку</a>
                    </div>
                ";
        }
        // line 20
        echo "                ";
        if (((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()) != "")) {
            // line 21
            echo "                <details>
                    <summary>Развернуть форму</summary>
                    ";
        }
        // line 24
        echo "
                    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "form-signin"]]);
        // line 27
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 28, $this->source); })()), "_token", [], "any", false, false, false, 28), 'row');
        echo "

                    <div class=\"form-group\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 31, $this->source); })()), "theme", [], "any", false, false, false, 31), 'label');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 32, $this->source); })()), "theme", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Тематика"]]);
        // line 36
        echo "
                    </div>

                    <div class=\"form-label-group\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Заголовок статьи", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 44), "value", [], "any", false, true, false, 44), "title", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 44), "value", [], "any", false, true, false, 44), "title", [], "any", false, false, false, 44)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 44), "value", [], "any", false, true, false, 44), "title", [], "any", false, false, false, 44)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "get", [0 => "title"], "method", false, false, false, 44)))]]);
        // line 45
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46), 'label');
        echo "
                    </div>
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <p class=\"card-title\">Ключевое слово</p>
                            <div class=\"form-label-group\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 52, $this->source); })()), "keyword0", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Ключевое слово", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 56), "value", [], "any", false, true, false, 56), "keyword0", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 56), "value", [], "any", false, true, false, 56), "keyword0", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 56), "value", [], "any", false, true, false, 56), "keyword0", [], "any", false, false, false, 56)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "query", [], "any", false, false, false, 56), "get", [0 => "keyword0"], "method", false, false, false, 56)))]]);
        // line 57
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 58, $this->source); })()), "keyword0", [], "any", false, false, false, 58), 'label');
        echo "
                            </div>
                            <div class=\"form-label-group\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 61, $this->source); })()), "keyword1", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Родительный падеж", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 65), "value", [], "any", false, true, false, 65), "keyword1", [], "any", true, true, false, 65) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 65), "value", [], "any", false, true, false, 65), "keyword1", [], "any", false, false, false, 65)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 65), "value", [], "any", false, true, false, 65), "keyword1", [], "any", false, false, false, 65)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "query", [], "any", false, false, false, 65), "get", [0 => "keyword1"], "method", false, false, false, 65)))]]);
        // line 66
        echo "
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 67, $this->source); })()), "keyword1", [], "any", false, false, false, 67), 'label');
        echo "
                            </div>
                            <div class=\"form-label-group\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 70, $this->source); })()), "keyword2", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Дательный падеж", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 74), "value", [], "any", false, true, false, 74), "keyword2", [], "any", true, true, false, 74) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 74), "value", [], "any", false, true, false, 74), "keyword2", [], "any", false, false, false, 74)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 74), "value", [], "any", false, true, false, 74), "keyword2", [], "any", false, false, false, 74)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "query", [], "any", false, false, false, 74), "get", [0 => "keyword2"], "method", false, false, false, 74)))]]);
        // line 75
        echo "
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 76, $this->source); })()), "keyword2", [], "any", false, false, false, 76), 'label');
        echo "
                            </div>
                            <div class=\"form-label-group\">
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 79, $this->source); })()), "keyword3", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Винительный падеж", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 83
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 83), "value", [], "any", false, true, false, 83), "keyword3", [], "any", true, true, false, 83) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 83), "value", [], "any", false, true, false, 83), "keyword3", [], "any", false, false, false, 83)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 83), "value", [], "any", false, true, false, 83), "keyword3", [], "any", false, false, false, 83)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "query", [], "any", false, false, false, 83), "get", [0 => "keyword3"], "method", false, false, false, 83)))]]);
        // line 84
        echo "
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 85, $this->source); })()), "keyword3", [], "any", false, false, false, 85), 'label');
        echo "
                            </div>
                            <div class=\"form-label-group\">
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 88, $this->source); })()), "keyword4", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Творительный падеж", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 92
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 92), "value", [], "any", false, true, false, 92), "keyword4", [], "any", true, true, false, 92) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 92), "value", [], "any", false, true, false, 92), "keyword4", [], "any", false, false, false, 92)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 92), "value", [], "any", false, true, false, 92), "keyword4", [], "any", false, false, false, 92)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "query", [], "any", false, false, false, 92), "get", [0 => "keyword4"], "method", false, false, false, 92)))]]);
        // line 93
        echo "
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 94, $this->source); })()), "keyword4", [], "any", false, false, false, 94), 'label');
        echo "
                            </div>
                            <div class=\"form-label-group\">
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 97, $this->source); })()), "keyword5", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Предложный падеж", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 101), "value", [], "any", false, true, false, 101), "keyword5", [], "any", true, true, false, 101) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 101), "value", [], "any", false, true, false, 101), "keyword5", [], "any", false, false, false, 101)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 101), "value", [], "any", false, true, false, 101), "keyword5", [], "any", false, false, false, 101)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "request", [], "any", false, false, false, 101), "query", [], "any", false, false, false, 101), "get", [0 => "keyword5"], "method", false, false, false, 101)))]]);
        // line 102
        echo "
                                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 103, $this->source); })()), "keyword5", [], "any", false, false, false, 103), 'label');
        echo "
                            </div>
                            <div class=\"form-label-group\">
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 106, $this->source); })()), "keyword6", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Множественное число", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 110
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 110), "value", [], "any", false, true, false, 110), "keyword6", [], "any", true, true, false, 110) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 110), "value", [], "any", false, true, false, 110), "keyword6", [], "any", false, false, false, 110)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 110), "value", [], "any", false, true, false, 110), "keyword6", [], "any", false, false, false, 110)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "query", [], "any", false, false, false, 110), "get", [0 => "keyword6"], "method", false, false, false, 110)))]]);
        // line 111
        echo "
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 112, $this->source); })()), "keyword6", [], "any", false, false, false, 112), 'label');
        echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-label-group\">
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 120, $this->source); })()), "sizeFrom", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Размер статьи от", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 124
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 124), "value", [], "any", false, true, false, 124), "sizeFrom", [], "any", true, true, false, 124) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 124), "value", [], "any", false, true, false, 124), "sizeFrom", [], "any", false, false, false, 124)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 124), "value", [], "any", false, true, false, 124), "sizeFrom", [], "any", false, false, false, 124)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "request", [], "any", false, false, false, 124), "query", [], "any", false, false, false, 124), "get", [0 => "sizeFrom"], "method", false, false, false, 124)))]]);
        // line 125
        echo "
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 126, $this->source); })()), "sizeFrom", [], "any", false, false, false, 126), 'label');
        echo "
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"form-label-group\">
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 131, $this->source); })()), "sizeTo", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "до", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 135
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 135), "value", [], "any", false, true, false, 135), "sizeTo", [], "any", true, true, false, 135) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 135), "value", [], "any", false, true, false, 135), "sizeTo", [], "any", false, false, false, 135)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 135), "value", [], "any", false, true, false, 135), "sizeTo", [], "any", false, false, false, 135)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "query", [], "any", false, false, false, 135), "get", [0 => "sizeTo"], "method", false, false, false, 135)))]]);
        // line 136
        echo "
                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 137, $this->source); })()), "sizeTo", [], "any", false, false, false, 137), 'label');
        echo "
                            </div>
                        </div>
                    </div>


                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <p class=\"card-title\">Продвигаемые слова</p>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-label-group\">
                                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 149, $this->source); })()), "word1", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Продвигаемое слово 1", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 153
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 153), "value", [], "any", false, true, false, 153), "word1", [], "any", true, true, false, 153) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 153), "value", [], "any", false, true, false, 153), "word1", [], "any", false, false, false, 153)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 153), "value", [], "any", false, true, false, 153), "word1", [], "any", false, false, false, 153)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "request", [], "any", false, false, false, 153), "query", [], "any", false, false, false, 153), "get", [0 => "word1"], "method", false, false, false, 153)))]]);
        // line 154
        echo "
                                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 155, $this->source); })()), "word1", [], "any", false, false, false, 155), 'label');
        echo "
                                    </div>
                                </div>
                                <div class=\"col\">
                                    <div class=\"form-label-group\">
                                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 160, $this->source); })()), "word1Count", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "кол-во", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 164
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 164), "value", [], "any", false, true, false, 164), "word1Count", [], "any", true, true, false, 164) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 164), "value", [], "any", false, true, false, 164), "word1Count", [], "any", false, false, false, 164)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 164), "value", [], "any", false, true, false, 164), "word1Count", [], "any", false, false, false, 164)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "request", [], "any", false, false, false, 164), "query", [], "any", false, false, false, 164), "get", [0 => "word1Count"], "method", false, false, false, 164)))]]);
        // line 165
        echo "
                                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 166, $this->source); })()), "word1Count", [], "any", false, false, false, 166), 'label');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-label-group\">
                                        ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 173, $this->source); })()), "word2", [], "any", false, false, false, 173), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Продвигаемое слово 2", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 177
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 177), "value", [], "any", false, true, false, 177), "word2", [], "any", true, true, false, 177) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 177), "value", [], "any", false, true, false, 177), "word2", [], "any", false, false, false, 177)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 177), "value", [], "any", false, true, false, 177), "word2", [], "any", false, false, false, 177)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "request", [], "any", false, false, false, 177), "query", [], "any", false, false, false, 177), "get", [0 => "word2"], "method", false, false, false, 177)))]]);
        // line 178
        echo "
                                        ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 179, $this->source); })()), "word2", [], "any", false, false, false, 179), 'label');
        echo "
                                    </div>
                                </div>
                                <div class=\"col\">
                                    <div class=\"form-label-group\">
                                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 184, $this->source); })()), "word2Count", [], "any", false, false, false, 184), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "кол-во", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 188
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 188), "value", [], "any", false, true, false, 188), "word2Count", [], "any", true, true, false, 188) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 188), "value", [], "any", false, true, false, 188), "word2Count", [], "any", false, false, false, 188)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 188), "value", [], "any", false, true, false, 188), "word2Count", [], "any", false, false, false, 188)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "request", [], "any", false, false, false, 188), "query", [], "any", false, false, false, 188), "get", [0 => "word2Count"], "method", false, false, false, 188)))]]);
        // line 189
        echo "
                                        ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 190, $this->source); })()), "word2Count", [], "any", false, false, false, 190), 'label');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>Изображения</p>
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\"
                               aria-controls=\"home\"
                               aria-selected=\"true\">Загрузить</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\"
                               aria-controls=\"profile\"
                               aria-selected=\"false\">Ссылка</a>
                        </li>
                    </ul>

                    <br/>
                    <div class=\"form-group\">
                        <div class=\"tab-content\" id=\"myTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 215, $this->source); })()), "images", [], "any", false, false, false, 215), 'widget');
        echo "
                                ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 216, $this->source); })()), "images", [], "any", false, false, false, 216), 'label');
        echo "
                            </div>
                            <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                                <div class=\"form-label-group\">
                                    ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 220, $this->source); })()), "imageLink", [], "any", false, false, false, 220), 'widget', ["attr" => ["class" => "form-control", "autofocus" => "autofocus", "placeholder" => "Ссылки через запятую", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 224
($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 224), "value", [], "any", false, true, false, 224), "imageLink", [], "any", true, true, false, 224) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 224), "value", [], "any", false, true, false, 224), "imageLink", [], "any", false, false, false, 224)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleCreateForm"] ?? null), "vars", [], "any", false, true, false, 224), "value", [], "any", false, true, false, 224), "imageLink", [], "any", false, false, false, 224)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "request", [], "any", false, false, false, 224), "query", [], "any", false, false, false, 224), "get", [0 => "imageLink"], "method", false, false, false, 224)))]]);
        // line 225
        echo "
                                    ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 226, $this->source); })()), "imageLink", [], "any", false, false, false, 226), 'label');
        echo "
                                </div>
                            </div>
                        </div>


                    </div>

                    <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\" ";
        // line 234
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 234, $this->source); })()) == true)) {
            echo "disabled";
        }
        echo ">
                        Создать
                    </button>
                    </form>
                    ";
        // line 238
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleCreateForm"]) || array_key_exists("articleCreateForm", $context) ? $context["articleCreateForm"] : (function () { throw new RuntimeError('Variable "articleCreateForm" does not exist.', 238, $this->source); })()), 'form_end');
        echo "
                    ";
        // line 239
        if (((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 239, $this->source); })()) != "")) {
            // line 240
            echo "                </details>
                ";
        }
        // line 242
        echo "            </div>
        </div>

        <hr>

        ";
        // line 247
        $this->displayBlock('generated_article', $context, $blocks);
        // line 320
        echo "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 247
    public function block_generated_article($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generated_article"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generated_article"));

        // line 248
        echo "            ";
        if (((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 248, $this->source); })()) != "")) {
            // line 249
            echo "                <h2 class=\"mt-4\">Ваша статья</h2>
                <hr>

                ";
            // line 252
            $this->loadTemplate(twig_template_from_string($this->env, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 252, $this->source); })())), "dashboard/dashboard_create_article.html.twig", 252)->display($context);
            // line 253
            echo "
            ";
        } elseif ((        // line 254
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 254, $this->source); })()) == "")) {
            // line 255
            echo "                <div class=\"row\">

                    <div class=\"col-xl-6\">

                        <h1 class=\"mt-4\" align=\"center\"><i class=\"fas fa-exclamation-circle btn-outline-warning\"></i>
                            Демонстрационная статья</h1>

                        <h3>Нейросеть научилась взламывать пароли с пугающей скоростью</h3>
                        <div class=\"media\">
                            <img class=\"mr-3\" src=\"";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/example1.jpg"), "html", null, true);
            echo "\" width=\"250\" alt=\"\">
                            <div class=\"media-body\">
                                <p>Фирма по кибербезопасности Home Security Heroes опубликовала исследование <b>ВАШЕ
                                        СЛОВО</b>, в котором показала работу инструмента на основе искусственного
                                    интеллекта PassGAN для проверки более 15 680 000 паролей. Они смогли подобрать 51%
                                    распространённых паролей менее чем за минуту.</p>
                                <p>PassGAN потребовалось менее часа, чтобы с помощью брутфорса взломать 65% паролей, а
                                    71% был подобран менее чем за <b>ВАШЕ СЛОВО</b> день и 81% — менее чем за месяц.</p>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <p>Исследователи составили таблицу, которая показывает, какие пароли являются самыми
                                    сложными. <b>ВАШЕ СЛОВО</b> Если человек использует 12-значный пароль, состоящий из
                                    прописных и строчных букв, инструменту может потребоваться 289 лет, чтобы взломать
                                    его. При добавлении цифр этот срок увеличивается до 2000 лет, а символов — до 30 000
                                    лет. </p>
                            </div>
                            <div class=\"col-sm-6\">
                                <p>В Home Security Heroes рекомендуют <b>ВАШЕ СЛОВО</b> использовать пароли, состоящие
                                    не менее чем из 12 символов, и включающие не только цифры. Они встроили в свой сайт
                                    инструмент, где можно написать случайный пароль, и ресурс сообщит, сколько времени
                                    займёт его взлом. </p>
                            </div>
                        </div>

                        <div class=\"media\">
                            <div class=\"media-body\">
                                <p>Ранее исследователи из Университета Глазго разработали систему ThermoSecure, которая
                                    способна мгновенно угадывать пароль, анализируя тепловой отпечаток кончиков пальцев
                                    на клавиатуре или экране смартфона. Для этого они обучили искусственный интеллект
                                    <b>ВАШЕ СЛОВО</b> эффективно читать изображения и делать обоснованные предположения
                                    о паролях из подсказок тепловых сигнатур с использованием вероятностной модели.
                                    Оказалось, что ThermoSecure способна раскрыть 86% паролей, если тепловизионный
                                    снимок был сделан в течение 20 секунд, 76%, если прошло 30 секунд и 62% спустя 60
                                    секунд после ввода.</p>
                            </div>
                            <img class=\"ml-3\" src=\"";
            // line 302
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/example2.jpg"), "html", null, true);
            echo "\" width=\"350\" alt=\"\">
                        </div>

                        <h3>Half-Life: Alyx стала полностью проходима без VR-шлема</h3>
                        <p>Расширение Half-Life: Alyx NoVR теперь позволяет пройти <b>ВАШЕ СЛОВО</b> игру целиком без
                            шлема виртуальной реальности. Авторы отмечают, что проект находится на стадии «раннего
                            доступа», так что пока не лишён шероховатостей.</p>
                        <p>Разработчикам удалось перенести управление всеми возможностями шутера для мышки и клавиатуры
                            — включая гравиперчатки, улучшения оружия и всё прочее. В течение этого года команда
                            планирует довести релиз до версии 1.0, доработав интерфейс, <b>ВАШЕ СЛОВО</b> анимации,
                            взаимодействие с окружением и прочие детали.</p>
                        <p>Скачать модификацию можно по
                            <a href=\"https://www.moddb.com/mods/half-life-alyx-novr/downloads\">этой ссылке</a>. <b>ВАШЕ СЛОВО</b></p>
                    </div>
                </div>
            ";
        }
        // line 318
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/dashboard_create_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 318,  497 => 302,  456 => 264,  445 => 255,  443 => 254,  440 => 253,  438 => 252,  433 => 249,  430 => 248,  420 => 247,  407 => 320,  405 => 247,  398 => 242,  394 => 240,  392 => 239,  388 => 238,  379 => 234,  368 => 226,  365 => 225,  363 => 224,  362 => 220,  355 => 216,  351 => 215,  323 => 190,  320 => 189,  318 => 188,  317 => 184,  309 => 179,  306 => 178,  304 => 177,  303 => 173,  293 => 166,  290 => 165,  288 => 164,  287 => 160,  279 => 155,  276 => 154,  274 => 153,  273 => 149,  258 => 137,  255 => 136,  253 => 135,  252 => 131,  244 => 126,  241 => 125,  239 => 124,  238 => 120,  227 => 112,  224 => 111,  222 => 110,  221 => 106,  215 => 103,  212 => 102,  210 => 101,  209 => 97,  203 => 94,  200 => 93,  198 => 92,  197 => 88,  191 => 85,  188 => 84,  186 => 83,  185 => 79,  179 => 76,  176 => 75,  174 => 74,  173 => 70,  167 => 67,  164 => 66,  162 => 65,  161 => 61,  155 => 58,  152 => 57,  150 => 56,  149 => 52,  140 => 46,  137 => 45,  135 => 44,  134 => 40,  128 => 36,  126 => 32,  122 => 31,  116 => 28,  113 => 27,  111 => 25,  108 => 24,  103 => 21,  100 => 20,  94 => 17,  90 => 15,  87 => 14,  81 => 11,  77 => 9,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/dashboard.html.twig' %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Создание статьи</h1>
        <div class=\"row\">
            <div class=\"col-xl-6\">
                {% if check2hours == false and subscription != 'PRO' %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        Превышен лимит создания статей, чтобы снять лимит <a
                                href=\"{{ path('app_dashboard_subscription') }}\">улучшите подписку</a>
                    </div>
                {% endif %}
                {% if subscription == 'FREE' %}
                    <div class=\"alert alert-warning\" role=\"alert\">
                        Для того, чтобы использовать все возможности генератора, <a
                                href=\"{{ path('app_dashboard_subscription') }}\">улучшите подписку</a>
                    </div>
                {% endif %}
                {% if article != '' %}
                <details>
                    <summary>Развернуть форму</summary>
                    {% endif %}

                    {{ form_start(articleCreateForm, {
                        'attr': {'class': 'form-signin'}}
                    ) }}
                    {{ form_row(articleCreateForm._token) }}

                    <div class=\"form-group\">
                        {{ form_label(articleCreateForm.theme) }}
                        {{ form_widget(articleCreateForm.theme, {
                            'attr': {'class': 'form-control',
                                'autofocus': 'autofocus',
                                'placeholder': 'Тематика' }}
                        ) }}
                    </div>

                    <div class=\"form-label-group\">
                        {{ form_widget(articleCreateForm.title, {
                            'attr': {'class': 'form-control',
                                'autofocus': 'autofocus',
                                'placeholder': 'Заголовок статьи',
                                'value': articleCreateForm.vars.value.title ?? app.request.query.get('title') }}
                        ) }}
                        {{ form_label(articleCreateForm.title) }}
                    </div>
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <p class=\"card-title\">Ключевое слово</p>
                            <div class=\"form-label-group\">
                                {{ form_widget(articleCreateForm.keyword0, {
                                    'attr': {'class': 'form-control',
                                        'autofocus': 'autofocus',
                                        'placeholder': 'Ключевое слово',
                                        'value': articleCreateForm.vars.value.keyword0 ?? app.request.query.get('keyword0') }}
                                ) }}
                                {{ form_label(articleCreateForm.keyword0) }}
                            </div>
                            <div class=\"form-label-group\">
                                {{ form_widget(articleCreateForm.keyword1, {
                                    'attr': {'class': 'form-control',
                                        'autofocus': 'autofocus',
                                        'placeholder': 'Родительный падеж',
                                        'value': articleCreateForm.vars.value.keyword1 ?? app.request.query.get('keyword1') }}
                                ) }}
                                {{ form_label(articleCreateForm.keyword1) }}
                            </div>
                            <div class=\"form-label-group\">
                                {{ form_widget(articleCreateForm.keyword2, {
                                    'attr': {'class': 'form-control',
                                        'autofocus': 'autofocus',
                                        'placeholder': 'Дательный падеж',
                                        'value': articleCreateForm.vars.value.keyword2 ?? app.request.query.get('keyword2') }}
                                ) }}
                                {{ form_label(articleCreateForm.keyword2) }}
                            </div>
                            <div class=\"form-label-group\">
                                {{ form_widget(articleCreateForm.keyword3, {
                                    'attr': {'class': 'form-control',
                                        'autofocus': 'autofocus',
                                        'placeholder': 'Винительный падеж',
                                        'value': articleCreateForm.vars.value.keyword3 ?? app.request.query.get('keyword3') }}
                                ) }}
                                {{ form_label(articleCreateForm.keyword3) }}
                            </div>
                            <div class=\"form-label-group\">
                                {{ form_widget(articleCreateForm.keyword4, {
                                    'attr': {'class': 'form-control',
                                        'autofocus': 'autofocus',
                                        'placeholder': 'Творительный падеж',
                                        'value': articleCreateForm.vars.value.keyword4 ?? app.request.query.get('keyword4') }}
                                ) }}
                                {{ form_label(articleCreateForm.keyword4) }}
                            </div>
                            <div class=\"form-label-group\">
                                {{ form_widget(articleCreateForm.keyword5, {
                                    'attr': {'class': 'form-control',
                                        'autofocus': 'autofocus',
                                        'placeholder': 'Предложный падеж',
                                        'value': articleCreateForm.vars.value.keyword5 ?? app.request.query.get('keyword5') }}
                                ) }}
                                {{ form_label(articleCreateForm.keyword5) }}
                            </div>
                            <div class=\"form-label-group\">
                                {{ form_widget(articleCreateForm.keyword6, {
                                    'attr': {'class': 'form-control',
                                        'autofocus': 'autofocus',
                                        'placeholder': 'Множественное число',
                                        'value': articleCreateForm.vars.value.keyword6 ?? app.request.query.get('keyword6') }}
                                ) }}
                                {{ form_label(articleCreateForm.keyword6) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-label-group\">
                                {{ form_widget(articleCreateForm.sizeFrom, {
                                    'attr': {'class': 'form-control',
                                        'autofocus': 'autofocus',
                                        'placeholder': 'Размер статьи от',
                                        'value': articleCreateForm.vars.value.sizeFrom ?? app.request.query.get('sizeFrom') }}
                                ) }}
                                {{ form_label(articleCreateForm.sizeFrom) }}
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"form-label-group\">
                                {{ form_widget(articleCreateForm.sizeTo, {
                                    'attr': {'class': 'form-control',
                                        'autofocus': 'autofocus',
                                        'placeholder': 'до',
                                        'value': articleCreateForm.vars.value.sizeTo ?? app.request.query.get('sizeTo') }}
                                ) }}
                                {{ form_label(articleCreateForm.sizeTo) }}
                            </div>
                        </div>
                    </div>


                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <p class=\"card-title\">Продвигаемые слова</p>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-label-group\">
                                        {{ form_widget(articleCreateForm.word1, {
                                            'attr': {'class': 'form-control',
                                                'autofocus': 'autofocus',
                                                'placeholder': 'Продвигаемое слово 1',
                                                'value': articleCreateForm.vars.value.word1 ?? app.request.query.get('word1') }}
                                        ) }}
                                        {{ form_label(articleCreateForm.word1) }}
                                    </div>
                                </div>
                                <div class=\"col\">
                                    <div class=\"form-label-group\">
                                        {{ form_widget(articleCreateForm.word1Count, {
                                            'attr': {'class': 'form-control',
                                                'autofocus': 'autofocus',
                                                'placeholder': 'кол-во',
                                                'value': articleCreateForm.vars.value.word1Count ?? app.request.query.get('word1Count') }}
                                        ) }}
                                        {{ form_label(articleCreateForm.word1Count) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-label-group\">
                                        {{ form_widget(articleCreateForm.word2, {
                                            'attr': {'class': 'form-control',
                                                'autofocus': 'autofocus',
                                                'placeholder': 'Продвигаемое слово 2',
                                                'value': articleCreateForm.vars.value.word2 ?? app.request.query.get('word2') }}
                                        ) }}
                                        {{ form_label(articleCreateForm.word2) }}
                                    </div>
                                </div>
                                <div class=\"col\">
                                    <div class=\"form-label-group\">
                                        {{ form_widget(articleCreateForm.word2Count, {
                                            'attr': {'class': 'form-control',
                                                'autofocus': 'autofocus',
                                                'placeholder': 'кол-во',
                                                'value': articleCreateForm.vars.value.word2Count ?? app.request.query.get('word2Count') }}
                                        ) }}
                                        {{ form_label(articleCreateForm.word2Count) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>Изображения</p>
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\"
                               aria-controls=\"home\"
                               aria-selected=\"true\">Загрузить</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\"
                               aria-controls=\"profile\"
                               aria-selected=\"false\">Ссылка</a>
                        </li>
                    </ul>

                    <br/>
                    <div class=\"form-group\">
                        <div class=\"tab-content\" id=\"myTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                {{ form_widget(articleCreateForm.images) }}
                                {{ form_label(articleCreateForm.images) }}
                            </div>
                            <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                                <div class=\"form-label-group\">
                                    {{ form_widget(articleCreateForm.imageLink, {
                                        'attr': {'class': 'form-control',
                                            'autofocus': 'autofocus',
                                            'placeholder': 'Ссылки через запятую',
                                            'value': articleCreateForm.vars.value.imageLink ?? app.request.query.get('imageLink') }}
                                    ) }}
                                    {{ form_label(articleCreateForm.imageLink) }}
                                </div>
                            </div>
                        </div>


                    </div>

                    <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\" {% if disabled == true %}disabled{% endif %}>
                        Создать
                    </button>
                    </form>
                    {{ form_end(articleCreateForm) }}
                    {% if article != '' %}
                </details>
                {% endif %}
            </div>
        </div>

        <hr>

        {% block generated_article %}
            {% if article != '' %}
                <h2 class=\"mt-4\">Ваша статья</h2>
                <hr>

                {% include template_from_string(article) %}

            {% elseif article == '' %}
                <div class=\"row\">

                    <div class=\"col-xl-6\">

                        <h1 class=\"mt-4\" align=\"center\"><i class=\"fas fa-exclamation-circle btn-outline-warning\"></i>
                            Демонстрационная статья</h1>

                        <h3>Нейросеть научилась взламывать пароли с пугающей скоростью</h3>
                        <div class=\"media\">
                            <img class=\"mr-3\" src=\"{{ asset('img/example1.jpg') }}\" width=\"250\" alt=\"\">
                            <div class=\"media-body\">
                                <p>Фирма по кибербезопасности Home Security Heroes опубликовала исследование <b>ВАШЕ
                                        СЛОВО</b>, в котором показала работу инструмента на основе искусственного
                                    интеллекта PassGAN для проверки более 15 680 000 паролей. Они смогли подобрать 51%
                                    распространённых паролей менее чем за минуту.</p>
                                <p>PassGAN потребовалось менее часа, чтобы с помощью брутфорса взломать 65% паролей, а
                                    71% был подобран менее чем за <b>ВАШЕ СЛОВО</b> день и 81% — менее чем за месяц.</p>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <p>Исследователи составили таблицу, которая показывает, какие пароли являются самыми
                                    сложными. <b>ВАШЕ СЛОВО</b> Если человек использует 12-значный пароль, состоящий из
                                    прописных и строчных букв, инструменту может потребоваться 289 лет, чтобы взломать
                                    его. При добавлении цифр этот срок увеличивается до 2000 лет, а символов — до 30 000
                                    лет. </p>
                            </div>
                            <div class=\"col-sm-6\">
                                <p>В Home Security Heroes рекомендуют <b>ВАШЕ СЛОВО</b> использовать пароли, состоящие
                                    не менее чем из 12 символов, и включающие не только цифры. Они встроили в свой сайт
                                    инструмент, где можно написать случайный пароль, и ресурс сообщит, сколько времени
                                    займёт его взлом. </p>
                            </div>
                        </div>

                        <div class=\"media\">
                            <div class=\"media-body\">
                                <p>Ранее исследователи из Университета Глазго разработали систему ThermoSecure, которая
                                    способна мгновенно угадывать пароль, анализируя тепловой отпечаток кончиков пальцев
                                    на клавиатуре или экране смартфона. Для этого они обучили искусственный интеллект
                                    <b>ВАШЕ СЛОВО</b> эффективно читать изображения и делать обоснованные предположения
                                    о паролях из подсказок тепловых сигнатур с использованием вероятностной модели.
                                    Оказалось, что ThermoSecure способна раскрыть 86% паролей, если тепловизионный
                                    снимок был сделан в течение 20 секунд, 76%, если прошло 30 секунд и 62% спустя 60
                                    секунд после ввода.</p>
                            </div>
                            <img class=\"ml-3\" src=\"{{ asset('img/example2.jpg') }}\" width=\"350\" alt=\"\">
                        </div>

                        <h3>Half-Life: Alyx стала полностью проходима без VR-шлема</h3>
                        <p>Расширение Half-Life: Alyx NoVR теперь позволяет пройти <b>ВАШЕ СЛОВО</b> игру целиком без
                            шлема виртуальной реальности. Авторы отмечают, что проект находится на стадии «раннего
                            доступа», так что пока не лишён шероховатостей.</p>
                        <p>Разработчикам удалось перенести управление всеми возможностями шутера для мышки и клавиатуры
                            — включая гравиперчатки, улучшения оружия и всё прочее. В течение этого года команда
                            планирует довести релиз до версии 1.0, доработав интерфейс, <b>ВАШЕ СЛОВО</b> анимации,
                            взаимодействие с окружением и прочие детали.</p>
                        <p>Скачать модификацию можно по
                            <a href=\"https://www.moddb.com/mods/half-life-alyx-novr/downloads\">этой ссылке</a>. <b>ВАШЕ СЛОВО</b></p>
                    </div>
                </div>
            {% endif %}

        {% endblock %}

    </div>
</div>
{% endblock %}", "dashboard/dashboard_create_article.html.twig", "/home/life/www/skillbox/diplom/templates/dashboard/dashboard_create_article.html.twig");
    }
}
