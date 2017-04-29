<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_92ee31aafb87567c7aa560e21d9b8731bf030f54296353128c27ef09e1b80951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_450cb1e1f7a5c06a258817623492ca3df367c0047d0a1b777960d36245a79229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450cb1e1f7a5c06a258817623492ca3df367c0047d0a1b777960d36245a79229->enter($__internal_450cb1e1f7a5c06a258817623492ca3df367c0047d0a1b777960d36245a79229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_591c426bcf12982b6e76b68b0084c074136dd807dc3f0df73cfb9d6b1d2036c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591c426bcf12982b6e76b68b0084c074136dd807dc3f0df73cfb9d6b1d2036c8->enter($__internal_591c426bcf12982b6e76b68b0084c074136dd807dc3f0df73cfb9d6b1d2036c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_450cb1e1f7a5c06a258817623492ca3df367c0047d0a1b777960d36245a79229->leave($__internal_450cb1e1f7a5c06a258817623492ca3df367c0047d0a1b777960d36245a79229_prof);

        
        $__internal_591c426bcf12982b6e76b68b0084c074136dd807dc3f0df73cfb9d6b1d2036c8->leave($__internal_591c426bcf12982b6e76b68b0084c074136dd807dc3f0df73cfb9d6b1d2036c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83cdfddbf607703365c320affd3dab79b01fbdaaa89e2db3ea60c9451d1ab923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cdfddbf607703365c320affd3dab79b01fbdaaa89e2db3ea60c9451d1ab923->enter($__internal_83cdfddbf607703365c320affd3dab79b01fbdaaa89e2db3ea60c9451d1ab923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a55145a3a20bc3f6d86b201aff75850b999e1b1949a6f63d29cc63f69177597b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55145a3a20bc3f6d86b201aff75850b999e1b1949a6f63d29cc63f69177597b->enter($__internal_a55145a3a20bc3f6d86b201aff75850b999e1b1949a6f63d29cc63f69177597b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_a55145a3a20bc3f6d86b201aff75850b999e1b1949a6f63d29cc63f69177597b->leave($__internal_a55145a3a20bc3f6d86b201aff75850b999e1b1949a6f63d29cc63f69177597b_prof);

        
        $__internal_83cdfddbf607703365c320affd3dab79b01fbdaaa89e2db3ea60c9451d1ab923->leave($__internal_83cdfddbf607703365c320affd3dab79b01fbdaaa89e2db3ea60c9451d1ab923_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
