/* global jQuery, $ */
$(document).ready(function() {

   
$('#overlays .addtopage').click(function(){
    $('#pagecontent').hide();
    $('.addtopage').toggleClass("showing");
    $("#modules_active").css("display","block");
    $('#modules_available').css("display","block");
    $('#modules_close').css("display","block");
    
});

$('#modules_active').resizable();
$('#modules_close').click(function(){
    $("#modules_active").css("display","none");
    $('#modules_available').css("display","none");
    $('#modules_close').css("display","none");
    $('.addtopage').toggleClass("showing");
    $('#pagecontent').show();
})


});    