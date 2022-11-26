"use strict";

// adobe fonts読み込み対策
// setTimeout(function () {
//   if (document.getElementsByTagName("html")[0].classList.contains("wf-active") != true) {
//     document.getElementsByTagName("html")[0].classList.add("loading-delay");
//   }
// }, 3000);

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  /* ハンバーガーメニュー */
  $("#js-hamburger").click(function () {
    $("body").toggleClass("is-open");
    if ($(this).attr("aria-expanded") == "false") {
      $(this).attr("aria-expanded", "true");
      $("#js-sp-nav").attr("aria-hidden", "false");
    } else {
      $(this).attr("aria-expanded", "false");
      $("#js-sp-nav").attr("aria-hidden", "true");
    }
  });

  // ハンバーガーメニューアンカーリンク
  $(".js-sp-nav-item a").click(function () {
    $("body").removeClass("is-open");
    $("#js-hamburger").attr("aria-expanded", "false");
    $("#js-sp-nav").attr("aria-hidden", "true");
  });

  // ボタンの表示設定
  var topBtn = $(".js-pagetop");
  topBtn.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });
});