<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_eef1ddbeab1f80b12318f3143c47f949bacdb824b407c9594406fd9ae89d5147 extends Twig_Template
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
        $__internal_3c08120c6411a3aff4cb25cee49980e636d038692a59081772af4c5b81f7b648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c08120c6411a3aff4cb25cee49980e636d038692a59081772af4c5b81f7b648->enter($__internal_3c08120c6411a3aff4cb25cee49980e636d038692a59081772af4c5b81f7b648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_166db3c32d61514b2ee246c4f66e982e04f210e86d88dc95470b4cd1bee5b311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166db3c32d61514b2ee246c4f66e982e04f210e86d88dc95470b4cd1bee5b311->enter($__internal_166db3c32d61514b2ee246c4f66e982e04f210e86d88dc95470b4cd1bee5b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery.js"), "html", null, true);
        echo "\"></script>



";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <div>
        <input class=\"btn btn-primary\"type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 18
        echo "<script>
//    document.getElementById('fos_user_registration_form_roles_0').value= 'ROLE_ADMIN';
//    \$('#fos_user_registration_form_roles_0').hide();

</script>";
        
        $__internal_3c08120c6411a3aff4cb25cee49980e636d038692a59081772af4c5b81f7b648->leave($__internal_3c08120c6411a3aff4cb25cee49980e636d038692a59081772af4c5b81f7b648_prof);

        
        $__internal_166db3c32d61514b2ee246c4f66e982e04f210e86d88dc95470b4cd1bee5b311->leave($__internal_166db3c32d61514b2ee246c4f66e982e04f210e86d88dc95470b4cd1bee5b311_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  55 => 16,  53 => 15,  49 => 13,  44 => 11,  38 => 8,  33 => 6,  25 => 2,);
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

</script>", "@FOSUser/Registration/register_content.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
