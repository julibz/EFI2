<?php

/* color/index.html.twig */
class __TwigTemplate_e8eb8fe9ac4c0e953badbf8fce1260f687a800b919ec9e166b436c7668c171b0 extends Twig_Template
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
        $__internal_8f667958f3980a2abaee4309ad923a1724407c12636d90ecdeed87f9b5d35275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f667958f3980a2abaee4309ad923a1724407c12636d90ecdeed87f9b5d35275->enter($__internal_8f667958f3980a2abaee4309ad923a1724407c12636d90ecdeed87f9b5d35275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/index.html.twig"));

        $__internal_0c28ccc97185806ca96a63d4442cb291ee34d334d5772d201cee6e9e371d9330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c28ccc97185806ca96a63d4442cb291ee34d334d5772d201cee6e9e371d9330->enter($__internal_0c28ccc97185806ca96a63d4442cb291ee34d334d5772d201cee6e9e371d9330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f667958f3980a2abaee4309ad923a1724407c12636d90ecdeed87f9b5d35275->leave($__internal_8f667958f3980a2abaee4309ad923a1724407c12636d90ecdeed87f9b5d35275_prof);

        
        $__internal_0c28ccc97185806ca96a63d4442cb291ee34d334d5772d201cee6e9e371d9330->leave($__internal_0c28ccc97185806ca96a63d4442cb291ee34d334d5772d201cee6e9e371d9330_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c34de33096dc8be9424092a667b9415e71b88726fcb77158f17d3839befe4908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34de33096dc8be9424092a667b9415e71b88726fcb77158f17d3839befe4908->enter($__internal_c34de33096dc8be9424092a667b9415e71b88726fcb77158f17d3839befe4908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73ef90c622146df02be9768bd90f9fa92d518f3a6147a46c91b98d6f21bbf0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ef90c622146df02be9768bd90f9fa92d518f3a6147a46c91b98d6f21bbf0a0->enter($__internal_73ef90c622146df02be9768bd90f9fa92d518f3a6147a46c91b98d6f21bbf0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_73ef90c622146df02be9768bd90f9fa92d518f3a6147a46c91b98d6f21bbf0a0->leave($__internal_73ef90c622146df02be9768bd90f9fa92d518f3a6147a46c91b98d6f21bbf0a0_prof);

        
        $__internal_c34de33096dc8be9424092a667b9415e71b88726fcb77158f17d3839befe4908->leave($__internal_c34de33096dc8be9424092a667b9415e71b88726fcb77158f17d3839befe4908_prof);

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
