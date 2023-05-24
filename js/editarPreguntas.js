$(document).ready(function()
{
    let boolDropdown = true;
    let boolTextFiled = true;
    let boolResp1 = true;
    let boolResp2= true;
    let boolResp3 = true;
    let boolResp4 = true;
    let boolRadio = true;
    let boolImg = true;
    let boolTem = true;
    let boolSegs = true;

    $("#enviarPreg").click(function(event)
    {
        event.preventDefault();
        
        if(boolTextFiled && boolSegs && boolDropdown && boolTem && boolResp1 && boolResp2 && boolResp3 && boolResp4)
        {
            $("form").submit();
        }

        $("#error").html();

        if (!boolTextFiled) {
            $("#pregunta").css({backgroundColor: 'red'});
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").html($("#error").html() + "Pregunta inválida. ");
            $("#error").show();
        } else {
            $("#pregunta").css({backgroundColor: 'white'});
        }

        if(!boolResp1) {
            $("#respuesta1").css({backgroundColor: 'red'});
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").html($("#error").html() + "Respuesta 1 inválida. ");
            $("#error").show();
        }else {
            $("#respuesta1").css({backgroundColor: 'white'});
        }

        if(!boolResp2) {
            $("#respuesta2").css({backgroundColor: 'red'});
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").html($("#error").html() + "Respuesta 2 inválida. ");
            $("#error").show();
        }else {
            $("#respuesta2").css({backgroundColor: 'white'});
        }

        if(!boolResp3) {
            $("#respuesta3").css({backgroundColor: 'red'});
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").html($("#error").html() + "Respuesta 3 inválida. ");
            $("#error").show();
        }else {
            $("#respuesta3").css({backgroundColor: 'white'});
        }

        if(!boolResp4) {
            $("#respuesta4").css({backgroundColor: 'red'});
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").html($("#error").html() + "Respuesta 4 inválida. ");
            $("#error").show();
        }else {
            $("#respuesta4").css({backgroundColor: 'white'});
        }

        if (!boolSegs) {
            $("#tiempo").css({backgroundColor: 'red'});
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").text($("#error").html() + "Tiempo inválido. ");
            $("#error").show();
        }

        if (!boolDropdown) {
            $("#dificultades").css({backgroundColor: 'red'});
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").text($("#error").html() + "Seleccione una dificultad. ");
            $("#error").show();
        }

        if (!boolTem) {
            $("#tematica").css({backgroundColor: 'red'});
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").text($("#error").html() + "Seleccione una tematica. ");
            $("#error").show();
        }

        if (!boolRadio) {
            $(".radioPreg").css({backgroundColor: 'red'});
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").text($("#error").html() + "Seleccione una respuesta correcta. ");
            $("#error").show();
        }

        if (!boolImg) {
            $("#archivoPreg").addClass("fileRed");
            $("#error").html("");
            $("#error").html("Error/Es: ");
            $("#error").text($("#error").html() + "Seleccione un archivo. ");
            $("#error").show();
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
        $(".pregunta").css({backgroundColor: 'white'});

        if($("#pregunta").val() == "")
        {
            boolTextFiled = false;
        } else {
            
            boolTextFiled = true;
        }

        if ($("#respuesta1").val() == "" ) {
            boolResp1 = false;
        } else {
            boolResp1 = true;
        }

        if($("#respuesta2").val() == "" ){
            boolResp2= false;
        } else {
            boolResp2 = true;
        }

        if($("#respuesta3").val() == "") {
            boolResp3 = false;
        } else {
            boolResp3 = true;
        }

        if ($("#respuesta4").val() == "") {
            boolResp4 = false;
        } else {
            boolResp4 = true;
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
