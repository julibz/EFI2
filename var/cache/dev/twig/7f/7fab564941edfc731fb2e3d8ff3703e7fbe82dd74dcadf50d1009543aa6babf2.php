<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_5199088eeb9f244346910bd76059d6d1997d4dcd6f178f95fda1083f2bdc8cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e9fcb6dec6722514d9c8be804099ffe3ff86719be94e0915933a479590c123c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9fcb6dec6722514d9c8be804099ffe3ff86719be94e0915933a479590c123c->enter($__internal_5e9fcb6dec6722514d9c8be804099ffe3ff86719be94e0915933a479590c123c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_48dcdac2652f997feff1eeaab79191684c796f0e6ab5f9010a9bf30f4f016272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dcdac2652f997feff1eeaab79191684c796f0e6ab5f9010a9bf30f4f016272->enter($__internal_48dcdac2652f997feff1eeaab79191684c796f0e6ab5f9010a9bf30f4f016272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5e9fcb6dec6722514d9c8be804099ffe3ff86719be94e0915933a479590c123c->leave($__internal_5e9fcb6dec6722514d9c8be804099ffe3ff86719be94e0915933a479590c123c_prof);

        
        $__internal_48dcdac2652f997feff1eeaab79191684c796f0e6ab5f9010a9bf30f4f016272->leave($__internal_48dcdac2652f997feff1eeaab79191684c796f0e6ab5f9010a9bf30f4f016272_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2f0b70f7768969531b654a3607ae94b8ff58bcbbcb41595f04e67ded94b21e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0b70f7768969531b654a3607ae94b8ff58bcbbcb41595f04e67ded94b21e86->enter($__internal_2f0b70f7768969531b654a3607ae94b8ff58bcbbcb41595f04e67ded94b21e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4925d0dbd760d523ba7b6caa306b92780e0acb1bf0461f56aa3017bc9391df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4925d0dbd760d523ba7b6caa306b92780e0acb1bf0461f56aa3017bc9391df53->enter($__internal_4925d0dbd760d523ba7b6caa306b92780e0acb1bf0461f56aa3017bc9391df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4925d0dbd760d523ba7b6caa306b92780e0acb1bf0461f56aa3017bc9391df53->leave($__internal_4925d0dbd760d523ba7b6caa306b92780e0acb1bf0461f56aa3017bc9391df53_prof);

        
        $__internal_2f0b70f7768969531b654a3607ae94b8ff58bcbbcb41595f04e67ded94b21e86->leave($__internal_2f0b70f7768969531b654a3607ae94b8ff58bcbbcb41595f04e67ded94b21e86_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fe4dfb56879ffae7078dfe665d3e47ff6d26a082c26788a7ee7d02f7a3b47870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4dfb56879ffae7078dfe665d3e47ff6d26a082c26788a7ee7d02f7a3b47870->enter($__internal_fe4dfb56879ffae7078dfe665d3e47ff6d26a082c26788a7ee7d02f7a3b47870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f1205a3a1fc6a54dc621e719d2ab43e766f096f081dd9fbb5ff604552b58a1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1205a3a1fc6a54dc621e719d2ab43e766f096f081dd9fbb5ff604552b58a1a5->enter($__internal_f1205a3a1fc6a54dc621e719d2ab43e766f096f081dd9fbb5ff604552b58a1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f1205a3a1fc6a54dc621e719d2ab43e766f096f081dd9fbb5ff604552b58a1a5->leave($__internal_f1205a3a1fc6a54dc621e719d2ab43e766f096f081dd9fbb5ff604552b58a1a5_prof);

        
        $__internal_fe4dfb56879ffae7078dfe665d3e47ff6d26a082c26788a7ee7d02f7a3b47870->leave($__internal_fe4dfb56879ffae7078dfe665d3e47ff6d26a082c26788a7ee7d02f7a3b47870_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a37d29235f0e7069fce2a1b9f1b28a70266cefd59db290a2558f3322d021e412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37d29235f0e7069fce2a1b9f1b28a70266cefd59db290a2558f3322d021e412->enter($__internal_a37d29235f0e7069fce2a1b9f1b28a70266cefd59db290a2558f3322d021e412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_46626546f08bf8a9549c54b5bdbcec6a1289e7cfc27925b01aff17100f8c081c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46626546f08bf8a9549c54b5bdbcec6a1289e7cfc27925b01aff17100f8c081c->enter($__internal_46626546f08bf8a9549c54b5bdbcec6a1289e7cfc27925b01aff17100f8c081c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_46626546f08bf8a9549c54b5bdbcec6a1289e7cfc27925b01aff17100f8c081c->leave($__internal_46626546f08bf8a9549c54b5bdbcec6a1289e7cfc27925b01aff17100f8c081c_prof);

        
        $__internal_a37d29235f0e7069fce2a1b9f1b28a70266cefd59db290a2558f3322d021e412->leave($__internal_a37d29235f0e7069fce2a1b9f1b28a70266cefd59db290a2558f3322d021e412_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  72 => 9,  63 => 7,  51 => 4,  42 => 2,  32 => 12,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
