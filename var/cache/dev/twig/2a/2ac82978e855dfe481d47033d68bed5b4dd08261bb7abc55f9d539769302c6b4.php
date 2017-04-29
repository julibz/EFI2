<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4cb7c3ad3e0ac53c65408ffc47cc76507397a91a58484dbc65fe7fa48d9114be extends Twig_Template
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
        $__internal_c93fc871bc6e500b5a75d2ed895de4598746633800c7b1348a890b05d4ddcffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93fc871bc6e500b5a75d2ed895de4598746633800c7b1348a890b05d4ddcffa->enter($__internal_c93fc871bc6e500b5a75d2ed895de4598746633800c7b1348a890b05d4ddcffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bd829cf9477e9d5b1a3476bcab31215ff1fad9f801c7352d3e22679b713ac5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd829cf9477e9d5b1a3476bcab31215ff1fad9f801c7352d3e22679b713ac5ed->enter($__internal_bd829cf9477e9d5b1a3476bcab31215ff1fad9f801c7352d3e22679b713ac5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c93fc871bc6e500b5a75d2ed895de4598746633800c7b1348a890b05d4ddcffa->leave($__internal_c93fc871bc6e500b5a75d2ed895de4598746633800c7b1348a890b05d4ddcffa_prof);

        
        $__internal_bd829cf9477e9d5b1a3476bcab31215ff1fad9f801c7352d3e22679b713ac5ed->leave($__internal_bd829cf9477e9d5b1a3476bcab31215ff1fad9f801c7352d3e22679b713ac5ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
