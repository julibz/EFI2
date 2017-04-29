<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_494ec288208a3cb96761c22558973079860e45cde1fc2a7ad72c705b0a80c114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f5f99d3ebe7e88255d93e0505cbdae5851f9ab49197ffebb87a345fb5dd86d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5f99d3ebe7e88255d93e0505cbdae5851f9ab49197ffebb87a345fb5dd86d5->enter($__internal_1f5f99d3ebe7e88255d93e0505cbdae5851f9ab49197ffebb87a345fb5dd86d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b0b79f4af16778be741a86cc7860b761d5568073386857c4eac13d6159e8770b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b79f4af16778be741a86cc7860b761d5568073386857c4eac13d6159e8770b->enter($__internal_b0b79f4af16778be741a86cc7860b761d5568073386857c4eac13d6159e8770b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f5f99d3ebe7e88255d93e0505cbdae5851f9ab49197ffebb87a345fb5dd86d5->leave($__internal_1f5f99d3ebe7e88255d93e0505cbdae5851f9ab49197ffebb87a345fb5dd86d5_prof);

        
        $__internal_b0b79f4af16778be741a86cc7860b761d5568073386857c4eac13d6159e8770b->leave($__internal_b0b79f4af16778be741a86cc7860b761d5568073386857c4eac13d6159e8770b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_396c520897b6fa7175e846bd74a4a7c1a397511ffb65cce6f3dc7836ac68dd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396c520897b6fa7175e846bd74a4a7c1a397511ffb65cce6f3dc7836ac68dd2f->enter($__internal_396c520897b6fa7175e846bd74a4a7c1a397511ffb65cce6f3dc7836ac68dd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4eb8fead36287cb32b7f1c4b4103d6d9658ec9a89a5e4d47ae9436a7cd0dfe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb8fead36287cb32b7f1c4b4103d6d9658ec9a89a5e4d47ae9436a7cd0dfe89->enter($__internal_4eb8fead36287cb32b7f1c4b4103d6d9658ec9a89a5e4d47ae9436a7cd0dfe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4eb8fead36287cb32b7f1c4b4103d6d9658ec9a89a5e4d47ae9436a7cd0dfe89->leave($__internal_4eb8fead36287cb32b7f1c4b4103d6d9658ec9a89a5e4d47ae9436a7cd0dfe89_prof);

        
        $__internal_396c520897b6fa7175e846bd74a4a7c1a397511ffb65cce6f3dc7836ac68dd2f->leave($__internal_396c520897b6fa7175e846bd74a4a7c1a397511ffb65cce6f3dc7836ac68dd2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da8bc5041e47109f5af4e28a3e13566dfd090884b21076ee59a6b49251034d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8bc5041e47109f5af4e28a3e13566dfd090884b21076ee59a6b49251034d70->enter($__internal_da8bc5041e47109f5af4e28a3e13566dfd090884b21076ee59a6b49251034d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c7d0c9fe01f9d677e79d9af1723e7a2bb30351a2447f837f21586876d54bdb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7d0c9fe01f9d677e79d9af1723e7a2bb30351a2447f837f21586876d54bdb6->enter($__internal_8c7d0c9fe01f9d677e79d9af1723e7a2bb30351a2447f837f21586876d54bdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c7d0c9fe01f9d677e79d9af1723e7a2bb30351a2447f837f21586876d54bdb6->leave($__internal_8c7d0c9fe01f9d677e79d9af1723e7a2bb30351a2447f837f21586876d54bdb6_prof);

        
        $__internal_da8bc5041e47109f5af4e28a3e13566dfd090884b21076ee59a6b49251034d70->leave($__internal_da8bc5041e47109f5af4e28a3e13566dfd090884b21076ee59a6b49251034d70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b17a3e47ef95f2894d0d44d200d8fd1f35e502aa936d560cfac4343502653ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b17a3e47ef95f2894d0d44d200d8fd1f35e502aa936d560cfac4343502653ce->enter($__internal_5b17a3e47ef95f2894d0d44d200d8fd1f35e502aa936d560cfac4343502653ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_839d9537aca2bcb9865cfa1c3da94c4946ccf716f0154e5cf270e40d66e1056a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839d9537aca2bcb9865cfa1c3da94c4946ccf716f0154e5cf270e40d66e1056a->enter($__internal_839d9537aca2bcb9865cfa1c3da94c4946ccf716f0154e5cf270e40d66e1056a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_839d9537aca2bcb9865cfa1c3da94c4946ccf716f0154e5cf270e40d66e1056a->leave($__internal_839d9537aca2bcb9865cfa1c3da94c4946ccf716f0154e5cf270e40d66e1056a_prof);

        
        $__internal_5b17a3e47ef95f2894d0d44d200d8fd1f35e502aa936d560cfac4343502653ce->leave($__internal_5b17a3e47ef95f2894d0d44d200d8fd1f35e502aa936d560cfac4343502653ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
