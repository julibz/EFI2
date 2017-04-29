<?php

/* pedido/edit.html.twig */
class __TwigTemplate_c3cc610704633dc73a9e831b2ec40154e5f2064e71447f2bce299fb90f48dbdf extends Twig_Template
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
        $__internal_e35a414a4136642bddce4cbd63b23163bb9feedb6dd61451613eac6bdc326361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35a414a4136642bddce4cbd63b23163bb9feedb6dd61451613eac6bdc326361->enter($__internal_e35a414a4136642bddce4cbd63b23163bb9feedb6dd61451613eac6bdc326361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $__internal_cdf490f86d6c5fbab0a834a91488132cf419479f767802f3ad691f5b3a1f644b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf490f86d6c5fbab0a834a91488132cf419479f767802f3ad691f5b3a1f644b->enter($__internal_cdf490f86d6c5fbab0a834a91488132cf419479f767802f3ad691f5b3a1f644b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35a414a4136642bddce4cbd63b23163bb9feedb6dd61451613eac6bdc326361->leave($__internal_e35a414a4136642bddce4cbd63b23163bb9feedb6dd61451613eac6bdc326361_prof);

        
        $__internal_cdf490f86d6c5fbab0a834a91488132cf419479f767802f3ad691f5b3a1f644b->leave($__internal_cdf490f86d6c5fbab0a834a91488132cf419479f767802f3ad691f5b3a1f644b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_854c303887539b125b7bf26e3acebeec8272fefc644a4c27b7a12813bab04b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854c303887539b125b7bf26e3acebeec8272fefc644a4c27b7a12813bab04b90->enter($__internal_854c303887539b125b7bf26e3acebeec8272fefc644a4c27b7a12813bab04b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70eda81ee4be44e11a954d5c6c91070c5a0303dbc4fe26e5f7e6687622bcf898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70eda81ee4be44e11a954d5c6c91070c5a0303dbc4fe26e5f7e6687622bcf898->enter($__internal_70eda81ee4be44e11a954d5c6c91070c5a0303dbc4fe26e5f7e6687622bcf898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <h1>Pedido edit</h1>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Edit\" />
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

        <ul>
            <li>
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
            </li>
            <li>
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Delete\">
                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
        </ul>
    </div>
";
        
        $__internal_70eda81ee4be44e11a954d5c6c91070c5a0303dbc4fe26e5f7e6687622bcf898->leave($__internal_70eda81ee4be44e11a954d5c6c91070c5a0303dbc4fe26e5f7e6687622bcf898_prof);

        
        $__internal_854c303887539b125b7bf26e3acebeec8272fefc644a4c27b7a12813bab04b90->leave($__internal_854c303887539b125b7bf26e3acebeec8272fefc644a4c27b7a12813bab04b90_prof);

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
        return array (  85 => 23,  80 => 21,  74 => 18,  67 => 14,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
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
    </div>
{% endblock %}
", "pedido/edit.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/pedido/edit.html.twig");
    }
}
