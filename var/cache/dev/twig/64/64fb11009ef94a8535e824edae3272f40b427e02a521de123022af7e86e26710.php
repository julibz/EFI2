<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_70b3ac79e10425471899dd85316a17aed86b1e075fa5f876339477c90b3e840c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_a8c9653f4de4d380beb35e8e9c98c12bad26301b896864061f500cbd861e5c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c9653f4de4d380beb35e8e9c98c12bad26301b896864061f500cbd861e5c29->enter($__internal_a8c9653f4de4d380beb35e8e9c98c12bad26301b896864061f500cbd861e5c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_e141f4f23d418652302965a6414889d01cf9a6175e2f472d93b6c9c50b7dfcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e141f4f23d418652302965a6414889d01cf9a6175e2f472d93b6c9c50b7dfcd5->enter($__internal_e141f4f23d418652302965a6414889d01cf9a6175e2f472d93b6c9c50b7dfcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c9653f4de4d380beb35e8e9c98c12bad26301b896864061f500cbd861e5c29->leave($__internal_a8c9653f4de4d380beb35e8e9c98c12bad26301b896864061f500cbd861e5c29_prof);

        
        $__internal_e141f4f23d418652302965a6414889d01cf9a6175e2f472d93b6c9c50b7dfcd5->leave($__internal_e141f4f23d418652302965a6414889d01cf9a6175e2f472d93b6c9c50b7dfcd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47f008f53ed3dc5e017162695098d1709ca3a075fec40d4d5b71f8d20081bc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f008f53ed3dc5e017162695098d1709ca3a075fec40d4d5b71f8d20081bc7d->enter($__internal_47f008f53ed3dc5e017162695098d1709ca3a075fec40d4d5b71f8d20081bc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_06d192f3e2d9847697cabdb9fedbe87ed3be1c6d0d33ee265cc10dfead1f09ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d192f3e2d9847697cabdb9fedbe87ed3be1c6d0d33ee265cc10dfead1f09ac->enter($__internal_06d192f3e2d9847697cabdb9fedbe87ed3be1c6d0d33ee265cc10dfead1f09ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_06d192f3e2d9847697cabdb9fedbe87ed3be1c6d0d33ee265cc10dfead1f09ac->leave($__internal_06d192f3e2d9847697cabdb9fedbe87ed3be1c6d0d33ee265cc10dfead1f09ac_prof);

        
        $__internal_47f008f53ed3dc5e017162695098d1709ca3a075fec40d4d5b71f8d20081bc7d->leave($__internal_47f008f53ed3dc5e017162695098d1709ca3a075fec40d4d5b71f8d20081bc7d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
