<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6e13beb7e74967388ed2654dc5d93befcd5bff5edb19d232b2de0adea47e0cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_63880fa9b0b4f5b9b79cf60603bbd90ab4e82ed719f07cec2e39ce7e0b16d381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63880fa9b0b4f5b9b79cf60603bbd90ab4e82ed719f07cec2e39ce7e0b16d381->enter($__internal_63880fa9b0b4f5b9b79cf60603bbd90ab4e82ed719f07cec2e39ce7e0b16d381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e1ba2357f259739f943e943ff2bf96853e894d826d41316e3dd73fe6083da301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ba2357f259739f943e943ff2bf96853e894d826d41316e3dd73fe6083da301->enter($__internal_e1ba2357f259739f943e943ff2bf96853e894d826d41316e3dd73fe6083da301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63880fa9b0b4f5b9b79cf60603bbd90ab4e82ed719f07cec2e39ce7e0b16d381->leave($__internal_63880fa9b0b4f5b9b79cf60603bbd90ab4e82ed719f07cec2e39ce7e0b16d381_prof);

        
        $__internal_e1ba2357f259739f943e943ff2bf96853e894d826d41316e3dd73fe6083da301->leave($__internal_e1ba2357f259739f943e943ff2bf96853e894d826d41316e3dd73fe6083da301_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27fb78166270a290bf954bdce5acfeb6876f11b68a92d24fefa333d22f75c4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fb78166270a290bf954bdce5acfeb6876f11b68a92d24fefa333d22f75c4a9->enter($__internal_27fb78166270a290bf954bdce5acfeb6876f11b68a92d24fefa333d22f75c4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c539dd25b7433f5cf4f53f70d489f042984e8e781924c809c2e3a436921515e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c539dd25b7433f5cf4f53f70d489f042984e8e781924c809c2e3a436921515e->enter($__internal_7c539dd25b7433f5cf4f53f70d489f042984e8e781924c809c2e3a436921515e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_7c539dd25b7433f5cf4f53f70d489f042984e8e781924c809c2e3a436921515e->leave($__internal_7c539dd25b7433f5cf4f53f70d489f042984e8e781924c809c2e3a436921515e_prof);

        
        $__internal_27fb78166270a290bf954bdce5acfeb6876f11b68a92d24fefa333d22f75c4a9->leave($__internal_27fb78166270a290bf954bdce5acfeb6876f11b68a92d24fefa333d22f75c4a9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
