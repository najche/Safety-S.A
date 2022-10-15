$(document).ready(function(){
    $("#btnMenu").click(function () { 
        if($("#sidebar").css("width") == "100px"){
            $("#sidebar").css("width", "200px");
            $("#navbar").css("margin-left", "200px");
            $("#content").css("margin-left", "200px");
            $(".menu-icon").css("position", "fixed");
        }else{
            $("#sidebar").css("width", "100px");
            $("#navbar").css("margin-left", "100px");
            $("#content").css("margin-left", "100px");
            $(".menu-icon").css("position", "absolute");
        }
    });
    $(".dropdown-item").click(function () { 
        $("#btnMenu").trigger("click");
    });
});