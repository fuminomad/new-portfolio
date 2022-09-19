
// スムーススクロール
jQuery('a[href^="#"]').click(function() {
	let header = jQuery(".l-header").innerHeight();
	let speed = 300;
	let id = jQuery(this).attr("href");
	let target = jQuery("#" == id ? "html" : id);
	let position = jQuery(target).offset().top - header;
   jQuery("html, body").animate({scrollTop: position},speed);
	
   return false;
  });
  

// topに戻るボタン

// var show = jQuery(".p-mv").offset();
// jQuery('.p-footer__btn').hide();
// jQuery(window).scroll(function() {
// if(jQuery(this).scrollTop() > show.top) {
// jQuery('.p-footer__btn').fadeIn();
// } else {
// jQuery('.p-footer__btn').fadeOut();
// 	}
// });
// jQuery('.p-footer__btn').click(function(){
// jQuery('html, body').animate({scrollTop: 0}, 500);

// });

// スムーススクロール絶対パス
jQuery(function(jQuery) {
	jQuery('a[href*=#]').click(function(){
		var header = jQuery(".l-header").innerHeight();
		var speed = 500;
		var href= jQuery(this).attr('href');
		var url = location.protocol + '//' + location.hostname + location.pathname;
		href = href.replace(url, '');
		var target = jQuery(href == '#' || href == '' ? 'html' : href);
		if( target.size() < 1 ) return true;
		var position = jQuery(target).offset().top - header;
		jQuery('html, body').animate({scrollTop:position}, speed, 'swing');
		jQuery('.p-header_nav').removeClass('open');
		return false;
	});
  });





// jQuery( window ).on( 'scroll', function() {
// if ( 100 < jQuery( this ).scrollTop() ) { 
//   jQuery( '.j-header' ).addClass( 'change-color' );
// } else {
//   jQuery( '.j-header' ).removeClass( 'change-color' );
// }
// });


// ドロワーメニュー
jQuery('.p-header_hamburger , .p-header_nav-background').on('click' , function(e){
	e.preventDefault();
	
	jQuery('.p-header_nav').toggleClass('open');
	jQuery('.p-header_nav-background').toggleClass('open');
	jQuery('.p-header_nav-close').toggleClass('open');
	jQuery('.p-header_hamburger').toggleClass('active');
	return false;
	});
	jQuery('.p-header_nav ul li a[href]').on('click', function(event) {
		jQuery('.p-header_hamburger').trigger('click');
	});

	(function($) {  

		$('.menu ,.gnav').on('click',function(){
			$('.menu__line').toggleClass('active');
			$('.p-header__inner').toggleClass('active');
			$('.p-header-logo').toggleClass('active');
			$('.p-header').toggleClass('active');
			$('.gnav').fadeToggle();
		});
		

		
		})(jQuery);
		jQuery(function($){

			$(function() {
				$('.slider').slick({
				  autoplay: true, // 自動再生ON
				  dots: true, // ドットインジケーターON
				  centerMode: true, // 両サイドに前後のスライド表示
				  centerPadding: '0px', // 左右のスライドのpadding
				  slidesToShow: 4.3, // 一度に表示するスライド数
				  responsive: [
					  {
						  breakpoint: 679, // 678px以下のサイズに適用
						  settings: {
							  
							  centerPadding: '10px', // 左右のスライドのpadding
					  slidesToShow: 1.65,
					  },
					},
				  ],
				});
			  });
		});
// 　　　　　　モーダル
jQuery(function($){
	$('.js-close-modal').on('click', function (e) {
		$('body').css('overflow-y', 'auto')
		var target = $(this).data('target')
		$(target).fadeOut(300)
	  })
	  
	  $('.js-open-modal').on('click', function (e) {
		$('body').css('overflow-y', 'hidden')
		var target = $(this).data('target')
		$(target).fadeIn(300)
	  })
	
});

jQuery(function($){
	$('.js-close-modal-2').on('click', function (e) {
		$('body').css('overflow-y', 'auto')
		var target = $(this).data('target')
		$(target).fadeOut(300)
	  })
	  
	  $('.js-open-modal-2').on('click', function (e) {
		$('body').css('overflow-y', 'hidden')
		var target = $(this).data('target')
		$(target).fadeIn(300)
	  })
});

jQuery(function($){
	$(function () {
		// タイトルをクリックすると
		$(".js-accordion-title").on("click", function () {
		  // クリックしたタイトル以外のopenクラスを外す(－から＋にする)
		  $(".js-accordion-title").not(this).removeClass("open");
		  // クリックしたタイトル以外のコンテンツを閉じる
		  $(".js-accordion-title").not(this).next().slideUp(300);
		  // クリックしたタイトルにopenクラスを付け外しして＋と－を切り替える
		  $(this).toggleClass("open");
		  // クリックしたタイトルの次の要素(コンテンツ)を開閉
		  $(this).next().slideToggle(300);
		});
	  });
});