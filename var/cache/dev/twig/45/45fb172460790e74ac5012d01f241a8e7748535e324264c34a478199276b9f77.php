<?php

/* color/index.html.twig */
class __TwigTemplate_97a409a25e9aeaeca7e184dcd4a0b900db3e9f00489430d4a34ddb10739fcb4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "color/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41c5556267e32dfdd496df751ee4a6a384bf4b86d90f240602b40f682af08357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c5556267e32dfdd496df751ee4a6a384bf4b86d90f240602b40f682af08357->enter($__internal_41c5556267e32dfdd496df751ee4a6a384bf4b86d90f240602b40f682af08357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/index.html.twig"));

        $__internal_7f6d3da49d10901318e3bbe1494ba557ce5e0c5747d479d5add353e0f9aa4f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6d3da49d10901318e3bbe1494ba557ce5e0c5747d479d5add353e0f9aa4f33->enter($__internal_7f6d3da49d10901318e3bbe1494ba557ce5e0c5747d479d5add353e0f9aa4f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c5556267e32dfdd496df751ee4a6a384bf4b86d90f240602b40f682af08357->leave($__internal_41c5556267e32dfdd496df751ee4a6a384bf4b86d90f240602b40f682af08357_prof);

        
        $__internal_7f6d3da49d10901318e3bbe1494ba557ce5e0c5747d479d5add353e0f9aa4f33->leave($__internal_7f6d3da49d10901318e3bbe1494ba557ce5e0c5747d479d5add353e0f9aa4f33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff25a6d71c37fbf625f54373caace2ec86e4d49c42e465cb39c476116ba87fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff25a6d71c37fbf625f54373caace2ec86e4d49c42e465cb39c476116ba87fc4->enter($__internal_ff25a6d71c37fbf625f54373caace2ec86e4d49c42e465cb39c476116ba87fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_933ac697d31c3dc15eb734ae9acdf09c179b38124dab614b1bc25e99aa075adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933ac697d31c3dc15eb734ae9acdf09c179b38124dab614b1bc25e99aa075adf->enter($__internal_933ac697d31c3dc15eb734ae9acdf09c179b38124dab614b1bc25e99aa075adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <h1>Listado de colores</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Color</th>
                    <th>Disponibilidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 21
            echo "                <tr>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "nombreColor", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            if ($this->getAttribute($context["color"], "disponibilidadColor", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("color_show", array("id" => $this->getAttribute($context["color"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("color_edit", array("id" => $this->getAttribute($context["color"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("color_new");
        echo "\">Create a new color</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_933ac697d31c3dc15eb734ae9acdf09c179b38124dab614b1bc25e99aa075adf->leave($__internal_933ac697d31c3dc15eb734ae9acdf09c179b38124dab614b1bc25e99aa075adf_prof);

        
        $__internal_ff25a6d71c37fbf625f54373caace2ec86e4d49c42e465cb39c476116ba87fc4->leave($__internal_ff25a6d71c37fbf625f54373caace2ec86e4d49c42e465cb39c476116ba87fc4_prof);

    }

    public function getTemplateName()
    {
        return "color/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  107 => 36,  95 => 30,  89 => 27,  78 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <h1>Listado de colores</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Color</th>
                    <th>Disponibilidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {% for color in colors %}
                <tr>
                    <td>{{ color.nombreColor }}</td>
                    <td>{% if color.disponibilidadColor %}Yes{% else %}No{% endif %}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('color_show', { 'id': color.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('color_edit', { 'id': color.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"{{ path('color_new') }}\">Create a new color</a>
            </li>
        </ul>
    </div>
{% endblock %}
", "color/index.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/color/index.html.twig");
    }
}
