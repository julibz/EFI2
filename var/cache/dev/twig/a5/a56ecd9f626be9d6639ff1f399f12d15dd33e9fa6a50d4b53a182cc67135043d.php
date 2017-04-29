<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_921125c73e0003623b6636f2e91e95d814c3e72aafd6c1c81752c64d88adbe16 extends Twig_Template
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
        $__internal_3f014a1c11a3ee8c223b700696339cd9aa36728d4564275de0c6b52a5b626bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f014a1c11a3ee8c223b700696339cd9aa36728d4564275de0c6b52a5b626bde->enter($__internal_3f014a1c11a3ee8c223b700696339cd9aa36728d4564275de0c6b52a5b626bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_9ecf9810d43367bff109aa3db6c97bf2b3c5caf0d92e42f3f2c67401c83c83d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecf9810d43367bff109aa3db6c97bf2b3c5caf0d92e42f3f2c67401c83c83d2->enter($__internal_9ecf9810d43367bff109aa3db6c97bf2b3c5caf0d92e42f3f2c67401c83c83d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3f014a1c11a3ee8c223b700696339cd9aa36728d4564275de0c6b52a5b626bde->leave($__internal_3f014a1c11a3ee8c223b700696339cd9aa36728d4564275de0c6b52a5b626bde_prof);

        
        $__internal_9ecf9810d43367bff109aa3db6c97bf2b3c5caf0d92e42f3f2c67401c83c83d2->leave($__internal_9ecf9810d43367bff109aa3db6c97bf2b3c5caf0d92e42f3f2c67401c83c83d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
