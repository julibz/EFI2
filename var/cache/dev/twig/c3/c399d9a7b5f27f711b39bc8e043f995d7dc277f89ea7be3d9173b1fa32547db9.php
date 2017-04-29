<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d048803ae7090ed541e4a46aec0b0a194188f1483838a76e4afa839e4b6951f5 extends Twig_Template
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
        $__internal_baee9656ea5db7f9bed03f2f0ae582e7f7daa64f50452e359c5349993c2d3fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baee9656ea5db7f9bed03f2f0ae582e7f7daa64f50452e359c5349993c2d3fde->enter($__internal_baee9656ea5db7f9bed03f2f0ae582e7f7daa64f50452e359c5349993c2d3fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6697b111409cd1c860231dd746073ac3ee10d5cd7ccd4124d72960864f82827b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6697b111409cd1c860231dd746073ac3ee10d5cd7ccd4124d72960864f82827b->enter($__internal_6697b111409cd1c860231dd746073ac3ee10d5cd7ccd4124d72960864f82827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_baee9656ea5db7f9bed03f2f0ae582e7f7daa64f50452e359c5349993c2d3fde->leave($__internal_baee9656ea5db7f9bed03f2f0ae582e7f7daa64f50452e359c5349993c2d3fde_prof);

        
        $__internal_6697b111409cd1c860231dd746073ac3ee10d5cd7ccd4124d72960864f82827b->leave($__internal_6697b111409cd1c860231dd746073ac3ee10d5cd7ccd4124d72960864f82827b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
