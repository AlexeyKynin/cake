// import 'bootstrap';
var wheel;

$(function () {

    $('.reviews').owlCarousel({
        loop: true,
        items: 1,
        smartSpeed: 700,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        autoHeight: true //автоматически выставляет высоту контента!!!
    });

});

$(window).bind('mousewheel', function(event) {
   wheel = event.originalEvent.wheelDelta;
});

$(window).scroll( function () {
    // if (wheel >= 0) {
    //     console.log('Scroll up');
    // }
    // else {
    //     console.log('Scroll down');
    // }

    var st = $(this).scrollTop();

    var heighHeader = document.getElementById("header").offsetHeight;
    var heighScatalog = document.getElementById("s-catalog").offsetHeight;


    var heighTopNav = document.getElementById("top-nav").offsetHeight;
    var heighTopNavMini = document.getElementsByClassName('.top-nav-mini').offsetHeight;
    var heighBottonNav = document.getElementById("botton-nav").offsetHeight;
    var heighBottonTop = document.getElementById("botton-nav").getBoundingClientRect().top;

    if (heighTopNav>0 && heighBottonNav>0) {
        hnone = heighHeader - heighTopNav - heighBottonNav;
    }

    console.log(heighBottonTop);

    $('.botton-nav').css("transform","translate(0%, "+ -1*st +"px");
    if (st >= (hnone+140) ) {
        $('.botton-nav, .top-nav').addClass("displaynone");
        if (heighBottonTop<=0){
            $('.top-nav').addClass("top-nav-mini");
            $('.top-nav').removeClass("displaynone");
        }
        $('.header').css("opacity"," .3");
    }else if ((st) < hnone ){
        $('.botton-nav, .top-nav').removeClass("displaynone");
        $('.top-nav').removeClass("top-nav-mini");
        $('.header').css("opacity","1");
    }

});




