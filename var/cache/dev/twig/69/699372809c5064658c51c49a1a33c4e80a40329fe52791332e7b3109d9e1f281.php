<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4e20fa9991f6b7579ed397eb152bb70803f7b131e0a173d79c5cc9905bf44dd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6c318e8c0a89f2229c9d39d7caa3787a9600847203c947f1169c483b5977dbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c318e8c0a89f2229c9d39d7caa3787a9600847203c947f1169c483b5977dbe0->enter($__internal_6c318e8c0a89f2229c9d39d7caa3787a9600847203c947f1169c483b5977dbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_b79357d3806a48eeaaaa6168c15d4885c078e97d34f0316be0407df0aa2dd9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79357d3806a48eeaaaa6168c15d4885c078e97d34f0316be0407df0aa2dd9e2->enter($__internal_b79357d3806a48eeaaaa6168c15d4885c078e97d34f0316be0407df0aa2dd9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c318e8c0a89f2229c9d39d7caa3787a9600847203c947f1169c483b5977dbe0->leave($__internal_6c318e8c0a89f2229c9d39d7caa3787a9600847203c947f1169c483b5977dbe0_prof);

        
        $__internal_b79357d3806a48eeaaaa6168c15d4885c078e97d34f0316be0407df0aa2dd9e2->leave($__internal_b79357d3806a48eeaaaa6168c15d4885c078e97d34f0316be0407df0aa2dd9e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_635efaf6f661a5bf8ff55de28b41b7a12d23a245d09dd2cb4ef897b040ca3a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635efaf6f661a5bf8ff55de28b41b7a12d23a245d09dd2cb4ef897b040ca3a14->enter($__internal_635efaf6f661a5bf8ff55de28b41b7a12d23a245d09dd2cb4ef897b040ca3a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99c78ff216e32a8fa716ec6fced57d94d52b3257045604cca0f3fe5224411a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c78ff216e32a8fa716ec6fced57d94d52b3257045604cca0f3fe5224411a68->enter($__internal_99c78ff216e32a8fa716ec6fced57d94d52b3257045604cca0f3fe5224411a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <br>
    <br>
    <br>
";
        // line 7
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 7)->display($context);
        
        $__internal_99c78ff216e32a8fa716ec6fced57d94d52b3257045604cca0f3fe5224411a68->leave($__internal_99c78ff216e32a8fa716ec6fced57d94d52b3257045604cca0f3fe5224411a68_prof);

        
        $__internal_635efaf6f661a5bf8ff55de28b41b7a12d23a245d09dd2cb4ef897b040ca3a14->leave($__internal_635efaf6f661a5bf8ff55de28b41b7a12d23a245d09dd2cb4ef897b040ca3a14_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <br>
    <br>
    <br>
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
