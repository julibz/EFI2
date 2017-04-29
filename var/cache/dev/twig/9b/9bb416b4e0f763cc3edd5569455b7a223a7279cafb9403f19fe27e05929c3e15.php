<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_babb4d52e0f7b242229db64d6ca1211cc085f847011390caf1dc52989a2d903c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7432f24966d75a2a76dec46cef8816dd0efe904a32547c8fa8a9e0c8122c916f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7432f24966d75a2a76dec46cef8816dd0efe904a32547c8fa8a9e0c8122c916f->enter($__internal_7432f24966d75a2a76dec46cef8816dd0efe904a32547c8fa8a9e0c8122c916f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4f099d34df863a562807acdecc5993f72272ceaf61cc9f02d364573be177e5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f099d34df863a562807acdecc5993f72272ceaf61cc9f02d364573be177e5b1->enter($__internal_4f099d34df863a562807acdecc5993f72272ceaf61cc9f02d364573be177e5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7432f24966d75a2a76dec46cef8816dd0efe904a32547c8fa8a9e0c8122c916f->leave($__internal_7432f24966d75a2a76dec46cef8816dd0efe904a32547c8fa8a9e0c8122c916f_prof);

        
        $__internal_4f099d34df863a562807acdecc5993f72272ceaf61cc9f02d364573be177e5b1->leave($__internal_4f099d34df863a562807acdecc5993f72272ceaf61cc9f02d364573be177e5b1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f79c9b428a1b5dd80eacd14ecaf2e5fc3c5fa2401f8f7fe60bcd9eec869d0eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79c9b428a1b5dd80eacd14ecaf2e5fc3c5fa2401f8f7fe60bcd9eec869d0eb0->enter($__internal_f79c9b428a1b5dd80eacd14ecaf2e5fc3c5fa2401f8f7fe60bcd9eec869d0eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a55ce2e6d7979a1619f80f77fbca46ab4e289b0d015698748b1a793a3f8716a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55ce2e6d7979a1619f80f77fbca46ab4e289b0d015698748b1a793a3f8716a9->enter($__internal_a55ce2e6d7979a1619f80f77fbca46ab4e289b0d015698748b1a793a3f8716a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a55ce2e6d7979a1619f80f77fbca46ab4e289b0d015698748b1a793a3f8716a9->leave($__internal_a55ce2e6d7979a1619f80f77fbca46ab4e289b0d015698748b1a793a3f8716a9_prof);

        
        $__internal_f79c9b428a1b5dd80eacd14ecaf2e5fc3c5fa2401f8f7fe60bcd9eec869d0eb0->leave($__internal_f79c9b428a1b5dd80eacd14ecaf2e5fc3c5fa2401f8f7fe60bcd9eec869d0eb0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
