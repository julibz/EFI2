<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b1763fca2ec3314b93743a65eff2cc4b51700b5e4952170308d4bff44f6aa59 extends Twig_Template
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
        $__internal_67d16624de9932754bde1a720f5cd5891e8e9097e29e4811b8d86b45a20adeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d16624de9932754bde1a720f5cd5891e8e9097e29e4811b8d86b45a20adeee->enter($__internal_67d16624de9932754bde1a720f5cd5891e8e9097e29e4811b8d86b45a20adeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f816418e88b453d696cba1e0ffcf793722a3a764a7f5771843088738d94664cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f816418e88b453d696cba1e0ffcf793722a3a764a7f5771843088738d94664cd->enter($__internal_f816418e88b453d696cba1e0ffcf793722a3a764a7f5771843088738d94664cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_67d16624de9932754bde1a720f5cd5891e8e9097e29e4811b8d86b45a20adeee->leave($__internal_67d16624de9932754bde1a720f5cd5891e8e9097e29e4811b8d86b45a20adeee_prof);

        
        $__internal_f816418e88b453d696cba1e0ffcf793722a3a764a7f5771843088738d94664cd->leave($__internal_f816418e88b453d696cba1e0ffcf793722a3a764a7f5771843088738d94664cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
