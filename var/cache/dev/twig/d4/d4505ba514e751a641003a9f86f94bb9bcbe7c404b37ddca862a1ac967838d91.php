<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_38251faab25f562890c77e84511a92b7d310d408249335ec60da918b3d576d27 extends Twig_Template
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
        $__internal_54345916849d0729cfc38b4420632e760d6aa5b26312d5b199c5098e362cc50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54345916849d0729cfc38b4420632e760d6aa5b26312d5b199c5098e362cc50e->enter($__internal_54345916849d0729cfc38b4420632e760d6aa5b26312d5b199c5098e362cc50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7e9fece7240cf2a59eddf54f6960b44256ca6a227c78446b1cda84b26e0dd120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9fece7240cf2a59eddf54f6960b44256ca6a227c78446b1cda84b26e0dd120->enter($__internal_7e9fece7240cf2a59eddf54f6960b44256ca6a227c78446b1cda84b26e0dd120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_54345916849d0729cfc38b4420632e760d6aa5b26312d5b199c5098e362cc50e->leave($__internal_54345916849d0729cfc38b4420632e760d6aa5b26312d5b199c5098e362cc50e_prof);

        
        $__internal_7e9fece7240cf2a59eddf54f6960b44256ca6a227c78446b1cda84b26e0dd120->leave($__internal_7e9fece7240cf2a59eddf54f6960b44256ca6a227c78446b1cda84b26e0dd120_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
