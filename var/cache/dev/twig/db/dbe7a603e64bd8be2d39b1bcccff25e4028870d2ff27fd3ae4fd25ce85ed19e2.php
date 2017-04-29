<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24ce05d611dc7dcd07f24d3310cfea0b272d918b2802a41558be4535e6aa33df extends Twig_Template
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
        $__internal_8b2c56eef65d81a3779c460d7bc6ae31efae30bb004051ba5b271eb31c65d3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2c56eef65d81a3779c460d7bc6ae31efae30bb004051ba5b271eb31c65d3e5->enter($__internal_8b2c56eef65d81a3779c460d7bc6ae31efae30bb004051ba5b271eb31c65d3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7b38ebebd6e4868ad8fe62d225497ef42564d894af985805a263c0426e68fb59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b38ebebd6e4868ad8fe62d225497ef42564d894af985805a263c0426e68fb59->enter($__internal_7b38ebebd6e4868ad8fe62d225497ef42564d894af985805a263c0426e68fb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8b2c56eef65d81a3779c460d7bc6ae31efae30bb004051ba5b271eb31c65d3e5->leave($__internal_8b2c56eef65d81a3779c460d7bc6ae31efae30bb004051ba5b271eb31c65d3e5_prof);

        
        $__internal_7b38ebebd6e4868ad8fe62d225497ef42564d894af985805a263c0426e68fb59->leave($__internal_7b38ebebd6e4868ad8fe62d225497ef42564d894af985805a263c0426e68fb59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
