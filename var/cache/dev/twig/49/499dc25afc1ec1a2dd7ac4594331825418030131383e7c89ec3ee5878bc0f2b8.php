<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_9835007b19a4dfe13e617ec2888de5ab073c25722bb6e0f9e0087d97c6e048ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_af3a42f87bf28e1501de990654138aca19fba983a33b3d411a7c39d2862528e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3a42f87bf28e1501de990654138aca19fba983a33b3d411a7c39d2862528e9->enter($__internal_af3a42f87bf28e1501de990654138aca19fba983a33b3d411a7c39d2862528e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_3f3593c465da9d6779fb8087a6f2d8f51718074ef61b72f2d2d4431dec8f779b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3593c465da9d6779fb8087a6f2d8f51718074ef61b72f2d2d4431dec8f779b->enter($__internal_3f3593c465da9d6779fb8087a6f2d8f51718074ef61b72f2d2d4431dec8f779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3a42f87bf28e1501de990654138aca19fba983a33b3d411a7c39d2862528e9->leave($__internal_af3a42f87bf28e1501de990654138aca19fba983a33b3d411a7c39d2862528e9_prof);

        
        $__internal_3f3593c465da9d6779fb8087a6f2d8f51718074ef61b72f2d2d4431dec8f779b->leave($__internal_3f3593c465da9d6779fb8087a6f2d8f51718074ef61b72f2d2d4431dec8f779b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9be4384295bc87c23179e1f5e5b331de434b81752b53a3f829daab998ce84829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be4384295bc87c23179e1f5e5b331de434b81752b53a3f829daab998ce84829->enter($__internal_9be4384295bc87c23179e1f5e5b331de434b81752b53a3f829daab998ce84829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd0cf1b68d7edc93d6ea0f6941e2998cb8a268a9ec1f38e7bca885be6f085a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0cf1b68d7edc93d6ea0f6941e2998cb8a268a9ec1f38e7bca885be6f085a10->enter($__internal_bd0cf1b68d7edc93d6ea0f6941e2998cb8a268a9ec1f38e7bca885be6f085a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_bd0cf1b68d7edc93d6ea0f6941e2998cb8a268a9ec1f38e7bca885be6f085a10->leave($__internal_bd0cf1b68d7edc93d6ea0f6941e2998cb8a268a9ec1f38e7bca885be6f085a10_prof);

        
        $__internal_9be4384295bc87c23179e1f5e5b331de434b81752b53a3f829daab998ce84829->leave($__internal_9be4384295bc87c23179e1f5e5b331de434b81752b53a3f829daab998ce84829_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
