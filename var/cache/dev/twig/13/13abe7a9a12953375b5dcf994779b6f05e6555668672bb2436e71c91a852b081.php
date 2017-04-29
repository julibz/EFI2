<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_096855d98d10fe94af3194bcd9e0eed798c9e28788df476fcdc4064f3f141c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_61af57c9180d7b901495f71d3f5b9b5ad9a815f6a5ff9b5e0574ecbc551fbe05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61af57c9180d7b901495f71d3f5b9b5ad9a815f6a5ff9b5e0574ecbc551fbe05->enter($__internal_61af57c9180d7b901495f71d3f5b9b5ad9a815f6a5ff9b5e0574ecbc551fbe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_3ef5c7bd8b9824ba23b613198007ef71a578f300badf987c2e8af7478c3e9b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef5c7bd8b9824ba23b613198007ef71a578f300badf987c2e8af7478c3e9b26->enter($__internal_3ef5c7bd8b9824ba23b613198007ef71a578f300badf987c2e8af7478c3e9b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61af57c9180d7b901495f71d3f5b9b5ad9a815f6a5ff9b5e0574ecbc551fbe05->leave($__internal_61af57c9180d7b901495f71d3f5b9b5ad9a815f6a5ff9b5e0574ecbc551fbe05_prof);

        
        $__internal_3ef5c7bd8b9824ba23b613198007ef71a578f300badf987c2e8af7478c3e9b26->leave($__internal_3ef5c7bd8b9824ba23b613198007ef71a578f300badf987c2e8af7478c3e9b26_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fbf3c14faefbe0d61f3e52420064601c1f9e6c616e5e6b7d347c3959d0f4e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbf3c14faefbe0d61f3e52420064601c1f9e6c616e5e6b7d347c3959d0f4e79->enter($__internal_8fbf3c14faefbe0d61f3e52420064601c1f9e6c616e5e6b7d347c3959d0f4e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f2806354ff2328eba0ae5173aa2c244f50ef3c8b6c0f6d4122da4b2db42f66d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2806354ff2328eba0ae5173aa2c244f50ef3c8b6c0f6d4122da4b2db42f66d2->enter($__internal_f2806354ff2328eba0ae5173aa2c244f50ef3c8b6c0f6d4122da4b2db42f66d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f2806354ff2328eba0ae5173aa2c244f50ef3c8b6c0f6d4122da4b2db42f66d2->leave($__internal_f2806354ff2328eba0ae5173aa2c244f50ef3c8b6c0f6d4122da4b2db42f66d2_prof);

        
        $__internal_8fbf3c14faefbe0d61f3e52420064601c1f9e6c616e5e6b7d347c3959d0f4e79->leave($__internal_8fbf3c14faefbe0d61f3e52420064601c1f9e6c616e5e6b7d347c3959d0f4e79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
