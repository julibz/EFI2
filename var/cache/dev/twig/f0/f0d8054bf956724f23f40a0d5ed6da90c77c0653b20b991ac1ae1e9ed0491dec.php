<?php

/* color/edit.html.twig */
class __TwigTemplate_74f05561a97a7d59cbdc312dd30988704328b8532f76e485ccb3721245cb222b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "color/edit.html.twig", 1);
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
        $__internal_8d20f722b454b8b58ea848f4f2a4969f511caa25d43011e7825c8b8671b59f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d20f722b454b8b58ea848f4f2a4969f511caa25d43011e7825c8b8671b59f11->enter($__internal_8d20f722b454b8b58ea848f4f2a4969f511caa25d43011e7825c8b8671b59f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/edit.html.twig"));

        $__internal_f0c287db6a84a017fcdd642e03edbc9aed9ac16ed7673dc74aa9029147cda3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c287db6a84a017fcdd642e03edbc9aed9ac16ed7673dc74aa9029147cda3ec->enter($__internal_f0c287db6a84a017fcdd642e03edbc9aed9ac16ed7673dc74aa9029147cda3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d20f722b454b8b58ea848f4f2a4969f511caa25d43011e7825c8b8671b59f11->leave($__internal_8d20f722b454b8b58ea848f4f2a4969f511caa25d43011e7825c8b8671b59f11_prof);

        
        $__internal_f0c287db6a84a017fcdd642e03edbc9aed9ac16ed7673dc74aa9029147cda3ec->leave($__internal_f0c287db6a84a017fcdd642e03edbc9aed9ac16ed7673dc74aa9029147cda3ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98ad23dc9129a6eb83bdb603f6c6d3f12539b813829f808e8a134ade8fb7c925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ad23dc9129a6eb83bdb603f6c6d3f12539b813829f808e8a134ade8fb7c925->enter($__internal_98ad23dc9129a6eb83bdb603f6c6d3f12539b813829f808e8a134ade8fb7c925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d549d17c0700fd664cd2f35dd8651b4e499ea037d60e586566271b2b9fe6067e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d549d17c0700fd664cd2f35dd8651b4e499ea037d60e586566271b2b9fe6067e->enter($__internal_d549d17c0700fd664cd2f35dd8651b4e499ea037d60e586566271b2b9fe6067e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Color edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("color_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d549d17c0700fd664cd2f35dd8651b4e499ea037d60e586566271b2b9fe6067e->leave($__internal_d549d17c0700fd664cd2f35dd8651b4e499ea037d60e586566271b2b9fe6067e_prof);

        
        $__internal_98ad23dc9129a6eb83bdb603f6c6d3f12539b813829f808e8a134ade8fb7c925->leave($__internal_98ad23dc9129a6eb83bdb603f6c6d3f12539b813829f808e8a134ade8fb7c925_prof);

    }

    public function getTemplateName()
    {
        return "color/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Color edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('color_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "color/edit.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/color/edit.html.twig");
    }
}
