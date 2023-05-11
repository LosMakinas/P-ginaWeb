$(document).ready(function () {
    $("#logoClick").click(function () {
        $("#hamburgesa").animate({
            width: "+=1000"
        }, 500);
        
    });

    $("#logo").click(function () {
        $("#hamburgesa").animate({
            width: "-=1000"
        }, 500);
    });
});