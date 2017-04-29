<?php

/* pedido/index.html.twig */
class __TwigTemplate_20687f458aaa0d6b743d50579ff6b0ea82f71fa224e6a063b17bbffab3af055b extends Twig_Template
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
        $__internal_299508711f4faf8862b933bf38352ccbd17119a6cec0fa01bc90c6a4921a6c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299508711f4faf8862b933bf38352ccbd17119a6cec0fa01bc90c6a4921a6c28->enter($__internal_299508711f4faf8862b933bf38352ccbd17119a6cec0fa01bc90c6a4921a6c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $__internal_7933d836516440b7ae6f87561e62ac3f8ac008b8d0e1105a4468874af34d6a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7933d836516440b7ae6f87561e62ac3f8ac008b8d0e1105a4468874af34d6a33->enter($__internal_7933d836516440b7ae6f87561e62ac3f8ac008b8d0e1105a4468874af34d6a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_299508711f4faf8862b933bf38352ccbd17119a6cec0fa01bc90c6a4921a6c28->leave($__internal_299508711f4faf8862b933bf38352ccbd17119a6cec0fa01bc90c6a4921a6c28_prof);

        
        $__internal_7933d836516440b7ae6f87561e62ac3f8ac008b8d0e1105a4468874af34d6a33->leave($__internal_7933d836516440b7ae6f87561e62ac3f8ac008b8d0e1105a4468874af34d6a33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c56299ff1f3171129b5817e1ac268087b8c685b727aec9bf16540e8a930f334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c56299ff1f3171129b5817e1ac268087b8c685b727aec9bf16540e8a930f334->enter($__internal_1c56299ff1f3171129b5817e1ac268087b8c685b727aec9bf16540e8a930f334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6191c3defdc8aea10d351db852a15c6c6285093f88981b82fdc85242501828ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6191c3defdc8aea10d351db852a15c6c6285093f88981b82fdc85242501828ca->enter($__internal_6191c3defdc8aea10d351db852a15c6c6285093f88981b82fdc85242501828ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
            foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
                // line 77
                echo "                ";
                if (($this->getAttribute($context["pedido"], "user", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) {
                    // line 78
                    echo "                    <tr>
                        ";
                    // line 80
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "nombreyapellido", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "documento", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "modelo", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "color", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 84
                    if ($this->getAttribute($context["pedido"], "createAt", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "createAt", array()), "d-m-Y"), "html", null, true);
                    }
                    echo "</td>
                        <td>";
                    // line 85
                    if ($this->getAttribute($context["pedido"], "fechaEntregaEstim", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "fechaEntregaEstim", array()), "d-m-Y"), "html", null, true);
                    }
                    echo "</td>
                        <td>";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "importe", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "observacion", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "user", array()), "html", null, true);
                    echo "</td>
                        <td>
                            <ul>
                                ";
                    // line 92
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_show", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
                    echo "\">Show</a>
                                ";
                    // line 94
                    echo "                                ";
                    // line 95
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
                    echo "\">Edit</a>
                                ";
                    // line 97
                    echo "                            </ul>
                        </td>
                    </tr>
                ";
                }
                // line 101
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "            </tbody>
        </table>





        </div>
    ";
        }
        // line 111
        echo "
    ";
        // line 113
        echo "        ";
        // line 114
        echo "            ";
        // line 115
        echo "        ";
        // line 116
        echo "    ";
        
        $__internal_6191c3defdc8aea10d351db852a15c6c6285093f88981b82fdc85242501828ca->leave($__internal_6191c3defdc8aea10d351db852a15c6c6285093f88981b82fdc85242501828ca_prof);

        
        $__internal_1c56299ff1f3171129b5817e1ac268087b8c685b727aec9bf16540e8a930f334->leave($__internal_1c56299ff1f3171129b5817e1ac268087b8c685b727aec9bf16540e8a930f334_prof);

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
        return array (  274 => 116,  272 => 115,  270 => 114,  268 => 113,  265 => 111,  254 => 102,  248 => 101,  242 => 97,  237 => 95,  235 => 94,  230 => 92,  224 => 88,  220 => 87,  216 => 86,  210 => 85,  204 => 84,  200 => 83,  196 => 82,  192 => 81,  187 => 80,  184 => 78,  181 => 77,  177 => 76,  156 => 57,  150 => 53,  141 => 49,  136 => 47,  134 => 46,  129 => 44,  123 => 40,  119 => 39,  115 => 38,  109 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  86 => 32,  83 => 30,  79 => 29,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
