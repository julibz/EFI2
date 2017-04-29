<?php

/* pedido/show.html.twig */
class __TwigTemplate_a838a25fc709c2b31e3d4c97c138a257c9f2b82a5ba5db538ab5dbf8b65e1806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/show.html.twig", 1);
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
        $__internal_d80cbc29cd9ac5998647f251b0497f120da8d573ee9a7a69a65be4d1e6f3bfcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80cbc29cd9ac5998647f251b0497f120da8d573ee9a7a69a65be4d1e6f3bfcc->enter($__internal_d80cbc29cd9ac5998647f251b0497f120da8d573ee9a7a69a65be4d1e6f3bfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $__internal_9a496dc125f72d26b0fa6f0e772aaf8f34e186a897a9ec347e85a43653ffeaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a496dc125f72d26b0fa6f0e772aaf8f34e186a897a9ec347e85a43653ffeaf0->enter($__internal_9a496dc125f72d26b0fa6f0e772aaf8f34e186a897a9ec347e85a43653ffeaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d80cbc29cd9ac5998647f251b0497f120da8d573ee9a7a69a65be4d1e6f3bfcc->leave($__internal_d80cbc29cd9ac5998647f251b0497f120da8d573ee9a7a69a65be4d1e6f3bfcc_prof);

        
        $__internal_9a496dc125f72d26b0fa6f0e772aaf8f34e186a897a9ec347e85a43653ffeaf0->leave($__internal_9a496dc125f72d26b0fa6f0e772aaf8f34e186a897a9ec347e85a43653ffeaf0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fbecec01def7f492faa9462045becbeb7ec7384e100e8b3855f8ec55023168f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbecec01def7f492faa9462045becbeb7ec7384e100e8b3855f8ec55023168f->enter($__internal_0fbecec01def7f492faa9462045becbeb7ec7384e100e8b3855f8ec55023168f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73477a4628fe0884c0c30b45a6019f87e098a2c1b9be98083dae6be0f72ea009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73477a4628fe0884c0c30b45a6019f87e098a2c1b9be98083dae6be0f72ea009->enter($__internal_73477a4628fe0884c0c30b45a6019f87e098a2c1b9be98083dae6be0f72ea009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    ";
        // line 8
        if (($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "user", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) {
            // line 9
            echo "
    ";
        }
        // line 11
        echo "    <div class=\"container\">
        <h1>Pedido</h1>
        <table>
            ";
        // line 14
        if ((($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "user", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 15
            echo "                <tbody>
                ";
            // line 16
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 17
                echo "                    <tr>
                        <th>Id</th>
                        <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 22
            echo "                    <tr>
                        <th>Creado:</th>
                        <td>";
            // line 24
            if ($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "createAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>
                    ";
            // line 27
            echo "                        ";
            // line 28
            echo "                        ";
            // line 29
            echo "                    ";
            // line 30
            echo "                    <tr>
                        <th>Importe: </th>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "importe", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Observacion: </th>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "observacion", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Fecha de entrega: </th>
                        <td>";
            // line 40
            if ($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fechaEntregaEstim", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fechaEntregaEstim", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    </tr>
                    <tr>
                        <th>Modelo: </th>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "modelo", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Color: </th>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "color", array()), "html", null, true);
            echo "</td>
                    </tr>
                </tbody>

            ";
        } else {
            // line 53
            echo "                <h3>No tiene permiso para ver este contenido</h3>
            ";
        }
        // line 55
        echo "        </table>
        <ul>
            ";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "                <li>
                    <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
            echo "\">Back to the list</a>
                </li>

                <li>
                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("id" => $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
                </li>
                <li>
                    ";
            // line 66
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                    <input type=\"submit\" value=\"Delete\">
                    ";
            // line 68
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
                </li>
            ";
        }
        // line 71
        echo "        </ul>
    </div>

";
        
        $__internal_73477a4628fe0884c0c30b45a6019f87e098a2c1b9be98083dae6be0f72ea009->leave($__internal_73477a4628fe0884c0c30b45a6019f87e098a2c1b9be98083dae6be0f72ea009_prof);

        
        $__internal_0fbecec01def7f492faa9462045becbeb7ec7384e100e8b3855f8ec55023168f->leave($__internal_0fbecec01def7f492faa9462045becbeb7ec7384e100e8b3855f8ec55023168f_prof);

    }

    public function getTemplateName()
    {
        return "pedido/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 71,  173 => 68,  168 => 66,  162 => 63,  155 => 59,  152 => 58,  150 => 57,  146 => 55,  142 => 53,  134 => 48,  127 => 44,  118 => 40,  111 => 36,  104 => 32,  100 => 30,  98 => 29,  96 => 28,  94 => 27,  87 => 24,  83 => 22,  77 => 19,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  61 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    {% if pedido.user == app.user.username %}

    {% endif %}
    <div class=\"container\">
        <h1>Pedido</h1>
        <table>
            {% if pedido.user == app.user.username or is_granted(\"ROLE_ADMIN\") %}
                <tbody>
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <tr>
                        <th>Id</th>
                        <td>{{ pedido.id }}</td>
                    </tr>
                {% endif %}
                    <tr>
                        <th>Creado:</th>
                        <td>{% if pedido.createAt %}{{ pedido.createAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                    </tr>
                    {#<tr>#}
                        {#<th>Fecha pedido: </th>#}
                        {#<td>{% if pedido.fecha %}{{ pedido.fecha|date('Y-m-d') }}{% endif %}</td>#}
                    {#</tr>#}
                    <tr>
                        <th>Importe: </th>
                        <td>{{ pedido.importe }}</td>
                    </tr>
                    <tr>
                        <th>Observacion: </th>
                        <td>{{ pedido.observacion }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de entrega: </th>
                        <td>{% if pedido.fechaEntregaEstim %}{{ pedido.fechaEntregaEstim|date('Y-m-d') }}{% endif %}</td>
                    </tr>
                    <tr>
                        <th>Modelo: </th>
                        <td>{{ pedido.modelo }}</td>
                    </tr>
                    <tr>
                        <th>Color: </th>
                        <td>{{ pedido.color }}</td>
                    </tr>
                </tbody>

            {% else %}
                <h3>No tiene permiso para ver este contenido</h3>
            {% endif %}
        </table>
        <ul>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <li>
                    <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
                </li>

                <li>
                    <a href=\"{{ path('pedido_edit', { 'id': pedido.id }) }}\">Edit</a>
                </li>
                <li>
                    {{ form_start(delete_form) }}
                    <input type=\"submit\" value=\"Delete\">
                    {{ form_end(delete_form) }}
                </li>
            {% endif %}
        </ul>
    </div>

{% endblock %}
", "pedido/show.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/pedido/show.html.twig");
    }
}
