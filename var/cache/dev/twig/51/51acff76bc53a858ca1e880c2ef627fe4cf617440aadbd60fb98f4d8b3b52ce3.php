<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_37bcbea2e76fc12033f94b1d7ae575aaac7c48e57f5fe241aa3c0d881d67ec84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b83c694d806a0f5b553b6514f8bf116962158ad76923ef6f556e818519527c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b83c694d806a0f5b553b6514f8bf116962158ad76923ef6f556e818519527c2->enter($__internal_9b83c694d806a0f5b553b6514f8bf116962158ad76923ef6f556e818519527c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6787aae5024603c40f642579233d00ce70d402107069f786bfae95fcd565dda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6787aae5024603c40f642579233d00ce70d402107069f786bfae95fcd565dda5->enter($__internal_6787aae5024603c40f642579233d00ce70d402107069f786bfae95fcd565dda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b83c694d806a0f5b553b6514f8bf116962158ad76923ef6f556e818519527c2->leave($__internal_9b83c694d806a0f5b553b6514f8bf116962158ad76923ef6f556e818519527c2_prof);

        
        $__internal_6787aae5024603c40f642579233d00ce70d402107069f786bfae95fcd565dda5->leave($__internal_6787aae5024603c40f642579233d00ce70d402107069f786bfae95fcd565dda5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_27ee5af7421474b8f89ea2acdd2ff4d14692bc058bd1cd849f78ebf8815d5219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ee5af7421474b8f89ea2acdd2ff4d14692bc058bd1cd849f78ebf8815d5219->enter($__internal_27ee5af7421474b8f89ea2acdd2ff4d14692bc058bd1cd849f78ebf8815d5219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3befdfb00b5ff9e398adf5d10b1742da1d2ae0c422f01fe74da2ae54fdcdfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3befdfb00b5ff9e398adf5d10b1742da1d2ae0c422f01fe74da2ae54fdcdfce->enter($__internal_f3befdfb00b5ff9e398adf5d10b1742da1d2ae0c422f01fe74da2ae54fdcdfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f3befdfb00b5ff9e398adf5d10b1742da1d2ae0c422f01fe74da2ae54fdcdfce->leave($__internal_f3befdfb00b5ff9e398adf5d10b1742da1d2ae0c422f01fe74da2ae54fdcdfce_prof);

        
        $__internal_27ee5af7421474b8f89ea2acdd2ff4d14692bc058bd1cd849f78ebf8815d5219->leave($__internal_27ee5af7421474b8f89ea2acdd2ff4d14692bc058bd1cd849f78ebf8815d5219_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
