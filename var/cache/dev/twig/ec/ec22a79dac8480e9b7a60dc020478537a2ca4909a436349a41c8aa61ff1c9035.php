<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_8bb66fde78782974b206b76ed465871380c7cd28de0314346a45997c4293c535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_b9211611d0d89841b3167cc24c89380322f649ea301f111adf69b929e87eab5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9211611d0d89841b3167cc24c89380322f649ea301f111adf69b929e87eab5d->enter($__internal_b9211611d0d89841b3167cc24c89380322f649ea301f111adf69b929e87eab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_ce7e82f38d6f524d9bb533446e5dd9f7790d1cc7fd27fdb8cc6a1f2dd74319e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7e82f38d6f524d9bb533446e5dd9f7790d1cc7fd27fdb8cc6a1f2dd74319e4->enter($__internal_ce7e82f38d6f524d9bb533446e5dd9f7790d1cc7fd27fdb8cc6a1f2dd74319e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9211611d0d89841b3167cc24c89380322f649ea301f111adf69b929e87eab5d->leave($__internal_b9211611d0d89841b3167cc24c89380322f649ea301f111adf69b929e87eab5d_prof);

        
        $__internal_ce7e82f38d6f524d9bb533446e5dd9f7790d1cc7fd27fdb8cc6a1f2dd74319e4->leave($__internal_ce7e82f38d6f524d9bb533446e5dd9f7790d1cc7fd27fdb8cc6a1f2dd74319e4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_addf08f3b55c23007dec34653a1babbd4d05fb51e65384ec7cc9ccdc381f457c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addf08f3b55c23007dec34653a1babbd4d05fb51e65384ec7cc9ccdc381f457c->enter($__internal_addf08f3b55c23007dec34653a1babbd4d05fb51e65384ec7cc9ccdc381f457c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3fd491b8c0bf59376a4181fdd592d3b075eb59d22495d22b8cdc843c19241fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fd491b8c0bf59376a4181fdd592d3b075eb59d22495d22b8cdc843c19241fa->enter($__internal_c3fd491b8c0bf59376a4181fdd592d3b075eb59d22495d22b8cdc843c19241fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c3fd491b8c0bf59376a4181fdd592d3b075eb59d22495d22b8cdc843c19241fa->leave($__internal_c3fd491b8c0bf59376a4181fdd592d3b075eb59d22495d22b8cdc843c19241fa_prof);

        
        $__internal_addf08f3b55c23007dec34653a1babbd4d05fb51e65384ec7cc9ccdc381f457c->leave($__internal_addf08f3b55c23007dec34653a1babbd4d05fb51e65384ec7cc9ccdc381f457c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
