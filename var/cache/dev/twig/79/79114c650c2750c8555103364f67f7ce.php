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

/* __string_template__212b87df2890ceb84e34fcd04a5cb9da */
class __TwigTemplate_85508542652443f54853f6a96dc60c2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__212b87df2890ceb84e34fcd04a5cb9da"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__212b87df2890ceb84e34fcd04a5cb9da"));

        // line 1
        echo "<p class=\"text-right\">Расширение Half-Life: Alyx NoVR <b>ввмвм</b> теперь позволяет пройти <b>ввмвм</b> игру целиком <b>пкпкпк</b> без <b>пкпкпк</b> шлема виртуальной реальности. <b>ввмвм</b> Авторы отмечают, что проект находится на стадии «раннего доступа», так что пока не лишён шероховатостей.</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__212b87df2890ceb84e34fcd04a5cb9da";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"text-right\">Расширение Half-Life: Alyx NoVR <b>ввмвм</b> теперь позволяет пройти <b>ввмвм</b> игру целиком <b>пкпкпк</b> без <b>пкпкпк</b> шлема виртуальной реальности. <b>ввмвм</b> Авторы отмечают, что проект находится на стадии «раннего доступа», так что пока не лишён шероховатостей.</p>", "__string_template__212b87df2890ceb84e34fcd04a5cb9da", "");
    }
}
