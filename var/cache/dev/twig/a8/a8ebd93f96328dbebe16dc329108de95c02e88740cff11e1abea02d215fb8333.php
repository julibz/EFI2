<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4010838583a138c2d0e0a9a8cef36e7ee5a8d1ea7b273a74be8113e7cb72ad3a extends Twig_Template
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
        $__internal_bf76ba92a40ab7911e6ca673e7c956eeb23b7694da999bfd7b4a73c45b30b409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf76ba92a40ab7911e6ca673e7c956eeb23b7694da999bfd7b4a73c45b30b409->enter($__internal_bf76ba92a40ab7911e6ca673e7c956eeb23b7694da999bfd7b4a73c45b30b409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f2a5d939d006fd22fed44c780461c653885d6d320969b63e5045ef9a438771fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a5d939d006fd22fed44c780461c653885d6d320969b63e5045ef9a438771fc->enter($__internal_f2a5d939d006fd22fed44c780461c653885d6d320969b63e5045ef9a438771fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bf76ba92a40ab7911e6ca673e7c956eeb23b7694da999bfd7b4a73c45b30b409->leave($__internal_bf76ba92a40ab7911e6ca673e7c956eeb23b7694da999bfd7b4a73c45b30b409_prof);

        
        $__internal_f2a5d939d006fd22fed44c780461c653885d6d320969b63e5045ef9a438771fc->leave($__internal_f2a5d939d006fd22fed44c780461c653885d6d320969b63e5045ef9a438771fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
