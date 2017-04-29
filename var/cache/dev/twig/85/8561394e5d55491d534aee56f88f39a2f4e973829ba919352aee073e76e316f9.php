<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5494bbe992c179baa68897d06a669bd0bcb087729a16415d807df77d7c34a3ea extends Twig_Template
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
        $__internal_a603e2e7cdecf4cb5c538e54fc9e3ca2c78ee26d011d3b6705660e531080d89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a603e2e7cdecf4cb5c538e54fc9e3ca2c78ee26d011d3b6705660e531080d89c->enter($__internal_a603e2e7cdecf4cb5c538e54fc9e3ca2c78ee26d011d3b6705660e531080d89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b1235ec8e3d5f190dc3b43dc1298faffe5d659f744c9cbea04e4dbfba06f1bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1235ec8e3d5f190dc3b43dc1298faffe5d659f744c9cbea04e4dbfba06f1bde->enter($__internal_b1235ec8e3d5f190dc3b43dc1298faffe5d659f744c9cbea04e4dbfba06f1bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a603e2e7cdecf4cb5c538e54fc9e3ca2c78ee26d011d3b6705660e531080d89c->leave($__internal_a603e2e7cdecf4cb5c538e54fc9e3ca2c78ee26d011d3b6705660e531080d89c_prof);

        
        $__internal_b1235ec8e3d5f190dc3b43dc1298faffe5d659f744c9cbea04e4dbfba06f1bde->leave($__internal_b1235ec8e3d5f190dc3b43dc1298faffe5d659f744c9cbea04e4dbfba06f1bde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
