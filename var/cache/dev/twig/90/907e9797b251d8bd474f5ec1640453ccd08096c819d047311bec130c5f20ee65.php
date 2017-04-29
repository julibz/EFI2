<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_d8fcdc4dae78fce03804831e6bd2d874b036193f631f1f0a37553f8b9811af65 extends Twig_Template
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
        $__internal_9deffcba7079b3b873435f043f8eb59fb72bc46d25a060e3ee5b939af6701fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9deffcba7079b3b873435f043f8eb59fb72bc46d25a060e3ee5b939af6701fb8->enter($__internal_9deffcba7079b3b873435f043f8eb59fb72bc46d25a060e3ee5b939af6701fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_01c3a2a8d7cc9846706b9d0c066a645165d7f24b70d18f2bed2c1eb04cf47c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c3a2a8d7cc9846706b9d0c066a645165d7f24b70d18f2bed2c1eb04cf47c18->enter($__internal_01c3a2a8d7cc9846706b9d0c066a645165d7f24b70d18f2bed2c1eb04cf47c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_9deffcba7079b3b873435f043f8eb59fb72bc46d25a060e3ee5b939af6701fb8->leave($__internal_9deffcba7079b3b873435f043f8eb59fb72bc46d25a060e3ee5b939af6701fb8_prof);

        
        $__internal_01c3a2a8d7cc9846706b9d0c066a645165d7f24b70d18f2bed2c1eb04cf47c18->leave($__internal_01c3a2a8d7cc9846706b9d0c066a645165d7f24b70d18f2bed2c1eb04cf47c18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
