<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_65c51f222eafff872f63b3f505dfcc576c17b42d25f36e576c6e63eed898959d extends Twig_Template
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
        $__internal_6704cc908cd4316fb6eca4c2be4d7499889963e78866fc808e5a3807eec901d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6704cc908cd4316fb6eca4c2be4d7499889963e78866fc808e5a3807eec901d7->enter($__internal_6704cc908cd4316fb6eca4c2be4d7499889963e78866fc808e5a3807eec901d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_19a3e678730dc4b96c06b4503d5c486e69d965b591653499f90c04f277aef836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a3e678730dc4b96c06b4503d5c486e69d965b591653499f90c04f277aef836->enter($__internal_19a3e678730dc4b96c06b4503d5c486e69d965b591653499f90c04f277aef836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6704cc908cd4316fb6eca4c2be4d7499889963e78866fc808e5a3807eec901d7->leave($__internal_6704cc908cd4316fb6eca4c2be4d7499889963e78866fc808e5a3807eec901d7_prof);

        
        $__internal_19a3e678730dc4b96c06b4503d5c486e69d965b591653499f90c04f277aef836->leave($__internal_19a3e678730dc4b96c06b4503d5c486e69d965b591653499f90c04f277aef836_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e26cae77cb70153cb6e3c7f9d36b3759b0bcb6f5d12d71ee0831c7a312415b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e26cae77cb70153cb6e3c7f9d36b3759b0bcb6f5d12d71ee0831c7a312415b->enter($__internal_f3e26cae77cb70153cb6e3c7f9d36b3759b0bcb6f5d12d71ee0831c7a312415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6686b1586ae89afe52ea4f483bf4d45bee3e032cf589160b3ad64c2adb6166e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6686b1586ae89afe52ea4f483bf4d45bee3e032cf589160b3ad64c2adb6166e3->enter($__internal_6686b1586ae89afe52ea4f483bf4d45bee3e032cf589160b3ad64c2adb6166e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6686b1586ae89afe52ea4f483bf4d45bee3e032cf589160b3ad64c2adb6166e3->leave($__internal_6686b1586ae89afe52ea4f483bf4d45bee3e032cf589160b3ad64c2adb6166e3_prof);

        
        $__internal_f3e26cae77cb70153cb6e3c7f9d36b3759b0bcb6f5d12d71ee0831c7a312415b->leave($__internal_f3e26cae77cb70153cb6e3c7f9d36b3759b0bcb6f5d12d71ee0831c7a312415b_prof);

    }

    // line 42
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0086967d2172fc42c2c0cbec675f528dccaef1eed232ba0cfd552804c86d00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0086967d2172fc42c2c0cbec675f528dccaef1eed232ba0cfd552804c86d00f->enter($__internal_c0086967d2172fc42c2c0cbec675f528dccaef1eed232ba0cfd552804c86d00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_55a33fe803ab099ca588dbb6785edb3df9d90b97de01ff945f6660c5969dad99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a33fe803ab099ca588dbb6785edb3df9d90b97de01ff945f6660c5969dad99->enter($__internal_55a33fe803ab099ca588dbb6785edb3df9d90b97de01ff945f6660c5969dad99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 43
        echo "                ";
        
        $__internal_55a33fe803ab099ca588dbb6785edb3df9d90b97de01ff945f6660c5969dad99->leave($__internal_55a33fe803ab099ca588dbb6785edb3df9d90b97de01ff945f6660c5969dad99_prof);

        
        $__internal_c0086967d2172fc42c2c0cbec675f528dccaef1eed232ba0cfd552804c86d00f->leave($__internal_c0086967d2172fc42c2c0cbec675f528dccaef1eed232ba0cfd552804c86d00f_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9faff65a94b7371bdd3572ad82d43711c4102c6a0b4edfe4a52c8418fcbc7b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9faff65a94b7371bdd3572ad82d43711c4102c6a0b4edfe4a52c8418fcbc7b95->enter($__internal_9faff65a94b7371bdd3572ad82d43711c4102c6a0b4edfe4a52c8418fcbc7b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_403627301bf7552e609da8148ac612673cfa33ccf3c042c210b91bf2ff814c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403627301bf7552e609da8148ac612673cfa33ccf3c042c210b91bf2ff814c6c->enter($__internal_403627301bf7552e609da8148ac612673cfa33ccf3c042c210b91bf2ff814c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_403627301bf7552e609da8148ac612673cfa33ccf3c042c210b91bf2ff814c6c->leave($__internal_403627301bf7552e609da8148ac612673cfa33ccf3c042c210b91bf2ff814c6c_prof);

        
        $__internal_9faff65a94b7371bdd3572ad82d43711c4102c6a0b4edfe4a52c8418fcbc7b95->leave($__internal_9faff65a94b7371bdd3572ad82d43711c4102c6a0b4edfe4a52c8418fcbc7b95_prof);

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
{% block footer %}{% endblock %}", "FOSUserBundle::layout.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
