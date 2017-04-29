<?php

/* pedido/edit.html.twig */
class __TwigTemplate_4d367d7e8a877f7725c96180605daea6b1d7b91722c1a570439a4b18a1396ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38e2ca9e0678057e83a931161dd0ebe1a36376cbbc207de93372ca62452760bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e2ca9e0678057e83a931161dd0ebe1a36376cbbc207de93372ca62452760bc->enter($__internal_38e2ca9e0678057e83a931161dd0ebe1a36376cbbc207de93372ca62452760bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $__internal_bf5a889e78ad205f154099d66edf412ca61597eda4d2e151b07b0fdbb3b47fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5a889e78ad205f154099d66edf412ca61597eda4d2e151b07b0fdbb3b47fc0->enter($__internal_bf5a889e78ad205f154099d66edf412ca61597eda4d2e151b07b0fdbb3b47fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e2ca9e0678057e83a931161dd0ebe1a36376cbbc207de93372ca62452760bc->leave($__internal_38e2ca9e0678057e83a931161dd0ebe1a36376cbbc207de93372ca62452760bc_prof);

        
        $__internal_bf5a889e78ad205f154099d66edf412ca61597eda4d2e151b07b0fdbb3b47fc0->leave($__internal_bf5a889e78ad205f154099d66edf412ca61597eda4d2e151b07b0fdbb3b47fc0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ca8d67480528359571f92c9151ee8b910985e44ed5c884ac6fbe094235a0bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca8d67480528359571f92c9151ee8b910985e44ed5c884ac6fbe094235a0bf1->enter($__internal_9ca8d67480528359571f92c9151ee8b910985e44ed5c884ac6fbe094235a0bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7b40107a48433401610c7baf5fb6f952f7e53dc144812e2853adfaa602c5114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b40107a48433401610c7baf5fb6f952f7e53dc144812e2853adfaa602c5114->enter($__internal_e7b40107a48433401610c7baf5fb6f952f7e53dc144812e2853adfaa602c5114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    <h1>Pedido edit</h1>

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e7b40107a48433401610c7baf5fb6f952f7e53dc144812e2853adfaa602c5114->leave($__internal_e7b40107a48433401610c7baf5fb6f952f7e53dc144812e2853adfaa602c5114_prof);

        
        $__internal_9ca8d67480528359571f92c9151ee8b910985e44ed5c884ac6fbe094235a0bf1->leave($__internal_9ca8d67480528359571f92c9151ee8b910985e44ed5c884ac6fbe094235a0bf1_prof);

    }

    public function getTemplateName()
    {
        return "pedido/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  79 => 20,  73 => 17,  66 => 13,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <br>
    <br>
    <br>
    <br>
    <h1>Pedido edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "pedido/edit.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/pedido/edit.html.twig");
    }
}
