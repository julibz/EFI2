<?php

/* modelo/edit.html.twig */
class __TwigTemplate_77da83f0ab7a211252a1864679d96ca43cba2474859f3963eeebe62373bcbdc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modelo/edit.html.twig", 1);
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
        $__internal_a66736a3cc1d3044ef66603091fed7f3914c4b4709703bb5a6f26f8cc88f63d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66736a3cc1d3044ef66603091fed7f3914c4b4709703bb5a6f26f8cc88f63d9->enter($__internal_a66736a3cc1d3044ef66603091fed7f3914c4b4709703bb5a6f26f8cc88f63d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/edit.html.twig"));

        $__internal_dd00f99e66b45f13a24eb4ee424c06d07570e1899b9778e5056e2a19ec99d1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd00f99e66b45f13a24eb4ee424c06d07570e1899b9778e5056e2a19ec99d1a4->enter($__internal_dd00f99e66b45f13a24eb4ee424c06d07570e1899b9778e5056e2a19ec99d1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66736a3cc1d3044ef66603091fed7f3914c4b4709703bb5a6f26f8cc88f63d9->leave($__internal_a66736a3cc1d3044ef66603091fed7f3914c4b4709703bb5a6f26f8cc88f63d9_prof);

        
        $__internal_dd00f99e66b45f13a24eb4ee424c06d07570e1899b9778e5056e2a19ec99d1a4->leave($__internal_dd00f99e66b45f13a24eb4ee424c06d07570e1899b9778e5056e2a19ec99d1a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a921a7cea7314b7f99ab39123964a815831598bf02905b40eab4a51eaeb98ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a921a7cea7314b7f99ab39123964a815831598bf02905b40eab4a51eaeb98ed3->enter($__internal_a921a7cea7314b7f99ab39123964a815831598bf02905b40eab4a51eaeb98ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2e1f82361eede3db01d6c7a3e7163e4ffaf91c09c50c3d7da993ee10f405582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e1f82361eede3db01d6c7a3e7163e4ffaf91c09c50c3d7da993ee10f405582->enter($__internal_c2e1f82361eede3db01d6c7a3e7163e4ffaf91c09c50c3d7da993ee10f405582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    <h2>Editar Modelo</h2>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_index");
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
";
        
        $__internal_c2e1f82361eede3db01d6c7a3e7163e4ffaf91c09c50c3d7da993ee10f405582->leave($__internal_c2e1f82361eede3db01d6c7a3e7163e4ffaf91c09c50c3d7da993ee10f405582_prof);

        
        $__internal_a921a7cea7314b7f99ab39123964a815831598bf02905b40eab4a51eaeb98ed3->leave($__internal_a921a7cea7314b7f99ab39123964a815831598bf02905b40eab4a51eaeb98ed3_prof);

    }

    public function getTemplateName()
    {
        return "modelo/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  80 => 21,  73 => 17,  66 => 13,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Editar Modelo</h2>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('modelo_index') }}\">Back to the list</a>
        </li>

        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>

    </ul>
{% endblock %}
", "modelo/edit.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/modelo/edit.html.twig");
    }
}
