let viewScroll = 0;
let offsetTopSection = 0;
let outerHeightSection = 0;
let viewSection = 0;
let el_top = 0;
let attr_bg = "";
jQuery(document).ready(function ($) {  
  let section_ctrl = $('.box_section');
  $.each(section_ctrl,function(index,val){
    var sect_bg=$(val).css('background-color');
    $(val).attr('attr_bg',sect_bg);
  });
  $('.img_no_attr > img').removeAttr('width');
  $('.img_no_attr > img').removeAttr('height');  
  $(".navbar_href").on("click", function () {
    let i_ctrl = $(this).children(".ic");
    $(i_ctrl).toggleClass("burger close", 500);
    $(".menu_back_drop").toggleClass("meu_back_drop_scaleX1");
  });
  $('.navbar_toggle_v2').on('click',function(){
    let i_ctrl = $(this).children(".ic");
    $(i_ctrl).toggleClass("burger close", 500);
    $(".menu_back_drop").toggleClass("meu_back_drop_scaleX1");
  });  
  $(window).scroll(function () {
    viewScroll = Math.round(
      parseFloat(window.innerHeight) / 15 + parseFloat($(this).scrollTop())
    );
    $.each(section_ctrl, function (index, val) {
      attr_bg = $(val).attr("attr_bg"); 
      viewSection = Math.round(
        parseFloat($(val).offset().top) + parseFloat($(val).outerHeight(false))
      );
      if (
        viewScroll > Math.round(parseFloat($(val).offset().top)) &&
        viewScroll <= viewSection
      ) {
        $(section_ctrl).css({
          'background-color': attr_bg,
          'transition': '200ms',
        });    
        $('.box_footer').css({
          'background-color':attr_bg,
          'transition':'200ms'
        });    
      }
    });
  });
  /* begin plus articles */
  $('button[name="btn_plus_articles"]').on('click',function(){
    let frm = $(this).closest("form");    
    let offset = $(frm).find('input[name="offset"]').val();
    let dataItem = {      
      offset,      
      action: "plus_articles_more",
    };
    $.ajax({
      url: ajaxurl,
      type: "POST",
      data: dataItem,
      dataType: "json",
      async: false,
      success: function (data, status, jsXHR) {        
        $('.blog_wrapper').append(data.xhtml);
        $(frm).find('input[name="offset"]').val(data.offset);
        if (data.hideLoadmore === true) {
          $('.box_readmore').hide();
        }
      },
    });
  });
  /* end plus articles */
  /* begin Plus de personnalités */
  $('button[name="btn_plus_de_personnalites"]').on('click',function(){
    let frm = $(this).closest("form");    
    let offset = $(frm).find('input[name="offset"]').val();
    let dataItem = {      
      offset,      
      action: "plus_de_personnalites",
    };
    $.ajax({
      url: ajaxurl,
      type: "POST",
      data: dataItem,
      dataType: "json",
      async: false,
      success: function (data, status, jsXHR) {        
        $('.personnalites_author_part').append(data.xhtml);
        $(frm).find('input[name="offset"]').val(data.offset);
        if (data.hideLoadmore === true) {
          $('.box_readmore').hide();
        }
      },
    });
  });
  /* end Plus de personnalités */
});
