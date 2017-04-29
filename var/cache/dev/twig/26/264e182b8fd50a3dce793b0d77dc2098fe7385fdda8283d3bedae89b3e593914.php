<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_faa6f29f3aa2f3666a7c568512cc66aec5cd0febb8fc9169c318c84f876bc4f4 extends Twig_Template
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
        $__internal_3fdcd6f2ac882580d3837435d973b95e04fc649138ac581a9301bc4fc6ed778b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdcd6f2ac882580d3837435d973b95e04fc649138ac581a9301bc4fc6ed778b->enter($__internal_3fdcd6f2ac882580d3837435d973b95e04fc649138ac581a9301bc4fc6ed778b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_3b6b0249276fff557a6f6c957446425a98edbde45ef0ddd53e16dc1681d8dd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6b0249276fff557a6f6c957446425a98edbde45ef0ddd53e16dc1681d8dd52->enter($__internal_3b6b0249276fff557a6f6c957446425a98edbde45ef0ddd53e16dc1681d8dd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3fdcd6f2ac882580d3837435d973b95e04fc649138ac581a9301bc4fc6ed778b->leave($__internal_3fdcd6f2ac882580d3837435d973b95e04fc649138ac581a9301bc4fc6ed778b_prof);

        
        $__internal_3b6b0249276fff557a6f6c957446425a98edbde45ef0ddd53e16dc1681d8dd52->leave($__internal_3b6b0249276fff557a6f6c957446425a98edbde45ef0ddd53e16dc1681d8dd52_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
