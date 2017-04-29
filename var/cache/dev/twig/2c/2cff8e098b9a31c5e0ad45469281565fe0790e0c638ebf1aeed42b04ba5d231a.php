<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a6105d6f253dd3a1b7c119604b210340bc0c93a2028eff5cc694f2a2d03ab4a4 extends Twig_Template
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
        $__internal_0d52f0b13d3eebe387a3ce399cf7456e168c4afd5a3c8d6be739e406324b94b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d52f0b13d3eebe387a3ce399cf7456e168c4afd5a3c8d6be739e406324b94b2->enter($__internal_0d52f0b13d3eebe387a3ce399cf7456e168c4afd5a3c8d6be739e406324b94b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_04b41f3a70b711ae0cf63bc485683dc9bb4f09a2463aa970b53f4c5eb4f657c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b41f3a70b711ae0cf63bc485683dc9bb4f09a2463aa970b53f4c5eb4f657c3->enter($__internal_04b41f3a70b711ae0cf63bc485683dc9bb4f09a2463aa970b53f4c5eb4f657c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0d52f0b13d3eebe387a3ce399cf7456e168c4afd5a3c8d6be739e406324b94b2->leave($__internal_0d52f0b13d3eebe387a3ce399cf7456e168c4afd5a3c8d6be739e406324b94b2_prof);

        
        $__internal_04b41f3a70b711ae0cf63bc485683dc9bb4f09a2463aa970b53f4c5eb4f657c3->leave($__internal_04b41f3a70b711ae0cf63bc485683dc9bb4f09a2463aa970b53f4c5eb4f657c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
