$(function(){

  // ヘッダーの背景変化
  var fix = $(".header");
      $(window).scroll(function(){
        if($(window).scrollTop() > 0){
          fix.addClass("active");
          fix.css("top","0");
        }else{
          fix.removeClass("active");
          fix.css("top","");
        }
      });



// ページ内スクロール
   $('a[href^="#"]').click(function(){
     var speed = 500;
     var href= $(this).attr("href");
     var target = $(href == "#" || href == "" ? 'html' : href);
     var position = target.offset().top;
     $("html, body").animate({scrollTop:position}, speed);
     return false;
   });

// ページトップへ戻るボタン表示
var target = $(".page-top");
$(window).scroll(function(){
  if($(this).scrollTop() > 500){
    target.addClass("is-show");
  }else{
    target.removeClass("is-show");
  }
});

// スライダー
 var mySwiper = new Swiper ('.swiper-container', {
   navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay:4000,
    },
    effect: 'cube',
 });


});
