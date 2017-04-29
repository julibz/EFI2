<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6baf843bb98cedd7578fc82474abc59c2b43b1313c009fa82fbc8e19e6d5c298 extends Twig_Template
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
        $__internal_b1cde418358bbbc5705bef14d04709dead855d5de6024222b5b96d9904164071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1cde418358bbbc5705bef14d04709dead855d5de6024222b5b96d9904164071->enter($__internal_b1cde418358bbbc5705bef14d04709dead855d5de6024222b5b96d9904164071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_254c321c9fad1b59470878aeb6f5ed024bee98221b9ed0c639e8f9bff5dc61d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254c321c9fad1b59470878aeb6f5ed024bee98221b9ed0c639e8f9bff5dc61d8->enter($__internal_254c321c9fad1b59470878aeb6f5ed024bee98221b9ed0c639e8f9bff5dc61d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1cde418358bbbc5705bef14d04709dead855d5de6024222b5b96d9904164071->leave($__internal_b1cde418358bbbc5705bef14d04709dead855d5de6024222b5b96d9904164071_prof);

        
        $__internal_254c321c9fad1b59470878aeb6f5ed024bee98221b9ed0c639e8f9bff5dc61d8->leave($__internal_254c321c9fad1b59470878aeb6f5ed024bee98221b9ed0c639e8f9bff5dc61d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5ff241f912145687948003565e3b85ba626ba56ff3cf2d15a388b2e9db83859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ff241f912145687948003565e3b85ba626ba56ff3cf2d15a388b2e9db83859->enter($__internal_a5ff241f912145687948003565e3b85ba626ba56ff3cf2d15a388b2e9db83859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_664cfa911d59c85e630021e2455cfe624ce153d3b53f343a44c78d7c0536daa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664cfa911d59c85e630021e2455cfe624ce153d3b53f343a44c78d7c0536daa9->enter($__internal_664cfa911d59c85e630021e2455cfe624ce153d3b53f343a44c78d7c0536daa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_664cfa911d59c85e630021e2455cfe624ce153d3b53f343a44c78d7c0536daa9->leave($__internal_664cfa911d59c85e630021e2455cfe624ce153d3b53f343a44c78d7c0536daa9_prof);

        
        $__internal_a5ff241f912145687948003565e3b85ba626ba56ff3cf2d15a388b2e9db83859->leave($__internal_a5ff241f912145687948003565e3b85ba626ba56ff3cf2d15a388b2e9db83859_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8c9b735f7905df2f6dab86e55d3c5dc87ec540453ae37bb14ba7ba0a3f0c610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c9b735f7905df2f6dab86e55d3c5dc87ec540453ae37bb14ba7ba0a3f0c610->enter($__internal_f8c9b735f7905df2f6dab86e55d3c5dc87ec540453ae37bb14ba7ba0a3f0c610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a5e36d173b24408d8870ecb96a6374cb4c6d0e6cb8ffe3779a799567f82f0809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e36d173b24408d8870ecb96a6374cb4c6d0e6cb8ffe3779a799567f82f0809->enter($__internal_a5e36d173b24408d8870ecb96a6374cb4c6d0e6cb8ffe3779a799567f82f0809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a5e36d173b24408d8870ecb96a6374cb4c6d0e6cb8ffe3779a799567f82f0809->leave($__internal_a5e36d173b24408d8870ecb96a6374cb4c6d0e6cb8ffe3779a799567f82f0809_prof);

        
        $__internal_f8c9b735f7905df2f6dab86e55d3c5dc87ec540453ae37bb14ba7ba0a3f0c610->leave($__internal_f8c9b735f7905df2f6dab86e55d3c5dc87ec540453ae37bb14ba7ba0a3f0c610_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4364aa06b353d26f3f216e0d8aa2c8c70930b89cb00148ece4d27000b82a3137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4364aa06b353d26f3f216e0d8aa2c8c70930b89cb00148ece4d27000b82a3137->enter($__internal_4364aa06b353d26f3f216e0d8aa2c8c70930b89cb00148ece4d27000b82a3137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd5878d70578ef9bcdf9f0c5b78c20b0a33124dc210fd280e588081b92f50336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5878d70578ef9bcdf9f0c5b78c20b0a33124dc210fd280e588081b92f50336->enter($__internal_dd5878d70578ef9bcdf9f0c5b78c20b0a33124dc210fd280e588081b92f50336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dd5878d70578ef9bcdf9f0c5b78c20b0a33124dc210fd280e588081b92f50336->leave($__internal_dd5878d70578ef9bcdf9f0c5b78c20b0a33124dc210fd280e588081b92f50336_prof);

        
        $__internal_4364aa06b353d26f3f216e0d8aa2c8c70930b89cb00148ece4d27000b82a3137->leave($__internal_4364aa06b353d26f3f216e0d8aa2c8c70930b89cb00148ece4d27000b82a3137_prof);

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
