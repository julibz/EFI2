<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3ef6e62721d94d25ff51238f0004488140e4d75d5395ce13a350b6b50bc1c1ea extends Twig_Template
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
        $__internal_04c6b8e23ba2073a91c8788830b95f36a2a7c3a3770f7d32b8de66e34e7a3647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c6b8e23ba2073a91c8788830b95f36a2a7c3a3770f7d32b8de66e34e7a3647->enter($__internal_04c6b8e23ba2073a91c8788830b95f36a2a7c3a3770f7d32b8de66e34e7a3647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f2aac1113ddb9ad1e89fab8ffffd8eee3a8ab219659852c625051d19dcd91a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2aac1113ddb9ad1e89fab8ffffd8eee3a8ab219659852c625051d19dcd91a27->enter($__internal_f2aac1113ddb9ad1e89fab8ffffd8eee3a8ab219659852c625051d19dcd91a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_04c6b8e23ba2073a91c8788830b95f36a2a7c3a3770f7d32b8de66e34e7a3647->leave($__internal_04c6b8e23ba2073a91c8788830b95f36a2a7c3a3770f7d32b8de66e34e7a3647_prof);

        
        $__internal_f2aac1113ddb9ad1e89fab8ffffd8eee3a8ab219659852c625051d19dcd91a27->leave($__internal_f2aac1113ddb9ad1e89fab8ffffd8eee3a8ab219659852c625051d19dcd91a27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
