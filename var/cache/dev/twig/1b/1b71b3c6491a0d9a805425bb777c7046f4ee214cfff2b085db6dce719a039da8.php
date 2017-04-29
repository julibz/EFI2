<?php

/* modelo/index.html.twig */
class __TwigTemplate_f5151a01bb9286c7f88c9c8508b02f5bc7f2e0ca0270e1fd4d84e2e135d704b8 extends Twig_Template
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
        $__internal_f72207dbabda95adc026d238d513066f8a75ffbfd4cdb28a77ac5981672dca60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72207dbabda95adc026d238d513066f8a75ffbfd4cdb28a77ac5981672dca60->enter($__internal_f72207dbabda95adc026d238d513066f8a75ffbfd4cdb28a77ac5981672dca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/index.html.twig"));

        $__internal_71ad2a3b2a6b84ec17ab65f7f1329390c4ffbdaf714de10be13c942fabb0ca64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ad2a3b2a6b84ec17ab65f7f1329390c4ffbdaf714de10be13c942fabb0ca64->enter($__internal_71ad2a3b2a6b84ec17ab65f7f1329390c4ffbdaf714de10be13c942fabb0ca64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modelo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f72207dbabda95adc026d238d513066f8a75ffbfd4cdb28a77ac5981672dca60->leave($__internal_f72207dbabda95adc026d238d513066f8a75ffbfd4cdb28a77ac5981672dca60_prof);

        
        $__internal_71ad2a3b2a6b84ec17ab65f7f1329390c4ffbdaf714de10be13c942fabb0ca64->leave($__internal_71ad2a3b2a6b84ec17ab65f7f1329390c4ffbdaf714de10be13c942fabb0ca64_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64de30ca2d315adffaa4b31214d50d62ba5f484320b30b783a92cf2b7703502c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64de30ca2d315adffaa4b31214d50d62ba5f484320b30b783a92cf2b7703502c->enter($__internal_64de30ca2d315adffaa4b31214d50d62ba5f484320b30b783a92cf2b7703502c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_004e6b38e71f5655870a681e03bf883b634817d3340745e3baa2ee10facc8e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004e6b38e71f5655870a681e03bf883b634817d3340745e3baa2ee10facc8e8b->enter($__internal_004e6b38e71f5655870a681e03bf883b634817d3340745e3baa2ee10facc8e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_004e6b38e71f5655870a681e03bf883b634817d3340745e3baa2ee10facc8e8b->leave($__internal_004e6b38e71f5655870a681e03bf883b634817d3340745e3baa2ee10facc8e8b_prof);

        
        $__internal_64de30ca2d315adffaa4b31214d50d62ba5f484320b30b783a92cf2b7703502c->leave($__internal_64de30ca2d315adffaa4b31214d50d62ba5f484320b30b783a92cf2b7703502c_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_68dbbdf307a9b17b11e8d079f7b64f1c7ae05a452b94dcde891ce70a1bf7fb76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68dbbdf307a9b17b11e8d079f7b64f1c7ae05a452b94dcde891ce70a1bf7fb76->enter($__internal_68dbbdf307a9b17b11e8d079f7b64f1c7ae05a452b94dcde891ce70a1bf7fb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8349e35ab700d1f19da074c19fb9d470490658f66d2a3473dd688a7a252da72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8349e35ab700d1f19da074c19fb9d470490658f66d2a3473dd688a7a252da72->enter($__internal_a8349e35ab700d1f19da074c19fb9d470490658f66d2a3473dd688a7a252da72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modelos"]) ? $context["modelos"] : $this->getContext($context, "modelos")));
        foreach ($context['_seq'] as $context["_key"] => $context["modelo"]) {
            // line 32
            echo "                    ";
            if (($this->getAttribute($context["modelo"], "categoriaModelo", array()) == "Auto")) {
                // line 33
                echo "
                        <div class=\"wrap\">
                            <div class=\"\"><img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("asset/img/" . $this->getAttribute($context["modelo"], "imagenModelo", array()))), "html", null, true);
                echo " \"></div>
                            <div class=\"\">
                                <br>
                                <h4 >";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "nombreModelo", array()), "html", null, true);
                echo "</h4>
                                <p >";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "descripcionModelo", array()), "html", null, true);
                echo " </p>
                                <h5>\$ ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "precio", array()), "html", null, true);
                echo "</h5>
                                ";
                // line 41
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 42
                    echo "                                    <ul>
                                        <li>
                                            <a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_show", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                    echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_edit", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                    echo "\">edit</a>
                                        </li>
                                    </ul>
                                ";
                }
                // line 51
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_show", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                echo " class=\"btn\">Ver mas</a>
                                <br>
                            </div>
                        </div>
                    ";
            }
            // line 56
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </div>

            <div id=\"tab2\" class=\"tab\">
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modelos"]) ? $context["modelos"] : $this->getContext($context, "modelos")));
        foreach ($context['_seq'] as $context["_key"] => $context["modelo"]) {
            // line 61
            echo "                    ";
            if (($this->getAttribute($context["modelo"], "categoriaModelo", array()) == "PickUp")) {
                // line 62
                echo "
                        <div class=\"wrap\">
                            <div class=\"\"><img src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("asset/img/" . $this->getAttribute($context["modelo"], "imagenModelo", array()))), "html", null, true);
                echo "\"></div>
                            <div class=\"\">
                                <br>
                                <h4 >";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "nombreModelo", array()), "html", null, true);
                echo "</h4>
                                <p >";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "descripcionModelo", array()), "html", null, true);
                echo " </p>
                                <h5>\$ ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["modelo"], "precio", array()), "html", null, true);
                echo "</h5>
                                ";
                // line 70
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 71
                    echo "                                    <ul>
                                        <li>
                                            <a href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_show", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                    echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_edit", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                    echo "\">edit</a>
                                        </li>
                                    </ul>
                                ";
                }
                // line 80
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_show", array("id" => $this->getAttribute($context["modelo"], "id", array()))), "html", null, true);
                echo " class=\"btn\">Ver mas</a>
                            </div>
                        </div>
                    ";
            }
            // line 84
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            </div>
            <br>
            <br>
            ";
        // line 88
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 89
            echo "                <ul>
                    <li>
                        <a class=\"negro\" href=\"";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelo_new");
            echo "\">Create a new modelo</a>
                    </li>
                </ul>
            ";
        }
        // line 95
        echo "        </div>








    </div>
";
        
        $__internal_a8349e35ab700d1f19da074c19fb9d470490658f66d2a3473dd688a7a252da72->leave($__internal_a8349e35ab700d1f19da074c19fb9d470490658f66d2a3473dd688a7a252da72_prof);

        
        $__internal_68dbbdf307a9b17b11e8d079f7b64f1c7ae05a452b94dcde891ce70a1bf7fb76->leave($__internal_68dbbdf307a9b17b11e8d079f7b64f1c7ae05a452b94dcde891ce70a1bf7fb76_prof);

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
        return array (  262 => 95,  255 => 91,  251 => 89,  249 => 88,  244 => 85,  238 => 84,  230 => 80,  223 => 76,  217 => 73,  213 => 71,  211 => 70,  207 => 69,  203 => 68,  199 => 67,  193 => 64,  189 => 62,  186 => 61,  182 => 60,  177 => 57,  171 => 56,  162 => 51,  155 => 47,  149 => 44,  145 => 42,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  125 => 35,  121 => 33,  118 => 32,  114 => 31,  98 => 17,  89 => 16,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
            <br>
            <br>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <ul>
                    <li>
                        <a class=\"negro\" href=\"{{ path('modelo_new') }}\">Create a new modelo</a>
                    </li>
                </ul>
            {% endif %}
        </div>








    </div>
{% endblock %}
", "modelo/index.html.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/modelo/index.html.twig");
    }
}
