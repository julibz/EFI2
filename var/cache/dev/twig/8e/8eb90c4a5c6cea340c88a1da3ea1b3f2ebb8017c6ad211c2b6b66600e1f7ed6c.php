<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_88f4be8294d976fa0854566182da86f97b7fdb6c5830e5fd2e2bd50b9ec3688c extends Twig_Template
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
        $__internal_116e91dbbcb4e2ce4a6e984908725fd19feb7a2f55165031d60dc73155a6fb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116e91dbbcb4e2ce4a6e984908725fd19feb7a2f55165031d60dc73155a6fb7b->enter($__internal_116e91dbbcb4e2ce4a6e984908725fd19feb7a2f55165031d60dc73155a6fb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a47678ac0115bd4754c4c1ce30e2c29868146679b27f6f43a10358485c4975af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47678ac0115bd4754c4c1ce30e2c29868146679b27f6f43a10358485c4975af->enter($__internal_a47678ac0115bd4754c4c1ce30e2c29868146679b27f6f43a10358485c4975af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_116e91dbbcb4e2ce4a6e984908725fd19feb7a2f55165031d60dc73155a6fb7b->leave($__internal_116e91dbbcb4e2ce4a6e984908725fd19feb7a2f55165031d60dc73155a6fb7b_prof);

        
        $__internal_a47678ac0115bd4754c4c1ce30e2c29868146679b27f6f43a10358485c4975af->leave($__internal_a47678ac0115bd4754c4c1ce30e2c29868146679b27f6f43a10358485c4975af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
