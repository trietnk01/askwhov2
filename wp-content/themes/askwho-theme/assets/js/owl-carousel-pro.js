jQuery(document).ready(function($){   
    let url_website=window.location.href;
    $(".owl_carousel_author").owlCarousel({
        autoplay:false,
        loop:false,
        margin:24,
        nav:true,
        navText: ['<img src="'+url_website+'/wp-content/uploads/2021/07/ic_scrollDown-1.svg" />','<img src="'+url_website+'/wp-content/uploads/2021/07/ic_scrollDown-2.svg" />'],
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
            }
        }
    });        
});