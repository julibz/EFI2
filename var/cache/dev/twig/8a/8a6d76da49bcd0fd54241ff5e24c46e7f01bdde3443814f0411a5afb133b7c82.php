<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_541a2b1aba494ce79ba2b5de812c7509976c838bb938a6637fd0aa5a3319e110 extends Twig_Template
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
        $__internal_0f09b260574ad1b275a319100495c8d7f413062d65074d6bd03398bc52630269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f09b260574ad1b275a319100495c8d7f413062d65074d6bd03398bc52630269->enter($__internal_0f09b260574ad1b275a319100495c8d7f413062d65074d6bd03398bc52630269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_80c8194ecf50b949a6e290a0602f87411bae9074d3d3fc86748294fb76469047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c8194ecf50b949a6e290a0602f87411bae9074d3d3fc86748294fb76469047->enter($__internal_80c8194ecf50b949a6e290a0602f87411bae9074d3d3fc86748294fb76469047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0f09b260574ad1b275a319100495c8d7f413062d65074d6bd03398bc52630269->leave($__internal_0f09b260574ad1b275a319100495c8d7f413062d65074d6bd03398bc52630269_prof);

        
        $__internal_80c8194ecf50b949a6e290a0602f87411bae9074d3d3fc86748294fb76469047->leave($__internal_80c8194ecf50b949a6e290a0602f87411bae9074d3d3fc86748294fb76469047_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
