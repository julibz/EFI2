<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_c86a775c1f9db1331afc3ef140cc43593dbe5eb42b052debd536d3fa732c745f extends Twig_Template
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
        $__internal_2dc0838f2e1f9b865b8d0d536da39670081d8bbdaea5d8df896d0c0e425e6319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc0838f2e1f9b865b8d0d536da39670081d8bbdaea5d8df896d0c0e425e6319->enter($__internal_2dc0838f2e1f9b865b8d0d536da39670081d8bbdaea5d8df896d0c0e425e6319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_77777da5ba6cc8a3e7b5943b128c2cb8f7955d453bca21f693be2d3bd8f4ad23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77777da5ba6cc8a3e7b5943b128c2cb8f7955d453bca21f693be2d3bd8f4ad23->enter($__internal_77777da5ba6cc8a3e7b5943b128c2cb8f7955d453bca21f693be2d3bd8f4ad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        
        $__internal_2dc0838f2e1f9b865b8d0d536da39670081d8bbdaea5d8df896d0c0e425e6319->leave($__internal_2dc0838f2e1f9b865b8d0d536da39670081d8bbdaea5d8df896d0c0e425e6319_prof);

        
        $__internal_77777da5ba6cc8a3e7b5943b128c2cb8f7955d453bca21f693be2d3bd8f4ad23->leave($__internal_77777da5ba6cc8a3e7b5943b128c2cb8f7955d453bca21f693be2d3bd8f4ad23_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f84b352b2ab38ed3565fd460ab567a8a3562fc7798b65f6cd0fa02b4d9291234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84b352b2ab38ed3565fd460ab567a8a3562fc7798b65f6cd0fa02b4d9291234->enter($__internal_f84b352b2ab38ed3565fd460ab567a8a3562fc7798b65f6cd0fa02b4d9291234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_10bc45cc9e3d739e8119e897bcff8743b3746b93d5a4dcbf6e8d077949cdb5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bc45cc9e3d739e8119e897bcff8743b3746b93d5a4dcbf6e8d077949cdb5f2->enter($__internal_10bc45cc9e3d739e8119e897bcff8743b3746b93d5a4dcbf6e8d077949cdb5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_10bc45cc9e3d739e8119e897bcff8743b3746b93d5a4dcbf6e8d077949cdb5f2->leave($__internal_10bc45cc9e3d739e8119e897bcff8743b3746b93d5a4dcbf6e8d077949cdb5f2_prof);

        
        $__internal_f84b352b2ab38ed3565fd460ab567a8a3562fc7798b65f6cd0fa02b4d9291234->leave($__internal_f84b352b2ab38ed3565fd460ab567a8a3562fc7798b65f6cd0fa02b4d9291234_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
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

", "@FOSUser/Security/login_content.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
