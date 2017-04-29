<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4b33586f1a3884fec411e1d47871f9fa47e9bbb94204646152c34b2d3e29d5ee extends Twig_Template
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
        $__internal_dd1a23394aa3c64dc5729e6ba1adc999eefda342540d6168c0f95decee882f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1a23394aa3c64dc5729e6ba1adc999eefda342540d6168c0f95decee882f03->enter($__internal_dd1a23394aa3c64dc5729e6ba1adc999eefda342540d6168c0f95decee882f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6abf694cdedb1dd3e47d466b6ba85b57667f37333b3247eea112ac89f149cc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abf694cdedb1dd3e47d466b6ba85b57667f37333b3247eea112ac89f149cc96->enter($__internal_6abf694cdedb1dd3e47d466b6ba85b57667f37333b3247eea112ac89f149cc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dd1a23394aa3c64dc5729e6ba1adc999eefda342540d6168c0f95decee882f03->leave($__internal_dd1a23394aa3c64dc5729e6ba1adc999eefda342540d6168c0f95decee882f03_prof);

        
        $__internal_6abf694cdedb1dd3e47d466b6ba85b57667f37333b3247eea112ac89f149cc96->leave($__internal_6abf694cdedb1dd3e47d466b6ba85b57667f37333b3247eea112ac89f149cc96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
