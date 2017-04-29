<?php

/* pedido/mis_pedidos.html.twig */
class __TwigTemplate_bfed222a453baf9789759ae525ce70dc1b7b3eae7b81181c18c965f6c0736a04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/mis_pedidos.html.twig", 1);
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
        $__internal_2a21eba2c0f129e951f465ccab3b96af23650d81b22e190414d09d94687cd4c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a21eba2c0f129e951f465ccab3b96af23650d81b22e190414d09d94687cd4c6->enter($__internal_2a21eba2c0f129e951f465ccab3b96af23650d81b22e190414d09d94687cd4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/mis_pedidos.html.twig"));

        $__internal_a5eda47f8a9f37c1e48901239f0f000847ffc4a4a12c297613c8147753487eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5eda47f8a9f37c1e48901239f0f000847ffc4a4a12c297613c8147753487eda->enter($__internal_a5eda47f8a9f37c1e48901239f0f000847ffc4a4a12c297613c8147753487eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/mis_pedidos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a21eba2c0f129e951f465ccab3b96af23650d81b22e190414d09d94687cd4c6->leave($__internal_2a21eba2c0f129e951f465ccab3b96af23650d81b22e190414d09d94687cd4c6_prof);

        
        $__internal_a5eda47f8a9f37c1e48901239f0f000847ffc4a4a12c297613c8147753487eda->leave($__internal_a5eda47f8a9f37c1e48901239f0f000847ffc4a4a12c297613c8147753487eda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da4407cbeeb4860b6782e77a5aeec785bcd608d264c3b626b93b431343f6c580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4407cbeeb4860b6782e77a5aeec785bcd608d264c3b626b93b431343f6c580->enter($__internal_da4407cbeeb4860b6782e77a5aeec785bcd608d264c3b626b93b431343f6c580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25bcfa7e5e5d5ffad4940218c5dd8e582e628e5feba5e189fbd03b4057af7d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25bcfa7e5e5d5ffad4940218c5dd8e582e628e5feba5e189fbd03b4057af7d98->enter($__internal_25bcfa7e5e5d5ffad4940218c5dd8e582e628e5feba5e189fbd03b4057af7d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
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
        ";
        // line 31
        echo "        ";
        // line 32
        echo "
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 34
            echo "            <tr>
                ";
            // line 36
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "nombreyapellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "documento", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "modelo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "color", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["pedido"], "createAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "createAt", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["pedido"], "fechaEntregaEstim", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "fechaEntregaEstim", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "importe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "observacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "user", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        ";
            // line 48
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_show", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                        ";
            // line 50
            echo "                        ";
            // line 51
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                        ";
            // line 53
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    ";
        // line 61
        echo "        ";
        // line 62
        echo "            ";
        // line 63
        echo "        ";
        // line 64
        echo "    ";
        
        $__internal_25bcfa7e5e5d5ffad4940218c5dd8e582e628e5feba5e189fbd03b4057af7d98->leave($__internal_25bcfa7e5e5d5ffad4940218c5dd8e582e628e5feba5e189fbd03b4057af7d98_prof);

        
        $__internal_da4407cbeeb4860b6782e77a5aeec785bcd608d264c3b626b93b431343f6c580->leave($__internal_da4407cbeeb4860b6782e77a5aeec785bcd608d264c3b626b93b431343f6c580_prof);

    }

    public function getTemplateName()
    {
        return "pedido/mis_pedidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 64,  162 => 63,  160 => 62,  158 => 61,  153 => 57,  144 => 53,  139 => 51,  137 => 50,  132 => 48,  126 => 44,  122 => 43,  118 => 42,  112 => 41,  106 => 40,  102 => 39,  98 => 38,  94 => 37,  89 => 36,  86 => 34,  82 => 33,  79 => 32,  77 => 31,  49 => 4,  40 => 3,  11 => 1,);
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
        {#<tbody>#}
        {#{% if  {'%username%': app.user.username} == {{  pedido.user }} %}#}

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

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('pedido_new') }}\">Create a new pedido</a>#}
        {#</li>#}
    {#</ul>#}
{% endblock %}
", "pedido/mis_pedidos.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/pedido/mis_pedidos.html.twig");
    }
}
