<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f21bba042431c0a7f935e6d162719a712c8fe6f7ec77932895b59d036418ec0a extends Twig_Template
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
        $__internal_7ec1a89a30cd622ac894aedd1b23e9305f341dc9626904a413bbe1780a04284d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec1a89a30cd622ac894aedd1b23e9305f341dc9626904a413bbe1780a04284d->enter($__internal_7ec1a89a30cd622ac894aedd1b23e9305f341dc9626904a413bbe1780a04284d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_89207b379d821041d6141bac610b71561e7b8eae52ffce91b3a7e4373b2c073c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89207b379d821041d6141bac610b71561e7b8eae52ffce91b3a7e4373b2c073c->enter($__internal_89207b379d821041d6141bac610b71561e7b8eae52ffce91b3a7e4373b2c073c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7ec1a89a30cd622ac894aedd1b23e9305f341dc9626904a413bbe1780a04284d->leave($__internal_7ec1a89a30cd622ac894aedd1b23e9305f341dc9626904a413bbe1780a04284d_prof);

        
        $__internal_89207b379d821041d6141bac610b71561e7b8eae52ffce91b3a7e4373b2c073c->leave($__internal_89207b379d821041d6141bac610b71561e7b8eae52ffce91b3a7e4373b2c073c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
