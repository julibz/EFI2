<?php

/* default/footer.html.twig */
class __TwigTemplate_355476dacfc1bd2489849250f2f6f0dd12b4b4337ccd5d08ee736ada7865c44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_694eb6223df785cb06ac04f8250e5e3274af6422ae3e0929fab64b63ec1140bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694eb6223df785cb06ac04f8250e5e3274af6422ae3e0929fab64b63ec1140bd->enter($__internal_694eb6223df785cb06ac04f8250e5e3274af6422ae3e0929fab64b63ec1140bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_19671313d17f2f942782c9df34693b8d49157c191acced05bc45f5d299b8b1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19671313d17f2f942782c9df34693b8d49157c191acced05bc45f5d299b8b1a5->enter($__internal_19671313d17f2f942782c9df34693b8d49157c191acced05bc45f5d299b8b1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_694eb6223df785cb06ac04f8250e5e3274af6422ae3e0929fab64b63ec1140bd->leave($__internal_694eb6223df785cb06ac04f8250e5e3274af6422ae3e0929fab64b63ec1140bd_prof);

        
        $__internal_19671313d17f2f942782c9df34693b8d49157c191acced05bc45f5d299b8b1a5->leave($__internal_19671313d17f2f942782c9df34693b8d49157c191acced05bc45f5d299b8b1a5_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_256f09c2ec8fab3a43a2f3e97473af32b485038415fe47fcea7e77e9d4980cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256f09c2ec8fab3a43a2f3e97473af32b485038415fe47fcea7e77e9d4980cbd->enter($__internal_256f09c2ec8fab3a43a2f3e97473af32b485038415fe47fcea7e77e9d4980cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7ce75c35851a95cc432de732e85b32d6b5fc1f7eec2031f82d75c4a76e56d5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce75c35851a95cc432de732e85b32d6b5fc1f7eec2031f82d75c4a76e56d5b5->enter($__internal_7ce75c35851a95cc432de732e85b32d6b5fc1f7eec2031f82d75c4a76e56d5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span class=\"copyright\">Julian Baez &copy; PP1 2016</span>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
                ";
        // line 18
        echo "                    ";
        // line 19
        echo "                        ";
        // line 20
        echo "                ";
        // line 21
        echo "            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline quicklinks\">
                    <li><a href=\"#\">Privacy Policy</a>
                    </li>
                    <li><a href=\"#\">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
";
        
        $__internal_7ce75c35851a95cc432de732e85b32d6b5fc1f7eec2031f82d75c4a76e56d5b5->leave($__internal_7ce75c35851a95cc432de732e85b32d6b5fc1f7eec2031f82d75c4a76e56d5b5_prof);

        
        $__internal_256f09c2ec8fab3a43a2f3e97473af32b485038415fe47fcea7e77e9d4980cbd->leave($__internal_256f09c2ec8fab3a43a2f3e97473af32b485038415fe47fcea7e77e9d4980cbd_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  65 => 20,  63 => 19,  61 => 18,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span class=\"copyright\">Julian Baez &copy; PP1 2016</span>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
                {#<ul>#}
                    {#<li>#}
                        {#<button path=\"LangAction\" >Español</button></li>#}
                {#</ul>#}
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline quicklinks\">
                    <li><a href=\"#\">Privacy Policy</a>
                    </li>
                    <li><a href=\"#\">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
{% endblock %}", "default/footer.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/default/footer.html.twig");
    }
}
