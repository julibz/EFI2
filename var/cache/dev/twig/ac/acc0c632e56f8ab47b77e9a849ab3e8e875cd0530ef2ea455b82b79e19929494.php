<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bb23f0f962eec74b0ffe126271b68dc5dac6b09b4e526c81f97fb52805ecb0dd extends Twig_Template
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
        $__internal_861aaf80a472e0278352df96b1c6ca98d142091106ab215fdb00ce644319297d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861aaf80a472e0278352df96b1c6ca98d142091106ab215fdb00ce644319297d->enter($__internal_861aaf80a472e0278352df96b1c6ca98d142091106ab215fdb00ce644319297d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_fef0d9cb640e79d13d57bb053ca8be51a5339e2ea109f596fd10bc18a083f153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef0d9cb640e79d13d57bb053ca8be51a5339e2ea109f596fd10bc18a083f153->enter($__internal_fef0d9cb640e79d13d57bb053ca8be51a5339e2ea109f596fd10bc18a083f153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_861aaf80a472e0278352df96b1c6ca98d142091106ab215fdb00ce644319297d->leave($__internal_861aaf80a472e0278352df96b1c6ca98d142091106ab215fdb00ce644319297d_prof);

        
        $__internal_fef0d9cb640e79d13d57bb053ca8be51a5339e2ea109f596fd10bc18a083f153->leave($__internal_fef0d9cb640e79d13d57bb053ca8be51a5339e2ea109f596fd10bc18a083f153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
