<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_8150371104e9fe7925bd6e6bf30c0f7cc2603f129d1d2e2db6bb8c7ce6c84e04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_9738f2d609c77533c51ed214197b800b272dec9f0ae325f3faddafb97bf16c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9738f2d609c77533c51ed214197b800b272dec9f0ae325f3faddafb97bf16c44->enter($__internal_9738f2d609c77533c51ed214197b800b272dec9f0ae325f3faddafb97bf16c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_6cfc5070b22ce2dc1bd5398d4a128f2c50a13b1589e59fb9a81dfeb3e5164f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfc5070b22ce2dc1bd5398d4a128f2c50a13b1589e59fb9a81dfeb3e5164f48->enter($__internal_6cfc5070b22ce2dc1bd5398d4a128f2c50a13b1589e59fb9a81dfeb3e5164f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9738f2d609c77533c51ed214197b800b272dec9f0ae325f3faddafb97bf16c44->leave($__internal_9738f2d609c77533c51ed214197b800b272dec9f0ae325f3faddafb97bf16c44_prof);

        
        $__internal_6cfc5070b22ce2dc1bd5398d4a128f2c50a13b1589e59fb9a81dfeb3e5164f48->leave($__internal_6cfc5070b22ce2dc1bd5398d4a128f2c50a13b1589e59fb9a81dfeb3e5164f48_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df76f5ae5642e9d5b44d6d8dc2bf0a8e47b77b504cc0f704fd3da0e6d4242901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df76f5ae5642e9d5b44d6d8dc2bf0a8e47b77b504cc0f704fd3da0e6d4242901->enter($__internal_df76f5ae5642e9d5b44d6d8dc2bf0a8e47b77b504cc0f704fd3da0e6d4242901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_886f834f72037ef349ed48f24c5bbc86b5e5b4433ce35b443a375b91e7dfc67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886f834f72037ef349ed48f24c5bbc86b5e5b4433ce35b443a375b91e7dfc67e->enter($__internal_886f834f72037ef349ed48f24c5bbc86b5e5b4433ce35b443a375b91e7dfc67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <br>
    <br>
    <br>
    <br>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_886f834f72037ef349ed48f24c5bbc86b5e5b4433ce35b443a375b91e7dfc67e->leave($__internal_886f834f72037ef349ed48f24c5bbc86b5e5b4433ce35b443a375b91e7dfc67e_prof);

        
        $__internal_df76f5ae5642e9d5b44d6d8dc2bf0a8e47b77b504cc0f704fd3da0e6d4242901->leave($__internal_df76f5ae5642e9d5b44d6d8dc2bf0a8e47b77b504cc0f704fd3da0e6d4242901_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <br>
    <br>
    <br>
    <br>
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
