<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f4df5fbff1059ef0d58a6b50af54ca215c05d8f23dd280390aa923bf2eb68bd8 extends Twig_Template
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
        $__internal_cdf4fcdaf1d180dd13e8c76a5282a294a6e5932bfeb523e581edd130a45d9df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf4fcdaf1d180dd13e8c76a5282a294a6e5932bfeb523e581edd130a45d9df0->enter($__internal_cdf4fcdaf1d180dd13e8c76a5282a294a6e5932bfeb523e581edd130a45d9df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ff3cde437552046714b1c79ed4e73ec75476edad9e6489a60760110525127269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3cde437552046714b1c79ed4e73ec75476edad9e6489a60760110525127269->enter($__internal_ff3cde437552046714b1c79ed4e73ec75476edad9e6489a60760110525127269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cdf4fcdaf1d180dd13e8c76a5282a294a6e5932bfeb523e581edd130a45d9df0->leave($__internal_cdf4fcdaf1d180dd13e8c76a5282a294a6e5932bfeb523e581edd130a45d9df0_prof);

        
        $__internal_ff3cde437552046714b1c79ed4e73ec75476edad9e6489a60760110525127269->leave($__internal_ff3cde437552046714b1c79ed4e73ec75476edad9e6489a60760110525127269_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
