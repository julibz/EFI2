<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9b04dda7a95ace2243d29e77f3e1a04afa2573b5389641ea8c8b3bec2b19791f extends Twig_Template
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
        $__internal_0ab1f41f8d2c60e75dbde5c82829465552b1e85fd64c84bb6738e1ea6177e634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab1f41f8d2c60e75dbde5c82829465552b1e85fd64c84bb6738e1ea6177e634->enter($__internal_0ab1f41f8d2c60e75dbde5c82829465552b1e85fd64c84bb6738e1ea6177e634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_fa6e5b2ff7c8fc31a8c785b1193e750b6dc01ee7f5ed69bad078a81034f0edbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6e5b2ff7c8fc31a8c785b1193e750b6dc01ee7f5ed69bad078a81034f0edbd->enter($__internal_fa6e5b2ff7c8fc31a8c785b1193e750b6dc01ee7f5ed69bad078a81034f0edbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0ab1f41f8d2c60e75dbde5c82829465552b1e85fd64c84bb6738e1ea6177e634->leave($__internal_0ab1f41f8d2c60e75dbde5c82829465552b1e85fd64c84bb6738e1ea6177e634_prof);

        
        $__internal_fa6e5b2ff7c8fc31a8c785b1193e750b6dc01ee7f5ed69bad078a81034f0edbd->leave($__internal_fa6e5b2ff7c8fc31a8c785b1193e750b6dc01ee7f5ed69bad078a81034f0edbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
