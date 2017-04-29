<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3265b239f3e5ac883adc22120e0cf9434857214764b50266c7f81b4d47405d15 extends Twig_Template
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
        $__internal_cc791db192b1ca5e61da2924104ac8331ad39d0f1f988a51a78a9676e687650e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc791db192b1ca5e61da2924104ac8331ad39d0f1f988a51a78a9676e687650e->enter($__internal_cc791db192b1ca5e61da2924104ac8331ad39d0f1f988a51a78a9676e687650e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_97073f4bf989846cf631271b08541ac4a6cdf2001725519596a1e11c5ba9f07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97073f4bf989846cf631271b08541ac4a6cdf2001725519596a1e11c5ba9f07f->enter($__internal_97073f4bf989846cf631271b08541ac4a6cdf2001725519596a1e11c5ba9f07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cc791db192b1ca5e61da2924104ac8331ad39d0f1f988a51a78a9676e687650e->leave($__internal_cc791db192b1ca5e61da2924104ac8331ad39d0f1f988a51a78a9676e687650e_prof);

        
        $__internal_97073f4bf989846cf631271b08541ac4a6cdf2001725519596a1e11c5ba9f07f->leave($__internal_97073f4bf989846cf631271b08541ac4a6cdf2001725519596a1e11c5ba9f07f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
