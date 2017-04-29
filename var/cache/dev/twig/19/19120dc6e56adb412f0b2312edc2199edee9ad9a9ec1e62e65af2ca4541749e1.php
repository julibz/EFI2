<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5f70ed2181e768d9bec6ac271e7705c591be5e5fc0b18a597166ad26ad26d4d3 extends Twig_Template
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
        $__internal_0014131fa9e419ae510af47bbb1308d78e70ed87267151481d57f0a3ff1c89c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0014131fa9e419ae510af47bbb1308d78e70ed87267151481d57f0a3ff1c89c5->enter($__internal_0014131fa9e419ae510af47bbb1308d78e70ed87267151481d57f0a3ff1c89c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bae6c73eca2dd190de3d09e4270eb4f012fcbb2b1ce0ebf8b668ec5ab6582e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae6c73eca2dd190de3d09e4270eb4f012fcbb2b1ce0ebf8b668ec5ab6582e49->enter($__internal_bae6c73eca2dd190de3d09e4270eb4f012fcbb2b1ce0ebf8b668ec5ab6582e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0014131fa9e419ae510af47bbb1308d78e70ed87267151481d57f0a3ff1c89c5->leave($__internal_0014131fa9e419ae510af47bbb1308d78e70ed87267151481d57f0a3ff1c89c5_prof);

        
        $__internal_bae6c73eca2dd190de3d09e4270eb4f012fcbb2b1ce0ebf8b668ec5ab6582e49->leave($__internal_bae6c73eca2dd190de3d09e4270eb4f012fcbb2b1ce0ebf8b668ec5ab6582e49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
