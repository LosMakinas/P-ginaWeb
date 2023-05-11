$(document).ready(function()
{
    $("#contenido").submit(function(event)
    {
        var dificultad = $("#dificultades").val();
        var tematica = $("#tematica").val();
        var tiempo = $("#tiempo").val();
        var espacioVacio = true;
        if(dificultad == -1)
        {
            espacioVacio = false;
            alert("El campo Dificultad debe seleccionar uno.");
        }
        if(tematica == -1)
        {
            espacioVacio = false;
            alert("El campo Dificultad debe seleccionar uno.");
        }
    });
    $("#contenido").keypress(function()
    {
        var RestricionLetras = /(?=.*[\!@#$%&^()\\[\]{}\-_+=|:;"'<>,./?])(?=.*[a-z])(?=.*[A-Z])(?=(.*)).{8,}/;
        if(tiempo == RestricionLetras)
        {
            espacioVacio = false;
            alert("Solo se puede introducir numeros.");
        }
    });
});