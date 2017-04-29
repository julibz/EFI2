<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_634f801d4c90d6907193010dff683fe56ef6601a92c1d699993605c534fb0633 extends Twig_Template
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
        $__internal_48db15876e735a84f76b08e247c2e304fba16ea467e19bb2ae14411edebcfa88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48db15876e735a84f76b08e247c2e304fba16ea467e19bb2ae14411edebcfa88->enter($__internal_48db15876e735a84f76b08e247c2e304fba16ea467e19bb2ae14411edebcfa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7710d9da86639137fad36dc4a80c42beb8c1d767c25223ed1655e9f8a54bbe6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7710d9da86639137fad36dc4a80c42beb8c1d767c25223ed1655e9f8a54bbe6d->enter($__internal_7710d9da86639137fad36dc4a80c42beb8c1d767c25223ed1655e9f8a54bbe6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_48db15876e735a84f76b08e247c2e304fba16ea467e19bb2ae14411edebcfa88->leave($__internal_48db15876e735a84f76b08e247c2e304fba16ea467e19bb2ae14411edebcfa88_prof);

        
        $__internal_7710d9da86639137fad36dc4a80c42beb8c1d767c25223ed1655e9f8a54bbe6d->leave($__internal_7710d9da86639137fad36dc4a80c42beb8c1d767c25223ed1655e9f8a54bbe6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
