<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_6a3a94fde59420e898c060cde9ce717aa9d07c8338b15de89be4067b5a3bcd96 extends Twig_Template
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
        $__internal_1b8e962b0e2ecd4067617213d291bd48db20cf83c2c78b08e1eac227397d33bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8e962b0e2ecd4067617213d291bd48db20cf83c2c78b08e1eac227397d33bd->enter($__internal_1b8e962b0e2ecd4067617213d291bd48db20cf83c2c78b08e1eac227397d33bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_b092939116c2b0ad7c9a317196e84a85ef0ee4b0276c7d9f87ef6d0f68142854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b092939116c2b0ad7c9a317196e84a85ef0ee4b0276c7d9f87ef6d0f68142854->enter($__internal_b092939116c2b0ad7c9a317196e84a85ef0ee4b0276c7d9f87ef6d0f68142854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1b8e962b0e2ecd4067617213d291bd48db20cf83c2c78b08e1eac227397d33bd->leave($__internal_1b8e962b0e2ecd4067617213d291bd48db20cf83c2c78b08e1eac227397d33bd_prof);

        
        $__internal_b092939116c2b0ad7c9a317196e84a85ef0ee4b0276c7d9f87ef6d0f68142854->leave($__internal_b092939116c2b0ad7c9a317196e84a85ef0ee4b0276c7d9f87ef6d0f68142854_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
