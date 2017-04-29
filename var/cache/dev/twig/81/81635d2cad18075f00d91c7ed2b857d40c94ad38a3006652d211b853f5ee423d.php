<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_aa3d8c904b7ea44de790740a84c936f6a7dabe08c21c93c7b863b137544a7778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_3c54351aafc5577fbd95e5380e0a8b9f21817af898855cff02b32792f70458ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c54351aafc5577fbd95e5380e0a8b9f21817af898855cff02b32792f70458ab->enter($__internal_3c54351aafc5577fbd95e5380e0a8b9f21817af898855cff02b32792f70458ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_27346e8c03851ce849ffb263c6c98bb93a4c7185d073c4ebe7e5c5dcc38138cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27346e8c03851ce849ffb263c6c98bb93a4c7185d073c4ebe7e5c5dcc38138cc->enter($__internal_27346e8c03851ce849ffb263c6c98bb93a4c7185d073c4ebe7e5c5dcc38138cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c54351aafc5577fbd95e5380e0a8b9f21817af898855cff02b32792f70458ab->leave($__internal_3c54351aafc5577fbd95e5380e0a8b9f21817af898855cff02b32792f70458ab_prof);

        
        $__internal_27346e8c03851ce849ffb263c6c98bb93a4c7185d073c4ebe7e5c5dcc38138cc->leave($__internal_27346e8c03851ce849ffb263c6c98bb93a4c7185d073c4ebe7e5c5dcc38138cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9b8a88833e08f558da75e0197ff860b8c3b78834f8aebcdcda19feb6ddd4fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b8a88833e08f558da75e0197ff860b8c3b78834f8aebcdcda19feb6ddd4fc0->enter($__internal_b9b8a88833e08f558da75e0197ff860b8c3b78834f8aebcdcda19feb6ddd4fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f7e482010fd912fe2893b95365a26ed3f05c52bfd0e5c80b732fee5fb8a1c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7e482010fd912fe2893b95365a26ed3f05c52bfd0e5c80b732fee5fb8a1c2f->enter($__internal_4f7e482010fd912fe2893b95365a26ed3f05c52bfd0e5c80b732fee5fb8a1c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_4f7e482010fd912fe2893b95365a26ed3f05c52bfd0e5c80b732fee5fb8a1c2f->leave($__internal_4f7e482010fd912fe2893b95365a26ed3f05c52bfd0e5c80b732fee5fb8a1c2f_prof);

        
        $__internal_b9b8a88833e08f558da75e0197ff860b8c3b78834f8aebcdcda19feb6ddd4fc0->leave($__internal_b9b8a88833e08f558da75e0197ff860b8c3b78834f8aebcdcda19feb6ddd4fc0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
