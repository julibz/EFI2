<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fa6548139acf03165f71fe6ba497c62c5e44336175382eee6ed6deb6681c39c6 extends Twig_Template
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
        $__internal_a5de2732e40ea4ebfabae9a950f63f98583ed42768d1702b7e73ba0b171dc325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5de2732e40ea4ebfabae9a950f63f98583ed42768d1702b7e73ba0b171dc325->enter($__internal_a5de2732e40ea4ebfabae9a950f63f98583ed42768d1702b7e73ba0b171dc325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_420042b6e687b32e8b98b386ed193fddea65485167bf120f8076376f2199ea7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420042b6e687b32e8b98b386ed193fddea65485167bf120f8076376f2199ea7b->enter($__internal_420042b6e687b32e8b98b386ed193fddea65485167bf120f8076376f2199ea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a5de2732e40ea4ebfabae9a950f63f98583ed42768d1702b7e73ba0b171dc325->leave($__internal_a5de2732e40ea4ebfabae9a950f63f98583ed42768d1702b7e73ba0b171dc325_prof);

        
        $__internal_420042b6e687b32e8b98b386ed193fddea65485167bf120f8076376f2199ea7b->leave($__internal_420042b6e687b32e8b98b386ed193fddea65485167bf120f8076376f2199ea7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
