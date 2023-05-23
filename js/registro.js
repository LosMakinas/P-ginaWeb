$(document).ready(function () {

    //let arrayElems = [$("#nomUsu"), $("#corElec"), $("#pass1"), $("#pass2")];
    let arrayBools = [boolUsu = false, boolCor = false, boolPass = false, boolReUser = true];

    $("#corElec").keyup(checkCor).change(checkCor);

    $("#nomUsu").keyup(checkUsu).change(checkUsu);

    $("#pass1").keyup(checkPass).change(checkPass);

    $("#pass2").keyup(checkPass).change(checkPass);

    function checkPass() {
        arrayBools[2] = $("#pass1").val() == $("#pass2").val();
    }

    function checkCor() {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        arrayBools[1] = emailReg.test($(this).val());
    }

    function checkUsu() {
        arrayBools[0] = $(this).val().length > 0;
        console.log(arrayBools[0]);
    }

    $("#registrar").click(function (event) {
        event.preventDefault();
        //console.log($("#nomUsu").val());
        if(arrayBools[0] == true) {
        $.ajax({
            data:{nombre_usuario: $("#nomUsu").val(), function:"checkUsuario"},
            url:'http://localhost/gitPaginaReto/P-ginaWeb/servicios.php',
            type:'post',
            success:function(response){
                //console.log(response == 0);
                //var idUsuarios = $.parseJSON(response);
                if(response > 0){
                    arrayBools[3] = false;
                } else if(response == 0){
                    arrayBools[3] = true;
                }
                
            },
            error:function(error){
                console.log(error);
            }
        }).then(function () {
            console.log("usu");
            for (let index = 0; index <= arrayBools.length; index++) {
                //console.log({"usu": boolUsu, "pass": boolPass, "correo": boolCor, "indice" : index});

                if (index == arrayBools.length) {
                    //event.preventDefault();
                    $("form").submit();
                } 
                
                

                $("#error").text("");
                if (arrayBools[index] == false) {
                    switch (index) {
                        case 0:
                            $("#error").text($("#error").text()+"Error: Usuario invalido");
                            break;
                        case 1:
                            $("#error").text($("#error").text()+" Error: Correo electronico invalido");
                            break;
                        case 2:
                            $("#error").text($("#error").text()+" Error: Contraseña invalida");
                            break;
                        case 3:
                            $("#error").text($("#error").text()+" Error: Este usuario ya existe");
                        break;
                    }
                    $("#error").fadeIn();
                    return;
                }
                
                
            }
        });
        
    } else {
        console.log("no usu");
        for (let index = 0; index <= arrayBools.length; index++) {
            //console.log({"usu": boolUsu, "pass": boolPass, "correo": boolCor, "indice" : index});
            

            if (index == arrayBools.length) {
                //event.preventDefault();
                $("form").submit();
            } 
            
            

            $("#error").text("");
            if (arrayBools[index] == false) {
                switch (index) {
                    case 0:
                        $("#error").text($("#error").text()+"Error: Usuario invalido");
                        break;
                    case 1:
                        $("#error").text($("#error").text()+" Error: Correo electronico invalido");
                        break;
                    case 2:
                        $("#error").text($("#error").text()+" Error: Contraseña invalida");
                    break;
                }
                $("#error").fadeIn();
                return;
            }
            
            
        }
    }
        });
    
    });