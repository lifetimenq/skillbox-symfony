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

/* email/email_template.html.twig */
class __TwigTemplate_25fcd32ae96c80abacfc88635185fe8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/email_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/email_template.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <!doctype html>
    <html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
        <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 7, $this->source); })()), "subject", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
    </head>
    <body class=\"\">
    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\">
        <tr>
            <td>&nbsp;</td>
            <td class=\"container\">
                <div class=\"content\">


                    <div class=\"header\">
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                            <tr>
                                <td class=\"content-block\">
                                    <h1><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_homepage");
        echo "\">Article Generator</a></h1>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role=\"presentation\" class=\"main\">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class=\"wrapper\">
                                <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                    <tr>
                                        <td>
                                            ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->

                    <!-- START FOOTER -->
                    <div class=\"footer\">
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                            <tr>
                                <td class=\"content-block\">
                                    <p>C любовью, <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_homepage");
        echo "\">Article Generator</a></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->

                </div>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    </body>
    </html>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_parse_0_, twig_source($this->env, "@css/email.css"));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "email/email_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 37,  135 => 36,  125 => 1,  107 => 53,  90 => 38,  88 => 36,  70 => 21,  53 => 7,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply inline_css(source(\"@css/email.css\")) %}
    <!doctype html>
    <html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
        <title>{{ email.subject }}</title>
    </head>
    <body class=\"\">
    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\">
        <tr>
            <td>&nbsp;</td>
            <td class=\"container\">
                <div class=\"content\">


                    <div class=\"header\">
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                            <tr>
                                <td class=\"content-block\">
                                    <h1><a href=\"{{ url('app_homepage') }}\">Article Generator</a></h1>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role=\"presentation\" class=\"main\">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class=\"wrapper\">
                                <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                    <tr>
                                        <td>
                                            {% block content %}
                                            {% endblock %}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->

                    <!-- START FOOTER -->
                    <div class=\"footer\">
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                            <tr>
                                <td class=\"content-block\">
                                    <p>C любовью, <a href=\"{{ url('app_homepage') }}\">Article Generator</a></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->

                </div>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    </body>
    </html>
{% endapply %}", "email/email_template.html.twig", "/home/life/www/skillbox/diplom/templates/email/email_template.html.twig");
    }
}
