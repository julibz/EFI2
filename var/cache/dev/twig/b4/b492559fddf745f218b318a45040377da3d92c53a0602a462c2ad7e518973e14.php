<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_007689008d65ea0a55aa30420422663565fb723e05bedad15ac5b51fe62221d7 extends Twig_Template
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
        $__internal_1597e8c99922ece6d52c7667c63bccb044646126de9cadc4c99c432f4ea46dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1597e8c99922ece6d52c7667c63bccb044646126de9cadc4c99c432f4ea46dd9->enter($__internal_1597e8c99922ece6d52c7667c63bccb044646126de9cadc4c99c432f4ea46dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_820f9fc5b191369561bac853032bc26b586b5ed203f5fba1cbe9e65e36067c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820f9fc5b191369561bac853032bc26b586b5ed203f5fba1cbe9e65e36067c4b->enter($__internal_820f9fc5b191369561bac853032bc26b586b5ed203f5fba1cbe9e65e36067c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1597e8c99922ece6d52c7667c63bccb044646126de9cadc4c99c432f4ea46dd9->leave($__internal_1597e8c99922ece6d52c7667c63bccb044646126de9cadc4c99c432f4ea46dd9_prof);

        
        $__internal_820f9fc5b191369561bac853032bc26b586b5ed203f5fba1cbe9e65e36067c4b->leave($__internal_820f9fc5b191369561bac853032bc26b586b5ed203f5fba1cbe9e65e36067c4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
