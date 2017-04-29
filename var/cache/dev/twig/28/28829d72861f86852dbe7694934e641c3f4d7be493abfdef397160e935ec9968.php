<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_edac784673bf2b4b442d716fb7644bf640b6294cf2adc8ab8d1ce5b992c290b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8a6726072e6f191862c030fccb2c06208c759674248c5a0be0adac6ff67d9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a6726072e6f191862c030fccb2c06208c759674248c5a0be0adac6ff67d9a4->enter($__internal_f8a6726072e6f191862c030fccb2c06208c759674248c5a0be0adac6ff67d9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_f2ae5c4fe6e82f8f3c24974441ffe73189b000aa92b4e6627d30d755006f182a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ae5c4fe6e82f8f3c24974441ffe73189b000aa92b4e6627d30d755006f182a->enter($__internal_f2ae5c4fe6e82f8f3c24974441ffe73189b000aa92b4e6627d30d755006f182a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a6726072e6f191862c030fccb2c06208c759674248c5a0be0adac6ff67d9a4->leave($__internal_f8a6726072e6f191862c030fccb2c06208c759674248c5a0be0adac6ff67d9a4_prof);

        
        $__internal_f2ae5c4fe6e82f8f3c24974441ffe73189b000aa92b4e6627d30d755006f182a->leave($__internal_f2ae5c4fe6e82f8f3c24974441ffe73189b000aa92b4e6627d30d755006f182a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2f48758ac3deff52a87c8884af1315cebeb6f43c50e0cf5d3d762539a8628a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f48758ac3deff52a87c8884af1315cebeb6f43c50e0cf5d3d762539a8628a2->enter($__internal_a2f48758ac3deff52a87c8884af1315cebeb6f43c50e0cf5d3d762539a8628a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40d4883a85958e7ee569c1ad71022d70663fc7ad40b23f391d69140da7e41a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d4883a85958e7ee569c1ad71022d70663fc7ad40b23f391d69140da7e41a51->enter($__internal_40d4883a85958e7ee569c1ad71022d70663fc7ad40b23f391d69140da7e41a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
";
        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 8)->display($context);
        // line 9
        echo "
";
        
        $__internal_40d4883a85958e7ee569c1ad71022d70663fc7ad40b23f391d69140da7e41a51->leave($__internal_40d4883a85958e7ee569c1ad71022d70663fc7ad40b23f391d69140da7e41a51_prof);

        
        $__internal_a2f48758ac3deff52a87c8884af1315cebeb6f43c50e0cf5d3d762539a8628a2->leave($__internal_a2f48758ac3deff52a87c8884af1315cebeb6f43c50e0cf5d3d762539a8628a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block body %}
    <br>
    <br>
    <br>
    <br>
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}

{% endblock body %}
", "@FOSUser/Profile/show.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
