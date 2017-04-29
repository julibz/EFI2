<?php

/* pedido/new.html.twig */
class __TwigTemplate_83e9240a966e5aacdaeb3908dda093ac103af6bc00ede8384f03d3924498a3e4 extends Twig_Template
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
        $__internal_d0720c551bdfc1a4a45ba348b40aec417d4c2a5b2abe9a5019711d8a957c7243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0720c551bdfc1a4a45ba348b40aec417d4c2a5b2abe9a5019711d8a957c7243->enter($__internal_d0720c551bdfc1a4a45ba348b40aec417d4c2a5b2abe9a5019711d8a957c7243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/new.html.twig"));

        $__internal_13ccaabe84e4f0fa617ac9a77d2663f92de56fabd59e9fc766d07d543df83d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ccaabe84e4f0fa617ac9a77d2663f92de56fabd59e9fc766d07d543df83d87->enter($__internal_13ccaabe84e4f0fa617ac9a77d2663f92de56fabd59e9fc766d07d543df83d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0720c551bdfc1a4a45ba348b40aec417d4c2a5b2abe9a5019711d8a957c7243->leave($__internal_d0720c551bdfc1a4a45ba348b40aec417d4c2a5b2abe9a5019711d8a957c7243_prof);

        
        $__internal_13ccaabe84e4f0fa617ac9a77d2663f92de56fabd59e9fc766d07d543df83d87->leave($__internal_13ccaabe84e4f0fa617ac9a77d2663f92de56fabd59e9fc766d07d543df83d87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bc53b354af42b04728d5274fc115299a7baebbbc1edf39e235f35f2f3e66081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc53b354af42b04728d5274fc115299a7baebbbc1edf39e235f35f2f3e66081->enter($__internal_2bc53b354af42b04728d5274fc115299a7baebbbc1edf39e235f35f2f3e66081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b3e6cb44f8bed64948858c4d957869569b2a6e65f4c5cc156a14f16f03e6993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3e6cb44f8bed64948858c4d957869569b2a6e65f4c5cc156a14f16f03e6993->enter($__internal_0b3e6cb44f8bed64948858c4d957869569b2a6e65f4c5cc156a14f16f03e6993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                <input action=\"/enviar_pedido\" type=\"submit\" value=\"Create\"/>
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
        
        $__internal_0b3e6cb44f8bed64948858c4d957869569b2a6e65f4c5cc156a14f16f03e6993->leave($__internal_0b3e6cb44f8bed64948858c4d957869569b2a6e65f4c5cc156a14f16f03e6993_prof);

        
        $__internal_2bc53b354af42b04728d5274fc115299a7baebbbc1edf39e235f35f2f3e66081->leave($__internal_2bc53b354af42b04728d5274fc115299a7baebbbc1edf39e235f35f2f3e66081_prof);

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

                <input action=\"/enviar_pedido\" type=\"submit\" value=\"Create\"/>
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
