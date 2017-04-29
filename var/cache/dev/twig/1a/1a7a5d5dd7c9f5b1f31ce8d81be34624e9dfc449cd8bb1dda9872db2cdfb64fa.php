<?php

/* pedido/index.html.twig */
class __TwigTemplate_cd2f5cf48c4f7eef96dfb1475fe412bc8a85ec8bf90ea89c4f004ec1fda116a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/index.html.twig", 1);
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
        $__internal_369e94586e01a9783973264e63d92baf4212afce86664ad75d8a0e7a7d42afde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369e94586e01a9783973264e63d92baf4212afce86664ad75d8a0e7a7d42afde->enter($__internal_369e94586e01a9783973264e63d92baf4212afce86664ad75d8a0e7a7d42afde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $__internal_9770a17572a083007f7440c94e29c4bfeb0d6125063122ef9b1164bfe42aa3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9770a17572a083007f7440c94e29c4bfeb0d6125063122ef9b1164bfe42aa3f7->enter($__internal_9770a17572a083007f7440c94e29c4bfeb0d6125063122ef9b1164bfe42aa3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_369e94586e01a9783973264e63d92baf4212afce86664ad75d8a0e7a7d42afde->leave($__internal_369e94586e01a9783973264e63d92baf4212afce86664ad75d8a0e7a7d42afde_prof);

        
        $__internal_9770a17572a083007f7440c94e29c4bfeb0d6125063122ef9b1164bfe42aa3f7->leave($__internal_9770a17572a083007f7440c94e29c4bfeb0d6125063122ef9b1164bfe42aa3f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba1c051e2a33cc5cece6cd02daedafc02ddca35223be1d3c426cc6f83c7721a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1c051e2a33cc5cece6cd02daedafc02ddca35223be1d3c426cc6f83c7721a7->enter($__internal_ba1c051e2a33cc5cece6cd02daedafc02ddca35223be1d3c426cc6f83c7721a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8ab0daf850853be26a60708d3dea2e17f9de672d0fd1b3c1bd69c64f09d80ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ab0daf850853be26a60708d3dea2e17f9de672d0fd1b3c1bd69c64f09d80ff->enter($__internal_a8ab0daf850853be26a60708d3dea2e17f9de672d0fd1b3c1bd69c64f09d80ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    <div class=\"container\">
    ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "
            <h1>Lista de pedidos </h1>
            <input type=\"search\" class=\"light-table-filter\" data-table=\"order-table\" placeholder=\"Buscar\">
            <table class=\"table order-table table\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Documento</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Fecha pedido</th>
                        <th>Entrega estimada</th>
                        <th>Importe</th>
                        <th>Observacion</th>
                        <th>Cliente</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
            foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
                // line 30
                echo "                        <tr>
                            ";
                // line 32
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "nombreyapellido", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "documento", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "modelo", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "color", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                if ($this->getAttribute($context["pedido"], "createAt", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "createAt", array()), "d-m-Y"), "html", null, true);
                }
                echo "</td>
                            <td>";
                // line 37
                if ($this->getAttribute($context["pedido"], "fechaEntregaEstim", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "fechaEntregaEstim", array()), "d-m-Y"), "html", null, true);
                }
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "importe", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "observacion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "user", array()), "html", null, true);
                echo "</td>
                            <td>
                                <ul>
                                    ";
                // line 44
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_show", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
                echo "\">Show</a>
                                    ";
                // line 46
                echo "                                    ";
                // line 47
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
                echo "\">Edit</a>
                                    ";
                // line 49
                echo "                                </ul>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </tbody>
            </table>

    ";
        } else {
            // line 57
            echo "
        <h1>Lista de sus pedidos </h1>
        <input type=\"search\" class=\"light-table-filter\" data-table=\"order-table\" placeholder=\"Buscar\">
        <table class=\"table order-table table\">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Mail</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Fecha pedido</th>
                <th>Entrega estimada</th>
                <th>Importe</th>
                <th>Observacion</th>
                <th>Cliente</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
            foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
                // line 78
                echo "                ";
                if (($this->getAttribute($context["pedido"], "user", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) {
                    // line 79
                    echo "                    <tr>
                        ";
                    // line 81
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "nombreyapellido", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "documento", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "mail", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "modelo", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "color", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 86
                    if ($this->getAttribute($context["pedido"], "createAt", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "createAt", array()), "d-m-Y"), "html", null, true);
                    }
                    echo "</td>
                        <td>";
                    // line 87
                    if ($this->getAttribute($context["pedido"], "fechaEntregaEstim", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "fechaEntregaEstim", array()), "d-m-Y"), "html", null, true);
                    }
                    echo "</td>
                        <td>";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "importe", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "observacion", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "user", array()), "html", null, true);
                    echo "</td>
                        <td>
                            <ul>
                                ";
                    // line 94
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_show", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
                    echo "\">Show</a>
                                ";
                    // line 96
                    echo "                                ";
                    // line 97
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
                    echo "\">Edit</a>
                                ";
                    // line 99
                    echo "                            </ul>
                        </td>
                    </tr>
                ";
                }
                // line 103
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "            </tbody>
        </table>





        </div>
    ";
        }
        // line 113
        echo "
    ";
        // line 115
        echo "        ";
        // line 116
        echo "            ";
        // line 117
        echo "        ";
        // line 118
        echo "    ";
        
        $__internal_a8ab0daf850853be26a60708d3dea2e17f9de672d0fd1b3c1bd69c64f09d80ff->leave($__internal_a8ab0daf850853be26a60708d3dea2e17f9de672d0fd1b3c1bd69c64f09d80ff_prof);

        
        $__internal_ba1c051e2a33cc5cece6cd02daedafc02ddca35223be1d3c426cc6f83c7721a7->leave($__internal_ba1c051e2a33cc5cece6cd02daedafc02ddca35223be1d3c426cc6f83c7721a7_prof);

    }

    public function getTemplateName()
    {
        return "pedido/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 118,  277 => 117,  275 => 116,  273 => 115,  270 => 113,  259 => 104,  253 => 103,  247 => 99,  242 => 97,  240 => 96,  235 => 94,  229 => 90,  225 => 89,  221 => 88,  215 => 87,  209 => 86,  205 => 85,  201 => 84,  197 => 83,  193 => 82,  188 => 81,  185 => 79,  182 => 78,  178 => 77,  156 => 57,  150 => 53,  141 => 49,  136 => 47,  134 => 46,  129 => 44,  123 => 40,  119 => 39,  115 => 38,  109 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  86 => 32,  83 => 30,  79 => 29,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    {% if is_granted(\"ROLE_ADMIN\") %}

            <h1>Lista de pedidos </h1>
            <input type=\"search\" class=\"light-table-filter\" data-table=\"order-table\" placeholder=\"Buscar\">
            <table class=\"table order-table table\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Documento</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Fecha pedido</th>
                        <th>Entrega estimada</th>
                        <th>Importe</th>
                        <th>Observacion</th>
                        <th>Cliente</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% for pedido in pedidos %}
                        <tr>
                            {#<td><a href=\"{{ path('pedido_show', { 'id': pedido.id }) }}\">{{ pedido.id }}</a></td>#}
                            <td>{{  pedido.nombreyapellido }}</td>
                            <td>{{  pedido.documento }}</td>
                            <td>{{  pedido.modelo }}</td>
                            <td>{{ pedido.color }}</td>
                            <td>{% if pedido.createAt %}{{ pedido.createAt|date('d-m-Y') }}{% endif %}</td>
                            <td>{% if pedido.fechaEntregaEstim %}{{ pedido.fechaEntregaEstim|date('d-m-Y') }}{% endif %}</td>
                            <td>{{ pedido.importe }}</td>
                            <td>{{ pedido.observacion }}</td>
                            <td>{{  pedido.user }}</td>
                            <td>
                                <ul>
                                    {#<li>#}
                                        <a href=\"{{ path('pedido_show', { 'id': pedido.id }) }}\">Show</a>
                                    {#</li>#}
                                    {#<li>#}
                                        <a href=\"{{ path('pedido_edit', { 'id': pedido.id }) }}\">Edit</a>
                                    {#</li>#}
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

    {% else %}

        <h1>Lista de sus pedidos </h1>
        <input type=\"search\" class=\"light-table-filter\" data-table=\"order-table\" placeholder=\"Buscar\">
        <table class=\"table order-table table\">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Mail</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Fecha pedido</th>
                <th>Entrega estimada</th>
                <th>Importe</th>
                <th>Observacion</th>
                <th>Cliente</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            {% for pedido in pedidos %}
                {% if pedido.user == app.user.username %}
                    <tr>
                        {#<td><a href=\"{{ path('pedido_show', { 'id': pedido.id }) }}\">{{ pedido.id }}</a></td>#}
                        <td>{{  pedido.nombreyapellido }}</td>
                        <td>{{  pedido.documento }}</td>
                        <td>{{  pedido.mail }}</td>
                        <td>{{  pedido.modelo }}</td>
                        <td>{{ pedido.color }}</td>
                        <td>{% if pedido.createAt %}{{ pedido.createAt|date('d-m-Y') }}{% endif %}</td>
                        <td>{% if pedido.fechaEntregaEstim %}{{ pedido.fechaEntregaEstim|date('d-m-Y') }}{% endif %}</td>
                        <td>{{ pedido.importe }}</td>
                        <td>{{ pedido.observacion }}</td>
                        <td>{{  pedido.user }}</td>
                        <td>
                            <ul>
                                {#<li>#}
                                <a href=\"{{ path('pedido_show', { 'id': pedido.id }) }}\">Show</a>
                                {#</li>#}
                                {#<li>#}
                                <a href=\"{{ path('pedido_edit', { 'id': pedido.id }) }}\">Edit</a>
                                {#</li>#}
                            </ul>
                        </td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>





        </div>
    {% endif %}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('pedido_new') }}\">Create a new pedido</a>#}
        {#</li>#}
    {#</ul>#}
{% endblock %}
", "pedido/index.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/pedido/index.html.twig");
    }
}
