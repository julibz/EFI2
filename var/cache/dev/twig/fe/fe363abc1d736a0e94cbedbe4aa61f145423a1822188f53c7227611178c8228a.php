<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_588c7510210c46a18132b9ad6b42bc09bc6e11156e843a26dcab6f68d060b0f9 extends Twig_Template
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
        $__internal_8dba053a62af6c6c4925d55d193b33a9730fac846655c10a95aaf75334836767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dba053a62af6c6c4925d55d193b33a9730fac846655c10a95aaf75334836767->enter($__internal_8dba053a62af6c6c4925d55d193b33a9730fac846655c10a95aaf75334836767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_df5286ac857bea90bab33e5c2a506bf87bb2ffc5a9e310a3c04dccca20ae7732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5286ac857bea90bab33e5c2a506bf87bb2ffc5a9e310a3c04dccca20ae7732->enter($__internal_df5286ac857bea90bab33e5c2a506bf87bb2ffc5a9e310a3c04dccca20ae7732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8dba053a62af6c6c4925d55d193b33a9730fac846655c10a95aaf75334836767->leave($__internal_8dba053a62af6c6c4925d55d193b33a9730fac846655c10a95aaf75334836767_prof);

        
        $__internal_df5286ac857bea90bab33e5c2a506bf87bb2ffc5a9e310a3c04dccca20ae7732->leave($__internal_df5286ac857bea90bab33e5c2a506bf87bb2ffc5a9e310a3c04dccca20ae7732_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/julian/Julian_Symfony/EFI2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
