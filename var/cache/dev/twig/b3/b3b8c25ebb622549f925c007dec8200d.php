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

/* dashboard/dashboard_templates.html.twig */
class __TwigTemplate_2b6e59bf03a67cdb555c5049fe891c32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard_templates.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard_templates.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/dashboard.html.twig", "dashboard/dashboard_templates.html.twig", 1);
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
        <section>
            ";
        // line 6
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            // line 7
            echo "                <div class=\"alert alert-warning\" role=\"alert\">
                    Для того, чтобы использовать шаблоны, оформите <a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_subscription");
            echo "\">подписку
                        PRO</a>
                </div>
            ";
        }
        // line 12
        echo "            <h1 class=\"mt-4\">Ваши шаблоны</h1>

            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["success"]) {
            // line 15
            echo "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $context["success"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            <table class=\"table table-hover table-bordered\">
                <thead class=\"thead-light\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Название</th>
                    <th scope=\"col\">Код</th>
                    <th scope=\"col\"></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 33
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</th>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>
<pre class=\"code\">
";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 38), "html", null, true);
            echo "
</pre>
                        </td>
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_template_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\"
                               class=\"text-danger\"><i class=\"fas fa-trash\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
            <div class=\"navigation\">
                ";
        // line 48
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 48, $this->source); })()));
        echo "
            </div>
        </section>

        <hr>

        <section class=\"py-4\">

            <h1 class=\"mt-4\">Добавить шаблон</h1>

            <div class=\"row\">

                <div class=\"col-xl-6\">
                    <form action=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_template_add");
        echo "\">
                        <div class=\"form-group\">
                            <label for=\"title\">Название шаблона</label>
                            <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\"
                                   placeholder=\"Название шаблона\" required ";
        // line 65
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            echo "disabled";
        }
        echo ">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"code\">Код шаблона</label>
                            <textarea id=\"code\" name=\"code\" class=\"form-control\" placeholder=\"Код шаблона\"
                                      required ";
        // line 70
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            echo "disabled";
        }
        echo "></textarea>
                        </div>

                        <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\" ";
        // line 73
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            echo "disabled";
        }
        echo ">
                            Добавить
                        </button>
                    </form>
                </div>
                <div class=\"col-xl-6\">
                    <p class=\"pb-2\">
                        Шаблон – HTML-код для генерации статей.
                        Для шаблона доступны несколько параметров:
                    </p>
                    <details>
                        <summary>Показать параметры</summary>
                        <table class=\"table table-striped\">
                            <tbody>
                            <tr>
                                <th scope=\"row\">";
        // line 88
        echo "{{ title }}";
        echo "</th>
                                <td>Заголовок статьи</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
        // line 92
        echo "{{ paragraph }}";
        echo "</th>
                                <td>Одиночный параграф</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
        // line 96
        echo "{{ paragraphs }}";
        echo "</th>
                                <td>Несколько параграфон</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
        // line 100
        echo "{{ keyword }}";
        echo "</th>
                                <td>Ключевые слова</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
        // line 104
        echo "{{ images }}";
        echo "</th>
                                <td>Изображения для статьи</td>
                            </tr>
                            </tbody>
                        </table>
                    </details>
                </div>
            </div>
        </section>
    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/dashboard_templates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 104,  239 => 100,  232 => 96,  225 => 92,  218 => 88,  198 => 73,  190 => 70,  180 => 65,  173 => 61,  157 => 48,  152 => 45,  142 => 41,  136 => 38,  130 => 35,  126 => 34,  123 => 33,  119 => 32,  107 => 22,  95 => 16,  92 => 15,  88 => 14,  84 => 12,  77 => 8,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/dashboard.html.twig' %}

{% block body %}
    <div class=\"container-fluid\">
        <section>
            {% if not is_granted('ROLE_PRO') %}
                <div class=\"alert alert-warning\" role=\"alert\">
                    Для того, чтобы использовать шаблоны, оформите <a href=\"{{ path('app_dashboard_subscription') }}\">подписку
                        PRO</a>
                </div>
            {% endif %}
            <h1 class=\"mt-4\">Ваши шаблоны</h1>

            {% for success in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    {{ success }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}
            <table class=\"table table-hover table-bordered\">
                <thead class=\"thead-light\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Название</th>
                    <th scope=\"col\">Код</th>
                    <th scope=\"col\"></th>
                </tr>
                </thead>
                <tbody>
                {% for module in pagination %}
                    <tr>
                        <th scope=\"row\">{{ module.id }}</th>
                        <td>{{ module.title }}</td>
                        <td>
<pre class=\"code\">
{{ module.code }}
</pre>
                        </td>
                        <td><a href=\"{{ path('app_dashboard_template_delete', { id: module.id }) }}\"
                               class=\"text-danger\"><i class=\"fas fa-trash\"></i></a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </section>

        <hr>

        <section class=\"py-4\">

            <h1 class=\"mt-4\">Добавить шаблон</h1>

            <div class=\"row\">

                <div class=\"col-xl-6\">
                    <form action=\"{{ path('app_dashboard_template_add') }}\">
                        <div class=\"form-group\">
                            <label for=\"title\">Название шаблона</label>
                            <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\"
                                   placeholder=\"Название шаблона\" required {% if not is_granted('ROLE_PRO') %}disabled{% endif %}>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"code\">Код шаблона</label>
                            <textarea id=\"code\" name=\"code\" class=\"form-control\" placeholder=\"Код шаблона\"
                                      required {% if not is_granted('ROLE_PRO') %}disabled{% endif %}></textarea>
                        </div>

                        <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\" {% if not is_granted('ROLE_PRO') %}disabled{% endif %}>
                            Добавить
                        </button>
                    </form>
                </div>
                <div class=\"col-xl-6\">
                    <p class=\"pb-2\">
                        Шаблон – HTML-код для генерации статей.
                        Для шаблона доступны несколько параметров:
                    </p>
                    <details>
                        <summary>Показать параметры</summary>
                        <table class=\"table table-striped\">
                            <tbody>
                            <tr>
                                <th scope=\"row\">{% verbatim %}{{ title }}{% endverbatim %}</th>
                                <td>Заголовок статьи</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">{% verbatim %}{{ paragraph }}{% endverbatim %}</th>
                                <td>Одиночный параграф</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">{% verbatim %}{{ paragraphs }}{% endverbatim %}</th>
                                <td>Несколько параграфон</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">{% verbatim %}{{ keyword }}{% endverbatim %}</th>
                                <td>Ключевые слова</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">{% verbatim %}{{ images }}{% endverbatim %}</th>
                                <td>Изображения для статьи</td>
                            </tr>
                            </tbody>
                        </table>
                    </details>
                </div>
            </div>
        </section>
    </div>
    </div>
{% endblock %}", "dashboard/dashboard_templates.html.twig", "/home/life/www/skillbox/diplom/templates/dashboard/dashboard_templates.html.twig");
    }
}
