<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b87617d8262ca5c3d1a474b959f7dd078d78c594eee4f1a75c5ed7b4bd027e67 extends Twig_Template
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
        $__internal_d974603da30e8db9083f9abd213c4708fb632d9b5e64820d85eda54e5fce6cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d974603da30e8db9083f9abd213c4708fb632d9b5e64820d85eda54e5fce6cbd->enter($__internal_d974603da30e8db9083f9abd213c4708fb632d9b5e64820d85eda54e5fce6cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1c6e59ed55d9d56d144a32a9e1c1888df6eda25552f60df00cc63ae3f69aa92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6e59ed55d9d56d144a32a9e1c1888df6eda25552f60df00cc63ae3f69aa92d->enter($__internal_1c6e59ed55d9d56d144a32a9e1c1888df6eda25552f60df00cc63ae3f69aa92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d974603da30e8db9083f9abd213c4708fb632d9b5e64820d85eda54e5fce6cbd->leave($__internal_d974603da30e8db9083f9abd213c4708fb632d9b5e64820d85eda54e5fce6cbd_prof);

        
        $__internal_1c6e59ed55d9d56d144a32a9e1c1888df6eda25552f60df00cc63ae3f69aa92d->leave($__internal_1c6e59ed55d9d56d144a32a9e1c1888df6eda25552f60df00cc63ae3f69aa92d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
