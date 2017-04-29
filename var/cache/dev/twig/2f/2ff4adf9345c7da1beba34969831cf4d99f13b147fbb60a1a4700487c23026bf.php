<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_23f1725449e4e23f3bbac0d167ed03f1791598a3b7b3b846c80eb61644c537fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b598dae7d3188b055c4de6aa0fcb1d07931ce2753660d38395cf7699a0a0dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b598dae7d3188b055c4de6aa0fcb1d07931ce2753660d38395cf7699a0a0dd1->enter($__internal_0b598dae7d3188b055c4de6aa0fcb1d07931ce2753660d38395cf7699a0a0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_7788f0c68d868e3c3fff03a4e6b1f3cf2023e61838d03cb59c3850700114e63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7788f0c68d868e3c3fff03a4e6b1f3cf2023e61838d03cb59c3850700114e63c->enter($__internal_7788f0c68d868e3c3fff03a4e6b1f3cf2023e61838d03cb59c3850700114e63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b598dae7d3188b055c4de6aa0fcb1d07931ce2753660d38395cf7699a0a0dd1->leave($__internal_0b598dae7d3188b055c4de6aa0fcb1d07931ce2753660d38395cf7699a0a0dd1_prof);

        
        $__internal_7788f0c68d868e3c3fff03a4e6b1f3cf2023e61838d03cb59c3850700114e63c->leave($__internal_7788f0c68d868e3c3fff03a4e6b1f3cf2023e61838d03cb59c3850700114e63c_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26cd74b06694fa3633ed34aad57801fba40b746198c8cb3773c620ef485e0467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26cd74b06694fa3633ed34aad57801fba40b746198c8cb3773c620ef485e0467->enter($__internal_26cd74b06694fa3633ed34aad57801fba40b746198c8cb3773c620ef485e0467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9000917daafaf39ae8cea5bc412691f4e6534ff749ff2a8e6a592e5ba4178a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9000917daafaf39ae8cea5bc412691f4e6534ff749ff2a8e6a592e5ba4178a04->enter($__internal_9000917daafaf39ae8cea5bc412691f4e6534ff749ff2a8e6a592e5ba4178a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_9000917daafaf39ae8cea5bc412691f4e6534ff749ff2a8e6a592e5ba4178a04->leave($__internal_9000917daafaf39ae8cea5bc412691f4e6534ff749ff2a8e6a592e5ba4178a04_prof);

        
        $__internal_26cd74b06694fa3633ed34aad57801fba40b746198c8cb3773c620ef485e0467->leave($__internal_26cd74b06694fa3633ed34aad57801fba40b746198c8cb3773c620ef485e0467_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}


{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
