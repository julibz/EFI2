<?php

/* pedido/new.html.twig */
class __TwigTemplate_945643f834214f45869bb46db7af5ab7fad1d6049e9e5dc8e40c3999e2ea0550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/new.html.twig", 1);
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
        $__internal_6554ee7ea9eedf4c8d071fc2f223bc417405e4e1b392df8bddbea725459d8b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6554ee7ea9eedf4c8d071fc2f223bc417405e4e1b392df8bddbea725459d8b9d->enter($__internal_6554ee7ea9eedf4c8d071fc2f223bc417405e4e1b392df8bddbea725459d8b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/new.html.twig"));

        $__internal_993f2cdcb8738cba30f7caf86a858b437e0d2289c4acb8220d776b5fba6499eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993f2cdcb8738cba30f7caf86a858b437e0d2289c4acb8220d776b5fba6499eb->enter($__internal_993f2cdcb8738cba30f7caf86a858b437e0d2289c4acb8220d776b5fba6499eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6554ee7ea9eedf4c8d071fc2f223bc417405e4e1b392df8bddbea725459d8b9d->leave($__internal_6554ee7ea9eedf4c8d071fc2f223bc417405e4e1b392df8bddbea725459d8b9d_prof);

        
        $__internal_993f2cdcb8738cba30f7caf86a858b437e0d2289c4acb8220d776b5fba6499eb->leave($__internal_993f2cdcb8738cba30f7caf86a858b437e0d2289c4acb8220d776b5fba6499eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3142c8b3c075a63a7d46a53c29d0d6e818b278a94181b358b61f26a77e1ad61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3142c8b3c075a63a7d46a53c29d0d6e818b278a94181b358b61f26a77e1ad61f->enter($__internal_3142c8b3c075a63a7d46a53c29d0d6e818b278a94181b358b61f26a77e1ad61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69f8147bbe9c8f9ccd67b7d2f49889cb22e428757b2a78f5a1ee31b2f0e8486b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f8147bbe9c8f9ccd67b7d2f49889cb22e428757b2a78f5a1ee31b2f0e8486b->enter($__internal_69f8147bbe9c8f9ccd67b7d2f49889cb22e428757b2a78f5a1ee31b2f0e8486b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">

        <a href=\"/pedido/admin\"><h5>Ver mis pedidos anteriores</h5></a>
        <h1>Haga su pedido</h1>

        <div id=\"form\" class=\"form-wrapper\">

            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'errors');
        echo "

            <input  type=\"submit\" value=\"Create\"/>
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        ";
        // line 23
        echo "            ";
        // line 24
        echo "                ";
        // line 25
        echo "            ";
        // line 26
        echo "        ";
        // line 27
        echo "
        <script>
        //  \$('#appbundle_pedido_user').hide();
            document.getElementById('appbundle_pedido_user').value='";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array()), "username", array()), "html", null, true);
        echo "';

        </script>
    </div>
";
        
        $__internal_69f8147bbe9c8f9ccd67b7d2f49889cb22e428757b2a78f5a1ee31b2f0e8486b->leave($__internal_69f8147bbe9c8f9ccd67b7d2f49889cb22e428757b2a78f5a1ee31b2f0e8486b_prof);

        
        $__internal_3142c8b3c075a63a7d46a53c29d0d6e818b278a94181b358b61f26a77e1ad61f->leave($__internal_3142c8b3c075a63a7d46a53c29d0d6e818b278a94181b358b61f26a77e1ad61f_prof);

    }

    public function getTemplateName()
    {
        return "pedido/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  89 => 27,  87 => 26,  85 => 25,  83 => 24,  81 => 23,  76 => 20,  72 => 19,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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

        <a href=\"/pedido/admin\"><h5>Ver mis pedidos anteriores</h5></a>
        <h1>Haga su pedido</h1>

        <div id=\"form\" class=\"form-wrapper\">

            {{ form_start(form) }}
            {{ form_errors(form.user) }}

            <input  type=\"submit\" value=\"Create\"/>
            {{ form_widget(form.user, {'attr': {readonly:'readonly'}}) }}
            {{ form_end(form) }}
        </div>
        {#<ul>#}
            {#<li>#}
                {#<a href=\"{{ path('pedido_index') }}\">Back to the list</a>#}
            {#</li>#}
        {#</ul>#}

        <script>
        //  \$('#appbundle_pedido_user').hide();
            document.getElementById('appbundle_pedido_user').value='{{ app.getUser.username }}';

        </script>
    </div>
{% endblock %}
", "pedido/new.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/pedido/new.html.twig");
    }
}
