<?php

/* @FOSUser/Group/edit_content.html.twig */
class __TwigTemplate_385f54a120030d9c94bef41781e7f47e88c52e338b5a7b0ab2748c998b3e6cbd extends Twig_Template
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
        $__internal_c5563509d2f6fb77b309121d8fbd164213b6a675eb2118a3e36c3423d86f4684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5563509d2f6fb77b309121d8fbd164213b6a675eb2118a3e36c3423d86f4684->enter($__internal_c5563509d2f6fb77b309121d8fbd164213b6a675eb2118a3e36c3423d86f4684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        $__internal_0b7c03a485b72a191f1fb2536c45a8489c9823610dc502b151acee7412644fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7c03a485b72a191f1fb2536c45a8489c9823610dc502b151acee7412644fa3->enter($__internal_0b7c03a485b72a191f1fb2536c45a8489c9823610dc502b151acee7412644fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c5563509d2f6fb77b309121d8fbd164213b6a675eb2118a3e36c3423d86f4684->leave($__internal_c5563509d2f6fb77b309121d8fbd164213b6a675eb2118a3e36c3423d86f4684_prof);

        
        $__internal_0b7c03a485b72a191f1fb2536c45a8489c9823610dc502b151acee7412644fa3->leave($__internal_0b7c03a485b72a191f1fb2536c45a8489c9823610dc502b151acee7412644fa3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/edit_content.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Group/edit_content.html.twig");
    }
}
