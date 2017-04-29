<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_6ce3110c1c4372cc46b1d29ef94d7bf3f34c0ad83c686d5ad69c5f0cfadf0fef extends Twig_Template
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
        $__internal_e5bd210d037fe53f935deec64a3da1007e8d9f83ee0c190aa732ff2d059adfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bd210d037fe53f935deec64a3da1007e8d9f83ee0c190aa732ff2d059adfc1->enter($__internal_e5bd210d037fe53f935deec64a3da1007e8d9f83ee0c190aa732ff2d059adfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_096516599873713d3b71b043a2279cea1a2a193516e36fb109c024feadb1e033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096516599873713d3b71b043a2279cea1a2a193516e36fb109c024feadb1e033->enter($__internal_096516599873713d3b71b043a2279cea1a2a193516e36fb109c024feadb1e033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e5bd210d037fe53f935deec64a3da1007e8d9f83ee0c190aa732ff2d059adfc1->leave($__internal_e5bd210d037fe53f935deec64a3da1007e8d9f83ee0c190aa732ff2d059adfc1_prof);

        
        $__internal_096516599873713d3b71b043a2279cea1a2a193516e36fb109c024feadb1e033->leave($__internal_096516599873713d3b71b043a2279cea1a2a193516e36fb109c024feadb1e033_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
