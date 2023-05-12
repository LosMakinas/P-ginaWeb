$(document).ready(function () {

    let arrayElems = [$("#nomUsu"), $("#corElec"), $("#pass1"), $("#pass2")];
    let arrayBools = [boolUsu = false, boolCor = false, boolPass = false];

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
        arrayBools[2] = $(this).val() == $("#pass2").val();
    }


    $("#registrar").click(function () {
        event.preventDefault();
            for (let index = 0; index <= arrayBools.length; index++) {
                console.log({"usu": boolUsu, "pass": boolPass, "correo": boolCor, "indice" : index});
                if (index == arrayBools.length) {
                    console.log(arrayBools[index]);
                    $("form").submit();
                }                

                if (arrayBools[index] == false) {
                    return;
                }
                
                
            }

        });
    });