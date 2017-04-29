<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_08593bcc05f4bf996a1bd2ca47369a318c783eaf395f2c67790eea3b80208386 extends Twig_Template
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
        $__internal_948d66fb2dea00198652880f78a43dea6b531b69637c94eb7925b69f946d2f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948d66fb2dea00198652880f78a43dea6b531b69637c94eb7925b69f946d2f9d->enter($__internal_948d66fb2dea00198652880f78a43dea6b531b69637c94eb7925b69f946d2f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_eca1361e97f0e59924be760d84c4d28a31334caafd962e2854b92ac9c007a2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca1361e97f0e59924be760d84c4d28a31334caafd962e2854b92ac9c007a2e9->enter($__internal_eca1361e97f0e59924be760d84c4d28a31334caafd962e2854b92ac9c007a2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_948d66fb2dea00198652880f78a43dea6b531b69637c94eb7925b69f946d2f9d->leave($__internal_948d66fb2dea00198652880f78a43dea6b531b69637c94eb7925b69f946d2f9d_prof);

        
        $__internal_eca1361e97f0e59924be760d84c4d28a31334caafd962e2854b92ac9c007a2e9->leave($__internal_eca1361e97f0e59924be760d84c4d28a31334caafd962e2854b92ac9c007a2e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
