$(document).ready(function () {
  $(".slider").slick({
    centerMode: false,
    centerPadding: "60px",
    prevArrow:
      '<div class="slick-prev"><img src="/blog/wp-content/themes/00_blog/images/slider_arrow.svg"></div>', //矢印部分PreviewのHTMLを変更
    nextArrow:
      '<div class="slick-next"><img src="/blog/wp-content/themes/00_blog/images/slider_arrow.svg"></div>', //矢印部分NextのHTMLを変更
    dots: true, //下部ドットナビゲーションの表示
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          centerMode: true,
          slidesToShow: 1,
        },
      },
    ],
  });
});

//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
  var scroll = $(window).scrollTop();
  if (scroll >= 1000) {
    //上から200pxスクロールしたら
    $("#page-top").removeClass("RightMove"); //#page-topについているRightMoveというクラス名を除く
    $("#page-top").addClass("LeftMove"); //#page-topについているLeftMoveというクラス名を付与
  } else {
    if ($("#page-top").hasClass("LeftMove")) {
      //すでに#page-topにLeftMoveというクラス名がついていたら
      $("#page-top").removeClass("LeftMove"); //LeftMoveというクラス名を除き
      $("#page-top").addClass("RightMove"); //RightMoveというクラス名を#page-topに付与
    }
  }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
});

// #page-topをクリックした際の設定
$("#page-top").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0, //ページトップまでスクロール
    },
    500
  ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; //リンク自体の無効化
});

// 複数のタグを囲んだリンク対応
$(".box-link").click(function () {
  location.href = $(this).attr("data-link");
});
