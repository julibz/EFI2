/**
 * Created by julian on 24/02/17.
 */
$(document).ready(function(){
    $("#Autos").click(function(){
        $("$modelos").load("$../../../app/Resources/views/modelo/autos.html.twig");
    });

    $("#Camionetas").click(function(){
        $("$modelos").load("$../../../app/Resources/views/modelo/camionetas.html.twig");
    });
});