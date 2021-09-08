let viewScroll = 0;
let offsetTopSection = 0;
let outerHeightSection = 0;
let viewSection = 0;
let el_top = 0;
let attr_bg = "";
let section_ctrl = "";
function disableOnScroll(el) {
  if (parseInt(el.length) === 1) {
    window.onscroll = function () {
      window.scrollTo(0, 0);
    };
  } else {
    window.onscroll = function () {};
  }
}
function changeBg() {
  section_ctrl = $(".box_section");
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
      $(".box_footer").css({
        "background-color": attr_bg,
        transition: "200ms",
      });
    }
  });
}
$(window).scroll(function () {
  changeBg();
});

jQuery(document).ready(function ($) {
  section_ctrl = $(".box_section");
  $.each(section_ctrl, function (index, val) {
    var sect_bg = $(val).css("background-color");
    $(val).attr("attr_bg", sect_bg);
  });
  $(".img_no_attr img").removeAttr("width");
  $(".img_no_attr img").removeAttr("height");
  $(".navbar_href").on("click", function () {
    let i_ctrl = $(this).children(".ic");
    $(i_ctrl).toggleClass("burger close", 500);
    $(".menu_back_drop").toggleClass("menu_back_drop_scaleX1");
    var bdrop_scalex1 = document.getElementsByClassName(
      "menu_back_drop_scaleX1"
    );
    disableOnScroll(bdrop_scalex1);
  });
  $(".navbar_toggle_v2").on("click", function () {
    let i_ctrl = $(this).children(".ic");
    $(i_ctrl).toggleClass("burger close", 500);
    $(".menu_back_drop").toggleClass("menu_back_drop_scaleX1");
    var bdrop_scalex1 = document.getElementsByClassName(
      "menu_back_drop_scaleX1"
    );
    disableOnScroll(bdrop_scalex1);
  });
  changeBg();
  /* begin plus articles */
  $('button[name="btn_plus_articles"]').on("click", function () {
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
        $(".blog_wrapper").append(data.xhtml);
        $(frm).find('input[name="offset"]').val(data.offset);
        if (data.hideLoadmore === true) {
          $(".box_readmore").hide();
        }
      },
    });
  });
  /* end plus articles */
  /* begin Plus de personnalités */
  $('button[name="btn_plus_de_personnalites"]').on("click", function () {
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
        $(frm).find(".personnalites_author_part").append(data.xhtml);
        $(frm).find('input[name="offset"]').val(data.offset);
        if (data.hideLoadmore === true) {
          $(".box_readmore").hide();
        }
      },
    });
  });
  /* end Plus de personnalités */
  /* begin Plus de personnalités vmobile */
  $('button[name="personnalites_author_part_vmobile"]').on(
    "click",
    function () {
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
          $(frm).find(".personnalites_author_part").append(data.xhtml);
          $(frm).find('input[name="offset"]').val(data.offset);
          if (data.hideLoadmore === true) {
            $(".box_readmore").hide();
          }
        },
      });
    }
  );
  /* end Plus de personnalités vmobile */
  /* begin remove width iframe video youtube */
  $("iframe").removeAttr("width");
  $("iframe").removeAttr("height");
  $(".iframe_container").find("br").remove();
  /* end remove width iframe video youtube */
  /* begin masonry */
  $(".grid").masonry({
    itemSelector: ".grid-item"
  });
  /* end masonry */
});
