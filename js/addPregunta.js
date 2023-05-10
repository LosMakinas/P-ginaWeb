$(document).ready(function () {
    $("#logoClick").click(function () {
        $("#hamburgesa").animate({
            width: "+=1000"
        }, 500, function () {
            $("#logoClick").hide();    
        });
        
    });

    $("#logo").click(function () {
        $("#logoClick").show();
        $("#hamburgesa").animate({
            width: "-=1000"
        }, 500);
    });
});