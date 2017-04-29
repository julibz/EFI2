<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_1d16d8e5f3f71f875f791a9f6e909f75fc1af778f522f6bdcd814deeaa30c9c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_7c5a45b3b4e558dd5a6a195eead042476969cd24b698ea915c0ebca1db41f598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5a45b3b4e558dd5a6a195eead042476969cd24b698ea915c0ebca1db41f598->enter($__internal_7c5a45b3b4e558dd5a6a195eead042476969cd24b698ea915c0ebca1db41f598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_b8fea620c56223a69762411122d5a7cf9bc6ed8980f4ece9705b3efbe4051492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fea620c56223a69762411122d5a7cf9bc6ed8980f4ece9705b3efbe4051492->enter($__internal_b8fea620c56223a69762411122d5a7cf9bc6ed8980f4ece9705b3efbe4051492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5a45b3b4e558dd5a6a195eead042476969cd24b698ea915c0ebca1db41f598->leave($__internal_7c5a45b3b4e558dd5a6a195eead042476969cd24b698ea915c0ebca1db41f598_prof);

        
        $__internal_b8fea620c56223a69762411122d5a7cf9bc6ed8980f4ece9705b3efbe4051492->leave($__internal_b8fea620c56223a69762411122d5a7cf9bc6ed8980f4ece9705b3efbe4051492_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb6b5ee8bfdb148c0a4a3afccd0a6b2395ea6149abe01c00e9beb80b352ae712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6b5ee8bfdb148c0a4a3afccd0a6b2395ea6149abe01c00e9beb80b352ae712->enter($__internal_eb6b5ee8bfdb148c0a4a3afccd0a6b2395ea6149abe01c00e9beb80b352ae712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce8a896cd11cc42e4a67f67290f10b7fa3b74463a222aff33353bcacdf6516ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8a896cd11cc42e4a67f67290f10b7fa3b74463a222aff33353bcacdf6516ae->enter($__internal_ce8a896cd11cc42e4a67f67290f10b7fa3b74463a222aff33353bcacdf6516ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ce8a896cd11cc42e4a67f67290f10b7fa3b74463a222aff33353bcacdf6516ae->leave($__internal_ce8a896cd11cc42e4a67f67290f10b7fa3b74463a222aff33353bcacdf6516ae_prof);

        
        $__internal_eb6b5ee8bfdb148c0a4a3afccd0a6b2395ea6149abe01c00e9beb80b352ae712->leave($__internal_eb6b5ee8bfdb148c0a4a3afccd0a6b2395ea6149abe01c00e9beb80b352ae712_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
