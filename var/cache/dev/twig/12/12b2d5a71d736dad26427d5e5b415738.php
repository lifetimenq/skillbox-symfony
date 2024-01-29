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

/* homepage.html.twig */
class __TwigTemplate_39c902a2173afe7b311d382317f7a82c extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "verify_email"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 5
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            ";
            // line 6
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
        // line 12
        echo "
    <header class=\"masthead text-white text-center\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-9 mx-auto\">
                    <h1 class=\"mb-5\">Создайте уникальную статью идеально подходящую для вашего бизнеса, сайта или проекта!</h1>
                </div>
                <div class=\"col-md-10 col-lg-8 col-xl-7 mx-auto\">
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md-6 mx-auto\">
                            <a type=\"submit\" class=\"btn btn-block btn-lg btn-primary\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">Попробовать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class=\"features-icons bg-light text-center\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"fas fa-keyboard m-auto text-primary\"></i>
                        </div>
                        <h3>Свои слова</h3>
                        <p class=\"lead mb-0\">Вставляйте нужные вам слова</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"fas fa-images m-auto text-primary\"></i>
                        </div>
                        <h3>Свои изображения</h3>
                        <p class=\"lead mb-0\">Прикрепляйте правильные изображения</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"fas fa-project-diagram m-auto text-primary\"></i>
                        </div>
                        <h3>API доступ</h3>
                        <p class=\"lead mb-0\">Подключайтесь к сервису по API</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"showcase\">
        <div class=\"container-fluid p-0\">
            <div class=\"row no-gutters\">

                <div class=\"col-lg-6 order-lg-2 text-white showcase-img\" style=\"background-image: url(";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg-showcase-1.jpg"), "html", null, true);
        echo ");\"></div>
                <div class=\"col-lg-6 order-lg-1 my-auto showcase-text\">
                    <h2>Добавляйте свои слова</h2>
                    <p class=\"lead mb-0\">При генерации контента статьи, вы можете наполнить его нужными словами для вашего бизнеса. Столько сколько нужно. Хоть все ими заполоните!</p>
                </div>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 text-white showcase-img\" style=\"background-image: url(";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg-showcase-2.jpg"), "html", null, true);
        echo ");\"></div>
                <div class=\"col-lg-6 my-auto showcase-text\">
                    <h2>Вставляйте изображения</h2>
                    <p class=\"lead mb-0\">Надоели стандартные красивые изображения. Прикрепляйте к вашим статьям свою уникальные фотографии. Смазанные, с пальцем на пол фотографии, с кривым лицом. Все пойдет - вы здесь главный!</p>
                </div>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 order-lg-2 text-white showcase-img\" style=\"background-image: url(";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg-showcase-3.jpg"), "html", null, true);
        echo ");\"></div>
                <div class=\"col-lg-6 order-lg-1 my-auto showcase-text\">
                    <h2>Интегрируйтесь по API</h2>
                    <p class=\"lead mb-0\">Придумайте и настройте свою собственную интеграцию с сервисом. Нужно ответить на комментарий в соц.сети - получите его по API. Нужно написать новую статью по программированию - получите ее по API. Хотите вкусно покушать - сходите за едой, а статью пускай за вас напишет API!</p>
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
        // line 102
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
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 102,  170 => 83,  160 => 76,  150 => 69,  101 => 23,  88 => 12,  76 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% for flash_error in app.flashes('verify_email') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            {{ flash_error }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    {% endfor %}

    <header class=\"masthead text-white text-center\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-9 mx-auto\">
                    <h1 class=\"mb-5\">Создайте уникальную статью идеально подходящую для вашего бизнеса, сайта или проекта!</h1>
                </div>
                <div class=\"col-md-10 col-lg-8 col-xl-7 mx-auto\">
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md-6 mx-auto\">
                            <a type=\"submit\" class=\"btn btn-block btn-lg btn-primary\" href=\"{{ path }}\">Попробовать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class=\"features-icons bg-light text-center\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"fas fa-keyboard m-auto text-primary\"></i>
                        </div>
                        <h3>Свои слова</h3>
                        <p class=\"lead mb-0\">Вставляйте нужные вам слова</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"fas fa-images m-auto text-primary\"></i>
                        </div>
                        <h3>Свои изображения</h3>
                        <p class=\"lead mb-0\">Прикрепляйте правильные изображения</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"fas fa-project-diagram m-auto text-primary\"></i>
                        </div>
                        <h3>API доступ</h3>
                        <p class=\"lead mb-0\">Подключайтесь к сервису по API</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"showcase\">
        <div class=\"container-fluid p-0\">
            <div class=\"row no-gutters\">

                <div class=\"col-lg-6 order-lg-2 text-white showcase-img\" style=\"background-image: url({{ asset('img/bg-showcase-1.jpg') }});\"></div>
                <div class=\"col-lg-6 order-lg-1 my-auto showcase-text\">
                    <h2>Добавляйте свои слова</h2>
                    <p class=\"lead mb-0\">При генерации контента статьи, вы можете наполнить его нужными словами для вашего бизнеса. Столько сколько нужно. Хоть все ими заполоните!</p>
                </div>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 text-white showcase-img\" style=\"background-image: url({{ asset('img/bg-showcase-2.jpg') }});\"></div>
                <div class=\"col-lg-6 my-auto showcase-text\">
                    <h2>Вставляйте изображения</h2>
                    <p class=\"lead mb-0\">Надоели стандартные красивые изображения. Прикрепляйте к вашим статьям свою уникальные фотографии. Смазанные, с пальцем на пол фотографии, с кривым лицом. Все пойдет - вы здесь главный!</p>
                </div>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 order-lg-2 text-white showcase-img\" style=\"background-image: url({{ asset('img/bg-showcase-3.jpg') }});\"></div>
                <div class=\"col-lg-6 order-lg-1 my-auto showcase-text\">
                    <h2>Интегрируйтесь по API</h2>
                    <p class=\"lead mb-0\">Придумайте и настройте свою собственную интеграцию с сервисом. Нужно ответить на комментарий в соц.сети - получите его по API. Нужно написать новую статью по программированию - получите ее по API. Хотите вкусно покушать - сходите за едой, а статью пускай за вас напишет API!</p>
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
{% endblock %}", "homepage.html.twig", "/home/life/www/skillbox/diplom/templates/homepage.html.twig");
    }
}
