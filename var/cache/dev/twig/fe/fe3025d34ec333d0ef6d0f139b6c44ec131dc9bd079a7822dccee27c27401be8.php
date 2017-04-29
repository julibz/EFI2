<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b578f2d9d275a594e772d41a0f61ac5d9746bf87275feb3fee10c992f75d465a extends Twig_Template
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
        $__internal_ca4776caf6fb4b25da7000203d6d52b0395ff3db8df6701f9b25e77ee63cdb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4776caf6fb4b25da7000203d6d52b0395ff3db8df6701f9b25e77ee63cdb2b->enter($__internal_ca4776caf6fb4b25da7000203d6d52b0395ff3db8df6701f9b25e77ee63cdb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_bfbcd3682aa01230f8e7fd13ea84d684299a3c7c0ba41af99c7b23fb6cefef3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbcd3682aa01230f8e7fd13ea84d684299a3c7c0ba41af99c7b23fb6cefef3e->enter($__internal_bfbcd3682aa01230f8e7fd13ea84d684299a3c7c0ba41af99c7b23fb6cefef3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ca4776caf6fb4b25da7000203d6d52b0395ff3db8df6701f9b25e77ee63cdb2b->leave($__internal_ca4776caf6fb4b25da7000203d6d52b0395ff3db8df6701f9b25e77ee63cdb2b_prof);

        
        $__internal_bfbcd3682aa01230f8e7fd13ea84d684299a3c7c0ba41af99c7b23fb6cefef3e->leave($__internal_bfbcd3682aa01230f8e7fd13ea84d684299a3c7c0ba41af99c7b23fb6cefef3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
