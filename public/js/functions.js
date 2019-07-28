$(document).ready(function(){

$('.flexslider_control').flexslider({
        animation: "slide",
        directionNav: false,
        animationSpeed: 1200,
        controlNav: true,
        touch: true
    });

$('.flexslider_arrows').flexslider({
        animation: "slide",
        directionNav: true,
        animationSpeed: 1200,
        controlNav: false,
        touch: true
    });

 $('.slide_home_main').flexslider({
        animation: "slide",
        directionNav: true,
        animationSpeed: 1200,
        controlNav: false,
        touch: true
    });

  $('.slide_category_main').flexslider({
        animation: "slide",
        directionNav: true,
        animationSpeed: 1200,
        controlNav: false,
        touch: true
    });

 $('.slide_home_ambience').flexslider({
        animation: "slide",
        directionNav: true,
        animationSpeed: 1200,
        controlNav: false,
        touch: true
    });

$('#carousel_product').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 138,
        itemHeight: 170,
        itemMargin: 5,
        asNavFor: '#slider_product'
    });

$('#slider_product').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel_product",
        start: function(slider){
          $('body').removeClass('loading');
        }
    });


$("#scroller").carouFredSel({
   width: "100%",
    height: "auto",
    align: "left",   
    items: {
        visible: 6,
        minimum: 6,
        width: "230",
        height: "230"
    },
    scroll: {
        items: 1,
        fx: "slide",
        easing: "linear",
        pauseOnHover: true
    },
    swipe: {
        onTouch     : true,
        items       : 1
    },
    prev    : "#prev_carousel", 
    next    : "#next_carousel"
                    
}).trigger("pause");

$("#prev_carousel").hover(function() {
    $("#scroller").trigger("configuration", ["direction", "right"]);
    $("#scroller").trigger("play");
}, function() {
    $("#scroller").trigger("pause");
}).click(function() {
    return false;
});

$("#next_carousel").hover(function() {
    $("#scroller").trigger("configuration", ["direction", "left"]);
    $("#scroller").trigger("play");
}, function() {
    $("#scroller").trigger("pause");
}).click(function() {
    return false;
});


/*** videos homepage ***/
$('img.videoplayer').click(function(){
    var video = '<div class="videowrapper"><iframe style="float: left; display: inline; margin-right: 10px;" frameBorder="0" src="'+ $(this).attr('data-video') +'"></iframe></div>';
    $(this).replaceWith(video);
});

$('img.videoplayer-full').click(function(){
    var video = '<div class="videowrapper-full"><iframe style="float: left; display: inline; margin-right: 10px;" frameBorder="0" src="'+ $(this).attr('data-video') +'"></iframe></div>';
    $(this).replaceWith(video);
});

$('.slide_product_main').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });

});