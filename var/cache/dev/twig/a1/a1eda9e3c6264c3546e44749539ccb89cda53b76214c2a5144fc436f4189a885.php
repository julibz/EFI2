<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_677dc3565d57a76b9359f09f749829427f4434400c643ce83bffa56e08a09f9b extends Twig_Template
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
        $__internal_2673efb0cc6cc3083477bb847e44118149cf866a3b8612e3327385fa71494c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2673efb0cc6cc3083477bb847e44118149cf866a3b8612e3327385fa71494c6e->enter($__internal_2673efb0cc6cc3083477bb847e44118149cf866a3b8612e3327385fa71494c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_816e98cc571f0280adad669ecffcc9bd83469ff5a318c2a484557b565ba6bca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816e98cc571f0280adad669ecffcc9bd83469ff5a318c2a484557b565ba6bca7->enter($__internal_816e98cc571f0280adad669ecffcc9bd83469ff5a318c2a484557b565ba6bca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2673efb0cc6cc3083477bb847e44118149cf866a3b8612e3327385fa71494c6e->leave($__internal_2673efb0cc6cc3083477bb847e44118149cf866a3b8612e3327385fa71494c6e_prof);

        
        $__internal_816e98cc571f0280adad669ecffcc9bd83469ff5a318c2a484557b565ba6bca7->leave($__internal_816e98cc571f0280adad669ecffcc9bd83469ff5a318c2a484557b565ba6bca7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
