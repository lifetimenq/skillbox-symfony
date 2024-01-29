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

/* __string_template__c9c0b9b97ad5fa21d8f96d8fb416b261 */
class __TwigTemplate_9a465aae436b808f5673ab173d5baa18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__c9c0b9b97ad5fa21d8f96d8fb416b261"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__c9c0b9b97ad5fa21d8f96d8fb416b261"));

        // line 1
        echo "<h1>super</h1>
<p>Вот уже больше пятнадцати лет у фанатов сериала Half-Life душа болит из-за так и не вышедшей Half-Life 2: Episode 3. Многие умельцы пообещали сделать заключительный эпизод боевика самостоятельно на базе сценария Марка Лэйдлоу — и совсем скоро один такой проект увидит свет дня.</p>

<div>
test ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "
</div>

<div class=\"row\">
  <div class=\"col-sm-6\">
    Вот уже больше пятнадцати лет у фанатов сериала Half-Life душа болит из-за так и не вышедшей Half-Life 2: Episode 3. Многие умельцы пообещали сделать заключительный эпизод боевика самостоятельно на базе сценария Марка Лэйдлоу — и совсем скоро один такой проект увидит свет дня.
  </div>
  <div class=\"col-sm-6\">
    Моддер valina35 анонсировал дату релиза Episode 3: The Return, своей вариации на тему затерянного в офисах Valve третьего эпизода Half-Life 2. Итак, премьера короткометражного экшена назначена на 10 апреля.
  </div>
</div>

<p class=\"text-right\">Моддер valina35 анонсировал дату релиза Episode 3: The Return, своей вариации на тему затерянного в офисах Valve третьего эпизода Half-Life 2. Итак, премьера короткометражного экшена назначена на 10 апреля.</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__c9c0b9b97ad5fa21d8f96d8fb416b261";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>super</h1>
<p>Вот уже больше пятнадцати лет у фанатов сериала Half-Life душа болит из-за так и не вышедшей Half-Life 2: Episode 3. Многие умельцы пообещали сделать заключительный эпизод боевика самостоятельно на базе сценария Марка Лэйдлоу — и совсем скоро один такой проект увидит свет дня.</p>

<div>
test {{ keyword }}
</div>

<div class=\"row\">
  <div class=\"col-sm-6\">
    Вот уже больше пятнадцати лет у фанатов сериала Half-Life душа болит из-за так и не вышедшей Half-Life 2: Episode 3. Многие умельцы пообещали сделать заключительный эпизод боевика самостоятельно на базе сценария Марка Лэйдлоу — и совсем скоро один такой проект увидит свет дня.
  </div>
  <div class=\"col-sm-6\">
    Моддер valina35 анонсировал дату релиза Episode 3: The Return, своей вариации на тему затерянного в офисах Valve третьего эпизода Half-Life 2. Итак, премьера короткометражного экшена назначена на 10 апреля.
  </div>
</div>

<p class=\"text-right\">Моддер valina35 анонсировал дату релиза Episode 3: The Return, своей вариации на тему затерянного в офисах Valve третьего эпизода Half-Life 2. Итак, премьера короткометражного экшена назначена на 10 апреля.</p>", "__string_template__c9c0b9b97ad5fa21d8f96d8fb416b261", "");
    }
}
