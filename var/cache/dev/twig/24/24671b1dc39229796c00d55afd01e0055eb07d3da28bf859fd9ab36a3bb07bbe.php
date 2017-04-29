<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f2303e90d54491a5f522f191e1abc43d18e61c5baacf24cad49718ea4214f241 extends Twig_Template
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
        $__internal_0ffc94c92d04c1d401f59800b0ef3d0d1999a6dba7c1a4c3de9ff4bb77b8444c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ffc94c92d04c1d401f59800b0ef3d0d1999a6dba7c1a4c3de9ff4bb77b8444c->enter($__internal_0ffc94c92d04c1d401f59800b0ef3d0d1999a6dba7c1a4c3de9ff4bb77b8444c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_55271f362846df5dc04b8c55a6d5df527b3772ff5fb26f1ece29f0b38425c5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55271f362846df5dc04b8c55a6d5df527b3772ff5fb26f1ece29f0b38425c5fd->enter($__internal_55271f362846df5dc04b8c55a6d5df527b3772ff5fb26f1ece29f0b38425c5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ffc94c92d04c1d401f59800b0ef3d0d1999a6dba7c1a4c3de9ff4bb77b8444c->leave($__internal_0ffc94c92d04c1d401f59800b0ef3d0d1999a6dba7c1a4c3de9ff4bb77b8444c_prof);

        
        $__internal_55271f362846df5dc04b8c55a6d5df527b3772ff5fb26f1ece29f0b38425c5fd->leave($__internal_55271f362846df5dc04b8c55a6d5df527b3772ff5fb26f1ece29f0b38425c5fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd72c310f26212b46902494a5f459a27d0b77722edb225731dbf4ad2561880a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd72c310f26212b46902494a5f459a27d0b77722edb225731dbf4ad2561880a1->enter($__internal_bd72c310f26212b46902494a5f459a27d0b77722edb225731dbf4ad2561880a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4964bf35ec2729a95c44c80c1e399b275fadb80396f3f09648a2c606c28a7109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4964bf35ec2729a95c44c80c1e399b275fadb80396f3f09648a2c606c28a7109->enter($__internal_4964bf35ec2729a95c44c80c1e399b275fadb80396f3f09648a2c606c28a7109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4964bf35ec2729a95c44c80c1e399b275fadb80396f3f09648a2c606c28a7109->leave($__internal_4964bf35ec2729a95c44c80c1e399b275fadb80396f3f09648a2c606c28a7109_prof);

        
        $__internal_bd72c310f26212b46902494a5f459a27d0b77722edb225731dbf4ad2561880a1->leave($__internal_bd72c310f26212b46902494a5f459a27d0b77722edb225731dbf4ad2561880a1_prof);

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
