<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3a8ade9edf16950e8ab6c184caccff5c0b4f4f114ede523037736d9b8f160bb0 extends Twig_Template
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
        $__internal_56c2fafb4e31be364ee0ea54d9938def954859542c3ea980d4eb1b390ff57f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c2fafb4e31be364ee0ea54d9938def954859542c3ea980d4eb1b390ff57f74->enter($__internal_56c2fafb4e31be364ee0ea54d9938def954859542c3ea980d4eb1b390ff57f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0fd5e2148ceedc7ab47207955a527f16177e24795c9fc8af533ba87efcb1f772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd5e2148ceedc7ab47207955a527f16177e24795c9fc8af533ba87efcb1f772->enter($__internal_0fd5e2148ceedc7ab47207955a527f16177e24795c9fc8af533ba87efcb1f772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_56c2fafb4e31be364ee0ea54d9938def954859542c3ea980d4eb1b390ff57f74->leave($__internal_56c2fafb4e31be364ee0ea54d9938def954859542c3ea980d4eb1b390ff57f74_prof);

        
        $__internal_0fd5e2148ceedc7ab47207955a527f16177e24795c9fc8af533ba87efcb1f772->leave($__internal_0fd5e2148ceedc7ab47207955a527f16177e24795c9fc8af533ba87efcb1f772_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
