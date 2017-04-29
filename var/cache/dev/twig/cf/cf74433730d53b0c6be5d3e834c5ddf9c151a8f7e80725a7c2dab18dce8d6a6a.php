<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_5415d7cb47707689a6d79aecc90d59b078960a010d06d0f021b988edb7818380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_0ccee9a2ebf95b2c1aaef7f4bab68d4b0e351e3c6d2284e1afd7119f2f6e61ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccee9a2ebf95b2c1aaef7f4bab68d4b0e351e3c6d2284e1afd7119f2f6e61ad->enter($__internal_0ccee9a2ebf95b2c1aaef7f4bab68d4b0e351e3c6d2284e1afd7119f2f6e61ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_3168d5c7fa89030f8816d5a44e1113f3fa30c2370d4a4aa6ba863d559e7db283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3168d5c7fa89030f8816d5a44e1113f3fa30c2370d4a4aa6ba863d559e7db283->enter($__internal_3168d5c7fa89030f8816d5a44e1113f3fa30c2370d4a4aa6ba863d559e7db283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ccee9a2ebf95b2c1aaef7f4bab68d4b0e351e3c6d2284e1afd7119f2f6e61ad->leave($__internal_0ccee9a2ebf95b2c1aaef7f4bab68d4b0e351e3c6d2284e1afd7119f2f6e61ad_prof);

        
        $__internal_3168d5c7fa89030f8816d5a44e1113f3fa30c2370d4a4aa6ba863d559e7db283->leave($__internal_3168d5c7fa89030f8816d5a44e1113f3fa30c2370d4a4aa6ba863d559e7db283_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bac9fe5ac8095e2d1946c69331a9a2531e1720b6e16f7e1e746ad9433f613dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac9fe5ac8095e2d1946c69331a9a2531e1720b6e16f7e1e746ad9433f613dfb->enter($__internal_bac9fe5ac8095e2d1946c69331a9a2531e1720b6e16f7e1e746ad9433f613dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_43bdf3603bbd3b491a82bc0139a83cf0db7c3d5a7b20b15f1628f30e084d377a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bdf3603bbd3b491a82bc0139a83cf0db7c3d5a7b20b15f1628f30e084d377a->enter($__internal_43bdf3603bbd3b491a82bc0139a83cf0db7c3d5a7b20b15f1628f30e084d377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <br>
    <br>
    <br>
    <br>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 11
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 12
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_43bdf3603bbd3b491a82bc0139a83cf0db7c3d5a7b20b15f1628f30e084d377a->leave($__internal_43bdf3603bbd3b491a82bc0139a83cf0db7c3d5a7b20b15f1628f30e084d377a_prof);

        
        $__internal_bac9fe5ac8095e2d1946c69331a9a2531e1720b6e16f7e1e746ad9433f613dfb->leave($__internal_bac9fe5ac8095e2d1946c69331a9a2531e1720b6e16f7e1e746ad9433f613dfb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  59 => 11,  55 => 10,  49 => 6,  40 => 5,  11 => 1,);
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
    <br>
    <br>
    <br>
    <br>
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
