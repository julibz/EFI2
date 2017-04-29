<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9578d25f12c664c66cb542891e90d8bc022be66feb5461e563adb742df62d818 extends Twig_Template
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
        $__internal_2e3e945278f5d58b092858c70da891ba5a6fdb7821063af6227fee57bb7bd924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3e945278f5d58b092858c70da891ba5a6fdb7821063af6227fee57bb7bd924->enter($__internal_2e3e945278f5d58b092858c70da891ba5a6fdb7821063af6227fee57bb7bd924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_516fb8a1305581921ec60a429943610691d0e52383780435ed9e6f136a444136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516fb8a1305581921ec60a429943610691d0e52383780435ed9e6f136a444136->enter($__internal_516fb8a1305581921ec60a429943610691d0e52383780435ed9e6f136a444136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2e3e945278f5d58b092858c70da891ba5a6fdb7821063af6227fee57bb7bd924->leave($__internal_2e3e945278f5d58b092858c70da891ba5a6fdb7821063af6227fee57bb7bd924_prof);

        
        $__internal_516fb8a1305581921ec60a429943610691d0e52383780435ed9e6f136a444136->leave($__internal_516fb8a1305581921ec60a429943610691d0e52383780435ed9e6f136a444136_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
