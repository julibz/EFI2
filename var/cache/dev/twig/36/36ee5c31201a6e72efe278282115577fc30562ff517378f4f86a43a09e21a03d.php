<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_975a8683bb3fbfba735ccc64e1a3f81a68d92f308b1348eb86dae817322543d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f336c1d3b9dbf0715a2a86f021e5327ad1387cc38443a36ade0213dced04dce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f336c1d3b9dbf0715a2a86f021e5327ad1387cc38443a36ade0213dced04dce5->enter($__internal_f336c1d3b9dbf0715a2a86f021e5327ad1387cc38443a36ade0213dced04dce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_c2127639a0bc7010b0e5243a2f4ec9e9814e4443dd91c9fa3195577a8fec41db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2127639a0bc7010b0e5243a2f4ec9e9814e4443dd91c9fa3195577a8fec41db->enter($__internal_c2127639a0bc7010b0e5243a2f4ec9e9814e4443dd91c9fa3195577a8fec41db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f336c1d3b9dbf0715a2a86f021e5327ad1387cc38443a36ade0213dced04dce5->leave($__internal_f336c1d3b9dbf0715a2a86f021e5327ad1387cc38443a36ade0213dced04dce5_prof);

        
        $__internal_c2127639a0bc7010b0e5243a2f4ec9e9814e4443dd91c9fa3195577a8fec41db->leave($__internal_c2127639a0bc7010b0e5243a2f4ec9e9814e4443dd91c9fa3195577a8fec41db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd64562a95ebc557aa7977db4121c38f825841eb4db490504757bb160c0a9624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd64562a95ebc557aa7977db4121c38f825841eb4db490504757bb160c0a9624->enter($__internal_fd64562a95ebc557aa7977db4121c38f825841eb4db490504757bb160c0a9624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e5398884129e1f7157f1f21c35b43d415b7cd2f58bf8bbaa6dd26c6d9691a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5398884129e1f7157f1f21c35b43d415b7cd2f58bf8bbaa6dd26c6d9691a96->enter($__internal_6e5398884129e1f7157f1f21c35b43d415b7cd2f58bf8bbaa6dd26c6d9691a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>
";
        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_6e5398884129e1f7157f1f21c35b43d415b7cd2f58bf8bbaa6dd26c6d9691a96->leave($__internal_6e5398884129e1f7157f1f21c35b43d415b7cd2f58bf8bbaa6dd26c6d9691a96_prof);

        
        $__internal_fd64562a95ebc557aa7977db4121c38f825841eb4db490504757bb160c0a9624->leave($__internal_fd64562a95ebc557aa7977db4121c38f825841eb4db490504757bb160c0a9624_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <br>
    <br>
    <br>
    <br>
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
