<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1bc5ab2c50f295f29fdf8f8d150d58c4aa6aad3eea470f32d1c4126f330b37ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b86fd6ed0416200ca79e4dd12b38e0828a078f49079854797d69024aa5f446f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86fd6ed0416200ca79e4dd12b38e0828a078f49079854797d69024aa5f446f8->enter($__internal_b86fd6ed0416200ca79e4dd12b38e0828a078f49079854797d69024aa5f446f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_79f06ea9e5242880b36c45dd9f77b66151e000be1f0f18bdc1c1a793a8871a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f06ea9e5242880b36c45dd9f77b66151e000be1f0f18bdc1c1a793a8871a09->enter($__internal_79f06ea9e5242880b36c45dd9f77b66151e000be1f0f18bdc1c1a793a8871a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86fd6ed0416200ca79e4dd12b38e0828a078f49079854797d69024aa5f446f8->leave($__internal_b86fd6ed0416200ca79e4dd12b38e0828a078f49079854797d69024aa5f446f8_prof);

        
        $__internal_79f06ea9e5242880b36c45dd9f77b66151e000be1f0f18bdc1c1a793a8871a09->leave($__internal_79f06ea9e5242880b36c45dd9f77b66151e000be1f0f18bdc1c1a793a8871a09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4f1200b26a550d0a6834c08426e59893de450dc7acdd9362e4dbec7b5011892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f1200b26a550d0a6834c08426e59893de450dc7acdd9362e4dbec7b5011892->enter($__internal_e4f1200b26a550d0a6834c08426e59893de450dc7acdd9362e4dbec7b5011892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cdbc651c182e62221f6987e10743c3fa4e6f3e59770739d58ed9510414cb4133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbc651c182e62221f6987e10743c3fa4e6f3e59770739d58ed9510414cb4133->enter($__internal_cdbc651c182e62221f6987e10743c3fa4e6f3e59770739d58ed9510414cb4133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cdbc651c182e62221f6987e10743c3fa4e6f3e59770739d58ed9510414cb4133->leave($__internal_cdbc651c182e62221f6987e10743c3fa4e6f3e59770739d58ed9510414cb4133_prof);

        
        $__internal_e4f1200b26a550d0a6834c08426e59893de450dc7acdd9362e4dbec7b5011892->leave($__internal_e4f1200b26a550d0a6834c08426e59893de450dc7acdd9362e4dbec7b5011892_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86db62c71ec91556d44aaa13054dd96e6eb363d65cce80b8036928f8ab8539ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86db62c71ec91556d44aaa13054dd96e6eb363d65cce80b8036928f8ab8539ac->enter($__internal_86db62c71ec91556d44aaa13054dd96e6eb363d65cce80b8036928f8ab8539ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ce042b225b25de11d08bee9a9de6d153c032e957bb81aa40c3e7abb40ef880f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce042b225b25de11d08bee9a9de6d153c032e957bb81aa40c3e7abb40ef880f->enter($__internal_0ce042b225b25de11d08bee9a9de6d153c032e957bb81aa40c3e7abb40ef880f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0ce042b225b25de11d08bee9a9de6d153c032e957bb81aa40c3e7abb40ef880f->leave($__internal_0ce042b225b25de11d08bee9a9de6d153c032e957bb81aa40c3e7abb40ef880f_prof);

        
        $__internal_86db62c71ec91556d44aaa13054dd96e6eb363d65cce80b8036928f8ab8539ac->leave($__internal_86db62c71ec91556d44aaa13054dd96e6eb363d65cce80b8036928f8ab8539ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_927d2d6318feb1078d53e87313d5572d2709c30fd427d9482af90a5d12bd1481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927d2d6318feb1078d53e87313d5572d2709c30fd427d9482af90a5d12bd1481->enter($__internal_927d2d6318feb1078d53e87313d5572d2709c30fd427d9482af90a5d12bd1481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d67f034a05efa75cc0a7a756d17651a234acb57df9ad16f2bf6b5ab64f607550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67f034a05efa75cc0a7a756d17651a234acb57df9ad16f2bf6b5ab64f607550->enter($__internal_d67f034a05efa75cc0a7a756d17651a234acb57df9ad16f2bf6b5ab64f607550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d67f034a05efa75cc0a7a756d17651a234acb57df9ad16f2bf6b5ab64f607550->leave($__internal_d67f034a05efa75cc0a7a756d17651a234acb57df9ad16f2bf6b5ab64f607550_prof);

        
        $__internal_927d2d6318feb1078d53e87313d5572d2709c30fd427d9482af90a5d12bd1481->leave($__internal_927d2d6318feb1078d53e87313d5572d2709c30fd427d9482af90a5d12bd1481_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
