<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d4c1daa8c0e1641d3734aae846d9e064633b4505286a6ecbf5d6f6b56cd8b120 extends Twig_Template
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
        $__internal_fc3d88cbc3fc1d4ecfd50e82dfe64a2d56d4da4f826f444075818d5bf4dee91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3d88cbc3fc1d4ecfd50e82dfe64a2d56d4da4f826f444075818d5bf4dee91e->enter($__internal_fc3d88cbc3fc1d4ecfd50e82dfe64a2d56d4da4f826f444075818d5bf4dee91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_73695f38de369f5207a1177f5b8c240b12546a48d7b1e7ca073a897d58975422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73695f38de369f5207a1177f5b8c240b12546a48d7b1e7ca073a897d58975422->enter($__internal_73695f38de369f5207a1177f5b8c240b12546a48d7b1e7ca073a897d58975422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_fc3d88cbc3fc1d4ecfd50e82dfe64a2d56d4da4f826f444075818d5bf4dee91e->leave($__internal_fc3d88cbc3fc1d4ecfd50e82dfe64a2d56d4da4f826f444075818d5bf4dee91e_prof);

        
        $__internal_73695f38de369f5207a1177f5b8c240b12546a48d7b1e7ca073a897d58975422->leave($__internal_73695f38de369f5207a1177f5b8c240b12546a48d7b1e7ca073a897d58975422_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
