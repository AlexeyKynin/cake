$(window).scroll( function () {
    // var hnone = 0;

    var st = $(this).scrollTop();


    if (!document.getElementById("header")){
        var heighHeader = 1;
    }else {
        var heighHeader = document.getElementById("header").offsetHeight;
    }

    if (!document.getElementById("s-catalog")){
        var heighScatalog = 1;
    }else {
        var heighScatalog = document.getElementById("s-catalog").offsetHeight;
    }




    var heighTopNav = document.getElementById("top-nav").offsetHeight;
    var heighTopNavMini = document.getElementsByClassName('.top-nav-mini').offsetHeight;

    if (!document.getElementById("botton-nav")){
        var heighBottonNav = 1;
        var heighBottonTop = 1;
    }else {
        var heighBottonNav = document.getElementById("botton-nav").offsetHeight;
        var heighBottonTop = document.getElementById("botton-nav").getBoundingClientRect().top;
    }


    if (heighTopNav>0 && heighBottonNav>0) {
        hnone = heighHeader - heighTopNav - heighBottonNav;
    }


        $('.botton-nav').css("transform", "translate(0%, " + -1 * st + "px");
        if (st >= (hnone + 140)) {
            $('.botton-nav, .top-nav').addClass("displaynone");
            if (heighBottonTop <= 0) {
                $('.top-nav').addClass("top-nav-mini");
                $('.top-nav').removeClass("displaynone");
            }
            $('.header').css("opacity", " .3");
        } else if ((st) < hnone) {
            $('.botton-nav, .top-nav').removeClass("displaynone");
            $('.top-nav').removeClass("top-nav-mini");
            $('.header').css("opacity", "1");
        }
});

