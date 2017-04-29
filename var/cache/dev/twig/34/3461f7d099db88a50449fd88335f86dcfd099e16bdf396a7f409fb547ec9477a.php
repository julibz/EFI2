<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a98e9aae7edda477ddd6d5ec60385b523525d2af991084d162dbdbb6a7e32cbb extends Twig_Template
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
        $__internal_a4b09f0ff24edb5f2bd4c159978a866b6d9fd741288c64350cc16ae100094abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b09f0ff24edb5f2bd4c159978a866b6d9fd741288c64350cc16ae100094abd->enter($__internal_a4b09f0ff24edb5f2bd4c159978a866b6d9fd741288c64350cc16ae100094abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_51ceef8bff2b4b165383bdc7a67b35a00f4f651a98a6bf3140659a872410da8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ceef8bff2b4b165383bdc7a67b35a00f4f651a98a6bf3140659a872410da8e->enter($__internal_51ceef8bff2b4b165383bdc7a67b35a00f4f651a98a6bf3140659a872410da8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_a4b09f0ff24edb5f2bd4c159978a866b6d9fd741288c64350cc16ae100094abd->leave($__internal_a4b09f0ff24edb5f2bd4c159978a866b6d9fd741288c64350cc16ae100094abd_prof);

        
        $__internal_51ceef8bff2b4b165383bdc7a67b35a00f4f651a98a6bf3140659a872410da8e->leave($__internal_51ceef8bff2b4b165383bdc7a67b35a00f4f651a98a6bf3140659a872410da8e_prof);

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
