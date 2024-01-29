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

/* __string_template__7bbbd98302d44ba6a75db68aee2c186f */
class __TwigTemplate_a20f5a9c8f28f8855c118a3557dd3e8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__7bbbd98302d44ba6a75db68aee2c186f"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__7bbbd98302d44ba6a75db68aee2c186f"));

        // line 1
        echo "<h1>title</h1>
<p>В своем нынешнем <b>word1</b> виде EchoSpeech можно использовать для общения с другими через смартфон в местах, где речь неудобна или неуместна, например, в шумном ресторане или тихой библиотеке. Бесшумный речевой интерфейс также можно использовать в паре со стилусом и программным обеспечением для проектирования, таким как САПР, практически исключая необходимость в клавиатуре и мыши, добавляют разработчики.</p>

<div class=\"row\">
  <div class=\"col-sm-6\">
    В своем нынешнем <b>word1</b> виде EchoSpeech можно использовать для общения с другими через смартфон в местах, где речь неудобна или неуместна, например, в шумном ресторане или тихой библиотеке. Бесшумный речевой интерфейс также можно использовать в паре со стилусом и программным обеспечением для проектирования, таким как САПР, практически исключая необходимость в клавиатуре и мыши, добавляют разработчики.
  </div>
  <div class=\"col-sm-6\">
    Очки EchoSpeech оснащены парой микрофонов и динамиков, размер которых меньше ластика на конце карандаша, и не используют камеру. Устройство отправляет и улавливает акустические волны, <b>word1</b> которые показывают изменения динамики лицевых мышц и рта. Алгоритм глубокого обучения анализирует эти эхо-профили в режиме реального времени с точностью около 95%.
  </div>
</div>

<p class=\"text-right\">Очки EchoSpeech оснащены парой микрофонов и динамиков, размер которых меньше ластика на конце карандаша, и не используют камеру. Устройство отправляет и улавливает акустические волны, <b>word1</b> которые показывают изменения динамики лицевых мышц и рта. Алгоритм глубокого обучения анализирует эти эхо-профили в режиме реального времени с точностью около 95%.</p>

<div>
test ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__7bbbd98302d44ba6a75db68aee2c186f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>title</h1>
<p>В своем нынешнем <b>word1</b> виде EchoSpeech можно использовать для общения с другими через смартфон в местах, где речь неудобна или неуместна, например, в шумном ресторане или тихой библиотеке. Бесшумный речевой интерфейс также можно использовать в паре со стилусом и программным обеспечением для проектирования, таким как САПР, практически исключая необходимость в клавиатуре и мыши, добавляют разработчики.</p>

<div class=\"row\">
  <div class=\"col-sm-6\">
    В своем нынешнем <b>word1</b> виде EchoSpeech можно использовать для общения с другими через смартфон в местах, где речь неудобна или неуместна, например, в шумном ресторане или тихой библиотеке. Бесшумный речевой интерфейс также можно использовать в паре со стилусом и программным обеспечением для проектирования, таким как САПР, практически исключая необходимость в клавиатуре и мыши, добавляют разработчики.
  </div>
  <div class=\"col-sm-6\">
    Очки EchoSpeech оснащены парой микрофонов и динамиков, размер которых меньше ластика на конце карандаша, и не используют камеру. Устройство отправляет и улавливает акустические волны, <b>word1</b> которые показывают изменения динамики лицевых мышц и рта. Алгоритм глубокого обучения анализирует эти эхо-профили в режиме реального времени с точностью около 95%.
  </div>
</div>

<p class=\"text-right\">Очки EchoSpeech оснащены парой микрофонов и динамиков, размер которых меньше ластика на конце карандаша, и не используют камеру. Устройство отправляет и улавливает акустические волны, <b>word1</b> которые показывают изменения динамики лицевых мышц и рта. Алгоритм глубокого обучения анализирует эти эхо-профили в режиме реального времени с точностью около 95%.</p>

<div>
test {{ keyword }}
</div>", "__string_template__7bbbd98302d44ba6a75db68aee2c186f", "");
    }
}
