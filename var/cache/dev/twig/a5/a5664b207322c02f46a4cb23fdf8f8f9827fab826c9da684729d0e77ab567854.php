<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_fe8a3c19eceb95636679fa08b6419331b44066cf32c9eae96fef2fbefbac6de5 extends Twig_Template
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
        $__internal_3c6e00e583fdc4bb7cfb8a6d4f18c49c477205c2b5e6eefbf49c1118f9617b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6e00e583fdc4bb7cfb8a6d4f18c49c477205c2b5e6eefbf49c1118f9617b61->enter($__internal_3c6e00e583fdc4bb7cfb8a6d4f18c49c477205c2b5e6eefbf49c1118f9617b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_b940de8998f4cbc17046ff4a6d916a0c65d9cf39ce11b523a22b3ec29e108823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b940de8998f4cbc17046ff4a6d916a0c65d9cf39ce11b523a22b3ec29e108823->enter($__internal_b940de8998f4cbc17046ff4a6d916a0c65d9cf39ce11b523a22b3ec29e108823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery.js"), "html", null, true);
        echo "\"></script>

<br>

<br>

";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <div>
        <input class=\"btn btn-primary\"type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 20
        echo "<script>
//    document.getElementById('fos_user_registration_form_roles_0').value= 'ROLE_ADMIN';
//    \$('#fos_user_registration_form_roles_0').hide();

</script>";
        
        $__internal_3c6e00e583fdc4bb7cfb8a6d4f18c49c477205c2b5e6eefbf49c1118f9617b61->leave($__internal_3c6e00e583fdc4bb7cfb8a6d4f18c49c477205c2b5e6eefbf49c1118f9617b61_prof);

        
        $__internal_b940de8998f4cbc17046ff4a6d916a0c65d9cf39ce11b523a22b3ec29e108823->leave($__internal_b940de8998f4cbc17046ff4a6d916a0c65d9cf39ce11b523a22b3ec29e108823_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  57 => 18,  55 => 17,  51 => 15,  46 => 13,  40 => 10,  35 => 8,  25 => 2,);
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
<script src=\"{{ asset(\"asset/js/jquery.js\") }}\"></script>

<br>

<br>

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

    {{ form_widget(form)}}

    <div>
        <input class=\"btn btn-primary\"type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
{#<div class=\"input-group\">#}
    {#<input type=\"text\" class=\"form-control\" placeholder=\"Recipient's username\" aria-describedby=\"basic-addon2\">#}
    {#<span class=\"input-group-addon\" id=\"basic-addon2\">@example.com</span>#}
{#</div>#}
<script>
//    document.getElementById('fos_user_registration_form_roles_0').value= 'ROLE_ADMIN';
//    \$('#fos_user_registration_form_roles_0').hide();

</script>", "FOSUserBundle:Registration:register_content.html.twig", "/home/julian/Julian_Symfony/EFI2/var/cache/dev/../../../app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
