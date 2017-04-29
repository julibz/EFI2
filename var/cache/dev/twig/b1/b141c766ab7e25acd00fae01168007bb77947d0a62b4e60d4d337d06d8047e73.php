<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_963a90d168b83e10df88b4e828643e9fcb653b765d6b10e08501cad24828ddd4 extends Twig_Template
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
        $__internal_1eb5bdf3319f377b0637b1f0d7140ceddc64ecc3371456cfac4a10773884ad99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb5bdf3319f377b0637b1f0d7140ceddc64ecc3371456cfac4a10773884ad99->enter($__internal_1eb5bdf3319f377b0637b1f0d7140ceddc64ecc3371456cfac4a10773884ad99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1646813db52ead2042303acfd6dcca7698a144ea04e6bc7a1184b2d99fd3e658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1646813db52ead2042303acfd6dcca7698a144ea04e6bc7a1184b2d99fd3e658->enter($__internal_1646813db52ead2042303acfd6dcca7698a144ea04e6bc7a1184b2d99fd3e658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1eb5bdf3319f377b0637b1f0d7140ceddc64ecc3371456cfac4a10773884ad99->leave($__internal_1eb5bdf3319f377b0637b1f0d7140ceddc64ecc3371456cfac4a10773884ad99_prof);

        
        $__internal_1646813db52ead2042303acfd6dcca7698a144ea04e6bc7a1184b2d99fd3e658->leave($__internal_1646813db52ead2042303acfd6dcca7698a144ea04e6bc7a1184b2d99fd3e658_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
