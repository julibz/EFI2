<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_dcc834ad176128f1c498d73e552c38d7c7ff7d6487491caee7e2465306a5a86c extends Twig_Template
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
        $__internal_c6a008949c6195b90c4c275c695647f85459c3e509137d9f9dd8d205db8b0ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a008949c6195b90c4c275c695647f85459c3e509137d9f9dd8d205db8b0ee3->enter($__internal_c6a008949c6195b90c4c275c695647f85459c3e509137d9f9dd8d205db8b0ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_2d83e5f9edfb8afbf19ebd055da5edf9299feb38c975b97ff7592a080a0d90f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d83e5f9edfb8afbf19ebd055da5edf9299feb38c975b97ff7592a080a0d90f3->enter($__internal_2d83e5f9edfb8afbf19ebd055da5edf9299feb38c975b97ff7592a080a0d90f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c6a008949c6195b90c4c275c695647f85459c3e509137d9f9dd8d205db8b0ee3->leave($__internal_c6a008949c6195b90c4c275c695647f85459c3e509137d9f9dd8d205db8b0ee3_prof);

        
        $__internal_2d83e5f9edfb8afbf19ebd055da5edf9299feb38c975b97ff7592a080a0d90f3->leave($__internal_2d83e5f9edfb8afbf19ebd055da5edf9299feb38c975b97ff7592a080a0d90f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
