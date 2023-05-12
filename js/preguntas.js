$(document).ready(function()
{
    let boolDropdown = false;
    let boolTextFiled = false;
    let boolRadio = false;
    let boolImg = false;
    let boolSegs = false;

    $(".pregunta").keyup(function()
    {
    var pregunta = $(this).val();

    if(pregunta == "")
    {
        boolTextFiled = false;
        
    }

    if ($("#respuesta1").val() != "" && $("#respuesta2").val() != "" && $("#respuesta3").val() != "" && $("#respuesta4").val() != "") {
        boolTextFiled = true;
    }

    console.log(boolTextFiled);

    });

    $("#enviarPreg").click(function(event)
    {
        
        if(boolTextFiled == false || boolDropdown == false)
        {
            alert("Datos incorrectos");
            event.preventDefault();
        }

        if (boolTextFiled == false) {
            $(".pregunta").css({backgroundColor: 'red'});    
        }
        
        var dificultad = $("#dificultades").val();
        var tematica = $("#tematica").val();
        var tiempo = $("#tiempo").val();
       
        

        var espacioVacio = true;

        if(boolTextFiled)
        {
            
            espacioVacio = false;
        }
        if($(".radioPreg").attr("checked","true"))
        {
            espacioVacio = true; 
        }else{
            espacioVacio = false; 
        }
        if(dificultad == -1)
        {
            espacioVacio = false;
        }
        if(tematica == -1)
        {
            espacioVacio = false;
        }
        if(tiempo < 0)
        {
            espacioVacio = false;
            tiempo.val() = 0;   
        }
        
        
    });
    $("#contenido").keypress(function()
    {
        var RestricionLetras = /(?=.*[\!@#$%&^()\\[\]{}\-_+=|:;"'<>,./?])(?=.*[a-z])(?=.*[A-Z])(?=(.*)).{2,}/;
        if(tiempo == RestricionLetras)
        {
            espacioVacio = false;
        }
        
    });

});