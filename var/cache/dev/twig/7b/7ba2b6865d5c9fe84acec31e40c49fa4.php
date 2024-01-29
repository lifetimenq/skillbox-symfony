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

/* __string_template__75e53e7f9d6657b3bb31418260ec9dcb */
class __TwigTemplate_7d81d35b0944cbf7583d3f8babdcfdc6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__75e53e7f9d6657b3bb31418260ec9dcb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__75e53e7f9d6657b3bb31418260ec9dcb"));

        // line 1
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    Напомним, что сейчас Valve помаленьку возвращается в строй. В 2020-м году она выпустила VR-приключение Half-Life 2: Alyx, а летом она перенесёт Counter-Strike: Global Offensive на рельсы движка Source 2.
  </div>
  <div class=\"col-sm-6\">
    Расширение Half-Life: Alyx NoVR теперь позволяет пройти игру целиком без шлема виртуальной реальности. Авторы отмечают, что проект находится на стадии «раннего доступа», так что пока не лишён шероховатостей.
  </div>
</div>

<p class=\"text-right\">Напомним, что сейчас Valve помаленьку возвращается в строй. В 2020-м году она выпустила VR-приключение Half-Life 2: Alyx, а летом она перенесёт Counter-Strike: Global Offensive на рельсы движка Source 2.</p>

<h1>super</h1>
<p>Расширение Half-Life: Alyx NoVR теперь позволяет пройти игру целиком без шлема виртуальной реальности. Авторы отмечают, что проект находится на стадии «раннего доступа», так что пока не лишён шероховатостей.</p>

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
        return "__string_template__75e53e7f9d6657b3bb31418260ec9dcb";
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
        return new Source("<div class=\"row\">
  <div class=\"col-sm-6\">
    Напомним, что сейчас Valve помаленьку возвращается в строй. В 2020-м году она выпустила VR-приключение Half-Life 2: Alyx, а летом она перенесёт Counter-Strike: Global Offensive на рельсы движка Source 2.
  </div>
  <div class=\"col-sm-6\">
    Расширение Half-Life: Alyx NoVR теперь позволяет пройти игру целиком без шлема виртуальной реальности. Авторы отмечают, что проект находится на стадии «раннего доступа», так что пока не лишён шероховатостей.
  </div>
</div>

<p class=\"text-right\">Напомним, что сейчас Valve помаленьку возвращается в строй. В 2020-м году она выпустила VR-приключение Half-Life 2: Alyx, а летом она перенесёт Counter-Strike: Global Offensive на рельсы движка Source 2.</p>

<h1>super</h1>
<p>Расширение Half-Life: Alyx NoVR теперь позволяет пройти игру целиком без шлема виртуальной реальности. Авторы отмечают, что проект находится на стадии «раннего доступа», так что пока не лишён шероховатостей.</p>

<div>
test {{ keyword }}
</div>", "__string_template__75e53e7f9d6657b3bb31418260ec9dcb", "");
    }
}
