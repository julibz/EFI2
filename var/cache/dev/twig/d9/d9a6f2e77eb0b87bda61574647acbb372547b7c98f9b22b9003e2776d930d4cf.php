<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_bd4e7bf7dbd27d09470a964619a748193cbaf0edbd5c312b96bb9f7ca5bd264b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aff9ca95d8fdc326d2ad9f36d5e54b6f2de36d082a3163c6d49b4f17f8c65854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff9ca95d8fdc326d2ad9f36d5e54b6f2de36d082a3163c6d49b4f17f8c65854->enter($__internal_aff9ca95d8fdc326d2ad9f36d5e54b6f2de36d082a3163c6d49b4f17f8c65854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_93e72a857e962baed7eaaf373303904f6c6f70d3eaee4fb507534eeb7d772a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e72a857e962baed7eaaf373303904f6c6f70d3eaee4fb507534eeb7d772a7d->enter($__internal_93e72a857e962baed7eaaf373303904f6c6f70d3eaee4fb507534eeb7d772a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_aff9ca95d8fdc326d2ad9f36d5e54b6f2de36d082a3163c6d49b4f17f8c65854->leave($__internal_aff9ca95d8fdc326d2ad9f36d5e54b6f2de36d082a3163c6d49b4f17f8c65854_prof);

        
        $__internal_93e72a857e962baed7eaaf373303904f6c6f70d3eaee4fb507534eeb7d772a7d->leave($__internal_93e72a857e962baed7eaaf373303904f6c6f70d3eaee4fb507534eeb7d772a7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
