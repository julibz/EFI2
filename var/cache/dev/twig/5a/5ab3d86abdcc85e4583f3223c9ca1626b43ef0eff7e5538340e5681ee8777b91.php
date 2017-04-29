<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_60eee4216593e78ac6273c917a83da46b7d966352955b3bbdf6c9d7a8cf99853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7bbfa9b6d44effda94ab62b72ca875e7b060224f9182ffe6bb4841a312eaf1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbfa9b6d44effda94ab62b72ca875e7b060224f9182ffe6bb4841a312eaf1af->enter($__internal_7bbfa9b6d44effda94ab62b72ca875e7b060224f9182ffe6bb4841a312eaf1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_a43b1ecc557b2caa75d0bbf21ef4a7705b5cfc98cdf19b9f114ff3703b17a7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43b1ecc557b2caa75d0bbf21ef4a7705b5cfc98cdf19b9f114ff3703b17a7b4->enter($__internal_a43b1ecc557b2caa75d0bbf21ef4a7705b5cfc98cdf19b9f114ff3703b17a7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbfa9b6d44effda94ab62b72ca875e7b060224f9182ffe6bb4841a312eaf1af->leave($__internal_7bbfa9b6d44effda94ab62b72ca875e7b060224f9182ffe6bb4841a312eaf1af_prof);

        
        $__internal_a43b1ecc557b2caa75d0bbf21ef4a7705b5cfc98cdf19b9f114ff3703b17a7b4->leave($__internal_a43b1ecc557b2caa75d0bbf21ef4a7705b5cfc98cdf19b9f114ff3703b17a7b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59eb13c8d5f9681a3dd1205b6d548c5ead1814a4138bda041c00c3530f75623b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59eb13c8d5f9681a3dd1205b6d548c5ead1814a4138bda041c00c3530f75623b->enter($__internal_59eb13c8d5f9681a3dd1205b6d548c5ead1814a4138bda041c00c3530f75623b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2826882a8bbd4d5de80d37b3d533da002a9627bd709e55f199ef9dcc2a74eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2826882a8bbd4d5de80d37b3d533da002a9627bd709e55f199ef9dcc2a74eef->enter($__internal_f2826882a8bbd4d5de80d37b3d533da002a9627bd709e55f199ef9dcc2a74eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div class=\"container\">
        <br>
        <br>
        <br><br>
        <a href=\"/profile/edit\">Editar perfil</a>

        ";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
";
        
        $__internal_f2826882a8bbd4d5de80d37b3d533da002a9627bd709e55f199ef9dcc2a74eef->leave($__internal_f2826882a8bbd4d5de80d37b3d533da002a9627bd709e55f199ef9dcc2a74eef_prof);

        
        $__internal_59eb13c8d5f9681a3dd1205b6d548c5ead1814a4138bda041c00c3530f75623b->leave($__internal_59eb13c8d5f9681a3dd1205b6d548c5ead1814a4138bda041c00c3530f75623b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"container\">
        <br>
        <br>
        <br><br>
        <a href=\"/profile/edit\">Editar perfil</a>

        {% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
    </div>
{% endblock body %}
", "FOSUserBundle:Profile:show.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
