<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e054b62dfab6647d1992de39163f65cf74cc4c68bae2afee4876646320904494 extends Twig_Template
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
        $__internal_60015b2a7142ae0377b01d67be6797bea110455382eb8ca4829397fdc051f978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60015b2a7142ae0377b01d67be6797bea110455382eb8ca4829397fdc051f978->enter($__internal_60015b2a7142ae0377b01d67be6797bea110455382eb8ca4829397fdc051f978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_97371061ca5d96b968d6c14ba2092d9e4d1d1d398c83648f66f14f2db2786245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97371061ca5d96b968d6c14ba2092d9e4d1d1d398c83648f66f14f2db2786245->enter($__internal_97371061ca5d96b968d6c14ba2092d9e4d1d1d398c83648f66f14f2db2786245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_60015b2a7142ae0377b01d67be6797bea110455382eb8ca4829397fdc051f978->leave($__internal_60015b2a7142ae0377b01d67be6797bea110455382eb8ca4829397fdc051f978_prof);

        
        $__internal_97371061ca5d96b968d6c14ba2092d9e4d1d1d398c83648f66f14f2db2786245->leave($__internal_97371061ca5d96b968d6c14ba2092d9e4d1d1d398c83648f66f14f2db2786245_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
