<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_c56b93e8fb6c843155625529923fe2015a50718ba493a4a0b0b64024e282514b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c56a9c3af3650c768f9ac003c3112177aee282bbf6602fe14f8226ac48168fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c56a9c3af3650c768f9ac003c3112177aee282bbf6602fe14f8226ac48168fd->enter($__internal_1c56a9c3af3650c768f9ac003c3112177aee282bbf6602fe14f8226ac48168fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_3991604967b2c060bade48c8b53f3cd3680a7bb1eb423175e9b2792293994ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3991604967b2c060bade48c8b53f3cd3680a7bb1eb423175e9b2792293994ce6->enter($__internal_3991604967b2c060bade48c8b53f3cd3680a7bb1eb423175e9b2792293994ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1c56a9c3af3650c768f9ac003c3112177aee282bbf6602fe14f8226ac48168fd->leave($__internal_1c56a9c3af3650c768f9ac003c3112177aee282bbf6602fe14f8226ac48168fd_prof);

        
        $__internal_3991604967b2c060bade48c8b53f3cd3680a7bb1eb423175e9b2792293994ce6->leave($__internal_3991604967b2c060bade48c8b53f3cd3680a7bb1eb423175e9b2792293994ce6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bea2f814d726408253795dc72c9a59177c55276859d1000c4710019c25a761dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea2f814d726408253795dc72c9a59177c55276859d1000c4710019c25a761dd->enter($__internal_bea2f814d726408253795dc72c9a59177c55276859d1000c4710019c25a761dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_39c9b0c24113c23398dc9f138a6e4121c47ddde71c4f8aef187146d2ae5f928f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c9b0c24113c23398dc9f138a6e4121c47ddde71c4f8aef187146d2ae5f928f->enter($__internal_39c9b0c24113c23398dc9f138a6e4121c47ddde71c4f8aef187146d2ae5f928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_39c9b0c24113c23398dc9f138a6e4121c47ddde71c4f8aef187146d2ae5f928f->leave($__internal_39c9b0c24113c23398dc9f138a6e4121c47ddde71c4f8aef187146d2ae5f928f_prof);

        
        $__internal_bea2f814d726408253795dc72c9a59177c55276859d1000c4710019c25a761dd->leave($__internal_bea2f814d726408253795dc72c9a59177c55276859d1000c4710019c25a761dd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e268966c7aa815bed3d86c502abe0ef24b740d005d5d52b6bb813eb83c4cc2bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e268966c7aa815bed3d86c502abe0ef24b740d005d5d52b6bb813eb83c4cc2bb->enter($__internal_e268966c7aa815bed3d86c502abe0ef24b740d005d5d52b6bb813eb83c4cc2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3aba95c1e0b414b7ba384efc3a1e0e0cc282e47e7f54a7405ff5da486f92d547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aba95c1e0b414b7ba384efc3a1e0e0cc282e47e7f54a7405ff5da486f92d547->enter($__internal_3aba95c1e0b414b7ba384efc3a1e0e0cc282e47e7f54a7405ff5da486f92d547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3aba95c1e0b414b7ba384efc3a1e0e0cc282e47e7f54a7405ff5da486f92d547->leave($__internal_3aba95c1e0b414b7ba384efc3a1e0e0cc282e47e7f54a7405ff5da486f92d547_prof);

        
        $__internal_e268966c7aa815bed3d86c502abe0ef24b740d005d5d52b6bb813eb83c4cc2bb->leave($__internal_e268966c7aa815bed3d86c502abe0ef24b740d005d5d52b6bb813eb83c4cc2bb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_663d7b664fab15c88c942df9e1219040404de8a9e051ede72422a21e1ba6797c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663d7b664fab15c88c942df9e1219040404de8a9e051ede72422a21e1ba6797c->enter($__internal_663d7b664fab15c88c942df9e1219040404de8a9e051ede72422a21e1ba6797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_57312d34baf26e28063ba56c9a0fa2a1ab0b4756920962edbe6766338abb7b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57312d34baf26e28063ba56c9a0fa2a1ab0b4756920962edbe6766338abb7b13->enter($__internal_57312d34baf26e28063ba56c9a0fa2a1ab0b4756920962edbe6766338abb7b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_57312d34baf26e28063ba56c9a0fa2a1ab0b4756920962edbe6766338abb7b13->leave($__internal_57312d34baf26e28063ba56c9a0fa2a1ab0b4756920962edbe6766338abb7b13_prof);

        
        $__internal_663d7b664fab15c88c942df9e1219040404de8a9e051ede72422a21e1ba6797c->leave($__internal_663d7b664fab15c88c942df9e1219040404de8a9e051ede72422a21e1ba6797c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  72 => 9,  63 => 7,  51 => 4,  42 => 2,  32 => 12,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
