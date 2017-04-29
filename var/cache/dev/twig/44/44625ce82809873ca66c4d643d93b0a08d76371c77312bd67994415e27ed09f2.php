<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_91679c6b82566d918bbe555b32bdda57b5b264e06e17ba340799689bbd579db7 extends Twig_Template
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
        $__internal_de52cd027b2f247ae158ee192a37a1d70d117781d3862a4864fe3533551c303c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de52cd027b2f247ae158ee192a37a1d70d117781d3862a4864fe3533551c303c->enter($__internal_de52cd027b2f247ae158ee192a37a1d70d117781d3862a4864fe3533551c303c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ad192a3fe212b538afd0b158e1674925d9e98a537ea202a58e0d63efd029cc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad192a3fe212b538afd0b158e1674925d9e98a537ea202a58e0d63efd029cc74->enter($__internal_ad192a3fe212b538afd0b158e1674925d9e98a537ea202a58e0d63efd029cc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_de52cd027b2f247ae158ee192a37a1d70d117781d3862a4864fe3533551c303c->leave($__internal_de52cd027b2f247ae158ee192a37a1d70d117781d3862a4864fe3533551c303c_prof);

        
        $__internal_ad192a3fe212b538afd0b158e1674925d9e98a537ea202a58e0d63efd029cc74->leave($__internal_ad192a3fe212b538afd0b158e1674925d9e98a537ea202a58e0d63efd029cc74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
