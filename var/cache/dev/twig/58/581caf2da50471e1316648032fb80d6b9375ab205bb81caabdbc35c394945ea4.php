<?php

/* default/header.html.twig */
class __TwigTemplate_64de4f2dfefead334aa3fef15e3f2d0341402a575ab09e7c1cc0cb7b9d7526d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04278a43dc212e60b1bb9a8552e7f5c5430752e192b6473a26a2eec1d46f470d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04278a43dc212e60b1bb9a8552e7f5c5430752e192b6473a26a2eec1d46f470d->enter($__internal_04278a43dc212e60b1bb9a8552e7f5c5430752e192b6473a26a2eec1d46f470d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_f3ac331f0e0d82fbf4ce5f77586b275e384bb142a7e00da1a6baf139d68fc917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ac331f0e0d82fbf4ce5f77586b275e384bb142a7e00da1a6baf139d68fc917->enter($__internal_f3ac331f0e0d82fbf4ce5f77586b275e384bb142a7e00da1a6baf139d68fc917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_04278a43dc212e60b1bb9a8552e7f5c5430752e192b6473a26a2eec1d46f470d->leave($__internal_04278a43dc212e60b1bb9a8552e7f5c5430752e192b6473a26a2eec1d46f470d_prof);

        
        $__internal_f3ac331f0e0d82fbf4ce5f77586b275e384bb142a7e00da1a6baf139d68fc917->leave($__internal_f3ac331f0e0d82fbf4ce5f77586b275e384bb142a7e00da1a6baf139d68fc917_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_ca208df6ea698d97a48ff7103d8dfddde0d15d6ee5cd4de592650ef0fc52ed2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca208df6ea698d97a48ff7103d8dfddde0d15d6ee5cd4de592650ef0fc52ed2d->enter($__internal_ca208df6ea698d97a48ff7103d8dfddde0d15d6ee5cd4de592650ef0fc52ed2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3636803ce846c7b1f1c9cd532107c6fcf8a5fcf5df93849251c563c87737f533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3636803ce846c7b1f1c9cd532107c6fcf8a5fcf5df93849251c563c87737f533->enter($__internal_3636803ce846c7b1f1c9cd532107c6fcf8a5fcf5df93849251c563c87737f533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "<nav id=\"mainNav\" class=\"navbar navbar-default navbar-custom navbar-fixed-top fondito-negro\">
    <div class=\"container\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">CHEVROLET</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>

                <li>
                    <a class=\"page-scroll\" href=\"/\">Inicio</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"/modelo\">Modelos</a>
                </li>

                ";
        // line 23
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "                <li>
                    <a class=\"page-scroll\" href=\"/pedido/admin\">Ver pedidos</a>
                </li>
                ";
        }
        // line 28
        echo "                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "                    <li>
                        <a class=\"page-scroll\" href=\"/color/admin\">Colores</a>
                    </li>
                ";
        }
        // line 33
        echo "                ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 34
            echo "                <li>
                    <a class=\"page-scroll\" href=\"/pedido/new\">Pedidos</a>
                </li>
                ";
        }
        // line 38
        echo "                ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY") &&  !($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")))) {
            // line 39
            echo "                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Contacto</a>
                </li>
                ";
        }
        // line 43
        echo "                ";
        // line 44
        echo "                ";
        // line 45
        echo "                    ";
        // line 46
        echo "                ";
        // line 47
        echo "                ";
        // line 48
        echo "
                ";
        // line 50
        echo "                ";
        // line 51
        echo "                    ";
        // line 52
        echo "                ";
        // line 53
        echo "                ";
        // line 54
        echo "                <li>
                    ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 56
            echo "                        <a class=\"perfil\" href=\"/profile\">
                            ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                        </a>

                    ";
        } else {
            // line 61
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 63
        echo "                </li>
                ";
        // line 64
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 65
            echo "                    <li>
                        <a class=\"page-scroll\" href=\"/logout\">Salir</a>
                    </li>
                ";
        }
        // line 69
        echo "            </ul>
        </div>
    </div>

</nav>
";
        
        $__internal_3636803ce846c7b1f1c9cd532107c6fcf8a5fcf5df93849251c563c87737f533->leave($__internal_3636803ce846c7b1f1c9cd532107c6fcf8a5fcf5df93849251c563c87737f533_prof);

        
        $__internal_ca208df6ea698d97a48ff7103d8dfddde0d15d6ee5cd4de592650ef0fc52ed2d->leave($__internal_ca208df6ea698d97a48ff7103d8dfddde0d15d6ee5cd4de592650ef0fc52ed2d_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 69,  151 => 65,  149 => 64,  146 => 63,  138 => 61,  131 => 57,  128 => 56,  126 => 55,  123 => 54,  121 => 53,  119 => 52,  117 => 51,  115 => 50,  112 => 48,  110 => 47,  108 => 46,  106 => 45,  104 => 44,  102 => 43,  96 => 39,  93 => 38,  87 => 34,  84 => 33,  78 => 29,  75 => 28,  69 => 24,  67 => 23,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
<nav id=\"mainNav\" class=\"navbar navbar-default navbar-custom navbar-fixed-top fondito-negro\">
    <div class=\"container\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">CHEVROLET</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>

                <li>
                    <a class=\"page-scroll\" href=\"/\">Inicio</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"/modelo\">Modelos</a>
                </li>

                {% if is_granted(\"ROLE_ADMIN\") %}
                <li>
                    <a class=\"page-scroll\" href=\"/pedido/admin\">Ver pedidos</a>
                </li>
                {% endif %}
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <li>
                        <a class=\"page-scroll\" href=\"/color/admin\">Colores</a>
                    </li>
                {% endif %}
                {% if is_granted(\"ROLE_USER\") and not is_granted(\"ROLE_ADMIN\") %}
                <li>
                    <a class=\"page-scroll\" href=\"/pedido/new\">Pedidos</a>
                </li>
                {% endif %}
                {% if is_granted(\"IS_AUTHENTICATED_ANONYMOUSLY\") and not (is_granted(\"ROLE_USER\") or is_granted(\"ROLE_ADMIN\")) %}
                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Contacto</a>
                </li>
                {% endif %}
                {#{% if is_granted(\"IS_AUTHENTICATED_ANONYMOUSLY\") and not (is_granted(\"ROLE_USER\") or is_granted(\"ROLE_ADMIN\")) %}#}
                {#<li>#}
                    {#<a class=\"page-scroll\" href=\"/login\">Ingresar</a>#}
                {#</li>#}
                {#{% endif %}#}

                {#{% if is_granted(\"IS_AUTHENTICATED_ANONYMOUSLY\") and not (is_granted(\"ROLE_USER\") or is_granted(\"ROLE_ADMIN\")) %}#}
                {#<li>#}
                    {#<a class=\"page-scroll\" href=\"/register\">Registrarse</a>#}
                {#</li>#}
                {#{% endif %}#}
                <li>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <a class=\"perfil\" href=\"/profile\">
                            {{ app.user.username }}
                        </a>

                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                    {% endif %}
                </li>
                {% if is_granted(\"ROLE_USER\") or is_granted(\"ROLE_ADMIN\")%}
                    <li>
                        <a class=\"page-scroll\" href=\"/logout\">Salir</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>

</nav>
{% endblock %}", "default/header.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/default/header.html.twig");
    }
}
