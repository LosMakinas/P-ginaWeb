$(document).ready(function()
{
    let boolDropdown = false;
    let boolTextFiled = false;
    let boolRadio = false;
    let boolImg = false;
    let boolTem = false;
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

    

    });

    $("#enviarPreg").click(function(event)
    {
        
        if(boolTextFiled == false || boolSegs == false || boolDropdown == false || boolTem == false)
        {
            event.preventDefault();
        }

        if (boolTextFiled == false) {
            $(".pregunta").css({backgroundColor: 'red'});    
        }
        console.log(boolTextFiled);
        console.log(boolSegs);
        console.log(boolDropdown);
        console.log(boolTem);
    });

    $("#tematica").change(checkValTem);
    $("#dificultades").change(checkValDif); 

    $("#tiempo").keyup(checkNum);
    $("#tiempo").change(checkNum);

    function checkValTem()
    {
        if($(this).val() == -1)
        {
            boolTem = false;
        }else{
            boolTem = true;
        }
    };

    function checkValDif()
    {
        if($(this).val() == -1)
        {
            boolDropdown = false;
        }else{
            boolDropdown = true;
        }
    };  

    function checkNum()
    {
        var RestricionLetras = /^[0-9]+$/;
        if(RestricionLetras.test($("#tiempo").val()) && $("#tiempo").val() >= 10)
        {
            boolSegs = true;
        } else {
            boolSegs = false;
        }
    };
});
