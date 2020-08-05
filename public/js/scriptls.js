$(document).ready(function(){
    $("#user_btn").click(function(){
        $("#user_btn").addClass("active").siblings().removeClass("active");
        $(".org_form").addClass( "display" ).siblings().removeClass("display");
    });
    $("#org_btn").click(function(){
        $("#org_btn").addClass("active").siblings().removeClass("active");
        $(".user_form").addClass( "display" ).siblings().removeClass("display");
    });
});