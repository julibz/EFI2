<?php

/* color/new.html.twig */
class __TwigTemplate_c013d1d2b1092b36de356e0b375802a823f5c2f4b88c58bd6d5ca815790a8d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "color/new.html.twig", 1);
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
        $__internal_3670b72ec3b51ac060b792ba3f7027c5e33854248d88796ccbed8bdd1610867a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3670b72ec3b51ac060b792ba3f7027c5e33854248d88796ccbed8bdd1610867a->enter($__internal_3670b72ec3b51ac060b792ba3f7027c5e33854248d88796ccbed8bdd1610867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/new.html.twig"));

        $__internal_76c72cf0eefe4ac6cbb67e97e95f6f2b6beeba7f9119370d13341bb0c1db704a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c72cf0eefe4ac6cbb67e97e95f6f2b6beeba7f9119370d13341bb0c1db704a->enter($__internal_76c72cf0eefe4ac6cbb67e97e95f6f2b6beeba7f9119370d13341bb0c1db704a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3670b72ec3b51ac060b792ba3f7027c5e33854248d88796ccbed8bdd1610867a->leave($__internal_3670b72ec3b51ac060b792ba3f7027c5e33854248d88796ccbed8bdd1610867a_prof);

        
        $__internal_76c72cf0eefe4ac6cbb67e97e95f6f2b6beeba7f9119370d13341bb0c1db704a->leave($__internal_76c72cf0eefe4ac6cbb67e97e95f6f2b6beeba7f9119370d13341bb0c1db704a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec82d3e911817826264255025b571f98a9b916e5ce8372540bda0f395f0e5dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec82d3e911817826264255025b571f98a9b916e5ce8372540bda0f395f0e5dfd->enter($__internal_ec82d3e911817826264255025b571f98a9b916e5ce8372540bda0f395f0e5dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59a7e7179548e492ee0f57a71cce335347df4b1a6cc2f8485b82c05ca8839797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a7e7179548e492ee0f57a71cce335347df4b1a6cc2f8485b82c05ca8839797->enter($__internal_59a7e7179548e492ee0f57a71cce335347df4b1a6cc2f8485b82c05ca8839797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <div class=\"container\">
        <div id=\"form\" class=\"form-wrapper\">
            <h1>Color creation</h1>

            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Create\" />
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            <ul>
                <li>
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("color_index");
        echo "\">Back to the list</a>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_59a7e7179548e492ee0f57a71cce335347df4b1a6cc2f8485b82c05ca8839797->leave($__internal_59a7e7179548e492ee0f57a71cce335347df4b1a6cc2f8485b82c05ca8839797_prof);

        
        $__internal_ec82d3e911817826264255025b571f98a9b916e5ce8372540bda0f395f0e5dfd->leave($__internal_ec82d3e911817826264255025b571f98a9b916e5ce8372540bda0f395f0e5dfd_prof);

    }

    public function getTemplateName()
    {
        return "color/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  67 => 14,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <div id=\"form\" class=\"form-wrapper\">
            <h1>Color creation</h1>

            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" value=\"Create\" />
            {{ form_end(form) }}

            <ul>
                <li>
                    <a href=\"{{ path('color_index') }}\">Back to the list</a>
                </li>
            </ul>
        </div>
    </div>
{% endblock %}
", "color/new.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/color/new.html.twig");
    }
}
