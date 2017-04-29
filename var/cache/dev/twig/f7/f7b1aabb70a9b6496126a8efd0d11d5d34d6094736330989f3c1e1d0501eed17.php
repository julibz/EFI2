<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4005d879ea0ac0184634b3fff7d95efe176925e1e4c381a17e33996958dbbe89 extends Twig_Template
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
        $__internal_5328e498aaa70db7c9b1c467e07341651e178fcde4ad1997b37a3370f183005e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5328e498aaa70db7c9b1c467e07341651e178fcde4ad1997b37a3370f183005e->enter($__internal_5328e498aaa70db7c9b1c467e07341651e178fcde4ad1997b37a3370f183005e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b7843c4ef49d20e241fad03c0663df5a4322e5852b26975ae5033ac7e31f3dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7843c4ef49d20e241fad03c0663df5a4322e5852b26975ae5033ac7e31f3dad->enter($__internal_b7843c4ef49d20e241fad03c0663df5a4322e5852b26975ae5033ac7e31f3dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5328e498aaa70db7c9b1c467e07341651e178fcde4ad1997b37a3370f183005e->leave($__internal_5328e498aaa70db7c9b1c467e07341651e178fcde4ad1997b37a3370f183005e_prof);

        
        $__internal_b7843c4ef49d20e241fad03c0663df5a4322e5852b26975ae5033ac7e31f3dad->leave($__internal_b7843c4ef49d20e241fad03c0663df5a4322e5852b26975ae5033ac7e31f3dad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
