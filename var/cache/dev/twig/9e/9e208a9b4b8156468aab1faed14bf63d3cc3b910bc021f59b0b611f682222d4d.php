<?php

/* base.html.twig */
class __TwigTemplate_6d15c0493a09b46d64a8f6a14922507ce1305ba8775af52baa74c9192591cd7d extends Twig_Template
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
        $__internal_d885677a43cb866a25b82dfb35f26ac7f4cac8e6de1884fb672590868639c5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d885677a43cb866a25b82dfb35f26ac7f4cac8e6de1884fb672590868639c5dc->enter($__internal_d885677a43cb866a25b82dfb35f26ac7f4cac8e6de1884fb672590868639c5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c52eec1e3dd8d0b9883d1077d192eff88209c674039e52e332fca51a16bd435d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52eec1e3dd8d0b9883d1077d192eff88209c674039e52e332fca51a16bd435d->enter($__internal_c52eec1e3dd8d0b9883d1077d192eff88209c674039e52e332fca51a16bd435d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d885677a43cb866a25b82dfb35f26ac7f4cac8e6de1884fb672590868639c5dc->leave($__internal_d885677a43cb866a25b82dfb35f26ac7f4cac8e6de1884fb672590868639c5dc_prof);

        
        $__internal_c52eec1e3dd8d0b9883d1077d192eff88209c674039e52e332fca51a16bd435d->leave($__internal_c52eec1e3dd8d0b9883d1077d192eff88209c674039e52e332fca51a16bd435d_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfaf23bd48aadc79004371622fdcd485ef520df75c6a2407e0e4d28beb0f38f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfaf23bd48aadc79004371622fdcd485ef520df75c6a2407e0e4d28beb0f38f9->enter($__internal_cfaf23bd48aadc79004371622fdcd485ef520df75c6a2407e0e4d28beb0f38f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9b4e96e40e441fc624aa00a94b7e96e76561fa9809b5a802dbd49efca8cc3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b4e96e40e441fc624aa00a94b7e96e76561fa9809b5a802dbd49efca8cc3cd->enter($__internal_a9b4e96e40e441fc624aa00a94b7e96e76561fa9809b5a802dbd49efca8cc3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido!";
        
        $__internal_a9b4e96e40e441fc624aa00a94b7e96e76561fa9809b5a802dbd49efca8cc3cd->leave($__internal_a9b4e96e40e441fc624aa00a94b7e96e76561fa9809b5a802dbd49efca8cc3cd_prof);

        
        $__internal_cfaf23bd48aadc79004371622fdcd485ef520df75c6a2407e0e4d28beb0f38f9->leave($__internal_cfaf23bd48aadc79004371622fdcd485ef520df75c6a2407e0e4d28beb0f38f9_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec203027e8271f728e76467dadb6dc961217c5a41e94e1fda26e1e938705866a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec203027e8271f728e76467dadb6dc961217c5a41e94e1fda26e1e938705866a->enter($__internal_ec203027e8271f728e76467dadb6dc961217c5a41e94e1fda26e1e938705866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_204e1fb448330e8997632f6bb5c26e618e313377b6acb6dbbd3cc742d37c6199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204e1fb448330e8997632f6bb5c26e618e313377b6acb6dbbd3cc742d37c6199->enter($__internal_204e1fb448330e8997632f6bb5c26e618e313377b6acb6dbbd3cc742d37c6199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_204e1fb448330e8997632f6bb5c26e618e313377b6acb6dbbd3cc742d37c6199->leave($__internal_204e1fb448330e8997632f6bb5c26e618e313377b6acb6dbbd3cc742d37c6199_prof);

        
        $__internal_ec203027e8271f728e76467dadb6dc961217c5a41e94e1fda26e1e938705866a->leave($__internal_ec203027e8271f728e76467dadb6dc961217c5a41e94e1fda26e1e938705866a_prof);

    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        $__internal_91932f3bc0887f1080b86b17d86424ee6dad5e033b27208bf5b50b0a8d7eb3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91932f3bc0887f1080b86b17d86424ee6dad5e033b27208bf5b50b0a8d7eb3a8->enter($__internal_91932f3bc0887f1080b86b17d86424ee6dad5e033b27208bf5b50b0a8d7eb3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_315483d5bc64e8669bc66e328f05598630017e6a713d03f5a51462cdaedf073a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315483d5bc64e8669bc66e328f05598630017e6a713d03f5a51462cdaedf073a->enter($__internal_315483d5bc64e8669bc66e328f05598630017e6a713d03f5a51462cdaedf073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 30
        echo "    ";
        $this->loadTemplate("default/header.html.twig", "base.html.twig", 30)->display($context);
        
        $__internal_315483d5bc64e8669bc66e328f05598630017e6a713d03f5a51462cdaedf073a->leave($__internal_315483d5bc64e8669bc66e328f05598630017e6a713d03f5a51462cdaedf073a_prof);

        
        $__internal_91932f3bc0887f1080b86b17d86424ee6dad5e033b27208bf5b50b0a8d7eb3a8->leave($__internal_91932f3bc0887f1080b86b17d86424ee6dad5e033b27208bf5b50b0a8d7eb3a8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_248cb40b181d41d1809dc7f83c830a5c5e64e1ab699819649fc6da0611d43f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248cb40b181d41d1809dc7f83c830a5c5e64e1ab699819649fc6da0611d43f41->enter($__internal_248cb40b181d41d1809dc7f83c830a5c5e64e1ab699819649fc6da0611d43f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1af5106f109e526288867b9f0d2e19942724945d3d9535cd0c52fca512032a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af5106f109e526288867b9f0d2e19942724945d3d9535cd0c52fca512032a51->enter($__internal_1af5106f109e526288867b9f0d2e19942724945d3d9535cd0c52fca512032a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1af5106f109e526288867b9f0d2e19942724945d3d9535cd0c52fca512032a51->leave($__internal_1af5106f109e526288867b9f0d2e19942724945d3d9535cd0c52fca512032a51_prof);

        
        $__internal_248cb40b181d41d1809dc7f83c830a5c5e64e1ab699819649fc6da0611d43f41->leave($__internal_248cb40b181d41d1809dc7f83c830a5c5e64e1ab699819649fc6da0611d43f41_prof);

    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c7d8b7c485da7f7656272a605fa127dea56efd1d2f5ac2d23db3aadbcc268c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d8b7c485da7f7656272a605fa127dea56efd1d2f5ac2d23db3aadbcc268c42->enter($__internal_c7d8b7c485da7f7656272a605fa127dea56efd1d2f5ac2d23db3aadbcc268c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_129aa13b4d8ab00e577ecba7727203f40b208750b25f2fe72970b339765328fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129aa13b4d8ab00e577ecba7727203f40b208750b25f2fe72970b339765328fc->enter($__internal_129aa13b4d8ab00e577ecba7727203f40b208750b25f2fe72970b339765328fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 123
        echo "    ";
        $this->loadTemplate("default/footer.html.twig", "base.html.twig", 123)->display($context);
        
        $__internal_129aa13b4d8ab00e577ecba7727203f40b208750b25f2fe72970b339765328fc->leave($__internal_129aa13b4d8ab00e577ecba7727203f40b208750b25f2fe72970b339765328fc_prof);

        
        $__internal_c7d8b7c485da7f7656272a605fa127dea56efd1d2f5ac2d23db3aadbcc268c42->leave($__internal_c7d8b7c485da7f7656272a605fa127dea56efd1d2f5ac2d23db3aadbcc268c42_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5361bd9328fea1f6c6c3286ab4b0ec440fba0ae28bbe505880bdd0e0d4795291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5361bd9328fea1f6c6c3286ab4b0ec440fba0ae28bbe505880bdd0e0d4795291->enter($__internal_5361bd9328fea1f6c6c3286ab4b0ec440fba0ae28bbe505880bdd0e0d4795291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4de4866c497aec5487740ae0d13ab5cd9b77cd20c0865a864261a8f1071bd567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de4866c497aec5487740ae0d13ab5cd9b77cd20c0865a864261a8f1071bd567->enter($__internal_4de4866c497aec5487740ae0d13ab5cd9b77cd20c0865a864261a8f1071bd567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4de4866c497aec5487740ae0d13ab5cd9b77cd20c0865a864261a8f1071bd567->leave($__internal_4de4866c497aec5487740ae0d13ab5cd9b77cd20c0865a864261a8f1071bd567_prof);

        
        $__internal_5361bd9328fea1f6c6c3286ab4b0ec440fba0ae28bbe505880bdd0e0d4795291->leave($__internal_5361bd9328fea1f6c6c3286ab4b0ec440fba0ae28bbe505880bdd0e0d4795291_prof);

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
