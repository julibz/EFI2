<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4229af677c0c577d2a4135c37717ca78890ca78aa0bc83e4b8357169b898af37 extends Twig_Template
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
        $__internal_99428e7bacf9f36e30dce2d926f7709f34f783833e78098ad766da454fc8211d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99428e7bacf9f36e30dce2d926f7709f34f783833e78098ad766da454fc8211d->enter($__internal_99428e7bacf9f36e30dce2d926f7709f34f783833e78098ad766da454fc8211d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f05dc5acd0ad05b419b693bc32705afc3d4a6b4328311539cd466a38cc536fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05dc5acd0ad05b419b693bc32705afc3d4a6b4328311539cd466a38cc536fa8->enter($__internal_f05dc5acd0ad05b419b693bc32705afc3d4a6b4328311539cd466a38cc536fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_99428e7bacf9f36e30dce2d926f7709f34f783833e78098ad766da454fc8211d->leave($__internal_99428e7bacf9f36e30dce2d926f7709f34f783833e78098ad766da454fc8211d_prof);

        
        $__internal_f05dc5acd0ad05b419b693bc32705afc3d4a6b4328311539cd466a38cc536fa8->leave($__internal_f05dc5acd0ad05b419b693bc32705afc3d4a6b4328311539cd466a38cc536fa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
