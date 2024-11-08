/* $(function(){
    $("#features-hover-a") .mouseenter(function(){

        $("#features") .css("height","400px");

    });
    $("#features-hover-a") .mouseleave(function(){

        $("#features") .css("height","0px");
    
    });
    
    $("#features-hover-a") .mouseenter(function(){

        $(".all-big-div") .css("filter","blur(3px)" , "filter","brightness(0.5)");
        

    });
    $("#features-hover-a") .mouseleave(function(){

        $(".all-big-div") .css("filter","none");
    
    });
});
*/
$(function(){

    $("#features-hover-a").mouseenter(function(){

        $("#features").css("height", "400px");

        $(".all-big-div").css("filter", "blur(3px) brightness(0.5)");

        $("body").css("background", "gray");

    });
    
    $("#features-hover-a").mouseleave(function(){

        $("#features").css("height", "0px");

        $(".all-big-div").css("filter", "none");

        $("html  body").css("background", "#E6E6E6");


    });
});

$(function(){
    $("#kurumsal-hover-a") .mouseenter(function(){

        $("#kurumsal") .css("height","400px");


        $(".all-big-div").css("filter", "blur(3px) brightness(0.5)");

        $("body").css("background", "gray");

    });

    $("#kurumsal-hover-a") .mouseleave(function(){

        $("#kurumsal") .css("height","0px");


        $(".all-big-div").css("filter", "none");

        $("html  body").css("background", "#E6E6E6");

    
    });
});
$(function(){
    $("#features") .mouseenter(function(){

        $("#features") .css("height","400px");


        $(".all-big-div").css("filter", "blur(3px) brightness(0.5)");

        $("body").css("background", "gray");
    });

    $("#features") .mouseleave(function(){

        $("#features") .css("height","0px");
    

        $(".all-big-div").css("filter", "none");

        $("html  body").css("background", "#E6E6E6");

    });
});
$(function(){
    $("#kurumsal") .mouseenter(function(){

        $("#kurumsal") .css("height","400px");
        
        $(".all-big-div").css("filter", "blur(3px) brightness(0.5)");

        $("body").css("background", "gray");


    });

    $("#kurumsal") .mouseleave(function(){

        $("#kurumsal") .css("height","0px");


        $(".all-big-div").css("filter", "none");

        $("html  body").css("background", "#E6E6E6");

    
    });
});