<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_923f64ab6f3bb84fe7fed9ff83e64716c5619b7ff24067bf4e264568ba876b52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30f0f4b63258536f0eb858c49e504d65faeca234598248386cd749f52f44c374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f0f4b63258536f0eb858c49e504d65faeca234598248386cd749f52f44c374->enter($__internal_30f0f4b63258536f0eb858c49e504d65faeca234598248386cd749f52f44c374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_72837c8d30f2a0e3beb55ca14e24caa55e250c3cb95b3e72bd0321f75f5dbd0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72837c8d30f2a0e3beb55ca14e24caa55e250c3cb95b3e72bd0321f75f5dbd0c->enter($__internal_72837c8d30f2a0e3beb55ca14e24caa55e250c3cb95b3e72bd0321f75f5dbd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f0f4b63258536f0eb858c49e504d65faeca234598248386cd749f52f44c374->leave($__internal_30f0f4b63258536f0eb858c49e504d65faeca234598248386cd749f52f44c374_prof);

        
        $__internal_72837c8d30f2a0e3beb55ca14e24caa55e250c3cb95b3e72bd0321f75f5dbd0c->leave($__internal_72837c8d30f2a0e3beb55ca14e24caa55e250c3cb95b3e72bd0321f75f5dbd0c_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_75625b19a974ce711cde00b3c6b8332fc6e0d4d0b690ef5b6c012f4960ad612e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75625b19a974ce711cde00b3c6b8332fc6e0d4d0b690ef5b6c012f4960ad612e->enter($__internal_75625b19a974ce711cde00b3c6b8332fc6e0d4d0b690ef5b6c012f4960ad612e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_662c52923858097026a414f367703d5b183655e2f977d717f2c62ca35485a353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662c52923858097026a414f367703d5b183655e2f977d717f2c62ca35485a353->enter($__internal_662c52923858097026a414f367703d5b183655e2f977d717f2c62ca35485a353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_662c52923858097026a414f367703d5b183655e2f977d717f2c62ca35485a353->leave($__internal_662c52923858097026a414f367703d5b183655e2f977d717f2c62ca35485a353_prof);

        
        $__internal_75625b19a974ce711cde00b3c6b8332fc6e0d4d0b690ef5b6c012f4960ad612e->leave($__internal_75625b19a974ce711cde00b3c6b8332fc6e0d4d0b690ef5b6c012f4960ad612e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b22bb89c7367b6d85588bf104f704980498c56a7a3a764220dd94f96cbaa679a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22bb89c7367b6d85588bf104f704980498c56a7a3a764220dd94f96cbaa679a->enter($__internal_b22bb89c7367b6d85588bf104f704980498c56a7a3a764220dd94f96cbaa679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fcc0a402b43c5fbec3427ad49cdd6ca221a17eeba831313ee9c76a85687b4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcc0a402b43c5fbec3427ad49cdd6ca221a17eeba831313ee9c76a85687b4c0->enter($__internal_7fcc0a402b43c5fbec3427ad49cdd6ca221a17eeba831313ee9c76a85687b4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7fcc0a402b43c5fbec3427ad49cdd6ca221a17eeba831313ee9c76a85687b4c0->leave($__internal_7fcc0a402b43c5fbec3427ad49cdd6ca221a17eeba831313ee9c76a85687b4c0_prof);

        
        $__internal_b22bb89c7367b6d85588bf104f704980498c56a7a3a764220dd94f96cbaa679a->leave($__internal_b22bb89c7367b6d85588bf104f704980498c56a7a3a764220dd94f96cbaa679a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
