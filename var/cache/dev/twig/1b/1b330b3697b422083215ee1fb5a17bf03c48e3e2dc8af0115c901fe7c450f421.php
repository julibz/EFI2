<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_641a45325dc4bcbcc28e241cae3208a49cf40fbd3a3904216497faeac9ff8cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4715fff3f64d36ebc55e802538e9e031b272bd8a11c933978a979c0244873a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4715fff3f64d36ebc55e802538e9e031b272bd8a11c933978a979c0244873a6e->enter($__internal_4715fff3f64d36ebc55e802538e9e031b272bd8a11c933978a979c0244873a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_d8628da528ea5fd6d1b4c8498cd5a26ce3a6898587cc4f5517a93e9da9e01a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8628da528ea5fd6d1b4c8498cd5a26ce3a6898587cc4f5517a93e9da9e01a29->enter($__internal_d8628da528ea5fd6d1b4c8498cd5a26ce3a6898587cc4f5517a93e9da9e01a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4715fff3f64d36ebc55e802538e9e031b272bd8a11c933978a979c0244873a6e->leave($__internal_4715fff3f64d36ebc55e802538e9e031b272bd8a11c933978a979c0244873a6e_prof);

        
        $__internal_d8628da528ea5fd6d1b4c8498cd5a26ce3a6898587cc4f5517a93e9da9e01a29->leave($__internal_d8628da528ea5fd6d1b4c8498cd5a26ce3a6898587cc4f5517a93e9da9e01a29_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_28f71b2e3bab065e4adfc0ebf2e2d3e70ddef3e986a80551ef6b3522a22f79cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f71b2e3bab065e4adfc0ebf2e2d3e70ddef3e986a80551ef6b3522a22f79cb->enter($__internal_28f71b2e3bab065e4adfc0ebf2e2d3e70ddef3e986a80551ef6b3522a22f79cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c431fccc5307edd3eb7394e757596192e0ea362b47940f2a9873790aa92261a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c431fccc5307edd3eb7394e757596192e0ea362b47940f2a9873790aa92261a9->enter($__internal_c431fccc5307edd3eb7394e757596192e0ea362b47940f2a9873790aa92261a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "


    <div class=\"container\">
        <br>
        <br>
        <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-6\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    ";
            // line 23
            echo "                    ";
            // line 24
            echo "                        ";
            // line 25
            echo "                    ";
            // line 26
            echo "                ";
        } else {
            // line 27
            echo "
                    ";
            // line 29
            echo "
                ";
        }
        // line 31
        echo "

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 34
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                echo "                    <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "

                ";
        // line 42
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 44
        echo "

    </div>
    <div class=\"col-lg-3\"></div>
    </div>
";
        
        $__internal_c431fccc5307edd3eb7394e757596192e0ea362b47940f2a9873790aa92261a9->leave($__internal_c431fccc5307edd3eb7394e757596192e0ea362b47940f2a9873790aa92261a9_prof);

        
        $__internal_28f71b2e3bab065e4adfc0ebf2e2d3e70ddef3e986a80551ef6b3522a22f79cb->leave($__internal_28f71b2e3bab065e4adfc0ebf2e2d3e70ddef3e986a80551ef6b3522a22f79cb_prof);

    }

    // line 42
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77eb0eb18611138d9583cda609d5f9de469eb866729c0f47db77012ed4b10def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77eb0eb18611138d9583cda609d5f9de469eb866729c0f47db77012ed4b10def->enter($__internal_77eb0eb18611138d9583cda609d5f9de469eb866729c0f47db77012ed4b10def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c1e9efdb7040a6ecb7b0e0b2c719dfb46e7c4fc7167b32412fdb23e84164ce60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e9efdb7040a6ecb7b0e0b2c719dfb46e7c4fc7167b32412fdb23e84164ce60->enter($__internal_c1e9efdb7040a6ecb7b0e0b2c719dfb46e7c4fc7167b32412fdb23e84164ce60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 43
        echo "                ";
        
        $__internal_c1e9efdb7040a6ecb7b0e0b2c719dfb46e7c4fc7167b32412fdb23e84164ce60->leave($__internal_c1e9efdb7040a6ecb7b0e0b2c719dfb46e7c4fc7167b32412fdb23e84164ce60_prof);

        
        $__internal_77eb0eb18611138d9583cda609d5f9de469eb866729c0f47db77012ed4b10def->leave($__internal_77eb0eb18611138d9583cda609d5f9de469eb866729c0f47db77012ed4b10def_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_880d225f11978fc6e1091e9e57d3b451be6786559873fc9e9b09396aa28f0bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880d225f11978fc6e1091e9e57d3b451be6786559873fc9e9b09396aa28f0bae->enter($__internal_880d225f11978fc6e1091e9e57d3b451be6786559873fc9e9b09396aa28f0bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_623e24b4e156e61eca128cbdf5fa667cf866a04be0b73ed50252edebccef5b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623e24b4e156e61eca128cbdf5fa667cf866a04be0b73ed50252edebccef5b63->enter($__internal_623e24b4e156e61eca128cbdf5fa667cf866a04be0b73ed50252edebccef5b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_623e24b4e156e61eca128cbdf5fa667cf866a04be0b73ed50252edebccef5b63->leave($__internal_623e24b4e156e61eca128cbdf5fa667cf866a04be0b73ed50252edebccef5b63_prof);

        
        $__internal_880d225f11978fc6e1091e9e57d3b451be6786559873fc9e9b09396aa28f0bae->leave($__internal_880d225f11978fc6e1091e9e57d3b451be6786559873fc9e9b09396aa28f0bae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 50,  144 => 43,  135 => 42,  120 => 44,  118 => 42,  114 => 40,  108 => 39,  99 => 36,  94 => 35,  89 => 34,  85 => 33,  81 => 31,  77 => 29,  74 => 27,  71 => 26,  69 => 25,  67 => 24,  65 => 23,  63 => 22,  61 => 21,  51 => 13,  42 => 12,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
 {#{% block stylesheets %}#}
     {#<link rel=\"stylesheet\" href=\"{{ asset('favicon.ico') }}\" />#}
     {#<link rel=\"stylesheet\" href=\"{{ asset('asset/css/agency.css') }}\" />#}

 {#{% endblock %}#}

   {#{% block header %}#}
       {#{% include 'otros/header.html.twig' %}#}
   {#{% endblock %}#}

{% block body %}



    <div class=\"container\">
        <br>
        <br>
        <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-6\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    {#{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
                    {#<a href=\"{{ path('fos_user_security_logout') }}\">#}
                        {#{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}#}
                    {#</a>#}
                {% else %}

                    {#<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}

                {% endif %}


            {% for type, messages in app.session.flashBag.all %}
                {% for message in messages %}
                    <div class=\"{{ type }}\">
                        {{ message|trans({}, 'FOSUserBundle') }}
                    </div>
                {% endfor %}
            {% endfor %}


                {% block fos_user_content %}
                {% endblock fos_user_content %}


    </div>
    <div class=\"col-lg-3\"></div>
    </div>
{% endblock %}
{% block footer %}{% endblock %}", "FOSUserBundle::layout.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
