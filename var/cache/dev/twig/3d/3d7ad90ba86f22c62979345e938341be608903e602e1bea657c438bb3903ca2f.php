<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_74b225c23315820d6deb744ce44d580381bc6c80203d84429c89218376a0c30a extends Twig_Template
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
        $__internal_a714ecbaeacbe0c57fe3aee3e48ba15014a6f1f3676eeb223fe585ea6b6fb570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a714ecbaeacbe0c57fe3aee3e48ba15014a6f1f3676eeb223fe585ea6b6fb570->enter($__internal_a714ecbaeacbe0c57fe3aee3e48ba15014a6f1f3676eeb223fe585ea6b6fb570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d26ec56d371d15a4ada45c02beea15522d5f4cf9ade1353eb0798abe043cf94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26ec56d371d15a4ada45c02beea15522d5f4cf9ade1353eb0798abe043cf94b->enter($__internal_d26ec56d371d15a4ada45c02beea15522d5f4cf9ade1353eb0798abe043cf94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a714ecbaeacbe0c57fe3aee3e48ba15014a6f1f3676eeb223fe585ea6b6fb570->leave($__internal_a714ecbaeacbe0c57fe3aee3e48ba15014a6f1f3676eeb223fe585ea6b6fb570_prof);

        
        $__internal_d26ec56d371d15a4ada45c02beea15522d5f4cf9ade1353eb0798abe043cf94b->leave($__internal_d26ec56d371d15a4ada45c02beea15522d5f4cf9ade1353eb0798abe043cf94b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
