jQuery(document).ready(function($){   
    $(".owl_carousel_author").owlCarousel({
        autoplay:false,
        loop:false,
        margin:24,
        nav:true,
        navText: ['',''],
        dots:false,
        mouseDrag: false,
        touchDrag: false,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },            
            739:{
                items:4
            }
        }
    });        
});