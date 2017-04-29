<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_dc472d8e2db3861645ab9adb895c21131eafa1a624cc9afb707963e64c7fb224 extends Twig_Template
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
        $__internal_6485c62d8fa1408b4d80af6d824b8a5814c8242a779244172e9cc3e9523a590b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6485c62d8fa1408b4d80af6d824b8a5814c8242a779244172e9cc3e9523a590b->enter($__internal_6485c62d8fa1408b4d80af6d824b8a5814c8242a779244172e9cc3e9523a590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_834bd76fe0fa0c1158aff1f71377ecc2174a9a665b644918e530b78a29daa074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834bd76fe0fa0c1158aff1f71377ecc2174a9a665b644918e530b78a29daa074->enter($__internal_834bd76fe0fa0c1158aff1f71377ecc2174a9a665b644918e530b78a29daa074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6485c62d8fa1408b4d80af6d824b8a5814c8242a779244172e9cc3e9523a590b->leave($__internal_6485c62d8fa1408b4d80af6d824b8a5814c8242a779244172e9cc3e9523a590b_prof);

        
        $__internal_834bd76fe0fa0c1158aff1f71377ecc2174a9a665b644918e530b78a29daa074->leave($__internal_834bd76fe0fa0c1158aff1f71377ecc2174a9a665b644918e530b78a29daa074_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
