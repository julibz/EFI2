<?php

/* modelo/index.html.twig */
class __TwigTemplate_39b4e22182a12596abaf4956472b9295ca239d2e4ed5b8bf88bceffe3322d698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "modelo/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16e34e4a3beba77339eb8badb5d4e6fd77cbdf0e3d81c3acba89354162199ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e34e4a3beba77339eb8badb5d4e6fd77cbdf0e3d81c3acba89354162199ed7->enter($__internal_16e34e4a3beba77339eb8badb5d4e6fd77cbdf0e3d81c3acba89354162199ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/index.html.twig"));

        $__internal_b79e629025087a53d62d4dbfa6e4cba7998a40e29f7621cb311c3f1250b0cd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79e629025087a53d62d4dbfa6e4cba7998a40e29f7621cb311c3f1250b0cd8a->enter($__internal_b79e629025087a53d62d4dbfa6e4cba7998a40e29f7621cb311c3f1250b0cd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16e34e4a3beba77339eb8badb5d4e6fd77cbdf0e3d81c3acba89354162199ed7->leave($__internal_16e34e4a3beba77339eb8badb5d4e6fd77cbdf0e3d81c3acba89354162199ed7_prof);

        
        $__internal_b79e629025087a53d62d4dbfa6e4cba7998a40e29f7621cb311c3f1250b0cd8a->leave($__internal_b79e629025087a53d62d4dbfa6e4cba7998a40e29f7621cb311c3f1250b0cd8a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_752b2fe5574e7b15f6203b4c6c8a4582a27041f8f3c69a763de2e8301801c7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752b2fe5574e7b15f6203b4c6c8a4582a27041f8f3c69a763de2e8301801c7b5->enter($__internal_752b2fe5574e7b15f6203b4c6c8a4582a27041f8f3c69a763de2e8301801c7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5d3995ee3359579b66319a8ca15c14bae783a461c033af373c41d6dd7fb12208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3995ee3359579b66319a8ca15c14bae783a461c033af373c41d6dd7fb12208->enter($__internal_5d3995ee3359579b66319a8ca15c14bae783a461c033af373c41d6dd7fb12208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/agency.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/otros-estilos.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/cards.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/tabs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
        
        $__internal_5d3995ee3359579b66319a8ca15c14bae783a461c033af373c41d6dd7fb12208->leave($__internal_5d3995ee3359579b66319a8ca15c14bae783a461c033af373c41d6dd7fb12208_prof);

        
        $__internal_752b2fe5574e7b15f6203b4c6c8a4582a27041f8f3c69a763de2e8301801c7b5->leave($__internal_752b2fe5574e7b15f6203b4c6c8a4582a27041f8f3c69a763de2e8301801c7b5_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_05096cb81aaffb6ee1e4158909a032cb259b6854fbba44eeb7a9e49c3a7c952d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05096cb81aaffb6ee1e4158909a032cb259b6854fbba44eeb7a9e49c3a7c952d->enter($__internal_05096cb81aaffb6ee1e4158909a032cb259b6854fbba44eeb7a9e49c3a7c952d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1bb009f6985ea09f06db7d0cf0cef4bfb1f7414e6e071784de70d6f74b279cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bb009f6985ea09f06db7d0cf0cef4bfb1f7414e6e071784de70d6f74b279cd->enter($__internal_c1bb009f6985ea09f06db7d0cf0cef4bfb1f7414e6e071784de70d6f74b279cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <div class=\"fondonegro\">
        <br>
        <br>
        <br>
        <br>
        <div id=\"tabs\">
            <input type=\"radio\" name=\"tabs\" id=\"toggle-tab1\" checked=\"checked\" />
            <label for=\"toggle-tab1\">Autos</label>

            <input type=\"radio\" name=\"tabs\" id=\"toggle-tab2\" />
            <label for=\"toggle-tab2\">PickUps</label>



            <div id=\"tab1\" class=\"tab\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modelos"]) ? $context["modelos"] : $this->getContext($context, "modelos")));
        foreach ($context['_seq'] as $context["_key"] => $context["modelo"]) {
            // line 33
            echo "                    ";
            if (($this->getAttribute($context["modelo"], "categoriaModelo", array()) == "Auto")) {
                // line 34
                echo "
                        <div class=\"wrap\">
                            <div class=\"\"><img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("asset/img/" . $this->getAttribute($context["modelo"], "imagenModelo", array()))), "html", null, true);
                echo " \"></div>
                            <div class=\"\">
                                <br>
                                <h4 >";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "nombreModelo", array()), "html", null, true);
                echo "</h4>
                                <p >";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "descripcionModelo", array()), "html", null, true);
                echo " </p>
                                <h5>\$ ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "precio", array()), "html", null, true);
                echo "</h5>
                                ";
                // line 42
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 43
                    echo "                                    <ul>
                                        <li>
                                            <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_show", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                    echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_edit", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                    echo "\">edit</a>
                                        </li>
                                    </ul>
                                ";
                }
                // line 52
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_show", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                echo " class=\"btn\">Ver mas</a>
                                <br>
                            </div>
                        </div>
                    ";
            }
            // line 57
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </div>

            <div id=\"tab2\" class=\"tab\">
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modelos"]) ? $context["modelos"] : $this->getContext($context, "modelos")));
        foreach ($context['_seq'] as $context["_key"] => $context["modelo"]) {
            // line 62
            echo "                    ";
            if (($this->getAttribute($context["modelo"], "categoriaModelo", array()) == "PickUp")) {
                // line 63
                echo "
                        <div class=\"wrap\">
                            <div class=\"\"><img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("asset/img/" . $this->getAttribute($context["modelo"], "imagenModelo", array()))), "html", null, true);
                echo "\"></div>
                            <div class=\"\">
                                <br>
                                <h4 >";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "nombreModelo", array()), "html", null, true);
                echo "</h4>
                                <p >";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "descripcionModelo", array()), "html", null, true);
                echo " </p>
                                <h5>\$ ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "precio", array()), "html", null, true);
                echo "</h5>
                                ";
                // line 71
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 72
                    echo "                                    <ul>
                                        <li>
                                            <a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_show", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                    echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_edit", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                    echo "\">edit</a>
                                        </li>
                                    </ul>
                                ";
                }
                // line 81
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_show", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                echo " class=\"btn\">Ver mas</a>
                            </div>
                        </div>
                    ";
            }
            // line 85
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </div>
        </div>







        ";
        // line 95
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 96
            echo "            <ul>
                <li>
                    <a href=\"";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_new");
            echo "\">Create a new modelo</a>
                </li>
            </ul>
        ";
        }
        // line 102
        echo "    </div>
";
        
        $__internal_c1bb009f6985ea09f06db7d0cf0cef4bfb1f7414e6e071784de70d6f74b279cd->leave($__internal_c1bb009f6985ea09f06db7d0cf0cef4bfb1f7414e6e071784de70d6f74b279cd_prof);

        
        $__internal_05096cb81aaffb6ee1e4158909a032cb259b6854fbba44eeb7a9e49c3a7c952d->leave($__internal_05096cb81aaffb6ee1e4158909a032cb259b6854fbba44eeb7a9e49c3a7c952d_prof);

    }

    public function getTemplateName()
    {
        return "modelo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 102,  262 => 98,  258 => 96,  256 => 95,  245 => 86,  239 => 85,  231 => 81,  224 => 77,  218 => 74,  214 => 72,  212 => 71,  208 => 70,  204 => 69,  200 => 68,  194 => 65,  190 => 63,  187 => 62,  183 => 61,  178 => 58,  172 => 57,  163 => 52,  156 => 48,  150 => 45,  146 => 43,  144 => 42,  140 => 41,  136 => 40,  132 => 39,  126 => 36,  122 => 34,  119 => 33,  115 => 32,  98 => 17,  89 => 16,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link href=\"{{asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('asset/css/agency.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/css/otros-estilos.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/css/cards.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('asset/css/tabs.css') }}\" rel=\"stylesheet\">


{% endblock %}


{% block body %}
    <div class=\"fondonegro\">
        <br>
        <br>
        <br>
        <br>
        <div id=\"tabs\">
            <input type=\"radio\" name=\"tabs\" id=\"toggle-tab1\" checked=\"checked\" />
            <label for=\"toggle-tab1\">Autos</label>

            <input type=\"radio\" name=\"tabs\" id=\"toggle-tab2\" />
            <label for=\"toggle-tab2\">PickUps</label>



            <div id=\"tab1\" class=\"tab\">
                {% for modelo in modelos %}
                    {% if modelo.categoriaModelo==\"Auto\" %}

                        <div class=\"wrap\">
                            <div class=\"\"><img src=\"{{asset('asset/img/'~ modelo.imagenModelo) }} \"></div>
                            <div class=\"\">
                                <br>
                                <h4 >{{ modelo.nombreModelo }}</h4>
                                <p >{{ modelo.descripcionModelo }} </p>
                                <h5>\$ {{ modelo.precio }}</h5>
                                {% if is_granted(\"ROLE_ADMIN\") %}
                                    <ul>
                                        <li>
                                            <a href=\"{{ path('modelo_show', { 'id': modelo.id }) }}\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('modelo_edit', { 'id': modelo.id }) }}\">edit</a>
                                        </li>
                                    </ul>
                                {% endif %}
                                <a href=\"{{ path('modelo_show', { 'id': modelo.id }) }} class=\"btn\">Ver mas</a>
                                <br>
                            </div>
                        </div>
                    {% endif %}
                {% endfor %}
            </div>

            <div id=\"tab2\" class=\"tab\">
                {% for modelo in modelos %}
                    {% if modelo.categoriaModelo==\"PickUp\" %}

                        <div class=\"wrap\">
                            <div class=\"\"><img src=\"{{asset('asset/img/'~ modelo.imagenModelo) }}\"></div>
                            <div class=\"\">
                                <br>
                                <h4 >{{ modelo.nombreModelo }}</h4>
                                <p >{{ modelo.descripcionModelo }} </p>
                                <h5>\$ {{ modelo.precio }}</h5>
                                {% if is_granted(\"ROLE_ADMIN\") %}
                                    <ul>
                                        <li>
                                            <a href=\"{{ path('modelo_show', { 'id': modelo.id }) }}\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('modelo_edit', { 'id': modelo.id }) }}\">edit</a>
                                        </li>
                                    </ul>
                                {% endif %}
                                <a href=\"{{ path('modelo_show', { 'id': modelo.id }) }} class=\"btn\">Ver mas</a>
                            </div>
                        </div>
                    {% endif %}
                {% endfor %}
            </div>
        </div>







        {% if is_granted(\"ROLE_ADMIN\") %}
            <ul>
                <li>
                    <a href=\"{{ path('modelo_new') }}\">Create a new modelo</a>
                </li>
            </ul>
        {% endif %}
    </div>
{% endblock %}
", "modelo/index.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/modelo/index.html.twig");
    }
}
