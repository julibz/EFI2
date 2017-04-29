<?php

/* modelo/new.html.twig */
class __TwigTemplate_30f3f61c6aa681993c9a7a10dbcadccab36f0e915e16a640db98036de008a9f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modelo/new.html.twig", 1);
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
        $__internal_0f75209fd5af0498d3fb8b330f84ca68c746dae945fae7016a56521ff8a6024a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f75209fd5af0498d3fb8b330f84ca68c746dae945fae7016a56521ff8a6024a->enter($__internal_0f75209fd5af0498d3fb8b330f84ca68c746dae945fae7016a56521ff8a6024a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/new.html.twig"));

        $__internal_c3801528d2bc048776ccba8e040b1572fd537604207b63ca3b0a3f0683a3c6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3801528d2bc048776ccba8e040b1572fd537604207b63ca3b0a3f0683a3c6ab->enter($__internal_c3801528d2bc048776ccba8e040b1572fd537604207b63ca3b0a3f0683a3c6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f75209fd5af0498d3fb8b330f84ca68c746dae945fae7016a56521ff8a6024a->leave($__internal_0f75209fd5af0498d3fb8b330f84ca68c746dae945fae7016a56521ff8a6024a_prof);

        
        $__internal_c3801528d2bc048776ccba8e040b1572fd537604207b63ca3b0a3f0683a3c6ab->leave($__internal_c3801528d2bc048776ccba8e040b1572fd537604207b63ca3b0a3f0683a3c6ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c25e29f836209e406053a55f5094c87de26431c59533e8a197b87df059323072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25e29f836209e406053a55f5094c87de26431c59533e8a197b87df059323072->enter($__internal_c25e29f836209e406053a55f5094c87de26431c59533e8a197b87df059323072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3643ee89601f6cf6fa67e33a1cad8078ea0f33bbda1cf93114a25ff8bfe72a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3643ee89601f6cf6fa67e33a1cad8078ea0f33bbda1cf93114a25ff8bfe72a3->enter($__internal_b3643ee89601f6cf6fa67e33a1cad8078ea0f33bbda1cf93114a25ff8bfe72a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <div id=\"form\" class=\"form-wrapper\">
            <h1>Crear nuevo modelo</h1>

            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Create\" />
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            <ul>
                <li>
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_index");
        echo "\">Back to the list</a>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_b3643ee89601f6cf6fa67e33a1cad8078ea0f33bbda1cf93114a25ff8bfe72a3->leave($__internal_b3643ee89601f6cf6fa67e33a1cad8078ea0f33bbda1cf93114a25ff8bfe72a3_prof);

        
        $__internal_c25e29f836209e406053a55f5094c87de26431c59533e8a197b87df059323072->leave($__internal_c25e29f836209e406053a55f5094c87de26431c59533e8a197b87df059323072_prof);

    }

    public function getTemplateName()
    {
        return "modelo/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  68 => 15,  63 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
        <div id=\"form\" class=\"form-wrapper\">
            <h1>Crear nuevo modelo</h1>

            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" value=\"Create\" />
            {{ form_end(form) }}

            <ul>
                <li>
                    <a href=\"{{ path('modelo_index') }}\">Back to the list</a>
                </li>
            </ul>
        </div>
    </div>
{% endblock %}
", "modelo/new.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/modelo/new.html.twig");
    }
}
