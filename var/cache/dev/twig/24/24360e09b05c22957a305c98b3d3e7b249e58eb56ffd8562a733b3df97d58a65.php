<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_531806c14012381e0d41c0763a45811f5491acc2864343c248e6e1869a0c46f6 extends Twig_Template
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
        $__internal_ddfdc29d4172c9d815b5b7ecae5e0575e9f9c80916dfc23ff3fa3737955ff9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfdc29d4172c9d815b5b7ecae5e0575e9f9c80916dfc23ff3fa3737955ff9ab->enter($__internal_ddfdc29d4172c9d815b5b7ecae5e0575e9f9c80916dfc23ff3fa3737955ff9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e1a1d501832284b8785e9df2924783ecbb85fb9e417133701810891b92ca4d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a1d501832284b8785e9df2924783ecbb85fb9e417133701810891b92ca4d39->enter($__internal_e1a1d501832284b8785e9df2924783ecbb85fb9e417133701810891b92ca4d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ddfdc29d4172c9d815b5b7ecae5e0575e9f9c80916dfc23ff3fa3737955ff9ab->leave($__internal_ddfdc29d4172c9d815b5b7ecae5e0575e9f9c80916dfc23ff3fa3737955ff9ab_prof);

        
        $__internal_e1a1d501832284b8785e9df2924783ecbb85fb9e417133701810891b92ca4d39->leave($__internal_e1a1d501832284b8785e9df2924783ecbb85fb9e417133701810891b92ca4d39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
