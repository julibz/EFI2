<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_a4716229a2e65a135ce3c36f8c59931fb11eeed3bdb17cb83310380d64d67a4b extends Twig_Template
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
        $__internal_75efabd7f38f6944c58dc31220046fbf253d5ab53baf63440d7da95935309f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75efabd7f38f6944c58dc31220046fbf253d5ab53baf63440d7da95935309f0f->enter($__internal_75efabd7f38f6944c58dc31220046fbf253d5ab53baf63440d7da95935309f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_85f686def7bdccc3fdb96ebe15139e5babf0e2d5b488dbd116ada2d470b29112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f686def7bdccc3fdb96ebe15139e5babf0e2d5b488dbd116ada2d470b29112->enter($__internal_85f686def7bdccc3fdb96ebe15139e5babf0e2d5b488dbd116ada2d470b29112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_75efabd7f38f6944c58dc31220046fbf253d5ab53baf63440d7da95935309f0f->leave($__internal_75efabd7f38f6944c58dc31220046fbf253d5ab53baf63440d7da95935309f0f_prof);

        
        $__internal_85f686def7bdccc3fdb96ebe15139e5babf0e2d5b488dbd116ada2d470b29112->leave($__internal_85f686def7bdccc3fdb96ebe15139e5babf0e2d5b488dbd116ada2d470b29112_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/change_password_content.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
