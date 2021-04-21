$(function(){

  $('.header-nav__link').each(function(){
     var target = $(this).attr('href');
     if(location.href.match(target)) {
       $(this).parent('.header-nav__item').addClass('current');
     } else {
       $(this).parent('.header-nav__item').removeClass('current');
     }
   });

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
 var mySwiper = new Swiper ('.swiper-container-works', {
   navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay:4000,
    },
    effect: 'cube',
 });

 var mySwiper = new Swiper ('.swiper-container-blog', {
   loop: true,
   speed:1000,
   autoplay:true,
   breakpoints: {
    350: {
      slidesPerView: 1,
      centeredSlides : false,
    },
    480: {
      slidesPerView: 2,
      centeredSlides : false,
    },
    770: {
      slidesPerView: 3,
    }
  },
   spaceBetween: 40,
   centeredSlides : true,
   pagination: '.swiper-pagination',
   paginationClickable: true,
 });


$(".form-bg").on('keydown keyup keypress change focus blur', function() {
if (jQuery(this).val() == '') {
jQuery(this).css({
backgroundColor: '#ffecda' /* 未入力時の背景色 */
});
} else {
jQuery(this).css({
backgroundColor: '#fff' /* 入力済みの背景色 */
});
}
}).change();


// スクロール表示
$('.js-fadein-first').waypoint(function(direction){
  var activePoint = $(this.element);
  if (direction === 'down') {
    activePoint.addClass('active');
  }
},{offset : '60%'});

$('.js-fadein-second').waypoint(function(direction){
  var activePoint = $(this.element);
  if (direction === 'down') {
    activePoint.addClass('active');
  }
},{offset : '70%'});

$('.js-fadein-third').waypoint(function(direction){
  var activePoint = $(this.element);
  if (direction === 'down') {
    activePoint.addClass('active');
  }
},{offset : '80%'});


});
