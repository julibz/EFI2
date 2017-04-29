<?php

/* base.html.twig */
class __TwigTemplate_cecfbd0e262d5cd8b3afee44f1458e7b50e07f20607bd3d4ba7e7eae0d88506c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afb76ff04216402bb2f2c098c56e87761b2beef72f30cafa634ceb81556db661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb76ff04216402bb2f2c098c56e87761b2beef72f30cafa634ceb81556db661->enter($__internal_afb76ff04216402bb2f2c098c56e87761b2beef72f30cafa634ceb81556db661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5e0833e34cce946bfc59b50d562795ccef1be822573a9b34e9194a3e32f967b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0833e34cce946bfc59b50d562795ccef1be822573a9b34e9194a3e32f967b7->enter($__internal_5e0833e34cce946bfc59b50d562795ccef1be822573a9b34e9194a3e32f967b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "</head>

<body id=\"page-top\" class=\"index \">
";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 139
        echo "</body>

</html>
";
        
        $__internal_afb76ff04216402bb2f2c098c56e87761b2beef72f30cafa634ceb81556db661->leave($__internal_afb76ff04216402bb2f2c098c56e87761b2beef72f30cafa634ceb81556db661_prof);

        
        $__internal_5e0833e34cce946bfc59b50d562795ccef1be822573a9b34e9194a3e32f967b7->leave($__internal_5e0833e34cce946bfc59b50d562795ccef1be822573a9b34e9194a3e32f967b7_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_da50c4acbdc460b301d7d61cde3402a19d7ed117c2494e021bcb89443b62e6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da50c4acbdc460b301d7d61cde3402a19d7ed117c2494e021bcb89443b62e6cf->enter($__internal_da50c4acbdc460b301d7d61cde3402a19d7ed117c2494e021bcb89443b62e6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a49d3ca43154a5c5d0c3f2647a5c2005c0c4a6de5714513614a3504db90b533e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49d3ca43154a5c5d0c3f2647a5c2005c0c4a6de5714513614a3504db90b533e->enter($__internal_a49d3ca43154a5c5d0c3f2647a5c2005c0c4a6de5714513614a3504db90b533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido!";
        
        $__internal_a49d3ca43154a5c5d0c3f2647a5c2005c0c4a6de5714513614a3504db90b533e->leave($__internal_a49d3ca43154a5c5d0c3f2647a5c2005c0c4a6de5714513614a3504db90b533e_prof);

        
        $__internal_da50c4acbdc460b301d7d61cde3402a19d7ed117c2494e021bcb89443b62e6cf->leave($__internal_da50c4acbdc460b301d7d61cde3402a19d7ed117c2494e021bcb89443b62e6cf_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4dc5191e614d95bb17b902b44c05f3d36e1ea5e70a1288d8ec98c3c7002869ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc5191e614d95bb17b902b44c05f3d36e1ea5e70a1288d8ec98c3c7002869ee->enter($__internal_4dc5191e614d95bb17b902b44c05f3d36e1ea5e70a1288d8ec98c3c7002869ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d0ea4a35c3806cb7b9a9d21ec1eb49e2f4db48f0b601a1ce11b732bc408911a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ea4a35c3806cb7b9a9d21ec1eb49e2f4db48f0b601a1ce11b732bc408911a3->enter($__internal_d0ea4a35c3806cb7b9a9d21ec1eb49e2f4db48f0b601a1ce11b732bc408911a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/agency.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/otros-estilos.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/material.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/formulario.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        
        $__internal_d0ea4a35c3806cb7b9a9d21ec1eb49e2f4db48f0b601a1ce11b732bc408911a3->leave($__internal_d0ea4a35c3806cb7b9a9d21ec1eb49e2f4db48f0b601a1ce11b732bc408911a3_prof);

        
        $__internal_4dc5191e614d95bb17b902b44c05f3d36e1ea5e70a1288d8ec98c3c7002869ee->leave($__internal_4dc5191e614d95bb17b902b44c05f3d36e1ea5e70a1288d8ec98c3c7002869ee_prof);

    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        $__internal_23bdb1fd9cc0ba2e1c0b426bd95f2871012918f1fd7d3ffa55dd1c46a50c3304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bdb1fd9cc0ba2e1c0b426bd95f2871012918f1fd7d3ffa55dd1c46a50c3304->enter($__internal_23bdb1fd9cc0ba2e1c0b426bd95f2871012918f1fd7d3ffa55dd1c46a50c3304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3072f53185abff4d75df26284b7228c8406c585ec5262e3a7e3b744409d1c097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3072f53185abff4d75df26284b7228c8406c585ec5262e3a7e3b744409d1c097->enter($__internal_3072f53185abff4d75df26284b7228c8406c585ec5262e3a7e3b744409d1c097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 30
        echo "    ";
        $this->loadTemplate("default/header.html.twig", "base.html.twig", 30)->display($context);
        
        $__internal_3072f53185abff4d75df26284b7228c8406c585ec5262e3a7e3b744409d1c097->leave($__internal_3072f53185abff4d75df26284b7228c8406c585ec5262e3a7e3b744409d1c097_prof);

        
        $__internal_23bdb1fd9cc0ba2e1c0b426bd95f2871012918f1fd7d3ffa55dd1c46a50c3304->leave($__internal_23bdb1fd9cc0ba2e1c0b426bd95f2871012918f1fd7d3ffa55dd1c46a50c3304_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_343d5d3674a5e6d906225da8f1a4acc661e95ed72d68175d4102804ccff3d3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343d5d3674a5e6d906225da8f1a4acc661e95ed72d68175d4102804ccff3d3fe->enter($__internal_343d5d3674a5e6d906225da8f1a4acc661e95ed72d68175d4102804ccff3d3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adacc2439a95fe0b9754c573c2a05d6c9941b6d67f113cb6b2b5dd5bb9063b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adacc2439a95fe0b9754c573c2a05d6c9941b6d67f113cb6b2b5dd5bb9063b9a->enter($__internal_adacc2439a95fe0b9754c573c2a05d6c9941b6d67f113cb6b2b5dd5bb9063b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    <header>  ";
        // line 35
        echo "        <div class=\"container\">
            <div class=\"intro-text\">
                <div class=\"intro-lead-in\">Bienvenido a CHEVROLET</div>
                <div class=\"intro-heading\">TERMINÁ EL AÑO BIEN ARRIBA. ARRIBA DE UN CHEVROLET.</div>
                <a href=\"#services\" class=\"page-scroll btn btn-xl\">Conoce mas!</a>
            </div>
        </div>
    </header>

<section id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">Services</h2>
                <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class=\"row text-center\">
            <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">E-Commerce</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-laptop fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">Responsive Design</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-lock fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">Web Security</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>
<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">Contactanos</h2>
                <h3 class=\"section-subheading text-muted\">Envia tus consultas aqui</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <form action=\"/enviar\" method=\"POST\" id=\"contactForm\" novalidate>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Nombre y apellido\" name=\"nombre\" required data-validation-required-message=\"Profavor ingresa tu nombre\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control\" placeholder=\"Tu email\" name=\"desde\" required data-validation-required-message=\"Profavor ingresa tu email\">
                                <p class=\"help-block text-danger\"></p>
                              </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" placeholder=\"Escribe tu mensaje\" name=\"mensaje\" required data-validation-required-message=\"Profavor ingresa tu mensaje\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-lg-12 text-center\">
                            <div id=\"success\"></div>
                            <button type=\"submit\" class=\"btn btn-xl\">Enviar mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

";
        
        $__internal_adacc2439a95fe0b9754c573c2a05d6c9941b6d67f113cb6b2b5dd5bb9063b9a->leave($__internal_adacc2439a95fe0b9754c573c2a05d6c9941b6d67f113cb6b2b5dd5bb9063b9a_prof);

        
        $__internal_343d5d3674a5e6d906225da8f1a4acc661e95ed72d68175d4102804ccff3d3fe->leave($__internal_343d5d3674a5e6d906225da8f1a4acc661e95ed72d68175d4102804ccff3d3fe_prof);

    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e17ff677b52e0d4c18679d9f0c394dbecce7b8ca61a893469c3c43c523c3efbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17ff677b52e0d4c18679d9f0c394dbecce7b8ca61a893469c3c43c523c3efbc->enter($__internal_e17ff677b52e0d4c18679d9f0c394dbecce7b8ca61a893469c3c43c523c3efbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7ecd219c499bfd1cc893b10d44057abf69a142897af61e3b1643a68acc89ebf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecd219c499bfd1cc893b10d44057abf69a142897af61e3b1643a68acc89ebf6->enter($__internal_7ecd219c499bfd1cc893b10d44057abf69a142897af61e3b1643a68acc89ebf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 123
        echo "    ";
        $this->loadTemplate("default/footer.html.twig", "base.html.twig", 123)->display($context);
        
        $__internal_7ecd219c499bfd1cc893b10d44057abf69a142897af61e3b1643a68acc89ebf6->leave($__internal_7ecd219c499bfd1cc893b10d44057abf69a142897af61e3b1643a68acc89ebf6_prof);

        
        $__internal_e17ff677b52e0d4c18679d9f0c394dbecce7b8ca61a893469c3c43c523c3efbc->leave($__internal_e17ff677b52e0d4c18679d9f0c394dbecce7b8ca61a893469c3c43c523c3efbc_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92a119cf0ee89b7ad4b1b1956c2753a142dae5f7bb40e4b7d278bf16e2138829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a119cf0ee89b7ad4b1b1956c2753a142dae5f7bb40e4b7d278bf16e2138829->enter($__internal_92a119cf0ee89b7ad4b1b1956c2753a142dae5f7bb40e4b7d278bf16e2138829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3672e8424f5c87f9f9ff7ac601a498e2cb6860873c89ab1793a7f3719148ffeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3672e8424f5c87f9f9ff7ac601a498e2cb6860873c89ab1793a7f3719148ffeb->enter($__internal_3672e8424f5c87f9f9ff7ac601a498e2cb6860873c89ab1793a7f3719148ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/agency.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/material.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/filtro.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3672e8424f5c87f9f9ff7ac601a498e2cb6860873c89ab1793a7f3719148ffeb->leave($__internal_3672e8424f5c87f9f9ff7ac601a498e2cb6860873c89ab1793a7f3719148ffeb_prof);

        
        $__internal_92a119cf0ee89b7ad4b1b1956c2753a142dae5f7bb40e4b7d278bf16e2138829->leave($__internal_92a119cf0ee89b7ad4b1b1956c2753a142dae5f7bb40e4b7d278bf16e2138829_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  341 => 137,  337 => 136,  333 => 135,  329 => 134,  325 => 133,  321 => 132,  316 => 130,  312 => 129,  308 => 127,  299 => 126,  288 => 123,  279 => 122,  184 => 35,  182 => 34,  173 => 33,  162 => 30,  153 => 29,  140 => 23,  136 => 22,  132 => 21,  128 => 20,  124 => 19,  116 => 14,  111 => 13,  102 => 12,  84 => 10,  71 => 139,  69 => 126,  66 => 125,  64 => 122,  61 => 121,  59 => 33,  56 => 32,  54 => 29,  49 => 26,  47 => 12,  42 => 10,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Bienvenido!{% endblock %}</title>

    {% block stylesheets %}
    <link href=\"{{asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href=\"{{asset('asset/css/agency.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/css/otros-estilos.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/css/material.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/css/formulario.css') }}\" rel=\"stylesheet\">

    {% endblock %}
</head>

<body id=\"page-top\" class=\"index \">
{% block header %}
    {% include 'default/header.html.twig' %}
{% endblock %}

{% block body %}
    <header>  {#no es el \"header\", es parte de la seccion principal#}
        <div class=\"container\">
            <div class=\"intro-text\">
                <div class=\"intro-lead-in\">Bienvenido a CHEVROLET</div>
                <div class=\"intro-heading\">TERMINÁ EL AÑO BIEN ARRIBA. ARRIBA DE UN CHEVROLET.</div>
                <a href=\"#services\" class=\"page-scroll btn btn-xl\">Conoce mas!</a>
            </div>
        </div>
    </header>

<section id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">Services</h2>
                <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class=\"row text-center\">
            <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">E-Commerce</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-laptop fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">Responsive Design</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-lock fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">Web Security</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>
<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">Contactanos</h2>
                <h3 class=\"section-subheading text-muted\">Envia tus consultas aqui</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <form action=\"/enviar\" method=\"POST\" id=\"contactForm\" novalidate>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Nombre y apellido\" name=\"nombre\" required data-validation-required-message=\"Profavor ingresa tu nombre\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control\" placeholder=\"Tu email\" name=\"desde\" required data-validation-required-message=\"Profavor ingresa tu email\">
                                <p class=\"help-block text-danger\"></p>
                              </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" placeholder=\"Escribe tu mensaje\" name=\"mensaje\" required data-validation-required-message=\"Profavor ingresa tu mensaje\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-lg-12 text-center\">
                            <div id=\"success\"></div>
                            <button type=\"submit\" class=\"btn btn-xl\">Enviar mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{% endblock %}

{% block footer %}
    {% include 'default/footer.html.twig' %}
{% endblock %}

{% block javascripts %}
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<script src=\"{{asset('asset/vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{asset('asset/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
<script src=\"{{asset('asset/js/jqBootstrapValidation.js') }}\"></script>
<script src=\"{{asset('asset/js/agency.min.js') }}\"></script>
<script src=\"{{asset('asset/js/jquery.min.js') }}\"></script>
<script src=\"{{asset('asset/js/bootstrap.js') }}\"></script>
<script src=\"{{asset('asset/js/material.js') }}\"></script>
<script src=\"{{asset('asset/js/filtro.js') }}\"></script>
{% endblock %}
</body>

</html>
", "base.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/base.html.twig");
    }
}
