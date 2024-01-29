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

/* try.html.twig */
class __TwigTemplate_a9ce11c42ea2977a19d25953ab87ab29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "try.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "try.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "try.html.twig", 1);
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

        echo "Тест драйв. ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header class=\"masthead text-white text-center\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-9 mx-auto\">
                    <h1 class=\"mb-5\">Создай уникальную статью идеально подходящую для вашего бизнеса, сайта или проекта!</h1>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class=\"container my-5\">
            <div class=\"row\">
                <div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">

                    <h2 class=\"card-title text-center mb-4\">Создание статьи</h2>

                    ";
        // line 24
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 24, $this->source); })()) == true)) {
            // line 25
            echo "                        <div class=\"alert alert-info\" role=\"alert\">
                            <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Зарегистрируйтесь</a>, чтобы получить доступ к расширенному функционалу генератора
                        </div>
                    ";
        }
        // line 29
        echo "
                    <form class=\"form-signin\" action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_try");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"try\" value=\"try\">
                        <div class=\"form-label-group\">
                            <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" placeholder=\"Заголовок статьи\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "request", [], "any", false, false, false, 33), "get", [0 => "title"], "method", false, false, false, 33), "html", null, true);
        echo "\" ";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 33, $this->source); })()) == true)) {
            echo "disabled";
        }
        echo " required>
                            <label for=\"title\">Заголовок статьи</label>
                        </div>
                        <div class=\"form-label-group\">
                            <input type=\"text\" id=\"word1\" name=\"word1\" class=\"form-control\" placeholder=\"Продвигаемое слово\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "request", [], "any", false, false, false, 37), "get", [0 => "word1"], "method", false, false, false, 37), "html", null, true);
        echo "\" ";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 37, $this->source); })()) == true)) {
            echo "disabled";
        }
        echo " required>
                            <label for=\"word1\">Продвигаемое слово</label>
                        </div>

                        <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Попробовать</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section>
        <div class=\"container my-5\">
            <div class=\"row\">
                <div class=\"col-lg-12 mx-auto\">

                    <h2 class=\"card-title text-center mb-4\">";
        // line 55
        if ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 55, $this->source); })())) {
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 55, $this->source); })()), "html", null, true);
        } else {
            echo "Тестовая статья";
        }
        echo "</h2>

                    <div class=\"row\">
                        <div class=\"p-3\">
                            <h2>";
        // line 59
        if ((null === (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 59, $this->source); })()))) {
            echo "Добавляйте свои слова";
        }
        echo "</h2>
                            <p class=\"lead mb-0\">";
        // line 60
        if ((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 60, $this->source); })())) {
            echo (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 60, $this->source); })());
        } else {
            echo "При генерации контента статьи, вы можете наполнить его нужными словами для вашего бизнеса. Столько сколько нужно. Хоть все ими заполоните!";
        }
        echo "</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"showcase-text p-3\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <h2>";
        // line 67
        if ((null === (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 67, $this->source); })()))) {
            echo "Вставляйте изображения";
        }
        echo "</h2>
                                    <p class=\"lead mb-0\">";
        // line 68
        if ((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 68, $this->source); })())) {
            echo (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 68, $this->source); })());
        } else {
            echo "Надоели стандартные красивые изображения. Прикрепляйте к вашим статьям свою уникальные фотографии. Смазанные, с пальцем на пол фотографии, с кривым лицом. Все пойдет - вы здесь главный!";
        }
        echo "</p>
                                </div>
                                <img class=\"ml-3\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg-showcase-2.jpg"), "html", null, true);
        echo "\" width=\"518\" height=\"345\" alt=\"\">
                            </div>

                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"p-3\">
                            <h2>";
        // line 77
        if ((null === (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 77, $this->source); })()))) {
            echo "Интегрируйтесь по API";
        }
        echo "</h2>
                            <p class=\"lead mb-0\">";
        // line 78
        if ((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 78, $this->source); })())) {
            echo (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 78, $this->source); })());
        } else {
            echo "Придумайте и настройте свою собственную интеграцию с сервисом. Нужно ответить на комментарий в соц.сети - получите его по API. Нужно написать новую статью по программированию - получите ее по API. Хотите вкусно покушать - сходите за едой, а статью пускай за вас напишет API!";
        }
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=\"call-to-action text-white text-center\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-9 mx-auto\">
                    <h2 class=\"mb-4\">Готовы начать? Регистрируйтесь прямо сейчас!</h2>
                </div>
                <div class=\"col-md-10 col-lg-8 col-xl-7 mx-auto\">
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md-6 mx-auto\">
                            <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-block btn-lg btn-primary\">Регистрация</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "try.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 97,  227 => 78,  221 => 77,  211 => 70,  202 => 68,  196 => 67,  182 => 60,  176 => 59,  165 => 55,  140 => 37,  129 => 33,  123 => 30,  120 => 29,  114 => 26,  111 => 25,  109 => 24,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Тест драйв. {{ parent() }}{% endblock %}

{% block body %}
    <header class=\"masthead text-white text-center\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-9 mx-auto\">
                    <h1 class=\"mb-5\">Создай уникальную статью идеально подходящую для вашего бизнеса, сайта или проекта!</h1>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class=\"container my-5\">
            <div class=\"row\">
                <div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">

                    <h2 class=\"card-title text-center mb-4\">Создание статьи</h2>

                    {% if disabled == true %}
                        <div class=\"alert alert-info\" role=\"alert\">
                            <a href=\"{{ path('app_register') }}\">Зарегистрируйтесь</a>, чтобы получить доступ к расширенному функционалу генератора
                        </div>
                    {% endif %}

                    <form class=\"form-signin\" action=\"{{ path('app_try') }}\" method=\"post\">
                        <input type=\"hidden\" name=\"try\" value=\"try\">
                        <div class=\"form-label-group\">
                            <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" placeholder=\"Заголовок статьи\" value=\"{{ app.request.request.get('title') }}\" {% if disabled == true %}disabled{% endif %} required>
                            <label for=\"title\">Заголовок статьи</label>
                        </div>
                        <div class=\"form-label-group\">
                            <input type=\"text\" id=\"word1\" name=\"word1\" class=\"form-control\" placeholder=\"Продвигаемое слово\" value=\"{{ app.request.request.get('word1') }}\" {% if disabled == true %}disabled{% endif %} required>
                            <label for=\"word1\">Продвигаемое слово</label>
                        </div>

                        <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Попробовать</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section>
        <div class=\"container my-5\">
            <div class=\"row\">
                <div class=\"col-lg-12 mx-auto\">

                    <h2 class=\"card-title text-center mb-4\">{% if title %}{{ title }}{% else %}Тестовая статья{% endif %}</h2>

                    <div class=\"row\">
                        <div class=\"p-3\">
                            <h2>{% if title is null %}Добавляйте свои слова{% endif %}</h2>
                            <p class=\"lead mb-0\">{% if article %}{{ article|raw }}{% else %}При генерации контента статьи, вы можете наполнить его нужными словами для вашего бизнеса. Столько сколько нужно. Хоть все ими заполоните!{% endif %}</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"showcase-text p-3\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <h2>{% if title is null %}Вставляйте изображения{% endif %}</h2>
                                    <p class=\"lead mb-0\">{% if article %}{{ article|raw }}{% else %}Надоели стандартные красивые изображения. Прикрепляйте к вашим статьям свою уникальные фотографии. Смазанные, с пальцем на пол фотографии, с кривым лицом. Все пойдет - вы здесь главный!{% endif %}</p>
                                </div>
                                <img class=\"ml-3\" src=\"{{ asset('img/bg-showcase-2.jpg') }}\" width=\"518\" height=\"345\" alt=\"\">
                            </div>

                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"p-3\">
                            <h2>{% if title is null %}Интегрируйтесь по API{% endif %}</h2>
                            <p class=\"lead mb-0\">{% if article %}{{ article|raw }}{% else %}Придумайте и настройте свою собственную интеграцию с сервисом. Нужно ответить на комментарий в соц.сети - получите его по API. Нужно написать новую статью по программированию - получите ее по API. Хотите вкусно покушать - сходите за едой, а статью пускай за вас напишет API!{% endif %}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=\"call-to-action text-white text-center\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-9 mx-auto\">
                    <h2 class=\"mb-4\">Готовы начать? Регистрируйтесь прямо сейчас!</h2>
                </div>
                <div class=\"col-md-10 col-lg-8 col-xl-7 mx-auto\">
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md-6 mx-auto\">
                            <a href=\"{{ path('app_register') }}\" class=\"btn btn-block btn-lg btn-primary\">Регистрация</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "try.html.twig", "/home/life/www/skillbox/diplom/templates/try.html.twig");
    }
}
