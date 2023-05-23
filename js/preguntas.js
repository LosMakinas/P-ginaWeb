$(document).ready(function()
{
    let boolDropdown = false;
    let boolTextFiled = false;
    let boolRadio = false;
    let boolImg = false;
    let boolTem = false;
    let boolSegs = false;

    $("#enviarPreg").click(function(event)
    {
        event.preventDefault();
        if(boolTextFiled && boolSegs && boolDropdown && boolTem)
        {
            $("form").submit();
        }

        $("#error").html();

        if (!boolTextFiled) {
            $(".pregunta").css({backgroundColor: 'red'});
            $("#error").html($("#error").html() + "Preguntas o respuestas invalidas. ");
            $("#error").fadeIn();
        }

        if (!boolSegs) {
            $("#tiempo").css({backgroundColor: 'red'});
            $("#error").text($("#error").html() + "Tiempo invalido. ");
            $("#error").fadeIn();
        }

        if (!boolDropdown) {
            $("#dificultades").css({backgroundColor: 'red'});
            $("#error").text($("#error").html() + "Seleccione una dificultad. ");
            $("#error").fadeIn();
        }

        if (!boolTem) {
            $("#tematica").css({backgroundColor: 'red'});
            $("#error").text($("#error").html() + "Seleccione una tematica. ");
            $("#error").fadeIn();
        }

        if (!boolRadio) {
            $(".radioPreg").css({backgroundColor: 'red'});
            $("#error").text($("#error").html() + "Seleccione una respuesta correcta. ");
            $("#error").fadeIn();
        }

        if (!boolImg) {
            $("#archivoPreg").addClass("fileRed");
            $("#error").text($("#error").html() + "Seleccione un archivo. ");
            $("#error").fadeIn();
        }

        /*
        console.log(boolTextFiled);
        console.log(boolSegs);
        console.log(boolDropdown);
        console.log(boolTem);
        console.log(boolRadio);
        console.log(boolImg);
        */
        
    });

    $("#tematica").change(checkValTem);
    $("#dificultades").change(checkValDif); 

    $("#tiempo").keyup(checkNum);
    $("#tiempo").change(checkNum);

    $(".radioPreg").change(checkRadio);

    $("#archivoPreg").change(function () {
        $(this).removeClass("fileRed");
        boolImg = $("#archivoPreg")[0].files.length > 0;
    });

    $(".pregunta").keyup(function()
    {
        $(this).css({backgroundColor: 'white'});
        var pregunta = $(this).val();

        if(pregunta == "")
        {
            boolTextFiled = false;
            
        }

        if ($("#respuesta1").val() != "" && $("#respuesta2").val() != "" && $("#respuesta3").val() != "" && $("#respuesta4").val() != "") {
            boolTextFiled = true;
        }
    });

    function checkValTem()
    {
        $(this).css({backgroundColor: 'white'});
        if($(this).val() == -1)
        {
            boolTem = false;
        }else{
            boolTem = true;
        }
    };

    function checkValDif()
    {
        $(this).css({backgroundColor: 'white'});
        if($(this).val() == -1)
        {
            boolDropdown = false;
        }else{
            boolDropdown = true;
        }
    };  

    function checkNum()
    {
        $(this).css({backgroundColor: 'white'});
        var RestricionLetras = /^[0-9]+$/;
        if(RestricionLetras.test($("#tiempo").val()) && $("#tiempo").val() >= 10)
        {
            boolSegs = true;
        } else {
            boolSegs = false;
        }
    };

    function checkRadio() {
        $(this).css({backgroundColor: 'white'});
        if ($('input[type=radio]:checked').length > 0) {
            boolRadio = true;    
        } else {

        }
    }
});
