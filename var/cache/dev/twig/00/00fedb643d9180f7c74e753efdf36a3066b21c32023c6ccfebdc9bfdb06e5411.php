<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_99795adbe0e084a6d1751a06cbb42b1006ba64d8057eeb51a3277cea3d3b2818 extends Twig_Template
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
        $__internal_c7ccf92dd2fcb8170145d07393a64a8eb1e9ceb169a83b131c3c916ac8e74b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ccf92dd2fcb8170145d07393a64a8eb1e9ceb169a83b131c3c916ac8e74b6f->enter($__internal_c7ccf92dd2fcb8170145d07393a64a8eb1e9ceb169a83b131c3c916ac8e74b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_2ad2787305a60966a75e0ee04c4d9f504bce33e22a8ec30628283480aed91dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad2787305a60966a75e0ee04c4d9f504bce33e22a8ec30628283480aed91dc5->enter($__internal_2ad2787305a60966a75e0ee04c4d9f504bce33e22a8ec30628283480aed91dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c7ccf92dd2fcb8170145d07393a64a8eb1e9ceb169a83b131c3c916ac8e74b6f->leave($__internal_c7ccf92dd2fcb8170145d07393a64a8eb1e9ceb169a83b131c3c916ac8e74b6f_prof);

        
        $__internal_2ad2787305a60966a75e0ee04c4d9f504bce33e22a8ec30628283480aed91dc5->leave($__internal_2ad2787305a60966a75e0ee04c4d9f504bce33e22a8ec30628283480aed91dc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
