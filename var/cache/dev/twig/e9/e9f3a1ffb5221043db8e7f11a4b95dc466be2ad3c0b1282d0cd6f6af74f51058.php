<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_90eff75164c922175a1771d8b15fcc77231191608056a28383b2db96d487b107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_8d3f741fd134e9dc073adc03d6d6aee33ccf803bd6d11c0d659483a047f6b50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3f741fd134e9dc073adc03d6d6aee33ccf803bd6d11c0d659483a047f6b50f->enter($__internal_8d3f741fd134e9dc073adc03d6d6aee33ccf803bd6d11c0d659483a047f6b50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_6c6b0e77d19abfa30419f6251f73f09222444654ce8a056119cf2873e76dafa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6b0e77d19abfa30419f6251f73f09222444654ce8a056119cf2873e76dafa7->enter($__internal_6c6b0e77d19abfa30419f6251f73f09222444654ce8a056119cf2873e76dafa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3f741fd134e9dc073adc03d6d6aee33ccf803bd6d11c0d659483a047f6b50f->leave($__internal_8d3f741fd134e9dc073adc03d6d6aee33ccf803bd6d11c0d659483a047f6b50f_prof);

        
        $__internal_6c6b0e77d19abfa30419f6251f73f09222444654ce8a056119cf2873e76dafa7->leave($__internal_6c6b0e77d19abfa30419f6251f73f09222444654ce8a056119cf2873e76dafa7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_210aabfcec2cbfad6266429baff978d243343542a91a227cbeca52408a9953dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210aabfcec2cbfad6266429baff978d243343542a91a227cbeca52408a9953dd->enter($__internal_210aabfcec2cbfad6266429baff978d243343542a91a227cbeca52408a9953dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8cf4c6eb4c267f62b0b36575df044b17584b48a2f058efefe9fe88c97d7ed7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cf4c6eb4c267f62b0b36575df044b17584b48a2f058efefe9fe88c97d7ed7b->enter($__internal_b8cf4c6eb4c267f62b0b36575df044b17584b48a2f058efefe9fe88c97d7ed7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b8cf4c6eb4c267f62b0b36575df044b17584b48a2f058efefe9fe88c97d7ed7b->leave($__internal_b8cf4c6eb4c267f62b0b36575df044b17584b48a2f058efefe9fe88c97d7ed7b_prof);

        
        $__internal_210aabfcec2cbfad6266429baff978d243343542a91a227cbeca52408a9953dd->leave($__internal_210aabfcec2cbfad6266429baff978d243343542a91a227cbeca52408a9953dd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
