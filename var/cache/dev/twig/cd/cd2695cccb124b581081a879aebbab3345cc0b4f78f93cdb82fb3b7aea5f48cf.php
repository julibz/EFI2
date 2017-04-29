<?php

/* modelo/show.html.twig */
class __TwigTemplate_7eb817ef94e83f8e48f29a9346c85ae04b5259035bdc04418e44dd47b929757b extends Twig_Template
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
        $__internal_a68c23502bbb81abf086b87d6942fbe7ce78937a3b0c2480b0c4dff56b1973e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68c23502bbb81abf086b87d6942fbe7ce78937a3b0c2480b0c4dff56b1973e4->enter($__internal_a68c23502bbb81abf086b87d6942fbe7ce78937a3b0c2480b0c4dff56b1973e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/show.html.twig"));

        $__internal_886ec6e2c7194374e221f4ebf5f6bab7ffc54d23249945dca8d4abebbfdad47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886ec6e2c7194374e221f4ebf5f6bab7ffc54d23249945dca8d4abebbfdad47f->enter($__internal_886ec6e2c7194374e221f4ebf5f6bab7ffc54d23249945dca8d4abebbfdad47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a68c23502bbb81abf086b87d6942fbe7ce78937a3b0c2480b0c4dff56b1973e4->leave($__internal_a68c23502bbb81abf086b87d6942fbe7ce78937a3b0c2480b0c4dff56b1973e4_prof);

        
        $__internal_886ec6e2c7194374e221f4ebf5f6bab7ffc54d23249945dca8d4abebbfdad47f->leave($__internal_886ec6e2c7194374e221f4ebf5f6bab7ffc54d23249945dca8d4abebbfdad47f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1f7f80283d62578ff31d7c585aba40ba763cb8838c4a2a88abcb34c3e418fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f7f80283d62578ff31d7c585aba40ba763cb8838c4a2a88abcb34c3e418fc1->enter($__internal_b1f7f80283d62578ff31d7c585aba40ba763cb8838c4a2a88abcb34c3e418fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ecb025deb45bb2ce91d3a6bcce1575a3a15bee51abf484cb7b082193b1798a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb025deb45bb2ce91d3a6bcce1575a3a15bee51abf484cb7b082193b1798a3e->enter($__internal_ecb025deb45bb2ce91d3a6bcce1575a3a15bee51abf484cb7b082193b1798a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ecb025deb45bb2ce91d3a6bcce1575a3a15bee51abf484cb7b082193b1798a3e->leave($__internal_ecb025deb45bb2ce91d3a6bcce1575a3a15bee51abf484cb7b082193b1798a3e_prof);

        
        $__internal_b1f7f80283d62578ff31d7c585aba40ba763cb8838c4a2a88abcb34c3e418fc1->leave($__internal_b1f7f80283d62578ff31d7c585aba40ba763cb8838c4a2a88abcb34c3e418fc1_prof);

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
