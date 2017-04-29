<?php

/* modelo/show.html.twig */
class __TwigTemplate_46bfd1d1850e7f73fd4f0a5c488a8d35a7e266cd828cde5995096cf0c22cf112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modelo/show.html.twig", 1);
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
        $__internal_384ff994f73a2f91b2300b7874dc4e9e484cfe479f0c41f23599f7db3758502d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384ff994f73a2f91b2300b7874dc4e9e484cfe479f0c41f23599f7db3758502d->enter($__internal_384ff994f73a2f91b2300b7874dc4e9e484cfe479f0c41f23599f7db3758502d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/show.html.twig"));

        $__internal_07ddae6a5c9210dab458ef30d3ba676e7040a2d7783dd7fe98b51c456a420ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ddae6a5c9210dab458ef30d3ba676e7040a2d7783dd7fe98b51c456a420ecf->enter($__internal_07ddae6a5c9210dab458ef30d3ba676e7040a2d7783dd7fe98b51c456a420ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384ff994f73a2f91b2300b7874dc4e9e484cfe479f0c41f23599f7db3758502d->leave($__internal_384ff994f73a2f91b2300b7874dc4e9e484cfe479f0c41f23599f7db3758502d_prof);

        
        $__internal_07ddae6a5c9210dab458ef30d3ba676e7040a2d7783dd7fe98b51c456a420ecf->leave($__internal_07ddae6a5c9210dab458ef30d3ba676e7040a2d7783dd7fe98b51c456a420ecf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fbb9a0a95aeabd832e57a6726265c1920714385482bf88519ddda45d2a17489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbb9a0a95aeabd832e57a6726265c1920714385482bf88519ddda45d2a17489->enter($__internal_0fbb9a0a95aeabd832e57a6726265c1920714385482bf88519ddda45d2a17489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89eff1d30d09d95368c2c21064a359b4db6ffb78d6a815025142262d1be97199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eff1d30d09d95368c2c21064a359b4db6ffb78d6a815025142262d1be97199->enter($__internal_89eff1d30d09d95368c2c21064a359b4db6ffb78d6a815025142262d1be97199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
    <h1>Modelo</h1>

    <table>
        <tbody>
            ";
        // line 13
        echo "                ";
        // line 14
        echo "                ";
        // line 15
        echo "            ";
        // line 16
        echo "            <tr>
                <th>Nombre:</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modelo"]) ? $context["modelo"] : $this->getContext($context, "modelo")), "nombreModelo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion:</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modelo"]) ? $context["modelo"] : $this->getContext($context, "modelo")), "descripcionModelo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>

                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("asset/img/" . $this->getAttribute((isset($context["modelo"]) ? $context["modelo"] : $this->getContext($context, "modelo")), "imagenModelo", array()))), "html", null, true);
        echo "\">
                </td>
            </tr>
            <tr>
                <th>Precio: </th>
                <td>\$ ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modelo"]) ? $context["modelo"] : $this->getContext($context, "modelo")), "precio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categoria:</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modelo"]) ? $context["modelo"] : $this->getContext($context, "modelo")), "categoriaModelo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 45
            echo "        <li>
            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_edit", array("id" => $this->getAttribute((isset($context["modelo"]) ? $context["modelo"] : $this->getContext($context, "modelo")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
        </li>
        <li>
            ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
            ";
            // line 51
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
        </li>
        ";
        }
        // line 54
        echo "    </ul>
";
        
        $__internal_89eff1d30d09d95368c2c21064a359b4db6ffb78d6a815025142262d1be97199->leave($__internal_89eff1d30d09d95368c2c21064a359b4db6ffb78d6a815025142262d1be97199_prof);

        
        $__internal_0fbb9a0a95aeabd832e57a6726265c1920714385482bf88519ddda45d2a17489->leave($__internal_0fbb9a0a95aeabd832e57a6726265c1920714385482bf88519ddda45d2a17489_prof);

    }

    public function getTemplateName()
    {
        return "modelo/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  129 => 51,  124 => 49,  118 => 46,  115 => 45,  113 => 44,  108 => 42,  98 => 35,  91 => 31,  83 => 26,  76 => 22,  69 => 18,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Modelo</h1>

    <table>
        <tbody>
            {#<tr>#}
                {#<th>Id</th>#}
                {#<td>{{ modelo.id }}</td>#}
            {#</tr>#}
            <tr>
                <th>Nombre:</th>
                <td>{{ modelo.nombreModelo }}</td>
            </tr>
            <tr>
                <th>Descripcion:</th>
                <td>{{ modelo.descripcionModelo }}</td>
            </tr>
            <tr>

                <img src=\"{{asset('asset/img/'~ modelo.imagenModelo) }}\">
                </td>
            </tr>
            <tr>
                <th>Precio: </th>
                <td>\$ {{ modelo.precio }}</td>
            </tr>
            <tr>
                <th>Categoria:</th>
                <td>{{ modelo.categoriaModelo }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('modelo_index') }}\">Back to the list</a>
        </li>
        {% if is_granted(\"ROLE_ADMIN\") %}
        <li>
            <a href=\"{{ path('modelo_edit', { 'id': modelo.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
        {% endif %}
    </ul>
{% endblock %}
", "modelo/show.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/modelo/show.html.twig");
    }
}
