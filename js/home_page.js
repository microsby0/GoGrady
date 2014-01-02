var mobileWidth=480;
var tabletWidth=768;
var desktopWidth=1280;

$(document).ready(function() {
    checkSize();
});

function checkSize(){
    if(window.innerWidth < window.innerHeight){
        $('#home_img').attr('src','/wp-content/themes/grady_theme/img/mobile_home.png');
        $('#home_img').attr('usemap','#mobile_map');
    } else{
        $('#home_img').attr('src','/wp-content/themes/grady_theme/img/desktop_home.png');
        $('#home_img').attr('usemap','#desktop_map');
    }
    $('#home_img').mapster({fillOpacity:0,clickNavigate: true});
}