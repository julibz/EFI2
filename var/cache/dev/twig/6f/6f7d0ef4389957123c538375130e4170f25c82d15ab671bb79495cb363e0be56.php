<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4c0a730b85ef2145608a9dc7af1de69714bf933672e1f9ae53af6a5b7e0c17a1 extends Twig_Template
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
        $__internal_21487d9b01aa131d48a649f4d06e4a4850095e63cf3b82cb61b4f85b6409f3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21487d9b01aa131d48a649f4d06e4a4850095e63cf3b82cb61b4f85b6409f3cc->enter($__internal_21487d9b01aa131d48a649f4d06e4a4850095e63cf3b82cb61b4f85b6409f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_83d6c8e1b1cf5a9f1b879d1c797cc20d3a8dc5fb4ed2f50084cad905e02e074b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d6c8e1b1cf5a9f1b879d1c797cc20d3a8dc5fb4ed2f50084cad905e02e074b->enter($__internal_83d6c8e1b1cf5a9f1b879d1c797cc20d3a8dc5fb4ed2f50084cad905e02e074b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_21487d9b01aa131d48a649f4d06e4a4850095e63cf3b82cb61b4f85b6409f3cc->leave($__internal_21487d9b01aa131d48a649f4d06e4a4850095e63cf3b82cb61b4f85b6409f3cc_prof);

        
        $__internal_83d6c8e1b1cf5a9f1b879d1c797cc20d3a8dc5fb4ed2f50084cad905e02e074b->leave($__internal_83d6c8e1b1cf5a9f1b879d1c797cc20d3a8dc5fb4ed2f50084cad905e02e074b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
