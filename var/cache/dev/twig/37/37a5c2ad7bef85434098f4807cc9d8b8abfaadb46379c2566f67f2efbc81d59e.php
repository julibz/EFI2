<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_065d7d49c23ef717fb2f18524a36be8aee1184fe36ffcc1e949beaed99a4d50b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_14b3e5471a2617b9654b395acaac575ce2d8774274d88dc566dc6b0e0eb185ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b3e5471a2617b9654b395acaac575ce2d8774274d88dc566dc6b0e0eb185ac->enter($__internal_14b3e5471a2617b9654b395acaac575ce2d8774274d88dc566dc6b0e0eb185ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_b6f1a3c4bc0b6e415e7138d23dc730b6921607393107ccff587443465ef5cc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f1a3c4bc0b6e415e7138d23dc730b6921607393107ccff587443465ef5cc43->enter($__internal_b6f1a3c4bc0b6e415e7138d23dc730b6921607393107ccff587443465ef5cc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b3e5471a2617b9654b395acaac575ce2d8774274d88dc566dc6b0e0eb185ac->leave($__internal_14b3e5471a2617b9654b395acaac575ce2d8774274d88dc566dc6b0e0eb185ac_prof);

        
        $__internal_b6f1a3c4bc0b6e415e7138d23dc730b6921607393107ccff587443465ef5cc43->leave($__internal_b6f1a3c4bc0b6e415e7138d23dc730b6921607393107ccff587443465ef5cc43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4967cedd51e1860974fd86aee8d9cdebc201d7baea7b053fa9c8590496340953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4967cedd51e1860974fd86aee8d9cdebc201d7baea7b053fa9c8590496340953->enter($__internal_4967cedd51e1860974fd86aee8d9cdebc201d7baea7b053fa9c8590496340953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_58fa04164ca068fde9dc084714fb80776d3132fecbb923138e36f40038f18bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fa04164ca068fde9dc084714fb80776d3132fecbb923138e36f40038f18bc0->enter($__internal_58fa04164ca068fde9dc084714fb80776d3132fecbb923138e36f40038f18bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_58fa04164ca068fde9dc084714fb80776d3132fecbb923138e36f40038f18bc0->leave($__internal_58fa04164ca068fde9dc084714fb80776d3132fecbb923138e36f40038f18bc0_prof);

        
        $__internal_4967cedd51e1860974fd86aee8d9cdebc201d7baea7b053fa9c8590496340953->leave($__internal_4967cedd51e1860974fd86aee8d9cdebc201d7baea7b053fa9c8590496340953_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
