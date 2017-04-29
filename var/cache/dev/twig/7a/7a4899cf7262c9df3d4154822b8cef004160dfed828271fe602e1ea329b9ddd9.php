<?php

/* color/show.html.twig */
class __TwigTemplate_e62ae302cea8f3235349803b1ee2cba152853c421d478f1eaae18b00f37e0fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "color/show.html.twig", 1);
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
        $__internal_a7c669cc08cd9aff980a6635a228d02e7abd7d6063c5e4f7e5cffaeb46967d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c669cc08cd9aff980a6635a228d02e7abd7d6063c5e4f7e5cffaeb46967d24->enter($__internal_a7c669cc08cd9aff980a6635a228d02e7abd7d6063c5e4f7e5cffaeb46967d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/show.html.twig"));

        $__internal_3edbfdff4bfa5cf67ee26ecaf3b982bdb7bb3c64a960d8716488f0ee27ae6034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edbfdff4bfa5cf67ee26ecaf3b982bdb7bb3c64a960d8716488f0ee27ae6034->enter($__internal_3edbfdff4bfa5cf67ee26ecaf3b982bdb7bb3c64a960d8716488f0ee27ae6034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "color/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7c669cc08cd9aff980a6635a228d02e7abd7d6063c5e4f7e5cffaeb46967d24->leave($__internal_a7c669cc08cd9aff980a6635a228d02e7abd7d6063c5e4f7e5cffaeb46967d24_prof);

        
        $__internal_3edbfdff4bfa5cf67ee26ecaf3b982bdb7bb3c64a960d8716488f0ee27ae6034->leave($__internal_3edbfdff4bfa5cf67ee26ecaf3b982bdb7bb3c64a960d8716488f0ee27ae6034_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5c11da9c0a07867d95804cccdb87448af5f03f0292e6343ca5202ab98de8cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c11da9c0a07867d95804cccdb87448af5f03f0292e6343ca5202ab98de8cb7->enter($__internal_b5c11da9c0a07867d95804cccdb87448af5f03f0292e6343ca5202ab98de8cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07ae6f6077b206455305884adb5de213cc506f320d0672035382bb1a5bd0c4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ae6f6077b206455305884adb5de213cc506f320d0672035382bb1a5bd0c4d1->enter($__internal_07ae6f6077b206455305884adb5de213cc506f320d0672035382bb1a5bd0c4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Color</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombrecolor</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "nombreColor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponibilidadcolor</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "disponibilidadColor", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("color_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("color_edit", array("id" => $this->getAttribute((isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_07ae6f6077b206455305884adb5de213cc506f320d0672035382bb1a5bd0c4d1->leave($__internal_07ae6f6077b206455305884adb5de213cc506f320d0672035382bb1a5bd0c4d1_prof);

        
        $__internal_b5c11da9c0a07867d95804cccdb87448af5f03f0292e6343ca5202ab98de8cb7->leave($__internal_b5c11da9c0a07867d95804cccdb87448af5f03f0292e6343ca5202ab98de8cb7_prof);

    }

    public function getTemplateName()
    {
        return "color/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  97 => 31,  91 => 28,  85 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Color</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ color.id }}</td>
            </tr>
            <tr>
                <th>Nombrecolor</th>
                <td>{{ color.nombreColor }}</td>
            </tr>
            <tr>
                <th>Disponibilidadcolor</th>
                <td>{% if color.disponibilidadColor %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('color_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('color_edit', { 'id': color.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "color/show.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/color/show.html.twig");
    }
}
