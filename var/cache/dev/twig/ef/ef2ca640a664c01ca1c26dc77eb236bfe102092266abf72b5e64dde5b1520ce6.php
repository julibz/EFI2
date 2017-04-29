<?php

/* :default:prueba.hmtl.twig */
class __TwigTemplate_1ea4a9e0c6ef3615103fb58191e9bea9d33ac53df8d2e7cf53afa7a3751c1a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd0521197200a9bbca8d03ef54f02f7d036b9f9d003fb83004c161649f2f9175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0521197200a9bbca8d03ef54f02f7d036b9f9d003fb83004c161649f2f9175->enter($__internal_bd0521197200a9bbca8d03ef54f02f7d036b9f9d003fb83004c161649f2f9175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:prueba.hmtl.twig"));

        $__internal_8f4eac25d9893a0cc42bc252a36ea25f53015624a82ab376f944e675e20a0b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4eac25d9893a0cc42bc252a36ea25f53015624a82ab376f944e675e20a0b0a->enter($__internal_8f4eac25d9893a0cc42bc252a36ea25f53015624a82ab376f944e675e20a0b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:prueba.hmtl.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_bd0521197200a9bbca8d03ef54f02f7d036b9f9d003fb83004c161649f2f9175->leave($__internal_bd0521197200a9bbca8d03ef54f02f7d036b9f9d003fb83004c161649f2f9175_prof);

        
        $__internal_8f4eac25d9893a0cc42bc252a36ea25f53015624a82ab376f944e675e20a0b0a->leave($__internal_8f4eac25d9893a0cc42bc252a36ea25f53015624a82ab376f944e675e20a0b0a_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_d76db783b2ac768d042b24edfe506ac8a8a5798e9e0a7a6002bb513358b2db9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76db783b2ac768d042b24edfe506ac8a8a5798e9e0a7a6002bb513358b2db9a->enter($__internal_d76db783b2ac768d042b24edfe506ac8a8a5798e9e0a7a6002bb513358b2db9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32ccb3b9eb23de01b30c9a6c8ed0ba4c437b9f8f51a473a4cd6a88aeba9d1a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ccb3b9eb23de01b30c9a6c8ed0ba4c437b9f8f51a473a4cd6a88aeba9d1a9e->enter($__internal_32ccb3b9eb23de01b30c9a6c8ed0ba4c437b9f8f51a473a4cd6a88aeba9d1a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <meta name=\"viewport\" content=\"initial-scale=1.0\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\" type=\"text/javascript\"></script>
    <style>
        .item.active{color:red;}
        .item.desactive{color:blue;}
    </style>
";
        
        $__internal_32ccb3b9eb23de01b30c9a6c8ed0ba4c437b9f8f51a473a4cd6a88aeba9d1a9e->leave($__internal_32ccb3b9eb23de01b30c9a6c8ed0ba4c437b9f8f51a473a4cd6a88aeba9d1a9e_prof);

        
        $__internal_d76db783b2ac768d042b24edfe506ac8a8a5798e9e0a7a6002bb513358b2db9a->leave($__internal_d76db783b2ac768d042b24edfe506ac8a8a5798e9e0a7a6002bb513358b2db9a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0f84011cb00c127374b9c2ca23cfa3df363963d1f2eb158f74c8e221481edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0f84011cb00c127374b9c2ca23cfa3df363963d1f2eb158f74c8e221481edb->enter($__internal_bf0f84011cb00c127374b9c2ca23cfa3df363963d1f2eb158f74c8e221481edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ef643623eefe6d362b90544871b5f96e9ea0d521d292b17b65d62eb5bc3f3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef643623eefe6d362b90544871b5f96e9ea0d521d292b17b65d62eb5bc3f3a6->enter($__internal_5ef643623eefe6d362b90544871b5f96e9ea0d521d292b17b65d62eb5bc3f3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

    <br>
    <ul class=\"list\">
        <input id=\"buscador\" type=\"text\" name=\"cuil\">
        <input class=\"caca\" type=\"submit\" value=\"Buscar\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valores"]) ? $context["valores"] : $this->getContext($context, "valores")));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 31
            echo "            <li class=\"item\" data-cuit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "cuit", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "nombre", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    </ul>

    <script type=\"text/javascript\">

            \$(document).ready(function(){
                var lat=0;
                var lng=0;
                \$('.caca').click(function(){
                    var asd=document.getElementById(\"buscador\").value;
                    console.log(asd);
                    \$.getJSON('https://soa.afip.gob.ar/sr-padron/v2/persona/'+asd,function(data){
//                        alert('Fecha inscripcion: '+ data.data.fechaInscripcion +' Nombre: '+ data.data.nombre);
                        console.log(data.data.domicilioFiscal.direccion);
                        \$.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address=1439+ALVEAR+'+'RioCuarto+'+',&key=AIzaSyAig4sYd_yLnoopc6CTmjoKY-wH6cmzXYw',function(data2) {
                            var lat=data2.results[0].geometry.location.lat;
                            var lng=data2.results[0].geometry.location.lng;
//                            console.log(resultados.formatted_address);
                            console.log(lat,lng);

                            initMap(lat,lng);
                        });
                    });
                });


                \$('.item').click(function(){
                    \$.getJSON('https://soa.afip.gob.ar/sr-padron/v2/persona/'+\$(this).data('cuit'),function(data){
                        alert('Fecha inscripcion: '+ data.data.fechaInscripcion
                        +' Nombre: '+ data.data.nombre);
                    });
//                    attr('data-cuit');
                    \$('.item').removeClass('active');
                    \$(this).addClass('active');
                });


            });




        //hacer un buscador, poner un imput para el cuit. que busque en la afip
        //para el popup: jquery.ui modai
        //ver en el mapa

    </script>
    <div id=\"map\"></div>
    <script>

        var map;
        function initMap(lat,lng) {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: lat, lng: lng},
                zoom: 15
            });
            var marker = new google.maps.Marker({
                position: {lat: lat, lng: lng},
                map: map
            });
            marker.setMap(map);
        }
    </script>

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAig4sYd_yLnoopc6CTmjoKY-wH6cmzXYw&callback=initMap\"
            async defer>

    </script>

";
        
        $__internal_5ef643623eefe6d362b90544871b5f96e9ea0d521d292b17b65d62eb5bc3f3a6->leave($__internal_5ef643623eefe6d362b90544871b5f96e9ea0d521d292b17b65d62eb5bc3f3a6_prof);

        
        $__internal_bf0f84011cb00c127374b9c2ca23cfa3df363963d1f2eb158f74c8e221481edb->leave($__internal_bf0f84011cb00c127374b9c2ca23cfa3df363963d1f2eb158f74c8e221481edb_prof);

    }

    public function getTemplateName()
    {
        return ":default:prueba.hmtl.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  101 => 31,  97 => 30,  76 => 11,  67 => 10,  51 => 2,  42 => 1,  32 => 10,  29 => 9,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block head %}
    <meta name=\"viewport\" content=\"initial-scale=1.0\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\" type=\"text/javascript\"></script>
    <style>
        .item.active{color:red;}
        .item.desactive{color:blue;}
    </style>
{% endblock head %}

{% block body %}

    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

    <br>
    <ul class=\"list\">
        <input id=\"buscador\" type=\"text\" name=\"cuil\">
        <input class=\"caca\" type=\"submit\" value=\"Buscar\">
        {% for valor in valores %}
            <li class=\"item\" data-cuit=\"{{ valor.cuit }}\"> {{ valor.nombre }}</li>
        {% endfor %}

    </ul>

    <script type=\"text/javascript\">

            \$(document).ready(function(){
                var lat=0;
                var lng=0;
                \$('.caca').click(function(){
                    var asd=document.getElementById(\"buscador\").value;
                    console.log(asd);
                    \$.getJSON('https://soa.afip.gob.ar/sr-padron/v2/persona/'+asd,function(data){
//                        alert('Fecha inscripcion: '+ data.data.fechaInscripcion +' Nombre: '+ data.data.nombre);
                        console.log(data.data.domicilioFiscal.direccion);
                        \$.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address=1439+ALVEAR+'+'RioCuarto+'+',&key=AIzaSyAig4sYd_yLnoopc6CTmjoKY-wH6cmzXYw',function(data2) {
                            var lat=data2.results[0].geometry.location.lat;
                            var lng=data2.results[0].geometry.location.lng;
//                            console.log(resultados.formatted_address);
                            console.log(lat,lng);

                            initMap(lat,lng);
                        });
                    });
                });


                \$('.item').click(function(){
                    \$.getJSON('https://soa.afip.gob.ar/sr-padron/v2/persona/'+\$(this).data('cuit'),function(data){
                        alert('Fecha inscripcion: '+ data.data.fechaInscripcion
                        +' Nombre: '+ data.data.nombre);
                    });
//                    attr('data-cuit');
                    \$('.item').removeClass('active');
                    \$(this).addClass('active');
                });


            });




        //hacer un buscador, poner un imput para el cuit. que busque en la afip
        //para el popup: jquery.ui modai
        //ver en el mapa

    </script>
    <div id=\"map\"></div>
    <script>

        var map;
        function initMap(lat,lng) {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: lat, lng: lng},
                zoom: 15
            });
            var marker = new google.maps.Marker({
                position: {lat: lat, lng: lng},
                map: map
            });
            marker.setMap(map);
        }
    </script>

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAig4sYd_yLnoopc6CTmjoKY-wH6cmzXYw&callback=initMap\"
            async defer>

    </script>

{% endblock body %}", ":default:prueba.hmtl.twig", "/home/julian/Julian_Symfony/EFI2/app/Resources/views/default/prueba.hmtl.twig");
    }
}
