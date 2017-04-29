<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_df9c8498d63bdfe13ca23433f1270b22335d475b59f6f5a696446e6da2e2362c extends Twig_Template
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
        $__internal_18b07ad742fd53198b9e1c411ba3105d5b55ca5d9d72b0938c25c287fabb2905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b07ad742fd53198b9e1c411ba3105d5b55ca5d9d72b0938c25c287fabb2905->enter($__internal_18b07ad742fd53198b9e1c411ba3105d5b55ca5d9d72b0938c25c287fabb2905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_aa0f6edfdc97c9108f7a05fcd02afd7643f7da3b91b744abdfe566e831e6dee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0f6edfdc97c9108f7a05fcd02afd7643f7da3b91b744abdfe566e831e6dee4->enter($__internal_aa0f6edfdc97c9108f7a05fcd02afd7643f7da3b91b744abdfe566e831e6dee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_18b07ad742fd53198b9e1c411ba3105d5b55ca5d9d72b0938c25c287fabb2905->leave($__internal_18b07ad742fd53198b9e1c411ba3105d5b55ca5d9d72b0938c25c287fabb2905_prof);

        
        $__internal_aa0f6edfdc97c9108f7a05fcd02afd7643f7da3b91b744abdfe566e831e6dee4->leave($__internal_aa0f6edfdc97c9108f7a05fcd02afd7643f7da3b91b744abdfe566e831e6dee4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
