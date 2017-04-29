<?php

/* default/header.html.twig */
class __TwigTemplate_a3c258d9d66a14171d3a1180c92050eb4dabe223834dfd596e6e2a2bca40e3b7 extends Twig_Template
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
        $__internal_86a0c8a8fdb8d81c102b23ae9a597965c0c768556e3b4a19053a11c6b2b32649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a0c8a8fdb8d81c102b23ae9a597965c0c768556e3b4a19053a11c6b2b32649->enter($__internal_86a0c8a8fdb8d81c102b23ae9a597965c0c768556e3b4a19053a11c6b2b32649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_91685267750d44c1499d351fdc87b683308891d98db9281449b278df43eb7852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91685267750d44c1499d351fdc87b683308891d98db9281449b278df43eb7852->enter($__internal_91685267750d44c1499d351fdc87b683308891d98db9281449b278df43eb7852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_86a0c8a8fdb8d81c102b23ae9a597965c0c768556e3b4a19053a11c6b2b32649->leave($__internal_86a0c8a8fdb8d81c102b23ae9a597965c0c768556e3b4a19053a11c6b2b32649_prof);

        
        $__internal_91685267750d44c1499d351fdc87b683308891d98db9281449b278df43eb7852->leave($__internal_91685267750d44c1499d351fdc87b683308891d98db9281449b278df43eb7852_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_b51e36cddee9eca22dbfb2faf386455f3491095c813e4e715306007ae190c85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51e36cddee9eca22dbfb2faf386455f3491095c813e4e715306007ae190c85f->enter($__internal_b51e36cddee9eca22dbfb2faf386455f3491095c813e4e715306007ae190c85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b409d96e0da00b992af8bcbcf0f3cfc6622cb4d60ad83fefdf04cbadcd37d714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b409d96e0da00b992af8bcbcf0f3cfc6622cb4d60ad83fefdf04cbadcd37d714->enter($__internal_b409d96e0da00b992af8bcbcf0f3cfc6622cb4d60ad83fefdf04cbadcd37d714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b409d96e0da00b992af8bcbcf0f3cfc6622cb4d60ad83fefdf04cbadcd37d714->leave($__internal_b409d96e0da00b992af8bcbcf0f3cfc6622cb4d60ad83fefdf04cbadcd37d714_prof);

        
        $__internal_b51e36cddee9eca22dbfb2faf386455f3491095c813e4e715306007ae190c85f->leave($__internal_b51e36cddee9eca22dbfb2faf386455f3491095c813e4e715306007ae190c85f_prof);

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
