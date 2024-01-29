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

/* __string_template__8b97b07516f1b644734c7920dfb30e88 */
class __TwigTemplate_c4bb510a35e1b4e354df263934336410 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__8b97b07516f1b644734c7920dfb30e88"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__8b97b07516f1b644734c7920dfb30e88"));

        // line 1
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    PassGAN потребовалось менее <b>yyyy</b> <b>yyyy</b> <b>yyyy</b> часа, чтобы с <b>yyyy</b> помощью брутфорса взломать 65% паролей, а <b>gggg</b> 71% <b>yyyy</b> был подобран менее чем за день <b>yyyy</b> <b>yyyy</b> и 81% — <b>gggg</b> менее чем <b>gggg</b> <b>gggg</b> за <b>gggg</b> <b>gggg</b> месяц.
  </div>
  <div class=\"col-sm-6\">
    Полученные данные <b>yyyy</b> <b>yyyy</b> передаются через Bluetooth в режиме реального <b>gggg</b> времени на смартфон, обрабатываются <b>yyyy</b> и хранятся локально на <b>gggg</b> устройстве. <b>yyyy</b> Разработчики сообщают, <b>gggg</b> что EchoSpeech достаточно нескольких <b>yyyy</b> <b>gggg</b> минут <b>gggg</b> <b>gggg</b> для обучения <b>yyyy</b> для конкретного <b>yyyy</b> пользователя.
  </div>
</div>

<div>
test ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "
</div>

<p class=\"text-right\">PassGAN потребовалось менее <b>yyyy</b> <b>yyyy</b> <b>yyyy</b> часа, чтобы с <b>yyyy</b> помощью брутфорса взломать 65% паролей, а <b>gggg</b> 71% <b>yyyy</b> был подобран менее чем за день <b>yyyy</b> <b>yyyy</b> и 81% — <b>gggg</b> менее чем <b>gggg</b> <b>gggg</b> за <b>gggg</b> <b>gggg</b> месяц.</p>

<h1>vrervr</h1>
<p>Полученные данные <b>yyyy</b> <b>yyyy</b> передаются через Bluetooth в режиме реального <b>gggg</b> времени на смартфон, обрабатываются <b>yyyy</b> и хранятся локально на <b>gggg</b> устройстве. <b>yyyy</b> Разработчики сообщают, <b>gggg</b> что EchoSpeech достаточно нескольких <b>yyyy</b> <b>gggg</b> минут <b>gggg</b> <b>gggg</b> для обучения <b>yyyy</b> для конкретного <b>yyyy</b> пользователя.</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__8b97b07516f1b644734c7920dfb30e88";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
  <div class=\"col-sm-6\">
    PassGAN потребовалось менее <b>yyyy</b> <b>yyyy</b> <b>yyyy</b> часа, чтобы с <b>yyyy</b> помощью брутфорса взломать 65% паролей, а <b>gggg</b> 71% <b>yyyy</b> был подобран менее чем за день <b>yyyy</b> <b>yyyy</b> и 81% — <b>gggg</b> менее чем <b>gggg</b> <b>gggg</b> за <b>gggg</b> <b>gggg</b> месяц.
  </div>
  <div class=\"col-sm-6\">
    Полученные данные <b>yyyy</b> <b>yyyy</b> передаются через Bluetooth в режиме реального <b>gggg</b> времени на смартфон, обрабатываются <b>yyyy</b> и хранятся локально на <b>gggg</b> устройстве. <b>yyyy</b> Разработчики сообщают, <b>gggg</b> что EchoSpeech достаточно нескольких <b>yyyy</b> <b>gggg</b> минут <b>gggg</b> <b>gggg</b> для обучения <b>yyyy</b> для конкретного <b>yyyy</b> пользователя.
  </div>
</div>

<div>
test {{ keyword }}
</div>

<p class=\"text-right\">PassGAN потребовалось менее <b>yyyy</b> <b>yyyy</b> <b>yyyy</b> часа, чтобы с <b>yyyy</b> помощью брутфорса взломать 65% паролей, а <b>gggg</b> 71% <b>yyyy</b> был подобран менее чем за день <b>yyyy</b> <b>yyyy</b> и 81% — <b>gggg</b> менее чем <b>gggg</b> <b>gggg</b> за <b>gggg</b> <b>gggg</b> месяц.</p>

<h1>vrervr</h1>
<p>Полученные данные <b>yyyy</b> <b>yyyy</b> передаются через Bluetooth в режиме реального <b>gggg</b> времени на смартфон, обрабатываются <b>yyyy</b> и хранятся локально на <b>gggg</b> устройстве. <b>yyyy</b> Разработчики сообщают, <b>gggg</b> что EchoSpeech достаточно нескольких <b>yyyy</b> <b>gggg</b> минут <b>gggg</b> <b>gggg</b> для обучения <b>yyyy</b> для конкретного <b>yyyy</b> пользователя.</p>", "__string_template__8b97b07516f1b644734c7920dfb30e88", "");
    }
}
