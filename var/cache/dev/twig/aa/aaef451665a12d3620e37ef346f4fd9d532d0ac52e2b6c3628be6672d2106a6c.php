<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_e058bc875ed6d876f2f1792443b157d2b5ed79b88bb5577664029218482f801a extends Twig_Template
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
        $__internal_684e339b92ef816689df53a11c3c81c2c8cb350aae442b652370dc0ba58f6494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684e339b92ef816689df53a11c3c81c2c8cb350aae442b652370dc0ba58f6494->enter($__internal_684e339b92ef816689df53a11c3c81c2c8cb350aae442b652370dc0ba58f6494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_08388df21914b29b0d56f6007df06dbfd770e6f0039f0e3ef411eedf1109a5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08388df21914b29b0d56f6007df06dbfd770e6f0039f0e3ef411eedf1109a5a1->enter($__internal_08388df21914b29b0d56f6007df06dbfd770e6f0039f0e3ef411eedf1109a5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_684e339b92ef816689df53a11c3c81c2c8cb350aae442b652370dc0ba58f6494->leave($__internal_684e339b92ef816689df53a11c3c81c2c8cb350aae442b652370dc0ba58f6494_prof);

        
        $__internal_08388df21914b29b0d56f6007df06dbfd770e6f0039f0e3ef411eedf1109a5a1->leave($__internal_08388df21914b29b0d56f6007df06dbfd770e6f0039f0e3ef411eedf1109a5a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
