<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_18d05615aae2f2442b9ff6c0b0164d3f5dadb907a47d8c56b6f11a26c894176d extends Twig_Template
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
        $__internal_85f954e23676214b28ebbcc38fcb555b4071f0536d53e84eead9347b5eed5a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f954e23676214b28ebbcc38fcb555b4071f0536d53e84eead9347b5eed5a3d->enter($__internal_85f954e23676214b28ebbcc38fcb555b4071f0536d53e84eead9347b5eed5a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_83a4eefcedf340b425358f5417c285f7a80d386f2b287b9cd59f1a4b70d6b693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a4eefcedf340b425358f5417c285f7a80d386f2b287b9cd59f1a4b70d6b693->enter($__internal_83a4eefcedf340b425358f5417c285f7a80d386f2b287b9cd59f1a4b70d6b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_85f954e23676214b28ebbcc38fcb555b4071f0536d53e84eead9347b5eed5a3d->leave($__internal_85f954e23676214b28ebbcc38fcb555b4071f0536d53e84eead9347b5eed5a3d_prof);

        
        $__internal_83a4eefcedf340b425358f5417c285f7a80d386f2b287b9cd59f1a4b70d6b693->leave($__internal_83a4eefcedf340b425358f5417c285f7a80d386f2b287b9cd59f1a4b70d6b693_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
