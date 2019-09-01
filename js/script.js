$(document).ready(function(){
    $(".main").tiltedpage_scroll({
        angle:40
    })
})


    $(window).scroll(function () {
        var wScroll = $(this).scrollTop();
        $('.text-brand').css();
        {
            'transform';
            'translate(0px,' + wScroll / 3 + '%';
        }
    });
    ;
