<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_3d3378951b0ee495f5b03a144b71a340e4cbb334120df80255f3314cd8340269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_d45f36abbd4ce4b00dd2e12d708cedf6ae0e000cab38d97396ed0fe77b2df607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45f36abbd4ce4b00dd2e12d708cedf6ae0e000cab38d97396ed0fe77b2df607->enter($__internal_d45f36abbd4ce4b00dd2e12d708cedf6ae0e000cab38d97396ed0fe77b2df607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_90215388e6af83166c8eb24dcfe370e08e7be104ba730795a8c7d57b29e70736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90215388e6af83166c8eb24dcfe370e08e7be104ba730795a8c7d57b29e70736->enter($__internal_90215388e6af83166c8eb24dcfe370e08e7be104ba730795a8c7d57b29e70736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45f36abbd4ce4b00dd2e12d708cedf6ae0e000cab38d97396ed0fe77b2df607->leave($__internal_d45f36abbd4ce4b00dd2e12d708cedf6ae0e000cab38d97396ed0fe77b2df607_prof);

        
        $__internal_90215388e6af83166c8eb24dcfe370e08e7be104ba730795a8c7d57b29e70736->leave($__internal_90215388e6af83166c8eb24dcfe370e08e7be104ba730795a8c7d57b29e70736_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f783d94b3a5d5a46e08b90705e102a6844cab96183f5db77b778c53c132db43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f783d94b3a5d5a46e08b90705e102a6844cab96183f5db77b778c53c132db43b->enter($__internal_f783d94b3a5d5a46e08b90705e102a6844cab96183f5db77b778c53c132db43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d711c1d2bc893497569e08bb7803bc1609ab3c1785baf288506c4f566320aac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d711c1d2bc893497569e08bb7803bc1609ab3c1785baf288506c4f566320aac2->enter($__internal_d711c1d2bc893497569e08bb7803bc1609ab3c1785baf288506c4f566320aac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_d711c1d2bc893497569e08bb7803bc1609ab3c1785baf288506c4f566320aac2->leave($__internal_d711c1d2bc893497569e08bb7803bc1609ab3c1785baf288506c4f566320aac2_prof);

        
        $__internal_f783d94b3a5d5a46e08b90705e102a6844cab96183f5db77b778c53c132db43b->leave($__internal_f783d94b3a5d5a46e08b90705e102a6844cab96183f5db77b778c53c132db43b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
