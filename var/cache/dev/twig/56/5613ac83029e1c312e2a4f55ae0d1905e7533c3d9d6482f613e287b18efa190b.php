<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ac63b3ad7c07e30201e4126551368d29e43d217bd83fbe750ae3873f18df037e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec5d5db864988b41425bb01ffcf67d5824513d77e4b8022084b5b033df3f3e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5d5db864988b41425bb01ffcf67d5824513d77e4b8022084b5b033df3f3e89->enter($__internal_ec5d5db864988b41425bb01ffcf67d5824513d77e4b8022084b5b033df3f3e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bc896466e476fb09872e585e62e3146bf238a9da19750fe5e374e52af2a2e11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc896466e476fb09872e585e62e3146bf238a9da19750fe5e374e52af2a2e11e->enter($__internal_bc896466e476fb09872e585e62e3146bf238a9da19750fe5e374e52af2a2e11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec5d5db864988b41425bb01ffcf67d5824513d77e4b8022084b5b033df3f3e89->leave($__internal_ec5d5db864988b41425bb01ffcf67d5824513d77e4b8022084b5b033df3f3e89_prof);

        
        $__internal_bc896466e476fb09872e585e62e3146bf238a9da19750fe5e374e52af2a2e11e->leave($__internal_bc896466e476fb09872e585e62e3146bf238a9da19750fe5e374e52af2a2e11e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_980ef541895fcfc1f3f36a90b3ca4d0ad24ad9ba8601f570aca02b9ceadda8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980ef541895fcfc1f3f36a90b3ca4d0ad24ad9ba8601f570aca02b9ceadda8e9->enter($__internal_980ef541895fcfc1f3f36a90b3ca4d0ad24ad9ba8601f570aca02b9ceadda8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c2c0d8078d7bc02e2612e88b9ffc44539de128431ec93348d7b868968650e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2c0d8078d7bc02e2612e88b9ffc44539de128431ec93348d7b868968650e2f->enter($__internal_7c2c0d8078d7bc02e2612e88b9ffc44539de128431ec93348d7b868968650e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7c2c0d8078d7bc02e2612e88b9ffc44539de128431ec93348d7b868968650e2f->leave($__internal_7c2c0d8078d7bc02e2612e88b9ffc44539de128431ec93348d7b868968650e2f_prof);

        
        $__internal_980ef541895fcfc1f3f36a90b3ca4d0ad24ad9ba8601f570aca02b9ceadda8e9->leave($__internal_980ef541895fcfc1f3f36a90b3ca4d0ad24ad9ba8601f570aca02b9ceadda8e9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_13836a856cbcaafb841fbbee98faecab617d32607fbe1056a7c1bd697b56b24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13836a856cbcaafb841fbbee98faecab617d32607fbe1056a7c1bd697b56b24c->enter($__internal_13836a856cbcaafb841fbbee98faecab617d32607fbe1056a7c1bd697b56b24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_462e78928a0d5eaf4c1cf276e87a02817934ef5414c026dc976b39523fc9e6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462e78928a0d5eaf4c1cf276e87a02817934ef5414c026dc976b39523fc9e6dd->enter($__internal_462e78928a0d5eaf4c1cf276e87a02817934ef5414c026dc976b39523fc9e6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_462e78928a0d5eaf4c1cf276e87a02817934ef5414c026dc976b39523fc9e6dd->leave($__internal_462e78928a0d5eaf4c1cf276e87a02817934ef5414c026dc976b39523fc9e6dd_prof);

        
        $__internal_13836a856cbcaafb841fbbee98faecab617d32607fbe1056a7c1bd697b56b24c->leave($__internal_13836a856cbcaafb841fbbee98faecab617d32607fbe1056a7c1bd697b56b24c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_25da69b7858f2dcadb0afcecc515e1561944cadad64d9cbd46ca994b93d09332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25da69b7858f2dcadb0afcecc515e1561944cadad64d9cbd46ca994b93d09332->enter($__internal_25da69b7858f2dcadb0afcecc515e1561944cadad64d9cbd46ca994b93d09332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_311a5535bd1dd3d74cdf84067364fc56de65d3fd3b915ffe65559d7522cd8659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311a5535bd1dd3d74cdf84067364fc56de65d3fd3b915ffe65559d7522cd8659->enter($__internal_311a5535bd1dd3d74cdf84067364fc56de65d3fd3b915ffe65559d7522cd8659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_311a5535bd1dd3d74cdf84067364fc56de65d3fd3b915ffe65559d7522cd8659->leave($__internal_311a5535bd1dd3d74cdf84067364fc56de65d3fd3b915ffe65559d7522cd8659_prof);

        
        $__internal_25da69b7858f2dcadb0afcecc515e1561944cadad64d9cbd46ca994b93d09332->leave($__internal_25da69b7858f2dcadb0afcecc515e1561944cadad64d9cbd46ca994b93d09332_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
