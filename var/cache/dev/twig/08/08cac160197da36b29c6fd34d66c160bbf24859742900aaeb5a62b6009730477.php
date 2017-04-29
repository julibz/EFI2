<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_773c078afe0319c54cdc82a284e5f4e69695a9a7953b09d4eb1982c6870f24e2 extends Twig_Template
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
        $__internal_e8c3901b0050916abcb11373f1b45b6e74b4c4224dba32706b1a47ac3d578925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c3901b0050916abcb11373f1b45b6e74b4c4224dba32706b1a47ac3d578925->enter($__internal_e8c3901b0050916abcb11373f1b45b6e74b4c4224dba32706b1a47ac3d578925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_abd5249505dbfd350d879814b1d41e48865f5935d37c4adb7ed1124409b453b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd5249505dbfd350d879814b1d41e48865f5935d37c4adb7ed1124409b453b2->enter($__internal_abd5249505dbfd350d879814b1d41e48865f5935d37c4adb7ed1124409b453b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e8c3901b0050916abcb11373f1b45b6e74b4c4224dba32706b1a47ac3d578925->leave($__internal_e8c3901b0050916abcb11373f1b45b6e74b4c4224dba32706b1a47ac3d578925_prof);

        
        $__internal_abd5249505dbfd350d879814b1d41e48865f5935d37c4adb7ed1124409b453b2->leave($__internal_abd5249505dbfd350d879814b1d41e48865f5935d37c4adb7ed1124409b453b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
