let viewScroll = 0;
let offsetTopSection = 0;
let outerHeightSection = 0;
let viewSection = 0;
let el_top = 0;
let attr_bg = "";
jQuery(document).ready(function ($) {
  /* begin box_header remove class */
  $('.box_header').removeClass('wp-block-columns');
  let box_header_child=$('.box_header').children('div');
  $.each(box_header_child,function(index,val){
    $(val).removeClass('wp-block-column');
  });
  /* end box_header remove class */
  var section_ctrl = $("section");
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
});
