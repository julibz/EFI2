<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_300208cd63aec3dff2889b844563bb82057fa61797ba6545622b005cbfa18ec2 extends Twig_Template
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
        $__internal_778ce8d6ef3dab5feaf92f14449a03427ed00d45f8931b1e9a483acaf35cc43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778ce8d6ef3dab5feaf92f14449a03427ed00d45f8931b1e9a483acaf35cc43a->enter($__internal_778ce8d6ef3dab5feaf92f14449a03427ed00d45f8931b1e9a483acaf35cc43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_9f4bfaef5ba7656672a625e30a6c3c6ecea97af795d065c43542f6474cf18157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4bfaef5ba7656672a625e30a6c3c6ecea97af795d065c43542f6474cf18157->enter($__internal_9f4bfaef5ba7656672a625e30a6c3c6ecea97af795d065c43542f6474cf18157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_778ce8d6ef3dab5feaf92f14449a03427ed00d45f8931b1e9a483acaf35cc43a->leave($__internal_778ce8d6ef3dab5feaf92f14449a03427ed00d45f8931b1e9a483acaf35cc43a_prof);

        
        $__internal_9f4bfaef5ba7656672a625e30a6c3c6ecea97af795d065c43542f6474cf18157->leave($__internal_9f4bfaef5ba7656672a625e30a6c3c6ecea97af795d065c43542f6474cf18157_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8a392c1332d82da13d23fba7397bedb689c3af01aad017223ebf0a8a3462421d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a392c1332d82da13d23fba7397bedb689c3af01aad017223ebf0a8a3462421d->enter($__internal_8a392c1332d82da13d23fba7397bedb689c3af01aad017223ebf0a8a3462421d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a00a32f51da3143917dfdd7514ecc21b850a43a36fd10283ab947b36ea588905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00a32f51da3143917dfdd7514ecc21b850a43a36fd10283ab947b36ea588905->enter($__internal_a00a32f51da3143917dfdd7514ecc21b850a43a36fd10283ab947b36ea588905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a00a32f51da3143917dfdd7514ecc21b850a43a36fd10283ab947b36ea588905->leave($__internal_a00a32f51da3143917dfdd7514ecc21b850a43a36fd10283ab947b36ea588905_prof);

        
        $__internal_8a392c1332d82da13d23fba7397bedb689c3af01aad017223ebf0a8a3462421d->leave($__internal_8a392c1332d82da13d23fba7397bedb689c3af01aad017223ebf0a8a3462421d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_71b90429c780bb5320e613443af8af21743fb0c29f36f361851384f321cefe88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b90429c780bb5320e613443af8af21743fb0c29f36f361851384f321cefe88->enter($__internal_71b90429c780bb5320e613443af8af21743fb0c29f36f361851384f321cefe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_56e04b8246932c4363332771f2a2eadf5b612663e7e76592aef1dc864988608b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e04b8246932c4363332771f2a2eadf5b612663e7e76592aef1dc864988608b->enter($__internal_56e04b8246932c4363332771f2a2eadf5b612663e7e76592aef1dc864988608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_56e04b8246932c4363332771f2a2eadf5b612663e7e76592aef1dc864988608b->leave($__internal_56e04b8246932c4363332771f2a2eadf5b612663e7e76592aef1dc864988608b_prof);

        
        $__internal_71b90429c780bb5320e613443af8af21743fb0c29f36f361851384f321cefe88->leave($__internal_71b90429c780bb5320e613443af8af21743fb0c29f36f361851384f321cefe88_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_739ce6a6bfdb8ebc6b7b041febb46d7ed6a293be48ea1c222c78220f1ac79559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739ce6a6bfdb8ebc6b7b041febb46d7ed6a293be48ea1c222c78220f1ac79559->enter($__internal_739ce6a6bfdb8ebc6b7b041febb46d7ed6a293be48ea1c222c78220f1ac79559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1bfb95e94e42604a28d68a14880224265478900d321b66fe200831dfd60fa856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfb95e94e42604a28d68a14880224265478900d321b66fe200831dfd60fa856->enter($__internal_1bfb95e94e42604a28d68a14880224265478900d321b66fe200831dfd60fa856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1bfb95e94e42604a28d68a14880224265478900d321b66fe200831dfd60fa856->leave($__internal_1bfb95e94e42604a28d68a14880224265478900d321b66fe200831dfd60fa856_prof);

        
        $__internal_739ce6a6bfdb8ebc6b7b041febb46d7ed6a293be48ea1c222c78220f1ac79559->leave($__internal_739ce6a6bfdb8ebc6b7b041febb46d7ed6a293be48ea1c222c78220f1ac79559_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
