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

/* __string_template__ebc4e971cde42b2d69f8f6f397593294 */
class __TwigTemplate_eefc1ed942cace7027ee16eb55f32e11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__ebc4e971cde42b2d69f8f6f397593294"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__ebc4e971cde42b2d69f8f6f397593294"));

        // line 1
        echo "<h1>bbbbb</h1>
<p>Большинство <b>GGGG</b> технологий <b>GGGG</b> распознавания немой речи ограничены избранным набором <b>eeeee</b> предопределенных команд и требуют, <b>eeeee</b> чтобы пользователь <b>eeeee</b> и его собеседник <b>GGGG</b> смотрели <b>GGGG</b> в камеру или <b>GGGG</b> носили <b>eeeee</b> ее. Это существенно затрудняет <b>eeeee</b> <b>GGGG</b> возможности применения таких устройств. Кроме того, большой <b>eeeee</b> <b>eeeee</b> поток данных требует обработки в облаке, <b>eeeee</b> что нарушает <b>eeeee</b> конфиденциальность пользователей.</p>

<p class=\"text-right\">Ранее <b>eeeee</b> исследователи из Университета Глазго разработали систему ThermoSecure, <b>eeeee</b> которая способна мгновенно <b>eeeee</b> угадывать пароль, анализируя тепловой <b>eeeee</b> отпечаток кончиков пальцев на клавиатуре или экране смартфона. <b>eeeee</b> Для этого они обучили <b>GGGG</b> искусственный <b>GGGG</b> интеллект эффективно читать изображения и делать обоснованные <b>eeeee</b> <b>eeeee</b> предположения о паролях из подсказок тепловых сигнатур с использованием вероятностной модели. <b>eeeee</b> Оказалось, что ThermoSecure способна раскрыть 86% паролей, если тепловизионный снимок был <b>GGGG</b> сделан в течение 20 <b>GGGG</b> секунд, 76%, если прошло 30 секунд и 62% спустя 60 <b>eeeee</b> секунд после <b>GGGG</b> <b>GGGG</b> ввода.</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__ebc4e971cde42b2d69f8f6f397593294";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>bbbbb</h1>
<p>Большинство <b>GGGG</b> технологий <b>GGGG</b> распознавания немой речи ограничены избранным набором <b>eeeee</b> предопределенных команд и требуют, <b>eeeee</b> чтобы пользователь <b>eeeee</b> и его собеседник <b>GGGG</b> смотрели <b>GGGG</b> в камеру или <b>GGGG</b> носили <b>eeeee</b> ее. Это существенно затрудняет <b>eeeee</b> <b>GGGG</b> возможности применения таких устройств. Кроме того, большой <b>eeeee</b> <b>eeeee</b> поток данных требует обработки в облаке, <b>eeeee</b> что нарушает <b>eeeee</b> конфиденциальность пользователей.</p>

<p class=\"text-right\">Ранее <b>eeeee</b> исследователи из Университета Глазго разработали систему ThermoSecure, <b>eeeee</b> которая способна мгновенно <b>eeeee</b> угадывать пароль, анализируя тепловой <b>eeeee</b> отпечаток кончиков пальцев на клавиатуре или экране смартфона. <b>eeeee</b> Для этого они обучили <b>GGGG</b> искусственный <b>GGGG</b> интеллект эффективно читать изображения и делать обоснованные <b>eeeee</b> <b>eeeee</b> предположения о паролях из подсказок тепловых сигнатур с использованием вероятностной модели. <b>eeeee</b> Оказалось, что ThermoSecure способна раскрыть 86% паролей, если тепловизионный снимок был <b>GGGG</b> сделан в течение 20 <b>GGGG</b> секунд, 76%, если прошло 30 секунд и 62% спустя 60 <b>eeeee</b> секунд после <b>GGGG</b> <b>GGGG</b> ввода.</p>", "__string_template__ebc4e971cde42b2d69f8f6f397593294", "");
    }
}
