<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_65e81cdb5a8f95a23ccac2e33166dd96c6e0050fb0c13e8dbcf41a7cb5aa8f40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_c4014074c8aac08c278559f4d90866c5d4a1ca3349365f6d500c545b9f75761e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4014074c8aac08c278559f4d90866c5d4a1ca3349365f6d500c545b9f75761e->enter($__internal_c4014074c8aac08c278559f4d90866c5d4a1ca3349365f6d500c545b9f75761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_52c5eb0aa9dc5d1fbd48ba258e16227689728c9856394c2ada292dfa24000340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c5eb0aa9dc5d1fbd48ba258e16227689728c9856394c2ada292dfa24000340->enter($__internal_52c5eb0aa9dc5d1fbd48ba258e16227689728c9856394c2ada292dfa24000340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4014074c8aac08c278559f4d90866c5d4a1ca3349365f6d500c545b9f75761e->leave($__internal_c4014074c8aac08c278559f4d90866c5d4a1ca3349365f6d500c545b9f75761e_prof);

        
        $__internal_52c5eb0aa9dc5d1fbd48ba258e16227689728c9856394c2ada292dfa24000340->leave($__internal_52c5eb0aa9dc5d1fbd48ba258e16227689728c9856394c2ada292dfa24000340_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b16d8481f3af243224d93a0156aece090eff4bf1e1bf25d3e93ac0b6071d9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b16d8481f3af243224d93a0156aece090eff4bf1e1bf25d3e93ac0b6071d9a1->enter($__internal_6b16d8481f3af243224d93a0156aece090eff4bf1e1bf25d3e93ac0b6071d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c875e3cd0781a526b43626378e79418d06d04320c44f10181318dbf632d80174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c875e3cd0781a526b43626378e79418d06d04320c44f10181318dbf632d80174->enter($__internal_c875e3cd0781a526b43626378e79418d06d04320c44f10181318dbf632d80174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_c875e3cd0781a526b43626378e79418d06d04320c44f10181318dbf632d80174->leave($__internal_c875e3cd0781a526b43626378e79418d06d04320c44f10181318dbf632d80174_prof);

        
        $__internal_6b16d8481f3af243224d93a0156aece090eff4bf1e1bf25d3e93ac0b6071d9a1->leave($__internal_6b16d8481f3af243224d93a0156aece090eff4bf1e1bf25d3e93ac0b6071d9a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
