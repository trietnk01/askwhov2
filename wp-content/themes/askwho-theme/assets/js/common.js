let viewScroll = 0;
let offsetTopSection = 0;
let outerHeightSection = 0;
let viewSection = 0;
let el_top = 0;
let attr_bg = "";
jQuery(document).ready(function ($) {
  /* begin remove attr */
  $('img').removeAttr('width');
  $('img').removeAttr('height');
  /* end remove attr */
  /* begin box_header remove class */
  let section_ctrl = $('.box_section');
  $(section_ctrl).removeClass('wp-block-columns');
  let box_header_child=$(section_ctrl).children('div');
  $.each(box_header_child,function(index,val){
    $(val).removeClass('wp-block-column');
  });
  let box_readmore_parent = $('.box_readmore');
  $(box_readmore_parent).removeClass('wp-block-columns');
  let box_readmore_child=$(box_readmore_parent).children('div');
  $.each(box_readmore_child,function(index,val){
    $(val).removeClass('wp-block-column');
  });
  let tutorial_col_parent = $('.wp_tutorial_cols');
  $(tutorial_col_parent).removeClass('wp-block-columns');
  let tutorial_col_child=$(tutorial_col_parent).children('div');
  $.each(tutorial_col_child,function(index,val){
    $(val).removeClass('wp-block-column');
  });
  /* end box_header remove class */  
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
          "background-color": attr_bg,
          transition: "200ms",
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
        console.log(data);    
        $('.blog_wrapper').append(data.xhtml);
        $(frm).find('input[name="offset"]').val(data.offset);
        if (data.hideLoadmore === true) {
          $('.box_readmore').hide();
        }
      },
    });
  });
  /* end plus articles */
});
