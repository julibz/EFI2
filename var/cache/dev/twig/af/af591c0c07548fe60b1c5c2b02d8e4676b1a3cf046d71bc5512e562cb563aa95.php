<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_44d596c3d58ff2ee7a49025487d9703c3856c9b8b701dd2742c8b9b51b81d40a extends Twig_Template
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
        $__internal_c547a0a4e0e85186cf71355896220fc3dde49f608aa4764b4f3082886bf8850e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c547a0a4e0e85186cf71355896220fc3dde49f608aa4764b4f3082886bf8850e->enter($__internal_c547a0a4e0e85186cf71355896220fc3dde49f608aa4764b4f3082886bf8850e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d57e6e08848f917b405020d000887b12fdafa17fb540caa2f1b91e88db5dc719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57e6e08848f917b405020d000887b12fdafa17fb540caa2f1b91e88db5dc719->enter($__internal_d57e6e08848f917b405020d000887b12fdafa17fb540caa2f1b91e88db5dc719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c547a0a4e0e85186cf71355896220fc3dde49f608aa4764b4f3082886bf8850e->leave($__internal_c547a0a4e0e85186cf71355896220fc3dde49f608aa4764b4f3082886bf8850e_prof);

        
        $__internal_d57e6e08848f917b405020d000887b12fdafa17fb540caa2f1b91e88db5dc719->leave($__internal_d57e6e08848f917b405020d000887b12fdafa17fb540caa2f1b91e88db5dc719_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c30259edd36a9d289f4ef85387839a699c6f1ff85fe9876036ec2d50127e7a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c30259edd36a9d289f4ef85387839a699c6f1ff85fe9876036ec2d50127e7a9->enter($__internal_2c30259edd36a9d289f4ef85387839a699c6f1ff85fe9876036ec2d50127e7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfdd4188abd8a4524c8aff8f20db0edbee663de1647176ee1361f6b00f2bd1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdd4188abd8a4524c8aff8f20db0edbee663de1647176ee1361f6b00f2bd1e1->enter($__internal_cfdd4188abd8a4524c8aff8f20db0edbee663de1647176ee1361f6b00f2bd1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cfdd4188abd8a4524c8aff8f20db0edbee663de1647176ee1361f6b00f2bd1e1->leave($__internal_cfdd4188abd8a4524c8aff8f20db0edbee663de1647176ee1361f6b00f2bd1e1_prof);

        
        $__internal_2c30259edd36a9d289f4ef85387839a699c6f1ff85fe9876036ec2d50127e7a9->leave($__internal_2c30259edd36a9d289f4ef85387839a699c6f1ff85fe9876036ec2d50127e7a9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a58e48b7c229f7aca2aa32fd9b560289b4733963ab2666adfa1159b7c40376a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a58e48b7c229f7aca2aa32fd9b560289b4733963ab2666adfa1159b7c40376a->enter($__internal_0a58e48b7c229f7aca2aa32fd9b560289b4733963ab2666adfa1159b7c40376a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b57b217acc74e81f03350faee43f8054be989186a514d2152e9c9d6801ec3d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57b217acc74e81f03350faee43f8054be989186a514d2152e9c9d6801ec3d36->enter($__internal_b57b217acc74e81f03350faee43f8054be989186a514d2152e9c9d6801ec3d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b57b217acc74e81f03350faee43f8054be989186a514d2152e9c9d6801ec3d36->leave($__internal_b57b217acc74e81f03350faee43f8054be989186a514d2152e9c9d6801ec3d36_prof);

        
        $__internal_0a58e48b7c229f7aca2aa32fd9b560289b4733963ab2666adfa1159b7c40376a->leave($__internal_0a58e48b7c229f7aca2aa32fd9b560289b4733963ab2666adfa1159b7c40376a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_372c8700f9f7adca3666077bea5b7fc9100210628c8aec4a2f7255909a772e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372c8700f9f7adca3666077bea5b7fc9100210628c8aec4a2f7255909a772e23->enter($__internal_372c8700f9f7adca3666077bea5b7fc9100210628c8aec4a2f7255909a772e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dd7ea883789a1dba0171ec9f4dd7d211496892735ea2e8c8358ca4eeb546c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd7ea883789a1dba0171ec9f4dd7d211496892735ea2e8c8358ca4eeb546c9d->enter($__internal_2dd7ea883789a1dba0171ec9f4dd7d211496892735ea2e8c8358ca4eeb546c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2dd7ea883789a1dba0171ec9f4dd7d211496892735ea2e8c8358ca4eeb546c9d->leave($__internal_2dd7ea883789a1dba0171ec9f4dd7d211496892735ea2e8c8358ca4eeb546c9d_prof);

        
        $__internal_372c8700f9f7adca3666077bea5b7fc9100210628c8aec4a2f7255909a772e23->leave($__internal_372c8700f9f7adca3666077bea5b7fc9100210628c8aec4a2f7255909a772e23_prof);

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
