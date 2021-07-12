jQuery(document).ready(function($){   
    $(".owl_carousel_author").owlCarousel({
        autoplay:true,
        loop:true,
        margin:10,
        nav:true,
        navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
        dots:false,
        mouseDrag: true,
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
    $(".owl_carousel_featured_post").owlCarousel({
        autoplay:false,
        loop:false,
        margin:10,
        nav:false,
        navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
        dots:false,
        mouseDrag: false,
        touchDrag: false,
        lazyLoad: false,
        responsiveClass:false,
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