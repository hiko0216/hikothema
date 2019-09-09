
$(document).ready(function(){
    $(".sub-menu").hide();
    $(".menu>li").hover(function() {
        $(".sub-menu",this).slideDown("fast");
    },
    function() {
        $(".sub-menu",this).slideUp("fast");
    });
});
