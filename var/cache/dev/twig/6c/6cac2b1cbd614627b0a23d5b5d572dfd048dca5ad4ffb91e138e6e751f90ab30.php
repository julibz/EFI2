<?php

/* email/registration.html.twig */
class __TwigTemplate_b93c4a98c2ab21c336ec7d6f0b3ccf4ccca26a35abf48c6573dd948f6092642d extends Twig_Template
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
        $__internal_7d57918faf83d3fc0e52fc521ba43ef52af3ce9394304d7dd4c3f128821b72cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d57918faf83d3fc0e52fc521ba43ef52af3ce9394304d7dd4c3f128821b72cc->enter($__internal_7d57918faf83d3fc0e52fc521ba43ef52af3ce9394304d7dd4c3f128821b72cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/registration.html.twig"));

        $__internal_8ce6c91e744ef8f735fc72001f8c3b24ca347d1e54527734dad38bdfdab40341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce6c91e744ef8f735fc72001f8c3b24ca347d1e54527734dad38bdfdab40341->enter($__internal_8ce6c91e744ef8f735fc72001f8c3b24ca347d1e54527734dad38bdfdab40341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/registration.html.twig"));

        // line 1
        echo "<h3>hola papa</h3>
Hi ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! estas regisrado";
        
        $__internal_7d57918faf83d3fc0e52fc521ba43ef52af3ce9394304d7dd4c3f128821b72cc->leave($__internal_7d57918faf83d3fc0e52fc521ba43ef52af3ce9394304d7dd4c3f128821b72cc_prof);

        
        $__internal_8ce6c91e744ef8f735fc72001f8c3b24ca347d1e54527734dad38bdfdab40341->leave($__internal_8ce6c91e744ef8f735fc72001f8c3b24ca347d1e54527734dad38bdfdab40341_prof);

    }

    public function getTemplateName()
    {
        return "email/registration.html.twig";
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
        return new Twig_Source("<h3>hola papa</h3>
Hi {{ name }}! estas regisrado", "email/registration.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/email/registration.html.twig");
    }
}
