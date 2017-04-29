<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_23c6db17211db0ded06bdd24517eaa70d75dfbe421d9621f5a8d27c2e5bff970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b0942939e582c5a9f4fe2b3d7e301be76a767cc9c05646f668bb8bec7ab84aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0942939e582c5a9f4fe2b3d7e301be76a767cc9c05646f668bb8bec7ab84aa->enter($__internal_5b0942939e582c5a9f4fe2b3d7e301be76a767cc9c05646f668bb8bec7ab84aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_e9ca425531dbf0a691078dcf3661b5507c91a8c5a7dd53df4b4828b084b7ac12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ca425531dbf0a691078dcf3661b5507c91a8c5a7dd53df4b4828b084b7ac12->enter($__internal_e9ca425531dbf0a691078dcf3661b5507c91a8c5a7dd53df4b4828b084b7ac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"form-group\">
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_5b0942939e582c5a9f4fe2b3d7e301be76a767cc9c05646f668bb8bec7ab84aa->leave($__internal_5b0942939e582c5a9f4fe2b3d7e301be76a767cc9c05646f668bb8bec7ab84aa_prof);

        
        $__internal_e9ca425531dbf0a691078dcf3661b5507c91a8c5a7dd53df4b4828b084b7ac12->leave($__internal_e9ca425531dbf0a691078dcf3661b5507c91a8c5a7dd53df4b4828b084b7ac12_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"form-group\">
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
