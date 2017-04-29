<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b833e00a3137bcac4c81d5050ee484a524b14252e462747ca9475267289c053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_23c7beb045c619a93b58bdbb312f7a27fd644c9e1ad05cd0d4ec2448c4bed290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c7beb045c619a93b58bdbb312f7a27fd644c9e1ad05cd0d4ec2448c4bed290->enter($__internal_23c7beb045c619a93b58bdbb312f7a27fd644c9e1ad05cd0d4ec2448c4bed290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a0b47d5bc0f1ede1a6fdd957a431929342f629f27b334349ca48ab4faa3a9d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b47d5bc0f1ede1a6fdd957a431929342f629f27b334349ca48ab4faa3a9d7b->enter($__internal_a0b47d5bc0f1ede1a6fdd957a431929342f629f27b334349ca48ab4faa3a9d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23c7beb045c619a93b58bdbb312f7a27fd644c9e1ad05cd0d4ec2448c4bed290->leave($__internal_23c7beb045c619a93b58bdbb312f7a27fd644c9e1ad05cd0d4ec2448c4bed290_prof);

        
        $__internal_a0b47d5bc0f1ede1a6fdd957a431929342f629f27b334349ca48ab4faa3a9d7b->leave($__internal_a0b47d5bc0f1ede1a6fdd957a431929342f629f27b334349ca48ab4faa3a9d7b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5545e28f98f4d24f31264d27dd17999b5c9db0f5a1c05512a899f392d89e027a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5545e28f98f4d24f31264d27dd17999b5c9db0f5a1c05512a899f392d89e027a->enter($__internal_5545e28f98f4d24f31264d27dd17999b5c9db0f5a1c05512a899f392d89e027a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e5176a420c176928fb9755b5934ee24fe7d10d7f05f4fccca60623814c8b5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5176a420c176928fb9755b5934ee24fe7d10d7f05f4fccca60623814c8b5c5->enter($__internal_4e5176a420c176928fb9755b5934ee24fe7d10d7f05f4fccca60623814c8b5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4e5176a420c176928fb9755b5934ee24fe7d10d7f05f4fccca60623814c8b5c5->leave($__internal_4e5176a420c176928fb9755b5934ee24fe7d10d7f05f4fccca60623814c8b5c5_prof);

        
        $__internal_5545e28f98f4d24f31264d27dd17999b5c9db0f5a1c05512a899f392d89e027a->leave($__internal_5545e28f98f4d24f31264d27dd17999b5c9db0f5a1c05512a899f392d89e027a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e7549f1eaa052a2849cf4b61e75e3ca6983b5e5d2f9ef65a0c84b53d28f77cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7549f1eaa052a2849cf4b61e75e3ca6983b5e5d2f9ef65a0c84b53d28f77cb->enter($__internal_7e7549f1eaa052a2849cf4b61e75e3ca6983b5e5d2f9ef65a0c84b53d28f77cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a67eba3d522b02bf185a9ba6cdeb560e03cc137a46cf6d49e156e8c012b7a715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67eba3d522b02bf185a9ba6cdeb560e03cc137a46cf6d49e156e8c012b7a715->enter($__internal_a67eba3d522b02bf185a9ba6cdeb560e03cc137a46cf6d49e156e8c012b7a715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a67eba3d522b02bf185a9ba6cdeb560e03cc137a46cf6d49e156e8c012b7a715->leave($__internal_a67eba3d522b02bf185a9ba6cdeb560e03cc137a46cf6d49e156e8c012b7a715_prof);

        
        $__internal_7e7549f1eaa052a2849cf4b61e75e3ca6983b5e5d2f9ef65a0c84b53d28f77cb->leave($__internal_7e7549f1eaa052a2849cf4b61e75e3ca6983b5e5d2f9ef65a0c84b53d28f77cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
