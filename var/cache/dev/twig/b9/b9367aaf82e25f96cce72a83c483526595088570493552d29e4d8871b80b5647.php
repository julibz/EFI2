<?php

/* pedido/show.html.twig */
class __TwigTemplate_f223e8f297b7c91d7ed7166fa9c5b46ddb8a483b8b8153e44cbd5dfe3674aee1 extends Twig_Template
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
        $__internal_647a054158dd90bafad706b421f3d9cc8c5dc104d9e9899d1268eab1e23bbb20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647a054158dd90bafad706b421f3d9cc8c5dc104d9e9899d1268eab1e23bbb20->enter($__internal_647a054158dd90bafad706b421f3d9cc8c5dc104d9e9899d1268eab1e23bbb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $__internal_fe06bf6a2c52c0778d8d1ada9f3833140f7792a61468babed4777661697fe565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe06bf6a2c52c0778d8d1ada9f3833140f7792a61468babed4777661697fe565->enter($__internal_fe06bf6a2c52c0778d8d1ada9f3833140f7792a61468babed4777661697fe565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_647a054158dd90bafad706b421f3d9cc8c5dc104d9e9899d1268eab1e23bbb20->leave($__internal_647a054158dd90bafad706b421f3d9cc8c5dc104d9e9899d1268eab1e23bbb20_prof);

        
        $__internal_fe06bf6a2c52c0778d8d1ada9f3833140f7792a61468babed4777661697fe565->leave($__internal_fe06bf6a2c52c0778d8d1ada9f3833140f7792a61468babed4777661697fe565_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2391ba98816590c77cda46713f13b3e49fa27cd05d0cdf91ecdefe4e16edea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2391ba98816590c77cda46713f13b3e49fa27cd05d0cdf91ecdefe4e16edea1->enter($__internal_d2391ba98816590c77cda46713f13b3e49fa27cd05d0cdf91ecdefe4e16edea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4c79dafab59247305871b1513c3711052fc299865ce279b3fb45a957cf5546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c79dafab59247305871b1513c3711052fc299865ce279b3fb45a957cf5546e->enter($__internal_f4c79dafab59247305871b1513c3711052fc299865ce279b3fb45a957cf5546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <th>Nombre: </th>
                        <td name=\"nombre\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "nombreyapellido", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Documento: </th>
                        <td name=\"documento\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "documento", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>EMail: </th>
                        <td name=\"mail\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "mail", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td name=\"creado\" >";
            // line 36
            if ($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "createAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>
                    ";
            // line 39
            echo "                        ";
            // line 40
            echo "                        ";
            // line 41
            echo "                    ";
            // line 42
            echo "                    <tr>
                        <th>Importe: </th>
                        <td name=\"importe\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "importe", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Observacion: </th>
                        <td name=\"observacion\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "observacion", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Fecha de entrega: </th>
                        <td name=\"fechadeentrega\">";
            // line 52
            if ($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fechaEntregaEstim", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fechaEntregaEstim", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    </tr>
                    <tr>
                        <th>Modelo: </th>
                        <td name=\"modelo\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "modelo", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Color: </th>
                        <td name=\"color\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "color", array()), "html", null, true);
            echo "</td>
                    </tr>
                </tbody>

            ";
        } else {
            // line 65
            echo "                <h3>No tiene permiso para ver este contenido</h3>
            ";
        }
        // line 67
        echo "        </table>
        <ul>
            ";
        // line 69
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 70
            echo "                <li>
                    <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
            echo "\">Back to the list</a>
                </li>

                <li>
                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("id" => $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
                </li>
                <li>
                    ";
            // line 78
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                    <input type=\"submit\" value=\"Delete\">
                    ";
            // line 80
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
                </li>
            ";
        }
        // line 83
        echo "        </ul>
    </div>

";
        
        $__internal_f4c79dafab59247305871b1513c3711052fc299865ce279b3fb45a957cf5546e->leave($__internal_f4c79dafab59247305871b1513c3711052fc299865ce279b3fb45a957cf5546e_prof);

        
        $__internal_d2391ba98816590c77cda46713f13b3e49fa27cd05d0cdf91ecdefe4e16edea1->leave($__internal_d2391ba98816590c77cda46713f13b3e49fa27cd05d0cdf91ecdefe4e16edea1_prof);

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
        return array (  200 => 83,  194 => 80,  189 => 78,  183 => 75,  176 => 71,  173 => 70,  171 => 69,  167 => 67,  163 => 65,  155 => 60,  148 => 56,  139 => 52,  132 => 48,  125 => 44,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  108 => 36,  101 => 32,  94 => 28,  87 => 24,  83 => 22,  77 => 19,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  61 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
                        <th>Nombre: </th>
                        <td name=\"nombre\">{{ pedido.nombreyapellido }}</td>
                    </tr>
                    <tr>
                        <th>Documento: </th>
                        <td name=\"documento\">{{ pedido.documento }}</td>
                    </tr>
                    <tr>
                        <th>EMail: </th>
                        <td name=\"mail\">{{ pedido.mail }}</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td name=\"creado\" >{% if pedido.createAt %}{{ pedido.createAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                    </tr>
                    {#<tr>#}
                        {#<th>Fecha pedido: </th>#}
                        {#<td>{% if pedido.fecha %}{{ pedido.fecha|date('Y-m-d') }}{% endif %}</td>#}
                    {#</tr>#}
                    <tr>
                        <th>Importe: </th>
                        <td name=\"importe\">{{ pedido.importe }}</td>
                    </tr>
                    <tr>
                        <th>Observacion: </th>
                        <td name=\"observacion\">{{ pedido.observacion }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de entrega: </th>
                        <td name=\"fechadeentrega\">{% if pedido.fechaEntregaEstim %}{{ pedido.fechaEntregaEstim|date('Y-m-d') }}{% endif %}</td>
                    </tr>
                    <tr>
                        <th>Modelo: </th>
                        <td name=\"modelo\">{{ pedido.modelo }}</td>
                    </tr>
                    <tr>
                        <th>Color: </th>
                        <td name=\"color\">{{ pedido.color }}</td>
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
