<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f25e1c363a52055f5e58f09eab00f611b6013f4fd3a197e4ecfe44fe55486c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20d4b304fe5664217c229677b1de436f2647d428d7d2f9143fa6ee0d400f9c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d4b304fe5664217c229677b1de436f2647d428d7d2f9143fa6ee0d400f9c51->enter($__internal_20d4b304fe5664217c229677b1de436f2647d428d7d2f9143fa6ee0d400f9c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_10fb9ca89fe53a979f3e0e4f612f61b76617051674041d968c821f21449ca9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fb9ca89fe53a979f3e0e4f612f61b76617051674041d968c821f21449ca9d0->enter($__internal_10fb9ca89fe53a979f3e0e4f612f61b76617051674041d968c821f21449ca9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d4b304fe5664217c229677b1de436f2647d428d7d2f9143fa6ee0d400f9c51->leave($__internal_20d4b304fe5664217c229677b1de436f2647d428d7d2f9143fa6ee0d400f9c51_prof);

        
        $__internal_10fb9ca89fe53a979f3e0e4f612f61b76617051674041d968c821f21449ca9d0->leave($__internal_10fb9ca89fe53a979f3e0e4f612f61b76617051674041d968c821f21449ca9d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13182e27d66f77f54b60f2794ffb0fce22e25bb5b8ed18c7b4d465f62d31423b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13182e27d66f77f54b60f2794ffb0fce22e25bb5b8ed18c7b4d465f62d31423b->enter($__internal_13182e27d66f77f54b60f2794ffb0fce22e25bb5b8ed18c7b4d465f62d31423b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa03a484aecdf61c5891b4d07dd7047cc7738e4a7775fe0ee8b57b38758137bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa03a484aecdf61c5891b4d07dd7047cc7738e4a7775fe0ee8b57b38758137bb->enter($__internal_aa03a484aecdf61c5891b4d07dd7047cc7738e4a7775fe0ee8b57b38758137bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_aa03a484aecdf61c5891b4d07dd7047cc7738e4a7775fe0ee8b57b38758137bb->leave($__internal_aa03a484aecdf61c5891b4d07dd7047cc7738e4a7775fe0ee8b57b38758137bb_prof);

        
        $__internal_13182e27d66f77f54b60f2794ffb0fce22e25bb5b8ed18c7b4d465f62d31423b->leave($__internal_13182e27d66f77f54b60f2794ffb0fce22e25bb5b8ed18c7b4d465f62d31423b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3dfdc76caa7c515b826ffd20fb120f1c25324c76a608f26d283162e39c596fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3dfdc76caa7c515b826ffd20fb120f1c25324c76a608f26d283162e39c596fb->enter($__internal_d3dfdc76caa7c515b826ffd20fb120f1c25324c76a608f26d283162e39c596fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_139cd1dfe7962edf6486eba29b47675286534d5d4b0161011808e5293429ab61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139cd1dfe7962edf6486eba29b47675286534d5d4b0161011808e5293429ab61->enter($__internal_139cd1dfe7962edf6486eba29b47675286534d5d4b0161011808e5293429ab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_139cd1dfe7962edf6486eba29b47675286534d5d4b0161011808e5293429ab61->leave($__internal_139cd1dfe7962edf6486eba29b47675286534d5d4b0161011808e5293429ab61_prof);

        
        $__internal_d3dfdc76caa7c515b826ffd20fb120f1c25324c76a608f26d283162e39c596fb->leave($__internal_d3dfdc76caa7c515b826ffd20fb120f1c25324c76a608f26d283162e39c596fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
