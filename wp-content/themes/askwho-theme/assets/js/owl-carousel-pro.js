jQuery(document).ready(function($){   
    $(".owl_carousel_author").owlCarousel({
        autoplay:false,
        loop:false,
        margin:10,
        nav:true,
        navText: ['',''],
        dots:false,
        mouseDrag: false,
        touchDrag: false,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:2
            },            
            739:{
                items:4
            },
            1023:{
                items:4
            }
        }
    });        
});