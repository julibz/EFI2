<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d477f7a15b49efddfc6c04715f4e80c053d22d7aaca2df2e3e00724a6c642c00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_caf111523ceefe8022a48c32e97737d92768ac4958674aadaf40488c5b447bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf111523ceefe8022a48c32e97737d92768ac4958674aadaf40488c5b447bac->enter($__internal_caf111523ceefe8022a48c32e97737d92768ac4958674aadaf40488c5b447bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_60c24d89cd90c444c9831d4a0610a01921fbcc91990d0b0716658ecbead4b82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c24d89cd90c444c9831d4a0610a01921fbcc91990d0b0716658ecbead4b82b->enter($__internal_60c24d89cd90c444c9831d4a0610a01921fbcc91990d0b0716658ecbead4b82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf111523ceefe8022a48c32e97737d92768ac4958674aadaf40488c5b447bac->leave($__internal_caf111523ceefe8022a48c32e97737d92768ac4958674aadaf40488c5b447bac_prof);

        
        $__internal_60c24d89cd90c444c9831d4a0610a01921fbcc91990d0b0716658ecbead4b82b->leave($__internal_60c24d89cd90c444c9831d4a0610a01921fbcc91990d0b0716658ecbead4b82b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a44b50f36de9a1575384ac094f1df4ed7634bbe2474137a1c49f4eab44748ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a44b50f36de9a1575384ac094f1df4ed7634bbe2474137a1c49f4eab44748ac->enter($__internal_0a44b50f36de9a1575384ac094f1df4ed7634bbe2474137a1c49f4eab44748ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_012bff457ecba809483bbda475fc12048529b3f02b82ae5ad169127999e24dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012bff457ecba809483bbda475fc12048529b3f02b82ae5ad169127999e24dfd->enter($__internal_012bff457ecba809483bbda475fc12048529b3f02b82ae5ad169127999e24dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_012bff457ecba809483bbda475fc12048529b3f02b82ae5ad169127999e24dfd->leave($__internal_012bff457ecba809483bbda475fc12048529b3f02b82ae5ad169127999e24dfd_prof);

        
        $__internal_0a44b50f36de9a1575384ac094f1df4ed7634bbe2474137a1c49f4eab44748ac->leave($__internal_0a44b50f36de9a1575384ac094f1df4ed7634bbe2474137a1c49f4eab44748ac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
