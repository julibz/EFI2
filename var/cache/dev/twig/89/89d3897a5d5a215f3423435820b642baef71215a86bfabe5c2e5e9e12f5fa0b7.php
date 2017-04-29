<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_77c421da8ebf6dbd8993e82d3651e86aa412980a185d57b38c0048dd2b6ed5cb extends Twig_Template
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
        $__internal_70c990633bea937442a79b08d1cb48041efca05190dc39bbed62a18c94c0ecbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c990633bea937442a79b08d1cb48041efca05190dc39bbed62a18c94c0ecbf->enter($__internal_70c990633bea937442a79b08d1cb48041efca05190dc39bbed62a18c94c0ecbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_933694334cc64d967956a4c9c9f587b193b24c57125b91ba37d34577827b4d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933694334cc64d967956a4c9c9f587b193b24c57125b91ba37d34577827b4d88->enter($__internal_933694334cc64d967956a4c9c9f587b193b24c57125b91ba37d34577827b4d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70c990633bea937442a79b08d1cb48041efca05190dc39bbed62a18c94c0ecbf->leave($__internal_70c990633bea937442a79b08d1cb48041efca05190dc39bbed62a18c94c0ecbf_prof);

        
        $__internal_933694334cc64d967956a4c9c9f587b193b24c57125b91ba37d34577827b4d88->leave($__internal_933694334cc64d967956a4c9c9f587b193b24c57125b91ba37d34577827b4d88_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8ac90287fd71f7d391463f8d3c18f7b278ee90e44873869332b635a03f880b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ac90287fd71f7d391463f8d3c18f7b278ee90e44873869332b635a03f880b3->enter($__internal_c8ac90287fd71f7d391463f8d3c18f7b278ee90e44873869332b635a03f880b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_729471ad7a7632be14cef0e9f342ae90fafb3f8464efcfcbd8ced45f0454e8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729471ad7a7632be14cef0e9f342ae90fafb3f8464efcfcbd8ced45f0454e8e5->enter($__internal_729471ad7a7632be14cef0e9f342ae90fafb3f8464efcfcbd8ced45f0454e8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_729471ad7a7632be14cef0e9f342ae90fafb3f8464efcfcbd8ced45f0454e8e5->leave($__internal_729471ad7a7632be14cef0e9f342ae90fafb3f8464efcfcbd8ced45f0454e8e5_prof);

        
        $__internal_c8ac90287fd71f7d391463f8d3c18f7b278ee90e44873869332b635a03f880b3->leave($__internal_c8ac90287fd71f7d391463f8d3c18f7b278ee90e44873869332b635a03f880b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6538dcc044c73aa2ade829d32dd077bd916ae29ce12d99c890ab31511e2f5dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6538dcc044c73aa2ade829d32dd077bd916ae29ce12d99c890ab31511e2f5dd->enter($__internal_a6538dcc044c73aa2ade829d32dd077bd916ae29ce12d99c890ab31511e2f5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4d43b23d6d0a7587c362d60faacc78f1eb00e500c65958160b8bbdb3d969fe63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d43b23d6d0a7587c362d60faacc78f1eb00e500c65958160b8bbdb3d969fe63->enter($__internal_4d43b23d6d0a7587c362d60faacc78f1eb00e500c65958160b8bbdb3d969fe63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d43b23d6d0a7587c362d60faacc78f1eb00e500c65958160b8bbdb3d969fe63->leave($__internal_4d43b23d6d0a7587c362d60faacc78f1eb00e500c65958160b8bbdb3d969fe63_prof);

        
        $__internal_a6538dcc044c73aa2ade829d32dd077bd916ae29ce12d99c890ab31511e2f5dd->leave($__internal_a6538dcc044c73aa2ade829d32dd077bd916ae29ce12d99c890ab31511e2f5dd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89a3fbb4be32c5fbf0e11e098b7b17d458061e409c4c31b73af0975501262d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a3fbb4be32c5fbf0e11e098b7b17d458061e409c4c31b73af0975501262d70->enter($__internal_89a3fbb4be32c5fbf0e11e098b7b17d458061e409c4c31b73af0975501262d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ec2b0f9e465474362e74771b93e85b1651449ee55fd16fb913e0a892060bd116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2b0f9e465474362e74771b93e85b1651449ee55fd16fb913e0a892060bd116->enter($__internal_ec2b0f9e465474362e74771b93e85b1651449ee55fd16fb913e0a892060bd116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec2b0f9e465474362e74771b93e85b1651449ee55fd16fb913e0a892060bd116->leave($__internal_ec2b0f9e465474362e74771b93e85b1651449ee55fd16fb913e0a892060bd116_prof);

        
        $__internal_89a3fbb4be32c5fbf0e11e098b7b17d458061e409c4c31b73af0975501262d70->leave($__internal_89a3fbb4be32c5fbf0e11e098b7b17d458061e409c4c31b73af0975501262d70_prof);

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
