<?php

/* modelo/new.html.twig */
class __TwigTemplate_200fad3b63e0907a7a39f14d28cab876f3025fb6a9663bae8abe7a32fe7cba04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modelo/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed3ad5b0e7e23f81b49437732fb99edfcbc5fa3c7044845bf6afe203e2a9f339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3ad5b0e7e23f81b49437732fb99edfcbc5fa3c7044845bf6afe203e2a9f339->enter($__internal_ed3ad5b0e7e23f81b49437732fb99edfcbc5fa3c7044845bf6afe203e2a9f339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/new.html.twig"));

        $__internal_12e058ef52561bed364bfbaf2fbf590e6fdd38738c703d44a4563e0e703b144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e058ef52561bed364bfbaf2fbf590e6fdd38738c703d44a4563e0e703b144a->enter($__internal_12e058ef52561bed364bfbaf2fbf590e6fdd38738c703d44a4563e0e703b144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3ad5b0e7e23f81b49437732fb99edfcbc5fa3c7044845bf6afe203e2a9f339->leave($__internal_ed3ad5b0e7e23f81b49437732fb99edfcbc5fa3c7044845bf6afe203e2a9f339_prof);

        
        $__internal_12e058ef52561bed364bfbaf2fbf590e6fdd38738c703d44a4563e0e703b144a->leave($__internal_12e058ef52561bed364bfbaf2fbf590e6fdd38738c703d44a4563e0e703b144a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e3c6c5f0103e79aa0d0c9bb1c3b44c73855f26ce7dec9ff89f2e0f8fc6925d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3c6c5f0103e79aa0d0c9bb1c3b44c73855f26ce7dec9ff89f2e0f8fc6925d9->enter($__internal_8e3c6c5f0103e79aa0d0c9bb1c3b44c73855f26ce7dec9ff89f2e0f8fc6925d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebad2f5f7d8870890f6cfc1cf8e35086dfcf6443457bb439a213478dd4a470b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebad2f5f7d8870890f6cfc1cf8e35086dfcf6443457bb439a213478dd4a470b1->enter($__internal_ebad2f5f7d8870890f6cfc1cf8e35086dfcf6443457bb439a213478dd4a470b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <div id=\"form\" class=\"form-wrapper\">
            <h1>Crear nuevo modelo</h1>

            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Create\" />
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            <ul>
                <li>
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_index");
        echo "\">Back to the list</a>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_ebad2f5f7d8870890f6cfc1cf8e35086dfcf6443457bb439a213478dd4a470b1->leave($__internal_ebad2f5f7d8870890f6cfc1cf8e35086dfcf6443457bb439a213478dd4a470b1_prof);

        
        $__internal_8e3c6c5f0103e79aa0d0c9bb1c3b44c73855f26ce7dec9ff89f2e0f8fc6925d9->leave($__internal_8e3c6c5f0103e79aa0d0c9bb1c3b44c73855f26ce7dec9ff89f2e0f8fc6925d9_prof);

    }

    public function getTemplateName()
    {
        return "modelo/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  68 => 15,  63 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <div id=\"form\" class=\"form-wrapper\">
            <h1>Crear nuevo modelo</h1>

            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" value=\"Create\" />
            {{ form_end(form) }}

            <ul>
                <li>
                    <a href=\"{{ path('modelo_index') }}\">Back to the list</a>
                </li>
            </ul>
        </div>
    </div>
{% endblock %}
", "modelo/new.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/modelo/new.html.twig");
    }
}
