<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_ff910d9a34d25143cbd7d104c26dea46b181148c4fd4b44db6813ef8b0fc7e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_093ac47f55e6440d1e05658402d52694475383da3dd2a68e2844e3f460a38059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093ac47f55e6440d1e05658402d52694475383da3dd2a68e2844e3f460a38059->enter($__internal_093ac47f55e6440d1e05658402d52694475383da3dd2a68e2844e3f460a38059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_14156e3116bf12ff534e4a286c65f9e56ef11733aaa80014e5400656a43bd323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14156e3116bf12ff534e4a286c65f9e56ef11733aaa80014e5400656a43bd323->enter($__internal_14156e3116bf12ff534e4a286c65f9e56ef11733aaa80014e5400656a43bd323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<div class=\"login\">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>




    <h1>Login</h1>

    <h5><a href=\"/register\">Registrarse</a></h5>
    <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

        ";
        // line 29
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 30
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 32
        echo "
        <label class=\"perfil\" for=\"username\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\"  value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Username\" required=\"required\" />
        <label class=\"perfil\" for=\"password\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\" required=\"required\" />
        <div class=\"checkbox\">
            <label class=\"perfil\"  for=\"remember_me\"> <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
        <button type=\"submit\" id=\"_submit\" name=\"_submit\"  value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-large\">Entrar</button>


        <ul>
            <li>
                <a class=\"perfil heading bold style-message\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Olvidaste tu contraseña? haz click aqui</a>
            </li>
        </ul>
    </form>
</div>

";
        
        $__internal_093ac47f55e6440d1e05658402d52694475383da3dd2a68e2844e3f460a38059->leave($__internal_093ac47f55e6440d1e05658402d52694475383da3dd2a68e2844e3f460a38059_prof);

        
        $__internal_14156e3116bf12ff534e4a286c65f9e56ef11733aaa80014e5400656a43bd323->leave($__internal_14156e3116bf12ff534e4a286c65f9e56ef11733aaa80014e5400656a43bd323_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bc25bb760e5490bf29b36926489be39da5471da466fb54b456846e6b860fa2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc25bb760e5490bf29b36926489be39da5471da466fb54b456846e6b860fa2e->enter($__internal_6bc25bb760e5490bf29b36926489be39da5471da466fb54b456846e6b860fa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_05a33d72f2f79ffcff8c941d58452ac1fa65cf37fe63e411f6051cd08e9ae8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a33d72f2f79ffcff8c941d58452ac1fa65cf37fe63e411f6051cd08e9ae8d3->enter($__internal_05a33d72f2f79ffcff8c941d58452ac1fa65cf37fe63e411f6051cd08e9ae8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_05a33d72f2f79ffcff8c941d58452ac1fa65cf37fe63e411f6051cd08e9ae8d3->leave($__internal_05a33d72f2f79ffcff8c941d58452ac1fa65cf37fe63e411f6051cd08e9ae8d3_prof);

        
        $__internal_6bc25bb760e5490bf29b36926489be39da5471da466fb54b456846e6b860fa2e->leave($__internal_6bc25bb760e5490bf29b36926489be39da5471da466fb54b456846e6b860fa2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 4,  119 => 3,  102 => 45,  94 => 40,  89 => 38,  83 => 35,  79 => 34,  75 => 33,  72 => 32,  66 => 30,  64 => 29,  59 => 27,  39 => 9,  33 => 7,  31 => 6,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{asset('asset/css/login.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"login\">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>




    <h1>Login</h1>

    <h5><a href=\"/register\">Registrarse</a></h5>
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}

        <label class=\"perfil\" for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\"  value=\"{{ last_username }}\" placeholder=\"Username\" required=\"required\" />
        <label class=\"perfil\" for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\" required=\"required\" />
        <div class=\"checkbox\">
            <label class=\"perfil\"  for=\"remember_me\"> <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />{{ 'security.login.remember_me'|trans }}</label>
        </div>
        <button type=\"submit\" id=\"_submit\" name=\"_submit\"  value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-primary btn-block btn-large\">Entrar</button>


        <ul>
            <li>
                <a class=\"perfil heading bold style-message\" href=\"{{ path('fos_user_resetting_request') }}\">Olvidaste tu contraseña? haz click aqui</a>
            </li>
        </ul>
    </form>
</div>

", "FOSUserBundle:Security:login_content.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
