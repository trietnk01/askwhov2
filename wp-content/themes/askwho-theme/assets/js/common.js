let viewScroll = 0;
let offsetTopSection = 0;
let outerHeightSection = 0;
let viewSection = 0;
let el_top = 0;
let attr_bg = "";
$(document).ready(function () {
  // let data_item = {
  //   product_id:1,
  //   action: "save_section_data_to_session",
  // };
  // $.ajax({
  //   url: ajaxurl,
  //   type: "POST",
  //   data: data_item,
  //   dataType: "json",
  //   success: function (data, status, jsXHR) {
  //     console.log(data);
  //   },
  //   beforeSend: function (jqXHR, setting) {},
  // });
  var section_ctrl = $("section");
  $(".navbar_href").on("click", function () {
    let i_ctrl = $(this).children("i");
    $(i_ctrl).toggleClass("fa-bars fa-times", 500);
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
        $(".navbar.navbar-main").css({
          "background-color": attr_bg,
          transition: "200ms",
        });
        $(".navbar-header").css({
          "background-color": attr_bg,
          transition: "200ms",
        });
        $(".nav.navbar-nav").css({
          "background-color": attr_bg,
          transition: "200ms",
        });
      }
    });
  });
});
