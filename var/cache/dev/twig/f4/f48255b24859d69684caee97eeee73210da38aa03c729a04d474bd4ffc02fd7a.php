<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_01b1eb9cc67f2b0dcdd28fc534bd4a989143c85b36aacb5eccd2ec09f9378b0b extends Twig_Template
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
        $__internal_c461654b812df776e063c6756bcba7220b324a7573f10de3e6bbaeafe63417fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c461654b812df776e063c6756bcba7220b324a7573f10de3e6bbaeafe63417fd->enter($__internal_c461654b812df776e063c6756bcba7220b324a7573f10de3e6bbaeafe63417fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_747abaaac4874954a5a998d8c01df040986a73f7aa97caad0d63e7282228244e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747abaaac4874954a5a998d8c01df040986a73f7aa97caad0d63e7282228244e->enter($__internal_747abaaac4874954a5a998d8c01df040986a73f7aa97caad0d63e7282228244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c461654b812df776e063c6756bcba7220b324a7573f10de3e6bbaeafe63417fd->leave($__internal_c461654b812df776e063c6756bcba7220b324a7573f10de3e6bbaeafe63417fd_prof);

        
        $__internal_747abaaac4874954a5a998d8c01df040986a73f7aa97caad0d63e7282228244e->leave($__internal_747abaaac4874954a5a998d8c01df040986a73f7aa97caad0d63e7282228244e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
