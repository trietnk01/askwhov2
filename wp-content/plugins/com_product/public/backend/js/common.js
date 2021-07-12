jQuery(document).ready(function($){
    $('.navbar_href').on('click',function(){
        var i_ctrl=$(this).children('i');        
        $(i_ctrl).toggleClass('fa-bars fa-times',500);      
        $('.menu_back_drop').toggleClass('meu_back_drop_scaleX1');  
    })
});