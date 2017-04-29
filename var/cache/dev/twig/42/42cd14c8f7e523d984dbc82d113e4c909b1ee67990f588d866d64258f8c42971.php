<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d07cc03dba3557aca3f1e726839a70ca791164ae139a971ae596cf420e8df668 extends Twig_Template
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
        $__internal_2247740619789eb5efd181ed3a36d3ff882af76766d907429bbef37b928afdea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2247740619789eb5efd181ed3a36d3ff882af76766d907429bbef37b928afdea->enter($__internal_2247740619789eb5efd181ed3a36d3ff882af76766d907429bbef37b928afdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b5851b6ba52bc83b1a2f35cf8dfad3b58efbcf798448d7ffbf472dee7e679871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5851b6ba52bc83b1a2f35cf8dfad3b58efbcf798448d7ffbf472dee7e679871->enter($__internal_b5851b6ba52bc83b1a2f35cf8dfad3b58efbcf798448d7ffbf472dee7e679871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2247740619789eb5efd181ed3a36d3ff882af76766d907429bbef37b928afdea->leave($__internal_2247740619789eb5efd181ed3a36d3ff882af76766d907429bbef37b928afdea_prof);

        
        $__internal_b5851b6ba52bc83b1a2f35cf8dfad3b58efbcf798448d7ffbf472dee7e679871->leave($__internal_b5851b6ba52bc83b1a2f35cf8dfad3b58efbcf798448d7ffbf472dee7e679871_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
