<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_d189150fa551b3ff77704a9c6e9f47d88e9d713b33e9a8a28d6eb751dd4bb781 extends Twig_Template
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
        $__internal_c3a6dbb8b211ee54938a13fae9aa479be83bab4701c832d074bcfc764747a466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a6dbb8b211ee54938a13fae9aa479be83bab4701c832d074bcfc764747a466->enter($__internal_c3a6dbb8b211ee54938a13fae9aa479be83bab4701c832d074bcfc764747a466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_b76f090b94f33c6d9be0d6d9955967d056ad32ebe5b2827fa697d0275f410483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76f090b94f33c6d9be0d6d9955967d056ad32ebe5b2827fa697d0275f410483->enter($__internal_b76f090b94f33c6d9be0d6d9955967d056ad32ebe5b2827fa697d0275f410483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "<br>
<br>
<br>
<br>
<div class=\"fos_user_user_show\">
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c3a6dbb8b211ee54938a13fae9aa479be83bab4701c832d074bcfc764747a466->leave($__internal_c3a6dbb8b211ee54938a13fae9aa479be83bab4701c832d074bcfc764747a466_prof);

        
        $__internal_b76f090b94f33c6d9be0d6d9955967d056ad32ebe5b2827fa697d0275f410483->leave($__internal_b76f090b94f33c6d9be0d6d9955967d056ad32ebe5b2827fa697d0275f410483_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  32 => 7,  25 => 2,);
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
<br>
<br>
<br>
<br>
<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
