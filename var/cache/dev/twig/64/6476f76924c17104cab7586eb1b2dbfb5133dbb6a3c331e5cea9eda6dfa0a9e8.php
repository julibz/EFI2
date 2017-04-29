<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_b64f77bb58103673939dd7bc4faa265a68158feb9550523085a7ab4a9e223fa0 extends Twig_Template
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
        $__internal_1c7fcf899ce161a2dd5ab7326557ce139484ccc52b018167463c32a306e6bdd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7fcf899ce161a2dd5ab7326557ce139484ccc52b018167463c32a306e6bdd3->enter($__internal_1c7fcf899ce161a2dd5ab7326557ce139484ccc52b018167463c32a306e6bdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_f79fdb47d897eb3bffce8cf00d9a50a26cbaf03b030fca1ae12cf9fed06fd570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79fdb47d897eb3bffce8cf00d9a50a26cbaf03b030fca1ae12cf9fed06fd570->enter($__internal_f79fdb47d897eb3bffce8cf00d9a50a26cbaf03b030fca1ae12cf9fed06fd570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_1c7fcf899ce161a2dd5ab7326557ce139484ccc52b018167463c32a306e6bdd3->leave($__internal_1c7fcf899ce161a2dd5ab7326557ce139484ccc52b018167463c32a306e6bdd3_prof);

        
        $__internal_f79fdb47d897eb3bffce8cf00d9a50a26cbaf03b030fca1ae12cf9fed06fd570->leave($__internal_f79fdb47d897eb3bffce8cf00d9a50a26cbaf03b030fca1ae12cf9fed06fd570_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
