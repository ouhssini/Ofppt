$(document).ready(function(){
    $(".invisible-content").hide();
    $(document).on('click',"#btn",function(){
        var morelessButton=$(".invisible-content").is(":visible")?'Read More':'Read Less';
        $(this).text(morelessButton);
        $(this).parent(".articl").find(".invisible-content").toggle();
        $(this).parent(".articl").find(".visible-content").toggle();
    });
});