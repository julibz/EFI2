<?php

/* default/footer.html.twig */
class __TwigTemplate_b1c51f96ec2f56b6e480522e6cd662d191825a3f6367854f027e8e82a56363b1 extends Twig_Template
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
        $__internal_62a2f5347a93eb74cf9dc8d310d23bae8869e966757ccd291969c2186b585de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a2f5347a93eb74cf9dc8d310d23bae8869e966757ccd291969c2186b585de9->enter($__internal_62a2f5347a93eb74cf9dc8d310d23bae8869e966757ccd291969c2186b585de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_bd831eddea06372ea89d7ecf10605dedf3a4493ab59f6ff8ee8c8e1822c507c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd831eddea06372ea89d7ecf10605dedf3a4493ab59f6ff8ee8c8e1822c507c6->enter($__internal_bd831eddea06372ea89d7ecf10605dedf3a4493ab59f6ff8ee8c8e1822c507c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_62a2f5347a93eb74cf9dc8d310d23bae8869e966757ccd291969c2186b585de9->leave($__internal_62a2f5347a93eb74cf9dc8d310d23bae8869e966757ccd291969c2186b585de9_prof);

        
        $__internal_bd831eddea06372ea89d7ecf10605dedf3a4493ab59f6ff8ee8c8e1822c507c6->leave($__internal_bd831eddea06372ea89d7ecf10605dedf3a4493ab59f6ff8ee8c8e1822c507c6_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_ecf9ee5a864a9a3ccd1e915d5b08e31f74fa508b5861046febcae81de33b1db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf9ee5a864a9a3ccd1e915d5b08e31f74fa508b5861046febcae81de33b1db2->enter($__internal_ecf9ee5a864a9a3ccd1e915d5b08e31f74fa508b5861046febcae81de33b1db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_17b6373896ae461c5e31fc2598aef5d2222e7d0376bd4c1398d4a518de032d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b6373896ae461c5e31fc2598aef5d2222e7d0376bd4c1398d4a518de032d20->enter($__internal_17b6373896ae461c5e31fc2598aef5d2222e7d0376bd4c1398d4a518de032d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_17b6373896ae461c5e31fc2598aef5d2222e7d0376bd4c1398d4a518de032d20->leave($__internal_17b6373896ae461c5e31fc2598aef5d2222e7d0376bd4c1398d4a518de032d20_prof);

        
        $__internal_ecf9ee5a864a9a3ccd1e915d5b08e31f74fa508b5861046febcae81de33b1db2->leave($__internal_ecf9ee5a864a9a3ccd1e915d5b08e31f74fa508b5861046febcae81de33b1db2_prof);

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
