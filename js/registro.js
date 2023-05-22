$(document).ready(function () {

    //let arrayElems = [$("#nomUsu"), $("#corElec"), $("#pass1"), $("#pass2")];
    let arrayBools = [boolUsu = false, boolCor = false, boolPass = false, boolReUser = false];

    $("#corElec").keyup(function () {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        arrayBools[1] = emailReg.test($(this).val());
    });

    $("#nomUsu").keyup(function () {
        arrayBools[0] = $(this).val().length > 0;
    });

    $("#pass1").keyup(checkPass);

    $("#pass2").keyup(checkPass);

    function checkPass() {
        arrayBools[2] = $("#pass1").val() == $("#pass2").val();
    }


    $("#registrar").click(function (event) {
        event.preventDefault();
        $.ajax({
            data:{nombre_usuario: $("#nomUsu").val(), function:"checkUsuario"},
            url:'http://127.0.0.1/P-GINAWEB/servicios.php',
            type:'post',
            success:function(response){
                console.log(response == 0);
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
            for (let index = 0; index <= arrayBools.length; index++) {
                //console.log({"usu": boolUsu, "pass": boolPass, "correo": boolCor, "indice" : index});

                if (index == arrayBools.length) {
                    $("form").submit();
                }       
                
                

                $("#error").text("");
                if (arrayBools[index] == false) {
                    switch (index) {
                        case 0:
                            $("#error").text("Error: Usuario invalido");
                        break;
                        case 1:
                            $("#error").text("Error: Correo electronico invalido");
                        break;
                        case 2:
                            $("#error").text("Error: Contraseña invalida");
                        break;
                        case 3:
                            $("#error").text("Error: Este usuario ya existe");
                        break;
                    }
                    $("#error").show();
                    return;
                }
                
                
            }
        });
            

        });
    });